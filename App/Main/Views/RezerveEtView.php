<section>
	<?php
		if($Hata == 1){
		?>
		zaten daha önce alınmış
		<?php
		}
		else{
		?>
		Paylaşımı rezerve ettiniz. Yönlendiriliyorsunuz.
		<?php
		}
	?>
	<script type="text/javascript">
		setTimeout(function (){

		window.location = "<?php echo get::site(); ?>/Main";
		 
		},1000);
	</script>
</section>