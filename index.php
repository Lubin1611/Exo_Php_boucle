<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 18/12/2018
 * Time: 13:31
 */

$phrase = "j'ecris du texte !"."<br>";

echo $phrase;

$monTableau = array("bateau", "ballon", "caca", "michel");

echo $monTableau[1]."<br>";

for ($i = 0; $i < 4; $i++) {

    echo $i.$monTableau[$i]."<br><br>";
}

?>

<ul>

    <?php

    foreach($monTableau as $index)
    {
        ?>
        <li><?=$index;?></li>
        <?php
    }
    ?>
</ul>