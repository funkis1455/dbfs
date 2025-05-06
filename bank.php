
<?php
$kur = "Bankas";
include ("config.php");
include_once("icludekitainf/start.php");

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
$banke_pinigu = @number_format($bankas[0], 0, ',', ' ');
$banke_kreditu = @number_format($bankas[1], 0, ',', ' ');
$banke_litu = @number_format($bankas[2], 0, ',', ' ');
$litaixx = @number_format($litai, 0, ',', ' ');
$kronuxx = @number_format($kronu, 0, ',', ' ');
$pinigaixx = @number_format($pinigai, 0, ',', ' ');
echo"<b>Bankas</b></div><div class=\"meniu\" style=\"text-align: center;\">
Pinigus padėjus į banką jūms bus nuskaičuota 1%. Jūsų padetos santaupos bus saugomos, niekas jų negali matyti.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">

<b>Turi banke pinigų: $banke_pinigu</b><br/>
Kiek išimsi:<form action='bank.php?id=imu_pinigus&amp;kd=$kodase' method='post'>
<input name=\"kiek1\" type=\"text\" format=\"*N\" maxlength=\"1000\" title=\"Kiek\"/><br/> <input type='submit' value='Pasimti'></form></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Turi pinigų: $pinigaixx</b><br/>
Kiek padėsi:<form action='bank.php?id=dedu_pinigus&amp;kd=$kodase' method='post'>
<input name=\"kiek2\" type=\"text\" format=\"*N\" maxlength=\"1000\" title=\"Kiek\"/><br/> <input type='submit' value='Pasideti'></form>

</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Turi banke kreditu: $banke_kreditu</b><br/>
Kiek išimsi:<form action='bank.php?id=imu_kreditus&amp;kd=$kodase' method='post'>
<input name=\"kiek3\" type=\"text\" format=\"*N\" maxlength=\"100\" title=\"Kiek\"/><br/> <input type='submit' value='Pasimti'></form></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Turi kreditu: $kronuxx</b><br/>
Kiek padėsi:<form action='bank.php?id=dedu_kreditus&amp;kd=$kodase' method='post'>
<input name=\"kiek4\" type=\"text\" format=\"*N\" maxlength=\"100\" title=\"Kiek\"/> <br/><input type='submit' value='Pasideti'></form>

</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Turi banke sąskaitos: $banke_litu LTL </b><br/>
Kiek išimsi:<form action='bank.php?id=imu_litus&amp;kd=$kodase' method='post'>
<input name=\"kiek5\" type=\"text\" format=\"*N\" maxlength=\"100\" title=\"Kiek\"/> <br/><input type='submit' value='Pasimti'></form></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Jūsų sąskaitos: $litaixx LTL</b><br/>
Kiek padėsi:<form action='bank.php?id=dedu_litus&amp;kd=$kodase' method='post'>
<input name=\"kiek6\" type=\"text\" format=\"*N\" maxlength=\"100\" title=\"Kiek\"/> <br/><input type='submit' value='Pasideti'></form>

</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Pinigų keitimas į kreditus</b><br/>
Kursas: <b>50 000 000</b> = <b>1</b> kreditą<br/>
Kiek keisi kreditų:<form action='bank.php?id=perku_kronas&amp;kas=kron&amp;kd=$kodase' method='post'>
<input name=\"kiek7\" type=\"text\" format=\"*N\" maxlength=\"100\" title=\"Kiek\"/><br/><input type='submit' value='Pakeisti'/></form>
</form>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=miestas\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "imu_pinigus") {
if (time() < $floo){ echo"<b>KLAIDA</b></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"Jūs atliko veiksmą per greitai, turite palaukti.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"bank.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
 $fp = @fopen("$gameriai","w");
@fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
@fclose($fp); } else{

$kiek1 = $_POST['kiek1'];
$kiek1=@ereg_replace("[^0-9]","",$kiek1); 

if ($bankas[0]<$kiek1){ $badux = "Tiek banke pinigų neturi!"; }
if ($badux == ""){
$badux = "Paimta <u>$kiek</u> pinigų.";
$bankas[0] = $bankas[0]-$kiek1;
$pinigai = $pinigai+$kiek1;
$timxsss = time() + 3;
$fp = @fopen("$gameriai","w");
@fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$timxsss|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
@fclose($fp);
include("icludekitainf/bankas.php");
} 
echo"<b>Bankas</b></div><div class=\"meniu\" style=\"text-align: center;\">
$badux<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"bank.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";;}}

