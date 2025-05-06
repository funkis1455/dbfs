
<?php
$kur = "Žaidimo sąskaitą";
include ("config.php");
include_once("icludekitainf/start.php");
$id = @ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['id']);
$vs = @ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['vs']);
$kas = @ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['kas']);
$page = @ereg_replace("[^0-9]","",$_GET['page']);
$sk = @ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['sk']);
$ka = @ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['ka']);
$kam = @ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['kam']);
$laiks = @ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['laiks']);
$kd = @ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['kd']);
$te = @ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['te']);
$kj = @ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['kj']);
$da = @ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['da']);
$kan = @ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['kan']);
$mo = @ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['mo']);


if ($id == ""){
	
$jusu_saskaitoje = @number_format($litai, 2, ',', ' ');
echo "<b>JŪSŲ SĄSKAITA</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Jus galite kaupti pinigus žaidimo sąskaitoje, o po to juos išleisti, kreditų, kovinės galios didinimui, bei nusipirkti unikalų veikėją ar užsisakyti didesnį gavimą iš kovų.
</div><div class=\"meniu\" style=\"text-align: left;\">";
echo"[&#8226;] Jūsų sąskaitoje: <b>$jusu_saskaitoje LTL</b> <br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=add&amp;\">Papildyti sąskaita</a> <br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=send&amp;\">Sąskaitos perlaida</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>SĄSKAITOS NAUDOJIMAS:</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=credit_purchase\">Kreditų pirkimas</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=money_purchase\">Pinigų pirkimas</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=keisti_veikeja\">Veikėjo keitimas</a> <br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=characters\">Unikalus veikėjai</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=daiktas&amp;da=kinto\">Kinto debesį (+20% gynybos)</a> [<b>20 Lt</b>]<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=daiktas&amp;da=potaras\">Potaro auskarus (+50% gynybos)</a> [<b>50 Lt</b>]<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=daiktas&amp;da=matuoklis\">Jėgos matuoklį (+50% jėgos)</a> [<b>50 Lt</b>]<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=moderatoriai\">Moderatoriu statusai</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=kovine\">Kovines galios pirkimas</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=times\">Kovos laiko trumpinimas</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=ban&amp;\">Nuimti 1 gauta baną</a> [<b>2LTL</b>]<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=lost_clear&amp;\">Anuliuoti pralaimėtas kovas</a> [<b>2LTL</b>]<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"account.php?id=daugiau&amp;da=5\"><b>x2</b> daugiau pinigų (dienai)</a> [<b>5 Lt</b>]<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"account.php?id=daugiau&amp;da=6\"><b>x3</b> daugiau pinigų iš kovų (dienai)</a> [<b>10 Lt</b>]<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"account.php?id=daugiau&amp;da=7\"><b>x3</b> daugiau exp iš kovų (dienai)</a> [<b>5 Lt</b>]<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;]  <a href=\"account.php?id=daugiau&amp;da=8\"><b>x5</b> daugiau exp iš kovų (dienai)</a> [<b>10 Lt</b>]<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=daugiau&amp;da=9\"><b>x3</b> didesnis nukaunamumas kovų (dienai)</a> [<b>5 Lt</b>]<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=daugiau&amp;da=10\"><b>x5</b> didesnis nukaunamumas kovų (dienai)</a> [<b>10 Lt</b>]<br/>
";
}
if ($id == "daiktas"){
if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}

if ($da == "kinto"){
if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
if ($litai < 20){ echo "Nepakankamas sąskaitos likutis.";}else{
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 20);
        @fclose($fp);
 $dari[45] = $dari[45]+1;
include("icludekitainf/iras2.php");
echo"Jūs sėkmingai nusipirkote kinto debesį dabar jį galite užsideti ant kūno ir taip gausite 20% gynybos<br/>";}}

if ($da == "matuoklis"){
if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
if ($litai < 50){ echo "Nepakankamas sąskaitos likutis.";}else{
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 50);
        @fclose($fp);
 $dari[47] = $dari[47]+1;
include("icludekitainf/iras2.php");
echo"Jūs sėkmingai nusipirkote jegos matuoklį dabar jį galite užsideti ant kūno ir taip gausite 50% jėgos<br/>";}}

if ($da == "radaras"){
if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
if ($litai < 3){ echo "Nepakankamas sąskaitos likutis.";}else{
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 3);
        @fclose($fp);
 $dari[19] = $dari[19]+1;
include("icludekitainf/iras2.php");
echo"Jūs sėkmingai nusipirkote drakono rutulių radarą dabar jį galite užsideti ant kūno ieškoti drakono rutulių<br/>";}}

if ($da == "potaras"){
if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
if ($litai < 50){ echo "Nepakankamas sąskaitos likutis.";}else{
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 50);
        @fclose($fp);
 $dari[46] = $dari[46]+1;
include("icludekitainf/iras2.php");
echo"Jūs sėkmingai nusipirkote potaro auskarus dabar jį galite užsideti ant kūno ir taip gausite 50% gynybos<br/>";}}
}
if ($id == "daugiau"){
if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
if ($da == "2"){
if ($litai < 3){ echo "Nepakankamas sąskaitos likutis!";}else{
$fp = @fopen("account/$nick.txt", "w");
@fwrite($fp, $litai - 3);
@fclose($fp);
$tim = time() + 60*60*24;
@file_put_contents("paslaugos/padusimai/$nick.txt", "4|$tim|");
@chmod("paslaugos/padusimai/$nick.txt",0777);
echo"Nupirkta!";}}

if ($da == "3"){
if ($litai < 7){ echo "Nepakankamas sąskaitos likutis!";}else{
$fp = @fopen("account/$nick.txt", "w");
@fwrite($fp, $litai - 7);
@fclose($fp);
$tim = time() + 60*60*24;
@file_put_contents("paslaugos/padusimai/$nick.txt", "3|$tim|");
@chmod("paslaugos/padusimai/$nick.txt",0777);
echo"Nupirkta!";}}

if ($da == "4"){
if ($litai < 15){ echo "Nepakankamas sąskaitos likutis!";}else{
$fp = @fopen("account/$nick.txt", "w");
@fwrite($fp, $litai - 15);
@fclose($fp);
$tim = time() + 60*60*24;
@file_put_contents("paslaugos/padusimai/$nick.txt", "2|$tim|");
@chmod("paslaugos/padusimai/$nick.txt",0777);
echo"Nupirkta!";}}

if ($da == "5"){
if ($litai < 5){ echo "Nepakankamas sąskaitos likutis!";}else{
$fp = @fopen("account/$nick.txt", "w");
@fwrite($fp, $litai - 5);
@fclose($fp);
$tim = time() + 60*60*24;
@file_put_contents("paslaugos/daugiau pinigu/$nick.txt", "2|$tim|");
@chmod("paslaugos/daugiau pinigu/$nick.txt",0777);
echo"Nupirkta!";}}

if ($da == "6"){
if ($litai < 10){ echo "Nepakankamas sąskaitos likutis!";}else{
$fp = @fopen("account/$nick.txt", "w");
@fwrite($fp, $litai - 10);
@fclose($fp);
$tim = time() + 60*60*24;
@file_put_contents("paslaugos/daugiau pinigu/$nick.txt", "3|$tim|");
@chmod("paslaugos/daugiau pinigu/$nick.txt",0777);
echo"Nupirkta!";}}


if ($da == "7"){
if ($litai < 5){ echo "Nepakankamas sąskaitos likutis!";}else{
$fp = @fopen("account/$nick.txt", "w");
@fwrite($fp, $litai - 5);
@fclose($fp);
$tim = time() + 60*60*24;
@file_put_contents("paslaugos/daugiau exp/$nick.txt", "3|$tim|");
@chmod("paslaugos/daugiau exp/$nick.txt",0777);
echo"Nupirkta!";}}

if ($da == "8"){
if ($litai < 10){ echo "Nepakankamas sąskaitos likutis!";}else{
$fp = @fopen("account/$nick.txt", "w");
@fwrite($fp, $litai - 10);
@fclose($fp);
$tim = time() + 60*60*24;
@file_put_contents("paslaugos/daugiau exp/$nick.txt", "5|$tim|");
@chmod("paslaugos/daugiau exp/$nick.txt",0777);
echo"Nupirkta!";}}

if ($da == "9"){
if ($litai < 5){ echo "Nepakankamas sąskaitos likutis!";}else{
$fp = @fopen("account/$nick.txt", "w");
@fwrite($fp, $litai - 5);
@fclose($fp);
$tim = time() + 60*60*24;
@file_put_contents("paslaugos/didesnis nukaunamuma/$nick.txt", "3|$tim|");
@chmod("paslaugos/didesnis nukaunamuma/$nick.txt",0777);
echo"Nupirkta!";}}

if ($da == "10"){
if ($litai < 10){ echo "Nepakankamas sąskaitos likutis!";}else{
$fp = @fopen("account/$nick.txt", "w");
@fwrite($fp, $litai - 10);
@fclose($fp);
$tim = time() + 60*60*24;
@file_put_contents("paslaugos/didesnis nukaunamuma/$nick.txt", "5|$tim|");
@chmod("paslaugos/didesnis nukaunamuma/$nick.txt",0777);
echo"Nupirkta!";}}

}

