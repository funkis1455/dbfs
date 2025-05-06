<?php

session_start();
/* Создаём картинку */
$width=50;
$height=20;
$im=imagecreatetruecolor($width, $height);
/* Заполним любым более-менее цветным фоном */
$im = imagecreatefrompng("fon.png");
imagefill($im, 0, 0, imagecolorallocate($im, 60, 60, 60));
/* Количество цифр */
$limit=4;
/* Начальная позиция текста */
$start_pos_x=0;
/* Строка */
$string=NULL;
for($i=0; $i<$limit; $i++)
{
	/* Позиция по координате y */
	$start_pos_y=10;
	/* Позиция по координате x */
	$start_pos_x+=10;
	/* Записываем в строку */
	$string.=rand(0, 9);
	/* Рисуем на рисунке */
	imagestring($im, 4, $start_pos_x, $start_pos_y, $string[$i],
	imagecolorallocate($im, 0, 0, 0));

}
/* Изменяем каждый пиксел */
for($j=0; $j<$width; $j++) for($k=0; $k<$height; $k++)
{
	/* Берем цвет каждого пиксела */
	$take=imagecolorat($im, $j, $k);
	$take=imagecolorsforindex($im, $take);
	$rgb[0]=$take['red'];
	$rgb[1]=$take['green'];
	$rgb[2]=$take['blue'];
	/* Смотрим, как его изменить */
	foreach($rgb as $key => $value)
	{
		$rand_do=rand(1, 0);
		$rand_coef=rand(5, 60);
		if($rand_do)
		{
			/* Если добавить */
			$add=$value+$rand_coef;
			if($add>255) $add=255;
			$rgb[$key]=$add;
		}
		else
		{
			/* Если отнять */
			$minus=$value-$rand_coef;
			if($minus<0) $minus=0;
			$rgb[$key]=$minus;
		}

	}
}
/* Заносим текст в сессию */
$_SESSION['code'] = $string;
/* Выводим картинку в броузер */
header('Content-type: image/png');
imagepng($im);
/* Очищаем буфер */
imagedestroy($im);
?>