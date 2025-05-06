<?php
echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<!DOCTYPE html PUBLIC \"-//WAPFORUM//DTD XHTML Mobile 1.0//EN\" \"http://www.wapforum.org/DTD/xhtml-mobile10.dtd\">
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"lt\" lang=\"lt\">
<head>
<meta http-equiv=\"Content-Style-Type\" content=\"text/css\"/>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
<meta http-equiv=\"Cache-Control\" content=\"no-cache\"/>";
$dsghj = date("H:i:s Y-m-d");
echo "<title>Drakonų kovą</title>
<link rel=\"shortcut icon\" href=\"imgs/ico.ico\" type=\"image/x-icon\"/>";
$kur = "Parduotuves";
include ("config.php");
echo"<link href=\"css/$nustatymai[20].css\" rel=\"stylesheet\" type=\"text/css\"/>
</head>";
echo "<div class=\"in\"><div class=\"logo\"><img src=\"imgs/logo-$mm[110].png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center; border-top: 1px solid #000000;\">";
  
if ($id == "parde" or $id=="") { echo"<b>Parduotuves</b></b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"parda.php?id=\">Šarvai</a> |
<a href=\"parda.php?id=ginklai\">Ginklai</a> |
<a href=\"parda.php?id=Gyvybiu eliksirai\">Gyvybiu eliksirai</a> 
</div><div class=\"meniu\" style=\"text-align: left;\">
(») <a href=\"parda.php?id=perku_sarva&amp;kas=cloth\">Cloth</a> (50 000$ -  500)<br/>
(») <a href=\"parda.php?id=perku_sarva&amp;kas=Kame cloth\">Kame cloth</a> (550 000$ - 1 200)<br/>
(») <a href=\"parda.php?id=perku_sarva&amp;kas=Namekian cloth\">Namekian cloth</a> (1 200 000$ - 2 500)<br/>
(») <a href=\"parda.php?id=perku_sarva&amp;kas=Saiyan armor\">Saiyan armor</a> (3 250 000$ - 3 800)<br/>
(») <a href=\"parda.php?id=perku_sarva&amp;kas=Saiyan prince armor\">Saiyan prince armor</a> (4 500 000$ - 4 500)<br/>
(») <a href=\"parda.php?id=perku_sarva&amp;kas=Fusion cloth\">Fusion cloth</a> (6 600 000$ - 7 000)<br/>
(») <a href=\"parda.php?id=perku_sarva&amp;kas=Ginyu armor\">Ginyu armor</a> (19 000 000$ - 14 900)<br/>
(») <a href=\"parda.php?id=perku_sarva&amp;kas=Dragon armor\">Dragon armor</a> (30 000 000$ - 15 500)<br/>
(») <a href=\"parda.php?id=perku_sarva&amp;kas=Saiyaman costume\">Saiyaman costume</a> (50 000 000$ - 30 000)<br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=miestas\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "ginklai") { echo"<b>Parduotuves</b></b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"parda.php?id=\">Šarvai</a> |
<a href=\"parda.php?id=ginklai\">Ginklai</a> |
<a href=\"parda.php?id=Gyvybiu eliksirai\">Gyvybiu eliksirai</a> 
</div><div class=\"meniu\" style=\"text-align: left;\">
(») <a href=\"parda.php?id=perku_ginkla&amp;kas=Staff\">Staff</a> (100 000$ - 500)<br/>
(») <a href=\"parda.php?id=perku_ginkla&amp;kas=Knife\">Knife</a> (500 000$ - 1 000)<br/>
(») <a href=\"parda.php?id=perku_ginkla&amp;kas=Sword\">Sword</a> (1 500 000$ - 2 500)<br/>
(») <a href=\"parda.php?id=perku_ginkla&amp;kas=God staff\">God staff </a>(3 000 000$ - 4 200)<br/>
(») <a href=\"parda.php?id=perku_ginkla&amp;kas=Magic staff\">Magic staff</a> (5 000 000$ - 5 000)<br/>
(») <a href=\"parda.php?id=perku_ginkla&amp;kas=Janemba sword\">Janemba sword </a>(7 000 000$ - 7 500)<br/>
(») <a href=\"parda.php?id=perku_ginkla&amp;kas=Ginyu sword\">Ginyu sword </a>(20 000 000$ - 13 500)<br/>
(») <a href=\"parda.php?id=perku_ginkla&amp;kas=Yamcha sword\">Yamcha sword </a>(29 000 000$ - 25 000)<br/>
(») <a href=\"parda.php?id=perku_ginkla&amp;kas=Yajirobe sword\">Yajirobe sword </a>(35 000 000$ - 30 000)<br/>
(») <a href=\"parda.php?id=perku_ginkla&amp;kas=Dragon sworde\">Dragon sword</a> (60 000 000$ - 42 000)<br/>
(») <a href=\"parda.php?id=perku_ginkla&amp;kas=Trunks sword\">Trunks sword </a>(100 000 000$ - 50 000)<br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=miestas\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Gyvybiu eliksirai") { echo"<b>Parduotuves</b></b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"parda.php?id=\">Šarvai</a> |
<a href=\"parda.php?id=ginklai\">Ginklai</a> |
<a href=\"parda.php?id=Gyvybiu eliksirai\">Gyvybiu eliksirai</a>
</div><div class=\"meniu\" style=\"text-align: left;\">
(») <a href=\"parda.php?id=perku_gyvybes&amp;kas=x1 Gyvybiu eliksiras\">x1 Gyvybiu eliksiras</a> (100$)<br/>
(») <a href=\"parda.php?id=perku_gyvybes&amp;kas=x5 Gyvybiu eliksiras\">x5 Gyvybiu eliksiras</a> (450$)<br/>
(») <a href=\"parda.php?id=perku_gyvybes&amp;kas=x10 Gyvybiu eliksiras\">x10 Gyvybiu eliksiras</a> (900$)<br/>
(») <a href=\"parda.php?id=perku_gyvybes&amp;kas=x50 Gyvybiu eliksiras\">x50 Gyvybiu eliksiras</a> (4 500$)<br/>
(») <a href=\"parda.php?id=perku_gyvybes&amp;kas=x100 Gyvybiu eliksiras\">x100 Gyvybiu eliksiras</a> (40 000$)<br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=miestas\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "perku_gyvybes") {
if ($kas == "x1 Gyvybiu eliksiras") {
$g_kaina = 100;
$dari[18] = $dari[18]+1; }

if ($kas == "x5 Gyvybiu eliksiras") {
$g_kaina = 450;
$dari[18] = $dari[18]+5; }

if ($kas == "x10 Gyvybiu eliksiras") {
$g_kaina = 900;
$dari[18] = $dari[18]+10; }

if ($kas == "x50 Gyvybiu eliksiras") {
$g_kaina = 4500;
$dari[18] = $dari[18]+50; }

if ($kas == "x100 Gyvybiu eliksiras") {
$g_kaina = 40000;
$dari[18] = $dari[18]+100; }

if ($pinigai < $g_kaina) { $er = "Neužtenka pinigų!"; }
if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Gyvybiu eliksirai nupirkti!<br/>Jie atsirado tavo kapsulių dėžutėje.";
$pin = "$pinigai"-"$g_kaina";
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras2.php");
}
echo"<b>Gyvybiu eliksirai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$er</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"parda.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "perku_ginkla") {
if ($kas == "Staff") {
$g_kaina = 100000;
$dari[22] = $dari[22]+1; }

if ($kas == "Knife") {
$g_kaina = 500000;
$dari[23] = $dari[23]+1; }

if ($kas == "Sword") {
$g_kaina = 1500000;
$dari[24] = $dari[24]+1; }

if ($kas == "God staff") {
$g_kaina = 3000000;
$dari[25] = $dari[25]+1; }

if ($kas == "Magic staff") {
$g_kaina = 5000000;
$dari[26] = $dari[26]+1; }

if ($kas == "Janemba sword") {
$g_kaina = 7000000;
$dari[27] = $dari[27]+1; }

if ($kas == "Ginyu sword") {
$g_kaina = 20000000;
$dari[28] = $dari[28]+1; }

if ($kas == "Yamcha sword") {
$g_kaina = 29000000;
$dari[29] = $dari[29]+1; }

if ($kas == "Yajirobe swor") {
$g_kaina = 35000000;
$dari[30] = $dari[30]+1; }

if ($kas == "Dragon sworde") {
$g_kaina = 60000000;
$dari[31] = $dari[31]+1; }

if ($kas == "Trunks sword") {
$g_kaina = 100000000;
$dari[32] = $dari[32]+1; }

if ($pinigai < $g_kaina) { $er = "Neužtenka pinigų!"; }
if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Ginklas nupirkti!<br/>Jie atsirado tavo kapsulių dėžutėje.";
$pin = "$pinigai"-"$g_kaina";
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras2.php");
}
echo"<b>Ginklai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$er</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"parda.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "perku_sarva") {
if ($kas == "cloth") {
$g_kaina = 50000;
$dari[9] = $dari[9]+1; }

if ($kas == "Kame cloth") {
$g_kaina = 550000;
$dari[10] = $dari[10]+1; }

if ($kas == "Namekian cloth") {
$g_kaina = 1200000;
$dari[11] = $dari[11]+1; }

if ($kas == "Saiyan armor") {
$g_kaina = 3250000;
$dari[12] = $dari[12]+1; }

if ($kas == "Saiyan prince armor") {
$g_kaina = 4500000;
$dari[13] = $dari[13]+1; }

if ($kas == "Fusion cloth") {
$g_kaina = 6600000;
$dari[14] = $dari[14]+1; }

if ($kas == "Ginyu armor") {
$g_kaina = 19000000;
$dari[15] = $dari[15]+1; }

if ($kas == "Dragon armor") {
$g_kaina = 30000000;
$dari[16] = $dari[16]+1; }

if ($kas == "Saiyaman costume") {
$g_kaina = 50000000;
$dari[17] = $dari[17]+1; }

if ($pinigai < $g_kaina) { $er = "Neužtenka pinigų!"; }
if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Šarvai nupirkti!<br/>Jie atsirado tavo kapsulių dėžutėje.";
$pin = "$pinigai"-"$g_kaina";
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras2.php");
}
echo"<b>Šarvai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$er</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"parda.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}



print '</body></html>';
?>