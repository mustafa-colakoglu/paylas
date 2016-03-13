<section>
	<h2>Size Göre Paylaşımlar</h2>
	<?php
		foreach($Paylasimlar as $Paylasim){
			extract($Paylasim);
		?>		
		<tr>
			<td class="resim">
				<img src="<?php echo get::site(); ?>/images/<?php echo $ResimYolu; ?>"/>
			</td>
			<td><?php echo $Baslik; ?></td>
			<td><?php echo $Aciklama; ?></td>
			<td><a href="<?php echo get::site(); ?>/RezerveEt/<?php echo $PaylasimId; ?>/<?php echo $IhtiyacId; ?>">Rezerve Et</a></td>
		</tr>
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