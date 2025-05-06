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
$kur = "Ginyu Force";
include ("config.php");
include("icludekitainf/zona_iras.php");  
echo"<link href=\"css/$nustatymai[20].css\" rel=\"stylesheet\" type=\"text/css\"/>
</head>";
$ico = "(&#187;) ";
echo "<div class=\"in\"><div class=\"logo\"><img src=\"imgs/logo-$mm[110].png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center; border-top: 1px solid #000000;\">";
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


$ti = date("H:i"); 
$ka = $_GET['ka'];
$dyyra = "zona/$nick-saule.txt";

if ($id == ""){
$tiu = time();
if (!file_exists("$dyyra")){
$nx = fopen("$dyyra","w+");
fwrite($nx,"+|+|+|+|+|$tiu|");
fclose($nx);
}

$m = explode("|",file_get_contents("$dyyra"));
$lik = round(($m[5]-time())/60,1);
$m2 = explode("-",$lik);
if ($lik == "-$m2[1]"){
$tj = time()+1000*1000*1000*1000*1000*1000;
$nxz = fopen("$dyyra","w");
fwrite($nxz,"-|+|+|+|+|$tj|");
fclose($nxz);
}

if ($lik > 120)
{
$lik = "0";
}
if ($lik == "0")
{
echo"<b>Ginyu Force</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/vietoviu/ginyuforce.png\" alt=\"*\"/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Ši misija skirta silpnesniesiams, kurie dar tik pradeda žaisti, įvykdęs misiją gausi ~200 000 pinigų, bei 500 jėgos ir 2500 gynybos.";
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($m[0] == "-"){
echo"$ico <a href=\"zona1.php?id=kautis&amp;ka=sargybini\">Guldo</a> (300 kg)<br/>";
} else { echo"$ico Guldo (300 kg)<br/>";
}echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($m[1] == "-"){
echo"$ico <a href=\"zona1.php?id=kautis&amp;ka=drakona\">Recoome</a> (500 kg)<br/>";
} else { echo"$ico Recoome (500 kg)<br/>";
}echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($m[2] == "-"){
echo"$ico <a href=\"zona1.php?id=kautis&amp;ka=pabaisa\">Burter</a> (700 kg)<br/>";
} else { echo"$ico Burter (700 kg)<br/>";
}echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($m[3] == "-"){
echo"$ico <a href=\"zona1.php?id=kautis&amp;ka=kary\">Jeice</a> (1 000 kg)<br/>";
} else { echo"$ico Jeice (1 000 kg)<br/>";
}echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($m[4] == "-"){
echo"$ico <a href=\"zona1.php?id=kautis&amp;ka=dieva\">Ginyu</a> (1 200 kg)<br/>";
} else { echo"$ico Ginyu (1 200 kg)<br/>";
}
}
else
{
echo"<b>Ginyu Force</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Ginyu Force misiją galėsite vykdyti po <b>$lik</b> min.";
}
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}

