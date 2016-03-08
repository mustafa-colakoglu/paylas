<section>
	<table>
		<tr><td>Başlık</td><td>Düzenle</td><td>Sil</td></tr>
		<?php
			foreach($Ihtiyaclar as $ihtiyac){
			?>
			<tr><td><?php echo $ihtiyac["Baslik"]; ?></td><td><a href="<?php echo get::site(); ?>/Ihtiyaclarim/Duzenle/<?php echo $ihtiyac["IhtiyacId"]; ?>">Düzenle</a></td><td><a href="<?php echo get::site(); ?>/Ihtiyaclarim/Sil/<?php echo $ihtiyac["IhtiyacId"]; ?>">Sil</a></td></tr>
			<?php
			}
		?>
	</table>
</section>