<?php

namespace AppBundle\Entity;

class Contract
{
    private $revenueRecognitions;
    private $product;
    private $revenue;
    private $whenSigned;
    private $id;

    public function __construct($product, $money, $revenue, $whenSigned)
    {
        $this->product = $product;
        $this->revenue = $revenue;
        $this->whenSigned = $whenSigned;
    }

    public function recognizedRevenue($asOf)
    {
        $result = 0;

        foreach ($this->$revenueRecognitions as $revenueRecognition) {
            $result += $revenueRecognition.getAmount();
        }

        return $result;
    }
}
