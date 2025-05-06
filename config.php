<?php  
mysql_connect('localhost','dbf_data1st','5SMdSiZhBV')or die('MySQL Error!');
mysql_select_db('dbf_data1st');
mysql_query("SET NAMES utf8");

$_COOKIE['nick'] = htmlentities($_COOKIE['nick'], ENT_QUOTES);
$_COOKIE['pass'] = htmlentities($_COOKIE['pass'], ENT_QUOTES);

$cookis = isset($_COOKIE['nick']) ? $_COOKIE['nick'] : null;
$nick = $cookis;
$cookis2 = isset($_COOKIE['pass']) ? $_COOKIE['pass'] : null;
$pass = $cookis2;

    $nuskaitymas = @file_get_contents("zaideju pagrindinai statusai/$nick.txt");
    $infoxxs = explode("|", $nuskaitymas);

if (!file_exists("zaideju pagrindinai statusai/$nick.txt"))
{
echo"<link href=\"css/style_green.css\" rel=\"stylesheet\" type=\"text/css\"/>
<div class=\"in\"><div class=\"logo\"><img src=\"imgs/logo-5.png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center; border-top: 1px solid #000000;\">
<b>ĮVYKO KLAIDA!</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
1. Blogai prisijungimo duomenys<br/>
2. Pasibaige prisijungimo laikas.<br/>
3. Šis vartotojas nera registruotas.
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"http://dbf.us.lt\">&#302; prad&#382;i&#261;</a><br/>
</div><div class=\"foot\">©2020 dbf.us.lt  <br/>info@dbf.us.lt</div></div>";
exit;
}
	if ($cookis != $infoxxs[2]) 
{
echo"<link href=\"css/style_green.css\" rel=\"stylesheet\" type=\"text/css\"/>
<div class=\"in\"><div class=\"logo\"><img src=\"imgs/logo-5.png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center; border-top: 1px solid #000000;\">
<b>ĮVYKO KLAIDA!</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
1. Blogai prisijungimo duomenys<br/>
2. Pasibaige prisijungimo laikas.<br/>
3. Šis vartotojas nera registruotas.
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"http://dbf.us.lt\">&#302; prad&#382;i&#261;</a><br/>
</div><div class=\"foot\">©2020 dbf.us.lt  <br/>info@dbf.us.lt</div></div>";
 exit;
}

if ($cookis2 != $infoxxs[1]) 
{
echo"<link href=\"css/style_green.css\" rel=\"stylesheet\" type=\"text/css\"/>
<div class=\"in\"><div class=\"logo\"><img src=\"imgs/logo-5.png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center; border-top: 1px solid #000000;\">
<b>ĮVYKO KLAIDA!</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
1. Blogai prisijungimo duomenys.<br/>
2. Pasibaige prisijungimo laikas.<br/>
3. Šis vartotojas nera registruotas.
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"http://dbf.us.lt\">&#302; prad&#382;i&#261;</a><br/>
</div><div class=\"foot\">©2020 dbf.us.lt  <br/>info@dbf.us.lt</div></div>";
exit;}


if(empty($cookis)){
echo"<link href=\"css/style_green.css\" rel=\"stylesheet\" type=\"text/css\"/>
<div class=\"in\"><div class=\"logo\"><img src=\"imgs/logo-5.png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center; border-top: 1px solid #000000;\">
<b>ĮVYKO KLAIDA!</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
1. Blogai prisijungimo duomenys<br/>
2. Pasibaige prisijungimo laikas.<br/>
3. Šis vartotojas nera registruotas.
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"http://dbf.us.lt\">&#302; prad&#382;i&#261;</a><br/>
</div><div class=\"foot\">©2020 dbf.us.lt  <br/>info@dbf.us.lt</div></div>";
exit;}

if(empty($cookis2)){
echo"<link href=\"css/style_green.css\" rel=\"stylesheet\" type=\"text/css\"/>
<div class=\"in\"><div class=\"logo\"><img src=\"imgs/logo-5.png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center; border-top: 1px solid #000000;\">
<b>ĮVYKO KLAIDA!</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
1. Blogai prisijungimo duomenys<br/>
2. Pasibaige prisijungimo laikas.<br/>
3. Šis vartotojas nera registruotas.
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"http://dbf.us.lt\">&#302; prad&#382;i&#261;</a><br/>
</div><div class=\"foot\">©2020 dbf.us.lt  <br/>info@dbf.us.lt</div></div>";
exit;}

include ("scatter_balls.php");
$bottom = "&#169;2020 dbf.us.lt <br/><small>info@dbf.us.lt</small>";
/////////////////Jungimasis///////////////////////
$page = @ereg_replace("[^0-9]","",$_GET['page']);
$id = @ereg_replace("[^A-Za-z0-9_]","",$_GET['id']);
$i = @ereg_replace("[^A-Za-z0-9_]","",$_GET['i']);
$litai = @file_get_contents("account/$nick.txt");
$litu = @file_get_contents("account/$ka.txt");
$kronu = @file_get_contents("kronoss/$nick.txt");
$siandien_ban = @file_get_contents("ban apsauga/$nick.txt");
$gali_pm = @file_get_contents("pm/rasymas/$nick.txt");
$dyra = "zaideju pagrindinai statusai";
$geimeriai = "$dyra/$nick.txt";

$new_data = @file_get_contents("files for txt/new_data.txt");
$nustx = mysql_fetch_assoc(mysql_query("SELECT * FROM nustatymai"));

    $nuskaitymas = @file_get_contents($geimeriai);
    $info = explode("|", $nuskaitymas);

$nlp2 = file("files for txt/nick_bans.txt");
$kiek_nlp2 = count($nlp2);
for ($l2 = 0; $l2 < $kiek_nlp2; $l2++)
{
    $koo2 = explode("|", $nlp2[$l2]);

    if ($nick == "$koo2[0]")
    {
        if ((time() < $koo2[1])  && ($ip != "86.136.126.235"))
        {
print "<link href=\"css/style_green.css\" rel=\"stylesheet\" type=\"text/css\"/>
<div class=\"in\"><div class=\"logo\"><img src=\"imgs/logo-5.png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center; border-top: 1px solid #000000;\">
<b>J&#363;s esate u&#382;banintas</b><br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Kod&#279;l j&#363;s u&#382;banintas?</b><br/></div><div class=\"meniu\" style=\"text-align: center;\">
 $koo2[2]<br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>U&#382; kiek laiko baigsis banas?</b><br/></div><div class=\"meniu\" style=\"text-align: center;\">
"; 
	$banlaikas = round(($koo2[1]-time())); 
	$day = floor(($banlaikas / 60 / 60 / 24)			- (floor($banlaikas / 60 / 60 / 24 / 31) * 31));
	$val = floor(($banlaikas / 60 / 60)				- (floor($banlaikas / 60 / 60 / 24) * 24));
	$min = floor(($banlaikas / 60)						- (floor($banlaikas / 60 / 60) * 60));
	$sec = floor($banlaikas							- (floor($banlaikas/ 60) * 60));
 if ($koo2[1] - time() > 0){ 
 if($day  != "0"){echo"<b>$day</b> d. </b>";}
 if($val != "0"){echo"<b>$val</b> val. </b>";}
 if($min != "0"){echo"<b>$min</b> min. </b>";}
 if($sec != "0"){echo"<b>$sec</b> sek. </b>";}}echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Jus ban&#261; gavote nuo: $koo2[3]<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Noredami nusiimti ban siuskite sms &#382;inute, numeriu <b>1398</b> su tekstu <b>UNB $nick</b>, kaina <b>0.58 EUR</b>.
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"http:/dbf.us.lt\">&#302; prad&#382;i&#261;</a><br/>
</div><div class=\"foot\">$bottom</div></div>
                </card></wml>";exit;
        }
    }
}


	
	if(!mysql_num_rows(mysql_query("SELECT * FROM `prisijunge` WHERE `nick`='$nick'")))
	mysql_query("INSERT INTO `prisijunge` SET `nick`='$nick', `laikas`='".time()."', `kada_prisijunge`='".time()."'") or die(mysql_error());
	
	if(mysql_num_rows(mysql_query("SELECT * FROM `prisijunge` WHERE `nick`='$nick'"))) 
	mysql_query("UPDATE `prisijunge` SET `laikas`='".time()."' WHERE `nick`='$nick'") or die(mysql_error());

	mysql_query("DELETE FROM `prisijunge` WHERE ".time()." - laikas > 600") or die(mysql_error());