if ($id == "times"){
echo "<b>KOVOS LAIKO TRUMPINIMAS</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=4time\"><b>4s.</b> kovojimas (dienai)</a> [<b>5LTL</b>]    <br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=3time\"><b>3s.</b> kovojimas (dienai)</a> [<b>9LTL</b>]<br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=2time\"><b>2s.</b> kovojimas (dienai)</a> [<b>16LTL</b>]<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=1time\"><b>1s.</b> kovojimas (dienai)</a> [<b>27LTL</b>]<br/>
";}

if ($id == "4time"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 5){ echo "Nepakankamas sąskaitos likutis.";}else{
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 5);
        @fclose($fp);
		
	$tim = time() + 60*60*24;
	@file_put_contents("padusimai/$nick.txt", "4|$tim|");
echo"Nupirkta! Gavote: <b>4s.</b> kovojimą dienai.";}}

if ($id == "3time"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 9){ echo "Nepakankamas sąskaitos likutis.";}else{
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 9);
        @fclose($fp);
		
	$tim = time() + 60*60*24;
	@file_put_contents("padusimai/$nick.txt", "3|$tim|");
echo"Nupirkta! Gavote: <b>3s.</b> kovojimą dienai.";}}

if ($id == "2time"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 16){ echo "Nepakankamas sąskaitos likutis.";}else{
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 16);
        @fclose($fp);
		
	$tim = time() + 60*60*24;
	@file_put_contents("padusimai/$nick.txt", "2|$tim|");
echo"Nupirkta! Gavote: <b>2s.</b> kovojimą dienai.";}}

if ($id == "1time"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 27){ echo "Nepakankamas sąskaitos likutis.";}else{
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 27);
        @fclose($fp);
		
	$tim = time() + 60*60*24;
	@file_put_contents("padusimai/$nick.txt", "1|$tim|");
echo"Nupirkta! Gavote: <b>1s.</b> kovojimą dienai.";}}

if ($id == "moderatoriai"){
echo "<b>MODERATORIAUS PIRKIMAS</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=1lvl&amp;\">1 Lygio Moderatorius</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=2lvl&amp;\">2 Lygio Moderatorius</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=3lvl&amp;\">3 Lygio Moderatorius</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=4lvl&amp;\">4 Lygio Moderatorius</a><br/>
";}
if ($id == "kovine"){
echo "<b>KOVINES GALIOS PIRKIMAS</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=50procj\">50% Jėgos</a> [<b>12LTL</b>]    <br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=100procj\">100% Jėgos</a> [<b>23LTL</b>]<br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=50procg\">50% Gynybos</a> [<b>12LTL</b>]<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=100procg\">100% Gynybos</a> [<b>23LTL</b>]<br/>
";}

if ($id == "50procj"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 12){ echo "Nepakankamas sąskaitos likutis.";}else{
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 12);
        @fclose($fp);
		
		$gavimasprs  = round(($jega*0.45),0);
		$jega = $jega + $gavimasprs;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
echo"Nupirkta! Gavote: <b>$gavimasprs</b> jėgos.";}}

if ($id == "100procj"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 23){ echo "Nepakankamas sąskaitos likutis.";}else{
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 23);
        @fclose($fp);
	
		$gavimasprs  = round(($jega*0.90),0);
		$jega = $jega + $gavimasprs;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
echo"Nupirkta! Gavote: <b>$gavimasprs</b> jėgos.";}}

if ($id == "50procg"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 12){ echo "Nepakankamas sąskaitos likutis.";}else{
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 12);
        @fclose($fp);
	
		$gavimasprs  = round(($gynyba*0.45),0);
		$gynyba = $gynyba + $gavimasprs;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
echo"Nupirkta! Gavote: <b>$gavimasprs</b> gynybos.";}}

if ($id == "100procg"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 23){ echo "Nepakankamas sąskaitos likutis.";}else{
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 23);
        @fclose($fp);
	
		$gavimasprs  = round(($gynyba*0.90),0);
		$gynyba = $gynyba + $gavimasprs;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
echo"Nupirkta! Gavote: <b>$gavimasprs</b> gynybos.";}}


