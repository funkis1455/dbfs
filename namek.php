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
$kur = "Namek";
include ("config.php");
echo"<link href=\"css/$nustatymai[20].css\" rel=\"stylesheet\" type=\"text/css\"/>
</head>";

echo "<div class=\"in\"><div class=\"logo\"><img src=\"imgs/logo-$mm[110].png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center; border-top: 1px solid #000000;\">";
$yjega = rand(10,15);
$ygyvybiu = rand(5,10);
$ygynyba = rand(20,30);
if ($lygis < "250" && $nick != funix)
{
echo"<b>Namek</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Į Namek galėsite patekti tik nuo 250 lygio!</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>";}else{

if ($id == ""){
echo"<b>Namek</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/vietoviu/Dende.png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Jūs atkeliavote į Namek jūs sutiko <b>Dende</b>, čia taip pat yra atkeliavęs Frieza su savo parankiniais, visu tikslas surinkti nameko  drakono rutulius, kad išpildytu visu lukščius, tad neleiskite Frieza tapti visagaliu, bei nepamirškite nueiti pas Guru jums atidarys vidine energija.</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"namek.php?id=ieskoti_d\">Ieškoti Namek Drakono rutulių</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"namek.php?id=kviesti\">Iškviesti Porunga</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"namek.php?id=freiza\">Frieza planas</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"namek.php?id=mission\">Apgink Namek</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"namek.php?id=guru\">Guru</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"namek.php?id=nkautis\">Kovų laukas</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
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
else{echo "Automatinis kovojimas yrą įjungtas [<b><a href=\"fighting.php?id=isiungti_auto\">Įšjungti</a></b>]";}

echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
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
[&#8226;]  <a href=\"namek.php?id=nkova&amp;vs=Dodoria&amp;kd=$kodase&amp;kas=mem\">Dodoria</a> (500 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"namek.php?id=nkova&amp;vs=Zarbon&amp;kd=$kodase&amp;kas=mem\">Zarbon</a> (5 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"namek.php?id=nkova&amp;vs=Guldo&amp;kd=$kodase&amp;kas=mem\">Guldo</a> (10 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"namek.php?id=nkova&amp;vs=Recoome&amp;kd=$kodase&amp;kas=mem\">Recoome</a> (100 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"namek.php?id=nkova&amp;vs=Jeice&amp;kd=$kodase&amp;kas=mem\">Jeice</a> (200 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"namek.php?id=nkova&amp;vs=Burter&amp;kd=$kodase&amp;kas=mem\">Burter</a> (500 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"namek.php?id=nkova&amp;vs=Ginyu&amp;kd=$kodase&amp;kas=mem\">Ginyu</a> (1 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"namek.php?id=nkova&amp;vs=Frieza&amp;kd=$kodase&amp;kas=mem\">Frieza</a> (100 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"namek.php?id=nkova&amp;vs=King Cold&amp;kd=$kodase&amp;kas=mem\">King Cold</a> (1 000 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"namek.php?id=nkova&amp;vs=Cooler&amp;kd=$kodase&amp;kas=mem\">Cooler</a> (100 000 000 000 000 000 000 000 000 000 kg)<br/>

</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"namek.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
/////////////////Pries ka kautis///////////////////////

if ($id == "nkova") {
$kur = "Namek - Kovoją";
include ("config.php");

if ($vs == "Dodoria") {$lyyygis = 500000000000000000000;$x = 4500000;}
if ($vs == "Zarbon") {$lyyygis = 5000000000000000000000;$x = 5000000; }
if ($vs == "Guldo") {$lyyygis = 10000000000000000000000;$x = 6000000; }
if ($vs == "Recoome") {$lyyygis = 100000000000000000000000;$x = 7000000; }
if ($vs == "Jeice") {$lyyygis = 200000000000000000000000;$x = 8000000; }
if ($vs == "Burter") {$lyyygis = 500000000000000000000000;$x = 9000000; }
if ($vs == "Ginyu") {$lyyygis = 1000000000000000000000000;$x = 10000000; }
if ($vs == "Frieza") {$lyyygis = 100000000000000000000000000;$x = 11000000; }
if ($vs == "King Cold") {$lyyygis = 1000000000000000000000000000;$x = 12000000; }
if ($vs == "Cooler") {$lyyygis = 100000000000000000000000000000;$x = 13000000; }

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
if ($mm[78] == "-"){ }else{echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"6; url=namek.php?id=nkova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\">";}
echo"Turite spausti \"Kovoti toliau\", arba \"Atgal\".</div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"namek.php?id=nkova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\">Kovoti toliau</a></b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"namek.php?id=nkautis\">Atgal</a><br/>
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
<a href=\"namek.php?id=nkautis\">Atgal</a><br/>
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
if ($mm[78] == "-"){ }else{echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"6; url=namek.php?id=nkova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\">";}
echo"Jūs kovojate per greitai.<br/>(<i>Po kovos reikia palaukti 4 sec.</i>)</div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"namek.php?id=nkova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\">Kovoti toliau</a></b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"namek.php?id=nkautis\">Atgal</a><br/>
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
<a href=\"namek.php?id=nkautis\">Atgal</a><br/>
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
						window.location = 'namek.php?nick=$nick&pass=$pass&id=nkova&vs=$vs&kd=$kodase&kas=mem';
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
<a href=\"namek.php?id=nkova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\" class=\"green_button\">Tęsti kovą!</a><br/>

</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a accesskey=\"1\" href=\"pagrindinis.php?id=apie&amp;ka=$nick\">Jūsų informacija</a><br/>
[&#8226;]  <a accesskey=\"2\" href=\"pagrindinis.php?id=inventory\">Kapsulių dėžutė</a><br/>


</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"namek.php?id=nkautis\">Atgal</a><br/>
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

if ($id == "freiza"){ 
echo"<b>Frieza planas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/veikejai/frieza-0.png' ALT='*'><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Frieza planas yrą surinkti 7 Nameko drakono rutulius ir paprašyti dievo drakono nemirtingumo.<br/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Atneškite 7 Namek drakono rutulius ir gausite 2x kovines galios.</b>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;&#187;)  <a href=\"namek.php?id=freiza2\">Atnešti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "freiza2"){ 
if ($mm[2] == "+"){ echo "Šį misiją jau įvykditą</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($dari[44] < 7){ echo "Jūs neturite visko ko reikia šitai misijai.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Misiją įvykdita, jūs gavote x2 kovinės galios.
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?\">Į Pagrindinį</a>";
		$jega = $jega *2;
		$gynyba = $gynyba *2;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[44] = $dari[44] - 7;
$mm[2]= "+";
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}}

if ($id == "mission"){echo"<b>Apgink Namek</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";

if($mm[1]=="0"){echo"<img src=\"imgs/sagos/7.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
Namek puolą <b>Cui</b><br/>
<b>Nukaukite Cui. Jo kovinė galia yra 100 000 000.</b><br/>"; }

if($mm[1]=="1"){echo"<img src=\"imgs/sagos/8.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
Namek puolą <b>Zarbon</b><br/>
<b>Nukaukite Zarbon. Kovine galia 250 000 000.</b><br/>"; }

if($mm[1]=="2"){echo"<img src=\"imgs/sagos/9.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
Namek puolą <b>Zarbon Monster</b><br/>
<b>Nukaukite Zarbon Monster. Kovine galia 500 000 000.</b><br/>"; }

if($mm[1]=="3"){echo"<img src=\"imgs/sagos/10.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
Namek puolą <b>Guldo</b><br/>
<b>Nukaukite Guldo. Kovine galia 600 000 000.</b><br/>"; }

if($mm[1]=="4"){echo"<img src=\"imgs/sagos/11.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
Namek puolą <b>Recoome</b><br/>
<b>Nukaukite Recoome. Kovine galia 700 000 000.</b><br/>"; }

if($mm[1]=="5"){echo"<img src=\"imgs/sagos/12.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
Namek puolą <b>Burter</b><br/>
<b>Nukaukite Burter. Kovine galia 1 000 000 000.</b><br/>"; }

if($mm[1]=="6"){echo"<img src=\"imgs/sagos/13.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
Namek puolą <b>Jeice</b><br/>
<b>Nukaukite Jeice. Kovine galia 5 000 000 000.</b><br/>"; }

if($mm[1]=="7"){echo"<img src=\"imgs/sagos/15.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
Namek puolą <b>Captain Ginyu</b><br/>
<b>Nukaukite Captain Ginyu. Kovine galia 10 000 000 000.</b><br/>"; }

if($mm[1]=="8"){echo"<img src=\"imgs/sagos/18.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
Namek puolą <b>Frieza</b><br/>
<b>Nukaukite Frieza. Kovine galia 50 000 000 000.</b><br/>"; }

if($mm[1]=="9"){echo"<img src=\"imgs/sagos/19.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
Namek puolą <b>Frieza 2 forma</b><br/>
<b>Nukaukite Frieza 2 forma. Kovine galia 250 000 000 000.</b><br/>"; }

if($mm[1]=="10"){echo"<img src=\"imgs/sagos/20.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
Namek puolą <b>Frieza 3 forma</b><br/>
<b>Nukaukite Frieza 3 forma. Kovine galia 1 000 000 000 000.</b><br/>"; }

if($mm[1]=="11"){echo"<img src=\"imgs/sagos/21.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
Namek puolą <b>Frieza 4 forma</b><br/>
<b>Nukaukite Frieza 4 forma. Kovine galia 10 000 000 000 000.</b><br/>"; }

if($mm[1]=="12"){echo"<img src=\"imgs/sagos/22.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
Namek puolą <b>Frieza 100 procentų forma</b><br/>
<b>Nukaukite Frieza 100 procentų forma. Kovine galia 1 000 000 000 000 000.</b><br/>"; }

if($mm[1]=="13"){echo"<img src=\"imgs/sagos/Namek.png\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
Jūs apginete Namek nuo Frieza ir jo parankiniu.<br/>"; }

if($mm[1]=="14"){echo"<img src=\"imgs/sagos/Namek.png\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
Jūs apginete Namek nuo Frieza ir jo parankiniu.<br/>"; }

echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>[&#8226;]</b> <a href=\"namek.php?id=next\">Apginti</a><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "next"){
include("icludekitainf/mm.php");
if ($mm[1][$ka-1] == "+"){ $zin = "<b>Si misija jau ivykdyta!</b>"; }
if ($zin == ""){ 
include("icludekitainf/nuskait.php"); 

if($mm[1]=="0"){ $zin = "Sekmingai ivygdita"; 
include("icludekitainf/mm.php");
}

if ($mm[1] == 14){ 
$zin = "Jūs jau apginete namek nuo Frieza ir jo parankiniu.<br/>";
}

if ($mm[1] == 13){ 
$zin = "Jūs jau apginete namek nuo Frieza ir jo parankiniu.<br/>";
}

if ($mm[1] == 12){ 
$att = round(((1000000000000000*2)/4),1); $att2 = round(((1000000000000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Napek apginti nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Namek apginti pavyko.<br/>";
$mm[1] = $mm[1] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[1] == 11){ 
$att = round(((10000000000000*2)/4),1); $att2 = round(((10000000000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Napek apginti nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Namek apginti pavyko.<br/>";
$mm[1] = $mm[1] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[1] == 10){ 
$att = round(((1000000000000*2)/4),1); $att2 = round(((1000000000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Napek apginti nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Namek apginti pavyko.<br/>";
$mm[1] = $mm[1] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[1] == 9){ 
$att = round(((250000000000*2)/4),1); $att2 = round(((250000000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Napek apginti nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Namek apginti pavyko.<br/>";
$mm[1] = $mm[1] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[1] == 8){ 
$att = round(((50000000000*2)/4),1); $att2 = round(((50000000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Napek apginti nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Namek apginti pavyko.<br/>";
$mm[1] = $mm[1] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[1] == 7){ 
$att = round(((10000000000*2)/4),1); $att2 = round(((10000000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Napek apginti nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Namek apginti pavyko.<br/>";
$mm[1] = $mm[1] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[1] == 6){ 
$att = round(((5000000000*2)/4),1); $att2 = round(((5000000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Napek apginti nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Namek apginti pavyko.<br/>";
$mm[1] = $mm[1] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[1] == 5){ 
$att = round(((1000000000*2)/4),1); $att2 = round(((1000000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Napek apginti nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Namek apginti pavyko.<br/>";
$mm[1] = $mm[1] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[1] == 4){ 
$att = round(((700000000*2)/4),1); $att2 = round(((700000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Napek apginti nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Namek apginti pavyko.<br/>";
$mm[1] = $mm[1] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[1] == 3){ 
$att = round(((600000000*2)/4),1); $att2 = round(((600000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Napek apginti nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Namek apginti pavyko.<br/>";
$mm[1] = $mm[1] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[1] == 2){ 
$att = round(((500000000*2)/4),1); $att2 = round(((500000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Napek apginti nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Namek apginti pavyko.<br/>";
$mm[1] = $mm[1] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[1] == 1){ 
$att = round(((250000000*2)/4),1); $att2 = round(((250000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Napek apginti nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Namek apginti pavyko.<br/>";
$mm[1] = $mm[1] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[1] == 0){ 
$att = round(((100000000*2)/4),1); $att2 = round(((100000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Napek apginti nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Namek apginti pavyko.<br/>";
$mm[1] = 1;
include("icludekitainf/mm.php");
}}
}
echo"<b>Apgink Namek</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$zin
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"namek.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "guru"){
echo"<b>Guru - Namek senolis</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/vietoviu/senolis.png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Namek senolis (Guru) gali jums  padėti atskleisti vidine energija kuri slypi jūsų kūno viduje, bet tam reikia įrodyti kad jūs norite apginti Namek planeta nuo priešų, tad jums reikia pereiti visas misijas (Apgink Namek).
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"namek.php?id=guru2\">Atskleisti vidine energiją</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "guru2"){ 
   $mm = @explode("|",@file_get_contents("kitokiainf/$nick.txt"));
if ($mm[1] < 13){ echo "Jūs dar neapgynet Namek nuo frieza</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"namek.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
   $mm = @explode("|",@file_get_contents("kitokiainf/$nick.txt"));
if ($mm[1] == 14){ echo "Jums Guru jau atidare vidine energija, galima tik karta</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"namek.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo"<b>Guru - Namek senolis</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
   $mm = @explode("|",@file_get_contents("kitokiainf/$nick.txt"));
    if ($bad == "")
    {
		$gaung = $gynyba * 0.5;
	$gaunj = $jega * 0.5;
			$gynyba = $gynyba +$gaung;
	$jega = $jega +$gaunj;
	$gaung = @number_format($gaung, 0, ',', ' ');
	$gaunj = @number_format($gaunj, 0, ',', ' ');
        $bad = "Guru jums atidare vidine energija, įgausite $gaung gynybos ir $gaunj jėgos.";
 $mm[1] = 14;
include("icludekitainf/mm.php");

        $prisij = time();
        $fp = fopen("$gameriai", "w");
        fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        fclose($fp);
}
echo"
$bad</div><div class=\"line\"></div><div class=\"meniu\"style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"namek.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}}

if ($id == "ieskoti_d"){
$liko_minb3 = round(($mm[0]-time())/60,1);
if ($mm[0]- time() > 0){ 
echo"Drakono rutulių jieškoti galima kas 3 valandą, jums liko laukti $liko_minb3 min<br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($dari[19] < 1){ echo "Jūs neturite radaro. Jį isigyti galite kapsuliu korporacijoje.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo"<b>Ieškoti Namek drakono rutulių</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"Kas 3 valandą galima jieškoti drakono rutulų, tikimibe kad rasite yra 25%</div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"namek.php?id=ieskoti_d2\">Ieškoti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}}

if ($id == "ieskoti_d2"){
$liko_minb3 = round(($mm[0]-time())/60,1);
if ($mm[0]- time() > 0){ 
echo"Drakono rutulių jieškoti galima kas 3 valandą, jums liko laukti $liko_minb3 min<br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($dari[19] < 1){ echo "Jūs neturite radaro. Jį isigyti galite kapsuliu korporacijoje.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if($klaida == "") {

$rew=rand(0,10);

if(($rew==1) or ($rew==10)) {
$klaida="Sveikiname, jūs radote Namek drakono rutulį.";
$dari[44] = $dari[44] + "1";
include("icludekitainf/iras2.php");
$mm[0] = time() + 60*60*3;
include("icludekitainf/mm.php");
}
else {
$klaida="Jums nepavyko rasti drakono rutulio.";
$mm[0] = time() + 60*60*3;
include("icludekitainf/mm.php");
}}

echo"</div><div class=\"meniu\" style=\"text-align: left;\">
$klaida<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}}

if ($id == "kviesti"){
if ($dari[44] < 7){ echo "Jūs neturite 7  Namek drakono rutulius.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo"<b>Dievas drakonas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"<img src='imgs/parungo.png' ALT='*'><br/>Parungo iškviestas, pasirinkite norą.</div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"namek.php?id=d10\">x2 jėgos</a><br/>
(&#187;) <a href=\"namek.php?id=g10\">x2 gynybos</a><br/>
(&#187;) <a href=\"namek.php?id=gy10\">x2 gyvybiu</a><br/>
(&#187;) <a href=\"namek.php?id=pinigs\">5LTL</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "d10"){ 
if ($dari[44] < 7){ echo "Jūs neturite 7 drakono rutuliu</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Noras išpildytas.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$jega = $jega * 2;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[44] = $dari[44] - 7;
include("icludekitainf/iras2.php");
}}

if ($id == "g10"){ 
if ($dari[44] < 7){ echo "Jūs neturite 7 drakono rutuliu</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Noras išpildytas.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$gynyba = $gynyba * 2;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[44] = $dari[44] - 7;
include("icludekitainf/iras2.php");
}}

if ($id == "gy10"){ 
if ($dari[44] < 7){ echo "Jūs neturite 7 drakono rutuliu</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Noras išpildytas.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$gyvybess = $gyvybess * 2;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[44] = $dari[44] - 7;
include("icludekitainf/iras2.php");
}}

if ($id == "pinigs"){ 
if ($dari[44] < 7){ echo "Jūs neturite 7 drakono rutuliu</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Noras išpildytas.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
 $lt = @file_get_contents("account/$nick.txt");
 $lt = $lt + 5;

@file_put_contents("account/$nick.txt", "$lt");
$dari[44] = $dari[44] - 7;
include("icludekitainf/iras2.php");
}}

}
print '</body></html>';

?>