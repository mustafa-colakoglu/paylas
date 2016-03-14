
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yardımlaşma Sitesi</title>
<link rel="stylesheet" href="<?php echo get::site(); ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get::site(); ?>/css/slider.css" type="text/css" />
<script type="text/javascript" src="<?php echo get::site(); ?>/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo get::site(); ?>/js/slider.js"></script>
<script type="text/javascript" src="<?php echo get::site(); ?>/js/site.js"></script>
</head>
<body>
	<div class="container">
		<!-- HEADER BOLUMU BASLANGIC -->
<header>
	<div class="head_logo">
	    <div class="logo"><a href="<?php echo get::site(); ?>/"><img src="<?php echo get::site(); ?>/images/logo.png"></a></div>
       	
        <div class="clearboth"></div>
    </div>
    <div class="clearboth"></div>
	<div class="head_menu">
    	<div class="menu_ust">
        	<ul>
            	<li><a href="<?php echo get::site(); ?>">ANASAYFA</a></li>
                <li><a href="<?php echo get::site(); ?>/Hakkinda">HAKKINDA</a></li>
           </ul>
        </div>         
	</div>
</header>
<div class="middle" style="height:600px;">
<div class="adminmenu">
	<ul>
		<li><a href="<?php echo get::site(); ?>/LogOut">Çıkış</a></li>
		<li><a href="<?php echo get::site(); ?>/Bildirimler">Bildirimler ( <?php echo count($Bildirimler); ?> )</a></li>
		<li><a href="<?php echo get::site(); ?>/Mesajlar/">Mesajlar ( <?php echo $MesajSayi; ?> )</a></li>
		<li><a href="<?php echo get::site(); ?>/Profil/<?php echo $UyeBilgileri[0]["KullaniciAdi"]; ?>">Profil</a></li>
	</ul>
</div>