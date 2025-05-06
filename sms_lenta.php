<?php
$kur = "SMS lenta ";
include ("config.php");
include_once("icludekitainf/start.php");
$raktazodis1 = "SM1";
$raktazodis2 = "SM2";
$raktazodis3 = "SM3";
$raktazodis4 = "SM4";
$raktazodis5 = "SM5";
$raktazodis6 = "SM6";
$raktazodis7 = "SM7";
$raktazodis8 = "SM8";
$raktazodis9 = "SM9";
$raktazodis10 = "SM10";
$raktazodis12 = "SM12";
$raktazodis15 = "SM15";
$numeris = "1398";


if ($id == "kaledosbox"){
$kaledu_dovana = @file_get_contents("kaledos/$nick.txt");
$ip = $_SERVER['REMOTE_ADDR']; 
$a = @file("files for txt/kaledos.txt"); 
for ($i=0; $i<count($a); $i++){
$b = explode("|",$a[$i]); 
}
if ($b[0] == $ip){ echo "Kaledu dovana jau esate pasiemes";}else{

if ($kaledu_dovana == "+"){ echo  "Kaledu dovana jau esate pasiemes";}else{
if ($lygis < 180){ echo  "Jūs nesate pasiekęs 180 lygi."; 
}
else 
{
echo  "Jus sėkmingai pasiemet <b>Kalėdų dovaną</b> gavote  <br/>
8.50 LTL.<br/>
 100 000 000 exp.<br/>
 10 000 000 000 pinigu.<br/>

"; 
$lt_kaledos = @file_get_contents("account/$nick.txt");
$lt_kaledos = $lt_kaledos + 8.50;
@file_put_contents("account/$nick.txt", "$lt_kaledos");
		$exp = $exp + 100000000;
		$pinigai = $pinigai + 10000000000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
		/*$fx = @fopen("kaledos/$nick.txt","a");
 @fwrite($fx,"+");
 @fclose($fx);
		/*
$reg_ip = $_SERVER['REMOTE_ADDR']; 
$f = @fopen("files for txt/kaledos.txt","a");
 @fwrite($f,"$reg_ip|\n");
 @fclose($f); */
}}}
echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}



