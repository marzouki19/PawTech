<?php

namespace App\Form;

use App\Entity\IoTDevice;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IoTDeviceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Device Name',
                'attr' => ['class' => 'form-control', 'placeholder' => 'e.g., Temperature Sensor 1'],
            ])
            ->add('deviceType', ChoiceType::class, [
                'label' => 'Device Type',
                'choices' => [
                    'ESP32' => 'ESP32',
                    'ESP8266' => 'ESP8266',
                    'Arduino' => 'Arduino',
                    'Raspberry Pi' => 'Raspberry Pi',
                    'Custom' => 'Custom',
                ],
                'attr' => ['class' => 'form-control'],
            ])
            ->add('deviceId', TextType::class, [
                'label' => 'Device ID (Unique)',
                'attr' => ['class' => 'form-control', 'placeholder' => 'e.g., ESP32_001'],
            ])
            ->add('firmwareVersion', TextType::class, [
                'label' => 'Firmware Version',
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => '1.0.0'],
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Status',
                'choices' => [
                    'Active' => 'active',
                    'Inactive' => 'inactive',
                    'Maintenance' => 'maintenance',
                    'Error' => 'error',
                ],
                'attr' => ['class' => 'form-control'],
            ])
            ->add('wifiSsid', TextType::class, [
                'label' => 'WiFi SSID',
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'Your WiFi Network'],
            ])
            ->add('wifiPassword', PasswordType::class, [
                'label' => 'WiFi Password',
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'WiFi Password'],
            ])
            ->add('apiServerUrl', TextType::class, [
                'label' => 'API Server URL',
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'http://192.168.1.117:8000'],
            ])
            ->add('apiEndpoint', TextType::class, [
                'label' => 'API Endpoint',
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => '/admin/api/iot/data'],
            ])
            ->add('ultrasonicEnabled', CheckboxType::class, [
                'label' => 'Enable Ultrasonic Sensor',
                'mapped' => false,
                'required' => false,
            ])
            ->add('ultrasonicTriggerPin', IntegerType::class, [
                'label' => 'Ultrasonic Trigger Pin',
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'e.g., 5'],
            ])
            ->add('ultrasonicEchoPin', IntegerType::class, [
                'label' => 'Ultrasonic Echo Pin',
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'e.g., 18'],
            ])
            ->add('ultrasonicIntervalMs', IntegerType::class, [
                'label' => 'Ultrasonic Read Interval (ms)',
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'e.g., 1000'],
            ])
            ->add('ultrasonicAlertThresholdCm', IntegerType::class, [
                'label' => 'Near-Object Threshold (cm)',
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'e.g., 40'],
            ])
            ->add('reportingInterval', IntegerType::class, [
                'label' => 'Reporting Interval (seconds)',
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => '60'],
            ])
            ->add('heartbeatInterval', IntegerType::class, [
                'label' => 'Heartbeat Interval (seconds)',
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => '300'],
            ]);

        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event): void {
            $device = $event->getData();
            if (!$device instanceof IoTDevice) {
                return;
            }

            $config = $device->getSensorConfig();
            $ultrasonic = is_array($config) && isset($config['ultrasonic']) && is_array($config['ultrasonic'])
                ? $config['ultrasonic']
                : [];

            $form = $event->getForm();
            $form->get('ultrasonicEnabled')->setData((bool) ($ultrasonic['enabled'] ?? false));
            $form->get('ultrasonicTriggerPin')->setData(isset($ultrasonic['trigger_pin']) ? (int) $ultrasonic['trigger_pin'] : null);
            $form->get('ultrasonicEchoPin')->setData(isset($ultrasonic['echo_pin']) ? (int) $ultrasonic['echo_pin'] : null);
            $form->get('ultrasonicIntervalMs')->setData(isset($ultrasonic['interval_ms']) ? (int) $ultrasonic['interval_ms'] : null);
            $form->get('ultrasonicAlertThresholdCm')->setData(isset($ultrasonic['near_threshold_cm']) ? (int) $ultrasonic['near_threshold_cm'] : null);
        });

        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event): void {
            $device = $event->getData();
            if (!$device instanceof IoTDevice) {
                return;
            }

            $form = $event->getForm();
            $enabled = (bool) $form->get('ultrasonicEnabled')->getData();
            $triggerPin = $form->get('ultrasonicTriggerPin')->getData();
            $echoPin = $form->get('ultrasonicEchoPin')->getData();
            $intervalMs = $form->get('ultrasonicIntervalMs')->getData();
            $thresholdCm = $form->get('ultrasonicAlertThresholdCm')->getData();

            $config = $device->getSensorConfig();
            if (!is_array($config)) {
                $config = [];
            }

            if ($enabled || $triggerPin !== null || $echoPin !== null || $intervalMs !== null || $thresholdCm !== null) {
                $ultrasonicConfig = [
                    'enabled' => $enabled,
                ];
                if ($triggerPin !== null) {
                    $ultrasonicConfig['trigger_pin'] = (int) $triggerPin;
                }
                if ($echoPin !== null) {
                    $ultrasonicConfig['echo_pin'] = (int) $echoPin;
                }
                if ($intervalMs !== null) {
                    $ultrasonicConfig['interval_ms'] = (int) $intervalMs;
                }
                if ($thresholdCm !== null) {
                    $ultrasonicConfig['near_threshold_cm'] = (int) $thresholdCm;
                }

                $config['ultrasonic'] = $ultrasonicConfig;
            } else {
                unset($config['ultrasonic']);
            }

            $device->setSensorConfig(!empty($config) ? $config : null);
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => IoTDevice::class,
        ]);
    }
}
