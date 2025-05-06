<?php
///window.location.replace("http://SDB.LT");
$kur = "Pradžią";
include ("config.php");
include_once("icludekitainf/start.php");
 
$floo2 = @file_get_contents("files for txt/topic_time.txt");
$max_online = explode("|", @file_get_contents("files for txt/max_on.txt"));
$max_online_today = explode("|", @file_get_contents("files for txt/dienos_max_on.txt"));
$mm = @explode("|",@file_get_contents("kitokiainf/$nick.txt"));

$frnd_siulo = @file_get_contents("susijungimas/siulo/$nick.txt");
$info_siulo = @explode("|", $frnd_siulo );
$siulo_draugauti = $info_siulo[0];
if($siulo_draugauti!=""){
echo "<b>$siulo_draugauti</b> si&#363;lo susijungti<br/>
<a href=\"pagrindinis.php?id=sutikti&amp;ka=$siulo_draugauti\">Sutikti</a> |
<a href=\"pagrindinis.php?id=nesutikti&amp;ka=$siulo_draugauti\">Nesutikti</a></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";}

if ($id == "atsijungti"){
$ka = $_GET['ka'];
$nv = @file("susijungimas/susijunge/$nick.txt");
$kiek_nv = count($nv);{
$kv = explode("|", $nv[$pv]);
for ($pv = 0; $pv < $kiek_nv; $pv++){
$kv = explode("|", $nv[$pv]);
if ($ka == $kv[0]){
$nv[$pv] = "";
$fpv = @fopen("susijungimas/susijunge/$nick.txt", "w");
fwrite($fpv, implode($nv));
fclose($fpv);
@chmod("susijungimas/susijunge/$nick.txt", 0777);
break;}}}
$nv = @file("susijungimas/susijunge/$ka.txt");
$kiek_nv = count($nv);{
$kv = explode("|", $nv[$pv]);
for ($pv = 0; $pv < $kiek_nv; $pv++){
$kv = explode("|", $nv[$pv]);
if ($nick == $kv[0]){
$nv[$pv] = "";
$fpv = @fopen("susijungimas/susijunge/$ka.txt", "w");
fwrite($fpv, implode($nv));
fclose($fpv);
@chmod("susijungimas/susijunge/$ka.txt", 0777);break;}}}

echo "<b>Susijungimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Atsijungei sekmingai</b><br/></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"pagrindinis.php?\">(&#171;)&#302; &#381;aidima</a></b><br/>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "siulyti_susijungti"){
$us = @file_get_contents("skill/$ka.txt");
$infa = explode("|", $us);
if ($infa[1] !== "+"){$klaida= "Šis žaidėjas nemoka fusio dance.</b><br/>";}
$us = @file_get_contents("skill/$nick.txt");
$infa = explode("|", $us);
if ($infa[1] !== "+"){$klaida= "Jūs nemokate fusion dance, norint išmokti eikite į skillus.</b><br/>";}
$mmk = @explode("|",@file_get_contents("susijungimas/susijunge/$ka.txt"));
if ($mmk[1] == "+"){ $klaida= "Šis žaidejas jau susijunges.";}
$mmks = @explode("|",@file_get_contents("susijungimas/susijunge/$nick.txt"));
if ($mmks[1] == "+"){ $klaida= "Jus jau esate susijunges.";}
$nvq = @file("susijungimas/siulo/$ka.txt");
$kiek_nvq = count($nvq);
for($pvq = 0; $pvq < $kiek_nvq; $pvq++) {
$kvq = explode("|",$nvq[$pvq]);
if ($ka == $kvq[0]){$error_siulei = "+";}}

if($error_siulei=="+"){$klaida="Tu jau pasi&#363;lei susijungti &#382;aid&#279;jui!";}
$nvqx = @file("susijungimas/susijunge/$nick.txt");
$kiek_nvqx = count($nvqx);
for($pvqx = 0; $pvqx < $kiek_nvqx; $pvqx++) {
$kvqx = explode("|",$nvqx[$pvqx]);
if ($ka == $kvqx[0]){$error_jdrg = "+";}}
$mmkk = @explode("|",@file_get_contents("susijungimas/susijunge/$nick.txt"));
if ($mmkk[1] == "+"){ $klaida= "Tu jau esi susijunges";}
if($ka==$nick){$klaida="Susijungti su savim negalima";}
if (!file_exists("zaideju pagrindinai statusai/$ka.txt")){$klaida = "Toks &#382;aid&#279;jas neegzistuoja!";}
if ($klaida != ""){		
echo "<b>Susijungimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
$klaida</b><br/></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"pagrindinis.php?\">(&#171;)&#302; &#381;aidima</a></b><br/>
</div><div class=\"foot\">$bottom</div></div>";}
else{
echo "<b>Susijungimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Pasiulymas sujijungti isiustas</b><br/></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"pagrindinis.php?\">(&#171;)&#302; &#381;aidima</a></b><br/>
</div><div class=\"foot\">$bottom</div></div>";
$fp1 = @fopen("susijungimas/siulo/$ka.txt","a");
@fwrite($fp1,"$nick|+|\n");
@fclose($fp1);
@chmod("susijungimas/siulo/$ka.txt", 0777);
}}

if ($id == "sutikti"){
$mmks = @explode("|",@file_get_contents("susijungimas/susijunge/$nick.txt"));
if ($mmks[1] == "+"){ $klaida= "Jus jau esate susijunges.";}
$nvq = @file("susijungimas/siulo/$nick.txt");
$kiek_nvq = count($nvq);
for($pvq = 0; $pvq < $kiek_nvq; $pvq++) {
$kvq = explode("|",$nvq[$pvq]);
if ($ka == $kvq[0]){$error_nesiulo = "+";}}
if($error_nesiulo!="+"){$klaida="Tokio pasi&#363;lymo n&#279;ra!";}
$nvqx = @file("susijungimas/susijunge/$nick.txt");
$kiek_nvqx = count($nvqx);
for($pvqx = 0; $pvqx < $kiek_nvqx; $pvqx++) {
$kvqx = explode("|",$nvqx[$pvqx]);
if ($ka == $kvqx[0]){$error_jdrg = "+";}}
if($error_jdrg=="+"){$klaida="&#352;&#303; &#382;aid&#279;ju jau esi susijunges";}
if($ka==$nick){$klaida="Su savim susijungti negalima negali!";}
if (!file_exists("zaideju pagrindinai statusai/$ka.txt")){$klaida = "Toks &#382;aid&#279;jas neegzistuoja!";}
if ($klaida != ""){		
echo "<b>Susijungimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
$klaida</b><br/></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"pagrindinis.php?\">(&#171;)&#302; &#381;aidima</a></b><br/>
</div><div class=\"foot\">$bottom</div></div>";}
else{
echo "<b>Susijungimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Sutikai</b><br/></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"pagrindinis.php?\">(&#171;)&#302; &#381;aidima</a></b><br/>
</div><div class=\"foot\">$bottom</div></div>";
$fp1 = @fopen("susijungimas/susijunge/$nick.txt","a");
@fwrite($fp1,"$ka|+|\n");
@fclose($fp1);
@chmod("susijungimas/susijunge/$nick.txt", 0777);
$fp1 = @fopen("susijungimas/susijunge/$ka.txt","a");
@fwrite($fp1,"$nick|+|\n");
@fclose($fp1);
@chmod("susijungimas/susijunge/$ka.txt", 0777);

$nvzx = @file("susijungimas/siulo/$nick.txt");
$kiek_nvzx = count($nvzx);
for ($pvzx = 0; $pvzx < $kiek_nvzx; $pvzx++){
$kvzx = explode("|", $nvzx[$pvzx]);
if ($ka == $kvzx[0]){
$nvzx[$pvzx] = "";
$fpvzx = @fopen("susijungimas/siulo/$nick.txt", "w");
@fwrite($fpvzx, implode($nvzx));
@fclose($fpvzx);
@chmod("susijungimas/siulo/$nick.txt", 0777);

break;}}
}}

if ($id == "nesutikti"){
$nvq = @file("susijungimas/siulo/$nick.txt");
$kiek_nvq = count($nvq);
for($pvq = 0; $pvq < $kiek_nvq; $pvq++) {
$kvq = explode("|",$nvq[$pvq]);
if ($ka == $kvq[0]){$error_nesiulo = "+";}}
if($error_nesiulo!="+"){$klaida="Tokio pasi&#363;lymo nera!";}
if (!file_exists("zaideju pagrindinai statusai/$ka.txt")){$klaida = "Toks &#382;aid&#279;jas neegzistuoja!";}
if ($klaida != ""){	

echo "<b>Susijungimas </b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
$klaida</b><br/></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"pagrindinis.php?\">(&#171;)&#302; &#381;aidima</a></b><br/>
</div><div class=\"foot\">$bottom</div></div>";}
else{
echo "<b>Susijungimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Nesutikai</b><br/></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"pagrindinis.php?\">(&#171;)&#302; &#381;aidima</a></b><br/>
</div><div class=\"foot\">$bottom</div></div>";
$nvzx = @file("susijungimas/siulo/$nick.txt");
$kiek_nvzx = count($nvzx);
for ($pvzx = 0; $pvzx < $kiek_nvzx; $pvzx++){
$kvzx = explode("|", $nvzx[$pvzx]);
if ($ka == $kvzx[0]){
$nvzx[$pvzx] = "";
$fpvzx = @fopen("susijungimas/siulo/$nick.txt", "w");
@fwrite($fpvzx, implode($nvzx));
@fclose($fpvzx);
@chmod("susijungimas/siulo/$nick.txt", 0777);
break;}}
}}


$truksta = $left - $exp;
$likoikilygis = $lygis + 1;
$dienos_sms_top_prizas = @file_get_contents("files for txt/smstop_prizas1.txt");

$unikal = glob("dtop/*.txt");
$unikali = count($unikal);
$prizas = @file_get_contents("files for txt/dtop_prizas.txt");
$smsprizas = @file_get_contents("files for txt/smstop_prizas1.txt");

