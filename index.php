<?php
ob_start();
@session_start();
$time = date("H:i Y-m-d");

$id = $_GET['id'];
$nick = $_GET['nick'];
$passs = $_GET['passs'];
$online = count(glob("online/*.txt"))-1;
$aktyviu =count(glob("aktyviu/*.txt"));
$zaideju = count(glob("zaideju pagrindinai statusai/*.txt"))-1;

$max_onl = @file_get_contents("files for txt/max_on.txt");
$max_online = explode("|",$max_onl);
$max_online = explode("|",$max_onl);
$max_onl2 = @file_get_contents("files for txt/dienos_max_on.txt");
$max_online2 = explode("|",$max_onl2);

$bottom = "&#169;2020 SDB.LT <br/>info@SDB.LT";

echo "
<?xml version=\"1.0\" encoding=\"UTF-8\"?>
 <!DOCTYPE html PUBLIC \"-//WAPFORUM//DTD XHTML Mobile 1.0//EN\" \"http://www.wapforum.org/DTD/xhtml-mobile10.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\"><head>
<meta name=\"verify-webtopay\" content=\"a70b267693e07e989a7e7dcbf34ba18f\">
<meta http-equiv=\"Content-Style-Type\" content=\"text/css\"/>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
<meta http-equiv=\"Cache-Control\" content=\"no-cache\"/>";
$dsghj = date("H:i:s Y-m-d");
echo "<title>Drakonų Kova Z | Dragon Ball Z </title>
<link rel=\"shortcut icon\" href=\"imgs/ico.ico\" type=\"image/x-icon\"/>
<link href=\"css/style_green.css\" rel=\"stylesheet\" type=\"text/css\"/>
</head>";

?>

 <script language=JavaScript>
//Disable right click script
var message = "";
///////////////////////////////////
function clickIE() {
    if (document.all) {
        (message);
        return false;
    }
}

function clickNS(e) {
    if (document.layers || (document.getElementById && !document.all)) {
        if (e.which == 2 || e.which == 3) {
            (message);
            return false;
        }
    }
}
if (document.layers) {
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown = clickNS;
} else {
    document.onmouseup = clickNS;
    document.oncontextmenu = clickIE;
}

document.oncontextmenu = new Function("return false")
</script> <?
if ($id == "") {
$ip = $_SERVER['REMOTE_ADDR']; 
$iskur = $_GET['f'];
if ($iskur != "" && file_exists("zaideju pagrindinai statusai/$iskur.txt")){ 
$a = file("files for txt/atv.txt"); 
for ($i=0; $i<count($a); $i++){
$b = explode("|",$a[$i]); 
if ($b[0] == $ip){ $l = "yra"; break; } }
if ($l != "yra"){ 
$f = fopen("files for txt/atv.txt","a");
fwrite($f,"$ip|\n");
fclose($f); 
$lp = explode("|",file_get_contents("zaideju pagrindinai statusai/$iskur.txt")); 
if (!file_exists("kronoss/$iskur.txt")){ $kronu = 0; } else { $kronu = @file_get_contents("kronoss/$iskur.txt"); }
 $fop = @fopen("kronoss/$iskur.txt", "w+");
        @fwrite($fop,$kronu+0.5);
        @fclose($fop);
@chmod("kronoss/$iskur.txt",0777); 
$penrt1 = @fopen("atvesti/$iskur.txt","a+");
        @fwrite($penrt1, "$ip|\n"); 
        @fclose($penrt1); 
        @chmod("atvesti/$iskur.txt",0777); 
}
}
$klll = @file_get_contents("files for txt/max_on.txt");
$ghkk = explode("|",$klll);

    $new_data = file_get_contents("files for txt/new_data.txt");
$DATA_FILE = "files for txt/new.txt";
$nuskk = @file($DATA_FILE);
$viso_pm = count($nuskk);
    echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    SDB.LT - b&#363;k su geriausiais...
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";

$nnn = @file("files for txt/add_tittle.txt");
    $nnn2 = array_reverse($nnn);
    for ($i = 0; $i < 1; $i++)
    {
        $et = explode("|", $nnn2[$i]);
        $textmax = "50";
	$text= "$et[1]";
	$aprasymas = substr($text, 0, $textmax);

        echo "<a href=\"$et[0]\"><b>$aprasymas</b></a>";}
		

	
echo" <a href=\"index.php?id=add_tittle\">[?]</a><br/> </div><div class=\"line\">";

echo'			</div><div class="meniu center" style="padding-bottom: 0px;"><div class="game">
<img src="imgs/kami.png" alt="" class="prepod"/>
<div class="quest">
Naršyklinis žaidimas apie drakonų kovas. Čia galėsi treniruotis, ieškoti drakono rutulių, iškviesti dievą drakoną, bendrauti, bei įsijungti į antrą savo gyvenimą.
<br/><small><i><span class="raudona">Naujas žaidėjas gauna 2x daugiau pinigų, 3x daugiau exp, 3x didesni nukaunamumą ir 2x mažesnius padusimus.</i></span></small></div></div>

<div class="quest">
<span class="raudona"> <b>padarytas restartas penktadienį dalybos 22:00</b></span></div>


<a href="index.php?id=registers&amp;server=server1"/><img src="imgs/start.png" alt="Pradėti žaisti!"/></a><br/>
<div class="clear"></div>';

/*
echo"

			</div><div class=\"meniu center\" style=\"padding-bottom: 0px;\">
			<table>
			<tr>
			<td>
SDB.LT yra naršyklinis žaidimas apie drakonų kovas. Čia galėsi treniruotis, ieškoti drakono rutulių, iškviesti dievą drakoną kuris išpildis jūsų norą, bendrauti, bei įsijungti į antrą savo gyvenimą. Esi drakonų kovų gerbėjas? Tuomet nieko nelauk, registruokis ir tapk legendiniu DBF kovotoju! <br/>

<small><i><span class=\"raudona\">Naujas žaidėjas gauna 2x daugiau pinigų, 3x daugiau exp, 3x didesni nukaunamumą ir per 2x mažesnius padusimus.</i></span></small><br/>
<a  class='green_button_s' href='index.php?id=registers&amp;server=server1'/><b>Pradėti žaisti!</b></a><br/>
			</td>
			<td>
			<img width=\"100\" height=\"100\" src=\"/imgs/dbf2.png\" alt=\"*\"/>
			</td>
			</tr>
			</table>
			
			";
			*/
			
			echo"
			</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<form action='index.php?id=login' method='post'>
Žaidėjo vardas: <br/>
<input name=\"nick\" type=\"text\" maxlength=\"15\" title=\"Nikas\"/><br/>
Slaptažodis:<br/>
<input name=\"pass\" type=\"password\" maxlength=\"30\" title=\"Slaptazodis\"/><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<input type=\"submit\" class=\"mar\" value=\"Prisijunkti\" /></FORM><br/>
</div>
<div class=\"line\"></div>
		<div class=\"meniu\" style=\"text-align: center;\">
	";
	$floo3 = "1341146400";
	$likb = round((time()-$floo3)); 

	$met = floor(($likb / 60 / 60 / 24 / 31 / 12));
	$mon = floor(($likb / 60 / 60 / 24 / 31)	- (floor($likb / 60 / 60 / 24 / 31 / 12) * 12));
	$day = floor(($likb / 60 / 60 / 24)			- (floor($likb / 60 / 60 / 24 / 31) * 31));
	$val = floor(($likb / 60 / 60)				- (floor($likb / 60 / 60 / 24) * 24));
	$min = floor(($likb / 60)						- (floor($likb / 60 / 60) * 60));
	$sec = floor($likb								- (floor($likb / 60) * 60));

echo"<br/>
		</div>
		<div class=\"meniu\" style=\"text-align: center;\">";
echo "Viso žaidėjų: <b>$zaideju</b><br/>";
echo "Žaidžia dabar: <b>$online</b><br/>";
echo "Aktyvių žaidėjų <b>$aktyviu</b><br/>";
echo "</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"index.php?id=add\"><b>REKLAMA:</b></a><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
"; 
$nnn = file("files for txt/add_bottom.txt");
    $nnn2 = array_reverse($nnn);
    for ($i = 0; $i < 5; $i++)
    {
        $et = explode("|", $nnn2[$i]);
        $textmax = "45";
	$text= "$et[1]";
	$aprasymas = substr($text, 0, $textmax);

        echo "<a href=\"$et[0]\">$aprasymas</a><br/></b></b></b></b></b></b></b>";
    }
	echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
	<iframe src=\"//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FDBFLT%2F172940879532038&amp;width=200&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21\" scrolling=\"no\" frameborder=\"0\" style=\"border:none; overflow:hidden; width:155px; height:21px;\" allowTransparency=\"true\"></iframe><br/>
<img src=\"http://wtop.us/count.php?id=wedb\" alt=\"WAP TOP\"/> <img src=\"http://cntr.finx.lt/c.php?i=funix\" alt=\"\"/>
<br/></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
	<a href='https://www.youtube.com/watch?v=BKn_8Lk9W8Q' target='_blank'><img src='imgs/youtube.png'/></a>
<a href='https://plus.google.com/109575957843944965492'  target='_blank'>


<img src='imgs/googleplus.png'/></a>
</div><div class=\"foot\"></font><font color='#ffffff'>$bottom</font></div></div>";} 

