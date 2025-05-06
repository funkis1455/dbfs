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
$kur = "Kapsulių Korporacija";
include ("config.php");
echo"<link href=\"css/$nustatymai[20].css\" rel=\"stylesheet\" type=\"text/css\"/>
</head>"; 
echo "<div class=\"in\"><div class=\"logo\"><img src=\"imgs/logo-$mm[110].png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center; border-top: 1px solid #000000;\">";

if ($id == ""){echo"<b>Kapsulių Korporacija</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/dr. breif.png' alt=\"\"/><br/>
<b>Sveiki atvykę į Kapsulių Korporacija.</b><br/>
Aš esu <b>Dr. Briefs</b>, aš jums galiu pagaminti visokiu daiktu nuo prietaisu iki aprangų, tiesiog už pagamintus daiktus jums reikęs sumokėti tam tikra suma.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Daiktų gamybą:</b>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"capsule_corp.php?id=Majin_armor\">Majin armor</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"capsule_corp.php?id=Magic_armor\">Magic armor</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"capsule_corp.php?id=Fusion_armor\">Fusion armor</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"capsule_corp.php?id=Majin_sword\">Majin sword</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"capsule_corp.php?id=Magic_sword\">Magic sword</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"capsule_corp.php?id=Fusion_sword\">Fusion sword</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"capsule_corp.php?id=Radar\">Radar</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Radar"){echo"<b>Kapsulių Korporacija</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/dr. breif.png' alt=\"\"/><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Daikto pavadinimas:</b> Radar<br/>
<small>Paskirtis - drakono rutulių ieškojimui</small>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Pagaminimo kaina:</b> 100 000$$
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Reikalingos medžiagos:</b> 500 Microschem
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"capsule_corp.php?id=Radar2\">Daryti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"capsule_corp.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Radar2"){ 
if ($dari[5] < 500 or $pinigai < 100000){ echo "Jūs neturite visko ko reikia šitam daiktui pagaminti.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"capsule_corp.php?id=Majin_armor\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Daiktas sėkmingai pagamintas, jis atsirado jūsų Kapsulių dėžutė
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"capsule_corp.php?id=Majin_armor\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
$pinigai = $pinigai - 100000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[5] = $dari[5] - 500;
$dari[19] = $dari[19] + 1;
include("icludekitainf/iras2.php");
}}

if ($id == "Majin_armor"){echo"<b>Kapsulių Korporacija</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/dr. breif.png' alt=\"\"/><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Daikto pavadinimas:</b> Majin armor<br/>
<small>Majin armor prideda 1 000 000 gynybos.</small>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Pagaminimo kaina:</b> 100 000 000$$
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Reikalingos medžiagos:</b> 5 000 Majin scroll
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"capsule_corp.php?id=Majin_armor2\">Daryti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"capsule_corp.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Magic_armor"){echo"<b>Kapsulių Korporacija</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/dr. breif.png' alt=\"\"/><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Daikto pavadinimas:</b> Magic armor<br/>
<small>Magic armor prideda 10 000 000 gynybos.</small>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Pagaminimo kaina:</b> 1 000 000 000$$
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Reikalingos medžiagos:</b> 8 000 Magic ball
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"capsule_corp.php?id=Magic_armor2\">Daryti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"capsule_corp.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Fusion_armor"){echo"<b>Kapsulių Korporacija</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/dr. breif.png' alt=\"\"/><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Daikto pavadinimas:</b> Fusion armor<br/>
<small>Fusion armor prideda 1 000 000 000 gynybos.</small>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Pagaminimo kaina:</b> 30 000 000 000$$
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Reikalingos medžiagos:</b> 15 000 Fusion fail
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"capsule_corp.php?id=Fusion_armor2\">Daryti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"capsule_corp.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Majin_armor2"){ 
if ($dari[6] < 5000 or $pinigai < 100000000){ echo "Jūs neturite visko ko reikia šitam daiktui pagaminti.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"capsule_corp.php?id=Majin_armor\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Daiktas sėkmingai pagamintas, jis atsirado jūsų Kapsulių dėžutė
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"capsule_corp.php?id=Majin_armor\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
$pinigai = $pinigai - 100000000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[6] = $dari[6] - 5000;
$dari[38] = $dari[38] + 1;
include("icludekitainf/iras2.php");
}}

