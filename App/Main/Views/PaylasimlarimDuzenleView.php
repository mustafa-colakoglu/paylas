<section>
	<?php
		if($Kaydetme == 0){}
		else if($Kaydetme == 1){
		?>
		Formda eksik değer bırakmayın.
		<?php
		}
		else if($Kaydetme == 3){
		?>
		Bir hata oluştu. Yeniden deneyin.
		<?php
		}
		else{
		?>
		Paylaşım düzenlendi. Onaylandıktan sonra işlem başlatılacaktır.
		<?php
		}
	?>
	<form action="" method="post" enctype="multipart/form-data">
		Kategori : <select name="KategoriId">
			<option value="0">Kategori Seçin</option>
			<?php
				foreach($Kategoriler as $kategori){
					if($Paylasim["KategoriId"] == $kategori["KategoriId"]){
					?>
					<option value="<?php echo $kategori["KategoriId"]; ?>" selected><?php echo $kategori["KategoriAdi"]; ?></option>
					<?php
					}
					else{
					?>
					<option value="<?php echo $kategori["KategoriId"]; ?>"><?php echo $kategori["KategoriAdi"]; ?></option>
					
					<?php
					}
				}
			?> <br/>
		</select>
		Yeni kategori : <input type="text" name="YeniKategori"/>
		Başlık : <input type="text" name="Baslik" value="<?php echo $Paylasim["Baslik"]; ?>"/> <br/>
		<textarea name="Aciklama"><?php echo $Paylasim["Aciklama"]; ?></textarea> <br/><br/><br/><br/>
		Resim : <input type="file" name="Resim" /> (Resmi değiştirmek istiyorsanız seçin.) <br/>
			<input type="submit" value="Kaydet"/>
			<div class="resim">
				<img src="<?php echo get::site(); ?>/images/<?php echo $Paylasim["ResimYolu"]; ?>"/>
			</div>
	</form>
</section>