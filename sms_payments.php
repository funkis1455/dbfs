<?php

mysql_connect('localhost','dbf_data1st','5SMdSiZhBV')or die('MySQL Error!');
mysql_select_db('dbf_data1st');
mysql_query("SET NAMES utf8");
$textas = $_GET['wp_sms'];
$siuntejo_nr = $_GET['wp_from'];
$tr_nr = $_GET['wp_to'];
$kaina = $_GET['wp_amount']/100;
$salis = $_GET['wp_country'];
$valiuta = $_GET['wp_currency'];
$smss = explode(" ", $textas);
$slapyvardis = $smss[0];
$plus = $smss[1];
$plusdar = $smss[2];
$pava = $smss[1];
$nick = $smss[3];
$nx = $smss[4];
$uzpiso = $smss[5];
$nic = $smss[2];
$nicdar = $smss[3];

	
if (($smss[0] == "ad2") or ($smss[0] == "Ad2")  or ($smss[0] == "AD2"))
{
    $irasas_reklamai = "$smss[2] $smss[3] $smss[4] $smss[5] $smss[6] $smss[7]";
    $irasas_reklamai = htmlspecialchars(str_replace(array("^", "%", "$", "\n", "|"),
        "", $irasas_reklamai));
    $smss[1] = htmlspecialchars(str_replace(array("^", "%", "$", "\n", "|"), "", $smss[1]));
    $foo = @fopen("files for txt/add_bottom.txt", "a");
    @fwrite($foo, "http://$smss[1]|$irasas_reklamai|\n");
    @fclose($foo);

   echo "Ok. Jusu zinute gauta sekmingai. Paslaugos bus aktyvuotos nedelsiant.";	
}

if (($smss[0] == "ad3") or ($smss[0] == "Ad3")  or ($smss[0] == "AD3"))
{
    $irasas_reklamai = "$smss[2] $smss[3] $smss[4] $smss[5] $smss[6] $smss[7]";
    $irasas_reklamai = htmlspecialchars(str_replace(array("^", "%", "$", "\n", "|"),
        "", $irasas_reklamai));
    $smss[1] = htmlspecialchars(str_replace(array("^", "%", "$", "\n", "|"), "", $smss[1]));
    $foo = @fopen("files for txt/add_bottom.txt", "a");
    @fwrite($foo, "http://$smss[1]|<font color='#9f0000'><b>$irasas_reklamai</b></font>|\n");
    @fclose($foo);
   echo "Ok. Jusu zinute gauta sekmingai. Paslaugos bus aktyvuotos nedelsiant.";	
}

if (($smss[0] == "ad5") or ($smss[0] == "Ad5")  or ($smss[0] == "AD5"))
{
    $irasas_reklamai = "$smss[2] $smss[3] $smss[4] $smss[5] $smss[6] $smss[7]";
    $irasas_reklamai = htmlspecialchars(str_replace(array("^", "%", "$", "\n", "|"),
        "", $irasas_reklamai));
    $smss[1] = htmlspecialchars(str_replace(array("^", "%", "$", "\n", "|"), "", $smss[1]));
    $foo = @fopen("files for txt/add_tittle.txt", "a");
    @fwrite($foo, "http://$smss[1]|$irasas_reklamai|\n");
    @fclose($foo);

   echo "Ok. Jusu zinute gauta sekmingai. Paslaugos bus aktyvuotos nedelsiant.";	
}

if (($smss[0] == "ad7") or ($smss[0] == "Ad7")  or ($smss[0] == "AD7"))
{
    $irasas_reklamai = "$smss[2] $smss[3] $smss[4] $smss[5] $smss[6] $smss[7]";
    $irasas_reklamai = htmlspecialchars(str_replace(array("^", "%", "$", "\n", "|"),
        "", $irasas_reklamai));
    $smss[1] = htmlspecialchars(str_replace(array("^", "%", "$", "\n", "|"), "", $smss[1]));
    $foo = @fopen("files for txt/add_tittle.txt", "a");
    @fwrite($foo, "http://$smss[1]|<font color='#9f0000'>$irasas_reklamai</font>|\n");
    @fclose($foo);
   echo "Ok. Jusu zinute gauta sekmingai. Paslaugos bus aktyvuotos nedelsiant.";	
}


