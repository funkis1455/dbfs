<?php
$kur = "Kame house";
include ("config.php");
include_once("icludekitainf/start.php");

if ($id == ""){ 
echo"<b>Kame House</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/kame house.png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Jūs atkeliavote į kame house, čia galite treniruotis, bei vygdyti misijas.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kame_house.php?id=workout\">Roshi Trenoruotės</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"kame_house.php?id=mission\">Misijos</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"kame_house.php?id=fight\">Kovą</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "mission"){echo"<b>Misijos</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/master roshi.png' alt=\"\"/>
</div><div class=\"meniu\" style=\"text-align: left;\">";

if($mm[88]=="0"){echo"[&#8226;] Tu vygdai: $mm[88] iš 10 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 15 soul stone.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kame_house.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[88]=="1"){echo"[&#8226;] Tu vygdai: $mm[88] iš 10 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 18 microschem.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kame_house.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[88]=="2"){echo"[&#8226;] Tu vygdai: $mm[88] iš 10 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 23 microschem.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kame_house.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[88]=="3"){echo"[&#8226;] Tu vygdai: $mm[88] iš 10 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 5 saiyan tail.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kame_house.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[88]=="4"){echo"[&#8226;] Tu vygdai: $mm[88] iš 10 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 100 000 pinigų.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kame_house.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[88]=="5"){echo"[&#8226;] Tu vygdai: $mm[88] iš 10 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 1 Radaro.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kame_house.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[88]=="6"){echo"[&#8226;] Tu vygdai: $mm[88] iš 10 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 2 Kame cloth.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kame_house.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[88]=="7"){echo"[&#8226;] Tu vygdai: $mm[88] iš 10 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 38 soul stone.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kame_house.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[88]=="8"){echo"[&#8226;] Tu vygdai: $mm[88] iš 10 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 500 000 pinigų.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kame_house.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[88]=="9"){echo"[&#8226;] Tu vygdai: $mm[88] iš 10 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 55 saiyan tail.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kame_house.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[88]=="10"){echo"[&#8226;] Tu vygdai: $mm[88] iš 10 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 100 soul stone.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
<a href=\"kame_house.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[88]=="11"){echo"<b> [&#8226;]  Jūs perėjote visas misijas.</b><br/>";}

echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kame_house.php?id=\">Į Kame House</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "next"){
include("icludekitainf/mm.php");
if ($mm[88][$ka-1] == "+"){ $zin = "<b>Si misija jau ivykdyta!</b>"; }
if ($zin == ""){ 
include("icludekitainf/nuskait.php"); 

if($mm[88]=="0"){ $zin = "Sekmingai ivygdita"; 
include("icludekitainf/mm.php");
}

if($mm[88]=="10"){ 
if ($dari[0] < 100){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 500 jėgos ir 3 000 gynybos, 1 000 000 pinigų ir kreditą.<br/>";
$jega = 500+$jega; 
$gynyba = 3000+$gynyba; 
$pinigai = $pinigai + 1000000;  
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$kr = @file_get_contents("kronoss/$nick.txt");
$kr = $kr + 1;
@file_put_contents("kronoss/$nick.txt", "$kr");
$dari[0] = $dari[0] - 100;
$mm[88] = $mm[88] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[88]=="9"){ 
if ($dari[1] < 55){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 500 jėgos ir 1500 gynybos.<br/>";
$jega = 500+$jega; 
$gynyba = 1500+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[1] = $dari[1] - 55;
$mm[88] = $mm[88] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[88]=="8"){ 
if ($pinigai < 500000){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 1 kreditą.<br/>";
$kr = @file_get_contents("kronoss/$nick.txt");
$kr = $kr + 1;
@file_put_contents("kronoss/$nick.txt", "$kr");
$pinigai = $pinigai - 500000;  
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[88] = $mm[88] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[88]=="7"){ 
if ($dari[0] < 38){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 180 jėgos ir 700 gynybos.<br/>";
$jega = 180+$jega; 
$gynyba = 700+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[0] = $dari[0] - 38;
$mm[88] = $mm[88] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[88]=="6"){ 
if ($dari[10] < 1){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 1 000 000 pinigų.<br/>";
$pinigai = $pinigai + 1000000;  
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[19] = $dari[10] - 1;
$mm[88] = $mm[88] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[88]=="5"){ 
if ($dari[19] < 1){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 500 000 pinigų.<br/>";
$pinigai = $pinigai + 500000;  
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[19] = $dari[19] - 1;
$mm[88] = $mm[88] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[88]=="4"){ 
if ($pinigai < 100000){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 1 kreditą.<br/>";
$kr = @file_get_contents("kronoss/$nick.txt");
$kr = $kr + 1;
@file_put_contents("kronoss/$nick.txt", "$kr");
$pinigai = $pinigai - 100000;  
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[88] = $mm[88] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[88]=="3"){ 
if ($dari[1] < 5){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 300 000 pinigų.<br/>";
$pinigai = 300000+$pinigai;  
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[1] = $dari[1] - 5;
$mm[88] = $mm[88] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[88]=="2"){ 
if ($dari[5] < 23){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 80 jėgos ir 300 gynybos.<br/>";
$jega = 80+$jega; 
$gynyba = 300+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[5] = $dari[5] - 23;
$mm[88] = $mm[88] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[88]=="1"){ 
if ($dari[5] < 18){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 50 jėgos ir 150 gynybos.<br/>";
$jega = 50+$jega; 
$gynyba = 150+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[5] = $dari[5] - 18;
$mm[88] = $mm[88] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[88]=="0"){ 
if ($dari[0] < 15){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 2 kreditus.<br/>";
$kr = @file_get_contents("kronoss/$nick.txt");
$kr = $kr + 2;
@file_put_contents("kronoss/$nick.txt", "$kr");
$dari[0] = $dari[0] - 15;
$mm[88] = $mm[88] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}
}
echo"<b>Misijos</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$zin
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kame_house.php?id=mission\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "workout"){ 
$maximum = $pinigai/7000;
$fintness = @number_format($maximum, 0, ',', ' ');
$maximum2 = $pinigai/7000;
$fintness2 = @number_format($maximum2, 0, ',', ' ');
$your_many = @number_format($pinigai, 0, ',', ' ');
echo"<b>Roshi Trenoruotės</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/roshi workout.png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Aš esu <b>Master Roshi</b>, galiu padėti jums sutvirtėti, bet mano treniruočių pamokos kainuoja.

</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
1 jėgos = 7 000 pinigų. Jums išeiną pasitreniruoti jėgos <b>$fintness2</b> kartų.<br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Kiek kartų treniruositi jėgą? 
<form action='kame_house.php?id=treniruotes_1' method='post'>
<input name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"1000\" title=\"Kiek\"/><br/>
<input type='submit' value='Treniruotis'/><postfield name=\"kiek\" value=\"$(kiek)\"/></form>

</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
1 gynybos = 7 000 pinigų. Jums išeiną pasitreniruoti gynybos <b>$fintness</b> kartų.<br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Kiek kartų treniruositi gynybą?<br/>
<form action='kame_house.php?id=treniruotes_2' method='post'>
<input name=\"kiek2\" type=\"text\" format=\"*N\" maxlength=\"1000\" title=\"Kiek2\"/><br/>
<input type='submit' value='Treniruotis'/><postfield name=\"kiek2\" value=\"$(kiek2)\"/>
</form></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kame_house.php?id=\">Į Kame House</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "treniruotes_1") {
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 

$g_kaina = 7000*$kiek;  
$kiek_gaus1 = 1*$g_kaina; 
$kiek_gaus1 = $kiek_gaus1/7000;

if ($pinigai < $g_kaina) { $er = "Neužtenka pinigų!"; }
if ($g_kaina == "") { $er = "Paliktas tuščias laukelis."; }

if ($er == ""){
$er = "Pasitreniravote sėkmingai! įgavotė <b>$kiek_gaus1</b> jėgos.";
$pinigai = $pinigai - $g_kaina;
						$jega = $jega + $kiek_gaus1;
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||");
fclose($fp);
}
echo"<b>Roshi Trenoruotės</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$er<br/></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "treniruotes_2") {
$kiek2 = ereg_replace("[^0-9]","",$_POST['kiek2']); 

$g_kaina = 7000*$kiek2;  
$kiek_gaus3 = 1*$g_kaina;
$kiek_gaus3 = $kiek_gaus3/7000;

if ($pinigai < $g_kaina) { $er = "Neužtenka pinigų!"; }
if ($g_kaina == "") { $er = "Paliktas tuščias laukelis."; }

if ($er == ""){
$er = "Pasitreniravote sėkmingai! įgavotė <b>$kiek_gaus3</b> gynybos.";
$pinigai = $pinigai - $g_kaina;
		$gynyba = $gynyba + $kiek_gaus3;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||");
fclose($fp);
}
echo"<b>Roshi Trenoruotės</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$er<br/></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kame_house.php?id=\">Į Kame House</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

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
$dyyra = "zona/$nick-roshi.txt";

if ($id == "fight"){
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
echo"<b>Roshi misiją</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/roshi workout.png\" alt=\"*\"/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<u>Jums reikia nukauti Roshi draugus ir jį pati.</u><br/>
J&#363;s gausite <b>100 000 - 400 000 &#36;</b> pinig&#371;, bei yra galimyb&#279; laim&#279;ti kredit&#261;!";
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($m[0] == "-"){
echo"[&#8226;]  <a href=\"kame_house.php?id=kautis&amp;ka=Krillin\">Krillin</a> (500 kg)<br/>";
} else { echo"[&#8226;]  Krillin (500 kg)<br/>";
}echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($m[1] == "-"){
echo"[&#8226;]  <a href=\"kame_house.php?id=kautis&amp;ka=Launch\">Launch</a> (1 000 kg)<br/>";
} else { echo"[&#8226;]  Launch (1 000 kg)<br/>";
}echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($m[2] == "-"){
echo"[&#8226;]  <a href=\"kame_house.php?id=kautis&amp;ka=Yamcha\">Yamcha</a> (2 000 kg)<br/>";
} else { echo"[&#8226;]  Yamcha (2 000 kg)<br/>";
}echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($m[3] == "-"){
echo"[&#8226;]  <a href=\"kame_house.php?id=kautis&amp;ka=Tien\">Tien</a> (3 000 kg)<br/>";
} else { echo"[&#8226;]  Tien (3 000 kg)<br/>";
}echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($m[4] == "-"){
echo"[&#8226;]  <a href=\"kame_house.php?id=kautis&amp;ka=Master Roshi\">Master Roshi</a> (5 000 kg)<br/>";
} else { echo"[&#8226;]  Master Roshi (5 000 kg)<br/>";
}
}
else
{
echo"<b>Roshi misiją</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Roshi misiją galėsite vykdyti po <b>$lik</b> min.";
}
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kame_house.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}

if ($id == "kautis"){

$m = explode("|",file_get_contents("$dyyra"));

if ($ka == "Krillin") {
$lyyygis = 500;
$x = 10;
$h = "$m[0]"; }

if ($ka == "Launch") {
$lyyygis = 1000;
$x = 25;
$h = "$m[1]"; }

if ($ka == "Yamcha") {
$lyyygis = 2000;
$x = 50;
$h = "$m[2]"; }

if ($ka == "Tien") {
$lyyygis = 3000;
$x = 90;
$h = "$m[3]"; }

if ($ka == "Master Roshi") {
$lyyygis = 5000;
$x = 150;
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
Taip negalima, misiją turite vykdyti iš eilės!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kame_house.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
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
<a href=\"kame_house.php?id=\">Atgal</a><br/>
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

if ($ka == "Master Roshi"){ 
$gpin = rand(100000,500000);

echo"Įvykdėte Master Roshi misiją, už tai gaunate , <b>$gpin</b> pinigų ir 1 kreditą!</div><div class=\"meniu\" style=\"text-align: left;\">"; 

$gynyba = $gynyba+$gkr2o;
$jega = $jega+$gkro;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|0|$gyvybess|$sugebejimas|$pinigai|$wins|$los|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

$kr = @file_get_contents("kronoss/$nick.txt");
$kr = $kr + 1;

@file_put_contents("kronoss/$nick.txt", "$kr");

$pinigai = $pinigai+$gpin;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|0|$gyvybess|$sugebejimas|$pinigai|$wins|$los|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
}
$winai = "$wins"+"1";
$pinig = $pinigai+$lyyygis;

$xuj__g6 = @number_format($lyyygis, 0, ',', ' ');
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
<a href=\"kame_house.php?id=fight\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";

$fpa = fopen("$gameriai","w");
fwrite($fpa,"$lvl|$inf[1]|$inf[2]|$jega|$gyvs|$gyvybess|$sugebejimas|$pinig|$winai|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$pointsr|$gynyba|$tim|$rase|$suma|$left||$sarvu_prot|$sarvai||\n");
fclose($fpa);

if ($ka == "Krillin") {
$tjj = time()+1000*1000*1000*1000*1000*1000;
$nxa = fopen("$dyyra","w");
fwrite($nxa,"+|-|+|+|+|$tjj|");
fclose($nxa);
}
if ($ka == "Launch") {
$tjj = time()+1000*1000*1000*1000*1000*1000;
$nxa = fopen("$dyyra","w");
fwrite($nxa,"+|+|-|+|+|$tjj|");
fclose($nxa);
}
if ($ka == "Yamcha") {
$tjj = time()+1000*1000*1000*1000*1000*1000;
$nxa = fopen("$dyyra","w");
fwrite($nxa,"+|+|+|-|+|$tjj|");
fclose($nxa);
}
if ($ka == "Tien") {
$tjj = time()+1000*1000*1000*1000*1000*1000;
$nxa = fopen("$dyyra","w");
fwrite($nxa,"+|+|+|+|-|$tjj|");
fclose($nxa);
}
if ($ka == "Master Roshi") {
$tjj = time()+60*30;
$nxa = fopen("$dyyra","w");
fwrite($nxa,"+|+|+|+|+|$tjj|");
fclose($nxa);
}}}}



?>
</body></html>