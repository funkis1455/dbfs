<?php
$kur = "Kovų zona";
include ("config.php");
include_once("icludekitainf/start.php");

include("icludekitainf/zona_iras.php");  
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
$yjega = rand(2,6);
$ygyvybiu = rand(1,3);
$ygynyba = rand(6,12);
if ($id == "kautis"){
echo"<b>Kovų zona</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
if($def>=$dmg){echo"
Jūsų kovne galią yrą <b><font color=red>$dmg22</font></b>.<br/>";}
if($dmg>$def) {echo"Jūsų kovne galią yrą <b><font color=red>$def22</font></b>. <br/>";}
echo "</div><div class=\"meniu\" style=\"text-align: center;\">";
if ($mm[78] == "-"){ echo "Auto kovojimas yrą įšjungtas [<b><a href=\"fighting.php?id=ijungti_auto\">Įjungti</a></b>]";}
else{echo "Automatinis kovojimas yrą įjungtas [<b><a href=\"fighting.php?id=isiungti_auto\">Įšjungti</a></b>]<br/>
";}
echo"</div><div class=\"meniu\" style=\"text-align: center;\">";
echo"<a href=\"fighting.php?id=auto_fighting\">Kas yra automatinis kovojimas?</a></u><br/>";
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

foreach(glob("online/*") as $b){
$rr=explode("|",@file_get_contents($b));
$b=str_replace("online/","",$b); 
$b=str_replace(".txt","",$b);
$inxf = @file_get_contents("online/$b.txt");
$infxo = explode("|", $inxf);
if ($infxo[2]=="Arena"){
$pok[] = $infxo[2]; }}
$online223 = count($pok); 
echo"

</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>[&#8226;]  <a href=\"powerful_fighters.php\">Power-ful fighters</a></b><br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=Saiyan\">Saiyans</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]   <a href=\"fighting.php?id=Earthling\">Earthlings</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=Half-Saiyans\">Half-Saiyans </a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=Namekians\">Namekians</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]   <a href=\"fighting.php?id=Xenos\">Xenos</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]   <a href=\"fighting.php?id=Changelings\">Changelings</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]   <a href=\"fighting.php?id=Demons\">Demons</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]   <a href=\"fighting.php?id=Shins\">Shins</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]   <a href=\"fighting.php?id=Constructs\">Constructs</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]   <a href=\"fighting.php?id=Fusion\"> Fusions </a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]   <a href=\"fighting.php?id=Great fighters\">Great fighters</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]   <a href=\"fighting.php?id=Hell\">Hell</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
<b>[&#8226;]   <a href=\"fighting.php?id=Almighty\">Almighty</a></b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom </div></div>";}

if ($id == "auto_fighting") {
echo"<b>Automatinis kovojimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Automatinis Kovojimas - tai sistema kuri automatiškai už jus kas 5 sekundes atliks kovojimo veiksmus. Jums tereikės pasirinkti kovotoją prieš kurį norite kovoti ir palikti įjungtą lang'ą. Jį tai pat galite išjungti nuėję į 'Kovų zoną' arba įjungti jeigu jis išjungtas.
</div><div class='line'></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "ijungti_auto") {
 $mm = explode("|",file_get_contents("kitokiainf/$nick.txt"));
 $mm[78] = "+";
include("icludekitainf/mm.php");
echo"<b>Automatinis kovojimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sėkmingai įjungtas automatinis kovojimas.
</div><div class='line'></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "isiungti_auto") {
$mm = explode("|",file_get_contents("kitokiainf/$nick.txt"));
$mm[78] = "-";
include("icludekitainf/mm.php");
echo"<b>Automatinis kovojimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sėkmingai įšjungtas automatinis kovojimas.
</div><div class='line'></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


/////////////////Pries ka kautis///////////////////////
if ($id == "best"){
$kur = "Kovų zona - Best wariorrs";
include ("config.php");
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
echo"<b>Best  Wariorrs</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Best Vegeta&amp;kd=$kodase&amp;kas=mem\">Best Vegeta</a> (10 000 000 000 000 000 000 000 000 000 000 000 000 kg)<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Best Goku&amp;kd=$kodase&amp;kas=mem\">Best Goku</a>   (100 000 000 000 000 000 000 000 000 000 000 000 000 kg)<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Best Trunks&amp;kd=$kodase&amp;kas=mem\">Best Trunks</a>     (1 000 000 000 000 000 000 000 000 000 000 000 000 000 kg)<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Best Gohan&amp;kd=$kodase&amp;kas=mem\">Best Gohan</a>       (10 000 000 000 000 000 000 000 000 000 000 000 000 000 kg)<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Best Broly&amp;kd=$kodase&amp;kas=mem\">Best Broly</a>     (1 000 000 000 000 000 000 000 000 000 000 000 000 000 000 kg)<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Best Frieza&amp;kd=$kodase&amp;kas=mem\">Best Frieza</a> (100 000 000 000 000 000 000 000 000 000 000 000 000 000 000 kg)<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Best Cell&amp;kd=$kodase&amp;kas=mem\">Best Cell</a>   (1 000 000 000 000 000 000 000 000 000 000 000 000 000 000 000 kg)<br/></div><div class=\"meniu\" style=\"text-align: left;\">
<b>[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Best Gogeta&amp;kd=$kodase&amp;kas=mem\">Best Gogeta</a>   (9 000 000 000 000 000 000 000 000 000 000 000 000 000 000 000 000 kg)</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Madmen"){
$kur = "Kovų zona - Madmen";
include ("config.php");
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
echo"<b>Madmen Saiyans</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Madmen Bardock&amp;kd=$kodase&amp;kas=mem\">Madmen Bardock</a> (1 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Madmen Borgos&amp;kd=$kodase&amp;kas=mem\">Madmen Borgos</a>   (10 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Madmen Fasha&amp;kd=$kodase&amp;kas=mem\">Madmen Fasha</a>     (100 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Madmen Goku&amp;kd=$kodase&amp;kas=mem\">Madmen Goku</a>       (1 000 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Madmen Nappa&amp;kd=$kodase&amp;kas=mem\">Madmen Nappa</a>     (10 000 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Madmen Paragus&amp;kd=$kodase&amp;kas=mem\">Madmen Paragus</a> (100 000 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Madmen Raditz&amp;kd=$kodase&amp;kas=mem\">Madmen Raditz</a>   (1 000 000 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Madmen Panbukin&amp;kd=$kodase&amp;kas=mem\">Madmen Panbukin</a>(10 000 000 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Madmen Brocco&amp;kd=$kodase&amp;kas=mem\">Madmen Brocco</a>   (100 000 000 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Madmen Shugesh&amp;kd=$kodase&amp;kas=mem\">Madmen Shugesh</a> (1 000 000 000 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Madmen Tarble&amp;kd=$kodase&amp;kas=mem\">Madmen Tarble</a>   (10 000 000 000 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Madmen Tora&amp;kd=$kodase&amp;kas=mem\">Madmen Tora</a>       (100 000 000 000 000 000 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Madmen Turles&amp;kd=$kodase&amp;kas=mem\">Madmen Turles</a>   (1 000 000 000 000 000 000 000 000 000 000 000 000 kg)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Almighty"){
$kur = "Kovų zona - Almighty";
include ("config.php");
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
echo"<b>Almighty</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Almighty Frieza&amp;kd=$kodase&amp;kas=mem\">Almighty Frieza</a> (500 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Almighty Buu&amp;kd=$kodase&amp;kas=mem\">Almighty Buu</a> (1 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Almighty Cell&amp;kd=$kodase&amp;kas=mem\">Almighty Cell</a> (5 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Almighty Vegeta&amp;kd=$kodase&amp;kas=mem\">Almighty Vegeta</a> (10 000 000 000 000 000 000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Almighty Goku&amp;kd=$kodase&amp;kas=mem\">Almighty Goku</a> (50 000 000 000 000 000 000 kg)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Saiyan"){
$kur = "Kovų zona - Saiyan";
include ("config.php");
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
echo"<b>Saiyan</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Bardock&amp;kd=$kodase&amp;kas=mem\">Bardock</a> (5 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Borgos&amp;kd=$kodase&amp;kas=mem\">Borgos</a> (60 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Fasha&amp;kd=$kodase&amp;kas=mem\">Fasha</a> (90 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Goku&amp;kd=$kodase&amp;kas=mem\">Goku</a> (240 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Nappa&amp;kd=$kodase&amp;kas=mem\">Nappa</a> (370 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Paragus&amp;kd=$kodase&amp;kas=mem\">Paragus</a> (440 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Raditz&amp;kd=$kodase&amp;kas=mem\">Raditz</a> (600 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Panbukin&amp;kd=$kodase&amp;kas=mem\">Panbukin</a> (800 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Brocco&amp;kd=$kodase&amp;kas=mem\">Brocco</a> (1,100 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Shugesh&amp;kd=$kodase&amp;kas=mem\">Shugesh</a> (1,600 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Tarble&amp;kd=$kodase&amp;kas=mem\">Tarble</a> (2,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Tora&amp;kd=$kodase&amp;kas=mem\">Tora</a> (3,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Turles&amp;kd=$kodase&amp;kas=mem\">Turles</a> (4,500 kg)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Earthling"){
$kur = "Kovų zona - Earthling";
include ("config.php");
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
echo"<b>Earthling</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Chaozu&amp;kd=$kodase&amp;kas=mem\">Chaozu</a> (6,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Emperor Pilaf&amp;kd=$kodase&amp;kas=mem\">Emperor Pilaf</a> (8,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Mr. Satan&amp;kd=$kodase&amp;kas=mem\">Mr. Satan</a> (10,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Krillin&amp;kd=$kodase&amp;kas=mem\">Krillin</a> (13,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Launch&amp;kd=$kodase&amp;kas=mem\">Launch</a> (18,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Mai&amp;kd=$kodase&amp;kas=mem\">Mai</a> (23,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Murasaki&amp;kd=$kodase&amp;kas=mem\">Murasaki</a> (30,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Nam&amp;kd=$kodase&amp;kas=mem\">Nam</a> (36,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Ranfan&amp;kd=$kodase&amp;kas=mem\">Ranfan</a> (43,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Tien&amp;kd=$kodase&amp;kas=mem\">Tien</a> (45,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Olibu&amp;kd=$kodase&amp;kas=mem\">Olibu</a> (48,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Yajirobe&amp;kd=$kodase&amp;kas=mem\">Yajirobe</a> (51,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Yamcha&amp;kd=$kodase&amp;kas=mem\">Yamcha</a> (60,000 kg)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Half-Saiyans"){
$kur = "Kovų zona - Half Saiyans";
include ("config.php");
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
echo"<b>Half-Saiyans</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Teen Gohan&amp;kd=$kodase&amp;kas=mem\">Teen Gohan</a> (70,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Future Gohan&amp;kd=$kodase&amp;kas=mem\">Future Gohan</a> (71,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Future Trunks&amp;kd=$kodase&amp;kas=mem\">Future Trunks</a> (75,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Goten&amp;kd=$kodase&amp;kas=mem\">Goten</a> (82,000 kg)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Namekians"){
$kur = "Kovų zona - Namekians";
include ("config.php");
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
echo"<b>Namekians</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Cargo&amp;kd=$kodase&amp;kas=mem\">Cargo</a> (120,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Nail&amp;kd=$kodase&amp;kas=mem\">Nail</a> (130,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Piccolo&amp;kd=$kodase&amp;kas=mem\">Piccolo</a> (140,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Lord Slug&amp;kd=$kodase&amp;kas=mem\">Lord Slug</a> (170,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Piccolo Daimao&amp;kd=$kodase&amp;kas=mem\">Piccolo Daimao</a> (200,000 kg)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Xenos"){
$kur = "Kovų zona - Xenos";
include ("config.php");
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
echo"<b>Xenos</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Cui&amp;kd=$kodase&amp;kas=mem\">Cui</a> (250,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Dodoria&amp;kd=$kodase&amp;kas=mem\">Dodoria</a> (300,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Zarbon&amp;kd=$kodase&amp;kas=mem\">Zarbon</a> (400,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Abo&amp;kd=$kodase&amp;kas=mem\">Abo</a> (480,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Appule&amp;kd=$kodase&amp;kas=mem\">Appule</a> (550,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Kado&amp;kd=$kodase&amp;kas=mem\">Kado </a> (670,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Burter&amp;kd=$kodase&amp;kas=mem\">Burter</a> (730,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Jeice&amp;kd=$kodase&amp;kas=mem\">Jeice</a> (800,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Cap. Ginyu&amp;kd=$kodase&amp;kas=mem\">Cap. Ginyu</a> (910,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Guldo&amp;kd=$kodase&amp;kas=mem\">Guldo</a> (1,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Recoome&amp;kd=$kodase&amp;kas=mem\">Recoome</a> (1,100,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Salza&amp;kd=$kodase&amp;kas=mem\">Salza</a> (1,200,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Bojack&amp;kd=$kodase&amp;kas=mem\">Bojack</a> (1,300,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Bido&amp;kd=$kodase&amp;kas=mem\">Bido</a> (1,500,000 kg)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Changelings"){
$kur = "Kovų zona - Changelings";
include ("config.php");
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
echo"<b>Changelings</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Frieza&amp;kd=$kodase&amp;kas=mem\">Frieza</a> (1,700,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Cooler&amp;kd=$kodase&amp;kas=mem\">Cooler</a> (1,900,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=King Cold&amp;kd=$kodase&amp;kas=mem\">King Cold</a> (2,100,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Kuriza&amp;kd=$kodase&amp;kas=mem\">Kuriza</a> (2,400,000 kg)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Demons"){
$kur = "Kovų zona - Demons";
include ("config.php");
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
echo"<b>Demons</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Babadi&amp;kd=$kodase&amp;kas=mem\">Babadi</a> (2,500,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Buu&amp;kd=$kodase&amp;kas=mem\">Buu</a> (2,650,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Cymbal&amp;kd=$kodase&amp;kas=mem\">Cymbal</a> (2,780,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Drum&amp;kd=$kodase&amp;kas=mem\">Drum</a> (2,910,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Tambourine&amp;kd=$kodase&amp;kas=mem\">Tambourine</a> (3,110,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Dorodabo&amp;kd=$kodase&amp;kas=mem\">Dorodabo</a> (3,300,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Syn&amp;kd=$kodase&amp;kas=mem\">Syn</a> (3,400,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Nuova&amp;kd=$kodase&amp;kas=mem\">Nuova</a> (3,650,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Oceana&amp;kd=$kodase&amp;kas=mem\">Oceana</a> (3,950000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Shula&amp;kd=$kodase&amp;kas=mem\">Shula</a> (4,210,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Garlic Jr.&amp;kd=$kodase&amp;kas=mem\">Garlic Jr.</a> (4,400,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Ginger&amp;kd=$kodase&amp;kas=mem\">Ginger</a> (4,800,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Mustard&amp;kd=$kodase&amp;kas=mem\">Mustard</a> (5,200,000 kg)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Shins"){
$kur = "Kovų zona - Shins";
include ("config.php");
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
echo"<b>Shins</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Kibito&amp;kd=$kodase&amp;kas=mem\">Kibito</a> (5,500,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Supreme Kai&amp;kd=$kodase&amp;kas=mem\">Supreme Kai</a> (6,000,000 kg)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Constructs"){
$kur = "Kovų zona - Constructs";
include ("config.php");
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
echo"<b>Constructs</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Bebi&amp;kd=$kodase&amp;kas=mem\">Bebi</a> (6,500,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Rilldo&amp;kd=$kodase&amp;kas=mem\">Rilldo</a> (6,650,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Maj. Metallitron&amp;kd=$kodase&amp;kas=mem\">Maj. Metallitron</a> (6,780,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Com. Nezi&amp;kd=$kodase&amp;kas=mem\">Com. Nezi</a> (6,910,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Android 8&amp;kd=$kodase&amp;kas=mem\">Android 8</a> (7,110,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Android 13&amp;kd=$kodase&amp;kas=mem\">Android 13</a> (7,300,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Android 14&amp;kd=$kodase&amp;kas=mem\">Android 14</a> (7,400,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Android 15&amp;kd=$kodase&amp;kas=mem\">Android 15</a> (7,650,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Android 16&amp;kd=$kodase&amp;kas=mem\">Android 16</a> (7,950,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Android 17&amp;kd=$kodase&amp;kas=mem\">Android 17</a> (8,210,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Android 18&amp;kd=$kodase&amp;kas=mem\">Android 18</a> (8,400,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Android 19&amp;kd=$kodase&amp;kas=mem\">Android 19</a> (8,800,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Android 20&amp;kd=$kodase&amp;kas=mem\">Android 20</a> (9,200,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Kishime&amp;kd=$kodase&amp;kas=mem\">Kishime</a> (10,800,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Misokatsun&amp;kd=$kodase&amp;kas=mem\">Misokatsun</a> (10,920,000 kg)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Fusion"){
$kur = "Kovų zona - Fusion";
include ("config.php");
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
echo"<b>Fusion</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Imperfect Cell&amp;kd=$kodase&amp;kas=mem\">Imperfect Cell</a> (20,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Semi-Perfect Cell&amp;kd=$kodase&amp;kas=mem\">Semi-Perfect Cell</a> (30,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Android 13&amp;kd=$kodase&amp;kas=mem\">Android 13</a> (50,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Super Buu&amp;kd=$kodase&amp;kas=mem\">Super Buu</a> (110,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Uub&amp;kd=$kodase&amp;kas=mem\">Uub</a> (160,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Naturon Shenron&amp;kd=$kodase&amp;kas=mem\">Naturon Shenron</a> (230,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Syn Shenron&amp;kd=$kodase&amp;kas=mem\">Syn Shenron</a> (280,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Vegito&amp;kd=$kodase&amp;kas=mem\">Vegito</a> (330,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Super 17&amp;kd=$kodase&amp;kas=mem\">Super 17</a> (390,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Gotenks&amp;kd=$kodase&amp;kas=mem\">Gotenks</a> (450,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Gogeta&amp;kd=$kodase&amp;kas=mem\">Gogeta</a> (600,000,000 kg)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Great fighters"){
$kur = "Great fighters";
include ("config.php");
$fpa = fopen("vieta/$nick.txt","w");
fwrite($fpa,"$id");
fclose($fpa);
echo"<b>Great fighters</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=Great Demons\">Great Demons</a><br/>
[&#8226;]  <a href=\"fighting.php?id=Great Constructs\">Great Constructs</a><br/>
[&#8226;]  <a href=\"fighting.php?id=Great Saiyans\">Great Saiyans</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Great Demons"){
$kur = "Great Demons";
include ("config.php");
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
echo"<b>Great Demons</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Cymbal&amp;kd=$kodase&amp;kas=mem\">Great Cymbal</a> (800,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Dorodabo&amp;kd=$kodase&amp;kas=mem\">Great Dorodabo</a> (1,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Syn&amp;kd=$kodase&amp;kas=mem\">Great Syn</a> (1,500,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Eis&amp;kd=$kodase&amp;kas=mem\">Great Eis</a> (2,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Nuova&amp;kd=$kodase&amp;kas=mem\">Great Nuova</a> (2,500,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Oceana&amp;kd=$kodase&amp;kas=mem\">Great Oceana</a> (3,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Dabura&amp;kd=$kodase&amp;kas=mem\">Great Dabura</a> (4,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Garlic Jr.&amp;kd=$kodase&amp;kas=mem\">Great Garlic Jr.</a> (5,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Frieza&amp;kd=$kodase&amp;kas=mem\">Great Frieza</a> (6,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Babadi&amp;kd=$kodase&amp;kas=mem\">Great Babadi</a> (8,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Buu&amp;kd=$kodase&amp;kas=mem\">Great Buu</a> (10,000,000,000 kg)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Great Constructs"){
$kur = "Great Constructs";
include ("config.php");
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
echo"<b>Great Constructs</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Android 13&amp;kd=$kodase&amp;kas=mem\">Great Android 13</a> (15,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Android 14&amp;kd=$kodase&amp;kas=mem\">Great Android 14</a> (20,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Android 15&amp;kd=$kodase&amp;kas=mem\">Great Android 15</a> (30,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Android 16&amp;kd=$kodase&amp;kas=mem\">Great Android 16</a> (40,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Android 17&amp;kd=$kodase&amp;kas=mem\">Great Android 17</a> (60,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Android 18&amp;kd=$kodase&amp;kas=mem\">Great Android 18</a> (80,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Android 19&amp;kd=$kodase&amp;kas=mem\">Great Android 19</a> (100,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Android 20&amp;kd=$kodase&amp;kas=mem\">Great Android 20</a> (150,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Cell&amp;kd=$kodase&amp;kas=mem\">Great Cell</a> (200,000,000,000 kg)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "Great Saiyans"){
$kur = "Great Saiyans";
include ("config.php");
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
echo"<b>Great Saiyans</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Bardock&amp;kd=$kodase&amp;kas=mem\">Great Bardock</a> (300,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Borgos&amp;kd=$kodase&amp;kas=mem\">Great Borgos</a> (400,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Fasha&amp;kd=$kodase&amp;kas=mem\">Great Fasha</a> (500,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Paragus&amp;kd=$kodase&amp;kas=mem\">Great Paragus</a> (700,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Nappa&amp;kd=$kodase&amp;kas=mem\">Great Nappa</a> (850,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Raditz&amp;kd=$kodase&amp;kas=mem\">Great Raditz</a> (1,000,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Tarble&amp;kd=$kodase&amp;kas=mem\">Great Tarble</a> (2,000,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Turles&amp;kd=$kodase&amp;kas=mem\">Great Turles</a> (5,000,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Vegeta&amp;kd=$kodase&amp;kas=mem\">Great Vegeta</a> (10,000,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Great Goku&amp;kd=$kodase&amp;kas=mem\">Great Goku</a> (50,000,000,000,000 kg)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Hell"){
$kur = "Hell";
include ("config.php");
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
echo"<b>Hell</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Hell Nappa&amp;kd=$kodase&amp;kas=mem\">Hell Nappa</a> (1,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Hell Dodoria&amp;kd=$kodase&amp;kas=mem\">Hell Dodoria</a> (1,000,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Hell Frieza&amp;kd=$kodase&amp;kas=mem\">Hell Frieza</a> (10,000,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Hell King Cold&amp;kd=$kodase&amp;kas=mem\">Hell King Cold</a> (50,000,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Hell Cell&amp;kd=$kodase&amp;kas=mem\">Hell Cell</a> (100,000,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Hell Lord Slug&amp;kd=$kodase&amp;kas=mem\">Hell Lord Slug</a> (500,000,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Hell General Rilldo&amp;kd=$kodase&amp;kas=mem\">Hell General Rilldo</a> (1,000,000,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Hell Fighter 17&amp;kd=$kodase&amp;kas=mem\">Hell Fighter 17</a> (10,000,000,000,000,000 kg)<br/>
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=Hell Buu&amp;kd=$kodase&amp;kas=mem\">Hell Buu</a> (100,000,000,000,000,000 kg)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "kova") {
$kur = "Kovoją";
include ("config.php");
if ($vs == "Bardock") {$lyyygis = 5;$x = 2;}
if ($vs == "Borgos") {$lyyygis = 60;$x = 5; }
if ($vs == "Fasha") {$lyyygis = 90;$x = 7; }
if ($vs == "Goku") {$lyyygis = 240;$x = 10; }
if ($vs == "Nappa") {$lyyygis = 370;$x = 12; }
if ($vs == "Paragus") {$lyyygis = 440;$x = 14; }
if ($vs == "Raditz") {$lyyygis = 600;$x = 17; }
if ($vs == "Panbukin") {$lyyygis = 800;$x = 19; }
if ($vs == "Brocco") {$lyyygis = 1100;$x = 22; }
if ($vs == "Shugesh") {$lyyygis = 1600;$x = 25; }
if ($vs == "Tarble") {$lyyygis = 2000;$x = 26; } 
if ($vs == "Tora") {$lyyygis = 3000;$x = 27; } 
if ($vs == "Turles") {$lyyygis = 4500;$x = 28; } 
if ($vs == "Chaozu") {$lyyygis = 6000;$x = 29; } 
if ($vs == "Emperor Pilaf") {$lyyygis = 8000;$x = 31; } 
if ($vs == "Mr. Satan") {$lyyygis = 10000;$x = 32; } 
if ($vs == "Krillin") {$lyyygis = 13000;$x = 33; } 
if ($vs == "Launch") {$lyyygis = 18000;$x = 34; } 
if ($vs == "Mai") {$lyyygis = 23000;$x = 35; } 
if ($vs == "Murasaki") {$lyyygis = 30000;$x = 36; } 
if ($vs == "Nam") {$lyyygis = 36000;$x = 37; } 
if ($vs == "Ranfan") {$lyyygis = 43000;$x = 38; } 
if ($vs == "Tien") {$lyyygis = 45000;$x = 40; } 
if ($vs == "Olibu") {$lyyygis = 48000;$x = 42; } 
if ($vs == "Yajirobe") {$lyyygis = 51000;$x = 45; } 
if ($vs == "Yamcha") {$lyyygis = 60000;$x = 50; } 

if ($vs == "Teen Gohan") {

$lyyygis = 70000;
$x = 55; 
} 
if ($vs == "Future Gohan") {

$lyyygis = 71000;
$x = 60; 
} 
if ($vs == "Future Trunks") {

$lyyygis = 75000;
$x = 70; 
} 
if ($vs == "Goten") {

$lyyygis = 82000;
$x = 80; 
} 
if ($vs == "Cargo") {

$lyyygis = 120000;
$x = 95; 
} 
if ($vs == "Nail") {

$lyyygis = 130000;
$x = 110; 
} 
if ($vs == "Piccolo") {

$lyyygis = 140000;
$x = 120; 
} 
if ($vs == "Lord Slug") {

$lyyygis = 170000;
$x = 140; 
} 
if ($vs == "Piccolo Daimao") {

$lyyygis = 200000;
$x = 150; 
} 
if ($vs == "Cui") {

$lyyygis = 250000;
$x = 170; 
}
if ($vs == "Dodoria") {

$lyyygis = 300000;
$x = 200; 
}
if ($vs == "Zarbon") {

$lyyygis = 400000;
$x = 220; 
} 
if ($vs == "Abo") {

$lyyygis = 480000;
$x = 250; 
} 
if ($vs == "Appule") {

$lyyygis = 550000;
$x = 280; 
} 

if ($vs == "Kado") {

$lyyygis = 670000;
$x = 300; 
} 
if ($vs == "Burter") {

$lyyygis = 730000;
$x = 340; 
} 
if ($vs == "Jeice") {

$lyyygis = 800000;
$x = 380; 
} 
if ($vs == "Cap. Ginyu") {

$lyyygis = 910000;
$x = 430; 
} 
if ($vs == "Guldo") {

$lyyygis = 1000000;
$x = 480; 
} 
if ($vs == "Recoome") {

$lyyygis = 1100000;
$x = 530; 
} 
if ($vs == "Salza") {

$lyyygis = 1200000;
$x = 590; 
} 
if ($vs == "Bojack") {

$lyyygis = 1300000;
$x = 650; 
} 
if ($vs == "Bido") {

$lyyygis = 1500000;
$x = 690; 
} 
if ($vs == "Frieza") {

$lyyygis = 1700000;
$x = 730; 
} 
if ($vs == "Cooler") {

$lyyygis = 1900000;
$x = 770; 
} 
if ($vs == "King Cold") {

$lyyygis = 2100000;
$x = 790; 
} 
if ($vs == "Kuriza") {

$lyyygis = 2400000;
$x = 870; 
} 
if ($vs == "Babadi") {

$lyyygis = 2500000;
$x = 930; 
} 
if ($vs == "Buu") {

$lyyygis = 2650000;
$x = 1200; 
} 
if ($vs == "Cymbal") {

$lyyygis = 2780000;
$x = 1140; 
} 
if ($vs == "Drum") {

$lyyygis = 2910000;
$x = 1170; 
} 
if ($vs == "Tambourine") {

$lyyygis = 3110000;
$x = 1210; 
} 
if ($vs == "Dorodabo") {

$lyyygis = 3300000;
$x = 1340; 
} 
if ($vs == "Syn") {

$lyyygis = 3400000;
$x = 1410; 
} 
if ($vs == "Nuova") {

$lyyygis = 3650000;
$x = 1490; 
} 
if ($vs == "Oceana") {

$lyyygis = 3950000;
$x = 1570; 
} 
if ($vs == "Shula") {

$lyyygis = 4210000;
$x = 1630; 
} 
if ($vs == "Garlic Jr.") {

$lyyygis = 4400000;
$x = 1750; 
} 
if ($vs == "Ginger") {

$lyyygis = 4800000;
$x = 1790; 
} 
if ($vs == "Mustard") {

$lyyygis = 5200000;
$x = 1860; 
} 
if ($vs == "Kibito") {

$lyyygis = 5500000;
$x = 1940; 
} 
if ($vs == "Supreme Kai") {

$lyyygis = 6000000;
$x = 2140; 
} 
if ($vs == "Bebi") {

$lyyygis = 6500000;
$x = 2230; 
} 
if ($vs == "Rilldo") {

$lyyygis = 6650000;
$x = 2340; 
} 
if ($vs == "Maj. Metallitron") {

$lyyygis = 6780000;
$x = 2560; 
} 
if ($vs == "Com. Nezi") {

$lyyygis = 6910000;
$x = 2680; 
} 
if ($vs == "Android 8") {

$lyyygis = 7110000;
$x = 2730; 
} 
if ($vs == "Android 13") {

$lyyygis = 7300000;
$x = 2900; 
} 
if ($vs == "Android 14") {

$lyyygis = 7400000;
$x = 3050; 
} 
if ($vs == "Android 15") {

$lyyygis = 7650000;
$x = 3200; 
} 
if ($vs == "Android 16") {

$lyyygis = 7950000;
$x = 3300; 
} 
if ($vs == "Android 17") {

$lyyygis = 8210000;
$x = 3500; 
} 

if ($vs == "Android 18") {

$lyyygis = 8400000;
$x = 3700; 
} 

if ($vs == "Android 19") {

$lyyygis = 8800000;
$x = 4000; 
} 
if ($vs == "Android 20") {

$lyyygis = 9200000;
$x = 4220; 
} 

if ($vs == "Kishime") {

$lyyygis = 10800000;
$x = 4680; 
} 
if ($vs == "Misokatsun") {

$lyyygis = 10920000;
$x = 5320; 
} 

if ($vs == "Imperfect Cell") {

$lyyygis = 20000000;
$x = 6320; 
} 

if ($vs == "Semi-Perfect Cell") {

$lyyygis = 30000000;
$x = 7320; 
} 

if ($vs == "Android 13") {

$lyyygis = 50000000;
$x = 9320; 
} 
if ($vs == "Super Buu") {

$lyyygis = 110000000;
$x = 10000; 
} 

if ($vs == "Uub") {

$lyyygis = 160000000;
$x = 13000;
} 

if ($vs == "Naturon Shenron") {

$lyyygis = 230000000;
$x = 17000;
} 
if ($vs == "Syn Shenron") {

$lyyygis = 280000000;
$x = 22000;
} 
if ($vs == "Vegito") {

$lyyygis = 330000000;
$x = 26000;
} 

if ($vs == "Super 17") {

$lyyygis = 390000000;
$x = 29000;
}

if ($vs == "Gotenks") {

$lyyygis = 450000000;
$x = 33000;
}
if ($vs == "Gogeta") {
$lyyygis = 600000000;
$x = 38000;
}
if ($vs == "Great Cymbal") {
$lyyygis = 650000000;
$x = 42000;
}
if ($vs == "Great Dorodabo") {
$lyyygis = 1000000000;
$x = 45000;
}
if ($vs == "Great Syn") {
$lyyygis = 1500000000;
$x = 50000;
}

if ($vs == "Great Eis") {
$lyyygis = 2000000000;
$x = 55000;
}
if ($vs == "Great Nuova") {
$lyyygis = 2500000000;
$x = 60000;
}
if ($vs == "Great Oceana") {
$lyyygis = 3000000000;
$x = 70000;
}
if ($vs == "Great Dabura") {
$lyyygis = 4000000000;
$x = 80000;
}
if ($vs == "Great Garlic Jr.") {
$lyyygis = 5000000000;
$x = 90000;
}
if ($vs == "Great Frieza") {
$lyyygis = 6000000000;
$x = 110000;
}
if ($vs == "Great Babadi") {
$lyyygis = 8000000000;
$x = 120000;
}
if ($vs == "Great Buu") {
$lyyygis = 10000000000;
$x = 130000;
}
if ($vs == "Great Android 13") {
$lyyygis = 15000000000;
$x = 150000;
}
if ($vs == "Great Android 14") {
$lyyygis = 20000000000;
$x = 180000;
}
if ($vs == "Great Android 15") {
$lyyygis = 30000000000;
$x = 210000;
}
if ($vs == "Great Android 16") {
$lyyygis = 40000000000;
$x = 230000;
}
if ($vs == "Great Android 17") {
$lyyygis = 60000000000;
$x = 260000;
}
if ($vs == "Great Android 18") {
$lyyygis = 80000000000;
$x = 290000;
}
if ($vs == "Great Android 19") {
$lyyygis = 100000000000;
$x = 310000;
}
if ($vs == "Great Android 20") {
$lyyygis = 150000000000;
$x = 330000;
}
if ($vs == "Great Cell") {
$lyyygis = 200000000000;
$x = 360000;
}
if ($vs == "Great Bardock") {
$lyyygis = 300000000000;
$x = 380000;
}
if ($vs == "Great Borgos") {
$lyyygis = 400000000000;
$x = 420000;
}
if ($vs == "Great Fasha") {
$lyyygis = 500000000000;
$x = 440000;
}
if ($vs == "Great Paragus") {
$lyyygis = 700000000000;
$x = 470000;
}
if ($vs == "Great Nappa") {
$lyyygis = 850000000000;
$x = 490000;
}
if ($vs == "Great Raditz") {
$lyyygis = 1000000000000;
$x = 540000;
}
if ($vs == "Great Tarble") {
$lyyygis = 2000000000000;
$x = 570000;
}
if ($vs == "Great Turles") {
$lyyygis = 5000000000000;
$x = 620000;
}
if ($vs == "Great Vegeta") {
$lyyygis = 10000000000000;
$x = 660000;
}
if ($vs == "Great Goku") {
$lyyygis = 50000000000000;
$x = 690000;
}

if ($vs == "Hell Nappa") {
$lyyygis = 1000000000;
$x = 720000;
}
if ($vs == "Hell Dodoria") {
$lyyygis = 1000000000000;
$x = 760000;
}
if ($vs == "Hell Frieza") {
$lyyygis = 10000000000000;
$x = 780000;
}

if ($vs == "Hell King Cold") {
$lyyygis = 50000000000000;
$x = 820000;
}
if ($vs == "Hell Cell") {
$lyyygis = 100000000000000;
$x = 860000;
}
if ($vs == "Hell Lord Slug") {
$lyyygis = 500000000000000;
$x = 890000;
}
if ($vs == "Hell General Rilldo") {
$lyyygis = 1000000000000000;
$x = 930000;
}
if ($vs == "Hell Fighter 17") {
$lyyygis = 10000000000000000;
$x = 970000;
}
if ($vs == "Hell Buu") {
$lyyygis = 100000000000000000;
$x = 1000000;
}

if ($vs == "Almighty Frieza") {
$lyyygis = 500000000000000000;
$x = 1200000;
}

if ($vs == "Almighty Buu") {
$lyyygis = 1000000000000000000;
$x = 1400000;
}

if ($vs == "Almighty Cell") {
$lyyygis = 5000000000000000000;
$x = 1600000;
}

if ($vs == "Almighty Vegeta") {
$lyyygis = 10000000000000000000;
$x = 2000000;
}

if ($vs == "Almighty Goku") {
$lyyygis = 50000000000000000000;
$x = 4000000;
}

if ($vs == "Madmen Bardock") {$lyyygis = 1000000000000000000000 ;$x = 5000000;}
if ($vs == "Madmen Borgos") {$lyyygis = 10000000000000000000000;$x = 6000000; }
if ($vs == "Madmen Fasha") {$lyyygis = 100000000000000000000000;$x = 7000000; }
if ($vs == "Madmen Goku") {$lyyygis = 1000000000000000000000000000;$x = 8000000; }
if ($vs == "Madmen Nappa") {$lyyygis = 10000000000000000000000000000;$x = 10000000; }
if ($vs == "Madmen Paragus") {$lyyygis = 100000000000000000000000000000;$x = 12000000; }
if ($vs == "Madmen Raditz") {$lyyygis = 1000000000000000000000000000000;$x = 15000000; }
if ($vs == "Madmen Panbukin") {$lyyygis = 10000000000000000000000000000000;$x = 18000000; }
if ($vs == "Madmen Brocco") {$lyyygis = 100000000000000000000000000000000;$x = 25000000; }
if ($vs == "Madmen Shugesh") {$lyyygis = 1000000000000000000000000000000000;$x = 30000000; }
if ($vs == "Madmen Tarble") {$lyyygis = 10000000000000000000000000000000000;$x = 45000000; } 
if ($vs == "Madmen Tora") {$lyyygis = 100000000000000000000000000000000000;$x = 70000000; } 
if ($vs == "Madmen Turles") {$lyyygis = 1000000000000000000000000000000000000;$x = 95000000; } 


if ($vs == "Best Vegeta") {$lyyygis = 10000000000000000000000000000000000000;$x = 110000000; }
if ($vs == "Best Goku") {$lyyygis = 100000000000000000000000000000000000000;$x = 150000000; }
if ($vs == "Best Trunks") {$lyyygis = 1000000000000000000000000000000000000000;$x = 210000000; } 
if ($vs == "Best Gohan") {$lyyygis = 10000000000000000000000000000000000000000;$x = 290000000; } 
if ($vs == "Best Broly") {$lyyygis = 1000000000000000000000000000000000000000000;$x = 360000000; } 
if ($vs == "Best Frieza") {$lyyygis = 100000000000000000000000000000000000000000000;$x = 450000000; } 
if ($vs == "Best Cell") {$lyyygis = 1000000000000000000000000000000000000000000000;$x = 530000000; } 
if ($vs == "Best Gogeta") {$lyyygis = 9000000000000000000000000000000000000000000000000;$x = 630000000; } 


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
if ($mm[78] == "-"){ }else{echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"$pad; url=fighting.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\">";}

echo"Turite spausti \"Kovoti toliau\", arba \"Atgal\".</div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"fighting.php?id=kova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\">Kovoti toliau</a></b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
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
$placeas = @file_get_contents("vieta/$nick.txt");
if ($mm[78] == "-"){ }else{echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"$pad; url=fighting.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\">";}
echo"Jūs kovojate per greitai! Po kovos rekia palaukti $pad sek.<br/></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"fighting.php?id=kova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\">Kovoti toliau</a></b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
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
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
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
$getxp = round($x*rand(7,65));
if ($mm[40] - time() > 0){$getxp = $getxp * 2;} else {$getxp = $getxp * 1;}
if ($moreexp[1] - time() > 0){$getxp = $getxp * $moreexp[0];}else{$getxp = $getxp * 1;}

$suma =  $getxp +$exp;

echo"<b>Kovą</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Laimejai!</b><br>
Nukovei <b>$vs</b> kovotoją!<br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Jūsų kovinė galia <b>"; if($def>=$dmg){echo"$dmg22";}if($dmg>$def) {echo"$def22";}echo"</b>, o priešo kovinė galia <b>$lyyygis</b><br/>";

echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">Gavote:
 <b>+$yjega</b> jėgos, <b>+$ygyvybiu</b> gyvybių, <b>+$ygynyba</b> gynybos.<br/>";
 
 echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
$dtop = @file_get_contents("dtop/$nick.txt");
$dtop = $dtop + 1;
@file_put_contents("dtop/$nick.txt", "$dtop");

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
$dstone = array("soul_stone","","","","","","","","","","","","","","","","","saiyan_tail","","","","","","","","","ginyu_material","","","","","","","","","","","","fusion_fail","","","","","","","","","ginyu_crystal","","","","","","","yamma_fruit","","","","","","","","","","microschem","","","","","","","","majin_scroll","","","","","","","","","","","","magic_ball","","","","","","","","","","","","magic_ball","","");
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


$getpin = round($x*rand(310,650));

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

$ran45 = rand(1, 500);

if ($ran45 == 5)
{
    $rand46 = rand(1, 3);
	$kronoxzs = @file_get_contents("isbarsyti/$nick.txt");
    $kronoxzs = $kronoxzs + $rand46;
    $fp43333 = @fopen("isbarsyti/$nick.txt", "w");
        @fwrite($fp43333, "$kronoxzs");
        @fclose($fp43333);
		echo"[&#8226;]  Radote <b>$rand46</b> išbarstytiu rutulių<br/>"; 
}

$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5";
$placeas = @file_get_contents("vieta/$nick.txt");
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
if ($mm[78] == "-"){ }else{echo "
Kita kova įvyks už  <label id=\"setTime$tim\">$pad sek.</label><label id=\"getTime$tim\" style=\"display:none;\">$pad</label>
				<script src=\"https://code.jquery.com/jquery-1.8.2.min.js\" type=\"text/javascript\"></script>
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
						window.location = 'fighting.php?nick=$nick&pass=$pass&id=kova&vs=$vs&kd=$kodase&kas=mem';
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
echo"</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"fighting.php?id=kova&amp;vs=$vs&amp;kd=$kodase&amp;kas=mem\">Kovoti toliau</a><br/>

</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a accesskey=\"1\" href=\"pagrindinis.php?id=apie&amp;ka=$nick\">Jūsų informacija</a><br/>
[&#8226;]  <a accesskey=\"2\" href=\"pagrindinis.php?id=inventory\">Kapsulių dėžutė</a><br/>


</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=$placeas\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
$jega = $jega + $yjega;
$gyvybess = $gyvybess + $ygyvybiu;
$gynyba = $gynyba + $ygynyba;
$fpa = fopen("$gameriai","w");
fwrite($fpa,"$lvl|$inf[1]|$inf[2]|$jega|$gyvs|$gyvybess|$sugebejimas|$pinigai|$winai|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$pointsr|$gynyba|$tim|$rase|$suma|$left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fpa);
}}}}


print '</body></html>';
?>