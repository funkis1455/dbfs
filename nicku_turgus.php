<?php
$kur = "Nicku turgus";
include ("config.php");
include_once("icludekitainf/start.php");

if ($lygis < "150")
{
echo "<b>Žaidėjų \"nick\" turgus</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Į nick turgu galima patekti tik nuo 150 lygio</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>";}else{

if ($id == ""){ 
$lj = glob("nicks/*.txt"); 
for ($p=0; $p < count($lj); $p++){ 
$ei = @explode("|",file_get_contents($lj[$p])); 
if ($ei[6]+24*60*60<time()){ 

$privatujj = "Tavo prekes nicko niekas nenupirko"; 
$atidaryma = @fopen("sun/$ei[0].txt", "a");
@fwrite($atidaryma, "@SISTEMA|$privatujj|$laikas|\n");
@fclose($atidaryma);
@unlink($lj[$p]); 
}}

$nuskk = glob("nicks/*.txt"); 
$viso_tm = count($nuskk);
$puslapiu_skaicius = 20;

echo "<b>Žaidėjų \"nick\" turgus</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"nicku_turgus.php?id=idet\">Įdėti savo nicką</a><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"nicku_turgus.php?id=atsaukt\">Atšaukti savo pardavimus</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";

if ($nuskk == ""){
echo "Žaidėjų \"nick\" turgus tuščias<br/>";
}
else
{
if ($page == ""){
$page = 1; }
$next = $page + 1;
$back = $page - 1;
if ($page == 1){ 
$nuo = 0;
$iki = $puslapiu_skaicius;
}
else
{
$nuo = $page * $puslapiu_skaicius - $puslapiu_skaicius;
$iki = $page * $puslapiu_skaicius; }

if ($viso_tm <= $page * $puslapiu_skaicius)
{ $iki = $viso_tm; }
for ($c = $nuo; $c < $iki; $c++)
{
$r = @file($nuskk[$c]); 
$e = explode("|",$r[0]); 
$pavd = str_replace(array("nicks/",".txt"),"",$nuskk[$c]); 
echo"<a href=\"nicku_turgus.php?id=preke&amp;ka=$pavd\">$e[1] [ $e[7] LTL]</a><br/>"; }
$viso_puslapiu = $viso_tm / $puslapiu_skaicius;
$viso_puslapiai = 0;
$starto_skaicius = 1;
while ($viso_puslapiai < $viso_puslapiu)
{
if ($page == $starto_skaicius)
{
echo "[$starto_skaicius]";
}
else
{ 
echo "<a href=\"nicku_turgus.php?id=&amp;page=$starto_skaicius\">($starto_skaicius)</a>"; }
$viso_puslapiai++;
$starto_skaicius++;
}}
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "idet"){
echo "<b>Nicko įdėjimas į turgų</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<form action='nicku_turgus.php?id=dedu' method='post'>
Žaidėjo nickas kuri gaus sąskaita už nupirkta nicką:<br/>
<input name=\"nicks\" type=\"text\" maxlength=\"12\" title=\"Nickas\"/><br/>
Prašomą sąskaitos suma:<br/><input name=\"kj\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kronos\"/><br/>
<input type='submit' value='Įdėti'></input></form>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"nicku_turgus.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "dedu"){ 
$nicks = $_POST['nicks'];
$kj = $_POST['kj'];
$kj=ereg_replace("[^0-9.]","",$kj);

if ($kj == ""){ $bad = "Prašome įvesti norima kaina!"; }
if ($lygis < "150"){ $bad = "Jūsų nick per prastas minimum 150 lygio!"; }

$hex=explode(".",$kj);
if (count($hex)>2){ $bad = "Prašome įvesti norima kaina!"; }
if (strlen($hex[1]) > 2){ $bad = "Prašome įvesti norima kaina!"; }
if (count($hex)>2){ $bad = " Prašome įvesti norima kaina!"; }
if (count($hex)<2){ if (substr($hex[0],0,1)==0){ $bad = " Prašome įvesti kaina normaliu formatu, PVZ: 1"; }}
if (!file_exists("zaideju pagrindinai statusai/$nicks.txt")){ $bad = "Nickas kuris turėtų gauti sąskaita neegzistuoja!"; }

if (file_exists("nicks/$nick-1.txt")){ 
$bad = "$nick jau įdetas!"; }

if ($bad == ""){  $bad = "Įdėta";
$tim = time(); 
$fop = fopen("nicks/$nick-1.txt", "w+");
        fwrite($fop, "$nick|$nick|$nicks|$c|$m|$laikas|$tim|$kj|\n");
        fclose($fop);
        chmod("nicks/$nick-1.txt",0777); 
		 $nustatymai[11] = "";
include("icludekitainf/nustatymai.php");
}
echo "<b>Nicko įdėjimas į turgų</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
$bad<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"nicku_turgus.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "preke" && file_exists("nicks/$ka.txt")){ 
$e = explode("|",file_get_contents("nicks/$ka.txt")); 
$likt = round((($e[6]+24*60*60)-time())/60,0);
echo "<b>$e[1]</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Parduodamas nickas:</b> <a href=\"pagrindinis.php?id=apie&amp;ka=$e[1]\">$e[1]</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Nicką parduoda:</b> <a href=\"pagrindinis.php?id=apie&amp;ka=$e[2]\">$e[2]</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Įdėjimo data:</b> $e[5]<br/></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Prekė dings už:</b> $likt min<br/></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Prašoma sumą:</b> $e[7] LTL<br/></div><div class=\"meniu\" style=\"text-align: left;\">
Visi kiti saugumo slaptažodžiai bus panaikinti,nupirkus nika gausite apsaliučiai viska kas jame yrą!<br/>
<form action='nicku_turgus.php?id=perku&amp;ka=$ka' method='post'>
Naujas slaptazodis:
<input name=\"papa\" type=\"text\" maxlength=\"15\" title=\"Slaptazodis\"/><br/>
<input type='submit' value='Pirkti'></input></form>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"nicku_turgus.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "perku" && file_exists("nicks/$ka.txt")){ 

$papa2 = htmlspecialchars( $_POST['papa2']);
$papa = htmlspecialchars( $_POST['papa']);
	
    $e = explode("|",file_get_contents("nicks/$ka.txt")); 
    $pi = explode("|",file_get_contents("zaideju pagrindinai statusai/$e[1].txt")); 

$kj=ereg_replace("[^0-9.]","",$kj); 
if (!file_exists("account/$nick.txt")){ $litai = 0; } else { $litai = @file_get_contents("account/$nick.txt"); }
$e = explode("|",file_get_contents("nicks/$ka.txt")); 
if ($litai < $e[7]){ $bad = "Jums nepakanka sąskaitos likutis</b>"; }
if ($papa == ""){ $bad = "Neivestas slaptazodis</b>"; }

if ($bad == ""){ 

$e = explode("|",file_get_contents("nicks/$ka.txt")); 
$pi = explode("|",file_get_contents("zaideju pagrindinai statusai/$e[1].txt")); 

$bad = "Nupirkta."; 

$fop = fopen("account/$nick.txt", "w+");
fwrite($fop,$litai-$e[7]);
fclose($fop);

$papa = md5($papa);
$fp = fopen("zaideju pagrindinai statusai/$e[1].txt", "w");
fwrite($fp, "$pi[0]|$papa|$pi[2]|$pi[3]|$pi[4]|$pi[5]|$pi[6]|$pi[7]|$pi[8]|$pi[9]|$pi[10]|$pi[11]|$pi[12]|$pi[13]|$pi[14]|$pi[15]|$pi[16]|$pi[17]|$pi[18]|$pi[19]|$pi[20]||$pi[22]|$pi[23]||\n");
fclose($fp);


if (!file_exists("account/$e[2].txt")){ $litai2 = 0; } else { $litai2 = @file_get_contents("account/$e[2].txt"); }
$fop = fopen("account/$e[2].txt", "w+");
fwrite($fop,$litai2+$e[7]);
fclose($fop);
$laikas = date("Y-m-d H:i:s");
$privatuj = "Tavo preke ($e[0]) nicku turguje nupirko $nick, gavai $e[7] LTL."; 

$atidaryma = fopen("sun/$e[2].txt", "a");
fwrite($atidaryma, "@SISTEMA|$privatuj|$laikas|\n");
fclose($atidaryma);

$cyks2 = explode("|",@file_get_contents("zaideju pagrindinai statusai/$e[2].txt")); 
$fop = fopen("zaideju pagrindinai statusai/$e[2].txt", "w");
fwrite($fop, "$cyks2[0]|$cyks2[1]|$cyks2[2]|$cyks2[3]|$cyks2[4]|$cyks2[5]|$cyks2[6]|$cyks2[7]|$cyks2[8]|$cyks2[9]|$cyks2[10]|$cyks2[11]|$cyks2[12]|$cyks2[13]|+|$cyks2[15]|$cyks2[16]|$cyks2[17]|$cyks2[18]|$cyks2[19]|$cyks2[20]|$cyks2[21]|$cyks2[22]|$cyks2[23]|$cyks2[24]|$cyks2[25]|$cyks2[26]|$cyks2[27]|$cyks2[28]|$cyks2[29]|$cyks2[30]|$cyks2[31]|$cyks2[32]|$cyks2[33]|$cyks2[34]|$cyks2[35]|$cyks2[36]|$cyks2[37]|$cyks2[38]|$cyks2[39]|$cyks2[40]|");
fclose($fop);
@unlink("nicks/$ka.txt"); 
        
}
echo "<b>Nickų turgus</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
$bad<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"nicku_turgus.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "atsaukt"){
@unlink("nicks/$nick-1.txt"); 
echo "<b>Nickų turgus</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Atšaukta!<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"nicku_turgus.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

}
print '</body></html>';

?>