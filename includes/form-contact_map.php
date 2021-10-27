<?php
    $map = get_field('gmap_embed');
?>

<section id="contact-page">
    <div class="inner">
      <div class="itembox">
        <div class="title-wrap">
            <h2>How can we help?</h2>
        </div>
        <div class="form">
            <?php echo do_shortcode('[contact-form-7  title="Contact Form"]');?>
        </div>
      </div>  
      <div class="itembox">
            <div class="gmap">
                <?php if($map):?>
                    <?php echo $map;?>
                <?php endif;?>
            </div>
      </div>
        
    </div>
</section>