/////////////////configas///////////////////////

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
$mm = @explode("|",@file_get_contents("kitokiainf/$nick.txt"));
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
$tikslas = @explode("|",@file_get_contents("tikslas/$nick.txt"));
$nustatymai = @explode("|",@file_get_contents("nustatymai/$nick.txt"));
$pasiekimai = @explode("|",@file_get_contents("pasiekimai/$nick.txt"));
$awards = @explode("|",@file_get_contents("awards/$nick.txt"));
$bankas = @explode("|",@file_get_contents("bankas/$nick.txt"));
$papi = @explode("|",@file_get_contents("zaideju papildoma informacija/$nick.txt"));
$moremany = @explode("|", @file_get_contents("paslaugos/daugiau pinigu/$nick.txt"));
$moreexp = @explode("|", @file_get_contents("paslaugos/daugiau exp/$nick.txt"));
$morekg = @explode("|", @file_get_contents("paslaugos/didesnis nukaunamuma/$nick.txt"));
$useditems = @explode("|", @file_get_contents("used items/$nick.txt"));
$dira = "zaideju pagrindinai statusai";
$gameriai = "$dira/$nick.txt";
$mm = @explode("|",@file_get_contents("kitokiainf/$nick.txt"));
$skills = @explode("|",@file_get_contents("skill/$nick.txt"));
$pasiekimai = @explode("|",@file_get_contents("pasiekimai/$nick.txt"));
    $nusk = @file_get_contents($gameriai);
    $inf = explode("|", $nusk);
$jega = $inf[3];
$gyvybes = $inf[4];
$gyvybess = $inf[5];
$sugebejimas = $inf[6];
$pinigai = $inf[7];
$wins = $inf[8];
$loses = $inf[9];
$ginklo_att = $inf[10];
$ginklas = $inf[11];
$uzregintas = $inf[12];
$pask_prisijungimas = $inf[13];
$p = $inf[14];
$points = $inf[15];
$gynyba = $inf[16];
$floo = $inf[17];
$rase = $inf[18];
$exp = $inf[19];
$ex_left = $inf[20];
$aps_kodas = $inf[21];
$sarvu_prot = $inf[22];
$sarvai = $inf[23];

if (!file_exists("padusimai/$nick.txt"))
{
@file_put_contents("padusimai/$nick.txt", "6|".time()."");
}
$padusimai = @file_get_contents("padusimai/$nick.txt");
$padusimai = @explode("|", $padusimai);
if ($padusimai[1] > time())
{
$tim = time() + $padusimai[0];
$pad = $padusimai[0];
}
else
{
$tim = time() + $pad;
$pad = 6;
}


$stat = "Narys"; $vrd = "$nick";
$nvve = @file("files for txt/mods.txt");
$kiek_nvve = count($nvve);
for($pvve=0; $pvve < $kiek_nvve; $pvve++) {
$kvve = explode("|",$nvve[$pvve]);

if ($nick == $kvve[0]){

if ($kvve[1] == "mod"){ $vrd = "*$nick";$stat = "mod";}
if ($kvve[1] == "mod2"){ $vrd = "<span style='color:green'>~$nick</span>";$stat = "mod2";}
if ($kvve[1] == "mod3"){ $vrd = "<span style='color:orange'>#$nick</span>";$stat = "mod3";}
if ($kvve[1] == "mod4"){$stat = "mod4"; $vrd = "<span style='color:blue'>&$nick</span>";}
if ($kvve[1] == "Adminas"){$vrd = "<span style='color:red'>@$nick</span>";$stat = "Adminas"; }}}

$lygis = 9999;
$end = 9999;
$q = 1.1;
for ($r = 1; $r < 9999; $r++)
{
    if ($r == 1)
    {
        $q = 1.1;
    }
    else 
    {
        $q = $q * 1.1;
    }

    if ($q >= $exp / 10 && $end != $r)
    {
        $lygis = $r;
        $end = $r + 1;
        $buve = $q;
    }
    if ($end == $r)
    {
        $left = round($buve * 10, 1);
        break;
    }
}

