<div class="middle">
	<h1>Rezerve Edilmiş Paylaşımlar </h1>
	<?php
		foreach($Paylasimlar as $Paylasim){
		extract($Paylasim);
	?>
	<div class="rzrvedilmis">
		<div class="rzrvsolresim"><img src="<?php echo get::site(); ?>/images/<?php echo $ResimYolu; ?>" style="width:200px;height:200px;"></div>
		<div class="rzrvurunbaslik">
		<?php echo $Baslik; ?>
		<div class="urnaldm"><a href="<?php echo get::site(); ?>/RezerveEdilenPaylasimlar/Verildi/<?php echo $PaylasimId; ?>">ÜRÜNÜ VERDİM</a> | <a href="<?php echo get::site(); ?>/RezerveEdilenPaylasimlar/Verilmedi/<?php echo $PaylasimId; ?>">ÜRÜNÜ VEREMEDİM</a></div>  
		</div>
		<div class="rzrvaciklama">
		<?php
			echo $Aciklama;
		?>
		<br/>
		Rezerve Eden Kullanıcı ( <a href="<?php echo get::site(); ?>/MesajAt/<?php echo $UyeId; ?>"><?php echo $KullaniciAdi; ?></a> ) ya ulaşın
		</div>
	</div>
	<?php
		}
	?>
</div>