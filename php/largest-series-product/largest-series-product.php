<?php

class Series
{
    private $serie;

    public function __construct($serie)
    {
        $this->serie = (string) $serie;
    }

    public function largestProduct($length) : int
    {
        if (strlen($this->serie) === 0 && $length === 0) {
            return 1;
        }
      
        $this->validate($length);

        $n = strlen($this->serie) - $length + 1;
        $products = [];
        $p = 1;
        for ($i=0; $i<$n; $i++) {
            for ($j=$i; $j<($length + $i); $j++) {
                $p *= (int) $this->serie[$j];
            }
            $products[] = $p;
            $p = 1;
        }
        return max($products);
    }

    private function validate($sequenceLength) : void
    {
        $serieLength = strlen($this->serie);
        $notValid = !is_numeric($this->serie) || $sequenceLength < 0  || $serieLength < $sequenceLength;
      
        if ($notValid) {
            throw new InvalidArgumentException();
        }
    }
}
