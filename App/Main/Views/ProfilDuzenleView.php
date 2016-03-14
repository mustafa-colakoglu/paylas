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
		<form class="girisform2" style="height: auto; margin-top: 15px;" method="post">
		<!--<div class="uyari">Uyarii</div> -->
		<?php
			$UyeBilgileri = $UyeBilgileri[0];
		?>
		<h1 style="text-align:center; margin-top: -30px;">Bilgileriniz</h1>
			<label><span>Kullanıcı Adı : </span><input type="text" name="KullaniciAdi" value="<?php echo $UyeBilgileri["KullaniciAdi"]; ?>" disabled class="a" /></label>
			<label><span>Email : </span><input type="text" name="Email" value="<?php echo $UyeBilgileri["Email"]; ?>" disabled="disabled" class="a"/></label>
			<label><span>Ad : </span><input type="text" name="Ad" value="<?php echo $UyeBilgileri["Ad"]; ?>" <?php if($UyeBilgileri["Ad"] == ""){ ?> placeholder="Adınız" <?php } else{ ?> disabled="disabled" <?php } ?> class="a"/></label>
			<label><span>Soyad : </span><input type="text" name="Soyad" value="<?php echo $UyeBilgileri["Soyad"]; ?>" <?php if($UyeBilgileri["Soyad"] == ""){ ?> placeholder="Soyadınız" <?php } else{ ?> disabled="disabled" <?php } ?> class="a"/></label>
			<label><span>CepTel : </span><input type="text" name="CepTel" value="<?php if($UyeBilgileri["CepTel"] == ""){  } else{ echo $UyeBilgileri["CepTel"]; } ?>" <?php if($UyeBilgileri["CepTel"] == ""){ ?> placeholder="Cep telefon numaranız" <?php } else{ ?> disabled="disabled" <?php } ?> class="a"/></label>
			<label><span>Tc : </span><input type="text" name="Tc" value="<?php if($UyeBilgileri["Tc"] == 0){  } else{ echo $UyeBilgileri["Tc"]; } ?>" <?php if($UyeBilgileri["Tc"] == 0){ ?> placeholder="Tc Kimlik Numaranız" <?php } else{ ?> disabled="disabled" <?php } ?> class="a"/></label>
			<label><span>İliniz : </span>
				<select name="IlId" <?php if($UyeBilgileri["IlId"] != 0){ ?> disabled <?php } ?>>
				<option value="0">İlinizi Seçiniz</option>
				<?php
					foreach($iller as $il){
					?>
					<option value="<?php echo $il["IlId"]; ?>" <?php if($il["IlId"] == $UyeBilgileri["IlId"]){ ?> selected <?php } ?>><?php echo $il["IlAdi"]; ?></option>
					<?php
					}
				?>
			</select>
			</label>
			<?php
			if($UyeBilgileri["Tip"] == 2){
				?>
				<label><span>Kısa Özetiniz</span><textarea name="KisaOzet" placeholder="Sizinle ilgili kısa bir özet" cols="45"><?php echo $UyeBilgileri["KisaOzet"]; ?></textarea></label>
				<?php
				}
			?>
			<label><span>Mevcut Şifre : </span><input type="password" name="Sifre" class="a"/></label>
			<label><span>Yeni Şifre : </span><input type="password" name="Sifre1" class="a"/></label>
			<label><span>Yeni Şifre Tekrar : </span><input type="password" name="Sifre2" class="a"/></label>
			<label><input class="a" type="submit" value="GÜNCELLE" /></label>
		</form>
	</div>
	</div>
</div>