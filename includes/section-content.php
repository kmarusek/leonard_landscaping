<?php if(have_posts()): while( have_posts() ): the_post();?>

<section id="content">
    <div class="inner">
        <div class="center-wrap">
                <h1><?php the_field('seo-h1');?></h1>
                <?php the_content();?>
        </div>
    </div>
</section>

<?php endwhile; else: endif;?>