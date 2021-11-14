<?php

$fejlec = array(
    'cim' => 'Vízvezetékszerelő mesterek',
    'kepforras' => 'viz2.jpg',
    'kepalt' => 'VIZ1',
    'cim' => 'Vízvezetékszerelő mesterek',
    'motto' => '"Ha igazi szakemberre lenne szüksége"'
);

$lablec = array(
    'copyright' => ''.date("Y").' Vízvezetékszerelő mesterek – MINDEN JOG FENNTARTVA.',
);

$routes = [
    'home' => [
        'title' => 'Kezdőoldal',
        'visibleLoggedIn' => true,
        'visibleLoggedOut' => true,
    ],
    'kapcsolat' => [
        'title' => 'Kapcsolat',
        'visibleLoggedIn' => true,
        'visibleLoggedOut' => true,
    ],
    'uzenetek' => [
        'title' => 'Üzenetek',
        'visibleLoggedIn' => true,
        'visibleLoggedOut' => true,
    ],
    'belep' => [
        'title' => 'Belépés',
        'visibleLoggedIn' => false,
        'visibleLoggedOut' => false,
    ],
    'belepes' => [
        'title' => 'Belépés',
        'visibleLoggedIn' => false,
        'visibleLoggedOut' => true,
    ],
    'kilepes' => [
        'title' => 'Kilépés',
        'visibleLoggedIn' => true,
        'visibleLoggedOut' => false,
    ],
    'regisztracio' => [
        'title' => 'Kapcsolat',
        'visibleLoggedIn' => false,
        'visibleLoggedOut' => false,
    ],
];

