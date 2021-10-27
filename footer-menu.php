

<section id="footer-2" class="secondary-menu bottom-menu">
	<div class="inner">
		<?php 
			wp_nav_menu(

				array(

					'theme_location' => 'footer-menu',
					'container' => 'div',
					'container_class' => 'footer-menu',
					'container_id' => 'footer-menu'
				)

			);
		?> 
		 <div class="footer-logo">
			<a href="/" title="Leonard Landscaping">
				<img src="<?php echo get_template_directory_uri();?>/img/logo_min.png" alt="Logo" width="200" height="100" />
			</a>
		</div>
		<?php 
			wp_nav_menu(

				array(

					'theme_location' => 'footer-media-menu',
					'container' => 'div',
					'container_class' => 'footer-media-menu',
					'container_id' => 'footer--media-menu'
				)

			);
		?> 
		<div class="bottom-bar">
			<p>
				<a href="https://abovemediateam.com/" target="_blank">&#169; Leonard Landscaping - by Above Media</a>
        	</p>
		</div>
	</div>
</section>




