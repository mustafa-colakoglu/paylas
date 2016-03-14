<section>
	<h2>Size Göre Paylaşımlar</h2>
	<?php
		foreach($Paylasimlar as $Paylasim){
			extract($Paylasim);
		?>
		<div class="rzrvedilmis">
			<div class="rzrvsolresim"><img src="<?php echo get::site(); ?>/images/<?php echo $ResimYolu; ?>" style="width:200px;height:200px;"></div>
			<div class="rzrvurunbaslik">
			<?php echo $Baslik; ?>
			</div>  
			<div class="rzrvaciklama">
			<?php
				echo $Aciklama;
			?>
			</div>
			<div class="rzrvbtn"><label><a href="<?php echo get::site(); ?>/RezerveEt/<?php echo $PaylasimId; ?>/<?php echo $IhtiyacId; ?>">Rezerve Et</a></label></div>  
		</div>
		<?php
		}
	?>
</section>