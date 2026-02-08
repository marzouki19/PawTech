<?php

namespace App\Controller\Eshop;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/dashboard/eshop/produits')]
class ProduitController extends AbstractController
{
    private function uploadImage($imageFile, $oldImage = null)
    {
        if ($imageFile) {
            // Génère un nom unique pour le fichier
            $newFilename = uniqid().'.'.$imageFile->guessExtension();
            
            // Déplace le fichier dans le répertoire d'upload
            $imageFile->move(
                $this->getParameter('kernel.project_dir').'/public/uploads/images',
                $newFilename
            );
            
            // Supprime l'ancienne image si elle existe et si elle est différente de la nouvelle
            if ($oldImage && $oldImage !== $newFilename) {
                $oldImagePath = $this->getParameter('kernel.project_dir').'/public/uploads/images/'.$oldImage;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            
            return $newFilename;
        }
        
        return $oldImage; // Garde l'ancienne image si aucune nouvelle n'est fournie
    }

    private function deleteImage($imageName)
    {
        if ($imageName) {
            $imagePath = $this->getParameter('kernel.project_dir').'/public/uploads/images/'.$imageName;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    }

    #[Route('', name: 'app_eshop_produit_index', methods: ['GET'])]
    public function index(Request $request, ProduitRepository $produitRepository, CategorieRepository $categorieRepository): Response
    {
        // Récupérer les filtres depuis la requête
        $search = $request->query->get('search', '');
        $category = $request->query->get('category', '');
        $stockStatus = $request->query->get('stock_status', '');
        $priceRange = $request->query->get('price_range', '');
        $sort = $request->query->get('sort', 'id_desc');
        $page = max(1, (int) $request->query->get('page', 1));
        $perPage = 20;

        // Créer le query builder de base
        $qb = $produitRepository->createQueryBuilder('p')
            ->leftJoin('p.categorie', 'c');

        // Appliquer les filtres
        if ($search) {
            $qb->andWhere('p.nom LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($category && $category !== 'all') {
            $qb->andWhere('c.id = :categoryId')
               ->setParameter('categoryId', $category);
        }

        // Filtrer par statut de stock
        if ($stockStatus && $stockStatus !== 'all') {
            switch ($stockStatus) {
                case 'in_stock':
                    $qb->andWhere('p.quantite > 10');
                    break;
                case 'low_stock':
                    $qb->andWhere('p.quantite <= 10 AND p.quantite > 0');
                    break;
                case 'out_of_stock':
                    $qb->andWhere('p.quantite = 0');
                    break;
            }
        }

        // Filtrer par fourchette de prix
        if ($priceRange && $priceRange !== 'all') {
            switch ($priceRange) {
                case '0-50':
                    $qb->andWhere('p.prix BETWEEN 0 AND 50');
                    break;
                case '50-100':
                    $qb->andWhere('p.prix BETWEEN 50 AND 100');
                    break;
                case '100-200':
                    $qb->andWhere('p.prix BETWEEN 100 AND 200');
                    break;
                case '200+':
                    $qb->andWhere('p.prix >= 200');
                    break;
            }
        }

        // Appliquer le tri
        switch ($sort) {
            case 'id_asc':
                $qb->orderBy('p.id', 'ASC');
                break;
            case 'name_asc':
                $qb->orderBy('p.nom', 'ASC');
                break;
            case 'name_desc':
                $qb->orderBy('p.nom', 'DESC');
                break;
            case 'price_asc':
                $qb->orderBy('p.prix', 'ASC');
                break;
            case 'price_desc':
                $qb->orderBy('p.prix', 'DESC');
                break;
            default:
                $qb->orderBy('p.id', 'DESC');
        }

        // Pagination
        $totalQuery = clone $qb;
        $total = $totalQuery->select('COUNT(p.id)')->getQuery()->getSingleScalarResult();
        
        $offset = ($page - 1) * $perPage;
        $qb->setFirstResult($offset)
           ->setMaxResults($perPage);
        
        $produits = $qb->getQuery()->getResult();
        $totalPages = ceil($total / $perPage);

        // Récupérer toutes les catégories pour le filtre
        $categories_for_filter = $categorieRepository->findAll();

        // Préparer les données pour le tableau
        $columns = ['ID', 'Name', 'Price', 'Image', 'Category', 'Stock', 'Actions'];
        $rows = [];
        foreach ($produits as $p) {
            $qte = $p->getQuantite() ?? '-';
            $alerte = ($p->getSeuilAlert() !== null && $p->getSeuilAlert() > 0 && $p->getQuantite() !== null && $p->getQuantite() <= $p->getSeuilAlert()) ? ' ⚠' : '';
            
            // Afficher l'image dans le tableau
            $imageDisplay = '-';
            if ($p->getImage()) {
                $imageUrl = $this->generateUrl('app_uploads_images', ['filename' => $p->getImage()]);
                $imageDisplay = '<img src="' . $imageUrl . '" alt="' . $p->getNom() . '" class="h-8 w-8 object-cover rounded">';
            }
            
            $rows[] = [
                $p->getId(),
                $p->getNom(),
                number_format((float) $p->getPrix(), 2, ',', ' ') . ' TND',
                $imageDisplay,
                ($p->getCategorie() ? $p->getCategorie()->getNom() : '-'),
                ($qte . $alerte),
                $this->renderView('eshop/produit/_actions.html.twig', ['produit' => $p]),
            ];
        }

        return $this->render('eshop/produit/index.html.twig', [
            'active' => 'eshop_produits',
            'page_title' => 'Eshop - Products',
            'entity_name' => 'Product',
            'columns' => $columns,
            'rows' => $rows,
            'produits' => $produits,
            'categories_for_filter' => $categories_for_filter,
            'total_records' => $total,
            'per_page' => $perPage,
            'page' => $page,
            'total_pages' => $totalPages,
            'current_filters' => [
                'search' => $search,
                'category' => $category,
                'stock_status' => $stockStatus,
                'price_range' => $priceRange,
                'sort' => $sort,
            ]
        ]);
    }

    #[Route('/new', name: 'app_eshop_produit_new', methods: ['GET','POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        // Ajax GET -> fragment
        if ($request->isXmlHttpRequest() && !$form->isSubmitted()) {
            return $this->render('eshop/produit/_form_content.html.twig', [
                'page_title' => 'New product',
                'produit' => $produit,
                'form' => $form->createView(),
                'form_action' => $this->generateUrl('app_eshop_produit_new'),
                'submit_label' => 'Add',
            ]);
        }

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                try {
                    // Gérer l'upload de l'image
                    $imageFile = $form->get('image')->getData();
                    if ($imageFile) {
                        $newFilename = $this->uploadImage($imageFile);
                        $produit->setImage($newFilename);
                    }
                    
                    $em->persist($produit);
                    $em->flush();
                    
                    if ($request->isXmlHttpRequest()) {
                        return $this->json([
                            'success' => true, 
                            'message' => 'Product "' . $produit->getNom() . '" created successfully!',
                            'redirect' => $this->generateUrl('app_eshop_produit_index')
                        ]);
                    }
                    
                    $this->addFlash('success', 'Product "' . $produit->getNom() . '" created successfully!');
                    return $this->redirectToRoute('app_eshop_produit_index');
                } catch (\Exception $e) {
                    if ($request->isXmlHttpRequest()) {
                        return $this->json([
                            'success' => false,
                            'message' => 'Error: ' . $e->getMessage()
                        ], 500);
                    }
                    
                    $this->addFlash('error', 'Error creating product: ' . $e->getMessage());
                }
            } else {
                // Pour AJAX : retourner le formulaire avec les erreurs
                if ($request->isXmlHttpRequest()) {
                    return $this->render('eshop/produit/_form_content.html.twig', [
                        'page_title' => 'New product',
                        'produit' => $produit,
                        'form' => $form->createView(),
                        'form_action' => $this->generateUrl('app_eshop_produit_new'),
                        'submit_label' => 'Add',
                    ]);
                }
                
                // Pour non-AJAX : afficher le formulaire avec erreurs
                return $this->render('eshop/produit/form.html.twig', [
                    'active' => 'eshop_produits',
                    'page_title' => 'New product',
                    'produit' => $produit,
                    'form' => $form->createView(),
                    'submit_label' => 'Add',
                ]);
            }
        }
        
        // Non-AJAX GET request (fallback)
        return $this->render('eshop/produit/form.html.twig', [
            'active' => 'eshop_produits',
            'page_title' => 'New product',
            'produit' => $produit,
            'form' => $form->createView(),
            'submit_label' => 'Add',
        ]);
    }

