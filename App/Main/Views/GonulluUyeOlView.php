<section>
	<div class="middle" style="height: 630px;">        	
		<form class="girisform" method="post" action="<?php echo get::site(); ?>/Giris">
			<h1 style="text-align:center;">GİRİŞ YAP</h1>
				<label><span>KULLANICI ADI: </span><input class="a" type="text" name="KullaniciAdi"/></label>
				<label><span>ŞİFRE: </span><input class="a" type="password" name="Sifre"/></label>
				<label><input class="a" type="submit" value="GİRİŞ YAP" /></label>
		</form>
		<form class="girisform" style="height: 550px;" method="post">
			<?php
				if($Kaydet == 0){}
				else if($Kaydet == 1){
				?>
				<div class="uyari"><?php echo $HataMesaji; ?></div>
				<?php
				}
				else{
				?>
				<div class="uyari"><?php echo $HataMesaji; ?></div>
				<?php
				}
			?>
				<h1 style="text-align:center;">ÜYE OL</h1>
				<label><span>KULLANICI ADI: </span><input class="a" type="text" name="KullaniciAdi"/></label>
				<label><span>ŞİFRENİZ: </span><input class="a" type="password" name="Sifre1"/></label>
				<label><span>ŞİFRE TEKRAR: </span><input class="a" type="password" name="Sifre2"/></label>
				<label><span>E-POSTA: </span><input type="text" class="a" name="Email"/></label>
				<label><input class="a" type="submit" value="ÜYE OL" /></label>
		</form>
	</div>
</section>