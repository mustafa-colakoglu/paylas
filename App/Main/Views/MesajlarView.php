<section>
	<div class="sol">
		<ul>
			<?php
				foreach($TumKonular as $Konu){
					extract($Konu);
					$KonuUyeler = json_decode($Konu, 1);
					$Ben = "Uye-".$UyeId;
					foreach($KonuUyeler as $key => $value){
						if($key != $Ben){
						$Karsi = $value;
						}
					}
					if($GonderenId == $UyeId){
						if($GonderenOkuma == 0){
							//G�nderen giren ki�i ama okunmam�� mesaj
						?>
						<li>
							<a href="<?php echo get::site(); ?>/Mesajlar/MesajlariOku/<?php echo $KonuId; ?>">
							<?php
								echo $Karsi;
							?> *
							</a>
						</li>
						<?php
						}
						else{
						?>
						<li>
							<a href="<?php echo get::site(); ?>/Mesajlar/MesajlariOku/<?php echo $KonuId; ?>">
							<?php
								echo $Karsi;
							?>
							</a>
						</li>
						<?php
						}
					}
					else{
						if($AlanOkuma == 0){
							//Alan giren ki�i ama okunmam�� mesaj
						?>
						<li>
							<a href="<?php echo get::site(); ?>/Mesajlar/MesajlariOku/<?php echo $KonuId; ?>">
							<?php
								echo $Karsi;
							?> *
							</a>
						</li>
						<?php
						}
						else{
						?>
						<li>
							<a href="<?php echo get::site(); ?>/Mesajlar/MesajlariOku/<?php echo $KonuId; ?>">
							<?php
								echo $Karsi;
							?>
							</a>
						</li>
						<?php
						}
					}
				}
			?>
		</ul>
	</div>