<?php
/**
 * Template Name: 公司动态模板.
 */
get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->

<?php
	zerif_after_header_trigger();
	$zerif_change_to_full_width = get_theme_mod( 'zerif_change_to_full_width' );
?>

<div id="content" class="site-content">

	<div class="container">

		<?php zerif_before_page_content_trigger(); ?>
		<?php
			if( (function_exists('is_cart') && is_cart()) || (function_exists('is_account_page') && is_account_page()) || (function_exists('is_checkout') && is_checkout() ) || !empty($zerif_change_to_full_width) ) {
				echo '<div class="content-left-wrap col-md-12">';
			}
			else {
				echo '<div class="content-left-wrap col-md-9">';
			}
		?>
		<?php zerif_top_page_content_trigger(); ?>
		<div id="primary" class="content-area">

			<main itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" id="main" class="site-main">

				
			<?php

			    query_posts( 'showposts=100&cat=5' );
				
			?>

			<div>
			        <?php while ( have_posts() ) { the_post(); ?>
			        <dl class="dl-horizontal" style="margin-bottom: 20px; min-height:150px;">
			        	<dt>
			        		<?php if ( has_post_thumbnail()) : ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
									<!--<img src="<?php the_permalink(); ?>" style="width:180;height:auto;"  title="<?php the_title_attribute(); ?>">-->
									<?php the_post_thumbnail("post-thumbnail"); ?>
								</a>
							<?php endif ?>
			        	</dt>
			        	<dd>
							<div class="text-left">
						        	<header style="color: #404040;">
									<a href="<?php the_permalink(); ?>" style="color: #404040; font-weight: 700;font-size:25px;"><?php the_title(); ?></a>
								</header>
								<p style="color:#999;font-size:14px;">发布: <?php the_time( 'Y-n-d' ); ?></p>
								<p>
									<?php echo wp_trim_words(get_the_content(), 50 ); ?> 
									<a class="btn btn-link" href="<?php the_permalink(); ?>">查看更多</a>

								</p>
							</div>
						</dd>
					</dl>
			        <?php } wp_reset_query(); ?>
			</div>
	
			</main><!-- #main -->

		</div><!-- #primary -->


	<?php
		/*if( (function_exists('is_cart') && is_cart()) || (function_exists('is_account_page') && is_account_page()) || (function_exists('is_checkout') && is_checkout() ) || !empty($zerif_change_to_full_width) ) {
			zerif_bottom_page_content_trigger();
			echo '</div>';
			zerif_after_page_content_trigger();
		}
		else {
			zerif_bottom_page_content_trigger();
			echo '</div>';
			zerif_after_page_content_trigger();
			zerif_sidebar_trigger();
		}*/
		?>	


	<!-- 我自定义的内容 -->
	</div>
	<div class="sidebar-wrap col-md-3 content-left-wrap" style="height:740px;">
		<div id="secondary" class="widget-area" role="complementary">
			<div style="clear:both;"></div>
			<div style="padding:10px 0;border-bottom:1px solid rgba(0, 0, 0, 0.05);"><a href="/?page_id=12"  style="color:#808080;">公司动态</a></div>
<div style="padding:10px 0;border-bottom:1px solid rgba(0, 0, 0, 0.05);"><a href="#zuzhijiagou" style="color:#808080;">行业讯息</a></div>

<br/>
 <a href="/?page_id=115" ><img src="/wp-content/uploads/2016/09/1.jpg"> </a>

<img src="/wp-content/uploads/2016/09/2.jpg" style="margin-top:20px;">
		</div><!-- #secondary -->
	</div>

	<!-- end ------- -->
	</div><!-- .container -->

<?php get_footer(); ?>