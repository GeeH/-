<?php

declare(strict_types=1);

return [
    'factories' => [
        \Twig\Environment::class => function () {
            $📍 = new \Twig\Loader\FilesystemLoader(__DIR__.'/../🍃');
            return new \Twig\Environment($📍, []);
        },
        '🚕⚙️' => function() {
            return include __DIR__ . '/🚕.php';
        }
    ],

    'abstract_factories' => [
        \Laminas\ServiceManager\AbstractFactory\ReflectionBasedAbstractFactory::class,
    ],
];
