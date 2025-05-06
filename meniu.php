<?php
$kur = "Meniu";
include ("config.php");
include_once("icludekitainf/start.php");

if ($id == ""){ 
$zzz = @file("sun/$nick.txt");
$kiek_pmu = @count($zzz); 
$viso = mysql_result(mysql_query("SELECT COUNT(*) FROM pm WHERE gavejas='$nick' "),0);
echo"<b>MENIU</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"meniu.php?id=deletede\">Ištrinti nicką</a><br/>
[&#8226;] <a href=\"inbox.php\">Žinutės  (<b>$viso</b>)</a><br/>
[&#8226;] <a href=\"meniu.php?id=pm\">Sistemos žinutės (<b>$kiek_pmu</b>)</a><br/>
[&#8226;] <a href='meniu.php?id=black_list'>Juodasis sąrašas</a><br/>
[&#8226;] <a href=\"meniu.php?id=nustatyti_nr\">Mano tel.nr. (slaptažodžio sugražinimui)</a><br/>
[&#8226;] <a href=\"meniu.php?id=keisti_pass\">Keisti slaptažodį</a><br/>
[&#8226;] <a href=\"meniu.php?id=css\">Žaidimo stiliaus keitimas</a><br/>
[&#8226;] <a href=\"meniu.php?id=nustatymai\">Greitasis meniu</a><br/>
[&#8226;] <a href=\"meniu.php?id=anketa\">Asmenine informacija</a><br/>
[&#8226;] <a href=\"meniu.php?id=keisti_asmenini_topic\">Nicko titulinis topic</a><br/>
[&#8226;] <a href=\"pagrindinis.php?id=search\">Žaidėjo paieška</a><br/>
[&#8226;] <a href=\"meniu.php?id=smiles\">Veidukai</a> [<b>74</b>]<br/>";

if (($stat == "mod") or($stat == "mod2") or ($stat == "mod3") or ($stat == "mod4") or ($stat == "Adminas")){
 echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>1 lygio Moderatoriaus meniu:</b></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"moderator.php?id=mod_log\">Moderatoriu logas</a><br/>
[&#8226;] <a href=\"moderator.php?id=uzbaninti\">Užbaninti žaidėją</a><br/>
[&#8226;] <a href=\"moderator.php?id=ban_log\">Užbaninimo logas</a><br/>
[&#8226;] <a href=\"moderator.php?id=pmlog\">PM logas</a><br/>
[&#8226;] <a href=\"moderator.php?id=topic_logas\">Topic keitimo logas</a><br/>"; 
}
if (($stat == "mod2") or ($stat == "mod3") or ($stat == "mod4") or ($stat == "Adminas")){
 echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>2 lygio Moderatoriaus meniu:</b></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"moderator.php?id=valyti_chata\">Pokalbiu išvalymas</a><br/>
[&#8226;] <a href=\"moderator.php?id=perlaidos_log\">Sąskaitos perlaidos logas</a><br/>"; 
}

if (($stat == "mod3") or ($stat == "mod4") or ($stat == "Adminas")){
 echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>3 lygio Moderatoriaus meniu:</b></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"moderator.php?id=bals\">Kurti balsavimą</a><br/></b>
[&#8226;] <a href=\"moderator.php?id=unban_log\">Atbaninti logas</a><br/></b>
[&#8226;] <a href=\"moderator.php?id=unban\">Atbaninti vartotoją</a><br/></b>
[&#8226;] <a href=\"moderator.php?id=ips\">Žaidėjo paieška pagal IP</a><br/></b>"; 
}

if (($stat == "mod3") or ($stat == "mod4") or ($stat == "Adminas")){
 echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>4 lygio Moderatoriaus meniu:</b></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"moderator.php?id=off_mode\">Nuimti moderatoriaus statusą</a> (isjungtas)<br/>"; 
}

if ($stat == "Adminas"){
 echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Administracijos meniu</b></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"moderator.php?id=trinti_nenaud\">Įštrinti nenaudojamus vartotojus</a><br/>
[&#8226;] <a href=\"moderator.php?id=payment_list\">Mokėjimų statistika</a><br/>"; 
}
echo"</div><div class='line'></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}

if($id == 'black_list')
{
 echo "<b>Juodasis sąrašas</b></div><div class=\"meniu\" style=\" text-align: center;\">";
echo "Juodasis sąrašas - įtraukus žaidėją į juodą sąrašą ir jis jums negalės siusti žinučių! Jei jums atsibodo žaidėjų resursų prašymas ir žinučių siuntimas ištisai.<br/>
 </div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">  
<form action=\"meniu.php?id=black_add\" method=\"post\">
Pridėti žaidėją į juodajį sąrašą:<br/>
<input name=\"name\" type=\"text\" maxlength=\"30\"/><br/></div><div class=\"meniu\" style=\"text-align: center;\">  
<input type=\"submit\" value=\"Prideti!\"/><br/>
</form>  ";
$gau = mysql_num_rows(mysql_query("SELECT * FROM black_list WHERE nick='$nick'"));

if($gau < 1){echo " </div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\"><font color='red'><b>Juodajame sąraše nieko nėra!</b></font><br/>";}
else{
echo" </div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
$pusl = 20;
$viso_pm = $gau;
if(!isset($_GET['nuo'])){$nuo = 0;}
if(isset($_GET['nuo'])){$nuo = $_GET['nuo'];}
if($nuo > $viso_pm){$nuo = 0;}
$iki = $nuo + $pusl;
if($iki > $viso_pm){$iki = $viso_pm;}
$on = mysql_query("SELECT * FROM black_list WHERE nick='$nick' LIMIT $nuo, $pusl");
$online = $nuo;
while ($onn = mysql_fetch_row($on))
{
$online++;
echo "".$ico." <b>$onn[2]</b> [<a href=\"meniu.php?id=black_delete&vrd=$onn[2]\">x</a>]<br/>";
}

$vis_p = ceil($viso_pm / $pusl);
$pus = ceil($iki / $pusl);
$toliau = $nuo + $pusl;
$atgal = $nuo - $pusl;
$pr = $pus - 1;
$pt = $pus + 1;
echo" </div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
if($pus > 1){

echo "<b>&#171;</b><a href=\"meniu.php?id=black_list&y=$wel&nuo=$atgal\">Atgal</a>";} echo " [$pus] "; if($vis_p > $pus){echo "<a href=\"meniu.php?ka=black_list&y=$wel&nuo=$toliau&co=black\">Toliau</a><b>&#187;</b>";}
echo " </div><div class=\"meniu\" style=\"text-align: center;\">Viso puslapi&#371;:$vis_p<br/>";
}
echo"</div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"meniu.php\">Atgal</a><br/>
<a href=\"pagrindinis.php\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if($id == 'black_delete')
{
echo"<b>Juodasis sąrašas</b><br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
$vrd = @ereg_replace("[^A-Za-z0-9_]","",$_GET['vrd']);
$check = mysql_num_rows(mysql_query("SELECT * FROM black_list WHERE  nore='$vrd' and nick='$nick' LIMIT 1"));
if($check<1){echo " Šis žaidėjas jau pašalintas iš juodajo sąrašo!";}else{

mysql_query("DELETE FROM black_list WHERE nore='$nick' and nick='$nick'");
echo "Sėkmingai pašalinai <b>$vrd</b> iš jūsų juodojo sąrašo...<br/>";
}
echo"</div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"meniu.php?id=black_list\">Atgal</a><br/>
<a href=\"pagrindinis.php\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if($id == 'black_add')
{
echo"<b>Juodasis sąrašas</b><br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
$ka = isset($_POST['name']) ? preg_replace("/[^A-Za-z0-9_]/","",$_POST['name'])  : null;

if (!file_exists("zaideju pagrindinai statusai/$ka.txt")){$klaida=" Šis žaidėjas neegzistuoja!";}
if($ka == $nick){ $klaida="Save į juodajį sąrašą negalima įtraukti!";}
$checkcc = mysql_num_rows(mysql_query("SELECT * FROM black_list WHERE nore='$ka' and nick='$nick' LIMIT 1"));
if($checkcc>0){echo "Šis žaidėjas jau ir taip jūsų juodajame sąraše!";
echo"</div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"meniu.php?id=black_list\">Atgal</a><br/>
<a href=\"pagrindinis.php\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
elseif(isset($klaida) and $klaida!="")
{
echo "$klaida";
echo"</div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"meniu.php?id=black_list\">Atgal</a><br/>
<a href=\"pagrindinis.php\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
else
{
echo "Žaidėjas <b>$ka</b> sėkmingai pridėtas į jūsų juodajį sąrašą, nuo šiol jis negalės jums siųsti PM žinučių!<br/>";

mysql_query("INSERT INTO black_list SET nick='$nick', nore='$ka'") or die(mysql_error());
echo"</div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"meniu.php?id=black_list\">Atgal</a><br/>
<a href=\"pagrindinis.php\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
}

if ($id == "anketa"){

echo"<b>Asmenine informacija</b><br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
echo"<form action='meniu.php?id=nketa' method='post'>
<b>Nustatymas: </b> "; if ($nustatymai[18] == "+"){echo"Nerodyti";}else{echo"Rodyti";}echo"<br/>
<select name=\"offers\">";
echo "<option value=\"-\">Rodyti</option>";
echo "<option value=\"+\">Nerodyti</option>";
echo"</select><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Vardas:</b><br/>
<input class=\"anketa_input\" name=\"name\" type=\"text\" format=\"*N\" maxlength=\"15\"value=\"$nustatymai[13]\"/><br/></div><div class=\"meniu\" style=\"text-align: left;\">
<b> Lytis: </b>  $nustatymai[14]<br/>
<input type=\"radio\" name=\"player_gender\" value= 'Vaikinas' checked=\"checked\"/>Vaikinas<br/>
<input  type=\"radio\" name=\"player_gender\" value= 'Mergina'/>Mergina<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Miestas:</b><br/>
<input class=\"anketa_input\" name=\"city\" type=\"text\" format=\"*N\" maxlength=\"15\"value=\"$nustatymai[15]\"/><br/><br/>
 <b>Gimimo data</b> (pvz:1999/01/31)<br/>
<input class=\"anketa_input\" name=\"date\" type=\"text\" format=\"*N\" maxlength=\"10\"value=\"$nustatymai[16]\"/><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Aprašymas:</b><br/>
<textarea rows=\"3\"  name=\"anketa\" maxlength=\"100\"/>$nustatymai[17]</textarea><br/>
<input type='submit'  value='Nustatyti'/></form>
</div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"meniu.php\">Atgal</a><br/>
<a href=\"pagrindinis.php\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "nketa"){
if($_GET['about'] == "" or $_GET['name'] == "" or $_GET['player_gender'] == "" or $_GET['city'] == "" or $_GET['data'] == "" or $_GET['anketa'] == "" or $_GET['offers'] == ""){
$name = htmlspecialchars($_POST['name']);
$player_gender = htmlspecialchars($_POST['player_gender']);
$city = htmlspecialchars($_POST['city']);
$date = htmlspecialchars($_POST['date']);
$anketa = htmlspecialchars($_POST['anketa']);
$offers = htmlspecialchars($_POST['offers']);}
else
{
$name = htmlspecialchars($_GET['name']);
$player_gender = htmlspecialchars($_GET['player_gender']);
$city = htmlspecialchars($_GET['city']);
$date = htmlspecialchars($_GET['date']);
$anketa = htmlspecialchars($_GET['anketa']);
$offers = htmlspecialchars($_POST['offers']);}

            $arr = array("<", ">", "&", "^", "%", "'", '"', "$", "\n", "l", "|", "$$", "$");
		   $name = str_replace($arr, "", $name);
		   $city = str_replace($arr, "", $city);
		   $date = str_replace($arr, "", $date);
		   $anketa = str_replace($arr, "", $anketa);
		 
$nustatymai[13] =  "$name";
$nustatymai[14] =  "$player_gender";
$nustatymai[15] =  "$city";
$nustatymai[16] =  "$date";
$nustatymai[17] =  "$anketa";
$nustatymai[18] =  "$offers";
include("icludekitainf/nustatymai.php");
echo"<b>Pakeista!</b><br/>
</div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"meniu.php?id=anketa\">Atgal</a><br/>
<a href=\"pagrindinis.php\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "nustatyti_nr"){
if ($nustatymai[11] == "0" or $nustatymai[11] == "" or $nustatymai[11] == "-" or $nustatymai[11] == "+"){
echo"<b>Mano telelefono numeris</b></div><div class=\"meniu\" style=\"text-align: center;\">
<form action=\"meniu.php?id=nustatyti_nr2\" method=\"post\">
Nusistatykite čia savo mobiliojo telefono numerį, kad galetu jums sistema atsiusti į jį jūsų nick slaptažodį, jeigu netyčia jį pamiršite arba kas nors pavoks jūsų nick.<br/>
</div><div class=\"meniu\" style=\"text-align: center;\"><b>Demesio!!!</b> Numerį galima nusistatyti tik viena karta, tad jį įveskite teisingai!<br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Jūsų telefono numeris (pvz: +37069122950):<br/>
+370<input name=\"nr\" type=\"text\" format=\"*N\" maxlength=\"8\" title=\"Numeris\"/><br/>
<input type='submit' value='Išsaugoti'></input></form>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php\">Atgal</a><br/>
<a href=\"pagrindinis.php?nick=$nick&amp;pass=$pass&amp;id=\">Į Pagrindinį</a></div><div class=\"foot\">$bottom</div></div>";}
else
{
echo"<b>Mano telelefono numeris</b></div><div class=\"meniu\" style=\"text-align: center;\">
Numeris: <b>$nustatymai[11]</b><br/>
<br/>
Pamiršus slaptažodį siuskit sms numeriu <b>1398</b> įraše teksta <b>PAS $nick</b>, sms kaina <b>1 Lt</b> ir slaptažodis bus primintas į ta numerį kuri irašet.<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php\">Atgal</a><br/>
<a href=\"pagrindinis.php\">Į Pagrindinį</a></div><div class=\"foot\">$bottom</div></div>";}
}

if ($id == "nustatyti_nr2")
{
$nr = htmlspecialchars($_POST['nr']);
$nr= @ereg_replace("[^0-9]","",$nr); 

if ($nr == ""){$wrong = "Nenurodei telefono numerio!";}
if (strlen($nr) != 8){$wrong = "Nurodytas telefono numeris neteisingas!";}
if ($nustatymai[11] != 0){$wrong = "Telefono numeris jau nustatytas!";}

if ($wrong == "")
{
 $nustatymai[11] = "+370$nr";
include("icludekitainf/nustatymai.php");

$wrong = "Telefono numeris nustatytas";
}
 echo"
$wrong<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=nustatyti_nr\">Atgal</a><br/>
<a href=\"pagrindinis.php\">Į Pagrindinį</a></div><div class=\"foot\">$bottom</div></div>";}


if ($id == "deletede"){ 
echo"<b>Ar tikrai norite ištrinti savo nicką?</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Pastaba!</b> Ištrinus savo nick jūs nebegalėsite jo sugražinti, tad tikrai apsispreskite ar jis jums reikalingas.<br/>
<form action='meniu.php?id=deleted_nick' method='post'>
Slaptažodis:<br/>
<input name=\"slaptikas\" type=\"password\" maxlength=\"30\" title=\"Pass\"/><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<input type='submit' value='Ištrinti'/></form>
</div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"meniu.php\">Atgal</a><br/>
<a href=\"pagrindinis.php\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "deleted_nick") {
$slaptikas = htmlspecialchars( $_POST['slaptikas']);
$slaptikas = ereg_replace("[^A-Za-z0-9_-]", "", $slaptikas);
$slaptikasm = md5($slaptikas);
if ($slaptikasm != $pass){echo"Slaptažodis neteisingas!";}
else{
echo"<b>Nikas sėkmingai ištrintas, jo sugražinti nebegalima!</b>";
        $po = @file_get_contents("zaideju pagrindinai statusai/$nick.txt");
        $pi = explode("|",$po);
		@unlink("darinfos/$nick.ly");
       $array= @glob(('*')); for($i=0;$i<count($array);$i++) { if(@file_exists("$array[$i]/$nick.txt")) { 
	   @unlink("$array[$i]/$nick.txt");
@unlink("reputacija/balsavo/$nick.txt");
@unlink("reputacija/neigiama/$nick.txt");
@unlink("reputacija/teigiama/$nick.txt");	
@unlink("darinfos/$nick.ly"); 
@unlink("kitaaainf/$nick.ly");
@unlink("susijungimas/siulo/$nick.txt");
@unlink("susijungimas/susijunge/$nick.txt");
mysql_query("DELETE FROM `ip` WHERE `nick` = '$nick'") or die(mysql_error());
mysql_query("DELETE FROM `black_list` WHERE `nick` = '$nick'") or die(mysql_error());
mysql_query("DELETE FROM `loterija` WHERE `nick` = '$nick'") or die(mysql_error());
mysql_query("DELETE FROM `sms_top` WHERE `nick` = '$nick'") or die(mysql_error());

	  } } }
        echo"
</div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"meniu.php\">Atgal</a><br/>
<a href=\"pagrindinis.php\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "deleted_comment") {
if ($ka != $nick){echo"<b>Komentarai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Klaida...
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{

echo"<b>Komentarai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Jūs sėkmingai išvalete savo komentarus.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
unlink("komentarai/$nick.txt");}}

if ($id == "keisti_asmenini"){
$zinute = htmlspecialchars( $_POST['zinute']);
$zinute = str_replace("$","$$",$zinute);
$zinute = str_replace("|","l",$zinute);
$arr = array("^","%","\n");
$zinute = str_replace($arr,"",$zinute);
include("smiles.php"); 
if (substr_count($zinute, "<img src=")>5){ $zin = "Perdaug smailu!"; }
if (strlen($zinute) > 200){ $zin = "Topic per ilgas!"; }
if ($zinute == "") { $zin = "Neparašytas topic!"; }
if ($lygis < 100){ $zin = "Galėsi tik nuo 100 lygio!"; }
if ($zin == ""){
$zin = "Asmeninis topic pakeistas";
$nustatymai[19] =  "$zinute";
include("icludekitainf/nustatymai.php");
}
echo"<b>Asmenine informacija</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
$zin<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "keisti_asmenini_topic"){
echo"<b>Titulinis topic</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<small>Čia galite pateikti asmeninis topic kurį norite jog matytų kiti žaidėjai.</small></div><div class=\"meniu\" style=\"text-align: center;\">
<form action='meniu.php?id=keisti_asmenini&amp;' method='post'>
<textarea rows=\"5\"  name=\"zinute\" maxlength=\"200\"/>$nustatymai[19]</textarea><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<input type='submit' value='Toliau'/></form>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=&amp;\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "smiles"){
echo"<b>Veidukų Sąrašas [1/4]</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
:) <img src=\"imgs/smiles/1.gif\" alt=\":)\"/><br/>
:D <img src=\"imgs/smiles/2.gif\" alt=\":D\"/><br/>
=) <img src=\"imgs/smiles/3.gif\" alt=\"=)\"/><br/>
:P <img src=\"imgs/smiles/4.gif\" alt=\":P\"/><br/>
:( <img src=\"imgs/smiles/5.gif\" alt=\":(\"/><br/>
:* <img src=\"imgs/smiles/6.gif\" alt=\":*\"/><br/>
:sex <img src=\"imgs/smiles/7.gif\" alt=\":sex\"/><br/>
:fuck1 <img src=\"imgs/smiles/8.gif\" alt=\":fuck1\"/><br/>
:ne1 <img src=\"imgs/smiles/9.gif\" alt=\":ne1\"/><br/>
:lol <img src=\"imgs/smiles/10.gif\" alt=\":lol\"/><br/>
:A <img src=\"imgs/smiles/11.gif\" alt=\":A\"/><br/>
:B <img src=\"imgs/smiles/12.gif\" alt=\":B\"/><br/>
:O <img src=\"imgs/smiles/13.gif\" alt=\":O\"/><br/>
;) <img src=\"imgs/smiles/14.gif\" alt=\";)\"/><br/>
=D <img src=\"imgs/smiles/15.gif\" alt=\"=D\"/><br/>
:good <img src=\"imgs/smiles/16.gif\" alt=\":good\"/><br/>
:rofl <img src=\"imgs/smiles/17.gif\" alt=\":rofl\"/><br/>
:xi <img src=\"imgs/smiles/18.gif\" alt=\":xi\"/><br/>
:piktas <img src=\"imgs/smiles/19.gif\" alt=\":piktas\"/><br/>
:N <img src=\"imgs/smiles/20.gif\" alt=\":N\"/><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
<div class=\"topbar\">
<a href=\"meniu.php?id=smiles\"><b>[1/4]</b></a>
<a href=\"meniu.php?id=smiles2\">[2/4]</a>
<a href=\"meniu.php?id=smiles3\">[3/4]</a>
<a href=\"meniu.php?id=smiles4\">[4/4]</a></div>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=&amp;\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "smiles2"){
echo"<b>Veidukų Sąrašas [2/4]</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
:box <img src=\"imgs/smiles/21.gif\" alt=\":box\"/><br/>
:geda <img src=\"imgs/smiles/22.gif\" alt=\":geda\"/><br/>
:mojuoja","<img src=\"imgs/smiles/23.gif\" alt=\":mojuoja\"/><br/>
:cry <img src=\"imgs/smiles/24.gif\" alt=\":cry\"/><br/>
:pasikeles <img src=\"imgs/smiles/25.gif\" alt=\":pasikeles\"/><br/>
:? <img src=\"imgs/smiles/26.gif\" alt=\":?\"/><br/>
:ploja <img src=\"imgs/smiles/27.gif\" alt=\":ploja\"/><br/>
:flood <img src=\"imgs/smiles/28.gif\" alt=\":flood\"/><br/>
:ha <img src=\"imgs/smiles/29.gif\" alt=\":ha\"/><br/>
:yay <img src=\"imgs/smiles/30.gif\" alt=\":yay\"/><br/>
:yes <img src=\"imgs/smiles/31.gif\" alt=\":yes\"/><br/>
:aga <img src=\"imgs/smiles/32.gif\" alt=\":aga\"/><br/>
:ciki <img src=\"imgs/smiles/33.gif\" alt=\":ciki\"/><br/>
:liudnas <img src=\"imgs/smiles/34.gif\" alt=\":liudnas\"/><br/>
:graso <img src=\"imgs/smiles/35.gif\" alt=\":graso\"/><br/>
:/ <img src=\"imgs/smiles/36.gif\" alt=\":/\"/><br/>
:cool <img src=\"imgs/smiles/37.gif\" alt=\":cool\"/><br/> 
:gun <img src=\"imgs/smiles/38.gif\" alt=\":gun\"/><br/> 
:Z <img src=\"imgs/smiles/39.gif\" alt=\":Z\"/><br/>
:roze <img src=\"imgs/smiles/40.gif\" alt=\":roze\"/><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
<div class=\"topbar\">
<a href=\"meniu.php?id=smiles\">[1/4]</a>
<a href=\"meniu.php?id=smiles2\"><b>[2/4]</b></a>
<a href=\"meniu.php?id=smiles3\">[3/4]</a>
<a href=\"meniu.php?id=smiles4\">[4/4]</a></div>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=&amp;\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "smiles3"){
echo"<b>Veidukų Sąrašas [3/4]</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
:yee <img src=\"imgs/smiles/41.gif\" alt=\":yee\"/><br/>
:welcome <img src=\"imgs/smiles/42.gif\" alt=\":welcome\"/><br/>
:@ <img src=\"imgs/smiles/43.gif\" alt=\":@\"/><br/>
:fight <img src=\"imgs/smiles/44.gif\" alt=\" :fight\"/><br/>
:vemiu <img src=\"imgs/smiles/45.gif\" alt=\" :vemiu\"/><br/>
:stiprus <img src=\"imgs/smiles/46.gif\" alt=\" :stiprus\"/><br/>
:hug <img src=\"imgs/smiles/47.gif\" alt=\" :hug\"/><br/>
:kuklus <img src=\"imgs/smiles/48.gif\" alt=\" :kuklus\"/><br/>
:nuobodu <img src=\"imgs/smiles/49.gif\" alt=\" :nuobodu\"/><br/>
3/ <img src=\"imgs/smiles/50.gif\" alt=\" 3/\"/><br/>
:devil <img src=\"imgs/smiles/51.gif\" alt=\" :devil\"/><br/>
:smoke <img src=\"imgs/smiles/52.gif\" alt=\" :smoke\"/><br/>
:nono <img src=\"imgs/smiles/53.gif\" alt=\" :nono\"/><br/>
:kvaily <img src=\"imgs/smiles/54.gif\" alt=\" :kvaily\"/><br/>
:fuck2 <img src=\"imgs/smiles/55.gif\" alt=\" :fuck2\"/><br/>
:sirdis <img src=\"imgs/smiles/56.gif\" alt=\" :sirdis\"/><br/>
:nustebes <img src=\"imgs/smiles/57.gif\" alt=\" :nustebes\"/><br/>
:kiss <img src=\"imgs/smiles/58.gif\" alt=\" :kiss\"/><br/>
=/ <img src=\"imgs/smiles/59.gif\" alt=\" =/\"/><br/>
:ne2 <img src=\"imgs/smiles/60.gif\" alt=\" :ne2\"/><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
<div class=\"topbar\">
<a href=\"meniu.php?id=smiles\">[1/4]</a>
<a href=\"meniu.php?id=smiles2\">[2/4]</b></a>
<a href=\"meniu.php?id=smiles3\"><b>[3/4]</b></a>
<a href=\"meniu.php?id=smiles4\">[4/4]</a></div>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=&amp;\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "smiles4"){
echo"<b>Veidukų Sąrašas [4/4]</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
:neas <img src=\"imgs/smiles/61.gif\" alt=\" :neas\"/><br/>
:skanu <img src=\"imgs/smiles/62.gif\" alt=\" :skanu\"/><br/>
:ok <img src=\"imgs/smiles/63.gif\" alt=\" :ok\"/><br/>
:svajingas <img src=\"imgs/smiles/64.gif\" alt=\" :svajingas\"/><br/>
:iesko <img src=\"imgs/smiles/65.gif\" alt=\" :iesko\"/><br/>
:sorry <img src=\"imgs/smiles/66.gif\" alt=\" :sorry\"/><br/>
:stink <img src=\"imgs/smiles/67.gif\" alt=\" :stink\"/><br/>
:love <img src=\"imgs/smiles/68.gif\" alt=\" :love\"/><br/>
:stop <img src=\"imgs/smiles/69.gif\" alt=\" :stop\"/><br/>
:lool <img src=\"imgs/smiles/70.gif\" alt=\" :lool\"/><br/>
:kietas <img src=\"imgs/smiles/71.gif\" alt=\" :kietas\"/><br/>
:gokas <img src=\"imgs/smiles/gokas.gif\" alt=\" :gokas\"/><br/>
:vegeta <img src=\"imgs/smiles/vedzitas.gif\" alt=\" :vegeta\"/><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
<div class=\"topbar\">
<a href=\"meniu.php?id=smiles\">[1/4]</a>
<a href=\"meniu.php?id=smiles2\">[2/4]</b></a>
<a href=\"meniu.php?id=smiles3\">[3/4]</b></a>
<a href=\"meniu.php?id=smiles4\"><b>[4/4]</a></div>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=&amp;\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "keisti_pass"){
echo"<b>Slaptažodžio keitimas</b><br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Keisdami slaptažodi nenaudokit spec. simboliu, jie panaikinami!</b><br/>
Ir jūsų gerovėje, keisdami slaptažodi žiūrėkite, kad niekas nematytu ir nekeiskite lengvo.  Nenaudoti tų pačių slaptažodžių kaip kitose svetainėse, nes kitų svetainių adminai galės lengvai pavogti jūsų niką. <br/>
</div><div class=\"meniu\" style=\"text-align: center;\"><form action='meniu.php?id=keisti_slaptazodi2' method='post'>
Dabartinis slaptažodis:<br/>
<input name=\"pass3\" type=\"password\" maxlength=\"30\" title=\"Old Pass\"/><br/>
Naujas slaptažodis:<br/>
<input name=\"pass1\" type=\"password\" maxlength=\"30\" title=\"Pass\"/><br/>
Pakartokite slaptažodį:<br/>
<input name=\"pass2\" type=\"password\" maxlength=\"30\" title=\"Pass\"/><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<input type='submit' value='Keisti'/></form>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"meniu.php\">Atgal</a><br/>
<a href=\"pagrindinis.php\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "keisti_slaptazodi2"){
$pass1 = htmlspecialchars( $_POST['pass1']);
$pass2 = htmlspecialchars( $_POST['pass2']);
$pass3 = htmlspecialchars( $_POST['pass3']);
$pass1 = ereg_replace("[^A-Za-z0-9_-]", "", $pass1);
$pass2 = ereg_replace("[^A-Za-z0-9_-]", "", $pass2);
$pass3 = ereg_replace("[^A-Za-z0-9_-]", "", $pass3);
$passold = md5($pass3);
if ($passold != $inf[1]){$er = "Dabartinis slaptažodis neteisingas!";}
if ($pass1 == ""){$er = "Paliktas tuščias laukelis!";}
if ($pass2 == ""){$er = "Paliktas tuščias laukelis!";}
if ($pass3 == ""){$er = "Paliktas tuščias laukelis!";}
if ($pass1 != $pass2){$er = "Slaptažodžiai nesutampa!";}

if ($er == "")
{
$nustatymai[12] = "$pass2";
include("icludekitainf/nustatymai.php");
$er = "Slaptažodis pakeistas!<br/>Jei esi susiejes žymą, tai turi ir ja pakeisti, nes jungiantis su senaja rašys, kad blogas slaptažodis!";
$pass2 = md5($pass2);
$fp = fopen("$gameriai", "w");
fwrite($fp, "$lygis|$pass2|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
}
echo"$er<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"meniu.php\">Atgal</a><br/>
<a href=\"pagrindinis.php\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id =="css"){
echo"<b>Žaidimo stiliaus keitimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<big><font color='#7ea730'>•</font><font color='#c0e55c'>•</font></big> <a href=\"meniu.php?id=keisti_green\">Pakeisti į Žalią stilių</a> (<i>Šriftas: 12; Korpusas: 700;</i>)<br/> 
</div><div class=\"meniu\" style=\"text-align: left;\">
<big><font color='#1487c9'>•</font><font color='#adc4ff'>•</font></big> <a href=\"meniu.php?id=keisti_blue\">Pakeisti į Mėlyną stilių</a> (<i>Šriftas: 12; Korpusas: 700;</i>)<br/> 
</div><div class=\"meniu\" style=\"text-align: left;\">
<big><font color='#eb7e09'>•</font><font color='#ffbe4d'>•</font></big> <a href=\"meniu.php?id=keisti_orange\">Pakeisti į Oranžinė stilių</a> (<i>Šriftas: 12; Korpusas: 700;</i>)<br/> 
</div><div class=\"meniu\" style=\"text-align: left;\">
<big><font color='#6d6d6d'>•</font><font color='#cecece'>•</font></big> <a href=\"meniu.php?id=keisti_grey\">Pakeisti į pilką stilių</a> (<i>Šriftas: 12; Korpusas: 700;</i>)<br/> 
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<big><font color='#7ea730'>•</font><font color='#c0e55c'>•</font></big> <a href=\"meniu.php?id=keisti_green2\">Pakeisti į Žalią stilių</a> (<i>Šriftas: 14; Korpusas: 800;</i>)<br/> 
</div><div class=\"meniu\" style=\"text-align: left;\">
<big><font color='#1487c9'>•</font><font color='#adc4ff'>•</font></big> <a href=\"meniu.php?id=keisti_blue2\">Pakeisti į Mėlyną stilių</a> (<i>Šriftas: 14; Korpusas: 800;</i>)<br/> 
</div><div class=\"meniu\" style=\"text-align: left;\">
<big><font color='#eb7e09'>•</font><font color='#ffbe4d'>•</font></big> <a href=\"meniu.php?id=keisti_orange2\">Pakeisti į Oranžinė stilių</a> (<i>Šriftas: 14; Korpusas: 800;</i>)<br/> 
</div><div class=\"meniu\" style=\"text-align: left;\">
<big><font color='#6d6d6d'>•</font><font color='#cecece'>•</font></big> <a href=\"meniu.php?id=keisti_grey2\">Pakeisti į pilką stilių</a> (<i>Šriftas: 14; Korpusas: 800;</i>)<br/> 
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<big><font color='#7ea730'>•</font><font color='#c0e55c'>•</font></big> <a href=\"meniu.php?id=keisti_green3\">Pakeisti į Žalią stilių</a> (<i>Šriftas: 16; Korpusas: 1000;</i>)<br/> 
</div><div class=\"meniu\" style=\"text-align: left;\">
<big><font color='#1487c9'>•</font><font color='#adc4ff'>•</font></big> <a href=\"meniu.php?id=keisti_blue3\">Pakeisti į Mėlyną stilių</a> (<i>Šriftas: 16; Korpusas: 1000;</i>)<br/> 
</div><div class=\"meniu\" style=\"text-align: left;\">
<big><font color='#eb7e09'>•</font><font color='#ffbe4d'>•</font></big> <a href=\"meniu.php?id=keisti_orange3\">Pakeisti į Oranžinė stilių</a> (<i>Šriftas: 16; Korpusas: 1000;</i>)<br/> 
</div><div class=\"meniu\" style=\"text-align: left;\">
<big><font color='#6d6d6d'>•</font><font color='#cecece'>•</font></big> <a href=\"meniu.php?id=keisti_grey3\">Pakeisti į pilką stilių</a> (<i>Šriftas: 16; Korpusas: 1000;</i>)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "keisti_green"){
$nustatymai[20] = "style_green";
include("icludekitainf/nustatymai.php");
echo"Žaidimo išvaizda pakeistas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if ($id == "keisti_blue"){
$nustatymai[20] = "style_blue";
include("icludekitainf/nustatymai.php");
echo"Žaidimo stilius pakeistas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if ($id == "keisti_orange"){
$nustatymai[20] = "style_orange";
include("icludekitainf/nustatymai.php");
echo"Žaidimo stilius pakeistas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if ($id == "keisti_grey"){
$nustatymai[20] = "style_grey";
include("icludekitainf/nustatymai.php");
echo"Žaidimo stilius pakeistas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if ($id == "keisti_green2"){
$nustatymai[20] = "style_green2";
include("icludekitainf/nustatymai.php");
echo"Žaidimo išvaizda pakeistas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if ($id == "keisti_blue2"){
$nustatymai[20] = "style_blue2";
include("icludekitainf/nustatymai.php");
echo"Žaidimo stilius pakeistas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if ($id == "keisti_orange2"){
$nustatymai[20] = "style_orange2";
include("icludekitainf/nustatymai.php");
echo"Žaidimo stilius pakeistas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if ($id == "keisti_grey2"){
$nustatymai[20] = "style_grey2";
include("icludekitainf/nustatymai.php");
echo"Žaidimo stilius pakeistas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if ($id == "keisti_green3"){
$nustatymai[20] = "style_green3";
include("icludekitainf/nustatymai.php");
echo"Žaidimo išvaizda pakeistas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if ($id == "keisti_blue3"){
$nustatymai[20] = "style_blue3";
include("icludekitainf/nustatymai.php");
echo"Žaidimo stilius pakeistas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if ($id == "keisti_orange3"){
$nustatymai[20] = "style_orange3";
include("icludekitainf/nustatymai.php");
echo"Žaidimo stilius pakeistas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if ($id == "keisti_grey3"){
$nustatymai[20] = "style_grey3";
include("icludekitainf/nustatymai.php");
echo"Žaidimo stilius pakeistas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "chat"){
echo "<b>Chat nustatymas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<form action='my_meniu.php?id=chat2' method='post'>
<b>Chat žinučių skaičius:</b><br/>
<select name=\"chatozinu\">";
echo "<option value=\"5\">5</option>";
echo "<option value=\10\">10</option>";
echo "<option value=\"15\">15</option>";
echo "<option value=\"20\">20</option>";
echo "<option value=\"30\">30</option>";
echo"</select><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<b>Chat rodymas:</b><br/>
<select name=\"rodymasx\">";
echo "<option value=\"+\">Rodyti</option>";
echo "<option value=\"-\">Nerodyti</option>";
echo"</select><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<input type='submit' value='Keisti'></form>";echo"
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php\">Atgal</a><br/>
<a href=\"pagrindinis.php\">Į Pagrindinį</a></div><div class=\"foot\">$bottom</div></div>";}

 if ($id == "chat2"){
 $chatozinu = htmlspecialchars( $_POST['chatozinu']);
 $rodymasx = htmlspecialchars( $_POST['rodymasx']);
 if ($chatozinu > 30){ echo "Max 30.";
 echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php\">Atgal</a><br/>
<a href=\"pagrindinis.php\">Į Pagrindinį</a></div>";}else{
echo"<b>Sekmingai nustatyta!</b>";
$nustatymas[31] = "$chatozinu";
$nustatymas[4] = "$rodymasx";
include("icludekitainf/nustatymai.php");
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=chat\">Atgal</a><br/>
<a href=\"pagrindinis.php\">Į Pagrindinį</a></div><div class=\"foot\">$bottom</div></div>";}}



if ($id =="banner"){
echo"<b>Bannerio keitimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/logo-0.png' ALT=''><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"meniu.php?id=keisti_0bnr\">Naudoti šį bannerį</a><br/> 
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/logo-1.png' ALT=''><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"meniu.php?id=keisti_1bnr\">Naudoti šį bannerį</a><br/> 
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/logo-2.png' ALT=''><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"meniu.php?id=keisti_2bnr\">Naudoti šį bannerį</a><br/> 
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/logo-3.png' ALT=''><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"meniu.php?id=keisti_3bnr\">Naudoti šį bannerį</a><br/> 
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/logo-4.png' ALT=''><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"meniu.php?id=keisti_4bnr\">Naudoti šį bannerį</a><br/> 
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/logo-5.png' ALT=''><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"meniu.php?id=keisti_5bnr\">Naudoti šį bannerį</a><br/> 
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/logo-6.png' ALT=''><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"meniu.php?id=keisti_6bnr\">Naudoti šį bannerį</a><br/> 
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/logo-7.png' ALT=''><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"meniu.php?id=keisti_7bnr\">Naudoti šį bannerį</a><br/> 
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/logo-8.png' ALT=''><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"meniu.php?id=keisti_8bnr\">Naudoti šį bannerį</a><br/> 
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/logo-9.png' ALT=''><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"meniu.php?id=keisti_9bnr\">Naudoti šį bannerį</a><br/> 
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "keisti_0bnr"){
 $mm[110] = 0;
include("icludekitainf/mm.php");
echo"Banner pakeistas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if ($id == "keisti_1bnr"){
 $mm[110] = 1;
include("icludekitainf/mm.php");
echo"Banner pakeistas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if ($id == "keisti_2bnr"){
 $mm[110] = 2;
include("icludekitainf/mm.php");
echo"Banner pakeistas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if ($id == "keisti_3bnr"){
 $mm[110] = 3;
include("icludekitainf/mm.php");
echo"Banner pakeistas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if ($id == "keisti_4bnr"){
 $mm[110] = 4;
include("icludekitainf/mm.php");
echo"Banner pakeistas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if ($id == "keisti_5bnr"){
 $mm[110] = 5;
include("icludekitainf/mm.php");
echo"Banner pakeistas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if ($id == "keisti_6bnr"){
 $mm[110] = 6;
include("icludekitainf/mm.php");
echo"Banner pakeistas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if ($id == "keisti_7bnr"){
 $mm[110] = 7;
include("icludekitainf/mm.php");
echo"Banner pakeistas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if ($id == "keisti_8bnr"){
 $mm[110] = 8;
include("icludekitainf/mm.php");
echo"Banner pakeistas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if ($id == "keisti_9bnr"){
 $mm[110] = 9;
include("icludekitainf/mm.php");
echo"Banner pakeistas</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "pm")
{
$nlp2 = file("files for txt/nick_bans.txt");
$kiek_nlp2 = count($nlp2);
for ($l2 = 0; $l2 < $kiek_nlp2; $l2++)
{
    $koo2 = explode("|", $nlp2[$l2]);
    $uzb_lik2 = $koo2[1] - time();
    $uzb_lik22 = round(($uzb_lik2) / 60, 0);
    if ($nick == "$koo2[0]")
    {
        if (time() < $koo2[1])
        {
            echo "<b>Tu uzbanintas.<br/></b>";exit;
        }
    }
}
    echo "
	<b>Sistemos žinutės</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";

    $pm_direktorija = 'sun';
    $DATA_FILE = "$pm_direktorija/$nick.txt";
    $nuskk = file($DATA_FILE);
    $viso_pm = count($nuskk);
    $puslapiu_skaicius = 10;

    if ($viso_pm == 0)
    {
        echo "Tuščias.<br/>";
    }
    else
    {
        if ($page == "")
        {
            $page = 1;
        }

        $next = $page + 1;
        $back = $page - 1;

        if ($page == 1)
        {
            $nuo = 0;
            $iki = $puslapiu_skaicius;
        }
        else
        {
            $nuo = $page * $puslapiu_skaicius - $puslapiu_skaicius;
            $iki = $page * $puslapiu_skaicius;
        }

        if ($viso_pm <= $page * $puslapiu_skaicius)
        {
            $iki = $viso_pm;
        }

        $masyvo_apvertimas = array_reverse($nuskk);

        for ($c = $nuo; $c < $iki; $c++)
        {
            $int = explode('|', $masyvo_apvertimas[$c]);

            $nuo_ko = $int[0];
            $zinute = stripslashes($int[1]);
            $siunt_data = $int[2];
			$masyw = array("@","*", "#", "&", "~");
   
            $nuo_ko2 = str_replace($masyw, "", $nuo_ko);
            if ($nuo_ko == "@SISTEMA")
            {
                echo "<div class='got'><b>&#187; @SISTEMA</b>: $zinute<br/> [$siunt_data]</div>";
            }     

            else
            {
                if ($nuo_ko2 == $nick)
                {
                    $vrdr = $int[4];
                    if ($int[4] == "$admin")
                    {
                        $vrdr = "@$int[4]";
                    }
                    if ($int[4] != "$admin")
                    {
                        if (in_array("$int[4]\n", file("files for txt/mods.txt")))
                        {
                            $vrdr = "*$int[4]";
                        }
                    }
					                     if (in_array("$int[4]\n", file("files for txt/mods.txt")))
                        {
                            $vrdr = "~$int[4]";
                        }
                    			                     if (in_array("$int[4]\n", file("files for txt/mods.txt")))
                        {
                            $vrdr = "#$int[4]";
                        }
                    			                     if (in_array("$int[4]\n", file("files for txt/mods.txt")))
                        {
                            $vrdr = "&$int[4]";
                        }
                    echo "<div class='send'><i><b>&#171; to: <a href=\"pagrindinis.php?id=apie&amp;ka=$int[4]\">$vrdr</a></b> - $zinute<br/>[$siunt_data]</i><br/></div>
";
                }
                else
                {
                    echo "<div class='got'><b>&#187; <a href=\"pagrindinis.php?id=apie&amp;ka=$nuo_ko2\">$nuo_ko</a></b>: $zinute<br/><i>[$siunt_data]</i><br/>
                <a href=\"meniu.php?id=inr&amp;sk=$int[3]\">Atsakyti</a><br/></div>";
                }
            }
        }

        $viso_puslapiu = $viso_pm / $puslapiu_skaicius;

        $viso_puslapiai = 0;
        $starto_skaicius = 1;
        while ($viso_puslapiai < $viso_puslapiu)
        {
            if ($page == $starto_skaicius)
            {
                echo "<b>[$starto_skaicius]</b>";
            }
            else
            {
                echo "<a href=\"meniu.php?id=pm&amp;page=$starto_skaicius\">($starto_skaicius)</a>";
            }
            $viso_puslapiai++;
            $starto_skaicius++;

        }
        if ($viso_pm >= 100)
        {
            $fff = fopen("sun/$nick.txt", "w+");
            fwrite($fff, "");
            fclose($fff);
        }
    }
    echo '<onevent type="onenterforward"><refresh>
<setvar name="zinute" value=""/>
</refresh></onevent>';
    echo "</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Auto žinučių išvalymas kas 500 PM<br/></div><div class=\"meniu\" style=\"text-align: center;\">
Dabar yra: $viso_pm PM<br/>

</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";

    $fp1 = fopen("$gameriai", "w");
    fwrite($fp1, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|-|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
    fclose($fp1);
}


 if ($id == "nustatymai"){
echo "<b>Greitasis meniu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Ar rodyti greitaji meniu puslapio virsuje?</b> <br/>
<form action=\"meniu.php?id=topmeniu\" method=\"post\">
<Input type = 'Radio' Name ='isvaizda' value= '+'> Rodyti<br>
<Input type = 'Radio' Name ='isvaizda' value= '-'> Nerodyti<br>
<input type=\"submit\"  value=\"Nustatyti\"/></form>";
if ($nustatymai[0]  == "+") { echo"
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Jusu nustatytos nuorodos:</b><br/>";

$floodlaikrodukas = round(($floo-time())/60,1)+30;
if ($nustatymai[1]  == "+"){echo"<a href=\"pagrindinis.php?\">Pradžią</a> <a href=\"meniu.php?id=topmeniu2&amp;kas=1\">[x]</a> <br/>";}
if ($nustatymai[2]  == "+"){echo"<a href=\"meniu.php?id=pm\">PM</a> <a href=\"meniu.php?id=topmeniu2&amp;kas=2\">[x]</a> <br/>";}
if ($nustatymai[3]  == "+"){echo"<a href=\"meniu.php?id=\">Meniu</a> <a href=\"meniu.php?id=topmeniu2&amp;kas=3\">[x]</a> <br/>";}
if ($nustatymai[4]  == "+"){echo"<a href=\"forumas.php?id=\">Forumas</a> <a href=\"meniu.php?id=topmeniu2&amp;kas=4\">[x]</a> <br/>";}
if ($nustatymai[5]  == "+"){echo"<a href=\"pagrindinis.php?id=inventory\">Kapsulių dėžutė</a> <a href=\"meniu.php?id=topmeniu2&amp;kas=5\">[x]</a> <br/>";}
if ($nustatymai[6]  == "+"){echo"<a href=\"skill.php?\">Skillai</a> <a href=\"meniu.php?id=topmeniu2&amp;kas=6\">[x]</a> <br/>";}
if ($nustatymai[7]  == "+"){echo"<a href=\"pagrindinis.php?id=apie&amp;ka=$nick\">Apie $nick</a> <a href=\"meniu.php?id=topmeniu2&amp;kas=7\">[x]</a> <br/>";}
if ($nustatymai[8]  == "+"){echo"<a href=\"pagrindinis.php?id=top\">TOP</a> <a href=\"meniu.php?id=topmeniu2&amp;kas=8\">[x]</a> <br/>";}
if ($nustatymai[9]  == "+"){echo"<a href=\"aukcijonas.php?\">Turgus</a> <a href=\"meniu.php?id=topmeniu2&amp;kas=9\">[x]</a> <br/>";}
if ($nustatymai[10]  == "+"){echo"<a href=\"bank.php?\">Bankas</a> <a href=\"meniu.php?id=topmeniu2&amp;kas=11\">[x]</a> <br/>";}
echo"</div><div class=\"meniu\" style=\"text-align: left;\">
Prideti nuoroda:<br/>
<form action='meniu.php?id=nuorados&amp;' method='post'>
	<select name=\"nuorados\">";
echo "<option value=\"1\">Pradžią</option>";
echo "<option value=\"2\">PM</option>";
echo "<option value=\"3\">Meniu</option>";
echo "<option value=\"4\">Forumas</option>";
echo "<option value=\"5\">Kapsulių dėžutė</option>";
echo "<option value=\"6\">Skillai</option>";
echo "<option value=\"7\">Apie $nick</option>";
echo "<option value=\"8\">TOP</option>";
echo "<option value=\"9\">Turgus</option>";
echo "<option value=\"10\">Bankas</option>";
echo"</select><br/>
<input type='submit' value='Prideti'></input></form>";}echo"
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

 if ($id == "topmeniu"){
$isvaizda = ($_POST['isvaizda']);
$nustatymai[0] = $isvaizda;
include("icludekitainf/nustatymai.php");
echo "<b>Greitasis meniu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sekmingai nustatytą!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=nustatymai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

 if ($id == "nuorados"){
$nuorados = $_POST['nuorados']; 

if ($nuorados == "1"){
$nustatymai[1] =  "+";
include("icludekitainf/nustatymai.php");
echo "<b>Greitasis meniu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sekmingai nustatytą!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=nustatymai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($nuorados == "2"){
$nustatymai[2] =  "+";
include("icludekitainf/nustatymai.php");
echo "<b>Greitasis meniu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sekmingai nustatytą!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=nustatymai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($nuorados == "3"){
$nustatymai[3] =  "+";
include("icludekitainf/nustatymai.php");
echo "<b>Greitasis meniu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sekmingai nustatytą!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=nustatymai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($nuorados == "4"){
$nustatymai[4] =  "+";
include("icludekitainf/nustatymai.php");
echo "<b>Greitasis meniu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sekmingai nustatytą!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=nustatymai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($nuorados == "5"){
$nustatymai[5] =  "+";
include("icludekitainf/nustatymai.php");
echo "<b>Greitasis meniu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sekmingai nustatytą!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=nustatymai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($nuorados == "6"){
$nustatymai[6] =  "+";
include("icludekitainf/nustatymai.php");
echo "<b>Greitasis meniu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sekmingai nustatytą!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=nustatymai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($nuorados == "7"){
$nustatymai[7] =  "+";
include("icludekitainf/nustatymai.php");
echo "<b>Greitasis meniu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sekmingai nustatytą!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=nustatymai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($nuorados == "8"){
$nustatymai[8] =  "+";
include("icludekitainf/nustatymai.php");
echo "<b>Greitasis meniu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sekmingai nustatytą!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=nustatymai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
 
 if ($nuorados == "9"){
$nustatymai[9] =  "+";
include("icludekitainf/nustatymai.php");
echo "<b>Greitasis meniu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sekmingai nustatytą!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=nustatymai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

 if ($nuorados == "10"){
$nustatymai[10] =  "+";
include("icludekitainf/nustatymai.php");
echo "<b>Greitasis meniu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sekmingai nustatytą!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=nustatymai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


 
 }
 
 
if ($id == "topmeniu2"){

if ($kas == "1"){
$nustatymai[1] =  "-";
include("icludekitainf/nustatymai.php");
echo "<b>Greitasis meniu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sekmingai nustatytą!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=nustatymai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($kas == "2"){
$nustatymai[2] =  "-";
include("icludekitainf/nustatymai.php");
echo "<b>Greitasis meniu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sekmingai nustatytą!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=nustatymai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($kas == "3"){
$nustatymai[3] =  "-";
include("icludekitainf/nustatymai.php");
echo "<b>Greitasis meniu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sekmingai nustatytą!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=nustatymai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($kas == "4"){
$nustatymai[4] =  "-";
include("icludekitainf/nustatymai.php");
echo "<b>Greitasis meniu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sekmingai nustatytą!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=nustatymai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($kas == "5"){
$nustatymai[5] =  "-";
include("icludekitainf/nustatymai.php");
echo "<b>Greitasis meniu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sekmingai nustatytą!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=nustatymai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($kas == "6"){
$nustatymai[6] =  "-";
include("icludekitainf/nustatymai.php");
echo "<b>Greitasis meniu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sekmingai nustatytą!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=nustatymai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($kas == "7"){
$nustatymai[7] =  "-";
include("icludekitainf/nustatymai.php");
echo "<b>Greitasis meniu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sekmingai nustatytą!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=nustatymai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($kas == "8"){
$nustatymai[8] =  "-";
include("icludekitainf/nustatymai.php");
echo "<b>Greitasis meniu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sekmingai nustatytą!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=nustatymai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
 
 if ($kas == "9"){
$nustatymai[9] =  "-";
include("icludekitainf/nustatymai.php");
echo "<b>Greitasis meniu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sekmingai nustatytą!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=nustatymai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

 if ($kas == "10"){
$nustatymai[10] =  "-";
include("icludekitainf/nustatymai.php");
echo "<b>Greitasis meniu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sekmingai nustatytą!
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=nustatymai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

 
 }

print'</card></wml>';
?>