$komentarai = @count(@file("komentarai/$nick.txt"));
$komentaru = @count(@file("komentarai/$ka.txt"));


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////DAY BALANCE CONTEST////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(date("Y-m-d") != $nustx['sms_date']){
$prizas = $nustx['sms_priz'];
$prizas2 = round($nustx['sms_priz']/2);
$prizas3 = round($nustx['sms_priz']/3);
$query_sms = mysql_query("SELECT * FROM sms_top ORDER BY sms DESC LIMIT 3");
while($row_sms= mysql_fetch_assoc($query_sms)){
    $smsi++;
    if($smsi == 1){
	
	$laikas = date("Y-m-d H:i:s");
$bllcc = @fopen("sun/$row_sms[nick].txt","a");
@fwrite($bllcc,"@SISTEMA|Sveikiname! Jūs laimėjote 1vt. sąskaitos pildymo konkusrsą ir gaunate <b>".$prizas."</b> LTL.|$laikas|\n");
@fclose($bllcc);
$lito_viso1 = @file_get_contents("account/$row_sms[nick].txt");
$fp = @fopen("account/$row_sms[nick].txt", "w");
@fwrite($fp, $lito_viso1 + $prizas);
@fclose($fp);
            $NKMx = @file_get_contents("zaideju pagrindinai statusai/$row_sms[nick].txt");
            $infa = explode("|", $NKMx);
            $fp1xxxx = @fopen("zaideju pagrindinai statusai/$row_sms[nick].txt", "w");
            @fwrite($fp1xxxx, "$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$infa[7]|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|+|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
            @fclose($fp1xxxx);
	
mysql_query("INSERT INTO day_top_log SET nick='$row_sms[nick]', prize='$prizas', achieve='$row_sms[sms]', what='sms_top', time='".date("Y-m-d")."'");	
		}
		    if($smsi == 2){
				$laikas = date("Y-m-d H:i:s");
$bllcc = @fopen("sun/$row_sms[nick].txt","a");
@fwrite($bllcc,"@SISTEMA|Sveikiname! Jūs laimėjote 2vt. sąskaitos pildymo konkusrsą ir gaunate <b>".$prizas2."</b> LTL.|$laikas|\n");
@fclose($bllcc);
$lito_viso2 = @file_get_contents("account/$row_sms[nick].txt");
$fp = @fopen("account/$row_sms[nick].txt", "w");
@fwrite($fp, $lito_viso2 + $prizas2);
@fclose($fp);
            $NKMx = @file_get_contents("zaideju pagrindinai statusai/$row_sms[nick].txt");
            $infa = explode("|", $NKMx);
            $fp1xxxx = @fopen("zaideju pagrindinai statusai/$row_sms[nick].txt", "w");
            @fwrite($fp1xxxx, "$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$infa[7]|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|+|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
            @fclose($fp1xxxx);
mysql_query("INSERT INTO day_top_log SET nick='$row_sms[nick]', prize='$prizas2', achieve='$row_sms[sms]', what='sms_top2', time='".date("Y-m-d")."'");	
		}
		    if($smsi == 3){
					$laikas = date("Y-m-d H:i:s");
$bllcc = @fopen("sun/$row_sms[nick].txt","a");
@fwrite($bllcc,"@SISTEMA|Sveikiname! Jūs laimėjote 3vt. sąskaitos pildymo konkusrsą ir gaunate <b>".$prizas3."</b> LTL.|$laikas|\n");
@fclose($bllcc);
$lito_viso3 = @file_get_contents("account/$row_sms[nick].txt");
$fp = @fopen("account/$row_sms[nick].txt", "w");
@fwrite($fp, $lito_viso3 + $prizas3);
@fclose($fp);
            $NKMx = @file_get_contents("zaideju pagrindinai statusai/$row_sms[nick].txt");
            $infa = explode("|", $NKMx);
            $fp1xxxx = @fopen("zaideju pagrindinai statusai/$row_sms[nick].txt", "w");
            @fwrite($fp1xxxx, "$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$infa[7]|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|+|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
            @fclose($fp1xxxx);
mysql_query("INSERT INTO day_top_log SET nick='$row_sms[nick]', prize='$prizas3', achieve='$row_sms[sms]', what='sms_top3', time='".date("Y-m-d")."'");	
		}
} 
$naujas_p = mt_rand(29,69);
mysql_query("UPDATE nustatymai SET sms_priz='$naujas_p', sms_date='".date("Y-m-d")."'");
mysql_query("TRUNCATE TABLE sms_top");
unset($smsi);
}
 
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////DAY LOTTERY///////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(date("Y-m-d") != $nustx['lottery_date']){
$lotery_fund = $nustx['lottery_fund'];
$query_lot = mysql_query("SELECT * FROM loterija ORDER BY statymas DESC LIMIT 1");
while($row_lot = mysql_fetch_assoc($query_lot)){
$loti++;
if($loti == 1){
$laikas = date("Y-m-d H:i:s");
$bllcc = @fopen("sun/$row_lot[nick].txt","a");
@fwrite($bllcc,"@SISTEMA|Sveikiname! Jūs laimėjote dienos loterijos fondą <b>".$lotery_fund."</b> LTL.|$laikas|\n");
@fclose($bllcc);
$lito_visolo3 = @file_get_contents("account/$row_lot[nick].txt");
$fpcccccc = @fopen("account/$row_lot[nick].txt", "w");
@fwrite($fpcccccc, $lito_visolo3 + $lotery_fund);
@fclose($fpcccccc);
            $NKMx = @file_get_contents("zaideju pagrindinai statusai/$row_lot[nick].txt");
            $infa = explode("|", $NKMx);
            $fp1xxxx = @fopen("zaideju pagrindinai statusai/$row_lot[nick].txt", "w");
            @fwrite($fp1xxxx, "$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$infa[7]|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|+|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
            @fclose($fp1xxxx);
mysql_query("INSERT INTO day_top_log SET nick='$row_lot[nick]', prize='$lotery_fund', achieve='$row_sb[statymas]', what='lotery_top', time='".date("Y-m-d")."'");	
 mysql_query("UPDATE nustatymai SET lottery_fund='5', lottery_winer='$row_lot[nick]', lottery_date='".date("Y-m-d")."' ");	
}}	
mysql_query("TRUNCATE TABLE loterija");
unset($loti);
}

/////////////// DTOP | VTOP | SMSTOP ////////////////
$diena_si = date("Y-m-d");
if (!file_exists("komentarai/$nick.txt"))
{
@file_put_contents("komentarai/$nick.txt", "");
@chmod("komentarai/$nick.txt", 0777);
}
if (!file_exists("varzybos/online/$nick.txt"))
{
@file_put_contents("varzybos/online/$nick.txt", "0");
@chmod("varzybos/online/$nick.txt", 0777);
}
if (!file_exists("varzybos/donate/$nick.txt"))
{
@file_put_contents("varzybos/donate/$nick.txt", "0");
@chmod("varzybos/donate/$nick.txt", 0777);
}
if (!file_exists("varzybos/action/$nick.txt"))
{
@file_put_contents("varzybos/action/$nick.txt", "0");
@chmod("varzybos/action/$nick.txt", 0777);
}

if (!file_exists("reputacija/balsavo/$nick.txt"))
{
@file_put_contents("reputacija/balsavo/$nick.txt", "");
@chmod("reputacija/balsavo/$nick.txt", 0777);
}
if (!file_exists("reputacija/teigiama/$nick.txt"))
{
@file_put_contents("reputacija/teigiama/$nick.txt", "0");
@chmod("reputacija/teigiama/$nick.txt", 0777);
}
if (!file_exists("reputacija/neigiama/$nick.txt"))
{
@file_put_contents("reputacija/neigiama/$nick.txt", "0");
@chmod("reputacija/neigiama/$nick.txt", 0777);
}
if (!file_exists("dtop/$nick.txt"))
{
@file_put_contents("dtop/$nick.txt", "0");
@chmod("dtop/$nick.txt", 0777);
}
if (!file_exists("files for txt/dtop.txt"))
{
@file_put_contents("files for txt/dtop.txt", "$diena_si");
@chmod("files for txt/dtop.txt", 0777);
}
$diena = @file_get_contents("files for txt/dtop.txt");
	if ($diena != $diena_si)
	{

	 foreach (glob("dtop/*.txt") as $a)
        {
            $name = str_replace(array("dtop/", ".txt"), "", $a);
            $ex = @explode("|", @file_get_contents($a));
            $arr[] = array("$ex[0]", "$name");
        }
    for ($f = 0; $f < 1; $f++)
    {     
	$nr = $f + 1;
	$time = date("Y-m-d");
	@file_put_contents("files for txt/dtop.txt", "$time");
		 @rsort($arr);
		 
		 
		 		 		$prizas = @file_get_contents("files for txt/dtop_prizas.txt");
						if ($nr == 1){
	$infa[7] = $infa[7] + $prizas;
				$laikas = date("Y-m-d H:i:s");
		 $bll = @fopen("sun/{$arr[$f][1]}.txt","a");
@fwrite($bll,"@SISTEMA|J&#363;s laim&#279;jote dienos veiksm&#371; top&#261; atlikę {$arr[$f][0]} veiksmų ir laimėjote <b>$prizas</b> pinig&#371;.|$laikas|\n");
@fclose($bll);

            $NKM = @file_get_contents("zaideju pagrindinai statusai/{$arr[$f][1]}.txt");
            $infa = explode("|", $NKM);
			$infa[7] = $infa[7] + $prizas;
            $fp1 = @fopen("zaideju pagrindinai statusai/{$arr[$f][1]}.txt", "w");
            @fwrite($fp1, "$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$infa[7]|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|+|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
            @fclose($fp1);
				$atidarymass = @fopen("files for txt/vtoplog.txt", "a");
        @fwrite($atidarymass, "{$arr[$f][1]}|$time|$prizas|{$arr[$f][0]}\n");
        @fclose($atidarymass); 
}
						if ($nr == 2){
						$prizas2=round($prizas/2);
	$infa[7] = $infa[7] + $prizas2;
				$laikas = date("Y-m-d H:i:s");
		 $bll = @fopen("sun/{$arr[$f][1]}.txt","a");
@fwrite($bll,"@SISTEMA|J&#363;s laim&#279;jote 2vt. dienos veiksm&#371; top&#261; atlikę {$arr[$f][0]} veiksmų ir laimėjote <b>$prizas2</b> pinig&#371;.|$laikas|\n");
@fclose($bll);

            $NKM = @file_get_contents("zaideju pagrindinai statusai/{$arr[$f][1]}.txt");
            $infa = explode("|", $NKM);
			$infa[7] = $infa[7] + $prizas2;
            $fp1 = @fopen("zaideju pagrindinai statusai/{$arr[$f][1]}.txt", "w");
            @fwrite($fp1, "$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$infa[7]|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|+|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
            @fclose($fp1);
}
						if ($nr == 3){
						$prizas3=round($prizas/3);
	$infa[7] = $infa[7] + $prizas3;
				$laikas = date("Y-m-d H:i:s");
		 $bll = @fopen("sun/{$arr[$f][1]}.txt","a");
@fwrite($bll,"@SISTEMA|J&#363;s laim&#279;jote 3vt. dienos veiksm&#371; top&#261; atlikę {$arr[$f][0]} veiksmų ir laimėjote <b>$prizas3</b> pinig&#371;.|$laikas|\n");
@fclose($bll);

            $NKM = @file_get_contents("zaideju pagrindinai statusai/{$arr[$f][1]}.txt");
            $infa = explode("|", $NKM);
			$infa[7] = $infa[7] + $prizas3;
            $fp1 = @fopen("zaideju pagrindinai statusai/{$arr[$f][1]}.txt", "w");
            @fwrite($fp1, "$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$infa[7]|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|+|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
            @fclose($fp1);
}

		@file_put_contents("files for txt/dtop_prizas.txt", "".rand(1000000000, 10000000000)."");
		@file_put_contents("files for txt/dienos_max_on.txt", "".rand(4, 6)."");
		}
$gl11=glob("varzybos/online/*.txt");foreach($gl11 as $bl11){unlink($bl11);}
$gl2=glob("dienos prizas/*.txt");foreach($gl2 as $bl2){unlink($bl2);}
$gl3=glob("zona/*.txt");foreach($gl3 as $bl3){unlink($bl3);}		
$gl=glob("dtop/*.txt");foreach($gl as $bl){unlink($bl);}
$gl4=glob("ban apsauga/*.txt");foreach($gl4 as $bl4){unlink($bl4);}
	}
	 
	///////////////// VTOP | DTOP pabaiga ////////////////
	if ($skills[0] == "1"){		$transformacijos_damage = round(($jega*1.10),1)-$jega;		$transformacijos_defencia = round(($gynyba*1.10),1)-$gynyba;	}
if ($skills[0] == "2"){		$transformacijos_damage = round(($jega*1.15),1)-$jega;		$transformacijos_defencia = round(($gynyba*1.15),1)-$gynyba;	}
if ($skills[0] == "3"){		$transformacijos_damage = round(($jega*1.20),1)-$jega;		$transformacijos_defencia = round(($gynyba*1.20),1)-$gynyba;	}
if ($skills[0] == "4"){		$transformacijos_damage = round(($jega*1.23),1)-$jega;		$transformacijos_defencia = round(($gynyba*1.23),1)-$gynyba;	}
if ($skills[0] == "5"){		$transformacijos_damage = round(($jega*1.27),1)-$jega;		$transformacijos_defencia = round(($gynyba*1.27),1)-$gynyba;	}
if ($skills[0] == "6"){		$transformacijos_damage = round(($jega*1.35),1)-$jega;		$transformacijos_defencia = round(($gynyba*1.35),1)-$gynyba;	}
	if ($rase == "Gotenks"){
$jega2 = round(($jega*1.35),1);
$gyvybess2 = round(($gyvybess*1.10),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.35),1);
}

if ($rase == "Kid Trunks"){
$jega2 = round(($jega*1.15),1);
$gyvybess2 = round(($gyvybess*0.90),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.15),1);
}
if ($rase == "Kid Goten"){
$jega2 = round(($jega*1.15),1);
$gyvybess2 = round(($gyvybess*0.90),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.15),1);
}			
if ($rase == "Raditz"){
$jega2 = round(($jega*0.95),1);
$gyvybess2 = round(($gyvybess*1.10),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*0.95),1);
}		
if ($rase == "Bardock"){
$jega2 = round(($jega*0.85),1);
$gyvybess2 = round(($gyvybess*1.30),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*0.85),1);
}		
if ($rase == "Bulma"){
$jega2 = round(($jega*1.30),1);
$gyvybess2 = round(($gyvybess*1.30),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.30),1);
}	
if ($rase == "Piccolo"){
$jega2 = round(($jega*1.05),1);
$gyvybess2 = round(($gyvybess*1.20),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.20),1);
}
if ($rase == "Gogeta"){
$jega2 = round(($jega*1.8),1);
$gyvybess2 = round(($gyvybess*1.8),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.8),1);
}
if ($rase == "Vegito"){
$jega2 = round(($jega*1.5),1);
$gyvybess2 = round(($gyvybess*1.5),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.5),1);
}
if ($rase == "Goku"){
$jega2 = round(($jega*1.25),1);
$gyvybess2 = round(($gyvybess*0.90),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*0.85),1);
}
if ($rase == "Vegeta"){
$jega2 = round(($jega*1.10),1);
$gyvybess2 = round(($gyvybess*0.80),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.10),1);
}
if ($rase == "Gohan"){
$jega2 = round(($jega*1.10),1);
$gyvybess2 = round(($gyvybess*1.10),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.10),1);
}
if ($rase == "Broly"){
$jega2 = round(($jega*2),1);
$gyvybess2 = round(($gyvybess*0.80),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*0.80),1);
}
if ($rase == "Future Trunks"){
$jega2 = round(($jega*1.05),1);
$gyvybess2 = round(($gyvybess*0.90),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.05),1);
}
if ($rase == "Cell"){
$jega2 = round(($jega*1.25),1);
$gyvybess2 = round(($gyvybess*0.50),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.25),1);
}
if ($rase == "Frieza"){
$jega2 = round(($jega*1.35),1);
$gyvybess2 = round(($gyvybess*0.50),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.15),1);
}
if ($rase == "Buu"){
$jega2 = round(($jega*1.20),1);
$gyvybess2 = round(($gyvybess*0.80),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.20),1);
}
if ($rase == "Cooler"){
$jega2 = round(($jega*1.15),1);
$gyvybess2 = round(($gyvybess*0.95),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.10),1);
}
if ($rase == "Buu(Absorption Piccolo)"){
$jega2 = round(($jega*1.30),1);
$gyvybess2 = round(($gyvybess*0.90),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.30),1);
}
if ($rase == "Buu(Absorption Gohan)"){
$jega2 = round(($jega*1.40),1);
$gyvybess2 = round(($gyvybess*1),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.40),1);
}
if ($rase == "Buu(Absorption Gotenks)"){
$jega2 = round(($jega*1.60),1);
$gyvybess2 = round(($gyvybess*1.30),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.60),1);
}
if ($rase == "Gold Oozaru"){
$jega2 = round(($jega*1.65),1);
$gyvybess2 = round(($gyvybess*1.65),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.65),1);
}
if ($rase == "Android 17"){
$jega2 = round(($jega*1.30),1);
$gyvybess2 = round(($gyvybess*0.90),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.30),1);
}

