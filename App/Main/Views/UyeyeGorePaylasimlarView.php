<section>
	<div class="middle">
		<div id="slider">
			<div class="slider">
				<ul>
					<li><a href=""><img src="<?php echo get::site(); ?>/images/slider/img1.png" alt="" /></a></li>
					<li><a href=""><img src="<?php echo get::site(); ?>/images/slider/img2.png" alt="" /></a></li>
					<li><a href=""><img src="<?php echo get::site(); ?>/images/slider/img3.png" alt="" /></a></li>      
			   </ul>
			</div>
			  <div class="sliderbutton">
				 <a href="#" class="onceki"><img src="<?php echo get::site(); ?>/images/prev2.png" /></a>
				 <a href="#" class="sonraki"><img src="<?php echo get::site(); ?>/images/next2.png" /></a>
			  </div>
		</div>
	</div>
	<h2>Size Göre Paylaşımlar</h2>
	<br/>
	<br/>
	<br/>
	<br/>
	<table border=1>
	<tr>
		<td></td>
		<td>Başlık</td>
		<td>Açıklama</td>
		<td>Rezerve Et</td>
	</tr>
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
			<td><a href="<?php echo get::site(); ?>/RezerveEt/<?php echo $PaylasimId; ?>">Rezerve Et</a></td>
		</tr>
		<?php
		}
	?>
	</table>
</section>