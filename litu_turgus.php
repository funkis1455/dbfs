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
$kur = "Litu turgus";
include ("config.php");
echo"<link href=\"css/$nustatymai[20].css\" rel=\"stylesheet\" type=\"text/css\"/>
</head>";

echo "<div class=\"in\"><div class=\"logo\"><img src=\"imgs/logo-$mm[110].png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center; border-top: 1px solid #000000;\">";

if ($lygis < "100"){
echo"<b>Turgus</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Į turgų galėsite patekti tik nuo 100 lygio!</b><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=miestas\">Atgal</a><br/>
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>
</card></wml>";exit;}

if ($id == ""){ 

$lj = glob("litu turgus/*.txt"); 
for ($p=0; $p < count($lj); $p++){ 
$ei = explode("|",@file_get_contents($lj[$p])); 
if ($ei[6]+3*60*60<time()){ 

$privatujj = "Tavo prekes ($ei[1] $ei[2]) turguje niekas nenupirko, ji sugrizo atgal pas tave"; 
    $cyks2 = explode("|",file_get_contents("zaideju pagrindinai statusai/$ei[0].txt")); 
   if($ei[3]=="p"){ $cyks2[7]=$cyks2[7]+$ei[1]; } 


if($ei[3]=="k"){ $tyuaq = explode("|",file_get_contents("darinfos/$ei[0].ly")); 
$tyuaq[$ei[4]]=$tyuaq[$ei[4]]+$ei[1]; 
$fp5g5 = fopen("darinfos/$ei[0].ly", "w");
fwrite($fp5g5,"$tyuaq[0]|$tyuaq[1]|$tyuaq[2]|$tyuaq[3]|$tyuaq[4]|$tyuaq[5]|$tyuaq[6]|$tyuaq[7]|$tyuaq[8]|$tyuaq[9]|$tyuaq[10]|$tyuaq[11]|$tyuaq[12]|$tyuaq[13]|$tyuaq[14]|$tyuaq[15]|$tyuaq[16]|$tyuaq[17]|$tyuaq[18]|$tyuaq[19]|$tyuaq[20]|$tyuaq[21]|$tyuaq[22]|$tyuaq[23]|$tyuaq[24]|$tyuaq[25]|$tyuaq[26]|$tyuaq[27]|$tyuaq[28]|$tyuaq[29]|$tyuaq[30]|$tyuaq[31]|$tyuaq[32]|$tyuaq[33]|$tyuaq[34]|$tyuaq[35]|$tyuaq[36]|$tyuaq[37]|$tyuaq[38]|$tyuaq[39]|$tyuaq[40]|$tyuaq[41]|$tyuaq[42]|$tyuaq[43]|$tyuaq[44]|$tyuaq[45]|$tyuaq[46]|$tyuaq[47]|$tyuaq[48]|$tyuaq[49]|$tyuaq[50]|$tyuaq[51]|$tyuaq[52]|$tyuaq[53]|$tyuaq[54]|$tyuaq[55]|$tyuaq[56]|$tyuaq[57]|$tyuaq[58]|$tyuaq[59]|$tyuaq[60]|$tyuaq[61]|$tyuaq[62]|$tyuaq[63]|$tyuaq[64]|$tyuaq[65]|$tyuaq[66]|$tyuaq[70]|$tyuaq[71]|");
fclose($fp5g5); } 

if($ei[3]=="s"){ 
$litai=$litai+$ei[1]; 
	$fp5g553 = fopen("account/$ei[0].txt", "w");
fwrite($fp5g553,"$litai");
fclose($fp5g553); 
} 
    $atidaryma = fopen("sun/$ei[0].txt", "a");
        fwrite($atidaryma, "@SISTEMA|$privatujj|$laikas|\n");
        fclose($atidaryma);
$fop = fopen("zaideju pagrindinai statusai/$ei[0].txt", "w");
        fwrite($fop, "$cyks2[0]|$cyks2[1]|$cyks2[2]|$cyks2[3]|$cyks2[4]|$cyks2[5]|$cyks2[6]|$cyks2[7]|$cyks2[8]|$cyks2[9]|$cyks2[10]|$cyks2[11]|$cyks2[12]|$cyks2[13]|+|$cyks2[15]|$cyks2[16]|$cyks2[17]|$cyks2[18]|$cyks2[19]|$cyks2[20]|$cyks2[21]|$cyks2[22]|$cyks2[23]|$cyks2[24]|$cyks2[25]|");
        fclose($fop);

@unlink($lj[$p]); 
}}
echo"<b>Litu Turgus</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
echo "<a href=\"aukcijonas.php\">Pinigų turgus</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
<a href=\"litu_turgus.php?id=idet\">Įdėti preke</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
<a href=\"litu_turgus.php?id=tava\">Mano prekes</a><br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";

      $nuskk = glob("litu turgus/*.txt"); 
      $viso_tm = count($nuskk);
      $puslapiu_skaicius = 20;
	  if (glob("litu turgus/*.txt") == false)
{
echo"Prekiu nera";
}
else
{
foreach (@glob("litu turgus/*.txt") as $a){

$name = str_replace(array("litu turgus/", ".txt"), "", $a);
$ex = count(file($a));
$arr[] = array("$ex", "$name");}
    $sk = count($arr);

if ($page == "")
    { $page = 1; }
        $next = $page + 1;
        $back = $page - 1;
        if ($page == 1)
        { $nuo = 0;
            $iki = $puslapiu_skaicius; } else
        { $nuo = $page * $puslapiu_skaicius - $puslapiu_skaicius;
            $iki = $page * $puslapiu_skaicius; }

if ($viso_tm <= $page * $puslapiu_skaicius)
        { $iki = $viso_tm; }
        for ($c = $nuo; $c < $iki; $c++)
        {
$r = @file($nuskk[$c]); 
$e = explode("|",$r[0]); 
$pavd = str_replace(array("litu turgus/",".txt"),"",$nuskk[$c]); 
$e[7] = @number_format($e[7], 2, ',', ' ');
echo"(&#187;) <a href=\"litu_turgus.php?id=preke&amp;ka=$pavd\">$e[0]  ($e[1] $e[2] už $e[7]LTL)</a>";
if ($vrd == "@$nick"){echo "<a href=\"litu_turgus.php?id=naikinti&amp;ka=$pavd\"><b>[x]</b></a>"; }
echo"<br/>";}

      $viso_puslapiu = $viso_tm / $puslapiu_skaicius;
      $viso_puslapiai = 0;
      $starto_skaicius = 1;
while($viso_puslapiai < $viso_puslapiu){
  if ($page == $starto_skaicius){
echo"[$starto_skaicius]";
}
else
{ 
echo"<a href=\"litu_turgus.php?id=&amp;page=$starto_skaicius\">[$starto_skaicius]</a>"; }

$viso_puslapiai++;
$starto_skaicius++;}}

echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=miestas\">Atgal</a><br/>
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "tava")
{ echo"<b>Turgus</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"
<a href=\"litu_turgus.php?id=idet\">Įdeti prekiu</a><br/></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"litu_turgus.php?id=\">Visų žaidėjų prekes</a><br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">"; 

$nuskk = glob("litu turgus/$nick-*.txt"); 
if ($nuskk != false)
{
$viso_tm = count($nuskk);

        for ($c =0; $c < $viso_tm; $c++)        {
$e = explode("|",file_get_contents($nuskk[$c])); 
$pavd = str_replace(array("litu turgus/",".txt"),"",$nuskk[$c]); 
echo"(&#187;) <a href=\"litu_turgus.php?id=preke&amp;ka=$ka\">$e[0]  ($e[1] $e[2] už $e[7]$)</a>
<a href=\"litu_turgus.php?id=grazinti&amp;ka=$pavd\">[x]</a>"; }
}
else
{
echo "Prekiu nera<br/>";
}
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=miestas\">Atgal</a><br/>
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "naikinti" && file_exists("litu turgus/$ka.txt")){ 
$kj=ereg_replace("[^0-9.]","",$kj); 

$e = explode("|",file_get_contents("litu turgus/$ka.txt")); 
if ($bad == ""){ 
$bad = "Prekė ištrinta sėkmingai."; 

    if ($vrd != "@$nick")
    {
echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?\">"; }
else {
    $infd = explode("|",file_get_contents("zaideju pagrindinai statusai/$e[0].txt"));

$fop = fopen("zaideju pagrindinai statusai/$e[0].txt", "w");
        fwrite($fop, "$infd[0]|$infd[1]|$infd[2]|$infd[3]|$infd[4]|$infd[5]|$infd[6]|$infd[7]|$infd[8]|$infd[9]|$infd[10]|$infd[11]|$infd[12]|$infd[13]|$infd[14]|$infd[15]|$infd[16]|$infd[17]|$infd[18]|$infd[19]|$infd[20]|$infd[21]|$infd[22]|$infd[23]|$infd[24]|$infd[25]|");
        fclose($fop);
$privatuj = "Tavo preke ($e[1] $e[2]) turguje ištriną  <b>$nick</b>! Nes jūsų preke neatitiko standartu."; 
$laikas = date("Y-m-d H:i:s");
$atidaryma = fopen("sun/$e[0].txt", "a");
        fwrite($atidaryma, "@SISTEMA|$privatuj|$laikas|\n");
        fclose($atidaryma);
    $cyks2 = explode("|",file_get_contents("zaideju pagrindinai statusai/$e[0].txt")); 
$fop = fopen("zaideju pagrindinai statusai/$e[0].txt", "w");
        fwrite($fop, "$cyks2[0]|$cyks2[1]|$cyks2[2]|$cyks2[3]|$cyks2[4]|$cyks2[5]|$cyks2[6]|$cyks2[7]|$cyks2[8]|$cyks2[9]|$cyks2[10]|$cyks2[11]|$cyks2[12]|$cyks2[13]|+|$cyks2[15]|$cyks2[16]|$cyks2[17]|$cyks2[18]|$cyks2[19]|$cyks2[20]|$cyks2[21]|$cyks2[22]|$cyks2[23]|$cyks2[24]|$cyks2[25]|");
        fclose($fop); 
@unlink("litu turgus/$ka.txt"); 
        
}
echo"$bad</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=miestas\">Atgal</a><br/>
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "preke" && file_exists("litu turgus/$ka.txt")){ 
$e = explode("|",file_get_contents("litu turgus/$ka.txt")); 
$likt = round((($e[6]+3*60*60)-time())/60,0);
$e[7] = @number_format($e[7], 0, ',', ' ');
echo"<b>Turgus</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Ar tikrai norite pirkti <b>$e[1] $e[2]</b> už <b>$e[7] LTL</b> iš <b>$e[0]</b> žaidėjo?
</div><div class=\"meniu\" style=\"text-align: left;\">
<a href=\"litu_turgus.php?id=perku&amp;ka=$ka\">Taip, Perku</a><br/>

</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"litu_turgus.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "perku" && file_exists("litu turgus/$ka.txt")){ 
$kj=@ereg_replace("[^0-9.]","",$kj); 
if (!file_exists("account/$nick.txt")){ $litai = 0; } else { $litai = file_get_contents("account/$nick.txt"); }
$e = explode("|",file_get_contents("litu turgus/$ka.txt")); 
if ($litai < $e[7]){ $bad = "Tiek LTL neturi!"; }
if ($bad == ""){ 
$bad = "Nupirkta."; 
$litai = file_get_contents("account/$nick.txt"); 
$litai= $litai - $e[7]; 
	$fp = @fopen("account/$nick.txt", "w");
@fwrite($fp,"$litai");
@fclose($fp); 

   
if($e[3]=="k"){ 
include("icludekitainf/nuskait.php"); 
$dari[$e[4]]=$dari[$e[4]]+$e[1]; 
    include("icludekitainf/iras2.php"); }
	if($e[3]=="s"){ 
$litai=$litai+$e[1]; 
	$fp5g553 = @fopen("account/$nick.txt", "w");
@fwrite($fp5g553,"$litai");
@fclose($fp5g553); 
@chmod("account/$nick.txt",0777); }
	
	$litaikito = file_get_contents("account/$e[0].txt");
$litaikito = $litaikito+$e[7];
	$fp5g553 = @fopen("account/$e[0].txt", "w");
@fwrite($fp5g553,"$litaikito");
@fclose($fp5g553); 
  
$privatuj = "Tavo preke ($e[1] $e[2]) turguje nupirko $nick, gavai $e[7] LTL"; 

$atidaryma = fopen("sun/$e[0].txt", "a");
        fwrite($atidaryma, "@SISTEMA|$privatuj|$laikas|\n");
        fclose($atidaryma);
    $cyks2 = explode("|",file_get_contents("zaideju pagrindinai statusai/$e[0].txt")); 
$fop = fopen("zaideju pagrindinai statusai/$e[0].txt", "w");
        fwrite($fop, "$cyks2[0]|$cyks2[1]|$cyks2[2]|$cyks2[3]|$cyks2[4]|$cyks2[5]|$cyks2[6]|$cyks2[7]|$cyks2[8]|$cyks2[9]|$cyks2[10]|$cyks2[11]|$cyks2[12]|$cyks2[13]|+|$cyks2[15]|$cyks2[16]|$cyks2[17]|$cyks2[18]|$cyks2[19]|$cyks2[20]|$cyks2[21]|$cyks2[22]|$cyks2[23]|$cyks2[24]|$cyks2[25]|");
        fclose($fop); 
@unlink("litu turgus/$ka.txt"); 
        
}

echo"$bad</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=miestas\">Atgal</a><br/>
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "grazinti" && file_exists("litu turgus/$ka.txt")){ 
$kj=@ereg_replace("[^0-9.]","",$kj); 
$e = explode("|",file_get_contents("litu turgus/$ka.txt")); 
$e2 = file_get_contents("litu turgus/$ka.txt"); 
if ($e[0] !== "$nick"){ echo "Tai ne tavo preke!"; }
else {

if ($bad == ""){ 
$bad = "Jūsų preke iš turgaus gryš po kelių sėkundžių"; 
$e[6] = "0"; 
$fop = fopen("litu turgus/$ka.txt", "w+");
        fwrite($fop, "$e[0]|$e[1]|$e[2]|$e[3]|$e[4]|$e[5]|$e[6]|$e[7]|\n");
        fclose($fop);
}
echo"$bad</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=miestas\">Atgal</a><br/>
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "idet"){ 
echo"
<b>Turgus</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\"><form action=\"litu_turgus.php?id=dedu\" method=\"post\">
Pasirink ką parduosite:<br/>
<select name=\"kan\">";

if ($dari[0] > 0){ echo"<option value=\"k0\">Soul stone [$dari[0]]</option>"; }
if ($dari[1] > 0){ echo"<option value=\"k1\">Saiyan tail [$dari[1]]</option>"; }
if ($dari[2] > 0){ echo"<option value=\"k2\">Ginyu material [$dari[2]]</option>"; }
if ($dari[3] > 0){ echo"<option value=\"k3\">Ginyu crystal [$dari[3]]</option>"; }
if ($dari[4] > 0){ echo"<option value=\"k4\">Yamma fruit [$dari[4]]</option>"; }
if ($dari[5] > 0){ echo"<option value=\"k5\">Microschem [$dari[5]]</option>"; }
if ($dari[6] > 0){ echo"<option value=\"k6\">Majin scroll [$dari[6]]</option>"; }
if ($dari[7] > 0){ echo"<option value=\"k7\">Magic ball [$dari[7]]</option>"; }
if ($dari[8] > 0){ echo"<option value=\"k8\">Fusion fail [$dari[8]]</option>"; }
if ($dari[9] > 0){ echo"<option value=\"k9\">Cloth [$dari[9]]</option>"; }
if ($dari[10] > 0){ echo"<option value=\"k10\">Kame cloth [$dari[10]]</option>"; }
if ($dari[11] > 0){ echo"<option value=\"k11\">Namekian cloth [$dari[11]]</option>"; }
if ($dari[12] > 0){ echo"<option value=\"k12\">Saiyan armor [$dari[12]]</option>"; }
if ($dari[13] > 0){ echo"<option value=\"k13\">Saiyan prince armor [$dari[13]]</option>"; }
if ($dari[14] > 0){ echo"<option value=\"k14\">Fusion cloth [$dari[14]]</option>"; }
if ($dari[15] > 0){ echo"<option value=\"k15\">Ginyu armor [$dari[15]]</option>"; }
if ($dari[16] > 0){ echo"<option value=\"k16\">Dragon armor [$dari[16]]</option>"; }
if ($dari[17] > 0){ echo"<option value=\"k17\">Saiyaman costume [$dari[17]]</option>"; }
if ($dari[18] > 0){ echo"<option value=\"k18\">Gyvybių eliksyras [$dari[18]]</option>"; }
if ($dari[19] > 0){ echo"<option value=\"k19\">Radaras [$dari[19]]</option>"; }
if ($dari[20] > 0){ echo"<option value=\"k20\">Drakono rutulių [$dari[20]]</option>"; }
if ($dari[22] > 0){ echo"<option value=\"k22\">Staff [$dari[22]]</option>"; }
if ($dari[23] > 0){ echo"<option value=\"k23\">Knife [$dari[23]]</option>"; }
if ($dari[24] > 0){ echo"<option value=\"k24\">Sword [$dari[24]]</option>"; }
if ($dari[25] > 0){ echo"<option value=\"k25\">God staff [$dari[25]]</option>"; }
if ($dari[26] > 0){ echo"<option value=\"k26\">Magic staff [$dari[26]]</option>"; }
if ($dari[27] > 0){ echo"<option value=\"k27\">Janemba sword [$dari[27]]</option>"; }
if ($dari[28] > 0){ echo"<option value=\"k28\">Ginyu sword [$dari[28]]</option>"; }
if ($dari[29] > 0){ echo"<option value=\"k29\">Yamcha sword [$dari[29]]</option>"; }
if ($dari[30] > 0){ echo"<option value=\"k30\">Yajirobe sword [$dari[30]]</option>"; }
if ($dari[31] > 0){ echo"<option value=\"k31\">Dragon sword [$dari[31]]</option>"; }
if ($dari[32] > 0){ echo"<option value=\"k32\">Trunks sword [$dari[32]]</option>"; }
if ($dari[34] > 0){ echo"<option value=\"k34\">Juodajų drakono rutulių [$dari[34]]</option>"; }
if ($dari[35] > 0){ echo"<option value=\"k35\">KĮ matuoklis [$dari[35]]</option>"; }
if ($dari[44] > 0){ echo"<option value=\"k44\">Namek Drakono rutulių [$dari[44]]</option>"; }

echo"</select>
<br/>Kiek parduosite:<br/>
<input name=\"da\" type=\"text\" maxlength=\"50\" format=\"*N\" title=\"info\" value=\"\" size=\"15\"/><br/>
Pilna kaina (LTL):<br/>
<input name=\"kj\" type=\"text\" maxlength=\"50\" title=\"info\" value=\"\" size=\"15\"/><br/>
<input type=\"submit\" title=\"dtghj\" value=\"Įdeti\"/>
<postfield name=\"da\" value=\"$(da)\"/>
<postfield name=\"kan\" value=\"$(kan)\"/>
</go></anchor>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "dedu"){ 
$kan = $_POST['kan'];
$da = $_POST['da'];
$kj = $_POST['kj'];
$da=@ereg_replace("[^0-9]","",$da); 
$kj=@ereg_replace("[^0-9.]","",$kj);

if ($kan=="k0"){ $dkfl = "ok"; $pavd="Soul stone"; }
if ($kan=="k1"){ $dkfl = "ok";  $pavd="Saiyan tail"; }
if ($kan=="k2"){ $dkfl = "ok";  $pavd="Ginyu material"; }
if ($kan=="k3"){ $dkfl = "ok";  $pavd="Ginyu crystal"; }
if ($kan=="k4"){ $dkfl = "ok";  $pavd="Yamma fruit"; }
if ($kan=="k5"){ $dkfl = "ok";  $pavd="Microschem"; }
if ($kan=="k6"){ $dkfl = "ok";  $pavd="Majin scroll"; }
if ($kan=="k7"){ $dkfl = "ok";  $pavd="Magic ball"; }
if ($kan=="k8"){ $dkfl = "ok";  $pavd="Fusion fail"; }

if ($kan=="k9"){ $dkfl = "ok";  $pavd="Cloth"; }
if ($kan=="k10"){ $dkfl = "ok"; $pavd="Kame cloth"; }
if ($kan=="k11"){ $dkfl = "ok"; $pavd="Namekian cloth"; }
if ($kan=="k12"){ $dkfl = "ok"; $pavd="Saiyan armor"; }
if ($kan=="k13"){ $dkfl = "ok"; $pavd="Saiyan prince armor"; }
if ($kan=="k14"){ $dkfl = "ok"; $pavd="Fusion cloth"; }
if ($kan=="k15"){ $dkfl = "ok"; $pavd="Ginyu armor"; }
if ($kan=="k16"){ $dkfl = "ok"; $pavd="Dragon armor"; }
if ($kan=="k17"){ $dkfl = "ok"; $pavd="Saiyaman costume"; }

if ($kan=="k18"){ $dkfl = "ok"; $pavd="Gyvybių eliksyras"; }
if ($kan=="k19"){ $dkfl = "ok"; $pavd="Radaras"; }
if ($kan=="k20"){ $dkfl = "ok"; $pavd="Drakono rutulių"; }

if ($kan=="k22"){ $dkfl = "ok"; $pavd="Staff"; }
if ($kan=="k23"){ $dkfl = "ok"; $pavd="Knife"; }
if ($kan=="k24"){ $dkfl = "ok"; $pavd="Sword"; }
if ($kan=="k25"){ $dkfl = "ok"; $pavd="God staff"; }
if ($kan=="k26"){ $dkfl = "ok"; $pavd="Magic staff"; }
if ($kan=="k27"){ $dkfl = "ok"; $pavd="Janemba sword"; }
if ($kan=="k28"){ $dkfl = "ok"; $pavd="Ginyu sword"; }
if ($kan=="k29"){ $dkfl = "ok"; $pavd="Yamcha sword"; }
if ($kan=="k30"){ $dkfl = "ok"; $pavd="Yajirobe sword"; }
if ($kan=="k31"){ $dkfl = "ok"; $pavd="Dragon sword"; }
if ($kan=="k32"){ $dkfl = "ok"; $pavd="Trunks sword"; }

if ($kan=="k34"){ $dkfl = "ok"; $pavd="Juodajų drakono rutulių"; }
if ($kan=="k35"){ $dkfl = "ok"; $pavd="KĮ matuoklis"; }

if ($kan=="k44"){ $dkfl = "ok"; $pavd="Namek Drakono rutulių"; }

include("icludekitainf/nuskait.php"); 
$hex=explode(".",$kj);
if ($da < 1){ $bad = "Prasome įvesti didesni neo 0 kieki!"; }
if (count($hex)>2){ $bad = "Prasome įvesti norima kainą!"; }
if (strlen($hex[1]) > 2){ $bad = "Prasome įvesti norima kainą!"; }
if (count($hex)>2){ $bad = "Prasome įvesti norima kainą!"; }
if (count($hex)<2){ if (substr($hex[0],0,1)==0){ $bad = "Prasome ivesti kaina normaliu formatu, pvz 2 arba 0.2!"; }}
if ($dkfl != "ok"){ $bad = "Prašome pasirinkti dedama prekę!"; }
if ($da == ""){ $bad = "Prašome įvesti kieki!"; }

if ($kj == ""){ $bad = "Prašome įvesti norima kaina!"; }
if ($kan == ""){ $bad = "Prašome pasirinkti dedama prekę!"; }
if (count(glob("litu turgus/$nick-*.txt"))>2){ 
 $bad = "Daugiau prekiu šiuo metu deti negali!"; }

$c = substr($kan, 0, 1); 
if ($c == "k"){ $m = str_replace("k","",$kan);
$kint = $dari[$m];  $dari[$m]=$dari[$m]-$da; }
if ($c == "s"){ 
$kint = $litai;  $litai=$litai-$da; }

if ($kint < $da){  $bad = "Tiek siu prekiu neturi!";}

if ($bad == ""){  $bad = "Prekė įdėta!"; 
$kodas = rand(0,999999999); 
$tim = time(); 
$fop = fopen("litu turgus/$nick-$kodas.txt", "w+");
        fwrite($fop, "$nick|$da|$pavd|$c|$m|$laikas|$tim|$kj|\n");
        fclose($fop);
        chmod("litu turgus/$nick-$kodas.txt",0777); 

$fop = fopen("zaideju pagrindinai statusai/$nick.txt", "w");
        fwrite($fop, "$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]|$inf[21]|$inf[22]|$inf[23]|$inf[24]|$inf[25]|");
        fclose($fop);
    include("icludekitainf/iras.php");
    include("icludekitainf/iras2.php");
	$fp5g553 = @fopen("account/$nick.txt", "w");
@fwrite($fp5g553,"$litai");
@fclose($fp5g553); 
@chmod("account/$nick.txt",0777);
}echo"<b>Turgus</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"$bad
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"litu_turgus.php?id=\">Į Turgų</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}

print"</body></html>";

?>