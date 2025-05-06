<?php
$kur = "Valiutos užsakymai";
include ("config.php");
include_once("icludekitainf/start.php");
$laikas = date("Y-m-d H:i:s");
$dsghj = date("H:i:s Y-m-d");
if ($id == ""){ 

$lj = glob("currency/*.txt"); 
for ($p=0; $p < count($lj); $p++){ 
$ei = explode("|",@file_get_contents($lj[$p])); 
if ($ei[6]+3*60*60<time()){ 
$pard_litux = number_format($e[1], 2, '.', '');
$privatujj = "Tavo užsakymą ($pard_litux LTL) valiutos parduotuveje niekas nenupirko, tad jūsų litai sugryžo atgal į sąskaitą."; 
    $cyks2 = explode("|",file_get_contents("zaideju pagrindinai statusai/$ei[0].txt")); 
   if($ei[3]=="p"){ $cyks2[7]=$cyks2[7]+$ei[1];
  } 
   if($ei[3]=="gg"){
  $litai = @file_get_contents("account/$ei[0].txt");
$litai = $litai + $ei[1];
@file_put_contents("account/$ei[0].txt", "$litai"); 
}
    $atidaryma = fopen("sun/$ei[0].txt", "a");
        fwrite($atidaryma, "@SISTEMA|$privatujj|$laikas|\n");
        fclose($atidaryma);
$fop = fopen("zaideju pagrindinai statusai/$ei[0].txt", "w");
        fwrite($fop, "$cyks2[0]|$cyks2[1]|$cyks2[2]|$cyks2[3]|$cyks2[4]|$cyks2[5]|$cyks2[6]|$cyks2[7]|$cyks2[8]|$cyks2[9]|$cyks2[10]|$cyks2[11]|$cyks2[12]|$cyks2[13]|+|$cyks2[15]|$cyks2[16]|$cyks2[17]|$cyks2[18]|$cyks2[19]|$cyks2[20]|$cyks2[21]|$cyks2[22]|$cyks2[23]|$cyks2[24]|$cyks2[25]|");
        fclose($fop);

@unlink($lj[$p]); 
}}
$jusu_saskaitoje = @number_format($litai, 2, ',', ' ');
echo"<b>Čia galite įdėti litų užsakymą ir už juos paprašyti tam tikrą pinigų kiekį.  Kaip užsakymas bus  priimtas jūs gausite žinutė.</b>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<form action=\"valiutos_pardavimas.php?id=dedu\" method=\"post\">
Už kiek litų norite įdėti užsakymą? (<b>$jusu_saskaitoje</b> LTL)<br/>
<input name=\"da\" type=\"text\" maxlength=\"5s\" format=\"*N\" title=\"info\" value=\"\" size=\"20\"/><br/>
Norima pinigų suma už litus:<br/>
<input name=\"kj\" type=\"text\" maxlength=\"50\" title=\"info\" value=\"\" size=\"20\"/><br/>
<input type=\"submit\" title=\"dtghj\" value=\"Įdėti\"/></form>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";

      $nuskk = glob("currency/*.txt"); 
      $viso_tm = count($nuskk);
      $puslapiu_skaicius = 20;
	  if (glob("currency/*.txt") == false)
{
echo"Užsakymų nera.";
}
else
{
foreach (@glob("currency/*.txt") as $a){

$name = str_replace(array("currency/", ".txt"), "", $a);
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
$pavd = str_replace(array("currency/",".txt"),"",$nuskk[$c]); 
$e[7] = @number_format($e[7], 0, ',', ' ');
$pard_litux = number_format($e[1], 2, '.', '');
echo"(&#187;) <a href=\"valiutos_pardavimas.php?id=perku&amp;ka=$pavd\">$e[0] [ $pard_litux LTL už $e[7] pinigų]</a> ";
if ($e[0] == "$nick"){echo "<a href=\"valiutos_pardavimas.php?id=grazinti&amp;ka=$pavd\"><b>[x]</b></a>"; }
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
echo"<a href=\"valiutos_pardavimas.php?id=&amp;page=$starto_skaicius\">[$starto_skaicius]</a>"; }

$viso_puslapiai++;
$starto_skaicius++;}}

echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=miestas\">Atgal</a><br/>
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "perku" && file_exists("currency/$ka.txt")){ 
$kj=@ereg_replace("[^0-9.]","",$kj); 
if (!file_exists("account/$nick.txt")){ $litai = 0; } else { $litai = file_get_contents("account/$nick.txt"); }
$e = explode("|",file_get_contents("currency/$ka.txt")); 
if ($pinigai < $e[7]){ $bad = "Tiek pinigu neturi!"; }
if (($nick != $e[8]) & ($e[8] != "")){ $bad = "Šį prekė skirta kitam žaidėjui!"; }
if ($bad == ""){ 
$bad = "Nupirkta."; 
$pinigai= $pinigai - $e[7]; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 

   

	if($e[3]=="gg"){ 
$buvimoonlineltgavimas = @file_get_contents("account/$nick.txt");
$buvimoonlineltgavimas = $buvimoonlineltgavimas + $e[1];
@file_put_contents("account/$nick.txt", "$buvimoonlineltgavimas");}
	

	    $infd = explode("|",file_get_contents("zaideju pagrindinai statusai/$e[0].txt"));

$infd[7] = $infd[7]+$e[7];

$fop = fopen("zaideju pagrindinai statusai/$e[0].txt", "w");
        fwrite($fop, "$infd[0]|$infd[1]|$infd[2]|$infd[3]|$infd[4]|$infd[5]|$infd[6]|$infd[7]|$infd[8]|$infd[9]|$infd[10]|$infd[11]|$infd[12]|$infd[13]|$infd[14]|$infd[15]|$infd[16]|$infd[17]|$infd[18]|$infd[19]|$infd[20]|$infd[21]|$infd[22]|$infd[23]|$infd[24]|$infd[25]|");
        fclose($fop);
  
$privatuj = "Tavo užsakymą ($e[1] LTL) valiutos parduotuveje nupirko $nick, gavai $e[7] pinigų."; 

$atidaryma = fopen("sun/$e[0].txt", "a");
        fwrite($atidaryma, "@SISTEMA|$privatuj|$laikas|\n");
        fclose($atidaryma);
    $cyks2 = explode("|",file_get_contents("zaideju pagrindinai statusai/$e[0].txt")); 
$fop = fopen("zaideju pagrindinai statusai/$e[0].txt", "w");
        fwrite($fop, "$cyks2[0]|$cyks2[1]|$cyks2[2]|$cyks2[3]|$cyks2[4]|$cyks2[5]|$cyks2[6]|$cyks2[7]|$cyks2[8]|$cyks2[9]|$cyks2[10]|$cyks2[11]|$cyks2[12]|$cyks2[13]|+|$cyks2[15]|$cyks2[16]|$cyks2[17]|$cyks2[18]|$cyks2[19]|$cyks2[20]|$cyks2[21]|$cyks2[22]|$cyks2[23]|$cyks2[24]|$cyks2[25]|");
        fclose($fop); 
@unlink("currency/$ka.txt"); 
        
}

echo"$bad</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=miestas\">Atgal</a><br/>
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "grazinti" && file_exists("currency/$ka.txt")){ 
$kj=@ereg_replace("[^0-9.]","",$kj); 
$e = explode("|",file_get_contents("currency/$ka.txt")); 
$e2 = file_get_contents("currency/$ka.txt"); 
if ($e[0] !== "$nick"){ echo "Tai ne tavo preke!"; }
else {

if ($bad == ""){ 
$bad = "Jūsų užsakymas gryš po kelių sėkundžių"; 
$e[6] = "0"; 
$fop = @fopen("currency/$ka.txt", "w+");
        @fwrite($fop, "$e[0]|$e[1]|$e[2]|$e[3]|$e[4]|$e[5]|$e[6]|$e[7]|$e[8]|\n");
        @fclose($fop);
}
echo"$bad</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=miestas\">Atgal</a><br/>
<a href=\"pagrindinis.php?\">&#302; &#381;aidim&#261;</a></br>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "dedu"){ 
$da = $_POST['da'];
$kj = $_POST['kj'];
$da=@ereg_replace("[^0-9.]","",$da); 
$kj=@ereg_replace("[^0-9.]","",$kj);


include("icludekitainf/nuskait.php"); 

$hex=explode(".",$kj);
$cdcew=explode(".",$da);
if (count($cdcew) > 2) {$bad = "Prašome įvesti parduodama litų suma  tokiu formatu: 1 arba 0.1";}
if (strlen($cdcew[1]) > 2) {$bad = "Prašome įvesti parduodama litų suma  tokiu formatu: 1 arba 0.1";}
if (count($hex)>2){ $bad = "Prasome įvesti norima kainą!"; }
if (strlen($hex[1]) > 2){ $bad = "Prasome įvesti norima kainą!"; }
if (count($hex)>2){ $bad = "Prasome įvesti norima kainą!"; }
if (count($hex)<2){ if (substr($hex[0],0,1)==0){ $bad = "Prasome įvesti kaina normaliu formatu pvz 100"; }}
if ($da == ""){ $bad = "Prašome įvesti kieki!"; }

if ($kj == ""){ $bad = "Prašome įvesti norima kaina!"; }
if (@count(@glob("currency/$nick-*.txt"))>5){ 
 $bad = "Vienu metu galima įdėti tik 5 užsakymus."; }

if ($litai < $da){  $bad = "Tiek litų neturite savo sąskaitojė";}

if ($bad == ""){  $bad = "Prekė įdėta!"; 
$kodas = rand(0,999999999); 
$tim = time(); 
$fop = @fopen("currency/$nick-$kodas-$kam.txt", "w+");
        @fwrite($fop, "$nick|$da|$pavd|gg|gg|$laikas|$tim|$kj|$kam|\n");
       @fclose($fop);
        @chmod("currency/$nick-$kodas-$kam.txt",0777); 

$fop = @fopen("zaideju pagrindinai statusai/$nick.txt", "w");
        @fwrite($fop, "$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]|$inf[21]|$inf[22]|$inf[23]|$inf[24]|$inf[25]|");
        @fclose($fop);

$litai = @file_get_contents("account/$nick.txt");
$litai = $litai - $da;
@file_put_contents("account/$nick.txt", "$litai");
}
echo"$bad
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"valiutos_pardavimas.php?id=\">Į Turgų</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}

print"</body></html>";

?>