if ($id == "Magic_armor2"){ 
if ($dari[7] < 8000 or $pinigai < 1000000000){ echo "Jūs neturite visko ko reikia šitam daiktui pagaminti.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"capsule_corp.php?id=Majin_armor\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Daiktas sėkmingai pagamintas, jis atsirado jūsų Kapsulių dėžutė
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"capsule_corp.php?id=Majin_armor\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
$pinigai = $pinigai - 1000000000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[7] = $dari[7] - 8000;
$dari[39] = $dari[39] + 1;
include("icludekitainf/iras2.php");
}}

if ($id == "Fusion_armor2"){ 
if ($dari[8] < 15000 or $pinigai < 30000000000){ echo "Jūs neturite visko ko reikia šitam daiktui pagaminti.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"capsule_corp.php?id=Majin_armor\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Daiktas sėkmingai pagamintas, jis atsirado jūsų Kapsulių dėžutė
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"capsule_corp.php?id=Majin_armor\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
$pinigai = $pinigai - 30000000000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[8] = $dari[8] - 15000;
$dari[40] = $dari[40] + 1;
include("icludekitainf/iras2.php");
}}

if ($id == "Majin_sword"){echo"<b>Kapsulių Korporacija</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/dr. breif.png' alt=\"\"/><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Daikto pavadinimas:</b> Majin sword<br/>
<small>Majin sword prideda 1 000 000 jegos.</small>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Pagaminimo kaina:</b> 100 000 000$$
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Reikalingos medžiagos:</b> 5 000 Majin scroll
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"capsule_corp.php?id=Majin_sword2\">Daryti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"capsule_corp.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Magic_sword"){echo"<b>Kapsulių Korporacija</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/dr. breif.png' alt=\"\"/><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Daikto pavadinimas:</b> Magic sword<br/>
<small>Magic sword prideda 10 000 000 jėgos.</small>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Pagaminimo kaina:</b> 1 000 000 000$$
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Reikalingos medžiagos:</b> 8 000 Magic ball
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"capsule_corp.php?id=Magic_sword2\">Daryti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"capsule_corp.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Fusion_sword"){echo"<b>Kapsulių Korporacija</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/dr. breif.png' alt=\"\"/><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Daikto pavadinimas:</b> Fusion sword<br/>
<small>Fusion sword prideda 1 000 000 000 jėgos.</small>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Pagaminimo kaina:</b> 30 000 000 000$$
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Reikalingos medžiagos:</b> 15 000 Fusion fail
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"capsule_corp.php?id=Fusion_sword2\">Daryti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"capsule_corp.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Majin_sword2"){ 
if ($dari[6] < 5000 or $pinigai < 100000000){ echo "Jūs neturite visko ko reikia šitam daiktui pagaminti.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"capsule_corp.php?id=Majin_sword\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Daiktas sėkmingai pagamintas, jis atsirado jūsų Kapsulių dėžutė
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"capsule_corp.php?id=Majin_sword\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
$pinigai = $pinigai - 100000000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[6] = $dari[6] - 5000;
$dari[41] = $dari[41] + 1;
include("icludekitainf/iras2.php");
}}

if ($id == "Magic_sword2"){ 
if ($dari[7] < 8000 or $pinigai < 1000000000){ echo "Jūs neturite visko ko reikia šitam daiktui pagaminti.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"capsule_corp.php?id=Majin_sword\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Daiktas sėkmingai pagamintas, jis atsirado jūsų Kapsulių dėžutė
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"capsule_corp.php?id=Majin_sword\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
$pinigai = $pinigai - 1000000000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[7] = $dari[7] - 8000;
$dari[42] = $dari[42] + 1;
include("icludekitainf/iras2.php");
}}

if ($id == "Fusion_sword2"){ 
if ($dari[8] < 15000 or $pinigai < 30000000000){ echo "Jūs neturite visko ko reikia šitam daiktui pagaminti.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"capsule_corp.php?id=Majin_sword\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Daiktas sėkmingai pagamintas, jis atsirado jūsų Kapsulių dėžutė
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"capsule_corp.php?id=Majin_sword\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
$pinigai = $pinigai - 30000000000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[8] = $dari[8] - 15000;
$dari[43] = $dari[43] + 1;
include("icludekitainf/iras2.php");
}}



print'</card></wml>';
?>