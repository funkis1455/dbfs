<?php

$kur = "Future machine";
include ("config.php");
include_once("icludekitainf/start.php");
 
$def = $defense / 500;
$dmg = $damage / 100;
$dmg2=round(($dmg-1),0);
$def2=round(($def-1),0);
$attakos=$jega/1.5;
$ginybos=$gynyba/1.5;
$gyvybiu=$gyvybes/1.5;
$patirties=$sugebejimas/1.5; 
$dmg22 = @number_format($dmg, 0, ',', ' ');
$def22 = @number_format($def, 0, ',', ' ');
$yjega = rand(1,20);
$ygyvybiu = rand(1,5);
$ygynyba = rand(1,35);
/////////////////Kur kautis///////////////////////
$jusu_kgsc = @number_format($jusu_kgs, 0, ',', ' ');

$truksta = 1000000000000000000000000000 - $jusu_kgs;
$truksta2 = @number_format($truksta, 0, ',', ' ');
if ($lygis < "360")
{
echo"<b>Future machine</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">


Į Future machine galėsite patekti tik nuo 360 lygio ir 1 000 000 000 000 000 000 000 000 000 Kovines galios.!</b><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Jusu KG: $jusu_kgsc Jusu lygis: $lygis.<br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Jums truksta KG: $truksta2
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>
</card></wml>";exit;}
$jusu_saskaitoje = @number_format($litai, 2, ',', ' ');
if ($lygis < "360")
{
echo"<b>Future machine</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">


Į Future machine galėsite patekti tik nuo 360 lygio ir 1 000 000 000 000 000 0000 000 000 000 Kovines galios.!</b><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Jusu KG: $jusu_kgsc Jusu lygis: $lygis.<br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Jums truksta KG: $truksta2
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>
</card></wml>";exit;}


if ($id == ""){
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5"; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fp);
echo"<b>Future machine</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Future machine dar yrą kuriama, bet šį kovos sistema žaidėjams leidžia nesustoti žaisti.<br/>

</div><div class=\"meniu\" style=\"text-align: center;\">
<div class='got'><small>Future machine negalioja jokios privilegijos kaip \"Didesni XP ir pinigų gavimas, Majin statusas ar Great Ape formą\", bei kovų mašinoje prarandama daugiau energijos.</small><br/>
<br/> <b> čią yra santikis 2.5 : 5</b></div>
</div><div class=\"meniu\" style=\"text-align: center;\">";
if ($mm[78] == "-"){ echo "Auto kovojimas yrą įšjungtas [<b><a href=\"fighting.php?id=ijungti_auto\">Įjungti</a></b>]";
}
else
{
echo "Automatinis kovojimas yrą įjungtas [<b><a href=\"fighting.php?id=isiungti_auto\">Įšjungti</a></b>]";
} 
echo "</div><div class=\"meniu\" style=\"text-align: center;\">";
if($def>=$dmg){echo"
Future machine nustato priešo kovinė galią: <b><font color=red>$dmg22</font></b>.<br/>";}
if($dmg>$def) {echo"Future machine nustato priešo kovinė galią: <b><font color=red>$def22</font></b>. <br/>";}


echo "</div><div class=\"meniu\" style=\"text-align: center;\">";
if($def>=$dmg){
echo "
<a class='green_button' href=\"future_machines.php?id=kova_batle&amp;vs=botas&amp;kas=mem&amp;kd=$kodase\"><b>Pradėti kovą</b></a> <br/>";
}
if($dmg>$def){
echo "
<a class='green_button' href=\"future_machines.php?id=kova_batle&amp;vs=botas&amp;kas=mem&amp;kd=$kodase\"><b>Pradėti kovą</b></a> <br/>";
}
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom </div></div>";}

if ($id == "kova_batle") {
if ($vs == "botas"){
if($def>=$dmg){$lyyygis = "$dmg2";}
if($dmg>$def){$lyyygis = "$def2";}
}

if ($vs == "botas2"){
$boto_lvl = $_POST['boto_lvl'];
$lyyygis = $boto_lvl;
}


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

         ////////Pralaimejimas/////////
		 
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
if ($mm[78] == "-"){ }else{echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"$pad; url=future_machines.php?id=kova_batle&amp;vs=$vs&amp;kd=$kodase\">";}
echo"Turite spausti \"Kovoti toliau\", arba \"Atgal\".</div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"future_machines.php?id=kova_batle&amp;vs=$vs&amp;kd=$kodase\">Kovoti toliau</a></b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"future_machines.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fp); } else
{
if (time() < $floo){ echo"<b>KLAIDA</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5";
$placeas = @file_get_contents("vieta/$nick.txt");
if ($mm[78] == "-"){ }else{echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"$pad; url=future_machines.php?id=kova_batle&amp;vs=$vs&amp;kd=$kodase\">";}
echo"Jūs kovojate per greitai.<br/>(<i>Po kovos reikia palaukti $pad sec.</i>)</div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"future_machines.php?id=kova_batle&amp;vs=$vs&amp;kd=$kodase\">Kovoti toliau</a></b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"future_machines.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>"; $fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fp); } else{
     $skills = @explode("|",@file_get_contents("skill/$nick.txt"));

         ////////Laimejimas/////////
$netekai = $gyvybes-$gyvs;

$x_g = $lyyygis*0.000000000000000000000000002; 

echo"<b>Future machine</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Future machine nustato priešo kovinė galią: <b>"; if($def>=$dmg){echo"$dmg22";}if($dmg>$def) {echo"$def22";}echo"</b>";
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">Gavote:
 <b>+$yjega</b> jėgos, <b>+$ygyvybiu</b> gyvybių, <b>+$ygynyba</b> gynybos.<br/>";
 
 echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
$dtop = @file_get_contents("dtop/$nick.txt");
$dtop = $dtop + 1;
@file_put_contents("dtop/$nick.txt", "$dtop");

$suma = $x_g+$exp;

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

$exp = $suma; 
$winai = "$wins"+"1";
$p_g = $lyyygis*0.000000000000000000000000002; 

$pinigai = $pinigai+ $p_g;
$turi_xp = @number_format($suma, 0, ',', ' ');
$lost_en2 = @number_format($lost_en, 0, ',', ' ');
echo"
[&#8226;] Praradai gyvybių: <b>0</b><br/>
[&#8226;] Gyvybės: <b>$gyvybess</b><br/>";
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

$x_g = @number_format($x_g, 0, ',', ' ');
$p_g = @number_format($p_g, 0, ',', ' ');
echo"</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  Jūsų lygis: <b>$lygis</b><br/>
[&#8226;]  Turi XP: <b>$turi_xp</b><br/>
[&#8226;]  Gavai XP: <b>$x_g</b><br/>
[&#8226;]  Gavai pinigų: <b>$p_g</b><br/>";


$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5";
$placeas = @file_get_contents("vieta/$nick.txt");
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
if ($mm[78] == "-"){ }else{echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"$pad; url=future_machines.php?id=kova_batle&amp;vs=$vs&amp;kd=$kodase\"><b>Auto kovojimas yrą kas $pad sekundžių.</b><br/>";}
echo"</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"future_machines.php?id=kova_batle&amp;vs=$vs&amp;kd=$kodase\">Kovoti toliau</a></b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a accesskey=\"1\" href=\"pagrindinis.php?id=apie&amp;ka=$nick\">Jūsų informacija</a><br/>
[&#8226;]  <a accesskey=\"2\" href=\"pagrindinis.php?id=inventory\">Kapsulių dėžutė</a><br/>


</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"future_machines.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
$jega = $jega + $yjega;
$gyvybess = $gyvybess + $ygyvybiu;
$gynyba = $gynyba + $ygynyba;
$fpa = fopen("$gameriai","w");
fwrite($fpa,"$lvl|$inf[1]|$inf[2]|$jega|$gyvs|$gyvybess|$sugebejimas|$pinigai|$winai|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$pointsr|$gynyba|$tim|$rase|$suma|$left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fpa);
$skills[27] = $skills[27] - 1;
include("icludekitainf/skill.php");
}}}




print'</card></wml>';

?>