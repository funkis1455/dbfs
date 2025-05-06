<?php
ob_start();
include ("config.php");
include_once ("icludekitainf/start.php");
include_once("icludekitainf/function.php");
$kur = "PM Dėžutę";
$need_lvl = "170";

$co = @ereg_replace("[^A-Za-z0-9_]","",$_GET['co']);
$kam = @ereg_replace("[^A-Za-z0-9_]","",$_GET['kam']);
$psl = ereg_replace("[^0-9]","",$_GET['psl']);

if($id == ""){ 
$viso = mysql_result(mysql_query("SELECT COUNT(*) FROM pm WHERE gavejas='$nick' "),0);
echo"Pranešimai (<b>$viso</b>)<br/>
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
Tema (siuntėjas):</div><div class=\"meniu\" style=\"text-align: left;\">";
   if($viso > 0){
    $rezultatu_rodymas=10;
            $total = @intval(($viso-1) / $rezultatu_rodymas) + 1;
            if (empty($psl) or $psl < 0) $psl = 1;
            if ($psl > $total) $psl = $total;
            $nuo_kiek=$psl*$rezultatu_rodymas-$rezultatu_rodymas;
     $query = mysql_query("SELECT * FROM pm WHERE gavejas='$nick' ORDER BY id DESC LIMIT $nuo_kiek,$rezultatu_rodymas");
     $puslapiu = ceil($viso/$rezultatu_rodymas);
     while($row = mysql_fetch_assoc($query)){
   if($row['nauj'] == "NEW"){
       $kl = '[+] ';
   } else {
       $kl = '[-] ';
   }
   echo ''.$kl.' <a href="inbox.php?id=read&ID='.$row['id'].'">'.$row['tema'].' ('.$row['what'].')</a><br/>';
   unset($row);
}
   echo '</div><div class="line"></div><div class="meniu" style="text-align: left;">'.puslapiavimas($puslapiu,$psl,'?id=').'';
   } else {
   echo 'Gautų žinučių nėra.';
   }
   echo'   </div><div class="meniu" style="text-align: center;">
    <a href="inbox.php?id=delete">Trinti visas žinutęs</a></br>
   </div><div class="line"></div><div class="meniu" style="text-align: center;"> <form action="inbox.php?id=write" method="post"/>
<b>Gavėjas:</b><br />
   <input type="text" value="'.$ats.'" name="kam"/><br />
      <b>Tema:</b><br />
   <input type="text" value="" name="tema"/><br />
   <b> Žinutės tekstas:</b><br />
   <textarea name="txt" rows="3"></textarea><br /></div><div class="meniu" style="text-align: center;"> 
   <input type="submit" name="submit" value="Siųsti"/>';
   echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
   <a href=\"meniu.php\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
elseif($id == "read"){
$ID = ereg_replace("[^0-9]","",$_GET['ID']);
 
$pmr = mysql_fetch_assoc(mysql_query("SELECT * FROM pm WHERE id='$ID' "));
$skillokt = @explode("|",@file_get_contents("skill/$pmr[what].txt"));
$pvkskt = @explode("|",@file_get_contents("zaideju pagrindinai statusai/$pmr[what].txt"));
$veikejork = strtolower($pvkskt[18]);
      mysql_query("UPDATE pm SET nauj='OLD' WHERE id='$ID' ");
$inffc = mysql_fetch_assoc(mysql_query("SELECT * FROM zaidejai WHERE nick='".$pmr['what']."'"));
		 
	  echo"<b>Žinutės skaitymas</b><br/>
	  </div><div class=\"meniu\" style=\"text-align: left;\"> 
	  <table>
			<tr>
			<td>";
			  if($pmr['what'] == 'SISTEMA'){echo"<img src=\"images/sistem.png\"  height=\"100\" alt=\"\"/>";}else{
			  echo"<img src=\"imgs/veikejai/$veikejork-$skillokt[0].png\" height=\"70\" alt=\"*\"/>";}
			  echo"
			</td>
			<td>
			<ul>
<li>Siunt&#279;jas: <b><a href=\"pagrindinis.php?id=apie&amp;ka=".$pmr['what']."\"><b>".$pmr['what']."</b></a></b></li>
<li>Tema: <b>".$pmr['tema']."</b></li>
<li>Išsiųsta: <b>".$pmr['time']."</b></li>
</ul>
			</td>
			</tr>
			</table>
		</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">	";
      echo ''.textas($pmr['txt']).'';
   if($pmr['what'] != 'SISTEMA'){
   echo '</div><div class="line"></div><div class="meniu" style="text-align: center;">
   <form action="inbox.php?id=write&kam='.$pmr['what'].'" method="post"/>
    Atsakymas:<br />
   <textarea name="txt" rows="3"></textarea><br />
   </div><div class="meniu" style="text-align: center;">
   <input type="submit" value="Siųsti"/>';
   }
  echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
 <a href=\"inbox.php\">Atgal</a><br/>
<a href=\"pagrindinis.php\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}

elseif($id == "write"){
if(isset($_POST['submit'])){$kam = post($_POST['kam']);}
if(isset($_POST['submit'])){$tema = post($_POST['tema']);}
if ($tema == ""){$tema =" be temos";}
$txt = post($_POST['txt']);
if(empty($txt) ){echo 'Paliktai kažkurį tuščią laukelį!';
} else {
if(mysql_num_rows(mysql_query("SELECT * FROM black_list WHERE nore='$nick' and nick='$kam' LIMIT 1")) > 0){
echo'Jūs esate <b>'.$kam.'</b> juodajame sąraše todėl negalite siųsti jam PM žinučių!<br/>';
} else {
if($kam == $nick){ echo 'Sau siųsti žinutės negalimą!';
} else {
if($kam == 'SISTEMA'){echo 'SISTEMAI siusti žinutės negalima!';
} else {
if($lygis < $need_lvl && $kam !== "funix"){echo 'Tavo lygis per žemas! Reikia '.$need_lvl.' lygio.';
} else {
$kito_zaidejo_lygis = @explode("|",@file_get_contents("zaideju pagrindinai statusai/$kam.txt"));
if ($kito_zaidejo_lygis[0] < 170 && $nick != "funix") { echo "Rašyti pm negalima! <b>$kam</b> neturi $need_lvl lygio."; 
} else {
if (!file_exists("zaideju pagrindinai statusai/$kam.txt")){echo 'Tokio žaidėjo nėra!';
} else {
 mysql_query("INSERT INTO pm SET what='$nick', txt='$txt',tema='$tema', gavejas='$kam', time='".date("Y-m-d H:i:s")."', nauj='NEW' ") or die(mysql_error());
echo 'Žinutė išsiųsta!';
}}}}}}}
echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"inbox.php\">Atgal</a><br/>
<a href=\"pagrindinis.php\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}

elseif($id == "delete"){
   if($co == "yes"){
       echo 'Žinutės sėkminai ištrintos!';
       mysql_query("DELETE FROM pm WHERE gavejas='$nick' ");
   } else {
   echo 'Ar tikrai norite ištrinti visas žinutes?<br/>
   </div><div class="line"></div><div class="meniu" style="text-align: center;">
   <a href="inbox.php?id=delete&co=yes">Taip</a> | <a href="inbox.php">Ne</a>';
   }
echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"inbox.php\">Atgal</a><br/>
<a href=\"pagrindinis.php\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
else{
    echo 'Atsiprašome, puslapis, kurio ieškojote, nerastas.';
echo"</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
?>