<?php

namespace Doyoque\Coldspaze\Cases;

class EvenNumber {
    protected $arrayOfNumber;

    public function __construct($arrNumber) 
    {
        $this->arrayOfNumber = $arrNumber;
    }

    public function sumEvenNumber(): int
    {
        $sum = 0;
        foreach ($this->arrayOfNumber as $number) {
            if ($number % 2 == 0) {
                $sum += $number;
            }
        }
        return $sum;
    }
}
