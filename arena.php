<?php
$kur = "Arena";
include ("config.php");
include_once("icludekitainf/start.php");

if (!file_exists("kovos/$nick.txt"))
            {
            $fop = @fopen("kovos/$nick.txt", "w+");
            @fwrite($fop, "-|-|0|*|*|-|-|0|*|*|*|\n");
            @fclose($fop);
            @chmod("kovos/$nick.txt",0777);
}
if ($id == "arena" or $id == ""){ 
echo"<b>Arena</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
  if (file_exists("kovos/$nick.txt")){
  echo $_GET['sh']; 
    $kp = file_get_contents("kovos/$nick.txt"); 
    $lo = explode("|",$kp);  
    $ar_siulo = $lo[0]; 
    $kas_siulo = $lo[1]; 
    $siul_iki = $lo[2]; 
    $siul_susk = $lo[3];
    $siul_rez = $lo[4];
$siul_galios = $siul_iki-time();
    $ar_siulai = $lo[5];
    $kam_siulai = $lo[6];
    $siulai_iki = $lo[7];
    $siulai_susk = $lo[8];
    $siulei_rez = $lo[9]; 
    $atsisake = $lo[10]; 
$siulai_galios = $siulai_iki-time();
}
  if ($ar_siulo == "+"){  echo"<b>Kitu žaidėjų siūlymai ir rezultatai</b><br/></div><div class=\"meniu\" style=\"text-align: center;\">";
    if ($siul_iki > time()){ echo"<b>Tau siulo kautis</b>: <br/>
  <u>$kas_siulo</u>, pasiulymas galios dar <u>$siul_galios</u> sėkundes<br/>
  <a href=\"arena.php?id=sutinku_kautis\">Sutinku kautis!</a><br/>
  <a href=\"arena.php?id=nesutinku_kautis\">Nesutinku kautis...</a><br/>";
  }
  }
  if ($siul_rez == "+"){ echo"</div><div class=\"meniu\" style=\"text-align: left;\"><b>Tu laimejai paskutine kova ($kas_siulo)</b><br/>"; }
  if ($siul_rez == "-"){ echo"</div><div class=\"meniu\" style=\"text-align: left;\"><b>Tu pralaimejai paskutine kova ($kas_siulo)</b><br/>
  </div><div class=\"meniu\" style=\"text-align: center;\">"; }
  
  echo" <a href=\"arena.php?id=siulau_kautis\">Siūlyti kautis!</a><br/>";
  
  if ($ar_siulai == "+"){  echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
  <b>Tavo siūlymai ir rezultatai</b><br/>";
    if ($siulai_iki > time()){ echo"</div><div class=\"meniu\" style=\"text-align: center;\"><b>Tu siūlai kautis</b>: <br/>
  <u>$kam_siulai</u>, pasiulymas galios dar <u>$siulai_galios</u> sėkundes<br/>";
  }
  }

  if ($siulei_rez == "+"){ echo"</div><div class=\"meniu\" style=\"text-align: left;\"><b>Tu laimejai paskutine kovą ($kam_siulai)</b><br/>"; }
  if ($siulei_rez == "-"){ echo"</div><div class=\"meniu\" style=\"text-align: left;\"><b>Tu pralaimejai paskutine kovą ($kam_siulai)</b><br/>"; }
  if ($atsisake == "+"){ echo"</div><div class=\"meniu\" style=\"text-align: left;\"><b>$kam_siulai atsisake kautis</b><br/>"; }
echo"
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom </div></div>";}

if ($id == "sutinku_kautis"){
$kp = file_get_contents("kovos/$nick.txt");
    $lo = explode("|",$kp);  
    $ar_siulo = $lo[0]; 
if ($ar_siulo == "+"){
  $kp = file_get_contents("kovos/$nick.txt");
    $lo = explode("|",$kp);  
    $ar_siulo = $lo[0]; 
    $kas_siulo = $lo[1]; 
    $siul_iki = $lo[2]; 
    $siul_susk = $lo[3];
    $siul_rez = $lo[4];
$siul_galios = $siul_iki-time();
    $ar_siulai = $lo[5];
    $kam_siulai = $lo[6];
    $siulai_iki = $lo[7];
    $siulai_susk = $lo[8];
    $siulei_rez = $lo[9];
    $atsisake = $lo[10]; 
$siulai_galios = $siulai_iki-time();

$us = @file_get_contents("zaideju pagrindinai statusai/$kas_siulo.txt");
    $infa = explode("|", $us);

$vrdll = $infa[2];

$dem = "$infa[3]"+"$infa[10]";

  $tavo_points = round(($gyvybes+$damage)/2,0);
  $enemio_points = round(($infa[4]+$dem)/2,0);

  echo"<p align=\"center\"><b>Sutikai kautis su $vrdll</b><br/>
  <br/><b>Rezultatai:</b><br/></p>";
  
  if ($tavo_points > $enemio_points){
    $laimeta = round(($infa[7])/2,0);
    $winsai = $wins+1;
    $pin = $pinigai+$laimeta;
	$xp = rand(50, 250);
	
	//lvl kilimas
$suma = $xp+$exp; 
$lvl = 99999; 
$enda = 99999; 
$qq = 1.1;
for ($rr=1; $rr<99999; $rr++){ 
if ($rr==1){ $qq = 1.1; } else { $qq = $qq*1.1; }
if ($qq >= $suma/10 && $enda != $rr){ $lvl = $rr; $enda = $rr+1; $buves = $qq; }
if ($enda==$rr){ $ex_left = round($buves*10,1); break; }
}
if ($lvl > $lygis){ 
$badux="$badux<br/><br/>
<b>Sveikinu! Tu pasikelei lygi<br/>
Dabar tavo lygis: $lvl</b>"; 
$skirtums = $lvl - $lygis;
$points = $points + ($skirtums * 2);
$lygis = $lvl; 
} $exp = $suma; 
//lvl kilimo pabaiga

$fp = fopen("$gameriai", "w");
fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

    echo"<p align=\"left\"><u>Tu laimejai!!!</u><br/>
  Gavai <i>$laimeta</i>$$ ir $xp XP<br/></p><p align=\"center\">
  <br/>
  <a href=\"arena.php?id=arena\">Atgal</a><br/>
  <a href=\"zaisti.php?id=\">I Pradzia</a></p>";
$fp = fopen("$gameriai", "w");
fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

$infa[7] = $infa[7]-$laimeta; 
$ls = $infa[9]+1;

$fop = fopen("zaideju pagrindinai statusai/$kas_siulo.txt", "w");
fwrite($fop, "$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$infa[7]|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|$infa[14]|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|$infa[25]|");
fclose($fop);

$ud = @file_get_contents("kovos/$kas_siulo.txt");
    $io = explode("|", $ud);

$fpz = fopen("kovos/$kas_siulo.txt","w+");
fwrite($fpz,"$io[0]|$io[1]|$io[2]|$io[3]|$io[4]|-|$io[6]|0|+|-|-|\n");
fclose($fpz);

$fpg = fopen("kovos/$nick.txt","w+");
fwrite($fpg,"-|$lo[1]|0|+|+|$lo[5]|$lo[6]|$lo[7]|$lo[8]|$lo[9]|$lo[10]|\n");
fclose($fpg);
  }
 
 if ($tavo_points < $enemio_points){
    $praradai = round(($pinigai)/2,0);
    $losai = $loses+1; //+pralaomejimai
    $pinigai = $pinigai-$praradai; //-pinigai
	$gyvybes = $gyvybes-$gyvybes;
	
    echo"<p align=\"left\"><u>Tu prakisai!!!</u><br/>
  Praradai <i>$praradai</i>pinigu ir visas gyvybes...<br/></p><p align=\"center\">
  <br/>
  <a href=\"arena.php?id=arena\">Atgal</a><br/>
  <a href=\"zaisti.php?id=\">I Pradzia</a></p>";
$fp = fopen("$gameriai", "w");
fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

$infa[7] = $infa[7]+$praradai; //pinigu
$infa[8] = $infa[8]+1; //pergales
$fop = fopen("zaideju pagrindinai statusai/$kas_siulo.txt", "w");
fwrite($fop, "$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$infa[7]|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|$infa[14]|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|$infa[25]|");
fclose($fop);

$ud = @file_get_contents("kovos/$kas_siulo.txt");
    $io = explode("|", $ud);

$fpt = fopen("kovos/$kas_siulo.txt","w+");
fwrite($fpt,"$io[0]|$io[1]|$io[2]|$io[3]|$io[4]|-|$io[6]|0|+|+|-|\n");
fclose($fpt);
$fpg = fopen("kovos/$nick.txt","w+");
fwrite($fpg,"-|$lo[1]|0|+|-|$lo[5]|$lo[6]|$lo[7]|$lo[8]|$lo[9]|$lo[10]|\n");
fclose($fpg);
  }

}
}
if ($id=="gm"){ echo $_POST['kiek_imt'];
echo"<p align=\"center\">
<input name=\"kiek_imt\" type=\"text\" value=\"\"/><br/>
<anchor>Imti<go href=\"arena.php?id=gm\" method=\"post\">
    <postfield name=\"kiek_imt\" value=\"$(kiek_imt)\"/>
</go></anchor></p>
";  }
if ($id == "nesutinku_kautis"){
$kp = file_get_contents("kovos/$nick.txt"); 
    $lo = explode("|",$kp); 
$fpg = fopen("kovos/$nick.txt","w+");
fwrite($fpg,"-|$lo[1]|0|+|$lo[4]|$lo[5]|$lo[6]|$lo[7]|$lo[8]|$lo[9]|$lo[10]|\n");
fclose($fpg);

$ud = @file_get_contents("kovos/$lo[1].txt");
    $io = explode("|", $ud);

$fpt = fopen("kovos/$lo[1].txt","w+");
fwrite($fpt,"$io[0]|$io[1]|$io[2]|$io[3]|$io[4]|-|$io[6]|0|-|*|+|\n");
fclose($fpt);

echo"<p align=\"center\">
  <b>Atsisakei kautis...</b><br/>
  <br/>
  <a href=\"arena.php?id=arena\">Atgal</a><br/>
  <a href=\"zaisti.php?id=\">I Pradzia</a>
  </p>";
}

if ($id == "siulau_kautis"){
echo"<p align=\"center\"><b>Siulyti kautis</b><br/>
  <br/>
  Kam:<br/>
  <form action=\"arena.php?id=siulau_kautis2\" method=\"post\">
  <input name=\"ka\" type=\"text\" maxlength=\"30\" title=\"Siulyti kautis\" value=\"\"/><br/>
<input type='submit' value='Siulyti'><br />
</form>
<br/>
  <a href=\"arena.php?id=arena\">Atgal</a><br/>
  <a href=\"zaisti.php?id=\">I pradzia</a>
  </p>";

}

if ($id == "siulau_kautis2"){
$kp = file_get_contents("kovos/$nick.txt"); 
    $lo = explode("|",$kp); 
$ka = $_POST['ka'];

if ($ka == "") { $bad = "Nenurodei kam siulyti!"; }
if ($ka == "$nick") { $bad = "Sau siulyti negalima!"; }
if (!file_exists("zaideju pagrindinai statusai/$ka.txt")){
        $bad = "Sis zaidejas neuzregistruotas!"; }
        $ud = @file_get_contents("kovos/$ka.txt");
    $io = explode("|", $ud); 
if ($io[2] > time()){ $bad = "Sis jau turi pasiulyma!"; }
if ($io[0] == "+"){ $bad = "Sis jau turi pasiulyma!"; } 
if ($lo[5] == "+"){ $bad = "tu jau esi pasiules vienam zaidejui!"; } 
if ($bad == "") { $bad = "Pasiulei kautis $ka, lauk sutikimo!";

$ik = time()+10000; 
$fpt = fopen("kovos/$ka.txt","w+");
fwrite($fpt,"+|$nick|$ik|-|*|$io[5]|$io[6]|$io[7]|$io[8]|$io[9]|$io[10]|\n");
fclose($fpt);

$fpt = fopen("kovos/$nick.txt","w+");
fwrite($fpt,"$lo[0]|$lo[1]|$lo[2]|$lo[3]|$lo[4]|+|$ka|$ik|-|*|*|\n");
fclose($fpt);
}
echo"<p align=\"center\">
  <b>$bad</b><br/>
  <br/>
  <a href=\"arena.php?id=arena\">Atgal</a><br/>
  <a href=\"zaisti.php?id=\">I Pradzia</a>
  </p>";
}


print '</body></html>';

?>