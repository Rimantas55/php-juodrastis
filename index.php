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
            width: <?php print $bombos_plotis; ?>px;
            border: 5px solid black;
        }

        img {
            max-width: 100%;
        }

        /*Tado pavyzdys*/
        section {
            display: flex;
            flex-direction: column;
            /*flex-wrap: nowrap;*/
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

        /*paveikelio printinimas*/


        .lapes {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        section.lapes div {
            /*width: 100px;*/
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


<section class="cizu-skaiciavimas">
    <h1>1 Uzduotis - Cizu skaiciavimas</h1>

    <p class="cigareciu-p"><?php print cizos(); ?></p>
</section>


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


<section class="tiksinti-bomba-tado-pvz">
    <h1>Tado pavyzdys</h1>
    <!--        kode po action nera 1 ()skaiciaus vienas kaip kad style nurodyta-->
    <div class="bomb action-<?php print $explosion; ?>"></div>
    <h1>: <?php print $timer; ?></h1>
</section>


<section>
    <h1>3 Uzduotis Kokie bus orai? Spaudziant refresh keiciasi orai</h1>

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

    foreach($array as $key => $value){
        $i = 0;
        $i++;
        if($i == 1){
            $pirmasis_pavadinimas = $key; //atspaudina 'Vartotojai'
        }elseif ($i == 2){
            $antrasis_pavadinimas = $key; //atspaudina 'Inventorius'
        }

        foreach ($value as $headeriai => $td){
            print $headeriai;
            $i++;
            if ($i == 1){
                $pirmasis_masyvas_key = $headeriai; // atspausdina pirmas masyvas key
                foreach ($value as $headeriai => $td){
                    $pirmasis_pavadinimas_key = $headeriai; //atspausdina 'pirmasis masyvas key'
                }
            } elseif ($i == 2){
                $antras_pavadinimas = $key; // atspausdina ""inventorous''
                foreach ($value as $headeriai => $td){
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


