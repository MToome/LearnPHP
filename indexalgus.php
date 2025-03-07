<?php
// comments are this way

/*
    multi line comment
*/

// echo 'Hello world'; // Töötab sulgudega ja ilma sulgudeta, ';' on kohustuslikud expressioni lõpus

// andme tüübid
$var = 'Tim'; // Muutujad algavad $ märgiga, string
$var = 4; // int
$var = 3.5; // float
$var = true; // bool
$var = false; // false
$var = null; // null, väärtuse puudumine
$var = ['hello', 'ddf', 3, 56]; // array
$var = new StdClass(); // Omadusteta objekt
var_dump($var); // Prindib lisaks muutujale ka lisa info

foreach($var as $key => $value){ // teatud asukohta saamiseks arrays
    var_dump($var);
}

$var = [
    'name' => 'Tim', // 'Võti' => 'Väärtus'
    'age' => 43,
    'hasCat' => true,
];

var_dump($var);
var_dump($var[0]);
var_dump($var['name']);

function hello($name){
    echo 'Hello ' . $name;    // erinevus tekstide liitmisel tuleb kasutada punkti, text concatination
}

hello('Tim');

$name = 'Toomas';
echo " don't \n $name"; // saab aru, et on muutuja ja lisab selle, ainult kahekordsete juttumärkidega. Sama ka escape karakteritega