if (!file_exists("account/$nick.txt"))
            {
            $fop = @fopen("account/$nick.txt", "w+");
            @fwrite($fop, "0");
            @fclose($fop);
            @chmod("account/$nick.txt",0777);
}
if (!file_exists("atvesti/$nick.txt"))
            {
            $fop = @fopen("atvesti/$nick.txt", "w+");
            @fwrite($fop, "");
            @fclose($fop);
            @chmod("atvesti/$nick.txt",0777);
}
if (!file_exists("sun/$nick.txt"))
            {
            $fop = @fopen("sun/$nick.txt", "w+");
            @fwrite($fop, "");
            @fclose($fop);
            @chmod("sun/$nick.txt",0777);
}
if (!file_exists("kronoss/$nick.txt"))
            {
            $fop = fopen("kronoss/$nick.txt", "w+");
            fwrite($fop, "50");
            fclose($fop);
            chmod("kronoss/$nick.txt",0777);
}
if (!file_exists("kitokiainf/$nick.txt"))
            {
            $fop = @fopen("kitokiainf/$nick.txt", "w+");
            @fwrite($fop, "0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
            @fclose($fop);
            @chmod("kitokiainf/$nick.txt",0777);
}
if (!file_exists("tikslas/$nick.txt"))
            {
            $fop = @fopen("tikslas/$nick.txt", "w+");
            @fwrite($fop, "0|0|0|0|0|0|0|0|0|0|");
            @fclose($fop);
            @chmod("tikslas/$nick.txt",0777);
}

if (!file_exists("awards/$nick.txt"))
            {
            $fop = @fopen("awards/$nick.txt", "w+");
            @fwrite($fop, "0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
            @fclose($fop);
            @chmod("awards/$nick.txt",0777);
}
if (!file_exists("darinfos/$nick.ly"))
            {
            $fop = @fopen("darinfos/$nick.ly", "w+");
            @fwrite($fop, "0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
            @fclose($fop);
            @chmod("darinfos/$nick.ly",0777);
}
if (!file_exists("skill/$nick.txt"))
            {
            $fop = @fopen("skill/$nick.txt", "w+");
            @fwrite($fop, "0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|100|100|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
            @fclose($fop);
            @chmod("skill/$nick.txt",0777);
}
if (!file_exists("pasiekimai/$nick.txt"))
            {
            $fop = @fopen("pasiekimai/$nick.txt", "w+");
            @fwrite($fop, "0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|100|100|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
            @fclose($fop);
            @chmod("pasiekimai/$nick.txt",0777);
}
if (!file_exists("nustatymai/$nick.txt"))
            {
            $fop = @fopen("nustatymai/$nick.txt", "w+");
            @fwrite($fop, "+|+|+|+|-||-|+|-|-|-||||||||-||style_green||||||||||||||||||");
            @fclose($fop);
            @chmod("nustatymai/$nick.txt",0777);
}
if (!file_exists("zaideju papildoma informacija/$nick.txt"))
            {
            $fop = @fopen("zaideju papildoma informacija/$nick.txt", "w+");
            @fwrite($fop, "0|0|0|0|".time()."|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
            @fclose($fop);
            @chmod("zaideju papildoma informacija/$nick.txt",0777);
}
 if (!file_exists("bankas/$nick.txt"))
            {
            $fop = @fopen("bankas/$nick.txt", "w+");
            @fwrite($fop, "0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
            @fclose($fop);
            @chmod("bankas/$nick.txt",0777);
}
if (!file_exists("used items/$nick.txt"))
            {
            $fop = @fopen("used items/$nick.txt", "w+");
            @fwrite($fop, "0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
            @fclose($fop);
            @chmod("used items/$nick.txt",0777);
}

if ($id == "") {

echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"360; url=pagrindinis.php?\">"; 
$nkh2 = file("files for txt/nick_bans.txt");
$kiek_nkh2 = count($nkh2);
for($py2=0; $py2 < $kiek_nkh2; $py2++) {
$kly2 = explode("|",$nkh2[$py2]);
if (time() > $kly2[1]){
$nkh2[$py2] = "";
$fpz2 = fopen("files for txt/nick_bans.txt","w");
fwrite($fpz2,implode($nkh2));
fclose($fpz2);
}}

/*
  if (@file_get_contents("files for txt/klanu.txt") < time())
    {
        $op = glob("klaniukos/*.ta");
        for ($i = 0; $i < count($op); $i++)
        {
            $dfd = @file($op[$i]);
            for ($t = 0; $t < count($dfd); $t++)
            {
                $fdp = explode("|", $dfd[$t]);
                $cyks2 = explode("|", @file_get_contents("zaideju pagrindinai statusai/$fdp[0].txt"));
     
       
                if (!file_exists("kronoss/$fdp[0].txt"))
                {
                    
                }
                elseif (!file_exists("xxxx/-$fdp[0].txt"))
                {
                    
                }
                else
                {
                   
                }
                if ($t == 0)
                {

                }
                else
                {
            
                }

                $fop = @fopen("xxxx/$fdp[0].txt", "w");
                @fwrite($fop, "$cyks2[0]|$cyks2[1]|$cyks2[2]|$cyks2[3]|$cyks2[4]|$cyks2[5]|$cyks2[6]|$cyks2[7]|$cyks2[8]|$cyks2[9]|$cyks2[10]|$cyks2[11]|$cyks2[12]|$cyks2[13]|+|$cyks2[15]|$cyks2[16]|$cyks2[17]|$cyks2[18]|$cyks2[19]|$cyks2[20]|$cyks2[21]|$cyks2[22]|$cyks2[23]|$cyks2[24]|$cyks2[25]|");
                @fclose($fop);

            }
        }
        $fopt = @fopen("files for txt/klanu.txt", "w");
        @fwrite($fopt, time() + 3 * 60 * 60);
        @fclose($fopt);
    }
*/

if (!file_exists("account/$nick.txt")){$litai = 0;}else{$litai = @file_get_contents("account/$nick.txt");}
$laikas = date("Y-m-d H:i:s");
$kokkoman = @file_get_contents("klaniukos/$nick.txt");
$pons = @file("klaniukos/$kokkoman.ta");
for($t = 0; $t < @count($pons); $t++){ 
$nary = @explode("|",$pons[$t]);  }
$gavo = count($pons);
$komanduvisotu = @number_format($gavo, 0, ',', ' ');
if ($kokkoman == "")  {}else{
if (@file_get_contents("komandu laikas/$nick-time.txt") < time())
{
$p = "+";
$gausiteisk = count($pons) * 0.2;
$tau = "Kaip jūms priklauso kas 3 valandas iš savo <b>$kokkoman</b> komandos gavote <b>$gausiteisk LTL</b>, pritrauk į savo komandą dar daugiau kovotoju ir gausi dar daugiau.";

			$atidaryma = @fopen("sun/$nick.txt", "a");
			@fwrite($atidaryma, "@SISTEMA|$tau|$laikas|\n");
			@fclose($atidaryma);

			$fop = @fopen("account/$nick.txt", "w+");
			@fwrite($fop, $litai + $gausiteisk);
			@fclose($fop);
			@chmod("account/$nick.txt", 0777);

            $fopgt = @fopen("komandu laikas/$nick-time.txt", "w+");
            @fwrite($fopgt, time() + 3 * 60 * 60);
            @fclose($fopgt);
            @chmod("komandu laikas/$nick-time.txt",0777);
			$atidaryxxma = @fopen("files for txt/komandu ismokejimai.txt", "a");
			@fwrite($atidaryxxma, "$nick|$kokkoman|$gavo|$gausiteisk|$laikas|\n");
			@fclose($atidaryxxma);
}}
if (!file_exists("kronoss/$nick.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$nick.txt"); }

if ($lygis < 5){ echo"<div class='got'>
Sveikas <b>$nick</b> atvykęs į WAP Drakonų kovų Žaidimą. Prašome perskaityti \"<a href=\"pagrindinis.php?id=istatymai\">Taisyklės</a>\", \"<a href=\"pagrindinis.php?id=informacija\">Informacija</a>\" ir  \"<a href=\"pagrindinis.php?id=duk\">D.U.K.</a>\" apie žaidimą, kad susižinotumėte kas ir kaip. Ši lentelė išnyks kai pasieksite 20 lygį. Linkime gerai praleisti laiką ;)<br/>
<br/>
Nesupranti kaip žaisti užeik į \"<a href=\"pagrindinis.php?id=naujoku_gidas\">Naujokų gidą</a>\"<br/></div>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";}
if ($points > 0){ echo"<a href=\"pagrindinis.php?id=use_points\">J&#363;s turite <b>$points</b> nesunaudotus lygio ta&#353;kus</a><br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";}

$DATA_FILE = "files for txt/topic_zinutes.txt";
$nuskk = file($DATA_FILE);
$viso_pm = count($nuskk); 
$masyvo_apvertimas = array_reverse($nuskk);
for ($c = 0; $c < 2; $c++)
{
$in = explode('|', $masyvo_apvertimas[$c]);
$nickas = $in[1];$nickas2 = $in[2];
$zinute = stripslashes($in[0]);
$masyw = array("@","*", "!", "#", "~");
$nck = str_replace($masyw,"",$nickas);
$nr = $c + 1;



echo" $zinute. (<b><a href=\"pagrindinis.php?id=apie&amp;ka=$nickas2\">$nickas</a></b>)";
if ($stat == "mod" or $stat == "mod2" or $stat == "mod3" or $stat == "mod4" or $stat == "Adminas"){
echo" <a href=\"moderator.php?id=delete_topic&amp;kj=$in[4]\">[<b>x</b>]</a>";}echo"<br/>";}



$liko = $floo2 - time();

if (time() < $floo2 && ($stat != "mod3") && ($stat != "mod4") && ($stat != "Adminas")){
echo"</div><div class=\"meniu\" style=\"text-align: center;\">[Rašyti bus galima po ";
	$banlaikasss = round(($floo2-time())); 
	$day = floor(($banlaikasss / 60 / 60 / 24)			- (floor($banlaikasss / 60 / 60 / 24 / 31) * 31));
	$val = floor(($banlaikasss / 60 / 60)				- (floor($banlaikasss / 60 / 60 / 24) * 24));
	$min = floor(($banlaikasss / 60)						- (floor($banlaikasss / 60 / 60) * 60));
	$sec = floor($banlaikasss							- (floor($banlaikasss/ 60) * 60));
 if ($floo2 - time() > 0){ 
 if($min != "0"){echo"<b>$min</b> min. </b>";}
 if($sec != "0"){echo"<b>$sec</b> sek. </b>] ";}}}else{
echo"</div><div class=\"meniu\" style=\"text-align: center;\"><a href=\"pagrindinis.php?id=topic\">[Rašyti]</a> ";}
echo"  <a href=\"pagrindinis.php?id=topic_list\">[Ankstesni]</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";

$jusu_saskaitoje = @number_format($litai, 2, ',', ' ');
$jusu_saskaitoje_eur = @number_format($litai/ 3.4528, 2, ',', ' ');
$DATA_FILE = "files for txt/new.txt";
$nuskk = file($DATA_FILE);
$viso_pm = count($nuskk);
$kronos_jusu = @number_format($kronu, 1, ',', ' ');
echo "<a href=\"new.php?\">Naujienos</a> [$new_data] [Iš viso <b>$viso_pm</b>]<br/>";

echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=kronos\">Kreditai [<b>$kronos_jusu</b>] </a>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"account.php?id=\">Jūsų sąskaitoje: <b>$jusu_saskaitoje LTL</b></a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
$ddprizas = @number_format($prizas, 0, ',', ' ');
echo" <a href=\"pagrindinis.php?id=day_top\">Šiandien visi varžosi dėl <b>$ddprizas pinig&#371;!</b></a>
</div><div class=\"meniu\" style=\"text-align: center;\">";

$ddprizasq11 = @number_format($nustx['sms_priz'], 0, ',', ' ');
echo"<a href=\"pagrindinis.php?id=day_lt\">Laimek šiandien <b>$ddprizasq11 LTL</b> į savo žaidimo sąskaita! </a><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
";

$lottery_fondot = @number_format($nustx[lottery_fund], 2, ',', ' ');
echo"
<a href=\"pagrindinis.php?id=lottery\">Dienos loterija (<b>$lottery_fondot LTL</b>)</a><br/>

";

if (($morekg[1] - time() > 0) or  ($moreexp[1] - time() > 0) or ($moremany[1] - time() > 0) or ($padusimai[1] - time() > 0)){
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[<b>&#8773;</b>] <a href=\"pagrindinis.php?id=paslaugos\">Aktyvios paslaugos</a><br/>";}echo"
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\"><b><u>  JŪSŲ INFORMACIJA:</b></u>
</div><div class=\"meniu\">
[&#8226;] <a href=\"pagrindinis.php?id=apie&amp;ka=$nick\">Apie <b>$vrd</b></a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"used.php?id=\">Aprangos/Atakos</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"skill.php?id=\">Mano skillai</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"pagrindinis.php?id=inventory\">Kapsulių dėžutė</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"meniu.php?\">Mano meniu</a><br/></div><div class=\"meniu\">";
 if ($mm[40]- time() > 0){echo"
[&#8226;] <a href=\"pagrindinis.php?id=majin\">Majin source </a> ";	$majin = round(($mm[40]-time())); 
	$day = floor(($majin / 60 / 60 / 24)			- (floor($majin / 60 / 60 / 24 / 31) * 31));
	$val = floor(($majin / 60 / 60)				- (floor($majin / 60 / 60 / 24) * 24));
	$min = floor(($majin / 60)						- (floor($majin / 60 / 60) * 60));
	$sec = floor($majin							- (floor($majin/ 60) * 60));
 if ($mm[40]- time() > 0){echo " "; 
 if($day  != "0"){echo"<b>$day</b> d. </b>";}
 if($val != "0"){echo"<b>$val</b> val. </b>";}
 if($min != "0"){echo"<b>$min</b> min. </b>";}
 if($sec != "0"){echo"<b>$sec</b> sek. </b>";}
echo"</div><div class=\"meniu\">";}}else{echo"
[&#8226;] <a href=\"pagrindinis.php?id=majin\">Majin source</a></div><div class=\"meniu\">";}
foreach(glob("online/*") as $b){
$rr=explode("|",@file_get_contents($b));
$b=str_replace("online/","",$b); 
$b=str_replace(".txt","",$b);
$inxf = @file_get_contents("online/$b.txt");
$infxo = explode("|", $inxf);
if ($infxo[2]=="Arena"){
$pok[] = $infxo[2]; }}
$online223 = count($pok);
 $onlineviso = count(glob("online/*.txt"))+count(glob("s2/online/*.txt"));
echo"[&#8226;] <a href=\"pagrindinis.php?id=menulis\">Great Ape</a><br/>

</div><div class=\"line\"></div><div class=\"meniu\">
<b><u> ŽAIDIMO VIETOVĖS:</b></u>
</div><div class=\"meniu\">
[&#8226;] <a href=\"samung.php\">Samungo planeta</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"gods.php\">Dievų planeta</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"pagrindinis.php?id=scatter_balls\">Išbarstyti Rutuliai</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"capsule_corp.php\">Kapsulių Korporacija</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"komandos.php?id=klanai\">Z Komandos</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"pagrindinis.php?id=miestas\">Miestas</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"fighting.php?id=kautis\">Kovų zona</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"namek.php?id=\">Namek</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"on_kovos.php?id=\">Kovos Arena</a> [<b>$online223</b>]<br/></div><div class=\"meniu\">
[&#8226;] <a href=\"gyvates_kelias.php?\">Gyvates kelias</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"karino_bokstas.php?\">Karino bokštas</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"kami.php?id=\">Dievo namai</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"kame_house.php?\">Kame House</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"kaioshin.php?id=\">Kaio Shin</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"pagrindinis.php?id=misijos\">Misijos</a><br/></div><div class=\"meniu\">
</div><div class=\"line\"></div><div class=\"meniu\">
<b><u> PAPILDOMA:</b></u>
</div><div class=\"meniu\">
[&#8226;] <a href=\"vote.php\">Balsavimas</a></div><div class=\"meniu\">
[&#8226;] <a href=\"forum.php\">Forumas</a> </div><div class=\"meniu\">
[&#8226;] <a href=\"pagrindinis.php?id=informacija\">Informacija</a> </div><div class=\"meniu\">
[&#8226;] <a href=\"pagrindinis.php?id=duk\">D.U.K.</a> </div><div class=\"meniu\">
[&#8226;] <a href=\"pagrindinis.php?id=support\">Pagalba</a> </div><div class=\"meniu\">
[&#8226;] <a href=\"pagrindinis.php?id=statistic\">Statistika</a><br/>  </div><div class=\"meniu\">
[&#8226;]  <a href=\"pagrindinis.php?id=off\">Atsijungti</a></b><br/>";


$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5"; 
$r = $_GET['r']; 
if (time() < $floode){ }else{
if ($r != $aps_kodas or $r == "" or strlen($r) != 5){ }
else
{
$zinute = htmlspecialchars( $_POST['zinute']);
$zinute = str_replace("$","$$",$zinute);
$zinute = str_replace("|","l",$zinute);
$arr = array("^","%","\n");
$zinute = str_replace($arr,"",$zinute);
$zinute = htmlspecialchars($zinute);
include("smiles.php"); 
if (substr_count($zinute, "<img src=")>5){ $zin = "Per daug smailų žinutėje, daugiausiai gali būti 5 smailai!"; }

if (strlen($zinute) > 300){ $zin = "Žinutė per ilga!"; }

if ($zinute == "") { $zin = "Paliktas tuščias laukelis!"; }

 if ($lygis < 50){$zin = "Rašyti galima tik nuo 150 lygio! "; }

$np = file("files for txt/chat message.txt"); 
$kiek_np = count($np);
for($o=0; $o < $kiek_np; $o++) {
$op = explode("|",$np[$o]);
if ($zinute == $op[1]){ $zin = "Tokia žinutė jau egzistuoja!"; } }

$kiek_nv = count(file("files for txt/chat message.txt"));
if ($kiek_nv > 1000){ $openn = fopen("files for txt/chat message.txt","w");
        fwrite($openn, "");
        fclose($openn); }
if ($zin == ""){
$k1 = rand(0,9); 
$k2 = rand(0,9); 
$k3 = rand(0,9); 
$k4 = rand(0,9); 
$k5 = rand(0,9); 
$k6 = rand(0,9); 
$k7 = rand(0,9); 
$k8 = rand(0,9); 
$k9 = rand(0,9); 
$k10 = rand(0,9); 
$kod = "$k1$k2$k3$k4$k5$k6$k7$k8$k9$k10"; 
$openx = @fopen("files for txt/chat message.txt","a+");

        @fwrite($openx, "$vrd|$zinute|$nick|".date("H:i")."|$kod|\n");
        @fclose($openx);}

}}

if ($lygis < 50){echo"</div><div class=\"meniu\" style=\"text-align: center;\">Chate bus galima bendrauti ir matyti žinutės tik nuo 50 lygio.<br />
";}else{
			
		echo"</div><div class=\"line\"></div><div class=\"meniu\">
			
<form action=\"pagrindinis.php?&amp;r=$kodase\" method=\"POST\">
	<input type=\"text\" class=\"send_message\" value=\"\" name=\"zinute\"/>
				<input type=\"hidden\" name=\"page\" value=\"1\"/>
				<input type=\"hidden\" name=\"club_id\" value=\"0\"/>
				<input type=\"submit\" class=\"green\" value=\"Rašyti\"/>
			</form><br/>";
$DATA_FILE = "files for txt/chat message.txt";
$nuskk = file($DATA_FILE);
$viso_pm = count($nuskk);
$page = $_GET['page'];
$puslapiu_skaicius = 10;
if ($viso_pm  == 0)
    {
echo"Chatas yrą tuščias!"; 
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
$in = explode('|', $masyvo_apvertimas[$c]);
$zinute = stripslashes($in[1]);
$masyw = array("@","*", "!", "+", "&");
$nck = str_replace($masyw,"",$nickas);
echo "";


echo "<div class=\"warning-block green_mar5\"><div class=\"post_forum left\">
<a href=\"pagrindinis.php?id=apie&amp;ka=$bbb[2]\">$bbb[0]</a></b> <span class=\"post_date nowrap\">$bbb[3]</span></div></div>
<div class=\"warning-block thread_post left\"><span class=\"black_color\"> 
$bbb[1] ";if (($stat == "mod") or($stat == "mod2") or ($stat == "mod3") or ($stat == "mod4") or ($stat == "Adminas")){echo" <a href=\"moderator.php?id=deleted_chat&amp;kj=$bbb[4]\">[x]</a>";}echo"</span> </div>";echo "";


}}
}

if ($nick == "funix'lumin"){
echo" <a href=\"pagrindinis.php?id=online\">Dabar žaidžią: <b>".mysql_num_rows(mysql_query("SELECT * FROM prisijunge"))."</b></a><br/";}echo"<br/>";

echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=on\">Dabar žaidžią: <b>".count(glob("online/*.txt"))."</b></a><br/>
Šiandien daugiausiai prisijungusių: <b>$max_online_today[0]</b><br/>
Daugiausiai prisijungusių per visą laiką: <b>$max_online[0]</b>";
echo"
</div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href='https://www.youtube.com/watch?v=BKn_8Lk9W8Q' target='_blank'><img src='imgs/youtube.png'/></a>
<a href='https://plus.google.com/109575957843944965492'  target='_blank'><img src='imgs/googleplus.png'/></a>
<a href='https://www.facebook.com/pages/DBFLT/172940879532038'  target='_blank'><img src='imgs/facebook.png'/></a>
<img src=\"http://cntr.finx.lt/c.php?i=funix\" height=\"0\" width=\"0\" alt=\"\"/><img src=\"http://cntr.finx.lt/c.php?i=funix\" height=\"0\" width=\"0\" alt=\"\"/>
</div><div class=\"foot\">$bottom</div></div>";
$prisij = time();
$fp = @fopen("$gameriai","w");
@fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
@fclose($fp);
}


if ($id == "online")
{
	if ($nick == "funix"){
echo'Dabar &#382;aidime: <b>'.mysql_num_rows(mysql_query("SELECT * FROM prisijunge")).'</b><br/>
</div><div class="meniu" style="text-align: left;"> <div class="meniu">';
if(mysql_num_rows(mysql_query("SELECT * FROM prisijunge")) == false){
echo'<b>Nieko n&#279;ra!</b>';
}
else
{
$zin = 20;
$eil = mysql_num_rows(mysql_query("SELECT * FROM prisijunge"));
$page = abs((int)@$_GET['page']);
if ($page == "") {
$page = 1;
}
if ($page == 1) {
$nuo = 0;
$iki = $zin;
} else {
$nuo = $page * $zin - $zin;
$iki = $page * $zin;
}
if ($eil <= $page * $zin) {
$iki = $eil;
}
$a = mysql_query("SELECT * FROM prisijunge ORDER BY nick ASC LIMIT $nuo, $zin");
$nr = $nuo;
while($onl = mysql_fetch_assoc($a)){
$nr++;
$onl_inf = @mysql_fetch_assoc(mysql_query("SELECT * FROM prisijunge WHERE nick='{$onl[nick]}'"));

echo'<b>'.$nr.'.</b> <a href="pagrindinis.php?id=apie&ka='.$onl['nick'].'">'.$onl['nick'].'</a><br/>';
unset($onl);
}

$viso_puslapiu = $eil / $zin;
$psl = $page;
$puslapiu = ceil($viso_puslapiu);
if ($psl < 1 || $psl > $puslapiu || empty($psl)) {
$psl = 1;
}
$puslapiu1 = $puslapiu-1;
$psl1 = $psl-1;
$psl11 = $psl-2;
$psl2 = $psl + 1;
$psl22 = $psl + 2;
echo'</div><div class="line"></div><div class="meniu" style="text-align: left;">';
if ($puslapiu < 6) {
for($l = 1; $l <= $puslapiu; $l++) {

if ($psl == "$l") {
echo'(' . $psl . ')';
} else {
echo'<a href="pagrindinis.php?id=online&nick='.$nick.'&pass='.$pass.'&page=' . $l . '">[' . $l . ']</a>';
}
}
echo"</div>";
} else {
if ($psl > 1) {
echo'<a href="pagrindinis.php?id=online&nick='.$nick.'&pass='.$pass.'&page=1">[1]</a>';
} else {
echo'[1]';
}
if ($psl11 > 2) {
echo'...';
}
if ($psl11 > 1 && $psl11 < $psl1) {
echo'<a href="pagrindinis.php?id=online&nick='.$nick.'&pass='.$pass.'&page=' . $psl11 . '">[' . $psl11 . ']</a>';
}
if ($psl1 > 1 && $psl > 2) {
echo'<a href="pagrindinis.php?id=online&nick='.$nick.'&pass='.$pass.'&page=' . $psl1 . '">[' . $psl1 . ']</a>';
}
if ($psl > 1 && $psl < $puslapiu) {
echo'[' . $psl . ']';
}
if ($psl2 < $puslapiu && $psl < $puslapiu1) {
echo'<a href="pagrindinis.php?id=online&nick='.$nick.'&pass='.$pass.'&page=' . $psl2 . '">[' . $psl2 . ']</a>';
}
if ($psl22 < $puslapiu && $psl22 > $psl2) {
echo'<a href="pagrindinis.php?id=online&nick='.$nick.'&pass='.$pass.'&page=' . $psl22 . '">[' . $psl22 . ']</a>';
}
if ($psl22 < $puslapiu1) {
echo'...';
}
if ($puslapiu != "$psl") {
echo'<a href="pagrindinis.php?id=online&nick='.$nick.'&pass='.$pass.'&page=' . $puslapiu . '">[' . $puslapiu . ']</a>';
} else {
echo'[' . $puslapiu . ']';
}
}

}
echo" </div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"pagrindinis.php\">Į PRADŽIĄ</a>
</div><div class=\"foot\">$bottom</div></div></div>";   
 
}}


if ($id == "paslaugos"){
echo"<b>Aktyvios mano paslaugos</b></div><div class=\"meniu\" style=\"text-align: left;\">";
if ($moremany[1] - time() > 0){
$likomany = round(($moremany[1]-time())/60/60/24,1);
echo"$ico x$moremany[0] daugiau pinigų galios $likomany d.<br/>";
}
else
{
}

if ($moreexp[1] - time() > 0){
$likoexp = round(($moreexp[1]-time())/60/60/24,1);
echo"$ico x$moreexp[0] daugiau exp galios $likoexp d.<br/>";
}
else
{
}

if ($morekg[1] - time() > 0){
$likokg = round(($morekg[1]-time())/60/60/24,1);
echo"$ico x$morekg[0] didesnis nukaunamumas galios $likokg d.<br/>";
}
else
{

}
if ($padusimai[1] - time() > 0){
$likokg = round(($padusimai[1]-time())/60/60/24,1);
echo"$ico $padusimai[0] sek. padusimų laikas galios $likokg d.<br/>";
}
else
{

}
echo"</div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"pagrindinis.php\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


		  if ($id == "topic_list"){
echo"<b>Ankstesnieji topicai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
$DATA_FILE = "files for txt/topic_zinutes.txt";
$nuskk = @file($DATA_FILE);
$viso_pm = count($nuskk); 
$masyvo_apvertimas = array_reverse($nuskk);
for ($c = 0; $c < 10; $c++)
{
$in = explode('|', $masyvo_apvertimas[$c]);
$nickas = $in[1];$nickas2 = $in[2];
$zinute = stripslashes($in[0]);
$masyw = array("@","*", "!", "#", "~");
$nck = str_replace($masyw,"",$nickas);
$nr = $c + 1;
echo"<b>$in[3]</b> $zinute. (<b><a href=\"pagrindinis.php?id=apie&amp;ka=$nickas2\">$nickas</a></b>)<br/>";}
echo"</div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "off"){
echo"
 Sėkmingai atsijungėte, nepamirškite sugryžti!";
echo" </div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"index.php\">Į PRADŽIĄ</a>
</div><div class=\"foot\">$bottom</div></div>";     
setcookie('nick', null, 0);
@unlink("online/$nick.txt");
}

if ($id == "adddsms") {$turipinigu = @number_format($pinigai, 0, ',', ' ');
echo"<b>Didinti dienos sąskaitos prizą</b></div><div class=\"meniu\" style=\"text-align: center;\">
Jūs galite padidinti dienos pildymo sąskaitos konkurso prizą, priza didinsite iš turimu savo sauntaupu.
</div><div class=\"lin\"></div><div class=\"meniu\" style=\"text-align: center;\">
Sąskaitos balansas: <b>$turipinigu</b><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<b>Įveskite sumą:</b><br/>
<form action='pagrindinis.php?id=adddsms2' method='post'>
<input name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"3\" title=\"Kiek\"/><br/>
<input type='submit' value='Didinti'></form><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "adddsms2") { if (!file_exists("account/$nick.txt")){ $litai = 0;} else{$litai = @file_get_contents("account/$nick.txt");}
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']);  
if ($litai < $kiek) { $er = "Nepakankamas likutis."; }
if ($kiek < "1") { $er = "Mažiausiai galima pridėti 1 LTL"; }
if ($kiek  == "") { $er = "Paliktas tuščias laukelis."; }

if ($er == ""){
$ddt = @number_format($kiek, 0, ',', ' ');
$er = "Dienos prizas padidintas <b>$ddt</b> ";

mysql_query("UPDATE nustatymai SET sms_priz=sms_priz+'$kiek'");

 $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - $kiek);
        @fclose($fp);
}
echo"$er<br/></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "adddtop") {$turipinigu = @number_format($pinigai, 0, ',', ' ');
echo"<b>Didinti prizą</b></div><div class=\"meniu\" style=\"text-align: center;\">
Jūs galite padidinti dienos veiksmų topo prizą, priza didinsite iš turimu pinigų. $pads
</div><div class=\"lin\"></div><div class=\"meniu\" style=\"text-align: center;\"> 
Turite pinigų: <b>$turipinigu</b><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<b>Įveskite sumą:</b><br/>
<form action='pagrindinis.php?id=adddtop2' method='post'>
<input name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Didinti'></form><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "adddtop2") {
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']);  
if ($pinigai < $kiek) { $er = "Nepakankamas likutis."; }
if ($kiek < "1000") { $er = "Mažiausiai galima pridėti 1 000"; }
if ($kiek  == "") { $er = "Paliktas tuščias laukelis."; }

if ($er == ""){
$ddt = @number_format($kiek, 0, ',', ' ');
$er = "Dienos prizas padidintas <b>$ddt</b> ";

$day_top_prize = @file_get_contents("files for txt/dtop_prizas.txt");
$day_top_prize = $day_top_prize + $kiek;
@file_put_contents("files for txt/dtop_prizas.txt", "$day_top_prize");

						$pinigai = $pinigai - $kiek;
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||");
fclose($fp);
}
echo"$er<br/></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "nicko"){
echo"<b>Ar jūsų nick yrą saugus?</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Įsitikinkite kad jūsų nick yrą saugus ir jo niekas nepavoks. Apačioje paskaitykite ką reikia daryti kad jūsų nick nepavoktu.
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>-</b> Nenaudoti tų pačių slaptažodžių kaip kitose svetainėse, nes kitų svetainių adminai galės lengvai pavogti jūsų niką.
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>-</b> Niekam nesakykite savo nicko prisijungimo  domenų.
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>-</b> Norėdami parduoti savo nicką, rizikuojate jį iš karto prarasti, tad įsitikinkite kad nicką pavyks parduoti.
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>-</b> Nesiuskite niekam savo nicko nuotrauką, padare su kompiuteriu, nes viršujė matosi jūsų nuoradą.
</div><div class=\"meniu\" style=\"text-align: center;\">
<b><u>Žaidimo sistemoje jūsų nickai yra saugus, tad negali niekas pavogti, jei pavogę tai jūsų pačiu kalte ir net nerašykite administracijai nes jį ignoruos jūsų PM.</b></u>
 </div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}

if ($id == "duk"){
echo"<b>D.U.K. - Dažniausiai Užduodami Klausimai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Kodėl sumažėjo mano kovinė galia?</b><br/>
<i> Sumažėjo kovinė galia, nes  pasibaigė didesnsio nukaunamumo paslaugą, pakeistas veikėjas, nuimtos transformacijos ar nuimti daiktai nuo kūno kurie prideda procentą.</i><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Kodėl nekyla kovinė galia?</b><br/>
<i> Kovinė galia gali nepaklti jei jūsų jėgos ir gynybos santikis nera geras. Santykis turi būti: 1 jegos ir 3 gynybos.</i><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Kaip papildyti gyvybės?</b><br/>
<i> Jums reikia nueiti į miestą, mieste rasite parduotuvės, parduotuveje nusipirkite gyvybių eleksyro ir neikite į kapsulių dėžutė išgerti juos.</i><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Kur reikia kelti jėgą ir gynybą?</b><br/>
<i> Pagrindinius lygius galite kelti už pinigus 'Kame House' ir 'Gyvates kelyje'. Taip pat galima kelti už kreditus ir sąskaitos balansą.</i><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Pavoge nick!? Ką daryti?! Padėkit!</b><br/>
<i> Jei kas pavagia nick, tai tik del jusu kaltes, nes sistema saugi ir nicku hakinti neįmanoma! Yra daug būdu prarasti arba paviešinti savo slaptažodi, todėl dėl nick praradimo galite kaltinti TIK save ir prašome dėl to nesikreipti i administracija. [<a href=\"pagrindinis.php?id=nicko\">Nicko saugumas</a>]</i><br/>
 </div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}

if ($id == "time_event"){
echo"Kiekvienas žaidėjas išbuvęs prisijunges 6 valandas gauną 2 LTL, kiek laiko išbuvote ir kiek liko laukti pateikta apačioje.<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
";
	$isbuvote222 = round(time()-$taimxax); 
	$day = floor(($isbuvote222 / 60 / 60 / 24)			- (floor($isbuvote222 / 60 / 60 / 24 / 31) * 31));
	$val = floor(($isbuvote222 / 60 / 60)				- (floor($isbuvote222/ 60 / 60 / 24) * 24));
	$min = floor(($isbuvote222/ 60)						- (floor($isbuvote222  / 60 / 60) * 60));
	$sec = floor($isbuvote222							- (floor($isbuvote222 / 60) * 60));
 if ($taimxax-time()){echo "
[&#8226;] Išbuvote prisijungęs (-usi) "; 
 if($val != "0"){echo"<b>$val</b> val. </b>";}
 if($min != "0"){echo"<b>$min</b> min. </b>";}
 if($sec != "0"){echo"<b>$sec</b> sek. </b>";}
}
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";

	$isbuvote2 = round((time()-$taimxaxas)); 
	$day = floor(($kreditu_timeg / 60 / 60 / 24)			- (floor($kreditu_timeg / 60 / 60 / 24 / 31) * 31));
	$val = floor(($kreditu_timeg / 60 / 60)				- (floor($kreditu_timeg / 60 / 60 / 24) * 24));
	$min = floor(($kreditu_timeg / 60)						- (floor($kreditu_timeg  / 60 / 60) * 60));
	$sec = floor($kreditu_timeg					- (floor($kreditu_timeg / 60) * 60));
 if ($taimxaxas - time() + 21600){echo "
[&#8226;] <b>2  LTL</b> gausite po "; 
 if($val != "0"){echo"<b>$val</b> val. </b>";}
 if($min != "0"){echo"<b>$min</b> min. </b>";}
 if($sec != "0"){echo"<b>$sec</b> sek. </b>";}
}
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\"><b>10 Paskutiniu žaidėjų kurie gavo:</b>
</div><div class=\"meniu\" style=\"text-align: left;\">";
$DATA_FILE = "files for txt/time event log.txt";
$nuskk = file($DATA_FILE);
$viso_pm = count($nuskk);
$page = $_GET['page'];
$puslapiu_skaicius = 10;
if ($viso_pm  == 0)
    {
echo"Logas yra tuščias!"; 
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
$in = explode('|', $masyvo_apvertimas[$c]);
$zinute = stripslashes($in[1]);
$masyw = array("@","*", "!", "+", "&");$nr = $c + 1;
$nck = str_replace($masyw,"",$nickas);
	$how_old_chat = round((time()-$bbb[2])); 
	$day = floor(($how_old_chat / 60 / 60 / 24)			- (floor($how_old_chat / 60 / 60 / 24 / 31) * 31));
	$val = floor(($how_old_chat / 60 / 60)				- (floor($how_old_chat / 60 / 60 / 24) * 24));
	$min = floor(($how_old_chat / 60)						- (floor($how_old_chat  / 60 / 60) * 60));
	$sec = floor($how_old_chat					- (floor($how_old_chat / 60) * 60));
 if (time()-$bbb[2]){echo "$nr. <b><a href=\"pagrindinis.php?id=apie&amp;ka=$bbb[0]\">$bbb[0]</a></b>: <i>$bbb[1]</i>  [Prieš  "; 
  if($day != "0"){echo"<b>$day</b> d. ";}
 if($val != "0"){echo"<b>$val</b> val. ";}
 if($min != "0"){echo"<b>$min</b> min. ";}
 if($sec != "0"){echo"<b>$sec</b> sek. ";}
echo"]"; }
echo"<br/>";}
}
echo"</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}

if ($id == "scatter_balls"){
echo"<b>Išbarstyti Rutuliai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">

<img src=\"imgs/samungo drakonas.png\" alt=\"*\"/><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Samungo planetos dievas drakonas, visai to nenorėdamas, išbarstė po visą visatą 10 000 drakono rutulių, niekas nežino kur jie randasi todėl jis Jūsų prašo, kad padėtumete jam juos surinkti.
</div><div class=\"meniu\" style=\"text-align: center;\">
Už tai jis tam, kas per parą surinks daugiausiai pamestų drakono rutulių, duos prizą - <b>5.00 LTL</b>.<br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Norint juos rinkti reikia kovoti, nukaunant priešininką jūs išmes kad radote išbarsytu rutulių.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
        foreach (@glob("isbarsyti/*.txt") as $a)
        {
            $name = str_replace(array("isbarsyti/", ".txt"), "", $a);
            $ex = @explode("|", @file_get_contents($a));
            $arr[] = array("$ex[0]", "$name");
        }
		@rsort($arr);
		echo "<b>Šiandien daugiausiai rutulių rado: </b>";	$glob = @glob("isbarsyti/*.txt");
	$kiek = @count($glob);
	if ($kiek > 1)
	{
	$kiek = 1;
	}
    for ($f = 0; $f < $kiek; $f++)
    {
        $nr = $f + 1;
        echo " <a href=\"pagrindinis.php?id=apie&amp;ka={$arr[$f][1]}\">{$arr[$f][1]}</a><br/>
		<b>Šiandien aš radau dalių:</b>  ".@file_get_contents("isbarsyti/$nick.txt")."<br/>";
    }
	echo "</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\"><b>TOP 10:</b><br/>
	</div><div class=\"meniu\" style=\"text-align: left;\">";
    @rsort($arr);
	$glob = @glob("isbarsyti/*.txt");
	$kiek = @count($glob);
	if ($kiek > 10)
	{
	$kiek = 10;
	}
    for ($f = 0; $f < $kiek; $f++)
    {
        $nr = $f + 1;
        echo "$nr) <b><a href=\"pagrindinis.php?id=apie&amp;ka={$arr[$f][1]}\">{$arr[$f][1]}</a></b> ({$arr[$f][0]})<br/>";
    }

echo"</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}

 if ($id == "naujoku_gidas"){
echo "<b>Informacija pradedantiesiems</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Naujokų gidas:</b><br/>
- Pirma perskaitykite skiltį 'Informacija'.<br/>
- Iš pradžių jums reikia šiek tiek pasitreniruoti. Tai galte padaryti 'Kame house' (gausite jėgos ir gynybos), tai jum pakels jūsų kovinę galią.<br/>
- Kai jau sustiprėjote eikite kautis į 'Kovų zoną', tenais gausite xp bei pinigų.<br/>
- Pasikėlę level'į gausite 5 taškus, už kuriuos taip pat gausite jėgos, gybybos, bei gyvybių.<br/>
- Kovinė galia auga keliant tiek gynybą tiek jėgą, todėl neužmirškite kelti abiejų.<br/>
- Pasikėlę savo lygį atrasite daug naujų galimybių. :)<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>SĖKMĖS ŽAIDIME! :)</b><br/>
<b>MŪSŲ KOMANDA VISADA JUMS PASIRUOŠUS PADĖTI :)</b><br/>

</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


 if ($id == "menulis"){
echo "<b>Great Ape</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/oozaru.png' ALT=''><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Šią stadiją pasiekti galima tik šviečiant mėnulio pilnačiai. Pilnatis buna:<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
-  nuo 17 valandos iki 18 valandos.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
- nuo 23 valandos iki 24 valandos.<br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Tuo mėtų iš kovų zonos gaunate 2x daugiau pinigų.</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "write"){
if (time() < $floo){ 
echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"5; url=pagrindinis.php?id=\">";
echo"Palauk kelias sekundes<br/></div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pradžią</a><br/></div><div class=\"foot\">$bottom</div></div>"; }
else{
$zinute = htmlspecialchars( $_POST['zinute']);
$zinute = str_replace("$","$$",$zinute);
$zinute = str_replace("|","l",$zinute);
$arr = array("^","%","\n");
$zinute = str_replace($arr,"",$zinute);
$zinute = htmlspecialchars($zinute);
include("smiles.php"); 
if (substr_count($zinute, "<img src=")>5){ $zin = "Per daug smailų žinutėje, daugiausiai gali būti 5 smailai!"; }

if (strlen($zinute) > 300){ $zin = "Žinutė per ilga!"; }

if ($zinute == "") { $zin = "Paliktas tuščias laukelis!"; }

if ($lygis < 50){ $zin = "Rašyti galima tik nuo 150 lygio! "; }

$np = file("files for txt/chat message.txt"); 
$kiek_np = count($np);
for($o=0; $o < $kiek_np; $o++) {
$op = explode("|",$np[$o]);
if ($zinute == $op[1]){ $zin = "Tokia žinutė jau egzistuoja!"; } }

$kiek_nv = count(file("files for txt/chat message.txt"));
if ($kiek_nv > 200){ $openn = fopen("files for txt/chat message.txt","w");
        fwrite($openn, "");
        fclose($openn); }
if ($zin == ""){
$k1 = rand(0,9); 
$k2 = rand(0,9); 
$k3 = rand(0,9); 
$k4 = rand(0,9); 
$k5 = rand(0,9); 
$k6 = rand(0,9); 
$k7 = rand(0,9); 
$k8 = rand(0,9); 
$k9 = rand(0,9); 
$k10 = rand(0,9); 
$kod = "$k1$k2$k3$k4$k5$k6$k7$k8$k9$k10"; 
$open = @fopen("files for txt/chat message.txt","a+");
$dsghj = time();  
        @fwrite($open, "$vrd|$zinute|$nick|$dsghj|$kod|time()|\n");
        @fclose($open);
$zin = "Žinutę įrašytą"; }
echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"1; url=pagrindinis.php?id=\">";
echo"$zin<br/></div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pradžią</a><br/></div><div class=\"foot\">$bottom</div></div>";
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
} }


if ($id =="majin"){
if ($mm[40]- time() > 0){ 
echo"<b>Majin source</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/majin_babidi.png' ALT=''><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">"; 
	$majin = round(($mm[40]-time())); 
	$day = floor(($majin / 60 / 60 / 24)			- (floor($majin / 60 / 60 / 24 / 31) * 31));
	$val = floor(($majin / 60 / 60)				- (floor($majin / 60 / 60 / 24) * 24));
	$min = floor(($majin / 60)						- (floor($majin / 60 / 60) * 60));
	$sec = floor($majin							- (floor($majin/ 60) * 60));
 if ($mm[40]- time() > 0){echo "Majin source burtas dar bus "; 
 if($day  != "0"){echo"<b>$day</b> d. </b>";}
 if($val != "0"){echo"<b>$val</b> val. </b>";}
 if($min != "0"){echo"<b>$min</b> min. </b>";}
 if($sec != "0"){echo"<b>$sec</b> sek. </b>";}
}echo"</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
echo"<b>Majin source</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/majin_babidi.png' ALT=''><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Gavus majin source įgaunamą įpatingų galių su kuriomis gaunate:</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>*</b> 2 kartus daugiau xp iš kovų.
</div><div class=\"meniu\" style=\"text-align: center;\">
<u>Norint gauti majin source 1 valanda reikia tureti 100 majin sroll. (<i>Majin sroll gaunate iš kovų</i>).</u>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"pagrindinis.php?id=majin_tapmu\">Gauti majin source</a> <br/> 
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}


if ($id == "majin_tapmu"){
    if (!file_exists("kronoss/$nick.txt")){ $kronu = 0;} else{$kronu = @file_get_contents("kronoss/$nick.txt");}
if ($dari[6] < 100){ $bad = "Nepakankamas majin srcol.";}
        $mm = @explode("|",@file_get_contents("kitokiainf/$nick.txt"));
    if ($bad == ""){
        $bad = "Sveikiname jūs gavote majin source.";
 $mm[40] = time()+60*60*3;
 $dari[6] = $dari[6] - 100;
 include("icludekitainf/iras2.php");
include("icludekitainf/mm.php");}
echo"$bad</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "informacija"){
echo"<b>Informacija</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/information.png' ALT=''><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Tai yra <b>unikalus</b> Drakonų kovų žaidimas. Jame jūs galite treniruotis, vygdyti įvairias misijas, prekiauti, rinkti drakonų rutulius, kautis su kitais žaidėjais, treniruotis, bendrauti, bei pukiai praleisti laiką! Turime išskirtinai ilgą sagą. Taip pat už 2 val. praleistas žaidime gausite 2 kreditus. Atnaujinimai daromi biveik kiekvineną dieną.
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Kaip pasikelti savo kovinę galią?</b><br />
Ją galite keltis 'Kame house' ten yra specialios treniruotės už kurias gausite jėgos ir gynybos. Dar galite pirkti už kreditus. Santykis tarp jėgos ir gynybos yra: 1:3. (1 jėgos 3 gynybos = 1 kovinė galia)<br>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Kaip užsidirbti pinigų?</b><br />
Juos gausite kovodami, arba keisdami už kreditus.<br>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Ar įmanoma gauti kreditų neremiant žaidimo?</b><br />
Taip įmanoma. Tai galite padaryti nuėję į banką ir ten galėsite pinigus keisti į kreditus.<br>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Oozaru</b><br />
Tai virtimas beždžione. Ja autotiškai tapsite nuo 22:00 ir 24:00. Šiuo laikotarpiu gausite 3 kartus daugiau pinigų.<br>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Dienos top'as</b><br />
Čia galite laimėti kreditų, taškai skaičiuojasi kai kovojate.<br>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>SMS top'as</b><br />
Šį top'ą galite laimėti per dieną išsiuntę žinučių už didžiausią sumą.<br>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Aprangos</b><br />
Čia galite pasižiurėti savo užsidėtus ginklus, bei šarvus.<br>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Mano skill'ai</b><br />
Čia galite tranformuotis, išmokti naujas technikas, bei auras. Už tai gausite jėgos, gynybos, bei gyvybių lygių.<br>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Kapsulių dėžutė</b><br />
Tai jūsų inventorius. Čia jūs laikysite visus savo turimus daigtus, taip pat iš čia užsidėsite aprangas, bei gydysitės.<br>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Mano meniu</b><br />
Čia galėsite rasti veidelių sąrašą, pasikeisti slaptažodį,asmeninę informaciją, įjugti arba išjungti pokalbius, peržiūrėti privačius pokalbius, taip pat susižinoti savo pakvietimo nuorodą (už atvestą žaidėją gausite kreditų).<br>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Majin karys</b><br />
Tapę 'Majin source' jūs gausite 2 kartus daugiau xp, ir 2 kartus daugiau pinigų. Kaina: 50 Majin scroll ir 1 kreditas.<br>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Miestas</b><br />
Miestas viena iš esminių žaidimo vietų. Čia rasite turgų, taisykles <b>(PRIVALOMA ŽINOTI!)</b>, valdžios sąrašą su užimamomis pareigomis, banką (jame galėsite laikyti savo pinigų santaupas, bei keisti pinigus į kreditus), parduotuvę, forumą, kaleimą, bei įvairius top'us.<br>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Kovų zona</b><br />
Čia galėsite pamatyti savo kovinę galią, įjungti arba išjungti automatinį kovojimą, bei kovoti prieš įvairius kovotojus.<br>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Kovų arena</b><br />
Tai vieta kur galite kautis su kitais žaidėjais. Pralaimėją prarandate visus su savimi turimus pinigus.<br>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Karino bokštas</b><br />
Tai vieta kur galėsite pirkti stebuklingas pupas (pagydo pilnas gyvybes), taip pat gerti dieviškąjį vandenį (pridės jėgos ir gynybos).<br>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Dievo namai</b><br />
Čia galėsite rasti drakono rutulius, kuriuos surinkus 7 galėsite iškviesti drakoną, ir jis jums išpildys vieną norą. Yra laiko ir sielos kambarys (pridės jėgos ir gynybos), taip pat yra Kami misijos, bei Garlic gauja.<br></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Kame house</b><br />
Čia rasite Roshi treniruotes, misijas, jei galėsite susikauti su kovotojais už kuriuos gausite atlygį.
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Kaio shin</b><br />
Čia rasite kibito misiją, Black Smoke Shenron drakoną ( galėsite iškviesti už juoduosius drakono rutulius), kovų misijas, bei kovų mašiną.<br>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Misijos</b><br />
Čia bus visos užduotys, rinkimo misijos, kovų misijos, bei pasiekimai.<br>
</div><div class=\"meniu\" style=\"text-align: left;\">
<b>SĖKMĖS ŽAIDIME!</b> :)</center>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "misijos"){
echo"<b>Misijos</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/vietoviu/mr.popo.png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Sveikas aš esu <b>Ponas Popas</b>, jums aš turiu visokiu misijų, kurias įvykdęs galite gauti jėgos, gynybos, gyvybių, pinigų ir net kreditų, išsirink kokias misijas vykdysite.
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"pagrindinis.php?id=goal\">Žaidimo tisklas</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"misijos.php?\">Užduotys</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"pagrindinis.php?id=kovu_misijos\">Kovų misijos</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"saga.php?\">Sagos</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"pasiekimai.php?\">Pasiekimai</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"rinkimo_uzduotis.php?\">Rinkimo misijos</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "goal"){
echo"<b>Žaidimo tikslas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Čia yra jūsų tikslas, įvykdžius savo tikslą jus baigsite žaidimą, bei gausite prizą. Prizas yra Legendinio kario statusas.
</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($tikslas[0] == "+"){ 
echo"<img src=\"imgs/ok.gif\"/> Pasiekti 400 lygį. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\"/> Pasiekti 400 lygį. <br/>"; }
if ($tikslas[1] == "+"){ 
echo"<img src=\"imgs/ok.gif\"/> Sutaupyti 250 LTL savo sąskaitoje. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\"/> Sutaupyti 250 LTL savo sąskaitoje.<br/>"; }
if ($tikslas[2] == "+"){ 
echo"<img src=\"imgs/ok.gif\"/> Surinkti 100 drakono rutulių. <br/>"; } else { 
echo"<img src=\"imgs/no.gif\"/> Surinkti 100 drakono rutulių.<br/>"; }
if ($tikslas[3] == "+"){ 
echo"<img src=\"imgs/ok.gif\"/> Surinkti 150 juodųjų drakono rutulių.<br/>"; } else { 
echo"<img src=\"imgs/no.gif\"/> Surinkti 150 juodųjų drakono rutulių.<br/>"; }
if ($tikslas[4] == "+"){ 
echo"<img src=\"imgs/ok.gif\"/> Surinkti 200 nameko drakono rutulių.<br/>"; } else { 
echo"<img src=\"imgs/no.gif\"/> Surinkti 200 nameko drakono rutulių.<br/>"; }
if ($tikslas[5] == "+"){ 
echo"<img src=\"imgs/ok.gif\"/> Laimėti 1 000 000 kovų<br/>"; } else { 
echo"<img src=\"imgs/no.gif\"/> Laimėti 1 000 000 kovų<br/>"; }
if ($tikslas[7] == "+"){ 
echo"<img src=\"imgs/ok.gif\"/> Sutaupyti 1 000 000 kreditų.<br/>"; } else { 
echo"<img src=\"imgs/no.gif\"/> Sutaupyti 1 000 000 kreditų.<br/>"; }
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "kovu_misijos"){
echo"<b>Kovų misijos</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>[&#8226;] <a href=\"7_dragon.php?id=\">7 shenron misiją</a><br/></b></div><div class=\"meniu\">
[&#8226;] <a href=\"zona1.php?id=\">Gyniu Force misiją</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"frieza_misija.php?id=\">Frieza misiją</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"cell_misija.php?id=\">Cell misiją</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"buu_misija.php?id=\">Buu misiją</a><br/></div><div class=\"meniu\">
[&#8226;] <a href=\"baby_misija.php?id=\">Baby misiją</a><br/> 
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"fighting_zone.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom </div></div>";}

if ($id == "kronos"){ 
if (!file_exists("kronoss/$nick.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$nick.txt"); }
if (!file_exists("atvesti/$nick.txt")){ $atvede = 0; } else { $atvede=count(file("atvesti/$nick.txt")); }
$isvise = $atvede*1;
$gavotekr = $atvede/2;
$gavotesss = @number_format($gavotekr, 1, ',', ' ');

$your_krd = @number_format($kronu, 1, ',', ' ');
echo"<b>Kreditų naudojimas [$your_krd]</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Kreditai - Tai žaidimo valiuta už kuria žaidėjai gali įsigyti tam tikrų paslaugų kaip žaidimo statusai, žaidimo pinigai ir panašūs dalykai kurie palengvina jūsų žaidima. Kreditus gauti galima už savo sąsakitos pinigus.<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"account.php?id=credit_purchase\">Kreditų pirkimas</a></b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"pagrindinis.php?id=ki_matuoklis\">KĮ Matuoklis</a> (400 kreditų)<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"pagrindinis.php?id=radar\">Radar</a> (200 kreditų)<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"pagrindinis.php?id=jega\">Pirkti jėgos</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"pagrindinis.php?id=gynyba\">Pirkti gynybos</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"pagrindinis.php?id=gyvybiu\">Pirkti gyvybių</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"pagrindinis.php?id=pinigu\">Pirkti pinigų</a><br/>
[&#8226;] <a href=\"pagrindinis.php?id=xp\">Pirkti xp</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<td class=\"cont\" width=\"10%\">
<span>Atvedimo nuorodą. Iš viso paspaudę: <strong>$isvise</strong> ir gavote kreditų <strong>$gavotesss</strong></span><br/>
<td class=\"cont3\" align=\"left\"><input type=\"text\" class=\"ninp\" value=\"http://SDB.LT?f=$nick\" size=\"30\" onclick=\"select(this);\"/></td><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
/*
if ($id == "black_ball"){
    if (!file_exists("kronoss/$nick.txt")){ $kornu = 0;} else{$kornu = @file_get_contents("kronoss/$nick.txt");}
    if ($kornu < 2100){ echo "Nepakankamas kreditų likutis.
	</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=kronos\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{

 $fp = @fopen("kronoss/$nick.txt", "w");
        @fwrite($fp, $kornu - 2100);
        @fclose($fp);
$dari[34] = $dari[34]+1;
include("icludekitainf/iras2.php");
echo"Sėkmingai nusipirkote <b>Juodajį drakono rutulį</b>.
	</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=kronos\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "namek_ball"){
    if (!file_exists("kronoss/$nick.txt")){ $kornu = 0;} else{$kornu = @file_get_contents("kronoss/$nick.txt");}
    if ($kornu < 1300){ echo "Nepakankamas kreditų likutis.
	</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=kronos\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{

 $fp = @fopen("kronoss/$nick.txt", "w");
        @fwrite($fp, $kornu - 1300);
        @fclose($fp);
$dari[44] = $dari[44]+1;
include("icludekitainf/iras2.php");
echo"Sėkmingai nusipirkote <b>Namek drakono rutulį</b>.
	</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=kronos\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}
 
if ($id == "ball"){
    if (!file_exists("kronoss/$nick.txt")){ $kornu = 0;} else{$kornu = @file_get_contents("kronoss/$nick.txt");}
    if ($kornu < 700){ echo "Nepakankamas kreditų likutis.
	</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=kronos\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{

 $fp = @fopen("kronoss/$nick.txt", "w");
        @fwrite($fp, $kornu - 700);
        @fclose($fp);
$dari[20] = $dari[20]+1;
include("icludekitainf/iras2.php");
echo"Sėkmingai nusipirkote <b>Drakono rutulį</b>.
	</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=kronos\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}
*/
if ($id == "jega"){ 
$your_krd = @number_format($kronu, 1, ',', ' ');
echo"<b>Jėgos pirkimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Jūsų sąskaitoje kreditų: <b>$your_krd </b><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
1 kreditas - 500 jėgos<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Už kiek kreditų pirksite jėgos?</b><br/>
<form action='pagrindinis.php?id=jega2' method='post'>
<input name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input  type='submit' value='Pirkti'/><postfield name=\"kiek\" value=\"$(kiek)\"/></form>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=kronos\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "gynyba"){ 
$your_krd = @number_format($kronu, 1, ',', ' ');
echo"<b>Gynybos pirkimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Jūsų sąskaitoje kreditų: <b>$your_krd</b><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
1 kreditas - 500 gynybos<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Už kiek kreditų pirksite gynybos?</b><br/>
<form action='pagrindinis.php?id=gynyba2' method='post'>
<input  name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input  type='submit' value='Pirkti'/><postfield name=\"kiek\" value=\"$(kiek)\"/></form>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=kronos\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "gyvybiu"){ 
$your_krd = @number_format($kronu, 1, ',', ' ');
echo"<b>Gyvybių pirkimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Jūsų sąskaitoje kreditų: <b>$your_krd</b><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
1 kreditas - 500 gyvybių<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Už kiek kreditų pirksite gyvybių?</b><br/>
<form action='pagrindinis.php?id=gyvybiu2' method='post'>
<input  name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"1000\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'/><postfield name=\"kiek\" value=\"$(kiek)\"/></form>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=kronos\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "xp"){ 
$your_krd = @number_format($kronu, 1, ',', ' ');
echo"<b>XP pirkimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Jūsų sąskaitoje kreditų: <b>$your_krd</b><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
1 kreditas - 100 XP<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Už kiek kreditų pirksite XP?</b><br/>
<form action='pagrindinis.php?id=xp2' method='post'>
<input name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input  type='submit' value='Pirkti'/><postfield name=\"kiek\" value=\"$(kiek)\"/></form>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=kronos\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "pinigu"){ 
$your_krd = @number_format($kronu, 1, ',', ' ');
echo"<b>Pinigų pirkimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Jūsų sąskaitoje kreditų: <b>$your_krd</b><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
1 kreditas - 100 000 pinigų<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Už kiek kreditų pirksite pinigų?</b><br/>
<form action='pagrindinis.php?id=pinigu2' method='post'>
<input  name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input  type='submit' value='Pirkti'/><postfield name=\"kiek\" value=\"$(kiek)\"/></form>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=kronos\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "jega2") {if (!file_exists("kronoss/$nick.txt")){ $kronu = 0;} else{$kronu = @file_get_contents("kronoss/$nick.txt");}
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 
$g_kaina = 1*$kiek;  
$kiek_gaus1 = 500*$g_kaina; 
if ($kronu < $g_kaina) { $er = "Nepakankamas kreditų likutis."; }
if ($g_kaina == "") { $er = "Paliktas tuščias laukelis."; }

if ($er == ""){
$gavote = @number_format($kiek_gaus1, 0, ',', ' ');
$isleidote = @number_format($g_kaina, 0, ',', ' ');
$er = "Gavote <b>$gavote</b> jėgos. Išleidote $isleidote kreditų.";
        $fp = @fopen("kronoss/$nick.txt", "w");
        @fwrite($fp, $kronu - $g_kaina);
        @fclose($fp);
						$jega = $jega + $kiek_gaus1;
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||");
fclose($fp);
}
echo"<b>Jėgos pirkimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$er<br/></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=jega\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "gynyba2") {if (!file_exists("kronoss/$nick.txt")){ $kronu = 0;} else{$kronu = @file_get_contents("kronoss/$nick.txt");}
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 
$g_kaina = 1*$kiek;  
$kiek_gaus1 = 500*$g_kaina; 
if ($kronu < $g_kaina) { $er = "Nepakankamas kreditų likutis."; }
if ($g_kaina == "") { $er = "Paliktas tuščias laukelis."; }

if ($er == ""){
$gavote = @number_format($kiek_gaus1, 0, ',', ' ');
$isleidote = @number_format($g_kaina, 0, ',', ' ');
$er = "Gavote <b>$gavote</b> gynybos. Išleidote $isleidote kreditų.";
        $fp = @fopen("kronoss/$nick.txt", "w");
        @fwrite($fp, $kronu - $g_kaina);
        @fclose($fp);
						$gynyba = $gynyba + $kiek_gaus1;
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||");
fclose($fp);
}
echo"<b>Gynybos pirkimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$er<br/></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=gynyba\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "gyvybiu2") {if (!file_exists("kronoss/$nick.txt")){ $kronu = 0;} else{$kronu = @file_get_contents("kronoss/$nick.txt");}
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 
$g_kaina = 1*$kiek;  
$kiek_gaus1 = 500*$g_kaina; 
if ($kronu < $g_kaina) { $er = "Nepakankamas kreditų likutis."; }
if ($g_kaina == "") { $er = "Paliktas tuščias laukelis."; }

if ($er == ""){
$gavote = @number_format($kiek_gaus1, 0, ',', ' ');
$isleidote = @number_format($g_kaina, 0, ',', ' ');
$er = "Gavote <b>$gavote</b> gyvybių. Išleidote $isleidote kreditų.";
        $fp = @fopen("kronoss/$nick.txt", "w");
        @fwrite($fp, $kronu - $g_kaina);
        @fclose($fp);
						$gyvybess = $gyvybess + $kiek_gaus1;
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||");
fclose($fp);
}
echo"<b>Gyvybių pirkimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$er<br/></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=gyvybiu\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "xp2") {if (!file_exists("kronoss/$nick.txt")){ $kronu = 0;} else{$kronu = @file_get_contents("kronoss/$nick.txt");}
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 
$g_kaina = 1*$kiek;  
$kiek_gaus1 = 100*$g_kaina; 
if ($kronu < $g_kaina) { $er = "Nepakankamas kreditų likutis."; }
if ($g_kaina == "") { $er = "Paliktas tuščias laukelis."; }

if ($er == ""){
$gavote = @number_format($kiek_gaus1, 0, ',', ' ');
$isleidote = @number_format($g_kaina, 0, ',', ' ');
$er = "Gavote <b>$gavote</b> xp. Išleidote $isleidote kreditų.";
        $fp = @fopen("kronoss/$nick.txt", "w");
        @fwrite($fp, $kronu - $g_kaina);
        @fclose($fp);
						$exp = $exp + $kiek_gaus1;
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||");
fclose($fp);
}
echo"<b>XP pirkimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$er<br/></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=xp\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "pinigu2") {if (!file_exists("kronoss/$nick.txt")){ $kronu = 0;} else{$kronu = @file_get_contents("kronoss/$nick.txt");}
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 
$g_kaina = 1*$kiek;  
$kiek_gaus1 = 100000*$g_kaina; 
if ($kronu < $g_kaina) { $er = "Nepakankamas kreditų likutis."; }
if ($g_kaina == "") { $er = "Paliktas tuščias laukelis."; }

if ($er == ""){
$gavote = @number_format($kiek_gaus1, 0, ',', ' ');
$isleidote = @number_format($g_kaina, 0, ',', ' ');
$er = "Gavote <b>$gavote</b> pinigų. Išleidote $isleidote kreditų.";
        $fp = @fopen("kronoss/$nick.txt", "w");
        @fwrite($fp, $kronu - $g_kaina);
        @fclose($fp);
						$pinigai = $pinigai + $kiek_gaus1;
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||");
fclose($fp);
}
echo"<b>Pinigų pirkimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$er<br/></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=pinigu\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "ki_matuoklis"){
    if (!file_exists("kronoss/$nick.txt")){ $kronu = 0;} else{$kronu = @file_get_contents("kronoss/$nick.txt");}
    if ($kronu < 400){ $bad = "Nepakankamas kreditų likutis.";}

    if ($bad == "")
    {
        $bad = "Sėkmingai nusipirkote <b>KĮ matuoklį</b>.";
        $fp = @fopen("kronoss/$nick.txt", "w");
        @fwrite($fp, $kronu - 400);
        @fclose($fp);
$dari[35] = $dari[35]+1;
include("icludekitainf/iras2.php");
}
echo"$bad
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=kronos\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "radar"){
    if (!file_exists("kronoss/$nick.txt")){ $kronu = 0;} else{$kronu = @file_get_contents("kronoss/$nick.txt");}
    if ($kronu < 200){ $bad = "Nepakankamas kreditų likutis.";}

    if ($bad == "")
    {
        $bad = "Sėkmingai nusipirkote <b>Radar</b>.";
        $fp = @fopen("kronoss/$nick.txt", "w");
        @fwrite($fp, $kronu - 200);
        @fclose($fp);
$dari[19] = $dari[19]+1;
include("icludekitainf/iras2.php");
}
echo"$bad
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=kronos\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "miestas"){
      $nuskk = @glob("currency/*.txt"); 
      $gtcdss = @count($nuskk);
echo"<b>Mr. Satan Miestas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/vietoviu/mrsatan.png\" alt=\"*\"/><br/>
Sveikas $nick atvykęs į Mr. Satan Miestą.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"valiutos_pardavimas.php\"><b>Valiutos užsakymai</b> ($gtcdss)</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"bank.php\">Žaidimo bankas</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"nicku_turgus.php?id=\">Nickų turgus</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"aukcijonas.php?id=\">Turgus</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"pagrindinis.php?id=atspek\">Kazino</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"pagrindinis.php?id=istatymai\">Taisyklės</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"pagrindinis.php?id=valdzia\">Valdžia</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"pagrindinis.php?id=garbe\">Garbes lenta</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"parda.php?id=parde\">Parduotuvė</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"forum.php\">Forumas</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"pagrindinis.php?id=kalejimas\">Kalėjimas</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <a href=\"pagrindinis.php?id=top\">Topai</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if($id=="atspek"){$spekmany = @number_format($pinigai, 0, ',', ' ');
$rand = rand(0,5);
$fp = @fopen("files for txt/atspek_skaiciu.txt", "w+");
@fwrite($fp,"$rand");
@fclose($fp);
echo"<b>Kazino, Atpsėk skaičių!</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Jūs turite pinigų: $spekmany<br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Statoma pinigų sumą:<br/>
<form action=\"pagrindinis.php?id=a_rezs\" method=\"post\">
<input name=\"manyins\" type=\"text\" format=\"*N\" maxlenght=\"15\" title=\"Kiek pinigu?\"/><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Jūsų skaičius [nuo 0 iki 5]<br/>
<input name=\"numbrs\" type=\"text\" format=\"*N\" maxlength=\"1\" title=\"Skaicius\"/><br/>
<input type=\"submit\" value=\"Rezultatas\"/></form><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=miestas\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if($id=="a_rezs"){
$rand = rand(0,5);
$fp = @fopen("files for txt/atspek_skaiciu.txt", "w+");
@fwrite($fp,"$rand");
@fclose($fp);
$statau = ereg_replace("[^0-9]", "", $_POST['manyins']);
$skaicius = ereg_replace("[^0-9]", "", $_POST['numbrs']);
$speku = @file_get_contents("files for txt/atspek_skaiciu.txt");

if ($statau == ""){$bbc = "Nenurodei kiek pinigų statysite!";$pin = "$pinigai";}
if ($skaicius == ""){$bbc = "Nenurodei skaičiaus!";$pin = "$pinigai";}
if ($skaicius > 5){$bbc = "Pasirinktas skaičius per didelis!";$pin = "$pinigai";}
if ($pinigai < $statau){$bbc = "Neužtenka pinigų";$pin = "$pinigai";}
if ($bbc == "")
{
if ($skaicius != $speku)
{
$pin = "$pinigai"-"$statau";
$bbc = "Deja laimingas skaičius buvo <b>$speku</b><br/>
Jūs praradote <b>$statau</b> pinigų, meginkite kita kartą";
}
else 
{
if ($skaicius == "$speku")
{
$pin="$pinigai"+"$statau";
$bbc = "Jūs laimejotė!<br/>
Skaičius buvo $speku, jūs jį atspejote, gavote <u>$statau</u> pinigų";
}
}
}
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

echo"<b>Kazino, Atpsėk skaičių!</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$bbc<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=atspek\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "garbe"){
echo"<b>Garbes lenta</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Užėję į žaidėjo informaciją jūs galite spausti nykšti aukšyn arba nykšti žemyn.<br/>
Čia rodomi žaidėjai turintys daugiausiai surinkę nyksčių aukštyn.</div><div class=\"meniu\" style=\"text-align: left;\">
<b>20 Gerbemiausių žaidėjų:</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">";
      foreach (@glob("reputacija/teigiama/*.txt") as $a)
        {
            $name = @str_replace(array("reputacija/teigiama/", ".txt"), "", $a);
           $ex = explode("|", file_get_contents($a));
			  $arr[] = array("$ex[0]", "$name");
			
       }
	      @rsort($arr);
    for ($f = 0; $f < 20; $f++)
    {
        $nr = $f + 1;
		$ts2scr= $arr[$f][0]-$arr2[$f][0];
	$kiekturis = @number_format($ts2scr, 0, ',', ' ');
        echo "$nr) <b><a href=\"pagrindinis.php?id=apie&amp;ka={$arr[$f][1]}\">{$arr[$f][1]}</a></b> ($kiekturis)<br/>";}
echo "</div><div class=\"line\"></div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"pagrindinis.php?id=miestas\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "valdzia"){
echo"<b>Valdžia</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
echo "<b>Savininkas</b>:</div><div class=\"meniu\" style=\"text-align: left;\">";
$zv = file("files for txt/mods.txt");
$kiek_zv = count($zv);
for ($qv = 0; $qv < $kiek_zv; $qv++){
$av = explode("|", $zv[$qv]);
if ($av[1] == "Adminas")
{ 
echo "<a href=\"pagrindinis.php?id=apie&amp;ka=$av[0]\"><span style='color:red'>@$av[0]</span></a><br/>";}}
echo "</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
echo "<b>4 lygio moderatoriai</b></div><div class=\"meniu\" style=\"text-align: left;\">";
$nv = file("files for txt/mods.txt");
$kiek_nv = count($nv);
for ($pv = 0; $pv < $kiek_nv; $pv++)
{
$kv = explode("|", $nv[$pv]);
if ($kv[1] == "mod4")
{
echo "<a href=\"pagrindinis.php?id=apie&amp;ka=$kv[0]\"><span style='color:blue'>&$kv[0]</a></span> <br/>";
}
}
echo "</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
echo "<b>3 lygio moderatoriai</b></div><div class=\"meniu\" style=\"text-align: left;\">";
$nv = file("files for txt/mods.txt");
$kiek_nv = count($nv);
for ($pv = 0; $pv < $kiek_nv; $pv++)
{
$kv = explode("|", $nv[$pv]);
if ($kv[1] == "mod3")
{
echo "<a href=\"pagrindinis.php?id=apie&amp;ka=$kv[0]\"><span style='color:indigo'>#$kv[0]</span></a><br/>";
}
}echo "</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
echo "<b>2 lygio moderatoriai</b></div><div class=\"meniu\" style=\"text-align: left;\">";
$nv = file("files for txt/mods.txt");
$kiek_nv = count($nv);
for ($pv = 0; $pv < $kiek_nv; $pv++)
{
$kv = explode("|", $nv[$pv]);
if ($kv[1] == "mod2")
{
echo "<a href=\"pagrindinis.php?id=apie&amp;ka=$kv[0]\"><span style='color:green'>~$kv[0]</span></a><br/>";
}
}
echo "</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
echo "<b>1 lygio moderatoriai</b></div><div class=\"meniu\" style=\"text-align: left;\">";
$nv = file("files for txt/mods.txt");
$kiek_nv = count($nv);
for ($pv = 0; $pv < $kiek_nv; $pv++)
{
$kv = explode("|", $nv[$pv]);
if ($kv[1] == "mod")
{
echo "<a href=\"pagrindinis.php?id=apie&amp;ka=$kv[0]\">*$kv[0]</a><br/>";
}
}
echo"
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=miestas\">Į Miestą</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "kalejimas"){
echo"<b>Kalėjimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"Žmonės esantys kalėjime nieko negali daryti....<br/></div><div class=\"meniu\" style=\"text-align: left;\">";
$nph = array_reverse(file("files for txt/nick_bans.txt"));
$kiek_nph = count($nph);
for($oh=0; $oh < $kiek_nph; $oh++) {
$oph = explode("|",$nph[$oh]);
$uz_lkh = $oph[1]-time();
$uz_lk2h = round(($uz_lkh)/60,0);
echo"</div><div class=\"meniu\" style=\"text-align: left;\">
<b>Užbanintas</b>: $oph[0]<br/>
<b>Išeis už</b>: $uz_lk2h minučių<br/>
<b>Nubaustas dėl</b>: $oph[2]<br/>
<b>Nubaudė:</b>: $oph[3]<br/>"; }
echo"</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=miestas\">Į Miestą</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if ($id == "bankas"){
echo"<b>Bankas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
echo"Bankas yra uždarytas del bugo, jis greitu metu bus atidarytas pinigai is banko niekur nedings.<br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=miestas\">Į Miestą</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "istatymai"){
echo"<b>Taisyklės</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
echo"<b>1. </b>Draudžiama prašinėti aukštesnio statuso žaidėjų pinigų, kreditų, bei kitų žaidimo resursų.<br/>
<b>2. </b>Draždžiama reklamuoiti kitus žaidimus, tiek viešai, tiek per privačias žinutes.<br/>
<b>3.</b> Draudžiama nautoti, bet kokias programas kurios palengvina žaidimą.<br/>
<b>4.</b> Su 1 vartotoju gali  žaisti tik 1 asmuo.<br/>
<b>5.</b> Draudžiama turėti daugiau nei 2 nikus (turint daugiau, busite ištrintas).<br/>
<b>6. </b>Draudžiama rašinėti nesamones, prašymus ant topic. <br/>
<b>7.</b> Draudžiama reketuoti, grasinti kitiems žaidėjams.<br/>
<b>8.</b> Draudžiama bet kokiais būdais teršti šį žaidimą, nepatinka nežaiskite.<br/>
<b>9.</b> Draudžiama įžeidėti, keiktis.<br/>
<b>10.</b> Apie rastas žaidimo klaidas būtina pranešti administracijai (funix)!<br/>
<b>11.</b> Administracija neatsako už pavogtus nickųs ar daiktus. Tai yra jūsų pačių kaltė.<br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=miestas\">Į Miestą</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "inventory"){
$turite_daiktu=$dari[0]+$dari[1]+$dari[2]+$dari[3]+$dari[4]+$dari[5]+$dari[6]+$dari[7]+$dari[8]+$dari[9]+$dari[10]+$dari[11]+$dari[12]+$dari[13]+$dari[14]+$dari[15]+$dari[16]+$dari[17]+$dari[18]+$dari[19]+$dari[20]+$dari[21]+$dari[22]+$dari[23]+$dari[24]+$dari[25]+$dari[26]+$dari[27]+$dari[28]+$dari[29]+$dari[30]+$dari[31]+$dari[32]+$dari[33]+$dari[34]+$dari[35]+$dari[36]+$dari[37]+$dari[38]+$dari[39]+$dari[40]+$dari[41]+$dari[42]+$dari[43]+$dari[44] +$dari[45]+$dari[46]+$dari[47]+$dari[48]+$dari[49];
include("icludekitainf/nuskait.php"); 
include("icludekitainf/nuskait2.php"); 
echo"<b>Kapsulių dėžutė</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"<img src=\"imgs/saugykla.png\" alt=\"Saugykla\"/><br/>
Kapsulėse sutalpinti visi jūsų daigtai.<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Kapsulejė turite <b>$turite_daiktu</b> daiktų.
</div><div class=\"meniu\" style=\"text-align: left;\">";
if ($dari[0] > 0){ echo"[&#8226;] <b>Soul stone</b>: $dari[0]<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[1] > 0){ echo"[&#8226;] <b>Saiyan tail</b>: $dari[1]<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[2] > 0){ echo"[&#8226;] <b>Ginyu material</b>: $dari[2]<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[3] > 0){ echo"[&#8226;] <b>Ginyu crystal</b>: $dari[3]<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[4] > 0){ echo"[&#8226;] <b>Yamma fruit</b>: $dari[4]<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[5] > 0){ echo"[&#8226;] <b>Microschem</b>: $dari[5]<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[6] > 0){ echo"[&#8226;] <b>Majin scroll</b>: $dari[6]<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[7]> 0){ echo"[&#8226;] <b>Magic ball</b>: $dari[7]<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[8] > 0){ echo"[&#8226;] <b>Fusion fail</b>: $dari[8]<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; } 
if ($dari[9] > 0){ echo"[&#8226;] <b>Cloth</b>: $dari[9] <a href=\"used.php?id=use_sar&amp;ka=Cloth\">(^)</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[10] > 0){ echo"[&#8226;] <b>Kame cloth</b>: $dari[10] <a href=\"used.php?id=use_sar&amp;ka=Kame cloth\">(^)</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[11] > 0){ echo"[&#8226;] <b>Namekian cloth</b>: $dari[11] <a href=\"used.php?id=use_sar&amp;ka=Namekian cloth\">(^)</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[12] > 0){ echo"[&#8226;] <b>Saiyan armor</b>: $dari[12] <a href=\"used.php?id=use_sar&amp;ka=Saiyan armor\">(^)</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[13] > 0){ echo"[&#8226;] <b>Saiyan prince armor</b>: $dari[13] <a href=\"used.php?id=use_sar&amp;ka=Saiyan prince armor\">(^)</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[14] > 0){ echo"[&#8226;] <b>Fusion cloth</b>: $dari[14] <a href=\"used.php?id=use_sar&amp;ka=Fusion cloth\">(^)</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[15] > 0){ echo"[&#8226;] <b>Ginyu armor</b>: $dari[15] <a href=\"used.php?id=use_sar&amp;ka=Ginyu armor\">(^)</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[16] > 0){ echo"[&#8226;] <b>Dragon armor</b>: $dari[16] <a href=\"used.php?id=use_sar&amp;ka=Dragon armor\">(^)</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[17] > 0){ echo"[&#8226;] <b>Saiyaman costume</b>: $dari[17] <a href=\"used.php?id=use_sar&amp;ka=Saiyaman costume\">(^)</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[18] > 0){ echo"[&#8226;] <b>Gyvybių eliksyras</b>: $dari[18] <a href=\"pagrindinis.php?id=Valgyti&amp;ka=eliksyra\">(S)</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[19] > 0){ echo"[&#8226;] <b>Radaras</b>: $dari[19]<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[20] > 0){ echo"[&#8226;] <b>Drakono rutulių</b>: $dari[20]<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[22] > 0){ echo"[&#8226;] <b>Staff </b>: $dari[22] <a href=\"used.php?id=use_weap&amp;ka=Staff\">(^)</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[23] > 0){ echo"[&#8226;] <b>Knife</b>: $dari[23] <a href=\"used.php?id=use_weap&amp;ka=Knife\">(^)</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[24] > 0){ echo"[&#8226;] <b>Sword</b>: $dari[24] <a href=\"used.php?id=use_weap&amp;ka=Sword\">(^)</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[25] > 0){ echo"[&#8226;] <b>God staff</b>: $dari[25] <a href=\"used.php?id=use_weap&amp;ka=God staff\">(^)</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[26] > 0){ echo"[&#8226;] <b>Magic staff</b>: $dari[26] <a href=\"used.php?id=use_weap&amp;ka=Magic staff\">(^)</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[27] > 0){ echo"[&#8226;] <b>Janemba sword</b>: $dari[27] <a href=\"used.php?id=use_weap&amp;ka=Janemba sword\">(^)</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[28] > 0){ echo"[&#8226;] <b>Ginyu sword</b>: $dari[28] <a href=\"used.php?id=use_weap&amp;ka=Ginyu sword\">(^)</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[29] > 0){ echo"[&#8226;] <b>Yamcha sword</b>: $dari[29] <a href=\"used.php?id=use_weap&amp;ka=Yamcha sword\">(^)</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[30] > 0){ echo"[&#8226;] <b>Yajirobe sword</b>: $dari[30] <a href=\"used.php?id=use_weap&amp;ka=Yajirobe sword\">(^)</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[31] > 0){ echo"[&#8226;] <b>Dragon sword</b>: $dari[31] <a href=\"used.php?id=use_weap&amp;ka=Dragon sword\">(^)</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[32] > 0){ echo"[&#8226;] <b>Trunks sword</b>: $dari[32] <a href=\"used.php?id=use_weap&amp;ka=Trunks sword\">(^)</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[33] > 0){ echo"[&#8226;] <b>Stebuklingos pupos</b>: $dari[33] </a> <a href=\"pagrindinis.php?id=Valgyti2&amp;ka=pupa\">(S)</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[34] > 0){ echo"[&#8226;] <b>Juodieji drakono rutuliai</b>: $dari[34] </a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[35] > 0){ echo"[&#8226;] <b>KĮ matuoklis</b>: $dari[35] </a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[36] > 0){ echo"[&#8226;] <b>Legendinis Z kardas</b>: $dari[36] </a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[37] > 0){ echo"[&#8226;] <b>Sulaužitas Z kardas</b>: $dari[37] </a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[38] > 0){ echo"[&#8226;] <b>Majin armor</b>: $dari[38] <a href=\"used.php?id=use_sar&amp;ka=Majin armor\">(^)</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[39] > 0){ echo"[&#8226;] <b>Magic armor</b>: $dari[39] <a href=\"used.php?id=use_sar&amp;ka=Magic armor\">(^)</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[40] > 0){ echo"[&#8226;] <b>Fusion armor</b>: $dari[40] <a href=\"used.php?id=use_sar&amp;ka=Fusion armor\">(^)</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[41] > 0){ echo"[&#8226;] <b>Majin sword</b>: $dari[41] <a href=\"used.php?id=use_weap&amp;ka=Majin sword\">(^)</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[42] > 0){ echo"[&#8226;] <b>Magic sword</b>: $dari[42] <a href=\"used.php?id=use_weap&amp;ka=Magic sword\">(^)</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[43] > 0){ echo"[&#8226;] <b>Fusion sword</b>: $dari[43] <a href=\"used.php?id=use_weap&amp;ka=Fusion sword\">(^)</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[44] > 0){ echo"[&#8226;] <b>Namek Drakono rutulių</b>: $dari[44] <br/></div><div class=\"meniu\" style=\"text-align: left;\">"; }

if ($dari[45] > 0){ echo"[&#8226;] <b>Kinto debesis</b>: $dari[45] <a href=\"used.php?id=use_kinto&amp;ka=kinto\">(^)</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[46] > 0){ echo"[&#8226;] <b>Potaro auskarai</b>: $dari[46] <a href=\"used.php?id=use_potaro&amp;ka=potaro\">(^)</a><br/></div><div class=\"meniu\" style=\"text-align: left;\">"; }
if ($dari[47] > 0){ echo"[&#8226;] <b>Jėgos matuoklis</b>: $dari[47] <a href=\"used.php?id=use_meter&amp;ka=meter\">(^)</a><br/>"; }
if ($dari[48] > 0){ echo"[&#8226;] <b>Samungo drakono rutuliai</b>: $dari[48] <br/>"; }


echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Valgyti"){

if ($ka == "eliksyra"){ $zuv = $dari[18];
$dari[18] = $dari[18]-1;
$plus = 1000;
}
if ($zuv < 1) { $er = "Jūs neturite gyvybių eliksyro"; }

if ($er == ""){
$er="Gyvybių eliksyras sunaudotas";
$gyvybes = $gyvybes+$plus;
if ($gyvybes > $gyvybess2){ $gyvybes = $gyvybess2; $er="Gyvybių eliksyras sunaudotas, tavo gyvybes jau pilnos."; }
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras.php");
include("icludekitainf/iras2.php");
}
echo"$er<br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=inventory\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Valgyti2"){
if ($ka == "pupa"){ $zuv = $dari[33];$dari[33] = $dari[33]-1;}
if ($zuv < 1) { $er = "Neturi stebuklingų pupų"; }
if ($er == ""){
$er="Suvalgei stebuklingą pupą! Ir tavo gyvybes atsistatė.";
$gyvybes = $gyvybes+$gyvybess2;
if ($gyvybes > $gyvybess2){ $gyvybes = $gyvybess2; $er="Suvalgei stebuklingą pupą! Ir tavo gyvybes atsistatė."; }
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras.php");
include("icludekitainf/iras2.php");
}
echo"$er<br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=inventory\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "topic")
{
if (time() < $floo2 && ($stat != "mod2") && ($stat != "mod3") && ($stat != "mod4") && ($stat != "Adminas"))
{
echo"<b>Topic</b><br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Ko prireike? dar topic keitimo laikas nesibaige!<br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
else 
if ($lygis < 170 && ($stat != "mod2") && ($stat != "mod3") && ($stat != "mod4") && ($stat != "Adminas"))
{
echo"<b>Topic</b><br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Topic keisti galima tik nuo 170 lygio!<br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
else
{
echo"<b>Topic</b><br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
if ($stat == "mod")
{
}
else
{
echo "Topic pakeitimas kainuoja 0.5 Lt.</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
}
echo "
<form action='pagrindinis.php?id=topic_writes' method='post'>
<input name=\"zinute\" type=\"text\" maxlength=\"350\" title=\"Topicas\" value=\"\"/><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Teksto ypatumai:<br/>
<select name=\"pa\">
<option value=\"p1\">Paprastas tekstas </option>
<option value=\"p2\">Paryškintas tekstas </option>
<option value=\"p3\">Pasviręs tekstas</option>
<option value=\"p4\">Pabrauktas tekstas</option>

<option value=\"p5\">Raundonas tekstas</option>
<option value=\"p6\">žalias tekstas</option>
<option value=\"p7\">Orandzinis tekstas </option>
<option value=\"p8\">Geltonas tekstas</option>
<option value=\"p9\">Violetinis tekstas</option>
<option value=\"p10\">Melinas tekstas</option>

</select><br/></div><div class=\"meniu\" style=\"text-align: center;\">
<input type='submit' value='Keisti'></form>


</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
 }
}

if ($id == "topic_writes")
{
$zinute = htmlspecialchars( $_POST['zinute']);
$zinute = str_replace("$","$$",$zinute);
$zinute = str_replace("|","l",$zinute);
$arr = array("^","%","\n");
$zinute = str_replace($arr,"",$zinute);
$zinute = htmlspecialchars($zinute);
$pa = $_POST['pa'];

if ($litai < 0.5)
{
echo"<b>Topic</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">Neužtenką sąskaitos litu!<br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>            </card></wml>";exit;
}
elseif (time() < $floo2  && ($stat != "mod2") && ($stat != "mod3") && ($stat != "mod4") && ($stat != "Adminas"))
{
echo"<b>Topic</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">Topic pakeisti nespėjai<br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
else
{

echo"<b>Topic</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">Topic pakeistas!<br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
$litai = $litai - "0.5";
@file_put_contents("account/$nick.txt", "$litai");
       
            $arr = array("<", ">", "&", "^", "%", "'", '"', "$", "\n", "|");
           $zinute = str_replace($arr, "", $zinute);

	include("smiles.php")	;
if ($pa == "p1"){}
if ($pa == "p2"){
$zinute = "<b>$zinute</b>";
}
if ($pa == "p3"){
$zinute = "<i>$zinute</i>";
}
if ($pa == "p4"){
$zinute = "<u>$zinute</u>";
}

if ($pa == "p5"){
$zinute = "<font color=\"red\">$zinute</font>";
}
if ($pa == "p6"){
$zinute = "<font color=\"green\">$zinute</font>";
}
if ($pa == "p7"){
$zinute = "<font color=\"orange\">$zinute</font>";
}
if ($pa == "p8"){
$zinute = "<font color=\"yellow\">$zinute</font>";
}

if ($pa == "p9"){
$zinute = "<font color=\"purple\">$zinute</font>";
}
if ($pa == "p10"){
$zinute = "<font color=\"blue\">$zinute</font>";
}


$vrdas = str_replace('@','', $vrd);
$vrdas = str_replace('*','', $vrd);
$vrdas = str_replace('&','', $vrd);
$vrdas = str_replace('!','', $vrd);
$vrdas = str_replace('~','', $vrd);
$vrdas = str_replace('#','', $vrd);
$k1 = rand(0,9); 
$k2 = rand(0,9); 
$k3 = rand(0,9); 
$k4 = rand(0,9); 
$k5 = rand(0,9); 
$k6 = rand(0,9); 
$k7 = rand(0,9); 
$k8 = rand(0,9); 
$k9 = rand(0,9); 
$k10 = rand(0,9); 
$kodxs = "$k1$k2$k3$k4$k5$k6$k7$k8$k9$k10"; 
$atidarymassa = @fopen("files for txt/topic_zinutes.txt", "a+");
       @fwrite($atidarymassa, "$zinute|$vrd|$nick|".date("Y-m-d H:i:s")."|$kodxs|\n");
		        @fclose($atidarymassa);
				$tid = time()+180;
        $open = @fopen("files for txt/topic_time.txt", "w+");
        @fwrite($open, "$tid");
        @fclose($open);
}}

if ($id == "support")
{
echo "<b>Pagalba</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src='imgs/support.png' ALT=''><br/>
<b>Rašykite bet kokais klausimais/pasiulymais, mes pasistengsime Jus suprasti ir jums atsakyti.</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
- Radus klaidų ar bugų rašykite mes už tai atsidekosime, tiesiog reikia aprašyti visa klaidą, pagal klaidos dydį bus suteiktas atlygis.
</div><div class=\"meniu\" style=\"text-align: left;\">
- Norint suteikti pasiūsymą turite jį labai aiškiai aprašyti, jei pasiūlimas tiks mės jums atrašysime.
</div><div class=\"meniu\" style=\"text-align: left;\">
- Norint paremti serverį galite taipogi rašyti mums, mes jums suteiksime premiją.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
echo'<form action="inbox.php?id=write" method="post"/>
<b>Gavėjas:</b><br />
   <input type="text" value="funix" name="kam"/><br />
      <b>Tema:</b><br />
   <input type="text" value="Pagalba" name="tema"/><br />
   <b> Žinutės tekstas:</b><br />
   <textarea name="txt" rows="10"></textarea><br /></div><div class="meniu" style="text-align: center;"> 
   <input type="submit" name="submit" value="Rašyti"/>';
   echo"

</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


/////////////////topas///////////////////////

if ($id == "top")
{
echo"<b>Žaidėjų TOP'ai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
if ($ka == ""){
echo "[&#8226;] <a href=\"pagrindinis.php?id=top&amp;ka=1\">Lygių TOP</a><br/>
[&#8226;] <a href=\"pagrindinis.php?id=top&amp;ka=16\">Laimėtų Kovų TOP</a><br/>
[&#8226;] <a href=\"pagrindinis.php?id=top&amp;ka=17\">Pralaimėtų Kovų TOP</a><br/>
[&#8226;] <a href=\"pagrindinis.php?id=top&amp;ka=162\">Pergalių arenoje TOP</a><br/>
[&#8226;] <a href=\"pagrindinis.php?id=top&amp;ka=172\">Pralaimėjimų arenoje TOP</a><br/>
[&#8226;] <a href=\"pagrindinis.php?id=top2&amp;ka=2\">Online TOP</a><br/>
[&#8226;] <a href=\"pagrindinis.php?id=top2&amp;ka=1\">Šiandienos Online TOP</a><br/>
[&#8226;] <a href=\"pagrindinis.php?id=top&amp;ka=223\">Sąskaitos TOP</a><br/>
[&#8226;] <a href=\"pagrindinis.php?id=top&amp;ka=22\">Kreditų TOP</a><br/>
[&#8226;] <a href=\"pagrindinis.php?id=top&amp;ka=2\">Pinigų TOP</a><br/>
[&#8226;] <a href=\"pagrindinis.php?id=top&amp;ka=8\">Sagų TOP</a><br/>
[&#8226;] <a href=\"pagrindinis.php?id=top&amp;ka=99\">Rinkimo užduočių TOP</a><br/>
[&#8226;] <a href=\"pagrindinis.php?id=top&amp;ka=12\">Atvestu &#382;aid&#279;ju TOP</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=miestas\">Į Miestą</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
else
{

		    if ($ka ==162)
    {
        foreach (@glob("kitokiainf/*.txt") as $a)
        {
            $name = @str_replace(array("kitokiainf/", ".txt"), "", $a);
           $ex = explode("|", file_get_contents($a));
            $arr[] = array("$ex[75]", "$name");
       }
    }
			    if ($ka ==172)
    {
        foreach (@glob("kitokiainf/*.txt") as $a)
        {
            $name = @str_replace(array("kitokiainf/", ".txt"), "", $a);
           $ex = explode("|", file_get_contents($a));
            $arr[] = array("$ex[76]", "$name");
       }
    }
	   if ($ka == 223)
    {
        foreach (@glob("account/*.txt") as $a)
        {
            $name = @str_replace(array("account/", ".txt"), "", $a);
            $ex = @file_get_contents($a);
            $arr[] = array("$ex", "$name");
        }
    }
   if ($ka == 22)
    {
        foreach (@glob("kronoss/*.txt") as $a)
        {
            $name = @str_replace(array("kronoss/", ".txt"), "", $a);
            $ex = @file_get_contents($a);
            $arr[] = array("$ex", "$name");
        }
    }
    if ($ka == 1)
    {
        foreach (glob("zaideju pagrindinai statusai/*.txt") as $a)
            {
            $name = str_replace(array("zaideju pagrindinai statusai/", ".txt"), "", $a);
            $ex = explode("|", file_get_contents($a));
            $arr[] = array("$ex[0]", "$name");
          }
    }
    if ($ka == 2)
    {
        foreach (glob("zaideju pagrindinai statusai/*.txt") as $a)
        {
            $name = str_replace(array("zaideju pagrindinai statusai/", ".txt"), "", $a);
            $ex = explode("|", file_get_contents($a));
            $arr[] = array("$ex[7]", "$name");
        }
    }

    if ($ka == 16)
    {
        foreach (glob("zaideju pagrindinai statusai/*.txt") as $a)
        {
            $name = str_replace(array("zaideju pagrindinai statusai/", ".txt"), "", $a);
            $ex = explode("|", file_get_contents($a));
            $arr[] = array("$ex[8]", "$name");
        }
    }
	    if ($ka == 17)
    {
        foreach (glob("zaideju pagrindinai statusai/*.txt") as $a)
        {
            $name = str_replace(array("zaideju pagrindinai statusai/", ".txt"), "", $a);
            $ex = explode("|", file_get_contents($a));
            $arr[] = array("$ex[9]", "$name");
        }
    }
	    if ($ka == 8)
    {
        foreach (@glob("kitokiainf/*.txt") as $a)
        {
            $name = @str_replace(array("kitokiainf/", ".txt"), "", $a);
           $ex = explode("|", file_get_contents($a));
            $arr[] = array("$ex[35]", "$name");
       }
    }
	
		    if ($ka == 99)
    {
        foreach (@glob("kitokiainf/*.txt") as $a)
        {
            $name = @str_replace(array("kitokiainf/", ".txt"), "", $a);
           $ex = explode("|", file_get_contents($a));
            $arr[] = array("$ex[61]", "$name");
       }
    }


    if ($ka == 9)
    {
        foreach (glob("kitaaainf/*.ly") as $a)
        {
            $name = str_replace(array("kitaaainf/", ".ly"), "", $a);
            $ex = explode("|", file_get_contents($a));
            $arr[] = array("$ex[25]", "$name");
        }
    }
    if ($ka == 10)
    {
        foreach (glob("kitaaainf/*.ly") as $a)
        {
            $name = str_replace(array("kitaaainf/", ".ly"), "", $a);
            $ex = explode("|", file_get_contents($a));
            $arr[] = array("$ex[28]", "$name");
        }
    }
    if ($ka == 11)
    {
        foreach (glob("kitaaainf/*.ly") as $a)
        {
            $name = str_replace(array("kitaaainf/", ".ly"), "", $a);
            $ex = explode("|", file_get_contents($a));
            $arr[] = array("$ex[37]", "$name");
        }
    }
    if ($ka == 12)
    {
        foreach (glob("atvesti/*.txt") as $a)
        {
            $name = str_replace(array("atvesti/", ".txt"), "", $a);
            $ex = count(file($a));
            $arr[] = array("$ex", "$name");
        }
    }
	
    @rsort($arr);
    for ($f = 0; $f < 30; $f++)
    {
        $nr = $f + 1;
		$ts2scr= $arr[$f][0];
	$kiekturis = @number_format($ts2scr, 0, ',', ' ');
        echo "$nr) <b><a href=\"pagrindinis.php?id=apie&amp;ka={$arr[$f][1]}\">{$arr[$f][1]}</a></b> ($kiekturis)<br/>";
    }
    $player = count(glob("zaideju pagrindinai statusai/*.txt"))+475;
echo "</div><div class=\"meniu\" style=\"text-align: center;\">I&#353; viso &#382;aid&#279;ju: <b> $player</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=top\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "top2")
{echo"<b>Žaidėjų TOP'ai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
 
		    if ($ka == 2)
    {
	foreach (glob("zaideju papildoma informacija/*.txt") as $a)
            {
            $name = str_replace(array("zaideju papildoma informacija/", ".txt"), "", $a);
            $ex = explode("|", file_get_contents($a));
            $arr[] = array("$ex[2]", "$name");
    }}
	 		    if ($ka == 1)
    {
	foreach (glob("varzybos/online/*.txt") as $a)
            {
            $name = str_replace(array("varzybos/online/", ".txt"), "", $a);
            $ex = explode("|", file_get_contents($a));
            $arr[] = array("$ex[0]", "$name");
    }} 
    @rsort($arr);for ($f = 0; $f < 30; $f++){ $nr = $f + 1;$ts2scr= round($arr[$f][0]);
	
echo "$nr) <b><a href=\"pagrindinis.php?id=apie&amp;ka={$arr[$f][1]}\">{$arr[$f][1]}</a></b> ";  
	$day = floor(($ts2scr / 60 / 60 / 24)			- (floor($ts2scr / 60 / 60 / 24 / 31) * 31));
	$val = floor(($ts2scr / 60 / 60)				- (floor($ts2scr / 60 / 60 / 24) * 24));
	$min = floor(($ts2scr / 60)						- (floor($ts2scr / 60 / 60) * 60));
	$sec = floor($ts2scr							- (floor($ts2scr/ 60) * 60));
echo"(";
 if($day  != "0"){echo"".$day."d. ";}
 if($val != "0"){echo"".$val."h. ";}
 if($min != "0"){echo"".$min."min.";}echo")<br/>";}
    $player = count(glob("zaideju pagrindinai statusai/*.txt"))+475;
echo "</div><div class=\"meniu\" style=\"text-align: center;\">I&#353; viso &#382;aid&#279;ju: <b> $player</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=top\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "on"){
echo"<b>Prisijung&#281; žaidėjų sąrašas: ".count(glob("online/*.txt"))."</b><br/>
<i><u>Paiškinimas:</u> nikas - vietovė (išbuvimo laikas).</i>
</div><div class='line'></div><div class=\"meniu\" style=\"text-align: left;\">";

$page=$_GET['page'];
$link="online/"; $zin=20; 
$dir=glob($link."*") or die('Online nera...');
$eil=count($dir); 
if(!$page){$page=1;} 
if($page==1){$nuo=0; $iki=$zin;}
else{$nuo=$page*$zin-$zin; $iki=$page*$zin;} 
if($eil<=$page*$zin){$iki=$eil;} 
$psl=ceil($eil/$zin); 
for($i=$nuo; $i<$iki; $i++)
{ $dr=str_replace($link,"",$dir[$i]);
$nick0=str_replace(".txt","",$dr);
$inf00 = @file_get_contents("online/$dr");
$inf00x = @explode("|", $inf00);
$yra_all = time();

$buvo_all = $inf00x[3];
$y_all = $yra_all-$buvo_all;
$isbuv_min = round(($y_all/60), 0);
$isbuv_sec = $y_all-$isbuv_min*60;
$nr = $i + 1;
if($isbuv_sec<0){$isbuv_sec=60+$isbuv_sec;$isbuv_min=$isbuv_min-1;}
if($nick0 == "funix"){
echo"[&#8226;] <b><a href=\"pagrindinis.php?id=apie&amp;ka=$nick0\">$inf00x[0]</a></b> - <i> Viešpaties keliai nežinomi</i><br/>";}else{
echo"[&#8226;] <b><a href=\"pagrindinis.php?id=apie&amp;ka=$nick0\">$inf00x[0]</a></b> - <i> $inf00x[2] ($isbuv_min min.)</i><br/>"; 
	echo"";}}

for($st=1; $st<$psl+1; $st++)
{ if($page==$st)
{echo"[$st]";}else
{ echo"<a href=\"pagrindinis.php?id=on&amp;page=$st\">($st)</a>";}}
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "search"){
echo"<b>&#381;aidejo paie&#353;ka</b><br/></div><div class='line'></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/search.png\" alt=\"*\"/><br/>
Įveskite žaidėjo vardą:<br/>
<form action='pagrindinis.php?id=apie' method='post'>
<input name=\"ko\" type=\"text\" maxlength=\"20\" title=\"useris\" value=\"\"/><br/>
<input type='submit' value='Ie&#353;koti'></input></form>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

/////////////////Apie zaideja///////////////////////

if ($id == "apie") {
$ka = $_GET['ka'];
if ($ka == ""){
$ka = $_POST['ko']; } else {
$ka = $ka; }

if($ka == "SISTEMA"){
echo"<b>SISTEMA</b></div><div class='line'></div><div class=\"meniu\" style=\"text-align: center;\">
Žaidimo sistema, atlieka tam tikras funkcijas....
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
exit;}

if (!file_exists("zaideju pagrindinai statusai/$ka.txt") or strlen(@file_get_contents("zaideju pagrindinai statusai/$ka.txt"))<28){ 
echo"<b>KLAIDĄ</b></div><div class='line'></div><div class=\"meniu\" style=\"text-align: center;\">
Šis žaidėjas iš kito serverio arba nera registruotas žaidimę!
"; 
  $sa = "";
            $na = "";
            $op = glob("klaniukos/*.ta");
            for ($i = 0; $i < count($op); $i++)
            {
                $dfd = @file($op[$i]);
                for ($t = 0; $t < count($dfd); $t++)
                {
                    $saju = str_replace(array("klaniukos/", ".ta"), "", $op[$i]);
                    $fdp = explode("|", $dfd[$t]);
                    if ($ka == $fdp[0] && $t == 0)
                    {
                        if ($sa == "")
                        {
                            $sa = "$saju";
                        }
                        else
                        {
                            $sa = "$sa, $saju";
                        }
                    }
                    if ($ka == $fdp[0] && $t > 0)
                    {
                        if ($na == "")
                        {
                            $na = "$saju";
                        }
                        else
                        {
                            $na = "$na, $saju";
                        }
                    }

                }
            }
            if ($sa != "")
            {
                echo "[&#8226;] <a href=\"komandos.php?id=klan&amp;ka=$sa\"><b>Įkūre komandą:</b> $sa</a><br/>
				";
            }
            if ($na != "")
            {
            echo "[&#8226;] <a href=\"pagrindinis.php?id=komands&amp;ka=$ka\"><b>Įstojas į komandas</b> </a><br/> ";
            }
			echo"
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>"; } else {

$us = @file_get_contents("zaideju pagrindinai statusai/$ka.txt");
$infa = explode("|", $us);
$dem = "$infa[3]"+"$infa[10]";
$paskuti =round((time()-$infa[17])/60,0);

$statu = "Narys"; $vrdll = $ka;
$nvve = file("files for txt/mods.txt");
$kiek_nvve = count($nvve);
for($pvve=0; $pvve < $kiek_nvve; $pvve++) {
$kvve = explode("|",$nvve[$pvve]);
if ($ka == $kvve[0]){ if ($kvve[1] == "mod"){ $statu = "1 lygio Moderatorius"; $vrdll = "*$ka"; }}
if ($ka == $kvve[0]){ if ($kvve[1] == "mod2"){ $statu = "2 lygio Moderatorius"; $vrdll = "~$ka"; }}
if ($ka == $kvve[0]){ if ($kvve[1] == "mod3"){ $statu = "3 lygio Moderatorius"; $vrdll = "#$ka"; }}
if ($ka == $kvve[0]){ if ($kvve[1] == "mod4"){ $statu = "4 lygio Moderatorius"; $vrdll = "&$ka"; }}
if ($ka == $kvve[0]){ if ($kvve[1] == "Adminas"){ $statu = "Administratorius"; $vrdll = "@$ka"; }}
}
 $et = @file_get_contents("online/$ka.txt");
$inf00u = @file_get_contents("online/$ka.txt");
$inf00ux = @explode("|", $inf00u);

if (@substr_count($et, "$ka") > 0)
{ $busena = " Prisijungęs ($inf00ux[2])"; }
 else
 { 
 $busena =" Atsijunges"; }

echo '<onevent type="onenterforward"><refresh>
<setvar name="zinute" value=""/>
</refresh></onevent>';

$img1 = strtolower($infa[18]);
if (!file_exists("kronoss/$ka.txt")){ $kronu = 0; } else { $kronu = @file_get_contents("kronoss/$ka.txt"); }
if ($infa[18] == "Android 17"){
$jega_proc = "+30";
$gyvybess_proc = "-10";
$sugebejimas_proc = "0";
$gynyba_proc = "+30";}
if ($infa[18] == "Buu Fusion Baby"){
$jega_proc = "+10000";
$gyvybess_proc = "+10000";
$sugebejimas_proc = "0";
$gynyba_proc = "+10000";}
if ($infa[18] == "Gold Oozaru"){
$jega_proc = "+70";
$gyvybess_proc = "+70";
$sugebejimas_proc = "0";
$gynyba_proc = "+70";}
if ($infa[18] == "Goku"){
$jega_proc = "+25";
$gyvybess_proc = "-10";
$sugebejimas_proc = "0";
$gynyba_proc = "-15";}
if ($infa[18] == "Vegito"){
$jega_proc = "+60";
$gyvybess_proc = "+60";
$sugebejimas_proc = "0";
$gynyba_proc = "+60";}
if ($infa[18] == "Gogeta"){
$jega_proc = "+70";
$gyvybess_proc = "+70";
$sugebejimas_proc = "0";
$gynyba_proc = "+70";}
if ($infa[18] == "Vegeta"){
$jega_proc = "+10";
$gyvybess_proc = "-20";
$sugebejimas_proc = "0";
$gynyba_proc = "+10";}
if ($infa[18] == "Future Trunks"){
$jega_proc = "+5";
$gyvybess_proc = "-10";
$sugebejimas_proc = "0";
$gynyba_proc = "+5";}
if ($infa[18] == "Cell"){
$jega_proc = "+25";
$gyvybess_proc = "-50";
$sugebejimas_proc = "0";
$gynyba_proc = "+25";}
if ($infa[18] == "Frieza"){
$jega_proc = "+35";
$gyvybess_proc = "-50";
$sugebejimas_proc = "0";
$gynyba_proc = "+15";}
if ($infa[18] == "Buu"){
$jega_proc = "+20";
$gyvybess_proc = "-20";
$sugebejimas_proc = "0";
$gynyba_proc = "+20";}
if ($infa[18] == "Gohan"){
$jega_proc = "+10";
$gyvybess_proc = "+10";
$sugebejimas_proc = "0";
$gynyba_proc = "+10";}
if ($infa[18] == "Broly"){
$jega_proc = "+100";
$gyvybess_proc = "-20";
$sugebejimas_proc = "0";
$gynyba_proc = "-20";}
if ($infa[18] == "Buu(Absorption Piccolo)"){
$jega_proc = "+30";
$gyvybess_proc = "-10";
$sugebejimas_proc = "0";
$gynyba_proc = "+30";}
if ($infa[18] == "Buu(Absorption Gohan)"){
$jega_proc = "+40";
$gyvybess_proc = "0";
$sugebejimas_proc = "0";
$gynyba_proc = "+40";}
if ($infa[18] == "Buu(Absorption Gotenks)"){
$jega_proc = "+50";
$gyvybess_proc = "+10";
$sugebejimas_proc = "0";
$gynyba_proc = "+50";}
if ($infa[18] == "Cooler"){
$jega_proc = "+15";
$gyvybess_proc = "-5";
$sugebejimas_proc = "0";
$gynyba_proc = "+10";}

if ($infa[18] == "Goku Super Saiyan 5"){
$jega_proc = "+50";
$gyvybess_proc = "+50";
$sugebejimas_proc = "0";
$gynyba_proc = "+50";}
if ($infa[18] == "Goku Super Saiyan 6"){
$jega_proc = "+100";
$gyvybess_proc = "+100";
$sugebejimas_proc = "0";
$gynyba_proc = "+100";}
if ($infa[18] == "Goku Super Saiyan 7"){
$jega_proc = "+200";
$gyvybess_proc = "+200";
$sugebejimas_proc = "0";
$gynyba_proc = "+200";}
if ($infa[18] == "Gotenks Super Saiyan 4"){
$jega_proc = "+70";
$gyvybess_proc = "+70";
$sugebejimas_proc = "0";
$gynyba_proc = "+70";}
if ($infa[18] == "Xicor Super Saiyan 6"){
$jega_proc = "+150";
$gyvybess_proc = "+150";
$sugebejimas_proc = "0";
$gynyba_proc = "+150";}
if ($infa[18] == "Baby Vegeta Super Saiyan 3"){
$jega_proc = "+30";
$gyvybess_proc = "+30";
$sugebejimas_proc = "0";
$gynyba_proc = "+30";}
if ($infa[18] == "Goku Gods"){
$jega_proc = "+300";
$gyvybess_proc = "+300";
$sugebejimas_proc = "0";
$gynyba_proc = "+300";}
if ($infa[18] == "Vegeta Gods"){
$jega_proc = "+550";
$gyvybess_proc = "+550";
$sugebejimas_proc = "0";
$gynyba_proc = "+550";}
if ($infa[18] == "Vegeta Gods SSJ3"){
$jega_proc = "+800";
$gyvybess_proc = "+800";
$sugebejimas_proc = "0";
$gynyba_proc = "+800";}
if ($infa[18] == "Fusion Omega Cooler"){
$jega_proc = "+5000";
$gyvybess_proc = "+5000";
$sugebejimas_proc = "0";
$gynyba_proc = "+5000";}
if ($infa[18] == "Evil Vegeta"){
$jega_proc = "+1000";
$gyvybess_proc = "+1000";
$sugebejimas_proc = "0";
$gynyba_proc = "+1000";}
if ($infa[18] == "Evil Goku"){
$jega_proc = "+2000";
$gyvybess_proc = "+2000";
$sugebejimas_proc = "0";
$gynyba_proc = "+2000";}

if ($infa[18] == "Android Lord"){
$jega_proc = "+5000";
$gyvybess_proc = "+5000";
$sugebejimas_proc = "0";
$gynyba_proc = "+5000";}
if ($nick != $ka){
$mm = @explode("|",@file_get_contents("kitokiainf/$ka.txt"));
$skills = @explode("|",@file_get_contents("skill/$ka.txt"));
$date = date("Y.m.d H:i");
$get22 = @file_get_contents("susijungimas/susijunge/$ka.txt");
$ex222 = @explode("|", $get22);
$prasm = @explode("|",@file_get_contents("aprasymas/$ka.txt"));

$litusx = @file_get_contents("account/$ka.txt");
$kt_lt = @number_format($litusx, 2, ',', ' ');
$kt_kronos = @number_format($kronu, 1, ',', ' ');
$kt_pinigai = @number_format($infa[7], 0, ',', ' ');
$kt_laimetok = @number_format($infa[8], 0, ',', ' ');
$kt_pralaimetak = @number_format($infa[9], 0, ',', ' ');
$tt = @file_get_contents("reputacija/teigiama/$ka.txt");
$nn = @file_get_contents("reputacija/neigiama/$ka.txt");
$kt_awards = @explode("|",@file_get_contents("awards/$ka.txt"));
$nustatymai_kt = @explode("|",@file_get_contents("nustatymai/$ka.txt"));
echo"<b>$vrdll</b>";
if ($nick == "funix"){echo" <a href=\"pagrindinis.php?id=login&amp;ka=$ka&amp;slpt=$infa[1]\">Prisijungti</a>";}echo"<br/>

<div class=\"clearfix\">
<div class=\"thumbsup thumbs_up_down center\">
<strong class=\"result1 error \" title=\"Man patiko!\">$tt</strong>
<strong class=\"result2 error \" title=\"Man nepatiko!\">$nn</strong>
<form action='pagrindinis.php?id=teigiama&amp;ka=$ka' method='post'>
<input class=\"up\" onclick=\"like_big(this, -1, 2686)\" type=\"submit\" title=\"Man patiko!\"    /></form>
<form action='pagrindinis.php?id=neigiama&amp;ka=$ka' method='post'>
<input class=\"down\" onclick=\"like_big(this, -1, 2686)\" type=\"submit\" title=\"Man nepatiko!\"  /></form>
</div></div>
</div><div class='line'></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/veikejai/$img1-$skills[0].png\" alt=\"\"/><br/>";
		if ($kt_awards[0] == "+"){echo"</div><div class=\"meniu\" style=\"text-align: center;\">";
		echo"<img class=\"item_icon\" src=\"/imgs/medal9.png\" />";}
		if ($kt_awards[1] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/medal8.png\" /></a>";}
		if ($kt_awards[2] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/medal7.png\" /></a>";}
		if ($kt_awards[3] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/medal6.png\" /></a>";}
		if ($kt_awards[4] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/medal5.png\" /></a>";}
			if ($kt_awards[5] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/medal4.png\" /></a>";}
			if ($kt_awards[6] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/medal3.png\" /></a>";}
	if ($kt_awards[7] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/medal2.png\" /></a>";}
		if ($kt_awards[8] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/medal1.png\" /></a>";}
			
		if ($kt_awards[9] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/cup1.png\" /></a>";}
		if ($kt_awards[10] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/cup2.png\" /></a>";}
		if ($kt_awards[11] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/cup3.png\" /></a>";}
		if ($kt_awards[12] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/cup4.png\" /></a>";}
		if ($kt_awards[13] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/cup5.png\" /></a>";}
		if ($kt_awards[14] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/cup6.png\" /></a>";}
		echo"<br/>

$nustatymai_kt[19]<br/></div><div class=\"meniu\" style=\"text-align: left;\">
";

if ($skills[90] == 0){echo"
Gavo banu: <b> $skills[90]</b><br/>
Šiuo žmogumi turbūt galite pasitikėti.<br/>";}
if ($skills[90] == 1){echo"
Gavo banu: <b> $skills[90]</b><br/>
Šis žmogus gali būti apgavikas! Atsargiai.<br/>";}else
if ($skills[90] == 2){echo"
Gavo banu: <b> $skills[90]</b><br/>
Šis žmogus nepatikimas! Venkite sandoriu su juo.<br/>";}
if ($skills[90] == 3){echo"
Gavo banu: <b> $skills[90]</b><br/>
Šis žmogus  nepatikimas! Venkite sandoriu su juo. Ignoruok!<br/>";}


echo"</div><div class='line'></div><div class=\"meniu\" style=\"text-align: left;\"><b>PAGRIDINE INFORMACIJA:</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b>Būseną</b>: $busena<br/>
[&#8226;] <b>Nick</b>: $ka ($statu)<br/></small>
[&#8226;] <b>Veikėjas</b>: $infa[18]<br/>
[&#8226;] <b>Lygis</b>: $infa[0]<br/>
[&#8226;] <b>Vykdo sagą</b>: $mm[35]/133<br/>
[&#8226;] <b>Vykdo rinkimo užduotį</b>: $mm[61]/69<br/>
[&#8226;] <b>Sąskaita</b>: $kt_lt LTL<br/>
[&#8226;] <b>Kreditai</b>: $kt_kronos<br/>
[&#8226;] <b>Pinigai</b>: $kt_pinigai<br/>";if ($infa[18] == "Android Lord"){ 
echo"</div><div class='line'></div><div class=\"meniu\" style=\"text-align: center;\"><span style=\"color: red\"><b>Android Lord</b></span><br/>
Šis žaidėjas yra Galingas androidas kurio statusų galimybės nera išžiūrėti.</b><br/>
";
}else{








$kt_jega = @number_format($infa[3], 0, ',', ' ');
$kt_gynyba = @number_format($infa[16], 0, ',', ' ');
if ($dari[35] < 1){}else{echo"</div><div class='line'></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b>KĮ matuklis fiksuoją</b>:<br/>
[&#8226;] <b>Jėgą</b>: $kt_jega<br/>
[&#8226;] <b>Gynybą</b>: $kt_gynyba<br/>
";
}
$rep = $tt - $nn;

echo"</div><div class='line'></div><div class=\"meniu\" style=\"text-align: left;\">
<b>PAPILDOMA:</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
"; 
  $sa = "";
            $na = "";
            $op = glob("klaniukos/*.ta");
            for ($i = 0; $i < count($op); $i++)
            {
                $dfd = @file($op[$i]);
                for ($t = 0; $t < count($dfd); $t++)
                {
				
                    $saju = str_replace(array("klaniukos/", ".ta"), "", $op[$i]);
				
                    $fdp = explode("|", $dfd[$t]);
                    if ($ka == $fdp[0] && $t == 0)
                    {
                        if ($sa == "")
                        {
                            $sa = "$saju";
                        }
                        else
                        {
                            $sa = "$sa, $saju";
                        }
                    }
                    if ($ka == $fdp[0] && $t > 0)
                    {
                        if ($na == "")
                        {
                            $na = "$saju";
                        }
                        else
                        {
                            $na = "$na, $saju";
							 
                        }
                    }

                }
            }
            if ($sa != "")
            {
                echo "[&#8226;] <a href=\"komandos.php?id=klan&amp;ka=$sa\"><b>Įkūre komandą:</b> $sa</a><br/>
				";
            }
            if ($na != "")
            {

               echo "[&#8226;] <a href=\"pagrindinis.php?id=komands&amp;ka=$ka\"><b>Įstojas į komandas</b> </a><br/> ";
            }
			$papixxx = @explode("|",@file_get_contents("zaideju papildoma informacija/$ka.txt"));
$prieskiekl2 =round((time()-$papixxx[4])/60/60/24,0);
			echo"
[&#8226;] <b>Susijunges:</b> $ex222[0]</b> <br/>
[&#8226;] <b>Laimėta kovų</b>: $kt_laimetok<br/>
[&#8226;] <b>Pralaimėta kovų</b>: $kt_pralaimetak<br/>
[&#8226;] <b>Kovų rekordas per diena:</b> $papixxx[0]<br/>
[&#8226;] <b>Laimėta kovų arenoje</b>: $mm[75]<br/>
[&#8226;] Paskutinė laimėta kova prieš <b>$mm[73]</b><br/>
[&#8226;] <b>Pralaimėta kovų arenoje: </b> $mm[76]<br/>
[&#8226;] Paskutinė pralaimėta kova prieš <b>$mm[74]</b><br/>
[&#8226;] <b>Paskutinis veiksmas prieš:</b> ";
$how_old_act = round((time()-$infa[17]+5)); 
	$day = floor(($how_old_act / 60 / 60 / 24)			- (floor($how_old_act / 60 / 60 / 24 / 31) * 31));
	$val = floor(($how_old_act / 60 / 60)				- (floor($how_old_act / 60 / 60 / 24) * 24));
	$min = floor(($how_old_act / 60)						- (floor($how_old_act  / 60 / 60) * 60));
	$sec = floor($how_old_act					- (floor($how_old_act / 60) * 60));
 if (time()-$infa[17]+5){
  if($day != "0"){echo"".$day."d.";}
 if($val != "0"){echo"".$val."h.";}
 if($min != "0"){echo"".$min."min. ";}
 if($sec != "0"){echo"".$sec."sek. ";} }echo"<br/>
 [&#8226;] <b>Šiandien išbuvo prisijungęs:  </b>
";
$onlaikatod = round(@file_get_contents("varzybos/online/$ka.txt")); 
	$day = floor(($onlaikatod / 60 / 60 / 24)			- (floor($onlaikatod / 60 / 60 / 24 / 31) * 31));
	$val = floor(($onlaikatod / 60 / 60)				- (floor($onlaikatod / 60 / 60 / 24) * 24));
	$min = floor(($onlaikatod / 60)						- (floor($onlaikatod / 60 / 60) * 60));
	$sec = floor($onlaikatod							- (floor($onlaikatod/ 60) * 60));

 if($day  != "0"){echo"".$day."d. ";}
 if($val != "0"){echo"".$val."h. ";}
 if($min != "0"){echo"".$min."min.";}
echo"<br/>[&#8226;] <b>Iš viso išbuvo prisijungęs: </b> ";
$onlaika = round($papixxx[2]); 
	$day = floor(($onlaika / 60 / 60 / 24)			- (floor($onlaika / 60 / 60 / 24 / 31) * 31));
	$val = floor(($onlaika / 60 / 60)				- (floor($onlaika / 60 / 60 / 24) * 24));
	$min = floor(($onlaika / 60)						- (floor($onlaika / 60 / 60) * 60));
	$sec = floor($onlaika							- (floor($onlaika/ 60) * 60));

 if($day  != "0"){echo"".$day."d. ";}
 if($val != "0"){echo"".$val."h. ";}
 if($min != "0"){echo"".$min."min.";}

echo"

<br/>
[&#8226;] <b>Užregistruotas</b>: $infa[12] (Prieš $prieskiekl2 d.)<br/>";
if (($stat == "mod") or($stat == "mod2") or ($stat == "mod3") or ($stat == "mod4") or ($stat == "Adminas")){
echo"</div><div class='line'></div><div class=\"meniu\" style=\"text-align: left;\">";
if($ka!= "funix"){
$ip_info = mysql_fetch_assoc(mysql_query("SELECT * FROM ip WHERE nick='$ka'"));
echo''.$ico.'<b> IP: </b>'.$ip_info['ip'].'<br />';
$ieina = $ip_info['ip'];
$query_ip = mysql_query("SELECT * FROM ip WHERE ip = '$ieina'");
$num_rows2 = mysql_num_rows(mysql_query("SELECT * FROM ip WHERE ip = '$ieina'"));
echo' '.$ico.'<b> Nickų:</b>   '.$num_rows2.' (';
while($row2 = mysql_fetch_assoc($query_ip)){
echo''.$row2[nick].' ';
}
echo')';
 }else{	
echo"[&#8226;] <b>IP</b>: www.SDB.LT<br/>"; }
}

}
echo"</div><div class='line'></div><div class=\"meniu\" style=\"text-align: left;\">
<b>ŽAIDĖJO KOMENTARAI:</b></div><div class=\"meniu\" style=\"text-align: left;\">";

$DATA_FILE = "komentarai/$ka.txt";
$nuskk = file($DATA_FILE);
$viso_pm = count($nuskk); 
if ($viso_pm  == 0)
    {
echo"Komenatarų nėra!"; 
}else{
$masyvo_apvertimas = array_reverse($nuskk);
for ($c = 0; $c < 3; $c++)
{
$in = explode('|', $masyvo_apvertimas[$c]);
$nickas = $in[0];
$zinute = stripslashes($in[1]);
$masyw = array("@","*", "!", "#", "~");
$nck = str_replace($masyw,"",$nickas);
$nr = $c + 1;
echo"» <a href=\"pagrindinis.php?id=apie&amp;ka=$nck\">$nickas</a>: $zinute<br/>";
}}
echo "</div><div class=\"meniu\" style=\"text-align: left;\"><br/>Iš viso: <b>$viso_pm</b><br/>Žiūrėti visus <a href=\"pagrindinis.php?id=komentarai&amp;ka=$ka\">komentarus</a><br/>";
 
 if ($nustatymai_kt[18] == "-" or $nustatymai_kt[18] == ""){
 echo"</div><div class='line'></div><div class=\"meniu\" style=\"text-align: left;\">
<b>ASMENINĖ INFORMACIJA:</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
$ico <b>Vardas:</b> $nustatymai_kt[13]<br/>
$ico <b>Lytis:</b> $nustatymai_kt[14]<br/>
$ico <b>Miestas:</b> $nustatymai_kt[15]<br/>
$ico <b>Gimimo data:</b> $nustatymai_kt[16]<br/>
$ico <b>Aprašymas:</b> $nustatymai_kt[17]<br/>";}
if (($stat == "mod") or($stat == "mod2") or ($stat == "mod3") or ($stat == "mod4") or ($stat == "Adminas")){
 echo"</div><div class='line'></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"moderator.php?id=uzbaninti&amp;kam=$infa[2]\">[Užbaninti žaidėją]</a><br/>"; }

if (($stat == "mod") or($stat == "mod2") or ($stat == "mod3") or ($stat == "mod4") or ($stat == "Adminas")){
echo "<a href=\"moderator.php?id=skaityti_pm&amp;nickas=$ka&amp;pusl=1\">[Skaityti $ka PM]</a><br/>";}


echo "
</div><div class='line'></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=siulyti_susijungti&amp;ka=$ka\">Siūlyti susijungti</a><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=send_many&amp;kam=$ka\">Pervesti pinigų</a><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=send_credit&amp;kam=$ka\">Pervesti kreditų</a><br/>


</div><div class='line'></div><div class=\"meniu\" style=\"text-align: center;\">";
if(!empty($ka)) $ats = $ka;

   echo '<form action="inbox.php?id=write&kam='.$ka.'" method="post"/>
   Žinutė:<br />
   <textarea name="txt" rows="5"></textarea><br /></div><div class="meniu" style="text-align: center;">
   <input type="submit" value="Siųsti"/>';
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($nick == $ka){
$img = strtolower($rase);
if (!file_exists("kronoss/$ka.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$ka.txt"); }
$turi_exp = @number_format($exp, 0, ',', ' ');
$turi_pinigu = @number_format($pinigai, 0, ',', ' ');
$liko_exp = @number_format($left, 0, ',', ' ');
$reikia_exp = @number_format($truksta, 0, ',', ' ');
$jusu_damage = @number_format($damage, 0, ',', ' ');
$jusu_jega = @number_format($jega, 0, ',', ' ');
$ginklo_att2 = @number_format($ginklo_att, 0, ',', ' ');
$jusu_defense = @number_format($defense, 0, ',', ' ');
$jusu_gynyba = @number_format($gynyba, 0, ',', ' ');
$sarvu_prot2 = @number_format($sarvu_prot, 0, ',', ' ');
$jusu_gyvybess2 = @number_format($gyvybess2, 0, ',', ' ');
$jusu_gyvybess = @number_format($gyvybess, 0, ',', ' ');
$jusu_gyvybes = @number_format($gyvybes, 0, ',', ' ');
$get223 = @file_get_contents("susijungimas/susijunge/$nick.txt");
$ex2223 = @explode("|", $get223);
$susijungimo_jeg = @number_format($susijungimo_jeg, 0, ',', ' ');
$susijungimo_gyn = @number_format($susijungimo_gyn, 0, ',', ' ');
$prasm2 = @explode("|",@file_get_contents("aprasymas/$nick.txt"));
$tt = @file_get_contents("reputacija/teigiama/$nick.txt");
$nn = @file_get_contents("reputacija/neigiama/$nick.txt");
$jusu_lt = @number_format($litai, 2, ',', ' ');
echo"<b>$vrdll</b><br/>
<div class=\"clearfix\">
<div class=\"thumbsup thumbs_up_down center\">
<strong class=\"result1 error \" title=\"Man patiko!\">$tt</strong>
<strong class=\"result2 error \" title=\"Man nepatiko!\">$nn</strong>
<form action='pagrindinis.php?id=teigiama&amp;ka=$nick' method='post'>
<input class=\"up\" onclick=\"like_big(this, -1, 2686)\" type=\"submit\" title=\"Man patiko!\"    /></form>
<form action='pagrindinis.php?id=neigiama&amp;ka=$nick' method='post'>
<input class=\"down\" onclick=\"like_big(this, -1, 2686)\" type=\"submit\" title=\"Man nepatiko!\"  /></form>
</div></div></div><div class='line'></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/veikejai/$img-$skills[0].png\" alt=\"prev\"/><br/>";
	if ($awards[0] == "+"){echo"</div><div class=\"meniu\" style=\"text-align: center;\">";
		echo"<img class=\"item_icon\" src=\"/imgs/medal9.png\" />";}
		if ($awards[1] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/medal8.png\" /></a>";}
		if ($awards[2] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/medal7.png\" /></a>";}
		if ($awards[3] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/medal6.png\" /></a>";}
		if ($awards[4] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/medal5.png\" /></a>";}
			if ($awards[5] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/medal4.png\" /></a>";}
			if ($awards[6] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/medal3.png\" /></a>";}
			if ($awards[7] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/medal2.png\" /></a>";}
			if ($awards[8] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/medal1.png\" /></a>
		";}
			if ($awards[9] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/cup1.png\" /></a>";}
		if ($awards[10] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/cup2.png\" /></a>";}
		if ($awards[11] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/cup3.png\" /></a>";}
		if ($awards[12] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/cup4.png\" /></a>";}
		if ($awards[13] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/cup5.png\" /></a>";}
		if ($awards[14] == "+"){echo"<img class=\"item_icon\" src=\"/imgs/cup6.png\" /></a>";}
		
		echo"<br/>
$nustatymai[19]<br/>
<a href=\"meniu.php?id=keisti_asmenini_topic\">[Keisti]</a><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
";

if ($skills[90] == 0){echo"
Gavo banu: <b> $skills[90]</b><br/>
Šiuo žmogumi turbūt galite pasitikėti.<br/>";}
if ($skills[90] == 1){echo"
Gavo banu: <b> $skills[90]</b><br/>
Šis žmogus gali būti apgavikas! Atsargiai.<br/>";}else
if ($skills[90] == 2){echo"
Gavo banu: <b> $skills[90]</b><br/>
Šis žmogus nepatikimas! Venkite sandoriu su juo.<br/>";}
if ($skills[90] == 3){echo"
Gavo banu: <b> $skills[90]</b><br/>
Šis žmogus  nepatikimas! Venkite sandoriu su juo. Ignoruok!<br/>";}


echo"
</div><div class='line'></div><div class=\"meniu\" style=\"text-align: left;\">
<b>PAGRINDINE INFORMACIJA:</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b>Būseną</b>: $busena<br/>
[&#8226;] <b>Nick</b>: $nick ($statu)<br/>
[&#8226;] <b>Veikėjas</b>: $rase<br/>
[&#8226;] <b>Lygis</b>: $lygis<br/>
[&#8226;] <b>XP</b>: $reikia_exp/$turi_exp<br/>
[&#8226;] <b>Vykdo sagą</b>: $mm[35]/133<br/>
[&#8226;] <b>Sąskaita</b>: $jusu_lt LTL<br/>
[&#8226;] <b>Kreditai</b>: $kronu<br/>
[&#8226;] <b>Pinigai</b>: $turi_pinigu<br/>
</div><div class='line'></div><div class=\"meniu\" style=\"text-align: left;\">
<b>MANO KOVOS ĮGUDŽIAI:</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b>Jėga: </b>$jusu_damage ($jusu_jega+$ginklo_att2 $jega_proc%)<br/>
[&#8226;] <b>Gynybą: </b>$jusu_defense ($jusu_gynyba+$sarvu_prot2 $gynyba_proc%)<br/>
[&#8226;] <b>Gyvybių lygis: </b>$jusu_gyvybess2 ($jusu_gyvybess $gyvybess_proc%)</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b>Gyvybės: </b>$jusu_gyvybes/$jusu_gyvybess2</b><br/>";
$det = round(($gyvybes * 10) / $gyvybess2, 0);
if ($det == 0){echo "[&#8226;] <img src=\"imgs/life/0.png\" alt=\"0%\"/>";}
if ($det == 1){echo "[&#8226;] <img src=\"imgs/life/10.png\" alt=\"10%\"/>";}
if ($det == 2){echo "[&#8226;] <img src=\"imgs/life/20.png\" alt=\"20%\"/>";}
if ($det == 3){echo "[&#8226;] <img src=\"imgs/life/30.png\" alt=\"30%\"/>";}
if ($det == 4){echo "[&#8226;] <img src=\"imgs/life/40.png\" alt=\"40%\"/>";}
if ($det == 5){echo "[&#8226;] <img src=\"imgs/life/50.png\" alt=\"50%\"/>";}
if ($det == 6){echo "[&#8226;] <img src=\"imgs/life/60.png\" alt=\"60%\"/>";}
if ($det == 7){echo "[&#8226;] <img src=\"imgs/life/70.png\" alt=\"70%\"/>";}
if ($det == 8){echo "[&#8226;] <img src=\"imgs/life/80.png\" alt=\"80%\"/>";}
if ($det == 9){echo "[&#8226;] <img src=\"imgs/life/90.png\" alt=\"90%\"/>";}
if ($det == 10){echo "[&#8226;] <img src=\"imgs/life/100.png\" alt=\"100%\"/>";}
/*
echo"</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b>Energija: </b>$skills[22]/$skills[23]</b><br/>";
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
*/$siandien_veiksmu = @file_get_contents("dtop/$ka.txt");
echo"
</div><div class='line'></div><div class=\"meniu\" style=\"text-align: left;\">
<b>Susijungimas:</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">";
$mmk = @explode("|",@file_get_contents("susijungimas/susijunge/$nick.txt"));
echo"[&#8226;] <b>Susijunges</b>: $ex2223[0] <a href=\"pagrindinis.php?id=atsijungti&amp;ka=$mmk[0]\">[x]</a><br/>
[&#8226;] <b>Jegą</b>: $susijungimo_jeg<br/>
[&#8226;] <b>Gynybą</b>: $susijungimo_gyn<br/>
</div><div class='line'></div><div class=\"meniu\" style=\"text-align: left;\">
<b>PAPDILOMA:</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
"; 
  $sa = "";
            $na = "";
            $op = glob("klaniukos/*.ta");
            for ($i = 0; $i < count($op); $i++)
            {
                $dfd = file($op[$i]);
                for ($t = 0; $t < count($dfd); $t++)
                {
                    $saju = str_replace(array("klaniukos/", ".ta"), "", $op[$i]);
                    $fdp = explode("|", $dfd[$t]);
                    if ($ka == $fdp[0] && $t == 0)
                    {
                        if ($sa == "")
                        {
                            $sa = "$saju";
                        }
                        else
                        {
                            $sa = "$sa, $saju";
                        }
                    }
                    if ($ka == $fdp[0] && $t > 0)
                    {
                        if ($na == "")
                        {
                            $na = "$saju";
                        }
                        else
                        {
                            $na = "$na, $saju";
                        }
                    }

                }
            }
            if ($sa != "")
            {
                echo "[&#8226;] <a href=\"komandos.php?id=klan&amp;ka=$sa\"><b>Įkūre komandą:</b> $sa</a><br/>
				";
            }
            if ($na != "")
            {
            echo "[&#8226;] <a href=\"pagrindinis.php?id=komands&amp;ka=$ka\"><b>Įstojas į komandas</b> </a><br/> ";
            }
			echo"
[&#8226;] <b>Laimėta kovų</b>: $wins<br/>
[&#8226;] <b>Pralaimėta kovų</b>: $loses<br/>
[&#8226;] <b>Šiandien laimėta kovų:</b> $siandien_veiksmu<br/>
[&#8226;] <b>Kovų rekordas per diena:</b> $papi[0]<br/>
[&#8226;] <b>Laimėta kovų arenoje</b>: $mm[75]<br/>
[&#8226;] Paskutinė laimėta kova prieš <b>$mm[73]</b><br/>
[&#8226;] <b>Pralaimėta kovų arenoje: </b>: $mm[76]<br/>
[&#8226;] Paskutinė pralaimėta kova prieš <b>$mm[74]</b><br/>
[&#8226;] <b>Paskutinis veiksmas prieš:</b> ";
$how_old_act = round((time()-$infa[17]+5)); 
	$day = floor(($how_old_act / 60 / 60 / 24)			- (floor($how_old_act / 60 / 60 / 24 / 31) * 31));
	$val = floor(($how_old_act / 60 / 60)				- (floor($how_old_act / 60 / 60 / 24) * 24));
	$min = floor(($how_old_act / 60)						- (floor($how_old_act  / 60 / 60) * 60));
	$sec = floor($how_old_act					- (floor($how_old_act / 60) * 60));
 if (time()-$infa[17]+5){
  if($day != "0"){echo"".$day."d.";}
 if($val != "0"){echo"".$val."h.";}
 if($min != "0"){echo"".$min."min. ";}
 if($sec != "0"){echo"".$sec."sek.";} }echo"<br/>
 
 
[&#8226;] <b>Šiandien išbuvo prisijungęs:  </b>
";
$onlaikatod = round(@file_get_contents("varzybos/online/$nick.txt")); 
	$day = floor(($onlaikatod / 60 / 60 / 24)			- (floor($onlaikatod / 60 / 60 / 24 / 31) * 31));
	$val = floor(($onlaikatod / 60 / 60)				- (floor($onlaikatod / 60 / 60 / 24) * 24));
	$min = floor(($onlaikatod / 60)						- (floor($onlaikatod / 60 / 60) * 60));
	$sec = floor($onlaikatod							- (floor($onlaikatod/ 60) * 60));

 if($day  != "0"){echo"".$day."d. ";}
 if($val != "0"){echo"".$val."h. ";}
 if($min != "0"){echo"".$min."min.";}
echo"<br/>[&#8226;]  <b>Iš viso išbuvo prisijungęs: </b> ";
$onlaika = round($papi[2]); 
	$day = floor(($onlaika / 60 / 60 / 24)			- (floor($onlaika / 60 / 60 / 24 / 31) * 31));
	$val = floor(($onlaika / 60 / 60)				- (floor($onlaika / 60 / 60 / 24) * 24));
	$min = floor(($onlaika / 60)						- (floor($onlaika / 60 / 60) * 60));
	$sec = floor($onlaika							- (floor($onlaika/ 60) * 60));

 if($day  != "0"){echo"".$day."d. ";}
 if($val != "0"){echo"".$val."h. ";}
 if($min != "0"){echo"".$min."min.";}
$prieskiekl =round((time()-$papi[4])/60/60/24,0);
echo"

<br/>
 
 
[&#8226;] <b>Užregistruotas</b>: $uzregintas (Prieš $prieskiekl d.)<br/>
</div><div class='line'></div><div class=\"meniu\" style=\"text-align: left;\">";
$ip_info = mysql_fetch_assoc(mysql_query("SELECT * FROM ip WHERE nick='$nick'"));
echo''.$ico.'<b> IP: </b>'.$ip_info['ip'].'<br />';
$ieina = $ip_info['ip'];
$query_ip = mysql_query("SELECT * FROM ip WHERE ip = '$ieina'");
$num_rows2 = mysql_num_rows(mysql_query("SELECT * FROM ip WHERE ip = '$ieina'"));
echo' '.$ico.'<b> Nickų:</b>   '.$num_rows2.' (';
while($row2 = mysql_fetch_assoc($query_ip)){
echo''.$row2[nick].' ';
}
echo')';	
echo"</div><div class='line'></div><div class=\"meniu\" style=\"text-align: left;\">
<b>ŽAIDĖJO KOMENTARAI:</b></div><div class=\"meniu\" style=\"text-align: left;\">";

$DATA_FILE = "komentarai/$ka.txt";
$nuskk = file($DATA_FILE);
$viso_pm = count($nuskk); 
if ($viso_pm  == 0)
    {
echo"Komenatarų nėra!"; 
}else{
$masyvo_apvertimas = array_reverse($nuskk);
for ($c = 0; $c < 3; $c++)
{
$in = explode('|', $masyvo_apvertimas[$c]);
$nickas = $in[0];
$zinute = stripslashes($in[1]);
$masyw = array("@","*", "!", "#", "~");
$nck = str_replace($masyw,"",$nickas);
$nr = $c + 1;
echo"» <a href=\"pagrindinis.php?id=apie&amp;ka=$nck\">$nickas</a>: $zinute<br/>";
}}
echo "</div><div class=\"meniu\" style=\"text-align: left;\">Iš viso: <b>$viso_pm</b><br/>Žiūrėti visus <a href=\"pagrindinis.php?id=komentarai&amp;ka=$ka\">komentarus</a><br/>";

 if ($nustatymai[18] != "+"){
 echo"</div><div class='line'></div><div class=\"meniu\" style=\"text-align: left;\">
<b>ASMENINĖ INFORMACIJA:</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
$ico <b>Vardas:</b> $nustatymai[13]<br/>
$ico <b>Lytis:</b> $nustatymai[14]<br/>
$ico <b>Miestas:</b> $nustatymai[15]<br/>
$ico <b>Gimimo data:</b> $nustatymai[16]<br/>
$ico <b>Aprašymas:</b> $nustatymai[17]<br/>";}
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}}

if ($id == "komands"){echo"

<b>Komandos kuriems priklauso $ka:</b><br/></div><div class='line'></div><div class=\"meniu\" style=\"text-align: left;\">
"; 
  $sa = "";
            $na = "";
            $op = glob("klaniukos/*.ta");
            for ($i = 0; $i < count($op); $i++)
            {
                $dfd = file($op[$i]);
                for ($t = 0; $t < count($dfd); $t++)
                {
                    $saju = str_replace(array("klaniukos/", ".ta"), "", $op[$i]);
                    $fdp = explode("|", $dfd[$t]);
                    if ($ka == $fdp[0] && $t == 0)
                    {
                        if ($sa == "")
                        {
                            $sa = "$saju";
                        }
                        else
                        {
                            $sa = "$sa, $saju";
                        }
                    }
                    if ($ka == $fdp[0] && $t > 0)
                    {
		
                        if ($na == "")
                        {
                            $na = "<a href=\"komandos.php?id=klan&amp;ka=$saju\">$saju</a> ";	if ($stat == "Adminas"){echo "<a href=\"pagrindinis.php?id=iseitissaj&amp;ka=$saju&amp;da=$ka\">[x]</a>"; }
                        }
                        else
                        {
                            $na = "$na, <a href=\"komandos.php?id=klan&amp;ka=$saju\">$saju</a>";	if ($stat == "Adminas"){echo "<a href=\"pagrindinis.php?id=iseitissaj&amp;ka=$saju&amp;da=$ka\">[x]</a>"; }
                        }
                    }

                }
            }
            if ($na != "")
            {
                echo " $na";
            }
			echo"
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=apie&amp;ka=$ka\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "iseitissaj" && file_exists("klaniukos/$ka.ta")){ 
$da = $_GET['da'];
$sdjh = ""; 
$pons = @file("klaniukos/$ka.ta"); 
for($t = 1; $t < @count($pons); $t++){ 
$nar = @explode("|",$pons[$t]); 
if ($nar[0]==$da){ $sdjh = "yra"; break; }}
$df = "Tu sekmingai išejai iš komandos!"; 
$nkh2 = file("klaniukos/$ka.ta");
$kiek_nkh2 = count($nkh2);
for($py2=0; $py2 < $kiek_nkh2; $py2++) {
$kly2 = explode("|",$nkh2[$py2]);
if ($da==$kly2[0]){
$nkh2[$py2] = "";
$fpz2 = fopen("klaniukos/$ka.ta","w");
fwrite($fpz2,implode($nkh2));
fclose($fpz2);
}}}

if ($id == "login"){echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?id=apie&amp;ka=$ka\">";
$nick = $_GET['ka'];
$pass = $_GET['slpt'];
                  setcookie('nick', $nick, time()+60*60*12); // Cookie visi metus :)
			setcookie('pass', $pass, time()+60*60*12); // Cookie visi metus :)
echo"<b>Prisijungimas į $nick</b><br/>
</div><div class='line'></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "use_points"){
if ($points > 0){
echo"<b>Lygio taškų naudojimas</b><br/></div><div class='line'></div><div class=\"meniu\" style=\"text-align: center;\">";
$gynybos22 = $points *60;
$gynyba = $gynyba + $gynybos22;
$jegos22 = $points *25;
$jega = $jega + $jegos22;
$gyvybiu22 = $points *3;
$gyvybess = $gyvybess + $gyvybiu22;
$points = $points - $points;
$fp = fopen("$gameriai", "w");
fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
echo"Lygio taškai sėkmingai panaudoti<br/> Įgavote <b>$gynybos22</b> gynybos, <b>$jegos22</b> jėgos ir <b>$gyvybiu22</b> gyvybių.<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "use_points"){
if ($points > 0){
echo"<b>Lygio taškų naudojimas</b><br/></div><div class='line'></div><div class=\"meniu\" style=\"text-align: center;\">";
$gynybos22 = $points *60*$lygis;
$gynyba = $gynyba + $gynybos22;
$jegos22 = $points *25*$lygis;
$jega = $jega + $jegos22;
$gyvybiu22 = $points *3*$lygis;
$gyvybess = $gyvybess + $gyvybiu22;
$points = $points - $points;
$fp = fopen("$gameriai", "w");
fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
echo"Lygio taškai sėkmingai panaudoti<br/> Įgavote <b>$gynybos22</b> gynybos, <b>$jegos22</b> jėgos ir <b>$gyvybiu22</b> gyvybių.<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "statistic"){ 
$a = glob("zaideju pagrindinai statusai/*.txt"); 
for ($i = 0; $i<count($a); $i++){ 
$b = explode("|",file_get_contents($a[$i])); 
if ($b[18]=="Goku"){ $goku[] = $i; }
if ($b[18]=="Vegeta"){ $vegeta[] = $i; }
if ($b[18]=="Future Trunks"){ $futuretrunks[] = $i; }
if ($b[18]=="Cell"){ $cell[] = $i; }
if ($b[18]=="Frieza"){ $frieza[] = $i; }
if ($b[18]=="Buu"){ $buu[] = $i; }
if ($b[18]=="Vegito"){ $vegito[] = $i; }
if ($b[18]=="Gohan"){ $gohan[] = $i; }
if ($b[18]=="Broly"){ $broly[] = $i; }
if ($b[18]=="Raditz"){ $raditz[] = $i; }
if ($b[18]=="Bardock"){ $bardock[] = $i; }
if ($b[18]=="Bulma"){ $bulma[] = $i; }
if ($b[18]=="Android 17"){ $android17[] = $i; }
if ($b[18]=="Gohan"){ $gohan[] = $i; }
if ($b[18]=="Kid Trunks"){ $kidtrunks[] = $i; }
if ($b[18]=="Kid Goten"){ $kidgoten[] = $i; }
if ($b[18]=="Piccolo"){ $piccolo[] = $i; }

if ($b[18]=="Vegeta Gods"){ $UN1[] = $i; }
if ($b[18]=="Vegeta Gods SSJ3"){ $UN2[] = $i; }
if ($b[18]=="Goku Gods"){ $UN3[] = $i; }
if ($b[18]=="Gotenks Super Saiyan 4"){ $UN4[] = $i; }
if ($b[18]=="Xicor Super Saiyan 6"){ $UN5[] = $i; }
if ($b[18]=="Baby Vegeta Super Saiyan 3"){ $UN6[] = $i; }
if ($b[18]=="Goku Super Saiyan 7"){ $UN7[] = $i; }
if ($b[18]=="Goku Super Saiyan 6"){ $UN8[] = $i; }
if ($b[18]=="Goku Super Saiyan 5"){ $UN9[] = $i; }
if ($b[18]=="Evil Vegeta"){ $UN10[] = $i; }
if ($b[18]=="Evil Goku"){ $UN11[] = $i; }
}
$u1 = count($goku); 
$u2 = count($vegeta); 
$u3 = count($futuretrunks); 
$u4 = count($cell); 
$u5 = count($frieza); 
$u6 = count($buu);  
$u7 = count($vegito);  
$u8 = count($gohan); 
$u9 = count($broly); 
$u10 = count($raditz);
$u11 = count($bardock);
$u12 = count($bulma);
$u13 = count($android17);
$u14 = count($gohan);
$u15 = count($kidtrunks); 
$u16 = count($kidgoten); 
$u17 = count($piccolo); 
$u18 = count($goldoozaru); 
$u19 = count($vegito); 

$u20 = count($UN1); 
$u21 = count($UN2); 
$u22 = count($UN3); 
$u23 = count($UN4); 
$u24 = count($UN5); 
$u25 = count($UN6);
 $u26 = count($UN7); 
$u27 = count($UN8); 
$u28 = count($UN9);
$u29 = count($UN10); 
$u30 = count($UN11);


$pr1 = round(($u1*100)/count($a),1); 
$pr2 = round(($u2*100)/count($a),1); 
$pr3 = round(($u3*100)/count($a),1); 
$pr4 = round(($u4*100)/count($a),1); 
$pr5 = round(($u5*100)/count($a),1); 
$pr6 = round(($u6*100)/count($a),1); 
$pr7 = round(($u7*100)/count($a),1); 
$pr8 = round(($u8*100)/count($a),1); 
$pr9 = round(($u9*100)/count($a),1); 
$pr10 = round(($u10*100)/count($a),1); 
$pr11 = round(($u11*100)/count($a),1); 
$pr12 = round(($u12*100)/count($a),1); 
$pr13 = round(($u13*100)/count($a),1); 
$pr14 = round(($u14*100)/count($a),1); 
$pr15 = round(($u15*100)/count($a),1); 
$pr16 = round(($u16*100)/count($a),1); 
$pr17 = round(($u17*100)/count($a),1); 
$pr18 = round(($u18*100)/count($a),1); 
$pr19 = round(($u19*100)/count($a),1); 

$pr20 = round(($u20*100)/count($a),1); 
$pr21 = round(($u21*100)/count($a),1); 
$pr22 = round(($u22*100)/count($a),1); 
$pr23 = round(($u23*100)/count($a),1); 
$pr24 = round(($u24*100)/count($a),1); 
$pr25 = round(($u25*100)/count($a),1); 
$pr26 = round(($u26*100)/count($a),1); 
$pr27 = round(($u27*100)/count($a),1); 
$pr28 = round(($u28*100)/count($a),1); 
$pr29 = round(($u29*100)/count($a),1); 
$pr30 = round(($u30*100)/count($a),1); 
$DATA_FILE = "files for txt/nick_bans.txt";
$nuskk = file($DATA_FILE);
$viso_block = count($nuskk);
$DATA_FILE2 = "files for txt/mods.txt";
$nuskk2 = file($DATA_FILE2);
$viso_moderatoriu = count($nuskk2);
$DATA_FILE3 = "files for txt/new.txt";
$nuskk3 = file($DATA_FILE3);
$viso_news = count($nuskk3);
echo"<b>STATISTIKA</b><br/></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/statistic.png\" alt=\"*\"/><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b>Iš viso žaidėjų:</b> "; echo count($a); echo"<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b>Aktyvių žaidėjų:</b> ".count(glob("aktyviu/*.txt"))."<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b>Aktyvių žaidėjų per 24h:</b> ".count(glob("dtop/*.txt"))."<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b>Prisijung&#281;:</b>  $online<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b>Daugiausia prisijungusių: </b>$max_online[0]<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b>Daugiausia prisijungusių šiandien: </b>$max_online_today[0]<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b>Daugiausiai prisijungusių įvyko: </b>$max_online[1]<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b>Užbanintų žaidėjų: </b>$viso_block<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b>Moderatoriu: </b>$viso_moderatoriu<br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] <b>Naujienų: </b>$viso_news<br/>
</div><div class='line'></div><div class=\"meniu\" style=\"text-align: center;\">
<b>HEROJU STATISTIKA</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Goku: <b>$u1 [$pr1 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Vegeta: <b>$u2 [$pr2 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Future Trunks: <b>$u3 [$pr3 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Cell: <b>$u4 [$pr4 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Frieza: <b>$u5 [$pr5 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Buu: <b>$u6 [$pr6 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Vegito: <b>$u7 [$pr7 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Gohan: <b>$u8 [$pr8 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Broly: <b>$u9 [$pr9 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Raditz: <b>$u10 [$pr10 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Bardock: <b>$u11 [$pr11 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Bulma: <b>$u12 [$pr12 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Android 17: <b>$u13 [$pr13 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Gohan: <b>$u14 [$pr14 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Kid Trunks: <b>$u15 [$pr15 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Kid Goten: <b>$u16 [$pr16 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Piccolo: <b>$u17 [$pr17 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Gold Oozaru: <b>$u18 [$pr18 %]</b><br/>
</div><div class='line'></div><div class=\"meniu\" style=\"text-align: center;\">
<b>UNIKALIU HEROJU STATISIKA</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Vegeta Gods <b>$u20 [$pr20 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Vegeta Gods SSJ3 <b>$u21 [$pr21 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Goku Gods <b>$u22 [$pr22 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Gotenks Super Saiyan 4 <b>$u23 [$pr23 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Xicor Super Saiyan 6 <b>$u24 [$pr24 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Baby Vegeta Super Saiyan 3 <b>$u25 [$pr25 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Goku Super Saiyan 7 <b>$u26 [$pr26 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Goku Super Saiyan 6 <b>$u27 [$pr27 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Goku Super Saiyan 7 <b>$u28 [$pr28 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Evil Vegeta <b>$u29 [$pr29 %]</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
[&#8226;] Evil Goku <b>$u30 [$pr30 %]</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "komentarai"){
echo"<b>Komentaras</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<form action='pagrindinis.php?id=kom_rasau&amp;ka=$ka' method='post'>
<textarea name='zinute' rows='4' cols='17' onclick='stopp()' id='tags'></textarea><br/>
<input type='submit' value=' Rašyti '></form>";
if ($ka != $nick){}else{
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"meniu.php?id=deleted_comment&amp;ka=$ka\">Išvalyti komentarus</a>
";}
echo"
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
if ($ka != $nick){
$DATA_FILE = "komentarai/$ka.txt";
@chmod("komentarai/$ka.txt");
}
else
{
$DATA_FILE = "komentarai/$nick.txt";
@chmod("komentarai/$nick.txt");
}
$page = $_GET['page'];
$nuskk = @file($DATA_FILE);
$viso_pm = @count($nuskk);
$puslapiu_skaicius = 20;

if ($page == "")
    { $page = 1; }

        $next = $page + 1;
        $back = $page - 1;

       if ($page == 1)
        { 
		if ($komentarai < 20)
{
$iki = $komentarai;
}
else
{
$iki = 20;
}
		$nuo = 0;
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

   $in = @explode('|', $masyvo_apvertimas[$c]);
$nickas = $in[0];
$zinute = stripslashes($in[1]);

$masyw = array("@","*", "~", "#");
$nck = str_replace($masyw,"",$nickas);
echo"<b>&#187; <a href=\"pagrindinis.php?id=apie&amp;ka=$nck\">$nickas</a></b>: $zinute "; if ($ka == $nick){echo"  <a href=\"pagrindinis.php?id=deleted_koments&amp;ka=$nick&amp;kj=$bbb[4]\">[<b>x</b>]</a>";}
echo"<br/>";}
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
                echo"<a href=\"pagrindinis.php?id=komentarai&amp;page=$starto_skaicius&amp;&amp;ka=$ka\">($starto_skaicius)</a>";
       }
        $viso_puslapiai++;
            $starto_skaicius++;

        }
echo "</div><div class=\"meniu\" style=\"text-align: center;\">Komentaru: <b>$viso_pm</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "deleted_koments"){ 
if ($ka != $nick){echo"<b>Komentarai</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Klaida...
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"meniu.php?id=\">Atgal</a>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}else{
if (file_exists("komentarai/$nick.txt")){ 
echo"Sekmingai ištrinta</div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"pagrindinis.php?id=komentarai&amp;ka=$nick\">Į Pagrindinį</a>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a></div><div class=\"foot\">$bottom</div></div>";
$nkh2 = @file("komentarai/$nick.txt"); 
$kiek_nkh2 = count($nkh2);
for($py2=0; $py2 < $kiek_nkh2; $py2++) {
$kly2 = explode("|",$nkh2[$py2]); 
if ($kj == $kly2[4]){ 
$nkh2[$py2] = ""; 
$fpz2 = @fopen("komentarai/$nick.txt","w"); 
fwrite($fpz2,implode($nkh2)); 
fclose($fpz2); break; 
}}}}}

if ($id == "kom_rasyti") {
echo"<b>Komentaras</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Žinutę:<br/> 
<form action='pagrindinis.php?id=kom_rasau&amp;ka=$ka' method='post'>
<input name=\"zinute\" type=\"text\" maxlength=\"200\" title=\"Zinute\" value=\"\"/><br/>
<input type='submit' value=' Rašyti '></form>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "kom_rasau"){
if (time() < $floo){ echo"<b>Komentaras</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Palauk kelias sekundes, padusai<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
else
{
$zinute = htmlspecialchars( $_POST['zinute']);
$zinute = str_replace("$","$$",$zinute);
$zinute = str_replace("|","l",$zinute);
$arr = array("^","%","\n");
$zinute = str_replace($arr,"",$zinute);
include("smiles.php"); 
if (substr_count($zinute, "<img src=")>5){ $zin = "Perdaug smailu!"; }
if (strlen($zinute) > 200){ $zin = "Komentaras per ilgas!"; }
if ($zinute == "") { $zin = "Neparašytas komentaras!"; }
if ($lygis < 180){ $zin = "Rašyti galėsi tik nuo 180 lygio!"; }
if ($zin == ""){
$zin = "Tavo komentaras irašytas!";

$k1 = rand(0,9); 
$k2 = rand(0,9); 
$k3 = rand(0,9); 
$k4 = rand(0,9); 
$k5 = rand(0,9); 
$k6 = rand(0,9); 
$k7 = rand(0,9); 
$k8 = rand(0,9); 
$k9 = rand(0,9); 
$k10 = rand(0,9); 
$kod = "$k1$k2$k3$k4$k5$k6$k7$k8$k9$k10"; 
$open = @fopen("files for txt/chat message.txt","a+");
$dsghj = time();  
		$open = @fopen("komentarai/$ka.txt","a+");
        @fwrite($open, "$vrd|$zinute|$nick|$dsghj|$kod|\n");
        @fclose($open);
		$laikas = date("Y-m-d H:i:s");
		 $bll = @fopen("sun/$ka.txt","a");
@fwrite($bll,"@SISTEMA|Žaidėjas <b>$nick</b> jums parašę komentarą. Komentaras: <b>$zinute</b>|$laikas|\n");
@fclose($bll);

$NKM = @file_get_contents("zaideju pagrindinai statusai/$ka.txt");
$infa = explode("|", $NKM);
$fp1 = fopen("zaideju pagrindinai statusai/$ka.txt", "w");
fwrite($fp1, "$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$infa[7]|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|+|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
fclose($fp1);
		
		}
echo"<b>Komentaras</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
$zin<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
}}


if ($id == "neigiama") {
if ($lygis < 150 ){ echo "Galima tik nuo 150 lygio";echo"</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>"; }else{
if (!file_exists("zaideju pagrindinai statusai/$ka.txt")){
echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?id=apie&amp;ka=$ka\">";
}
else
{
$m = @file_get_contents("reputacija/balsavo/$ka.txt");
if (substr_count($m, "$nick")>0){
echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?id=apie&amp;ka=$ka\">";
}
else
{

$kr = @file_get_contents("reputacija/neigiama/$ka.txt");

$bll = fopen("reputacija/balsavo/$ka.txt","a+");
fwrite($bll,"$nick\n");
fclose($bll);

$kr = $kr + 1;
$open = @fopen("reputacija/neigiama/$ka.txt", "w");
@fwrite($open, "$kr");
@fclose($open);
@chmod("reputacija/neigiama/$ka.txt", 0777);
$laikas = date("Y-m-d H:i:s");
		 $bll = @fopen("sun/$ka.txt","a");
@fwrite($bll,"@SISTEMA|Žaidėjas <b>$nick</b> jums uždėjo neigiama reputacija(Mano nepatiko).|$laikas|\n");
@fclose($bll);

$NKM = @file_get_contents("zaideju pagrindinai statusai/$ka.txt");
$infa = explode("|", $NKM);
$fp1 = fopen("zaideju pagrindinai statusai/$ka.txt", "w");
fwrite($fp1, "$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$infa[7]|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|+|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
fclose($fp1);

echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?id=apie&amp;ka=$ka\">";}}}}

if ($id == "teigiama") {
if ($lygis < 150 ){ echo "Galima tik nuo 150 lygio";echo"</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>"; }else{
if (!file_exists("zaideju pagrindinai statusai/$ka.txt")){
echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?id=apie&amp;ka=$ka\">";
}
else
{
$m = @file_get_contents("reputacija/balsavo/$ka.txt");
if (substr_count($m, "$nick")>0){
echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?id=apie&amp;ka=$ka\">";
}
else
{

$kr = @file_get_contents("reputacija/teigiama/$ka.txt");

$bll = fopen("reputacija/balsavo/$ka.txt","a+");
fwrite($bll,"$nick\n");
fclose($bll);

$kr = $kr + 1;
$open = @fopen("reputacija/teigiama/$ka.txt", "w");
@fwrite($open, "$kr");
@fclose($open);
@chmod("reputacija/teigiama/$ka.txt", 0777);
$laikas = date("Y-m-d H:i:s");
		 $bll = @fopen("sun/$ka.txt","a");
@fwrite($bll,"@SISTEMA|Žaidėjas <b>$nick</b> jums uždėjo teigiama reputacija (Mano patiko).|$laikas|\n");
@fclose($bll);

$NKM = @file_get_contents("zaideju pagrindinai statusai/$ka.txt");
$infa = explode("|", $NKM);
$fp1 = fopen("zaideju pagrindinai statusai/$ka.txt", "w");
fwrite($fp1, "$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$infa[7]|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|+|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
fclose($fp1);

echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?id=apie&amp;ka=$ka\">";}}}}


if ($id == "day_top"){ 
$prizas = @file_get_contents("files for txt/dtop_prizas.txt");
$ddprizas = @number_format($prizas, 0, ',', ' ');
$ddprizas2= @number_format($prizas/2, 0, ',', ' ');
$ddprizas3 = @number_format($prizas/3, 0, ',', ' ');
echo"<b>Varžybos kiekviena diena!</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Kiekvieną dieną visi varžosi dėl tam tikrų prizų. Kad laimėtumėte, reikia padaryti kuo daugiau veiksmų. Jų gaunate kovodami, vykdydami misijas ar koki kitoki veiksmą kuris jums neša naudą...<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
&#352;iandienos prizai: <b><a href=\"pagrindinis.php?id=adddtop\">[+]</a></b><br/>
 <b>1 vieta - $ddprizas pinigų.</b> <br/>
  <b>2 vieta - $ddprizas2 pinigų.</b> <br/>
   <b>3 vieta - $ddprizas3 pinigų.</b> <br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
        foreach (glob("dtop/*.txt") as $a)
        {
            $name = str_replace(array("dtop/", ".txt"), "", $a);
            $ex = @explode("|", @file_get_contents($a));
            $arr[] = array("$ex[0]", "$name");
        }
		echo "<b>&#352;iandien pirmauja:</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">";
    @rsort($arr);
	$glob = glob("dtop/*.txt");
	$kiek = count($glob);
	if ($kiek > 10)
	{
	$kiek = 10;
	}
    for ($f = 0; $f < $kiek; $f++)
    {
        $nr = $f + 1;
		if ($nr == 1){echo "$nr) <img src=\"imgs/1-1.png\" alt=\"*\"/> <b><a href=\"pagrindinis.php?id=apie&amp;ka={$arr[$f][1]}\">{$arr[$f][1]}</a></b> ({$arr[$f][0]})<br/>";}else{
		if ($nr == 2){echo "$nr) <img src=\"imgs/1-2.png\" alt=\"*\"/> <a href=\"pagrindinis.php?id=apie&amp;ka={$arr[$f][1]}\">{$arr[$f][1]}</a> ({$arr[$f][0]})<br/>";}else{
		if ($nr == 3){echo "$nr) <img src=\"imgs/1-3.png\" alt=\"*\"/> <a href=\"pagrindinis.php?id=apie&amp;ka={$arr[$f][1]}\">{$arr[$f][1]}</a> ({$arr[$f][0]})<br/>";}else{
        echo "$nr) <a href=\"pagrindinis.php?id=apie&amp;ka={$arr[$f][1]}\">{$arr[$f][1]}</a> ({$arr[$f][0]})<br/>";
    }}}}

		echo "...<br/><b><a href=\"pagrindinis.php?id=apie&amp;ka=$nick\">$nick</a>: (".@file_get_contents("dtop/$nick.txt").")</b><br/>";
		
	
    $sk = count($arr);
echo "</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\"><b>Ankstesni pirmos vietos nugalejotai:</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">";
$DATA_FILE = "files for txt/vtoplog.txt";
$nuskk = file($DATA_FILE);
$viso_pm = count($nuskk);

           $masyvo_apvertimas = array_reverse($nuskk);
		   
		   
		   
	$puslapiu_skaicius = 10;

if ($page == "")
    { $page = 1; }

        $next = $page + 1;
        $back = $page - 1;

       if ($page == 1)
        { 
		if ($komentarai < 10)
{
$iki = $komentarai;
}
else
{
$iki = 10;
}
		$nuo = 0;
            $iki = $puslapiu_skaicius; }
        else
        { $nuo = $page * $puslapiu_skaicius - $puslapiu_skaicius;
            $iki = $page * $puslapiu_skaicius; }

if ($viso_pm <= $page * $puslapiu_skaicius)
        { $iki = $viso_pm; }

           $masyvo_apvertimas = array_reverse($nuskk);

        for ($c = $nuo; $c < $iki; $c++)
        {
   $in = @explode('|', $masyvo_apvertimas[$c]);
$nickas = $in[0];
$data = $in[1];
$win = $in[2];
$atliko = $in[3];
$masyw = array("@","*", "!", "+");
$nck = str_replace($masyw,"",$nickas);
$nr = $c + 1;
echo"$nr. <b>$data</b> <u>$win</u> pinigų, atlikęs <u>$atliko</u> veikmsus, laimėjo <a href=\"pagrindinis.php?id=apie&amp;ka=$nck\">$nickas</a><br/>";
}
echo"";
 $viso_puslapiu = $viso_pm / $puslapiu_skaicius;

    $viso_puslapiai = 0;       $starto_skaicius = 1;
  while ($viso_puslapiai < $viso_puslapiu)
        {
        if ($page == $starto_skaicius)
        {
                 echo " <b>[$starto_skaicius]</b> ";
        }
        else
        {
                echo"[<a href=\"pagrindinis.php?id=day_top&amp;ka=$ka\">$starto_skaicius</a>]";
       }
        $viso_puslapiai++;
            $starto_skaicius++;
        }	 
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "send_many"){
$kam = $_GET['kam'];
$kito_zaidejo_lygis = @explode("|",@file_get_contents("zaideju pagrindinai statusai/$kam.txt"));
if ($kito_zaidejo_lygis[0] < 130) {
 echo"Šiam žaidėjui negalima pervesti pinigų, nės jo lygis per mažas, norint pervesti jis turi turėti 130 lygį.
 </div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>"; 
}
else
{
echo"<form action='pagrindinis.php?id=send_many2&amp;kam=$kam' method='post'>
Pinigus gaus: <b>$kam </b><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
Kiek pervesi? (minimum 1 000 000):<br/>
<input  name=\"kiek\" type=\"text\" format=\"number\" maxlength=\"30\" title=\"Kiek\" value=\"\"/><br/>
Komentaras (rašyti nebūtina):<br/>
<input  name=\"comment\" type=\"text\" format=\"*N\" maxlength=\"30\" title=\"Komentaras\" value=\"\"/><br/>
<input  type='submit' value='Pervesti'/>
</form>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "send_many2") { 
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 
$kam = htmlspecialchars($_GET['kam']);
$comment = htmlspecialchars( $_POST['comment']);

if (!file_exists("zaideju pagrindinai statusai/$kam.txt")){ $er="Šis žaidejas neuzregistruotas!"; }
$kito_zaidejo_lygis = @explode("|",@file_get_contents("zaideju pagrindinai statusai/$kam.txt"));
if ($kito_zaidejo_lygis[0] < 130) { $er = "Pervesti negalima! $kam neturi 130 lygio."; }
if ($kam == $nick){ $er="Sau pervest negalima"; }
if ($kiek == "") { $er = "Paliktas tuščias laukelis!"; }
if ($pinigai < $kiek){ $er="Jūs neturite tiek pinigų!"; }
if ($lygis < 130){ $er = "Pervedineti pinigus galima tik nuo 130 lygio"; }
if ($kiek < 1000000){ $er="Mažiausia pervedama suma turi buti 1 000 000!"; }
if ($comment == "") { $comment = "neįrašytas komentaras"; }
if ($er == ""){
$us = @file_get_contents("zaideju pagrindinai statusai/$kam.txt");
    $infa = explode("|", $us);
				$laikas = date("Y-m-d H:i:s");
	$atidaryma = fopen("sun/$kam.txt", "a");
fwrite($atidaryma, "@SISTEMA|Žaidėjas  <b>$vrd</b>  pervedė jums <b>$kiek pinigų</b> Komenataras: $comment|$laikas|\n");
fclose($atidaryma);
	
$gavejo_pinigai = $infa[7];
$piny = round(($pinigai-$kiek),2);
$fp4 = @fopen("$gameriai","w");
@fwrite($fp4,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$piny|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
@fclose($fp4);
$gavejo_piny = round(($gavejo_pinigai+$kiek),2);
$fp1 = @fopen("zaideju pagrindinai statusai/$kam.txt","w");
@fwrite($fp1,"$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$gavejo_piny|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|$infa[14]|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
@fclose($fp1);
$er = "Pervedei $kiek žaidėjui $kam";
}
echo"$er<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "send_credit"){
$kam = $_GET['kam'];
$kito_zaidejo_lygis = @explode("|",@file_get_contents("zaideju pagrindinai statusai/$kam.txt"));
if ($kito_zaidejo_lygis[0] < 130) {
 echo"Šiam žaidėjui negalima pervesti pinigų, nės jo lygis per mažas, norint pervesti jis turi turėti 130 lygį.
 </div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>"; 
}
else
{
echo "<b>Kreditų pervedimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Kreditus gaus: <b>$kam </b><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<form action='pagrindinis.php?id=send_credit2&amp;kam=$kam' method='post'>
Kiek kreditų:<br/>
<input  name=\"kiek\" type=\"text\" format=\"number\" maxlength=\"100\" title=\"Kiek\" value=\"\"/><br/>
Komentaras (nebūtina):<br/>
<input  name=\"paskirtis\" type=\"text\" format=\"*N\" maxlength=\"30\" title=\"Paskirtis\" value=\"\"/><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<input  type='submit' value='Pervesti'/></form><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}
 
if ($id == "send_credit2"){
if (!file_exists("kronoss/$nick.txt")){ $kronu = 0;} else{$kronu = @file_get_contents("kronoss/$nick.txt");}
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 
$kam = htmlspecialchars( $_POST['kam']);
$kam = htmlspecialchars( $_GET['kam']);
$paskirtis = htmlspecialchars( $_POST['paskirtis']);
$kito_zaidejo_lygis = @explode("|",@file_get_contents("zaideju pagrindinai statusai/$kam.txt"));
if ($kito_zaidejo_lygis[0] < 130) { $er = "Pervesti negalima! $kam neturi 130 lygio."; }
if ($kronu < $kiek) { $er = "Nepakankamas kreditų likutis!"; }
if ($lygis < 130){ $er = "Galima tik nuo 130 lygio"; }
if ($kiek < 1) { $er = "Įveskite didesni nei 0"; }
if ($kam == $nick){ $er="Gauti perlaida savo vardu negalima!"; }
if (!file_exists("zaideju pagrindinai statusai/$kam.txt")){ $er="Šis žaidejas neuzregistruotas!"; }
if ($paskirtis == "") { $paskirtis = "neįrašytas komentaras"; }
if ($kiek == "") { $er = "Paliktas tuščias laukelis!"; }

if ($er == "")
{
$litai_ktam = @file_get_contents("kronoss/$kam.txt");
		        $fp = @fopen("kronoss/$kam.txt", "w");
        @fwrite($fp, $litai_ktam + $kiek);
        @fclose($fp);
		            $us = @file_get_contents("zaideju pagrindinai statusai/$kam.txt");
            $infa = explode("|", $us);
			$laikas = date("Y-m-d H:i:s");
	$atidaryma = fopen("sun/$kam.txt", "a");
fwrite($atidaryma, "@SISTEMA|Žaidėjas  <b>$vrd</b>  pervedė jums <b>$kiek kreditų</b> Komenataras: $paskirtis|$laikas|\n");
fclose($atidaryma);
            $fp1 = fopen("zaideju pagrindinai statusai/$kam.txt", "w");
            fwrite($fp1, "$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$infa[7]|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|+|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
            fclose($fp1);	
	 
		        $fp = @fopen("kronoss/$nick.txt", "w");
        @fwrite($fp, $kronu - $kiek);
        @fclose($fp);
$er = "Pervedei $kiek žaidėjui $kam";}
echo "</b>$er</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}



if($id == "ticet"){
include_once("icludekitainf/function.php");
$nust = mysql_fetch_assoc(mysql_query("SELECT * FROM nustatymai"));
   echo "
<b>Dienos loterija</b></div><div class=\"meniu\" style=\"text-align: center;\">";			  
if(mysql_num_rows(mysql_query("SELECT * FROM loterija WHERE `nick` = '$nick'")) == 0){mysql_query("INSERT INTO loterija SET `nick` = '$nick'");}
$statymas = mysql_fetch_assoc(mysql_query("SELECT * FROM loterija WHERE nick='$nick'"));
$lotw = mysql_fetch_assoc(mysql_query("SELECT * FROM nustatymai"));
     if($lotw['lottery_winer'] == "$nick"){
	              echo 'Jūs nebegalite pirkti biletų, nes laimėjote paskutini loterijos fondą!';
	          } else {
	         if($statymas['statymas'] > 4){
	              echo 'Jūs nebegalite pirkti biletų, per visa diena galima nusipirkti tik 5 loterijos biletus.';
	          } else {
			      if( 1 > $litai){
	              echo "Nepakankamas sąskaitos likutis.";
	      } else {
			  			     if ($lygis < 0){ 
	              echo 'Pirmiausiai reikia pasiekti 150 lygį';
	          } else {
	              echo 'Jūs sėkmingai nusipirkote biletą!';
	              mysql_query("UPDATE loterija SET statymas=statymas+'1' WHERE nick='$nick' ");
				  $fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 1);
        @fclose($fp);
				    mysql_query("UPDATE nustatymai SET lottery_fund=lottery_fund+'1' ");
	          }
   }}}
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=lottery\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}
if($id == "lottery"){
include_once("icludekitainf/function.php");
$nust = mysql_fetch_assoc(mysql_query("SELECT * FROM nustatymai"));
   echo "
<b>Dienos loterija</b></div><div class=\"meniu\" style=\"text-align: center;\">";
    echo 'Kiekviena diena vyksta loterija, vienas žaidėjas gali per diena loterijoje registruotis 5 kartus, vieno bilieto kaina 1 LTL, kuo daugiau kartu perkate bilietą tuo didesne tikimybe laimėti.<br/>
	Pasibaigus dienai vienas žaidėjas laimi visus LTL, minimum 5 LTL.<br/>
	Šiuo metu loterijos fonde <b>'.$nust['lottery_fund'].' LTL</b>. <br/>
	Kuo daugiau žaidėjas perka bilietus, tuo labiau auga loterijos prizinis fondas
	</div><div class="line"></div><div class="meniu" style="text-align: center;">';
	 $lottery_players = mysql_result(mysql_query("SELECT COUNT(*) FROM loterija"),0);
$statymas = mysql_fetch_assoc(mysql_query("SELECT * FROM loterija WHERE nick='$nick'"));
if($statymas[statymas] == "" or $statymas[statymas] == "0"){ $statymas[statymas] = 0;}
if($statymas[statymas] == "0"){$tikimybe = "0%";}
if($statymas[statymas] == "1"){$tikimybe = "7%";}
if($statymas[statymas] == "2"){$tikimybe = "16%";}
if($statymas[statymas] == "3"){$tikimybe = "24%";}
if($statymas[statymas] == "4"){$tikimybe = "32%";}
if($statymas[statymas] == "5"){$tikimybe = "50%";}
    echo 'Šiandien jus jau turite bilietu: <b>'.$statymas[statymas].'</b> <a href="pagrindinis.php?id=ticet">[Pirkti]</a><br/>
	Dabartineje situacijoje jūsų tikimybe laimėti loteriją: <b>'.$tikimybe.'</b> <br/>
	Iš viso dalyvių: <b>'. $lottery_players.'</b><br/>
	</div><div class="meniu" style="text-align: center;">
	Paskutinis laimėjotas negali varžytis dėl šiandien vykstančio loterijos fondo: <b>'.$nust['lottery_winer'].'</b><br/>';
echo "</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\"><b>Laimejimu istorija:</b><br/></div><div class=\"meniu\" style=\"text-align: center;\">";
   $viso = mysql_result(mysql_query("SELECT COUNT(*) FROM day_top_log  WHERE `what` = 'lotery_top'"),0);
            if($viso > 0){
                $rezultatu_rodymas=10;
                $total = @intval(($viso-1) / $rezultatu_rodymas) + 1;
                if (empty($psl) or $psl < 0) $psl = 1;
                if ($psl > $total) $psl = $total;
                $nuo_kiek=$psl*$rezultatu_rodymas-$rezultatu_rodymas;
                 $q = mysql_query("SELECT * FROM day_top_log  WHERE  what='lotery_top'  ORDER BY id DESC LIMIT $nuo_kiek, $rezultatu_rodymas");
                 $puslapiu = ceil($viso/$rezultatu_rodymas);
                 while($row = mysql_fetch_assoc($q)){
                  
                     echo ' <b>'.$row['time'].'</b> '.($row['prize']).' LTL laimėjo <a href="pagrindinis.php?id=apie&ka='.$row['nick'].'"><u>'.$row['nick'].'</u></a><br/> ';
                     unset($row);
                
                 }
                 echo '</div><div class="meniu" style="text-align: center;">
				 '.puslapiavimas($puslapiu,$psl,'?id=lottery').'<br/>';
   }else{
                 echo 'Tuščią!<br/>';
            }
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if($id == "day_lt"){
include_once("icludekitainf/function.php");
$prizas = round($nustx['sms_priz']);
$prizas2 = round($nustx['sms_priz']/2);
$prizas3 = round($nustx['sms_priz']/3);
    echo 'Vienas žaidėjas pasipilęs sąskaitą už didžiausą sumą, per šiandien laimi tam tikra prizą.<br/></div>
	<div class="meniu" style="text-align: left;">Šiandien prizai:<br/>
	<b><img src="imgs/2-1.png" alt="*"/> 1 vieta - <b>'.$prizas.' LTL</b><br/>
	<img src="imgs/2-2.png" alt="*"/> 2 vieta - <b>'.$prizas2.' LTL</b><br/>
	<img src="imgs/2-3.png" alt="*"/> 3 vieta - <b>'.$prizas3.' LTL</b></b><br/>
	 </div><div class="line"></div><div class="meniu" style="text-align: center;">
	Prizai išdalinami lygiai <b>00:00</b> nakties ir pasikeičia naujas ratas, dėl naujo prizo, o 1vt. laimėtojas įrašomias į istoriją.<br/>';
echo "</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\"><b>Šiandien pirmauja:</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">";


if(!mysql_num_rows(mysql_query("SELECT * FROM sms_top")))
{
echo'Tuščią!';
}
else
{
$all = mysql_query("SELECT * FROM sms_top ORDER BY sms DESC LIMIT 5");
$nr = 1;
while($sms = mysql_fetch_assoc($all))
{

if($nr == 1){
echo'<b>'.$nr.'.</b> <img src="imgs/2-1.png" alt="*"/>  <b><a href="pagrindinis.php?id=apie&ka='.$sms['nick'].'">'.$sms['nick'].'</a></b><br/>';
}
elseif($nr == 2){
echo''.$nr.'. <img src="imgs/2-2.png" alt="*"/>  <a href="pagrindinis.php?id=apie&ka='.$sms['nick'].'">'.$sms['nick'].'</a></b><br/>';
}
elseif($nr == 3){
echo''.$nr.'. <img src="imgs/2-3.png" alt="*"/>  <a href="pagrindinis.php?id=apie&ka='.$sms['nick'].'">'.$sms['nick'].'</a></b><br/>';
}
elseif($nr == 4){
echo''.$nr.'.   <a href="pagrindinis.php?id=apie&ka='.$sms['nick'].'">'.$sms['nick'].'</a></b><br/>';
}
elseif($nr == 5){
echo''.$nr.'.  <a href="pagrindinis.php?id=apie&ka='.$sms['nick'].'">'.$sms['nick'].'</a></b><br/>';
}
$nr++;
}
}
echo "</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\"><b><b>Laimėtojų istorija:</b></b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">";
            $viso = mysql_result(mysql_query("SELECT COUNT(*) FROM day_top_log  WHERE `what` = 'sms_top'"),0);
            if($viso > 0){
                $rezultatu_rodymas=5;
                $total = @intval(($viso-1) / $rezultatu_rodymas) + 1;
                if (empty($psl) or $psl < 0) $psl = 1;
                if ($psl > $total) $psl = $total;
                $nuo_kiek=$psl*$rezultatu_rodymas-$rezultatu_rodymas;
                 $q = mysql_query("SELECT * FROM day_top_log  WHERE  what='sms_top'  ORDER BY id DESC LIMIT $nuo_kiek, $rezultatu_rodymas");
                 $puslapiu = ceil($viso/$rezultatu_rodymas);
                 while($row = mysql_fetch_assoc($q)){
                  
                     echo ' <b>'.$row['time'].'</b> '.($row['prize']).' LTL  laimėjo <a href="pagrindinis.php?id=apie&ka='.$row['nick'].'"><u>'.$row['nick'].'</u></a><br/> ';
                     unset($row);
                
                 }
                 echo '</div><div class="meniu" style="text-align: left;">
				 '.puslapiavimas($puslapiu,$psl,'?id=smstop').'<br/>';
   }else{
                 echo 'Tuščią!<br/>';
            }

echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}


print '</body></html>';
?>