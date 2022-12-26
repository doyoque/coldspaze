<?php

namespace Doyoque\Coldspaze\Cases;

class VowelsRemoval
{
    protected $strings;
    protected $vowels = 'aiueoAIUEO';

    public function __construct($strings)
    {
        $this->strings = $strings;
    }

    public function removeVowels(): string
    {
        $result = '';
        for ($i = 0; $i < strlen($this->strings); $i++) {
            if (strpos($this->vowels, $this->strings[$i]) === false) {
                $result .= $this->strings[$i];
            }
        }

        return $result;
    }
}
