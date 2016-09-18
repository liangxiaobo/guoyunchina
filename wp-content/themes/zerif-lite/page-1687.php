<?php
/**
 * Template Name: 关于国蕴的模板.
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

				<?php while ( have_posts() ) : the_post(); 
				
						get_template_part( 'content', 'page' );

						if ( comments_open() || '0' != get_comments_number() ) :

							comments_template();

						endif;

					endwhile; 
				?>

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
			<div style="padding:10px 0;border-bottom:1px solid rgba(0, 0, 0, 0.05);"><a href="#gongsijianjie"  style="color:#808080;">公司简介</a></div>
<div style="padding:10px 0;border-bottom:1px solid rgba(0, 0, 0, 0.05);"><a href="#zuzhijiagou" style="color:#808080;">组织架构</a></div>
<div style="padding:10px 0;border-bottom:1px solid rgba(0, 0, 0, 0.05);"><a href="#qiyewenhua" style="color:#808080;">企业文化</a></div>
<br/>
<!-- <img src="/wp-content/uploads/2016/09/1.jpg"> -->
<img src="/wp-content/uploads/2016/09/DetRightAdv01.jpg">
<img src="/wp-content/uploads/2016/09/DetRightAdv02.jpg" style="margin-top:20px;">

<img src="/wp-content/uploads/2016/09/2.jpg" style="margin-top:20px;">
		</div><!-- #secondary -->
	</div>

	<!-- end ------- -->
	</div><!-- .container -->

<?php get_footer(); ?>