<?php
$kur = "Moderatoriaus meniu";
include ("config.php");
include_once("icludekitainf/start.php");

///// 1 LYGIO MODERATORIAUS MENIU////////
if ($id == "unban_log")
{
if (($stat != "mod3") && ($stat != "mod4") && ($stat != "Adminas")){ echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?\">"; }
else {
$page = $_GET['page'];
$DATA_FILE = "files for txt/unban_log.txt";
$nuskk = file($DATA_FILE);
$viso_pm = count($nuskk);
$puslapiu_skaicius = 20;
echo"<b><b>Atbaninimo Logas</b></b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
";

if ($viso_pm == 0)
    {
echo"<b>Atbaninimo logas tuščias!</b>"; 
}
        else
        {
echo"<b><b>Atbanino / Ką atbanino / Dėl ko buvo  užbanintas </b></b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
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

echo"» <a href=\"pagrindinis.php?id=apie&amp;ka=$bbb[4]\"><u>$bbb[0]</u></a> / $bbb[1] / <i>$bbb[2]</i></div><div class=\"meniu\" style=\"text-align: left;\">";
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
                echo"<a href=\"moderator.php?id=unban_log&amp;page=$starto_skaicius&amp;\">($starto_skaicius)</a>";
       }
        $viso_puslapiai++;
            $starto_skaicius++;

        }
}
echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}}

if ($id == "pmlog")
{
if (($stat != "mod")  && ($stat != "mod2") && ($stat != "mod3") && ($stat != "mod4") && ($stat != "Adminas")){ echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?\">"; }
else {
$page = $_GET['page'];
$DATA_FILE = "files for txt/pm_log.txt";
$nuskk = file($DATA_FILE);
$viso_pm = count($nuskk);
$puslapiu_skaicius = 20;
echo"<b><b>PM Logas</b></b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
";

if ($viso_pm == 0)
    {
echo"<b>PM logas tuščias!</b>"; 
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

echo"» <a href=\"pagrindinis.php?id=apie&amp;ka=$bbb[4]\"><u>$bbb[0]</u></a>:  $bbb[1] [<i>$bbb[2]</i>]</div><div class=\"meniu\" style=\"text-align: left;\">";
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
                echo"<a href=\"moderator.php?id=pmlog&amp;page=$starto_skaicius&amp;\">($starto_skaicius)</a>";
       }
        $viso_puslapiai++;
            $starto_skaicius++;

        }
}
echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}}

if( $id == "dalybossaf" )
{
if  ($stat != "Adminas"){ echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?\">"; }
else {
echo "<b>Dalybas</b></div><div class=\"meniu\" style=\"text-align: center;\">";
echo"Dalybas gauna tik tie žaidėjai kurie buna prisijungę
</div><div class='meniu'>
<form action='?id=dalybos2' method=\"post\">
<B>Jėgos</B>:<br/>
<input type=\"text\" name=\"kiek_jegos\"><br/>
<br/>
<B>Gynybos</B>:<br/>
<input type=\"text\" name=\"kiek_gynybos\"><br/>
<br/>
<B>Pinigų</B>:<br/>
<input type=\"text\" name=\"kiek_pinigu\"><br/>
<br/>
<B>Litų</B>:<br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<input type=\"submit\" value=\"Siųsti\"><br/>
</div>";

$on=mysql_query("SELECT * FROM online ORDER BY id DESC LIMIT 500");
while ($onn = mysql_fetch_row($on))
{
	
	echo "$onn[1]";	echo "<br/>";
}
echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}}

if( $id == "dalybossfdg" )
{
if  ($stat != "Adminas"){ echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?\">"; }
else {
echo "<b>Dalybas</b></div><div class=\"meniu\" style=\"text-align: center;\">";
$jegos = abs(intval($_POST['kiek_jegos']));
$gynybos = abs(intval($_POST['kiek_gynybos']));
$pinigu = abs(intval($_POST['kiek_pinigu']));

$on=mysql_query("SELECT * FROM online ORDER BY id DESC LIMIT 500");
while ($onn = mysql_fetch_row($on))
{
$zinute = "<b>Įvyko dalybos ir gavotė: </b> <br/>
 Jėgos: <b>$jegos</b><br/>
 Gynybos: <b>$gynybos</b><br/>
 Pinigų: <b>$pinigu</b><br/>
 Ačiū kad žaidžiate <b>dbf.us.lt</b><br/>";
mysql_query("INSERT INTO pm SET what='funix', tema='Dalybos', txt='$zinute', gavejas='$onn[1]', time='".date("m-d H:i:s")."', nauj='NEW' ") or die(mysql_error());

$lt = @file_get_contents("account/$onn[1].txt");
@file_put_contents("account/$onn[1].txt", "$lt");


/*

$pinigai = $pinigai + $pinigu;
$jega = $jega + $jegos;
$gynyba = $gynyba + $gynybos;

$ZPI47851 = fopen("zaideju pagrindinai statusai/$onn[1].txt", "w");
fwrite($ZPI47851, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($ZPI47851);
@chmod("zaideju pagrindinai statusai/$onn[1].txt", 0777);	
*/
}
echo "Atlikta, dalybos išsiųstos.<br/>";
echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
}


if ($id == "mod_log")
{
if (($stat != "mod")  && ($stat != "mod2") && ($stat != "mod3") && ($stat != "mod4") && ($stat != "Adminas")){ echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?\">"; }
else {
$page = $_GET['page'];
$DATA_FILE = "files for txt/mod_log.txt";
$nuskk = file($DATA_FILE);
$viso_pm = count($nuskk);
$puslapiu_skaicius = 10;
echo"<b><b>Moderatoriu veiksmų logas</b></b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
";

if ($viso_pm == 0)
    {
echo"<b> Logas tuščias!</b>"; 
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

echo"[$bbb[0]] <b>$bbb[1]</b> ištrinė $bbb[2], laikas: $bbb[3]</div><div class=\"meniu\" style=\"text-align: left;\">";
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
                echo"<a href=\"moderator.php?id=mod_log&amp;page=$starto_skaicius&amp;\">($starto_skaicius)</a>";
       }
        $viso_puslapiai++;
            $starto_skaicius++;

        }
}
echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}}

