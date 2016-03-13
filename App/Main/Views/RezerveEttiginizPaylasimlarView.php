<div class="middle">
	<h1>Rezerve Ettiğiniz Paylaşımlar </h1>
	<?php
		foreach($Paylasimlar as $Paylasim){
		extract($Paylasim);
	?>
	<div class="rzrvedilmis">
		<div class="rzrvsolresim"><img src="<?php echo get::site(); ?>/images/<?php echo $ResimYolu; ?>" style="width:200px;height:200px;"></div>
		<div class="rzrvurunbaslik">
		<?php echo $Baslik; ?>
		<div class="urnaldm"><a href="<?php echo get::site(); ?>/RezerveEttiginizPaylasimlar/Alindi/<?php echo $PaylasimId; ?>">ÜRÜNÜ ALDIM</a> | <a href="<?php echo get::site(); ?>/RezerveEttiginizPaylasimlar/Alinmadi/<?php echo $PaylasimId; ?>">ÜRÜNÜ ALAMADIM</a></div>  
		</div>
		<div class="rzrvaciklama">
		<?php
			echo $Aciklama;
		?>
		<br/>
		</div>
	</div>
	<?php
		}
	?>
</div>