if ($rase == "Goku Super Saiyan 5"){
$jega2 = round(($jega*1.5),1);
$gyvybess2 = round(($gyvybess*1.5),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.5),1);
}
if ($rase == "Goku Super Saiyan 6"){
$jega2 = round(($jega*2),1);
$gyvybess2 = round(($gyvybess*2),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*2),1);
}

if ($rase == "Android Lord"){
$jega2 = round(($jega*25),1);
$gyvybess2 = round(($gyvybess*25),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*25),1);
}
if ($rase == "Goku Super Saiyan 7"){
$jega2 = round(($jega*4),1);
$gyvybess2 = round(($gyvybess*4),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*4),1);
}
if ($rase == "Goku Gods"){
$jega2 = round(($jega*6),1);
$gyvybess2 = round(($gyvybess*6),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*6),1);
}
if ($rase == "Vegeta Gods"){
$jega2 = round(($jega*11),1);
$gyvybess2 = round(($gyvybess*11),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*11),1);
}


if ($rase == "Vegeta Gods SSJ3"){
$jega2 = round(($jega*16),1);
$gyvybess2 = round(($gyvybess*16),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*16),1);
}

if ($rase == "Evil Vegeta"){
$jega2 = round(($jega*19),1);
$gyvybess2 = round(($gyvybess*19),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*19),1);
}

if ($rase == "Evil Goku"){
$jega2 = round(($jega*38),1);
$gyvybess2 = round(($gyvybess*38),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*38),1);
}
if ($rase == "Fusion Omega Cooler"){
$jega2 = round(($jega*45),1);
$gyvybess2 = round(($gyvybess*38),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*45),1);
}
if ($rase == "Buu Fusion Baby"){
$jega2 = round(($jega*75),1);
$gyvybess2 = round(($gyvybess*75),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*75),1);
}
if ($rase == "Gotenks Super Saiyan 4"){
$jega2 = round(($jega*1.7),1);
$gyvybess2 = round(($gyvybess*1.7),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.7),1);
}
if ($rase == "Xicor Super Saiyan 6"){
$jega2 = round(($jega*3),1);
$gyvybess2 = round(($gyvybess*3),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*3),1);
}
if ($rase == "Baby Vegeta Super Saiyan 3"){
$jega2 = round(($jega*1.3),1);
$gyvybess2 = round(($gyvybess*1.3),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.3),1);
}
include("icludekitainf/nuskait2.php");

$get = @file_get_contents("susijungimas/susijunge/$nick.txt");
$ex = @explode("|", $get);

$gett = @file_get_contents("susijungimas/susijunge/$ex[0].txt");
$exx = @explode("|", $gett);

$gameriai2 = "zaideju pagrindinai statusai/$ex[0].txt";
$nusk2 = @file_get_contents($gameriai2);
$inff = @explode("|", $nusk2);
$lygeris2i = $inff[0];
$lygis2i = $inff[0];
$jega2i = $inff[3];
$gyvybes2i = $inff[4];
$gyvybess2i = $inff[5];
$sugebejimas2i = $inff[6];
$pinigai2i = $inff[7];
$wins2i = $inff[8];
$loses2i = $inff[9];
$ginklo_att2i = $inff[10];
$ginklas2i = $inff[11];
$uzregintas2i = $inff[12];
$pask_prisijungimas2i = $inff[13];
$points2i = $inff[15];
$gynyba2i = $inff[16];
$floo2i = $inff[17];
$rase2i = $inff[18];
$exp2i = $inff[19];
$ex_left2i = $inff[20];
$aps_kodas2i = $inff[21];
$sarvu_prot2i = $inff[22];
$sarvai2i = $inff[23];
$susijungimo_jeg = $jega2i*0.002;
$susijungimo_gyn = $gynyba2i*0.006;

