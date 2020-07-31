<?php

require "animal.php";
require "ape.php";

$sheep = new animal("shaun");

echo $sheep->get_name(); // "shaun"
echo $sheep->get_legs(); // 2
echo $sheep->get_cold_blooded(); // false
echo "<br>--<br>";

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

$sungokong = new ape("kera sakti");
echo $sungokong->get_name();
echo $sungokong->yell() // "Auooo"
/*
$kodok = new frog("buduk");
$kodok->jump() ; // "hop hop"*/



?>