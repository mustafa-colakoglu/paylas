<section>
	<?php
		if($Kaydetme == 0){}
		else if($Kaydetme == 1){
		?>
		Formda eksik değer bırakmayın.
		<?php
		}
		else{
		?>
		İhtiyaç eklendi. Onaylandıktan sonra işlem başlatılacaktır.
		<?php
		}
		if($EksikVarmi){
		?>
		Bilgilerinizde eksiklik var. Lütfen tamamladıktan sonra yeniden deneyiniz.
		<?php
		
		}
		else{
	?>
	<form action="" method="post">
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
			<input type="submit" value="Kaydet"/>
	</form>
	<?php
		}
	?>
</section>