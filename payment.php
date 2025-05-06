<?php

$textas = $_GET['wp_sms'];
$siuntejo_nr = $_GET['wp_from'];
$tr_nr = $_GET['wp_to'];
$kaina = $_GET['wp_amount'];
$smss = explode(" ", $textas);
$slapyvardis = $smss[0];
$plus = $smss[1];
$pava = $smss[1];
$nick = $smss[3];
$nx = $smss[4];
$uzpiso = $smss[5];
$nic = $smss[2];
//////////////////////// 1 LITAS //////////////////////////////////////

if($plus == "DBZ5") {

            $kr = $kr + 2;
            $open = fopen("account/$nic.txt", "w");
            fwrite($open, "$kr");
            fclose($open);
            @chmod("account/$nic.txt", 0777);
$sms_litu = @file_get_contents("smstop/$nic.txt") + $kaina / 100;
@file_put_contents("smstop/$nic.txt", "$sms_litu");		

echo "OK. SMS Gavome.";
exit();
}

?>