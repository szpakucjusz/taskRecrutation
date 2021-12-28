<?php

use App\Exception\MainException;
use Config\Router;

ini_set ('display_errors', 1);
ini_set ('display_startup_errors', 1);
error_reporting (E_ALL);
require 'functions.php';

$controller = Router::fitUrl();

$method = new ReflectionMethod($controller, '__invoke');
$controllerRequestName = prepareControllerRequestName($controller, $method->getParameters());

try {
    echo $controllerRequestName ? $controller->__invoke(new $controllerRequestName) : $controller->__invoke();
} catch (MainException $exception) {
    echo $exception->getMessage();
}


/** @param ReflectionParameter[] $parameters */
function prepareControllerRequestName(object $controller, array $parameters): ?string
{
    if (is_countable($parameters) && 1 === count($parameters) && 'request' === $parameters[0]->getName()) {
        $reflect = new ReflectionClass($controller);
        return 'App\Request\\' . $reflect->getShortName() . 'Request';
    }

    return null;
}