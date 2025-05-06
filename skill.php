<?php
include ("config.php");
include_once("icludekitainf/start.php");


if ($id == "transformation"){
$img = strtolower($rase);

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
if($def>=$dmg){$jusu_kg_tr ="jūsų kovne galią yrą $dmg22";}
if($dmg>$def) {$jusu_kg_tr ="jūsų kovne galią yrą $def22";}

if($def>=$dmg){$jusu_kgs ="$dmg2";}
if($dmg>$def) {$jusu_kgs ="$def2";}
$page = $_GET['page'];
if ($page == "6"){
if ($rase == "Goku" or $rase == "Vegeta" or $rase == "Piccolo"  or $rase == "Bulma" or $rase == "Bardock" or $rase == "Gohan" or $rase == "Broly" or $rase == "Future Trunks" or $rase == "Cell" or $rase == "Frieza" or $rase == "Cooler" or $rase == "Android 17" or $rase == "Goku God" or $rase == "Vegeta God" or $rase == "Goku Super Saiyan 5" or $rase == "Goku Super Saiyan 6" or $rase == "Goku Super Saiyan 7" or $rase == "Android 18" or $rase == "Android 20"){ } else {
if ($jusu_kgs  < 30000000000 or $lygis  < 380) {  } else {
$skills[0] = 6;
include("icludekitainf/skill.php");}}}

if ($page == "5"){
 if ($rase == "Piccolo" or $rase == "Bulma" or $rase == "Bardock" or $rase == "Gohan" or $rase == "Broly" or $rase == "Future Trunks" or $rase == "Cell" or $rase == "Frieza" or $rase == "Cooler" or $rase == "Android 17" or $rase == "Goku God" or $rase == "Vegeta God" or $rase == "Goku Super Saiyan 5" or $rase == "Goku Super Saiyan 6" or $rase == "Goku Super Saiyan 7" or $rase == "Android 18" or $rase == "Android 20"){
 } else {
if ($jusu_kgs  < 1000000000 or $lygis  < 320) {  } else {
$skills[0] = 5;
include("icludekitainf/skill.php");}}}

if ($page == "4"){
if ($rase == "Piccolo" or $rase == "Bulma" or $rase == "Broly" or $rase == "Cell" or $rase == "Cooler" or $rase == "Android 17" or $rase == "Goku God" or $rase == "Vegeta God" or $rase == "Goku Super Saiyan 5" or $rase == "Goku Super Saiyan 6" or $rase == "Goku Super Saiyan 7" or $rase == "Android 18" or $rase == "Android 20"){
 } else {
if ($jusu_kgs  < 150000000 or $lygis  < 270) {  } else {
$skills[0] = 4;
include("icludekitainf/skill.php");}}}

if ($page == "3"){
if ($rase == "Piccolo" or $rase == "Bulma" or $rase == "Cooler" or $rase == "Android 17" or $rase == "Goku God" or $rase == "Vegeta God" or $rase == "Goku Super Saiyan 5" or $rase == "Goku Super Saiyan 6" or $rase == "Goku Super Saiyan 7" or $rase == "Android 18" or $rase == "Android 20"){
 } else {
if ($jusu_kgs  < 50000000 or $lygis  < 210) {  } else {
$skills[0] = 3;
include("icludekitainf/skill.php");}}}

if ($page == "2"){
if ($rase == "Piccolo" or $rase == "Piccolo" or $rase == "Bulma" or $rase == "Android 17" or $rase == "Goku God" or $rase == "Vegeta God" or $rase == "Goku Super Saiyan 5" or $rase == "Goku Super Saiyan 6" or $rase == "Goku Super Saiyan 7" or $rase == "Android 18" or $rase == "Android 20"){
 } else {
if ($jusu_kgs  < 7000000 or $lygis  < 150) {  } else {
$skills[0] = 2;
include("icludekitainf/skill.php");}}}

if ($page == "1"){
if ($rase == "Bulma" or $rase == "Goku God" or $rase == "Vegeta God" or $rase == "Goku Super Saiyan 5" or $rase == "Goku Super Saiyan 6" or $rase == "Goku Super Saiyan 7" or $rase == "Android 18" or $rase == "Android 20"){
 } else {
if ($jusu_kgs  < 100000 or $lygis  < 100) {  } else {
$skills[0] = 1;
include("icludekitainf/skill.php");}}}

if ($page == "0"){
if ($rase == "Gold Oozaru" or $rase == "Goku God"  or $rase == "Vegeta God" or $rase == "Goku Super Saiyan 5" or $rase == "Goku Super Saiyan 6" or $rase == "Goku Super Saiyan 7" or $rase == "Android 18" or $rase == "Android 20"){
 } else {
if ($jusu_kgs  < 0 or $lygis  < 0) {  } else {
$skills[0] = 0;
include("icludekitainf/skill.php");}}}

echo"<b>Transformacija</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/veikejai/$img-$skills[0].png\" alt=\"prev\"/><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">";
echo"Transformuotis gali kiekvienas, bet priklauso nuo veikėjo, kiek jis gali padaryti transformacijų.<br/>
Kad galėtumėte transformuotis jums reikia būti pasiekus tam tikra kovinės galios skaičių bei lygį.<br/>
Padarius transformaciją jūsų veikėjas pakeis pavidalą ir jūs gausite bonus procenta, procentas lieka visada jei nekeičiat pavidalo atgal + jūsų kg kils greičiau.<br/>
Transformacijos atsidaro nuo tam tikro lygio ir kiovinės galios skaičiaus.<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Transformacijos skaičius (Kiek gaunate bonuso / kiek reikia kg ir lygio)</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($skills[0] == "0"){ echo"<b>$ico 0 transformacijos (Nera bonus)<br/></b>";}else{
 echo"$ico <a href=\"skill.php?id=transformation&amp;page=0\">0 transformacija</a> (Nera bonus)<br/>";} 

 if ($skills[0] == "1"){ echo"<b>$ico 1-oji. transformacija (+10% jėgos ir gynybos / 100 000kg ir 100 lygis)</b><br/>";}else{
if ($rase == "Goku" or $rase == "Kid Trunks" or  $rase == "Vegeta" or $rase == "Piccolo" or $rase == "Bardock" or $rase == "Gohan" or $rase == "Broly" or $rase == "Future Trunks" or $rase == "Cell" or $rase == "Frieza" or $rase == "Buu" or $rase == "Cooler" or $rase == "Android 17"){
 echo"$ico <a href=\"skill.php?id=transformation&amp;page=1\">1-oji. transformacija</a> (+10% jėgos ir gynybos / 100 000kg ir 100 lygis)<br/>"; } } 

 if ($skills[0] == "2"){ echo"<b>$ico 2-oji. transformacija (+15% jėgos ir gynybos / 7 000 000kg ir 150 lygis)</b><br/>";}else{
if ($rase == "Goku" or $rase == "Kid Trunks" or  $rase == "Vegeta" or $rase == "Bardock" or $rase == "Gohan" or $rase == "Broly" or $rase == "Future Trunks" or $rase == "Cell" or $rase == "Frieza" or $rase == "Buu" or $rase == "Cooler"){
 echo"$ico <a href=\"skill.php?id=transformation&amp;page=2\">2-oji. transformacija</a> (+15% jėgos ir gynybos / 7 000 000kg ir 150 lygis)<br/>"; } }

 if ($skills[0] == "3"){ echo"<b>$ico 3-oji. transformacija (+20% jėgos ir gynybos / 50 000 000kg ir 210 lygis)</b><br/>";}else{
if ($rase == "Goku" or $rase == "Kid Trunks" or  $rase == "Vegeta" or $rase == "Bardock" or $rase == "Gohan" or $rase == "Broly" or $rase == "Future Trunks" or $rase == "Cell" or $rase == "Frieza" or $rase == "Buu"){
 echo"$ico <a href=\"skill.php?id=transformation&amp;page=3\">3-oji. transformacija</a> (+20% jėgos ir gynybos / 50 000 000kg ir 210 lygis)<br/>"; } }

 if ($skills[0] == "4"){ echo"<b>$ico 4-oji. transformacija (+23% jėgos ir gynybos / 150 000 000kg ir 270 lygis)</b><br/>";}else{
if ($rase == "Goku" or $rase == "Vegeta" or $rase == "Bardock" or $rase == "Gohan" or $rase == "Future Trunks" or $rase == "Frieza" or $rase == "Buu"){
 echo"$ico <a href=\"skill.php?id=transformation&amp;page=4\">4-oji. transformacija</a> (+23% jėgos ir gynybos / 150 000 000kg ir 270 lygis)<br/>"; } }

 if ($skills[0] == "5"){ echo"<b>$ico 5-oji. transformacija (+27% jėgos ir gynybos / 1 000 000 000kg ir 320 lygis)</b><br/>";}else{
 if ($rase == "Goku" or $rase == "Vegeta" or $rase == "Buu"){
 echo"$ico <a href=\"skill.php?id=transformation&amp;page=5\">5-oji. transformacija</a> (+27% jėgos ir gynybos / 1 000 000 000kg ir 320 lygis)</b><br/>"; } }

 if ($skills[0] == "6"){ echo"<b>$ico 6-oji. transformacija (+35% jėgos ir gynybos / 30 000 000 000kg ir 380 lygis)</b><br/>";}else{
 if ($rase == "Goku" or  $rase == "Buu" ){
 echo"$ico <a href=\"skill.php?id=transformation&amp;page=6\">6-oji. transformacija</a> (+35% jėgos ir gynybos / 30 000 000 000kg ir 380 lygis)<br/>"; } }
 
echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}



