<?php  

$textas = $_GET['wp_sms'];
$siuntejo_nr = $_GET['wp_from'];
$tr_nr = $_GET['wp_to'];
$kaina = $_GET['wp_amount'];

$smss = explode(" ", $textas);
$rakt = strtolower($smss[0]);
$nic = ereg_replace("[^A-Za-z0-9]", "", $smss[1]);
$ko = strtolower(ereg_replace("[^A-Za-z0-9]", "", $smss[2]));
$dar = ereg_replace("[^A-Za-z0-9]", "", $smss[3]);

$laikas = date("Y-m-d H:i");
 echo "Ok. Jusu zinute gauta sekmingai. ";

if (file_exists("zaideju pagrindinai statusai/$nic.txt"))
{
$inf = @explode("|", @file_get_contents("zaideju pagrindinai statusai/$nic.txt"));
if (!file_exists("kronoss/$nic.txt")){ $kr = 0;}else {$kr = @file_get_contents("kronoss/$nic.txt");}
if (!file_exists("account/$nic.txt")){ $lt = 0;} else{$lt = @file_get_contents("account/$nic.txt");}

if (file_exists("sms lenta/$ko.txt"))
{

$textas = $_GET['wp_sms'];
$siuntejo_nr = $_GET['wp_from'];
$tr_nr = $_GET['wp_to'];
$kaina = $_GET['wp_amount'];
$smss = explode(" ", $textas);
$rakt = strtolower($smss[0]);
$nic = ereg_replace("[^A-Za-z0-9]", "", $smss[1]);
$ko = strtolower(ereg_replace("[^A-Za-z0-9]", "", $smss[2]));
$dar = ereg_replace("[^A-Za-z0-9]", "", $smss[3]);

$ex = @file_get_contents("sms lenta/$ko.txt");
$ex = @explode("|", $ex);
$uzsakovas = $ex[0];
$atlygis = $ex[1];
$kaina_uz = $ex[2];
$smsas = $ex[3];
$ex_sms = @explode(" ", $smsas);
$ex_rakt = $ex_sms[0];
$ex_nick = $ex_sms[1];
$ex_ko = $ex_sms[2];
$ex_dar = $ex_sms[3];

if ($kaina == "300" && $ex_ko == "exp3")
	{
	$ok = "ok";
	$time = time() + 60*60*24;
	@file_put_contents("paslaugos/daugiau exp/$uzsakovas.txt", "3|$time|");
	@chmod("paslaugos/daugiau exp/$uzsakovas.txt", 0777);
	}
	if ($kaina == "500" && $ex_ko == "exp5")
	{
	$ok = "ok";
	$time = time() + 60*60*24;
	@file_put_contents("paslaugos/daugiau exp/$uzsakovas.txt", "5|$time|");
	@chmod("paslaugos/daugiau exp/$uzsakovas.txt", 0777);
	}
	if ($kaina == "300" && $ex_ko == "many2")
	{
	$ok = "ok";
	$time = time() + 60*60*24;
	@file_put_contents("paslaugos/daugiau pinigu/$uzsakovas.txt", "2|$time|");
	@chmod("paslaugos/daugiau pinigu/$uzsakovas.txt", 0777);
	}
    if ($kaina == "500" && $ex_ko == "many3")
	{
	$ok = "ok";
	$time = time() + 60*60*24;
	@file_put_contents("paslaugos/daugiau pinigu/$uzsakovas.txt", "3|$time|");
	@chmod("paslaugos/daugiau pinigu/$uzsakovas.txt", 0777);
	}
	if ($kaina == "300" && $ex_ko == "gk3")
	{
	$ok = "ok";
	$time = time() + 60*60*24;
	@file_put_contents("paslaugos/didesnis nukaunamuma/$uzsakovas.txt", "3|$time|");
	@chmod("paslaugos/didesnis nukaunamuma/$uzsakovas.txt", 0777);
	}
	if ($kaina == "500" && $ex_ko == "kg5")
	{
	$ok = "ok";
	$time = time() + 60*60*24;
	@file_put_contents("paslaugos/didesnis nukaunamuma/$uzsakovas.txt", "5|$time|");
	@chmod("paslaugos/didesnis nukaunamuma/$uzsakovas.txt", 0777);
	}
	if ($kaina == "300" && $ex_ko == "pad4")
	{
	$ok = "ok";
	$time = time() + 60*60*24;
	@file_put_contents("paslaugos/padusimai/$uzsakovas.txt", "4|$time|");
	@chmod("paslaugos/didesnis nukaunamuma/$uzsakovas.txt", 0777);
	}
	if ($kaina == "700" && $ex_ko == "pad3")
	{
	$ok = "ok";
	$time = time() + 60*60*24;
	@file_put_contents("paslaugos/padusimai/$uzsakovas.txt", "3|$time|");
	@chmod("paslaugos/didesnis nukaunamuma/$uzsakovas.txt", 0777);
	}
	if ($kaina == "1500" && $ex_ko == "pad2")
	{
	$ok = "ok";
	$time = time() + 60*60*24;
	@file_put_contents("paslaugos/padusimai/$uzsakovas.txt", "2|$time|");
	@chmod("paslaugos/didesnis nukaunamuma/$uzsakovas.txt", 0777);
	}	
	if ($kaina == "100" && $ex_ko == "lt1")
	{
		$ok = "ok";
	$lt = @file_get_contents("account/$uzsakovas.txt");
    $lt = $lt + 1;
    $open = @fopen("account/$uzsakovas.txt", "w");
    @fwrite($open, "$lt");
    @fclose($open);
    @chmod("account/$uzsakovas.txt", 0777);
    }
	if ($kaina == "300" && $ex_ko == "lt3")
	{
	$ok = "ok";
	$lt = @file_get_contents("account/$uzsakovas.txt");
    $lt = $lt + 3;
    $open = @fopen("account/$uzsakovas.txt", "w");
    @fwrite($open, "$lt");
    @fclose($open);
    @chmod("account/$uzsakovas.txt", 0777);
    }	
	if ($kaina == "500" && $ex_ko == "lt5")
	{
	$ok = "ok";
	$lt = @file_get_contents("account/$uzsakovas.txt");
    $lt = $lt + 5;
    $open = @fopen("account/$uzsakovas.txt", "w");
    @fwrite($open, "$lt");
    @fclose($open);
    @chmod("account/$uzsakovas.txt", 0777);
    }
	if ($kaina == "1000" && $ex_ko == "lt10")
	{
	$ok = "ok";
	$lt = @file_get_contents("account/$uzsakovas.txt");
    $lt = $lt + 10;
    $open = @fopen("account/$uzsakovas.txt", "w");
    @fwrite($open, "$lt");
    @fclose($open);
    @chmod("account/$uzsakovas.txt", 0777);
    }
	if ($kaina == "1500" && $ex_ko == "lt15")
	{
	$ok = "ok";
	$lt = @file_get_contents("account/$uzsakovas.txt");
    $lt = $lt + 15;
    $open = @fopen("account/$uzsakovas.txt", "w");
    @fwrite($open, "$lt");
    @fclose($open);
    @chmod("account/$uzsakovas.txt", 0777);
    }
if ($ok != "ok")
{
echo "Klaida !";
exit;
}
else
{
$laikas = date("Y-m-d H:i:s");
$bll = @fopen("sun/$uzsakovas.txt","a");
@fwrite($bll,"@SISTEMA| SMS lentoje jūsų užsakyma nupirko $nic|$laikas|\n");
@fclose($bll);

$cyks2 = explode("|",@file_get_contents("zaideju pagrindinai statusai/$nic.txt")); 
$cyks2[7]= $cyks2[7] + $atlygis;
$fop = @fopen("zaideju pagrindinai statusai/$nic.txt", "w");
@fwrite($fop, "$cyks2[0]|$cyks2[1]|$cyks2[2]|$cyks2[3]|$cyks2[4]|$cyks2[5]|$cyks2[6]|$cyks2[7]|$cyks2[8]|$cyks2[9]|$cyks2[10]|$cyks2[11]|$cyks2[12]|$cyks2[13]|+|$cyks2[15]|$cyks2[16]|$cyks2[17]|$cyks2[18]|$cyks2[19]|$cyks2[20]|$cyks2[21]|$cyks2[22]|$cyks2[23]|$cyks2[24]|$cyks2[25]|$cyks2[26]|");
@fclose($fop);
@unlink("sms lenta/$ko.txt");
}
}
 //////////////////////// 1 Litas //////////////////////////////////////////////////////

if ($kaina == '100')
{

      if ($ko == "pass")
        {
         $telgtvvv = @explode("|",@file_get_contents("nustatymai/$nic.txt"));
  $siuntejo_nr = "+$siuntejo_nr";

  if ($telgtvvv[11] == $siuntejo_nr)
{

      
     echo "Zaidejo $nic slaptazodis yra $telgtvvv[12]";
}
else
{
     echo "Klaida numeris neatitiko jusu numerio.
"; }}
        if ($ko == "lt")
        {
            $lt = $lt + 1;
            $open = @fopen("account/$nic.txt", "w");
            @fwrite($open, "$lt");
            @fclose($open);
            @chmod("account/$nic.txt", 0777);
        }

        if ($ko == "kr")
        {
            $kr = $kr + 120000;
            $open = @fopen("kronoss/$nic.txt", "w");
            @fwrite($open, "$kr");
            @fclose($open);
            @chmod("kronoss/$nic.txt", 0777);
        }
	if ($ko == "konk")
	{
	$exp = @file_get_contents("zaideju pagrindinai statusai/$nic.txt");
	$exp = @explode("|", $exp);
	$exp = $exp[19];
	$open = fopen("txt/konk_dal.ly","a");
        fwrite($open, "$nic|$exp|\n");
        fclose($open); 
	}
  if ($ko == "stoju")
        {
		$is = 5;
		 if (file_exists("klaniukos/$dar.ta"))
            {$i = 0;
           while($i < $is)
		   {
		   $i++;
                $open = @fopen("klaniukos/$dar.ta", "a+");
                @fwrite($open, "$nic|\n");
                @fclose($open);
				}
		}
	$ex = @explode("|", @file_get_contents("klaniukos/$dar-kr.ta"));
$isvis = $ex[0];
$duoda = $ex[1];
$klan = $ex[2];
if ($isvis < $duoda * $is)
{
$kiek = $isvis;

}
else
{
$kiek = $duoda * $is;
}
@file_put_contents("kronoss/$nic.txt", "".@file_get_contents("kronoss/$nic.txt") + $kiek."");
if ($isvis < $duoda * $is)
{
$duoda = 0;
}
@file_put_contents("klaniukos/$dar-kr.ta", "".$isvis - $kiek."|$duoda|$klan|");
        }
}


    //////////////////////// 2 LITAi //////////////////////////////////////////////////////

    if ($kaina == '200')
    {
	        if ($ko == "lt")
        {
            $lt = $lt + 2;
            $open = @fopen("account/$nic.txt", "w");
            @fwrite($open, "$lt");
            @fclose($open);
            @chmod("account/$nic.txt", 0777);
        }
    }

    //////////////////////// 3 LITAi //////////////////////////////////////////////////////

    if ($kaina == '300')
    {
        if ($ko == "kr")
        {
            $kr = $kr + 410000;
            $open = @fopen("kronoss/$nic.txt", "w");
            @fwrite($open, "$kr");
            @fclose($open);
            @chmod("kronoss/$nic.txt", 0777);
        }

		
	if ($ko == "padusimai")
	{
	$tim = time() + 60*60*24*14;
	@file_put_contents("padusimai/$nic.txt", "3|$tim|");
	}
        if ($ko == "battle")
        {
            $tim = time() + 60*60*24*7;
            @file_put_contents("battle/$nic.txt",$tim);
        }
        if ($ko == "ban")
        {
            $nkh2 = file("txt/nick_bans_hol.txt");
            $kiek_nkh2 = count($nkh2);
            for ($py2 = 0; $py2 < $kiek_nkh2; $py2++)
            {
                $kly2 = explode("|", $nkh2[$py2]);
                if ($nic == $kly2[0])
                {
                    $nkh2[$py2] = "";
                    $fpz2 = fopen("txt/nick_bans_hol.txt", "w");
                    fwrite($fpz2, implode($nkh2));
                    fclose($fpz2);
                }
            }
        }
        if ($ko == "unban")
        {
            $nkh2 = file("txt/nick_bans.txt");
            $kiek_nkh2 = count($nkh2);
            for ($py2 = 0; $py2 < $kiek_nkh2; $py2++)
            {
                $kly2 = explode("|", $nkh2[$py2]);
                if ($nic == $kly2[0])
                {
                    $nkh2[$py2] = "";
                    $fpz2 = fopen("txt/nick_bans.txt", "w");
                    fwrite($fpz2, implode($nkh2));
                    fclose($fpz2);
                }
            }
        }

        if ($ko == "lt")
        {
            $lt = $lt + 3;
            $open = @fopen("account/$nic.txt", "w");
            @fwrite($open, "$lt");
            @fclose($open);
            @chmod("account/$nic.txt", 0777);
        }
    }

if ($kaina == '500')
    {
	     if ($ko == "exp3")
	{
	$exas = @explode("|", @file_get_contents("paslaugos/daugiau exp/$nic.txt"));
	$time = time() + 60*60*24*7;
	@file_put_contents("paslaugos/daugiau exp/$nic.txt", "3|$time|");
	@chmod("paslaugos/daugiau exp/$nic.txt", 0777);
	}
		if ($ko == "many2")
	{
	$exas = @explode("|", @file_get_contents("paslaugos/daugiau pinigu/$nic.txt"));
	$time = time() + 60*60*24*7;
	@file_put_contents("paslaugos/daugiau pinigu/$nic.txt", "2|$time|");
	@chmod("paslaugos/daugiau pinigu/$nic.txt", 0777);
	}
		if ($ko == "kg3")
	{
	$exas = @explode("|", @file_get_contents("paslaugos/didesnis nukaunamuma/$nic.txt"));
	$time = time() + 60*60*24*7;
	@file_put_contents("paslaugos/didesnis nukaunamuma/$nic.txt", "3|$time|");
	@chmod("paslaugos/didesnis nukaunamuma/$nic.txt", 0777);
	}
        if ($ko == "kr")
        {
            $kr = $kr + 850000;
            $open = @fopen("kronoss/$nic.txt", "w");
            @fwrite($open, "$kr");
            @fclose($open);
            @chmod("kronoss/$nic.txt", 0777);
        }
        if ($ko == "lt")
        {
            $lt = $lt + 5;
            $open = @fopen("account/$nic.txt", "w");
            @fwrite($open, "$lt");
            @fclose($open);
            @chmod("account/$nic.txt", 0777);
        }
		
    }
	//////////////////////// 7 LITAI //////////////////////////////////////////////////////
	  if ($kaina == '700')
    {
        if ($ko == "kr")
        {
            $kr = $kr + 1260000;
            $open = @fopen("kronoss/$nic.txt", "w");
            @fwrite($open, "$kr");
            @fclose($open);
            @chmod("kronoss/$nic.txt", 0777);
        }
		if ($ko == "padusimai")
	{
	$tim = time() + 60*60*24*14;
	@file_put_contents("padusimai/$nic.txt", "2|$tim|");
	}
        if ($ko == "lt")
        {
            $lt = $lt + 7;
            $open = @fopen("account/$nic.txt", "w");
            @fwrite($open, "$lt");
            @fclose($open);
            @chmod("account/$nic.txt", 0777);
        }
	}
	
    //////////////////////// 10 LITU //////////////////////////////////////////////////////
  if ($kaina == '1000')
    {
	     if ($ko == "exp5")
	{
	$exas = @explode("|", @file_get_contents("paslaugos/daugiau exp/$nic.txt"));
	$time = time() + 60*60*24*7;
	@file_put_contents("paslaugos/daugiau exp/$nic.txt", "5|$time|");
	@chmod("paslaugos/daugiau exp/$nic.txt", 0777);
	}
		if ($ko == "many3")
	{
	$exas = @explode("|", @file_get_contents("paslaugos/daugiau pinigu/$nic.txt"));
	$time = time() + 60*60*24*7;
	@file_put_contents("paslaugos/daugiau pinigu/$nic.txt", "3|$time|");
	@chmod("paslaugos/daugiau pinigu/$nic.txt", 0777);
	}
		if ($ko == "kg5")
	{
	$exas = @explode("|", @file_get_contents("paslaugos/didesnis nukaunamuma/$nic.txt"));
	$time = time() + 60*60*24*7;
	@file_put_contents("paslaugos/didesnis nukaunamuma/$nic.txt", "5|$time|");
	@chmod("paslaugos/didesnis nukaunamuma/$nic.txt", 0777);
	}
        if ($ko == "kr")
        {
            $kr = $kr + 1950000;
            $open = @fopen("kronoss/$nic.txt", "w");
            @fwrite($open, "$kr");
            @fclose($open);
            @chmod("kronoss/$nic.txt", 0777);
        }
        if ($ko == "lt")
        {
            $lt = $lt + 10;
            $open = @fopen("account/$nic.txt", "w");
            @fwrite($open, "$lt");
            @fclose($open);
            @chmod("account/$nic.txt", 0777);
        }
}
    //////////////////////// 15 LITU //////////////////////////////////////////////////////

    if ($kaina == '1500')
    {     
        if ($ko == "kr")
        {
            $kr = $kr + 3150000;
            $open = @fopen("kronoss/$nic.txt", "w");
            @fwrite($open, "$kr");
            @fclose($open);
            @chmod("kronoss/$nic.txt", 0777);
        }
        if ($ko == "lt")
        {
            $lt = $lt + 15;
            $open = @fopen("account/$nic.txt", "w");
            @fwrite($open, "$lt");
            @fclose($open);
            @chmod("account/$nic.txt", 0777);
        }
				if ($ko == "padusimai")
	{
	$tim = time() + 60*60*24*14;
	@file_put_contents("padusimai/$nic.txt", "1|$tim|");
	}
    }
}
$sms_litu = @file_get_contents("varzybos/donate/$nic.txt") + $kaina / 100;
@file_put_contents("varzybos/donate/$nic.txt", "$sms_litu");
?>