if ($id == "info"){echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    INFORMACIJA
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: left;\">";
echo"
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
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php?&amp;id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "update")
{
$page = $_GET['page'];
$DATA_FILE = "files for txt/new.txt";
$nuskk = @file($DATA_FILE);
$viso_pm = count($nuskk);
$puslapiu_skaicius = 10;
echo"<b>Naujienos</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
";
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

echo"$bbb[0]<br/></div><div class=\"meniu\" style=\"text-align: left;\">";
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
                echo"<a href=\"index.php?id=update&amp;page=$starto_skaicius\">($starto_skaicius)</a>";
       }
        $viso_puslapiai++;
            $starto_skaicius++;

        }
}

echo"	</div>	<div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "add"){ echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    Bottom SMS reklama
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
echo"
Rodomos paskutinės 5 reklamos.<br/>
Rašyti adresą reikia be <b>http://</b>.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
Norint uždėti reklamą reikia siųsti SMS su tekstu: <br/>
<b>AD2 adresas antraste</b><br/>
Pavyzdys:<br/>
<b>AD2 SDB.LT drakonu kova!</b><br/>
Žinutę reikia siųsti šiuo numeriu:<br/>
<b>1398</b><br/>
Vienos žinutės kaina:<br/>
0.57 Eur<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<div align=\"left\" style=\"color: #9f0000\">Norint uždėti reklamą raudonu šriftu reikia siųsti SMS su tekstu: <br/>
<b>AD3 adresas antraste</b><br/>
Pavyzdys:<br/>
<b>AD3 SDB.LT drakonu kova!</b><br/>
Žinutę reikia siųsti šiuo numeriu:<br/>
<b>1398</b><br/>
Vienos žinutės kaina:<br/>
0.85 Eur<br/>
</div>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "add_tittle"){ echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    Tittle SMS reklama
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
echo"
\"Tittle\" reklama yra žymiai efektyvi, nes reklamos šriftas yra didesnis nei iprastos reklamos ir yra rodoma viršuje.<br/>
Rašyti adresą reikia be <b>http://</b>.<br/>
</div><div class=\"meniu\" style=\"text-align: left;\">
Norint uždėti reklamą reikia siųsti SMS su tekstu: <br/>
<b>AD5  adresas antraste</b><br/>
Pavyzdys:<br/>
<b>AD5  SDB.LT drakonu kova!</b><br/>
Žinutę reikia siųsti šiuo numeriu:<br/>
<b>1398</b><br/>
Vienos žinutės kaina:<br/>
1.42 Eur <br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<div align=\"left\" style=\"color: #9f0000\">Norint uždėti reklamą raudonu šriftu reikia siųsti SMS su tekstu: <br/>
<b>AD7 adresas antraste</b><br/>
Pavyzdys:<br/>
<b>AD7 SDB.LT drakonu kova!</b><br/>
Žinutę reikia siųsti šiuo numeriu:<br/>
<b>1398</b><br/>
Vienos žinutės kaina:<br/>
2 Eur<br/>
</div>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "addx"){ echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    PRISIJUNGIMAS
	    </div>
	
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
		?>

				  
           <section class="login">
                  <form action="loginas.php" method="GET" >
                  <input type="text" name="vrd" required title="Username required" placeholder="Slapyvardis" data-icon="U">
        <input type="password" required title="Password required" placeholder="Slaptazodis" data-icon="x" name="pasw">
        <div class="olvido">
        	<div class="col"><a href="index.php?go=reg" title="Registracija">Registracija</a></div>
            <div class="col"><a href="index.php?go=forgot" title="Recuperar Password">Pamiršau slaptažodį</a></div>
        </div>
        <input type="submit" class="enviar" value="Prisijungti">
    </form></selection>
				  </div><?
echo"
	<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";
}

