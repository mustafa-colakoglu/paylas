<h2>İhtiyaç Sahibi Kayıt</h2>
<?php
	if($Kaydet == 0){}
	else if($Kaydet == 1){
		echo $HataMesaji;
	}
	else{
		echo "Kayıt Başarılı";
	}
?>
<div class="kayit">
	<form action="" method="post">
		Kullanıcı Adı : <input type="text" name="KullaniciAdi" />
		Şifre : <input type="text" name="Sifre1" />
		Şifre Tekrar : <input type="text" name="Sifre2" />
		<input type="submit" value="Kaydol"/>
	</form>
</div>