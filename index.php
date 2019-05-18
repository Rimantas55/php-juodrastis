<?php include "juodrastis.php"; ?>

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
            width: <?php print $bombos_plotis; ?>px;
        }

        img {
            max-width: 100%;
        }

        /*Tado pavyzdys*/
        <?php
        //tado pavyzdys
        $time = date("s");
        $timer = 59 - $time;
        $explosion = $timer < 1;
        $size = 100;
        ?>

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

        /*paveikelio printinimas*/


        .lapes {
            display: flex;
        }

        section .lapes div {
            flex: 1;
            margin-left: 10px;
        }

        section.keturi-pav img {
            border: 1px solid orange;
            /*max-width: 50%;*/
        }

        <?php
        $paveikslelis = 'https://www.pxwall.com/wp-content/uploads/2018/06/Wallpaper%20Red%20Fox,%20green%20grass,%20jumping,%20sunny%20day,%20wild%20nature,%20Animals%20652215406.jpg';
        ?>

    </style>
</head>
<body>

<!--Cizu Uzduotis-->
<section class="cizu-skaiciavimas">
    <h1>1 Uzduotis - Cizu skaiciavimas</h1>

    <p class="cigareciu-p"><?php print cizos(); ?></p>
</section>



<!--Didejanti pagal sukunde bombos uzduotis-->
<section class="tiksinti-bomba">
    <h1>2 Uzduotis - Kas sekunde didejanti bomba kuri minutes pabaigoje sprogsta</h1>
    <?php if (date("s" <= 1)): ?>

        <div class="bomba">
            <img src="https://static2.inspektorius.lt/usi/980x654/3/99/ad/09/99ad096b1d352b45732b0918fccc2517.jpg?v=4.0.5.09&t=cr&s=980x654&m=3&f=/Uploads/UArticles/leadPhotos/e2/25/68/86/e22568862d16199d3e15b2b7c29ab390.jpg"
                 alt="bomba" class="tiksinti-bomba">
        </div>
        <h2>Time: <?php print date("s"); ?></h2>
    <?php else : ?>

        <div class="bomba">
            <img src="https://img.newatlas.com/satan-truth-58.jpg?auto=format%2Ccompress&ch=Width%2CDPR&fit=crop&h=347&q=60&rect=0%2C42%2C1496%2C841&w=616&s=1913d819e9cfb41ded46cd560d2af6dc"
                 alt="bomba" class="tiksinti-bomba">
            <p>Time: <?php print date("s"); ?></p>
        </div>

    <?php endif; ?>

</section>

<!--Tiksinti bomba Tado pavyzdys-->
<section class="tiksinti-bomba-tado-pvz">
    <h1>Tado pavyzdys</h1>
    <div class="bomb action-<?php print $explosion; ?>"></div>
    <h1>: <?php print $timer; ?></h1>
</section>

<!--Uzduotis - kokie bus orai-->
<section>
    <h1>3 Uzduotis Kokie bus orai? Spaudziant refresh keiciasi orai</h1>
    <p>Sauleta</p>
    <p>Debesuota</p>
    <p>be lietaus</p>
    <p>su lietum</p>

    <?php
//    foreach ($orai as $aukstai => $oru_reiksmes){
//
//        print $oru_reiksmes . "<br>";

//        foreach ($oru_reiksmes as $abc){
//            print $abc;
//        }


    //}

  //////////////---------------------
//    $array = [
//        [1, 2],
//        [3, 4],
//        ["PM", "CSS"],
//    ];
//
//    foreach ($array as list($a, $b)) {
//        // $a contains the first element of the nested array,
//        // and $b contains the second element.
//        echo "B: $b\n";
//    }
////A: 1; B: 2 A: 3; B: 4







//Pirmas variantas

//    function savaites_diena($kelintadienis){
//        if ($kelintadienis == 1) {
//            print " Pirmadienis ";
//        } if ($kelintadienis == 2)  {
//            print " antradienis ";
//        } if ($kelintadienis == 3) {
//            print " Treciadienis ";
//        } if ($kelintadienis == 4) {
//            print " Ketvirtadienis ";
//        } if ($kelintadienis == 5) {
//            print " Penktadienis ";
//        } if ($kelintadienis == 6) {
//            print " Sestadienis ";
//        } if ($kelintadienis == 7)  {
//            print " Sekmadienis ";
//        } else {
//            print "enter number from 1 - 7 to get outout";
//        }
//    }
//
//    print savaites_diena(8) . "<br>";

    //antras variantas