if ($id == "log"){ 

echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    PRISIJUNGIMAS
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";

echo"<form action='index.php?id=login' method='post'>
Pasirinkite serverį:<br/>
	<select name=\"server\">";
echo "<option value=\"server1\">1 Serveris</option>";

echo"<br/></select>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">

Vardas:<br/>
<input name=\"nick\" type=\"text\" maxlength=\"15\" title=\"Nikas\"/><br/>
Slaptažodis:<br/>
<input name=\"pass\" type=\"password\" maxlength=\"30\" title=\"Slaptazodis\"/><br/>
<input type=\"submit\" class=\"mar\" value=\"Prisijunkti\" /></FORM><br/>";
			echo"</div>
	<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";
}

if ($id == "login"){
$server = $_POST['server']; 



echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    PRISIJUNGIMAS  į 1 Serverį
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
        $nick = $_POST['nick'];
        $pass = md5($_POST['pass']);
    $nuskaitymas = @file_get_contents("zaideju pagrindinai statusai/$nick.txt");
    $info = explode("|", $nuskaitymas);
	
  if(empty($nick)){
            echo "Neįvestas žaidėjo vardas! <br/><a href=\"index.php?id=pass&amp;nick=$nick\"><b>Pamiršote slaptažodį?</b></a><br/>";
			echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php?&amp;id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
        }
        else
		
		if(empty($pass)){
            echo "Neįvestas slaptažodis!<br/><a href=\"index.php?id=pass&amp;nick=$nick\"><b>Pamiršote slaptažodį?</b></a><br/>";
						echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php?&amp;id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
        }
		else
if ($pass != $info[1])
{
echo "Blogai &#303;vestas prisijungimo vardas arba slapta&#382;odis<br/><a href=\"index.php?id=pass&amp;nick=$nick\"><b>Pamiršote slaptažodį?</b></a><br/>";
			echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php?&amp;id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";

        }
		else
		   	if($nick != $info[2]){
            echo "Blogai &#303;vestas prisijungimo vardas arba slapta&#382;odis<br/><a href=\"index.php?id=pass&amp;nick=$nick\"><b>Pamiršote slaptažodį?</b></a><br/>";
						echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php?&amp;id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
        }else{
            echo 'Sveikas, <b>'.$nick.'</b> prisijungus prie žaidimo!<br />Gerai praleikite laiką!</b>';
                  setcookie('nick', $nick, time()+60*60*12); // Cookie visi metus :)
			setcookie('pass', $pass, time()+60*60*12); // Cookie visi metus :)
			echo"</div><div class=\"meniu\" style=\"text-align: center;\"><B><a  href=\"pagrindinis.php?\">ŽAIDIMAS</a></B>
	
	</DIV><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";
}}

if ($id == "pass"){
$nick = $_GET['nick']; 

echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    Pamiršote slaptažodį?
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
print "
<b>Pamiršote arba kitu būdu netekote savo slaptažodžio?</b></div><div class=\"meniu\" style=\"text-align: center;\">
Jūs galite susigrąžinti savo nick jeigu meniu skyrelyje nustatėte savo telefono numerį.<br/>
Tada jums tereikia išsiųsti žinutę su tekstu:<br/><b>PAS $nick</b><br/>
Numeriu:<br/><b>1398</b><br/>
Kaina:<br/><b>1 LT</b><br/>
Šią žinutę privalote siųsti iš to numerio kurį įvedėte būdami prisijungę, jei siuntėjo numeris nesutaps su nustatytuoju, tai jūs slaptažodžio negausite.<br/>
	</DIV><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}

/*
if ($server == "server2"){
echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    PRISIJUNGIMAS į 2 Serverį
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
        $nick = $_POST['nick'];
        $pass = md5($_POST['pass']);
    $nuskaitymas = @file_get_contents("s2/zaideju pagrindinai statusai/$nick.txt");
    $info = explode("|", $nuskaitymas);
	
  if(empty($nick)){
            echo 'Neįvestas žaidėjo vardas!';
			echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php?&amp;id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
        }
        else
		
		if(empty($pass)){
            echo 'Neįvestas slaptažodis!';
						echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php?&amp;id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
        }
		else
if ($pass != $info[1])
{
echo 'Blogai &#303;vestas prisijungimo vardas arba slapta&#382;odis';
			echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php?&amp;id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
		else
		   	if($nick != $info[2]){
            echo 'Blogai &#303;vestas prisijungimo vardas arba slapta&#382;odis';
						echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php?&amp;id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
        }else{
            echo 'Sveikas, <b>'.$nick.'</b> prisijungus prie žaidimo!<br />Gerai praleikite laiką!</b>';
                  setcookie('nick', $nick, time()+60*60*6); // Cookie visi metus :)
			setcookie('pass', $pass, time()+60*60*6); // Cookie visi metus :)
			echo"</div><div class=\"meniu\" style=\"text-align: center;\"><B><a  href=\"s2/pagrindinis.php\">ŽAIDIMAS</a></B>
	
	</DIV><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";
}}
*/
	
/*
if ($id == "registers"){  
echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    REGISTRACIJA
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
echo"<b>Pasirinkite serverį</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"index.php?id=register2&amp;server=server1\"><img src=\"http://SDB.LT/imgs/server1.php\" alt=\"1 serveris\"/></a><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<b>NORMALUS SERVERIS, VISIEMS!</b><br/>
1 serveris, parastas serveris, rekomenduojamas taip pat visiems.<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"index.php?id=register2&amp;server=server2\"><img src=\"http://SDB.LT/imgs/server2.php\" alt=\"2 serveris\"/></a><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<b>REKOMENDUOJAMĖ NAUJOKAMS</B><BR/>
2 serveris, čią kovos vyksta kur kas greičiau. Žaidimo lengvumas net x10. Prisijunk ir išbandyk.<br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}
*/


