<?php

use Infrastructure\Exception\MainException;
use Config\Router;

require 'autoloader.php';

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
        $reflectionClass = new ReflectionClass($controller);

        return 'App\Request\\' . $reflectionClass->getShortName() . 'Request';
    }

    return null;
}