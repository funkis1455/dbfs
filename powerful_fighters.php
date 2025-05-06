<?php
ob_start();
$kur = "Bossai";
include ("config.php");
include_once("icludekitainf/function.php");
include_once("icludekitainf/start.php");


if($gyvybes < 0){
$fp = @fopen("$gameriai","w");
@fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|0|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
@fclose($fp);
    }

if($i == ""){

    echo 'Čia jūs galite mušti labai galingus priešus su kitais žaidėjas, paskutinis smugi įkirtes žaidėjas gauną viską ką priešas išmeta.';
    echo '</div><div class="line"></div><div class="meniu" style="text-align: left;">';
    $query = mysql_query("SELECT * FROM boss");
    while($row = mysql_fetch_assoc($query)){
         if($row['prisikels']-time() > 0){
         echo ''.$ico.' '.$row['name'].' prisikels už <b>'.laikas($row['prisikels']-time(), 1).'</b><br/>';
         } else {
             echo ''.$ico.' <a href="powerful_fighters.php?i=inf&id='.$row['id'].'">'.$row['name'].'</a> ('.number_format($row['hp']).'/'.number_format($row['max_hp']).')<br/>';
         }
         unset($row);
    }
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"fighting.php?id=kautis\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
elseif($i == "inf"){

    $boss = mysql_fetch_array(mysql_query("SELECT * FROM boss WHERE id='$id'"));
    $tims = $boss['laikas'];
    if($boss['prisikels']-time() > 0){

      echo '<img src="images/boss/'.$boss['name'].'.png" alt="'.$boss['name'].'">
   </div><div class="line"></div><div class="meniu" style="text-align: center;">';
        echo ''.$boss['name'].' nukautas, prisikels už <b>'.laikas($boss['prisikels']-time(), 1).'</b><br/>';
    }
    elseif(mysql_num_rows(mysql_query("SELECT * FROM boss WHERE id='$id' ")) == 0){
        echo 'Toks priešas neegzistuoja!';
    }
    else {
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5"; 
$fp = @fopen("$gameriai","w");
@fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
@fclose($fp);
        echo '<b>'.$boss['name'].'</b> </div><div class="line"></div><div class="meniu" style="text-align: center;">';
        echo '<img src="imgs/boss/'.$boss['name'].'.png" alt="'.$boss['name'].'">
   </div><div class="line"></div><div class="meniu" style="text-align: left;">
     '.$ico.' Gyvybės: '.number_format($boss['hp']).'/'.number_format($boss['max_hp']).'<br/>
         '.$ico.' Meta EXP: '.number_format($boss['exp']).'<br/>
         '.$ico.' Meta pinigų: '.number_format($boss['zen']).'<br/>
        '.$ico.' Meta LTL: '.number_format($boss['krd']).' <br/>
        </div><div class="meniu" style="text-align: left;">
       '.$ico.'  Max HIT: '.number_format($boss['max_hit']).'<br/>
        '.$ico.' Prisikelia kas: '.laikas($tims, 1).'<br/>
         '.$ico.' Paskutinis nukirto: '.$boss['nukirto'].'<br/>
  </div><div class="line"></div><div class="meniu" style="text-align: center;">
         <a href="powerful_fighters.php?i=attack&kd='.$kodase.'&id='.$id.'"><b>Pulti</b></a>';
    }
    
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"powerful_fighters.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}

elseif($i == "attack"){
$kdp = $_GET['kd']; 
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5";
    $boss = mysql_fetch_array(mysql_query("SELECT * FROM boss WHERE id='$id'"));
    $tims = $boss['laikas'];
    if($boss['prisikels']-time() > 0){
        echo '<img src="imgs/boss/'.$boss['name'].'.png" alt="'.$boss['name'].'">
   </div><div class="line"></div><div class="meniu" style="text-align: center;">';
        echo ''.$boss['name'].' nukautas, prisikels už <b>'.laikas($boss['prisikels']-time(), 1).'</b><br/>';
    }
    elseif(mysql_num_rows(mysql_query("SELECT * FROM boss WHERE id='$id' ")) == 0){
          echo 'Toks priešas neegzistuoja!';
    }
    elseif($boss['nukirto'] == $nick){

        echo 'Antra kart iš eilės kirsti negali!<br/>';
    }
			elseif ($kdp != $aps_kodas or $kdp == "" or strlen($kdp) != 5){ 
			
echo"Turite spausti \"Pulti\", arba \"Atgal\".";
		 echo' </div><div class="line"></div><div class="meniu" style="text-align: center;"><a href="powerful_fighters.php?i=attack&kd='.$kodase.'&id='.$id.'"><b>Smogti vėl</b></a>';
$fp = @fopen("$gameriai","w");
@fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
@fclose($fp);
	}
    elseif (time() < $floo){
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5";
        echo ' Kovoti galėsi už <b>'.laikas($floo-time(), 1).'</b><br/>';
		 echo' </div><div class="line"></div><div class="meniu" style="text-align: center;"><a href="powerful_fighters.php?i=attack&kd='.$kodase.'&id='.$id.'"><b>Smogti vėl</b></a>';
$fp = @fopen("$gameriai","w");
@fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
@fclose($fp);
    }
    elseif($gyvybes < 1){
         echo" Tu neturi gyvybių!";
    }
    else {
        echo '<b>'.$boss['name'].'</b> </div><div class="line"></div><div class="meniu" style="text-align: center;">';
        echo '<img src="imgs/boss/'.$boss['name'].'.png" alt="'.$boss['name'].'">
   </div><div class="line"></div><div class="meniu" style="text-align: left;">';
        if($id == 1){
            $smugis = rand(20,50);
        }
        elseif($id == 2){
            $smugis = rand(50,100);
        }
               elseif($id == 3){
            $smugis = rand(120,250);
        }
		               elseif($id == 4){
            $smugis = rand(200,400);
        }
				               elseif($id == 5){
            $smugis = rand(300,550);
        }
						               elseif($id == 6){
            $smugis = rand(350,610);
        }
        $hit = rand(1,$boss['max_hit']);
		   $likogiv = $gyvybes - $hit;
        $bosui_liko = $boss['hp'] - $smugis;
        
        if($bosui_liko > 0){
            mysql_query("UPDATE boss SET hp='$bosui_liko' WHERE id='$id' ");
			$tim = $tim + 5;
$fpa = @fopen("$gameriai","w");
@fwrite($fpa,"$lvl|$inf[1]|$inf[2]|$jega|$likogiv|$gyvybess|$sugebejimas|$pinigai|$winai|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$pointsr|$gynyba|$tim|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
@fclose($fpa);
            echo '
            '.$ico.' Tu įkirtai: <b>'.number_format($smugis).'</b><br/>
            '.$ico.' Tau įkirto: <b>'.number_format($hit).'</b><br/></div><div class="meniu" style="text-align: left;">
            '.$ico.' priešui liko: <b>'.number_format($bosui_liko).'</b><br/>
            '.$ico.' Tau liko: <b>'.number_format($gyvybes).'</b><br/>
            </div><div class="line"></div><div class="meniu" style="text-align: center;">
           <a href="powerful_fighters.php?i=attack&kd='.$kodase.'&id='.$id.'"><b>Smogti vėl</b></a>';
        }
        elseif($bosui_liko < 1){
            $krdx = $boss['krd'];
            $zenx = $boss['zen'];
            $expx = $boss['exp'];

            $time = time()+$boss['laikas'];
            mysql_query("UPDATE boss SET hp='$boss[max_hp]', prisikels='$time', nukirto='$nick' WHERE id='$id'");
$pinigai = $pinigai + $boss['zen'];
$tim = $tim + 5;
$suma = $exp + $boss['exp'];
$fpa = @fopen("$gameriai","w");
@fwrite($fpa,"$lvl|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$winai|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$pointsr|$gynyba|$tim|$rase|$suma|$left|$kodase|$sarvu_prot|$sarvai||\n");
@fclose($fpa);
$bosult = @file_get_contents("account/$nick.txt");
          $bosult = $bosult + $boss['krd'];
            $openxx = @fopen("account/$nick.txt", "w");
            @fwrite($openxx, "$bosult");
            @fclose($openxx);
            @chmod("account/$nick.txt", 0777);
            echo 'Įtrenkiai paskutini smugį ir  gavai <b>'.number_format($krdx).'</b> LTL, <b>'.number_format($zenx).'</b> pinigų ir <b>'.number_format($expx).'</b> EXP.';
        }
    } 
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"powerful_fighters.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}
  
  		else{
    echo 'Atsiprašome, puslapis, kurio ieškojote, nerastas.';
echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"powerful_fighters.php?id=\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";
}


?>