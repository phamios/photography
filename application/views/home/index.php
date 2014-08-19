<!DOCTYPE html>
<html>
	<head>
		<title>Son Marki</title>
		<meta content="text/html; charset=utf-8" http-equiv="content-type"> 
		<link rel="icon" href="favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('src');?>/css/style.css" />
		<script type="text/javascript" src="<?php echo base_url('src');?>/js/jquery-1.10.2.min.js"></script>
		 
	<link rel='stylesheet' href='<?php echo base_url('src/gallery');?>/dist/css/justifiedgallery.css' type='text/css' media='all' />
	<script src='<?php echo base_url('src/gallery');?>/src/js/justifiedgallery.js'></script>
	<link rel='stylesheet' href='<?php echo base_url('src/gallery');?>/libs/jquery-colorbox/colorbox.css' type='text/css' media='screen' />
	<script src='<?php echo base_url('src/gallery');?>/libs/jquery-colorbox/jquery.colorbox-min.js'></script>
	<script>
		$(document).ready(function () {
			$(".colorboxEx").each(function (i, el) {
				$(el).justifiedGallery({rel: 'gal' + i}).on('jg.complete', function () {
					$(this).find('a').colorbox({
						maxWidth : '80%',
						maxHeight : '80%',
						opacity : 0.8,
						transition : 'elastic',
						current : ''
					});
				});
			});
		});
	</script>
	</head>
	<body>
		<div class='header'>
			<div class="clearfix">
				<div class="float-left">
						<h1> Son Marki</h1>
						<div class='target'>Creating dynamic grid layouts.</div>
				</div>
			</div>
		</div>
	  
	<div class="colorboxEx">
		<a href="<?php echo base_url('src/gallery');?>/docs/photos/8083451788_552becfbc7_z.jpg" title="Cộng hòa xã hội chủ nghĩa ">
			<img alt="Cộng hòa xã hội chủ nghĩa " src="<?php echo base_url('src/gallery');?>/docs/photos/8083451788_552becfbc7_z.jpg" />
		</a>
		<a href="<?php echo base_url('src/gallery');?>/docs/photos/7948632554_01f6ae6b6f_z.jpg" title="Cộng hòa xã hội chủ nghĩa ">
			<img alt="Cộng hòa xã hội chủ nghĩa " src="<?php echo base_url('src/gallery');?>/docs/photos/7948632554_01f6ae6b6f_z.jpg" />
		</a>
		<a href="<?php echo base_url('src/gallery');?>/docs/photos/7302459122_19fa1d8223_z.jpg" title="Cộng hòa xã hội chủ nghĩa ">
			<img alt="Cộng hòa xã hội chủ nghĩa " src="<?php echo base_url('src/gallery');?>/docs/photos/7302459122_19fa1d8223_z.jpg" />
		</a>
		<a href="<?php echo base_url('src/gallery');?>/docs/photos/7222046648_5bf70e893a_z.jpg" title="Cộng hòa xã hội chủ nghĩa ">
			<img alt="Simply my Brother" src="<?php echo base_url('src/gallery');?>/docs/photos/7222046648_5bf70e893a_z.jpg" />
		</a>
		<a href="<?php echo base_url('src/gallery');?>/docs/photos/7002395006_29fdc85f7a_z.jpg" title="Freedom">
			<img alt="Freedom" src="<?php echo base_url('src/gallery');?>/docs/photos/7002395006_29fdc85f7a_z.jpg" />
		</a>
		<a href="<?php echo base_url('src/gallery');?>/docs/photos/7062575651_b23918b11a_z.jpg" title="Maybe spring">
			<img alt="Maybe spring" src="<?php echo base_url('src/gallery');?>/docs/photos/7062575651_b23918b11a_z.jpg" />
		</a>
		<a href="<?php echo base_url('src/gallery');?>/docs/photos/6841267340_855273fd7e_z.jpg" title="Love">
			<img alt="Love" src="<?php echo base_url('src/gallery');?>/docs/photos/6841267340_855273fd7e_z.jpg" />
		</a>
		<a href="<?php echo base_url('src/gallery');?>/docs/photos/6958456697_e56a37bb5f_z.jpg" title="Young Lovers' Wall and the Old Rain">
			<img alt="Young Lovers' Wall and the Old Rain" src="<?php echo base_url('src/gallery');?>/docs/photos/6958456697_e56a37bb5f_z.jpg" />
		</a>
		<a href="<?php echo base_url('src/gallery');?>/docs/photos/6791628438_affaa19e10_z.jpg" title="This is the colors I love">
			<img alt="This is the colors I love" src="<?php echo base_url('src/gallery');?>/docs/photos/6791628438_affaa19e10_z.jpg" />
		</a> 
	</div>
	
	
	</body>
</html>