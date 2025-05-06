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
$kur = "Dienos topas";
include ("config.php");
echo"<link href=\"css/$nustatymai[20].css\" rel=\"stylesheet\" type=\"text/css\"/>
</head>";

echo "<div class=\"in\"><div class=\"logo\"><img src=\"imgs/logo-$mm[110].png\" alt=\"*\"/>
</div><div class=\"meniu\" style=\"text-align: center; border-top: 1px solid #000000;\">";
$prizas = @file_get_contents("files for txt/dtop_prizas.txt");
$ddprizas = @number_format($prizas, 0, ',', ' ');
echo"<b>Dienos topas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Kiekvieną dieną visi varžosi dėl tam tikrų prizų. Kad laimėtumėte, reikia padaryti kuo daugiau veiksmų. Jų gaunate kovodami...<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
&#352;iandienos prizas: <b>$ddprizas pinigų.</b><br/>
</div><div class=\"meniu\" style=\"text-align: left;\">";
        foreach (glob("dtop/*.txt") as $a)
        {
            $name = str_replace(array("dtop/", ".txt"), "", $a);
            $ex = @explode("|", @file_get_contents($a));
            $arr[] = array("$ex[0]", "$name");
        }
		echo "<b>&#352;iandien pirmauja:</b><br/>";
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
        echo "$nr) <b><a href=\"pagrindinis.php?id=apie&amp;ka={$arr[$f][1]}\">{$arr[$f][1]}</a></b> ({$arr[$f][0]})<br/>";
    }

		echo ".....<br/><b><a href=\"pagrindinis.php?id=apie&amp;ka=$nick\">$nick</a>: (".@file_get_contents("dtop/$nick.txt").")</b><br/>";
		
	
    $sk = count($arr);
echo "</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\"><b>Laimetoj&#371; istorija:</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">";
echo "</div><div class=\"gf\" style=\"text-align: left;\"><b>Ankstesni pirmos vietos nugalejotai:</b><br/></div><div class=\"f\" style=\"text-align: left;\">";
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
echo"$nr. <b>$data</b> <u>$win</u> pinigų, atlikęs <u>$atliko</u> veikmsus, laimėjo <a href=\"main.php?user_name=$nick&amp;countersign=$pass&amp;another=apie&amp;ka=$nck\">$nickas</a><br/>";
}
echo"";
 $viso_puslapiu = $viso_pm / $puslapiu_skaicius;

    $viso_puslapiai = 0;       $starto_skaicius = 1;
  while ($viso_puslapiai < $viso_puslapiu)
        {
        if ($page == $starto_skaicius)
        {
                 echo "<label class=\"paging_default\">$starto_skaicius</label>";
        }
        else
        {
                echo"<label class=\"paging\"><a href=\"main.php?another=day_top&amp;page=$starto_skaicius&amp;user_name=$nick&amp;countersign=$pass&amp;ka=$ka\">$starto_skaicius</a></label>";
       }
        $viso_puslapiai++;
            $starto_skaicius++;
        }	   
echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";

print '</body></html>';

?>