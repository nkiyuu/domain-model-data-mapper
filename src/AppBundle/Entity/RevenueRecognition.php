<?php

namespace AppBundle\Entity;

class RevenueRecognition
{
    private $amount;
    private $date;

    public function revenueRecognition($amount, $date)
    {
        $this->amount = $amount;
        $this->data = $date;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    private function isRecognizableBy($asof)
    {
        return $asOf.after($this->date) || $asOf.equals($this->date);
    }
}
