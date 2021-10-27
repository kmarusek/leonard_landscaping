<?php if(have_posts()): while( have_posts() ): the_post();?>

<div class="filter isotope-filter">
        <ul>
            <h4>
                <li class="active" data-filter="*">All</li>
                <li data-filter=".retaining-walls">Retaining Walls</li>
                <li data-filter=".patios">Patios</li>
                <li data-filter=".landscaping">Landscaping</li>
                <li data-filter=".commercial">Commercial</li>
            </h4>
        </ul>
</div>

<section id="isotope_gallery">
      
    <?php if(have_rows('gallery_repeater')):?>
        <div class="gallery-container grid">
    <?php while( have_rows('gallery_repeater')): the_row();?>
        <div class="content <?php  the_sub_field('filter_class');?> item">
            <a class="mag" href="<?php the_sub_field('gallery_image');?>" data-title="<?php  the_sub_field('filter_class');?>">
                <img src="<?php the_sub_field('gallery_image');?>">
            </a>
        </div>



    <?php endwhile;?>
        </div>
    <?php endif;?>





</section>

<?php endwhile; else: endif;?>