/*
if ($ka == "kaledosbox"){
$kaledu_dovana = @file_get_contents("kaledos/$nick.txt");
$ip = $_SERVER['REMOTE_ADDR']; 
$a = @file("files for txt/kaledos.txt"); 
for ($i=0; $i<count($a); $i++){
$b = explode("|",$a[$i]); 
if ($b[0] == $ip){ echo "Kaledu dovana jau esate pasiemes";}
else{
if ($kaledu_dovana == "+"){ echo "Kaledu dovana jau esate pasiemes";}else{
if ($lygis < 180){ echo  "Jūs nesate pasiekęs 180 lygio."; }
}
else 
{
echo "Jus sėkmingai įvykdėte pasiekimą gavote 250000 gyvybiu."; 
		$gyvybess =$gyvybess + 250000;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$mm[69] = "+";
include("icludekitainf/mm.php");
}} */
if ($id == "ideti")
{
$pinigais = @number_format($pinigai, 0, ',', ' ');
echo "<b>Patalpinti sms užsakymą</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<form method=\"post\" action=\"sms_lenta.php?id=ideti2\">
[&#8226;] Pildyti sąskaitos balansą +2LTL: <input type=\"radio\" name=\"pas\" value='to10' /> (Kaina: 1 Lt)<br />
[&#8226;] Pildyti sąskaitos balansą +7LTL: <input type=\"radio\" name=\"pas\" value='to11' /> (Kaina: 3 Lt)<br />
[&#8226;] Pildyti sąskaitos balansą +12LTL: <input type=\"radio\" name=\"pas\" value='to12' /> (Kaina: 5 Lt)<br />
[&#8226;] Pildyti sąskaitos balansą +27LTL: <input type=\"radio\" name=\"pas\" value='to13' /> (Kaina: 10 Lt)<br />
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] 2x didesnis pinigų gavimas iš kovų: <input type=\"radio\" name=\"pas\" value='to1' /> (Kaina: 3 Lt)<br />
[&#8226;] 3x didesnis pinigų gavimas iš kovų: <input type=\"radio\" name=\"pas\" value='to2' /> (Kaina: 5 Lt)<br />
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] 3x didesnis exp gavimas iš kovų: <input type=\"radio\" name=\"pas\" value='to3' /> (Kaina: 3 Lt)<br />
[&#8226;] 5x didesnis exp gavimas iš kovų: <input type=\"radio\" name=\"pas\" value='to4' /> (Kaina: 5 Lt)<br />
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] 3x didesnis nukaunamumas kovose: <input type=\"radio\" name=\"pas\" value='to5' /> (Kaina: 3 Lt)<br />
[&#8226;] 5x didesnis nukaunamumas kovose: <input type=\"radio\" name=\"pas\" value='to6' /> (Kaina: 5 Lt)<br />
</div><div class=\"meniu\" style=\"text-align: center;\">
Turite kreditų: <b> $pinigais</b><br/>
<b>Įrašyk kiek duosite už sms užsakymą?</b><br/>

<input name=\"atlygis\" type=\"text\" format=\"*N\" maxlength=\"100\" title=\"Kiek\"/><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<input type=\"submit\" value='Įdėti'/>
</form>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"sms_lenta.php\">Atgal</a><br/>
<a href=\"pagrindinis.php\">&#302; Praždią</a><br/></div><div class=\"foot\">$bottom</div></div>";}

if ($id == "ideti2")
{
$sms = $_POST['pas'];
$atlygis = $_POST['atlygis'];
$atlygis=@ereg_replace("[^0-9]","",$atlygis); 
if ($atlygis = false)
{
echo "<b>Klaida !</b>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"sms_lenta.php\">Atgal</a><br/>
<a href=\"pagrindinis.php\">&#302; Praždią</a><br/></div><div class=\"foot\">$bottom</div></div>";exit;
}
if (time() < $floo)
{
echo "<b>Palaukite keleta sekundžių</b>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"sms_lenta.php\">Atgal</a><br/>
<a href=\"pagrindinis.php\">&#302; Praždią</a><br/></div><div class=\"foot\">$bottom</div></div>";exit;
}
else
{
$atlygis = $_POST['atlygis'];
$atlygis = @ereg_replace("[^0-9]","",$atlygis); 
}

if ($atlygis < 1000000000)
{
echo "<b>Mažiausias atlygis gali buti 1 000 000 000 pinigų</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"sms_lenta.php\">Atgal</a><br/>
<a href=\"pagrindinis.php\">&#302; Praždią</a><br/></div><div class=\"foot\">$bottom</div></div>";exit;
}

if ($pinigai < $atlygis)
{
echo "<b>Tiek pinigų neturite!</b>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"sms_lenta.php\">Atgal</a><br/>
<a href=\"pagrindinis.php\">&#302; Praždią</a><br/></div><div class=\"foot\">$bottom</div></div>";exit;
}
else
{
if ($sms == "to1"){ $sms = "$sms5 $nick many2";     $kaina = "300";     $nr = "1398";}
if ($sms == "to2"){ $sms = "$sms10 $nick many3";     $kaina = "500";     $nr = "1398";}
if ($sms == "to3"){ $sms = "$sms5 $nick exp3";     $kaina = "300";     $nr = "1398";}
if ($sms == "to4"){ $sms = "$sms10 $nick exp5";     $kaina = "500";     $nr = "1398";}
if ($sms == "to5"){ $sms = "$sms5 $nick kg3";     $kaina = "300";     $nr = "1398";}
if ($sms == "to6"){ $sms = "$sms10 $nick kg5";     $kaina = "500";     $nr = "1398";}
if ($sms == "to7"){ $sms = "$sms3 $nick pad4";     $kaina = "300";     $nr = "1398";}
if ($sms == "to8"){ $sms = "$sms7 $nick pad3";     $kaina = "700";     $nr = "1398";}
if ($sms == "to9"){ $sms = "$sms15 $nick pad2";     $kaina = "1500";     $nr = "1398";}
if ($sms == "to10"){ $sms = "$sms3 $nick lt1";     $kaina = "100";     $nr = "1398";}
if ($sms == "to11"){ $sms = "$sms3 $nick lt3";     $kaina = "300";     $nr = "1398";}
if ($sms == "to12"){ $sms = "$sms5 $nick lt5";     $kaina = "500";     $nr = "1398";}
if ($sms == "to13"){ $sms = "$sms10 $nick lt10";     $kaina = "1000";     $nr = "1398";}
if ($sms == "to14"){ $sms = "$sms15 $nick lt15";     $kaina = "1500";     $nr = "1398";}

$uzsakovas = $nick;
$pinigai = $pinigai - $atlygis;
$last = @file_get_contents("files for txt/last.txt") + 1;
@file_put_contents("sms lenta/$last.txt", "$uzsakovas|$atlygis|$kaina|$sms|$last|$nr|");
@file_put_contents("files for txt/last.txt", "$last");

            $lks = time();
            $lks2 = time() + 10;
            $fp = fopen("$gameriai", "w");
            fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$lks2|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
            fclose($fp);
}
echo "
<b>Užsakymas sėkmingai patalpintas, dabar laukite kol išsius sms žinutę.</b><br />
</div><div class=\"line\"></div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"sms_lenta.php\">Atgal</a><br/>
<a href=\"pagrindinis.php\">&#302; Praždią</a><br/></div><div class=\"foot\">$bottom</div></div>";}

if ($id == "")
{
echo"<b>SMS Lenta</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"".$_SERVER['PHP_SELF']."?id=ideti\">Patalpinti savo užsakymą</a><br /></b></div>
<div class=\"meniu\" style=\"text-align: left;\">
";
if (glob("sms lenta/*.txt") == false)
{
echo "SMS lentoje nera užsakymu!";echo "
</div><div class=\"line\"></div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"pagrindinis.php?id=miestas\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">&#302; Praždią</a><br/></div><div class=\"foot\">$bottom</div></div>";
}
else
{
echo "";
$glob=glob("sms lenta/*.txt");
foreach($glob as $nob)
{
$get = @file_get_contents("$nob");
$ex = @explode("|", $get);
$uzsakovas = $ex[0];
$atlygis = $ex[1];
$kaina2 = $ex[2];
$uzsakymas = $ex[3];
$id_uz = $ex[4];
$nr = $ex[5];
$kaina2 = $kaina2 / 100;


echo"<div class=\"meniu\" style=\"text-align: left;\">";
$iterpasd = 'SM';
echo "
[&#8226;] SMS Kaina: <b>$kaina2 Lt </b><br />";
if ($kaina2 == "0.5")
{
$kaina2 = "05";
}

echo "
[&#8226;]  Užsakovas: <b>$uzsakovas</b><br />
";

$atlygiszaid = @number_format($atlygis, 0, ',', ' ');
echo "[&#8226;]  Atlygis: <b>$atlygiszaid pinigų.</b><br />
[&#8226;]  SMS Tekstas: ";


echo"<b>$iterpasd$kaina2 $nick $id_uz </b><br/>
[&#8226;]  Numeriu: <b>$nr </b><br/>
";

if ($uzsakovas == $nick or $nick == "funix" )
{
echo "
[&#8226;]  <b><a href=\"sms_lenta.php?id=trinti&amp;ka=$id_uz\">Atšaukti užsakymą</a></b><br/ >
";
}
echo"</div>";
}
echo "
</div><div class=\"line\"></div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"pagrindinis.php?id=miestas\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">&#302; Praždią</a><br/></div><div class=\"foot\">$bottom</div></div>";
}}

if ($id == "trinti")
{
if (file_exists("sms lenta/$ka.txt"))
{
$ex = @explode("|", @file_get_contents("sms lenta/$ka.txt"));
$uzsakovas = $ex[0];
$atlygis = $ex[1];
$kaina2 = $ex[2];
$uzsakymas = $ex[3];
$id_uz = $ex[4];
$nr = $ex[5];
$kaina2 = $kaina2 / 100;
if ($uzsakovas == $nick or $nick == "funix")
{
$pinigai = $pinigai + $atlygis;
            $lks2 = time() + 10;
            $fp = fopen("$gameriai", "w");
            fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$lks2|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
            fclose($fp);
@unlink("sms lenta/$ka.txt");
echo "<b>Užsakymas atšauktas, jūsų kreditai sugryžo pas jus.</b><br />
</div><div class=\"line\"></div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"pagrindinis.php?id=miestas\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">&#302; Praždią</a><br/></div><div class=\"foot\">$bottom</div></div>";}}}

print '</body></html>';
?>

