<?php
$kur = "Drakonų Rutuliai";
include ("config.php");
include_once("icludekitainf/start.php");

if ($id == ""){
echo"<b>Dievo namai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/vietoviu/kami.png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Jūs atkeliavote pas žemes dievą Kami, jus galite treniruotis vykdyti mano misijas, bei galite rinkti drakono rutulius, surinkus 7 drakono rutulius galėsite iškviesti dievą drakoną, kuris išpildys jūsų viena norą.
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kami.php?id=time_room\">Laiko ir sielos kambarys</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kami.php?id=ieskoti_d\">Ieškoti drakono rutulių</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kami.php?id=kviesti\">Kviesti dievą drakoną</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kami.php?id=mission\">Misijos</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kami.php?id=garlic\">Garlic Jr. gauja </a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "mission"){echo"<b>Misijos</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/mr.popo.png' alt=\"\"/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Ponas Popas yrą žemes dievo padėjėjas, jis jums skirs 15 misijų už kurias gausite lygių ir kreditų.
</div><div class=\"meniu\" style=\"text-align: left;\">";

if($mm[89]=="0"){echo"[&#8226;] Tu vygdai: $mm[89] iš 15 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 77 soul stone.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kami.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[89]=="1"){echo"[&#8226;] Tu vygdai: $mm[89] iš 15 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 89 microschem.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kami.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[89]=="2"){echo"[&#8226;] Tu vygdai: $mm[89] iš 15 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 46 microschem.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kami.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[89]=="3"){echo"[&#8226;] Tu vygdai: $mm[89] iš 15 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 101 saiyan tail.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kami.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[89]=="4"){echo"[&#8226;] Tu vygdai: $mm[89] iš 15 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: Dragon armor.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kami.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[89]=="5"){echo"[&#8226;] Tu vygdai: $mm[89] iš 15 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: Dragon sword.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kami.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[89]=="6"){echo"[&#8226;] Tu vygdai: $mm[89] iš 15 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 78 Magic ball.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kami.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[89]=="7"){echo"[&#8226;] Tu vygdai: $mm[89] iš 15 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 99 Yamma fruit.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kami.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[89]=="8"){echo"[&#8226;] Tu vygdai: $mm[89] iš 15 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 20 stebuklingų pupų.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kami.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[89]=="9"){echo"[&#8226;] Tu vygdai: $mm[89] iš 15 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 1 kreditą.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"kami.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[89]=="10"){echo"[&#8226;] Tu vygdai: $mm[89] iš 15 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 44 Yamma fruit.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"kami.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[89]=="11"){echo"[&#8226;] Tu vygdai: $mm[89] iš 15 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 3 000 000 pingų.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"kami.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[89]=="12"){echo"[&#8226;] Tu vygdai: $mm[89] iš 15 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 5 000 000 pingų.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"kami.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[89]=="13"){echo"[&#8226;] Tu vygdai: $mm[89] iš 15 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 1 000 jūsų jėgos.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"kami.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[89]=="14"){echo"[&#8226;] Tu vygdai: $mm[89] iš 15 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 3 000 jūsų gynybos.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"kami.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[89]=="15"){echo"[&#8226;] Tu vygdai: $mm[89] iš 15 misiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Reikia: 100 jūsų gyvybių.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"kami.php?id=next\"><b>Vygdyti misiją</b></a><br/>";}

if($mm[89]=="16"){echo"<b> [&#8226;]  Jūs perėjote visas misijas.</b><br/>";}

echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kami.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "next"){
include("icludekitainf/mm.php");
if ($mm[89][$ka-1] == "+"){ $zin = "<b>Si misija jau ivykdyta!</b>"; }
if ($zin == ""){ 
include("icludekitainf/nuskait.php"); 

if($mm[89]=="0"){ $zin = "Sekmingai ivygdita"; 
include("icludekitainf/mm.php");
}

if($mm[89]=="15"){ 
if ($gyvybess < 100){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 10 kreditų, 3 000 jėgos, 10 000 gynybos ir 200 gyvybių.<br/>";
$kr = @file_get_contents("kronoss/$nick.txt");
$kr = $kr + 10;
@file_put_contents("kronoss/$nick.txt", "$kr");
$jega = 3000+$jega; 
$gynyba = 10000+$gynyba; 
$gyvybess = $gyvybess + 100; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[89] = $mm[89] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[89]=="14"){ 
if ($gynyba < 3000){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 2 000 jėgos.<br/>";
$jega = 3000+$jega; 
$gynyba = $gynyba - 3000;  
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[89] = $mm[89] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[89]=="13"){ 
if ($jega < 1000){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 1 000 gynybos.<br/>";
$gynyba = 1000+$gynyba; 
$jega = $jega - 1000;  
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[89] = $mm[89] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[89]=="12"){ 
if ($pinigai < 5000000){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 3 kreditus.<br/>";
$kr = @file_get_contents("kronoss/$nick.txt");
$kr = $kr + 3;
@file_put_contents("kronoss/$nick.txt", "$kr");
$pinigai = $pinigai - 5000000;  
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[89] = $mm[89] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[89]=="11"){ 
if ($pinigai < 3000000){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 2 kreditus.<br/>";
$kr = @file_get_contents("kronoss/$nick.txt");
$kr = $kr + 2;
@file_put_contents("kronoss/$nick.txt", "$kr");
$pinigai = $pinigai - 3000000;  
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[89] = $mm[89] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[89]=="10"){ 
if ($dari[4] < 44){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 2 500 000 pinigų.<br/>";
$pinigai = 2500000+$pinigai;  
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[4] = $dari[4] - 44;
$mm[89] = $mm[89] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}
 
if($mm[89]=="9"){ 
if ($kronu < 1){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 3 500 jėgos ir 2 500 gynybos.<br/>";
$jega = 3500+$jega; 
$gynyba = 2500+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
		
$kr = @file_get_contents("kronoss/$nick.txt");
$kr = $kr -1;
@file_put_contents("kronoss/$nick.txt", "$kr");
$mm[89] = $mm[89] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[89]=="8"){ 
if ($dari[33] < 20){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 1 500 jėgos ir 5 500 gynybos.<br/>";
$jega = 1500+$jega; 
$gynyba = 5500+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[33] = $dari[33] - 20;
$mm[89] = $mm[89] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[89]=="7"){ 
if ($dari[4] < 99){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 5 kreditus.<br/>";
$kr = @file_get_contents("kronoss/$nick.txt");
$kr = $kr + 5;
@file_put_contents("kronoss/$nick.txt", "$kr");
$dari[4] = $dari[4] - 99;
$mm[89] = $mm[89] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[89]=="6"){ 
if ($dari[7] < 78){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 2 kreditus.<br/>";
$kr = @file_get_contents("kronoss/$nick.txt");
$kr = $kr + 2;
@file_put_contents("kronoss/$nick.txt", "$kr");
$dari[7] = $dari[7] - 78;
$mm[89] = $mm[89] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[89]=="5"){ 
if ($dari[31] < 1){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 4 000 000 pinigų.<br/>";
$pinigai = 4000000+$pinigai;  
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[31] = $dari[31] - 1;
$mm[89] = $mm[89] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[89]=="4"){ 
if ($dari[16] < 1){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 2 000 000 pinigų.<br/>";
$pinigai = 2000000+$pinigai;  
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[16] = $dari[16] - 1;
$mm[89] = $mm[89] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[89]=="3"){ 
if ($dari[1] < 101){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 5 000 000 pinigų.<br/>";
$pinigai = 5000000+$pinigai;  
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[1] = $dari[1] - 101;
$mm[89] = $mm[89] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[89]=="2"){ 
if ($dari[5] < 46){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 800 jėgos ir 3 000 gynybos.<br/>";
$jega = 800+$jega; 
$gynyba = 3000+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[5] = $dari[5] - 46;
$mm[89] = $mm[89] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[89]=="1"){ 
if ($dari[5] < 89){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 500 jėgos ir 1 500 gynybos.<br/>";
$jega = 500+$jega; 
$gynyba = 1500+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[5] = $dari[5] - 89;
$mm[89] = $mm[89] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[89]=="0"){ 
if ($dari[0] < 77){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misija įvygdyta, gavai 3 kreditus.<br/>";
$kr = @file_get_contents("kronoss/$nick.txt");
$kr = $kr + 3;
@file_put_contents("kronoss/$nick.txt", "$kr");
$dari[0] = $dari[0] - 77;
$mm[89] = $mm[89] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}
}
echo"<b>Misijos</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$zin
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kami.php?id=mission\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "time_room"){ 
$laikas = date("H");
if($laikas != "17")
{
echo"<b>Laiko ir sielos kambarys</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Šiuo metu laiko ir sielos kambarys uždarytas. Jis atsidaro kiekvieną dieną nuo 17h iki 18h.
</div><div class=\"line\"></div><div class=\"meniu\"style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kami.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo"<b>Laiko ir sielos kambarys</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
   $mm = @explode("|",@file_get_contents("kitokiainf/$nick.txt"));
    if ($bad == "")
    {
		$gaung = $gynyba * 0.02;
	$gaunj = $jega * 0.01;
			$gynyba = $gynyba +$gaung;
	$jega = $jega +$gaunj;
	$gaung = @number_format($gaung, 0, ',', ' ');
	$gaunj = @number_format($gaunj, 0, ',', ' ');
        $bad = "Sekmingai pradetos treiruotes, tai truks 1 valandą, įgausite $gaung gynybos ir $gaunj jėgos.";
 $mm[38] = time()+60*60;
include("icludekitainf/mm.php");

        $prisij = time();
        $fp = fopen("$gameriai", "w");
        fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        fclose($fp);
}
echo"<b>Laiko ir sielos kambarys</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
$bad</div><div class=\"line\"></div><div class=\"meniu\"style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"kami.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "ieskoti_d"){
if ($lygis < "100")
{
echo"<b>Drakonų Rutuliai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Galėsite patekti tik nuo 100 lygio!</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>
</card></wml>";exit;}
$liko_minb3 = round(($mm[36]-time())/60,1);
if ($mm[36]- time() > 0){ 
echo"Drakono rutulių jieškoti galima kas 1 valandą, jums liko laukti $liko_minb3 min<br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($dari[19] < 1){ echo "Jūs neturite radaro. Jį isigyti galite kapsuliu korporacijoje.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo"<b>Ieškoti drakono rutulių</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"Kas 1 valandą galima jieškoti drakono rutulų, tikimibe kad rasite yra 50%</div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"kami.php?id=ieskoti_d2\">Ieškoti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}}

if ($id == "ieskoti_d2"){
if ($lygis < "100")
{
echo"<b>Drakonų Rutuliai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Galėsite patekti tik nuo 100 lygio!</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>
</card></wml>";exit;}
$liko_minb3 = round(($mm[36]-time())/60,1);
if ($mm[36]- time() > 0){ 
echo"Drakono rutulių jieškoti galima kas 1 valandą, jums liko laukti $liko_minb3 min<br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($dari[19] < 1){ echo "Jūs neturite radaro. Jį isigyti galite kapsuliu korporacijoje.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if($klaida == "") {

$rew=rand(0,10);

if(($rew==1) or ($rew==10)) {
$klaida="Sveikiname, jūs radote drakono rutulį.";
$dari[20] = $dari[20] + "1";
include("icludekitainf/iras2.php");
$mm[36] = time() + 60*60;
include("icludekitainf/mm.php");
}
else {
$klaida="Jums nepavyko rasti drakono rutulio.";
$mm[36] = time() + 60*60;
include("icludekitainf/mm.php");
}}

echo"</div><div class=\"meniu\" style=\"text-align: left;\">
$klaida<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}}

if ($id == "kviesti"){
if ($lygis < "100")
{
echo"<b>Drakonų Rutuliai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Galėsite patekti tik nuo 100 lygio!</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>
</card></wml>";exit;}
if ($dari[20] < 7){ echo "Jūs neturite 7 drakono rutulius.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo"<b>Dievas drakonas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"<img src='imgs/dievasdrakonas.png' ALT='*'><br/>Dievas drakonas iškviestas, pasirinkite norą.</div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"kami.php?id=d102\">100 000 jegos</a><br/>
(&#187;) <a href=\"kami.php?id=g102\">100 000 gynybos</a><br/>
(&#187;) <a href=\"kami.php?id=gy102\">100 000 gyvybiu</a><br/>
(&#187;) <a href=\"kami.php?id=pinigs\">1 000 000 000 pinigų</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"kami.php?id=d10\">5% jegos</a><br/>
(&#187;) <a href=\"kami.php?id=g10\">5% gynybos</a><br/>
(&#187;) <a href=\"kami.php?id=gy10\">5% gyvybiu</a><br/>
(&#187;) <a href=\"kami.php?nick=$nick&amp;pass=$pass&amp;id=nor5\">Juodajį drakono rutulį</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "nor5"){ 
if ($dari[20] < 7){ echo "Jūs neturite 7 drakono rutuliu</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}else{
echo "Noras išpildytas.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
$dari[34] = $dari[34] + 1;
$dari[20] = $dari[20] - 7;
include("icludekitainf/iras2.php");
}}

if ($id == "d102"){ 
if ($lygis < "100")
{
echo"<b>Drakonų Rutuliai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Galėsite patekti tik nuo 100 lygio!</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>
</card></wml>";exit;}
if ($dari[20] < 7){ echo "Jūs neturite 7 drakono rutuliu</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Noras išpildytas.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$jega = $jega+100000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[20] = $dari[20] - 7;
include("icludekitainf/iras2.php");
}}

if ($id == "g102"){ 
if ($lygis < "100")
{
echo"<b>Drakonų Rutuliai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Galėsite patekti tik nuo 100 lygio!</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>
</card></wml>";exit;}
if ($dari[20] < 7){ echo "Jūs neturite 7 drakono rutuliu</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Noras išpildytas.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$gynyba = $gynyba +1000000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[20] = $dari[20] - 7;
include("icludekitainf/iras2.php");
}}

if ($id == "gy102"){ 
if ($lygis < "100")
{
echo"<b>Drakonų Rutuliai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Galėsite patekti tik nuo 100 lygio!</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>
</card></wml>";exit;}
if ($dari[20] < 7){ echo "Jūs neturite 7 drakono rutuliu</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Noras išpildytas.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$gyvybess = $gyvybess +100000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[20] = $dari[20] - 7;
include("icludekitainf/iras2.php");
}}


if ($id == "d10"){ 
if ($lygis < "100")
{
echo"<b>Drakonų Rutuliai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Galėsite patekti tik nuo 100 lygio!</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>
</card></wml>";exit;}
if ($dari[20] < 7){ echo "Jūs neturite 7 drakono rutuliu</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Noras išpildytas.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$jega = $jega * 1.03;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[20] = $dari[20] - 7;
include("icludekitainf/iras2.php");
}}

if ($id == "g10"){ 
if ($lygis < "100")
{
echo"<b>Drakonų Rutuliai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Galėsite patekti tik nuo 100 lygio!</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>
</card></wml>";exit;}
if ($dari[20] < 7){ echo "Jūs neturite 7 drakono rutuliu</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Noras išpildytas.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$gynyba = $gynyba * 1.03;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[20] = $dari[20] - 7;
include("icludekitainf/iras2.php");
}}

if ($id == "gy10"){ 
if ($lygis < "100")
{
echo"<b>Drakonų Rutuliai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Galėsite patekti tik nuo 100 lygio!</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>
</card></wml>";exit;}
if ($dari[20] < 7){ echo "Jūs neturite 7 drakono rutuliu</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Noras išpildytas.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$gyvybess = $gyvybess * 1.03;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[20] = $dari[20] - 7;
include("icludekitainf/iras2.php");
}}

if ($id == "pinigs"){ 
if ($lygis < "100")
{
echo"<b>Drakonų Rutuliai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Galėsite patekti tik nuo 100 lygio!</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>
</card></wml>";exit;}
if ($dari[20] < 7){ echo "Jūs neturite 7 drakono rutuliu</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Noras išpildytas.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$pinigai = $pinigai + 1000000000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[20] = $dari[20] - 7;
include("icludekitainf/iras2.php");
}}

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
$dyyra = "zona/$nick-garlic.txt";

if ($id == "garlic"){
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
echo"<b>Garlic Jr.</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/Garlic Jr.jpg\" alt=\"*\"/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<u>Garlic Jr. išsilaisvino iš mirties zonos ir puola dievo šventyklą nukaukite jo sėbrus ir jį pati</u>.<br/> Įvykdęs misiją gausi <b>1 000</b> jėgos ir <b>3 000</b> gynybos.";
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($m[0] == "-"){
echo"$ico <a href=\"kami.php?id=kautis&amp;ka=Spice\">Spice</a> (2 000 kg)<br/>";
} else { echo"$ico Spice (2 000 kg)<br/>";
}echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($m[1] == "-"){
echo"$ico <a href=\"kami.php?id=kautis&amp;ka=Vinegar\">Vinegar</a> (5 000 kg)<br/>";
} else { echo"$ico Vinegar (5 000 kg)<br/>";
}echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($m[2] == "-"){
echo"$ico <a href=\"kami.php?id=kautis&amp;ka=Mustard\">Mustard</a> (7 000 kg)<br/>";
} else { echo"$ico Mustard (7 000 kg)<br/>";
}echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($m[3] == "-"){
echo"$ico <a href=\"kami.php?id=kautis&amp;ka=Salt\">Salt</a> (10 000 kg)<br/>";
} else { echo"$ico Salt (10 000 kg)<br/>";
}echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($m[4] == "-"){
echo"$ico <a href=\"kami.php?id=kautis&amp;ka=Garlic Jr.\">Garlic Jr.</a> (15 000 kg)<br/>";
} else { echo"$ico Garlic Jr. (15 000 kg)<br/>";
}
}
else
{
echo"<b>Garlic Jr.</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Garlic Jr. misiją galėsite vykdyti po <b>$lik</b> min.";
}
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}

if ($id == "kautis"){

$m = explode("|",file_get_contents("$dyyra"));

if ($ka == "Spice") {
$lyyygis = 2000;
$x = 100;
$h = "$m[0]"; }

if ($ka == "Vinegar") {
$lyyygis = 5000;
$x = 250;
$h = "$m[1]"; }

if ($ka == "Mustard") {

$lyyygis = 7000;
$x = 500;
$h = "$m[2]"; }

if ($ka == "Salt") {
$lyyygis = 10000;
$x = 900;
$h = "$m[3]"; }

if ($ka == "Garlic Jr.") {
$lyyygis = 15000;
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
<a href=\"kami.php?id=garlic\">Atgal</a><br/>
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
<a href=\"kami.php?id=garlic\">Atgal</a><br/>
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

if ($ka == "Garlic Jr."){ 

$gkro = rand(1000,1000);
$gkr2o = rand(3000,3000);


echo"Įvykdėte Garlic Jr. misiją, už tai gaunate <b>$gkro</b> jėgos ir <b>$gkr2o</b> gynybos!</div><div class=\"meniu\" style=\"text-align: left;\">"; 

$gynyba = $gynyba+$gkr2o;
$jega = $jega+$gkro;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$los|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
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
<a href=\"kami.php?id=garlic\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">&#302; prad&#382;i&#261;</a>
</div><div class=\"foot\">$bottom</div></div>";

$fpa = fopen("$gameriai","w");
fwrite($fpa,"$lvl|$inf[1]|$inf[2]|$jega|$gyvs|$gyvybess|$sugebejimas|$pinig|$winai|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$pointsr|$gynyba|$tim|$rase|$suma|$left||$sarvu_prot|$sarvai||\n");
fclose($fpa);

if ($ka == "Spice") {
$tjj = time()+1000*1000*1000*1000*1000*1000;
$nxa = fopen("$dyyra","w");
fwrite($nxa,"+|-|+|+|+|$tjj|");
fclose($nxa);
}
if ($ka == "Vinegar") {
$tjj = time()+1000*1000*1000*1000*1000*1000;
$nxa = fopen("$dyyra","w");
fwrite($nxa,"+|+|-|+|+|$tjj|");
fclose($nxa);
}
if ($ka == "Mustard") {
$tjj = time()+1000*1000*1000*1000*1000*1000;
$nxa = fopen("$dyyra","w");
fwrite($nxa,"+|+|+|-|+|$tjj|");
fclose($nxa);
}
if ($ka == "Salt") {
$tjj = time()+1000*1000*1000*1000*1000*1000;
$nxa = fopen("$dyyra","w");
fwrite($nxa,"+|+|+|+|-|$tjj|");
fclose($nxa);
}
if ($ka == "Garlic Jr.") {
$tjj = time()+60*80;
$nxa = fopen("$dyyra","w");
fwrite($nxa,"+|+|+|+|+|$tjj|");
fclose($nxa);
}}}}


print '</body></html>';

?>