if ($id == "registers"){  
echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    REGISTRACIJA
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
$server = $_GET['server'];
echo"<b>Pasirinkite veikėją</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Visi veikėjai turi savu minusu savu plūsiu, vieni veikėjai turi mažai transformacijų bet turi didesnius bonusus, tad išsirink geriausia.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"index.php?id=Goku&amp;server=$server\">Goku</a><br/>
<a href=\"index.php?id=Goku&amp;server=$server\"><img src=\"imgs/chear icon/goku-icon.png\" alt=\"*\"/></a><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"index.php?id=Vegeta&amp;server=$server\">Vegeta</a><br/>
<a href=\"index.php?id=Vegeta&amp;server=$server\"><img src=\"imgs/chear icon/vegeta-icon.png\" alt=\"*\"/></a></b>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"index.php?id=Piccolo&amp;server=$server\">Piccolo</a><br/>
<a href=\"index.php?id=Piccolo&amp;server=$server\"><img src=\"imgs/chear icon/piccolo-icon.png\" alt=\"*\"/></a></b>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"index.php?id=Kid Trunks&amp;server=$server\">Kid Trunks</a><br/>
<a href=\"index.php?id=Kid Trunks&amp;server=$server\"><img src=\"imgs/chear icon/trunks.png\" alt=\"*\"/></a></b>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"index.php?id=Kid Goten&amp;server=$server\">Kid Goten</a><br/>
<a href=\"index.php?id=Kid Goten&amp;server=$server\"><img src=\"imgs/chear icon/goten-icon.png\" alt=\"*\"/></a></b>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"index.php?id=Raditz&amp;server=$server\">Raditz</a><br/>
<a href=\"index.php?id=Raditz&amp;server=$server\"><img src=\"imgs/chear icon/raditz-icon.png\" alt=\"*\"/></a></b>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"index.php?id=Bardock&amp;server=$server\">Bardock</a><br/>
<a href=\"index.php?id=Bardock&amp;server=$server\"><img src=\"imgs/chear icon/bardok-icon.png\" alt=\"*\"/></a></b>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"index.php?id=Bulma&amp;server=$server\">Bulma</a><br/>
<a href=\"index.php?id=Bulma&amp;server=$server\"><img src=\"imgs/chear icon/bulma-icon.png\" alt=\"*\"/></a></b>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"index.php?id=Future Trunks&amp;server=$server\">Future Trunks</a><br/>
<a href=\"index.php?id=Future Trunks&amp;server=$server\"><img src=\"imgs/chear icon/trunks-icon.png\" alt=\"*\"/></a></b>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"index.php?id=Cell&amp;server=$server\">Cell</a><br/>
<a href=\"index.php?id=Cell&amp;server=$server\"><img src=\"imgs/chear icon/cell-icon.png\" alt=\"*\"/></a></b>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"index.php?id=Frieza&amp;server=$server\">Frieza</a><br/>
<a href=\"index.php?id=Frieza&amp;server=$server\"><img src=\"imgs/chear icon/frieza-icon.png\" alt=\"*\"/></a></b>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"index.php?id=Buu&amp;server=$server\">Buu</a><br/>
<a href=\"index.php?id=Buu&amp;server=$server\"><img src=\"imgs/chear icon/buu-icon.png\" alt=\"*\"/></a></b>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"index.php?id=Cooler&amp;server=$server\">Cooler</a><br/>
<a href=\"index.php?id=Cooler&amp;server=$server\"><img src=\"imgs/chear icon/coller-icon.png\" alt=\"*\"/></a></b>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"index.php?id=Gohan&amp;server=$server\">Gohan</a><br/>
<a href=\"index.php?id=Gohan&amp;server=$server\"><img src=\"imgs/chear icon/gohan-icon.png\" alt=\"*\"/></a></b>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"index.php?id=Broly&amp;server=$server\">Broly</a><br/>
<a href=\"index.php?id=Broly&amp;server=$server\"><img src=\"imgs/chear icon/broly-icon.png\" alt=\"*\"/></a></b>
</div><div class=\"meniu\" style=\"text-align: center;\">
<a href=\"index.php?id=Android 17&amp;server=$server\">Android 17</a><br/>
<a href=\"index.php?id=Android 17&amp;server=$server\"><img src=\"imgs/chear icon/android 18-icon.png\" alt=\"*\"/></a></b><br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}
/*
if ($id == "register2"){  
echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    REGISTRACIJA
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
$server = $_GET['server'];
echo"<b>Pasirinkite veikėją</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Visi veikėjai turi savu minusu savu plūsiu, vieni veikėjai turi mažai transformacijų bet turi didesnius bonusus, tad išsirink geriausia.
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"index.php?id=Goku&amp;server=$server\">Goku</a></b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"index.php?id=Vegeta&amp;server=$server\">Vegeta</a></b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"index.php?id=Piccolo&amp;server=$server\">Piccolo</a></b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"index.php?id=Kid Trunks&amp;server=$server\">Kid Trunks</a></b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"index.php?id=Kid Goten&amp;server=$server\">Kid Goten</a></b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"index.php?id=Raditz&amp;server=$server\">Raditz</a></b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"index.php?id=Bardock&amp;server=$server\">Bardock</a></b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"index.php?id=Bulma&amp;server=$server\">Bulma</a></b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"index.php?id=Future Trunks&amp;server=$server\">Future Trunks</a></b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"index.php?id=Cell&amp;server=$server\">Cell</a></b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"index.php?id=Frieza&amp;server=$server\">Frieza</a></b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"index.php?id=Buu&amp;server=$server\">Buu</a></b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"index.php?id=Cooler&amp;server=$server\">Cooler</a></b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"index.php?id=Gohan&amp;server=$server\">Gohan</a></b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"index.php?id=Broly&amp;server=$server\">Broly</a></b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
(&#187;) <a href=\"index.php?id=Android 17&amp;server=$server\">Android 17</a></b><br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}
*/
if ($id == "Piccolo"){
echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    REGISTRACIJA
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
$server = $_GET['server'];
echo"<b>Piccolo</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/veikejai/piccolo-0.png\"><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Jegą: <b>+5%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gynybą: <b>+20%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gyvybes: <b>+20%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Transformacijos <b>1</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"index.php?id=register3&amp;mo=Piccolo&amp;server=$server\">Testi registraciją</a></b><br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Bulma"){
echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    REGISTRACIJA
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
 $server = $_GET['server']; 
echo"<b>Bulma</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/veikejai/bulma-0.png\"><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Jegą: <b>+30%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gynybą: <b>+30%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gyvybes: <b>+30%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Transformacijos <b>0</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"index.php?id=register3&amp;mo=Bulma&amp;server=$server\">Testi registraciją</a></b><br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "Bardock"){echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    REGISTRACIJA
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
 $server = $_GET['server'];
 
echo"<b>Bardock</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/veikejai/bardock-0.png\"><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Jegą: <b>-15%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gynybą: <b>-15%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gyvybes: <b>+30%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Transformacijos <b>4</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"index.php?id=register3&amp;mo=Bardock&amp;server=$server\">Testi registraciją</a></b><br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}
 
if ($id == "Raditz"){echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    REGISTRACIJA
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
 $server = $_GET['server']; 
echo"<b>Raditz</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/veikejai/raditz-0.png\"><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Jegą: <b>-5%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gynybą: <b>-5%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gyvybes: <b>+10%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Transformacijos <b>4</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"index.php?id=register3&amp;mo=Raditz&amp;server=$server\">Testi registraciją</a></b><br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Kid Goten"){echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    REGISTRACIJA
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
 $server = $_GET['server']; 
echo"<b>Kid Goten</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/veikejai/kid goten-0.png\"><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Jegą: <b>+15%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gynybą: <b>+15%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gyvybes: <b>-10%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Transformacijos <b>2</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Fusion Dance (Gotenks)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"index.php?id=register3&amp;mo=Kid Goten&amp;server=$server\">Testi registraciją</a></b><br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Kid Trunks"){echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    REGISTRACIJA
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
 $server = $_GET['server']; 
echo"<b>Kid Trunks</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/veikejai/kid trunks-0.png\"><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Jegą: <b>+15%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gynybą: <b>+15%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gyvybes: <b>-10%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Transformacijos <b>2</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Fusion Dance (Gotenks)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"index.php?id=register3&amp;mo=Kid Trunks&amp;server=$server\">Testi registraciją</a></b><br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Gohan"){echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    REGISTRACIJA
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
 $server = $_GET['server']; 
echo"<b>Gohan</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/veikejai/gohan-0.png\"><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Jegą: <b>+10%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gynybą: <b>+10%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gyvybes: <b>+10%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Transformacijos <b>4</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"index.php?id=register3&amp;mo=Gohan&amp;server=$server\">Testi registraciją</a></b><br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Broly"){echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    REGISTRACIJA
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
 $server = $_GET['server']; 
echo"<b>Broly</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/veikejai/broly-0.png\"><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Jegą: <b>+100%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gynybą: <b>-20%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gyvybes: <b>-20%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Transformacijos <b>3</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"index.php?id=register3&amp;mo=Broly&amp;server=$server\">Testi registraciją</a></b><br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Goku"){echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    REGISTRACIJA
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
 $server = $_GET['server']; 
echo"<b>Goku</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/veikejai/goku-0.png\"><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Jegą: <b>+25%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gynybą: <b>-15%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gyvybes: <b>-10%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Transformacijos <b>5</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Potara Fusion<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"index.php?id=register3&amp;mo=Goku&amp;server=$server\">Testi registraciją</a></b><br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Vegeta"){echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    REGISTRACIJA
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
 $server = $_GET['server']; 
echo"<b>Vegeta</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/veikejai/vegeta-0.png\"><br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Jegą: <b>+10%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gynybą: <b>+10%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gyvybes: <b>-20%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Transformacijos <b>4</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Potara Fusion<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"index.php?id=register3&amp;mo=Vegeta&amp;server=$server\">Testi registraciją</a></b><br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Future Trunks"){echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    REGISTRACIJA
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
 $server = $_GET['server']; 
echo"<b>Future Trunks</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/veikejai/future trunks-0.png\"><br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Jegą: <b>+5%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gynybą: <b>+5%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gyvybes: <b>-10%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Transformacijos <b>4</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"index.php?id=register3&amp;mo=Future Trunks&amp;server=$server\">Testi registraciją</a></b><br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "Cell"){echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    REGISTRACIJA
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
 $server = $_GET['server']; 
echo"<b>Cell</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/veikejai/cell-0.png\"><br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Jegą: <b>+25%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gynybą: <b>+25%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gyvybes: <b>-50%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Transformacijos <b>3</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"index.php?id=register3&amp;mo=Cell&amp;server=$server\">Testi registraciją</a></b><br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Frieza"){echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    REGISTRACIJA
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
 $server = $_GET['server']; 
echo"<b>Frieza</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/veikejai/frieza-0.png\"><br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Jegą: <b>+35%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gynybą: <b>+15%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gyvybes: <b>-50%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Transformacijos <b>4</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"index.php?id=register3&amp;mo=Frieza&amp;server=$server\">Testi registraciją</a></b><br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Buu"){echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    REGISTRACIJA
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
 $server = $_GET['server']; 
echo"<b>Buu</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/veikejai/buu-0.png\"><br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Jegą: <b>+20%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gynybą: <b>+20%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gyvybes: <b>-20%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Transformacijos <b>3</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Galimą absurbuoti.<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"index.php?id=register3&amp;mo=Buu&amp;server=$server\">Testi registraciją</a></b><br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Cooler"){echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    REGISTRACIJA
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
 $server = $_GET['server']; 
echo"<b>Cooler</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/veikejai/cooler-0.png\"><br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Jegą: <b>+15%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gynybą: <b>+10%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gyvybes: <b>-5%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Transformacijos <b>2</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"index.php?id=register3&amp;mo=Cooler&amp;server=$server\">Testi registraciją</a></b><br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "Android 17"){echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    REGISTRACIJA
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
 $server = $_GET['server']; 
echo"<b>Android 17</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<img src=\"imgs/veikejai/android 17-0.png\"><br/></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Jegą: <b>+30%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gynybą: <b>+30%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Gyvybes: <b>-10%</b><br/></div><div class=\"meniu\" style=\"text-align: left;\">
Transformacijos <b>1</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b><a href=\"index.php?id=register3&amp;mo=Android 17&amp;server=$server\">Testi registraciją</a></b><br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}


if ($id == "register3"){echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    REGISTRACIJA
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
 $server = $_GET['server']; 
 $mo = $_GET['mo']; 
echo"<b>Registracija</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Slapyvardis gali būti tik iš mažųjų raidžių. Slaptažodyje naudokite didžiųjų ir mažųjų raidžių derinį !</b><br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
<form method=\"post\" action=\"index.php?id=register4&amp;mo=$mo&amp;server=$server\">
Slapyvardis (3-15 simbolių)<br/><input name=\"nick\" maxlength=\"15\" title=\"Nikas\"/><br/>
Slaptažodis (5-20 simbolių)<br/><input name=\"passs\" type=\"password\" maxlength=\"30\" title=\"Slaptazodis\"/><br/>
Pakartokite slaptažodį<br/><input name=\"passs2\" type=\"password\" maxlength=\"30\" title=\"Slaptazodis\"/><br/>
<b>Įveskite apsaugos kodą:</b><br/> <img src=\"captcha.php\"><br/>
	<input type=\"text\" name=\"code\" size=\"15\" maxlength=\"50\"/><br/>
</div><div class=\"meniu\" style=\"text-align: center;\">
	<input type=\"submit\" title=\"Registruotis\" value=\"Registruotis\"/>
    <postfield name=\"nick\" value=\"$(nick)\"/>
    <postfield name=\"passs\" value=\"$(passs)\"/>
    <postfield name=\"code\" value=\"$(code)\"/>
    <postfield name=\"passs2\" value=\"$(passs2)\"/><br/>
		</form>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";
}

if ($id == "register4")
{  
echo " 	<div class=\"in\">
	<div class=\"logo\">
<img src=\"logo.png\" alt=\"*\"/>
	</div><div class=\"ab\">
	    REGISTRACIJA
	    </div>
		<div class=\"meniu\" style=\"border-top: 1px solid #000000; text-align: center;\">";
 $server = $_GET['server']; 
if ($server == "server1"){
$ip = $_SERVER['REMOTE_ADDR']; 
$a = @file("files for txt/registracijos_ip.txt"); 
for ($i=0; $i<count($a); $i++){
$b = explode("|",$a[$i]); 
if ($b[0] == $ip){echo"<b>Registracija</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Registruotis galima tik 1 kartą.</div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div> </card></wml>";exit;
}}
$mo = $_GET['mo']; 
$tim = time() + 10;
$floo = file_get_contents("files for txt/reg_flood.txt");
$lik = $floo - time();

if (time() < $floo){ echo " 
		
<b>Registracija</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Registracijos apsauga! Registruotis galėsi už <b>$lik</b> sekundžių.<br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}
else{
$code = $_SESSION['code'];
$code2 = $_POST['code'];
    $nick = strtolower($_POST['nick']);
	$passm = $passs;
    $passs = $_POST['passs'];
    $passs2 = $_POST['passs2'];
$nick = strtolower($nick); 
$nick = @ereg_replace("[^A-Za-z0-9]","",$nick);
$passs = @ereg_replace("[^A-Za-z0-9]","",$passs);
$passs2 = @ereg_replace("[^A-Za-z0-9]","",$passs2);

$ip = $_SERVER['REMOTE_ADDR']; 

////if ($ip != "79.68.169.24") {$klaida = "<span style=\"color: red\"> ATSIPRAŠOMĖ!!!</span><br/>Žaidimas yrą uždarytas, daromi atnauninimai/keitimai.";}
if ($code2 == "") {$klaida = "Neįvestas apsaugos kodas.";}
if ($code2 == "") {$klaida = "Neįvestas apsaugos kodas.";}
if ($code2 != $code) {$klaida = "Blogas apsaugos kodas.";}  
if ($passs == ""){$klaida = "Neįvestas slaptažodis.";}
if ($passs2 == ""){$klaida = "Nepakartotas slaptažodis.";}
if ($passs != $passs2){$klaida = "Slaptažodžiai nesutampa.";}
if (strlen($passs) < 3){ $klaida = "Slaptažodis turi būti bent iš 3 simbolių.";}
if (strlen($passs) > 15){$klaida = "Slaptažodis negali būti ilgesnis nei 15 simbolių.";}
if ($passs == $nick) {$klaida = "Nenaudokite vietoj slaptažodžio savo žaidėjo vardo.";}
if ($nick == ""){$klaida = "Neįvestas žaidėjo vardas.";}
if (file_exists("zaideju pagrindinai statusai/$nick.txt")){$klaida = "Toks nikas jau uzregistruotas!"; }
if (file_exists("s2/zaideju pagrindinai statusai/$nick.txt")){$klaida = "Toks nikas jau uzregistruotas!"; }
if (is_numeric(substr($nick,0,1))) {$klaida = "Žaidėjo vardas negali prasidėti skaičiumi.";}	
if (strlen($nick) < 3){$klaida = "Žaidėjo vardas turi būti bent iš 3 simbolių.";}
if (@ereg_replace("/(?<!@)fen.{0,5}/i", $nick)) {$klaida = "Negalimas nick, nes jus mėginate pakenkti sistemai";}
if (@ereg_replace("/(?<!@)adm.{0,5}/i", $nick)){$klaida = "Negalimas nick, nes jus mėginate pakenkti sistemai";}
if (strlen($nick) > 13){$klaida = "Žaidėjo vardas negali būti ilgesnis nei 12 simbolių.";} 

if ($mo == "Goku"){ $a = "aaa"; }
if ($mo == "Vegeta"){ $a = "aaa"; }
if ($mo == "Future Trunks"){ $a = "aaa"; }
if ($mo == "Cell"){ $a = "aaa"; }
if ($mo == "Frieza"){ $a = "aaa"; }
if ($mo == "Buu"){ $a = "aaa"; }
if ($mo == "Cooler"){ $a = "aaa"; }
if ($mo == "Gohan"){ $a = "aaa"; }
if ($mo == "Broly"){ $a = "aaa"; }
if ($mo == "Piccolo"){ $a = "aaa"; }
if ($mo == "Kid Trunks"){ $a = "aaa"; }
if ($mo == "Kid Goten"){ $a = "aaa"; }
if ($mo == "Raditz"){ $a = "aaa"; }
if ($mo == "Bulma"){ $a = "aaa"; }
if ($mo == "Bardock"){ $a = "aaa"; }
if ($mo == "Android 17"){ $a = "aaa"; }
if ($a == ""){
$klaida = "Bloga rase!"; 
}
if ($klaida != ""){
echo "<b>Registracija</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
$klaida<br/> </div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";
}
else
{

		
echo "Sveikas <b>$nick</b>!. Tu užsiregistravai į Dragon Ball Fighters žaidimą!.
Kad užsiregistravote Jus gaunate 500 000 000 pinigų ir 50 kreditų. </b><br/>
 </div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Jūsų veikėjas: <b>$mo</b><br/>
Jūsų slapyvardis: <b>$nick</b><br/>
Jūsų slaptažodis: <b> $passs</b><br/>
Serveris: <b>1 serveris</b><br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";

$nick = trim($nick);
$passm = $passs;
$passs = md5($passs);
$nick = @ereg_replace("[^A-Za-z0-9]","",$nick);
$passs = @ereg_replace("[^A-Za-z0-9]","",$passs);
$passs2 = @ereg_replace("[^A-Za-z0-9]","",$passs2);

$regai = "zaideju pagrindinai statusai";
$jega = "25";
$gyvybes = "10";
$gyvybess = "10";
$sugebejimas = "1";
$pinigai = "500000000";
$wins = "0";
$loses = "0";
$ginklo_att = "0";
$ginklas = "Beginklis"; 
$gynyba = "75"; 

$uzregintas = date("Y-m-d"); 
$pask = time();

$nicko = "$nick.txt";

$atidarymas = @fopen("zaideju pagrindinai statusai/$nicko", "w+");
@fwrite($atidarymas, "1|$passs|$nick|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask|+|0|$gynyba|0|$mo|10|12.1|aps_kodas|0|Be_sarvu|0|\n");
@fclose($atidarymas);
@chmod("zaideju pagrindinai statusai/$nicko",0777); 

$pmi = "sun";

$atidaryma = @fopen("$pmi/$nicko", "w+");
@fwrite($atidaryma, "@SISTEMA|Sveikas <b>$nick</b>!. Tu užsiregistravai į Dragon Ball Fighters žaidimą!. <br/>Kaip naujokas tu gavai 500 000 000 pinigų ir 50 kreditų.<br/>Kodėl būtent verta žaisti šita žaidima? Visu pirma šitas žaidimas yra unikalus ir niekur nerasite jo kopijos, bei atnaujinimai daromi dažnai. Prisijunkite ir tapkite šio žaidimo dalimi.|$time|\n");
@fclose($atidaryma);
@chmod("$pmi/$nicko",0777); 

	       $atidaryma = @fopen("kronoss/$nicko", "w+");
            @fwrite($atidaryma, "50");
            @fclose($atidaryma);
            @chmod("kronoss/$nicko", 0777);
			
				       $atidaryma = @fopen("account/$nicko", "w+");
            @fwrite($atidaryma, "0");
            @fclose($atidaryma);
            @chmod("account/$nicko", 0777);
			
			$QWER145 = @fopen("nustatymai/$nicko", "w+");
            @fwrite($QWER145, "+|+|+|+|+|-|-|-|-|-|-||$passm||||||-||style_green||||||||||||||||||");
            @fclose($QWER145);
            @chmod("nustatymai/$nicko", 0777);
			
	       $atidaryma = @fopen("kitokiainf/$nicko", "w+");
            @fwrite($atidaryma, "0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
            @fclose($atidaryma);
            @chmod("kitokiainf/$nicko", 0777);
			
				       $atidaryma = @fopen("skill/$nicko", "w+");
            @fwrite($atidaryma, "0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|100|100|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
            @fclose($atidaryma);
            @chmod("skill/$nicko", 0777);
			
				   	       $atidaryma = @fopen("zaideju papildoma informacija/$nicko", "w+");
            @fwrite($atidaryma, "0|0|0|0|".time()."|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
            @fclose($atidaryma);
            @chmod("zaideju papildoma informacija/$nicko", 0777);
		$timegav = time() + 60*60*24;	
			$fopy = @fopen("paslaugos/daugiau pinigu/$nicko", "w");
@fwrite($fopy, "2|$timegav|");
@fclose($fopy);
@chmod("paslaugos/daugiau pinigu/$nicko", 0777);	
			
$fopy = @fopen("paslaugos/daugiau exp/$nicko", "w");
@fwrite($fopy, "3|$timegav|");
@fclose($fopy);
@chmod("paslaugos/daugiau exp/$nicko", 0777);				
			
$fopy = @fopen("paslaugos/didesnis nukaunamuma/$nicko", "w");
@fwrite($fopy, "3|$timegav|");
@fclose($fopy);
@chmod("paslaugos/didesnis nukaunamuma/$nicko", 0777);	

$fopy = @fopen("padusimai/$nicko", "w");
@fwrite($fopy, "3|$timegav|");
@fclose($fopy);
@chmod("padusimai/$nicko", 0777);	
			
			$reg_ip = $_SERVER['REMOTE_ADDR']; 
			$f = @fopen("files for txt/registracijos_ip.txt","a");
 @fwrite($f,"$reg_ip|\n");
 @fclose($f); 

$fopy = fopen("files for txt/reg_flood.txt", "w");
fwrite($fopy, "$tim");
fclose($fopy);
        
}}
}

if ($server == "server2"){

$mo = $_GET['mo']; 
$tim = time() + 10;
$floo = file_get_contents("s2/files for txt/reg_flood.txt");
$lik = $floo - time();

if (time() < $floo){ echo"
<b>Registracija</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Registracijos apsauga! Registruotis galėsi už <b>$lik</b> sekundžių.<br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";}
else{
$code = $_SESSION['code'];
$code2 = $_POST['code'];
    $nick = strtolower($_POST['nick']);
    $passs = $_POST['passs'];
    $passs2 = $_POST['passs2'];
$nick = strtolower($nick); 
$nick = @ereg_replace("[^A-Za-z0-9]","",$nick);
$passs = @ereg_replace("[^A-Za-z0-9]","",$passs);
$passs2 = @ereg_replace("[^A-Za-z0-9]","",$passs2);

if ($code2 == "") {$klaida = "Neįvestas apsaugos kodas.";}
if ($code2 == "") {$klaida = "Neįvestas apsaugos kodas.";}
if ($code2 != $code) {$klaida = "Blogas apsaugos kodas.";}  
if ($passs == ""){$klaida = "Neįvestas slaptažodis.";}
if ($passs2 == ""){$klaida = "Nepakartotas slaptažodis.";}
if ($passs != $passs2){$klaida = "Slaptažodžiai nesutampa.";}
if (strlen($passs) < 3){ $klaida = "Slaptažodis turi būti bent iš 3 simbolių.";}
if (strlen($passs) > 20){$klaida = "Slaptažodis negali būti ilgesnis nei 20 simbolių.";}
if ($passs == $nick) {$klaida = "Nenaudokite vietoj slaptažodžio savo žaidėjo vardo.";}
if ($nick == ""){$klaida = "Neįvestas žaidėjo vardas.";}
if (file_exists("zaideju pagrindinai statusai/$nick.txt")){$klaida = "Toks nikas jau uzregistruotas!"; }
if (file_exists("s2/zaideju pagrindinai statusai/$nick.txt")){$klaida = "Toks nikas jau uzregistruotas!"; }
if (is_numeric(substr($nick,0,1))) {$klaida = "Žaidėjo vardas negali prasidėti skaičiumi.";}	
if (strlen($nick) < 3){$klaida = "Žaidėjo vardas turi būti bent iš 3 simbolių.";}
if (@ereg_replace("/(?<!@)xxfeni.{0,5}/i", $nick)) {$klaida = "Negalimas nick, nes jus mėginate pakenkti sistemai";}
if (@ereg_replace("/(?<!@)adm.{0,5}/i", $nick)){$klaida = "Negalimas nick, nes jus mėginate pakenkti sistemai";}
if (strlen($nick) > 15){$klaida = "Žaidėjo vardas negali būti ilgesnis nei 15 simbolių.";} 

if ($mo == "Goku"){ $a = "aaa"; }
if ($mo == "Vegeta"){ $a = "aaa"; }
if ($mo == "Future Trunks"){ $a = "aaa"; }
if ($mo == "Cell"){ $a = "aaa"; }
if ($mo == "Frieza"){ $a = "aaa"; }
if ($mo == "Buu"){ $a = "aaa"; }
if ($mo == "Cooler"){ $a = "aaa"; }
if ($mo == "Gohan"){ $a = "aaa"; }
if ($mo == "Broly"){ $a = "aaa"; }
if ($mo == "Piccolo"){ $a = "aaa"; }
if ($mo == "Kid Trunks"){ $a = "aaa"; }
if ($mo == "Kid Goten"){ $a = "aaa"; }
if ($mo == "Raditz"){ $a = "aaa"; }
if ($mo == "Bulma"){ $a = "aaa"; }
if ($mo == "Bardock"){ $a = "aaa"; }
if ($mo == "Android 17"){ $a = "aaa"; }
if ($a == ""){
$klaida = "Bloga rase!"; 
}
if ($klaida != ""){
echo "<b>Registracija</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
$klaida<br/> </div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";
}
else
{
echo "Sveikas <b>$nick</b>!. Tu užsiregistravai į Dragon Ball Fighters žaidimą!.
Kad užsiregistravote Jus gaunate 1 000 000 000 pinigų ir 100 kreditų. </b><br/>
 </div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Jūsų veikėjas: <b>$mo</b><br/>
Jūsų slapyvardis: <b>$nick</b><br/>
Jūsų slaptažodis: <b> $passs</b><br/>
Serveris: <b>2 serveris</b><br/>
</div><div class=\"line\"></div>
<div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"index.php\">Į pradžią</a><br/>
</div><div class=\"foot\">$bottom</div></div>";

$nick = trim($nick);
$passs = md5($passs);
$nick = @ereg_replace("[^A-Za-z0-9]","",$nick);
$passs = @ereg_replace("[^A-Za-z0-9]","",$passs);
$passs2 = @ereg_replace("[^A-Za-z0-9]","",$passs2);

$regai = "s2/zaideju pagrindinai statusai";
$jega = "2500";
$gyvybes = "100";
$gyvybess = "100";
$sugebejimas = "1";
$pinigai = "1000000000";
$wins = "0";
$loses = "0";
$ginklo_att = "0";
$ginklas = "Beginklis"; 
$gynyba = "7500"; 

$uzregintas = date("Y-m-d"); 
$pask = time();

$nicko = "$nick.txt";

$atidarymas = @fopen("s2/zaideju pagrindinai statusai/$nicko", "w+");
@fwrite($atidarymas, "1|$passs|$nick|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask|+|0|$gynyba|0|$mo|10|12.1|aps_kodas|0|Be_sarvu|0|\n");
@fclose($atidarymas);
@chmod("s2/zaideju pagrindinai statusai/$nicko",0777); 

$pmi = "s2/sun";

$atidaryma = @fopen("$pmi/$nicko", "w+");
@fwrite($atidaryma, "@SISTEMA|Sveikas <b>$nick</b>!. Tu užsiregistravai į Dragon Ball Fighters žaidimą!. <br/>Kaip naujokas tu gavai 1000 000 000 pinigų ir 100 kreditų.<br/>Kodėl būtent verta žaisti šita žaidima? Visu pirma šitas žaidimas yra unikalus ir niekur nerasite jo kopijos, bei atnaujinimai daromi dažnai. Prisijunkite ir tapkite šio žaidimo dalimi.|$time|\n");
@fclose($atidaryma);
@chmod("$pmi/$nicko",0777); 

	       $atidaryma = @fopen("s2/kronoss/$nicko", "w+");
            @fwrite($atidaryma, "100");
            @fclose($atidaryma);
            @chmod("s2/kronoss/$nicko", 0777);
			
										       $atidaryma = @fopen("s2/nustatymai/$nicko", "w+");
            @fwrite($atidaryma, "+|+|+|+|+|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|style_green|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|");
            @fclose($atidaryma);
            @chmod("s2/nustatymai/$nicko", 0777);
       
	       $atidaryma = @fopen("s2/kitokiainf/$nicko", "w+");
            @fwrite($atidaryma, "0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
            @fclose($atidaryma);
            @chmod("s2/kitokiainf/$nicko", 0777);
			
				       $atidaryma = @fopen("s2/skill/$nicko", "w+");
            @fwrite($atidaryma, "0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|100|100|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
            @fclose($atidaryma);
            @chmod("s2/skill/$nicko", 0777);
		
			$reg_ip = $_SERVER['REMOTE_ADDR']; 
			$f = @fopen("s2/files for txt/registracijos_ip.txt","a");
 @fwrite($f,"$reg_ip|\n");
 @fclose($f); 

$fopy = fopen("s2/files for txt/reg_flood.txt", "w");
fwrite($fopy, "$tim");
fclose($fopy);
        
}}
}

}


print '</body></html>';

?>
