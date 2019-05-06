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
<!--    meta tagas kuris refresina browseri, galima nurdyti kiek sec-->
<!--    <meta http-equiv="refresh" content="1">-->
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
        img {
            max-width: 100%;
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
            <?php print cizos(); ?>


        <h1>2 Uzduotis - Kas sekunde didejanti bomba kuri minutes pabaigoje sprogsta</h1>
        <?php if(date("s" <= 1)): ?>

        <div class="bomba">
            <img src="https://static2.inspektorius.lt/usi/980x654/3/99/ad/09/99ad096b1d352b45732b0918fccc2517.jpg?v=4.0.5.09&t=cr&s=980x654&m=3&f=/Uploads/UArticles/leadPhotos/e2/25/68/86/e22568862d16199d3e15b2b7c29ab390.jpg" alt="bomba" class="tiksinti-bomba">


        </div>
            <h2>Time: <?php print date("s") ;?></h2>
        <?php else : ?>

            <div class="bomba">
                <img src="https://img.newatlas.com/satan-truth-58.jpg?auto=format%2Ccompress&ch=Width%2CDPR&fit=crop&h=347&q=60&rect=0%2C42%2C1496%2C841&w=616&s=1913d819e9cfb41ded46cd560d2af6dc" alt="bomba" class="tiksinti-bomba">
                <p>Time: <?php print date("s") ;?></p>
            </div>

        <?php endif; ?>

    <h1>Tado pavyzdys</h1>
    <section>
<!--        kode po action nera 1 ()skaiciaus vienas kaip kad style nurodyta-->
        <div class="bomb action-<?php print $explosion; ?>"></div>
        <h1>: <?php print $timer; ?></h1>
    </section>

    <h1>3 Uzduotis Kokie bus orai? Spaudziant refresh keiciasi orai</h1>


    <h1> 4 Uzduotis - Isspausdinti su php 4 vienodus img</h1>

            <?php //print ; ?>

    <h1>5 Uzduotis - siuksliu deze</h1>
    <pre>
        $siukles_turis = 40; (dm3)
        $siuksliu_turis_avg_per_day = 15;
        $max_kaupo_turis = [rand];
    </pre>
    <h5>Po keliu dienu kils barnas?</h5>
    <pre>
        Po $dienu ([data]) pirk geliu ir sampano, jeigu nori, kad zmona siuksles pati isnestu
    </pre>
    <?php
    $siukles_turis = 40; //(dm3)
    $siuksliu_turis_avg_per_day = 15;
    $max_kaupo_turis = rand(10,20);//cia tas kur virsus susikaups;

    $dienu = round(($siukles_turis + rand(10,20)) / $siuksliu_turis_avg_per_day);
    $laikas = date('Y-m-d', strtotime('+' . $dienu . 'days')); //"+$dienu days" antras variantas


    $tekstas = "po $dienu $laikas reikia ismesti siuskles ";

    print $tekstas;

    ?>

        <h1>6 Uzduotis - grikiai</h1>
        <pre>
            $grikiai = 5000; //g
            $per_diena = rand(200, 500); //g

            Kiek dienu gales valgyti grikius?

            Jei turesiu $grikiai g. grikiu, galesiu juos valgyti
            $survive_days dienu. jei pradesiu siandien, grikiai
            pasibaigs [data]
        </pre>

    <?php
    $grikiai = 5000; //g
    $per_diena = rand(1, 5); //g
    $x = 0;


    for ($per_diena = 0; $per_diena <= 5; $per_diena++){ //$per_diena++
        $per_diena = rand(1, 5);
        $x++;//dienu skaicius
        print $per_diena . " Ciklo rezultatas / ";
        print $x . " dienos" . "<br>";
    }





    ?>



    </body>
</html>


