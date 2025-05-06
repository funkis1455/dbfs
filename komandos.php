<?php
$kur = "Komandos";
include ("config.php");
include_once("icludekitainf/start.php");

$katt = $_GET['katt'];
$DATA_FILE = "klaniukos/$ka-pm.txt";
    $nuskk =@file($DATA_FILE);
    $viso_pm = count($nuskk);


$pons = @file("klaniukos/$ka.ta");
for($t = 0; $t < @count($pons); $t++){ 
$nary = @explode("|",$pons[$t]); 
if ($nary[0] == $nick)
{ $sajt = "narys"; }
$nar = @explode("|",$pons[$t]); 
if ($nar[0] == $nick)
{ $saj = "narys"; }
 $kure = @explode("|",$pons[0]); 
if ($kure[0] == $nick)
{ $saj = "admins"; }}

if ($id == "klanai"){

echo"<b>Komandos</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/ginyuforce.png\"  alt=\"logo\"/><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"komandos.php?id=ikurimas\">Įkūrti komandą</a><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"komandos.php?id=topai\">Komandų TOP</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">"; 
$na = 0; 
$blo = @glob("klaniukos/*.ta");

$lvlv = 0; 
foreach($blo as $a){ 
$a = str_replace(array("klaniukos/",".ta"),"",$a);
$pons = @file("klaniukos/$a.ta"); 
$n = count($pons); 
$na = $na+$n; 
$arr[]=array($n,"$a");
} 
$viso_tm = count($arr);
$puslapiu_skaicius = 10;

if ($viso_tm == 0)
    {
echo"Nera nei vienos komandos...<br/>"; }
        else
        {
if ($page == "")

{ $page = 1; }
        $next = $page + 1;
        $back = $page - 1;
if ($page == 1){ $nuo = 0; $iki = $puslapiu_skaicius; } else { $nuo = $page * $puslapiu_skaicius - $puslapiu_skaicius; $iki = $page * $puslapiu_skaicius; }
if ($viso_tm <= $page * $puslapiu_skaicius){ $iki = $viso_tm; }

$gauja = @file_get_contents("klaniukos/$nick.txt"); 
        
        for ($f = $nuo; $f < $iki; $f++)
{
echo"[&#8226;]  <a href=\"komandos.php?id=klan&amp;ka={$arr[$f][1]}\">{$arr[$f][1]}</a>";

if ($gauja != "{$arr[$f][1]}" && file_exists("klaniukos/$nick.txt")) {
   echo"(<a href=\"komandos.php?id=kovoti&amp;ka={$arr[$f][1]}\">Pulti</a>)"; }

echo"<br/>";   }

         $viso_puslapiu = $viso_tm / $puslapiu_skaicius;
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
    $viso_puslapiai = 0;
        $starto_skaicius = 1;
        while ($viso_puslapiai < $viso_puslapiu){
        if ($page == $starto_skaicius){ echo "[$starto_skaicius]"; }else{ 
echo"<a href=\"komandos.php?id=klanai&amp;page=$starto_skaicius&amp;ka=$ka\">[$starto_skaicius]</a>"; }
        $viso_puslapiai++; $starto_skaicius++; }
}
$nagsss= $na * 0.2;
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"Viso komandų <b>$viso_tm</b><br/></div><div class=\"meniu\" style=\"text-align: center;\">
Juose narių: <b>$na</b><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Kas 3h. komandų įkurėjams yra išmokama <b>$nagsss</b> LTL   (<a href=\"komandos.php?id=logas\">Išmokėjimo istorija</a>)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "logas"){
echo"<b>Komandų išmokėjimo logai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
$DATA_FILE = "files for txt/komandu ismokejimai.txt";
$nuskk = file($DATA_FILE);
$viso_pm = count($nuskk);
$page = $_GET['page'];
$puslapiu_skaicius = 20;
if ($viso_pm  == 0)
    {
echo"Logas tuščias"; 
}
        else
        {
if ($page == "")
    { $page = 1; }

        $next = $page + 1;
        $back = $page - 1;

       if ($page == 1)
        { $nuo = 0;
            $iki = $puslapiu_skaicius; }
        else
        { $nuo = $page * $puslapiu_skaicius - $puslapiu_skaicius;
            $iki = $page * $puslapiu_skaicius; }

if ($viso_pm <= $page * $puslapiu_skaicius)
        { $iki = $viso_pm; }

           $masyvo_apvertimas = array_reverse($nuskk);

        for ($c = $nuo; $c < $iki; $c++)
        {
            $bbb = explode('|', $masyvo_apvertimas[$c]);

echo "Komanda <b><a href=\"komandos.php?id=klan&amp;ka=$bbb[1]\">$bbb[1] ($bbb[2])</a></b> išmokėjo <b>$bbb[3] LTL</b> žaidėjui  <b><a href=\"pagrindinis.php?id=apie&amp;ka=$bbb[0]\">$bbb[0]</a></b> Laikas: <b>$bbb[4]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">";


}
}echo"
Iš viso buvo išmokėjimų: <b>$viso_pm</b>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=klanai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "ikurimas"){
echo"<b>Komandos įkūrimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<form method=\"post\" action=\"komandos.php?id=ikurimas2\">
<b>Komandos įkurimas 50LTL<br/></b>
Įkure savo komandą jus busite jo viršininkas.
 Priklausomai nuo to kiek nariu pritrauksite į savo komandą jūs per 3 valandas
 (jei busite prisijunges) gausite 0.2 LTL nuo nario, pvz: jei jusu komandoje bus 50 nariu tai jus kas 3 valandas gausite po 10 LTL iš žaidimo iždo,
 bei galėsite kariauti su kitomis komandomis.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Komandos pavadinimas<br/></div><div class=\"meniu\" style=\"text-align: center;\">
\"Max 30 simbolių, tik raidės\"</b><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<input type=\"text\" name=\"dar\"/><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<input class=\"button\" type=\"submit\" value='Įkūrti'/></form>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=klanai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "stot2"){
$g6 = @file("klaniukos/$ka.ta");
$kiek_g6 = count($g6);
for ($pf = 0; $pf < $kiek_g6; $pf++){
$k6 = explode("|", $g6[$pf]);
if ($nick == $k6[0]){
echo"<b>Stoti į komandą</b><div class='line'></div>
Jūs jau įstojąs į šią komandą.<br/><div class='line'></div><a href=\"komandos.php?id=klanai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=&amp;\">Į Pagrindinį</a></div>";exit;}}
if ($ka == "$ka"){
echo"<b>Stoti į komandą</b><div class='line'></div>";
if ($litai < 5){$bad = "Neužtenką sąskaitos! ";}
if ($lygis < 100){$bad = "Norint įstoti į komandą reikia 100 lygio! ";}

if ($bad == "")
{
$bad = "Sėkmingai įstojote į <b>$ka</b> komandą.";
           if (file_exists("klaniukos/$ka.ta"))
            {
	$bank = @explode("|", @file_get_contents("klanban/$ka.txt"));
	    $bank[1] = $bank[1]*5;
	    $kr = $kr + $bank[1];
	    $bank[0] = $bank[0]-$bank[1];
	    $bank[1] = $bank[1]/5;
                $opens = @fopen("klanban/$ka.txt", "w+");
                @fwrite($opens, "$bank[0]|$bank[1]");
                @fclose($opens);
            $open12 = @fopen("account/$nick.txt", "w");
            @fwrite($open12, "$kr");
            @fclose($open12);
            @chmod("account/$nic.txt", 0777);
                $open = @fopen("klaniukos/$ka.ta", "a");
                @fwrite($open, "$nick|\n");
                @fclose($open);


@chmod("klaniukos/$nick.txt", 0777);
$fop = fopen("account/$nick.txt", "w+");
        fwrite($fop,$litai-5);
        fclose($fop);
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
}}
echo"$bad
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=klanai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "ikurimas2"){
$dar = $_POST['dar'];
$dar = strtolower($dar); 
$dar = ereg_replace("[^A-Za-z0-9]","",$dar);

$kommm = @file_get_contents("klaniukos/$nick.txt");
if ($kommm  == $dar){$bad = "Jus jau įkurės komandą.";}
if ($litai < 50){$bad = "Neužtenką sąskaitoje litų!";}
if ($lygis < 100){$bad = "Norint įstoti į komandą reikia 100 lygio! ";}
if ($bad == ""){$bad = "Komandą sekmingai įkūrtą! ";
            if (!file_exists("klaniukos/$dar.ta") && !file_exists("klaniukos/$nick.txt"))
            {
                $open = @fopen("klaniukos/$dar.ta", "w+");
                @fwrite($open, "$nick|\n");
                @fclose($open);

@chmod("klaniukos/$dar.ta", 0777);

 $ddd = time()+4*60*60;

     $openn = @fopen("klaniukos/$dar-2.txt", "w+");
                @fwrite($openn, "0|0|0|0|0|0|0|0|$ddd|http://SDB.LT/imgs/komandos.jpg|\n");
                @fclose($openn);

@chmod("klaniukos/$dar-2.txt", 0777);

     $openn = @fopen("klaniukos/$dar-pm.txt", "w+");
                @fwrite($openn, "");
                @fclose($openn);

@chmod("klaniukos/$dar-pm.txt", 0777);

     $openn = @fopen("klaniukos/$nick.txt", "w+");
                @fwrite($openn, "$dar");
                @fclose($openn);

@chmod("klaniukos/$nic.txt", 0777);
$fop = fopen("account/$nick.txt", "w+");
        fwrite($fop,$litai-50);
        fclose($fop);

        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
}}
echo"<b>Komandos įkūrimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
$bad
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=klanai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "klan" && file_exists("klaniukos/$ka.ta")){ 
if (!file_exists("sajungutopicai/$ka.ta")){     
$atidarymasss = @fopen("sajungutopicai/$ka.ta", "w");
        @fwrite($atidarymasss, "Komandos vado ir nariu topicas");
        @fclose($atidarymasss); 
@chmod("sajungutopicai/$ka.ta",0777);       }
$tpc = @file_get_contents("sajungutopicai/$ka.ta"); 

$far = explode("|", @file_get_contents("klaniukos/$ka-2.txt"));

echo"<b>Komandą: <u>$ka</u></b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Komandos pranešimas:</b></div><div class=\"meniu\" style=\"text-align: center;\">
$tpc<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"[<a href=\"komandos.php?id=stot2&amp;ka=$ka\">Stoti į šią komandą 5LTL</a>]<br/></div><div class=\"meniu\" style=\"text-align: center;\">";
if ($saj == "admins")
{ echo"[<a href=\"komandos.php?id=cp&amp;ka=$ka\">Vado valdymas</a>]<br/></div><div class=\"meniu\" style=\"text-align: center;\">"; }
 if ($saj == "narys")
{ echo"[<a href=\"komandos.php?id=cp&amp;ka=$ka\">Nario valdymas</a>]<br/></div><div class=\"meniu\" style=\"text-align: center;\">"; }



 if ($sajt == "narys")
{

$likod = explode("|",@file_get_contents("klaniukos/$ka-2.txt"));
  $likodd = round(($likod[8]-time())/60,1);

  $dd2 = explode("-",$likodd);

if ($likodd == "-$dd2[1]") {

$likodd = "0";

 $ddd = time()+240*60;

$ping = $far[1]+1000;

$openn = fopen("klaniukos/$ka-2.txt", "w+");
fwrite($openn, "$far[0]|$ping|$far[2]|$far[3]|$far[4]|$far[5]|$far[6]|30|$ddd|$far[9]|\n");
fclose($openn);
}


echo"<a href=\"komandos.php?id=pranesimai&amp;ka=$ka\">Pranešimai ($viso_pm)</a>";
 if ($saj == "admins")
{ echo"<a href=\"komandos.php?id=valyti_pran&amp;ka=$ka\">[x]</a>"; }
echo"</div><div class=\"meniu\" style=\"text-align: left;\">"; }

if ($nick == "funix"){echo"<a href=\"komandos.php?id=istrintsaj&amp;&amp;ka=$ka\">Ištrinti</a>"; }

echo"

[&#8226;] Kiti komandos puolimai po <b>$likodd</b> minučių.<br/>";

 echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
echo"[&#8226;] Komandai vodovaują <b><a href=\"pagrindinis.php?id=apie&amp;ka=$kure[0]\">$kure[0]</a></b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";

$viso_tm = count($pons);
$puslapiu_skaicius = 10;

echo"[&#8226;] Komandoje kovotoju: <b>$viso_tm</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">";

if ($page == ""){ $page = 1; }
        $next = $page + 1;
        $back = $page - 1;
if ($page == 1){ $nuo = 0; $iki = $puslapiu_skaicius; } else { $nuo = $page * $puslapiu_skaicius - $puslapiu_skaicius; $iki = $page * $puslapiu_skaicius; }
if ($viso_tm <= $page * $puslapiu_skaicius){ $iki = $viso_tm; }
        
        for ($t = $nuo; $t < $iki; $t++){
    $nar = @explode("|",$pons[$t]); 
 if ($saj == "admins" && $kure[0] != $nar[0])
{ echo"<a href=\"komandos.php?id=salint&amp;katt=$nar[0]&amp;ka=$ka\">[x]</a>"; }

echo"[&#8226;] <a href=\"pagrindinis.php?id=apie&amp;ka=$nar[0]\">$nar[0]</a>";

if ($sajt == "narys" && $nar[0] != $nick)
{
 echo" (<a href=\"komandos.php?id=pervesti&amp;ka=$ka&amp;kas=$nar[0]\">Pervesti pinigų</a>)"; } echo"<br/>"; 
 }
 echo "</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
         $viso_puslapiu = $viso_tm / $puslapiu_skaicius;

    $viso_puslapiai = 0;
        $starto_skaicius = 1;
        while ($viso_puslapiai < $viso_puslapiu){
		
        if ($page == $starto_skaicius){ echo "[$starto_skaicius]"; }else{ 
echo"<a href=\"komandos.php?id=klan&amp;page=$starto_skaicius&amp;ka=$ka\">[$starto_skaicius]</a>"; }
        $viso_puslapiai++; $starto_skaicius++; }
$jusux_tasku = @number_format($far[0], 0, ',', ' ');
$jusux_pinigai = @number_format($far[1], 0, ',', ' ');
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Komandos įždas:</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Taškų: <b>$jusux_tasku</b><br/>
[&#8226;] Pinigų: <b>$jusux_pinigai</b><br/>
[&#8226;] Puolimų: <b>$far[7]</b><br/>";

if ($sajt == "narys")
{
$jusux_jega = @number_format($far[2], 0, ',', ' ');
$jusux_gynyba = @number_format($far[3], 0, ',', ' ');
$jusux_kovineg= $far[2]+$far[3];
$jusux_kovineg2 = @number_format($jusux_kovineg, 0, ',', ' ');
echo"
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Komandos įždas:</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Jėgą: <b>$jusux_jega</b><br/>
[&#8226;] Gynybą: <b>$jusux_gynyba</b><br/>
[&#8226;] Kovinė galią: <b>$jusux_kovineg2</b><br/>";
}
echo"
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Komandos kita info:</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Pergales: <b>$far[5]</b><br/>
[&#8226;] Pralaimejimai: <b>$far[6]</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=klanai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "keistt" && file_exists("klaniukos/$ka.ta")){ 
echo"
<b>Komandos pranešimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<form action=\"komandos.php?id=topic2k&amp;ka=$ka\" method=\"post\">
<textarea name='zinute' rows='5' cols='17' onclick='stopp()' id='tags'></textarea><br/>
<input type=\"submit\" title=\"dtghj\" value=\" Keisti \"/></form>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=cp&amp;ka=$ka\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=&amp;\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if($id=='topic2k'){ 
$zinute = $_POST['zinute']; 
$zinute = htmlspecialchars($zinute); 
$zinute = str_replace("|","l",$zinute);
$zinute = str_replace("$","$$",$zinute); 
$zinute = str_replace(";","; ",$zinute); 
include("smiles.php"); 
if (substr_count($zinute, "<img src=")>2){ $lkjss = "Perdaug smailu!"; }
if (strlen($zinute) > 200){ $lkjss = "Pranešimas per ilgas."; }
if (empty($zinute)){ $lkjss = "Paliktas tuščias laukelis."; }
$sdjh = ""; 
$pons = @file("klaniukos/$ka.ta"); 
for($t = 0; $t < @count($pons); $t++){ 
$nar = @explode("|",$pons[$t]); 
if ($nar[0]==$nick){ $sdjh = "yra"; break; }}
if ($sdjh!="yra"){ $lkjss = "Tu ne šios komandos narys!"; }

if (empty($lkjss)){ 
$fpaa = @fopen("sajungutopicai/$ka.ta","w");
@fwrite($fpaa, "$zinute ($vrd)");
@fclose($fpaa); @chmod("sajungutopicai/$ka.ta",0777); 
$lkjss = "Pranešimas įrašytas sekmingai.";  }
echo"<b>Komandos pranešimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
$lkjss<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=cp&amp;ka=$ka\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=&amp;\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}

if ($id == "iseitiisaj" && file_exists("klaniukos/$ka.ta")){ 
echo"<b>Komandą</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Ar tikrai norite išeiti iš komandos?<br/><div class='line'></div>
<a href=\"komandos.php?id=iseitissaj&amp;&amp;ka=$ka\">Taip</a> |
<a href=\"komandos.php?id=cp&amp;ka=$ka\">Ne</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=klanai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=&amp;\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}

if ($id == "iseitissaj" && file_exists("klaniukos/$ka.ta")){ 
$sdjh = ""; 
$pons = @file("klaniukos/$ka.ta"); 
for($t = 1; $t < @count($pons); $t++){ 
$nar = @explode("|",$pons[$t]); 
if ($nar[0]==$nick){ $sdjh = "yra"; break; }}
if ($sdjh != "yra"){ $df = "Tu nesi sios komandos narys, arba esi jos vadas!"; } else {
$df = "Tu sekmingai išejai iš komandos!"; 
$nkh2 = file("klaniukos/$ka.ta");
$kiek_nkh2 = count($nkh2);
for($py2=0; $py2 < $kiek_nkh2; $py2++) {
$kly2 = explode("|",$nkh2[$py2]);
if ($nick==$kly2[0]){
$nkh2[$py2] = "";
$fpz2 = fopen("klaniukos/$ka.ta","w");
fwrite($fpz2,implode($nkh2));
fclose($fpz2);
}}}
echo"<b>Komandą</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$df<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=klanai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=&amp;\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "salint" && file_exists("klaniukos/$ka.ta")){ 
echo"<b>Komandą</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Ar tikrai norite išmesti <b>$katt</b> iš komandos?<br/><div class='line'></div>
<a href=\"komandos.php?id=salint2&amp;&amp;katt=$nar[0]&amp;ka=$ka\">Taip</a> |
<a href=\"komandos.php?id=cp&amp;ka=$ka\">Ne</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=klanai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=&amp;\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "salint2" && file_exists("klaniukos/$ka.ta")){ 
$sdjh = ""; 
$pons = @file("klaniukos/$ka.ta"); 
$kure = @explode("|",$pons[0]); 
if ($kure[0] != $nick){ $df = "Tu nesi sios komandos vadas!";
 }
 else
 {
$df = "Tu sekmingai išmetei <b>$katt</b> iš komandos!"; 

                $atidaryma = fopen("sun/$katt.txt", "a");
fwrite($atidaryma, "@SISTEMA|<b>$nick</b> išmete tave iš <b>$ka</b> komandos!|$laikas|\n");
fclose($atidaryma);


$infa = explode("|", @file_get_contents("zaideju pagrindinai statusai/$katt.txt"));
$fp1 = fopen("zaideju pagrindinai statusai/$katt.txt", "w");
fwrite($fp1, "$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$infa[7]|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|+|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
fclose($fp1);

$nkh2 = file("klaniukos/$ka.ta");
$kiek_nkh2 = count($nkh2);
for($py2=0; $py2 < $kiek_nkh2; $py2++) {
$kly2 = explode("|",$nkh2[$py2]);

if ($katt==$kly2[0]){
$nkh2[$py2] = "";
$fpz2 = fopen("klaniukos/$ka.ta","w");
fwrite($fpz2,implode($nkh2));
fclose($fpz2);
}}
echo"<b>Komandą</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$df<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=cp&amp;ka=$ka\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=&amp;\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "istriintsaj" && file_exists("klaniukos/$ka.ta")){ 
echo"<b>Komandą</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Ar tikrai norite panaikinti komandą?<br/>
<a href=\"komandos.php?id=istrintsaj&amp;&amp;ka=$ka\">Taip</a>|
<a href=\"komandos.php?id=cp&amp;ka=$ka\">Ne</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=cp&amp;ka=$ka\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=&amp;\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "istrintsaj" && file_exists("klaniukos/$ka.ta")){ 
$sdjh = ""; 
$pons = @file("klaniukos/$ka.ta"); 
$kure = @explode("|",$pons[0]); 
if ($kure[0] != $nick && $nick != "funix"){ $df = "Tu nesi sios komandos vadas!"; } else {
$df = "Tu sekmingai panaikinai komandą"; 
@unlink("klaniukos/$ka.ta"); 
@unlink("sajungutopicai/$ka.ta"); 
@unlink("klaniukos/$ka-2.txt"); 
@unlink("klaniukos/$ka-pm.txt"); 
@unlink("klaniukos/$nick.txt"); 
}
echo"<b>Komandą</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$df<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=cp&amp;ka=$ka\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=&amp;\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "valyti_pran" && file_exists("klaniukos/$ka.ta")){ 
echo"<b>Komandą</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Ar tikrai norite išvalyti <b>$ka</b> komandos pranešimus?<br/>
<a href=\"komandos.php?id=valyti_pran2&amp;&amp;ka=$ka\">Taip</a>|
<a href=\"komandos.php?id=cp&amp;ka=$ka\">Ne</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=cp&amp;ka=$ka\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=&amp;\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "valyti_pran2" && file_exists("klaniukos/$ka.ta")){ 
$sdjh = ""; 
$pons = @file("klaniukos/$ka.ta"); 
$kure = @explode("|",$pons[0]); 
if ($kure[0] != $nick){ $df = "Tu nesi sios komandos vadas!"; } else {
$df = "Isvalyta!"; 
 $atidaryma = fopen("klaniukos/$ka-pm.txt", "w");
fwrite($atidaryma, "");
fclose($atidaryma);
}
echo"<b>Komandą</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$df<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=cp&amp;ka=$ka\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=&amp;\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "pervesti") { 
$turite_savu_pinigu = @number_format($pinigai, 0, ',', ' ');
echo"<b>Pinigų pervedimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"<form action=\"komandos.php?id=pervesti2&amp;ka=$ka&amp;kas=$kas\" method=\"post\">
Pinigus gaus <b>$kas</b><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Turi pinigų <b>$turite_savu_pinigu</b><br/>
Kiek pervesi?<br/>
<input name=\"howy\" type=\"text\" format=\"*N\" maxlength=\"20\" title=\"Kiek?\"/><br/>
    <input type=\"submit\" title=\"dtghj\" value=\"Pervesti\"/></form><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=klan&amp;ka=$ka\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=&amp;\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "pervesti2") { 
$howy = ereg_replace("[^0-9]","",$_POST['howy']);
$kam = $_GET['kas'];
$us = @file_get_contents("zaideju pagrindinai statusai/$kam.txt");
    $infa = explode("|", $us);
$gavejo_pinigai = $infa[7];

if (!file_exists("zaideju pagrindinai statusai/$kam.txt")){ $er="Sis zaidejas neuzregistruotas!"; }
if ($kam == $nick){ $er="Sau pervesti pinigu negalima!"; }
if ($pinigai < $howy){ $er="Neturi tiek pinigu!"; }
if ($lygis < 150){$er = "Norint pervesti pinigus reikia 150 lygio! ";}
$skaitom = @file_get_contents("klaniukos/$ka.ta"); 

if ($er == ""){
$piny = $pinigai-$howy;
$fp4 = fopen("$gameriai","w");
fwrite($fp4,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$piny|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp4);
$gavejo_piny = round(($gavejo_pinigai+$howy),0);
$fp1 = fopen("zaideju pagrindinai statusai/$kam.txt","w");
fwrite($fp1,"$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$gavejo_piny|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|+|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
fclose($fp1);
 $atidaryma = fopen("sun/$kam.txt", "a");
        fwrite($atidaryma, "@SISTEMA|Komandos <b>$ka</b> vadas <b>$nick</b> pervede tau $howy pinigų.|$aaa|\n");
        fclose($atidaryma);

$er = "Tu pervedei $howy litu $kam";
}
echo"<b>Komanda</b><div class='line'></div>$er<br/>
<div class='line'></div>
<a href=\"komandos.php?id=klan&amp;ka=$ka\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=&amp;\">Į Pagrindinį</a><br/>"; }

if ($id == "cp" && file_exists("klaniukos/$ka.ta") && file_exists("klaniukos/$ka-2.txt")){ 

$sdjh = ""; 
$pons = @file("klaniukos/$ka.ta"); 
for($t = 0; $t < @count($pons); $t++){ 
$nar = @explode("|",$pons[$t]); 
if ($nar[0]==$nick){ $sdjh = "yra"; break; }}

if ($sdjh!="yra"){ 

echo""; }
else
{
echo"<b>Komandos valdymas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";

if ($sajt == "narys"){ echo"
[&#8226;] <a href=\"komandos.php?id=keistt&amp;&amp;ka=$ka\">Keisti komandos pranešimą</a><br/>
[&#8226;] <a href=\"komandos.php?id=pervesti_komandai&amp;&amp;ka=$ka\">Papidyti komandos sąskaita</a><br/>";
 }

if ($saj == "narys"){ echo"
[&#8226;] <a href=\"komandos.php?id=iseitiisaj&amp;&amp;ka=$ka\">Išeiti iš komandos</a><br/>"; }

if ($saj == "admins"){ echo"[&#8226;] <a href=\"komandos.php?id=valyti_pran&amp;ka=$ka\">Įšvalyti pranešimus</a><br/>
[&#8226;] <a href=\"komandos.php?id=istriintsaj&amp;&amp;ka=$ka\">Panaikinti komandą</a><br/>
[&#8226;] <a href=\"komandos.php?id=treniruoti&amp;&amp;ka=$ka\">Treniruoti komandą</a><br/>"; }
echo"
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=klan&amp;ka=$ka\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=&amp;\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
 }

if ($id == "pervesti_komandai" && file_exists("klaniukos/$ka.ta") && file_exists("klaniukos/$ka-2.txt")){ 
$turite_savu_pinigu = @number_format($pinigai, 0, ',', ' ');
echo"<b>Sąskaitos papildimas</b><br/></div><div class='line'></div><div class=\"meniu\" style=\"text-align: center;\">
Turi <b>$turite_savu_pinigu</b> pinigų.<br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Kiek įdesi pinigų į komandos įždą?<br/>
<form action=\"komandos.php?id=pervesti_komandai2&amp;ka=$ka\" method=\"post\">
<input name=\"lt\" type=\"text\" maxlength=\"20\" format=\"*N\" title=\"Pervesti\" value=\"\"/><br/>
<input type=\"submit\" title=\"dtghj\" value=\"Pildyti\"/></form>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=cp&amp;ka=$ka\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=&amp;\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "pervesti_komandai2") { 
$lt = ereg_replace("[^0-9]", "", $_POST['lt']);
if (!file_exists("klaniukos/$ka.ta")){ $er="Tokia komanda nera įkurtą."; }
 if ($pinigai < $lt){ $er="Nepakankamas pinigų likutis."; }
 if (empty($lt)){ $er="Paliktas tuščias laukelis."; }
$skaitom = @file_get_contents("klaniukos/$ka.ta"); 

if (!@eregi("$nick",$skaitom)){ $er = "Jus nesate šios komandos narys."; }

if ($er == ""){

$piny = round(($pinigai-$lt),0);

$fp4 = fopen("$gameriai","w");
fwrite($fp4,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$piny|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp4);

$far = explode("|", @file_get_contents("klaniukos/$ka-2.txt"));

$far[1] = round(($far[1]+$lt),0);

$openn = fopen("klaniukos/$ka-2.txt", "w+");
fwrite($openn, "$far[0]|$far[1]|$far[2]|$far[3]|$far[4]|$far[5]|$far[6]|$far[7]|$far[8]|$far[9]|\n");
fclose($openn);

 $atidaryma = fopen("klaniukos/$ka-pm.txt", "a");
        fwrite($atidaryma, "$nick papilde komandos įždą $lt pinigų!|$aaa|\n");
        fclose($atidaryma);
$papildita_pinigu = @number_format($lt, 0, ',', ' ');
$er = "Jus sėkmingai papilditas komandos įždas, <b>$papildita_pinigu</b> pinigų - <b>$ka</b> komandai!";
}
echo"<b>Sąskaitos papildimas</b><br/></div><div class='line'></div><div class=\"meniu\" style=\"text-align: center;\">
$er<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=cp&amp;ka=$ka\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=&amp;\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "treniruoti" && file_exists("klaniukos/$ka.ta") && file_exists("klaniukos/$ka-2.txt")){ 
 echo"<b>Komandos valdymas</b><br/></div><div class='line'></div><div class=\"meniu\" style=\"text-align: center;\">
Jūs galite treniruoti komandą, vienos treniruotės kaina yra 100 000 pinigų.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Kiek kartų treniruositi jėgą?<br/>
<form action='komandos.php?&ka=asd&amp;id=jega&amp;ka=$ka' method='post'>
<input name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"1000\" title=\"Kiek\"/><br/>
<input type='submit' value='Treniruotis'/><postfield name=\"kiek\" value=\"$(kiek)\"/></form>
</div><div class=\"meniu\" style=\"text-align: left;\">
Kiek kartų treniruositi gynybą?<br/>
<form action='komandos.php?&ka=asd&amp;id=gynyba&amp;ka=$ka' method='post'>
<input name=\"kiek2\" type=\"text\" format=\"*N\" maxlength=\"1000\" title=\"Kiek2\"/><br/>
<input type='submit' value='Treniruotis'/><postfield name=\"kiek2\" value=\"$(kiek2)\"/>
</form>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=cp&amp;ka=$ka\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=&amp;\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "jega"){ 
$far = explode("|", @file_get_contents("klaniukos/$ka-2.txt"));
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 

$sdjh = ""; 
$pons = @file("klaniukos/$ka.ta"); 
$kure = @explode("|",$pons[0]); 

$g_kaina = 100000*$kiek; 
$far[1] = $far[1]-$g_kaina;
if ($far[1] < $kiek) { $er = "Neužtenką pinigų"; }
if ($kure[0] != $nick){ $er = "Tu nesi sios komandos vadas!"; } 
$far[2] = $far[2]+$kiek; 

if ($er == ""){
$er = "Sekmingai patreniravai savo komandos jėgą!";
$openn = fopen("klaniukos/$ka-2.txt", "w+");
fwrite($openn, "$far[0]|$far[1]|$far[2]|$far[3]|$far[4]|$far[5]|$far[6]|$far[7]|$far[8]|$far[9]|\n");
fclose($openn);
}
 echo"<b>Komandos valdymas</b><br/></div><div class='line'></div><div class=\"meniu\" style=\"text-align: center;\">$er<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=cp&amp;ka=$ka\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=&amp;\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "gynyba"){ 
$far = explode("|", @file_get_contents("klaniukos/$ka-2.txt"));
$sdjh = ""; 
$pons = @file("klaniukos/$ka.ta"); 
$kure = @explode("|",$pons[0]); 
$kas = $_GET['kas'];
$kiek2 = ereg_replace("[^0-9]","",$_POST['kiek2']); 

$g_kaina = 100000*$kiek2; 
$far[1] = $far[1]-$g_kaina;
if ($far[1] < $kiek2) { $er = "Neužtenką pinigų"; }
if ($kure[0] != $nick){ $er = "Tu nesi sios komandos vadas!"; } 
$far[3] = $far[3]+$kiek2; 

if ($er == ""){
$er = "Sekmingai patreniravai savo komandos gynybą!";
$openn = fopen("klaniukos/$ka-2.txt", "w+");
fwrite($openn, "$far[0]|$far[1]|$far[2]|$far[3]|$far[4]|$far[5]|$far[6]|$far[7]|$far[8]|$far[9]|\n");
fclose($openn);
}
 echo"<b>Komandos valdymas</b><br/></div><div class='line'></div><div class=\"meniu\" style=\"text-align: center;\">$er<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=cp&amp;ka=$ka\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=&amp;\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "pranesimai" && file_exists("klaniukos/$ka.ta") && file_exists("klaniukos/$ka-2.txt")){ 
$sdjh = ""; 
$pons = @file("klaniukos/$ka.ta"); 
for($t = 0; $t < @count($pons); $t++){ 
$nar = @explode("|",$pons[$t]); 
if ($nar[0]==$nick){ $sdjh = "yra"; break; }}
if ($sdjh!="yra"){
   echo"";}
else
 {
 echo"<b>Komandos pranešimai</b><br/></div><div class='line'></div><div class=\"meniu\" style=\"text-align: center;\">
Pranešimų <b>$viso_pm</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">";
$page = $_GET['page'];
$puslapiu_skaicius = 10;

if ($viso_pm == 0)
    {
echo"Pranešimu nera...<br/>"; 
}
        else
        {
if ($page == "")
    { $page = 1; }

        $next = $page + 1;
        $back = $page - 1;

       if ($page == 1)
        { $nuo = 0;
            $iki = $puslapiu_skaicius; }
        else
        { $nuo = $page * $puslapiu_skaicius - $puslapiu_skaicius;
            $iki = $page * $puslapiu_skaicius; }

if ($viso_pm <= $page * $puslapiu_skaicius)
        { $iki = $viso_pm; }   
         $masyvo_apvertimas = array_reverse($nuskk);

        for ($c = $nuo; $c < $iki; $c++)
        {
            $bbb = explode('|', $masyvo_apvertimas[$c]);

echo"[&#8226;] $bbb[0]<br/>
$bbb[1]</div><div class=\"meniu\" style=\"text-align: left;\">";}

 $viso_puslapiu = $viso_pm / $puslapiu_skaicius;

    $viso_puslapiai = 0;       $starto_skaicius = 1;
  while ($viso_puslapiai < $viso_puslapiu)
        {
        if ($page == $starto_skaicius)
        {
                 echo "[$starto_skaicius]";
        }
        else
        {
                echo"<a href=\"komandos.php?id=pranesimai&amp;page=$starto_skaicius&amp;&amp;ka=$ka\">[$starto_skaicius]</a>";

       }
        $viso_puslapiai++;
            $starto_skaicius++;

        }
}
echo "</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=cp&amp;ka=$ka\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=&amp;\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "kovoti" && file_exists("klaniukos/$ka.ta") && file_exists("klaniukos/$nick.txt")){ 

$mano_gauja = @file_get_contents("klaniukos/$nick.txt"); 

$mano = explode("|", @file_get_contents("klaniukos/$mano_gauja-2.txt"));

$kito = explode("|", @file_get_contents("klaniukos/$ka-2.txt"));

   if ($mano[7] < 1)
{
 echo"<b>Komanda</b><br/></div><div class='line'></div><div class=\"meniu\" style=\"text-align: center;\">
Tavo komanda nebeturi puolimų!!!<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=klanai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=&amp;\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
  else
    {
if ($mano[2] == 0) {
$mano_galia = "1";
 }
else {

$mano_galia = "$mano[2]"+"$mano[3]";
$mano_galia = round($mano_galia,1);
}



if ($kito[3] == 0) {
$kitos_gynyba = "1";
 }
else {
$kitos_gynyba = "$kito[2]"+"$kito[3]";
$kitos_gynyba = round($kitos_gynyba,1);
}

if ($mano_galia > $kitos_gynyba)
{

 $taskai = rand(10,100);
 $litai = rand(1000,10000);
 $mano[0] = $mano[0]+$taskai;
 $mano[1] = $mano[1]+$litai;
 $mano[5] = $mano[5]+1;
 $mano[7] = $mano[7]-1;

$openn = fopen("klaniukos/$mano_gauja-2.txt", "w+");
fwrite($openn, "$mano[0]|$mano[1]|$mano[2]|$mano[3]|$mano_galia|$mano[5]|$mano[6]|$mano[7]|$mano[8]|$mano[9]|\n");
fclose($openn);

 $kito[6] = $kito[6]+1;

$openn = fopen("klaniukos/$ka-2.txt", "w+");
fwrite($openn, "$kito[0]|$kito[1]|$kito[2]|$kito[3]|$kitos_gynyba|$kito[5]|$kito[6]|$kito[7]|$kito[8]|$kito[9]|\n");
fclose($openn);

 $atidaryma = fopen("klaniukos/$ka-pm.txt", "a");
        fwrite($atidaryma, "Jus uzpuole <b>$mano_gauja</b> gauja!<br/>Jusu komandos gynyba buvo <b>$kitos_gynyba</b>, <b>$mano_gauja</b> komandos galia buvo <b>$mano_galia</b> tad jus pralaimejot..|$aaa|\n");
        fclose($atidaryma);
$mano_komandos_kg = @number_format($mano_galia, 0, ',', ' ');
$kito_komandos_kg = @number_format($kitos_gynyba, 0, ',', ' ');
$gavai_pinigu = @number_format($litai, 0, ',', ' ');
echo"<b>Komandų kovą</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b><u>Laimėjot!</u></b><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Tavo komandos kovinė galia <b>$mano_komandos_kg</b><br/>
<b>$ka</b> komandos kovinė galia <b>$kito_komandos_kg</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Tavo komandą gavo <b>$gavai_pinigu</b> pinigų ir <b>$taskai</b> tašku.<br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Liko <b>$mano[7]</b> komandos puolimų.<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=klanai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($mano_galia <= $kitos_gynyba)
{

 $mano[6] = $mano[6]+1;
 $mano[7] = $mano[7]-1;

$openn = fopen("klaniukos/$mano_gauja-2.txt", "w+");
fwrite($openn, "$mano[0]|$mano[1]|$mano[2]|$mano[3]|$mano_galia|$mano[5]|$mano[6]|$mano[7]|$mano[8]|$mano[9]|\n");
fclose($openn);

 $taskai = rand(10,100);
 $litai = rand(100,1000);
 $kito[0] = $kito[0]+$taskai;
 $kito[1] = $kito[1]+$litai;
 $kito[5] = $kito[5]+1;

$openn = fopen("klaniukos/$ka-2.txt", "w+");
fwrite($openn, "$kito[0]|$kito[1]|$kito[2]|$kito[3]|$kitos_gynyba|$kito[5]|$kito[6]|$kito[7]|$kito[8]|$kito[9]|\n");
fclose($openn);

 $atidaryma = fopen("klaniukos/$ka-pm.txt", "a");
        fwrite($atidaryma, "Jus užpuolė <b>$mano_gauja</b> komandą!<br/>Jūsų komandos kovinė galia <b>$kitos_gynyba</b>, <b>$mano_gauja</b> komandos kovine galia buvo <b>$mano_galia</b><br/>Jus laimėjot ir gavotė <b>$litai</b> pinigų ir <b>$taskai</b> tašku.!!|$aaa|\n");
        fclose($atidaryma);
$mano_komandos_kg = @number_format($mano_galia, 0, ',', ' ');
$kito_komandos_kg = @number_format($kitos_gynyba, 0, ',', ' ');
$gavai_pinigu = @number_format($litai, 0, ',', ' ');
echo"<b>Komandų kovą</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<u><b>Pralaimėjot!</b></u><br/>
Tavo komandos kovinė galia <b>$mano_komandos_kg</b><br/>
<b>$ka</b> komandos kovinė galia <b>$kitos_gynyba</b><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Liko <b>$mano[7]</b> komandos puolimų.<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=klanai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";} }}

if ($id == "topai")
{
echo"<b>Komandų TOP</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
$ico <a href=\"komandos.php?id=top&amp;ka=5\">Nariu TOP</a><br/>
$ico <a href=\"komandos.php?id=top&amp;ka=6\">Kovines galios TOP</a><br/>
$ico <a href=\"komandos.php?id=top&amp;ka=1\">Taškų TOP</a><br/>
$ico <a href=\"komandos.php?id=top&amp;ka=2\">Pinigų TOP</a><br/>
$ico <a href=\"komandos.php?id=top&amp;ka=3\">Pergaliu TOP</a><br/>
$ico <a href=\"komandos.php?id=top&amp;ka=4\">Pralaimejimu TOP</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=klanai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "top")
{

    if ($ka == 1)
{

 $topas = "Tasku";


        foreach (glob("klaniukos/*-2.txt") as $a)
        {
            $name = str_replace(array("klaniukos/", "-2.txt"), "", $a);
            $ex = explode("|", file_get_contents($a));
            $arr[] = array("$ex[0]", "$name");
        }
    }

    if ($ka == 2)
{

 $topas = "Litu";

        foreach (glob("klaniukos/*-2.txt") as $a)
        {
            $name = str_replace(array("klaniukos/", "-2.txt"), "", $a);
            $ex = explode("|", file_get_contents($a));
            $arr[] = array("$ex[1]", "$name");
        }
    }

    if ($ka == 3)
{

 $topas = "Pergaliu";

        foreach (glob("klaniukos/*-2.txt") as $a)
        {
            $name = str_replace(array("klaniukos/", "-2.txt"), "", $a);
            $ex = explode("|", file_get_contents($a));
            $arr[] = array("$ex[5]", "$name");
        }
    }

    if ($ka == 4)
{

 $topas = "Pralaimejimu";

        foreach (glob("klaniukos/*-2.txt") as $a)
        {
            $name = str_replace(array("klaniukos/", "-2.txt"), "", $a);
            $ex = explode("|", file_get_contents($a));
            $arr[] = array("$ex[6]", "$name");
        }
    }

    if ($ka == 5)
{

 $topas = "Nariu";

$na = 0; 
$blo = glob("klaniukos/*.ta");
$lvlv = 0; 
foreach($blo as $a){ 
$a = str_replace(array("klaniukos/",".ta"),"",$a);
$pons = file("klaniukos/$a.ta"); 
$n = count($pons); 
$na = $na+$n; 
$arr[]=array($n,"$a");
} 
 }

    if ($ka == 6)
{

 $topas = "Galios";

        foreach (glob("klaniukos/*-2.txt") as $a)
        {
            $name = str_replace(array("klaniukos/", "-2.txt"), "", $a);
            $ex = explode("|", file_get_contents($a));
            $arr[] = array("$ex[4]", "$name");
        }
    }

echo"<b>Komandų $topas TOP</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";

$page = $_GET['page'];
$viso_pm = count($arr);
$puslapiu_skaicius = 10;

if ($viso_pm == 0)
    {
echo"Topu nera...<br/>"; 
}
        else
        {

if ($page == "")

    { $page = 1; }

        $next = $page + 1;
        $back = $page - 1;

       if ($page == 1)
        { $nuo = 0;
            $iki = $puslapiu_skaicius; }
        else
        { $nuo = $page * $puslapiu_skaicius - $puslapiu_skaicius;
            $iki = $page * $puslapiu_skaicius; }

if ($viso_pm <= $page * $puslapiu_skaicius)
        { $iki = $viso_pm; }         
    rsort($arr);
    for ($f = $nuo; $f < $iki; $f++)
    {
        $nr = $f + 1;
        echo "$nr) <a href=\"komandos.php?id=klan&amp;ka={$arr[$f][1]}\">{$arr[$f][1]} ({$arr[$f][0]})</a><br/>";
    }

 $viso_puslapiu = $viso_pm / $puslapiu_skaicius;

    $viso_puslapiai = 0;       $starto_skaicius = 1;
  while ($viso_puslapiai < $viso_puslapiu)
        {
        if ($page == $starto_skaicius)
        {
                 echo "[$starto_skaicius]";
        }
        else
        {
                echo"<a href=\"komandos.php?id=top&amp;page=$starto_skaicius&amp;&amp;ka=$ka\">[$starto_skaicius]</a>";

       }
        $viso_puslapiai++;
            $starto_skaicius++;

        }
}
    $sk = count($arr);
    echo "
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Viso: $sk<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"komandos.php?id=topai\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


?></body></html>