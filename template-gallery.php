<?php
/*
Template Name: Gallery Page
*/
get_header();?>

<!----SlideShow Banner---->
<?php get_template_part('includes/section','banner_slide');?>
<!---Gallery w/Isotope--->
<?php get_template_part('includes/section','isotope_gallery');?>
<!---FP CONTACT SECTION--->
<?php get_template_part('includes/section','global_contact');?>

<?php get_footer('menu');?>
<?php get_footer();?>