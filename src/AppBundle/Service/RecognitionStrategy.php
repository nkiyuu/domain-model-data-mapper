<?php

namespace AppBundle\Service;

interface RecognitionStrategy
{
    public function calculateRevenueRecognitions($contract);
}
