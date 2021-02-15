<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package superultratheme_test
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php get_template_part('template-parts/search','form') ;  ?>
	<!--section class="widget widget_archive">
		<h2 class="widget-title" itemprop="name">Archives</h2>
		<ul>
			<li><a href="#">February 2018</a>&nbsp;(2)</li>
			<li><a href="#">November 2017</a>&nbsp;(1)</li>
		</ul>
	</section-->
<?php
dynamic_sidebar('sidebar');
dynamic_sidebar('sidebar-1');
dynamic_sidebar('sidebar-2');
dynamic_sidebar('sidebar-3');
dynamic_sidebar('sidebar-4');
dynamic_sidebar('sidebar-5');
?>

	<!--section class="widget widget_categories">
		<h2 class="widget-title" itemprop="name">Categories</h2>
		<ul>
			<li class="cat-item"><a href="#">Entertainment</a> (1)</li>
			<li class="cat-item"><a href="#">Finance</a> (2)</li>
			<li class="cat-item"><a href="#">Politics</a> (2)</li>
			<li class="cat-item"><a href="#">Uncategorized</a> (3)</li>
		</ul>
	</section-->

	<!--section class="widget widget_pages">
		<h2 class="widget-title" itemprop="name">Pages</h2>
		<ul>
			<li class="page_item"><a href="#">About Us</a></li>
			<li class="page_item"><a href="#">CHECKOUT</a></li>
			<li class="page_item"><a href="#">Contact Us</a></li>
			<li class="page_item"><a href="#">Enquiry Thankyou Page</a></li>
			<li class="page_item"><a href="#">Our Team</a></li>
			<li class="page_item"><a href="#">Portfolio</a></li>
		</ul>
	</section-->

	<!--section class="widget widget_recent_comments">
		<h2 class="widget-title" itemprop="name">Recent Comments</h2>
		<ul>
			<li class="recentcomments">
								<span class="comment-author-link">
									<span itemprop="name">wordpress</span>
								</span> on
				<a href="#">Exploring Untravelled Destinations</a>
			</li>
			<li class="recentcomments">
								<span class="comment-author-link">
									<span itemprop="name">
										<a href="#" class="url" itemprop="url">A WordPress Commenter</a>
									</span>
								</span> on
				<a href="#">Hello world!</a>
			</li>
		</ul>
	</section-->

	<!--section class="widget widget_recent_entries">
		<h2 class="widget-title" itemprop="name">Recent Posts</h2>
		<ul>
			<li>
				<a href="#">Exploring Untravelled Destinations</a>
				<span class="post-date">February 12, 2018</span>
			</li>
			<li>
				<a href="#">This theme recommends the following plugins</a>
				<span class="post-date">February 12, 2018</span>
			</li>
			<li>
				<a href="#">Hello world!</a>
				<span class="post-date">November 22, 2017</span>
			</li>
		</ul>
	</section-->

	<!--section class="widget widget_tag_cloud">
		<h2 class="widget-title" itemprop="name">Tag Cloud</h2>
		<div class="tagcloud">
			<a href="#" class="tag-cloud-link" style="font-size: 8pt;">Entertainment<span class="tag-link-count"> (1)</span></a>
			<a href="#" class="tag-cloud-link" style="font-size: 16.4pt;">Finance<span class="tag-link-count"> (2)</span></a>
			<a href="#" class="tag-cloud-link" style="font-size: 16.4pt;">Politics<span class="tag-link-count"> (2)</span></a>
			<a href="#" class="tag-cloud-link" style="font-size: 22pt;">Uncategorized<span class="tag-link-count"> (3)</span></a>
		</div>
	</section-->
</aside> <!-- #secondary -->
</div> <!-- .container -->
</div> <!-- .site-content -->

