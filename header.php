<!DOCTYPE HTML>

<html>

<head>
	<title>Leonard Landscaping</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
    <?php wp_head();?>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LL2Z4VPLGW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LL2Z4VPLGW');
</script>
	
</head>

<body>
<div id="page-container">
	<div id="content-wrap">
		<section id="header2">
  			<div class="inner">
				<div class="logo">
					<a href="/" title="Leonard Landscaping">
						<img src="<?php echo get_template_directory_uri();?>/img/logo_min.png" alt="Logo" width="200" height="100" />
					</a>
				</div>
				<div class="nav-menu">
					<?php 
						wp_nav_menu(

							array(

							'theme_location' => 'top-menu',
							'container' => 'div',
							'container_class' => 'main-menu',
							'container_id' => 'menu'
							)

						);
					?> 
					<div class="burger">
						<div class="line1"></div>
						<div class="line2"></div>
						<div class="line3"></div>
	  				</div>
				</div>

  			</div>
  		<?php 
		wp_nav_menu(

			array(

				'theme_location' => 'mobile-menu',
				'container' => 'div',
				'container_class' => 'mobile-menu',
				'container_id' => 'mobile',
				'walker' => new add_span_walker()
			)

		);
		?> 
		</section>

