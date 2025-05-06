<?php
$kur = "Kovotojų arena";
include ("config.php");
include_once("icludekitainf/start.php");

if ($lygis<200){ 
echo"<b>Į areną galima tik nuo 200 lygio!<br/></b>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>
</card></wml>";
exit;
}


$po = file("files for txt/arenalose.ly"); 
for($m=0; $m<count($po); $m++){ 
$zet=explode("|",$po[$m]); 
if ($zet[0] != $nick && $zet[3] < time()){ 
$po[$m]=""; 
$pz2 = fopen("files for txt/arenalose.ly","w");
fwrite($pz2,implode($po));
fclose($pz2);
}



if ($zet[0]==$nick){ 
echo"<b>Jūs užpuole $zet[2].<br/></b>"; 
if ($zet[1]=="win"){ echo"Jus laimejote! Gavote visus užpuolejo pinigus.";
$mm[73] = $zet[2];
$mm[75] = $mm[75] +1;
include("icludekitainf/mm.php"); } else { 
echo"
Jus pralaimejote... Praradote visus savo pinigus..."; 
$mm[74] = $zet[2];
$mm[76] = $mm[76] +1;
include("icludekitainf/mm.php"); }
echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Uždaryti pranešimą</a>
</div><div class=\"foot\">$bottom</div></div></card></wml>";
$po[$m]=""; 
$pz2 = fopen("files for txt/arenalose.ly","w");
fwrite($pz2,implode($po));
fclose($pz2);
exit;

}

}
if ($pinigai < 100000){ 
echo"<b>Noredami patekti i arena privalote tureti bent 100 000 pinigų!<br/></b>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>
</card></wml>";exit;
}

if($ka == ""){ $ka = 1; }
if ($ka == 1){ $gal = $lygis-10; $gal2 = $lygis+10; }
if ($ka == 2){$gal = $lygis-20; $gal2 = $lygis+20; }
if ($ka == 3){ $gal = $lygis-40; $gal2 = $lygis+40;}
if ($ka == 4){$gal = $lygis-70; $gal2 = $lygis+70; }
if ($ka == 5){ $gal = $lygis-100; $gal2 = $lygis+100; }
if ($gal < 5){ $gal=5; }

