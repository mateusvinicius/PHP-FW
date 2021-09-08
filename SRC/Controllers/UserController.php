<?php

namespace APP\Controllers;

use APP\Annotations\RouteAnnotations;
use GuzzleHttp\Psr7\ServerRequest as Request;
use GuzzleHttp\Psr7\Response;

class UserController
{


    #[RouteAnnotations(metodo: ["GET"], path: "/")]
    public function index(Request $request, Response $response)
    {

        echo "oioi";
    }
}