if ($id == "dedu_pinigus") {
if (time() < $floo){ echo"<b>KLAIDA</b></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"Jūs atliko veiksmą per greitai, turite palaukti.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"bank.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
$fp = @fopen("$gameriai","w");
@fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
@fclose($fp); } else{
$kiek2 = $_POST['kiek2'];
$kiek2 = @ereg_replace("[^0-9]","",$kiek2); 
if ($pinigai<$kiek2){ $badux = "Tiek pinigu neturi!"; }
if (100000>$kiek2){ $badux = "Turi deti minimum 100 000!"; }
if ($badux == ""){
$nuska = round(($kiek2/100)*1,0); 
$pad = $kiek2-$nuska; 
$badux = "Pasidėjai y banką <b>$kiek2</b> pinigų. ";
$bankas[0] = $bankas[0]+$pad;
$pinigai = $pinigai-$kiek2;
$timxsss = time() + 3;
$fp = @fopen("$gameriai","w");
@fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$timxsss|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
@fclose($fp);
@include("icludekitainf/bankas.php");
} 
echo"<b>Bankas</b></div><div class=\"meniu\" style=\"text-align: left;\">
$badux<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"bank.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}


if ($id == "imu_kreditus") {
if (time() < $floo){ echo"<b>KLAIDA</b></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"Jūs atliko veiksmą per greitai, turite palaukti.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"bank.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
 $fp = @fopen("$gameriai","w");
@fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
@fclose($fp); } else{

$kiek3 = $_POST['kiek3'];
$kiek3=@ereg_replace("[^0-9]","",$kiek3); 

if ($bankas[1]<$kiek3){ $badux = "Tiek banke kreditu neturi!"; }
if ($badux == ""){
$badux = "Paimta <u>$kiek3</u> kreditu.";
$bankas[1] = $bankas[1]-$kiek3;
$kronu = $kronu+$kiek3;
@file_put_contents("kronoss/$nick.txt", "$kronu");
$timxsss = time() + 3;
$fp = @fopen("$gameriai","w");
@fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$timxsss|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
@fclose($fp);
include("icludekitainf/bankas.php");
} 
echo"<b>Bankas</b></div><div class=\"meniu\" style=\"text-align: left;\">
$badux<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"bank.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "dedu_kreditus") {
if (time() < $floo){ echo"<b>KLAIDA</b></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"Jūs atliko veiksmą per greitai, turite palaukti.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"bank.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
$fp = @fopen("$gameriai","w");
@fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
@fclose($fp); } else{
$kiek4 = $_POST['kiek4'];
$kiek4 = @ereg_replace("[^0-9]","",$kiek4); 
if ($kronu<$kiek4){ $badux = "Tiek kreditu neturi!"; }
if (1>$kiek4){ $badux = "Turi deti minimum 1krd !"; }
if ($badux == ""){
$badux = "Pasidėjai y banką <b>$kiek4</b> kreditu. ";
$bankas[1] = $bankas[1]+$kiek4;
$kronu = $kronu-$kiek4;
@file_put_contents("kronoss/$nick.txt", "$kronu");
$timxsss = time() + 3;
$fp = @fopen("$gameriai","w");
@fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$timxsss|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
@fclose($fp);
@include("icludekitainf/bankas.php");
} 
echo"<b>Bankas</b></div><div class=\"meniu\" style=\"text-align: left;\">
$badux<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"bank.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "imu_litus") {
if (time() < $floo){ echo"<b>KLAIDA</b></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"Jūs atliko veiksmą per greitai, turite palaukti.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"bank.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
 $fp = @fopen("$gameriai","w");
@fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
@fclose($fp); } else{

$kiek5 = $_POST['kiek5'];
$kiek5=@ereg_replace("[^0-9]","",$kiek5); 

if ($bankas[2]<$kiek5){ $badux = "Tiek banke litu neturi!"; }
if ($badux == ""){
$badux = "Paimta <u>$kiek5</u> litu.";
$bankas[2] = $bankas[2]-$kiek5;
$litai = $litai+$kiek5;
@file_put_contents("account/$nick.txt", "$litai");
$timxsss = time() + 3;
$fp = @fopen("$gameriai","w");
@fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$timxsss|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
@fclose($fp);
include("icludekitainf/bankas.php");
} 
echo"<b>Bankas</b></div><div class=\"meniu\" style=\"text-align: left;\">
$badux<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"bank.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "dedu_litus") {
if (time() < $floo){ echo"<b>KLAIDA</b></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"Jūs atliko veiksmą per greitai, turite palaukti.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"bank.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
$fp = @fopen("$gameriai","w");
@fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
@fclose($fp); } else{
$kiek6 = $_POST['kiek6'];
$kiek6 = @ereg_replace("[^0-9]","",$kiek6); 
if ($litai<$kiek6){ $badux = "Tiek litu neturi!"; }
if (1>$kiek6){ $badux = "Turi deti minimum 1 lt !"; }
if ($badux == ""){
$badux = "Pasidėjai y banką <b>$kiek6</b> litu. ";
$bankas[2] = $bankas[2]+$kiek6;
$litai = $litai-$kiek6;
@file_put_contents("account/$nick.txt", "$litai");
$timxsss = time() + 3;
$fp = @fopen("$gameriai","w");
@fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$timxsss|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
@fclose($fp);
@include("icludekitainf/bankas.php");
} 
echo"<b>Bankas</b></div><div class=\"meniu\" style=\"text-align: left;\">
$badux<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"bank.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}


if ($id == "perku_kronas") {
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5";
if (time() < $floo){ echo"<b>KLAIDA</b></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"Jūs atliko veiksmą per greitai, turite palaukti.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"bank.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";$fp = @fopen("$gameriai","w");
@fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
@fclose($fp); } else{
if (!file_exists("kronoss/$nick.txt")){ $kronu = 0; } else { $kronu = @file_get_contents("kronoss/$nick.txt"); }
if ($kas == "kron"){
$kiek7 = @ereg_replace("[^0-9]","",$_POST['kiek7']); 

if ($kas == "kron") {
$g_kaina = 50000000*$kiek7; 
$kiek_gaus = 1*$kiek7; 
}
if ($pinigai < $g_kaina) { $er = "Tiek pinigų neturi!"; }
if ($g_kaina == "") { $er = "Taip, negalima!"; }

if ($er == ""){
$er = "Pakeista išleidai <b>$g_kaina</b> pinigų, gavai <b>$kiek_gaus</b> kreditų.";

$pin = $pinigai-$g_kaina;

$fop = fopen("kronoss/$nick.txt", "w+");
fwrite($fop,$kronu+$kiek_gaus);
fclose($fop);
$timxsss = time() + 3;
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$timxsss|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||");
fclose($fp);
}
echo"<b>Bankas</b></div><div class=\"meniu\" style=\"text-align: left;\">
$er<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"bank.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}}

print '</body></html>';
?>