if ($id == ""){
$img = strtolower($rase);
$kur = "Skillai";
include ("config.php");
echo"<b>Skillai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/veikejai/$img-$skills[0].png\" alt=\"prev\"/><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Jūs čia galite išmokti \"<a href=\"skill.php?id=techniques\">Technikas</a>\", atidaryti \"<a href=\"skill.php?id=aura\">Auras</a>\" bei daryti \"<a href=\"skill.php?id=transformation\">Transformacija</a>\" - keisti savo pavidalą ir įgauti daug kovinės galios.
Norint susijungti su kitu žaidėjų jums reiks išmokti \"<a href=\"skill.php?id=fusion dance\">Fusion dance</a>\"<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=transformation\">Transformacijos</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"skill.php?id=techniques\">Technikos</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"skill.php?id=Auros\">Auros</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"skill.php?id=technical improvement\">Technikos tobulinimas</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"skill.php?id=Fusion_dance\">Fusion dance <u>Šokis</u></a><br/>";
if ($rase == "Buu" or $rase == "Buu(Absorption Piccolo)" or $rase == "Buu(Absorption Gohan)" or $rase == "Buu(Absorption Gotenks)"){ 
echo"</div><div class=\"meniu\">[&#8226;] <a href=\"skill.php?id=Absorption\">Absorption</a><br/>";}
if ($rase == "Goku" or $rase == "Vegeta"){ 
echo"</div><div class=\"meniu\">[&#8226;] <a href=\"skill.php?id=Potara_fusion\">Tapti Vegito</a><br/>";}
if ($rase == "Kid Trunks" or $rase == "Kid Goten"){ 
echo"</div><div class=\"meniu\">[&#8226;] <a href=\"skill.php?id=gotenks\">Tapti Gotenks</a><br/>";}

echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if ($id == "tubulinimas"){
$kur = "Technikos";
include ("config.php");
echo"Tobulinimas dar nera baigtas galesite tobulinti greitai.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "energ22ija"){
$kur = "Energija";
include ("config.php");
echo"<b>Energijos amplitude</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/energy.png\" alt=\"*\"/><br/>
Energija jums leidžia kovoti, nebeturint energijos jūs tiesiog negalite pulti.<br/>
Su kiekviena kova jus prarandate -1 energijos, energija atsinaujina kas 30 minučių.<br/>
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
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Energija susikaups už $likom3 min.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=energy\">Sukaupti energija</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
Sukaupti energiją jūs reikės 1 stebuklingos pupos.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=aplitud\">Didinti energijos aplitude</a><br/>";
echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "energy22"){ 

if ($dari[33] < 1){ echo "Jūs neturite stebuklingos pupos, ją galima gauti iš \"<a href=\"karino_bokstas.php?\">Karino bokštas</a>\"<br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=energija\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Energija sukaupra!</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=energija\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
$dari[33] = $dari[33] - 1;
$skills[22] = $skills[23];
include("icludekitainf/skill.php");
include("icludekitainf/iras2.php");
}}


if ($id == "aplit2ud"){ 
echo"<b>Didinti energijos aplitude</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
1 padidinimas kainuoja 10 000 pinigų.
</div><div class=\"meniu\" style=\"text-align: left;\">
Kiek kartų didinsite apmlitude?<br/>
<form action='skill.php?id=didinti' method='post'>
<input name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"1000\" title=\"Kiek\"/><br/>
<input type='submit' value='Didinti'/><postfield name=\"kiek\" value=\"$(kiek)\"/>
</form></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=energija\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "didint2i") {
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 

$g_kaina = 10000*$kiek;  
$kiek_gaus1 = 1*$g_kaina; 
$kiek_gaus1 = $kiek_gaus1/10000;

if ($pinigai < $g_kaina) { $er = "Neužtenka pinigų!"; }
if ($g_kaina == "") { $er = "Paliktas tuščias laukelis."; }

if ($er == ""){
$er = "Padidinote sėkmingai!<br/> Jūsų amplitude padidejo +$kiek_gaus1.";
$pinigai = $pinigai - $g_kaina;
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||");
fclose($fp);

						$skills[23] = $skills[23] + $kiek_gaus1;;
include("icludekitainf/skill.php");
}
echo"<b>Didinti energijos aplitude</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$er<br/></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=energija\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "Potara_fusion"){
$kur = "Potara Fusion";
include ("config.php");
if ($rase != "Goku" && $rase != "Vegeta"){ 
echo"Potaro fusion gali atlikti tik Goku ir Vegeta.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo"<b>Potara fusion</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/veikejai/vegito-0.png\" alt=\"prev\"/><br/>
Goku ir Vegeta gali tapti galingu kariu - Vegito. Tam reikės atlikti tam tikrus reikalavimus.<br/>
Jūs įgausite didesnius procentus ir būsite kitas veikėjas su nauja savybe.<br/>
<b>Vegito jums reikia 120 lygio ir turėti 5000 kreditų.</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=Potara_fusion2\"><b>Tapti Vegito</b></a> (Bonusai: +60% jėgos, gynybos ir gyvybių)<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>#</b> Po potara fusion taipat gausite 100 000 jėgos ir 400 000 gynybos. <br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "Potara_fusion2"){
$kur = "Potara Fusion";
include ("config.php");
if ($rase != "Goku" && $rase != "Vegeta"){ 
echo"Potaro fusion gali atlikti tik Goku ir Vegeta.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($lygis < 120) { echo "Jūsų lygis per mažas."; } else {
    if (!file_exists("kronoss/$nick.txt")){ $kronu = 0;} else{$kronu = @file_get_contents("kronoss/$nick.txt");}
    if ($kronu < 5000){ echo "Nepakankamas kreditų likutis.";}else{
echo"<b>Patara fusion</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">Jūs padarete potaro fusion ir tapote Vegito, bei gavote 100 000 jėgos ir 400 000 gynybos.";
 $fp = @fopen("kronoss/$nick.txt", "w");
        @fwrite($fp, $kronu - 5000);
        @fclose($fp);
$inf[3] = 100000+$inf[3]; 
$inf[16] = 400000+$inf[16]; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|Vegito|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$skills[0] = 0;
include("icludekitainf/skill.php");
echo" </div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}}}

if ($id == "Fusion_dance"){
$kur = "Fusion Dance";
include ("config.php");
echo"<b>Fusion Dance</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/fusion_dance.png\" alt=\"Fusion Dance\"/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Fusion Dance šokis - tai technika kuri jums leis susijungti su kitais žaidėjais ir įgausite kito žaidėjo 3% jėgos ir  8% gynybos.<br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Norint išmokti šią technika jums reiks <b>170 lygio ir 250 Fusion fail.</b> Fusion fail galite gauti iš kovų.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=Fusion_dance2\">Išmokti technika</a><br/> 
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}

if ($id == "Fusion_dance2"){
$kur = "Fusion Dance";
include ("config.php");
if ($lygis < 170) { echo"<b>Fusion Dance</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">Jūsų lygis per mažas.
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>"; } else {
if ($dari[8] < 250){ echo "Jūs neturite 250 Fusion fail.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo"<b>Fusion Dance</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">Jūs išmokote fusion dance technika dabar galite susijungti su kitais žaidėjais.";
$skills[1] = "+";
include("icludekitainf/skill.php");
$dari[8] = $dari[8] - 250;
include("icludekitainf/iras2.php");
echo" </div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}}

if ($id == "Absorption"){
$kur = "Absorption";
include ("config.php");
if ($rase != "Buu" && $rase != "Buu(Absorption Piccolo)" && $rase != "Buu(Absorption Gohan)" && $rase != "Buu(Absorption Gotenks)"){ 
echo"Absorption gali tik Buu";}else{
echo"<b>Absorption</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Absorbtion - tai savybė įsiurbti kitą kovotoją, įsiurbęs kita kovotoja gauna jėgos gynybos, bei padidėja jūsų veikėjo savybes procentai.<br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<b>Absorption galima nuo 150 lygio ir 3 transformacijos.</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=Absorption_Piccolo\">Absorption Piccolo</a> (100 kreditų)<br/> 
[&#8226;] <a href=\"skill.php?id=Absorption_Gohan\">Absorption Gohan</a> (200 kreditų)<br/>
[&#8226;] <a href=\"skill.php?id=Absorption_Gotenks\">Absorption Gotenks</a> (500 kreditų)<br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "Absorption_Piccolo"){
$kur = "Absorption";
include ("config.php");
if ($rase != "Buu"){ echo"Absorption gali tik Buu, arba jus jau absorbation.
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Absorption\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($lygis < 150) { echo "Jūsų lygis per mažas."; } else {
    if (!file_exists("kronoss/$nick.txt")){ $kronu = 0;} else{$kronu = @file_get_contents("kronoss/$nick.txt");}
    if ($kronu < 100){ echo "Nepakankamas kreditų likutis.";}else{
	    if ($skills[0] < 3){ echo "Galima absurbuoti tik nuo 3 transformacijos.";}else{
echo"<b>Absurbation</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">Jūs absurbavote Piccolo gavote 15 000 jėgos ir 35 000 gynybos, jūsų pricentai padidejo +10%.";
 $fp = @fopen("kronoss/$nick.txt", "w");
        @fwrite($fp, $kronu - 100);
        @fclose($fp);
$inf[3] = 15000+$inf[3]; 
$inf[16] = 35000+$inf[16]; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|Buu(Absorption Piccolo)|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$skills[0] = 3;
include("icludekitainf/skill.php");

echo" </div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}}}} 

if ($id == "Absorption_Gohan"){
$kur = "Absorption";
include ("config.php");
if ($rase != "Buu(Absorption Piccolo)"){ 
echo"Jūs nesate absurbave piccolo, tik po piccolo galesite absurbuoti gohan</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Absorption\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($lygis < 150) { echo "Jūsų lygis per mažas."; } else {
    if (!file_exists("kronoss/$nick.txt")){ $kronu = 0;} else{$kronu = @file_get_contents("kronoss/$nick.txt");}
    if ($kronu < 200){ echo "Nepakankamas kreditų likutis.";}else{
	    if ($skills[0] < 3){ echo "Galima absurbuoti tik nuo 3 transformacijos.";}else{
echo"<b>Absurbation</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">Jūs absurbavote Gohan gavote 25 000 jėgos ir 55 000 gynybos, jūsų pricentai padidejo +10%.";
 $fp = @fopen("kronoss/$nick.txt", "w");
        @fwrite($fp, $kronu - 200);
        @fclose($fp);
$inf[3] = 25000+$inf[3]; 
$inf[16] = 55000+$inf[16]; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|Buu(Absorption Gohan)|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$skills[0] = 3;
include("icludekitainf/skill.php");

echo" </div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}}}} 

if ($id == "Absorption_Gotenks"){
$kur = "Absorption";
include ("config.php");
if ($rase != "Buu(Absorption Gohan)"){ 
echo"Jūs nesate absurbave gohan, tik po gohan galesite absurbuoti gotenks</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Absorption\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($lygis < 150) { echo "Jūsų lygis per mažas."; } else {
    if (!file_exists("kronoss/$nick.txt")){ $kronu = 0;} else{$kronu = @file_get_contents("kronoss/$nick.txt");}
    if ($kronu < 500){ echo "Nepakankamas kreditų likutis.";}else{
	    if ($skills[0] < 3){ echo "Galima absurbuoti tik nuo 3 transformacijos.";}else{
echo"<b>Absurbation</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">Jūs absurbavote Gotenks gavote 55 000 jėgos ir 95 000 gynybos, jūsų pricentai padidejo +10%.";
 $fp = @fopen("kronoss/$nick.txt", "w");
        @fwrite($fp, $kronu - 500);
        @fclose($fp);
$inf[3] = 55000+$inf[3]; 
$inf[16] = 95000+$inf[16]; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|Buu(Absorption Gotenks)|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$skills[0] = 3;
include("icludekitainf/skill.php");

echo" </div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}}}} 

if ($id == "gotenks"){
$kur = "Fusion Dance";
include ("config.php");
if ($rase != "Kid Trunks" && $rase != "Kid Goten"){ 
echo"Fusion dance gali atlikti tik Kid Trunks ir Kid Goten.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo"<b>Tapti Gotenks</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Kid Trunks ir Kid Goten gali tapti galingu kariu - Gotenks. <br/>
Jūs įgausite didesnius procentus ir būsite kitas veikėjas su nauja savybe.<br/>
Kad galėtumėte daryti fusion dance jums reikia būti pasiekus 100 lygį ir  moketi fusion dance šokį.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=gotenks2\">Daryti fusion dance</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>#</b> Po fusion dance taipat gausite 20 000 jėgos ir 50 000 gynybos. <br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "gotenks2"){
$kur = "Fusion Dance";
include ("config.php");
if ($rase != "Kid Trunks" && $rase != "Kid Goten"){ 
echo"Fusion dance gali atlikti tik Kid Trunks ir Kid Goten.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
if ($skills[1] !== "+"){ echo "Jūs dar neišmokes Fusion Dance šokio.
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($lygis < 100) { echo "Jūsų lygis per mažas.
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>"; } else {
echo"<b>Fusion dance</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">Jūs atlikote fusion dance ir tapote galingu kariu <b>Gotenks</b> taip pat gavote 20 000 jėgos ir 50 000 gynybos.";
$inf[3] = 20000+$inf[3]; 
$inf[16] = 50000+$inf[16]; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|Gotenks|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$skills[0] = 0;
include("icludekitainf/skill.php");
echo" </div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}}}

$img = strtolower($rase);

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
if($def>=$dmg){$jusu_kg_tr ="jūsų kovne galią yrą $dmg22";}
if($dmg>$def) {$jusu_kg_tr ="jūsų kovne galią yrą $def22";}

if($def>=$dmg){$jusu_kgs ="$dmg2";}
if($dmg>$def) {$jusu_kgs ="$def2";}

if ($id == "technical improvement"){
$kur = "Technikos tobulinimas";
include ("config.php");
echo"<b>Technikos tobulinimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/improve.png\" alt=\"prev\"/><br/>";
echo"Jūs galite ištobulinti savo nuosava techniką, kas karta patobulins techniką jūs įgausite procentą savo turimos kovinės galios.<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";

if (($skills[25] == "0") or ($skills[25] == "")){
 echo"<b>1-ojo. lygio technikos tobulinimas</b><br/>
Reikia 1 000 000 kovinės galios ir 100 lygio, $jusu_kg_tr ir $lygis lygis.";
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=improve\">Tobulinti</a><br/>"; } 

if ($skills[25] == "1"){ 
 echo"<b>2-ojo. lygio technikos tobulinimas</b><br/>
Reikia 10 000 000 kovinės galios ir 150 lygio, $jusu_kg_tr ir $lygis lygis.";
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=improve\">Tobulinti</a><br/>"; } 

if ($skills[25] == "2"){ 
 echo"<b>3-ojo. lygio technikos tobulinimas</b><br/>
Reikia 100 000 000 kovinės galios ir 170 lygio, $jusu_kg_tr ir $lygis lygis.";
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=improve\">Tobulinti</a><br/>"; } 

if ($skills[25] == "3"){ 
 echo"<b>4-ojo. lygio technikos tobulinimas</b><br/>
Reikia 1 000 000 000 kovinės galios ir 200 lygio, $jusu_kg_tr ir $lygis lygis.";
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=improve\">Tobulinti</a><br/>"; }
 
if ($skills[25] == "4"){ 
 echo"<b>5-ojo. lygio technikos tobulinimas</b><br/>
Reikia 100 000 000 000 kovinės galios ir 250 lygio, $jusu_kg_tr ir $lygis lygis.";
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=improve\">Tobulinti</a><br/>"; } 
 
 if ($skills[25] == "5"){ 
 echo"<b>6-ojo. lygio technikos tobulinimas</b><br/>
Reikia 1 000 000 000 000 kovinės galios ir 300 lygio, $jusu_kg_tr ir $lygis lygis.";
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=improve\">Tobulinti</a><br/>"; } 

 if ($skills[25] == "6"){ 
 echo"<b>7-ojo. lygio technikos tobulinimas</b><br/>
Reikia 100 000 000 000 000 kovinės galios ir 350 lygio, $jusu_kg_tr ir $lygis lygis.";
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=improve\">Tobulinti</a><br/>"; } 

 if ($skills[25] == "7"){ 
 echo"<b>8-ojo. lygio technikos tobulinimas</b><br/>
Reikia 1 000 000 000 000 000 kovinės galios ir 400 lygio, $jusu_kg_tr ir $lygis lygis.";
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=improve\">Tobulinti</a><br/>"; } 

 if ($skills[25] == "8"){ 
 echo"<b>9-ojo. lygio technikos tobulinimas</b><br/>
Reikia 10 000 000 000 000 000 kovinės galios ir 450 lygio, $jusu_kg_tr ir $lygis lygis.";
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=improve\">Tobulinti</a><br/>"; } 

 if ($skills[25] == "9"){ 
 echo"<b>10-ojo. lygio technikos tobulinimas</b><br/>
Reikia 1 000 000 000 000 000 000 kovinės galios ir 500 lygio, $jusu_kg_tr ir $lygis lygis.";
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=improve\">Tobulinti</a><br/>"; } 

echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "improve"){
$kur = "Technikos tobulinimas";
include ("config.php");

if ($m3[$ka-1] == "+"){ $zin = "<b>Jūs jau Patobulines.</b>"; }
if ($zin == ""){ 
include("icludekitainf/nuskait.php"); 

if($skills[25]=="0"){ $zin = "Sekmingai ivygdita"; 
include("icludekitainf/skill.php");
}

if($skills[25] == "9"){ 
if ($jusu_kgs  <  1000000000000000000  or $lygis  < 500) { $zin = "Jūsų lygis arba kovinė galią per maža."; } else {
$zin = "<b>Technika sėkmingai patobulinta!</b><br/>
Jūsų kovine galia padidejo 70%.<br/>";
$inf[3] = $inf[3]*1.7; 
$inf[16] = $inf[16]*1.67; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$skills[25] = $skills[25] + 1;
include("icludekitainf/skill.php");
}}

if($skills[25] == "8"){ 
if ($jusu_kgs  <  10000000000000000  or $lygis  < 450) { $zin = "Jūsų lygis arba kovinė galią per maža."; } else {
$zin = "<b>Technika sėkmingai patobulinta!</b><br/>
Jūsų kovine galia padidejo 60%.<br/>";
$inf[3] = $inf[3]*1.6; 
$inf[16] = $inf[16]*1.6; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$skills[25] = $skills[25] + 1;
include("icludekitainf/skill.php");
}}

if($skills[25] == "7"){ 
if ($jusu_kgs  < 1000000000000000  or $lygis  < 400) { $zin = "Jūsų lygis arba kovinė galią per maža."; } else {
$zin = "<b>Technika sėkmingai patobulinta!</b><br/>
Jūsų kovine galia padidejo 50%.<br/>";
$inf[3] = $inf[3]*1.5; 
$inf[16] = $inf[16]*1.5; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$skills[25] = $skills[25] + 1;
include("icludekitainf/skill.php");
}}

if($skills[25] == "6"){ 
if ($jusu_kgs  < 100000000000000  or $lygis  < 350) { $zin = "Jūsų lygis arba kovinė galią per maža."; } else {
$zin = "<b>Technika sėkmingai patobulinta!</b><br/>
Jūsų kovine galia padidejo 30%.<br/>";
$inf[3] = $inf[3]*1.3; 
$inf[16] = $inf[16]*1.3; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$skills[25] = $skills[25] + 1;
include("icludekitainf/skill.php");
}}

if($skills[25] == "5"){ 
if ($jusu_kgs  < 1000000000000 or $lygis  < 300) { $zin = "Jūsų lygis arba kovinė galią per maža."; } else {
$zin = "<b>Technika sėkmingai patobulinta!</b><br/>
Jūsų kovine galia padidejo 25%.<br/>";
$inf[3] = $inf[3]*1.25; 
$inf[16] = $inf[16]*1.25; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$skills[25] = $skills[25] + 1;
include("icludekitainf/skill.php");
}}

if($skills[25] == "4"){ 
if ($jusu_kgs  < 1000000000 or $lygis  < 250) { $zin = "Jūsų lygis arba kovinė galią per maža."; } else {
$zin = "<b>Technika sėkmingai patobulinta!</b><br/>
Jūsų kovine galia padidejo 20%.<br/>";
$inf[3] = $inf[3]*1.2; 
$inf[16] = $inf[16]*1.2; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$skills[25] = $skills[25] + 1;
include("icludekitainf/skill.php");
}}

if($skills[25] == "3"){ 
if ($jusu_kgs  < 100000000 or $lygis  < 200) { $zin = "Jūsų lygis arba kovinė galią per maža."; } else {
$zin = "<b>Technika sėkmingai patobulinta!</b><br/>
Jūsų kovine galia padidejo 15%.<br/>";
$inf[3] = $inf[3]*1.15; 
$inf[16] = $inf[16]*1.15; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$skills[25] = $skills[25] + 1;
include("icludekitainf/skill.php");
}}

if($skills[25] == "2"){ 
if ($jusu_kgs  < 100000000 or $lygis  < 170) { $zin = "Jūsų lygis arba kovinė galią per maža."; } else {
$zin = "<b>Technika sėkmingai patobulinta!</b><br/>
Jūsų kovine galia padidejo 10%.<br/>";
$inf[3] = $inf[3]*1.1; 
$inf[16] = $inf[16]*1.1; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$skills[25] = $skills[25] + 1;
include("icludekitainf/skill.php");
}}


if($skills[25] == "1"){ 
if ($jusu_kgs  < 10000000 or $lygis  < 150) { $zin = "Jūsų lygis arba kovinė galią per maža."; } else {
$zin = "<b>Technika sėkmingai patobulinta!</b><br/>
Jūsų kovine galia padidejo 5%.<br/>";
$inf[3] = $inf[3]*1.05; 
$inf[16] = $inf[16]*1.05; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$skills[25] = $skills[25] + 1;
include("icludekitainf/skill.php");
}}

if(($skills[25] == "0") or ($skills[0] == "")){ 
if ($jusu_kgs  < 1000000 or $lygis  < 100) { $zin = "Jūsų lygis arba kovinė galią per maža."; } else {
$zin = "<b>Technika sėkmingai patobulinta!</b><br/>
Jūsų kovine galia padidejo 2%.<br/>";
$inf[3] = $inf[3]*1.02; 
$inf[16] = $inf[16]*1.02; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$skills[25] = 1;
include("icludekitainf/skill.php");
}}

echo"<b>Technikos tobulinimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$zin
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

/*
///////////////////////////////////////////////Senos transformacijos
if ($id == "transformation"){
$kur = "Transformacija";
include ("config.php");
echo"<b>Transformacija</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/veikejai/$img-$skills[0].png\" alt=\"prev\"/><br/></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"Transformuotis gali kiekvienas, bet priklauso nuo veikėjo, kiek jis gali padaryti transformacijų.
Kad galėtumėte transformuotis jums reikia būti pasiekus tam tikra kovinės galios skaičių bei lygį.
Padarius transformaciją jūsų veikėjas pakeis pavidalą ir jūsų kovinė galia padidės, bei gausite XP.<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";

if (($skills[0] == "0") or ($skills[0] == "")){
if ($rase == "Bulma" or $rase == "Vegeta Gods SSJ3" or $rase == "Fusion Omega Cooler"   or $rase == "Evil Vegeta"or $rase == "Evil Goku" or $rase == "Vegeta Gods" or $rase == "Gold Oozaru" or $rase == "Goku Super Saiyan 5" or $rase == "Goku Super Saiyan 6" or $rase == "Goku Super Saiyan 7" or $rase == "Xicor Super Saiyan 6" or $rase == "Gotenks Super Saiyan 4" or $rase == "Baby Vegeta Super Saiyan 3"){
echo"<b>Jūs transformuotis negalite.</b>";}else{
 echo"<b>1-oji. transformacija:</b><br/>
Reikia 100 000 kovinės galios ir 100 lygio, $jusu_kg_tr ir $lygis lygis.";
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=transformations\">Transformuotis</a><br/>"; } }

if ($skills[0] == "1"){ 
if ($rase == "Piccolo" or $rase == "Android 17"){echo"<b>Jūs transformuotis nebegalite.</b>";}else{
echo"<b>2-oji. transformacija:</b><br/>
Reikia 500 000 kovinės galios ir 150 lygio, $jusu_kg_tr ir $lygis lygis.<br/>";
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=transformations\">Transformuotis</a><br/>"; } }

if ($skills[0] == "2"){ 
if ($rase == "Kid Goten" or $rase == "Kid Trunks" or $rase == "Cooler"){echo"<b>Jūs transformuotis nebegalite.</b>";}else{
echo"<b>3-oji. transformacija:</b><br/>
Reikia 1 000 000 kovinės galios ir 200 lygio, $jusu_kg_tr ir $lygis lygis.<br/>";
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=transformations\">Transformuotis</a><br/>"; } }

if ($skills[0] == "3"){ 
if ($rase == "Gotenks" or $rase == "Cell" or $rase == "Broly" or $rase == "Buu(Absorption Piccolo)" or $rase == "Buu(Absorption Gohan)" or $rase == "Buu(Absorption Gotenks)"){echo"<b>Jūs transformuotis nebegalite.</b>";}else{
echo"<b>4-oji. transformacija:</b><br/>
Reikia 5 000 000 kovinės galios ir 230 lygio, $jusu_kg_tr ir $lygis lygis.<br/>";
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=transformations\">Transformuotis</a><br/>"; } }
 
if ($skills[0] == "4"){ 
 if ($rase == "Raditz" or $rase == "Bardock" or $rase == "Vegito" or $rase == "Gohan" or $rase == "Buu" or $rase == "Future Trunks"){echo"<b>Jūs transformuotis nebegalite.</b>";}else{
echo"<b>5-oji. transformacija:</b><br/>
Reikia 25 000 000 kovinės galios ir 280 lygio, $jusu_kg_tr ir $lygis lygis.<br/>";
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=transformations\">Transformuotis</a><br/>"; } }
 
 if ($skills[0] == "5"){ 
 if ($rase == "Frieza" or $rase == "Vegeta" or $rase == "Vegito" or $rase == "Gohan" or $rase == "Buu" or $rase == "Future Trunks"){echo"<b>Jūs transformuotis nebegalite.</b>";}else{
echo"<b>6-oji. transformacija:</b><br/>
Reikia 100 000 000 kovinės galios ir 300 lygio, $jusu_kg_tr ir $lygis lygis.<br/>";
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=transformations\">Transformuotis</a><br/>"; } }

 if ($skills[0] == "6"){ 
 if ($rase == "Goku"){echo"<b>Jūs transformuotis nebegalite.</b>";}else{
echo"<b>7-oji. transformacija:</b><br/>
Reikia 200 000 000 kovinės galios ir 350 lygio, $jusu_kg_tr ir $lygis lygis.<br/>";
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=transformations\">Transformuotis</a><br/>"; } }

echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "transformations"){
$kur = "Transformacija";
include ("config.php");

if ($m3[$ka-1] == "+"){ $zin = "<b>Jūs jau transformavotes.</b>"; }
if ($zin == ""){ 
include("icludekitainf/nuskait.php"); 

if($skills[0]=="0"){ $zin = "Sekmingai ivygdita"; 
include("icludekitainf/skill.php");
}

if($skills[0] == "6"){ 
if ($rase == "Goku"){$zin = "Jūs transformuotis nebegalite."; } else {
if ($jusu_kgs  < 200000000 or $lygis  < 350) { $zin = "Jūsų lygis arba kovinė galią per maža."; } else {
$zin = "<b>Jūms pavyko transformuotis!</b><br/>
Jūsų kovine galia padidejo 100%, bei įgavote 10 000 000 XP ir 500 000 gyvybių lygio.<br/>";
$inf[3] = $inf[3]*1; 
$inf[16] = $inf[16]*1; 
$inf[5] = $inf[5]+1; 
$inf[19] = $inf[19]+1;  
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$skills[0] = $skills[0] + 1;
include("icludekitainf/skill.php");
}}}

if($skills[0] == "5"){ 
if ($rase == "Frieza" or $rase == "Vegeta"){
 $zin = "Jūs transformuotis nebegalite."; } else {
if ($jusu_kgs  < 100000000 or $lygis  < 300) { $zin = "Jūsų lygis arba kovinė galią per maža."; } else {
$zin = "<b>Jūms pavyko transformuotis!</b><br/>
Jūsų kovine galia padidejo 100%, bei įgavote 10 000 000 XP ir 500 000 gyvybių lygio.<br/>";
$inf[3] = $inf[3]*1.90; 
$inf[16] = $inf[16]*1.90; 
$inf[5] = $inf[5] + 500000; 
$inf[19] = $inf[19] + 10000000;  
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$skills[0] = $skills[0] + 1;
include("icludekitainf/skill.php");
}}}

if($skills[0] == "4"){ 
if ($rase == "Raditz" or $rase == "Bardock" or $rase == "Vegito" or $rase == "Gohan" or $rase == "Buu" or $rase == "Future Trunks"){
 $zin = "Jūs transformuotis nebegalite."; } else {
if ($jusu_kgs  < 25000000 or $lygis  < 280) { $zin = "Jūsų lygis arba kovinė galią per maža."; } else {
$zin = "<b>Jūms pavyko transformuotis!</b><br/>
Jūsų kovine galia padidejo 65%, bei įgavote 5 000 000 XP ir 200 000 gyvybių lygio.<br/>";
$inf[3] = $inf[3]*1.65; 
$inf[16] = $inf[16]*1.65; 
$inf[5] = $inf[5] + 200000; 
$inf[19] = $inf[19] + 5000000;  
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$skills[0] = $skills[0] + 1;
include("icludekitainf/skill.php");
}}}

if($skills[0] == "3"){ 
if ($rase == "Gotenks" or $rase == "Cell" or $rase == "Broly" or $rase == "Buu(Absorption Piccolo)" or $rase == "Buu(Absorption Gohan)" or $rase == "Buu(Absorption Gotenks)"){
 $zin = "Jūs transformuotis nebegalite."; } else {
if ($jusu_kgs  < 5000000 or $lygis  < 230) { $zin = "Jūsų lygis arba kovinė galią per maža."; } else {
$zin = "<b>Jūms pavyko transformuotis!</b><br/>
Jūsų kovine galia padidejo 50%, bei įgavote 1 000 000 XP ir 120 000 gyvybių lygio.<br/>";
$inf[3] = $inf[3]*1.50; 
$inf[16] = $inf[16]*1.50; 
$inf[5] = $inf[5] + 120000; 
$inf[19] = $inf[19] + 1000000; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$skills[0] = $skills[0] + 1;
include("icludekitainf/skill.php");
}}}

if($skills[0] == "2"){ 
if ($rase == "Kid Goten" or $rase == "Kid Trunks" or $rase == "Cooler"){
$zin = "<b>Jūs transformuotis negalite.</b>";}else{
if ($jusu_kgs  < 1000000 or $lygis  < 200) { $zin = "Jūsų lygis arba kovinė galią per maža."; } else {
$zin = "<b>Jūms pavyko transformuotis!</b><br/>
Jūsų kovine galia padidejo 40%, bei įgavote 500 000 XP ir 70 000 gyvybių lygio.<br/>";
$inf[3] = $inf[3]*1.40; 
$inf[16] = $inf[16]*1.40; 
$inf[5] = $inf[5] + 70000; 
$inf[19] = $inf[19] + 500000; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$skills[0] = $skills[0] + 1;
include("icludekitainf/skill.php");
}}}

if($skills[0] == "1"){ 
if ($rase == "Piccolo" or $rase == "Android 17"){
$zin = "<b>Jūs transformuotis negalite.</b>";}else{
if ($jusu_kgs  < 500000 or $lygis  < 150) { $zin = "Jūsų lygis arba kovinė galią per maža."; } else {
$zin = "<b>Jūms pavyko transformuotis!</b><br/>
Jūsų kovine galia padidejo 20%, bei įgavote 100 000 XP ir 30 000 gyvybių lygio.<br/>";
$inf[3] = $inf[3]*1.20; 
$inf[16] = $inf[16]*1.20; 
$inf[5] = $inf[5] + 30000; 
$inf[19] = $inf[19] + 100000; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$skills[0] = $skills[0] + 1;
include("icludekitainf/skill.php");
}}}

if(($skills[0] == "0") or ($skills[0] == "")){ 
if ($rase == "Bulma" or $rase == "Gold Oozaru" or  $rase == "Goku Gods" or $rase == "Goku Super Saiyan 5" or $rase == "Goku Super Saiyan 6" or $rase == "Goku Super Saiyan 7" or $rase == "Xicor Super Saiyan 6" or $rase == "Gotenks Super Saiyan 4" or $rase == "Baby Vegeta Super Saiyan 3"){
$zin = "<b>Jūs transformuotis negalite.</b>";}else{
if ($jusu_kgs  < 100000 or $lygis  < 100) { $zin = "Jūsų lygis arba kovinė galią per maža."; } else {
$zin = "<b>Jūms pavyko transformuotis!</b><br/>
Jūsų kovine galia padidejo 10%, bei įgavote 10 000 XP ir 5 000 gyvybių lygio.<br/>";
$inf[3] = $inf[3]*1.1; 
$inf[16] = $inf[16]*1.1; 
$inf[5] = $inf[5] + 5000; 
$inf[19] = $inf[19] + 10000; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$skills[0] = 1;
include("icludekitainf/skill.php");
}}}

echo"<b>Transformacija</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$zin
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}
*/
if ($id == "techniques"){
$kur = "Technikos";
include ("config.php");
echo"<b>Technikos</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
echo "Norint įšmokti techniką ar ataką reikia turėti tam tikra lygį ir gausite tam tikra procenta jėgos ir gynybos.<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=technique&amp;ka=Ki blast\"><b>Ki blast</b></a> (10 lygis)<br/>
Technikos metu įgausite <b>1%</b> jėgos ir <b>3%</b> gynybos.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=technique&amp;ka=Kamehameha\"><b>Kamehameha</b></a> (25 lygis)<br/>
Technikos metu įgausite <b>2%</b> jėgos ir <b>6%</b> gynybos.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=technique&amp;ka=Solar flare\"><b>Solar flare</b></a> (40 lygis)<br/>
Technikos metu įgausite <b>3%</b> jėgos ir <b>9%</b> gynybos.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=technique&amp;ka=Special beam cannon\"><b>Special beam cannon</b></a> (60 lygis)<br/>
Technikos metu įgausite <b>4%</b> jėgos ir <b>12%</b> gynybos.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=technique&amp;ka=Galick Gun\"><b>Galick Gun</b></a> (75 lygis)<br/>
Technikos metu įgausite <b>5%</b> jėgos ir <b>15%</b> gynybos.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=technique&amp;ka=Death beam\"><b>Death beam</b></a> (90 lygis)<br/>
Technikos metu įgausite <b>6%</b> jėgos ir <b>18%</b> gynybos.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=technique&amp;ka=Destructo disk \"><b>Destructo disk </b></a> (120 lygis)<br/>
Technikos metu įgausite <b>7%</b> jėgos ir <b>21%</b> gynybos.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=technique&amp;ka=Solar kamehameha\"><b>Solar kamehameha</b></a> (150 lygis)<br/>
Technikos metu įgausite <b>8%</b> jėgos ir <b>24%</b> gynybos.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=technique&amp;ka=Burning Attack\"><b>Burning Attack</b></a> (200 lygis)<br/>
Technikos metu įgausite <b>9%</b> jėgos ir <b>36%</b> gynybos.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=technique&amp;ka=Final Flash\"><b>Final Flash</b></a> (260 lygis)<br/>
Technikos metu įgausite <b>10%</b> jėgos ir <b>30%</b> gynybos.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=technique&amp;ka=Big Bang Kamehameha\"><b>Big Bang Kamehameha</b></a> (320 lygis)<br/>
Technikos metu įgausite <b>15%</b> jėgos ir <b>45%</b> gynybos.<br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "technique"){
$kur = "Technikos";
include ("config.php");
if ($ka == "Ki blast"){
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
if ($skills[2] == "+"){ echo "Jūs jau esate įšmokes pasirinkta techniką.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{

if ($lygis < 10){ echo "Jūs lygis per mažas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Techniką išmoktą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$jega = $jega * 1.01;
		$gynyba = $gynyba * 1.03;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
 $skills[2] = "+";
include("icludekitainf/skill.php");
}}}

if ($ka == "Kamehameha"){
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
if ($skills[3] == "+"){ echo "Jūs jau esate įšmokes pasirinkta techniką.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{

if ($lygis < 25){ echo "Jūs lygis per mažas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Techniką išmoktą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$jega = $jega * 1.02;
		$gynyba = $gynyba * 1.06;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
 $skills[3] = "+";
include("icludekitainf/skill.php");
}}}

if ($ka == "Solar flare"){
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
if ($skills[4] == "+"){ echo "Jūs jau esate įšmokes pasirinkta techniką.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($lygis < 40){ echo "Jūs lygis per mažas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Techniką išmoktą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$jega = $jega * 1.03;
		$gynyba = $gynyba * 1.09;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
 $skills[4] = "+";
include("icludekitainf/skill.php");
}}}

if ($ka == "Special beam cannon"){
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
if ($skills[5] == "+"){ echo "Jūs jau esate įšmokes pasirinkta techniką.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($lygis < 60){ echo "Jūs lygis per mažas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Techniką išmoktą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$jega = $jega * 1.04;
		$gynyba = $gynyba * 1.12;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
 $skills[5] = "+";
include("icludekitainf/skill.php");
}}}

if ($ka == "Galick Gun"){
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
if ($skills[6] == "+"){ echo "Jūs jau esate įšmokes pasirinkta techniką.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($lygis < 75){ echo "Jūs lygis per mažas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Techniką išmoktą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$jega = $jega * 1.05;
		$gynyba = $gynyba * 1.15;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
 $skills[6] = "+";
include("icludekitainf/skill.php");
}}}

if ($ka == "Death beam"){
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
if ($skills[7] == "+"){ echo "Jūs jau esate įšmokes pasirinkta techniką.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($lygis < 90){ echo "Jūs lygis per mažas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Techniką išmoktą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$jega = $jega * 1.06;
		$gynyba = $gynyba * 1.18;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
 $skills[7] = "+";
include("icludekitainf/skill.php");
}}}

if ($ka == "Destructo disk"){
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
if ($skills[8] == "+"){ echo "Jūs jau esate įšmokes pasirinkta techniką.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($lygis < 120){ echo "Jūs lygis per mažas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Techniką išmoktą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$jega = $jega * 1.07;
		$gynyba = $gynyba * 1.21;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
 $skills[8] = "+";
include("icludekitainf/skill.php");
}}}

if ($ka == "Solar kamehameha"){
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
if ($skills[9] == "+"){ echo "Jūs jau esate įšmokes pasirinkta techniką.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($lygis < 150){ echo "Jūs lygis per mažas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Techniką išmoktą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$jega = $jega * 1.08;
		$gynyba = $gynyba * 1.24;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
 $skills[9] = "+";
include("icludekitainf/skill.php");
}}}

if ($ka == "Burning Attack"){
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
if ($skills[10] == "+"){ echo "Jūs jau esate įšmokes pasirinkta techniką.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>

</div><div class=\"foot\">$bottom</div></div>";}else{
if ($lygis < 200){ echo "Jūs lygis per mažas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
<a href=\"skill.php?id=\">Atgal</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Techniką išmoktą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$jega = $jega * 1.09;
		$gynyba = $gynyba * 1.36;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
 $skills[10] = "+";
include("icludekitainf/skill.php");
}}}

if ($ka == "Final Flash"){
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
if ($skills[11] == "+"){ echo "Jūs jau esate įšmokes pasirinkta techniką.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($lygis < 260){ echo "Jūs lygis per mažas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Techniką išmoktą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$jega = $jega * 1.1;
		$gynyba = $gynyba * 1.3;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
 $skills[11] = "+";
include("icludekitainf/skill.php");
}}}

if ($ka == "Big Bang Kamehameha"){
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
if ($skills[12] == "+"){ echo "Jūs jau esate įšmokes pasirinkta techniką.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if ($lygis < 320){ echo "Jūs lygis per mažas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Techniką išmoktą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$jega = $jega * 1.15;
		$gynyba = $gynyba * 1.45;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
 $skills[12] = "+";
include("icludekitainf/skill.php");
}}}
}
if ($id == "Auros"){echo"<b>Auros</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=aura&amp;ka=Human aura\"><b>General aura</b></a><br/>
Atsidrius aurą įgausite <b>5000</b> jegos<br/>
Atidarytį galimą nuo 20 lygio.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=aura&amp;ka=Namek aura\"><b>White and Purple Aura</b></a><br/>
Atsidrius aurą įgausite <b>10 000</b> gynybos<br/>
Atidarytį galimą nuo 50 lygio.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=aura&amp;ka=Frieza aura\"><b>Pink Aura</b></a><br/>
Atsidrius aurą įgausite <b>7 000</b> gyvybiu lygio<br/>
Atidarytį galimą nuo 100 lygio.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=aura&amp;ka=Majin aura\"><b>Kaio-Ken Aura</b></a><br/>
Atsidrius aurą įgausite <b>2 000</b> XP<br/>
Atidarytį galimą nuo 170 lygio.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=aura&amp;ka=Kaioken aura\"><b>Mystic Aura</b></a><br/>
Atsidrius aurą įgausite <b>10 000</b> jegos <b>2 000</b> gynybos.<br/>
Atidarytį galimą nuo 220 lygio.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=aura&amp;ka=Cells Dead Soul Aura\"><b>Cell's Dead Soul Aura</b></a><br/>
Atsidrius aurą įgausite <b>20 000</b> jegos, <b>30 000</b> gynybos ir <b>10 000</b> gyvybiu lygio<br/>
Atidarytį galimą nuo 280 lygio.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=aura&amp;ka=Super Saiyajin Aura\"><b>Super Saiya-jin Aura</b></a><br/>
Atsidrius aurą įgausite <b>100 000</b> jegos, <b>250 000</b> gynybos ir <b>50 000</b> gyvybiu lygio<br/>
Atidarytį galimą nuo 320 lygio.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=aura&amp;ka=Powering Super Saiyajin Aura\"><b>Powering Super Saiya-jin Aura</b></a><br/>
Atsidrius aurą įgausite <b>500 000</b> jegos, <b>800 000</b> gynybos ir <b>100 000</b> gyvybiu lygio<br/>
Atidarytį galimą nuo 350 lygio.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"skill.php?id=aura&amp;ka=Super Saiyajin Attack Aura\"><b>Super Saiya-jin Attack Aura</b></a><br/>
Atsidrius aurą įgausite <b>2 000 000</b> jegos, <b>3 000 000</b> gynybos ir <b>300 000</b> gyvybiu lygio<br/>
Atidarytį galimą nuo 380 lygio.<br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "aura"){
if ($ka == "Human aura"){
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
if ($skills[13] == "+"){ echo "Jūs jau esate atidares pasirinkta aurą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{

if ($lygis < 20){ echo "Jūs lygis per mažas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Aurą atidarytą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$jega = $jega + 5000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
 $skills[13] = "+";
include("icludekitainf/skill.php");
}}}

if ($ka == "Namek aura"){
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
if ($skills[14] == "+"){ echo "Jūs jau esate atidares pasirinkta aurą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{

if ($lygis < 50){ echo "Jūs lygis per mažas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Aurą atidarytą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$gynyba = $gynyba + 10000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
 $skills[14] = "+";
include("icludekitainf/skill.php");
}}}

if ($ka == "Frieza aura"){
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
if ($skills[15] == "+"){ echo "Jūs jau esate atidares pasirinkta aurą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{

if ($lygis < 100){ echo "Jūs lygis per mažas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Aurą atidarytą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$gyvybess = $gyvybess + 7000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
 $skills[15] = "+";
include("icludekitainf/skill.php");
}}}

if ($ka == "Majin aura"){
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
if ($skills[16] == "+"){ echo "Jūs jau esate atidares pasirinkta aurą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{

if ($lygis < 170){ echo "Jūs lygis per mažas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Aurą atidarytą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$exp = $exp + 2000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
 $skills[16] = "+";
include("icludekitainf/skill.php");
}}}

if ($ka == "Kaioken aura"){
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
if ($skills[17] == "+"){ echo "Jūs jau esate atidares pasirinkta aurą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{

if ($lygis < 220){ echo "Jūs lygis per mažas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Aurą atidarytą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$gynyba = $gynyba + 20000;
		$jega = $jega + 10000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
 $skills[17] = "+";
include("icludekitainf/skill.php");
}}}

if ($ka == "Cells Dead Soul Aura"){
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
if ($skills[18] == "+"){ echo "Jūs jau esate atidares pasirinkta aurą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{

if ($lygis < 280){ echo "Jūs lygis per mažas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Aurą atidarytą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$gynyba = $gynyba + 30000;
		$jega = $jega + 20000;
		$gyvybess = $gyvybess + 10000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
 $skills[18] = "+";
include("icludekitainf/skill.php");
}}}

if ($ka == "Super Saiyajin Aura"){
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
if ($skills[19] == "+"){ echo "Jūs jau esate atidares pasirinkta aurą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{

if ($lygis < 320){ echo "Jūs lygis per mažas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Aurą atidarytą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$gynyba = $gynyba + 250000;
		$jega = $jega + 100000;
		$gyvybess = $gyvybess + 50000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
 $skills[19] = "+";
include("icludekitainf/skill.php");
}}}

if ($ka == "Powering Super Saiyajin Aura"){
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
if ($skills[20] == "+"){ echo "Jūs jau esate atidares pasirinkta aurą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{

if ($lygis < 350){ echo "Jūs lygis per mažas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Aurą atidarytą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$gynyba = $gynyba + 800000;
		$jega = $jega + 500000;
		$gyvybess = $gyvybess + 100000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
 $skills[20] = "+";
include("icludekitainf/skill.php");
}}}

if ($ka == "Super Saiyajin Attack Aura"){
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
if ($skills[21] == "+"){ echo "Jūs jau esate atidares pasirinkta aurą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{

if ($lygis < 380){ echo "Jūs lygis per mažas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo "Aurą atidarytą.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"skill.php?id=Auros\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
		$gynyba = $gynyba + 3000000;
		$jega = $jega + 2000000;
		$gyvybess = $gyvybess + 300000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
 $skills[21] = "+";
include("icludekitainf/skill.php");
}}}
}





/*
$skills[0]= Transformacijos
$skills[1]= Fusion Dance sokis
$skills[2] - $skills[12] = Technikos
$skills[13] - $skills[21] = Auros
$skills[22] - $skills[23] = energija
$skills[24] = energija laikas
*/
print'</card></wml>';
?>