if ($id == "kautis"){

$m = explode("|",file_get_contents("$dyyra"));

if ($ka == "sargybini") {

 include("icludekitainf/mm.php");
$lyyygis = 300;
$x = 100;
$h = "$m[0]"; }

if ($ka == "drakona") {

 include("icludekitainf/mm.php");
$lyyygis = 500;
$x = 250;
$h = "$m[1]"; }

if ($ka == "pabaisa") {

 include("icludekitainf/mm.php");
$lyyygis = 700;
$x = 500;
$h = "$m[2]"; }

if ($ka == "kary") {
 
 include("icludekitainf/mm.php");
$lyyygis = 1000;
$x = 900;
$h = "$m[3]"; }

if ($ka == "dieva") {

 include("icludekitainf/mm.php");
$lyyygis = 1200;
$x = 1500;
$h = "$m[4]"; }

$att = round((($lyyygis*2)/4),1);
$att2 = round((($lyyygis*2)/4),1);
$penk = 5*$att;
$ket = 4*$att;
$tri = 3*$att;
$two = 2*$att;
if ($two > $defense) {
$gyvs = $gyvybes-$att; }
if ($two <= $defense) {
$att = $att-round(($att/4),1);
$gyvs = $gyvybes-$att; }
if ($tri <= $defense) {
$att = $att-round(($att/3),1);
$gyvs = $gyvybes-$att; }
if ($ket <= $defense) {
$att = $att-round(($att/2),1);
$gyvs = $gyvybes-$att; }
if ($penk <= $defense) {
$att = 0;
$gyvs = $gyvybes-$att; }


if ($h != "-"){
echo"<b>KLAIDA</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Taip negalima, misija turi vykdyti iš eilės!!
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"zona1.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">&#302; Prad&#382;i&#261;</a></div>"; 
}
else
{ 
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){

echo"<b>Kovą</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Tu šią kovą prakišai!!!<br/>
Ir praradai pusę turimų pingų, bei visas gyvybes!!<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"zona1.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">&#302; prad&#382;i&#261;</a><br/>";

$los = "$loses"+"1";
$pinigai = round(($pinigai)/2,0);

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|0|$gyvybess|$sugebejimas|$pinigai|$wins|$los|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
}
else
{
$netekai = $gyvybes-$gyvs;
echo"<b>Kovą</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Laimejai!</b><br/>
Jūsų kovinė galia <b>"; if($def>=$dmg){echo"$dmg22";}if($dmg>$def) {echo"$def22";}echo"</b>, o priešo kovinė galia <b>$lyyygis</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">";

$suma = $x+$exp;

$lvl = 99999; 
$enda = 99999; 
$qq = 1.1;
for ($rr=1; $rr<99999; $rr++){ 
if ($rr==1){ $qq = 1.1; } else { $qq = $qq*1.1; }
if ($qq >= $suma/10 && $enda != $rr){ $lvl = $rr; $enda = $rr+1; $buves = $qq; }
if ($enda==$rr){ $left = round($buves*10,1); break; }
}

if ($lvl > $lygis){ 
echo"(&#187;) Sveikiname! Jūs pasikėlėt lygį ir gavote 5 nepanaudotus lygio taškus.<br/>
(&#187;) Dabar tavo lygis: $lvl</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">"; 
$pointsr = "$points"+"5"; 
}
else
{
$pointsr = $points;
}

if ($ka == "dieva"){ 

$gkro = rand(500,500);
$gkr2o = rand(2500,2500);
$gpin = rand(100000,300000);

echo"Įvykdėte Ginyu Force misiją, už tai gaunate <b>$gkro</b> jėgos, <b>$gkr2o</b> gynybos ir <b>$gpin</b> pinigų!</div><div class=\"meniu\" style=\"text-align: left;\">"; 

$gynyba = $gynyba+$gkr2o;
$jega = $jega+$gkro;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|0|$gyvybess|$sugebejimas|$pinigai|$wins|$los|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

$pinigai = $pinigai+$gpin;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|0|$gyvybess|$sugebejimas|$pinigai|$wins|$los|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
}

$winai = "$wins"+"1";
$pinig = $pinigai+$lyyygis;
echo"
$ico Praradai gyvybių: <b>$netekai</b><br/>
$ico Liko gyvybių: <b>$gyvs</b><br/>"; 

echo"<br/>
$ico Gavai XP: <b>$x</b><br/>
$ico Turi XP: <b>$suma</b><br/>
$ico Gavai pinigų: $lyyygis<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
$ico <a accesskey=\"1\" href=\"pagrindinis.php?id=apie&amp;ka=$nick\">Tavo meniu</a><br/>
$ico <a accesskey=\"2\" href=\"pagrindinis.php?id=inventory\">Kapsulių dėžutė</a><br/>";

echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"zona1.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">&#302; prad&#382;i&#261;</a>
</div><div class=\"foot\">$bottom</div></div>";

$fpa = fopen("$gameriai","w");
fwrite($fpa,"$lvl|$inf[1]|$inf[2]|$jega|$gyvs|$gyvybess|$sugebejimas|$pinig|$winai|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$pointsr|$gynyba|$tim|$rase|$suma|$left||$sarvu_prot|$sarvai||\n");
fclose($fpa);

if ($ka == "sargybini") {
$tjj = time()+1000*1000*1000*1000*1000*1000;
$nxa = fopen("$dyyra","w");
fwrite($nxa,"+|-|+|+|+|$tjj|");
fclose($nxa);
}
if ($ka == "drakona") {
$tjj = time()+1000*1000*1000*1000*1000*1000;
$nxa = fopen("$dyyra","w");
fwrite($nxa,"+|+|-|+|+|$tjj|");
fclose($nxa);
}
if ($ka == "pabaisa") {
$tjj = time()+1000*1000*1000*1000*1000*1000;
$nxa = fopen("$dyyra","w");
fwrite($nxa,"+|+|+|-|+|$tjj|");
fclose($nxa);
}
if ($ka == "kary") {
$tjj = time()+1000*1000*1000*1000*1000*1000;
$nxa = fopen("$dyyra","w");
fwrite($nxa,"+|+|+|+|-|$tjj|");
fclose($nxa);
}
if ($ka == "dieva") {
$tjj = time()+60*60;
$nxa = fopen("$dyyra","w");
fwrite($nxa,"+|+|+|+|+|$tjj|");
fclose($nxa);
}}}}

?></body></html>