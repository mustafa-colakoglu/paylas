<section>
	<form action="" method="post">
		Kategori : <select name="KategoriId">
			<option value="0">Kategori Seçin</option>
			<?php
				foreach($Kategoriler as $kategori){
					if($kategori["KategoriId"] == $Ihtiyac["KategoriId"]){
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
		Başlık : <input type="text" name="Baslik" value="<?php echo $Ihtiyac["Baslik"]; ?>" /> <br/>
			<input type="submit" value="Kaydet"/>
	</form>
</section>