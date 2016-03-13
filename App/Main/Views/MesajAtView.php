<section>
	<?php
		if($Gonderilme == 0){}
		else if($Gonderilme == 1){
		?>
		Mesajınız Gönderildi. Yönlendiriliyorsunuz.
		<script type="text/javascript">
			setTimeout(function (){

			window.location = "<?php echo get::site(); ?>/Main";
			 
			},1000);
		</script>
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