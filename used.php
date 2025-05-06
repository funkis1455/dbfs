<?php
$kur = "Apranga";
include ("config.php");
include_once("icludekitainf/start.php");


if ($id == "use_sar"){

if ($ka == "Cloth"){ $weap = $dari[9];
$dari[9] = $dari[9]-1;
$g_pavad = "Cloth";
$g_att = 500;
}

if ($ka == "Kame cloth"){ $weap = $dari[10];
$dari[10] = $dari[10]-1;
$g_pavad = "Kame cloth";
$g_att = 1200;

}

if ($ka == "Namekian cloth"){ $weap = $dari[11];
$dari[11] = $dari[11]-1;
$g_pavad = "Namekian cloth";
$g_att = 2500;
}

if ($ka == "Saiyan armor"){ $weap = $dari[12];
$dari[12] = $dari[12]-1;
$g_pavad = "Saiyan armor";
$g_att = 3800;
}

if ($ka == "Saiyan prince armor"){ $weap = $dari[13];
$dari[13] = $dari[13]-1;
$g_pavad = "Saiyan prince armor";
$g_att = 4500;
}

if ($ka == "Fusion cloth"){ $weap = $dari[14];
$dari[14] = $dari[14]-1;
$g_pavad = "Fusion cloth";
$g_att = 7000;
}

if ($ka == "Ginyu armor"){ $weap = $dari[15];
$dari[15] = $dari[15]-1;
$g_pavad = "Ginyu armor";
$g_att = 14900;
}

if ($ka == "Dragon armor"){ $weap = $dari[16];
$dari[16] = $dari[16]-1;
$g_pavad = "Dragon armor";
$g_att = 15500;
}

if ($ka == "Saiyaman costume"){ $weap = $dari[17];
$dari[17] = $dari[17]-1;
$g_pavad = "Saiyaman costume";
$g_att = 30000;
}

if ($ka == "Majin armor"){ $weap = $dari[38];
$dari[38] = $dari[38]-1;
$g_pavad = "Majin armor";
$g_att = 1000000;
}

if ($ka == "Magic armor"){ $weap = $dari[39];
$dari[39] = $dari[39]-1;
$g_pavad = "Magic armor";
$g_att = 10000000;
}
if ($ka == "Fusion armor"){ $weap = $dari[40];
$dari[40] = $dari[40]-1;
$g_pavad = "Fusion armor";
$g_att = 300000000;
}


if ($weap < 1) { $er = "Šio šarvo neturite!"; }
if (0<$sarvu_prot){$er = "Norėdami užsidėti naują šarvą, pirma turite nusiimti senaja!"; }

if ($er == ""){
$er="Šarvas uždetas";

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$g_att|$g_pavad||\n");
fclose($fp);
include("icludekitainf/iras2.php");
}
echo"<b>Aprangos/Atakos</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"$er<br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=inventory\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "use_weap"){

if ($ka == "Staff"){ $weap = $dari[22];
$dari[22] = $dari[22]-1;
$g_pavad = "Staff";
$g_att = 500;
}

if ($ka == "Knife"){ $weap = $dari[23];
$dari[23] = $dari[23]-1;
$g_pavad = "Knife";
$g_att = 1000;

}

if ($ka == "Sword"){ $weap = $dari[24];
$dari[24] = $dari[24]-1;
$g_pavad = "Sword";
$g_att = 2500;
}

if ($ka == "God staff"){ $weap = $dari[25];
$dari[25] = $dari[25]-1;
$g_pavad = "God staff";
$g_att = 4200;
}

if ($ka == "Magic staff"){ $weap = $dari[26];
$dari[26] = $dari[26]-1;
$g_pavad = "Magic staff";
$g_att = 5000;
}

if ($ka == "Janemba sword"){ $weap = $dari[27];
$dari[27] = $dari[27]-1;
$g_pavad = "Janemba sword";
$g_att = 7500;
}

if ($ka == "Ginyu sword"){ $weap = $dari[28];
$dari[28] = $dari[28]-1;
$g_pavad = "Ginyu sword";
$g_att = 13500;
}

if ($ka == "Yamcha sword"){ $weap = $dari[29];
$dari[29] = $dari[29]-1;
$g_pavad = "Yamcha swordr";
$g_att = 25500;
}

if ($ka == "Yajirobe sword"){ $weap = $dari[30];
$dari[30] = $dari[30]-1;
$g_pavad = "Yajirobe sword";
$g_att = 30000;
}

if ($ka == "Dragon sword"){ $weap = $dari[31];
$dari[31] = $dari[31]-1;
$g_pavad = "Dragon sword";
$g_att = 42000;
}

if ($ka == "Trunks sword"){ $weap = $dari[32];
$dari[32] = $dari[32]-1;
$g_pavad = "Trunks sword";
$g_att = 50000;
}

if ($ka == "Majin sword"){ $weap = $dari[41];
$dari[41] = $dari[41]-1;
$g_pavad = "Majin sword";
$g_att = 1000000;
}

if ($ka == "Magic sword"){ $weap = $dari[42];
$dari[42] = $dari[42]-1;
$g_pavad = "Magic sword";
$g_att = 10000000;
}

if ($ka == "Fusion sword"){ $weap = $dari[43];
$dari[43] = $dari[43]-1;
$g_pavad = "Fusion sword";
$g_att = 1000000000;
}

if ($weap < 1) { $er = "Šio ginklo neturite!"; }
if (0<$ginklo_att){$er = "Norėdami užsidėti naują ginklą, pirma turite nusiimti senaja!"; }

if ($er == ""){
$er="Ginklas uždetas";

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$g_att|$g_pavad|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

include("icludekitainf/iras2.php");
}
echo"$er<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"used.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "use_radar"){

if ($ka == "Radar"){ $weap = $dari[19];
$dari[19] = $dari[19]-1;
$g_pavad = "Radar";
$g_att = 1000;
}

if ($weap < 1) { $er = "Šio daikto neturite!"; }
if (0<$useditems[1]){$er = "Norėdami užsidėti nauja daiktą, pirma turite nusiimti senaji!"; }

if ($er == ""){
$er="Radaras uždetas";
$useditems[0] = $g_pavad;
$useditems[1] = $g_att;
include("icludekitainf/useditems.php");
include("icludekitainf/iras2.php");
}
echo"$er<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"used.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "use_kgr"){

if ($ka == "kgr"){ $weap = $dari[35];
$dari[35] = $dari[35]-1;
$g_pavad = "kgr";
$g_att = 1000;
}

if ($weap < 1) { $er = "Šio daikto neturite!"; }
if (0<$useditems[3]){$er = "Norėdami užsidėti nauja daiktą, pirma turite nusiimti senaji!"; }

if ($er == ""){
$er="Kovines galios ieškiklis uždetas";
$useditems[2] = $g_pavad;
$useditems[3] = $g_att;
include("icludekitainf/useditems.php");
include("icludekitainf/iras2.php");
}
echo"$er<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"used.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "use_kinto"){

if ($ka == "kinto"){ $weap = $dari[45];
$dari[45] = $dari[45]-1;
$g_pavad = "kinto";
$g_att = 1000;
}

if ($weap < 1) { $er = "Šio daikto neturite!"; }
if (0<$useditems[5]){$er = "Norėdami užsidėti nauja daiktą, pirma turite nusiimti senaji!"; }

if ($er == ""){
$er="Kinto debesis uždetas";
$useditems[4] = $g_pavad;
$useditems[5] = $g_att;
include("icludekitainf/useditems.php");
include("icludekitainf/iras2.php");
}
echo"$er<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"used.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "use_potaro"){

if ($ka == "potaro"){ $weap = $dari[46];
$dari[46] = $dari[46]-1;
$g_pavad = "potaro";
$g_att = 1000;
}

if ($weap < 1) { $er = "Šio daikto neturite!"; }
if (0<$useditems[7]){$er = "Norėdami užsidėti nauja daiktą, pirma turite nusiimti senaji!"; }

if ($er == ""){
$er="Potaro auskarai uždeti";
$useditems[6] = $g_pavad;
$useditems[7] = $g_att;
include("icludekitainf/useditems.php");
include("icludekitainf/iras2.php");
}
echo"$er<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"used.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "use_meter"){

if ($ka == "meter"){ $weap = $dari[47];
$dari[47] = $dari[47]-1;
$g_pavad = "meter";
$g_att = 1000;
}

if ($weap < 1) { $er = "Šio daikto neturite!"; }
if (0<$useditems[9]){$er = "Norėdami užsidėti nauja daiktą, pirma turite nusiimti senaji!"; }

if ($er == ""){
$er="Potaro auskarai uždeti";
$useditems[8] = $g_pavad;
$useditems[9] = $g_att;
include("icludekitainf/useditems.php");
include("icludekitainf/iras2.php");
}
echo"$er<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"used.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == ""){ 
echo"<b>Aprangos/Atakos</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Atakų, šarvų ir aprangų kuriuos tu naudoji kovose, tvarkymas.</div><div class=\"meniu\" style=\"text-align: left;\">";
echo"<b>Ginklas: </b>"; 
if ($ginklo_att<=0){ echo" Nėra ant kūno..."; 
} else { echo"$ginklas (<b>+$ginklo_att Jėgos</b>) [<a href=\"used.php?id=nuimti_weap\">Nusiimti</a>]"; } echo"<br/>"; 
echo"</div><div class=\"meniu\" style=\"text-align: left;\"><b>Šarvas: </b>";
if ($sarvu_prot<=0){ echo" Nėra ant kūno..."; 
} else { echo"$sarvai (<b>+$sarvu_prot Gynybos</b>) [<a href=\"used.php?id=nuimti_sarv\">Nusiimti</a>]"; } echo"<br/>"; 

echo"</div><div class=\"meniu\" style=\"text-align: left;\"><b>Kinto debesis: </b>";
if ($useditems[5]<=0){ echo" Nėra ant kūno...";
} else { echo"Uždėtas ant kūno (<b>+20% Gynybos</b>) [<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=nuimti_kinto\">Nusiimti</a>]"; } echo"<br/>"; 

echo"</div><div class=\"meniu\" style=\"text-align: left;\"><b>Potaro auskarai: </b>";
if ($useditems[7]<=0){ echo" Nėra ant kūno...";
} else { echo"Uždėtas ant kūno (<b>+50% Gynybos</b>) [<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=nuimti_potaro\">Nusiimti</a>]"; } echo"<br/>"; 

echo"</div><div class=\"meniu\" style=\"text-align: left;\"><b>Jėgos matuoklis: </b>";
if ($useditems[9]<=0){ echo" Nėra ant kūno...";
} else { echo"Uždėtas ant kūno (<b>+50% Jėgos</b>) [<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=nuimti_meter\">Nusiimti</a>]"; } echo"<br/>"; 
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "nuimti_meter"){
if ($useditems[8] == "meter"){ $dari[47] = $dari[47]+1;}
if ($useditems[9] <= 0){
echo"Tu ir taip be kinto debesio!<br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"used.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
else
{
$useditems[8] = "0";
$useditems[9] = "0";
include("icludekitainf/useditems.php");
include("icludekitainf/iras2.php");
echo"Jėgos matuoklis nuimtas<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"used.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "nuimti_potaro"){
if ($useditems[6] == "potaro"){ $dari[46] = $dari[46]+1;}
if ($useditems[7] <= 0){
echo"Tu ir taip be kinto debesio!<br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"used.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
else
{
$useditems[6] = "0";
$useditems[7] = "0";
include("icludekitainf/useditems.php");
include("icludekitainf/iras2.php");
echo"Potaro auskarai nuimti<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"used.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "nuimti_kinto"){
if ($useditems[4] == "kinto"){ $dari[45] = $dari[45]+1;}
if ($useditems[5] <= 0){
echo"Tu ir taip be kinto debesio!<br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"used.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
else
{
$useditems[4] = "0";
$useditems[5] = "0";
include("icludekitainf/useditems.php");
include("icludekitainf/iras2.php");
echo"Kinto debesis nuimtas<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"used.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "nuimti_kgr"){
if ($useditems[2] == "kgr"){ $dari[35] = $dari[35]+1;}
if ($useditems[3] <= 0){
echo"Tu ir taip be radaro!<br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"used.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
else
{
$useditems[2] = "0";
$useditems[3] = "0";
include("icludekitainf/useditems.php");
include("icludekitainf/iras2.php");
echo"Kovines galios ieškiklis nuimtas<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"used.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";;}}

if ($id == "nuimti_radar"){
if ($useditems[0] == "Radar"){ $dari[19] = $dari[19]+1;}
if ($useditems[1] <= 0){
echo"Tu ir taip be radaro!<br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"used.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
else
{
$useditems[0] = "0";
$useditems[1] = "0";
include("icludekitainf/useditems.php");
include("icludekitainf/iras2.php");
echo"Radaras nuimtas<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"used.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "nuimti_sarv"){
if ($sarvai == "Cloth"){ $dari[9] = $dari[9]+1;}
if ($sarvai == "Kame cloth"){ $dari[10] = $dari[10]+1;}
if ($sarvai == "Namekian cloth"){ $dari[11] = $dari[11]+1;}
if ($sarvai == "Saiyan armor"){ $dari[12] = $dari[12]+1;}
if ($sarvai == "Saiyan prince armor"){ $dari[13] = $dari[13]+1;}
if ($sarvai == "Fusion cloth"){$dari[14] = $dari[14]+1;}
if ($sarvai == "Ginyu armor"){ $dari[15] = $dari[15]+1;}
if ($sarvai == "Dragon armor"){$dari[16] = $dari[16]+1;}
if ($sarvai == "Saiyaman costume"){ $dari[17] = $dari[17]+1;}
if ($sarvai == "Majin armor"){ $dari[38] = $dari[38]+1;}
if ($sarvai == "Magic armor"){ $dari[30] = $dari[39]+1;}
if ($sarvai == "Fusion armor"){ $dari[40] = $dari[40]+1;}

if ($sarvu_prot <= 0){
echo"Tu ir taip be aprangos!</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"used.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
else
{
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||0|Be_sarvu||\n");
fclose($fp);
include("icludekitainf/iras2.php");
echo"<b>Aprangos/Atakos</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"Šarvas nujimtas<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"used.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "nuimti_weap"){
if ($ginklas == "Staff"){ $dari[22] = $dari[22]+1;}
if ($ginklas == "Knife"){ $dari[23] = $dari[23]+1;}
if ($ginklas == "Sword"){ $dari[24] = $dari[24]+1;}
if ($ginklas == "God staff"){ $dari[25] = $dari[25]+1;}
if ($ginklas == "Magic staff"){ $dari[26] = $dari[26]+1;}
if ($ginklas == "Janemba sword"){$dari[27] = $dari[27]+1;}
if ($ginklas == "Ginyu sword"){ $dari[28] = $dari[28]+1;}
if ($ginklas == "Yamcha sword"){$dari[29] = $dari[29]+1;}
if ($ginklas == "Yajirobe sword"){ $dari[30] = $dari[30]+1;}
if ($ginklas == "Dragon sword"){ $dari[31] = $dari[31]+1;}
if ($ginklas == "Trunks sword"){ $dari[32] = $dari[32]+1;}
if ($ginklas == "Majin sword"){ $dari[41] = $dari[41]+1;}
if ($ginklas == "Magic sword"){ $dari[42] = $dari[42]+1;}
if ($ginklas == "Fusion sword"){ $dari[43] = $dari[43]+1;}

if ($ginklo_att <= 0){
echo"Tu ir taip be Ginklo!<br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"used.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
else
{
$fp = @fopen("$gameriai","w");
@fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|0|Beginklis|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
@fclose($fp);
include("icludekitainf/iras2.php");
echo"Ginklas nujimtas<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"used.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}



print '</body></html>';

?>