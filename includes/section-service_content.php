<?php if(have_posts()): while( have_posts() ): the_post();?>

<section id="content" class="service-content">
    
    <div class="inner">
        <div class="title-banner sub-page">
            <div class="title">
                <h1><?php the_title();?></h1>
            </div>
            <div class="accent-line">
            </div> 
        </div>
        <div class="center-wrap">
            <div class="contentwrap">
                <?php the_content();?>
            </div>
            <div id="slider" class="flexslider">
                <?php if(have_rows('service_repeater')):?>
                    
                <ul class="slides">
                
                    <?php while( have_rows('service_repeater')): the_row();?>
                
                    <li>
  	    	            <img loading="lazy" src="<?php the_sub_field('service_img');?>" width="800" height="600" />
                    </li>
                
                    <?php endwhile;?>

                <?php endif;?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="mobile-slider">
            <div id="slider" class="mobileslider popup-gallery">
                <?php if(have_rows('service_repeater')):?>
                    
                <ul class="slides">
                
                    <?php while( have_rows('service_repeater')): the_row();?>
                
                    <li>
                      <a href="<?php the_sub_field('service_img');?>" class="image itembox">
  	    	            <img loading="lazy" src="<?php the_sub_field('service_img');?>" />
                      </a>
                    </li>
                
                    <?php endwhile;?>

                <?php endif;?>
                </ul>
            </div>
</section>
<?php endwhile; else: endif;?>