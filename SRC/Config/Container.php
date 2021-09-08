<?php

use GuzzleHttp\Psr7\ServerRequest;
use GuzzleHttp\Psr7\Response;

return [


    'resquest' => function () {

        return ServerRequest::fromGlobals(
            $_SERVER,
            $_GET,
            $_POST,
            $_COOKIE,
            $_FILES
        );
    },
    'response' => function () {
        return new Response();
    }

];
