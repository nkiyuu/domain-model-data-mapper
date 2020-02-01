<?php

namespace AppBundle\Service;

class CompleteRecognitionStrategy implements RecognitionStrategy
{
    public function calculateRevenueRecognitions($contract)
    {
        $contract.addRevenueRecognition(new RevenueRecognitions($contract.getRevenue(), $contract.getWhenSigned()));
    }
}