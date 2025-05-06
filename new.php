<?php
$kur = "Naujienos";
include ("config.php");
include_once("icludekitainf/start.php");

if ($id == "")
{
$page = $_GET['page'];
$DATA_FILE = "files for txt/new.txt";
$nuskk = file($DATA_FILE);
$viso_pm = count($nuskk);
$puslapiu_skaicius = 10;
echo"<b><b>Naujienos (<b>$viso_pm</b>)</b></b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
";
if ($stat == "Adminas"){
echo "<div class='input'><form action='new.php?id=irasau' method='post'>
<input type=\"hidden\" name=\"redirection\" value=\"dbf.us.lt\"/>
<textarea name=\"new\" id=\"dd\" type=\"text\" maxlength=\"1000\" rows=\"5\" cols=\"28\" placeholder=\"Max 1000 simbolių\" required></textarea><br/>
<input name=\"submit\" type=\"submit\" value=\"Rašyti\"/></form>
</div></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
}

if ($viso_pm == 0)
    {
echo"<b>Naujienu nera!</b>"; 
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

echo"$bbb[0] <i>$bbb[1]</i><br/></div><div class=\"meniu\" style=\"text-align: left;\">";
}

			

 $viso_puslapiu = $viso_pm / $puslapiu_skaicius;
echo"<div class=\"topbar\">";
    $viso_puslapiai = 0;       $starto_skaicius = 1;
  while ($viso_puslapiai < $viso_puslapiu)
        {
        if ($page == $starto_skaicius)
        {

                 echo "<b>$starto_skaicius</b> ";
        }
        else
        {
                echo"<a href=\"new.php?id=&amp;page=$starto_skaicius&amp;\">$starto_skaicius</a> ";
       }
        $viso_puslapiai++;
            $starto_skaicius++;

        }
}



echo"</div>";
echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}

if ($id == "irasau")
{
if ($stat != "Adminas"){
	}
	else
	{
$new = $_POST['new'];

$date = date("Y.m.d H:i");

$bll = fopen("files for txt/new.txt","a");
fwrite($bll,"$new<br/>[$date]|\n");
fclose($bll);

$blla = fopen("files for txt/new_data.txt","w");
fwrite($blla,"$date");
fclose($blla);

$blla = fopen("files for txt/new_time.txt","w");
fwrite($blla,time());
fclose($blla);
}

echo "<b>Naujienos</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Naujiena įrašyta sėkmingai.<br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"new.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}

print '</body></html>';
?>