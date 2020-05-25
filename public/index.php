<?php
// CECI EST LE FRONTCONTROLLER
require_once __DIR__."/../vendor/autoload.php";
require_once __DIR__."/../app/controllers/MainController.php";
require_once __DIR__."/../app/utils/DBData.php";
require_once __DIR__."/../app/models/Pokemon.php";
require_once __DIR__."/../app/models/Type.php";

// j'instancie mon routeur
$router = new AltoRouter();

// J'éduque le routeur
$router->setBasePath($_SERVER['BASE_URI']);

// routes existantes
$router->map('GET', '/', 'MainController::pokemon'); 
$router->map('GET', '/pokemondetails/[i:i]', 'MainController::pokemondetails');
$router->map('GET', '/types/[i:i]', 'MainController::pokemontype');
$router->map('GET', '/alltypes', 'MainController::allTypes');  // a modifier ! 

$match = $router->match() ; 

$dispatcher = new Dispatcher($match, 'MainController::error');

$dispatcher->dispatch();
?>
