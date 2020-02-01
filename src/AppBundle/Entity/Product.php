<?php

namespace AppBundle\Entity;

class Product
{
    private $name;
    private $recognitionStrategy;
    
    public function __construct($name, $recognitionStrategy) 
    {
        $this->name = $name;
        $this->recognitionStrategy = $recognitionStrategy;
    }

    public static function newWordProcessor($name)
    {
        return new Product($name, new CompleteRecognitionStrategy());
    }

    public static function newSpreadsheet($name)
    {
        return new Product($name, new ThreeWayRecognitionStrategy(60, 90));
    }

    public static function newDatabase($name)
    {
        return new Product($name, new ThreeWayRecognitionStrategy(30, 60));
    }
}
