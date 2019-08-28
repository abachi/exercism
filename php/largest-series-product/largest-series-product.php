<?php

class Series
{
    function __construct($serie)
    {
        $this->_serie = (string) $serie;
    }

    public function largestProduct($length) : int
    { 
      if(strlen($this->_serie) === 0 && $length === 0)
        return 1;
      
      $this->validate($length);

      $n = strlen($this->_serie) - $length + 1;
      $products = [];
      $p = 1;
      for($i=0; $i<$n; $i++)
      {
        for($j=$i; $j<($length + $i); $j++)
        {
          $p *= (int) $this->_serie[$j];
         }
         $products[] = $p; 
         $p = 1;
      }
      return max($products);
    } 

    private function validate($sequenceLength) : void
    {
      $serieLength = strlen($this->_serie);
      $notValid = !is_numeric($this->_serie) || $sequenceLength < 0  || $serieLength < $sequenceLength;
      
      if($notValid)
        throw new InvalidArgumentException();
    }

  
}
