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
		Paylaşım eklendi. Onaylandıktan sonra işlem başlatılacaktır.
		<?php
		}
		if($EksikVarmi){
		?>
		Bilgilerinizde eksiklik var. Lütfen tamamladıktan sonra yeniden deneyiniz.
		<?php
		
		}
		else{
	?>
	<form action="" method="post" enctype="multipart/form-data">
		Kategori : <select name="KategoriId">
			<option value="0">Kategori Seçin</option>
			<?php
				foreach($Kategoriler as $kategori){
				?>
				<option value="<?php echo $kategori["KategoriId"]; ?>"><?php echo $kategori["KategoriAdi"]; ?></option>
				<?php
				}
			?> <br/>
		</select>
		Yeni kategori : <input type="text" name="YeniKategori"/>
		Başlık : <input type="text" name="Baslik" /> <br/>
		<textarea name="Aciklama"></textarea> <br/><br/><br/><br/>
		Resim : <input type="file" name="Resim" /> <br/>
			<input type="submit" value="Kaydet"/>
	</form>
	<?php
		}
	?>
</section>