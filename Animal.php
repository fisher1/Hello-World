<?php
class Animal{
private $a;
private $b;
public function getResult($a,$b){
$this->a=$a;
$this->b=$b;
echo $a+$b;
}
}
