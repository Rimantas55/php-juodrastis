<?php

$days = 365;
$savaites = 52;
$cizos_mon_thu = rand(3, 4);
$cizos_fri = rand(10, 20);
$cizos_sat_sun = rand(1, 3);
$pakelio_kaina = 3.50;


//kodel raso kad tokio variable nera?
$vienos_cizos_kaina = 3.5 / 20;

//kodel raso kad tokio variable nera?
$total_cizu_per_sav = ($cizos_mon_thu * 4) + $cizos_fri + $cizos_sat_sun;

function cizos()
{
    for ($x = 1; $x <= 5; $x++) {
        print $x . " Savaite " . " Testas" . "<br>";
    }
}

print $total_cizu_per_sav . " Cizos per sav " . $vienos_cizos_kaina * $total_cizu_per_sav . " islaidos per sav Euru" . "<br>";

//----------------------
//didejancios bombos php

$bombos_aukstis = 80 + (date("s") * 5);
$bombos_plotis = 120 + (date("s") * 5);


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

function kiek_dienu(){
    // $grikiai = 5000; //g
    $x = 0;

    for ($i = 1; $i < 5000; $i++) {

        $i += rand(200, 500); //g
        $x++;//dienu skaicius
        print $i . " Ciklo rezultatas / ";
        print $x . " dienos" . "<br>";
    }
}

//cia toks kazkoks gudresnis
//    $numbers = range(1, 10);
//    echo implode('+', $numbers) . '=' . array_sum($numbers);