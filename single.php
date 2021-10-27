<?php get_header();?>

<!---Editor Content--->
<section id="content" class="sub-page">
    <div class="inner">
        <div class="center-wrap">
            <h1><?php the_title();?></h1>
            <p><?php the_content();?></p> 
        </div>
    </div>
</section>

<?php get_footer('menu');?>
<?php get_footer();?>