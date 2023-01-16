<?php

include_once "Personnage.php";
include_once "Guerrier.php";
include_once "Mage.php";
include_once "Voleur.php";

?>

<div class="container" style="display: flex; align-items: baseline; justify-content: space-evenly;">

    <div class="guerrier" style="text-align: center;">

    <?php

        $guerrier = new Guerrier(500, 500, "Rahan");
        echo $guerrier -> image();
        echo "<br><br>";
        echo $guerrier -> pseudo();
        echo "<br>";
        echo $guerrier -> ptsDeVie();
        echo "<br>";
        echo $guerrier -> vigueur();
        echo "<br>";
        echo $guerrier -> ptsDeForce();

        echo "<br><br>";

    ?>

    </div>

    <div class="mage" style="text-align: center;">

    <?php

        $mage = new Mage(300, 700, "Huguette");
        echo $mage -> image();
        echo "<br><br>";
        echo $mage -> pseudo();
        echo "<br>";
        echo $mage -> ptsDeVie();
        echo "<br>";
        echo $mage -> vigueur();
        echo "<br>";
        echo $mage -> ptsDeMagie();

        echo "<br><br>";

    ?>

    </div>

    <div class="voleur" style="text-align: center;">

    <?php

        $voleur = new Voleur(400, 800, "Ezio");
        echo $voleur -> image();
        echo "<br><br>";
        echo $voleur -> pseudo();
        echo "<br>";
        echo $voleur -> ptsDeVie();
        echo "<br>";
        echo $voleur -> vigueur();

    ?>

    </div>

</div>

<div class="histoire">
    <p>
        <?php

        // Début de l'histoire

    echo "<br>";
    echo "<p>Bienvenue bande de gueux puants dans la taverne du Porc Variolé, un lieu mal famé où se réunissent les criminels et les marginaux!
    <br> <br>
    Une mage nommée " . $mage->getPseudo() . " et un guerrier appelé " . $guerrier->getPseudo() . " y font leur entrée.
<br><br>
" . $mage->getPseudo() . ", une femme élégante vêtue d'une robe blanche, est à la recherche d'un artefact magique qui lui a été volé. Elle est prête à tout pour le récuperer! Elle connaît le visage du voleur.
<br><br>
" . $guerrier->getPseudo() . ", un colosse musclé armé d'une épée à deux mains accompagne son amie la mage, en espérant bien évidemment que la situation s'envenime. Il trépigne d'impatience à l'idée de pourfendre le gosier du voleur !
<br><br>
" . $voleur->getPseudo() . ", notre voleur rusé et agile, est présent dans la taverne ! OMAGAD !!! Vous sentez cette odeur de sang ?
<br><br>
Les trois personnages se retrouvent rapidement impliqués dans une bataille épique !
<br><br>";
echo $guerrier -> attaque($voleur, 50, 50);
echo "<br><br>";
echo $voleur -> attaque($guerrier, 40, 20);
echo "<br><br>";
echo $mage -> getPseudo() .", pendant ce temps-là, caste une boule de feu de ses morts.";
echo "<br><br>";
echo $mage -> attaque($voleur, 100, 100);
echo "<br><br>";
echo $guerrier -> getPseudo() ." tente une attaque puissante mais " . $voleur->esquive();
echo "<br><br>";
echo "Ce coquin de voleur, rapide comme l'éclair et agile comme le furet en rût, aperçoit une faiblesse dans la garde de " . $guerrier->getPseudo() . ".";
echo "<br><br>";
echo $voleur -> attaque($guerrier, 100, 60);
echo "<br><br>";
echo "Et la " . $mage->getPseudo() . " rebalance une bonne grosse boulette sur la gueule du pauvre " . $voleur->getPseudo() . ".";
echo "<br><br>";
echo $mage -> attaque($voleur, 80, 80);
echo "<br><br>";
echo $voleur -> getPseudo() . " en a marre de prendre des steacks de la part de la femme de Gandalf.";
echo "<br><br>";
echo $voleur -> attaque($mage, 80, 40);
echo "<br><br>";
echo "COMBOOOO !";
echo "<br><br>";
echo $voleur -> attaque($guerrier, 80, 40);
echo "<br><br>";
echo "DOUBLE COMBOOOO ! Ah bah non loupé chééé!";
echo "<br><br>";
echo $guerrier -> esquive();
echo "<br><br>";
echo "Ce bourrin de " . $guerrier -> getPseudo() . " balance un énorme coup d'épée mais se loupe et blesse " . $mage -> getPseudo() . "!";
echo "<br><br>";
echo $guerrier -> attaque($mage, 50, 70);
echo "<br><br>";
echo $guerrier -> getPseudo() . " et " . $mage -> getPseudo() . " décident d'en finir.";
echo "<br><br>";
echo $guerrier -> attaque($voleur, 100, 100);
echo "<br><br>";
echo $mage -> attaque($voleur, 100, 80);
echo "<br><br>";
echo "Notre mage récupère son artefact, notre guerrier a fait couler le sang, tout le monde est content !";
echo "<br><br>";
echo "FIN";

        ?>
    </p>
</div>



