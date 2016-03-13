<div class="middle">
	<div class="kapsa">
		<div class="baslik">BİLDİRİMLER</div>
			<?php
				if(count($Bildirimler) == 0){
				?>
				Bildiriminiz bulunmuyor.
				<?php
				}
				foreach($Bildirimler as $Bildirim){
				?>
				<div class="bldrmkps">
				<div class="bldrmicrk">
					<?php
						echo $Bildirim["Bildirim"];
					?>
				</div>
				<a href="<?php echo get::site(); ?>/BildirimOkundu/<?php echo $Bildirim["BildirimId"]; ?>">Okundu olarak işaretle</a>
				</div>
				<?php
				}
			?>
		</div>
</div>