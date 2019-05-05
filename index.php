<?php include "juodrastis.php"; ?>
<?php include "style.php"; ?>
<?php
//tado pavyzdys
$time = date("s");
$timer = 59 - $time;
$explosion = $timer < 1;
$size = 100;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Php juodrastis</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- CSS Styles -->
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .bomba {
            height: <?php print $bombos_aukstis; ?>px;
            /*kodel sumazinus width paveikslelis neprisitaiko prie divo plocio*/
            width: <?php print $bombos_plotis; ?>px;
            border: 5px solid black;

        }
        /*kodel neprisitaiko paveikslelis prie div aukscio ir plocio*/
        .tiksinti-bomba img {
            max-height: 100%;
        }

        /*Tado pavyzdys*/
        section {
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            justify-content: flex-start;
            align-items: center;
        }
        .bomb {
            background-image: url("https://static2.inspektorius.lt/usi/980x654/3/99/ad/09/99ad096b1d352b45732b0918fccc2517.jpg?v=4.0.5.09&t=cr&s=980x654&m=3&f=/Uploads/UArticles/leadPhotos/e2/25/68/86/e22568862d16199d3e15b2b7c29ab390.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            width: <?php print $size += ($time * 2); ?>px;
            height: <?php print $size += ($time * 2); ?>px;
        }

        .action-1 {
            background-image: url("https://img.newatlas.com/satan-truth-58.jpg?auto=format%2Ccompress&ch=Width%2CDPR&fit=crop&h=347&q=60&rect=0%2C42%2C1496%2C841&w=616&s=1913d819e9cfb41ded46cd560d2af6dc");
            width: 320px;
            height: 320px;
        }
    </style>
</head>
    <body>
        <h1>1 Uzduotis - Cizu skaiciavimas</h1>
            <?php //print cizos(); ?>


        <h1>2 Uzduotis - Kas sekunde didejanti bomba kuri minutes pabaigoje sprogsta</h1>

        <div class="bomba">
            <img src="https://static2.inspektorius.lt/usi/980x654/3/99/ad/09/99ad096b1d352b45732b0918fccc2517.jpg?v=4.0.5.09&t=cr&s=980x654&m=3&f=/Uploads/UArticles/leadPhotos/e2/25/68/86/e22568862d16199d3e15b2b7c29ab390.jpg" alt="bomba" class="tiksinti-bomba">
            <p>Time: <?php print date("s") ;?></p>
        </div>

    <h1>Tado pavyzdys</h1>
    <section>
<!--        kode po action nera 1 ()skaiciaus vienas kaip kad style nurodyta-->
        <div class="bomb action-<?php print $explosion; ?>"></div>
        <h1>: <?php print $timer; ?></h1>
    </section>

    <h1>3 Uzduotis Kokie bus orai? Spaudziant refresh keiciasi orai</h1>





    </body>
</html>


