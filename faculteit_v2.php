<?php

    $vraag = readLine("Van welk getal wil je de faculteit weten? ");
    $a = 1;
    while ($h < $vraag) {
        $h++;
        $a *= ($h);
    }

    echo("De faculteit van " . $h . " is " . $a);
    



?>