//output kazkoks erroras
//    if ($_GET['week_day'] == 1) {
    ////        print " Pirmadienis ";
    ////    } if ($_GET['week_day'] == 2)  {
    ////        print " antradienis ";
    ////    } if ($_GET['week_day'] == 3) {
    ////        print " Treciadienis ";
    ////    } if ($_GET['week_day'] == 4) {
    ////        print " Ketvirtadienis ";
    ////    } if ($_GET['week_day'] == 5) {
    ////        print " Penktadienis ";
    ////    } if ($_GET['week_day'] == 6) {
    ////        print " Sestadienis ";
    ////    } if ($_GET['week_day'] == 7)  {
    ////        print " Sekmadienis ";
    ////    } if ($_GET['week_day'] >8 || $_GET['week_day']<=0 ) {
    ////        print "enter number from 1 - 7 to get output" . "<br>";
    ////    }

//tecias variantas

//    if($_GET['week_day']<8){
//    switch ($_GET['week_day']){
//
//        case 0:
//            echo "enter from 1 - 7";
//            break;
//        case 1:
//            echo "pirmadienis";
//            break;
//        case 2:
//            echo "antradienis";
//            break;
//    }
//}






//-------------Liekana-------------------------

//    if($_GET['liekana'] % 2 == 0){
//        print $_GET['liekana'] . " ________ " . $_GET['liekana'] % 2 . " LYGINIS";
//        } if ($_GET['liekana'] % 2 == 1){
//        print $_GET['liekana'] . " ________ " . $_GET['liekana'] % 2 . " NELYGINIS";
//    }


    //-------------Skaiciaus kelimias laipsniu-------------------------


//    Parašykite programą, kuri pakeltų skaičių laipsniu.
//    Vartotojas duoda dvi reikšmes: b ir p. B yra pagrindas, p - laipsnis.
//
//    Pvz #1: kai b=2, p=3, tai 2^3=2*2*2=6
//
//Pv #2: kai b=5, p=2, tai 5^2=5*5=25

//if ($_GET['kelti_laipsniu']) {
//    echo "Skaicius " . $_GET['pirmas_skaicius'] . " ^" . $_GET['antras_skaicius'] . " laipsniu = " . $_GET['pirmas_skaicius'] ** $_GET['antras_skaicius'];
//
//}






//------------Surasti didziausia reiksme------------------
    //Duotas skaičių masyvas (ne iš vartotojo, tiesiog apsirašykit masyvą iš betkokių skaičių). Suraskite didžiausią reikšmę.
    //
    //Pvz #1: jei duoti skaičiai 2, 1, 3, tai atsakymas 3
    //
    //Pvz #2: jei duoti skaičiai -1, 5, 9, tai atsakymas 9

//    $ivairiu_skaiciu_masyvas = [-15, -4, 0, 8, 800, 14, -64, 19000];
//
//    print "maziausias skaicius sitame masyve \$ivairiu_skaiciu_masyvas yra ". min($ivairiu_skaiciu_masyvas) . "<br>";
//    print "didziausias skaicius sitame masyve \$ivairiu_skaiciu_masyvas yra ". max($ivairiu_skaiciu_masyvas) . "<br>";
//





    //------------Pirminis ar nepirminis skaicius------------------

    //Parašykite programą, kuri patikrintų, ar vartotojo duotas skaičius yra pirminis.
    // Skaičius yra pirminis, jei jis dalinasi tik iš 1 ir savęs (1 nėra pirminis skaičius).
    // Pirmieji pirminiai skaičiai: 2, 3, 5, 7, 11, 13, 17, ...
    //
    //Pvz #1: 1 -> ne
    //
    //Pvz #2: 7 -> taip


