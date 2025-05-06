<?php
ob_start();
$kur = "Forumas";
include ("config.php");
include_once("icludekitainf/function.php");
include_once("icludekitainf/start.php");


switch($id)
{
	default:
	echo' 
	<a href="forum.php?id=kurti">Kurti temą</a><br>
</div><div class="line"></div><div class="meniu" style="text-align: left;">
<b>Forumo temos:</b><br/>
</div><div class="meniu" style="text-align: left;">';
	if(!mysql_num_rows(mysql_query("SELECT * FROM frm_temos")))
	{
		echo''.$ico.' Forume temų nėra.';
	}
	else
	{
        $zin = 10;
        $eil = mysql_num_rows(mysql_query("SELECT * FROM frm_temos"));
        $page = (int)abs(@$_GET['page']);
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
        $a = mysql_query("SELECT * FROM frm_temos ORDER BY id DESC LIMIT $nuo, $zin");
        $nr = $nuo;
		while ($new = mysql_fetch_assoc($a)) {
			$nr++;
			$dabar_data = date("Y-m-d");
			echo'<div class="got">'.$ico.' <a href="forum.php?id=skaitau&nr='.$new['id'].'"><b>'.$new['tema'].'</b></a> ('.mysql_num_rows(mysql_query("SELECT * FROM frm_zin WHERE temos_id='".$new['id']."'")).')<br/>';
			$viso_topci = mysql_result(mysql_query("SELECT COUNT(*) FROM frm_zin where temos_id='".$new['id']."'"),0);
       if($viso_topci > 0){
  $ASGRXXS = mysql_query("SELECT * FROM frm_zin where temos_id='".$new['id']."'  ORDER BY id DESC LIMIT 1");
    while($topic = mysql_fetch_assoc($ASGRXXS)){
echo''.textas($topic['zinute']).' (<b><a href="pagrindinis.php?id=apie&ka='.$topic['nick'].'">'.$topic['nick'].'</b></a>)';}
}
else
{
echo '<i>Tema tuščias!</i>';
}
			
			
			if($zaidejai['statusas'] == "mod2" OR $zaidejai['statusas'] == "Admin"){echo' [<a href="forum.php?id=delete&nr='.$new['id'].'">x</a>]';}
			echo'<br></div>';
			unset($new);
		}
		echo'</div><div class="line"></div><div class="meniu" style="text-align: left;">';
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
        if ($puslapiu < 6) {
            for($l = 1; $l <= $puslapiu; $l++) {
                if ($psl == "$l") {
                    echo'<b>[' . $psl . ']</b>';
                } else {
                    echo'<a href="forum.php?page=' . $l . '">[' . $l . ']</a>';
                } 
            } 
        } else {
            if ($psl > 1) {
                echo'<a href="forum.php?page=1">[1]</a>';
            } else {
                echo'[1]';
            } 
            if ($psl11 > 2) {
                echo'...';
            } 
            if ($psl11 > 1 && $psl11 < $psl1) {
                echo'<a href="forum.php?&page=' . $psl11 . '">[' . $psl11 . ']</a>';
            } 
            if ($psl1 > 1 && $psl > 2) {
                echo'<a href="forum.php?page=' . $psl1 . '">[' . $psl1 . ']</a>';
            } 
            if ($psl > 1 && $psl < $puslapiu) {
                echo'[' . $psl . ']';
            } 
            if ($psl2 < $puslapiu && $psl < $puslapiu1) {
                echo'<a href="forum.php?page=' . $psl2 . '">[' . $psl2 . ']</a>';
            } 
            if ($psl22 < $puslapiu && $psl22 > $psl2) {
                echo'<a href="forum.php?id=&page=' . $psl22 . '">[' . $psl22 . ']</a>';
            } 
            if ($psl22 < $puslapiu1) {
                echo'...';
            } 
            if ($puslapiu != "$psl") {
                echo'<a href="forum.php?page=' . $puslapiu . '">[' . $puslapiu . ']</a>';
            } else {
                echo'[' . $puslapiu . ']';
            } 
        }
	}
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=miestas\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";

	break;
	//--->Skaitymas<---\\
	case 'skaitau':
	$nr = abs((int)$_GET['nr']);
	if(!mysql_num_rows(mysql_query("SELECT * FROM frm_temos WHERE id='{$nr}'")))
	{
		echo' Tokios temos nėra.';
	}
	else
	{
		$inf = mysql_fetch_assoc(mysql_query("SELECT * FROM frm_temos WHERE id='{$nr}'"));
		echo'<b>'.$inf['tema'].'</b><br/>
		</div><div class="line"></div><div class="meniu" style="text-align: center;">
	 <a href="forum.php?id=rasyti&nr='.$nr.'">Rašyti žinutę</a><br>
	 <a href="forum.php?id=skaitau&nr='.$nr.'">Refresh</a><br>
		</div><div class="line"></div><div class="meniu" style="text-align: left;">
		';
		if(!mysql_num_rows(mysql_query("SELECT * FROM frm_zin WHERE temos_id='{$nr}'")))
		{
			echo''.$ico.' Temoje žinučių nėra.';
		}
		else
		{
		$zin = 10;
        $eil = mysql_num_rows(mysql_query("SELECT * FROM frm_zin WHERE temos_id='{$nr}'"));
        $page = (int)abs(@$_GET['page']);
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
        $a = mysql_query("SELECT * FROM frm_zin WHERE temos_id='{$nr}' ORDER BY id DESC LIMIT $nuo, $zin");
        $idsa = $nuo;
		while ($new = mysql_fetch_assoc($a)) {
			$idsa++;
			$dabar_data = date("Y-m-d");
			echo'<b>'.$idsa.'.</b> <a href="pagrindinis.php?id=apie&ka='.$new['nick'].'">'.$new['nick'].'</a>: '.textas($new['zinute']).' <b>('.$new['data'].')</b>';
			echo'<br>';
			unset($new);
		}
			echo'</div><div class="line"></div><div class="meniu" style="text-align: center;">';
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
        if ($puslapiu < 6) {
            for($l = 1; $l <= $puslapiu; $l++) {
                if ($psl == "$l") {
                    echo'<b>[' . $psl . ']</b>';
                } else {
                    echo'<a href="forum.php?id=skaitau&nr='.$nr.'&page=' . $l . '">[' . $l . ']</a>';
                } 
            } 
        } else {
            if ($psl > 1) {
                echo'<a href="forum.php?id=skaitau&nr='.$nr.'&page=1">[1]</a>';
            } else {
                echo'[1]';
            } 
            if ($psl11 > 2) {
                echo'...';
            } 
            if ($psl11 > 1 && $psl11 < $psl1) {
                echo'<a href="forum.php?id=skaitau&nr='.$nr.'&page=' . $psl11 . '">[' . $psl11 . ']</a>';
            } 
            if ($psl1 > 1 && $psl > 2) {
                echo'<a href="forum.php?id=skaitau&nr='.$nr.'&page=' . $psl1 . '">[' . $psl1 . ']</a>';
            } 
            if ($psl > 1 && $psl < $puslapiu) {
                echo'[' . $psl . ']';
            } 
            if ($psl2 < $puslapiu && $psl < $puslapiu1) {
                echo'<a href="forum.php?id=skaitau&nr='.$nr.'&page=' . $psl2 . '">[' . $psl2 . ']</a>';
            } 
            if ($psl22 < $puslapiu && $psl22 > $psl2) {
                echo'<a href="forum.php?id=skaitau&nr='.$nr.'&page=' . $psl22 . '">[' . $psl22 . ']</a>';
            } 
            if ($psl22 < $puslapiu1) {
                echo'...';
            } 
            if ($puslapiu != "$psl") {
                echo'<a href="forum.php?id=skaitau&nr='.$nr.'&page=' . $puslapiu . '">[' . $puslapiu . ']</a>';
            } else {
                echo'[' . $puslapiu . ']';
            } 
        }
	}
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"forum.php\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";

	}
	break;
	//--->Temos Kurimas<---\\
	case 'kurti':
	if(isset($_POST['ok']))
	{
		$name = mysql_escape_string($_POST['pavad']);
		if(empty($name))
		{
			echo' Palikai tuščią laukelį.<br/>';
			echo'</div><div class="line"></div><div class="meniu" style="text-align: center;">';
		}
		elseif($lygis < 200)
		{
			echo' Tavo lygis per mažas.';
			echo'</div><div class="line"></div><div class="meniu" style="text-align: center;">';
		}
		elseif(mysql_num_rows(mysql_query("SELECT * FROM  frm_temos WHERE tema='{$name}'")))
		{
			echo' Tokia tema jau yra.';
			echo'</div><div class="line"></div><div class="meniu" style="text-align: center;">';
		}
		elseif(strlen($name) < 5)
		{
			echo' Per trumpas temos pavadinimas.';
			echo'</div><div class="line"></div><div class="meniu" style="text-align: center;">';
		}
		elseif(strlen($name) > 50)
		{
			echo'Per ilgas temos pavadinimas.';
			echo'</div><div class="line"></div><div class="meniu" style="text-align: center;">';
		}
		elseif($litai < 1)
		{
			echo "Jusu saskaitoje nepakanaka saskaitos likutis sukurti tema.";
			echo'</div><div class="line"></div><div class="meniu" style="text-align: center;">';
		}
		else
		{
			echo''.$ico.' Tema sėkmingai sukurta.';
			echo'</div><div class="line"></div><div class="meniu" style="text-align: center;">';
			mysql_query("INSERT INTO frm_temos SET nick='{$nick}',tema='{$name}'");
			$fp = @fopen("account/$nick.txt", "w");
        @fwrite($fp, $litai - 1);
        @fclose($fp);
		}

	}

   echo '
	Temą sukurti galima nuo 200 lygio ir jums kainuos 1 LTL<br/>
</div><div class="meniu" style="text-align: center;">
	<form action="forum.php?id=kurti" method="POST">
	 <b>Temos pavadinimas:</b><br>
	<input type="text" name="pavad"><br>
	<input type="submit" value="Kurti" name="ok">
	</form>';
	echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">

	<a href=\"forum.php\">Atgal</a><br>
	<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";

	break;
	
	//--->Rasymas<---\\
	case 'rasyti':
	$nr = abs((int)$_GET['nr']);
	if(!mysql_num_rows(mysql_query("SELECT * FROM frm_temos WHERE id='{$nr}'")))
	{
		echo'

Tokios temos nėra.</div>

		';
	}
	else
	{

	if(isset($_POST['ok']))
	{
    if($_SESSION[pad]-time() > 0){
       echo 'Galėsi rašyti už <b>'.laikas($_SESSION['pad']-time(), 1).'</b>.';
    } else {
		$name = post($_POST['zin']);
		if(empty($name))
		{
			echo'Palikai tuščią laukelį.';
		}
		elseif($lygis < 150)
		{
			echo'Tavo lygis per mažas. Galima rasyti forume nuo 150 lygio, jusu lygis: '.$lygis.'<br/>';
		}
		elseif(@mysql_num_rows(mysql_query("SELECT * FROM  frm_temos WHERE tema='{$name}'")))
		{
			echo' Tokia zinute sioje temoje jau yra. <br/>';
		}
		elseif(strlen($name) < 5)
		{
			echo' Per trumpa žinutė. <br/>';
		}
		elseif(strlen($name) > 500)
		{
			echo'<div class="error"> <img src="images/error.png" alt="*">  Per ilga žinutė. </div>';
		}
		else
		{
			echo' Sėkmingai įrašei žinutę. '.$_SESSION[pad].' <br/>';
			mysql_query("INSERT INTO frm_zin SET nick='{$nick}',temos_id='{$nr}',zinute='{$name}',data='".date("Y-m-d H:i")."'");
			 $_SESSION[pad] = time()+15;
		}
echo'   </div><div class="line"></div><div class="meniu" style="text-align: center;">';
	}
	}

   echo '
	Rašyti galima nuo 150 lygio.<br/>
	</div><div class="meniu" style="text-align: center;">
	<form action="forum.php?id=rasyti&nr='.$nr.'" method="POST">
	Žinutė:<br>
	<input type="text" name="zin"><br></div><div class="meniu" style="text-align: center;">
	<input type="submit" value="Rašyti" name="ok">
	';
	
	echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">

	<a href=\"forum.php?id=skaitau&nr=$nr\">Atgal</a><br>
	<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
	break;
	//--->Trinimas temos<---\\
	case 'xdelete':
	$nr = abs((int)$_GET['nr']);
	if(!mysql_num_rows(mysql_query("SELECT * FROM frm_temos WHERE id='{$nr}'")))
	{
		echo' Tokios temos nėra.';
	}
	elseif($zaidejai['statusas'] != 'Mod2' && $zaidejai['statusas'] != 'Admin')
	{
		echo'Tau čia negalima.';
	}
	else
	{
	echo' Tema sėkmingai ištrinta.';
	mysql_query("DELETE FROM frm_temos WHERE id='{$nr}'");
	$viso_zin = mysql_num_rows(mysql_query("SELECT * FROM frm_zin WHERE temos_id='{$nr}'"));
	for($i = 0; $i<$viso_zin; $i++)
	{
		mysql_query("DELETE FROM frm_zin WHERE temos_id='{$nr}'");
	}
	
}
	break;
}

mysql_close();
?>