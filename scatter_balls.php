
<?php
$diena_scatter = date("Y-m-d");

if (!file_exists("isbarsyti/$nick.txt"))
{
@file_put_contents("isbarsyti/$nick.txt", "0");
@chmod("isbarsyti/$nick.txt", 0777);
}

if (!file_exists("files for txt/isbarsyti.txt"))
{
@file_put_contents("files for txt/isbarsyti.txt", "$diena_scatter");
@chmod("files for txt/isbarsyti.txt", 0777);
}

$diena_scatter = @file_get_contents("files for txt/isbarsyti.txt");

	
	if ($diena_scatter!= $diena_scatter)
	{

	 foreach (glob("isbarsyti/*.txt") as $a)
        {
            $name = str_replace(array("isbarsyti/", ".txt"), "", $a);
            $ex = @explode("|", @file_get_contents($a));
            $arr[] = array("$ex[0]", "$name");
        }
    for ($f = 0; $f < 1; $f++)
    {     
	$nr = $f + 1;
	$time = date("Y-m-d");
	
	@file_put_contents("files for txt/isbarsyti.txt", "$time");
		 @rsort($arr);
		 if ($nr == 1){

				}
	
		$kr = @file_get_contents("account/{$arr[$f][1]}.txt");
				$kr = $kr + 5;
				$laikas = date("Y-m-d H:i:s");
		 $bll = @fopen("sun/{$arr[$f][1]}.txt","a");
@fwrite($bll,"@SISTEMA|Jūs šiandien surinkote daugiausiai išbarstytų drakono rutūlių ir gaunate <b>5 LTL į savo sąskaitą. </b>|$laikas|\n");
@fclose($bll);
            $NKM = file_get_contents("zaideju pagrindinai statusai/{$arr[$f][1]}.txt");
            $infa = explode("|", $NKM);
            $fp1 = fopen("zaideju pagrindinai statusai/{$arr[$f][1]}.txt", "w");
            fwrite($fp1, "$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$infa[7]|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|+|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|$infa[25]|$infa[26]|\n");
            fclose($fp1);

		@file_put_contents("account/{$arr[$f][1]}.txt", "$kr");
		}
		
$gl=glob("isbarsyti/*.txt");
foreach($gl as $bl)
{
unlink($bl);
}
	}
	
	?>