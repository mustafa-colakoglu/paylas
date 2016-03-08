<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Giriş Başarısız</title>
	<link rel="stylesheet" href="<?php echo get::site(); ?>/css/reset.css"/>
	<link rel="stylesheet" href="<?php echo get::site(); ?>/css/style.css"/>
	<script type="text/javascript" src="<?php echo get::site(); ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo get::site(); ?>/js/js.js"></script>
	<script type="text/javascript"> var site = "<?php echo get::site(); ?>";</script>
</head>
<body>
	<div class="headerGiris">
		<form action="<?php echo get::site(); ?>/Giris" method="post">
			<div class="tr">Giriş Yapın</div>
			<div class="tr"><div class="td">KullanıcıAdı</div><div class="td"><input type="text" name="KullaniciAdi"/></div></div>
			<div class="tr"><div class="td">Şifre</div><div class="td"><input type="password" name="Sifre"/></div></div>
			<div class="tr"><div class="td"></div><div class="td"><input type="submit" value="Giriş"/></div></div>
		</form>
	</div>
</body>
</html>