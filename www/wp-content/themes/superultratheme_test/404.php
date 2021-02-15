<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package superultratheme_test
 */

get_header();
?>

    <div id="content" class="site-content">
        <div class="container">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="error-404 not-found">
                        <header class="page-header">
                            <h1 class="page-title">Uh-Oh...</h1>
                            <div class="page-desc">
                                The page you are looking for may have been moved, deleted, or possibly never existed.
                            </div>
                        </header>
                        <div class="page-content">
                            <div class="error-num">404</div>
                            <a class="bttn" href="index.html">Take me to the home page</a>
                            <form role="search" method="get" class="search-form" action="">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input class="search-field" placeholder="Try searching for what you were looking for..." value="" name="s" type="search">
                                </label>
                                <input class="search-submit" value="Search" type="submit">
                            </form>
                        </div><!-- .page-content -->
                    </section>
                </main> <!-- .site-main -->
            </div> <!-- #primary -->
        </div> <!-- .container -->
        <div class="additional-posts">
            <div class="container">
                <h3 class="title">
                    Recommended Articles
                </h3>
                <div class="block-wrap">
                    <div class="block clearfix">
                        <div class="entry-meta">
								<span class="posted-on" itemprop="datePublished">
									<a href="#">
										<time datetime="2017-12-21">Feb 18, 2018</time>
									</a>
								</span>
                        </div>
                        <header class="entry-header">
                            <h3 class="entry-title">
                                <a href="#">This Start-Up Will Actually Downsize Your Closet</a>
                            </h3>
                        </header><!-- .entry-header -->
                        <figure class="post-thumbnail">
                            <a href="#">
                                <img src="images/blog-img1.jpg" alt="">
                            </a>
                        </figure><!-- .post-thumbnail -->
                    </div>
                    <div class="block clearfix">
                        <div class="entry-meta">
								<span class="posted-on" itemprop="datePublished">
									<a href="#">
										<time datetime="2017-12-21">Feb 18, 2018</time>
									</a>
								</span>
                        </div>
                        <header class="entry-header">
                            <h3 class="entry-title">
                                <a href="#">Tesla Ramps Up Model 3 Production and Predicts Profitability</a>
                            </h3>
                        </header><!-- .entry-header -->
                        <figure class="post-thumbnail">
                            <a href="#">
                                <img src="images/blog-img2.jpg" alt="">
                            </a>
                        </figure><!-- .post-thumbnail -->
                    </div>
                    <div class="block clearfix">
                        <div class="entry-meta">
								<span class="posted-on" itemprop="datePublished">
									<a href="#">
										<time datetime="2017-12-21">Feb 18, 2018</time>
									</a>
								</span>
                        </div>
                        <header class="entry-header">
                            <h3 class="entry-title">
                                <a href="#">7 Off-Duty Outfits That Will Reinvent Your Spring Wardrobe</a>
                            </h3>
                        </header><!-- .entry-header -->
                        <figure class="post-thumbnail">
                            <a href="#">
                                <img src="images/blog-img3.jpg" alt="">
                            </a>
                        </figure><!-- .post-thumbnail -->
                    </div>
                </div><!-- .block-wrap -->
            </div>
        </div>
    </div> <!-- .site-content -->


<?php

get_footer();
