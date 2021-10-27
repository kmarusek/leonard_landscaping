<section id="global_projects" style="background-image: url(<?php the_field('global_project_background', 'options');?>);">
            <div class="contentwrap">
                <ul class="projects">
                    <?php if(have_rows('global_project_repeater', 'options')):?>

                        <?php while( have_rows('global_project_repeater', 'options')): the_row();?>
                            <li>
                                <img src="<?php the_sub_field('global_project_img', 'options');?>">
                            </li>
                        <?php endwhile;?>

                    <?php endif;?>
                </ul>
            </div>
            <div class="buttonwrap">
				<a class="button more-link" href="<?php the_field('global_project_link', 'options');?>">
					<p><?php the_field('global_project_label', 'options');?></p>
				</a>
            </div>    
</section>
