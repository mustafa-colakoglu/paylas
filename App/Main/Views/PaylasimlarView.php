<div class="middle" style=" height:520px;">
	<div class="kapsa2">
	<div class="ihtiycsolmenu">
		<ul>
			<?php
			$Uye = $UyeBilgileri[0];
			if($Uye["Tip"] == 2){
			?>
			<li><a href="<?php echo get::site(); ?>/Profil/BilgileriDuzenle">Bilgierinizi Düzenleyin</a></li>
			<li><a href="<?php echo get::site(); ?>/IhtiyacEkle">Neye ihtiyacınız var. Burdan ekleyin</a></li>
			<li><a href="<?php echo get::site(); ?>/Ihtiyaclarim">Eklediğiniz ihtiyaçlarınız</a></li>
			<li><a href="<?php echo get::site(); ?>/RezerveEttiginizPaylasimlar">Rezerve Ettiğiniz Paylaşımlar</a></li>
			<?php
			}
			else if($Uye["Tip"] == 3){
			?>
			<li><a href="<?php echo get::site(); ?>/Profil/BilgileriDuzenle">Bilgierinizi Düzenleyin</a></li>
			<li><a href="<?php echo get::site(); ?>/PaylasimEkle">Ne paylaşmak istiyorsunuz</a></li>
			<li><a href="<?php echo get::site(); ?>/Paylasimlarim">Eklediğiniz paylaşımlarınız</a></li>
			<li><a href="<?php echo get::site(); ?>/RezerveEdilenPaylasimlar">Rezerve Edilen Paylaşımlar</a></li>
			<?php
			}
			?>
		</ul>
	</div>
	<div class="ihtiycicerik"> 
		<style type="text/css">
			.resim{
				width:40px;
				height:40px;
			}
			.resim img{
				width:40px;
				height:40px;
			}
		</style>
		<table>
			<tr><td></td><td><b>Başlık</b></td><td><b>Düzenle</b></td><td><b>Sil</b></td></tr>
			<?php
				foreach($Paylasimlar as $paylasim){
					extract($paylasim);
				?>
				<tr>
					<td class="resim"><img src="<?php echo get::site() ?>/images/<?php echo $ResimYolu; ?>" alt=""/></td>
					<td><?php echo $Baslik; ?></td>
					<td><a href="<?php echo get::site(); ?>/Paylasimlarim/Duzenle/<?php echo $PaylasimId; ?>">Düzenle</a></td>
					<td><a href="<?php echo get::site(); ?>/Paylasimlarim/Sil/<?php echo $PaylasimId; ?>">Sil</a></td>
				</tr>
				<?php
				}
			?>
		</table>
	</div>
</div>
</div>

<section>
	<table>
		<tr><td></td><td><b>Başlık</b></td><td><b>Düzenle</b></td><td><b>Sil</b></td></tr>
		<?php
			foreach($Paylasimlar as $paylasim){
				extract($paylasim);
			?>
			<tr>
				<td class="resim"><img src="<?php echo get::site() ?>/images/<?php echo $ResimYolu; ?>" alt=""/></td>
				<td><?php echo $Baslik; ?></td>
				<td><a href="<?php echo get::site(); ?>/Paylasimlarim/Duzenle/<?php echo $PaylasimId; ?>">Düzenle</a></td>
				<td><a href="<?php echo get::site(); ?>/Paylasimlarim/Sil/<?php echo $PaylasimId; ?>">Sil</a></td>
			</tr>
			<?php
			}
		?>
	</table>
</section>