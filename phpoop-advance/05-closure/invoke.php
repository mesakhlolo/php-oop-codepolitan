<?php

class IsPositiveInt
{
  public function __invoke($value)
  {
    return ((int) $value == $value && $value > 0);
  }
}

// penggunaan closure dengan invoke
$cekDulu = new IsPositiveInt;

var_dump($cekDulu(1));
var_dump($cekDulu("5"));
var_dump($cekDulu(4.0));
var_dump($cekDulu(-2));
var_dump($cekDulu(3.1));