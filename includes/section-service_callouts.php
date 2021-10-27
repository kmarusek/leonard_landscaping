<?php if(have_posts()): while( have_posts() ): the_post();?>


    <section id="content" class="service-callouts">
        <div class="inner">
            <div class="title-banner sub-page">
                <div class="title">
                    <h1><?php the_field('service_callout_title');?></h1>
                </div>
                <div class="accent-line">

                </div> 
            </div>
            <div class="calloutwrapper">
            
                <?php if(have_rows('service_callout_repeater')):?>

                    <?php while( have_rows('service_callout_repeater')): the_row();?>
                        <div class="itembox">
                            <div class="imagewrapper">
                                <img src="<?php the_sub_field('service_callout_img');?>"/>
                            </div>
                            <a href="<?php the_sub_field('service_callout_link');?>">
                                <div class="overlay">
                                        <div class="centerbox">
                                            <div class="title">
                                                <h2><?php the_sub_field('service_callout_title');?></h2>
                                            </div>
                                        </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile;?>
                <?php endif;?>
            </div>
        </div>
    </section>


<?php endwhile; else: endif;?>