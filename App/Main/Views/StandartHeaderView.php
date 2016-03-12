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
       	<div class="head">
        	<div class="parca" style=" padding-left: 30px; width: 180px;">
				<form action="<?php echo get::site(); ?>/Giris" method="post">
					KullanıcıAdı:<input type="text" name="KullaniciAdi"/>
					Sifre:<input type="password" name="Sifre"/>
					<input type="submit" value="Giris" style="float:right; margin-right: 7px; margin-top: 5px;"/>
				</form>
            </div>
            <div class="parca"><a href="<?php echo get::site(); ?>/GonulluUyeOl"><img src="<?php echo get::site(); ?>/images/gnllu.png"></a></div>
            <div class="parca"><a href="<?php echo get::site(); ?>/IhtiyacSahibiUyeOl"><img src="<?php echo get::site(); ?>/images/ihtycshb.png"></a></div>
        </div>
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