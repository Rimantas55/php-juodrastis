<?php include "juodrastis.php"; ?>
<?php include "style.php"; ?>
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
            height: <?php $bombos_aukstis; ?>;
            /*kodel sumazinus width paveikslelis neprisitaiko prie divo plocio*/
            width: <?php $bombos_plotis; ?>;
            border: 5px solid black;

        }
        /*kodel neprisitaiko paveikslelis prie div aukscio ir plocio*/
        .tiksinti-bomba img {
            max-height: 100%;
        }
    </style>
</head>
    <body>
        <h1>1 Uzduotis - Cizu skaiciavimas</h1>
            <?php //print cizos(); ?>


        <h1>2 Uzduotis - Didejanti bomba pagal pagal sekundes</h1>

        <div class="bomba">
            <img src="https://static2.inspektorius.lt/usi/980x654/3/99/ad/09/99ad096b1d352b45732b0918fccc2517.jpg?v=4.0.5.09&t=cr&s=980x654&m=3&f=/Uploads/UArticles/leadPhotos/e2/25/68/86/e22568862d16199d3e15b2b7c29ab390.jpg" alt="bomba" class="tiksinti-bomba">
            <p>Time: <?php print date("s") ;?></p>
        </div>





    </body>
</html>


