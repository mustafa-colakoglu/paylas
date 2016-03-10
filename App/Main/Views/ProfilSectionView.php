<section>
	<?php
		$Uye = $UyeBilgileri[0];
		if($Uye["Tip"] == 2){
		?>
		<a href="<?php echo get::site(); ?>/Profil/BilgileriDuzenle">Bilgierinizi Düzenleyin</a>
		<a href="<?php echo get::site(); ?>/IhtiyacEkle">Neye ihtiacınız var. Burdan ekleyin</a>
		<a href="<?php echo get::site(); ?>/Ihtiyaclarim">Eklediğiniz ihtiyaçlarınız</a>
		<?php
		}
		else if($Uye["Tip"] == 3){
		?>
		<a href="<?php echo get::site(); ?>/Profil/BilgileriDuzenle">Bilgierinizi Düzenleyin</a>
		<a href="<?php echo get::site(); ?>/PaylasimEkle">Ne paylaşmak istiyorsunuz</a>
		<a href="<?php echo get::site(); ?>/Paylasimlarim">Eklediğiniz paylaşımlarınız</a>
		<?php
		}
	?>
</section>