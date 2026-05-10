# PawTech

Projet collaboratif PawTech — gestion des utilisateurs, stations d'observation, événements, état de santé, chiens et e-shop.

## Équipe & Branches

| Membre  | Branche                          | Domaine                    |
|---------|-----------------------------------|----------------------------|
| Amine   | `amine/gestion-users`             | Gestion Utilisateurs       |
| Saber   | `saber/gestion-stations-observation` | Gestion Stations d'Observation |
| Nesrine | `nesrine/gestion-evenements`      | Gestion Événements         |
| Nour    | `nour/gestion-etat-de-sante`      | Gestion État de Santé      |
| Khalil  | `khalil/gestion-chiens`           | Gestion Chiens             |
| Ahmed   | `ahmed/gestion-e-shop`            | Gestion E-Shop             |

## Démarrage

1. Cloner le dépôt : `git clone <repo-url>`
2. Choisir la branche de travail : `git checkout <nom-branche>`
3. Créer une branche locale à partir de la branche cible si besoin.

## Structure du projet

À définir selon les modules (backend, frontend, API, etc.).

## Contribution

Chaque membre travaille sur sa branche dédiée. Les fusions vers `main` se font après revue.


# 🐾 PawTech Web (Symfony) - Module État de Santé

Bienvenue dans le dépôt web de **PawTech**, développé avec le framework **Symfony**. 
Cette branche (`etat_de_sante`) est dédiée à la gestion de la santé animale, permettant aux vétérinaires et aux administrateurs de gérer les consultations, les suivis et d'exploiter des outils d'Intelligence Artificielle directement depuis leur navigateur.

---

## ✨ Fonctionnalités Principales (Module `etat_de_sante`)

*   🩺 **Gestion Web des Consultations et Suivis :**
    *   Tableaux de bord (Dashboards) intuitifs pour visualiser l'historique de santé des animaux.
    *   Formulaires Symfony (Forms) pour l'ajout, l'édition et la suppression de fiches de consultation et de suivi médical.
*   🧠 **Intégration d'IA pour le Diagnostic :**
    *   Communication avec le moteur Python (modèle KNN / API Groq) pour analyser les symptômes saisis via l'interface web et fournir des prédictions médicales.
*   🦴 **Visualisation 3D Interactive :**
    *   Intégration de modèles anatomiques 3D (via des iframes Sketchfab) directement dans les vues Twig pour une expérience web immersive.
*   📧 **Notifications Automatisées :**
    *   Envoi de SMS de rappel de rendez-vous (via l'API **Twilio**).
    *   Envoi de bilans de santé par email en utilisant **Symfony Mailer**.

---

## 🛠️ Technologies et Architecture

*   **Framework :** Symfony (PHP 8.x)
*   **Base de données :** MySQL / PostgreSQL (via **Doctrine ORM**)
*   **Moteur de Templates :** Twig
*   **Gestionnaire de Dépendances :** Composer
*   **Intégrations :** API Twilio, Symfony Mailer, API Groq/Modèles Python

---

## 🚀 Installation et Configuration en Local

### Prérequis
*   [PHP 8.1 ou supérieur](https://www.php.net/downloads.php)
*   [Composer](https://getcomposer.org/download/)
*   [Symfony CLI](https://symfony.com/download) (Recommandé)
*   Un serveur de base de données (MySQL, MariaDB ou PostgreSQL)

### Étapes d'installation

1.  **Cloner le dépôt et changer de branche :**
    ```bash
    git clone https://github.com/marzouki19/PawTech.git
    cd PawTech
    git checkout etat_de_sante
    ```

2.  **Installer les dépendances PHP :**
    ```bash
    composer install
    ```

3.  **Configurer l'environnement :**
    Copiez le fichier d'environnement par défaut et ajoutez vos propres clés :
    ```bash
    cp .env .env.local
    ```
    Ouvrez `.env.local` et configurez :
    *   La connexion à la base de données (`DATABASE_URL`)
    *   Les identifiants Twilio (pour les SMS)
    *   Le DSN pour Symfony Mailer (pour les emails)
    *   *(Attention : Ne jamais commiter le fichier `.env.local` !)*

4.  **Créer la base de données et exécuter les migrations Doctrine :**
    ```bash
    php bin/console doctrine:database:create
    php bin/console doctrine:migrations:migrate
    ```

5.  **Lancer le serveur de développement Symfony :**
    ```bash
    symfony server:start
    ```
    L'application sera accessible à l'adresse : `http://127.0.0.1:8000`

---

## 📂 Architecture Clé (Pour les contributeurs)

*   `src/Controller/` : Contient les contrôleurs liés aux consultations et suivis (`ConsultationController`, `SuiviController`).
*   `src/Entity/` : Modèles de données Doctrine (`Consultation`, `Suivi`, `Veterinaire`).
*   `src/Form/` : Classes générant les formulaires d'ajout/modification.
*   `templates/` : Vues Twig organisées par entité (ex: `templates/consultation/index.html.twig`).

---
*PawTech - L'innovation technologique au service de la médecine vétérinaire.*

