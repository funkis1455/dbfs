<?php
$kur = "Rinkimo užduotys";
include ("config.php");
include_once("icludekitainf/start.php");

if ($id == ""){echo"<b>Rinkimo užduotys</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\"><b>Jūs vykdote $mm[61] rinkimo užduotį, iš viso yrą 69<br/></b></div><div class=\"meniu\" style=\"text-align: center;\">
Įvykdžius visas rinkimo užduotys gausite savo visų statusų 15% ir 200 kreditų.<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
if($mm[61]=="0"){echo"Atneškite 12 Soul Stone gausite 100 000 pinigų";}
if($mm[61]=="1"){echo"Atneškite 23 Soul Stone gausite 120 jegos";}
if($mm[61]=="2"){echo"Atneškite 45 Soul Stone gausite 280 gynybos";}
if($mm[61]=="3"){echo"Atneškite 76 Soul Stone gausite 500 000 pinigų";}
if($mm[61]=="4"){echo"Atneškite 123 Soul Stone gausite 1 000 000 pinigų, 240 jegos ir 330 gynybos";}

if($mm[61]=="5"){echo"Atneškite 12 Saiyan tail gausite 200 000 pinigų";}
if($mm[61]=="6"){echo"Atneškite 23 Saiyan tail gausite 180 jegos";}
if($mm[61]=="7"){echo"Atneškite 45 Saiyan tail gausite 320 gynybos";}
if($mm[61]=="8"){echo"Atneškite 76 Saiyan tail gausite 700 000 pinigų";}
if($mm[61]=="9"){echo"Atneškite 123 Saiyan tail gausite 1 500 000 pinigų, 290 jegos ir 380 gynybos";}
if($mm[61]=="10"){echo"Atneškite 12 Ginyu material gausite 300 000 pinigų";}
if($mm[61]=="11"){echo"Atneškite 23 Ginyu material gausite 240 jegos";}
if($mm[61]=="12"){echo"Atneškite 45 Ginyu material gausite 360 gynybos";}
if($mm[61]=="13"){echo"Atneškite 76 Ginyu material gausite 900 000 pinigų";}
if($mm[61]=="14"){echo"Atneškite 123 Ginyu material gausite 2 000 000 pinigų, 330 jegos ir 420 gynybos";}
if($mm[61]=="15"){echo"Atneškite 12 Ginyu crystal gausite 500 000 pinigų";}
if($mm[61]=="16"){echo"Atneškite 23 Ginyu crystal gausite 270 jegos";}
if($mm[61]=="17"){echo"Atneškite 45 Ginyu crystal gausite 410 gynybos";}
if($mm[61]=="18"){echo"Atneškite 76 Ginyu crystal gausite 2 500 000 pinigų";}
if($mm[61]=="19"){echo"Atneškite 123 Ginyu crystal gausite 3 000 000 pinigų, 360 jegos ir 550 gynybos";}
if($mm[61]=="20"){echo"Atneškite 12 Yamma fruit gausite 700 000 pinigų";}
if($mm[61]=="21"){echo"Atneškite 23 Yamma fruit gausite 290 jegos";}
if($mm[61]=="22"){echo"Atneškite 45 Yamma fruit gausite 470 gynybos";}
if($mm[61]=="23"){echo"Atneškite 76 Yamma fruit gausite 3 000 000 pinigų";}
if($mm[61]=="24"){echo"Atneškite 123 Yamma fruit gausite 3 000 000 pinigų, 310 jegos ir 770 gynybos";}
if($mm[61]=="25"){echo"Atneškite 12 Microschem gausite 1 000 000 pinigų";}
if($mm[61]=="26"){echo"Atneškite 23 Microschem gausite 550 jegos";}
if($mm[61]=="27"){echo"Atneškite 45 Microschem gausite 490 gynybos";}
if($mm[61]=="28"){echo"Atneškite 76 Microschem gausite 5 000 000 pinigų";}
if($mm[61]=="29"){echo"Atneškite 123 Microschem gausite 5 000 000 pinigų, 350 jegos ir 1000 gynybos";}
if($mm[61]=="30"){echo"Atneškite 12 Majin scroll gausite 2 000 000 pinigų";}
if($mm[61]=="31"){echo"Atneškite 23 Majin scroll gausite 1000 jegos";}
if($mm[61]=="32"){echo"Atneškite 45 Majin scroll gausite 1300 gynybos";}
if($mm[61]=="33"){echo"Atneškite 76 Majin scroll gausite 6 000 000 pinigų";}
if($mm[61]=="34"){echo"Atneškite 123 Majin scroll gausite 5 000 000 pinigų, 900 jegos ir 1800 gynybos";}
if($mm[61]=="35"){echo"Atneškite 43 Magic scroll gausite 3 000 000 pinigų";}
if($mm[61]=="36"){echo"Atneškite 75 Magic scroll gausite 1300 jegos";}
if($mm[61]=="37"){echo"Atneškite 98 Magic scroll gausite 1600 gynybos";}
if($mm[61]=="38"){echo"Atneškite 132 Magic scroll gausite 8 000 000 pinigų";}
if($mm[61]=="39"){echo"Atneškite 221 Magic scroll gausite 8 000 000 pinigų, 1400 jegos ir 1800 gynybos";}
if($mm[61]=="40"){echo"Atneškite 43 Fusion scroll gausite 4 000 000 pinigų";}
if($mm[61]=="41"){echo"Atneškite 75 Fusion scroll gausite 2200 jegos";}
if($mm[61]=="42"){echo"Atneškite 98 Fusion scroll gausite 3400 gynybos";}
if($mm[61]=="43"){echo"Atneškite 132 Fusion scroll gausite 9 000 000 pinigų";}
if($mm[61]=="44"){echo"Atneškite 221 Fusion scroll gausite 9 000 000 pinigų, 1800 jegos ir 3100 gynybos";}
if($mm[61]=="45"){echo"Atneškite 213 Soul stone gausite 5 000 000 pinigų";}
if($mm[61]=="46"){echo"Atneškite 321 Saiyan tail gausite  8 000 000 pinigų";}
if($mm[61]=="47"){echo"Atneškite 267 Ginyu material gausite  10 000 000 pinigų";}
if($mm[61]=="48"){echo"Atneškite 299 Ginyu crystal gausite 14 000 000 pinigų";}
if($mm[61]=="49"){echo"Atneškite 156 Yamma fruit gausite 11 000 000 pinigų";}
if($mm[61]=="50"){echo"Atneškite 301 Microschem gausite 19 000 000 pinigų";}
if($mm[61]=="51"){echo"Atneškite 155 Majin scroll gausite 9 000 000 pinigų";}
if($mm[61]=="52"){echo"Atneškite 277 Magic ball gausite 12 000 000 pinigų";}
if($mm[61]=="53"){echo"Atneškite 333 Fusion fail gausite 21 000 000 pinigų";}
if($mm[61]=="54"){echo"Atneškite 1 Drakono rutulį gausite 1450 jegos";}
if($mm[61]=="55"){echo"Atneškite 213 Soul stone gausite 3500 gynybos";}
if($mm[61]=="56"){echo"Atneškite 321 Saiyan tail gausite  4300 gynybos";}
if($mm[61]=="57"){echo"Atneškite 267 Ginyu material gausite  3800 gynybos";}
if($mm[61]=="58"){echo"Atneškite 299 Ginyu crystal gausite 5200 gynybos";}
if($mm[61]=="59"){echo"Atneškite 156 Yamma fruit gausite 2600 gynybos";}
if($mm[61]=="60"){echo"Atneškite 301 Microschem gausite 6600 gynybos";}
if($mm[61]=="61"){echo"Atneškite 155 Majin scroll gausite 1900 gynybos";}
if($mm[61]=="62"){echo"Atneškite 277 Magic ball gausite 4600 gynybos";}
if($mm[61]=="63"){echo"Atneškite 333 Fusion fail gausite 7700 gynybos";}
if($mm[61]=="64"){echo"Atneškite 7 Drakono rutulius gausite 11 000 000 pinigų, 3000 jegos ir 12000 gynybos.";}
if($mm[61]=="65"){echo"Atneškite 5 kreditus gausite 20 000 000 pinigų, 10000 jegos ir 30000 gynybos.";}
if($mm[61]=="66"){echo"Atneškite 211 Fusion fail ir 96 Majin scroll gausite 10 kreditų.";}
if($mm[61]=="67"){echo"Atneškite 111 Soul stone ir 212 Ginyu crystal gausite 19 840 000 pinigų.";}
if($mm[61]=="68"){echo"Jūs perėjote rinkimo užduotis ir gaunate visų savo lygių 25%, bei 30 kreditų.";}
if($mm[61]=="69"){echo"Jūs jau perėjas visas rinkimo  užduotis.";}
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"rinkimo_uzduotis.php?id=next\">Vykdyti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=misijos\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "next"){$mm = @explode("|",@file_get_contents("kitokiainf/$nick.txt"));
if ($mm[61][$ka-1] == "+"){ $zin = "<b>Si misija jau ivykdyta!</b>"; }
if ($zin == ""){ 
include("icludekitainf/mm.php");

if($mm[61]=="69"){$zin = "Jūs jau perėjas visas rinkimo  užduotis.";  }

if($mm[61]=="68"){
    if (!file_exists("kronoss/$nick.txt")){ $kronu = 0;} else{$kronu = @file_get_contents("kronoss/$nick.txt");}
$zin = "Rinkimo užduotis įvykdita, jūs gavote 25% jegos, gynybos, gyvybių, exp ir 30 kreditų.";
		$jega = $jega * 1.15;
		$gynyba = $gynyba * 1.15;
				$gyvybess = $gyvybess * 1.15;
					$exp = $exp * 1.1;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
        $fp = @fopen("kronoss/$nick.txt", "w");
        @fwrite($fp, $kronu +200);
        @fclose($fp);
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}

if($mm[61]=="67"){
if ($dari[0] < 111){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
if ($dari[3] < 212){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 19 840 000 pinigų.";
$pinigai =19840000+$pinigai;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
			$dari[0] = $dari[0] - 111;
		$dari[3] = $dari[3] - 212;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}} } 

if($mm[61]=="66"){
if ($dari[6] < 95){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
if ($dari[8] < 211){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 10 kreditų.";
        $fp = @fopen("kronoss/$nick.txt", "w");
        @fwrite($fp, $kronu + 10);
        @fclose($fp);
			$dari[6] = $dari[6] - 96;
		$dari[8] = $dari[8] - 211;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}} } 
if($mm[61]=="65"){
    if (!file_exists("kronoss/$nick.txt")){ $kronu = 0;} else{$kronu = @file_get_contents("kronoss/$nick.txt");}
if ($kronu < 5){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 20 000 000 pinigų, 10000 jegos ir 30000 gynybos";
$jega =10000+$jega; 
$gynyba =30000+$gynyba;
$pinigai =20000000+$pinigai;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
        $fp = @fopen("kronoss/$nick.txt", "w");
        @fwrite($fp, $kronu - 5);
        @fclose($fp);
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}} 

if($mm[61]=="64"){
if ($dari[20] < 7){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 11 000 000 pinigų, 3000 jegos ir 12000 gynybos";
$jega =3000+$jega; 
$gynyba =12000+$gynyba;
$pinigai =11000000+$pinigai;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[20] = $dari[20] - 1;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}} 

if($mm[61]=="63"){
if ($dari[8] < 333){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 7700 gynybos.";
$gynyba =7700+$gynyba;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[8] = $dari[8] - 333;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}} 

if($mm[61]=="62"){
if ($dari[7] < 277){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 4600 gynybos.";
$gynyba =4600+$gynyba;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[7] = $dari[7] - 277;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}} 

if($mm[61]=="61"){
if ($dari[6] < 155){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 1900 gynybos.";
$gynyba =1900+$gynyba;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[6] = $dari[6] - 155;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}} 

if($mm[61]=="60"){
if ($dari[5] < 301){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 6600 gynybos.";
$gynyba =6600+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[5] = $dari[5] - 301;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}} 

if($mm[61]=="59"){
if ($dari[4] < 156){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 2600 gynybos.";
$gynyba =2600+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[4] = $dari[4] - 156;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}} 

if($mm[61]=="58"){
if ($dari[3] < 299){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 5200 gynybos.";
$gynyba =5200+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[3] = $dari[3] - 299;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}

if($mm[61]=="57"){
if ($dari[2] < 267){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 3800 gynybos.";
$gynyba =3800+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[2] = $dari[2] - 267;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}

if($mm[61]=="56"){
if ($dari[1] < 321){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 4 300 gynybos.";
$gynyba = 4300+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[1] = $dari[1] - 321;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}

if($mm[61]=="55"){
if ($dari[0] < 221){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 3 500 gynybos.";
$gynyba = 3500+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[0] = $dari[0] - 213;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}

if($mm[61]=="54"){
if ($dari[20] < 1){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 1450 jegos.";
$jega =1450+$jega; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[20] = $dari[20] - 1;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}} 

if($mm[61]=="53"){
if ($dari[8] < 333){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 21 000 000 pinigų.";
$pinigai =21000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[8] = $dari[8] - 333;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}} 

if($mm[61]=="52"){
if ($dari[7] < 277){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 12 000 000 pinigų.";
$pinigai =12000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[7] = $dari[7] - 277;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}} 

if($mm[61]=="51"){
if ($dari[6] < 155){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 9 000 000 pinigų.";
$pinigai =9000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[6] = $dari[6] - 155;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}} 

if($mm[61]=="50"){
if ($dari[5] < 301){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 19 000 000 pinigų.";
$pinigai =19000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[5] = $dari[5] - 301;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}} 

if($mm[61]=="49"){
if ($dari[4] < 156){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 11 000 000 pinigų.";
$pinigai =11000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[4] = $dari[4] - 156;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}} 

if($mm[61]=="48"){
if ($dari[3] < 299){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 14 000 000 pinigų.";
$pinigai =14000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[3] = $dari[3] - 299;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}

if($mm[61]=="47"){
if ($dari[2] < 267){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 10 000 000 pinigų.";
$pinigai =10000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[2] = $dari[2] - 267;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}

if($mm[61]=="46"){
if ($dari[1] < 321){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 8 000 000 pinigų.";
$pinigai = 8000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[1] = $dari[1] - 321;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}

if($mm[61]=="45"){
if ($dari[0] < 213){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 5 000 000 pinigų.";
$pinigai = 5000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[0] = $dari[0] - 213;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}

if($mm[61]=="44"){
if ($dari[8] < 221){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 9 000 000 pinigų, 1800 jegos ir 3100 gynybos";
$pinigai = 9000000+$pinigai; 
$jega = 1800+$jega; 
$gynyba = 3100+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[8] = $dari[8] - 221;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}


if($mm[61]=="42"){
if ($dari[8] < 98){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 2200 jegos.";
$gynyba = 3400+$gynyba; 

        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[8] = $dari[8] - 98;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}

if($mm[61]=="43"){
if ($dari[8] < 132){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 9 000 000 pinigų..";
$pinigai = 9000000+$pinigai; 

        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[8] = $dari[8] - 132;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}

if($mm[61]=="41"){
if ($dari[8] < 75){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 2200 jegos.";
$jega = 2200+$jega; 

        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[8] = $dari[8] - 75;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}

if($mm[61]=="40"){
if ($dari[8] < 43){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 4 000 000 pinigų.";

$pinigai = 4000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[8] = $dari[8] - 43;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}

if($mm[61]=="39"){
if ($dari[7] < 221){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 8 000 000 pinigų, 1400 jegos ir 1800 gynybos";
$jega = 1400+$jega; 
$gynyba = 1800+$gynyba; 
$pinigai = 8000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[7] = $dari[7] - 221;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}

if($mm[61]=="38"){
if ($dari[7] < 131){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 8 000 000 pinigų.";
$pinigai = 8000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[7] = $dari[7] - 131;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}

if($mm[61]=="37"){
if ($dari[7] < 98){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 1600 gynybos.";

$gynyba = 1600+$gynyba; 

        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[7] = $dari[7] - 98;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}

if($mm[61]=="36"){
if ($dari[7] < 75){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 1300 jegos.";
$jega = 1300+$jega; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[7] = $dari[7] - 75;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}

if($mm[61]=="35"){
if ($dari[7] < 43){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 3 000 000 pinigų.";
$pinigai = 3000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[6] = $dari[6] - 43;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}

if($mm[61]=="34"){
if ($dari[6] < 123){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 6 000 000 pinigų, 900 jegos ir 1800 gynybos.";
$jega = 900+$jega; 
$gynyba = 1800+$gynyba; 
$pinigai = 6000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[6] = $dari[6] - 123;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}

if($mm[61]=="33"){
if ($dari[6] < 76){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 6 000 000 pinigų.";
$pinigai = 6000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[6] = $dari[6] - 76;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");  ; 
}}

if($mm[61]=="32"){
if ($dari[6] < 45){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 1 300 gynybos.";
$gynyba = 1300+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[6] = $dari[6] - 45;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");  
}}

if($mm[61]=="31"){
if ($dari[6] < 23){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 1 000 jegos.";
$jega = 1000+$jega;  
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[6] = $dari[6] - 23;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");  
}}

if($mm[61]=="30"){
if ($dari[6] < 12){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 2 000 000 pinigų.";
$pinigai = 2000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[6] = $dari[6] - 12;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php"); 
}}



if($mm[61]=="29"){
if ($dari[5] < 123){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 5 000 000 pinigų, 350 jegos ir 1000 gynybos.";
$jega = 350+$jega; 
$gynyba = 1000+$gynyba; 
$pinigai = 5000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[5] = $dari[5] - 123;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}

if($mm[61]=="28"){
if ($dari[5] < 76){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 5 000 000 pinigų.";
$pinigai = 5000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[5] = $dari[5] - 76;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");  ; 
}}

if($mm[61]=="27"){
if ($dari[5] < 45){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 490 gynybos.";
$gynyba = 490+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[5] = $dari[5] - 45;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");  
}}

if($mm[61]=="26"){
if ($dari[5] < 23){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 550 jegos.";
$jega = 550+$jega;  
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[5] = $dari[5] - 23;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");  
}}

if($mm[61]=="25"){
if ($dari[5] < 12){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 1 000 000 pinigų.";
$pinigai = 1000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[5] = $dari[5] - 12;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php"); 
}}



if($mm[61]=="24"){
if ($dari[4] < 123){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 3 000 000 pinigų, 310 jegos ir 770 gynybos.";
$jega = 360+$jega; 
$gynyba = 770+$gynyba; 
$pinigai = 3000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[4] = $dari[4] - 123;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}

if($mm[61]=="23"){
if ($dari[4] < 76){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 3 000 000 pinigų.";
$pinigai = 3000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[4] = $dari[4] - 76;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");  ; 
}}

if($mm[61]=="22"){
if ($dari[4] < 45){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 470 gynybos.";
$gynyba = 470+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[4] = $dari[4] - 45;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");  
}}

if($mm[61]=="21"){
if ($dari[4] < 23){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 290 jegos.";
$jega = 290+$jega;  
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[4] = $dari[4] - 23;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");  
}}

if($mm[61]=="20"){
if ($dari[4] < 12){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 700 000 pinigų.";
$pinigai = 700000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[4] = $dari[4] - 12;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php"); 
}}


if($mm[61]=="19"){
if ($dari[3] < 123){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 3 000 000 pinigų, 360 jegos ir 550 gynybos.";
$jega = 360+$jega; 
$gynyba = 550+$gynyba; 
$pinigai = 3000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[3] = $dari[3] - 123;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}

if($mm[61]=="18"){
if ($dari[3] < 76){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 2 500 000 pinigų.";
$pinigai = 2500000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[3] = $dari[3] - 76;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");  ; 
}}

if($mm[61]=="17"){
if ($dari[3] < 45){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 410 gynybos.";
$gynyba = 410+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[3] = $dari[3] - 45;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");  
}}

if($mm[61]=="16"){
if ($dari[3] < 23){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 270 jegos.";
$jega = 270+$jega;  
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[3] = $dari[3] - 23;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");  
}}


if($mm[61]=="15"){
if ($dari[3] < 12){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 500 000 pinigų.";
$pinigai = 500000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[3] = $dari[3] - 12;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php"); 
}}

if($mm[61]=="14"){
if ($dari[2] < 123){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 2 000 000 pinigų, 330 jegos ir 420 gynybos.";
$jega = 330+$jega; 
$gynyba = 420+$gynyba; 
$pinigai = 2000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[2] = $dari[2] - 123;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");   
}}

if($mm[61]=="13"){
if ($dari[2] < 76){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 900 000 pinigų.";
$pinigai = 900000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[2] = $dari[2] - 76;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");  ; 
}}

if($mm[61]=="12"){
if ($dari[2] < 45){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 360 gynybos.";
$gynyba = 360+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[2] = $dari[2] - 45;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");  
}}

if($mm[61]=="11"){
if ($dari[2] < 23){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 240 jegos.";
$jega = 240+$jega;  
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[2] = $dari[2] - 23;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");  
}}

if($mm[61]=="10"){
if ($dari[2] < 12){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 300 000 pinigų.";
$pinigai = 300000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[2] = $dari[2] - 12;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php"); 
}}

if($mm[61]=="9"){
if ($dari[1] < 123){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 1 500 000 pinigų, 290 jegos ir 380 gynybos.";
$jega = 240+$jega; 
$gynyba = 330+$gynyba; 
$pinigai = 1500000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[1] = $dari[1] - 123;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");  
}}

if($mm[61]=="8"){
if ($dari[1] < 76){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 700 000 pinigų.";
$pinigai = 700000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[1] = $dari[1] - 76;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");  
}}

if($mm[61]=="7"){
if ($dari[1] < 45){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 320 gynybos.";
$gynyba = 320+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[1] = $dari[1] - 45;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php"); 
}}

if($mm[61]=="6"){
if ($dari[1] < 23){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 180 jegos.";
$jega = 180+$jega;  
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[1] = $dari[1] - 23;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php"); 
}}

if($mm[61]=="5"){
if ($dari[1] < 12){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 200 000 pinigų.";
$pinigai = 200000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[1] = $dari[1] - 12;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php"); 
}}

if($mm[61]=="4"){
if ($dari[0]  < 123){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 1 000 000 pinigų, 240 jegos ir 330 gynybos.";
$jega = 240+$jega; 
$gynyba = 330+$gynyba; 
$pinigai = 1000000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[0] = $dari[0] - 123;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php"); 
}}

if($mm[61]=="3"){
if ($dari[0] < 76){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 500 000 pinigų.";
$pinigai = 500000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[0] = $dari[0] - 76;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php"); 
}}

if($mm[61]=="2"){
if ($dari[0] < 45){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 280 gynybos.";
$gynyba = 280+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[0] = $dari[0] - 45;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php"); 
}}

if($mm[61]=="1"){
if ($dari[0] < 23){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 120 jegos.";
$jega = 120+$jega;  
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[0] = $dari[0] - 23;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php"); 
}}

if($mm[61]=="0"){
if ($dari[0] < 12){ echo "Jūs neturite visko ko reikia šitai užduočiai.";}else{
$zin = "Rinkimo užduotis įvykdita, jūs gavote 100 000 pinigų.";
$pinigai = 100000+$pinigai; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[0] = $dari[0] - 12;
$mm[61] = $mm[61] + 1;
include("icludekitainf/iras2.php");
include("icludekitainf/mm.php"); 
}}
}

echo"$zin";
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"rinkimo_uzduotis.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}

print'</card></wml>';
?>