if ($id == "perlaidos_log")
{
if (($stat != "mod")  && ($stat != "mod2") && ($stat != "mod3") && ($stat != "mod4") && ($stat != "Adminas")){ echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?\">"; }
else {
$page = $_GET['page'];
$DATA_FILE = "files for txt/perlaidos_log.txt";
$nuskk = file($DATA_FILE);
$viso_pm = count($nuskk);
$puslapiu_skaicius = 10;
echo"<b><b>Sąskaitos perlaidos logas</b></b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
";

if ($viso_pm == 0)
    {
echo"<b>Perlaidų logas tuščias!</b>"; 
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

echo"» $bbb[0]</div><div class=\"meniu\" style=\"text-align: left;\">";
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
                echo"<a href=\"moderator.php?id=perlaidos_log&amp;page=$starto_skaicius&amp;\">($starto_skaicius)</a>";
       }
        $viso_puslapiai++;
            $starto_skaicius++;

        }
}
echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}}

if ($id == "topic_logas")
{
if (($stat != "mod")  && ($stat != "mod2") && ($stat != "mod3") && ($stat != "mod4") && ($stat != "Adminas")){ echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?\">"; }
else {
        echo "<b>Topic keitimo logas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";

$page = $_GET['page'];
$DATA_FILE = "files for txt/topic_zinutes.txt";
$nuskk = file($DATA_FILE);
$viso_pm = count($nuskk);
$puslapiu_skaicius = 10;
if ($viso_pm == 0)
    {
echo"<b>Topic logas tuščias!</b>"; 
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

echo"<b>Topic žinutė: </b>$bbb[0]<br/>
<b>Pakeite:</b> <a href=\"pagrindinis.php?id=apie&amp;ka=$bbb[2]\">$bbb[1]</a>
</div><div class=\"meniu\" style=\"text-align: left;\">";
}
 $viso_puslapiu = $viso_pm / $puslapiu_skaicius;

    $viso_puslapiai = 0;       $starto_skaicius = 1;
  while ($viso_puslapiai < $viso_puslapiu)
        {
        if ($page == $starto_skaicius)
        {
                 echo "<b>[$starto_skaicius]</b>";
        }
        else
        {
                echo"<a href=\"moderator.php?id=topic_logas&amp;page=$starto_skaicius&amp;\">($starto_skaicius)</a>";
       }
        $viso_puslapiai++;
            $starto_skaicius++;

        }
}

echo"</div><div class='line'></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "ban_log")
{
if (($stat != "mod")  && ($stat != "mod2") && ($stat != "mod3") && ($stat != "mod4") && ($stat != "Adminas")){ echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?\">"; }
else {
        echo "<b>Užbanintu žaidėjų logas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";

        $log_file = "files for txt/ban_log.txt";
        $nuskk = file($log_file);
        $viso_logu = count($nuskk);
        $puslapiu_skaicius = 10;
        if ($viso_logu == 0)
        {
        echo "Logas yrą tuščias<br/>";
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
            if ($viso_logu <= $page * $puslapiu_skaicius)
            {
                $iki = $viso_logu;
            }
 
            for ($g = $nuo; $g < $iki; $g++)
            {
                $g6 = array_reverse($nuskk);
                $k6 = explode("|", $g6[$g]);
                $bn_l = round(($k6[1]) / 60, 0);
                echo "
Užbanintas <b>$k6[0]</b> žaidėjas, užbaninimo laikas <b>$bn_l min.</b> užbanino <b>$k6[3]</b> moderatorius, priežastis <b>$k6[2]</b><br/>
[<i>$k6[4]</i>]<br/></div><div class=\"meniu\" style=\"text-align: left;\">";
            }
  
            $viso_puslapiu = $viso_logu / $puslapiu_skaicius;
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
                    echo "<a href=\"moderator.php?id=ban_log&amp;page=$starto_skaicius\">($starto_skaicius)</a>";
                }
                $viso_puslapiai++;
                $starto_skaicius++;

            }
        }

echo"</div><div class='line'></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}
$laiks = @ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['laiks']);
$kuode = @ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['kuode']);
if ($id == "uzbaninti")
{
if (($stat != "mod")  && ($stat != "mod2") && ($stat != "mod3") && ($stat != "mod4") && ($stat != "Adminas")){ echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?\">"; }
else {
        $kam = $_GET['kam'];
		$laiks = $_GET['laiks'];
		$kuode = $_GET['kuode'];
echo"<b>Užbaninti žaidėją</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Už reklamą, nuorodas: - 99999 minučių.<br/>
[<a href=\"moderator.php?id=uzbaninti&amp;kam=$kam&amp;laiks=99999&amp;kuode=Už reklamą, nuorodas\">Pasirinkti šią priežastį</a>]
 </div><div class=\"meniu\" style=\"text-align: left;\">
 Turėjimas daugiau nei 2 nickus: - 99999 minučių.<br/>
[<a href=\"moderator.php?id=uzbaninti&amp;kam=$kam&amp;laiks=99999&amp;kuode= Turėjimas daugiau nei 2 nickus\">Pasirinkti šią priežastį</a>]
 </div><div class=\"meniu\" style=\"text-align: left;\">
Už kreditų, pinigų arba nick pardavinėjimą/pirkimą už tikrus pinigus - 90000 minučių. <br/>
[<a href=\"moderator.php?id=uzbaninti&amp;kam=$kam&amp;laiks=90000&amp;kuode=Už kreditų, pinigų arba nick pardavinėjimą/pirkimą už tikrus pinigus\">Pasirinkti šią priežastį</a>]
 </div><div class=\"meniu\" style=\"text-align: left;\">
Už reketavimus - 3000 minučių. <br/>
[<a href=\"moderator.php?id=uzbaninti&amp;kam=$kam&amp;laiks=3000&amp;kuode=Už reketavimus\">Pasirinkti šią priežastį</a>]
 </div><div class=\"meniu\" style=\"text-align: left;\">
Už siūlymą pakelti lygį, prašymą žymos adreso ar kitokį prašinėjimą su tikslu į jūsų vartotojo įėjimą - 3000 minučių. <br/>
[<a href=\"moderator.php?id=uzbaninti&amp;kam=$kam&amp;laiks=3000&amp;kuode=Už siūlymą pakelti lygį, prašymą žymos adreso ar kitokį prašinėjimą su tikslu į jūsų vartotojo įėjimą\">Pasirinkti šią priežastį</a>]
 </div><div class=\"meniu\" style=\"text-align: left;\">
Už sms siuntimą/prašymą siųsti į kita žaidimą arba sms pervedimą į sąskaitą nesusijusią su šiuo žaidimu - 3000 minučių. <br/>
[<a href=\"moderator.php?id=uzbaninti&amp;kam=$kam&amp;laiks=3000&amp;kuode=Už sms siuntimą/prašymą siųsti į kita žaidimą arba sms pervedimą į sąskaitą nesusijusią su šiuo žaidimu\">Pasirinkti šią priežastį</a>]
 </div><div class=\"meniu\" style=\"text-align: left;\">
Už rašinėjimą ant topic nesąmonių. Bereikšmius pranešimus, tam yra Mini Chatas arba PM. - 60 minučių. <br/>
[<a href=\"moderator.php?id=uzbaninti&amp;kam=$kam&amp;laiks=60&amp;kuode=Už rašinėjimą ant topic nesąmonių. Bereikšmius pranešimus, tam yra Mini Chatas arba PM. \">Pasirinkti šią priežastį</a>]
 </div><div class=\"meniu\" style=\"text-align: left;\">
Už kreditų, pinigų ar kitų žaidimo resusų prašymą - 30 minučių. <br/>
[<a href=\"moderator.php?id=uzbaninti&amp;kam=$kam&amp;laiks=30&amp;kuode=Už kreditų, pinigų ar kitų žaidimo resusų prašymą\">Pasirinkti šią priežastį</a>]
 </div><div class=\"meniu\" style=\"text-align: left;\">
Už bet kokį varymą ant žaidimo, jo reputacijos teršimą. Taip pat apie kūrėją. - 500 minučių. <br/>
[<a href=\"moderator.php?id=uzbaninti&amp;kam=$kam&amp;laiks=500&amp;kuode=Už bet kokį varymą ant žaidimo, jo reputacijos teršimą. Taip pat apie kūrėją.\">Pasirinkti šią priežastį</a>]
 </div><div class=\"meniu\" style=\"text-align: left;\">
Už aukštesnio rango žaidėjo negerbimą, varymą - 120 minučių. <br/>
[<a href=\"moderator.php?id=uzbaninti&amp;kam=$kam&amp;laiks=120&amp;kuode=Už aukštesnio rango žaidėjo negerbimą, varymą\">Pasirinkti šią priežastį</a>]
 </div><div class=\"meniu\" style=\"text-align: left;\">
Už vartotojų įžeidinėjimą - 60 minučių.<br/>
[<a href=\"moderator.php?id=uzbaninti&amp;kam=$kam&amp;laiks=60&amp;kuode=Už vartotojų įžeidinėjimą\">Pasirinkti šią priežastį</a>]
 </div><div class=\"meniu\" style=\"text-align: left;\">

<b><font color=red>1 ir 2 lygio Moderatoriai per 24 valandas gali baninti tik 3 kartus dėl reklamos ar savanaudiškumo.</font></b>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<form action=\"moderator.php?id=uzbaninti2&amp;kam=$kam\" method=\"post\">

<b>Žaidėjo nick'as:</b><br/>
<input name=\"kam_ban\" type=\"text\" maxlength=\"20\" title=\"ka\" value=\"$kam\"/><br/>

<b>Užbaninimo laikas:</b><br/>
<input name=\"laiks\" type=\"text\" format=\"*N\" maxlength=\"5\" title=\"laiks\" value=\"$laiks\"/><br/>
<b>Priežastis:</b><br/>
<input name=\"kuode\" type=\"text\" maxlength=\"180\" title=\"kode\" value=\"$kuode\"/><br/>

<input type='submit' value='Užbaninti'></form>
</div><div class='line'></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "uzbaninti2"){
if (($stat != "mod")  && ($stat != "mod2") && ($stat != "mod3") && ($stat != "mod4") && ($stat != "Adminas")){ echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?\">"; }
else {
$kam = $_GET['kam'];
if ($kam == ""){
$kam_ban = $_POST['kam_ban']; } else {
$kam_ban = $kam; }
$laiks = $_POST['laiks'];
$kuode = $_POST['kuode'];
if ($kam_ban == "") { $er = "Paliktas tuščias laukelis."; }
if ($kuode == "") { $er = "Paliktas tuščias laukelis."; }
if ($laiks == "") { $er = "Paliktas tuščias laukelis."; }
if (!file_exists("zaideju pagrindinai statusai/$kam_ban.txt")){ $er = "<b>Sis žaidėjas neužregistruotas!</b>"; }
if ($siandien_ban > 5 && $vrd !== "@$nick" && $vrd !== "&$nick" && $vrd !== "#$nick") { $er = "1 ir 2 lygio moderatoriai per 24 valandas galima baninti tik 5  kartus. "; }
if ($laiks > 99999) { $er = "Dižiausias užbaninimo laikas yra 99999 min."; }
if ($laiks == 0) { $er = "Mažiausias užbaninimo laikas yra 1 min."; }
if ($kam_ban == $nick) { $er = "Savęs užbaninti negalima"; }
$g6 = file("files for txt/nick_bans.txt");
$kiek_g6 = count($g6);
for($pf=0; $pf < $kiek_g6; $pf++) {
$k6 = explode("|",$g6[$pf]);
if ($kam_ban == $k6[0]) { $er = "Šis vartotojas jau yra užbanintas"; }
}
if ($kam_ban == "funix") { $er = "Administracijos baninti negalima, tai už tokius darbus galite būti nubaustas."; }
if ($er == "") {
$arre = array("<",">","&","^","%","\n","|");
$kuode = str_replace($arre,"",$kuode);
$laiks2 = $laiks*60;
$ban_time = time()+$laiks2; 
$fp = fopen("files for txt/nick_bans.txt","a"); 
fwrite($fp,"$kam_ban|$ban_time|$kuode|$vrd|\n");
fclose($fp);
$iras = $ban_time-time();
$siandien_ban = @file_get_contents("ban apsauga/$nick.txt");
$siandien_ban = $siandien_ban+1;
@file_put_contents("ban apsauga/$nick.txt", "$siandien_ban");
$fp6 = fopen("files for txt/ban_log.txt","a");
fwrite($fp6,"$kam_ban|$iras|$kuode|$vrd|$laikas|\n");
fclose($fp6);
$skills = @explode("|",@file_get_contents("skill/$kam_ban.txt"));
$kiekbans=$skills[90]+1;
$julijaxxc = @fopen("skill/$kam_ban.txt", "w+");
@fwrite($julijaxxc,"$skills[0]|$skills[1]|$skills[2]|$skills[3]|$skills[4]|$skills[5]|$skills[6]|$skills[7]|$skills[8]|$skills[9]|$skills[10]|$skills[11]|$skills[12]|$skills[13]|$skills[14]|$skills[15]|$skills[16]|$skills[17]|$skills[18]|$skills[19]|$skills[20]|$skills[21]|$skills[22]|$skills[23]|$skills[24]|$skills[25]|$skills[26]|$skills[27]|$skills[28]|$skills[29]|$skills[30]|$skills[31]|$skills[32]|$skills[33]|$skills[34]|$skills[35]|$skills[36]|$skills[37]|$skills[38]|$skills[39]|$skills[40]|$skills[41]|$skills[42]|$skills[43]|$skills[44]|$skills[45]|$skills[46]|$skills[47]|$skills[48]|$skills[49]|$skills[50]|$skills[51]|$skills[52]|$skills[53]|$skills[54]|$skills[55]|$skills[56]|$skills[57]|$skills[58]|$skills[59]|$skills[60]|$skills[61]|$skills[62]|$skills[63]|$skills[64]|$skills[65]|$skills[66]|$skills[67]|$skills[68]|$skills[69]|$skills[70]|$skills[71]|$skills[72]|$skills[73]|$skills[74]|$skills[75]|$skills[76]|$skills[77]|$skills[78]|$skills[79]|$skills[80]|$skills[81]|$skills[82]|$skills[83]|$skills[84]|$skills[85]|$skills[86]|$skills[87]|$skills[88]|$skills[89]|$kiekbans|$skills[91]|$skills[92]|$skills[93]|$skills[94]|$skills[95]|$skills[96]|$skills[97]|$skills[98]|$skills[99]|$skills[100]|");
@fclose($julijaxxc); 
@chmod("skill/$kam_ban.txt",0777);
$er = "<b>Sėkmingai užbaninta!</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Vartotojo vardas: <b>$kam_ban</b><br/>
Užbaninimo laikas: <b>$laikas</b><br/>
Priežastis: <b>$kuode</b><br/>";
}
echo"<b>Užbaninti žaidėją</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
$er<br/>
</div><div class='line'></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "skaityti_pm")
{
if (($stat != "mod")  && ($stat != "mod2") && ($stat != "mod3") && ($stat != "mod4") && ($stat != "Adminas")){ echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?\">"; }
else {
    $nickas = $_GET['nickas'];
    $pusl = $_GET['pusl'];

    $nickas = ereg_replace("[^A-Za-z0-9_-]", "", $nickas);

    $xixixi = @explode("|",@file_get_contents("sun/$nickas.txt")); 
    if ($nickas == ""){$er = "Neivestas nickas";}
     if ($nickas == "funix"){$er = "Admin pm negalima skaityti";}
    if ($pusl == ""){$er = "Neivestas puslapis";}
    if (!file_exists("sun/$nickas.txt")){$er = "Šis žaidejas neregistruotas!";}
    if (!file_exists("zaideju pagrindinai statusai/$nickas.txt")){$er = "Šis žaidejas neregistruotas!"; }

    if ($er == "")
    {
        $er = "<b>$nickas PM</b><br/>";

    $pm_direktorija = 'sun';
    $DATA_FILE = "$pm_direktorija/$nickas.txt";
    $nuskk = file($DATA_FILE);
    $viso_pm = count($nuskk);
    $puslapiu_skaicius = 10;
	echo "<b>Žaidėjo Pm skaitymas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
    if ($viso_pm == 0)
    {
        echo " </div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">Šis žaidejas neturi pm žinučių.<br/>";
    }
    else
    {
        if ($page == "")
        {
            $page = $pusl;
        }

        $next = $pusl + 1;
        $back = $pusl - 1;

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
            $masyw = array("@", "*", "~", "!", "^", "&");
            $nuo_ko2 = str_replace($masyw, "", $nuo_ko);
            if ($nuo_ko == "@SISTEMA")
            {
                echo "<div class='sistem_got'><b>&#187; @SISTEMA</b>: $zinute<br/></div>";
            }
            else
            {
                if ($nuo_ko2 == $nickas)
                {
                    $vrdr = $int[4];
                    if ($int[4] == "funix")
                    {
                        $vrdr = "@funix";
                    }
                    if ($int[4] != "funix")
                    {
                       if (@in_array("$int[4]\n", @file("txt/mods.txt"))){$vrdr = "*$int[4]";} }
						if (@in_array("$int[4]\n", @file("txt/mods.txt"))){$vrdr = "~$int[4]";}
						if (@in_array("$int[4]\n", @file("txt/mods.txt"))){$vrdr = "^$int[4]";}
						if (@in_array("$int[4]\n", @file("txt/mods.txt"))){$vrdr = "!$int[4]";}
						if (@in_array("$int[4]\n", @file("txt/mods.txt"))){$vrdr = "#$int[4]";}
                    echo "<div class='send'><i><b>&#171; to: <a href=\"pagrindinis.php?id=apie&amp;ka=$int[4]\">$vrdr</a></b> - $zinute<br/>[$siunt_data]</i><br/></div>
";
                }
                else
                {
                    echo "<div class='got'><b>&#187; <a href=\"pagrindinis.php?id=apie&amp;ka=$nuo_ko2\">$nuo_ko</a></b>: $zinute<br/><i>[$siunt_data]</i><br/>
               </div>";
                }
            }
        }
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
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
             echo "<a href=\"moderator.php?id=skaityti_pm&amp;nickas=$nickas&amp;pusl=$starto_skaicius\">($starto_skaicius)</a>";
            }
            $viso_puslapiai++;
            $starto_skaicius++;

        }

    }
    echo "</div><div class=\"meniu\" style=\"text-align: center;\">$er
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}}

if ($id == "ips")
{
include_once("icludekitainf/function.php");
if ($stat == "mod3" or $stat == "mod4" or  $stat == "Adminas"){
$ipi = post($_POST['ip']);
echo"<b>Žaidėjų paieška pagal IP</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Čia jus galite pažiurėti kiek žaidėjas turi nick pagal jo nicka. Nebaninkite iš karto kol neisitikinote ar tikrai jo turite taip pat žaireti pervedimų logus ir pm logus. Nes jei jus užbaninsite be priežasities nujimsime moderatoriu.<br/><u>Žaidėjas gali turėti tik 2 nickus.</u><br/>
Žaidėjo IP:
<form action='moderator.php?id=ips' method='POST'>
<input name=\"ip\" type=\"text\" maxlength=\"20\" title=\"useris\" value=\"\"/><br/>
<input type='submit' value='Ie&#353;koti'></input></form>
<br/>";
if(isset($_POST['submit'])){
}else{
if(empty($ipi)){
echo' Žaidėjo IP laukėlis paliktas tuščias!';
}else{
if(mysql_num_rows(mysql_query("SELECT * FROM ip WHERE ip='$ipi'")) == 0){
echo' Apie toki IP: <b>'.$ipi.'</b> nera informacijos!';
}else{
$ip_info = mysql_fetch_assoc(mysql_query("SELECT * FROM ip WHERE ip='$ipi'"));
echo''.$ico.'<b> IP: </b>'.$ip_info['ip'].'<br />';
$ieina = $ip_info['ip'];
$query_ip = mysql_query("SELECT * FROM ip WHERE ip = '$ieina'");
$num_rows2 = mysql_num_rows(mysql_query("SELECT * FROM ip WHERE ip = '$ieina'"));
echo' '.$ico.'<b> Nickų:</b>   '.$num_rows2.' ';
while($row2 = mysql_fetch_assoc($query_ip)){
echo' '.$row2[nick].' ';
}
   } }}
    echo "
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
}

if ($id == "trinti_nenaud")
{
if ($stat != "Adminas"){ echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?\">"; }
else {
echo"<b>Įštrinti nenaudojamus vartotojus</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
        $link="zaideju pagrindinai statusai/";
        $dir = glob($link."*");
        $eil=count($dir);
        for($it=0; $it<$eil; $it++){
        $dr=str_replace($link,"",$dir[$it]);
        $dr=str_replace(".txt","",$dr);
        $po = file_get_contents("zaideju pagrindinai statusai/$dr.txt");
        $pi = explode("|",$po);
        $min = $pi[0];
		
        if (time() - $pi[17] > 2678400){ echo"<a href=\"pagrindinis.php?id=apie&amp;ka=$dr\"><b>$dr</b></a> (";
		$pi[17] = round((time() - $pi[17])); 
	$met = floor(($pi[17] / 60 / 60 / 24 / 31 / 12));
	$mon = floor(($pi[17] / 60 / 60 / 24 / 31)	- (floor($pi[17] / 60 / 60 / 24 / 31 / 12) * 12));
	$day = floor(($pi[17] / 60 / 60 / 24)			- (floor($pi[17] / 60 / 60 / 24 / 31) * 31));
	$val = floor(($pi[17] / 60 / 60)				- (floor($pi[17] / 60 / 60 / 24) * 24));
	$min = floor(($pi[17] / 60)						- (floor($pi[17] / 60 / 60) * 60));
	$sec = floor($pi[17]								- (floor($pi[17] / 60) * 60));
if($mon != "0"){echo"<b>$mon</b> men. </b>";}
 if($day != "0"){echo"<b>$day</b> d. </b>";}
 if($val != "0"){echo"<b>$val</b> val. </b>";}echo"<br/>"; }
        }
    echo "</div><div class=\"meniu\" style=\"text-align: center;\">
	<a href=\"moderator.php?id=trinti_nenaud2\">Trinti visus nenaudojamus</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
    }
}

if ($id == "trinti_nenaud2"){
echo"<b>Įštrinti nenaudojamus vartotojus</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
        $link="zaideju pagrindinai statusai/";
        $dir = glob($link."*");
        $eil=count($dir);
        for($it=0; $it<$eil; $it++){
        $dr=str_replace($link,"",$dir[$it]);
        $dr=str_replace(".txt","",$dr);
        $po = @file_get_contents("zaideju pagrindinai statusai/$dr.txt");
        $pi = explode("|",$po);
        $min = $pi[0];
if (time() - $pi[17] > 2678400){
		@unlink("zaideju pagrindinai statusai/$dr.txt"); 
		@unlink("kitaaainf/$dr.ly");
        @unlink("account/$dr.txt"); 
        @unlink("aprasymas/$dr.txt"); 
        @unlink("atvesti/$dr.txt"); 
        @unlink("darinfos/$dr.ly");
        @unlink("dtop/$dr.txt"); 
        @unlink("kitokiainf/$dr.txt");
        @unlink("komentarai/$dr.txt");
        @unlink("kronoss/$dr.txt");
        @unlink("online/$dr.txt");
		@unlink("reputacija/balsavo/$dr.txt");
		@unlink("reputacija/neigiama/$dr.txt");
		@unlink("reputacija/teigiama/$dr.txt");
        @unlink("skill/$dr.txt");
        @unlink("smstop/$dr.txt");
        @unlink("sun/$dr.txt");
		@unlink("susijungimas/siulo/$dr.txt");
		@unlink("susijungimas/susijunge/$dr.txt");
		@unlink("vieta/$dr.txt");
		@unlink("vtop/$dr.txt"); 
		@unlink("zaideju papildoma informacija/$dr.txt");
		@unlink("varzybos/online/$dr.txt");
		@unlink("tikslas/$dr.txt");
		@unlink("paslaugos/daugiau exp/$dr.txt");
		@unlink("paslaugos/daugiau pinigu/$dr.txt");	
		@unlink("paslaugos/didesnis nukaunamuma/$dr.txt");
		@unlink("paslaugos/padusimai/$dr.txt");
		@unlink("paslaugos/daugiau pinigu/$dr.txt");
@unlink("ip/$dr.txt");	
@unlink("bankas/$dr.txt");
@unlink("nustatymai/$dr.txt");
@unlink("pasiekimai/$dr.txt");
@unlink("used items/$dr.txt");
@unlink("awards/$dr.txt");
@unlink("isbarsyti/$dr.txt");
@unlink("padusimai/$dr.txt");
mysql_query("DELETE FROM `ip` WHERE `nick` = '$dr'") or die(mysql_error());
mysql_query("DELETE FROM `black_list` WHERE `nick` = '$dr'") or die(mysql_error());
mysql_query("DELETE FROM `loterija` WHERE `nick` = '$dr'") or die(mysql_error());
mysql_query("DELETE FROM `sms_top` WHERE `nick` = '$dr'") or die(mysql_error());
} } 
    echo "</div><div class=\"meniu\" style=\"text-align: center;\">
Sėkmingai vartotojai ištrinti.<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
    
}
if ($id == "payment_list"){
include_once("icludekitainf/function.php");
 $psl = $_GET['psl'];
echo"Žaidėjų sąskaitos pildymo logas.</div><div class=\"meniu\" style=\"text-align: left;\">";
  $viso = mysql_result(mysql_query("SELECT COUNT(*) FROM payment_log "),0);
    if($viso > 0){
		   echo" 
      <table class=table align=center>
       <tr>
        <th><b>#</b></th>
		 <th>Žaidėjo vardas</th>
        <th>Suma</th>
        <th>Laikas</th>
		<th>Mokėjimo būdas</th>
       </tr>	";
    $rezultatu_rodymas=5;
            $total = @intval(($viso-1) / $rezultatu_rodymas) + 1;
            if (empty($psl) or $psl < 0) $psl = 1;
            if ($psl > $total) $psl = $total;
            $nuo_kiek=$psl*$rezultatu_rodymas-$rezultatu_rodymas;
     $query = mysql_query("SELECT * FROM payment_log ORDER BY id DESC LIMIT $nuo_kiek,$rezultatu_rodymas");
     $puslapiu = ceil($viso/$rezultatu_rodymas);
     while ($row = mysql_fetch_assoc($query)) {
        echo "<tr align=center>
        <td>$row[id]</td>
		<td><a href=\"pagrindinis.php?id=apie&amp;ka=$row[kas]\">$row[kas]</a></td>
		<td>$row[suma] $row[valiuta]</td>
        <td>$row[laikas]</td>
		<td>$row[budas]</td>
       </tr>"; 
unset($row);
}
  echo '</table></div><div class="meniu" style="text-align: center;">
				 '.puslapiavimas($puslapiu,$psl,'?id=payment_list').'<br/>';
}
    else {
   echo 'Sąskaitos pildymo logas tuščias.';
   }
echo"
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "remove_many")
{
if ($vrd !== "@$nick"){ echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?\">"; }
else {
echo"<b>Įštrinti nenaudojamus vartotojus</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
        $link="zaideju pagrindinai statusai/";
        $dir = glob($link."*");
        $eil=count($dir);
        for($it=0; $it<$eil; $it++){
        $dr=str_replace($link,"",$dir[$it]);
        $dr=str_replace(".txt","",$dr);
        $po = file_get_contents("zaideju pagrindinai statusai/$dr.txt");
        $pi = explode("|",$po);
        $min = $pi[0];
$paskuti2 = round((((time() - $pi[17]) + 10) / 60) / 60, 0);
        if ($paskuti2 > 1){ echo"<a href=\"pagrindinis.php?id=apie&amp;ka=$dr\"><b>$dr</b></a> $pi[7] (";
		$pi[17] = round((time() - $pi[17])); 
	$day = floor(($pi[17] / 60 / 60 / 24)			- (floor($pi[17] / 60 / 60 / 24 / 31) * 31));
	$val = floor(($pi[17] / 60 / 60)				- (floor($pi[17] / 60 / 60 / 24) * 24));
	$min = floor(($pi[17] / 60)						- (floor($pi[17] / 60 / 60) * 60));
	$sec = floor($pi[17]							- (floor($pi[17] / 60) * 60));

 if($day  != "0"){echo"<b>$day</b> d. </b>";}
 if($val != "0"){echo"<b>$val</b> val. </b>";}echo")<br/>"; }
        }
    echo "</div><div class=\"meniu\" style=\"text-align: center;\">
	<a href=\"moderator.php?id=remove_many2\">Nuimti visiems pinigus</a><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
    }
}

if ($id == "remove_many2")
{
if ($vrd !== "@$nick"){ echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?\">"; }
else {
echo"<b>Įštrinti nenaudojamus vartotojus</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
        $link="zaideju pagrindinai statusai/";
        $dir = glob($link."*");
        $eil=count($dir);
        for($it=0; $it<$eil; $it++){
        $dr=str_replace($link,"",$dir[$it]);
        $dr=str_replace(".txt","",$dr);
        $po = file_get_contents("zaideju pagrindinai statusai/$dr.txt");
        $pi = explode("|",$po);
        $min = $pi[0];
		$pinigai = $pi[7];
        $paskuti2 = round((((time() - $pi[17]) + 10) / 60) / 60, 0);
        if ($paskuti2 > 0){
	
	            $NKM = @file_get_contents("zaideju pagrindinai statusai/$dr.txt");
            $infa = explode("|", $NKM);
			$infa[7] = 0;
            $fp1 = @fopen("zaideju pagrindinai statusai/$dr.txt", "w");
            @fwrite($fp1, "$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$infa[7]|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|+|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
            @fclose($fp1);
	@unlink("kitaaainf/$dr.ly");
		 @unlink("kronoss/$dr.txt");
        }}
    echo "</div><div class=\"meniu\" style=\"text-align: center;\">
Sėkmingai nuimti visiems pinigai.<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
    }
}


if ($id == "valyti_chata") {
if (($stat != "mod2") && ($stat != "mod3") && ($stat != "mod4") && ($stat != "Adminas")){
echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?\">"; }
else {
$dsghj = date("H:i");
$fp = @fopen("files for txt/chat message.txt","w");
@fwrite($fp,"");
@fclose($fp);
echo"Jūs sėkmingai išvalėte mini chatą</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}}

if ($id == "unban")
{
if (($stat != "mod3") && ($stat != "mod4") && ($stat != "Adminas")){ echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?\">"; }
else {
echo"<b>Vartotojų atbaninimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
        $nv = array_reverse(file("files for txt/nick_bans.txt"));
        $kiek_nv = count($nv);
        for ($pv = 0; $pv < $kiek_nv; $pv++)
        {
            $kv = explode("|", $nv[$pv]);
            $uzb_lv = $kv[1] - time();
            $uzb_lv2 = round(($uzb_lv) / 60, 0);
$kam_banas0 = stripslashes($kv[0]);
$masyw = array("@","*", "!", "+", "&");
$nck0 = str_replace($masyw,"",$kam_banas0);

            echo "Užbanintas: <a href=\"pagrindinis.php?id=apie&amp;ka=$nck0\"><b>$kv[0]</b></a>, dėl šios priežasties <b> $kv[2]</b><br/>
Užbanino <b>$kv[3]</b>, užbaninimo laikas dar tesis <b>$uzb_lv2</b> min.<br/>
[&#8226;]  <a href=\"moderator.php?id=unban2&amp;kam=$kv[0]\">Nuimti ban</a><br/>";
if ($stat != "Adminas"){}else{ 
echo"[&#8226;]  <a href=\"moderator.php?id=unban3&amp;kam=$kv[0]\">Ištrinti vartotoją</a><br/>";}
echo"</div><div class=\"meniu\" style=\"text-align: left;\">";
        }

        echo "</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>"; }}
/*
if ($id == "off_mode")
{
if ($stat == "mod4" or $stat == "Adminas"){
        echo "<form action=\"moderator.php?id=off_modee2\" method=\"post\">
<b>Nuimti moderatoriaus statusą žaidėjui</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Žaidėjo vardas:<br/>
<input name=\"kam_mod\" type=\"text\" maxlength=\"50\" title=\"ka\" value=\"\"/><br/>

Priežastis:<br/>
<input  name=\"paskirtis\" type=\"text\" format=\"*N\" maxlength=\"300\" title=\"Paskirtis\" value=\"\"/><br/>
<postfield name=\"paskirtis\" value=\"$(paskirtis)\"/>
<input type='submit' value='OK'></form>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";} 
}

if ($id == "off_modee2")
{
if ($stat == "mod4" or $stat == "Adminas"){
        $kam_mod = $_POST['kam_mod'];
		$paskirtis = htmlspecialchars( $_POST['paskirtis']);
		if ($paskirtis == "") { $er = "Paliktas tuščias laukelis!"; }
        if ($kam_mod == "")
        {
            $er = "Nenurodei kam nuimti moderatoriu";
        }
        if (!file_exists("zaideju pagrindinai statusai/$kam_mod.txt"))
        {
            $er = "Sis zaidejas neuzregistruotas!";
        }
        if ($er == "")
        {
            $nkh2y = file("files for txt/mods.txt");
            $kiek_nkh2y = count($nkh2y);
            for ($py2y = 0; $py2y < $kiek_nkh2y; $py2y++)
            {
                $kly2y = explode("|", $nkh2y[$py2y]);
                if ($kam_mod == $kly2y[0])
                {
                    $nkh2y[$py2y] = "";
                    $fpz2y = fopen("files for txt/mods.txt", "w");
                    fwrite($fpz2y, implode($nkh2y));
                    fclose($fpz2y);
					  $us = @file_get_contents("zaideju pagrindinai statusai/$kam_mod.txt");
            $infa = explode("|", $us);
			$laikas = date("Y-m-d H:i:s");
						$atidaryma = fopen("sun/$kam_mod.txt", "a");
fwrite($atidaryma, "@SISTEMA|Jums nujimtas moderatoriaus statusas, nujeme: <b>$nick</b>. Priežastis: <b>$paskirtis</b>|$laikas|\n");
fclose($atidaryma);

            $fp1 = fopen("zaideju pagrindinai statusai/$kam_mod.txt", "w");
            fwrite($fp1, "$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$infa[7]|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|+|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
            fclose($fp1);
                }
            }
            $er = "$kam_mod nuemei moderatoriaus statusą<br/>Priežastis: <b>$paskirtis</b>";
        }
    echo "</div><div class=\"meniu\" style=\"text-align: center;\">
$er<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
    }}

*/

if ($id == "unban2")
{
if (($stat != "mod4") && ($stat != "Adminas")){ echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?\">"; }
else {
        $kam = $_GET['kam'];

        $er = "Vartotojas <b>$kam</b> sėkmingai atbanintas!";
        $nv = file("files for txt/nick_bans.txt");
        $kiek_nv = count($nv);
        for ($pv = 0; $pv < $kiek_nv; $pv++)
        {
            $kv = explode("|", $nv[$pv]);
            if ($kam == $kv[0])
            {
			$fp6 = @fopen("files for txt/unban_log.txt","a");
@fwrite($fp6,"$nick|$kam|$kv[2]|".date("H:i:s Y-m-d")."|\n");
@fclose($fp6);
                $nv[$pv] = "";
                $fpv = fopen("files for txt/nick_bans.txt", "w");
                fwrite($fpv, implode($nv));
                fclose($fpv);
                break;
            }
        }

        echo "$er<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";} }

if ($id == "unban3")
{
if ($stat != "Adminas"){echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=pagrindinis.php?\">"; }
else {
        $kam = $_GET['kam'];
        $er = "Vartotojas <b>$kam</b> sėkmingai ištrintas!";
		@unlink("zaideju pagrindinai statusai/$kam.txt"); 
		@unlink("kitaaainf/$kam.ly");
        @unlink("account/$kam.txt"); 
        @unlink("aprasymas/$kam.txt"); 
        @unlink("atvesti/$kam.txt"); 
        @unlink("darinfos/$kam.ly");
        @unlink("dtop/$kam.txt"); 
        @unlink("kitokiainf/$kam.txt");
        @unlink("komentarai/$kam.txt");
        @unlink("kronoss/$kam.txt");
        @unlink("online/$kam.txt");
		@unlink("reputacija/balsavo/$kam.txt");
		@unlink("reputacija/neigiama/$kam.txt");
		@unlink("reputacija/teigiama/$kam.txt");
        @unlink("skill/$kam.txt");
        @unlink("smstop/$kam.txt");
        @unlink("sun/$kam.txt");
		@unlink("susijungimas/siulo/$kam.txt");
		@unlink("susijungimas/susijunge/$kam.txt");
		@unlink("vieta/$kam.txt");
		@unlink("vtop/$kam.txt"); 
		@unlink("zaideju papildoma informacija/$kam.txt");
		@unlink("varzybos/online/$kam.txt");
		@unlink("tikslas/$kam.txt");
		@unlink("paslaugos/daugiau exp/$kam.txt");
		@unlink("paslaugos/daugiau pinigu/$kam.txt");	
		@unlink("paslaugos/didesnis nukaunamuma/$kam.txt");
		@unlink("paslaugos/padusimai/$kam.txt");
		@unlink("paslaugos/daugiau pinigu/$kam.txt");
@unlink("ip/$kam.txt");	
@unlink("bankas/$kam.txt");
@unlink("nustatymai/$kam.txt");
@unlink("pasiekimai/$kam.txt");
@unlink("used items/$kam.txt");
mysql_query("DELETE FROM `ip` WHERE `nick` = '$kam'") or die(mysql_error());
mysql_query("DELETE FROM `black_list` WHERE `nick` = '$kam'") or die(mysql_error());
mysql_query("DELETE FROM `loterija` WHERE `nick` = '$kam'") or die(mysql_error());
mysql_query("DELETE FROM `sms_top` WHERE `nick` = '$kam'") or die(mysql_error());
        $nv = file("files for txt/nick_bans.txt");
        $kiek_nv = count($nv);
        for ($pv = 0; $pv < $kiek_nv; $pv++)
        {
            $kv = explode("|", $nv[$pv]);
            if ($kam == $kv[0])
            {
			
                $nv[$pv] = "";
                $fpv = fopen("files for txt/nick_bans.txt", "w");
                fwrite($fpv, implode($nv));
                fclose($fpv);
                break; 
}}

        echo "$er<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";} }

if($id == "bals"){
          include_once("icludekitainf/function.php");
            if(isset($_POST['submit'])){
                $kl = post($_POST['klsm']); $ats1 = post($_POST['ats1']); $ats2 = post($_POST['ats2']); $ats3 = post($_POST['ats3']);$ats4 = post($_POST['ats4']);$ats5 = post($_POST['ats5']);
                if(empty($kl) OR empty($ats1) OR empty($ats2)){
                    echo 'Paliktas tuščias laukelis!';
                }
                elseif(!preg_match('/[A-Za-z]+[?]/', $kl)){
                    echo 'Klausimas turi pasibaigti klaustuku!';
                }
                else{
                    echo 'Balsavimas sukurtas!';
     
			mysql_query("INSERT INTO vote SET nick='{$nick}',klausimas='{$kl}',atsv='{$ats1}',atsd='{$ats2}',atst='{$ats3}',atsk='{$ats4}',atsp='{$ats5}',data='".time()."'");
                }
				echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">";
            }
            echo '<div class="meniu">
            <form action="?id=bals" method="post"/>
             Klausimas:<br />
            <input type="text" name="klsm" size="30"/></div><div class="meniu">
             1 atsakymas:<br /><input type="text" name="ats1" size="8"/><br />
             2 atsakymas:<br /><input type="text" name="ats2" size="8"/><br />
             3 atsakymas:<br /><input type="text" name="ats3" size="8"/><br />
			  4 atsakymas:<br /><input type="text" name="ats4" size="8"/><br />
			   5 atsakymas:<br /><input type="text" name="ats5" size="8"/><br />
            <input type="submit" name="submit" value="Kurti"/></form>
            </div>';
			echo"</div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
		
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
        }

if ($id == "delete_topic"){ 
if ($stat == "mod3" or $stat == "mod4" or $stat == "Adminas"){
if (file_exists("files for txt/topic_zinutes.txt")){ 
echo"Sekmingai ištrinta
</div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
$nkh2 = file("files for txt/topic_zinutes.txt"); 
$kiek_nkh2 = count($nkh2);
for($py2=0; $py2 < $kiek_nkh2; $py2++) {
$kly2 = explode("|",$nkh2[$py2]); 
if ($kj == $kly2[4]){ 
$nkh2[$py2] = ""; 
$fp6 = @fopen("files for txt/mod_log.txt","a");
@fwrite($fp6,"TOPIC|$nick|($kly2[1])$kly2[0]|".date("H:i:s Y-m-d")."|\n");
@fclose($fp6);

$fpz2 = fopen("files for txt/topic_zinutes.txt","w"); 
fwrite($fpz2,implode($nkh2)); 
fclose($fpz2); break; 
}}}}}

if ($id == "deleted_chat"){ 
if (($stat == "mod") or($stat == "mod2") or ($stat == "mod3") or ($stat == "mod4") or ($stat == "Adminas")){
if (file_exists("files for txt/chat message.txt")){ 
echo"Sekmingai ištrinta</div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a></div><div class=\"foot\">$bottom</div></div>";
$nkh2 = file("files for txt/chat message.txt"); 
$kiek_nkh2 = count($nkh2);
for($py2=0; $py2 < $kiek_nkh2; $py2++) {
$kly2 = explode("|",$nkh2[$py2]); 
if ($kj == $kly2[4]){ 
$nkh2[$py2] = ""; 
$fp6 = @fopen("files for txt/mod_log.txt","a");
@fwrite($fp6,"CHAT|$nick|($kly2[2])$kly2[1]|".date("H:i:s Y-m-d")."|\n");
@fclose($fp6);
$fpz2 = fopen("files for txt/chat message.txt","w"); 
fwrite($fpz2,implode($nkh2)); 
fclose($fpz2); break; 
}}}}}



print'</card></wml>';
?>