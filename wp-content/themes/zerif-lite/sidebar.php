<?php
/**
 * The Sidebar containing the main widget areas.
 */
?>

<?php zerif_before_sidebar_trigger(); ?>

	<div id="secondary" class="widget-area" role="complementary">

		<?php zerif_top_sidebar_trigger(); ?>

		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<!--<aside id="search" class="widget widget_search">

				<?php //get_search_form(); ?>

			</aside>

			<aside id="archives" class="widget">

				<h2 class="widget-title"><?php _e( 'Archives', 'zerif-lite' ); ?></h2>
				<ul>
					<?php //wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>

			</aside> -->

			<!--<aside id="meta" class="widget">

				<h2 class="widget-title"><?php //_e( 'Meta', 'zerif-lite' ); ?></h2>

				<ul>
					<?php //wp_register(); ?>
					<li><?php //wp_loginout(); ?></li>
					<?php //wp_meta(); ?>
				</ul>

			</aside> -->



			<!-- 我自定义的内容 -->
			
				<div id="secondary" class="widget-area" role="complementary" style="min-height:750px;">
					<div style="clear:both;"></div>
					<div style="padding:10px 0;border-bottom:1px solid rgba(0, 0, 0, 0.05);"><a href="/?page_id=12"  style="color:#808080;">公司动态</a></div>
			<div style="padding:10px 0;border-bottom:1px solid rgba(0, 0, 0, 0.05);"><a href="#zuzhijiagou" style="color:#808080;">行业讯息</a></div>

		<br/>
 			<a href="/?page_id=115" ><img src="/wp-content/uploads/2016/09/1.jpg"> </a> 

		<img src="/wp-content/uploads/2016/09/2.jpg" style="margin-top:20px;">
		</div><!-- #secondary -->
		

		<!-- end ------- -->

		<?php endif; ?>

		<?php zerif_bottom_sidebar_trigger(); ?>

	</div><!-- #secondary -->

	<?php zerif_after_sidebar_trigger(); ?>