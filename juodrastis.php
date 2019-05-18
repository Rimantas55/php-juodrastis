<?php
//kiek cizu per metus, kiek isleis pinigu, kiek sutaupys
function cizos()
{

    for ($surukytos_cizos_per_savaite = 1; $surukytos_cizos_per_savaite < 5; $surukytos_cizos_per_savaite++) {

        $savaites = 52;
        $cizos_mon_thu = rand(3, 4) * 4;//surukytos cizos per 4 dienas
        $cizos_fri = rand(10, 20);
        $cizos_sat_sun = rand(1, 3);
        $surukytos_cizos_per_savaite = $cizos_mon_thu + $cizos_fri + $cizos_sat_sun;
        $pakelio_kaina = 3.50;
        $vienos_cigaretes_kaina = $pakelio_kaina / 20;
        $per_metus_surukytos_cigaretes = $surukytos_cizos_per_savaite * $savaites;
        $per_metus_isleisti_pinigai_cigaretems = $surukytos_cizos_per_savaite * $savaites *  $vienos_cigaretes_kaina;
        $islaidos_rukant_nuo_pr_kr = $cizos_mon_thu * $savaites * $vienos_cigaretes_kaina;

    }

    print "Per metus tu surukai " . $per_metus_surukytos_cigaretes . " cigareciu ";
    print ' ir isleidi ' . $per_metus_isleisti_pinigai_cigaretems .  " Eur" . "<br>";
    print "Jei rukysi tik nuo Pr iki Kt, surukysi " .  $cizos_mon_thu * $savaites . " cigareciu ir sutaupysi ";
    print $per_metus_isleisti_pinigai_cigaretems - $islaidos_rukant_nuo_pr_kr;
}




//----------------------
//didejancios bombos php

$bombos_aukstis = 80 + (date("s") * 5);
$bombos_plotis = 120 + (date("s") * 5);



//skirtingu oru php


//    $sauleta = "Sauleta";
//    $debesuota = "Debesuota";
//    $be_lietaus = "be lietaus";
//    $su_lietum = "su lietum";
//$orai = [
//        " Sauleta " => " saules spindulys ",
//        " Debesuota "  => " daug debesu ",
//        " be lietaus "  => " nera lietaus ",
//        " su lietum "  => " daug lietaus ",
//    ];

//$orai = [
//    " Sauleta " => " saules spindulys ",
//    " Debesuota "  => " daug debesu ",
//    " be lietaus "  => " nera lietaus ",
//    " su lietum "  => " daug lietaus ",
//];

$orai = [
    " 1a " =>  [
        'kambariu skaicius' => 5 . ' kambariai',
        'lygiu skaicius' => '4 lygiai',
    ],
    " 2a "  => " Debesuota ",
    " 3a "  => " be lietaus ",
    " 4a "  => " su lietum ",
];







//-------------------
//Siuksledeze

$siukles_turis = 40; //(dm3)
$siuksliu_turis_avg_per_day = 15;
$max_kaupo_turis = rand(10, 20);//cia tas kur virsus susikaups;

$dienu = round(($siukles_turis + rand(10, 20)) / $siuksliu_turis_avg_per_day);
$laikas = date('Y-m-d', strtotime('+' . $dienu . 'days')); //"+$dienu days" antras variantas


$tekstas = "Po $dienu dienu, data: $laikas reikia ismesti siuskles, kad nekiltu barnis su zmona ";


//-------------------
//grikiu skaiciavimas

function kiek_dienu()
{
    // $grikiai = 5000; //g
    $x = 0;

    for ($i = 1; $i < 5000; $i++) {

        $i += rand(200, 500); //g
        $x++;//dienu skaicius
        print $i . " Ciklo rezultatas / ";
        print $x . " dienos" . "<br>";
    }
    print "<h3>uz ciklo paliktas print palieka galutini varianta </h3>" . "</br>";
    print "// " . $i . " Ciklo rezultatas / ";
    print $x . " dienos" . "<br>";
}

//cia toks kazkoks gudresnis
//    $numbers = range(1, 10);
//    echo implode('+', $numbers) . '=' . array_sum($numbers);


//Rankinuko php

$purse_size = rand(20, 50);

$items_in_purse = [
    [
        'name' => 'wallet',
        'size' => rand(5, 10),
        'color' => rand(0, 1), //it means light or dark
    ],
    [
        'name' => 'Cometics',
        'size' => rand(10, 20),
        'color' => rand(0, 1),
    ],
    [
        'name' => 'Pan',
        'size' => rand(20, 30),
        'color' => rand(0, 1),
    ],
];

//print $purse_size . ' Purse size ' . '<br>';
//
//$all_items_sum = 0; //without it i got error and do not sum
//
//
//foreach ($items_in_purse as $key => $value) {
//
//    //$all_items_in_purse = 0; // nebutina taip rasyti
//    //creating variable to output each item round size
//    $all_items_in_purse = $value['size']; //. " One item size" . "<br>"; //ar galima rasyti?
//
//    print $all_items_in_purse . " m3 / One item size" . "<br>";
//    //this variable must be in cycle
//    $all_items_sum += $all_items_in_purse;
//}
//
//print $all_items_sum . " m3 / All items sum" . "<br>";
//
////cia neaisku kodel negali buti >= ir neveike teisingai?
//
//

//    if ($purse_size >= $all_items_sum) {
//        print " All items can fit in the purse";
//    } else {
//        print " Purse is too small";
//    }
