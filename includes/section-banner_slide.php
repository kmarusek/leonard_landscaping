<?php if(have_posts()): while( have_posts() ): the_post();?>

<?php if( have_rows('banner_slides') ): ?>
<section id="header3">
<div class="flexslider subpage">
  <ul class="slides">
    <?php while( have_rows('banner_slides') ): the_row(); 
        $image = get_sub_field('slide_image');
        ?>
      <li><img src="<?php echo $image;?>"/></li>
    <?php endwhile; ?>
  </ul>
  <div class="bannertitle">
    <?php if( get_field('slider_title')):?>
      <div class="centerbox">
        <h2><?php the_field('slider_title');?></h2>
        <h4><?php the_field('slider_subtitle');?></h4>
      </div>
    <?php endif;?>
      
    </div>
</div>
</section>
<?php endif; ?>


<?php endwhile; else: endif;?>