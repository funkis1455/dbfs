<?php

$kur = "Balsavimas";
include ("config.php");
include_once("icludekitainf/start.php");
include_once("icludekitainf/function.php");

function aps($xe){
    return trim(mysql_real_escape_string(stripslashes(htmlspecialchars($xe, ENT_QUOTES, 'utf-8'))));
}

switch($id)
{
	default:

echo' Čia žaidimo balsavimas, 3 lygio moderatoriai gali rengti balsavimus, balsuoti galima nuo 100 lygio. </div><div class="meniu" style="text-align: left;">';
    if(mysql_num_rows(mysql_query("SELECT * FROM vote")) == false){
	echo'<b>Kolkas balsavim&#371; n&#279;ra!</b><br/>';
	}
	else
	{
	$zin = 10;
        $eil = mysql_num_rows(mysql_query("SELECT * FROM vote"));
        $page = (int)aps(@$_GET['page']);
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
        $a = mysql_query("SELECT * FROM vote ORDER BY id DESC LIMIT $nuo, $zin");
        $nr = $nuo;
		while ($new = mysql_fetch_assoc($a)) {
			$nr++;
			$dabar_data = date("Y-m-d");
			echo''.$ico.' <a href="vote.php?id=inf&nr='.$new['id'].'">'.$new['klausimas'].'</a> ('.mysql_num_rows(mysql_query("SELECT * FROM vote_done WHERE bals_id='".$new['id']."'")).')<br>';
			unset($new);
		}
echo'</div><div class="meniu" style="text-align: left;">';
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
                    echo'<a href="vote.php?page=' . $l . '">[' . $l . ']</a>';
                } 
            } 
        } else {
            if ($psl > 1) {
                echo'<a href="vote.php?page=1">[1]</a>';
            } else {
                echo'[1]';
            } 
            if ($psl11 > 2) {
                echo'...';
            } 
            if ($psl11 > 1 && $psl11 < $psl1) {
                echo'<a href="vote.php?&page=' . $psl11 . '">[' . $psl11 . ']</a>';
            } 
            if ($psl1 > 1 && $psl > 2) {
                echo'<a href="vote.php?page=' . $psl1 . '">[' . $psl1 . ']</a>';
            } 
            if ($psl > 1 && $psl < $puslapiu) {
                echo'[' . $psl . ']';
            } 
            if ($psl2 < $puslapiu && $psl < $puslapiu1) {
                echo'<a href="vote.php?page=' . $psl2 . '">[' . $psl2 . ']</a>';
            } 
            if ($psl22 < $puslapiu && $psl22 > $psl2) {
                echo'<a href="vote.php?id=&page=' . $psl22 . '">[' . $psl22 . ']</a>';
            } 
            if ($psl22 < $puslapiu1) {
                echo'...';
            } 
            if ($puslapiu != "$psl") {
                echo'<a href="vote.php?page=' . $puslapiu . '">[' . $puslapiu . ']</a>';
            } else {
                echo'[' . $puslapiu . ']';
            } 
        }
	}
 echo"</div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";

	break;
	
	case 'inf':

	$nr = aps((int)$_GET['nr']);
	$bals = mysql_fetch_assoc(mysql_query("SELECT * FROM vote_done ORDER BY id DESC LIMIT 1"));
	$inf = mysql_fetch_assoc(mysql_query("SELECT * FROM vote WHERE id='{$nr}'"));
	echo"<b>Balsavimas</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
	echo''.$ico.' Klausimas: <b>'.textas($inf['klausimas']).'</b><br/>';
			echo"</div><div class=\"line\"></div><div class=\"meniu\">";
	echo''.$ico.' Balsavimas buvo sukurtas:  <b>'.laikas($inf['data']).'</b><br/>';
	echo"</div><div class=\"line\"></div><div class=\"meniu\">";
	echo''.$ico.' Autorius: <b>'.$inf['nick'].'</b><br/>';
	echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">";
	echo''.$ico.' <b>Atsakymai:</b><br>';
	
