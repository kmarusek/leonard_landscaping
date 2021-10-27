<?php

/*
Template Name: Contact Page
*/
get_header();?>

<!----SlideShow Banner---->
<?php get_template_part('includes/section','banner_slide');?>

<!---Editor Content--->
<?php get_template_part('includes/section','content');?>

<!---Contact Form--->
<?php get_template_part('includes/form','contact_map');?>

<?php get_footer('menu');?>
<?php get_footer();?>