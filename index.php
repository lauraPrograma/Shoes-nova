<?php

require __DIR__ . "/vendor/autoload.php";

//echo "hello world 😊";
use CoffeeCode\Router\Router;

ob_start();


$route = new Router(url(), ":");

$route->namespace("Source\App");

$route->group(null);

$route->get("/", "Web:home");
$route->get("/sobre", "Web:about");
$route->get("/produto","Web:product");
$route->get("/compras","Web:shopping");
$route->get("/cadastro","Web:register");
$route->get("/entrar","Web:login");
$route->get("/faq","Web:faq");
$route->get("/loja","Web:store");









$route->get("/ops/{errcode}", "Web:error");

$route->group("/app");
$route->get("/", "App:home");

$route->group(null);

$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();
