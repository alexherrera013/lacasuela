<?php
 
$mobile_browser = '0';
 
if(preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
$mobile_browser++;
}
 
if((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml')>0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
$mobile_browser++;
} 
 
$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'],0,4));
$mobile_agents = array(
'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
'newt','noki','oper','palm','pana','pant','phil','play','port','prox',
'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
'wapr','webc','winw','winw','xda','xda-');
 
if(in_array($mobile_ua,$mobile_agents)) {
$mobile_browser++;
}
 
if (strpos(strtolower($_SERVER['ALL_HTTP']),'OperaMini')>0) {
$mobile_browser++;
}
 
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'windows')>0) {
$mobile_browser=0;
}
 
else {
if($mobile_browser>0) {
    header("Location:  http://m.lacasuela.com"); /* Redirect browser */
    exit;  /* Make sure that code below does not get executed after redirect. */
} 
} 
 
?>
<!-- end Hidden image
<img src="images/iPhone App/logo.jpg" alt="" width="650" />
<meta name="robots" content="noindex, nofollow" />
 -->

<meta name="robots" content="noindex, nofollow" />
</head>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Alex Herrera, La Casuela Mexican Restaurant & Bar TM 2010
http://www.lacasuela.com

Name       : La Casuela Mexican Restaurant & Bar (La Casuela from the Spanish word "cazuela"  a hand made cooking pot costumary used for cooking traditional mexican dishes such as chicken Mole.
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20091109

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="la casuela,las casuelas,la cazuela, las cazuelas, rosal, morenita, ripon ca, ripon, google, michelada, margarita, beer tower, tower, modesto, modesto restaurants,  Restaurants, restaurant, Mexican, Food, Brunch, Lunch, Dinner, Banquets, Casual, Dining, Southwest, tamales, fajitas, happy hour tacos, fresh, azteca, mexican, seattle, food, ramos, family, families, dining, restaurants, restarants, restaraunts, restaurant, great, mexican restaurants, chicago, chicago area, mexican style food, mexican food chicago area, mexican style food, mexican food, mexican style restaurants, mexican style food chicago, branded programs, mexican food branded, food private label, private label, mexican style food, mexican style restaurants, mexican style food chicago, branded programs, mexican food branded,food private label, private label, mexican style food chicago, mexican food chicago, mexican style food chicago area, mexican food chicago area, chile con queso, garnachas, guacamole, taquitos, jalapeo poppers, botana grande, botana chica, queso fundido, beef nacho grande platter, nacho platter, steak nachos, stuffed nachos, quesadillas ,steak quesadillas, grilled chicken quesadillas, chorizo quesadillas, quesadillas cozumel, steak quesadillas dinner ,shrimp quesadillas, steak fajita salad, taco salad, chicken fajita salad, garden salad, quesadillas, steak quesadillas, grilled chicken quesadillas, chorizo quesadillas, quesadillas cozumel, steak quesadillas dinner, shrimp quesadillas, regular burrito dinner, burrito suizo dinner, burrito frito dinner, regular steak burrito dinner, steak burrito suizo dinner, steak burrito frito dinner, fajita burrito suizo or frito dinner, fajita burrito dinner, vegetable burrito suizo or frito, mariachis mexican shish-ka-bob, carne asada, carne a la mexicana, carne asada especial, carne asada suiza, carne asada a la tampiquena, chicken en mol'e, guisado de res, chile relleno, chicken a la mexicana, menudo, steak fajitas, chicken fajitas, traditional carnitas, carnitas fajita style, steak and chicken fajitas, vegetable fajitas, steak taco dinner, stuffed taco dinner, taco dinner, stuffed steak taco dinner, fried beans, spanish rice, enchiladas poblanas, enchiladas cozumel, enchiladas suizas, tamales, tostadas de guacamole, tostadas, tostadas suizas, flautas, kids 10 and under, kids menu,taco dinner, tostada suiza dinner, enchilada suiza dinner, taquitos mini-tacos dinner, hot dog, quesadillas, grilled cheese sandwich, chicken fingers, american fare, pepe grande burger deluxe, hot dog, french frie, cheese fries, steak fajitas, chicken fajitas, traditional carnitas, carnitas fajita style, steak and chicken fajitas, vegetable fajitas, margaritas, wine, sangria, soft drinks, cocktails, imported beer, domestic beer, botanas, nachos, quesadillas, ensaladas, combinaciones, favoritos, taco dinners, burrito dinners, asador, tradicionales, fajitas, kids menu, american fare, postres, cantina,  La Casuela Mexican Restaurant & Bar (La Casuela from the Spanish word "cazuela"  a hand made cooking pot costumary used for cooking traditional mexican dishes such as chicken Mole." /><link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" type="image/gif" href="lc-images/animated_favicon1.gif" />
<meta name="description" content="" />
<meta name="robots" content="noindex, nofollow" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Order Top Frame.   La Casuela Mexican Restaurant & Bar (La Casuela from the Spanish word "cazuela"  a hand made cooking pot costumary used for cooking traditional mexican dishes such as chicken Mole.</title>
<link href="anouncements.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
<meta name="robots" content="noindex, nofollow" />
</head>
body {
	background-color: #FFF;
}
</style><meta name="robots" content="noindex, nofollow" />
</head>
<!-- end Hidden image
<img src="images/iPhone App/logo.jpg" alt="" width="650" />
<meta name="robots" content="noindex, nofollow" />
 -->
<body>
<div id="header">
</div>
<div id="menu">
	<ul>
		<li class="first"><a href="main-lc.php" target="_parent">Home</a></li>
	  <li><a href="dinner.php" target="_parent">Dinner</a></li>
		<li><a href="lunch.php" target="_parent">Lunch</a></li>
		<li><a href="bar.php" target="_parent">Bar</a></li>
		<li><a href="pages/specials-lc.php" target="_parent">Specials</a></li>
		<li><a href="gallery.php" target="_parent">Gallery</a></li>
        <li><a href="directions.php" target="_parent">Directions</a></li>
		<li><a href="employment.php" target="_parent">Employment</a></li>
		<li><a href="gift.php" target="_parent">Gift Cards</a></li>
		<li><a href="contact.php" target="_parent">Contact</a></li>
	</ul>
</div>
<!-- end #menu -->
</html>