if ($id == "keisti_veikeja"){
echo"
<b>Keisti veikėją</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Veikėjo keitimo kainą yrą 5 LTL</u>.</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Pasirinkite norimą veikėją:</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=keisti_veikeja2&amp;&amp;mo=Goku\">Goku</a><br/>
[&#8226;] <a href=\"account.php?id=keisti_veikeja2&amp;&amp;mo=Vegeta\">Vegeta</a><br/>
[&#8226;] <a href=\"account.php?id=keisti_veikeja2&amp;&amp;mo=Future Trunks\">Future Trunks</a><br/>
[&#8226;] <a href=\"account.php?id=keisti_veikeja2&amp;&amp;mo=Cell\">Cell</a><br/>
[&#8226;] <a href=\"account.php?id=keisti_veikeja2&amp;&amp;mo=Frieza\">Frieza</a><br/>
[&#8226;] <a href=\"account.php?id=keisti_veikeja2&amp;&amp;mo=Buu\">Buu</a><br/>
[&#8226;] <a href=\"account.php?id=keisti_veikeja2&amp;&amp;mo=Cooler\">Cooler</a><br/>
[&#8226;] <a href=\"account.php?id=keisti_veikeja2&amp;&amp;mo=Vegito\">Vegito</a><br/>
[&#8226;] <a href=\"account.php?id=keisti_veikeja2&amp;&amp;mo=Gohan\">Gohan</a><br/>
[&#8226;] <a href=\"account.php?id=keisti_veikeja2&amp;&amp;mo=Broly\">Broly</a><br/>
[&#8226;] <a href=\"account.php?id=keisti_veikeja2&amp;&amp;mo=Piccolo\">Piccolo</a><br/>
[&#8226;] <a href=\"account.php?id=keisti_veikeja2&amp;&amp;mo=Kid Trunks\">Kid Trunks</a><br/>
[&#8226;] <a href=\"account.php?id=keisti_veikeja2&amp;&amp;mo=Kid Goten\">Kid Goten</a><br/>
[&#8226;] <a href=\"account.php?id=keisti_veikeja2&amp;&amp;mo=Raditz\">Raditz</a><br/>
[&#8226;] <a href=\"account.php?id=keisti_veikeja2&amp;&amp;mo=Bardock\">Bardock</a><br/>
[&#8226;] <a href=\"account.php?id=keisti_veikeja2&amp;&amp;mo=Bulma\">Bulma</a><br/>
[&#8226;] <a href=\"account.php?id=keisti_veikeja2&amp;&amp;mo=Gotenks\">Gotenks</a><br/>
";}

if ($id == "keisti_veikeja2")
{

    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 5){ echo "Nepakankamas sąskaitos likutis.";}else{
	
if ($mo == "Goku"){ $a = "aaa"; }
if ($mo == "Vegeta"){ $a = "aaa"; }
if ($mo == "Future Trunks"){ $a = "aaa"; }
if ($mo == "Cell"){ $a = "aaa"; }
if ($mo == "Buu"){ $a = "aaa"; }
if ($mo == "Cooler"){ $a = "aaa"; }
if ($mo == "Vegito"){ $a = "aaa"; }
if ($mo == "Gohan"){ $a = "aaa"; }
if ($mo == "Broly"){ $a = "aaa"; }
if ($mo == "Piccolo"){ $a = "aaa"; }
if ($mo == "Kid Trunks"){ $a = "aaa"; }
if ($mo == "Kid Goten"){ $a = "aaa"; }
if ($mo == "Raditz"){ $a = "aaa"; }
if ($mo == "Bardock"){ $a = "aaa"; }
if ($mo == "Bulma"){ $a = "aaa"; }
if ($mo == "Gotenks"){ $a = "aaa"; }
    if (($mo !== "Goku") && ($mo !== "Vegeta") && ($mo !== "Future Trunks") && ($mo !== "Cell") && ($mo !== "Buu")
	 && ($mo !== "Cooler") && ($mo !== "Vegito") && ($mo !== "Gohan") && ($mo !== "Broly") && ($mo !== "Piccolo")
	  && ($mo !== "Kid Trunks") && ($mo !== "Raditz") && ($mo !== "Kid Goten") && ($mo !== "Gotenks") && ($mo !== "Bardock")
	   && ($mo !== "Bulma")) {$bad = "Blogas veikėjas!";}
    if ($bad == "")
    {
        $bad = "Veikėjas pakeistas sekmingai, jums kainavo 5 LTL";
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 5);
        @fclose($fp);
		$skills[0] = "0";
include("icludekitainf/skill.php");
        $prisij = time();
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij|$p|$points|$gynyba|$floo|$mo|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
    }
echo"$bad";}}


if ($id == "x2"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 2){ echo "Nepakankamas sąskaitos likutis.";}else{
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 2);
        @fclose($fp);
$mm[90] = time()+60*60*24*7;
$mm[91] = "0";
$mm[92] = "0";
include("icludekitainf/mm.php");
$laikas = date("Y-m-d H:i:s");
		 $bll = @fopen("sun/$nick.txt","a");
@fwrite($bll,"@SISTEMA|Sveiki! Jūs nusipirkote didesni gavima iš kovų, dabar 7 dienas gausite 2 kartus daugiau pinigų ir exp.|$laikas|\n");
@fclose($bll);
echo"Sėkmingai nusipirkote <b>Didesni gavimą</b>.";}}

if ($id == "x5"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 5){ echo "Nepakankamas sąskaitos likutis.";}else{
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 5);
        @fclose($fp);
$mm[90] = "0";
$mm[91] = time()+60*60*24*7;
$mm[92] = "0";
include("icludekitainf/mm.php");
$laikas = date("Y-m-d H:i:s");
		 $bll = @fopen("sun/$nick.txt","a");
@fwrite($bll,"@SISTEMA|Sveiki! Jūs nusipirkote didesni gavima iš kovų, dabar 7 dienas gausite 5 kartus daugiau pinigų ir exp.|$laikas|\n");
@fclose($bll);
echo"Sėkmingai nusipirkote <b>Didesni gavimą</b>.";}}

if ($id == "x10"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 10){ echo "Nepakankamas sąskaitos likutis.";}else{
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 10);
        @fclose($fp);
$mm[90] = "0";
$mm[91] = "0";
$mm[92] = time()+60*60*24*7;
include("icludekitainf/mm.php");
$laikas = date("Y-m-d H:i:s");
		 $bll = @fopen("sun/$nick.txt","a");
@fwrite($bll,"@SISTEMA|Sveiki! Jūs nusipirkote didesni gavima iš kovų, dabar 7 dienas gausite 10 kartus daugiau pinigų ir exp.|$laikas|\n");
@fclose($bll);
echo"Sėkmingai nusipirkote <b>Didesni gavimą</b>.";}}

if ($id == "1lvl"){
echo "<b>1 lygio moderatorius</b>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Ką sugeba 1 lygio moderatoriai?</b>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>1.</b> Gali užbaninti kitus žaidėjus už taisyklių nesilaikymą, tačiau negali užbaninti už save aukštesniu pagal ranga žaidėju.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>2.</b> Gali matyti užbanimo logus, matyti ką užbanino kiti moderatoriai ir ar teisingai nubaudę žaidėją.
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>3.</b>  Gali skaityti kitu žaidėju PM dėžute: skaitant PM moderatorius gali pamatyti ar kiti žaidėjai laikosi tvarkos per PM dėžutes.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
1 lygio moderatoriaus statusas žymimas <b>'*$nick'</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
1 lygio moderatoriaus statusas kainuoja <b>50 LTL</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=1lvlmod&amp;\">Pirkti</a><br/>";}

if ($id == "2lvl"){
echo "<b>2 lygio moderatorius</b>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Ką sugeba 2 lygio moderatoriai?</b>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>1.</b> Gali naudotis 1 lygio moderatoriaus meniu, užbaninti žaidėją, matyti užbanintu logus, bei skaityti žaidėjų PM.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>2.</b> Valyti mini pokalbius ir topic  nuo reklamų ar tiesiog nesąmoningu žinučių.
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>3.</b>  Gali matyti sąskaitos perlaidos logus, kas kiek kam padare perlaidą ir už ką.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
2 lygio moderatoriaus statusas žymimas <b>'<span style='color:green'>~$nick</span>'</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
2 lygio moderatoriaus statusas kainuoja <b>100 LTL</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=2lvlmod&amp;\">Pirkti</a><br/>";}

if ($id == "3lvl"){
echo "<b>3 lygio moderatorius</b>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Ką sugeba 3 lygio moderatoriai?</b>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>1.</b> Gali naudotis 1 ir 2 lygio moderatoriaus meniu, užbaninti žaidėją, matyti užbanintu logus, skaityti žaidėjų PM, valyti pokalbius ir topic, bei matyti perlaidos logus.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>2.</b> Nuimti kitam žaidėjui užbanimo statusą, jei sistema ar kitas žaidėjas apsirinko užbanidamas šį žaidėja.
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>3.</b>  Priskirtą privilegija forumo valdymui.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
3 lygio moderatoriaus statusas žymimas <b>'<span style='color:indigo'>#$nick</span>'</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
3 lygio moderatoriaus statusas kainuoja <b>150 LTL</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=3lvlmod&amp;\">Pirkti</a><br/>";}

if ($id == "4lvl"){
echo "<b>4 lygio moderatorius</b>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Ką sugeba 4 lygio moderatoriai?</b>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>1.</b> Gali naudotis 1,2 ir 3 lygio moderatoriaus meniu, užbaninti žaidėją, matyti užbanintu logus, skaityti žaidėjų PM, valyti pokalbius ir topic, bei matyti perlaidos logus.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>2.</b> Nuimti kitam žaidėjui moderatoriaus statusą.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
4 lygio moderatoriaus statusas žymimas  <b>'<span style='color:blue'>&$nick</span>'</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
4 lygio moderatoriaus statusas kainuoja <b>300 LTL</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=4lvlmod&amp;\">Pirkti</a><br/>";}


if ($id == "1lvlmod"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 50){ echo "Nepakankamas sąskaitos likutis.";}else{
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 50);
        @fclose($fp);
$fp1 = fopen("files for txt/mods.txt","a");
fwrite($fp1,"$nick|mod|\n");
fclose($fp1);
echo"Jūms suteiktas 1 lygio moderatoriaus statusas
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
exit;}}

if ($id == "2lvlmod"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 100){ echo "Nepakankamas sąskaitos likutis.";}else{
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 100);
        @fclose($fp);
$fp1 = fopen("files for txt/mods.txt","a");
fwrite($fp1,"$nick|mod2|\n");
fclose($fp1);
echo"Jūms suteiktas 2 lygio moderatoriaus statusas
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
exit;}}

if ($id == "3lvlmod"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 150){ echo "Nepakankamas sąskaitos likutis.";}else{
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 150);
        @fclose($fp);
$fp1 = fopen("files for txt/mods.txt","a");
fwrite($fp1,"$nick|mod3|\n");
fclose($fp1);
echo"Jūms suteiktas 3 lygio moderatoriaus statusas
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
exit;}}
if ($id == "4lvlmod"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 300){ echo "Nepakankamas sąskaitos likutis.";}else{
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 300);
        @fclose($fp);
$fp1 = fopen("files for txt/mods.txt","a");
fwrite($fp1,"$nick|mod4|\n");
fclose($fp1);
echo"Jūms suteiktas 4 lygio moderatoriaus statusas
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
exit;}}
if ($id == "ban"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 2){ echo "Nepakankamas sąskaitos likutis.";}else{
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 2);
        @fclose($fp);
$skills[90] = $skills[90] -1;
include("icludekitainf/skill.php");
echo"Jums buvo anuluota minusine reputacija
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
exit;}}
if ($id == "rep"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 1){ echo "Nepakankamas sąskaitos likutis.";}else{
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 1);
        @fclose($fp);
$fp1 = fopen("reputacija/neigiama/$nick.txt","w");
fwrite($fp1,"0");
fclose($fp1);
echo"Jums buvo anuluota minusine reputacija
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
exit;}}

if ($id == "lost_clear"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 2){ echo "Nepakankamas sąskaitos likutis.";}else{
 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 2);
        @fclose($fp);
		$loses = 0;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
echo"Jums buvo anuluota pralaimetos kovos.
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
exit;}}