if ($ka >= 1 && $ka <= 5){
if ($id == ""){ 

echo"<b>Arena</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<onevent type=\"ontimer\"><go href=\"on_kovos.php?id=&amp;ka=$ka\"/></onevent><timer value=\"130\"/>";
echo"<b>$ka zona, čia galite pūlti $gal-$gal2 lygio kovotojus.</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">"; 
  $a = array_unique(file("files for txt/arena.ly")); 
  $arr = array(); 
for($u=0; $u<count($a); $u++){ 
$b = explode("|",$a[$u]); 
$b[1]=@ereg_replace("[^a-z0-9]","",$b[1]);
if ($b[0]==$ka && $b[1] != $nick){ 
$lvvs = explode("|",file_get_contents("zaideju pagrindinai statusai/$b[1].txt")); 
echo" <a href=\"on_kovos.php?id=kautis&amp;vs=$b[1]&amp;ka=$ka\">$b[1] [$lvvs[0]]</a><br/>"; $arr[] = $b[1]; }}
if (count($arr)<1){ echo"Šioje arenos zonoje nera ne vieno kovotojo.<br/>"; }
  echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">"; 
if ($ka != 5){ echo"<a href=\"on_kovos.php?id=&amp;ka="; echo $ka+1; echo"\">Gilyn į "; echo $ka+1; echo" zoną</a><br/>"; }
if ($ka != 1){ echo"<a href=\"on_kovos.php?id=&amp;ka="; echo $ka-1; echo"\">Atgal į "; echo $ka-1; echo" zoną</a><br/>"; }
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>PS.</b> Butina įšeiti iš arenos, nes, jei neišeisite, tada jūs gales betkada betkas užpulti.<br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<b> <a href=\"on_kovos.php?id=out\">Įšeiti iš arenos</a></b><br/>
</div><div class=\"foot\">$bottom</div></div>";  
}

if ($id == "kautis" && file_exists("zaideju pagrindinai statusai/$vs.txt")){ 
$lvvs = explode("|",file_get_contents("zaideju pagrindinai statusai/$vs.txt")); 
$nkh2 = file("files for txt/arena.ly"); 
$kiek=count($nnn);
for($i=0; $i<$kiek; $i++) { 
$e=explode("|",$nnn[$i]); 
$masyw = array("@","*");
$onlpy = str_replace($masyw,"",$e[0]);
if ($e[1]==$vs){$ba= "Sio zmogaus sioje arenos zonoje nera!"; }} 

$nkh2 = file("files for txt/arena.ly"); 
$kiek_nkh2 = count($nkh2);
for($py2=0; $py2 < $kiek_nkh2; $py2++) {
$kly2 = explode("|",$nkh2[$py2]);
if ($kly2[1]==$vs){$ba= "Sio zmogaus sioje arenos zonoje nera!"; }}


if (!@eregi("$ka|$vs",file_get_contents("files for txt/arena.ly"))){ $ba= "Sio zmogaus sioje arenos zonoje nera!"; }

$po2 = file("files for txt/arenalose.ly"); 
for($m2=0; $m2<count($po2); $m2++){ 
$zet2=explode("|",$po2[$m2]); 
if ($zet2[0] == $vs && $zet2[1] == "lose"){ 
$ba = "Šis žmogus katik kovesi, todėl jo pulti dabar negali!"; 
break;
}
}
if ($lvvs[0]<$gal or $lvvs[0]>$gal2){ $ba = "Su šiuo žmogumi čia kautis negali!"; }
if ($vs==$nick){ $ba = "Na šiaip su savim niekas nesikauna...  :D"; }

if ($ba==""){ 
$sugebejimas22 = $lvvs[6];
if ($lvvs[18] == "Elf"){
$jega22 = round(($lvvs[3]*1.05),1);
$gynyba22 = $lvvs[16]; 
$sugebejimas22 = round(($lvvs[6]*1.05),1);
}
if ($lvvs[18] == "Dark_elf"){
$jega22 = round(($lvvs[3]*1.05),1);
$gynyba22 = round(($lvvs[16]*1.05),1);
}
if ($lvvs[18] == "Human"){
$jega22 = $lvvs[3];
$gynyba22 = $lvvs[16];
 }
if ($lvvs[18] == "Orc"){
$jega22 = round(($lvvs[3]*1.1),1);
$gynyba22 = $lvvs[16];
 }
if ($lvvs[18] == "Attacer"){
$jega22 = round(($lvvs[3]*1.15),1);
$gynyba22 = round(($lvvs[16]*0.9),1);
 }
if ($lvvs[18] == "Dwarf"){
$jega22 = round(($lvvs[3]*0.9),1);
$gynyba22 = $lvvs[16];
}
if ($lvvs[18] == "Fisher"){
$jega22 = round(($lvvs[3]*0.9),1);
$gynyba22 = round(($lvvs[16]*0.9),1);
 }
if ($lvvs[18] == "Farmer"){
$jega22 = round(($lvvs[3]*0.95),1);
$gynyba22 = round(($lvvs[16]*0.9),1);
 }
if ($lvvs[18] == "Crafter"){
$jega22 = round(($lvvs[3]*0.9),1);
$gynyba22 = round(($lvvs[16]*0.9),1);
 }
 $dari2 = @explode("|",@file_get_contents("darinfos/$vs.ly")); 
$damage2 = $jega22+$lvvs[10];
$defense2 = $gynyba22+$lvvs[22]+$dari2[53]+$dari2[55]+$dari2[57]+$dari2[59];
$poi = 0; 
if ($damage > $damage2){ $poi = $poi+1; }
if ($defense > $defense2){ $poi = $poi+1; }
if ($gyvybes > $lvvs[4]){ $poi = $poi+1; }
if ($lygis > $lvvs[0]){ $poi = $poi+1; }
if ($sugebejimas2 > $sugebejimas22){ $poi = $poi+1; }

if ($poi >= 3){ 
$gavoxp = $lvvs[0]*15; 
$ba = "Jus laimejote! Gavote visus priešininko pinigus, t.y: $lvvs[7] $$. Ir $gavoxp XP.";  

$pinu = $pinigai+$lvvs[7]; 
$inf[8]=$inf[8]+1;

$suma = ($lvvs[0]*15)+$inf[19]; 
$lvl = 99999; 
$enda = 9999999; 
$qq = 1.1;
for ($rr=1; $rr<99999; $rr++){ 
if ($rr==1){ $qq = 1.1; } else { $qq = $qq*1.1; }
if ($qq >= $suma/10 && $enda != $rr){ $lvl = $rr; $enda = $rr+1; $buves = $qq; }
if ($enda==$rr){ $inf[20] = round($buves*10,1); break; }
}
if ($lvl > $lygis){ 
$ba="$ba<br/>$lin<br/>
<b>Sveikinu! Tu pasikelei lygi<br/>
Dabar tavo lygis: $lvl</b>"; 
$inf[15] = $inf[15]+2; 
$inf[0] = $lvl; 
} $inf[19] = $suma; 

$fop = fopen("zaideju pagrindinai statusai/$nick.txt", "w");
        fwrite($fop, "$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$pinu|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]|$inf[21]|$inf[22]|$inf[23]|$inf[24]|$inf[25]|");
        fclose($fop); 
        
$lvvs[9]=$lvvs[9]+1; 

$fopp = fopen("zaideju pagrindinai statusai/$vs.txt", "w");
        fwrite($fopp, "$lvvs[0]|$lvvs[1]|$lvvs[2]|$lvvs[3]|$lvvs[4]|$lvvs[5]|$lvvs[6]|0|$lvvs[8]|$lvvs[9]|$lvvs[10]|$lvvs[11]|$lvvs[12]|$lvvs[13]|$lvvs[14]|$lvvs[15]|$lvvs[16]|$lvvs[17]|$lvvs[18]|$lvvs[19]|$lvvs[20]|$lvvs[21]|$lvvs[22]|$lvvs[23]|$lvvs[24]|$lvvs[25]|");
        fclose($fopp); 
$mm[73] = $vs;
$mm[75] = $mm[75]+1;
include("icludekitainf/mm.php");
$lklsj = time()+600; 
$kol = rand(0,999999); 
$fop2 = fopen("files for txt/arenalose.ly", "a");
        fwrite($fop2, "$vs|lose|$nick|$lklsj|$kol|\n");
        fclose($fop2); 
} else {
$ba = "Jus pralaimejote! Netekote visu savo pinigu, t.y: $pinigai $$";  

$inf[9]=$inf[9]+1; 
$fop = fopen("zaideju pagrindinai statusai/$nick.txt", "w");
        fwrite($fop, "$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|0|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]|$inf[21]|$inf[22]|$inf[23]|$inf[24]|$inf[25]|");
        fclose($fop); 
$lvvs[8]=$lvvs[8]+1; 
$pinu = $pinigai+$lvvs[7]; 

$suma2 = ($inf[0]/2)+$lvvs[19]; 
$lvlv = 99999; 
$andy = 9999999; 
$qqq = 1.1;
for ($rrr=1; $rrr<99999; $rrr++){ 
if ($rrr==1){ $qqq = 1.1; } else { $qqq = $qqq*1.1; }
if ($qqq >= $suma2/10 && $andy != $rrr){ $lvlv = $rrr; $andy = $rrr+1; $buuu = $qqq; }
if ($andy==$rrr){ $lvvs[20] = round($buuu*10,1); break; }
}
if ($lvlv > $lvvs[0]){ 
$lvvs[15] = $lvvs[15]+2; 
$lvvs[0] = $lvlv; 
} $lvvs[19] = $suma2; 

$fopp = fopen("zaideju pagrindinai statusai/$vs.txt", "w");
        fwrite($fopp, "$lvvs[0]|$lvvs[1]|$lvvs[2]|$lvvs[3]|$lvvs[4]|$lvvs[5]|$lvvs[6]|$pinu|$lvvs[8]|$lvvs[9]|$lvvs[10]|$lvvs[11]|$lvvs[12]|$lvvs[13]|$lvvs[14]|$lvvs[15]|$lvvs[16]|$lvvs[17]|$lvvs[18]|$lvvs[19]|$lvvs[20]|$lvvs[21]|$lvvs[22]|$lvvs[23]|$lvvs[24]|$lvvs[25]|");
        fclose($fopp); 
$lklsj = time()+60; 
$kol = rand(0,999999); 
$mm[74] = $lvvs[2];
$mm[76] = $mm[76] +1;
include("icludekitainf/mm.php");
$fop2 = fopen("files for txt/arenalose.ly", "a");
        fwrite($fop2, "$vs|win|$nick|$lklsj|$kol|\n");
        fclose($fop2); 
}

}

echo "<b>Arena</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
$ba</b><br/></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"on_kovos.php?id=&amp;ka=$ka\">(&#171;)&#302; areną</a></b><br/>
<a href=\"pagrindinis.php?\">(&#171;)&#302; &#381;aidima</a></b><br/>
</div><div class=\"foot\">$bottom</div></div>";}

$timl = 60+time();
$f = "files for txt/arena.ly";
$nesk = file($f);
$inn = $nick;
$fp = fopen($f, "w+");
for($i=0; $i<count($nesk); $i++){ 
list($viets,$nix,$timf) = explode("|", $nesk[$i]); if($nix!=$inn && $timf>time()) {
fwrite($fp,$nesk[$i]); }}
fwrite($fp, "$ka|$inn|$timl|\n");
fclose($fp);

}


if ($id=="out"){ 
$po = file("files for txt/arena.ly"); 
for($m=0; $m<count($po); $m++){ 
$zet=explode("|",$po[$m]); 
if ($zet[1]==$nick){ 
$po[$m]=""; 
$pz2 = fopen("files for txt/arena.ly","w");
fwrite($pz2,implode($po));
fclose($pz2);
echo "<b>Arena</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Sėkmingai išejote iš arenos</b><br/></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?\">(&#171;)&#302; &#381;aidima</a></b><br/>
</div><div class=\"foot\">$bottom</div></div>";}}}

print'</card></wml>';

?>