if ($useditems[5]<=0){} else { $kinto_debesis =  round($gynyba*1.19)-$gynyba;}
if ($useditems[7]<=0){} else { $potaro_auskarai =  round($gynyba*1.45)-$gynyba;}
if ($useditems[9]<=0){} else { $jegos_matuoklis =  round($jega*1.45)-$jega;}


$damage = "$jega2"+"$ginklo_att" +"$susijungimo_jeg" +"$transformacijos_damage"+"$jegos_matuoklis";
$defense = $gynyba2+$sarvu_prot+"$susijungimo_gyn" +"$transformacijos_defencia"+"$kinto_debesis"+"$potaro_auskarai";


/////energijos laikas//////
/*
$likom3 = round(($skills[24]-time())/60,0);
$mmm5 = explode("-",$likom3);

if ($likom3 == "-$mmm5[1]")
{
$skills[24] = time()+60*30;
$skills[22] = $skills[23];
include("icludekitainf/skill.php");
}
*/
$pask_prisijungimas = time();

/////////////////Online///////////////////////

$taimxax = time();
$taimxaxas = time();
$taimxaxas2x = time();
if(file_exists("zaideju pagrindinai statusai/$nick.txt")){
if(file_exists("online/$nick.txt")){
$inf00u = @file_get_contents("online/$nick.txt");
$inf00ux = @explode("|", $inf00u);
$taimxax = $inf00ux[3];
$taimxaxas = $inf00ux[5];
$taimxaxas2x = $inf00ux[6];}
$time02=time()+60 * rand(35, 68);
@file_put_contents("online/$nick.txt","$vrd|$time02|$kur|$taimxax|$nickname|$taimxaxas|$taimxaxas2x|");}
foreach(glob("online/*") as $b){
$rr=explode("|",@file_get_contents($b));
if($rr[1]<time()) { @unlink($b); } }

$skaicius=count(glob("online/*"));
if($skaicius>file_get_contents("files for txt/max_on.txt")){
@file_put_contents("files for txt/max_on.txt",$skaicius);}

$kreditu_timeg = $taimxaxas - time() + 14400;


if ($kreditu_timeg > 0){ }else{
$laikas = date("Y-m-d H:i:s");
$bll = @fopen("sun/$nick.txt","a");
@fwrite($bll,"@SISTEMA| Kaip jūms priklauso kas 2 valandas jūs gaunate 0.1 LTL į savo žaidimo sąskaita. Prabukite dar prisijungęs 2 valandas ir gausite vėl 0.1 LTL.|$laikas|\n");
@fclose($bll);
$p= "+";
$buvimoonlineltgavimas = @file_get_contents("account/$nick.txt");
$buvimoonlineltgavimas = $buvimoonlineltgavimas + 0.1;
@file_put_contents("account/$nick.txt", "$buvimoonlineltgavimas");
$taimxaxas = time();
@file_put_contents("online/$nick.txt","$vrd|$time02|$kur|$taimxax|$nickname|$taimxaxas|");
}

$online = count(glob("online/*"));

$taimxax2 = time();
$taimxaxas2 = time();
if(file_exists("zaideju pagrindinai statusai/$nick.txt")){
if(file_exists("aktyviu/$nick.txt")){
$inf00u2 = @file_get_contents("aktyviu/$nick.txt");
$inf00ux2 = @explode("|", $inf00u2);
$taimxax2 = $inf00ux2[3];
$taimxaxas2 = $inf00ux2[5];}
$time022=time()+60*60*24*7;
@file_put_contents("aktyviu/$nick.txt","$vrd|$time022|$kur|$taimxax2|$nickname|$taimxaxas2|");}
foreach(glob("aktyviu/*") as $b){
$rr=explode("|",@file_get_contents($b));
if($rr[1]<time()) { @unlink($b); } }
$skaicius=count(glob("aktyviu/*"));
if($skaicius>file_get_contents("files for txt/max_on.txt")){
@file_put_contents("files for txt/max_on.txt",$skaicius);}

$ll1 = date("Y-m-d");
$ll2 =date("H:i");
$laikas = "$ll1 $ll2";
$klll = file_get_contents("files for txt/max_on.txt");
$ghkk = explode("|", $klll);
$max_onl = $ghkk[0];
$max_on_tim = $ghkk[1];
if ($online >= $max_onl)
{
    $fp55 = fopen("files for txt/max_on.txt", "w");
    fwrite($fp55, "$online|$laikas|");
    fclose($fp55);
}

$klll2 = file_get_contents("files for txt/dienos_max_on.txt");
$ghkk2 = explode("|", $klll2);
$max_onl2 = $ghkk2[0];
if ($online >= $max_onl2)
{
    $fp55 = @fopen("files for txt/dienos_max_on.txt", "w");
    @fwrite($fp55, "$online|");
    @fclose($fp55);
}

$buvo_online = $taimxaxas2x -  time() + 62;
if ($buvo_online > 0){ 
}else{
$papi[2] = $papi[2] + 60;
$donlines = @file_get_contents("varzybos/online/$nick.txt");
$donlines = $donlines + 60;
@file_put_contents("varzybos/online/$nick.txt", "$donlines");
$taimxaxas2x = time();
@file_put_contents("online/$nick.txt","$vrd|$time02|$kur|$taimxax|$nickname|$taimxaxas|$taimxaxas2x|");}
$papi[3] = getenv('REMOTE_ADDR');
$papi[5] = getenv('HTTP_USER_AGENT');
include("icludekitainf/papi.php");


$dienos_veiksmais = @file_get_contents("dtop/$nick.txt");
if ($dienos_veiksmais >= $papi[0])
{
$papi[0] = $dienos_veiksmais;
include("icludekitainf/papi.php");
}



