<?php if(have_posts()): while( have_posts() ): the_post();?>

<section id="landing_callout">
    <div class="inner">

    <?php if(have_rows('landing_callout')):?>

        <?php while( have_rows('landing_callout')): the_row();?>
        <div class="itembox">
            <div class="imagewrapper">
                <img src="<?php the_sub_field('landing_callout_image');?>"/>
            </div>
            <a href="<?php the_sub_field('landing_callout_link');?>">
                <div class="overlay">
                    <div class="centerbox">
                        <div class="title">
                            <h2><?php the_sub_field('landing_callout_title');?></h2>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php endwhile;?>

    <?php endif;?>
    </div>
</section>

<?php endwhile; else: endif;?>