if ($id == "send"){
if ($lygis < 130 && $nick != "funix"){echo "<b>Sąskaitos perlaida</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Sąskaitos perlaida galima daryti tik nuo 130 lygio.<br/>";
}
else
{
echo "<b>Sąskaitos perlaida</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
*Sąskaitos perlaida yrą nemokama<br/>
*Sąskaitos perlaida galima daryti tik nuo 130 lygio<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
<form action='account.php?id=send2' method='post'>
Įveskite žaidėjo nick:<br/>
<input  name=\"kam2\" type=\"text\" maxlength=\"20\" title=\"kam\" value=\"\"/><br/>
Perlaidos suma:<br/>
<input  name=\"kiek\" type=\"text\" format=\"number\" maxlength=\"3\" title=\"Kiek\" value=\"\"/><br/>
Perlaidos paskirtis:<br/>
<input  name=\"paskirtis\" type=\"text\" format=\"*N\" maxlength=\"30\" title=\"Paskirtis\" value=\"\"/><br/>
<postfield name=\"kam2\" value=\"$(kam2)\"/>
<postfield name=\"kiek\" value=\"$(kiek)\"/>
<postfield name=\"paskirtis\" value=\"$(paskirtis)\"/>
<input  type='submit' value='Daryti perlaidą'/>
</form>
";}}
 
if ($id == "send2"){
if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 
$kam2 = htmlspecialchars( $_POST['kam2']);
$paskirtis = htmlspecialchars( $_POST['paskirtis']);
$kito_zaidejo_lygis = @explode("|",@file_get_contents("zaideju pagrindinai statusai/$kam2.txt"));
if ($kito_zaidejo_lygis[0] < 130) { $er = "Pervesti negalima! $kam2 neturi 130 lygio."; }
if ($lygis < 130 && $nick != "funix"){ $er = "Sąskaitos perlaida galima daryti tik nuo 130 lygio."; }
if ($litai < $kiek) { $er = "Nepakankamas likutis jūsų sąskaitoje!"; }
if ($kiek < 1) { $er = "Įveskite didesni nei 0"; }
if ($kam2 == $nick){ $er="Gauti perlaida savo vardu negalima!"; }
if (!file_exists("zaideju pagrindinai statusai/$kam2.txt")){$er = "Toks vartotojas neegzistuoja!";}
if ($paskirtis == "") { $er = "Paliktas tuščias laukelis!"; }
if ($kam2 == "") { $er = "Paliktas tuščias laukelis!"; }
if ($kiek == "") { $er = "Paliktas tuščias laukelis!"; }

if ($er == "")
{
$litai_ktam = file_get_contents("account/$kam2.txt");
		        $fp = @fopen("account/$kam2.txt", "w");
        @fwrite($fp, $litai_ktam + $kiek);
        @fclose($fp);
		            $us = @file_get_contents("zaideju pagrindinai statusai/$kam2.txt");
            $infa = explode("|", $us);
			$laikas = date("Y-m-d H:i:s");
	$atidaryma = fopen("sun/$kam2.txt", "a");
fwrite($atidaryma, "@SISTEMA|Gauta perlaida <b>$kiek LTL</b>, perlaida gauta nuo <b>$vrd</b> žaidėjo. Perlaidos paskirtis: <b>$paskirtis</b>|$laikas|\n");
fclose($atidaryma);

	$atidaryma = fopen("files for txt/perlaidos_log.txt", "a");
fwrite($atidaryma, "Žaidėjas <b>$vrd</b> padare perlaida <b>$kam2</b> žaidėjui, perlaidos suma <b>$kiek LTL</b>. Perlaidos paskirtis: $paskirtis<br/> Perlaidos data: <b>$laikas</b>|\n");
fclose($atidaryma);
            $fp1 = fopen("zaideju pagrindinai statusai/$kam2.txt", "w");
            fwrite($fp1, "$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$infa[7]|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|+|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
            fclose($fp1);	
		
		        $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - $kiek);
        @fclose($fp);


$er = "<b>Perlaida sėkmingai įvykdita!</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Perlaidos informacija:<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
Perlaidos suma: <b>$kiek LTL</b><br/>
Perlaidos gavėjas: <b>$kam2</b><br/>
Perlaidos paskirtis: <b>$paskirtis</b><br/>";
}
echo "<b>Sąskaitos perlaida</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">$er";}

if ($id == "characters"){$jusu_saskaitoje = @number_format($litai, 2, ',', ' ');
echo "<b>Unikalus veikėjai</b>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Jūs nusipirkęs unikalų veikėjas gausite nuo veikėjo didesnius bonusus (%), tos bonus gausite kol nepakeisite veikėjo rūšį. Pasirinkite veikėja ir nusipirkite, tai padidins jūsų kovinė galią.  Pakeitus veikėja pasikeis bonusai ir pasikeis jūsų kovinė galia priklauso nuo veikėjo gaunamu procentų.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Jūsų sąskaitoje: <b>$jusu_saskaitoje LTL</b> <br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=characters2&amp;ka=1&amp;\">Baby Vegeta</a> [5,00 LTL]<br/>
<small> Transformacija: <b>Super saiyan 3</b>, Rušis: <b>Tuffles/Saiyan</b>, Bonus: <b>+30%</b>.</small>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=characters2&amp;ka=2&amp;\">Goku</a> [7,00 LTL]<br/>
<small> Transformacija: <b>Super saiyan 5</b>, Rušis: <b>Saiyan</b>, Bonus: <b>+50%</b>.</small>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=characters2&amp;ka=4&amp;\">Gotenks</a> [10,00 LTL]<br/>
<small> Transformacija: <b>Super saiyan 4</b>, Rušis: <b>Saiyan/Fusion</b>, Bonus: <b>+70%</b>.</small>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=characters2&amp;ka=3&amp;\">Goku</a> [15,00 LTL]<br/>
<small> Transformacija: <b>Super saiyan 6</b>, Rušis: <b>Saiyan</b>, Bonus: <b>+100%</b>.</small>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=characters2&amp;ka=5&amp;\">Xicor</a> [25,00 LTL]<br/>
<small> Transformacija: <b>Super saiyan 6</b>, Rušis: <b>Saiyan/Xicor</b>, Bonus: <b>+150%</b>.</small>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=characters2&amp;ka=6&amp;\">Goku</a> [50,00 LTL]<br/>
<small> Transformacija: <b>Super saiyan 7</b>, Rušis: <b>Saiyan</b>, Bonus: <b>+200%</b>.</small>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=characters2&amp;ka=7&amp;\">Goku</a> [100,00 LTL]<br/>
<small> Transformacija: <b>Gods</b>, Rušis: <b>Saiyan/Gods</b>, Bonus: <b>+300%</b>.</small>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=characters2&amp;ka=8&amp;\">Vegeta</a> [150,00 LTL]<br/>
<small> Transformacija: <b>Gods</b>, Rušis: <b>Saiyan/Gods</b>, Bonus: <b>+550%</b>.</small>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=characters2&amp;ka=9&amp;\">Vegeta</a> [200,00 LTL]<br/>
<small> Transformacija: <b>Gods SSJ3</b>, Rušis: <b>Saiyan/Gods</b>, Bonus: <b>+800%</b>.</small>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=characters2&amp;ka=10&amp;\">Evil Vegeta</a> [250,00 LTL]<br/>
<small> Transformacija: <b>Super saiyan</b>, Rušis: <b>Saiyan/Evil</b>, Bonus: <b>+1000%</b>.</small>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=characters2&amp;ka=11&amp;\">Evil Goku</a> [300,00 LTL]<br/>
<small> Transformacija: <b>Super saiyan</b>, Rušis: <b>Saiyan/Evil</b>, Bonus: <b>+2000%</b>.</small>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=characters2&amp;ka=12&amp;\">Fusion Omega Cooler</a> [350,00 LTL]<br/>
<small> Transformacija: <b>Demon</b>, Rušis: <b>Fusion warrior</b>, Bonus: <b>+5000%</b>.</small>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=characters2&amp;ka=13&amp;\">Buu Fusion Baby</a> [500,00 LTL]<br/>
<small> Transformacija: <b>Demon</b>, Rušis: <b>Fusion warrior</b>, Bonus: <b>+10000%</b>.</small>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>[&#8226;] <a href=\"account.php?id=characters2&amp;ka=14&amp;\">Android Lord</a> [1000,00 LTL]<br/>
<span style=\"color: red\"><small> Transformacija: <b>Android</b>, Rušis: <b>Lord</b>, Bonus: <b>+5000%</b>.<br/>
Šio veikėjo statusai kitam žaidėjui būs nematomi.<br/></small></span></b>
";}

if ($id == "characters2"){
$jusu_saskaitoje = @number_format($litai, 2, ',', ' ');
if ($ka == "12"){
echo "<b>Fusion Omega Cooler</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<table><tr><td>
[&#8226;] Veikėjas: <b> Fusion Omega Cooler</b><br/>
[&#8226;] Rušis: <b> Demon</b><br/>
[&#8226;] Transformacija: <b>Fusion warrior</b><br/>
[&#8226;] Jėga:<b> +5000%</b><br/>
[&#8226;] Gynyba:<b> +5000%</b><br/>
[&#8226;] Gyvybes:<b> +5000%</b><br/>
[&#8226;] Transformacijos:<b> 0</b><br/>
[&#8226;] Veikėjo kaina:<b> 350,00 LTL</b><br/>
[&#8226;] Jūsų sąskaitoje: <b>$jusu_saskaitoje LTL</b> <br/>
[&#8226;] <b><a href=\"account.php?id=Fusion_Omega_Cooler\">Pirkti šį veikėją</a></b><br/>";
echo "		</td>
		<td>
		<img src=\"http://dbf.us.lt/imgs/veikejai/fusion omega cooler-0.png\">
		</td>
		</tr>
		</table>	";}	
		if ($ka == "14"){
echo "<b>Android Lord</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<table><tr><td>
[&#8226;] Veikėjas: <b> Android</b><br/>
[&#8226;] Rušis: <b> Lord</b><br/>
[&#8226;] Transformacija: <b>Android</b><br/>
[&#8226;] Jėga:<b> +5000%</b><br/>
[&#8226;] Gynyba:<b> +5000%</b><br/>
[&#8226;] Gyvybes:<b> +5000%</b><br/>
[&#8226;] Transformacijos:<b> 0</b><br/>
[&#8226;] <span style=\"color: red\">Šio veikėjo statusai kitam žaidėjui būs nematomi.</span><br/>
[&#8226;] Veikėjo kaina:<b> 1000,00 LTL</b><br/>
[&#8226;] Jūsų sąskaitoje: <b>$jusu_saskaitoje LTL</b> <br/>
[&#8226;] <b><a href=\"account.php?id=Android_Lord\">Pirkti šį veikėją</a></b><br/>";
echo "		</td>
		<td>
		<img src=\"http://dbf.us.lt/imgs/veikejai/android lord-0.png\">
		</td>
		</tr>
		</table>	";}	
	
$jusu_saskaitoje = @number_format($litai, 2, ',', ' ');
if ($ka == "13"){
echo "<b>Buu Fusion Baby</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<table><tr><td>
[&#8226;] Veikėjas: <b> Buu Fusion Baby</b><br/>
[&#8226;] Rušis: <b> Demon</b><br/>
[&#8226;] Transformacija: <b>Fusion warrior</b><br/>
[&#8226;] Jėga:<b> +10000%</b><br/>
[&#8226;] Gynyba:<b> +10000%</b><br/>
[&#8226;] Gyvybes:<b> +10000%</b><br/>
[&#8226;] Transformacijos:<b> 0</b><br/>
[&#8226;] Veikėjo kaina:<b> 500,00 LTL</b><br/>
[&#8226;] Jūsų sąskaitoje: <b>$jusu_saskaitoje LTL</b> <br/>
[&#8226;] <b><a href=\"account.php?id=Buu_fusion_baby\">Pirkti šį veikėją</a></b><br/>";
echo "		</td>
		<td>
		<img src=\"http://dbf.us.lt/imgs/veikejai/buu fusion baby-0.png\">
		</td>
		</tr>
		</table>	";}	
if ($ka == "11"){
echo "<b>Evil Goku</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<table><tr><td>
[&#8226;] Veikėjas: <b> Evil Goku</b><br/>
[&#8226;] Rušis: <b> Saiyan</b><br/>
[&#8226;] Transformacija: <b>Super saiyan 4</b><br/>
[&#8226;] Jėga:<b> +2000%</b><br/>
[&#8226;] Gynyba:<b> +2000%</b><br/>
[&#8226;] Gyvybes:<b> +2000%</b><br/>
[&#8226;] Transformacijos:<b> 0</b><br/>
[&#8226;] Veikėjo kaina:<b> 300,00 LTL</b><br/>
[&#8226;] Jūsų sąskaitoje: <b>$jusu_saskaitoje LTL</b> <br/>
[&#8226;] <b><a href=\"account.php?id=Evil_goku\">Pirkti šį veikėją</a></b><br/>";
echo "		</td>
		<td>
		<img src=\"http://dbf.us.lt/imgs/veikejai/evil goku-0.png\">
		</td>
		</tr>
		</table>	";}	
if ($ka == "10"){
echo "<b>Evil Vegeta</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<table><tr><td>
[&#8226;] Veikėjas: <b> Evil Vegeta</b><br/>
[&#8226;] Rušis: <b> Saiyan</b><br/>
[&#8226;] Transformacija: <b>Super saiyan 4</b><br/>
[&#8226;] Jėga:<b> +1000%</b><br/>
[&#8226;] Gynyba:<b> +1000%</b><br/>
[&#8226;] Gyvybes:<b> +1000%</b><br/>
[&#8226;] Transformacijos:<b> 0</b><br/>
[&#8226;] Veikėjo kaina:<b> 250,00 LTL</b><br/>
[&#8226;] Jūsų sąskaitoje: <b>$jusu_saskaitoje LTL</b> <br/>
[&#8226;] <b><a href=\"account.php?id=Evil_vegeta\">Pirkti šį veikėją</a></b><br/>";
echo "		</td>
		<td>
		<img src=\"http://dbf.us.lt/imgs/veikejai/evil vegeta-0.png\">
		</td>
		</tr>
		</table>	";}	

if ($ka == "1"){
echo "<b>Baby Vegeta</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<table><tr><td>
[&#8226;] Veikėjas: <b> Baby Vegeta</b><br/>
[&#8226;] Rušis: <b> Tuffle</b><br/>
[&#8226;] Transformacija: <b>Super saiyan 3</b><br/>
[&#8226;] Jėga:<b> +30%</b><br/>
[&#8226;] Gynyba:<b> +30%</b><br/>
[&#8226;] Gyvybes:<b> +30%</b><br/>
[&#8226;] Transformacijos:<b> 0</b><br/>
[&#8226;] Veikėjo kaina:<b> 5,00 LTL</b><br/>
[&#8226;] Jūsų sąskaitoje: <b>$jusu_saskaitoje LTL</b> <br/>
[&#8226;] <b><a href=\"account.php?id=Baby_ssj6\">Pirkti šį veikėją</a></b><br/>";
echo "		</td>
		<td>
		<img src=\"http://dbf.us.lt/imgs/veikejai/baby vegeta super saiyan 3-0.png\">
		</td>
		</tr>
		</table>	";}	
		
	if ($ka == "2"){	
echo "<b>Goku</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<table><tr><td>
[&#8226;] Veikėjas: <b> Goku</b><br/>
[&#8226;] Rušis: <b> Saiyan</b><br/>
[&#8226;] Transformacija: <b>Super saiyan 5</b><br/>
[&#8226;] Jėga:<b> +50% </b><br/>
[&#8226;] Gynyba:<b> +50% </b><br/>
[&#8226;] Gyvybes:<b> +50% </b><br/>
[&#8226;] Transformacijos:<b> 0</b><br/>
[&#8226;] Veikėjo kaina:<b> 7,00 LTL</b><br/>
[&#8226;] Jūsų sąskaitoje: <b>$jusu_saskaitoje LTL</b> <br/>
[&#8226;] <b><a href=\"account.php?id=Goku_ssj5&amp;\">Pirkti šį veikėją</a></b><br/>";
echo "		</td>
		<td>
		<img src=\"http://dbf.us.lt/imgs/veikejai/goku super saiyan 5-0.png\">
		</td>
		</tr>
		</table>";}	
	if ($ka == "3"){	
echo "<b>Goku</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<table><tr><td>
[&#8226;] Veikėjas: <b> Goku</b><br/>
[&#8226;] Rušis: <b> Saiyan</b><br/>
[&#8226;] Transformacija: <b>Super saiyan 6</b><br/>
[&#8226;] Jėga:<b> +100%</b><br/>
[&#8226;] Gynyba:<b> +100%</b><br/>
[&#8226;] Gyvybes:<b> +100%</b><br/>
[&#8226;] Transformacijos:<b> 0</b><br/>
[&#8226;] Veikėjo kaina:<b> 15,00 LTL</b><br/>
[&#8226;] Jūsų sąskaitoje: <b>$jusu_saskaitoje LTL</b> <br/>
[&#8226;] <b><a href=\"account.php?id=Goku_ssj6&amp;\">Pirkti šį veikėją</a></b><br/>";
echo "		</td>
		<td>
		<img src=\"http://dbf.us.lt/imgs/veikejai/goku super saiyan 6-0.png\">
		</td>
		</tr>
		</table>

";}	
	if ($ka == "4"){	
echo "<b>Gotenks</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<table><tr><td>
[&#8226;] Veikėjas: <b> Gotenks</b><br/>
[&#8226;] Rušis: <b> Saiyan</b><br/>
[&#8226;] Transformacija: <b>Super saiyan 4</b><br/>
[&#8226;] Jėga:<b> +70%</b><br/>
[&#8226;] Gynyba:<b> +70%</b><br/>
[&#8226;] Gyvybes:<b> +70%</b><br/>
[&#8226;] Transformacijos:<b> 0</b><br/>
[&#8226;] Veikėjo kaina:<b> 10,00 LTL</b><br/>
[&#8226;] Jūsų sąskaitoje: <b>$jusu_saskaitoje LTL</b> <br/>
[&#8226;] <b><a href=\"account.php?id=Gotenks_ssj4&amp;\">Pirkti šį veikėją</a></b><br/>";
echo "		</td>
		<td>
		<img src=\"http://dbf.us.lt/imgs/veikejai/gotenks super saiyan 4-0.png\">
		</td>
		</tr>
		</table>
";}	
	if ($ka == "5"){	
echo "<b>Xicor</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<table><tr><td>
[&#8226;] Veikėjas: <b> Xicor</b><br/>
[&#8226;] Rušis: <b> Saiyan/Xicor</b><br/>
[&#8226;] Transformacija: <b>Super saiyan 6</b><br/>
[&#8226;] Jėga:<b> +150%</b><br/>
[&#8226;] Gynyba:<b> +150%</b><br/>
[&#8226;] Gyvybes:<b> +150%</b><br/>
[&#8226;] Transformacijos:<b> 0</b><br/>
[&#8226;] Veikėjo kaina:<b> 25,00 LTL</b><br/>
[&#8226;] Jūsų sąskaitoje: <b>$jusu_saskaitoje LTL</b> <br/>
[&#8226;] <b><a href=\"account.php?id=Xicor_ssj6&amp;\">Pirkti šį veikėją</a></b><br/>";
echo "		</td>
		<td>
		<img src=\"http://dbf.us.lt/imgs/veikejai/xicor super saiyan 6-0.png\">
		</td>
		</tr>
		</table>	

";}	
	if ($ka == "6"){	
echo "<b>Goku</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<table><tr><td>
[&#8226;] Veikėjas: <b> Goku</b><br/>
[&#8226;] Rušis: <b> Saiyan</b><br/>
[&#8226;] Transformacija: <b>Super saiyan 7</b><br/>
[&#8226;] Jėga:<b> +200%</b><br/>
[&#8226;] Gynyba:<b> +200% </b><br/>
[&#8226;] Gyvybes:<b> +200% </b><br/>
[&#8226;] Transformacijos:<b> 0</b><br/>
[&#8226;] Veikėjo kaina:<b> 50,00 LTL</b><br/>
[&#8226;] Jūsų sąskaitoje: <b>$jusu_saskaitoje LTL</b> <br/>
[&#8226;] <b><a href=\"account.php?id=Goku_ssj7&amp;\">Pirkti šį veikėją</a></b><br/>";
echo "		</td>
		<td>
		<img src=\"http://dbf.us.lt/imgs/veikejai/goku super saiyan 7-0.png\">
		</td>
		</tr>
		</table>
";}	
	if ($ka == "7"){	
echo "<b>Goku</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<table><tr><td>
[&#8226;] Veikėjas: <b> Goku</b><br/>
[&#8226;] Rušis: <b> Saiyan</b><br/>
[&#8226;] Transformacija: <b>Gods</b><br/>
[&#8226;] Jėga:<b> +300%</b><br/>
[&#8226;] Gynyba:<b> +300% </b><br/>
[&#8226;] Gyvybes:<b> +300% </b><br/>
[&#8226;] Transformacijos:<b> 0</b><br/>
[&#8226;] Veikėjo kaina:<b> 100,00 LTL</b><br/>
[&#8226;] Jūsų sąskaitoje: <b>$jusu_saskaitoje LTL</b> <br/>
[&#8226;] <b><a href=\"account.php?id=Goku_gods&amp;\">Pirkti šį veikėją</a></b><br/>";
echo "		</td>
		<td>
		<img src=\"http://dbf.us.lt/imgs/veikejai/goku gods-0.png\">
		</td>
		</tr>
		</table>
";}
	if ($ka == "8"){	
echo "<b>Vegeta</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<table><tr><td>
[&#8226;] Veikėjas: <b> Vegeta</b><br/>
[&#8226;] Rušis: <b> Saiyan</b><br/>
[&#8226;] Transformacija: <b>Gods</b><br/>
[&#8226;] Jėga:<b> +550%</b><br/>
[&#8226;] Gynyba:<b> +550% </b><br/>
[&#8226;] Gyvybes:<b> +550% </b><br/>
[&#8226;] Transformacijos:<b> 0</b><br/>
[&#8226;] Veikėjo kaina:<b> 150,00 LTL</b><br/>
[&#8226;] Jūsų sąskaitoje: <b>$jusu_saskaitoje LTL</b> <br/>
[&#8226;] <b><a href=\"account.php?id=Vegeta_gods&amp;\">Pirkti šį veikėją</a></b><br/>";
echo "		</td>
		<td>
		<img src=\"http://dbf.us.lt/imgs/veikejai/vegeta gods-0.png\">
		</td>
		</tr>
		</table>
";}
	if ($ka == "9"){	
echo "<b>Vegeta</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<table><tr><td>
[&#8226;] Veikėjas: <b> Vegeta</b><br/>
[&#8226;] Rušis: <b> Saiyan</b><br/>
[&#8226;] Transformacija: <b>Gods SSJ3</b><br/>
[&#8226;] Jėga:<b> +800%</b><br/>
[&#8226;] Gynyba:<b> +800% </b><br/>
[&#8226;] Gyvybes:<b> +800% </b><br/>
[&#8226;] Transformacijos:<b> 0</b><br/>
[&#8226;] Veikėjo kaina:<b> 200,00 LTL</b><br/>
[&#8226;] Jūsų sąskaitoje: <b>$jusu_saskaitoje LTL</b> <br/>
[&#8226;] <b><a href=\"account.php?id=Vegeta_gods_ssj3&amp;\">Pirkti šį veikėją</a></b><br/>";
echo "		</td>
		<td>
		<img src=\"http://dbf.us.lt/imgs/veikejai/vegeta gods ssj3-0.png\">
		</td>
		</tr>
		</table>
";}}
if ($id == "Buu_fusion_baby"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 500){ echo "Nepakankamas sąskaitos likutis.";}else{

 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 500);
        @fclose($fp);

$fp = @fopen("$gameriai","w");
@fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|Buu Fusion Baby|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
@fclose($fp); 
$skills[0] = 0;
include("icludekitainf/skill.php");

echo"Jūs tapote <u>Buu Fusion Baby</u></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
exit;}}
if ($id == "Fusion_Omega_Cooler"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 350){ echo "Nepakankamas sąskaitos likutis.";}else{

 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 350);
        @fclose($fp);

$fp = @fopen("$gameriai","w");
@fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|Fusion Omega Cooler|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
@fclose($fp); 
$skills[0] = 0;
include("icludekitainf/skill.php");

echo"Jūs tapote <u>Fusion Omega Cooler</u></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
exit;}}


if ($id == "Android_Lord"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 1000){ echo "Nepakankamas sąskaitos likutis.";}else{

 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 1000);
        @fclose($fp);

$fp = @fopen("$gameriai","w");
@fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|Android Lord|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
@fclose($fp); 
$skills[0] = 0;
include("icludekitainf/skill.php");

echo"Jūs tapote <u>Android Lord</u></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
exit;}}


if ($id == "Evil_goku"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 300){ echo "Nepakankamas sąskaitos likutis.";}else{

 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 300);
        @fclose($fp);

$fp = @fopen("$gameriai","w");
@fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|Evil Goku|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
@fclose($fp); 
$skills[0] = 0;
include("icludekitainf/skill.php");

echo"Jūs tapote <u>Evil Vegeta</u></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
exit;}}
if ($id == "Evil_vegeta"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 250){ echo "Nepakankamas sąskaitos likutis.";}else{

 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 250);
        @fclose($fp);

$fp = @fopen("$gameriai","w");
@fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|Evil Vegeta|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
@fclose($fp); 
$skills[0] = 0;
include("icludekitainf/skill.php");

echo"Jūs tapote <u>Evil Vegeta</u></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
exit;}}
if ($id == "Vegeta_gods"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 150){ echo "Nepakankamas sąskaitos likutis.";}else{

 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 150);
        @fclose($fp);

$fp = @fopen("$gameriai","w");
@fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|Vegeta Gods|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
@fclose($fp); 
$skills[0] = 0;
include("icludekitainf/skill.php");

echo"Jūs tapote <u>Goku Gods</u></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
exit;}}

if ($id == "Vegeta_gods_ssj3"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 200){ echo "Nepakankamas sąskaitos likutis.</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
exit;}

 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 200);
        @fclose($fp);

$fp = @fopen("$gameriai","w");
@fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|Vegeta Gods SSJ3|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
@fclose($fp); 
$skills[0] = 0;
include("icludekitainf/skill.php");

echo"Jūs tapote <u>Vegeta Gods ssj3</u></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
exit;}

if ($id == "Goku_gods"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 100){ echo "Nepakankamas sąskaitos likutis.";}else{

 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 100);
        @fclose($fp);

$fp = @fopen("$gameriai","w");
@fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|Goku Gods|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
@fclose($fp); 
$skills[0] = 0;
include("icludekitainf/skill.php");

echo"Jūs tapote <u>Goku Gods</u></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
exit;}}

if ($id == "Gotenks_ssj4"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 10){ echo "Nepakankamas sąskaitos likutis.";}else{

 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 10);
        @fclose($fp);

$fp = @fopen("$gameriai","w");
@fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|Gotenks Super Saiyan 4|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
@fclose($fp); 
$skills[0] = 0;
include("icludekitainf/skill.php");

echo"Jūs tapote <u>Gotenks Super Saiyan 4</u></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
exit;}}

if ($id == "Xicor_ssj6"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 25){ echo "Nepakankamas sąskaitos likutis.";}else{

 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 25);
        @fclose($fp);

$fp = @fopen("$gameriai","w");
@fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|Xicor Super Saiyan 6|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
@fclose($fp); 
$skills[0] = 0;
include("icludekitainf/skill.php");

echo"Jūs tapote <u>Xicor Super Saiyan 3</u></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
exit;}}

if ($id == "Baby_ssj6"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 5){ echo "Nepakankamas sąskaitos likutis.";}else{

 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 5);
        @fclose($fp);

$fp = @fopen("$gameriai","w");
@fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|Baby Vegeta Super Saiyan 3|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
@fclose($fp); 
$skills[0] = 0;
include("icludekitainf/skill.php");

echo"Jūs tapote <u>Baby Vegeta Super Saiyan 3</u></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
exit;}}

if ($id == "Goku_ssj7"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 50){ echo "Nepakankamas sąskaitos likutis.";}else{

 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 50);
        @fclose($fp);

$fp = @fopen("$gameriai","w");
@fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|Goku Super Saiyan 7|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
@fclose($fp); 
$skills[0] = 0;
include("icludekitainf/skill.php");

echo"Jūs tapote <u>Goku Super Saiyan 7</u></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
exit;}}

if ($id == "Goku_ssj6"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 15){ echo "Nepakankamas sąskaitos likutis.";}else{

 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 15);
        @fclose($fp);

$fp = @fopen("$gameriai","w");
@fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|Goku Super Saiyan 6|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
@fclose($fp); 
$skills[0] = 0;
include("icludekitainf/skill.php");

echo"Jūs tapote <u>Goku Super Saiyan 6</u> </div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
exit;}}

if ($id == "Goku_ssj5"){
    if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
    if ($litai < 7){ echo "Nepakankamas sąskaitos likutis.";}else{

 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 7);
        @fclose($fp);

$fp = @fopen("$gameriai","w");
@fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|Goku Super Saiyan 5|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
@fclose($fp); 
$skills[0] = 0;
include("icludekitainf/skill.php");

echo"Jūs tapote <u>Goku Super Saiyan 5</u> </div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
exit;}}


if ($id == "money_purchase"){
$jusu_saskaitoje = @number_format($litai, 2, ',', ' ');
echo "<b>Pinigų pirkimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>1 LTL =  100 000 000 pinigų</b><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Jūsų sąskaitoje: <b>$jusu_saskaitoje LTL</b> <br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"<b>Įveskite už kokia sumą pirksite:</b><br/>
<form action='account.php?id=money_purchase2&amp;' method='post'>
<input class='button' name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"9\" title=\"kiek\"/><br/>
<input class='button' type='submit' value='Toliau'/></form>";}

if ($id == "money_purchase2") {if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 
$g_kaina = 1*$kiek;  
$kiek_gaus = 100000000*$g_kaina; 
if ($litai < $g_kaina) { $er = "Nepakankamas likutis jūsų sąskaitoje"; }
if ($g_kaina == "") { $er = "Paliktas tuščias laukelis."; }

if ($er == ""){
$gavote = @number_format($kiek_gaus, 0, ',', ' ');
$isleidote = @number_format($g_kaina, 2, ',', ' ');
$likutis = @number_format($litai, 2, ',', ' ');
$er = "Sekmingai nusipirkote <b>$gavote</b> pinigų.<br/> Išleidote <b>$isleidote LTL</b>, jūsų sąskaitoje liko <b>$likutis LTL</b>";
		
		        $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - $g_kaina);
        @fclose($fp);
								$pinigai = $pinigai + $kiek_gaus;
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||");
fclose($fp);
	}
echo"$er<br/>";}

if ($id == "credit_purchase"){
$jusu_saskaitoje = @number_format($litai, 2, ',', ' ');
echo "<b>Kreditų pirkimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>1 LTL = 5 000 kreditų</b><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Jūsų sąskaitoje: <b>$jusu_saskaitoje LTL</b> <br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"<b>Įveskite už kokia sumą pirksite:</b><br/>
<form action='account.php?id=credit_purchase2&amp;' method='post'>
<input  name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"4\" title=\"kiek\"/><br/>
<input class='button' type='submit' value='Toliau'/></form>";}

if ($id == "credit_purchase2") {if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 
$g_kaina = 1*$kiek;  
$kiek_gaus = 5000*$g_kaina; 
if ($litai < $g_kaina) { $er = "Nepakankamas likutis jūsų sąskaitoje"; }
if ($g_kaina == "") { $er = "Paliktas tuščias laukelis."; }

if ($er == ""){
$gavote = @number_format($kiek_gaus, 0, ',', ' ');
$isleidote = @number_format($g_kaina, 2, ',', ' ');
$likutis = @number_format($litai, 2, ',', ' ');
$er = "Sekmingai nusipirkote <b>$gavote</b> kreditų.<br/> Išleidote <b>$isleidote LTL</b>, jūsų sąskaitoje liko <b>$likutis LTL</b>";
        $fp = @fopen("kronoss/$nick.txt", "w");
        @fwrite($fp, $kronu + $kiek_gaus);
        @fclose($fp);
		
		        $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - $g_kaina);
        @fclose($fp);
	}
echo"$er<br/>";}


if ($id == "log"){
include_once("icludekitainf/function.php");
function aps($xe){
    return trim(mysql_real_escape_string(stripslashes(htmlspecialchars($xe, ENT_QUOTES, 'utf-8'))));
}
 $psl = aps($_GET['psl']);
echo"Sąskaitos pildymo logas.</div><div class=\"meniu\" style=\"text-align: left;\">";
  $viso = @mysql_result(mysql_query("SELECT COUNT(*) FROM payment_log WHERE kas='$nick'"),0);
    if($viso > 0){
		   echo" 
      <table class=table align=center>
       <tr>
        <th><b>#</b></th>
        <th>Suma</th>
        <th>Laikas</th>
		<th>Mokėjimo būdas</th>
       </tr>	";
    $rezultatu_rodymas=10;
            $total = @intval(($viso-1) / $rezultatu_rodymas) + 1;
            if (empty($psl) or $psl < 0) $psl = 1;
            if ($psl > $total) $psl = $total;
            $nuo_kiek=$psl*$rezultatu_rodymas-$rezultatu_rodymas;
     $query = mysql_query("SELECT * FROM payment_log WHERE kas='$nick' ORDER BY id DESC LIMIT $nuo_kiek,$rezultatu_rodymas");
     $puslapiu = ceil($viso/$rezultatu_rodymas);
     while ($row = mysql_fetch_assoc($query)) {
        echo "<tr align=center>
        <td>$row[id]</td>
		<td>$row[suma] $row[valiuta]</td>
        <td>$row[laikas]</td>
		<td>$row[budas]</td>
       </tr>"; 
unset($row);
}
  echo '</table></div><div class="meniu" style="text-align: center;">
				 '.puslapiavimas($puslapiu,$psl,'?id=log').'<br/>';
}
    else {
   echo 'Sąskaitos pildymo logas tuščias.';
   }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////SASKAITOS PILDYMAS//////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if ($id == "add"){ $country = $_GET['country']; 
$visopild = @mysql_result(mysql_query("SELECT COUNT(*) FROM payment_log WHERE kas='$nick'"),0);
$jusu_saskaitoje = @number_format($litai, 2, ',', ' ');
echo "<b>Sąskaitos pildymas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=log\">Sąskaitos pildymo logas <b>($visopild)</b></a>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"account.php?id=bank\">Pildyti sąskaitą per <b>El. bankininkystė</b></a>
</div><div class=\"meniu\" style=\"text-align: left;\">";
echo"
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">

<b>SMS apmokėjimo šalis:</b><br/>
<img src=\"http://dbf.us.lt/imgs/lt.gif\" alt=\"\"/><a href=\"account.php?id=add&amp;country=\"> Lietuva</a>  | 
<img src=\"http://dbf.us.lt/imgs/gb.gif\" alt=\"\"/><a href=\"account.php?id=add&amp;country=gb\"> Anglija</a>    | 
<img src=\"http://dbf.us.lt/imgs/de.gif\" alt=\"\"/><a href=\"account.php?id=add&amp;country=de\"> Voketija</a>  | 
<img src=\"http://dbf.us.lt/imgs/ie.gif\" alt=\"\"/><a href=\"account.php?id=add&amp;country=non\"> Airija</a>  | 
<img src=\"http://dbf.us.lt/imgs/dk.gif\" alt=\"\"/><a href=\"account.php?id=add&amp;country=non\"> Danija</a>  | 
<img src=\"http://dbf.us.lt/imgs/nor.gif\" alt=\"\"/><a href=\"account.php?id=add&amp;country=nor\"> Norvegija</a>  | 
<img src=\"http://dbf.us.lt/imgs/se.gif\" alt=\"\"/><a href=\"account.php?id=add&amp;country=non\"> Švedija</a>  <br/>

</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";

if ($country == ""){ echo"
<b>LIETUVA: </b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
Papildyti sąskaitos balansą: <b>+10 LTL</b> <br/>
SMS tekstas: <b> DBF1 $nick</b><br/>
Siuntimo nr.: <b>1398</b><br/>
Kaina: <b>0.30 EUR</b> <br/>
</div><div class=\"meniu\" style=\"text-align: left;\">

Papildyti sąskaitos balansą:  <b>+37 LTL</b> <br/>
SMS tekstas: <b>DBF3  $nick</b><br/>
Siuntimo nr.: <b>1398</b><br/>
Kaina: <b>1.00 EUR</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">

Papildyti sąskaitos balansą: <b>+60 LTL</b> <br/>
SMS tekstas: <b>DBF5 $nick</b><br/>
Siuntimo nr.: <b>1398</b><br/>
Kaina: <b>1.50 EUR</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">

Papildyti sąskaitos balansą: <b>+90 LTL </b> <br/>
SMS tekstas: <b>DBF7  $nick</b><br/>
Siuntimo nr.: <b>1398</b><br/>
Kaina: <b>2.00 EUR</b>  <br/>
</div><div class=\"meniu\" style=\"text-align: left;\">

Papildyti sąskaitos balansą: <b>+190 LTL </b><br/>
SMS tekstas: <b>DBF9  $nick</b><br/>
Siuntimo nr.: <b>1398</b><br/>
Kaina: <b>4.00 EUR</b>  <br/>
</div><div class=\"meniu\" style=\"text-align: left;\">

Papildyti sąskaitos balansą: <b>+490 LTL </b><br/>
SMS tekstas: <b>DBF10  $nick</b><br/>
Siuntimo nr.: <b>1398</b><br/>
Kaina: <b>10.00 EUR</b>  <br/>";}

if ($country == "de"){ echo"
<b>VOKETIJA:</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
Papildyti sąskaitos balansą <b>+169 LTL</b><br/>
SMS tekstas: <b>PJP4 DB1 $nick</b><br/>
Siuntimo nr.: <b>82555 </b><br/>
Kaina: <b>1.99 EUR</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
Papildyti sąskaitos balansą <b>+422 LTL</b><br/>
SMS tekstas: <b>PJP3 DB5 $nick</b><br/>
Siuntimo nr.: <b>82555 </b><br/>
Kaina: <b>4.99 EUR</b><br/>";}

if ($country == "gb"){ echo"
<b>ANGLIJA:</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
Papildyti sąskaitos balansą <b>+65 LTL</b><br/>
SMS tekstas: <b>PIP DB1 $nick</b><br/>
Siuntimo nr.: <b>84383 </b><br/>
Kaina: <b>1.00 GBP</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
Papildyti sąskaitos balansą <b>+214 LTL</b><br/>
SMS tekstas: <b>PIP DB3 $nick</b><br/>
Siuntimo nr.: <b>84459 </b><br/>
Kaina: <b>3.00 GBP</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
Papildyti sąskaitos balansą <b>+393 LTL</b><br/>
SMS tekstas: <b>PIP DB5 $nick</b><br/>
Siuntimo nr.: <b>80556 </b><br/>
Kaina: <b>5.00 GBP</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
Papildyti sąskaitos balansą <b>+865 LTL</b><br/>
SMS tekstas: <b>PIP DB10 $nick</b><br/>
Siuntimo nr.: <b>79910 </b><br/>
Kaina: <b>10.00 GBP</b><br/>";}

if ($country == "nor"){ echo"
<b>NORVEGIJA:</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
Papildyti sąskaitos balansą <b>+49 LTL</b><br/>
SMS tekstas: <b>PJP DBF1 $nick</b><br/>
Siuntimo nr.: <b>2333 </b><br/>
Kaina: <b>10.00 NOK</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">

Papildyti sąskaitos balansą <b>+160 LTL</b><br/>
SMS tekstas: <b>PJP DBF3 $nick</b><br/>
Siuntimo nr.: <b>2333 </b><br/>
Kaina: <b>30.00 NOK</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">

Papildyti sąskaitos balansą <b>+600 LTL</b><br/>
SMS tekstas: <b>PJP DBF5 $nick</b><br/>
Siuntimo nr.: <b>2333 </b><br/>
Kaina: <b>100.00 NOK</b><br/>
";}

if ($country == "non"){ echo"
Sukurtų raktažodžių iš šios šalies nėra. Jeigu norite, kad raktažodžiai būtų sukurti, parašykite administratoriui ir jis artimiausiu metu juos sukurs.
<a href=\"pagrindinis.php?id=support\"><b>Rašyti žinutė</b></a><br/>";}
}

if ($id == "bank"){
$OrderID=  "$nick"; 
if ($_POST['gen']) {

$signPassword = '79eeb8ca96eec65fecbd9603c2b07a48';
$projectId = '48289'; 

$arrFields = array(
   	'projectid' => '48289',  
	'orderid' => $OrderID,
	'lang' => 'LTL',
	'amount' => $_POST['Amount'],
	'currency' => 'EUR',
	'accepturl' => 'http://dbf.us.lt/pagrindinis.php',
	'cancelurl' => 'http://dbf.us.lt/pagrindinis.php',
	'callbackurl' => 'http://dbf.us.lt/libwebtopay/callback_bank.php',
	'payment' => $_POST['Bankas'],
	'country' => 'LT',
	'logo' => '',
	'p_firstname' => '',
	'p_lastname' => '',
	'p_email' => $_POST['elpastas'],
	'p_street' => '',
	'p_city' => '',
	'p_state' => '',
	'p_zip' => '',
	'p_countrycode' => '',
	'test' => '0'

);

# -- Do sign --
$data = '';

foreach ($arrFields as $num => $value) if (trim($value) != '') $data .= sprintf("%03d", strlen($value)) . strtolower($value);

$sign = md5($data . $signPassword);

		echo "<form method=post action=\"https://www.mokejimai.lt/pay/\">";
		foreach ($arrFields as $num => $value)
		{
		print '<input type="hidden" size="70" name="' . $num . '" value="' . $value . '">';
		}
		
		echo '
		<input type="hidden" size="70" name="sign" value="' . $sign . '">';
echo'<input type="hidden" name="PayText" value="Už balansa. (Nr. [order_nr]) [site_name]">
Jūs būsite perkeltas į apmokėjimo puslapį.<br />
	</div><div class="line"></div><div class="meniu" style="text-align: center;">
Perkate balansa už  <b>'. $_POST['Amount']/100 .' EUR</b> <br />
Gausite žaidimo litų  <b>'. $_POST['Amount']*0.8 .'</b> <br />
</div><div class="meniu" style="text-align: center;"> 
<input class="green_sm2" type="submit" class="button" value="Mokėti">
</form>
</div><div class="meniu" style="text-align: center;"> 
Sąskaita bus papildyta iš karto po apmokėjimo.<br/>
';
} else {
echo'
	  Sąskaita bus papildyta automatiškai po apmokėjimo.<br/>
	  Kiek gausite ltl parodys pasirinkus visus sumą ir paspaudus "toliau"<br/>
	   </div><div class="line"></div><div class="meniu" style="text-align: center;">
	<form method="post" action="">

	<input type="hidden" name="gen" value="1">
  
   Pasirinkite norimą papildymo sumą: 
	<br />
    <select name="Amount" class="input">
    <option value="300">3 EUR</option>
    <option value="600">6 EUR</option>
    <option value="1200">12 EUR</option>
    <option value="2400">24 EUR</option>
	<option value="5000">50 EUR</option>

    </select><br/>
	</div><div class="meniu" style="text-align: center;">
	El. paštas: <br />
	<input  name="elpastas" type="text" maxlength="150" title="elpastas" value=""/><br/>
	</input></div><div class="meniu" style="text-align: center;">
	 Banko pasirinkimas:
	<br />
    <select name="Bankas" class="input">
	 <option value=""></option>
	 <option value="wallet">Paysera sąskaitą</option>
 <option value="vb2">AB SEB bankas</option>
    <option value="hanza">AB bankas &quot;Swedbank&quot;</option>
    <option value="nord">AB bankas &quot;DNB&quot;</option>
    <option value="ukio">AB &#362;kio bankas</option>
    <option value="sampo">AB Danske bankas</option>
    <option value="sb">AB &#352;iauli&#371; bankas</option>
    <option value="nordealt">AB Nordea Bank</option>
    </select><br/>
      <input class="green_sm2" type="submit" class="button" value="Toliau"><br/>';}
}

if ($id == "paypal"){

	# -- Do sign --
if ($_POST['gen']) {
		echo'<form name="paypal" action="https://www.paypal.com/cgi-bin/webscr" onsubmit="return validateInput();" method="post">
	<input name="url" value="https://www.paypal.com/cgi-bin/webscr" type="hidden">
	<input name="cmd" value="_xclick" type="hidden">
    <input name="lc" value="EU" type="hidden">
	<input name="currency_code" value="EUR" type="hidden">
	<input name="business" value="toponedeals@gmail.com" type="hidden">
	<input name="item_name" value="Saskaitos pirkimas [s1]" type="hidden">
	<input name="custom" value="" type="hidden">
	<input name="first_name" value="A" type="hidden">
	<input name="last_name" value="B" type="hidden">
	<input name="item_number" value="'.$nick.'" type="hidden">
		<input name="amount" value="'. $_POST['amount'] .'" type="hidden">
    <input name="notify_url" value="http://dbf.us.lt/pagrindinis.php" type="hidden">
<input type="hidden" name="gen" value="1">
 
	';
		echo '
		<input type="hidden" size="70" name="sign" value="' . $sign . '">';
echo'<input type="hidden" name="PayText" value="Už balansa. (Nr. [order_nr]) [site_name]">
Jūs būsite perkeltas į apmokėjimo puslapį.<br />
	</div><div class="line"></div><div class="meniu" style="text-align: center;">
Perkate balansa už  <b>'. $_POST['amount'] .' EUR</b> <br />
Gausite žaidimo litų  <b>'. $_POST['amount']*75 .'</b> <br />
</div><div class="meniu" style="text-align: center;"> 
<input class="green_sm2" type="submit" class="button" value="Mokėti">
</form><br/>
';
} else {
echo'
	  Sąskaita bus papildyta nuo 1 iki 24 valandų.<br/>
	  Kiek gausite ltl parodys pasirinkus visus sumą ir paspaudus "toliau"<br/>
	   </div><div class="line"></div><div class="meniu" style="text-align: center;">
	<form method="post" action="">

	<input type="hidden" name="gen" value="1">
  
   Pasirinkite norimą papildymo sumą: 
	<br />
    <select name="amount" class="input">
    <option value="3">3 EUR</option>
    <option value="6">6 EUR</option>
    <option value="12">12 EUR</option>
    <option value="24">24 EUR</option>
	<option value="50">50 EUR</option>
	<option value="100">100 EUR</option>
    </select><br/>
  
      <input class="green_sm2" type="submit" class="button" value="Toliau"><br/>';}
	
}
echo"
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"account.php?id=\">Į Sąskaita</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";



print '</body></html>';
?>