//    $bet_koks_skaicius = $_GET['pirminis_skaicius'];
//
//    if ($bet_koks_skaicius % 2 == 1){
//
//        print $bet_koks_skaicius . " Yra pirminis skaicius";
//        }elseif ($bet_koks_skaicius % 2 == 0){
//        print $bet_koks_skaicius . " Yra nepirminis skaicius";
//        }else{
//        print "Iveskite skaiciu";
//    }







    //------------sudeti masyve min ir max reiksmes------------------

//Parašykite programą, kuri suskaičiuotų masyve esančių didžiausio
    // ir mažiausio skaičių aritmetinį vidurkį.
    //
    //Pvz #1: [1, 2, 3] -> 2
    //
    //Pvz #2: [6, 7, 4, -7, 0] -> 0
    //
    //Pvz #3: [2] -> 2


//    $skaiciai_masyve_min_max = [-8, 0, 14, 20];
//    $atsakymas_min_max = (min($skaiciai_masyve_min_max) + max($skaiciai_masyve_min_max)) / 2;
//
//    print "Masyvas [-8, 0, 14, 20]" . "<br>";
//    print "Sudeti maziausia ir didziausia skaiciu masyve ir isvesti tu skaiciu aritmetini ju vidurki:" . "<br>";
//    print "Minimalus skaicius masyve yra " . min($skaiciai_masyve_min_max) . "<br>";
//    print "Maximalus skaicius masyve yra " . max($skaiciai_masyve_min_max) . "<br>";
//    print "siu skaiciu aritmetinis vidurkis yra " . $atsakymas_min_max;







    //------------masyve esanciu skaiciu aritmetinis vidurkis------------------


//    $skaiciu_masyvas = [-8, 0, 14, 20];
//
//    foreach ($skaiciu_masyvas as $visi_skaiciai_masyve){
//
//        $skaiciu_sudetis += $visi_skaiciai_masyve;
//    }
//
//    print $skaiciu_sudetis / count($skaiciu_masyvas);
//





    //------------ visu nelyginiu skaiciu suma nuo 1 - 100 ------------------

//Suskaičiuokite visų nelyginių skaičių sumą nuo 1 iki 100.
    //
    //Hint: atsakymas 2500

//    for ($x = 1; $x <= 100; $x++) {
//        if ($x % 2 == 1) {
//            $v += $x;
//        }
//
//    }
//    print $v;





    //------------ visu nelyginiu skaiciu suma nuo 1 - 100 ------------------

    //Parašykite programą, kuri paskaičiuotų, kiek
    // mokesčių žmogus turi sumokėti nuo pajamų. Vartotojas
    // įveda savo pajamų skaičių, neapmokestinamą pajamų dydį
    // (NPD) ir mokesčių tarifą. Duomenys keliauja GET metodu.

    //Pvz #1: 500 pajamų, 200 NPD, 50% mokesčių tarifas -> 150

//Pvz #2: 1000 pajamų, 0 NPD, 100% mokesčių tarifas -> 1000

//if(isset($_POST['skaiciuoti'])) {
//    $mokesciai = $_POST['mokesciai'] /100;
//    $pajamos = $_POST['pajamos'];
//    $npd = $_POST['npd'];
//
//    $reikia_sumoketi_mokesciu = ($pajamos - $npd) * $mokesciai;
//
//
//
//    print "Jums reikia moketi " . $reikia_sumoketi_mokesciu;
//}






    //------------ Submit vartotojo ir zinute ------------------

//Parašykite programą, kurioje vartotojas formoje įveda savo vardą ir pavardę.
    // Užsubmitinus formą, turi pasirodyti tekstas "Labas, <vardas>.
    // Tavo pavardė yra <pavarde>." Duomenys keliauja POST metodu.

//Bonus sudetingumas (nebūtina) - vardas turi būti kreipinys (pvz.
    // Įvedus Tomas, turi išvesti "Labas, Tomai").


//if (isset($_POST['log_in'])) {
//    if ($_POST['vardas_1'] == "Rimantas") {
//
//        print "Labas " . str_replace("Rimantas","Rimantai","Rimantas");
//        print "<br>" . "Tavo pavarde yra " . $_POST['pavarde_1'];
//        }else{
//        print "Labas " . $_POST['vardas_1'] . " Tavo pavarde " . $_POST['pavarde_1'];
//    }
//}


    //------------ Submit vartotojo ir zinute ------------------


    //masyvas didejimo tvarka

