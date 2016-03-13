<div class="middle">
	<div id="slider">
			<div class="slider">
				<ul>
	<?php
		foreach($Haberler as $Haber){
		extract($Haber);
		?>
		<li><a href="<?php echo get::site(); ?>/Haber/<?php echo $HaberId; ?>"><img src="<?php echo get::site(); ?>/images/slider/<?php echo $HaberResimYolu; ?>"/></a></li>
		<?php
		}
	?>
	  </ul>
		</div>
		  <div class="sliderbutton">
			 <a href="#" class="onceki"><img src="<?php echo get::site(); ?>/images/prev2.png" /></a>
			 <a href="#" class="sonraki"><img src="<?php echo get::site(); ?>/images/next2.png" /></a>
		  </div>
	</div>   
</div>