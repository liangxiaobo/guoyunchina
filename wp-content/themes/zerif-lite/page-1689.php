<?php 
	/*
		Template Name: page 模板读取文章列表的测试
	*/
?>
<?php

get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->
<?php zerif_after_header_trigger(); ?>

my frist test page!

<?php

    query_posts( 'showposts=10&cat=5,6' );
	
?>

    <ul class="sitemap-list">
        <?php while ( have_posts() ) { the_post(); ?>

        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	<li>
		<?php the_content(); ?>
<?php the_time( 'Y-n-d H:i:s' ); ?>
	</li>
		<?php if ( has_post_thumbnail()) : ?>
		
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >

				<?php the_post_thumbnail("post-thumbnail"); ?>

			</a>
		
		<?php endif ?>


        <?php } wp_reset_query(); ?>
    </ul>


<?php get_footer(); ?>
