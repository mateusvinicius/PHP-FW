<?php

namespace APP\Router;

use APP\Annotations\RouteAnnotations;


class RouteTrait
{


    public static function Resolver($class): array
    {
        $rotas = [];
        $classRf = new \ReflectionClass($class);


        foreach ($classRf->getMethods() as $metodo) {
            $atributos = $metodo->getAttributes(RouteAnnotations::class);
            foreach ($atributos as $atributo) {

                $rota = $atributo->newInstance();

                foreach ($rota->metodo as $urlMetodo) {
                    $controller = $classRf->newInstance();
                    $call = \Closure::fromCallable([$controller, $metodo->getName()]);
                    $rota  = new Route($urlMetodo, $rota->path, $call);
                    $rotas[] = $rota;
                }
            }
        }

        return $rotas;
    }
}