//    Parašykite programą, kuri surikiuotų masyvą didėjimo tvarka
    // (t.y. nuo didžiausio iki mažiausio).
//
//Pvz #1: [3, 2, 1] -> [3, 2, 1]
//
//Pvz #2: [1, 2, 3] -> [3, 2, 1]
//
//Pvz #3: [2, 1, 3] -> [3, 2, 1]
//



//$skaiciu_masyvas_didejimas = [0, -8, 22, 14, -18];
//
//    arsort($skaiciu_masyvas_didejimas);
//
//foreach ($skaiciu_masyvas_didejimas as $value){
//
//        print $value . " ";
//    }





    //------------ Submit vartotojo ir zinute ------------------






//    $a = array();
    ////    $a[0][0] = "a";
    ////    $a[0][1] = "b";
    ////    $a[1][0] = "y";
    ////    $a[1][1] = "z";
    ///
//    $a = [
//            [
//                'a',
//                'b',
//            ],
//            [
//                'y',
//                'z',
//
//            ],
//    ];
//
//
//        foreach ($a as $v1) {
//            foreach ($v1 as $v2) {
//                echo "$v2\n";
//            }
//        }
    ?>
    <?php
        //print savaites_diena(7);
    ?>

    <h2>Forma Week_day</h2>
    <form action="index.php" method="GET">
        <input type="number" name="week_day">
        <input type="submit">
    </form>

    <h2>Forma liekana</h2>
    <form action="index.php" method="GET">
        <input type="number" name="liekana">
        <input type="submit">
    </form>

    <h2>Skaiciu kelimas laipsniais</h2>
    <form action="index.php" method="GET">
        <label for="pirmas_skaicius">Iveskite skaiciu
        <input type="number" name="pirmas_skaicius"></label><br>
        <label for="antras_skaicius">Iveskite laipsni kuriuo norite pakelti skaiciu
        <input type="number" name="antras_skaicius"></label><br>
        <input type="submit" value="Kelti laipsniu" name="kelti_laipsniu">
    </form>

    <h2>Piiminis ar nepirminis skaicius?</h2>
    <form action="index.php" method="GET">
        <label for="pirminis_skaicius">Iveskite skaiciu
            <input type="number" name="pirminis_skaicius"></label><br>
        <input type="submit" value="tikrinti" name="tikrinti">
    </form>



    <h2>Mokesciu skaiciavimas</h2>
    <form action="index.php" method="POST">
        <label for="pajamos">Iveskite savo pajamas
            <input type="number" name="pajamos"></label><br>
        <label for="npd">Iveskite savo NPD
            <input type="number" name="npd"></label><br>
        <label for="mokesciai">Iveskite mokesciu dydi (procentu zenklo nedeti)
            <input type="number" name="mokesciai"></label><br>
        <input type="submit" value="skaiciuoti" name="skaiciuoti">
    </form>

    <h2>Forma Submitui</h2>
    <form action="index.php" method="POST">
        <label for="vardas_1">Iveskite savo varda
            <input type="text" name="vardas_1" placeholder="Iveskite savo varda"></label><br>
        <label for="pavarde_1">Iveskite savo pavarde
            <input type="text" name="pavarde_1" placeholder="Iveskite savo pavarde"></label><br>
            <input type="submit" value="Log in" name="log_in">
    </form>


</section>


<section class="keturi-pav">
    <h1> 4 Uzduotis - Isspausdinti su php 4 vienodus img</h1>
    <div class="lapes">
        <div><img src="<?php print $paveikslelis; ?>" alt="paveikelis"></div>
        <div><img src="<?php print $paveikslelis; ?>" alt="paveikelis"></div>
        <div><img src="<?php print $paveikslelis; ?>" alt="paveikelis"></div>
        <div><img src="<?php print $paveikslelis; ?>" alt="paveikelis"></div>
    </div>
</section>


