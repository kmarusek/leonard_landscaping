<?php

/*
Template Name: About Page
*/
get_header();?>

<!----SlideShow Banner---->
<?php get_template_part('includes/section','banner_slide');?>
<!----Service Content---->
<?php get_template_part('includes/section','content');?>
<!---Testimonials--->
<?php get_template_part('includes/section','testimonials');?>
<!---FP PROJECT SECTION--->
<?php get_template_part('includes/section','global_project');?>
<!---FP CONTACT SECTION--->
<?php get_template_part('includes/section','global_contact');?>



<?php get_footer('menu');?>
<?php get_footer();?>