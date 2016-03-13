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
		<form class="girisform2" style="height: auto; margin-top: 15px;" method="post" enctype="multipart/form-data">
			<?php
			if($Kaydetme == 0){}
			else if($Kaydetme == 1){
			?>
			<div class="uyari">Formda eksik değer bırakmayın.</div>
			<?php
			}
			else if($Kaydetme == 3){
			?>
			<div class="uyari">Bir hata oluşt. Lütfen tekrar deneyin.</div>
			<?php
			}
			else{
			?>
			<div class="uyari">Paylaşım eklendi. Onaylandıktan sonra işlem başlatılacaktır.</div>
			<?php
			}
			if($EksikVarmi){
			?>
			<div class="uyari">Bilgilerinizde eksiklik var. Lütfen tamamladıktan sonra yeniden deneyiniz.</div>
			<?php
			
			}
			else{
				?>
			<h1 style="text-align:center; margin-top: -30px;">Paylaşım Ekle</h1>
			<label><span>Başlık: </span><input class="a" type="text" name="Baslik"/></label>
			<label><span>Açıklama</span><textarea name="Aciklama" cols="45"></textarea></label>
			<label><span>Yeni Kategori: </span><input class="a" type="text" name="YeniKategori"/></label>
			<label><span>Resim Ekleyin</span><input type="file" name="Resim"/></label>
			<label><span>Kategoriler: </span>
				<select name="KategoriId">
					<option value="0">Kategori Seçin</option>
					<?php
						foreach($Kategoriler as $kategori){
						?>
						<option value="<?php echo $kategori["KategoriId"]; ?>"><?php echo $kategori["KategoriAdi"]; ?></option>
						<?php
						}
					?>
				</select>
			</label>
			<label><input class="a" type="submit" value="Ekle" /></label>
			<?php
			}
			?>
		</form>
	</div>
</div>
</div>