<section class="siuksliu-deze">
    <h1>5 Uzduotis - siuksliu deze</h1>
    <pre>
    $siukles_turis = 40; (dm3)
    $siuksliu_turis_avg_per_day = 15;
    $max_kaupo_turis = [rand];
    </pre>
    <h2>Po keliu dienu siuskledeze bus pilna ir gali kilti barnis?</h2>

    <?php print $tekstas; ?>
</section>


<section class="grikiu-uzduotis">
    <h1>6 Uzduotis - grikiai</h1>
    <pre>
    $grikiai = 5000; //g
    $per_diena = rand(200, 500); //g

    Kiek dienu gales valgyti grikius?

    Jei turesiu $grikiai g. grikiu, galesiu juos valgyti
    $survive_days dienu. jei pradesiu siandien, grikiai
    pasibaigs [data]
    </pre>
    <?php print kiek_dienu() ?>
</section>

<section>
    <h1>7 Uzduotis - Masinos su for cycle</h1>
    <pre>
        $array = [69, 70, 71];
        unset(array[0]);
        //$array = [70;71];

        isspausdina visas $array vertes
        //naudojama tik debaginimui!!

        var_dump(array);

        funkcija patikrinti ar elementas yra masyve
        $radau = in_array('ko_ieskau', $array);

        foreach

        $array = [20 ,30, 69];
        foreach ($array as $key => $value) {
        key//cycle #0 | value: 20
        cycle #1 | value: 30
        cycle #2 | value: 69
        }
    </pre>


</section>


<section>
    <h1>9 uzduotis - rankine ir joje telpantys daiktai / foreach</h1>
    <?php

    print $purse_size . ' Purse size ' . '<br>';

    $all_items_sum = 0; //without it i got error and do not sum, kodel sitoje vietoje?
    foreach ($items_in_purse as $key => $value) {

        //creating variable to output each item round size
        $all_items_in_purse = $value['size']; //. " One item size" . "<br>"; //ar galima rasyti?

        print $all_items_in_purse . " m3 / One item size" . "<br>";
        //this variable must be in cycle
        $all_items_sum += $all_items_in_purse;
    }

    print $all_items_sum . " m3 / All items sum" . "<br>";


    if ($purse_size >= $all_items_sum) {
        print " All items can fit in the purse";
    } else {
        print " Purse is too small";
    }
    ?>

    <div id="purse">
        <div class="purse-1">
            Item name, Item size
        </div>
        <div class="purse-2">
            Item name, Item size
        </div>
        <div class="purse-3">
            Item name, Item size
        </div>
    </div>


</section>

<section>
    <h1>Nauja pamoka</h1>
    <?php
    $vardas = ' Tomas ';
    $amzius = 19;
    $statusas = 'studijuoja'; //studijuoja, dirba, nedirba

    if ($amzius >= 0 && $amzius <= 18) {
        print $vardas . " Yra nepilnametis ir netinkamas kariuomenei." . "<br>";
        //print $vardas . " netinkamas kariuomenei";
    } elseif ($amzius >= 18 && $amzius < 65) {
        print $vardas . " yra pilnametis.";
    }
    if ($amzius <= 26) {
    }
    if ($statusas == "dirba" || $statusas == "nedirba. ") {
        print $vardas . "Tinkamas kariuomenei.";
    } elseif ($statusas == "studijuoja") {
        print $vardas . "netinkamas kariuomenei, nes studijuoja.";
    } elseif ($amzius >= 27) {
        print $vardas . " netinkamas kariuomenei.";
    } elseif ($amzius >= 65) {
        print $vardas . " Yra pensininkas.";
        print $vardas . " netinkamas kariuomenei";
    } elseif ($amzius <= 0) {
        print " Klaida. Blogai nurodytas amzius";
    }

    //atspausdinti ar jis nepilanmetis ar tinkamas kariuomenei pagal amziu
    //jei dirba/nedirba tinkamas kariuomenei / netinkamas
    //yra pencininkas/netinkantis kariuomenei. klaidingai amzius nurodytas

    ?>

    <pre>
         metami du kauliukai (isvis 4 kauliukai), viena kauliuka metu as kita kolega
        aprasyti kada kas laimi pralaimi
    </pre>


