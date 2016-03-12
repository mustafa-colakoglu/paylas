<!DOCTYPE html>
<html>
	<head>
		<title>Yardımlaşma Sitesi</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="<?php echo get::site(); ?>/css/reset.css"/>
		<link rel="stylesheet" href="<?php echo get::site(); ?>/css/style.css"/>
		<script type="text/javascript" src="<?php echo get::site(); ?>/js/jquery.js"></script>
		<script type="text/javascript"> var site = "<?php echo get::site(); ?>";</script>
	</head>
	<body>
		<div class="main">
			<header>
				<div class="logo">
					<a href="<?php echo get::site(); ?>">Logo</a>
				</div>
				Hoşgeldiniz <a href="<?php echo get::site(); ?>/Profil/<?php echo $UyeBilgileri[0]["KullaniciAdi"]; ?>"><?php echo $UyeBilgileri[0]["KullaniciAdi"]; ?></a> <a href="<?php echo get::site(); ?>/LogOut">Çıkış</a>
				<?php
					if($EksikBilgiVar){
					?>
					Bazı bilgileriniz eksik. Lütfen<a href="<?php echo get::site(); ?>/Profil/BilgileriDuzenle"> burayı </a> tıklayarak size yardımcı olabilmemiz için bu eksik bilgleri doldurun.
					<?php
					}
				?>
				<div class="mesajlar">
					<a href="<?php echo get::site(); ?>/Mesajlar/">Mesajlar ( <?php echo $MesajSayi; ?> )</a>
				</div>
				<div class="bildirimler">
					<h3>Bildirimler ( <?php echo count($Bildirimler); ?> )</h3>
					<ul>
						<?php
							foreach($Bildirimler as $Bildirim){
							?>
							<li>
								<p>
									<?php
										echo $Bildirim["Bildirim"];
									?>
									<a href="<?php echo get::site(); ?>/BildirimOkundu/<?php echo $Bildirim["BildirimId"]; ?>">Okundu</a>
								</p>
							</li>
							<?php
							}
						?>
					</ul>
				</div>
			</header>