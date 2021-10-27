<?php get_header();?>

<!----SlideShow Banner---->
<?php get_template_part('includes/section','banner_slide_home');?>

<!--FP CALLOUT/CONTENT-->
<section id="fp_callouts">
	<div class="inner">
		<div class="content-wrap">
                <h1><?php the_field('seo-h1');?></h1>
                <?php the_content();?>
        </div>
	<?php if(have_rows('fp_callout')):?>
		<div class="callout-wrap">
			<div class="section-title">
				<h2>Services</h2>
			</div>
			<div class="itembox-wrap">
 			<?php while( have_rows('fp_callout')): the_row();?>
    			<div class="itembox">
					<img src="<?php the_sub_field('fp_callout_image');?>"/>
				<a href="<?php the_sub_field('fp_callout_link');?>">
					<div class="overlay">
						<div class="centerbox">
							<div class="title">
								<h2><?php the_sub_field('fp_callout_title');?></h2>
							</div>
						</div>
					</div>
				</a>
				</div>
			<?php endwhile;?>
		    </div>
		</div>
	<?php endif;?>
	</div>
</section>
<!---FP TOP 50--->
<section id="fp_top50" class="fifty_split">
        <div class="inner">
			<div class="leftside">
				<div class="contentwrap">
					<div class="title">
						<h2><?php the_field('fp_top50_title');?></h2>
					</div>
                    <div class="textwrap">
                        <?php the_field('fp_top50_content');?>
                    </div>
					<div class="buttonwrap">
						<a class="button more-link" href="<?php the_field('fp_top50_link');?>">
							<p><?php the_field('fp_top50_label');?></p>
						</a>
					</div>
				</div>
            </div>
            <div class="rightside">
				<div class="centerbox">
					<img src="<?php the_field('fp_top50_img');?>" sizes="(max-width: 1125px) 100vw, 700px">
				</div>
			</div>
		</div>
</section>
<!---FP PROJECT SECTION--->
<?php get_template_part('includes/section','global_project');?>
<!---FP CONTACT SECTION--->
<?php get_template_part('includes/section','global_contact');?>

<?php get_footer('menu');?>
<?php get_footer();?>