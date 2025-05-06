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
$kur = "Dievų planeta";
include ("config.php");
echo"<link href=\"css/$nustatymai[20].css\" rel=\"stylesheet\" type=\"text/css\"/>
</head>";

echo "<div class=\"in\"><div class=\"logo\"><img src=\"imgs/logo-$mm[110].png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center; border-top: 1px solid #000000;\">";
$yjega = rand(15,20);
$ygyvybiu = rand(5,15);
$ygynyba = rand(25,35);
if ($lygis < "280")
{
echo"<b>Dievų planeta</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Į Dievų planta galėsite patekti tik nuo 280 lygio!</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>";}else{

if ($id == ""){
echo"<b>Dievų planeta</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/gods.png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Sveikas atkeliavus į dievų planeta, čia dabar galite kovoti ir vykdyti dievų pasiekimus. Greitai galėsite tapti Dievų.</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"gods.php?id=pasiekimai\">Dievų pasiekimai</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"gods.php?id=nkautis\">Dievų mušis</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($morekg[1] - time() > 0){$nukaunamumas = $morekg[0];}else{$nukaunamumas = 1;}
$def = $defense / 2.5*$nukaunamumas;
$dmg = $damage / 0.5*$nukaunamumas;
$dmg2=round(($dmg-1),0);
$def2=round(($def-1),0);
$attakos=$jega/1.5;
$ginybos=$gynyba/1.5;
$gyvybiu=$gyvybes/1.5;
$patirties=$sugebejimas/1.5; 
$dmg22 = @number_format($dmg, 0, ',', ' ');
$def22 = @number_format($def, 0, ',', ' ');


if ($id == "nkautis"){
echo"<b>Kovų laukas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
if($def>=$dmg){echo"
Jūsų kovne galią yrą <b><font color=red>$dmg22</font></b>.<br/>";}
if($dmg>$def) {echo"Jūsų kovne galią yrą <b><font color=red>$def22</font></b>. <br/>";}
echo "</div><div class=\"meniu\" style=\"text-align: center;\">";
if ($mm[78] == "-"){ echo "Auto kovojimas yrą įšjungtas [<b><a href=\"fighting.php?id=ijungti_auto\">Įjungti</a></b>]";}
else{echo "Automatinis kovojimas yrą įjungtas [<b><a href=\"fighting.php?id=isiungti_auto\">Įšjungti</a></b>]</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";}

if ($moremany[1] - time() > 0){
$likomany = round(($moremany[1]-time())/60/60/24,1);
echo"$ico x$moremany[0] daugiau pinigų galios $likomany d.<br/>";
}
else
{
}

if ($moreexp[1] - time() > 0){
$likoexp = round(($moreexp[1]-time())/60/60/24,1);
echo"$ico x$moreexp[0] daugiau exp galios $likoexp d.<br/>";
}
else
{
}

if ($morekg[1] - time() > 0){
$likokg = round(($morekg[1]-time())/60/60/24,1);
echo"$ico x$morekg[0] didesnis nukaunamumas galios $likokg d.<br/>";
}
else
{

}
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5"; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fp);
$fpa = fopen("vieta/$nick.txt","w");
fwrite($fpa,"$id");
fclose($fpa);
echo"</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"gods.php?id=nkova&amp;vs=Gods Goku&amp;kd=$kodase&amp;kas=mem\">Gods Goku</a> (1 000 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"gods.php?id=nkova&amp;vs=Gods Vegeta&amp;kd=$kodase&amp;kas=mem\">Gods Vegeta</a> (10 000 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"gods.php?id=nkova&amp;vs=Gods Cell&amp;kd=$kodase&amp;kas=mem\">Gods Cell</a> (100 000 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"gods.php?id=nkova&amp;vs=Gods Frieza&amp;kd=$kodase&amp;kas=mem\">Gods Frieza</a> (1 000 000 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"gods.php?id=nkova&amp;vs=Gods Trunks&amp;kd=$kodase&amp;kas=mem\">Gods Trunks</a> (10 000 000 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"gods.php?id=nkova&amp;vs=Gods Goten&amp;kd=$kodase&amp;kas=mem\">Gods Goten</a> (100 000 000 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"gods.php?id=nkova&amp;vs=Gods Gohan&amp;kd=$kodase&amp;kas=mem\">Gods Gohan</a> (1 000 000 000 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"gods.php?id=nkova&amp;vs=Gods Buu&amp;kd=$kodase&amp;kas=mem\">Gods Buu</a> (10 000 000 000 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"gods.php?id=nkova&amp;vs=Gods Gogeta&amp;kd=$kodase&amp;kas=mem\">Gods Gogeta</a> (50 000 000 000 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"gods.php?id=nkova&amp;vs=Gods Gotranks&amp;kd=$kodase&amp;kas=mem\">Gods Gotranks</a> (100 000 000 000 000 000 000 000 000 000 000 000 kg)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"gods.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
/////////////////Pries ka kautis///////////////////////

if ($id == "nkova") {
$kur = "Dievų planeta - Kovoją";
include ("config.php");

if ($vs == "Gods Goku") {$lyyygis = 1000000000000000000000000000;$x = 15000000;}
if ($vs == "Gods Vegeta") {$lyyygis = 10000000000000000000000000000;$x = 20000000; }
if ($vs == "Gods Cell") {$lyyygis = 100000000000000000000000000000;$x = 25000000; }
if ($vs == "Gods Frieza") {$lyyygis = 1000000000000000000000000000000;$x = 30000000; }
if ($vs == "Gods Trunks") {$lyyygis = 10000000000000000000000000000000;$x = 35000000; }
if ($vs == "Gods Goten") {$lyyygis = 100000000000000000000000000000000;$x = 40000000; }
if ($vs == "Gods Gohan") {$lyyygis = 1000000000000000000000000000000000;$x = 45000000; }
if ($vs == "Gods Buu") {$lyyygis = 10000000000000000000000000000000000;$x = 50000000; }
if ($vs == "Gods Gogeta") {$lyyygis = 50000000000000000000000000000000000;$x = 65000000; }
if ($vs == "Gods Gotranks") {$lyyygis = 100000000000000000000000000000000000;$x = 75000000; }

$att = round((($lyyygis*2)/4),1)/$nukaunamumas;
$att2 = round((($lyyygis*2)/4),1)/$nukaunamumas;
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

$kdp = $_GET['kd']; 
if ($kdp != $aps_kodas or $kdp == "" or strlen($kdp) != 5){ 
echo"<b>KLAIDA</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5";
$placeas = @file_get_contents("vieta/$nick.txt");
if ($mm[78] == "-"){ }else{echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"6; url=gods.php?id=nkova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\">";}
echo"Turite spausti \"Kovoti toliau\", arba \"Atgal\".</div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"gods.php?id=nkova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\">Kovoti toliau</a></b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"gods.php?id=nkautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fp); } else{
/*
       $skills = @explode("|",@file_get_contents("skill/$nick.txt"));

if ($skills[22] < 1)
{
echo"<b>KLAIDA</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Jūs nebeturite energijos ir nebegalite kovoti!<br/>

</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Jūsų eneriją: <b>$skills[22]</b><br/>
[&#8226;] Jūsų enerijos amplitude: <b>$skills[23]</b><br/>";
$energ = @round(($skills[22] * 10) / $skills[23], 0);
if ($energ == 0){echo "[&#8226;] <img src=\"imgs/energy/0.png\" alt=\"0%\"/>";}
if ($energ == 1){echo "[&#8226;] <img src=\"imgs/energy/10.png\" alt=\"10%\"/>";}
if ($energ == 2){echo "[&#8226;] <img src=\"imgs/energy/20.png\" alt=\"20%\"/>";}
if ($energ == 3){echo "[&#8226;] <img src=\"imgs/energy/30.png\" alt=\"30%\"/>";}
if ($energ == 4){echo "[&#8226;] <img src=\"imgs/energy/40.png\" alt=\"40%\"/>";}
if ($energ == 5){echo "[&#8226;] <img src=\"imgs/energy/50.png\" alt=\"50%\"/>";}
if ($energ == 6){echo "[&#8226;] <img src=\"imgs/energy/60.png\" alt=\"60%\"/>";}
if ($energ == 7){echo "[&#8226;] <img src=\"imgs/energy/70.png\" alt=\"70%\"/>";}
if ($energ == 8){echo "[&#8226;] <img src=\"imgs/energy/80.png\" alt=\"80%\"/>";}
if ($energ == 9){echo "[&#8226;] <img src=\"imgs/energy/90.png\" alt=\"90%\"/>";}
if ($energ == 10){echo "[&#8226;] <img src=\"imgs/energy/100.png\" alt=\"100%\"/>";}
echo"</div><div class=\"meniu\" style=\"text-align: left;\"><a href=\"skill.php?id=energija\">Jūsų energiją</a> (čia galima sukaupti)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"gods.php?id=nkautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
else
{
*/
if (time() < $floo){ echo"<b>KLAIDA</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5";
$placeas = @file_get_contents("vieta/$nick.txt");
if ($mm[78] == "-"){ }else{echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"6; url=gods.php?id=nkova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\">";}
echo"Jūs kovojate per greitai.<br/>(<i>Po kovos reikia palaukti 4 sec.</i>)</div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"gods.php?id=nkova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\">Kovoti toliau</a></b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"gods.php?id=nkautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>"; $fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fp); } else{
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){
echo"<b>Kovą</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Tu pralaimejai....</b><br/></div><div class=\"meniu\" style=\"text-align: center;\">
Ir praradai pusę turimų pinigų, bei visas gyvybes!<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a accesskey=\"1\" href=\"pagrindinis.php?id=apie&amp;ka=$nick\">Jūsų informacija</a><br/>
[&#8226;]  <a accesskey=\"2\" href=\"pagrindinis.php?id=inventory\">Kapsulių dėžutė</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"gods.php?id=nkautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
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
$getxp = round($x*rand(1,9));
if ($mm[40] - time() > 0){$getxp = $getxp * 2;} else {$getxp = $getxp * 1;}
if ($moreexp[1] - time() > 0){$getxp = $getxp * $moreexp[0];}else{$getxp = $getxp * 1;}

echo"<b>Kovą</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Laimejai!</b><br>
Nukovei <b>$vs</b> kovotoją!<br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Jūsų kovinė galia <b>"; if($def>=$dmg){echo"$dmg22";}if($dmg>$def) {echo"$def22";}echo"</b>, o priešo kovinė galia <b>$lyyygis</b><br/>";

echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">Gavote:
 <b>+$yjega</b> jėgos, <b>+$ygyvybiu</b> gyvybių, <b>+$ygynyba</b> gynybos.<br/></div><div class=\"meniu\" style=\"text-align: left;\">";
$dtop = @file_get_contents("dtop/$nick.txt");
$dtop = $dtop + 1;
@file_put_contents("dtop/$nick.txt", "$dtop");

$suma =  $getxp +$exp;

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
$dstone = array("soul_stone","","","","","","saiyan_tail","","","","","ginyu_material","","","","","","","","fusion_fail","","","ginyu_crystal","","","","","","","yamma_fruit","","","","","microschem","","","","","","","","majin_scroll","","","","","","magic_ball","","","","magic_ball","","","");
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
$getpin = round($x*rand(41,89));

$laikas = date("H");
if(($laikas != "17") && ($laikas != "23")){}else{$getpin=$getpin*2;}
if ($moremany[1] - time() > 0){$getpin = $getpin * $moremany[0];}else{$getpin = $getpin * 1;}

$pinigai = $pinigai+ $getpin;
echo"
[&#8226;]  Praradai gyvybių: <b>$netekai</b><br/>
[&#8226;] <b>Gyvybės: </b>$gyvs/$gyvybess2</b><br/>";
$det = round(($gyvybes * 10) / $gyvybess2, 0);
if ($det == 0){echo "[&#8226;] <img src=\"imgs/life/0.png\" alt=\"0%\"/>";}
if ($det == 1){echo "[&#8226;] <img src=\"imgs/life/10.png\" alt=\"10%\"/>";}
if ($det == 2){echo "[&#8226;] <img src=\"imgs/life/20.png\" alt=\"20%\"/>";}
if ($det == 3){echo "[&#8226;] <img src=\"imgs/life/30.png\" alt=\"30%\"/>";}
if ($det == 4){echo "[&#8226;] <img src=\"imgs/life/40.png\" alt=\"40%\"/>";}
if ($det == 5){echo "[&#8226;] <img src=\"imgs/life/50.png\" alt=\"50%\"/>";}
if ($det == 6){echo "[&#8226;] <img src=\"imgs/life/60.png\" alt=\"60%\"/>";}
if ($det == 7){echo "[&#8226;] <img src=\"imgs/life/70.png\" alt=\"70%\"/>";}
if ($det == 8){echo "[&#8226;] <img src=\"imgs/life/80.png\" alt=\"80%\"/>";}
if ($det == 9){echo "[&#8226;] <img src=\"imgs/life/90.png\" alt=\"90%\"/>";}
if ($det == 10){echo "[&#8226;] <img src=\"imgs/life/100.png\" alt=\"100%\"/>";}
/*
echo"</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b>Energija: </b>$skills[22]/$skills[23]</b><br/>";
$energ = @round(($skills[22] * 10) / $skills[23], 0);
if ($energ == 0){echo "[&#8226;] <img src=\"imgs/energy/0.png\" alt=\"0%\"/>";}
if ($energ == 1){echo "[&#8226;] <img src=\"imgs/energy/10.png\" alt=\"10%\"/>";}
if ($energ == 2){echo "[&#8226;] <img src=\"imgs/energy/20.png\" alt=\"20%\"/>";}
if ($energ == 3){echo "[&#8226;] <img src=\"imgs/energy/30.png\" alt=\"30%\"/>";}
if ($energ == 4){echo "[&#8226;] <img src=\"imgs/energy/40.png\" alt=\"40%\"/>";}
if ($energ == 5){echo "[&#8226;] <img src=\"imgs/energy/50.png\" alt=\"50%\"/>";}
if ($energ == 6){echo "[&#8226;] <img src=\"imgs/energy/60.png\" alt=\"60%\"/>";}
if ($energ == 7){echo "[&#8226;] <img src=\"imgs/energy/70.png\" alt=\"70%\"/>";}
if ($energ == 8){echo "[&#8226;] <img src=\"imgs/energy/80.png\" alt=\"80%\"/>";}
if ($energ == 9){echo "[&#8226;] <img src=\"imgs/energy/90.png\" alt=\"90%\"/>";}
if ($energ == 10){echo "[&#8226;] <img src=\"imgs/energy/100.png\" alt=\"100%\"/>";}
*/
echo"</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  Turi XP: <b>$suma</b><br/>
[&#8226;]  Gavai XP: <b>$getxp</b><br/>
[&#8226;]  Gavai pinigų: <b>$getpin</b><br/>";
if ($dsto != ""){ 
$dari[$masyve]=$dari[$masyve]+1; 
echo"[&#8226;]  Gavote <b>1 $dsto</b><br/>"; 
include("icludekitainf/iras2.php");
} } 
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5";
$placeas = @file_get_contents("vieta/$nick.txt");
if ($mm[78] == "-"){ }else{echo "</div><div class=\"meniu\" style=\"text-align: center;\">
<b>Iki kitos kovos liko:</b> <label id=\"setTime$tim\">$pad sek.</label><label id=\"getTime$tim\" style=\"display:none;\">$pad</label>
				<script src=\"http://code.jquery.com/jquery-1.8.2.min.js\" type=\"text/javascript\"></script>
				<script type=\"text/javascript\">
				updateTime$tim();
				
				function updateTime$tim() {
					time = $(\"#getTime$tim\").text();
					refresh = 1;
					countdown = 1;
					startTime = $pad;
					
					if(startTime > 0)
					{
						if(time <= 0 && refresh)
						window.location = 'gods.php?nick=$nick&pass=$pass&id=nkova&vs=$vs&kd=$kodase&kas=mem';
						else
						{
							var newTime = (countdown ? time - 1 : time + 1);
							$(\"#getTime$tim\").text(newTime);
							var days = Math.floor(newTime / (60 * 60 * 24));
							var hours = Math.floor((newTime - (days * (60 * 60 * 24))) / 3600);
							var minutes = Math.floor((newTime - (days * (60 * 60 * 24)) - (hours * 3600)) / 60);
							var seconds = Math.floor(newTime - (days * (60 * 60 * 24)) - (hours * 3600) - (minutes * 60));
							$(\"#setTime$tim\").text((days == 0 ? \"\" : days + \" d. \") + (days == 0 && hours == 0 ? \"\" : hours + \" val. \") + (days == 0 && hours == 0 && minutes == 0 ? \"\" : minutes + \" min. \") + (seconds + \" sek.\"));
							timer = setTimeout(\"updateTime$tim()\", 1000);
						}
					}
				}
				</script><br/>

";}
echo"
<a href=\"gods.php?id=nkova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\" class=\"green_button\">Tęsti kovą!</a><br/>

</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a accesskey=\"1\" href=\"pagrindinis.php?id=apie&amp;ka=$nick\">Jūsų informacija</a><br/>
[&#8226;]  <a accesskey=\"2\" href=\"pagrindinis.php?id=inventory\">Kapsulių dėžutė</a><br/>


</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"gods.php?id=nkautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
include("icludekitainf/skill.php");
$jega = $jega + $yjega;
$gyvybess = $gyvybess + $ygyvybiu;
$gynyba = $gynyba + $ygynyba;
$fpa = fopen("$gameriai","w");
fwrite($fpa,"$lvl|$inf[1]|$inf[2]|$jega|$gyvs|$gyvybess|$sugebejimas|$pinigai|$winai|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$pointsr|$gynyba|$tim|$rase|$suma|$left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fpa);
}}}}
}
if ($id == "pasiekimai") {
$kur = "Dievų planeta - Pasiekimai";
include ("config.php");
$pasiekimai = @explode("|",@file_get_contents("pasiekimai/$nick.txt"));
$ivykdyta = @substr_count($pasiekimai, "+"); 
echo"<b>Dievų pasiekimai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/gods2.png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Įvykde pasiekimą, jūs gausite procenta to lygio.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
if ($pasiekimai[0] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 100 lygį. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"gods.php?id=vykdau123&amp;ka=1\">Pasiekti 100 lygį.</a><br/>"; }

echo"</div><div class=\"meniu\" style=\"text-align: left;\">";

if ($pasiekimai[1] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 1 000 000 000 jegos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"gods.php?id=vykdau123&amp;ka=2\">Pasiekti 1 000 000 000 jegos.</a><br/>"; }
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($pasiekimai[2] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 1 000 000 000 gynybos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"gods.php?id=vykdau123&amp;ka=3\">Pasiekti 1 000 000 000 gynybos.</a><br/>"; }

echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($pasiekimai[3] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 200 lygį. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"gods.php?id=vykdau123&amp;ka=4\">Pasiekti 200 lygį.</a><br/>"; }
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($pasiekimai[4] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 100 000 000 000 jegos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"gods.php?id=vykdau123&amp;ka=5\">Pasiekti 100 000 000 000 jegos.</a><br/>"; }
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($pasiekimai[5] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 100 000 000 000 gynybos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"gods.php?id=vykdau123&amp;ka=6\">Pasiekti 100 000 000 000 gynybos.</a><br/>"; }
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($pasiekimai[6] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 250 lygį. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"gods.php?id=vykdau123&amp;ka=7\">Pasiekti 250 lygį.</a><br/>"; }
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($pasiekimai[7] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 10 000 000 000 000 jegos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"gods.php?id=vykdau123&amp;ka=8\">Pasiekti 10 000 000 000 000 jegos.</a><br/>"; }
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($pasiekimai[8] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 10 000 000 000 000 gynybos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"gods.php?id=vykdau123&amp;ka=9\">Pasiekti 10 000 000 000 000 gynybos.</a><br/>"; }
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($pasiekimai[9] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 300 lygį. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"gods.php?id=vykdau123&amp;ka=10\">Pasiekti 300 lygį.</a><br/>"; }
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($pasiekimai[10] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 1 000 000 000 000 000 jegos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"gods.php?id=vykdau123&amp;ka=11\">Pasiekti 1 000 000 000 000 000 jegos.</a><br/>"; }
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($pasiekimai[11] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 1 000 000 000 000 000 gynybos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"gods.php?id=vykdau123&amp;ka=12\">Pasiekti 1 000 000 000 000 000 gynybos.</a><br/>"; }
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($pasiekimai[12] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 330 lygį. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"gods.php?id=vykdau123&amp;ka=13\">Pasiekti 330 lygį.</a><br/>"; }
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($pasiekimai[13] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 1 000 000 000 000 000 000 jegos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"gods.php?id=vykdau123&amp;ka=14\">Pasiekti 1 000 000 000 000 000 000 jegos.</a><br/>"; }
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($pasiekimai[14] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 1 000 000 000 000 000 000 gynybos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"gods.php?id=vykdau123&amp;ka=15\">Pasiekti 1 000 000 000 000 000 000 gynybos.</a><br/>"; }
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($pasiekimai[15] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 350 lygį. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"gods.php?id=vykdau123&amp;ka=16\">Pasiekti 350 lygį.</a><br/>"; }
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($pasiekimai[16] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 100 000 000 000 000 000 000 jegos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"gods.php?id=vykdau123&amp;ka=17\">Pasiekti 100 000 000 000 000 000 000 jegos.</a><br/>"; }
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($pasiekimai[17] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 100 000 000 000 000 000 000 gynybos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"gods.php?id=vykdau123&amp;ka=18\">Pasiekti 100 000 000 000 000 000 000 gynybos.</a><br/>"; }
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($pasiekimai[18] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 370 lygį. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"gods.php?id=vykdau123&amp;ka=19\">Pasiekti 370 lygį.</a><br/>"; }
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($pasiekimai[19] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 1 000 000 000 000 000 000 000 jegos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"gods.php?id=vykdau123&amp;ka=20\">Pasiekti 1 000 000 000 000 000 000 000 jegos.</a><br/>"; }
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($pasiekimai[20] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 1 000 000 000 000 000 000 000 gynybos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"gods.php?id=vykdau123&amp;ka=21\">Pasiekti 1 000 000 000 000 000 000 000 gynybos.</a><br/>"; }

echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"gods.php\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "vykdau123" && $ka >= 1 && $ka <= 28){
$pasiekimai = @explode("|",@file_get_contents("pasiekimai/$nick.txt"));
$pasm = @explode("|",$pasiekimai); 
if ($pasm[$ka] == "+"){ $zin = "<b>Sis pasiekimas jau įvykdytas.!</b>"; }
if ($zin == ""){ 
include("icludekitainf/nuskait.php");

if ($ka == 21){if ($pasiekimai[20] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($gynyba < 1000000000000000000000){ $zin = "Jūs nesate pasiekęs 1 000 000 000 000 000 000 000 gynybos."; 
}
else 
{
		$gavimasprs  = round(($jega*0.8),0);
		$jega = $jega + $gavimasprs;

$zin = "Jus sėkmingai įvykdėte pasiekimą gavote $gavimasprs gynybos.";
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$pasiekimai[20] = "+";
include("icludekitainf/pasiekimai.php");
}}}

if ($ka == 20){if ($pasiekimai[19] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($jega < 1000000000000000000000){ $zin = "Jūs nesate pasiekęs 1 000 000 000 000 000 000 000 jegos.."; 
}
else 
{
		$gavimasprs  = round(($jega*0.8),0);
		$jega = $jega + $gavimasprs;

$zin = "Jus sėkmingai įvykdėte pasiekimą gavote $gavimasprs jegos.";
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$pasiekimai[19] = "+";
include("icludekitainf/pasiekimai.php");

}}}

if ($ka == 19){
if ($pasiekimai[18] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($lygis < 370){ $zin = "Jūs nesate pasiekęs 370 lygi."; 
}
else 
{
		$gavimasprs  = round(($exp*0.8),0);
		$exp = $exp + $gavimasprs;

$zin = "Jus sėkmingai įvykdėte pasiekimą gavote $gavimasprs exp.";
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$pasiekimai[18] = "+";
include("icludekitainf/pasiekimai.php");

}}}


if ($ka == 18){if ($pasiekimai[17] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($gynyba < 100000000000000000000){ $zin = "Jūs nesate pasiekęs 100 000 000 000 000 000 000 gynybos."; 
}
else 
{
		$gavimasprs  = round(($gynyba*0.8),0);
		$gynyba = $gynyba + $gavimasprs;

$zin = "Jus sėkmingai įvykdėte pasiekimą gavote $gavimasprs gynybos.";
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$pasiekimai[17] = "+";
include("icludekitainf/pasiekimai.php");
}}}

if ($ka == 17){if ($pasiekimai[16] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($jega < 100000000000000000000){ $zin = "Jūs nesate pasiekęs 100 000 000 000 000 000 000 jegos."; 
}
else 
{
		$gavimasprs  = round(($jega*0.8),0);
		$jega = $jega + $gavimasprs;

$zin = "Jus sėkmingai įvykdėte pasiekimą gavote $gavimasprs jegos.";
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$pasiekimai[16] = "+";
include("icludekitainf/pasiekimai.php");

}}}

if ($ka == 16){
if ($pasiekimai[15] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($lygis < 350){ $zin = "Jūs nesate pasiekęs 350 lygi."; 
}
else 
{
		$gavimasprs  = round(($exp*0.8),0);
		$exp = $exp + $gavimasprs;

$zin = "Jus sėkmingai įvykdėte pasiekimą gavote $gavimasprs exp.";
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$pasiekimai[15] = "+";
include("icludekitainf/pasiekimai.php");
}}} 


if ($ka == 15){if ($pasiekimai[14] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($gynyba < 1000000000000000000){ $zin = "Jūs nesate pasiekęs 1 000 000 000 000 000 000 gynybos."; 
}
else 
{
		$gavimasprs  = round(($gynyba*0.8),0);
		$gynyba = $gynyba + $gavimasprs;

$zin = "Jus sėkmingai įvykdėte pasiekimą gavote $gavimasprs gynybos.";
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$pasiekimai[14] = "+";
include("icludekitainf/pasiekimai.php");
}}}

if ($ka == 14){if ($pasiekimai[13] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($jega < 1000000000000000000){ $zin = "Jūs nesate pasiekęs 1 000 000 000 000 000 000 jegos."; 
}
else 
{
		$gavimasprs  = round(($jega*0.8),0);
		$jega = $jega + $gavimasprs;

$zin = "Jus sėkmingai įvykdėte pasiekimą gavote $gavimasprs jegos.";
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$pasiekimai[13] = "+";
include("icludekitainf/pasiekimai.php");

}}}

if ($ka == 13){
if ($pasiekimai[12] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($lygis < 330){ $zin = "Jūs nesate pasiekęs 330 lygi."; 
}
else 
{
		$gavimasprs  = round(($exp*0.8),0);
		$exp = $exp + $gavimasprs;

$zin = "Jus sėkmingai įvykdėte pasiekimą gavote $gavimasprs exp.";
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$pasiekimai[12] = "+";
include("icludekitainf/pasiekimai.php");

}}}


if ($ka == 12){if ($pasiekimai[11] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($gynyba < 1000000000000000){ $zin = "Jūs nesate pasiekęs 1 000 000 000 000 000 gynybos."; 
}
else 
{
		$gavimasprs  = round(($gynyba*0.8),0);
		$gynyba = $gynyba + $gavimasprs;

$zin = "Jus sėkmingai įvykdėte pasiekimą gavote $gavimasprs gynybos.";
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$pasiekimai[11] = "+";
include("icludekitainf/pasiekimai.php");
}}}

if ($ka == 11){if ($pasiekimai[10] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($jega < 1000000000000000){ $zin = "Jūs nesate pasiekęs 1 000 000 000 000 000 jegos."; 
}
else 
{
		$gavimasprs  = round(($jega*0.8),0);
		$jega = $jega + $gavimasprs;

$zin = "Jus sėkmingai įvykdėte pasiekimą gavote $gavimasprs exp."; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$pasiekimai[10] = "+";
include("icludekitainf/pasiekimai.php");

}}}

if ($ka == 10){
if ($pasiekimai[9] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($lygis < 300){ $zin = "Jūs nesate pasiekęs 300 lygi."; 
}
else 
{
		$gavimasprs  = round(($exp*0.8),0);
		$exp = $exp + $gavimasprs;

$zin = "Jus sėkmingai įvykdėte pasiekimą gavote $gavimasprs exp."; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$pasiekimai[9] = "+";
include("icludekitainf/pasiekimai.php");
}}}


if ($ka == 9){if ($pasiekimai[8] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($gynyba < 10000000000000){ $zin = "Jūs nesate pasiekęs 10 000 000 000 000  gynybos."; 
}
else 
{
		$gavimasprs  = round(($gynyba*0.7),0);
		$gynyba = $gynyba + $gavimasprs;

$zin = "Jus sėkmingai įvykdėte pasiekimą gavote $gavimasprs gynybos."; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$pasiekimai[8] = "+";
include("icludekitainf/pasiekimai.php");
}}}

if ($ka == 8){if ($pasiekimai[7] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($jega < 10000000000000){ $zin = "Jūs nesate pasiekęs 10 000 000 000 000 jegos."; 
}
else 
{
		$gavimasprs  = round(($jega*0.7),0);
		$jega = $jega + $gavimasprs;

$zin = "Jus sėkmingai įvykdėte pasiekimą gavote $gavimasprs jegos."; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$pasiekimai[7] = "+";
include("icludekitainf/pasiekimai.php");

}}}

if ($ka == 7){
if ($pasiekimai[6] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($lygis < 250){ $zin = "Jūs nesate pasiekęs 250 lygi."; 
}
else 
{
		$gavimasprs  = round(($exp*0.7),0);
		$exp = $exp + $gavimasprs;

$zin = "Jus sėkmingai įvykdėte pasiekimą gavote $gavimasprs exp."; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$pasiekimai[6] = "+";
include("icludekitainf/pasiekimai.php");

}}}


if ($ka == 6){if ($pasiekimai[5] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($gynyba < 100000000000){ $zin = "Jūs nesate pasiekęs 100 000 000 000 gynybos."; 
}
else 
{
		$gavimasprs  = round(($jega*0.6),0);
		$jega = $jega + $gavimasprs;

$zin = "Jus sėkmingai įvykdėte pasiekimą gavote $gavimasprs gynybos."; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$pasiekimai[5] = "+";
include("icludekitainf/pasiekimai.php");
}}}

if ($ka == 5){if ($pasiekimai[4] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($jega < 100000000000){ $zin = "Jūs nesate pasiekęs 100 000 000 000 jegos.."; 
}
else 
{
		$gavimasprs  = round(($jega*0.6),0);
		$jega = $jega + $gavimasprs;

$zin = "Jus sėkmingai įvykdėte pasiekimą gavote $gavimasprs jegos."; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$pasiekimai[4] = "+";
include("icludekitainf/pasiekimai.php");

}}}

if ($ka == 4){
if ($pasiekimai[3] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($lygis < 200){ $zin = "Jūs nesate pasiekęs 200 lygi."; 
}
else 
{
		$gavimasprs  = round(($exp*0.6),0);
		$exp = $exp + $gavimasprs;

$zin = "Jus sėkmingai įvykdėte pasiekimą gavote $gavimasprs exp."; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$pasiekimai[3] = "+";
include("icludekitainf/pasiekimai.php");

}}}


if ($ka == 3){if ($pasiekimai[2] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($gynyba < 1000000000){ $zin = "Jūs nesate pasiekęs 1 000 000 000 gynybos."; 
}
else 
{
		$gavimasprs  = round(($gynyba*0.5),0);
		$gynyba = $gynyba + $gavimasprs;

$zin = "Jus sėkmingai įvykdėte pasiekimą gavote $gavimasprs gynybos."; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$pasiekimai[2] = "+";
include("icludekitainf/pasiekimai.php");
}}}

if ($ka == 2){if ($pasiekimai[1] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($jega < 1000000000){ $zin = "Jūs nesate pasiekęs 1 000 000 000 jegos."; 
}
else 
{
		$gavimasprs  = round(($jega*0.5),0);
		$jega = $jega + $gavimasprs;

$zin = "Jus sėkmingai įvykdėte pasiekimą gavote $gavimasprs jegos."; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$pasiekimai[1] = "+";
include("icludekitainf/pasiekimai.php");

}}}

if ($ka == 1){
if ($pasiekimai[0] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($lygis < 100){ $zin = "Jūs nesate pasiekęs 100 lygi."; 
}
else 
{
		$gavimasprs  = round(($exp*0.5),0);
		$exp = $exp + $gavimasprs;

$zin = "Jus sėkmingai įvykdėte pasiekimą gavote $gavimasprs exp."; 
		
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$pasiekimai[0] = "+";
include("icludekitainf/pasiekimai.php");

}}}
}
echo"<b>$zin</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pasiekimai.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

print '</body></html>';

?>