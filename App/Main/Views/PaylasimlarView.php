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