<section>
	<div class="mesajbolum" >
		<div class="msjmenu">
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
						<div class="yenimsj" style="border-top: solid #b44242 2px;"><a href="<?php echo get::site(); ?>/Mesajlar/MesajlariOku/<?php echo $KonuId; ?>"><?php echo $Karsi; ?></a></div>
						<?php
						}
						else{
						?>
						<div class="mesajism"><a href="<?php echo get::site(); ?>/Mesajlar/MesajlariOku/<?php echo $KonuId; ?>"><?php echo $Karsi; ?></a></div>
						<?php
						}
					}
					else{
						if($AlanOkuma == 0){
							//Alan giren ki�i ama okunmam�� mesaj
						?>
						<div class="yenimsj" style="border-top: solid #b44242 2px;"><a href="<?php echo get::site(); ?>/Mesajlar/MesajlariOku/<?php echo $KonuId; ?>"><?php echo $Karsi; ?></a></div>
						<?php
						}
						else{
						?>
						<div class="mesajism"><a href="<?php echo get::site(); ?>/Mesajlar/MesajlariOku/<?php echo $KonuId; ?>"><?php echo $Karsi; ?></a></div>
						<?php
						}
					}
				}
			?>
		</div>