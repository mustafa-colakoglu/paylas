<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Giriş Başarısız</title>
	<link rel="stylesheet" href="<?php echo get::site(); ?>/css/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get::site(); ?>/css/slider.css" type="text/css" />
	<script type="text/javascript" src="<?php echo get::site(); ?>/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php echo get::site(); ?>/js/slider.js"></script>
	<script type="text/javascript" src="<?php echo get::site(); ?>/js/site.js"></script>
</head>
<body>
	<div class="middle" style="height: 630px;">        	
	<form class="girisform" method="post" action="<?php echo get::site(); ?>/Giris">
			<h1 style="text-align:center;">GİRİŞ BAŞARISIZ</h1>
			<label><span>KULLANICI ADI: </span><input class="a" type="text" name="KullaniciAdi"/></label>
			<label><span>ŞİFRE: </span><input class="a" type="password" name="Sifre"/></label>
			<label><input class="a" type="submit" value="GİRİŞ YAP" /></label>
	</form>
</body>
</html>