if (file_exists("zaideju pagrindinai statusai/$pava.txt"))
{

    $inf = explode("|", file_get_contents("zaideju pagrindinai statusai/$pava.txt"));
    if (!file_exists("account/$pava.txt"))
    {
        $kr = 0;
    }
    else
    {
        $kr = file_get_contents("account/$pava.txt");
    }
	
if (($smss[0] == "UNB") or ($smss[0] == "Unb")  or ($smss[0] == "Unb")){
    $nkh2 = @file("files for txt/nick_bans.txt");
            $kiek_nkh2 = count($nkh2);
            for ($py2 = 0; $py2 < $kiek_nkh2; $py2++)
            {
                $kly2 = explode("|", $nkh2[$py2]);
                if ($pava == $kly2[0])
                {
                    $nkh2[$py2] = "";
                    $fpz2 = @fopen("files for txt/nick_bans.txt", "w");
                    @fwrite($fpz2, implode($nkh2));
                    @fclose($fpz2);	
               } }
			   echo "Ok. Jusu zinute gauta sekmingai. Paslaugos bus aktyvuotos nedelsiant.";	

			   }
			   
			   if (($smss[0] == "PAS2") or ($smss[0] == "pas2")  or ($smss[0] == "Pas2"))
{
         $telgtvvv = @explode("|",@file_get_contents("nustatymai/$pava.txt"));
  $siuntejo_nr = "+$siuntejo_nr";

  if ($telgtvvv[11] == $siuntejo_nr)
{

      
     echo "OK Zaidejo $pava slaptazodis yra $telgtvvv[12] SERVERIS 2";
}
else
{
     echo "OK Klaida numeris neatitiko jusu numerio.
"; }}	
if (($smss[0] == "DBF1") or ($smss[0] == "Dbf1")  or ($smss[0] == "dbf1")){
            $kr = $kr + 10;
            $open = fopen("account/$pava.txt", "w");
            fwrite($open, "$kr");
            fclose($open);
            @chmod("account/$pava.txt", 0777);
$tope = mysql_num_rows(mysql_query("SELECT * FROM sms_top WHERE nick='$pava'"));
if($tope>0){  mysql_query("UPDATE sms_top SET sms=sms+'0.3'  WHERE nick='$pava'");}else{
mysql_query("INSERT INTO sms_top SET sms ='0.3',nick='$pava' ");}		
mysql_query("INSERT INTO payment_log SET kas='$pava', suma='$kaina',valiuta='$valiuta',salis='$salis',budas='SMS',laikas='".date("Y-m-d H:i:s")."' ");
echo "Ok. Jusu zinute gauta sekmingai. ";
}

if (($smss[0] == "DBF3") or ($smss[0] == "Dbf3")  or ($smss[0] == "dbf3")){
            $kr = $kr + 37;
            $open = fopen("account/$pava.txt", "w");
            fwrite($open, "$kr");
            fclose($open);
            @chmod("account/$pava.txt", 0777);
$tope = mysql_num_rows(mysql_query("SELECT * FROM sms_top WHERE nick='$pava'"));
if($tope>0){  mysql_query("UPDATE sms_top SET sms=sms+'1'  WHERE nick='$pava'");}else{
mysql_query("INSERT INTO sms_top SET sms ='1',nick='$pava' ");}		
mysql_query("INSERT INTO payment_log SET kas='$pava', suma='$kaina',valiuta='$valiuta',salis='$salis',budas='SMS',laikas='".date("Y-m-d H:i:s")."' ");
echo "Ok. Jusu zinute gauta sekmingai. ";
}

if (($smss[0] == "DBF5") or ($smss[0] == "dbf5")  or ($smss[0] == "Dbf5")){
            $kr = $kr + 60;
            $open = fopen("account/$pava.txt", "w");
            fwrite($open, "$kr");
            fclose($open);
            @chmod("account/$pava.txt", 0777);
$tope = mysql_num_rows(mysql_query("SELECT * FROM sms_top WHERE nick='$pava'"));
if($tope>0){  mysql_query("UPDATE sms_top SET sms=sms+'1.5'  WHERE nick='$pava'");}else{
mysql_query("INSERT INTO sms_top SET sms ='1.5',nick='$pava' ");}			
mysql_query("INSERT INTO payment_log SET kas='$pava', suma='$kaina',valiuta='$valiuta',salis='$salis',budas='SMS',laikas='".date("Y-m-d H:i:s")."' ");
echo "Ok. Jusu zinute gauta sekmingai. ";		
}

if (($smss[0] == "DBF7") or ($smss[0] == "Dbf7")  or ($smss[0] == "dbf7")){
            $kr = $kr + 90;
            $open = fopen("account/$pava.txt", "w");
            fwrite($open, "$kr");
            fclose($open);
            @chmod("account/$pava.txt", 0777);
$tope = mysql_num_rows(mysql_query("SELECT * FROM sms_top WHERE nick='$pava'"));
if($tope>0){  mysql_query("UPDATE sms_top SET sms=sms+'2'  WHERE nick='$pava'");}else{
mysql_query("INSERT INTO sms_top SET sms ='2',nick='$pava' ");}		
mysql_query("INSERT INTO payment_log SET kas='$pava', suma='$kaina',valiuta='$valiuta',salis='$salis',budas='SMS',laikas='".date("Y-m-d H:i:s")."' ");
echo "Ok. Jusu zinute gauta sekmingai.";
			}

if (($smss[0] == "DBF8") or ($smss[0] == "Dbf8")  or ($smss[0] == "dbf8")){
            $kr = $kr + 190;
            $open = fopen("account/$pava.txt", "w");
            fwrite($open, "$kr");
            fclose($open);
            @chmod("account/$pava.txt", 0777);
$tope = mysql_num_rows(mysql_query("SELECT * FROM sms_top WHERE nick='$pava'"));
if($tope>0){  mysql_query("UPDATE sms_top SET sms=sms+'3'  WHERE nick='$pava'");}else{
mysql_query("INSERT INTO sms_top SET sms ='3',nick='$pava' ");}		
mysql_query("INSERT INTO payment_log SET kas='$pava', suma='$kaina',valiuta='$valiuta',salis='$salis',budas='SMS',laikas='".date("Y-m-d H:i:s")."' ");
echo "Ok. Jusu zinute gauta sekmingai.";
			}
			
			
			if (($smss[0] == "DBF9") or ($smss[0] == "Dbf9")  or ($smss[0] == "dbf9")){
            $kr = $kr + 190;
            $open = fopen("account/$pava.txt", "w");
            fwrite($open, "$kr");
            fclose($open);
            @chmod("account/$pava.txt", 0777);
$tope = mysql_num_rows(mysql_query("SELECT * FROM sms_top WHERE nick='$pava'"));
if($tope>0){  mysql_query("UPDATE sms_top SET sms=sms+'4'  WHERE nick='$pava'");}else{
mysql_query("INSERT INTO sms_top SET sms ='4',nick='$pava' ");}		
mysql_query("INSERT INTO payment_log SET kas='$pava', suma='$kaina',valiuta='$valiuta',salis='$salis',budas='SMS',laikas='".date("Y-m-d H:i:s")."' ");
echo "Ok. Jusu zinute gauta sekmingai. ";
			}
			
						if (($smss[0] == "DBF10") or ($smss[0] == "Dbf10")  or ($smss[0] == "dbf10")){
            $kr = $kr + 490;
            $open = fopen("account/$pava.txt", "w");
            fwrite($open, "$kr");
            fclose($open);
            @chmod("account/$pava.txt", 0777);
$tope = mysql_num_rows(mysql_query("SELECT * FROM sms_top WHERE nick='$pava'"));
if($tope>0){  mysql_query("UPDATE sms_top SET sms=sms+'10'  WHERE nick='$pava'");}else{
mysql_query("INSERT INTO sms_top SET sms ='10',nick='$pava' ");}		
mysql_query("INSERT INTO payment_log SET kas='$pava', suma='$kaina',valiuta='$valiuta',salis='$salis',budas='SMS',laikas='".date("Y-m-d H:i:s")."' ");
echo "Ok. Jusu zinute gauta sekmingai. ";
			}
}
if (file_exists("zaideju pagrindinai statusai/$nic.txt"))
{
 
    $inf = explode("|", @file_get_contents("zaideju pagrindinai statusai/$nic.txt"));
    if (!file_exists("account/$nic.txt"))
    {
        $kr = 0;
    }
    else
    {
        $kr = @file_get_contents("account/$nic.txt");
    }
///////////////////////////norvegija/////////////////////////////////////
if (($plus == "DBF1") or ($plus == "Dbf1")  or ($plus == "dbf1")){
            $kr = $kr + 49;
            $open = fopen("account/$nic.txt", "w");
            fwrite($open, "$kr");
            fclose($open);
            @chmod("account/$nic.txt", 0777);
$tope = mysql_num_rows(mysql_query("SELECT * FROM sms_top WHERE nick='$nic'"));
if($tope>0){  mysql_query("UPDATE sms_top SET sms=sms+'1'  WHERE nick='$nic'");}else{
mysql_query("INSERT INTO sms_top SET sms ='1',nick='$nic' ");}			
mysql_query("INSERT INTO payment_log SET kas='$nic', suma='$kaina',valiuta='$valiuta',salis='$salis',budas='SMS',laikas='".date("Y-m-d H:i:s")."' ");
echo "Ok. Jusu zinute gauta sekmingai. Paslaugos bus aktyvuotos nedelsiant.";	
}
if (($plus == "DBF3") or ($plus == "Dbf3")  or ($plus == "dbf3")){
            $kr = $kr + 160;
            $open = fopen("account/$nic.txt", "w");
            fwrite($open, "$kr");
            fclose($open);
            @chmod("account/$nic.txt", 0777);
$tope = mysql_num_rows(mysql_query("SELECT * FROM sms_top WHERE nick='$nic'"));
if($tope>0){  mysql_query("UPDATE sms_top SET sms=sms+'1'  WHERE nick='$nic'");}else{
mysql_query("INSERT INTO sms_top SET sms ='3',nick='$nic' ");}			
mysql_query("INSERT INTO payment_log SET kas='$nic', suma='$kaina',valiuta='$valiuta',salis='$salis',budas='SMS',laikas='".date("Y-m-d H:i:s")."' ");
echo "Ok. Jusu zinute gauta sekmingai. Paslaugos bus aktyvuotos nedelsiant.";	
}
if (($plus == "DBF5") or ($plus == "Dbf5")  or ($plus == "dbf5")){
            $kr = $kr + 600;
            $open = fopen("account/$nic.txt", "w");
            fwrite($open, "$kr");
            fclose($open);
            @chmod("account/$nic.txt", 0777);
$tope = mysql_num_rows(mysql_query("SELECT * FROM sms_top WHERE nick='$nic'"));
if($tope>0){  mysql_query("UPDATE sms_top SET sms=sms+'1'  WHERE nick='$nic'");}else{
mysql_query("INSERT INTO sms_top SET sms ='10',nick='$nic' ");}			
mysql_query("INSERT INTO payment_log SET kas='$nic', suma='$kaina',valiuta='$valiuta',salis='$salis',budas='SMS',laikas='".date("Y-m-d H:i:s")."' ");
echo "Ok. Jusu zinute gauta sekmingai. Paslaugos bus aktyvuotos nedelsiant.";	
}






	
if (($plus == "DB1") or ($plus == "Db1")  or ($plus == "db1")){
            $kr = $kr + 65;
            $open = fopen("account/$nic.txt", "w");
            fwrite($open, "$kr");
            fclose($open);
            @chmod("account/$nic.txt", 0777);
$tope = mysql_num_rows(mysql_query("SELECT * FROM sms_top WHERE nick='$nic'"));
if($tope>0){  mysql_query("UPDATE sms_top SET sms=sms+'1'  WHERE nick='$nic'");}else{
mysql_query("INSERT INTO sms_top SET sms ='1',nick='$nic' ");}			
mysql_query("INSERT INTO payment_log SET kas='$nic', suma='$kaina',valiuta='$valiuta',salis='$salis',budas='SMS',laikas='".date("Y-m-d H:i:s")."' ");
echo "Ok. Jusu zinute gauta sekmingai. Paslaugos bus aktyvuotos nedelsiant.";	
}
if (($plus == "DB3") or ($plus == "Db3")  or ($plus == "db3")){
            $kr = $kr + 214;
            $open = fopen("account/$nic.txt", "w");
            fwrite($open, "$kr");
            fclose($open);
            @chmod("account/$nic.txt", 0777);
$tope = mysql_num_rows(mysql_query("SELECT * FROM sms_top WHERE nick='$nic'"));
if($tope>0){  mysql_query("UPDATE sms_top SET sms=sms+'3'  WHERE nick='$nic'");}else{
mysql_query("INSERT INTO sms_top SET sms ='3',nick='$nic' ");}			
	mysql_query("INSERT INTO payment_log SET kas='$nic', suma='$kaina',valiuta='$valiuta',salis='$salis',budas='SMS',laikas='".date("Y-m-d H:i:s")."' ");
echo "Ok. Jusu zinute gauta sekmingai. Paslaugos bus aktyvuotos nedelsiant.";	
}

if (($plus == "DB5") or ($plus == "Db5")  or ($plus == "db5")){
            $kr = $kr + 393;
            $open = fopen("account/$nic.txt", "w");
            fwrite($open, "$kr");
            fclose($open);
            @chmod("account/$nic.txt", 0777);
$tope = mysql_num_rows(mysql_query("SELECT * FROM sms_top WHERE nick='$nic'"));
if($tope>0){  mysql_query("UPDATE sms_top SET sms=sms+'5'  WHERE nick='$nic'");}else{
mysql_query("INSERT INTO sms_top SET sms ='5',nick='$nic' ");}		
mysql_query("INSERT INTO payment_log SET kas='$nic', suma='$kaina',valiuta='$valiuta',salis='$salis',budas='SMS',laikas='".date("Y-m-d H:i:s")."' ");
echo "Ok. Jusu zinute gauta sekmingai. Paslaugos bus aktyvuotos nedelsiant.";	
}
if (($plus == "DB10") or ($plus == "Db10")  or ($plus == "db10")){
            $kr = $kr + 865;
            $open = fopen("account/$nic.txt", "w");
            fwrite($open, "$kr");
            fclose($open);
            @chmod("account/$nic.txt", 0777);
$tope = mysql_num_rows(mysql_query("SELECT * FROM sms_top WHERE nick='$nic'"));
if($tope>0){  mysql_query("UPDATE sms_top SET sms=sms+'10'  WHERE nick='$nic'");}else{
mysql_query("INSERT INTO sms_top SET sms ='10',nick='$nic' ");}		
mysql_query("INSERT INTO payment_log SET kas='$nic', suma='$kaina',valiuta='$valiuta',salis='$salis',budas='SMS',laikas='".date("Y-m-d H:i:s")."' ");
echo "Ok. Jusu zinute gauta sekmingai. Paslaugos bus aktyvuotos nedelsiant.";	
}

if (($plus == "DE2") or ($plus == "De2")  or ($plus == "de2")){
            $kr = $kr + 169;
            $open = fopen("account/$nic.txt", "w");
            fwrite($open, "$kr");
            fclose($open);
            @chmod("account/$nic.txt", 0777);
$tope = mysql_num_rows(mysql_query("SELECT * FROM sms_top WHERE nick='$nic'"));
if($tope>0){  mysql_query("UPDATE sms_top SET sms=sms+'5'  WHERE nick='$nic'");}else{
mysql_query("INSERT INTO sms_top SET sms ='2',nick='$nic' ");}		
mysql_query("INSERT INTO payment_log SET kas='$nic', suma='$kaina',valiuta='$valiuta',salis='$salis',budas='SMS',laikas='".date("Y-m-d H:i:s")."' ");
echo "Ok. Jusu zinute gauta sekmingai. Paslaugos bus aktyvuotos nedelsiant.";	
}

if (($plus == "DE5") or ($plus == "De5")  or ($plus == "de5")){
            $kr = $kr + 422;
            $open = fopen("account/$nic.txt", "w");
            fwrite($open, "$kr");
            fclose($open);
            @chmod("account/$nic.txt", 0777);
$tope = mysql_num_rows(mysql_query("SELECT * FROM sms_top WHERE nick='$nic'"));
if($tope>0){  mysql_query("UPDATE sms_top SET sms=sms+'5'  WHERE nick='$nic'");}else{
mysql_query("INSERT INTO sms_top SET sms ='5',nick='$nic' ");}		
mysql_query("INSERT INTO payment_log SET kas='$nic', suma='$kaina',valiuta='$valiuta',salis='$salis',budas='SMS',laikas='".date("Y-m-d H:i:s")."' ");
echo "Ok. Jusu zinute gauta sekmingai. Paslaugos bus aktyvuotos nedelsiant.";	
}

}

if (file_exists("zaideju pagrindinai statusai/$nicdar.txt"))
{
 
    $inf = explode("|", file_get_contents("zaideju pagrindinai statusai/$nicdar.txt"));
    if (!file_exists("account/$nicdar.txt"))
    {
        $kr = 0;
    }
    else
    {
        $kr = file_get_contents("account/$nicdar.txt");
    }	
if (($plusdar == "KM1") or ($plusdar == "km1")  or ($plusdar == "km1")){
            $kr = $kr + 19;
            $open = fopen("account/$nicdar.txt", "w");
            fwrite($open, "$kr");
            fclose($open);
            @chmod("account/$nicdar.txt", 0777);
$tope = mysql_num_rows(mysql_query("SELECT * FROM sms_top WHERE nick='$pava'"));
if($tope>0){  mysql_query("UPDATE sms_top SET sms=sms+'1'  WHERE nick='$pava'");}else{
mysql_query("INSERT INTO sms_top SET sms ='1',nick='$pava' ");}				
echo "Ok. Jusu zinute gauta sekmingai. Paslaugos bus aktyvuotos nedelsiant.";	
}
if (($plusdar == "DB3") or ($plusdar == "Db3")  or ($plusdar == "db3")){
            $kr = $kr + 34;
            $open = fopen("account/$nicdar.txt", "w");
            fwrite($open, "$kr");
            fclose($open);
            @chmod("account/$nicdar.txt", 0777);
$tope = mysql_num_rows(mysql_query("SELECT * FROM sms_top WHERE nick='$pava'"));
if($tope>0){  mysql_query("UPDATE sms_top SET sms=sms+'3'  WHERE nick='$pava'");}else{
mysql_query("INSERT INTO sms_top SET sms ='3',nick='$pava' ");}				
	
echo "Ok. Jusu zinute gauta sekmingai. Paslaugos bus aktyvuotos nedelsiant.";	
}
if (($plusdar == "DB5") or ($plusdar == "Db5")  or ($plusdar == "db5")){
            $kr = $kr + 59;
            $open = fopen("account/$nicdar.txt", "w");
            fwrite($open, "$kr");
            fclose($open);
            @chmod("account/$nicdar.txt", 0777);
$tope = mysql_num_rows(mysql_query("SELECT * FROM sms_top WHERE nick='$pava'"));
if($tope>0){  mysql_query("UPDATE sms_top SET sms=sms+'5'  WHERE nick='$pava'");}else{
mysql_query("INSERT INTO sms_top SET sms ='5',nick='$pava' ");}			
		
echo "Ok. Jusu zinute gauta sekmingai. Paslaugos bus aktyvuotos nedelsiant.";	
}
if (($plusdar == "DB10") or ($plusdar == "Db10")  or ($plusdar == "db10")){
            $kr = $kr + 122;
            $open = fopen("account/$nicdar.txt", "w");
            fwrite($open, "$kr");
            fclose($open);
            @chmod("account/$nic.txt", 0777);
$tope = mysql_num_rows(mysql_query("SELECT * FROM sms_top WHERE nick='$pava'"));
if($tope>0){  mysql_query("UPDATE sms_top SET sms=sms+'10'  WHERE nick='$pava'");}else{
mysql_query("INSERT INTO sms_top SET sms ='10',nick='$pava' ");}		
		
echo "Ok. Jusu zinute gauta sekmingai. Paslaugos bus aktyvuotos nedelsiant.";	
}
}


exit();  

?>