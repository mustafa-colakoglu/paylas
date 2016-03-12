<div class="sag">
	<?php
	if(count($Mesajlar)>0){
?>
<form action="" method="post">
<table>
	<?php
		for($i=count($Mesajlar)-1;$i>=0;$i--){
			$Mesaj = $Mesajlar[$i];
			?>
			<tr><td><?php echo $Uyeler["Uye-".$Mesaj["GonderenId"]] ?></td><td><?php echo $Mesaj["Mesaj"]; ?></td><td><?php echo $Mesaj["Tarih"]; ?> - <?php echo $Mesaj["Saat"]; ?></td></tr>
			<?php
		}
	?>
	<?php
		if(isset($Hata)){
		?>
		Bir Hata Oluştu. Lütfen Tekrar Deneyin.
		<?php
		}
	?>
	<tr>
	<td></td><td><textarea name="Mesaj" placeholder="Mesajınızı Giriniz."></textarea></td>
	</tr>
	<tr><td></td><td><input type="submit" value="Gönder" /></td></tr>
</table>
</form>
<?php
	}
	else{
	?>
	Böyle bir konu yok.
	<?php
	}
?>
</div>
</section>