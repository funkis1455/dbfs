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
$kur = "Gyvates kelias";
include ("config.php");
echo"<link href=\"css/$nustatymai[20].css\" rel=\"stylesheet\" type=\"text/css\"/>
</head>"; 
echo "<div class=\"in\"><div class=\"logo\"><img src=\"imgs/logo-$mm[110].png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center; border-top: 1px solid #000000;\">";

if ($id == ""){echo"<b>Gyvates kelias</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Jus dabar vykdote $mm[39] užduotį.</div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/Kaiosamanorte.png' alt=\"\"/>
</div><div class=\"meniu\" style=\"text-align: center;\">";

if($mm[39]=="0"){echo"Aš esu Kaiosamanorte, turiu keliata užduočių kurias tu galetum įvykditi, įvykdes mano visas užduotis gausi jegos, gynybos, gyvybių ir pinigų.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>(»)</b> <a href=\"gyvates_kelias.php?id=next\">Vykdyti sagą</a><br/>";}
if($mm[39]== "1"){echo"Atneškite man 70 soul stone, aš už tai duosiu 15,000 pinigų</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>(»)</b> <a href=\"gyvates_kelias.php?id=next\">Vykdyti sagą</a><br/>";}
if($mm[39]== "2"){echo"Pasiekite 100 kovine galia, gausite 10 kovines galios.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>(»)</b> <a href=\"gyvates_kelias.php?id=next\">Vykdyti sagą</a><br/>";}
if($mm[39]== "3"){echo"Atneškite man 150 sajan tail, aš už tai duosiu 25,000 pinigų</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>(»)</b> <a href=\"gyvates_kelias.php?id=next\">Vykdyti sagą</a><br/>";}
if($mm[39]== "4"){echo"Pasiek 25 lygį, aš už tai duosiu 50 xp.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>(»)</b> <a href=\"gyvates_kelias.php?id=next\">Vykdyti sagą</a><br/>";}
if($mm[39]== "5"){echo"Atneškite man 220 ginyu meterial, aš už tai duosiu 30,000 pinigų</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>(»)</b> <a href=\"gyvates_kelias.php?id=next\">Vykdyti sagą</a><br/>";}
if($mm[39]== "6"){echo"Atneškite man 240 ginyu crystal, aš už tai duosiu 35,000 pinigų</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>(»)</b> <a href=\"gyvates_kelias.php?id=next\">Vykdyti sagą</a><br/>";}
if($mm[39]== "7"){echo"Pasiek 40 lygį, aš už tai duosiu 80 xp.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>(»)</b> <a href=\"gyvates_kelias.php?id=next\">Vykdyti sagą</a><br/>";}
if($mm[39]== "8"){echo"Pasiek 50 lygį, aš už tai duosiu 120 xp.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>(»)</b> <a href=\"gyvates_kelias.php?id=next\">Vykdyti sagą</a><br/>";}
if($mm[39]== "9"){echo"Atneškite man 100 soul stone ir 100 sajan tail, aš už tai duosiu 50,000 pinigų</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>(»)</b> <a href=\"gyvates_kelias.php?id=next\">Vykdyti sagą</a><br/>";}
if($mm[39]== "10"){echo"Pasiekite 500 kovine galia, gausite 30 kovines galios.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>(»)</b> <a href=\"gyvates_kelias.php?id=next\">Vykdyti sagą</a><br/>";}
if($mm[39]== "11"){echo"Atneškite man 50 yamma fruit, aš už tai duosiu 20,000 pinigų</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>(»)</b> <a href=\"gyvates_kelias.php?id=next\">Vykdyti sagą</a><br/>";}
if($mm[39]== "12"){echo"Man reikia gyvybių atnešk gyvybiu eleksyrą, aš už tai duosiu 5,000 pinigų</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>(»)</b> <a href=\"gyvates_kelias.php?id=next\">Vykdyti sagą</a><br/>";}
if($mm[39]== "13"){echo"Pasiekite 1000 kovine galia, gausite 50 kovines galios.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>(»)</b> <a href=\"gyvates_kelias.php?id=next\">Vykdyti sagą</a><br/>";}
if($mm[39]== "14"){echo"Pasiekite 2000 kovine galia, gausite 70 kovines galios.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>(»)</b> <a href=\"gyvates_kelias.php?id=next\">Vykdyti sagą</a><br/>";}
if($mm[39]== "15"){echo"Aš noriu kad tu atsidarytum Kaioken aura, gausite 100 kovines galios.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>(»)</b> <a href=\"gyvates_kelias.php?id=next\">Vykdyti sagą</a><br/>";}
if($mm[39]== "16"){echo"Aš noriu susitvarkyti savo mašiną. Atneškite man 300 microschem, aš už tai duosiu 70,000 pinigų</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>(»)</b> <a href=\"gyvates_kelias.php?id=next\">Vykdyti sagą</a><br/>";}
if($mm[39]== "17"){echo"Man reikia pinigų atneškite 500 000 pinigų, gausite 150 kovines galios.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>(»)</b> <a href=\"gyvates_kelias.php?id=next\">Vykdyti sagą</a><br/>";}
if($mm[39]== "18"){echo"Jūs įvykdete visas mano užduotys už tai gaunate 1 000 jegos, 2 500 gynybos, 500 gyvybių ir 500 000 pinigų. Bei dabar turite galimybe treniruotis pas mane.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>(»)</b> <a href=\"gyvates_kelias.php?id=next\">Vykdyti sagą</a><br/>";}
if($mm[39]== "19"){echo"Jūs įvykdete visas mano užduotys, tad aš jums leidžiu pas mane treniruotis<br/>
Kaiosamanorte 1 treniruotė kainuoją 3 000 pingų. Įgausite +1 jėgos ir +2 gynybos.
</div><div class=\"meniu\" style=\"text-align: left;\">
Kiek kartų treniruosites?<br/>
<form action='gyvates_kelias.php?id=treniruotes' method='post'> 
<input name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"1000\" title=\"Kiek\"/><br/>
<input type='submit' value='Treniruotis'/><postfield name=\"kiek\" value=\"$(kiek)\"/>
</form>";}
if($mm[39]== "20"){echo"Jūs įvykdete visas mano užduotys, tad aš jums leidžiu pas mane treniruotis<br/>
Kaiosamanorte 1 treniruotė kainuoją 3 000 pingų. Įgausite +1 jėgos ir +2 gynybos.
</div><div class=\"meniu\" style=\"text-align: left;\">
Kiek kartų treniruosites?<br/>
<form action='gyvates_kelias.php?id=treniruotes' method='post'> 
<input name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"1000\" title=\"Kiek\"/><br/>
<input type='submit' value='Treniruotis'/><postfield name=\"kiek\" value=\"$(kiek)\"/>
</form>";}
if($mm[39]== "21"){echo"Jūs įvykdete visas mano užduotys, tad aš jums leidžiu pas mane treniruotis<br/>
Kaiosamanorte 1 treniruotė kainuoją 3 000 pingų. Įgausite +1 jėgos ir +2 gynybos.
</div><div class=\"meniu\" style=\"text-align: left;\">
Kiek kartų treniruosites?<br/>
<form action='gyvates_kelias.php?id=treniruotes' method='post'> 
<input name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"1000\" title=\"Kiek\"/><br/>
<input type='submit' value='Treniruotis'/><postfield name=\"kiek\" value=\"$(kiek)\"/>
</form>";}
echo"
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "treniruotes") {
if ($mm[39] < 19){ echo "Jūs nesate perejas visas užduotis.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 

$g_kaina = 3000*$kiek;  
$kiek_gaus1 = 1*$g_kaina; 
$kiek_gaus3 = 2*$g_kaina;
$kiek_gaus1 = $kiek_gaus1/3000;
$kiek_gaus3 = $kiek_gaus3/3000;

if ($pinigai < $g_kaina) { $er = "Neužtenka pingių!"; }
if ($g_kaina == "") { $er = "Paliktas tuščias laukelis."; }

if ($er == ""){
$er = "Pasitreniravote sėkmingai! įgavotė <b>$kiek_gaus3</b> gynybos, <b>$kiek_gaus1</b> jėgos.";
$pinigai = $pinigai - $g_kaina;
		$gynyba = $gynyba + $kiek_gaus3;
						$jega = $jega + $kiek_gaus1;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||");
fclose($fp);
}
echo"$er<br/></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "next"){
include("icludekitainf/mm.php");
if ($mm[39][$ka-1] == "+"){ $zin = "<b>Si misija jau ivykdyta!</b>"; }
if ($zin == ""){ 
include("icludekitainf/nuskait.php"); 

if($mm[39]=="0"){ $zin = "Sekmingai ivygdita"; 
include("icludekitainf/mm.php");
}



if($mm[39]=="18"){ 
$zin = "Įvykdita.";
$jega = 1000+$jega; 
$gynyba = 2500+$gynyba; 
$pinigai = 500000+$pinigai; 
$gyvybess = 500+$gyvybess; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$gynyba|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$mm[39] = $mm[39] + 1;
include("icludekitainf/mm.php");
}

if($mm[39]=="17"){ 
if ($pinigai < 500000){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misiją įvykdita.";
$jega = 150+$jega; 
$gynyba = 350+$gynyba; 
$pinigai = $pinigai-500000; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[39] = $mm[39] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[39]=="16"){ 
if ($dari[5] < 300){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misiją įvykdita.";
		$pinigai = $pinigai + 7000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[5] = $dari[5] - 300;
$mm[39] = $mm[39] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[39]=="15"){ $mm = @explode("|",@file_get_contents("kitokiainf/$nick.txt"));
if ($mm[13] == "-"){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misiją įvykdita.";
$jega = 100+$jega; 
$gynyba = 250+$gynyba; 
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[39] = $mm[39] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if ($mm[39] == 14){ $att = round(((2000*2)/4),1); $att2 = round(((2000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Misijos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$jega = 70+$jega; 
$gynyba = 210+$gynyba; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
$zin = "Misiją įvykdita.<br/>";
$mm[39] = $mm[39] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[39] == 13){ $att = round(((1000*2)/4),1); $att2 = round(((1000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Misijos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$jega = 50+$jega; 
$gynyba = 150+$gynyba; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
$zin = "Misiją įvykdita.<br/>";
$mm[39] = $mm[39] + 1;
include("icludekitainf/mm.php");
}}


if($mm[39]=="12"){ 
if ($dari[18] < 50){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misiją įvykdita.";
		$pinigai = $pinigai + 5000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[18] = $dari[18] - 50;
$mm[39] = $mm[39] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}


if($mm[39]=="11"){ 
if ($dari[4] < 50){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misiją įvykdita.";
		$pinigai = $pinigai + 20000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[4] = $dari[4] - 50;
$mm[39] = $mm[39] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if ($mm[39] == 10){ $att = round(((500*2)/4),1); $att2 = round(((500*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Misijos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$jega = 30+$jega; 
$gynyba = 90+$gynyba; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
$zin = "Misiją įvykdita.<br/>";
$mm[39] = $mm[39] + 1;
include("icludekitainf/mm.php");
}}

if($mm[39]=="9"){ 
if ($dari[0] < 100){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
if ($dari[1] < 100){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misiją įvykdita.";
		$pinigai = $pinigai + 50000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[0] = $dari[0] - 100;
$dari[1] = $dari[1] - 100;
$mm[39] = $mm[39] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}
}
if($mm[39]=="8"){ 
if ($lygis < 50){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misiją įvykdita.";
		$exp = $exp + 120;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[39] = $mm[39] + 1;
include("icludekitainf/mm.php");
}}

if($mm[39]=="7"){ 
if ($lygis < 40){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misiją įvykdita.";
		$exp = $exp + 80;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[39] = $mm[39] + 1;
include("icludekitainf/mm.php");
}}

if($mm[39]=="6"){ 
if ($dari[3] < 240){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misiją įvykdita.";
		$pinigai = $pinigai + 35000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[3] = $dari[3] - 240;
$mm[39] = $mm[39] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[39]=="5"){ 
if ($dari[2] < 220){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misiją įvykdita.";
		$pinigai = $pinigai + 30000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[2] = $dari[2] - 220;
$mm[39] = $mm[39] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if($mm[39]=="4"){ 
if ($lygis < 25){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misiją įvykdita.";
		$exp = $exp + 50;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[39] = $mm[39] + 1;
include("icludekitainf/mm.php");
}}

if($mm[39]=="3"){ 
if ($dari[1] < 150){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misiją įvykdita.";
		$pinigai = $pinigai + 25000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[1] = $dari[1] - 150;
$mm[39] = $mm[39] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}

if ($mm[39] == 2){ $att = round(((100*2)/4),1); $att2 = round(((100*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Misijos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$jega = 10+$jega; 
$gynyba = 25+$gynyba; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
$zin = "Misiją įvykdita.<br/>";
$mm[39] = $mm[39] + 1;
include("icludekitainf/mm.php");
}}

if($mm[39]=="1"){ 
if ($dari[0] < 70){ $zin = "Jūs neturite visko ko reikia šitai misijai.";}else{
$zin = "Misiją įvykdita.";
		$pinigai = $pinigai + 15000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$inf[4]|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[0] = $dari[0] - 70;
$mm[39] = $mm[39] + 1;
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}
}
if($mm[39]=="0"){ 
$zin = "Misija įvykdyti pavyko.<br/></div><div class=\"meniu\" style=\"text-align: center;\">";
$mm[39] = $mm[39] + 1;
include("icludekitainf/mm.php");
}
}
echo"<b>Gyvates kelias</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$zin
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"gyvates_kelias.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

print'</card></wml>';
?>