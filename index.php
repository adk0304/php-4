<?php

require_once "animal.php";

$sheep = new animal("shaun");

echo 'bunyio'.$sheep->get_name(); // "shaun"
echo $sheep->legs; // 2
echo $sheep->cold_blooded; // false



// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())




?>