<?php
include('config.php');
include('Vendor/renderer.php');
include('Vendor/database.php');

$oldal = empty($_GET['url']) ? null : $_GET['url'];
if ($oldal === 'index.php' || $oldal === null) {
    $oldal = "home";
}

if (!in_array($oldal, array_keys($routes))) {
    $oldal = 'home';
}

require_once('Controller/' . $oldal . 'Controller.php');
require_once('Model/' . $oldal . 'Model.php');

$controllerName = $oldal . 'Controller';
$controller = new $controllerName();

$header = render('View/header.php', $fejlec);
$menu = render('View/menu.php', ['routes' => $routes, 'keres' => $oldal]);
$content = $controller->render();
$footer = render('View/footer.php', $lablec);

echo $header;
echo $menu;
echo $content;
echo $footer;