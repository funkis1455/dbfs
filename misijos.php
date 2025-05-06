<?php
$kur = "Užduotis";
include ("config.php");
include_once("icludekitainf/start.php");

if ($id == ""){ 
echo"<b>Užduotys</b></b></div><div class=\"meniu\" style=\"text-align: left;\">
$ico <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=master_roshi_misija\">Master Roshi užduotis</a> ";if ($mm[15] == "+"){echo" <img src=\"imgs/ok.gif\" alt=\"*\"/> ";}else{ echo"<img src=\"imgs/no.gif\" alt=\"*\"/>";} echo"<br/>
$ico <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=tuffles_misija\">Tuffles užduotis</a> ";if ($mm[16] == "+"){echo" <img src=\"imgs/ok.gif\" alt=\"*\"/> ";}else{ echo"<img src=\"imgs/no.gif\" alt=\"*\"/>";} echo"<br/>
$ico <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=babidi_misija\">Babidi užduotis</a> ";if ($mm[18] == "+"){echo" <img src=\"imgs/ok.gif\" alt=\"*\"/> ";}else{ echo"<img src=\"imgs/no.gif\" alt=\"*\"/>";} echo"<br/>
$ico <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=drgero_misija\">Dr.Gero užduotis</a> ";if ($mm[19] == "+"){echo" <img src=\"imgs/ok.gif\" alt=\"*\"/> ";}else{ echo"<img src=\"imgs/no.gif\" alt=\"*\"/>";} echo"<br/>
$ico <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=bulma_misija\">Bulma užduotis</a> ";if ($mm[20] == "+"){echo" <img src=\"imgs/ok.gif\" alt=\"*\"/> ";}else{ echo"<img src=\"imgs/no.gif\" alt=\"*\"/>";} echo"<br/>
$ico <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=vegeta_misija\">Vegetas pride užduotis</a> ";if ($mm[21] == "+"){echo" <img src=\"imgs/ok.gif\" alt=\"*\"/> ";}else{ echo"<img src=\"imgs/no.gif\" alt=\"*\"/>";} echo"<br/>
$ico <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=heaven_misija\">Heaven užduotis</a> ";if ($mm[22] == "+"){echo" <img src=\"imgs/ok.gif\" alt=\"*\"/> ";}else{ echo"<img src=\"imgs/no.gif\" alt=\"*\"/>";} echo"<br/>
$ico <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=hell_misija\">Hell užduotis</a> ";if ($mm[23] == "+"){echo" <img src=\"imgs/ok.gif\" alt=\"*\"/> ";}else{ echo"<img src=\"imgs/no.gif\" alt=\"*\"/>";} echo"<br/>
$ico <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=ginyu_misija\">Ginyu užduotis</a> ";if ($mm[24] == "+"){echo" <img src=\"imgs/ok.gif\" alt=\"*\"/> ";}else{ echo"<img src=\"imgs/no.gif\" alt=\"*\"/>";} echo"<br/>
$ico <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=namek_misija\">Namek užduotis</a> ";if ($mm[25] == "+"){echo" <img src=\"imgs/ok.gif\" alt=\"*\"/> ";}else{ echo"<img src=\"imgs/no.gif\" alt=\"*\"/>";} echo"<br/>
$ico <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=kibito_kai_misija\">Kibito Kai užduotis</a> ";if ($mm[26] == "+"){echo" <img src=\"imgs/ok.gif\" alt=\"*\"/> ";}else{ echo"<img src=\"imgs/no.gif\" alt=\"*\"/>";} echo"<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=misijos\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";}

if ($id == "master_roshi_misija"){ 
echo"<b>Master Roshi užduotis</b></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/masterroshi.png' ALT='*'><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Master Roshi reikia 50 Soul Stone.<br/>
<b>Atneškite 50 Soul Stone ir gausite 5000 jėgos.</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
$ico <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=master_roshi_misija2\">Atnešti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";}