    #[Route('/{id}', name: 'app_eshop_produit_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(Request $request, Produit $produit): Response
    {
        if ($request->isXmlHttpRequest()) {
            return $this->render('eshop/produit/_show_content.html.twig', [
                'page_title' => 'Product: ' . $produit->getNom(),
                'produit' => $produit,
            ]);
        }

        return $this->render('eshop/produit/show.html.twig', [
            'active' => 'eshop_produits',
            'page_title' => 'Product: ' . $produit->getNom(),
            'produit' => $produit,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_eshop_produit_edit', requirements: ['id' => '\d+'], methods: ['GET','POST'])]
    public function edit(Request $request, Produit $produit, EntityManagerInterface $em): Response
    {
        // Sauvegarder l'ancienne image avant de gérer le formulaire
        $oldImage = $produit->getImage();
        
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        // Ajax GET -> fragment
        if ($request->isXmlHttpRequest() && !$form->isSubmitted()) {
            return $this->render('eshop/produit/_form_content.html.twig', [
                'page_title' => 'Modify product',
                'produit' => $produit,
                'form' => $form->createView(),
                'form_action' => $this->generateUrl('app_eshop_produit_edit', ['id' => $produit->getId()]),
                'submit_label' => 'Save',
            ]);
        }

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                try {
                    // Gérer l'upload de l'image
                    $imageFile = $form->get('image')->getData();
                    if ($imageFile) {
                        $newFilename = $this->uploadImage($imageFile, $oldImage);
                        $produit->setImage($newFilename);
                    }
                    
                    $em->flush();
                    
                    if ($request->isXmlHttpRequest()) {
                        return $this->json([
                            'success' => true, 
                            'message' => 'Product "' . $produit->getNom() . '" updated successfully!',
                            'redirect' => $this->generateUrl('app_eshop_produit_index')
                        ]);
                    }
                    
                    $this->addFlash('success', 'Product "' . $produit->getNom() . '" updated successfully!');
                    return $this->redirectToRoute('app_eshop_produit_index');
                } catch (\Exception $e) {
                    if ($request->isXmlHttpRequest()) {
                        return $this->json([
                            'success' => false,
                            'message' => 'Error: ' . $e->getMessage()
                        ], 500);
                    }
                    
                    $this->addFlash('error', 'Error updating product: ' . $e->getMessage());
                }
            } else {
                // Pour AJAX : retourner le formulaire avec les erreurs
                if ($request->isXmlHttpRequest()) {
                    return $this->render('eshop/produit/_form_content.html.twig', [
                        'page_title' => 'Modify product',
                        'produit' => $produit,
                        'form' => $form->createView(),
                        'form_action' => $this->generateUrl('app_eshop_produit_edit', ['id' => $produit->getId()]),
                        'submit_label' => 'Save',
                    ]);
                }
                
                // Pour non-AJAX : afficher le formulaire avec erreurs
                return $this->render('eshop/produit/form.html.twig', [
                    'active' => 'eshop_produits',
                    'page_title' => 'Modify product',
                    'produit' => $produit,
                    'form' => $form->createView(),
                    'submit_label' => 'Save',
                ]);
            }
        }

        // Non-AJAX GET request (fallback)
        return $this->render('eshop/produit/form.html.twig', [
            'active' => 'eshop_produits',
            'page_title' => 'Modify product',
            'produit' => $produit,
            'form' => $form->createView(),
            'submit_label' => 'Save',
        ]);
    }

    #[Route('/{id}/delete', name: 'app_eshop_produit_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(Request $request, Produit $produit, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $produit->getId(), (string) $request->request->get('_token'))) {
            try {
                // Supprimer l'image associée
                $this->deleteImage($produit->getImage());
                
                $em->remove($produit);
                $em->flush();
                $this->addFlash('success', 'Product "' . $produit->getNom() . '" deleted successfully!');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Error deleting product: ' . $e->getMessage());
            }
        }
        return $this->redirectToRoute('app_eshop_produit_index');
    }

    #[Route('/{id}/buy', name: 'app_eshop_produit_buy', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function buy(Request $request, Produit $produit, EntityManagerInterface $em): Response
    {
        if (!$this->isCsrfTokenValid('buy_' . $produit->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Invalid security token');
            return $this->redirectToRoute('app_shop');
        }

        $currentStock = $produit->getQuantite() ?? 0;
        
        if ($currentStock <= 0) {
            $this->addFlash('error', 'Sorry, this product is out of stock!');
            return $this->redirectToRoute('app_shop');
        }

        try {
            $produit->setQuantite($currentStock - 1);
            $em->flush();
            $this->addFlash('success', 'Your order has been purchased successfully!');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Error processing purchase: ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_shop');
    }
     #[Route('/uploads/images/{filename}', name: 'app_uploads_images')]
    public function serveImage(string $filename): Response
    {
        // Chemin complet vers l'image
        $projectDir = $this->getParameter('kernel.project_dir');
        $imagePath = $projectDir . '/public/uploads/images/' . $filename;
        
        // Vérifier si le fichier existe
        if (!file_exists($imagePath)) {
            throw $this->createNotFoundException('Image not found: ' . $filename);
        }
        
        // Déterminer le type MIME
        $mimeType = mime_content_type($imagePath);
        if (!$mimeType) {
            $mimeType = 'application/octet-stream';
        }
        
        // Retourner la réponse avec le fichier
        $response = new BinaryFileResponse($imagePath);
        $response->headers->set('Content-Type', $mimeType);
        $response->headers->set('Content-Disposition', 'inline; filename="' . $filename . '"');
        
        return $response;
    }
}