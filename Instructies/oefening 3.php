<?php
/**
 * User: Name
 * Date: 0-0-0000
 * Time: 00:00
 * File: Index.php
 */
?>
<html>
    <head>
        <!-- Tekenset declareren -->
        <meta charset="utf-8">
        <!-- Omschrijving van de webpagina -->
        <meta name="discription" content="Opdracht X">
        <!-- Toekennen van sleutelwoorden -->
        <meta name="keywords" content="keyword 1, keyword 2">
        <!-- Geeft de link aan van je CSS bestand -->
        <link href="../CSS/style.css" rel="stylesheet" type="text/css">
        <!-- geeft titel aan -->
        <title>
            Template
        </title>
    </head>
    <body>
        <header>
            <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
        </header>
        <hr>
        <aside>
            <h2>Menu</h2>
            <br>
            <h3>Hoofdstuk 2</h3>
            <ul>
                <li>
                    <a href="Hoofdstuk%202/Opdracht2.1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="">Opdracht 2.2</a>
                </li>
            </ul>
            <h3>Hoofdstuk 3</h3>
            <ul>
                <li>
                    <a href="">Opdracht 3.1</a>
                </li>
                <li>
                    <a href="">Opdracht 3.2</a>
                </li>
                <li>
                    <a href="">Opdracht 3.3</a>
                </li>
            </ul>
            <h3>Hoofdstuk 4</h3>
            <ul>
                <li>
                    <a href="">Opdracht 4.1</a>
                </li>
                <li>
                    <a href="">Opdracht 4.2</a>
                </li>
                <li>
                    <a href="">Opdracht 4.3</a>
                </li>
                <li>
                    <a href="">Opdracht 4.4</a>
                </li>
            </ul>
            <h3>Hoofdstuk 5</h3>
            <ul>
                <li>
                    <a href="">Opdracht 5.1</a>
                </li>
                <li>
                    <a href="">Opdracht 5.2</a>
                </li>
                <li>
                    <a href="">Opdracht 5.3</a>
                </li>
                <li>
                    <a href="">Opdracht 5.4</a>
                </li>
            </ul>
        </aside>
        <main id="wrapper">
            <h2 id="out">Uitwerkingen</h2>
                <?php
                $profession = "ICTer"; //String
                $year = 2019; //Integer
                $percent = 17.1; //Float
                $subject = array("Internet", "Computer", "Software"); //Array
                $skills = false; //Boolean

                echo $profession;
                var_dump($subject);
                ?>
        </main>
    </body>
</html>
