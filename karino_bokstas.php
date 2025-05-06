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
$kur = "Karino bokštas";
include ("config.php");
echo"<link href=\"css/$nustatymai[20].css\" rel=\"stylesheet\" type=\"text/css\"/>
</head>";

echo "<div class=\"in\"><div class=\"logo\"><img src=\"imgs/logo-$mm[110].png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center; border-top: 1px solid #000000;\">";

if ($id == ""){ 
echo"<b>Karino bokštas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/karin.png\" alt=\"\"/><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Karinas tave palydės pas žemės dieva kuris tau leis 17:00-18:00 metu kaip atsidarys laiko ir sielos kambarys ten treniruotis 1 valandą.
Pasitreniraves 1 valandą įgausite 1% jegos ir 2% gynybos.</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"karino_bokstas.php?id=pirkti_pupas\">Pirkti stebuklingų pupų</a> <br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"karino_bokstas.php?id=vanduo\">Dieviškasis vanduo</a> <br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "pirkti_pupas"){ 
$kronu = @file_get_contents("kronoss/$nick.txt");
echo"<b>Karino bokštas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
1 kreditas - 1 Stebuklingos pupos</div>
<div class=\"meniu\" style=\"text-align: left;\">
Turite kreditų: <b>$kronu</b><br/>
Kiek išleisite kreditų?<br/>
<form action='karino_bokstas.php?id=perku_pup&amp;kas=1' method='post'>
<input name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'/>
<postfield name=\"kiek\" value=\"$(kiek)\"/>
</div><div class=\"line\"></div><div class=\"meniu\"style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"karino_bokstas.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "perku_pup") {
if (!file_exists("kronoss/$nick.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$nick.txt"); }
if ($kas == "1"){
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 

if ($kas == "1") {
$g_kaina = 1*$kiek;  
$kiek_gaus = 1*$g_kaina; 
$kiek_gaus = $kiek_gaus/1;
}
if ($kronu < $g_kaina) { $er = "Neužtenka kreditų!"; }
if ($g_kaina == "") { $er = "Paliktas tuščias laukelis."; }

if ($er == ""){
$er = "Sėkmingai nusipirkai $kiek_gaus stebuklingų pupų! ;)";
$fop = @fopen("kronoss/$nick.txt", "w+");
        @fwrite($fop,$kronu-$g_kaina);
        @fclose($fop);
             $dari[33] =  $dari[33] + $kiek_gaus;
include("icludekitainf/iras2.php");
}
echo"<b>Karino bokštas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
$er<br/>
</div><div class=\"line\"></div><div class=\"meniu\"style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"karino_bokstas.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}
 
if ($id == "time_room"){ 
$laikas = date("H");
if($laikas != "17")
{
echo"<b>Laiko ir sielos kambarys</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Šiuo metu laiko ir sielos kambarys uždarytas. Jis atsidaro kiekvieną dieną nuo 17h iki 18h.
</div><div class=\"line\"></div><div class=\"meniu\"style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"karino_bokstas.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo"<b>Laiko ir sielos kambarys</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
   $mm = @explode("|",@file_get_contents("kitokiainf/$nick.txt"));
    if ($bad == "")
    {
		$gaung = $gynyba * 0.02;
	$gaunj = $jega * 0.01;
			$gynyba = $gynyba +$gaung;
	$jega = $jega +$gaunj;
	$gaung = @number_format($gaung, 0, ',', ' ');
	$gaunj = @number_format($gaunj, 0, ',', ' ');
        $bad = "Sekmingai pradetos treiruotes, tai truks 1 valandą, įgausite $gaung gynybos ir $gaunj jėgos.";
 $mm[38] = time()+60*60;
include("icludekitainf/mm.php");

        $prisij = time();
        $fp = fopen("$gameriai", "w");
        fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        fclose($fp);
}
echo"$bad</div><div class=\"line\"></div><div class=\"meniu\"style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"karino_bokstas.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "vanduo"){ 
$kronu = @file_get_contents("kronoss/$nick.txt");
echo"<b>Dieviškasis vanduo </b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Išgėrus šiuo vandens, Jūs negalėsite žaisti šešias valandas. Praėjus 6 valandoms įgausite po 2% jėgos, 5% gynybos ir  50 gyvybių lygių. Jo kaina yra 50 kreditų. 
</div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;)  <a href=\"karino_bokstas.php?id=vanduo2\">Gerti vandenį</a> <br/>
</div><div class=\"line\"></div><div class=\"meniu\"style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"karino_bokstas.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "vanduo2"){ 
if ($kronu < 50) { echo "Neužtenka kreditų!</div><div class=\"line\"></div><div class=\"meniu\"style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"karino_bokstas.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo"<b>Dieviškasis vanduo</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
   $mm = @explode("|",@file_get_contents("kitokiainf/$nick.txt"));
    if ($bad == "")
    {
		$gaung = $gynyba * 0.05;
	$gaunj = $jega * 0.02;
			$gynyba = $gynyba +$gaung;
	$jega = $jega +$gaunj;
	$gaung = @number_format($gaung, 0, ',', ' ');
	$gaunj = @number_format($gaunj, 0, ',', ' ');
        $bad = "Sekmingai išgerta, po 6 valandų, įgausite $gaung gynybos ir $gaunj jėgos ir 50 gyvybų.";
 $mm[37] = time()+60*60*6;
include("icludekitainf/mm.php");
$fop = @fopen("kronoss/$nick.txt", "w+");
        @fwrite($fop,$kronu-50);
        @fclose($fop);
        $prisij = time();
        $fp = fopen("$gameriai", "w");
        fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        fclose($fp);
}
echo"$bad</div><div class=\"line\"></div><div class=\"meniu\"style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"karino_bokstas.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}


?>
</body></html>