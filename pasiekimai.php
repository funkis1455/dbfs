<?php
$kur = "Pasiekimai";
include ("config.php");
include_once("icludekitainf/start.php");

if ($id == ""){ 

$mm = @explode("|",@file_get_contents("kitokiainf/$nick.txt"));
$ivykdyta = @substr_count($mm, "+"); 
echo"<b>Pasiekimai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Pasiekimai yrą skaičuojami, be ginklu ir šarvų, ar susijungimų.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
if ($mm[41] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 20 lygį. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=1\">Pasiekti 20 lygį.</a><br/>"; }

if ($mm[42] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 10 000 jegos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=2\">Pasiekti 10 000 jegos.</a><br/>"; }

if ($mm[43] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 10 000 gynybos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=3\">Pasiekti 10 000 gynybos.</a><br/>"; }

if ($mm[44] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 10 000 gyvybiu. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=4\">Pasiekti 10 000 gyvybiu.</a><br/>"; }


if ($mm[45] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 50 lygį. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=5\">Pasiekti 50 lygį.</a><br/>"; }

if ($mm[46] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 50 000 jegos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=6\">Pasiekti 50 000 jegos.</a><br/>"; }

if ($mm[47] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 50 000 gynybos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=7\">Pasiekti 50 000 gynybos.</a><br/>"; }

if ($mm[48] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 50 000 gyvybiu. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=8\">Pasiekti 50 000 gyvybiu.</a><br/>"; }

if ($mm[49] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 70 lygį. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=9\">Pasiekti 70 lygį.</a><br/>"; }

if ($mm[50] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 100 000 jegos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=10\">Pasiekti 100 000 jegos.</a><br/>"; }

if ($mm[51] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 100 000 gynybos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=11\">Pasiekti 100 000 gynybos.</a><br/>"; }

if ($mm[52] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 100 000 gyvybiu. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=12\">Pasiekti 100 000 gyvybiu.</a><br/>"; }

if ($mm[53] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 90 lygį. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=13\">Pasiekti 90 lygį.</a><br/>"; }

if ($mm[54] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 250 000 jegos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=14\">Pasiekti 250 000 jegos.</a><br/>"; }

if ($mm[55] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 250 000 gynybos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=15\">Pasiekti 250 000 gynybos.</a><br/>"; }

if ($mm[56] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 250 000 gyvybiu. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=16\">Pasiekti 250 000 gyvybiu.</a><br/>"; }

if ($mm[57] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 130 lygį. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=17\">Pasiekti 130 lygį.</a><br/>"; }

if ($mm[58] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 600 000 jegos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=18\">Pasiekti 600 000 jegos.</a><br/>"; }

if ($mm[59] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 600 000 gynybos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=19\">Pasiekti 600 000 gynybos.</a><br/>"; }

if ($mm[60] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 600 000 gyvybiu. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=20\">Pasiekti 600 000 gyvybiu.</a><br/>"; }

if ($mm[62] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 150 lygį. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=21\">Pasiekti 150 lygį.</a><br/>"; }

if ($mm[63] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 1 000 000 jegos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=22\">Pasiekti 1 000 000 jegos.</a><br/>"; }

if ($mm[64] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 1 000 000 gynybos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=23\">Pasiekti 1 000 000 gynybos.</a><br/>"; }

if ($mm[65] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 1 000 000 gyvybiu. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=24\">Pasiekti 1 000 000 gyvybiu.</a><br/>"; }

if ($mm[66] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 180 lygį. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=25\">Pasiekti 180 lygį.</a><br/>"; }

if ($mm[67] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 1 500 000 jegos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=26\">Pasiekti 1 500 000 jegos.</a><br/>"; }

if ($mm[68] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 1 500 000 gynybos. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=27\">Pasiekti 1 500 000 gynybos.</a><br/>"; }

if ($mm[69] == "+"){ 
echo"<img src=\"imgs/ok.gif\" alt=\"*\"/> Pasiekti 1 500 000 gyvybiu. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\" alt=\"*\"/> <a href=\"pasiekimai.php?id=vykdau123&amp;ka=28\">Pasiekti 1 500 000 gyvybiu.</a><br/>"; }

echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=misijos\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "vykdau123" && $ka >= 1 && $ka <= 28){
$mm = @explode("|",@file_get_contents("kitokiainf/$nick.txt"));
$pasm = @explode("|",$mm); 
if ($pasm[$ka] == "+"){ $zin = "<b>Sis pasiekimas jau įvykdytas.!</b>"; }
if ($zin == ""){ 
include("icludekitainf/nuskait.php");


if ($ka == 28){if ($mm[69] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($gyvybess < 1500000){ $zin = "Jūs nesate pasiekęs 1500000 gyvybiu."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 250000 gyvybiu."; 
		$gyvybess =$gyvybess + 250000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[69] = "+";
include("icludekitainf/mm.php");
}}}

if ($ka == 27){if ($mm[68] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($gynyba < 1500000){ $zin = "Jūs nesate pasiekęs 1500000 gynybos."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 250000 gynybos."; 
		$gynyba =$gynyba + 250000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[68] = "+";
include("icludekitainf/mm.php");
}}}

if ($ka == 26){if ($mm[67] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($jega < 1500000){ $zin = "Jūs nesate pasiekęs 1500000 jegos."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 250000 jegos."; 
		$jega =$jega+ 250000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[67] = "+";
include("icludekitainf/mm.php");

}}}

if ($ka == 25){
if ($mm[66] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($lygis < 180){ $zin = "Jūs nesate pasiekęs 180 lygi."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 9000 exp."; 
		$exp = $exp + 9000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[66] = "+";
include("icludekitainf/mm.php");

}}}

if ($ka == 24){if ($mm[65] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($gyvybess < 1000000){ $zin = "Jūs nesate pasiekęs 1000000 gyvybiu."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 60000 gyvybiu."; 
		$gyvybess =$gyvybess + 60000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[65] = "+";
include("icludekitainf/mm.php");
}}}

if ($ka == 23){if ($mm[64] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($gynyba < 1000000){ $zin = "Jūs nesate pasiekęs 1000000 gynybos."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 60000 gynybos."; 
		$gynyba =$gynyba + 60000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[64] = "+";
include("icludekitainf/mm.php");
}}}

if ($ka == 22){if ($mm[63] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($jega < 1000000){ $zin = "Jūs nesate pasiekęs 1000000 jegos."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 60000 jegos."; 
		$jega =$jega+ 60000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[63] = "+";
include("icludekitainf/mm.php");

}}}

if ($ka == 21){
if ($mm[62] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($lygis < 150){ $zin = "Jūs nesate pasiekęs 150 lygi."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 5500 exp."; 
		$exp = $exp + 5500;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[62] = "+";
include("icludekitainf/mm.php");
}}} 


if ($ka == 20){if ($mm[60] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($gyvybess < 600000){ $zin = "Jūs nesate pasiekęs 600000 gyvybiu."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 6000 gyvybiu."; 
		$gyvybess =$gyvybess + 6000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[60] = "+";
include("icludekitainf/mm.php");
}}}

if ($ka == 19){if ($mm[59] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($gynyba < 600000){ $zin = "Jūs nesate pasiekęs 600000 gynybos."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 6000 gynybos."; 
		$gynyba =$gynyba + 6000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[59] = "+";
include("icludekitainf/mm.php");
}}}

if ($ka == 18){if ($mm[58] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($jega < 600000){ $zin = "Jūs nesate pasiekęs 600000 jegos."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 6000 jegos."; 
		$jega =$jega+ 6000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[58] = "+";
include("icludekitainf/mm.php");

}}}

if ($ka == 17){
if ($mm[57] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($lygis < 130){ $zin = "Jūs nesate pasiekęs 130 lygi."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 1300 exp."; 
		$exp = $exp + 1300;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[57] = "+";
include("icludekitainf/mm.php");

}}}


if ($ka == 16){if ($mm[56] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($gyvybess < 250000){ $zin = "Jūs nesate pasiekęs 250000 gyvybiu."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 2500 gyvybiu."; 
		$gyvybess =$gyvybess + 2500;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[56] = "+";
include("icludekitainf/mm.php");
}}}

if ($ka == 15){if ($mm[55] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($gynyba < 250000){ $zin = "Jūs nesate pasiekęs 250000 gynybos."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 2500 gynybos."; 
		$gynyba =$gynyba + 2500;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[55] = "+";
include("icludekitainf/mm.php");
}}}

if ($ka == 14){if ($mm[54] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($jega < 250000){ $zin = "Jūs nesate pasiekęs 250000 jegos."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 2500 jegos."; 
		$jega =$jega+ 2500;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[54] = "+";
include("icludekitainf/mm.php");

}}}

if ($ka == 13){
if ($mm[53] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($lygis < 90){ $zin = "Jūs nesate pasiekęs 90 lygi."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 900 exp."; 
		$exp = $exp + 900;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[53] = "+";
include("icludekitainf/mm.php");

}}}


if ($ka == 12){if ($mm[52] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($gyvybess < 100000){ $zin = "Jūs nesate pasiekęs 100000 gyvybiu."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 1200 gyvybiu."; 
		$gyvybess =$gyvybess + 1200;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[52] = "+";
include("icludekitainf/mm.php");
}}}

if ($ka == 11){if ($mm[51] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($gynyba < 100000){ $zin = "Jūs nesate pasiekęs 100000 gynybos."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 1200 gynybos."; 
		$gynyba =$gynyba + 1200;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[51] = "+";
include("icludekitainf/mm.php");
}}}

if ($ka == 10){if ($mm[50] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($jega < 100000){ $zin = "Jūs nesate pasiekęs 100000 jegos."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 1200 jegos."; 
		$jega =$jega+ 1200;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[50] = "+";
include("icludekitainf/mm.php");

}}}

if ($ka == 9){
if ($mm[49] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($lygis < 70){ $zin = "Jūs nesate pasiekęs 70 lygi."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 700 exp."; 
		$exp = $exp + 700;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[49] = "+";
include("icludekitainf/mm.php");

}}}


if ($ka == 8){if ($mm[48] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($gyvybess < 50000){ $zin = "Jūs nesate pasiekęs 50000 gyvybiu."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 700 gyvybiu."; 
		$gyvybess =$gyvybess + 700;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[48] = "+";
include("icludekitainf/mm.php");
}}}

if ($ka == 7){if ($mm[47] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($gynyba < 50000){ $zin = "Jūs nesate pasiekęs 50000 gynybos."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 700 gynybos."; 
		$gynyba =$gynyba + 700;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[47] = "+";
include("icludekitainf/mm.php");
}}}

if ($ka == 6){if ($mm[46] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($jega < 50000){ $zin = "Jūs nesate pasiekęs 50000 jegos."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 700 jegos."; 
		$jega =$jega+ 700;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[46] = "+";
include("icludekitainf/mm.php");

}}}

if ($ka == 5){
if ($mm[45] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($lygis < 50){ $zin = "Jūs nesate pasiekęs 50 lygi."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 500 exp."; 
		$exp = $exp + 500;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[45] = "+";
include("icludekitainf/mm.php");

}}}


if ($ka == 4){if ($mm[44] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($gyvybess < 10000){ $zin = "Jūs nesate pasiekęs 10000 gyvybiu."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 200 gyvybiu."; 
		$gyvybess =$gyvybess + 200;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[44] = "+";
include("icludekitainf/mm.php");
}}}

if ($ka == 3){if ($mm[43] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($gynyba < 10000){ $zin = "Jūs nesate pasiekęs 10000 gynybos."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 200 gynybos."; 
		$gynyba =$gynyba + 200;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[43] = "+";
include("icludekitainf/mm.php");
}}}

if ($ka == 2){if ($mm[42] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($jega < 10000){ $zin = "Jūs nesate pasiekęs 10000 jegos."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 200 jegos."; 
		$jega =$jega+ 200;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[42] = "+";
include("icludekitainf/mm.php");

}}}

if ($ka == 1){
if ($mm[41] == "+"){ $zin = "Šįs pasiekimas jau įvykditas";}else{
if ($lygis < 20){ $zin = "Jūs nesate pasiekęs 20 lygi."; 
}
else 
{
$zin = "Jus sėkmingai įvykdėte pasiekimą gavote 100 exp."; 
		$exp = $exp + 100;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[41] = "+";
include("icludekitainf/mm.php");

}}}
}
echo"<b>$zin</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pasiekimai.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


print'</card></wml>';

?>