<?php

/*
Template Name: Landing Page
*/
get_header();?>


<!----SlideShow Banner---->
<?php get_template_part('includes/section','banner_slide');?>

<!---Editor Content--->
<?php get_template_part('includes/section','content');?>

<!---Service Repeater--->
<?php get_template_part('includes/section','landing_callouts');?>

<?php get_footer('menu');?>
<?php get_footer();?>