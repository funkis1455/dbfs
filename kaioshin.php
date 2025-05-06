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
$kur = "Kaioshin";
include ("config.php");
echo"<link href=\"css/$nustatymai[20].css\" rel=\"stylesheet\" type=\"text/css\"/>
</head>";

echo "<div class=\"in\"><div class=\"logo\"><img src=\"imgs/logo-$mm[110].png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center; border-top: 1px solid #000000;\">";

if ($lygis < 150){ echo "Čia galima patekti tik nuo 150 lygio.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{

if ($id == ""){

echo"<img src=\"imgs/Kaioshin.png\" alt=\"\"/></div><div class=\"meniu\" style=\"text-align: center;\">
Kaioshin planetoje gyvena visi vyriausi ir galingiausi kai, kurie turi dydeliu galiu ir ipatingu sugebejimu, vykdant kaioshin misijas jūs įgauti naujų jėgų, galesite virsti <b>Gold Oozaru</b>, bei ištraukti legendini Z karda ir išlaisvinti <b>Old Kaioshin</b>. 
</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($mm[101] == "+"){ }else{echo"[&#8226;]  <a href=\"kaioshin.php?id=West_Kaioshin\">West Kaioshin</a><br/></div><div class=\"meniu\">";}
if ($mm[100] == "+"){ }else{echo"[&#8226;]  <a href=\"kaioshin.php?id=Grand_Kaioshin\">Grand Kaioshin</a><br/></div><div class=\"meniu\">";}
if ($mm[102] == "+"){ }else{echo"[&#8226;]  <a href=\"kaioshin.php?id=North_Kaioshin\">North Kaioshin</a><br/></div><div class=\"meniu\">";}
if ($mm[103] == "+"){ }else{echo"[&#8226;]  <a href=\"kaioshin.php?id=South_Kaioshin\">South Kaioshin</a><br/></div><div class=\"meniu\">";}
if ($mm[104] == "+"){ }else{echo"[&#8226;]  <a href=\"kaioshin.php?id=Z_sword\">Legendinis Z kardas</a><br/></div><div class=\"meniu\">";}
if ($mm[105] == "+"){ }else{echo"[&#8226;]  <a href=\"kaioshin.php?id=Old_Kaioshin\">Old Kaioshin</a><br/></div><div class=\"meniu\">";}
if ($mm[77] == "+"){ }else{echo"[&#8226;]  <a href=\"kaioshin.php?id=kibito\">Kibito misiją</a><br/></div><div class=\"meniu\">  ";}
echo"
[&#8226;]  <a href=\"kaioshin.php?id=kviesti\">Black Smoke Shenron</a><br/></div><div class=\"meniu\">
[&#8226;]  <a href=\"kaioshin.php?id=misijos\">Kovų misijos</a><br/></div><div class=\"meniu\">";
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"pagrindinis.php?\">Į Žėmę</a></b><br/>
</div><div class=\"foot\">$bottom</div></div>";
$prisij = time();
$fp = @fopen("$gameriai","w");
@fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
@fclose($fp);
}

if ($id == "Old_Kaioshin"){ 
echo"<b>Old Kaioshin</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/Old Kaioshin.png' ALT='*'><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Aš esu <b>Old Kaioshin</b>, jums reikia ištraukti legendinį Z kardą, įvykdyti  <b>North Kaioshin</b> misiją, kad gautumėt sulaužytą z kardą, jūs davę man sulaužyta kardą paversiu jūs Gold Oozaru.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b><u>Atneškite:</u></b> Sulaužyta Z kardą<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b><u>Atlygis:</u></b> Gold Oozaru.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kaioshin.php?id=Old_Kaioshin2\">Vykdyti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Atgal</a><br/>
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "Old_Kaioshin2"){ 
if ($mm[105] == "+"){ echo "Šį misiją jau įvykditą</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($dari[37] < 1){ 
echo"<b>Jūs neturite visko ko reikia šitai misijai.</b></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{

echo "Old Kaioshin misiją įvykdita, jus virtote Gold Oozaru.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";

        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|Gold Oozaru|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[37] = $dari[37] - 1;
$skills[0]= "0";
$mm[105]= "+";
include("icludekitainf/skill.php");
include("icludekitainf/iras2.php");
}}}

if ($id == "Z_sword"){ 
echo"<b>Legendinis Z kardas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/Z sword.png' ALT='*'><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Įštraukite legendinį Z kardą.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b><u>Reikia:</u></b> 200 lygio ir 5 000 000 kovinė galios.<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b><u>Atlygis:</u></b> Z kardas.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kaioshin.php?id=Z_sword2\">Vykdyti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Atgal</a><br/>
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "Z_sword2"){ 
$def = $defense / 2.5;
$dmg = $damage / 0.5;
$dmg2=round(($dmg-1),0);
$def2=round(($def-1),0);
$attakos=$jega/1.5;
$ginybos=$gynyba/1.5;
$gyvybiu=$gyvybes/1.5;
$patirties=$sugebejimas/1.5; 
$dmg22 = @number_format($dmg, 0, ',', ' ');
$def22 = @number_format($def, 0, ',', ' ');

if($def>=$dmg){$jusu_kgs ="$dmg2";}
if($dmg>$def) {$jusu_kgs ="$def2";}
if ($mm[104] == "+"){ echo "Šį misiją jau įvykditą</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($lygis < 200){ 
echo"<b>Jūsų lygis per mažas.</b></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($jusu_kgs  < 5000000) { $zin = "Jūsų kovinė galią per mažas."; } else {

echo "Legendinis Z kardas ištrauktas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[36] = $dari[36] + 1;
$mm[104]= "+";
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}}}

if ($id == "South_Kaioshin"){ 
echo"<b>South Kaioshin</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/South Kaioshin.png' ALT='*'><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Aš esu <b>South Kaioshin</b>, įvykdė mano misiją įšaugs jūsų kovinė galia 20%.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b><u>Atneškite:</u></b> 1 000 magic ball.<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b><u>Atlygis:</u></b> +20% kovinios galios.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kaioshin.php?id=South_Kaioshin2\">Vykdyti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Atgal</a><br/>
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "South_Kaioshin2"){ 
if ($mm[103] == "+"){ echo "Šį misiją jau įvykditą</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($dari[7] < 1000){ 
echo"<b>Jūs neturite visko ko reikia šitai misijai.</b></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{

echo "South Kaioshin misiją įvykdyta, jūsų kovinė galia padidėjo 20%.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
	$jega = $jega *1.18;
	$gynyba = $gynyba *1.18;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[7] = $dari[7] - 1000;
$mm[103]= "+";
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}}

if ($id == "North_Kaioshin"){ 
echo"<b>North Kaioshin</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/North Kaioshin.png' ALT='*'><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Aš esu <b>North Kaioshin</b>, man reikia kad jūs ištrauktumėt legendinį Z kardą, O aš jį sulaužysiu kad prisikeltu <b>Old Kaioshin</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b><u>Atneškite:</u></b> Z kardas.<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b><u>Atlygis:</u></b> sulaužytas Z kardas.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kaioshin.php?id=North_Kaioshin2\">Vykdyti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Atgal</a><br/>
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "North_Kaioshin2"){ 
if ($mm[102] == "+"){ echo "Šį misiją jau įvykditą</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($dari[36] < 1){ 
echo"<b>Jūs neturite visko ko reikia šitai misijai.</b></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{

echo "North Kaioshin misiją įvykdyta, gavote sulaužyta Z karda.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";

        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[36] = $dari[36] - 1;
$dari[37] = $dari[37] + 1;
$mm[102]= "+";
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}}

if ($id == "West_Kaioshin"){ 
echo"<b>West Kaioshin</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/West Kaioshin.png' ALT='*'><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Aš esu <b>West Kaioshin</b>, įvykdė mano misiją gausite 3 valandas treniruočių, per kurias įšaugs jūsų kovinė galia 35%.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b><u>Atneškite:</u></b> 7 juodajus drakono rutulius.<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b><u>Atlygis:</u></b> +35% kovinios galios.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kaioshin.php?id=West_Kaioshin2\">Vykdyti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Atgal</a><br/>
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "West_Kaioshin2"){ 
if ($mm[101] == "+"){ echo "Šį misiją jau įvykditą</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($dari[34] < 7){ 
echo"<b>Jūs neturite visko ko reikia šitai misijai.</b></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{

echo "West Kaioshin misiją įvykdita, jūs gavote 3 valandas treinruočiu per kurias jūsų kovinė galia pakils 35%.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
	$jega = $jega *1.31;
	$gynyba = $gynyba *1.31;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[34] = $dari[34] - 7;
$mm[101]= "+";
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}}

if ($id == "Grand_Kaioshin"){ 
echo"<b>Grand Kaioshin</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/Grand Kaioshin.png' ALT='*'><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Aš esu <b>Grand Kaioshin</b> pats vyriausias kajus,  įvykdė mano misiją gausite tam tikru galiu bei daiktu.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b><u>Atneškite:</u></b> 500 Soul stone, 500 Saiyan tail ir 1 juodajį drakono rutulį.<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b><u>Atlygis:</u></b> 2 000 kreditų.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kaioshin.php?id=Grand_Kaioshin2\">Vykdyti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Atgal</a><br/>
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Grand_Kaioshin2"){ 
if ($mm[100] == "+"){ echo "Šį misiją jau įvykditą</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($dari[0] < 500 && $dari[1] < 500 && $dari[34] < 1){ 
echo"<b>Jūs neturite visko ko reikia šitai misijai.</b></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{

echo "Grand Kaioshin misiją įvykdita, jūs gavote 2 000 kreditų.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
		$kr = @file_get_contents("kronoss/$nick.txt");
$kr = $kr + 2000;
@file_put_contents("kronoss/$nick.txt", "$kr");
$dari[0] = $dari[0] - 500;
$dari[1] = $dari[1] - 500;
$dari[34] = $dari[34] - 1;
$mm[100]= "+";
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}}

if ($id == "kibito"){ 
echo"<b>Kibito misiją</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/kibito.png' ALT='*'><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Aš esu <b>Kibito</b> galiu suteikti įpatingu galių, bet už tai man reikia tam tikrų daiktų.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b><u>Reikiami daiktai:</u></b><br/>
<b>Soul stone</b>: 100<br/>
<b>Saiyan tail</b>: 200<br/>
<b>Fusion fail</b>: 350<br/>
<b>Drakono rutulių</b>: 7<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Gausite įvykdžius misiją:</b> x2 kovinės galios ir 50 kreditų.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kaioshin.php?id=kibito2\">Aš viską turiu</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "kibito2"){ 
if ($mm[77] == "+"){ echo "Šį misiją jau įvykditą</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">

<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($dari[0] < 100){ echo "Jūs neturite visko ko reikia šitai misijai.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($dari[1] < 200){ echo "Jūs neturite visko ko reikia šitai misijai.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($dari[8] < 350){ echo "Jūs neturite visko ko reikia šitai misijai.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($dari[20] < 7){ echo "Jūs neturite visko ko reikia šitai misijai.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Gods misiją įvykdita, jūs gavote x2 kovines galios ir 50 kreditų.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
	$jega = $jega *2 ;
	$gynyba = $gynyba *2 ;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
		$kr = @file_get_contents("kronoss/$nick.txt");
$kr = $kr + 50;

@file_put_contents("kronoss/$nick.txt", "$kr");
$dari[0] = $dari[0] - 100;
$dari[1] = $dari[1] - 200;
$dari[8] = $dari[8] - 350;
$dari[20] = $dari[20] - 7;
$mm[77]= "+";
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}}}}}

