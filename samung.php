<?php
$kur = "Samung planeta";
include ("config.php");
include_once("icludekitainf/start.php");

$yjega = rand(100,150);
$ygyvybiu = rand(50,100);
$ygynyba = rand(200,300);
if ($lygis < "280" && $nick != funix)
{
echo"<b>Samungo planeta</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/samung.png\" alt=\"*\"/><br/>
Į samungo planeta galite patekti nuo 280 lygio</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>";}else{

if ($id == ""){
echo"<b>Samungo planeta</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/samung.png\" alt=\"*\"/><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Jūs atkeliavote į samungo planeta jūs čia rasite daugybe stiprių priešu, bet jūsų kovinė galia bus čia žymiai mažėsnia nes čia kovinė galia skaičuojama 10:30 (10 jėgos ir 30 gynybos = 1 kg)<br/> 
. Bei galite ieškoti samungo drakono rutulių, kuris išpildo įtin gerus ir retus norus.</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"samung.php?id=ieskoti_d\">Ieškoti Samungo drakono rutulių</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"samung.php?id=kviesti\">Iškviesti samungo drakoną</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"samung.php?id=kautis\">Kovų laukas</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($morekg[1] - time() > 0){$nukaunamumas = $morekg[0];}else{$nukaunamumas = 1;}
$def = $defense / 27*$nukaunamumas;
$dmg = $damage / 10*$nukaunamumas;
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


if ($id == "kautis"){
echo"<b>Samungo Kovų laukas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
if($def>=$dmg){echo"
Jūsų kovne galią yrą <b><font color=red>$dmg22</font></b>.<br/>";}
if($dmg>$def) {echo"Jūsų kovne galią yrą <b><font color=red>$def22</font></b>. <br/>";}

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
[&#8226;]  <a href=\"samung.php?id=nkova&amp;vs=Garlic&amp;kd=$kodase&amp;kas=mem\">Garlic</a> (500 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"samung.php?id=nkova&amp;vs=Slug&amp;kd=$kodase&amp;kas=mem\"> Slug</a> (5 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"samung.php?id=nkova&amp;vs=Bardock&amp;kd=$kodase&amp;kas=mem\">Bardock</a> (10 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"samung.php?id=nkova&amp;vs=Cooler&amp;kd=$kodase&amp;kas=mem\">Cooler</a> (100 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"samung.php?id=nkova&amp;vs=Janemba&amp;kd=$kodase&amp;kas=mem\">Janemba</a> (200 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"samung.php?id=nkova&amp;vs=Borly&amp;kd=$kodase&amp;kas=mem\">Borly</a> (500 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"samung.php?id=nkova&amp;vs=Gogeta SS5&amp;kd=$kodase&amp;kas=mem\">Gogeta SS5</a> (1 000 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"samung.php?id=nkova&amp;vs=Omega&amp;kd=$kodase&amp;kas=mem\">Omega</a> (100 000 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"samung.php?id=nkova&amp;vs=God&amp;kd=$kodase&amp;kas=mem\">God</a> (1 000 000 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"samung.php?id=nkova&amp;vs=Samung&amp;kd=$kodase&amp;kas=mem\">Samung</a> (100 000 000 000 000 000 000 000 000 000 000 kg)<br/>

</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"samung.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
/////////////////Pries ka kautis///////////////////////

if ($id == "nkova") {
$kur = "samung - Kovoją";
include ("config.php");

if ($vs == "Garlic") {$lyyygis = 500000000000000000000000;$x = 450000000;}
if ($vs == "Slug") {$lyyygis = 5000000000000000000000000;$x = 500000000; }
if ($vs == "Bardock") {$lyyygis = 10000000000000000000000000;$x = 600000000; }
if ($vs == "Cooler") {$lyyygis = 100000000000000000000000000;$x = 700000000; }
if ($vs == "Janemba") {$lyyygis = 200000000000000000000000000;$x = 800000000; }
if ($vs == "Borly") {$lyyygis = 500000000000000000000000000;$x = 900000000; }
if ($vs == "Gogeta SS5") {$lyyygis = 1000000000000000000000000000;$x = 1000000000; }
if ($vs == "Omega") {$lyyygis = 100000000000000000000000000000;$x = 1100000000; }
if ($vs == "God") {$lyyygis = 1000000000000000000000000000000;$x = 1200000000; }
if ($vs == "Samung") {$lyyygis = 100000000000000000000000000000000;$x = 1300000000; }


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
if ($mm[78] == "-"){ }else{echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"6; url=samung.php?id=nkova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\">";}
echo"Turite spausti \"Kovoti toliau\", arba \"Atgal\".</div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"samung.php?id=nkova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\">Kovoti toliau</a></b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"samung.php?id=kautis\">Atgal</a><br/>
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
if ($mm[78] == "-"){ }else{echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"6; url=samung.php?id=nkova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\">";}
echo"Jūs kovojate per greitai.<br/>(<i>Po kovos reikia palaukti 4 sec.</i>)</div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"samung.php?id=nkova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\">Kovoti toliau</a></b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"samung.php?id=nkautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>"; $fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fp); } else{

if($gyvybes == 0 or $lyyygis > $jusu_kgs ){
echo"<b>Kovą</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Tu pralaimejai....</b><br/></div><div class=\"meniu\" style=\"text-align: center;\">
Ir praradai pusę turimų pinigų, bei visas gyvybes!<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a accesskey=\"1\" href=\"pagrindinis.php?id=apie&amp;ka=$nick\">Jūsų informacija</a><br/>
[&#8226;]  <a accesskey=\"2\" href=\"pagrindinis.php?id=inventory\">Kapsulių dėžutė</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"samung.php?id=kautis\">Atgal</a><br/>
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
						window.location = 'samung.php?id=nkova&vs=$vs&kd=$kodase&kas=mem';
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
<a href=\"samung.php?id=nkova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\" class=\"green_button\">Tęsti kovą!</a><br/>

</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a accesskey=\"1\" href=\"pagrindinis.php?id=apie&amp;ka=$nick\">Jūsų informacija</a><br/>
[&#8226;]  <a accesskey=\"2\" href=\"pagrindinis.php?id=inventory\">Kapsulių dėžutė</a><br/>


</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"samung.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
include("icludekitainf/skill.php");
$jega = $jega + $yjega;
$gyvybess = $gyvybess + $ygyvybiu;
$gynyba = $gynyba + $ygynyba;
$fpa = fopen("$gameriai","w");
fwrite($fpa,"$lvl|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$winai|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$pointsr|$gynyba|$tim|$rase|$suma|$left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fpa);
}}}}

if ($id == "ieskoti_d"){
$liko_minb3 = round(($mm[30]-time())/60,1);
if ($mm[30]- time() > 0){ 
echo"Drakono rutulių jieškoti galima kas 6 valandą, jums liko laukti $liko_minb3 min<br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($dari[19] < 1){ echo "Jūs neturite radaro. Jį isigyti galite kapsuliu korporacijoje.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo"<b>Ieškoti Namek drakono rutulių</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"Kas 6 valandą galima jieškoti drakono rutulų, tikimibe kad rasite yra 50%</div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"samung.php?id=ieskoti_d2\">Ieškoti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}}

if ($id == "ieskoti_d2"){
$liko_minb3 = round(($mm[30]-time())/60,1);
if ($mm[30]- time() > 0){ 
echo"Samungo drakono rutulių jieškoti galima kas 6 valandą, jums liko laukti $liko_minb3 min<br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"samung.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($dari[19] < 1){ echo "Jūs neturite radaro. Jį isigyti galite kapsuliu korporacijoje.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"samung.php?\">Atgal</a><br/><a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if($klaida == "") {

$rew=rand(0,5);

if(($rew==1) or ($rew==5)) {
$klaida="Sveikiname, jūs radote Samungo drakono rutulį.";
$dari[48] = $dari[48] + "1";
include("icludekitainf/iras2.php");
$mm[30] = time() + 60*60*6;
include("icludekitainf/mm.php");
}
else {
$klaida="Jums nepavyko rasti samungo drakono rutulio.";
$mm[30] = time() + 60*60*6;
include("icludekitainf/mm.php");
}}

echo"</div><div class=\"meniu\" style=\"text-align: left;\">
$klaida<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\"><a href=\"samung.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}}

if ($id == "kviesti"){
if ($dari[48] < 7){ echo "Jūs neturite 7  samungo drakono rutulius.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"samung.php?\">Atgal</a><br/><a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo"<b>Dievas drakonas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"<img src='imgs/samungo drakonas.png' ALT='*'><br/>Samungo dievas drakonas iškviestas, pasirinkite norą.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"samung.php?id=d10\">Didinti 10x savo jėgą</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"samung.php?id=g10\">Didinti 10x savo gynybą</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"samung.php?id=gy10\">Didinti 10x savo gyvybių lygį</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"samung.php?id=e10\">Didinti 15x savo exp</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"samung.php?id=pinig\">1 000 000 000 000 pinigų</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"samung.php?id=lt\">10 LTL</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\"><a href=\"samung.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "d10"){ 
if ($dari[48] < 7){ echo "Jūs neturite 7 drakono rutuliu</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\"><a href=\"samung.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Noras išpildytas.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\"><a href=\"samung.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$jega = $jega * 10;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[48] = $dari[48] - 7;
include("icludekitainf/iras2.php");
}}

if ($id == "g10"){ 
if ($dari[48] < 7){ echo "Jūs neturite 7 drakono rutuliu</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\"><a href=\"samung.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Noras išpildytas.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\"><a href=\"samung.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$gynyba = $gynyba * 10;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[48] = $dari[48] - 7;
include("icludekitainf/iras2.php");
}}

if ($id == "gy10"){ 
if ($dari[48] < 7){ echo "Jūs neturite 7 drakono rutuliu</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\"><a href=\"samung.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Noras išpildytas.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\"><a href=\"samung.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$gyvybess = $gyvybess * 10;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[48] = $dari[48] - 7;
include("icludekitainf/iras2.php");
}}

if ($id == "e15"){ 
if ($dari[48] < 7){ echo "Jūs neturite 7 drakono rutuliu</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\"><a href=\"samung.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Noras išpildytas.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\"><a href=\"samung.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$exp = $exp * 15;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[48] = $dari[48] - 7;
include("icludekitainf/iras2.php");
}}

if ($id == "pinig"){ 
if ($dari[48] < 7){ echo "Jūs neturite 7 drakono rutuliu</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\"><a href=\"samung.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Noras išpildytas.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\"><a href=\"samung.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$pinigai = $pinigai + 1000000000000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[48] = $dari[48] - 7;
include("icludekitainf/iras2.php");
}}
 
if ($id == "lt"){ 
if ($dari[48] < 7){ echo "Jūs neturite 7 drakono rutuliu</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\"><a href=\"samung.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Noras išpildytas.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\"><a href=\"samung.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
 $lt = @file_get_contents("account/$nick.txt");
 $lt = $lt + 10;

@file_put_contents("account/$nick.txt", "$lt");
$dari[48] = $dari[48] - 7;
include("icludekitainf/iras2.php");
}}

}
print '</body></html>';

?>