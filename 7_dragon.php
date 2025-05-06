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
$kur = "7 Shenron misiją";
include ("config.php");

echo"<link href=\"css/$nustatymai[20].css\" rel=\"stylesheet\" type=\"text/css\"/>
</head>";

echo "<div class=\"in\"><div class=\"logo\"><img src=\"imgs/logo-$mm[110].png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center; border-top: 1px solid #000000;\">";


if ($lygis < 230){ echo "Čia galima patekti tik nuo 230 lygio.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
$tiu = time();
if (!file_exists("zona/$nick-7shenron.txt")){
$nx = fopen("zona/$nick-7shenron.txt","w+");
fwrite($nx,"+|+|+|+|+|+|+|$tiu|");
fclose($nx);
}
$m = explode("|",file_get_contents("zona/$nick-7shenron.txt"));
$lik = round(($m[7]-time())/60,0);
$m2 = explode("-",$lik);
if ($lik == "-$m2[1]")
{
$tj = time()+1000*1000*1000*1000*1000*1000;
$nxz = fopen("zona/$nick-7shenron.txt","w");
fwrite($nxz,"-|+|+|+|+|+|+|$tj|");
fclose($nxz);


}



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
$dyyra = "zona/$nick-7shenron.txt";

if ($id == ""){
$tiu = time();
if (!file_exists("$dyyra")){
$nx = fopen("$dyyra","w+");
fwrite($nx,"+|+|+|+|+|+|+|$tiu|");
fclose($nx);
}
$m = explode("|",@file_get_contents("$dyyra"));
$lik = round(($m[7]-time())/60,1);
$m2 = explode("-",$lik);
if ($lik == "-$m2[1]"){
$tj = time()+1000*1000*1000*1000*1000*1000;
$nxz = fopen("$dyyra","w");
fwrite($nxz,"-|+|+|+|+|+|+|$tj|");
fclose($nxz);
}

if ($lik > 86400)
{
$lik = "0";
}
if ($lik == "0")
{
echo"<b>7 Shenron misiją</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/7dragon.png\" alt=\"*\"/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<u>Gokas su draugais surinko visus Drakono rutulius ir pamatė, kad jie suskilę, bet neatkreipė i tai dėmesio.
 Vietoje paprasto Shenrono pasirodė blogasis drakonas. Tada jis išlaisvino kitus bloguosius drakonus, ir Gokui su kitais staigiai prisireikė surasti jo 7 drakonus ir visus po vieną išnaikinti.
</u><br/>
&#302;veik&#281; &#353;i&#261; misij&#261; J&#363;s gausite <b>1</b> juodajį drakono rutulį!";
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($m[0] == "-"){
echo"$ico <a href=\"7_dragon.php?id=kautis&amp;ka=Naruton\">Naruton Shenron</a> (100 000 000 000 kg)<br/>";
} else { echo"$ico Naruton Shenron (100 000 000 000 kg)<br/>";
}echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($m[1] == "-"){
echo"$ico <a href=\"7_dragon.php?id=kautis&amp;ka=Range\">Range Shenron</a> (1 000 000 000 000 kg)<br/>";
} else { echo"$ico Range Shenron (1 000 000 000 000 kg)<br/>";
}echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($m[2] == "-"){
echo"$ico <a href=\"7_dragon.php?id=kautis&amp;ka=Haze\">Haze Shenron</a> (50 000 000 000 000 kg)<br/>";
} else { echo"$ico Haze Shenron (50 000 000 000 000 kg)<br/>";
}echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($m[3] == "-"){
echo"$ico <a href=\"7_dragon.php?id=kautis&amp;ka=Ryu\">Ryu Shenron</a> (150 000 000 000 000 kg)<br/>";
} else { echo"$ico Ryu Shenron (150 000 000 000 000 kg)<br/>";
}echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($m[4] == "-"){
echo"$ico <a href=\"7_dragon.php?id=kautis&amp;ka=Nuova\">Nuova Shenron</a> (300 000 000 000 000 kg)<br/>";
} else { echo"$ico Nuova Shenron (300 000 000 000 000 kg)<br/>";
}echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($m[5] == "-"){
echo"$ico <a href=\"7_dragon.php?id=kautis&amp;ka=Eis\">Eis Shenron</a> (1 000 000 000 000 000 kg)<br/>";
} else { echo"$ico Eis Shenron (1 000 000 000 000 000 kg)<br/>";
}echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($m[6] == "-"){
echo"$ico <a href=\"7_dragon.php?id=kautis&amp;ka=Omega\">Omega Shenron</a> (500 000 000 000 000 000 kg)<br/>";
} else { echo"$ico Omega Shenron (500 000 000 000 000 000 kg)<br/>";
}
}
else
{
echo"<b>7 Shenron misiją</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
7 Shenron misiją galėsite vykdyti po <b>$lik</b> min.";
}
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=kovu_misijos\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}

if ($id == "kautis"){

$m = explode("|",file_get_contents("$dyyra"));

if ($ka == "Naruton") {
$lyyygis = 100000000000;
$x = 100000;
$h = "$m[0]"; }

if ($ka == "Range") {
$lyyygis = 1000000000000;
$x = 140000;
$h = "$m[1]"; }

if ($ka == "Haze") {
$lyyygis = 50000000000000;
$x = 300000;
$h = "$m[2]"; }

if ($ka == "Ryu") {
$lyyygis = 150000000000000;
$x = 500000;
$h = "$m[3]"; }

if ($ka == "Nuova") {
$lyyygis = 300000000000000;
$x = 700000;
$h = "$m[4]"; }

if ($ka == "Eis") {
$lyyygis = 1000000000000000;
$x = 1500000;
$h = "$m[5]"; }

if ($ka == "Omega") {
$lyyygis = 500000000000000000;
$x = 9900000;
$h = "$m[6]"; }

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
Taip negalima, misiją turite vykdyti iš eilės!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"7_dragon.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=kovu_misijos\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
else
{ 
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){

echo"<b>Kovą</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Tu šią kovą prakišai!!!<br/>
Ir praradai pusę turimų pingų, bei visas gyvybes!!<br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"7_dragon.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=kovu_misijos\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";

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
</div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/7 shenron/$ka.png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center;\">
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

if ($ka == "Omega"){ 



echo"Įvykdėte misiją, už tai gaunate <b>1</b> juodajį drakono rutulį!</div><div class=\"meniu\" style=\"text-align: left;\">"; 
$dari[34] = $dari[34]+1;
include("icludekitainf/iras2.php");

}
$winai = "$wins"+"1";
$pinijtxs = $lyyygis/5000;
$pinigg = $pinigai+$pinijtxs;

$xuj__g6 = @number_format($pinijtxs, 0, ',', ' ');
$xuj__g13 = @number_format($x, 0, ',', ' ');
$suma__g132 = @number_format($suma, 0, ',', ' ');
$gyvybess2__tavo = @number_format($gyvybess2, 0, ',', ' ');
$gyvs__tavo = @number_format($gyvs, 0, ',', ' ');
$netekai__tavo = @number_format($netekai, 0, ',', ' ');
echo"
(&#187;) Praradai gyvybių: <b>$netekai__tavo</b><br/>
(&#187;) Liko gyvybių: <b>$gyvs__tavo/$gyvybess2__tavo</b><br/>"; 
echo"</div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) Turi XP: <b>$suma__g132</b><br/>
(&#187;) Gavai XP: <b>$xuj__g13</b><br/>
(&#187;) Gavai pinigų: <b>$xuj__g6</b><br/>";
echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"7_dragon.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=kovu_misijos\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";

$fpaX = fopen("$gameriai","w");
fwrite($fpaX,"$lvl|$inf[1]|$inf[2]|$jega|$gyvs|$gyvybess|$sugebejimas|$pinigg|$winai|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$pointsr|$gynyba|$tim|$rase|$suma|$left||$sarvu_prot|$sarvai||\n");
fclose($fpaX);

if ($ka == "Naruton") {$tjj = time()+1000*1000*1000*1000*1000*1000;
$nxa = fopen("$dyyra","w");
fwrite($nxa,"+|-|+|+|+|+|+|$tjj|");
fclose($nxa);
}
if ($ka == "Range") {$tjj = time()+1000*1000*1000*1000*1000*1000;
$nxa = fopen("$dyyra","w");
fwrite($nxa,"+|+|-|+|+|+|+|$tjj|");
fclose($nxa);
}
if ($ka == "Haze") {$tjj = time()+1000*1000*1000*1000*1000*1000;
$nxa = fopen("$dyyra","w");
fwrite($nxa,"+|+|+|-|+|+|+|$tjj|");
fclose($nxa);
}
if ($ka == "Ryu") {$tjj = time()+1000*1000*1000*1000*1000*1000;
$nxa = fopen("$dyyra","w");
fwrite($nxa,"+|+|+|+|-|+|+|$tjj|");
fclose($nxa);
}
if ($ka == "Nuova") {$tjj = time()+1000*1000*1000*1000*1000*1000;
$nxa = fopen("$dyyra","w");
fwrite($nxa,"+|+|+|+|+|-|+|$tjj|");
fclose($nxa);
}
if ($ka == "Eis") {$tjj = time()+1000*1000*1000*1000*1000*1000;
$nxa = fopen("$dyyra","w");
fwrite($nxa,"+|+|+|+|+|+|-|$tjj|");
fclose($nxa);
}
if ($ka == "Omega") {
$tjj = time()+60*60*24;
$nxa = fopen("$dyyra","w");
fwrite($nxa,"+|+|+|+|+|+|+|$tjj|");
fclose($nxa);
}}}}}

print '</body></html>';

?>