</section>

<section>
    <h1>nuotaikos termometras</h1>

    <?php
    //    $istorijos = [
    //            'px' => [
    //              'skauda galva',
    //              'nenuskambejo zadintuvas',
    //              'nera kavos',
    //              'mano eile vedzioti suni'
    //            ],
    //            'bl' => [
    //                'suduzo telefonas',
    //                'rytinis kamstis',
    //                'nesikuria masina'
    //            ],
    //            'nx' => [
    //              'neveikia php',
    //              'nera ciumak',
    //              'pradure padanga'
    //            ],
    //            'pz2a' => [
    //               'uzsidege masina',
    //               'pabego zmona'
    //            ],
    //    ];
    ////kelsim i kvadraciuka zodi px bl ir t.t
    //    $randomise = rand(0, count($random_integer, $istorijos)-1); //countas neskaicuojasi nuo nului bet nuo vieneto todel rasom minus vienas kad skaiciuotusi nuo nulio
    //
    //    function listas($istorijos) {
    //        $listas = []; //count skaiciuoja blokus nuo nulio
    //        for($x = 0; $x < count($istorijos); $x++){ //$x yra tas key
    ////abu turi buti true ir bus $x arba nulis arba vienetas
    //            if ($random_integer >= 1 && $x == 1){
    //                $listas[$x]['story'] = $istorijos['px'][rand(0, count($istorijos['px']) -1)];
    //                $listas[$x]['text_color'] = 'text-green';
    //                $listas[$x]['css_color'] = 'green';
    //                $listas[$x]['metertext'] = 'PX';
    //
    //            } elseif (){
    //                $listas[$x]['story'] = $istorijos['px'][rand(0, count($istorijos['px']) -1)];
    //                $listas[$x]['text_color'] = 'text-green';
    //                $listas[$x]['css_color'] = 'green';
    //                $listas[$x]['metertext'] = 'PX';
    //
    //            } elseif (){
    //                $listas[$x]['story'] = $istorijos['px'][rand(0, count($istorijos['px']) -1)];
    //                $listas[$x]['text_color'] = 'text-green';
    //                $listas[$x]['css_color'] = 'green';
    //                $listas[$x]['metertext'] = 'PX';
    //
    //            } elseif (){
    //                $listas[$x]['story'] = $istorijos['px'][rand(0, count($istorijos['px']) -1)];
    //                $listas[$x]['text_color'] = 'text-green';
    //                $listas[$x]['css_color'] = 'green';
    //                $listas[$x]['metertext'] = 'PX';
    //                }
    //            }
    //        }
    //    }
    //
    //
    //


    ?>

    <p>cia bus termometras</p>


</section>


<section>
    <h1>kartojimas</h1>

    <?php

    $array = [
        'vartotojai' => [
            'vardas' => 'Tomas',
            'pareigos' => 'Saltkalvis',
            'id' => 123456,
            'korpusas_kuriame_dirba' => 'B2',

        ],
        'inventorius' => [
            'pc' => 13,
            'siuksles' => 2,
            'atsakingas_asmuo' => 'Paulius',

        ],
    ];

    foreach ($array as $key => $value) {
        $i = 0;
        $i++;
        if ($i == 1) {
            $pirmasis_pavadinimas = $key; //atspaudina 'Vartotojai'
        } elseif ($i == 2) {
            $antrasis_pavadinimas = $key; //atspaudina 'Inventorius'
        }

        foreach ($value as $headeriai => $td) {
            print $headeriai;
            $i++;
            if ($i == 1) {
                $pirmasis_masyvas_key = $headeriai; // atspausdina pirmas masyvas key
                foreach ($value as $headeriai => $td) {
                    $pirmasis_pavadinimas_key = $headeriai; //atspausdina 'pirmasis masyvas key'
                }
            } elseif ($i == 2) {
                $antras_pavadinimas = $key; // atspausdina ""inventorous''
                foreach ($value as $headeriai => $td) {
                    $antrasis_pavadinimas_key = $headeriai; //atspausdina 'antrasis masyvas key'
                }
            }
        }

    }


    ?>

    <table>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>


</section>

</body>
</html>


