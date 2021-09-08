<?php
namespace APP\Annotations;
use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
Class RouteAnnotations{

    public function __construct(public array $metodo,public string $path)
    {
        
    }
}