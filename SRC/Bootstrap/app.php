<?php

namespace APP\Bootstrap;

use DI\ContainerBuilder;

class App
{


    public function __construct()
    {
        $conteiner = new ContainerBuilder();
        $conteiner->addDefinitions(__DIR__ . '/../Config/Container.php');
        $container = $conteiner->build();
    }
}
