<?php
$kur = "Sagos";
include ("config.php");
include_once("icludekitainf/start.php");

if ($id == ""){echo"<b>Sagos</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">
Jūs dabar vykdote $mm[35] misiją. Įš viso yrą 133 misijų.</div><div class=\"meniu\" style=\"text-align: center;\">";

if($mm[35]=="0"){echo"Sveikiname pradėjus vykdyti sagas, įvykdžius visas sagas, jūs gausite lygiu ir 1 000 kreditų.<br/>";}

if($mm[35]=="1"){echo"<img src=\"imgs/sagos/1.jpg\" alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Raditą. Jo konine galia yra 100.</b><br/></div><div class=\"meniu\" style=\"text-align: center;\"><b>Saiyan saga</b>";}

if($mm[35]=="2"){echo"<img src=\"imgs/sagos/2.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Saibamanus. Ju kovinė galia yra 300.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Saiyan saga</b>";}

if($mm[35]=="3"){echo"<img src=\"imgs/sagos/3.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Nappa. Kovine galia 500.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Saiyan saga</b>";}

if($mm[35]=="4"){echo"<img src=\"imgs/sagos/4.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Vegeta. Jo kovinė galia yra 900.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Saiyan saga</b>";}

if($mm[35]=="5"){echo"<img src=\"imgs/sagos/5.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Vegeta Great Ape. Kovine galia 1 450.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Saiyan saga</b>";}

if($mm[35]=="6"){echo"<b>Jūs perėjote Saiyan sagą.<br/><br/>";}

if($mm[35]=="7"){echo"<img src=\"imgs/sagos/7.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Cui. Jo kovinė galia yra 1 900.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Namek saga</b><br/>"; }

if($mm[35]=="8"){echo"<img src=\"imgs/sagos/8.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Zarbon. Kovine galia 2 500.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Namek saga</b><br/>"; }

if($mm[35]=="9"){echo"<img src=\"imgs/sagos/9.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Zarbon Monster. Kovine galia 3 500.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Namek saga</b><br/>"; }

if($mm[35]=="10"){echo"<img src=\"imgs/sagos/10.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Guldo. Jo kovinė galia yra 4 300.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Namek saga</b><br/>"; }

if($mm[35]=="11"){echo"<img src=\"imgs/sagos/11.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Recoome. Jo kovinė galia yra 4 550.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Namek saga</b><br/>"; }

if($mm[35]=="12"){echo"<b>Jūs perėjote Namek saga.</b><br/>"; }

if($mm[35]=="13"){echo"<img src=\"imgs/sagos/13.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Burter. Jo kovinė galia yra 5 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Captain Ginyu saga</b><br/>"; }

if($mm[35]=="14"){echo"<img src=\"imgs/sagos/14.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Jeice. Jo kovinė galia yra  6 300.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Captain Ginyu saga</b><br/>"; }
 
if($mm[35]=="15"){echo"<img src=\"imgs/sagos/15.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Captain Ginyu. Jo kovinė galia yra 7 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Captain Ginyu saga</b><br/>"; }

if($mm[35]=="16"){echo"<img src=\"imgs/sagos/16.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Captain Ginyu(Goku body). Jo kovinė galia yra 8 500.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Captain Ginyu saga</b><br/>"; }

if($mm[35]=="17"){echo"<b>Jūs perėjote Captain Ginyu saga.</b><br/>"; }

if($mm[35]=="18"){echo"<img src=\"imgs/sagos/18.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Frieza. Kovine galia 9 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Frieza saga</b><br/>"; }

if($mm[35]=="19"){echo"<img src=\"imgs/sagos/19.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b> Nukaukite Frieza 2 forma. Jo kovinė galia yra 10 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Frieza saga</b><br/>"; }

if($mm[35]=="20"){echo"<img src=\"imgs/sagos/20.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Frieza 3 forma. Jo kovinė galia yra 12 500.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Frieza saga</b><br/>"; }

if($mm[35]=="21"){echo"<img src=\"imgs/sagos/21.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Frieza 4 forma. Jo kovinė galia yra 14 700.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Frieza saga</b><br/>"; }

if($mm[35]=="22"){echo"<img src=\"imgs/sagos/22.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Frieza 100 procentų forma. Jo kovinė galia yra 17 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Frieza saga</b><br/>"; }

if($mm[35]=="23"){echo"<b>Jūs perėjote Frieza saga.</b><br/>"; }

if($mm[35]=="24"){echo"<img src=\"imgs/sagos/24.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Bulma. Kovine galia 20 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Garlic jr saga</b><br/>"; }

if($mm[35]=="25"){echo"<img src=\"imgs/sagos/25.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite ChiChi. Kovine galia 24 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Garlic jr saga</b><br/>"; }

if($mm[35]=="26"){echo"<img src=\"imgs/sagos/26.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Yamcha. Kovine galia 27 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Garlic jr saga</b><br/>"; }

if($mm[35]=="27"){echo"<img src=\"imgs/sagos/27.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Master Roshi. Kovine galia 31 500.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Garlic jr saga</b><br/>"; }

if($mm[35]=="28"){echo"<img src=\"imgs/sagos/28.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b> Nukaukite Piccolo. Kovine galia 35 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Garlic jr saga</b><br/>"; }

if($mm[35]=="29"){echo"<img src=\"imgs/sagos/29.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Spice. Kovine galia 37 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Garlic jr saga</b><br/>"; }

if($mm[35]=="30"){echo"<img src=\"imgs/sagos/30.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Vingear. Kovine galia 39 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Garlic jr saga</b><br/>"; }

if($mm[35]=="31"){echo"<img src=\"imgs/sagos/31.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Mustard. Kovine galia 41 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Garlic jr saga</b><br/>"; }

if($mm[35]=="32"){echo"<img src=\"imgs/sagos/32.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Salt. Kovine galia 43 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Garlic jr saga</b><br/>"; }

if($mm[35]=="33"){echo"<img src=\"imgs/sagos/33.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Garlic Jr.Kovine galia 45 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Garlic jr saga</b><br/>"; }

if($mm[35]=="34"){echo"<img src=\"imgs/sagos/34.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Garlic Jr kuris pakeites forma. Kovine galia 47 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Garlic jr saga</b><br/>"; }

if($mm[35]=="35"){echo"<b>Garlic Junior saga pereita.</b><br/>"; }

if($mm[35]=="36"){echo"<img src=\"imgs/sagos/36.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Mecha Frieza. Kovine galia 50 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Trunks saga</b><br/>"; }

if($mm[35]=="37"){echo"<img src=\"imgs/sagos/37.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite King Cold. Kovine galia 58 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Trunks saga</b><br/>"; }

if($mm[35]=="38"){echo"<img src=\"imgs/sagos/38.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Future Trunks. Kovine galia 62 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Trunks saga</b><br/>"; }

if($mm[35]=="39"){echo"<img src=\"imgs/sagos/39.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Future Trunks Super saiyan. Kovine galia 67 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Trunks saga</b><br/>"; }

if($mm[35]=="40"){echo"<b>Jūs perėjote Trunks saga.</b><br/>"; }

if($mm[35]=="41"){echo"<img src=\"imgs/sagos/41.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Android 19. Kovine galia 70 000.</b><br/></div><div class=\"meniu\" style=\"text-align: center;\"><b>Androids saga</b><br/>"; }

if($mm[35]=="42"){echo"<img src=\"imgs/sagos/42.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Dr Gero. Kovine galia 75 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Androids saga</b><br/>"; }

if($mm[35]=="43"){echo"<img src=\"imgs/sagos/43.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Anroid 18. Kovine galia 80 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Androids saga</b><br/>"; }

if($mm[35]=="44"){echo"<img src=\"imgs/sagos/44.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Anroid 17. Kovine galia 86 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Androids saga</b><br/>"; }

if($mm[35]=="45"){echo"<b>Jūs perėjote Androids saga.</b><br/>"; }

if($mm[35]=="46"){echo"<img src=\"imgs/sagos/46.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Imperfect Cell. Kovine galia 91 000.</b><br/></div><div class=\"meniu\" style=\"text-align: center;\"><b>Imperfect Cell saga</b><br/>"; }

if($mm[35]=="47"){echo"<img src=\"imgs/sagos/47.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Semi-Perfect Cell. Kovine galia 100 000.</b><br/></div><div class=\"meniu\" style=\"text-align: center;\"><b>Imperfect Cell saga</b><br/>"; }

if($mm[35]=="48"){echo"<b>Jūs perėjote Imperfect Cell saga.</b><br/>"; }

if($mm[35]=="49"){echo"<img src=\"imgs/sagos/49.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Trunks. Kovine galia 112 000.</b><br/></div><div class=\"meniu\" style=\"text-align: center;\"><b>Perfect Cell saga</b><br/>"; }

if($mm[35]=="50"){echo"<img src=\"imgs/sagos/50.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Perfect Cell. Kovine galia 130 000.</b><br/></div><div class=\"meniu\" style=\"text-align: center;\"><b>Perfect Cell saga</b><br/>"; }

if($mm[35]=="51"){echo"<b>Jūs perėjote Perfect Cell saga.</b><br/>"; }

if($mm[35]=="52"){echo"<img src=\"imgs/sagos/52.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Gohan. Kovine galia 150 000.</b><br/></div><div class=\"meniu\" style=\"text-align: center;\"><b>Cell games saga</b><br/>"; }

if($mm[35]=="53"){echo"<img src=\"imgs/sagos/53.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Perfect Cell. Kovine galia 160 000.</b><br/>
</div><div class=\"meniu\" style=\"text-align: center;\"><b>Cell games saga</b><br/>"; }

if($mm[35]=="54"){echo"<img src=\"imgs/sagos/54.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Cell Juniors. Kovine galia 170 000</b><br/>
</div><div class=\"meniu\" style=\"text-align: center;\"><b>Cell games saga</b><br/>"; }

if($mm[35]=="55"){echo"<img src=\"imgs/sagos/55.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Super Perfect Cell. Kovine galia 190 000.</b><br/></div><div class=\"meniu\" style=\"text-align: center;\"><b>Cell games saga</b><br/>"; }

if($mm[35]=="56"){echo"<b>Jūs perėjote Cell games saga.</b><br/>"; }


if($mm[35]=="57"){echo"<img src=\"imgs/sagos/57.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Pikkon. Kovine galia 210 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Great Saiyaman saga</b><br/>"; }

if($mm[35]=="58"){echo"<b>Jūs perėjote Great Saiyaman saga.</b><br/>"; }

if($mm[35]=="59"){echo"<img src=\"imgs/sagos/59.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Spopovich. Kovine galia 225 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>World Tournament saga</b><br/>"; }

if($mm[35]=="60"){echo"<img src=\"imgs/sagos/60.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Kibito. Kovine galia 235 000.</b><br/></div><div class=\"meniu\" style=\"text-align: center;\"><b>World Tournament saga</b><br/>"; }

if($mm[35]=="61"){echo"<b>Jūs perėjote World Tournament saga.</b><br/>"; }

if($mm[35]=="62"){echo"<img src=\"imgs/sagos/62.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Dabura. Kovine galia 250 000.</b><br/></div><div class=\"meniu\" style=\"text-align: center;\"><b>Babidi saga</b><br/>"; }

if($mm[35]=="63"){echo"<img src=\"imgs/sagos/63.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Pui Pui. Kovine galia 260 000.</b><br/></div><div class=\"meniu\" style=\"text-align: center;\"><b>Babidi saga</b><br/>"; }

if($mm[35]=="64"){echo"<img src=\"imgs/sagos/64.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Yakon. Kovine galia 275 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Babidi saga</b><br/>"; }

if($mm[35]=="65"){echo"<img src=\"imgs/sagos/65.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Dabura. Kovine galia 285 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Babidi saga</b><br/>"; }

if($mm[35]=="66"){echo"<img src=\"imgs/sagos/66.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Majin Vegeta. Kovine galia 300 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Babidi saga</b><br/>"; }

if($mm[35]=="67"){echo"<b>Jūs perėjote Babidi saga.</b><br/>"; }

if($mm[35]=="68"){echo"<img src=\"imgs/sagos/68.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Majin Buu. Kovine galia 320 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Majin Buu saga</b><br/>"; }

if($mm[35]=="69"){echo"<img src=\"imgs/sagos/69.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Goku super saiyan 3. Kovine galia 350 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Majin Buu saga</b><br/>"; }

if($mm[35]=="70"){echo"<img src=\"imgs/sagos/68.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Majin Buu. Kovine galia 400 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Majin Buu saga</b><br/>"; }

if($mm[35]=="71"){echo"<b>Jūs perėjote Majin Buu saga.</b><br/>"; }

if($mm[35]=="72"){echo"<img src=\"imgs/sagos/72.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Evil Buu. Kovine galia 460 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Fusion saga</b><br/>"; }

if($mm[35]=="73"){echo"<img src=\"imgs/sagos/73.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Buu Absorbation(Fat Buu). Kovine galia 540 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Fusion saga</b><br/>"; }

if($mm[35]=="74"){echo"<img src=\"imgs/sagos/74.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Gotranks. Kovine galia 590 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Fusion saga</b><br/>"; }

if($mm[35]=="75"){echo"<img src=\"imgs/sagos/75.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Gotranks Super Saiyan. Kovine galia 630 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Fusion saga</b><br/>"; }

if($mm[35]=="76"){echo"<img src=\"imgs/sagos/76.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Gotranks Super Saiyan 3. Kovine galia 700 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Fusion saga</b><br/>"; }

if($mm[35]=="77"){echo"<img src=\"imgs/sagos/77.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Buu Absorbation(Gotranks). Kovine galia 790 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Fusion saga</b><br/>"; }

if($mm[35]=="78"){echo"<img src=\"imgs/sagos/78.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Buu Absorbation(Piccolo). Kovine galia 820 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Fusion saga</b><br/>"; }

if($mm[35]=="79"){echo"<img src=\"imgs/sagos/79.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Buu Absorbation(Gohan). Kovine galia 870 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Fusion saga</b><br/>"; }

if($mm[35]=="80"){echo"<img src=\"imgs/sagos/80.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Vegito. Kovine galia 900 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Fusion saga</b><br/>"; }

if($mm[35]=="81"){echo"<img src=\"imgs/sagos/81.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Vegito Super Saiyan . Kovine galia 1 000 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Fusion saga</b><br/>"; }

if($mm[35]=="82"){echo"<b>Jūs perėjote Fusion saga.</b><br/>"; }

if($mm[35]=="83"){echo"<img src=\"imgs/sagos/83.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Kid Buu. Kovine galia 1 100 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Kid Buu Saga</b><br/>"; }

if($mm[35]=="84"){echo"<img src=\"imgs/sagos/84.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Uub(reincarnation Kid Buu). Kovine galia 1 150 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Kid Buu Saga</b><br/>"; }

if($mm[35]=="85"){echo"<b>Jūs perejote visas Dragon Ball Z sagas, už tai gaunate 20 000 kovines galios, 50 000 XP.</b><br/>"; }

if($mm[35]=="86"){echo"<img src=\"imgs/sagos/86.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Emperor Pilaf. Kovine galia 1 300 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Black Star Dragon Ball Saga</b><br/>"; }

if($mm[35]=="87"){echo"<img src=\"imgs/sagos/87.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Giru. Kovine galia 1 500 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Black Star Dragon Ball Saga</b><br/>"; }

if($mm[35]=="88"){echo"<img src=\"imgs/sagos/88.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Don Kear. Kovine galia 1 800 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Black Star Dragon Ball Saga</b><br/>"; }

if($mm[35]=="89"){echo"<img src=\"imgs/sagos/89.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Ledgic. Kovine galia 2 100 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Black Star Dragon Ball Saga</b><br/>"; }

if($mm[35]=="90"){echo"<img src=\"imgs/sagos/90.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Dolltaki. Kovine galia 3 000 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Black Star Dragon Ball Saga</b><br/>"; }

if($mm[35]=="91"){echo"<img src=\"imgs/sagos/91.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Lord Luud. Kovine galia 4 500 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Black Star Dragon Ball Saga</b><br/>"; }

if($mm[35]=="92"){echo"<img src=\"imgs/sagos/92.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Lord Luud(Full power). Kovine galia 6 200 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Black Star Dragon Ball Saga</b><br/>"; }

if($mm[35]=="93"){echo"<img src=\"imgs/sagos/93.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite General Rilldo. Kovine galia 7 400 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Black Star Dragon Ball Saga</b><br/>"; }

if($mm[35]=="94"){echo"<img src=\"imgs/sagos/94.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite General Rilldo 2 formos. Kovine galia 9 000 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Black Star Dragon Ball Saga</b><br/>"; }

if($mm[35]=="95"){echo"<img src=\"imgs/sagos/95.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite General Rilldo 3 formos. Kovine galia 12 000 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Black Star Dragon Ball Saga</b><br/>"; }

if($mm[35]=="96"){echo"<b>Jūs perėjote Black Star Dragon Ball Saga.</b><br/>"; }

if($mm[35]=="97"){echo"<img src=\"imgs/sagos/97.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Dr. Myuu. Kovine galia 15 000 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Baby Saga</b><br/>"; }

if($mm[35]=="98"){echo"<img src=\"imgs/sagos/98.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Baby Gohan. Kovine galia 18 000 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Baby Saga</b><br/>"; }

if($mm[35]=="99"){echo"<img src=\"imgs/sagos/99.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Baby Goten. Kovine galia 21 000 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Baby Saga</b><br/>"; }

if($mm[35]=="100"){echo"<img src=\"imgs/sagos/100.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Baby Trunks. Kovine galia 25 000 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Baby Saga</b><br/>"; }

if($mm[35]=="101"){echo"<img src=\"imgs/sagos/101.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Baby. Kovine galia 30 000 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Baby Saga</b><br/>"; }

if($mm[35]=="102"){echo"<img src=\"imgs/sagos/102.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Baby Vegeta. Kovine galia 40 000 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Baby Saga</b><br/>"; }

if($mm[35]=="103"){echo"<img src=\"imgs/sagos/103.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Baby Vegeta(Full Power). Kovine galia 55 000 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Baby Saga</b><br/>"; }

if($mm[35]=="104"){echo"<img src=\"imgs/sagos/104.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Baby Vegeta(Gold Oozaru). Kovine galia 70 000 000.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Baby Saga</b><br/>"; }

if($mm[35]=="105"){echo"<b>Jūs perėjote Baby Saga.</b><br/>"; }

if($mm[35]=="106"){echo"<img src=\"imgs/sagos/106.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Dr. Myuu ir Dr. Gero sugalvojo keršto plana ir atidare vartus iš pragaro į žemę, tad jums reiks nukauti vel visus kovotojus, bet jie bus jau daug galingesni.</b></div><div class=\"meniu\" style=\"text-align: center;\"><b>Super 17 Saga</b><br/>"; }

if($mm[35]=="107"){echo"<img src=\"imgs/sagos/107.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Nappa. Kovine galia 80 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Super 17 Saga</b><br/>"; }

if($mm[35]=="108"){echo"<img src=\"imgs/sagos/108.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Zarbon. Kovine galia 95 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Super 17 Saga</b><br/>"; }

if($mm[35]=="109"){echo"<img src=\"imgs/sagos/109.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Dodoria. Kovine galia 110 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Super 17 Saga</b><br/>"; }

if($mm[35]=="110"){echo"<img src=\"imgs/sagos/110.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Recoome. Kovine galia 130 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Super 17 Saga</b><br/>"; }

if($mm[35]=="111"){echo"<img src=\"imgs/sagos/111.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Guldo. Kovine galia 150 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Super 17 Saga</b><br/>"; }

if($mm[35]=="112"){echo"<img src=\"imgs/sagos/112.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite King Kold. Kovine galia 300 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Super 17 Saga</b><br/>"; }

if($mm[35]=="113"){echo"<img src=\"imgs/sagos/113.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Jeice. Kovine galia 400 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Super 17 Saga</b><br/>"; }

if($mm[35]=="114"){echo"<img src=\"imgs/sagos/114.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Babidi. Kovine galia 600 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Super 17 Saga</b><br/>"; }

if($mm[35]=="115"){echo"<img src=\"imgs/sagos/115.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Pui Pui. Kovine galia 900 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Super 17 Saga</b><br/>"; }

if($mm[35]=="116"){echo"<img src=\"imgs/sagos/116.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Android 19. Kovine galia 1 200 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Super 17 Saga</b><br/>"; }

if($mm[35]=="117"){echo"<img src=\"imgs/sagos/117.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Appule. Kovine galia 1 500 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Super 17 Saga</b><br/>"; }

if($mm[35]=="118"){echo"<img src=\"imgs/sagos/118.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Cooler. Kovine galia 1 800 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Super 17 Saga</b><br/>"; }

if($mm[35]=="119"){echo"<img src=\"imgs/sagos/119.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite General Rilldo. Kovine galia 2 100 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Super 17 Saga</b><br/>"; }

if($mm[35]=="120"){echo"<img src=\"imgs/sagos/120.jpg\"  alt=\"logo\"/><img src=\"imgs/sagos/120-1.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite  Dr. Myuu ir Dr. Gero. Jų kovine galia 3 500 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Super 17 Saga</b><br/>"; }

if($mm[35]=="121"){echo"<img src=\"imgs/sagos/121.jpg\"  alt=\"logo\"/><img src=\"imgs/sagos/121-1.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite  Frieza ir Cell. Jų kovine galia 5 000 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Super 17 Saga</b><br/>"; }

if($mm[35]=="122"){echo"<img src=\"imgs/sagos/122.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite  Super Android 17. Kovine galia 7 000 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Super 17 Saga</b><br/>"; }

if($mm[35]=="123"){echo"<b>Jūs perėjote Super 17 Saga.</b><br/>"; }

if($mm[35]=="124"){echo"<img src=\"imgs/sagos/124.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite  Black Smoke Shenron Dragon. Kovine galia 8 000 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Shadow Dragon Saga</b><br/>"; }

if($mm[35]=="125"){echo"<img src=\"imgs/sagos/125.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite  Haze Shenron Dragon. Kovine galia 9 000 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Shadow Dragon Saga</b><br/>"; }

if($mm[35]=="126"){echo"<img src=\"imgs/sagos/126.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Rage Shenron Dragon. Kovine galia 11 000 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Shadow Dragon Saga</b><br/>"; }

if($mm[35]=="127"){echo"<img src=\"imgs/sagos/127.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Oceanus Shenron Dragon. Kovine galia 13 000 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Shadow Dragon Saga</b><br/>"; }

if($mm[35]=="128"){echo"<img src=\"imgs/sagos/128.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Naturon Shenron Dragon. Kovine galia 15 000 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Shadow Dragon Saga</b><br/>"; }

if($mm[35]=="129"){echo"<img src=\"imgs/sagos/129.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Nuova Shenron Dragon. Kovine galia 18 000 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Shadow Dragon Saga</b><br/>"; }

if($mm[35]=="130"){echo"<img src=\"imgs/sagos/130.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Eis Shenron Dragon. Kovine galia 22 000 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Shadow Dragon Saga</b><br/>"; }

if($mm[35]=="131"){echo"<img src=\"imgs/sagos/131.jpg\"  alt=\"logo\"/></div><div class=\"meniu\" style=\"text-align: center;\">
<b>Nukaukite Omega Shenron Dragon. Kovine galia 22 000 000 000.</div><div class=\"meniu\" style=\"text-align: center;\"><b>Shadow Dragon Saga</b><br/>"; }

if($mm[35]=="132"){echo"<b>Jūs perėjote Shadow Dragon Saga.</b><br/>"; }

if($mm[35]=="133"){echo"<b>Jūs perėjote visas dragon ball z/gt sagas.</b><br/>"; }

echo"</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: left;\">
<b>(»)</b> <a href=\"saga.php?id=next\">Vykdyti sagą</a><br/>
</div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

if ($id == "next"){
include("icludekitainf/mm.php");
if ($mm[35][$ka-1] == "+"){ $zin = "<b>Si misija jau ivykdyta!</b>"; }
if ($zin == ""){ 
include("icludekitainf/nuskait.php"); 

if($mm[35]=="0"){ $zin = "Sekmingai ivygdita"; 
include("icludekitainf/mm.php");
}

if($mm[35]=="132"){ 
$zin = "Saga įvykdyti pavyko.<br/></div><div class=\"meniu\" style=\"text-align: center;\"><div class='left'><b>Gavote:</b><br/> 30 000 000 exp<br/> 40 000 000 jegos<br/> 100 000 000 gynybos<br/>2 000 000 gyvybes<br/>  5 000 000 000 pinigų<br/></div>";
$xpas = 3000000+$exp; 
$jega = 4000000+$jega; 
$gynyba = 5000000+$gynyba; 
$pinigai = 5000000000+$pinigai; 
$gyvybess = 200000+$gyvybess; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$gynyba|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
		$kr = @file_get_contents("kronoss/$nick.txt");
				$kr = $kr + 1000;
@file_put_contents("kronoss/$nick.txt", "$kr");
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}

if ($mm[35] == 131){ 
$att = round(((25000000000*2)/4),1); $att2 = round(((25000000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 130){ 
$att = round(((22000000000*2)/4),1); $att2 = round(((22000000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 129){ 
$att = round(((18000000000*2)/4),1); $att2 = round(((18000000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 128){ 
$att = round(((15000000000*2)/4),1); $att2 = round(((15000000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}


if ($mm[35] == 127){ 
$att = round(((13000000000*2)/4),1); $att2 = round(((13000000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 126){ 
$att = round(((11000000000*2)/4),1); $att2 = round(((11000000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 125){ 
$att = round(((9000000000*2)/4),1); $att2 = round(((9000000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 124){ 
$att = round(((8000000000*2)/4),1); $att2 = round(((8000000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if($mm[35]=="123"){ 
$zin = "Saga įvykdyti pavyko.<br/></div><div class=\"meniu\" style=\"text-align: center;\"><div class='left'><b>Gavote:</b><br/> 3 000 000 exp<br/> 4 000 000 jegos<br/> 10 000 000 gynybos<br/>200 000 gyvybes<br/>  500 000 000 pinigų<br/></div>";
$xpas = 300000+$exp; 
$jega = 400000+$jega; 
$gynyba = 500000+$gynyba; 
$pinigai = 50000000+$pinigai; 
$gyvybess = 20000+$gyvybess; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$gynyba|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}

if ($mm[35] == 122){ 
$att = round(((7000000000*2)/4),1); $att2 = round(((7000000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 121){ 
$att = round(((5000000000*2)/4),1); $att2 = round(((5000000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 120){ 
$att = round(((3500000000*2)/4),1); $att2 = round(((3500000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 119){ 
$att = round(((2100000000*2)/4),1); $att2 = round(((2100000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 118){ 
$att = round(((1800000000*2)/4),1); $att2 = round(((1800000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}


if ($mm[35] == 117){ 
$att = round(((1500000000*2)/4),1); $att2 = round(((1500000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 116){ 
$att = round(((1200000000*2)/4),1); $att2 = round(((1200000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}


if ($mm[35] == 115){ 
$att = round(((900000000*2)/4),1); $att2 = round(((900000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 114){ 
$att = round(((600000000*2)/4),1); $att2 = round(((600000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 113){ 
$att = round(((400000000*2)/4),1); $att2 = round(((400000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 112){ 
$att = round(((300000000*2)/4),1); $att2 = round(((300000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}


if ($mm[35] == 111){ 
$att = round(((150000000*2)/4),1); $att2 = round(((150000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}


if ($mm[35] == 110){ 
$att = round(((130000000*2)/4),1); $att2 = round(((130000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 109){ 
$att = round(((110000000*2)/4),1); $att2 = round(((110000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 108){ 
$att = round(((95000000*2)/4),1); $att2 = round(((95000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 107){ 
$att = round(((80000000*2)/4),1); $att2 = round(((80000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if($mm[35]=="106"){ 
$zin = "Įvykdyti pavyko.<br/>";$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}

if($mm[35]=="105"){ 
$zin = "Saga įvykdyti pavyko.<br/></div><div class=\"meniu\" style=\"text-align: center;\"><div class='left'><b>Gavote:</b><br/> 300 000 exp<br/> 400 000 jegos<br/> 1 000 000 gynybos<br/>20 000 gyvybes<br/>  50 000 000 pinigų<br/></div>";
$xpas = 30000+$exp; 
$jega = 40000+$jega; 
$gynyba = 100000+$gynyba; 
$pinigai = 5000000+$pinigai; 
$gyvybess = 2000+$gyvybess; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$gynyba|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}
if ($mm[35] == 104){ 
$att = round(((70000000*2)/4),1); $att2 = round(((70000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}
if ($mm[35] == 103){ 
$att = round(((55000000*2)/4),1); $att2 = round(((55000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}
if ($mm[35] == 102){ 
$att = round(((40000000*2)/4),1); $att2 = round(((40000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}
if ($mm[35] == 101){ 
$att = round(((30000000*2)/4),1); $att2 = round(((30000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}
if ($mm[35] == 100){ 
$att = round(((25000000*2)/4),1); $att2 = round(((25000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}
if ($mm[35] == 99){ 
$att = round(((21000000*2)/4),1); $att2 = round(((21000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 98){ 
$att = round(((18000000*2)/4),1); $att2 = round(((18000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}
if ($mm[35] == 97){ 
$att = round(((15000000*2)/4),1); $att2 = round(((15000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if($mm[35]=="96"){ 
$zin = "Saga įvykdyti pavyko.<br/></div><div class=\"meniu\" style=\"text-align: center;\"><div class='left'><b>Gavote:</b><br/> 150 000 exp<br/> 200 000 jegos<br/> 500 000 gynybos<br/>10 000 gyvybes<br/>  20 000 000 pinigų<br/></div>";
$xpas = 15000+$exp; 
$jega = 20000+$jega; 
$gynyba = 50000+$gynyba; 
$pinigai = 2000000+$pinigai; 
$gyvybess = 1000+$gyvybess; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$gynyba|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}


if ($mm[35] == 95){ 
$att = round(((12000000*2)/4),1); $att2 = round(((12000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 94){ 
$att = round(((9000000*2)/4),1); $att2 = round(((9000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 93){ 
$att = round(((7400000*2)/4),1); $att2 = round(((7400000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 92){ 
$att = round(((6200000*2)/4),1); $att2 = round(((6200000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 91){ 
$att = round(((4500000*2)/4),1); $att2 = round(((4500000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 90){ 
$att = round(((3000000*2)/4),1); $att2 = round(((3000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}


if ($mm[35] == 89){ 
$att = round(((2100000*2)/4),1); $att2 = round(((2100000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 88){ 
$att = round(((1800000*2)/4),1); $att2 = round(((1800000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 87){ 
$att = round(((1500000*2)/4),1); $att2 = round(((1500000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 86){ 
$att = round(((1300000*2)/4),1); $att2 = round(((1300000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if($mm[35]=="85"){ 
$zin = "Saga įvykdyti pavyko.<br/></div><div class=\"meniu\" style=\"text-align: center;\"><div class='left'><b>Gavote:</b><br/> 14 000 exp<br/> 7 000 jegos<br/> 21 000 gynybos<br/>3 000 gyvybes<br/>  2 000 000 pinigų<br/></div>";
$xpas = 50000+$exp; 
$jega = 20000+$jega; 
$gynyba = 50000+$gynyba; 
$pinigai = 111+$pinigai; 
$gyvybess = 1000+$gyvybess; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$gynyba|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}

if ($mm[35] == 84){ 
$att = round(((1150000*2)/4),1); $att2 = round(((1150000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 83){ 
$att = round(((1100000*2)/4),1); $att2 = round(((1100000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if($mm[35]=="82"){ 
$zin = "Saga įvykdyti pavyko.<br/></div><div class=\"meniu\" style=\"text-align: center;\"><div class='left'><b>Gavote:</b><br/> 14 000 exp<br/> 7 000 jegos<br/> 21 000 gynybos<br/>3 000 gyvybes<br/>  2 000 000 pinigų<br/></div>";
$xpas = 14000+$exp; 
$jega = 7000+$jega; 
$gynyba = 21000+$gynyba; 
$pinigai = 2000000+$pinigai; 
$gyvybess = 3000+$gyvybess; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$gynyba|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}

if ($mm[35] == 81){ 
$att = round(((1000000*2)/4),1); $att2 = round(((1000000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 80){ 
$att = round(((900000*2)/4),1); $att2 = round(((900000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 79){ 
$att = round(((870000*2)/4),1); $att2 = round(((870000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 78){ 
$att = round(((820000*2)/4),1); $att2 = round(((820000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 77){ 
$att = round(((790000*2)/4),1); $att2 = round(((790000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 76){ 
$att = round(((700000*2)/4),1); $att2 = round(((700000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 75){ 
$att = round(((630000*2)/4),1); $att2 = round(((630000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 74){ 
$att = round(((590000*2)/4),1); $att2 = round(((590000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 73){ 
$att = round(((540000*2)/4),1); $att2 = round(((540000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 72){ 
$att = round(((460000*2)/4),1); $att2 = round(((460000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if($mm[35]=="71"){ 
$zin = "Saga įvykdyti pavyko.<br/></div><div class=\"meniu\" style=\"text-align: center;\"><div class='left'><b>Gavote:</b><br/> 10 000 exp<br/> 5 000 jegos<br/> 15 000 gynybos<br/>2 000 gyvybes<br/>  3 000 000 pinigų<br/></div>";
$xpas = 10000+$exp; 
$jega = 5000+$jega; 
$gynyba = 15000+$gynyba; 
$pinigai = 3000000+$pinigai; 
$gyvybess = 2000+$gyvybess; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$gynyba|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}

if ($mm[35] == 70){ 
$att = round(((400000*2)/4),1); $att2 = round(((400000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 69){ 
$att = round(((350000*2)/4),1); $att2 = round(((350000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}


if ($mm[35] == 68){ 
$att = round(((320000*2)/4),1); $att2 = round(((320000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if($mm[35]=="67"){ 
$zin = "Saga įvykdyti pavyko.<br/></div><div class=\"meniu\" style=\"text-align: center;\"><div class='left'><b>Gavote:</b><br/> 7 000 exp<br/> 2 500 jegos<br/> 9 000 gynybos<br/>1 000 gyvybes<br/>  800 000 pinigų<br/></div>";
$xpas = 7000+$exp; 
$jega = 2500+$jega; 
$gynyba = 9000+$gynyba; 
$pinigai = 800000+$pinigai; 
$gyvybess = 1000+$gyvybess; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$gynyba|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}

if ($mm[35] == 66){ 
$att = round(((300000*2)/4),1); $att2 = round(((300000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 65){ 
$att = round(((285000*2)/4),1); $att2 = round(((285000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 64){ 
$att = round(((275000*2)/4),1); $att2 = round(((275000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 63){ 
$att = round(((260000*2)/4),1); $att2 = round(((260000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 62){ 
$att = round(((250000*2)/4),1); $att2 = round(((250000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if($mm[35]=="61"){ 
$zin = "Saga įvykdyti pavyko.<br/></div><div class=\"meniu\" style=\"text-align: center;\"><div class='left'><b>Gavote:</b><br/> 4 000 exp<br/> 5 000 jegos<br/> 3 000 gynybos<br/>1 000 gyvybes<br/>  800 000 pinigų<br/></div>";
$xpas = 4000+$exp; 
$jega = 5000+$jega; 
$gynyba = 3000+$gynyba; 
$pinigai = 800000+$pinigai; 
$gyvybess = 1000+$gyvybess; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$gynyba|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}

if ($mm[35] == 60){ 
$att = round(((235000*2)/4),1); $att2 = round(((235000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 59){ 
$att = round(((225000*2)/4),1); $att2 = round(((225000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if($mm[35]=="58"){ 
$zin = "Saga įvykdyti pavyko.<br/></div><div class=\"meniu\" style=\"text-align: center;\"><div class='left'><b>Gavote:</b><br/> 100 exp<br/> 600 jegos<br/> 700 gynybos<br/>0 gyvybes<br/>  1 200 000 pinigų<br/></div>";
$xpas = 100+$exp; 
$jega = 600+$jega; 
$gynyba = 700+$gynyba; 
$pinigai = 1200000+$pinigai; 
$gyvybess = 0+$gyvybess; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$gynyba|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}

if ($mm[35] == 57){ 
$att = round(((210000*2)/4),1); $att2 = round(((210000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if($mm[35]=="56"){ 
$zin = "Saga įvykdyti pavyko.<br/></div><div class=\"meniu\" style=\"text-align: center;\"><div class='left'><b>Gavote:</b><br/> 1 000 exp<br/> 6 000 jegos<br/> 7 000 gynybos<br/>0 gyvybes<br/>  1 200 000 pinigų<br/></div>";
$xpas = 1000+$exp; 
$jega = 6000+$jega; 
$gynyba = 7000+$gynyba; 
$pinigai = 1200000+$pinigai; 
$gyvybess = 0+$gyvybess; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$gynyba|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}

if ($mm[35] == 55){ 
$att = round(((190000*2)/4),1); $att2 = round(((190000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 54){ 
$att = round(((170000*2)/4),1); $att2 = round(((170000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}
 
if ($mm[35] == 53){ 
$att = round(((160000*2)/4),1); $att2 = round(((160000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 52){ 
$att = round(((150000*2)/4),1); $att2 = round(((150000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if($mm[35]=="51"){ 
$zin = "Saga įvykdyti pavyko.<br/></div><div class=\"meniu\" style=\"text-align: center;\"><div class='left'><b>Gavote:</b><br/> 4 000 exp<br/> 5 000 jegos<br/> 3 000 gynybos<br/>1 000 gyvybes<br/>  800 000 pinigų<br/></div>";
$xpas = 4000+$exp; 
$jega = 5000+$jega; 
$gynyba = 3000+$gynyba; 
$pinigai = 800000+$pinigai; 
$gyvybess = 1000+$gyvybess; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$gynyba|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}

if ($mm[35] == 50){ 
$att = round(((130000*2)/4),1); $att2 = round(((130000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 49){ 
$att = round(((112000*2)/4),1); $att2 = round(((112000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 48){ 
$att = round(((112000*2)/4),1); $att2 = round(((112000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if($mm[35]=="48"){ 
$zin = "Saga įvykdyti pavyko.<br/></div><div class=\"meniu\" style=\"text-align: center;\"><div class='left'><b>Gavote:</b><br/> 2 000 exp<br/> 6 000 jegos<br/> 6 000 gynybos<br/>500 gyvybes<br/>  400 000 pinigų<br/></div>";
$xpas = 2000+$exp; 
$jega = 6000+$jega; 
$gynyba = 6000+$gynyba; 
$pinigai = 400000+$pinigai; 
$gyvybess = 500+$gyvybess; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$gynyba|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}

if ($mm[35] == 47){ 
$att = round(((100000*2)/4),1); $att2 = round(((100000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 46){ 
$att = round(((91000*2)/4),1); $att2 = round(((91000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if($mm[35]=="45"){ 
$zin = "Saga įvykdyti pavyko.<br/></div><div class=\"meniu\" style=\"text-align: center;\"><div class='left'><b>Gavote:</b><br/> 1 500 exp<br/> 2 000 jegos<br/> 2 000 gynybos<br/>200 gyvybes<br/>  300 000 pinigų<br/></div>";
$xpas = 1500+$exp; 
$jega = 2000+$jega; 
$gynyba = 2000+$gynyba; 
$pinigai = 300000+$pinigai; 
$gyvybess = 200+$gyvybess; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$gynyba|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}

if ($mm[35] == 44){ 
$att = round(((86000*2)/4),1); $att2 = round(((86000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 43){ 
$att = round(((80000*2)/4),1); $att2 = round(((80000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 42){ 
$att = round(((75000*2)/4),1); $att2 = round(((75000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 41){ 
$att = round(((70000*2)/4),1); $att2 = round(((70000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if($mm[35]=="40"){ 
$zin = "Saga įvykdyti pavyko.<br/></div><div class=\"meniu\" style=\"text-align: center;\"><div class='left'><b>Gavote:</b><br/> 500 exp<br/> 1 000 jegos<br/> 2 000 gynybos<br/>300 gyvybes<br/>  500 000 pinigų<br/></div>";
$xpas = 500+$exp; 
$jega = 1000+$jega; 
$gynyba = 2000+$gynyba; 
$pinigai = 500000+$pinigai; 
$gyvybess = 300+$gyvybess; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$gynyba|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}

if ($mm[35] == 39){ 
$att = round(((67000*2)/4),1); $att2 = round(((67000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 38){ 
$att = round(((62000*2)/4),1); $att2 = round(((62000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 37){ 
$att = round(((58000*2)/4),1); $att2 = round(((58000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 36){ 
$att = round(((50000*2)/4),1); $att2 = round(((50000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if($mm[35]=="35"){ 
$zin = "Saga įvykdyti pavyko.<br/></div><div class=\"meniu\" style=\"text-align: center;\"><div class='left'><b>Gavote:</b><br/> 1 000 exp<br/> 1 000 jegos<br/> 5 000 gynybos<br/>200 gyvybes<br/> 0 pinigų<br/></div>";
$xpas = 1000+$exp; 
$jega = 1000+$jega; 
$gynyba = 5000+$gynyba; 
$pinigai = 0+$pinigai; 
$gyvybess = 200+$gyvybess; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$gynyba|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}

if ($mm[35] == 34){ 
$att = round(((47000*2)/4),1); $att2 = round(((47000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 33){ 
$att = round(((45000*2)/4),1); $att2 = round(((45000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 32){ 
$att = round(((43000*2)/4),1); $att2 = round(((43000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 31){ 
$att = round(((41000*2)/4),1); $att2 = round(((41000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 30){ 
$att = round(((39000*2)/4),1); $att2 = round(((39000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 29){ 
$att = round(((37000*2)/4),1); $att2 = round(((37000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 28){ 
$att = round(((35000*2)/4),1); $att2 = round(((35000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 27){ 
$att = round(((31000*2)/4),1); $att2 = round(((31000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 26){ 
$att = round(((27000*2)/4),1); $att2 = round(((27000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 25){ 
$att = round(((24000*2)/4),1); $att2 = round(((24000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 24){ 
$att = round(((20000*2)/4),1); $att2 = round(((20000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if($mm[35]=="23"){ 
$zin = "Saga įvykdyti pavyko.<br/></div><div class=\"meniu\" style=\"text-align: center;\"><div class='left'><b>Gavote:</b><br/> 100 exp<br/> 400 jegos<br/> 800 gynybos<br/>50 gyvybes<br/> 200 000 pinigų<br/></div>";
$xpas = 100+$exp; 
$jega = 400+$jega; 
$gynyba = 800+$gynyba; 
$pinigai = 200000+$pinigai; 
$gyvybess = 50+$gyvybess; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$gynyba|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}

if ($mm[35] == 22){ 
$att = round(((16000*2)/4),1); $att2 = round(((16000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 21){ 
$att = round(((14700*2)/4),1); $att2 = round(((14700*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 20){ 
$att = round(((12000*2)/4),1); $att2 = round(((12000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 19){ 
$att = round(((10000*2)/4),1); $att2 = round(((10000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 18){ 
$att = round(((9000*2)/4),1); $att2 = round(((9000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if($mm[35]=="17"){ 
$zin = "Saga įvykdyti pavyko.<br/></div><div class=\"meniu\" style=\"text-align: center;\"><div class='left'><b>Gavote:</b><br/> 500 exp<br/> 550 jegos<br/> 1 100 gynybos<br/>150 gyvybes<br/> 100 000 pinigų<br/></div>";
$xpas = 500+$exp; 
$jega = 550+$jega; 
$gynyba = 1100+$gynyba; 
$pinigai = 100000+$pinigai; 
$gyvybess = 150+$gyvybess; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$gynyba|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}

if ($mm[35] == 16){ 
$att = round(((8500*2)/4),1); $att2 = round(((8500*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 15){ 
$att = round(((7000*2)/4),1); $att2 = round(((7000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 14){ 
$att = round(((6300*2)/4),1); $att2 = round(((6300*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 13){ 
$att = round(((5000*2)/4),1); $att2 = round(((5000*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if($mm[35]=="12"){ 
$zin = "Saga įvykdyti pavyko.<br/></div><div class=\"meniu\" style=\"text-align: center;\"><div class='left'><b>Gavote:</b><br/> 50 exp<br/> 100 jegos<br/> 1400 gynybos<br/>100 gyvybes<br/> 50 000 pinigų<br/></div>";
$xpas = 50+$exp; 
$jega = 100+$jega; 
$gynyba = 140+$gynyba; 
$pinigai = 50000+$pinigai; 
$gyvybess = 100+$gyvybess; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$gynyba|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}

if ($mm[35] == 11){ 
$att = round(((4550*2)/4),1); $att2 = round(((4550*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 10){ 
$att = round(((4300*2)/4),1); $att2 = round(((4300*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 9){ 
$att = round(((3500*2)/4),1); $att2 = round(((3500*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 8){ 
$att = round(((2500*2)/4),1); $att2 = round(((2500*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 7){ 
$att = round(((1900*2)/4),1); $att2 = round(((1900*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if($mm[35]=="6"){ 
$zin = "Saga įvykdyti pavyko.<br/></div><div class=\"meniu\" style=\"text-align: center;\"><div class='left'><b>Gavote:</b><br/> 100 exp<br/> 70 jegos<br/> 100 gynybos<br/>50 gyvybes<br/> 200 000 pinigų<br/></div>";
$xpas = 100+$exp; 
$jega = 70+$jega; 
$gynyba = 100+$gynyba; 
$pinigai = 200000+$pinigai; 
$gyvybess = 50+$gyvybess; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$gynyba|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}

if ($mm[35] == 5){ 
$att = round(((1450*2)/4),1); $att2 = round(((1450*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 4){ 
$att = round(((900*2)/4),1); $att2 = round(((900*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 3){ 
$att = round(((500*2)/4),1); $att2 = round(((500*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 2){ 
$att = round(((300*2)/4),1); $att2 = round(((300*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}

if ($mm[35] == 1){ 
$att = round(((100*2)/4),1); $att2 = round(((100*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "Sagos įvykditi nepavyko!";
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$zin = "Įvykdyti pavyko.<br/>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}}


if($mm[35]=="0"){ 
$zin = "Saga įvykdyti pavyko.<br/></div><div class=\"meniu\" style=\"text-align: center;\"><div class='left'><b>Gavote:</b><br/> 0 exp<br/> 0 jegos<br/> 0 gynybos<br/>0 gyvybes<br/> 0 litų<br/></div>";
$mm[35] = $mm[35] + 1;
include("icludekitainf/mm.php");
}
}
echo"<b>Sagos</b></div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center;\">$zin
</div><div class=\"line\"></div><div class=\"meniu\" style=\"text-align: center; border-bottom: 1px solid #000000;\">
<a href=\"saga.php?\">Atgal</a><br/>
<a href=\"pagrindinis.php?id=\">Į Pagrindinį</a>
</div><div class=\"foot\">$bottom</div></div>";}

print'</card></wml>';
?>