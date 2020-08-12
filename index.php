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

foreach ($dies as $dice) {
    echo '<p>' . $dice->getValue();
}

echo "<p>" . same($dies);


function same($dies)
{
    // Gå igenom arrayen en i taget, därefter loopa igenom alla tänkbara värden.
    // Går förmodligen snabbare tvärtom, men vad är en millisekund...
    for ($i = 1; $i <= 6; $i++) {
        $pairCounter = 0;
        foreach ($dies as $die) {
            if ($die->getValue() == $i)
                $pairCounter++;
        }
        // Här skulle nog en switch/case passa bättre...
        if ($pairCounter == 2) {
            return "Par";
        }
        if ($pairCounter == 3) {
            return "Triss";
        }
        if ($pairCounter == 4) {
            return "Fyrtal";
        }
        if ($pairCounter == 5) {
            return "Yatzy";
        }
    }
    return "Inget par. Märkligt";
}

function straight()
{
    /* Lite olika varianter här för att se om tärningarna är 1,2,3,4,5 eller 2,3,4,5,6.

    A. Sortera tärningarna och omvandla deras värde till en sträng, jämför med två hårdkodade strängar.
    B. Sortera tärningarna och loopa igenom dem. Lagra värdet på varje tärning, och jämför med nästa. Om skillnaden är 1 är det bra, annars sätter vi en variabel till false. Om vi har kört igenom hela loopen utan att variabeln är false, så kollar vi värdet på den sista tärningen. Om det är 5 så är det liten straight, annars är det stor.
    C. Börja med att räkna summan. Om tärningarnas summa är 15 eller 20 så kan det vara en straight, annars inte. Snabbt sätt att kolla, men om den kollen är positiv så måste vi gå vidare.
    D. Använd "same-funktionen" för att kolla om det inte finns några par, därefter går du vidare och kollar om någon av tärningarna 2,3,4,5 saknas (i så fall är det inte en stege), och därefter kollar vi om den sista tärningen är 1 eller 6 (för att avgöra om det är stor eller liten).
    
    */
}
