<section>
	<?php
		if($Gonderilme == 0){}
		else if($Gonderilme == 1){
		?>
		Mesajınız Gönderildi. Yönlendiriliyorsunuz.
		<?php
		}
		else{
		?>
		Mesaj Gönderilemedi.
		<?php
		}
	?>
	<form action="" method="post">
		<textarea name="Mesaj" placeholder="Mesajınız : Örn ( Şurda buluşalım mı )"></textarea>
		<input type="submit" value="Gönder"/>
	</form>
</section>