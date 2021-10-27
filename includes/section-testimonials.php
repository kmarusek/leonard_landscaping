<?php if(have_posts()): while( have_posts() ): the_post();?>

	<div class="gtco-testimonials">
    	<h2><?php the_field('testimonial_repeater_title');?></h2>
    	
<?php if( have_rows('testimonial_carousel') ): ?>
		<div class="owl-carousel owl-carousel1 owl-theme">
    <?php while( have_rows('testimonial_carousel') ): the_row(); ?>
		<div>
		   <div class="card text-center">
			<?php if( get_sub_field('testimonial_image')):?>
				<img class="card-img-top" src="<?php the_sub_field('testimonial_image');?>" alt="">
			<?php endif;?>
          		<div class="card-body">
            		<h5><?php the_sub_field('testimonial_name');?></h5>
            		<?php the_sub_field('testimonial_testament');?>
           		</div>
           	</div>
      	</div>
    <?php endwhile; ?>
    	</div>
<?php endif; ?>
	</div>

<?php endwhile; else: endif;?>