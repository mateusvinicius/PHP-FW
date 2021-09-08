<?php 

include_once"./vendor/autoload.php";

use APP\Controllers\UserController;
use APP\Router\RouteTrait;

$array = RouteTrait::Resolver(UserController::class);





