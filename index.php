<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Yatzy-relaterad kod.

include 'dice.class.php';

$d1 = new Dice;
$d2 = new Dice;
$d3 = new Dice;
$d4 = new Dice;
$d5 = new Dice;

$dies = [$d1, $d2, $d3, $d4, $d5];
// Algoritm för att kolla om vi har ett par.
/*
a = 1 och b = (a+1)
Kolla tärning a. Kolla tärning b. Jämför.
Om olika, öka b.
Om b > 5, öka a med 1 och därefter sätt b = (a+1)
*/

foreach ($dies as $dice) {
    echo '<p>' . $dice->getValue();
}
