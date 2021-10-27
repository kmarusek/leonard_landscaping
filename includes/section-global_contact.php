<section id="global_contact" >
    <div class="overlay" style="background-image: url(<?php the_field('global_contact_background', 'options');?>);">
    </div>
    <div class="inner">
        <div class="titlewrap">
            <h2><?php the_field('global_contact_title','options');?>
        </div>
        <div class="buttonwrap">
		    <a class="button more-link" href="<?php the_field('global_contact_link', 'options');?>">
			    <p><?php the_field('global_contact_label', 'options');?></p>
		    </a>
        </div>
    </div> 
</section>