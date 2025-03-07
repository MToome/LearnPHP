<?php

class Box {
    public $width;
    public $heigth;
    public $length;

    public function volume(){
        return $this->width * $this->height * $this->lenght;
    }
}

/*
$var1 = 1;
$var2 = $var1;
$var2 =2;
var_dump($var1);

$box1 = new Box();
$box1 ->width = 1;
$box1 ->height = 20;
$box1 ->lenght = 15;

$memory = [1, 2 ];

$box2 = $box1;
$box2->height =2; // objekti muutujad on teist moodi, nüüd on box1 height ka 2
$box2 = clone $box1; // Kloonib ja siis ei muutu enam box1 väärtused kui muudab box2

var_dump($box1);
var_dump($box1->volume());
*/

class MetalBox extends Box{ // Metalbox saab kõik asjad boxist ja saab ise veel lisada mis ei lähe Boxi
    public $weightPerUnit;
    public $material = 'Metal';
    public function mass(){
        return $this->volume() * $this->weightPerUnit;
    }
}

$box1 = new MetalBox();
var_dump($box1);