echo'	
'.$ico.' '.$inf['atsv'].' (<b>'.@kiek("vote_done WHERE ats='1'  && bals_id='{$nr}'").'</b>) '.@round((@kiek("vote_done WHERE ats='1'  && bals_id='{$nr}'")*100)/@kiek('vote_done WHERE bals_id='.$nr.''),2).'%<br />
'.$ico.' '.$inf['atsd'].' (<b>'.@kiek("vote_done WHERE ats='2'  && bals_id='{$nr}'").'</b>) '.@round((@kiek("vote_done WHERE ats='2'  && bals_id='{$nr}'")*100)/@kiek('vote_done WHERE bals_id='.$nr.''),2).'%<br />';
//if ($inf['atst'] != ""){echo''.$ico.' '.$inf['atst'].' (<b>'.@kiek("vote_done WHERE ats='3'  && bals_id='$nr'").'</b>) '.@round((@kiek("vote_done WHERE ats='3'  && bals_id='$nr'")*100)/@kiek('vote_done WHERE bals_id='.$nr.''),2).'%<br />';}
//if ($inf['atsk'] != ""){echo''.$ico.' '.$inf['atsk'].' (<b>'.@kiek("vote_done WHERE ats='4'  && bals_id='$nr'").'</b>) '.@round((@kiek("vote_done WHERE ats='4'  && bals_id='$nr'")*100)/@kiek('vote_done WHERE bals_id='.$nr.''),2).'%<br />';}
//if ($inf['atsp'] != ""){echo''.$ico.' '.$inf['atsp'].' (<b>'.@kiek("vote_done WHERE ats='5'  && bals_id='$nr'").'</b>) '.@round((@kiek("vote_done WHERE ats='5'  && bals_id='$nr'")*100)/@kiek('vote_done WHERE bals_id='.$nr.''),2).'%<br />';}
	

	echo'</div><div class="line"></div><div class="meniu" style="text-align: left;">
	'.$ico.' <a href="vote.php?id=balsuot&nr='.$nr.'">Balsuoti</a>';
 echo"</div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
 <a href=\"vote.php\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
	break;
	
	case 'balsuot':
	$nr = aps((int)$_GET['nr']);

	$inf = mysql_fetch_assoc(mysql_query("SELECT * FROM vote WHERE id='{$nr}'"));


echo'
	<form action="vote.php?id=bals&nr='.$nr.'" method="POST">
	Atsakymas:<br>
	<select name="kl">
	<option value="1"> '.$inf['atsv'].'</option>
	<option value="2"> '.$inf['atsd'].'</option>';
	if ($inf['atst'] != ""){echo'<option value="3"> '.$inf['atst'].'</option>';}
	if ($inf['atsk'] != ""){echo'<option value="4"> '.$inf['atsk'].'</option>';}
	if ($inf['atsp'] != ""){echo'<option value="5"> '.$inf['atsp'].'</option>';}
	echo'</select></div><div class="meniu" style="text-align: center;">
	<input type="submit" value="Balsuoti">
	</form>';	

	 echo"</div><div class=\"meniu\" style=\"border-bottom: 1px solid #000000; text-align: center;\">
<a href=\"vote.php?id=inf&amp;nr=$nr\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
	break;
	
	case 'bals':

	$nr = aps((int)$_GET['nr']);
	$kl = aps((int)$_POST['kl']);
	$inf = mysql_fetch_assoc(mysql_query("SELECT * FROM vote WHERE id='{$nr}'"));

	if(mysql_num_rows(mysql_query("SELECT * FROM vote_done WHERE nick='{$nick}' && bals_id='{$nr}'")))
	{
		echo' Čia jau balsavai.';
	}
	elseif(!mysql_num_rows(mysql_query("SELECT * FROM vote WHERE id='{$nr}'")))
	{
		echo' Tokio balsavimo nėra.';
	}
	else
	{
		echo'Sėkmingai prabalsavai už balsą ';
	
		mysql_query("INSERT INTO vote_done SET nick='{$nick}',ats='{$kl}',bals_id='{$nr}'");
	}
	echo"

	</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"vote.php?id=inf&amp;nr=$nr\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";

	break;
}

mysql_close();
?>
