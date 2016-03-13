<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Giriş yapın</title>
		<link rel="stylesheet" href="<?php echo get::site(); ?>/css/admin/reset.css"/>
		<link rel="stylesheet" href="<?php echo get::site(); ?>/css/admin/style.css"/>
	</head>
	<body>
		<form action="" method="post">
			<table class="formTablo loginForm">
				<tr>
					<td class="bilgi">Kullanıcı Adı</td>
					<td class="input"><input type="text" name="KullaniciAdi" /></td>
				</tr>
				<tr>
					<td class="bilgi">Şifre</td>
					<td class="input"><input type="password" name="Sifre" /></td>
				</tr>
				<tr>
					<td class="bilgi">&nbsp;</td>
					<td class="input"><input type="submit" value="Giriş" /></td>
				</tr>
			</table>
		</form>
	</body>
</html>