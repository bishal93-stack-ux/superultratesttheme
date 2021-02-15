<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package superultratheme_test
 */
?>
        <main id="main" class="site-main">
                    <article class="post">
                        <figure class="post-thumbnail">
                            <a href="#"><img src="<?php  echo get_the_post_thumbnail_url();?>" alt=""></a>
                        </figure>
                        <div class="post-content-wrap">
                            <header class="entry-header">
                                <div class="entry-meta">
										<span class="posted-on" itemprop="datePublished">
											<a href="#">
												<time datetime="2017-12-21"><?php the_time('M j, Y'); ?></time>
                                            </a>
										</span>
                                    <span class="category">
											<a href="#"><?php the_category(',');?></a>
										</span>
                                </div>
                                <h2 class="entry-title" itemprop="headline">
                                    <a href="#"><?php the_title();?></a>
                                </h2>
                            </header>
                            <div class="entry-content">
                                <?php the_excerpt();?>
                            </div>
                            <footer class="entry-footer">
                                <a href="#" class="btn-readmore">Continue Reading</a>
                            </footer>
                        </div>
                    </article>
        </main> <!-- .site-main -->