if ($id == "master_roshi_misija2"){ 
if ($mm[15] == "+"){ echo "Šį misiją jau įvykditą
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>
";}else{
if ($dari[0] < 0){ echo "Jūs neturite visko ko reikia šitai misijai.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";}else{
echo "Misiją įvykdita, jūs gavote 5000 jėgos.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>
</div>";
		$jega = $jega + 5000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[0] = $dari[0] - 50;
$mm[15]= "+";
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}}

if ($id == "tuffles_misija"){ 
echo"<b>Tuffles užduotis</b></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/zona5.png' ALT='*'><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Jau prieš daug metu sajanai buvo užpuolė tufflu planeta kuri buvo silpna fiziškai, bet protiškai buvo labai pažangi. Sajanai pavogė iš jų dauguma technologiju ir juos sunaikino.<br/>
Tačiau dar yra gyvu Tufflu kurie nori keršto.<br/><b> Atneškite 150 saiyan tail ir jie jums atsilygins 200 000 000 pinigų.</b>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
$ico  <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=tuffles_misija2\">Atnešti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";}

if ($id == "tuffles_misija2"){ 
if ($mm[16] == "+"){ echo "Šį misiją jau įvykditą</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>
";}else{
if ($dari[1] < 150){ echo "Jūs neturite visko ko reikia šitai misijai.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>
";}else{
echo "Misiją įvykdita, jūs gavote 200 000 000 pinigų.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>
";
		$pinigai = $pinigai + 200000000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[1] = $dari[1] - 150;
$mm[16]= "+";
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}}

if ($id == "babidi_misija"){ 
echo"<b>Babidi užduotis</b></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/majin_babidi.png' ALT='*'><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Babidis nori prikeltis siaubuną buu, bet jam dar truksta Majin scroll<br/>
<b> Atneškite 150 Majin scroll ir jis jums atsilygins 10000 jėgos ir 20000 gynybos.</b>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
$ico  <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=babidi_misija2\">Atnešti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";}

if ($id == "babidi_misija2"){ 
if ($mm[18] == "+"){ echo "Šį misiją jau įvykditą</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>
";}else{
if ($dari[6] < 150){ echo "Jūs neturite visko ko reikia šitai misijai.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";}else{
echo "Misiją įvykdita, jūs gavote 1000 jėgos ir 2000 gynybos.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";
		$jega = $jega + 10000;
	$gynyba = $gynyba + 20000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[6] = $dari[6] - 150;
$mm[18]= "+";
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}}

if ($id == "drgero_misija"){ 
echo"<b>Dr.Gero užduotis</b></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/sagos/42.jpg' ALT='*'><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Doctor Gero kuria androidus ir jau turi pilna kurimo plana. Tačiau Doctor Gero prašo pagalbos už tam tikra atlygi.<br/>
<b> Atneškite 260 microschem. Doctor Gero suteiks 30000 jėgos.</b>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
$ico  <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=drgero_misija2\">Atnešti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";}

if ($id == "drgero_misija2"){ 
if ($mm[19] == "+"){ echo "Šį misiją jau įvykditą</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>
";}else{
if ($dari[5] < 260){ echo "Jūs neturite visko ko reikia šitai misijai.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>
";}else{
echo "Misiją įvykdita, jūs gavote 30000 jėgos.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";
		$jega = $jega + 30000;
	$gynyba = $gynyba + 3;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[5] = $dari[5] - 260;
$mm[19]= "+";
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}}

if ($id == "bulma_misija"){ 
echo"<b>Bulma užduotis</b></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/veikejai/bulma-0.png' ALT='*'><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Bulma konstruoja daug įrenginių ir jai pritrūko microshemų.<br/>
<b> Atneškite 100 microschem. Gausitė 50 000 000 pinigų ir 5000 xp.</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
$ico  <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=bulma_misija2\">Atnešti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";}

if ($id == "bulma_misija2"){ 
if ($mm[20] == "+"){ echo "Šį misiją jau įvykditą.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>
";}else{
if ($dari[5] < 100){ echo "Jūs neturite visko ko reikia šitai misijai.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>
";}else{
echo "Misiją įvykdita, jūs gavote 50 000 000 pinigų ir 5000 xp.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";
		$exp = $exp + 5000;
	$pinigai = $pinigai + 50000000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[5] = $dari[5] - 100;
$mm[20]= "+";
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}}

if ($id == "vegeta_misija"){ 
echo"<b>Vegetas pride užduotis</b></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/sagos/66.jpg' ALT='*'><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Atneškite majin scroll, kad nulaužtumėte Vegetos majin scroll burta.<br/>
<b>Atneškite 250 majin scroll. Gausite 100 000 000 pinigų ir 15 000 gynybos.</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
$ico  <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=vegetas_misija2\">Atnešti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";}

if ($id == "vegetas_misija2"){ 
if ($mm[21] == "+"){ echo "Šį misiją jau įvykditą</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>
";}else{
if ($dari[6] < 250){ echo "<div class=\"meniu\">Jūs neturite visko ko reikia šitai misijai.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";}else{
echo "<div class=\"meniu\">Misiją įvykdita, jūs gavote 100 000 000 pinigų ir 15 000 gynybos.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";
	$gynyba = $gynyba + 15000;
	$pinigai = $pinigai + 100000000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[6] = $dari[6] - 250;
$mm[21]= "+";
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}}

if ($id == "heaven_misija"){ 
echo"<b>Heaven užduotis</b></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/emma.png' ALT='*'><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Dangaus gyventojams reikia, kad atneštumėte soul stone.<br/>
<b>Atneškite 120 soul stone ir gausite 6 000 000 pinigų ir 8 500 gynybos.</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
$ico  <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=heaven_misija2\">Atnešti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";}

if ($id == "heaven_misija2"){ 
if ($mm[22] == "+"){ echo "<div class=\"meniu\">Šį misiją jau įvykditą</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>
";}else{
if ($dari[0] < 120){ echo "<div class=\"meniu\">Jūs neturite visko ko reikia šitai misijai</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>
";}else{
echo "<div class=\"meniu\">Misiją įvykdita, jūs gavote 6 000 000 pinigų ir 8 500 gynybos.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";
	$gynyba = $gynyba + 8500;
	$pinigai = $pinigai + 6000000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[0] = $dari[0] - 120;
$mm[22]= "+";
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}}

if ($id == "hell_misija"){ 
echo"<b>Hell užduotis</b></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/Mez.png' ALT='*'><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Pragaro sargybiniams prireikė magic ball nežinomams tikslams.<br/>
<b>Atneškite 300 magic ball. Gausite 50 000 jegos.</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
$ico   <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=hell_misija2\">Atnešti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";}

if ($id == "hell_misija2"){ 
if ($mm[23] == "+"){ echo "Šį misiją jau įvykditą</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>
";}else{
if ($dari[7] < 300){ echo "Jūs neturite visko ko reikia šitai misijai.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>
";}else{
echo "Misiją įvykdita, jūs gavote 50 000 jegos.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";
	$jega = $jega + 50000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[7] = $dari[7] - 300;
$mm[23]= "+";
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}}

if ($id == "ginyu_misija"){ 
echo"<b>Ginyu užduotis</b></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/vietoviu/ginyuforce.png' ALT='*'><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Ginyu Force jūsų prašo atnešti ginyu material.<br/>
<b>Atneškite 100 ginyu material. Gausite 8000 gyvybės.</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
$ico  <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=ginyu_misija2\">Atnešti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";}

if ($id == "ginyu_misija2"){ 
if ($mm[24] == "+"){ echo "Šį misiją jau įvykditą</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>
";}else{
if ($dari[2] < 100){ echo "Jūs neturite visko ko reikia šitai misijai.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>
";}else{
echo "Misiją įvykdita, jūs gavote 8 000 gyvybes.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";
	$gyvybess = $gyvybess + 8000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[2] = $dari[2] - 100;
$mm[24]= "+";
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}}

if ($id == "namek_misija"){ 
echo"<b>Namek užduotis</b></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/vietoviu/senolis.png' ALT='*'><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Namekams prireikė ginyu crystalu.<br/>
<b>Atneškite 250 ginyu crystal. Gausite 200 000 000 pinigų ir 6 500 gynybos.</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
$ico  <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=namek_misija2\">Atnešti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";}

if ($id == "namek_misija2"){ 
if ($mm[25] == "+"){ echo "<div class=\"meniu\">Šį misiją jau įvykditą</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>
";}else{
if ($dari[3] < 250){ echo "<div class=\"meniu\">Jūs neturite visko ko reikia šitai misijai.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>
";}else{
echo "<div class=\"meniu\">Misiją įvykdita, jūs gavote 200 000 000 pinigų ir 6 500 gynybos</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";
	$gynyba = $gynyba + 6500;
	$pinigai = $pinigai + 200000000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[3] = $dari[3] - 250;
$mm[25]= "+";
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}}

if ($id == "kibito_kai_misija"){ 
echo"<b>Kibitas Kai užduotis</b></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/kibito-3.png' ALT='*'><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Kibitas Kai prašo taves souol stone.<br/>
<b>Atneškite 600 soul stone. Gausite 60 000 gynybos ir 20 000 gyvybės.</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
$ico  <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=kibito_kai_misija2\">Atnešti</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";}

if ($id == "kibito_kai_misija2"){ 
if ($mm[26] == "+"){ echo "<div class=\"meniu\">Šį misiją jau įvykditą</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>
";}else{
if ($dari[0] < 600){ echo "<div class=\"meniu\">Jūs neturite visko ko reikia šitai misijai.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>
";}else{
echo "<div class=\"meniu\">Misiją įvykdita, jūs gavote 60 000 gynybos ir 20 000 gyvybės.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"misijos.php?nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a>";
	$gynyba = $gynyba + 60000;
	$gyvybess = $gyvybess + 20000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$dari[0] = $dari[0] - 600;
$mm[26]= "+";
include("icludekitainf/mm.php");
include("icludekitainf/iras2.php");
}}}
echo"</div><div class=\"foot\">$bottom</div></div>";
?>
</body></html>