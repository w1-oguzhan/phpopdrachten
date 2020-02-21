<?php
    include '../Index.php';
?>
<?php
    $text1 = "Hallo"; // String
    $text2 = " een makkelijke taal"; // String
    $text3 = " toch zo'n makkelijke taal"; // String
    $text4 = " wat is"; // String
    $text5 = " PHP"; // String
    $text6 = "Nooit gedacht dat"; // String
    $text7 = "De installatie is best ingewikkeld"; // String
    $text8 = " Fijn"; // String
    $text9 = "?"; // String
    $text10 = "."; // String
    $text11 = ","; // String
    $text12 = "<br>"; // String
    $text13 = " is"; // String
    $text14 = " Vind je niet"; // String
    $text15 = " toch"; // String
?>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>
        <?php
            echo "<p>" . $text1 . $text11 . $text4 . $text5 . $text15 . $text2 . $text10 . $text12 . "</p>";
            echo "<p>" . $text7 . $text10 . $text8 . $text15 . $text9 . $text12 . "</p>";
            echo "<p>" . $text6 . $text5 . $text3 . $text13 . $text10 . "</p>";
            echo $text12
        ?>
        <?php
            echo "<p>" . $text1 . $text11 . $text12 . "</p>";
            echo "<p>" . $text8 . $text11 . " dat" . $text5 . " zo'n makkelijke taal" . $text13 . "</p>";
            echo "<p>" . $text7 . $text10 . $text14 . $text9 . "</p>";
        ?>

    </main>

