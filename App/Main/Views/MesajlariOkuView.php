		<?php
			if(count($Mesajlar)>0){
				
			?>
		<div class="mesajknsm" style="margin-top: 0px; border: solid #b44242 1px; padding-bottom: 5px; ">
			<?php
			for($i=count($Mesajlar)-1;$i>=0;$i--){
				$Mesaj = $Mesajlar[$i];
			?>
			<div class="gndrad"><a href=""><?php echo $Uyeler["Uye-".$Mesaj["GonderenId"]]; ?></a></div>
			<div class="msjicrk"><?php echo $Mesaj["Mesaj"]; ?>
				<div class="trh"><?php echo $Mesaj["Tarih"]; ?></div>
				<div class="saat"><?php echo $Mesaj["Saat"]; ?></div>
			</div>
			<?php
				}
			?>
			<form action="" method="post">
				<div class="msjyaz">
				<textarea rows="8" cols="70" name="Mesaj"></textarea>
				</div>
				<div class="gndr" style=" margin-right: 70px; margin-top: 10px;"><label><input type="submit" value="GÖNDER" /></label></div>
			</form>
		</div>
		<?php
			}
		?>
	</div>
</section>