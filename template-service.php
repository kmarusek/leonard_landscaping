<?php

/*
Template Name: Service Page
*/
get_header();?>

<!----SlideShow Banner---->
<?php get_template_part('includes/section','banner_slide');?>
<!----Service Content---->
<?php get_template_part('includes/section','content');?>
<div class="section-title">
	<h2><?php the_field('bold_green_text');?></h2>
</div>
<!---FP PROJECT SECTION--->
<?php get_template_part('includes/section','global_project');?>
<!---FP CONTACT SECTION--->
<?php get_template_part('includes/section','global_contact');?>


<?php get_footer('menu');?>
<?php get_footer();?>