if ($id == "kviesti"){
if ($lygis < "150")
{
echo"<b>Black Smoke Shenron</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Galėsite patekti tik nuo 150 lygio!</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>
</card></wml>";exit;}
if ($dari[34] < 7){ echo "Jūs neturite 7 juodųjų drakono rutulių.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo"<b>Black Smoke Shenron</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"<img src=\"imgs/black_dragon.png\" alt=\"\"/><br/>Black Smoke Shenron drakonas iškviestas, pasirinkite norą.</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"kaioshin.php?id=d10\">25% jėgos</a><br/>
[&#8226;]  <a href=\"kaioshin.php?id=g10\">25% gynybos</a><br/>
[&#8226;]  <a href=\"kaioshin.php?id=gy10\">25% gyvybių</a><br/>
[&#8226;]  <a href=\"kaioshin.php?id=pinigs\">50 000 000 000 pinigų</a><br/>
[&#8226;]  <a href=\"kaioshin.php?id=kreditu\">10 000 kreditų</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}


if ($id == "d10"){ 
if ($lygis < "150")
{
echo"<b>Black Smoke Shenron</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Galėsite patekti tik nuo 150 lygio!</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>
</card></wml>";exit;}
if ($dari[34] < 7){ echo "Jūs neturite 7 juodųjų drakono rutulių</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Noras išpildytas.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$jega = $jega * 1.17;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[34] = $dari[34] - 7;
include("icludekitainf/iras2.php");
}}

if ($id == "g10"){ 
if ($lygis < "150")
{
echo"<b>Black Smoke Shenron</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Galėsite patekti tik nuo 150 lygio!</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>
</card></wml>";exit;}
if ($dari[34] < 7){ echo "Jūs neturite 7 juodųjų drakono rutulių</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Noras išpildytas.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$gynyba = $gynyba * 1.17;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[34] = $dari[34] - 7;
include("icludekitainf/iras2.php");
}}

if ($id == "gy10"){ 
if ($lygis < "150")
{
echo"<b>Black Smoke Shenron</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Galėsite patekti tik nuo 150 lygio!</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>
</card></wml>";exit;}
if ($dari[34] < 7){ echo "Jūs neturite 7 juodųjų drakono rutulių</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Noras išpildytas.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$gyvybess = $gyvybess * 1.17;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[34] = $dari[34] - 7;
include("icludekitainf/iras2.php");
}}

if ($id == "pinigs"){ 
if ($lygis < "150")
{
echo"<b>Black Smoke Shenron</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Galėsite patekti tik nuo 150 lygio!</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>
</card></wml>";exit;}
if ($dari[34] < 7){ echo "Jūs neturite 7 juodųjų drakono rutulių.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Noras išpildytas.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$pinigai = $pinigai + 50000000000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[34] = $dari[34] - 7;
include("icludekitainf/iras2.php");
}}

if ($id == "kreditu"){ 
if ($lygis < "150")
{
echo"<b>Black Smoke Shenron</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Galėsite patekti tik nuo 150 lygio!</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>
</card></wml>";exit;}
if ($dari[34] < 7){ echo "Jūs neturite 7 juodųjų drakono rutulių</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Noras išpildytas.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$kr = @file_get_contents("kronoss/$nick.txt");
$kr = $kr + 10000;

@file_put_contents("kronoss/$nick.txt", "$kr");
$dari[34] = $dari[34] - 7;
include("icludekitainf/iras2.php");
}}



if ($id == "misijos"){
echo"<b>Misijos</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"frieza_misija.php?id=\">Frieza misiją</a><br/></div><div class=\"meniu\">
[&#8226;]  <a href=\"cell_misija.php?id=\">Cell misiją</a><br/></div><div class=\"meniu\">
[&#8226;]  <a href=\"buu_misija.php?id=\">Buu misiją</a><br/></div><div class=\"meniu\">
[&#8226;]  <a href=\"baby_misija.php?id=\">Baby misiją</a><br/> 
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "treniruot323es3"){
echo"<b>Kaio Shin Treniruotes</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/vietoviu/Kaioshin.png\" alt=\"prev\"/><br/>
</div><div class=\"meniu\" style=\"text-align: center;\"><b>
1 treniruote 1000 pinigų, gausite 1 kovinė galios.</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
Kiek kartų treniruosites?<br/>
<form action='kaioshin.php?id=treniruotes2' method='post'> 
<input name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Treniruotis'/><postfield name=\"kiek\" value=\"$(kiek)\"/>
</form>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "treniruot232es2") {
if ($lygis < 150){ echo "Jūs negalite dar čią.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 

$g_kaina = 1000*$kiek;  
$kiek_gaus1 = 1*$g_kaina; 
$kiek_gaus3 = 3*$g_kaina;
$kiek_gaus1 = $kiek_gaus1/1000;
$kiek_gaus3 = $kiek_gaus3/1000;

if ($pinigai < $g_kaina) { $er = "Neužtenka pingų!"; }
if ($g_kaina == "") { $er = "Paliktas tuščias laukelis."; }

if ($er == ""){
$er = "Pasitreniravote sėkmingai! ";
$pinigai = $pinigai - $g_kaina;
		$gynyba = $gynyba + $kiek_gaus3;
						$jega = $jega + $kiek_gaus1;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||");
fclose($fp);
}
echo"$er<br/></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=treniruotes\">Atgal</a><br/>
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}
/*
$def = $defense / 2.5;
$dmg = $damage / 0.5;
$dmg2=round(($dmg-1),0);
$def2=round(($def-1),0);
$attakos=$jega/1.5;
$ginybos=$gynyba/1.5;
$gyvybiu=$gyvybes/1.5;
$patirties=$sugebejimas/1.5; 
$dmg22 = @number_format($dmg, 0, ',', ' ');
$def22 = @number_format($def, 0, ',', ' ');

if ($id == "machine"){


$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5"; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fp);
echo"<b>Fighting machine</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Fighting machine jūs galite nukauti stipriausia monstrą kuri jūs galite įveikti.<br/>
</div><div class=\"meniu\" style=\"text-align: center;\">"; 
if ($mm[78] == "-"){ echo "Auto kovojimas yrą įšjungtas [<b><a href=\"kaioshin.php?id=ijungti_auto\">Įjungti</a></b>]<br/>";}
else{echo "Auto kovojimas yrą įjungtas [<b><a href=\"kaioshin.php?id=isiungti_auto\">Įšjungti</a></b>]<br/>";}
echo"</div><div class=\"meniu\" style=\"text-align: left;\">"; 
if($def>=$dmg){
echo "Fighting machine kavotojas turi <b>$dmg22</b> kovines galios<br/>
[&#8226;]  <a href=\"kaioshin.php?id=kova&amp;vs=botas&amp;kas=mem&amp;kd=$kodase\">Pulti</a><br/>";
}
if($dmg>$def){
echo "Fighting machine kavotojas turi <b>$def22</b> kovines galios<br/>
[&#8226;]  <a href=\"kaioshin.php?id=kova&amp;vs=botas&amp;kas=mem&amp;kd=$kodase\">Pulti</a><br/>";
}echo"
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom </div></div>";}

if ($id == "ijungti_auto") {
 $mm = explode("|",file_get_contents("kitokiainf/$nick.txt"));
 $mm[78] = "+";
include("icludekitainf/mm.php");
$klaida = "Sekmingai ijungei !";
echo"<b>Auto kovojimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Įjungei auto kovojimą<br/>
</div><div class='line'></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=machine\">Atgal</a><br/>
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "isiungti_auto") {
$mm = explode("|",file_get_contents("kitokiainf/$nick.txt"));
$mm[78] = "-";
include("icludekitainf/mm.php");
echo"<b>Auto kovojimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Išjungei auto kovojimą<br/>
</div><div class='line'></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=machine\">Atgal</a><br/>
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "kova") {
if ($vs == "botas"){

if($def>=$dmg){$lyyygis = "$dmg2";}
if($dmg>$def){$lyyygis = "$def2";}
$x = $lyyygis*0.01;
}

if ($vs == "botas2"){
$boto_lvl = $_POST['boto_lvl'];
$lyyygis = $boto_lvl;
$x = $lyyygis*0.01;
}

$att = round((($lyyygis*2)/4),1);
$att2 = round((($lyyygis*2)/4),1);

$kdp = $_GET['kd']; 
if ($kdp != $aps_kodas or $kdp == "" or strlen($kdp) != 5){ 
echo"<b>KLAIDA</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5";
if ($mm[78] == "-"){ }else{echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"5; url=kaioshin.php?id=kova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\">";}

echo"Turite spausti \"Kovoti toliau\", arba \"Atgal\".</div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"kaioshin.php?id=kova&amp;vs=botas&amp;kd=$kodase&amp;kas=mem\">Kovoti toliau</a></b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=machine\">Atgal</a><br/>
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fp); } else{

if (time() < $floo){ echo"<b>KLAIDA</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5";
if ($mm[78] == "-"){ }else{echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"5; url=kaioshin.php?id=kova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\">";}

echo"Jūs kovojate per greitai.<br/>(<i>Po kovos reikia palaukti 4  sec.</i>)</div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"kaioshin.php?id=kova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\">Kovoti toliau</a></b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=machine\">Atgal</a><br/>
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>"; $fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fp); } else{
if ($mm[40] - time() > 0){$xuj2 = $x * 2;} else {$xuj2 = $x *1;}
echo"<b>Kovą</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Laimejai!</b><br>
</div><div class=\"meniu\" style=\"text-align: center;\">
Jūsų kovinė galia <b>";$lyyygis__prieso = @number_format($lyyygis, 0, ',', ' ');
 if($def>=$dmg){echo"$dmg22";}if($dmg>$def) {echo"$def22";}echo"</b>, o priešo kovinė galia <b>$lyyygis__prieso</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
$dtop = @file_get_contents("dtop/$nick.txt");
$dtop = $dtop + 1;
@file_put_contents("dtop/$nick.txt", "$dtop");

$vtop = @file_get_contents("vtop/$nick.txt");
$vtop = $vtop + 1;
@file_put_contents("vtop/$nick.txt", "$vtop");

$suma = $xuj2+$exp;

$lvl = 99999; 
$enda = 99999; 
$qq = 1.1;
for ($rr=1; $rr<99999; $rr++){ 
if ($rr==1){ $qq = 1.1; } else { $qq = $qq*1.1; }
if ($qq >= $suma/10 && $enda != $rr){ $lvl = $rr; $enda = $rr+1; $buves = $qq; }
if ($enda==$rr){ $left = round($buves*10,1); break; }
}
if ($lvl > $lygis){ 
echo"[&#8226;]  Sveikiname! Jūs pasikėlėt lygį ir gavote 5 nepanaudotus lygio taškus.<br/>
[&#8226;]  Dabar tavo lygis: $lvl</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">"; 
$pointsr = "$points"+"5"; 
}
else
{
$pointsr = $points;
}

if ($kas == "mem"){ 
$ds = rand(0,count($dstone)-1); 
if ($dstone[$ds] == ""){ $dsto = ""; }  
if ($dstone[$ds] == "soul_stone"){ $dsto = "Soul stone"; $masyve = 0; }  
if ($dstone[$ds] == "saiyan_tail"){ $dsto = "Saijan tail"; $masyve = 1; }  
if ($dstone[$ds] == "ginyu_material"){ $dsto = "Ginyu material"; $masyve = 2; }  
if ($dstone[$ds] == "ginyu_crystal"){ $dsto = "Ginyu crystal"; $masyve = 3; }  
if ($dstone[$ds] == "yamma_fruit"){ $dsto = "Yamma fruit"; $masyve = 4; }  
if ($dstone[$ds] == "microschem"){ $dsto = "Microschem"; $masyve = 5; }  
if ($dstone[$ds] == "majin_scroll"){ $dsto = "Majin scroll"; $masyve = 6; }  
if ($dstone[$ds] == "magic_ball"){ $dsto = "Magic ball"; $masyve = 7; }  
if ($dstone[$ds] == "fusion_fail"){ $dsto = "Fusion fail"; $masyve = 8; }  

$exp = $suma; 
$winai = "$wins"+"1";

if ($mm[40] - time() > 0){$xuj = $lyyygis*0.05 * 2;} else {$xuj = $lyyygis*0.05 *1;}
$laikas = date("H");
if(($laikas != "21") && ($laikas != "22") && ($laikas != "23") && ($laikas != "24")){}else{$xuj=$xuj*3;}

$pinigai = $pinigai+ $xuj;
$xuj__g6 = @number_format($xuj, 0, ',', ' ');
$xuj__g13 = @number_format($xuj2, 0, ',', ' ');
$suma__g132 = @number_format($suma, 0, ',', ' ');
$gyvybess2__tavo = @number_format($gyvybess2, 0, ',', ' ');
$gyvs__tavo = @number_format($gyvybes, 0, ',', ' ');
$netekai__tavo = @number_format($netekai, 0, ',', ' ');
echo"
[&#8226;]  Praradai gyvybių: <b>$netekai__tavo</b><br/>
[&#8226;]  Liko gyvybių: <b>$gyvs__tavo/$gyvybess2__tavo</b><br/>"; 
echo"</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  Turi XP: <b>$suma__g132</b><br/>
[&#8226;]  Gavai XP: <b>$xuj__g13</b><br/>
[&#8226;]  Gavai pinigų: <b>$xuj__g6</b><br/>";
if ($dsto != ""){ 
if ($mm[40] == "+"){$xuj3 = 1 * 2;} else {$xuj3 = 1 *1;}
$dari[$masyve]=$dari[$masyve]+$xuj3; 
echo"[&#8226;]  Gavote <b>$xuj3 $dsto</b><br/>"; 
} include("icludekitainf/iras2.php");}
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5";

echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
if ($mm[78] == "-"){ }else{echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"5; url=kaioshin.php?id=kova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\"><b>Auto kovojimas yrą įjungtas</b><br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";}
echo"
[&#8226;]  <a href=\"kaioshin.php?id=kova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\">Kovoti toliau</a></b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kaioshin.php?id=machine\">Atgal</a><br/>
<a href=\"kaioshin.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";

$fpa = fopen("$gameriai","w");
fwrite($fpa,"$lvl|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$winai|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$pointsr|$gynyba|$tim|$rase|$suma|$left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fpa);
}}}

*/}
print '</body></html>';

?>