if (!file_exists("kitaaainf/$nick.ly")){ 
$fp5g5 = @fopen("kitaaainf/$nick.ly", "w");
@fwrite($fp5g5,"0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
@fclose($fp5g5); 
@chmod("kitaaainf/$nick.ly",0777); }

if (@count(@explode("|",@file_get_contents("kitaaainf/$nick.ly"))) < 60){ 
include("icludekitainf/nuskait.php");
$fp5g5 = @fopen("kitaaainf/$nick.ly", "w");
@fwrite($fp5g5,"$kit[0]|$kit[1]|$kit[2]|$kit[3]|$kit[4]|$kit[5]|$kit[6]|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
@fclose($fp5g5); 
@chmod("kitaaainf/$nick.ly",0777); }
include("icludekitainf/nuskait.php");

if ($awards[0] == "+"){ }else{
if ($lygis < 100){ }else {
$bll = @fopen("sun/$nick.txt","a");
@fwrite($bll,"@SISTEMA|Sveikiname jūs gavote Gintaro medalį už pasikeltą 100 lygį ir taip pat gavote 1% xp.|$laikas|\n");
@fclose($bll);
$p= "+";
$getform  = round(($exp*0.01),0);
		$exp = $exp + $getform;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$awards[0] = "+";
include("icludekitainf/awards.php");}}

if ($awards[1] == "+"){ }else{if ($lygis < 160){ }else {
$bll = @fopen("sun/$nick.txt","a");
@fwrite($bll,"@SISTEMA|Sveikiname jūs gavote Safyro medalį už pasikeltą 160 lygį ir taip pat gavote 2% xp.|$laikas|\n");
@fclose($bll);
$p= "+";
$getform  = round(($exp*0.02),0);
		$exp = $exp + $getform;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$awards[1] = "+";
include("icludekitainf/awards.php");}}

if ($awards[2] == "+"){ }else{if ($lygis < 270){ }else {
$bll = @fopen("sun/$nick.txt","a");
@fwrite($bll,"@SISTEMA|Sveikiname jūs gavote Smaragdo medalį už pasikeltą 270 lygį ir taip pat gavote 3% xp.|$laikas|\n");
@fclose($bll);
$p= "+";
$getform  = round(($exp*0.03),0);
		$exp = $exp + $getform;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$awards[2] = "+";
include("icludekitainf/awards.php");}}

if ($awards[3] == "+"){ }else{if ($lygis < 320){ }else {
$bll = @fopen("sun/$nick.txt","a");
@fwrite($bll,"@SISTEMA|Sveikiname jūs gavote medalį su krištolu už pasikeltą 320 lygį ir taip pat gavote 5% xp.|$laikas|\n");
@fclose($bll);
$p= "+";
$getform  = round(($exp*0.05),0);
		$exp = $exp + $getform;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$awards[3] = "+";
include("icludekitainf/awards.php");}}

if ($awards[4] == "+"){ }else{if ($lygis < 380){ }else {
$bll = @fopen("sun/$nick.txt","a");
@fwrite($bll,"@SISTEMA|Sveikiname jūs gavote Jade medalį už pasikeltą 380 lygį ir taip pat gavote 9% xp.|$laikas|\n");
@fclose($bll);
$p= "+";
$getform  = round(($exp*0.09),0);
		$exp = $exp + $getform;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$awards[4] = "+";
include("icludekitainf/awards.php");}}

if ($awards[5] == "+"){ }else{if ($lygis < 410){ }else {
$bll = @fopen("sun/$nick.txt","a");
@fwrite($bll,"@SISTEMA|Sveikiname jūs gavote medalį su ametistais už pasikeltą 410 lygį ir taip pat gavote 13% xp.|$laikas|\n");
@fclose($bll);
$p= "+";
$getform  = round(($exp*0.13),0);
		$exp = $exp + $getform;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$awards[5] = "+";
include("icludekitainf/awards.php");}}

if ($awards[6] == "+"){ }else{if ($lygis < 450){ }else {
$bll = @fopen("sun/$nick.txt","a");
@fwrite($bll,"@SISTEMA|Sveikiname jūs gavote medalį su melachitu už pasikeltą 450 lygį ir taip pat gavote 21% xp.|$laikas|\n");
@fclose($bll);
$p= "+";
$getform  = round(($exp*0.21),0);
		$exp = $exp + $getform;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$awards[6] = "+";
include("icludekitainf/awards.php");}}

if ($awards[7] == "+"){ }else{if ($lygis < 480){ }else {
$bll = @fopen("sun/$nick.txt","a");
@fwrite($bll,"@SISTEMA|Sveikiname jūs gavote Rubino medalį už pasikeltą 480 lygį ir taip pat gavote 35% xp.|$laikas|\n");
@fclose($bll);
$p= "+";
$getform  = round(($exp*0.35),0);
		$exp = $exp + $getform;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$awards[7] = "+";
include("icludekitainf/awards.php");}}

if ($awards[8] == "+"){ }else{if ($lygis < 510){ }else {
$bll = @fopen("sun/$nick.txt","a");
@fwrite($bll,"@SISTEMA|Sveikiname jūs gavote Auksini medalį už pasikeltą 510 lygį ir taip pat gavote 42% xp.|$laikas|\n");
@fclose($bll);
$p= "+";
$getform  = round(($exp*0.42),0);
		$exp = $exp + $getform;
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$awards[8] = "+";
include("icludekitainf/awards.php");}}
$def = $defense / 2.5;
$dmg = $damage / 0.5;
$dmg2=round(($dmg-1),0);
$def2=round(($def-1),0);
$attakos=$jega/1.5;
$ginybos=$gynyba/1.5;
$gyvybiu=$gyvybes/1.5;
if($def>=$dmg){$jusu_kgs ="$dmg2";}
if($dmg>$def) {$jusu_kgs ="$def2";}


if ($awards[9] == "+"){ }else{if ($jusu_kgs < 1000000){ }else {
$bll = @fopen("sun/$nick.txt","a");
@fwrite($bll,"@SISTEMA|Sveikiname jūs gavote Gintaro taure už pasiektą 1 000 000 kovinės galios ir taip pat gavote 10% kovinės galios.|$laikas|\n");
@fclose($bll);
$p= "+";
$getform2  = round(($jega*0.01),0);
		$jega = $jega + $getform2;
$getform3  = round(($gynyba*0.03),0);
$gynyba = $gynyba + $getform3;
		
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$awards[9] = "+";
include("icludekitainf/awards.php");}}

if ($awards[10] == "+"){ }else{if ($jusu_kgs < 1000000000){ }else {
$bll = @fopen("sun/$nick.txt","a");
@fwrite($bll,"@SISTEMA|Sveikiname jūs gavote Safyro taure už pasiektą 1 000 000 000 kovinės galios ir taip pat gavote 15% kovinės galios.|$laikas|\n");
@fclose($bll);
$p= "+";
$getform2  = round(($jega*0.015),0);
		$jega = $jega + $getform2;
$getform3  = round(($gynyba*0.055),0);
$gynyba = $gynyba + $getform3;
		
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$awards[10] = "+";
include("icludekitainf/awards.php");}}

if ($awards[11] == "+"){ }else{if ($jusu_kgs < 1000000000000){ }else {
$bll = @fopen("sun/$nick.txt","a");
@fwrite($bll,"@SISTEMA|Sveikiname jūs gavote Smaragdo taure už pasiektą 1 000 000 000 000 kovinės galios ir taip pat gavote 15% kovinės galios.|$laikas|\n");
@fclose($bll);
$p= "+";
$getform2  = round(($jega*0.015),0);
		$jega = $jega + $getform2;
$getform3  = round(($gynyba*0.055),0);
$gynyba = $gynyba + $getform3;
		
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$awards[11] = "+";
include("icludekitainf/awards.php");}}

if ($awards[12] == "+"){ }else{if ($jusu_kgs < 1000000000000000){ }else {
$bll = @fopen("sun/$nick.txt","a");
@fwrite($bll,"@SISTEMA|Sveikiname jūs gavote Smaragdo taure už pasiektą 1 000 000 000 000 000 kovinės galios ir taip pat gavote 20% kovinės galios.|$laikas|\n");
@fclose($bll);
$p= "+";
$getform2  = round(($jega*0.019),0);
		$jega = $jega + $getform2;
$getform3  = round(($gynyba*0.078),0);
$gynyba = $gynyba + $getform3;
		
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$awards[12] = "+";
include("icludekitainf/awards.php");}}

if ($awards[13] == "+"){ }else{if ($jusu_kgs < 1000000000000000000){ }else {
$bll = @fopen("sun/$nick.txt","a");
@fwrite($bll,"@SISTEMA|Sveikiname jūs gavote Rubino taure už pasiektą 1 000 000 000 000 000 kovinės galios ir taip pat gavote 30% kovinės galios.|$laikas|\n");
@fclose($bll);
$p= "+";
$getform2  = round(($jega*0.03),0);
		$jega = $jega + $getform2;
$getform3  = round(($gynyba*0.09),0);
$gynyba = $gynyba + $getform3;
		
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$awards[13] = "+";
include("icludekitainf/awards.php");}}

if ($awards[14] == "+"){ }else{if ($jusu_kgs < 1000000000000000000000){ }else {
$bll = @fopen("sun/$nick.txt","a");
@fwrite($bll,"@SISTEMA|Sveikiname jūs gavote Auksini taure už pasiektą 1 000 000 000 000 000 000 kovinės galios ir taip pat gavote 42% kovinės galios.|$laikas|\n");
@fclose($bll);
$p= "+";
$getform2  = round(($jega*0.04),0);
		$jega = $jega + $getform2;
$getform3  = round(($gynyba*0.11),0);
$gynyba = $gynyba + $getform3;
		
        $fp = @fopen("$gameriai", "w");
        @fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij||$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        @fclose($fp);
$awards[14] = "+";
include("icludekitainf/awards.php");}}
/*
$mm[15]-misijos
$mm[16]-misijos
$mm[17]-misijos
$mm[18]-misijos
$mm[19]-misijos
$mm[20]-misijos
$mm[21]-misijos
$mm[22]-misijos
$mm[23]-misijos
$mm[24]-misijos
$mm[25]-misijos
$mm[26]-misijos
$mm[35]-saga
$mm[36]-rutuliu jieskojimo laikas
$mm[37]-Dieviškasis vanduo laikas
$mm[38]-Laiko ir sielos kambarys laikas
$mm[39]-gyvates kelias
$mm[40]-majin source
$mm[41-69]-pasiekimas
$mm[61]-rinkimo misijos
$mm[41-69]-pasiekimas
$mm[71]-Įjungti/Išjungti pokalbius
$mm[73]-laimeta kova pries kita zaideja (jo nick)
$mm[74]-pralaimeta kova pries kita zaideja (jo nick)
$mm[75]-kiek kartu laimejas pries kitus zaidejus
$mm[76]-kiek kartu pralaimejas pries kitus zaidejus
$mm[77]-kibito misija
$mm[78]-technika
$mm[79]-technika
$mm[80]-technika
$mm[85]-aura
$mm[86]-aura
$mm[87]-aura
$mm[88]-master roshi misijos
$mm[90]-x2 gavimas
$mm[91]-x5 gavimas
$mm[92]-x10 gavimas
*/



$liko_minb2 = round(($mm[38]-time())/60,1);
if ($mm[38]- time() > 0){ 

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
echo"<link href=\"css/$nustatymai[20].css\" rel=\"stylesheet\" type=\"text/css\"/>
</head>";

echo "<div class=\"in\"><div class=\"logo\"><img src=\"imgs/logo-$mm[110].png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center; border-top: 1px solid #000000;\">";
echo"<b>STOP</b> </div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">J&#363;s treniruojates laiko ir sielos kambaryje tai trusk, <b>$liko_minb2 min.</b> ir gal&#279;site &#382;aisti toliau.</div>
<div class=\"foot\">$bottom</div></div>
</card></wml>";exit;}

$liko_minb3 = round(($mm[37]-time())/60,1);
if ($mm[37]- time() > 0){ 

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
echo"<link href=\"css/$nustatymai[20].css\" rel=\"stylesheet\" type=\"text/css\"/>
</head>";

echo "<div class=\"in\"><div class=\"logo\"><img src=\"imgs/logo-$mm[110].png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center; border-top: 1px solid #000000;\">";
echo"<b>STOP</b> </div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">J&#363;s &#303;&#353;gerete dievi&#353;k&#261; vanden&#303;, tad negalesite &#382;aisti 6 valandas, jums liko laukti <b>$liko_minb3 min.</b> ir gal&#279;site &#382;aisti toliau.</div>
<div class=\"foot\">$bottom</div></div>
</card></wml>";exit;}

$bonusug = @file_get_contents("isleista/$nick.txt");
if (($bonusug < 10) or ($tikslas[11] == "+")){ 
}
else 
{
$laikas = date("Y-m-d H:i:s");
$openas = @fopen("sun/$nick.txt", "a");
@fwrite($openas, "@SISTEMA|Jūs  gavote +5% Bonus! (Tiek procentų daugiau sąskaitos gali gauti už tą pačią kainą!). Daugiau informacijos Jūsų sąskaita - Bonus.|$laikas|\n");
@fclose($openas);
$get_bonus = @file_get_contents("bonus/$nick.txt");
$get_bonus = $get_bonus + 5;
@file_put_contents("bonus/$nick.txt", "$get_bonus");
$p = "+";
$tikslas[11] = "+";
include("icludekitainf/tikslas.php");
}

if (($bonusug < 30) or ($tikslas[12] == "+")){ 
}
else 
{
$laikas = date("Y-m-d H:i:s");
$openas = @fopen("sun/$nick.txt", "a");
@fwrite($openas, "@SISTEMA|Jūs gavote +10% Bonus! (Tiek procentų daugiau sąskaitos gali gauti už tą pačią kainą!). Daugiau informacijos Jūsų sąskaita - Bonus.|$laikas|\n");
@fclose($openas);
$get_bonus = @file_get_contents("bonus/$nick.txt");
$get_bonus = $get_bonus + 5;
@file_put_contents("bonus/$nick.txt", "$get_bonus");
$p = "+";
$tikslas[12] = "+";
include("icludekitainf/tikslas.php");
}

if (($bonusug < 50) or ($tikslas[13] == "+")){ 
}
else 
{
$laikas = date("Y-m-d H:i:s");
$openas = @fopen("sun/$nick.txt", "a");
@fwrite($openas, "@SISTEMA|Jūs gavote +15% Bonus! (Tiek procentų daugiau sąskaitos gali gauti už tą pačią kainą!). Daugiau informacijos Jūsų sąskaita - Bonus.|$laikas|\n");
@fclose($openas);
$get_bonus = @file_get_contents("bonus/$nick.txt");
$get_bonus = $get_bonus + 5;
@file_put_contents("bonus/$nick.txt", "$get_bonus");
$p = "+";
$tikslas[13] = "+";
include("icludekitainf/tikslas.php");
}
if (($bonusug < 75) or ($tikslas[14] == "+")){ 
}
else 
{
$laikas = date("Y-m-d H:i:s");
$openas = @fopen("sun/$nick.txt", "a");
@fwrite($openas, "@SISTEMA|Jūs gavote +20% Bonus! (Tiek procentų daugiau sąskaitos gali gauti už tą pačią kainą!). Daugiau informacijos Jūsų sąskaita - Bonus.|$laikas|\n");
@fclose($openas);
$get_bonus = @file_get_contents("bonus/$nick.txt");
$get_bonus = $get_bonus + 5;
@file_put_contents("bonus/$nick.txt", "$get_bonus");
$p = "+";
$tikslas[14] = "+";
include("icludekitainf/tikslas.php");
}
if (($bonusug < 100) or ($tikslas[15] == "+")){ 
}
else 
{
$laikas = date("Y-m-d H:i:s");
$openas = @fopen("sun/$nick.txt", "a");
@fwrite($openas, "@SISTEMA|Jūs gavote +25% Bonus! (Tiek procentų daugiau sąskaitos gali gauti už tą pačią kainą!). Daugiau informacijos Jūsų sąskaita - Bonus.|$laikas|\n");
@fclose($openas);
$get_bonus = @file_get_contents("bonus/$nick.txt");
$get_bonus = $get_bonus + 5;
@file_put_contents("bonus/$nick.txt", "$get_bonus");
$p = "+";
$tikslas[15] = "+";
include("icludekitainf/tikslas.php");
}

if (($bonusug < 150) or ($tikslas[16] == "+")){ 
}
else 
{
$laikas = date("Y-m-d H:i:s");
$openas = @fopen("sun/$nick.txt", "a");
@fwrite($openas, "@SISTEMA|Jūs gavote +30% Bonus! (Tiek procentų daugiau sąskaitos gali gauti už tą pačią kainą!). Daugiau informacijos Jūsų sąskaita - Bonus.|$laikas|\n");
@fclose($openas);
$get_bonus = @file_get_contents("bonus/$nick.txt");
$get_bonus = $get_bonus + 5;
@file_put_contents("bonus/$nick.txt", "$get_bonus");
$p = "+";
$tikslas[16] = "+";
include("icludekitainf/tikslas.php");
}
if (($bonusug < 200) or ($tikslas[17] == "+")){ 
}
else 
{
$laikas = date("Y-m-d H:i:s");
$openas = @fopen("sun/$nick.txt", "a");
@fwrite($openas, "@SISTEMA|Jūs gavote +35% Bonus! (Tiek procentų daugiau sąskaitos gali gauti už tą pačią kainą!). Daugiau informacijos Jūsų sąskaita - Bonus.|$laikas|\n");
@fclose($openas);
$get_bonus = @file_get_contents("bonus/$nick.txt");
$get_bonus = $get_bonus + 5;
@file_put_contents("bonus/$nick.txt", "$get_bonus");
$p = "+";
$tikslas[17] = "+";
include("icludekitainf/tikslas.php");
}
if (($bonusug < 250) or ($tikslas[18] == "+")){ 
}
else 
{
$laikas = date("Y-m-d H:i:s");
$openas = @fopen("sun/$nick.txt", "a");
@fwrite($openas, "@SISTEMA|Jūs gavote +40% Bonus! (Tiek procentų daugiau sąskaitos gali gauti už tą pačią kainą!). Daugiau informacijos Jūsų sąskaita - Bonus.|$laikas|\n");
@fclose($openas);
$get_bonus = @file_get_contents("bonus/$nick.txt");
$get_bonus = $get_bonus + 5;
@file_put_contents("bonus/$nick.txt", "$get_bonus");
$p = "+";
$tikslas[18] = "+";
include("icludekitainf/tikslas.php");
}
if (($bonusug < 300) or ($tikslas[19] == "+")){ 
}
else 
{
$laikas = date("Y-m-d H:i:s");
$openas = @fopen("sun/$nick.txt", "a");
@fwrite($openas, "@SISTEMA|Jūs gavote +45% Bonus! (Tiek procentų daugiau sąskaitos gali gauti už tą pačią kainą!). Daugiau informacijos Jūsų sąskaita - Bonus.|$laikas|\n");
@fclose($openas);
$get_bonus = @file_get_contents("bonus/$nick.txt");
$get_bonus = $get_bonus + 5;
@file_put_contents("bonus/$nick.txt", "$get_bonus");
$p = "+";
$tikslas[19] = "+";
include("icludekitainf/tikslas.php");
}
if (($bonusug < 400) or ($tikslas[20] == "+")){ 
}
else 
{
$laikas = date("Y-m-d H:i:s");
$openas = @fopen("sun/$nick.txt", "a");
@fwrite($openas, "@SISTEMA|Jūs gavote +50% Bonus! (Tiek procentų daugiau sąskaitos gali gauti už tą pačią kainą!). Daugiau informacijos Jūsų sąskaita - Bonus.|$laikas|\n");
@fclose($openas);
$get_bonus = @file_get_contents("bonus/$nick.txt");
$get_bonus = $get_bonus + 5;
@file_put_contents("bonus/$nick.txt", "$get_bonus");
$p = "+";
$tikslas[20] = "+";
include("icludekitainf/tikslas.php");
}



if (($lygis < 400) or ($tikslas[0] == "+")){ 
}
else 
{
$laikas = date("Y-m-d H:i:s");
$openas = @fopen("sun/$nick.txt", "a");
@fwrite($openas, "@SISTEMA|Jūs įvykdėte savo 1 tiksą: \"Pasiekti 400 lygį\".|$laikas|\n");
@fclose($openas);

$p = "+";
$tikslas[0] = "+";
include("icludekitainf/tikslas.php");
}

if (($litai < 250) or ($tikslas[1] == "+")){ 
}
else 
{
$laikas = date("Y-m-d H:i:s");
$openas = @fopen("sun/$nick.txt", "a");
@fwrite($openas, "@SISTEMA|Jūs įvykdėte savo 2 tiksą: \"Sutaupyti 250.00 LTL savo sąskaitoje\".|$laikas|\n");
@fclose($openas);

$p = "+";
$tikslas[1] = "+";
include("icludekitainf/tikslas.php");
}

if (($litai < 250) or ($tikslas[1] == "+")){ 
}
else 
{
$laikas = date("Y-m-d H:i:s");
$openas = @fopen("sun/$nick.txt", "a");
@fwrite($openas, "@SISTEMA|Jūs įvykdėte savo 2 tiksą: \"Sutaupyti 250.00 LTL savo sąskaitoje\".|$laikas|\n");
@fclose($openas);

$p = "+";
$tikslas[1] = "+";
include("icludekitainf/tikslas.php");
}

if (($dari[20] < 100) or ($tikslas[2] == "+")){ 
}
else 
{
$laikas = date("Y-m-d H:i:s");
$openas = @fopen("sun/$nick.txt", "a");
@fwrite($openas, "@SISTEMA|Jūs įvykdėte savo 3 tiksą: \"Surinkti 100 drakono rutulių\".|$laikas|\n");
@fclose($openas);

$p = "+";
$tikslas[2] = "+";
include("icludekitainf/tikslas.php");
}

if (($dari[34] < 150) or ($tikslas[3] == "+")){ 
}
else 
{
$laikas = date("Y-m-d H:i:s");
$openas = @fopen("sun/$nick.txt", "a");
@fwrite($openas, "@SISTEMA|Jūs įvykdėte savo 4  tiksą: \"Surinkti 150 juodųjų drakono rutulių.\".|$laikas|\n");
@fclose($openas);

$p = "+";
$tikslas[3] = "+";
include("icludekitainf/tikslas.php");
}

if (($dari[44] < 200) or ($tikslas[4] == "+")){ 
}
else 
{
$laikas = date("Y-m-d H:i:s");
$openas = @fopen("sun/$nick.txt", "a");
@fwrite($openas, "@SISTEMA|Jūs įvykdėte savo 5 tiksą: \"Surinkti 200 nameko drakono rutulių.\".|$laikas|\n");
@fclose($openas);

$p = "+";
$tikslas[4] = "+";
include("icludekitainf/tikslas.php");
}

if (($wins < 1000000) or ($tikslas[5] == "+")){ 
}
else 
{
$laikas = date("Y-m-d H:i:s");
$openas = @fopen("sun/$nick.txt", "a");
@fwrite($openas, "@SISTEMA|Jūs įvykdėte savo 6 tiksą: \"Laimėti 1,000,000 kovų\".|$laikas|\n");
@fclose($openas);

$p = "+";
$tikslas[5] = "+";
include("icludekitainf/tikslas.php");
}

if (($mm[75] < 1000) or ($tikslas[6] == "+")){ 
}
else 
{
$laikas = date("Y-m-d H:i:s");
$openas = @fopen("sun/$nick.txt", "a");
@fwrite($openas, "@SISTEMA|Jūs įvykdėte savo 7 tiksą: \"Laimėti 1,000 arenoje kovų\".|$laikas|\n");
@fclose($openas);

$p = "+";
$tikslas[6] = "+";
include("icludekitainf/tikslas.php");
}

if (($mm[75] < 1000) or ($tikslas[6] == "+")){ 
}
else 
{
$laikas = date("Y-m-d H:i:s");
$openas = @fopen("sun/$nick.txt", "a");
@fwrite($openas, "@SISTEMA|Jūs įvykdėte savo 7 tiksą: \"Laimėti 1,000 arenoje kovų\".|$laikas|\n");
@fclose($openas);

$p = "+";
$tikslas[6] = "+";
include("icludekitainf/tikslas.php");
}

if (($kronu < 1000000) or ($tikslas[7] == "+")){ 
}
else 
{
$laikas = date("Y-m-d H:i:s");
$openas = @fopen("sun/$nick.txt", "a");
@fwrite($openas, "@SISTEMA|Jūs įvykdėte savo 8 tiksą: \"Sutaupyti 1,000,000 kreditų.\".|$laikas|\n");
@fclose($openas);

$p = "+";
$tikslas[7] = "+";
include("icludekitainf/tikslas.php");
}
/*
if ($dalybos[0] == "+"){ 
}
else 
{
$laikas = date("Y-m-d H:i:s");
$bll = @fopen("sun/$nick.txt","a");
@fwrite($bll,"@SISTEMA|Įvyko dalybos! Ir jūs gavote <b>14.50 LTL ir 300,000,000,000 pinigų</b></b>. Ačiu, kad žaidžiate <b>dbf.us.lt</b>. Visada likite su dbf.us.lt nes greitu laiku pamatysite ipatinga dalyką.  |$laikas|\n");
@fclose($bll);
$kr = @file_get_contents("account/$nick.txt");
$kr = $kr + 14.50;
$pinigai = $pinigai + 300000000000;
@file_put_contents("account/$nick.txt", "$kr");
        $fp = fopen("$gameriai", "w");
        fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij|+|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        fclose($fp);
$dalybos[0]="+";
include("icludekitainf/dalybos.php");
}*/

/*
$AFEFCDSCX54 = mysql_num_rows(mysql_query("SELECT * FROM sms_top WHERE nick='$nick'"));
if($AFEFCDSCX54>0){  mysql_query("UPDATE sms_top SET sms=sms+'0'  WHERE nick='$nick'");}else{
mysql_query("INSERT INTO sms_top SET sms ='0',nick='$nick' ");}	
*/

if(mysql_num_rows(mysql_query("SELECT * FROM ip WHERE `nick` = '$nick'")) == 0){ mysql_query("INSERT INTO ip SET `nick` = '$nick'"); }
mysql_query("UPDATE ip SET `ip` = '".$_SERVER['REMOTE_ADDR']."' WHERE nick='$nick'"); 
	
$on_time = time()+60*65;

if(mysql_num_rows(mysql_query("SELECT * FROM online WHERE nick='$nick'")) < 1){
mysql_query("INSERT INTO online SET nick='$nick', ip='".$_SERVER['REMOTE_ADDR']."', time='$on_time', time_on='".time()."'") ;
}else{
mysql_query("UPDATE online SET ip='".$_SERVER['REMOTE_ADDR']."', time='$on_time' WHERE nick='$nick'") ;
}
mysql_query("DELETE FROM online WHERE time < '".time()."'") or die(mysql_error());
	
	
 $deny = array("83.181.112.235", "");
if (in_array ($_SERVER['REMOTE_ADDR'], $deny)) {
   header("location: http://dbf.us.lt/index.php?id=ban");
   exit();
} 

$_SERVER['PHP_SELF'];
?>