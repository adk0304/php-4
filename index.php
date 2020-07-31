<?php

require "animal.php";
require "ape.php";
require "frog.php";

$sheep = new animal("shaun");

echo $sheep->get_name(); // "shaun"
echo $sheep->get_legs(); // 2
echo $sheep->get_cold_blooded(); // false
echo "<br>--<br>";

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

$sungokong = new ape("kera sakti");
echo $sungokong->get_name();
echo $sungokong->get_legs(); // 2
echo $sungokong->yell(); // "Auooo"
echo "<br>--<br>";


$kodok = new frog("buduk");
echo $kodok->get_name() ; 
echo $kodok->get_legs(); // 4
echo $kodok->jump() ; // "hop hop"



?>