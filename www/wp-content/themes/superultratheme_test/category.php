<?php get_header();?>
<div id="content" class="site-content">
    <div class="container">
        <div id="primary" class="content-area">
            <header class="page-header">
                <h1 class="page-title">
                    <?php
                    $current_category = get_category( get_query_var( 'cat' ), false );
                    $the_query = new WP_Query( array( 'cat' => $current_category->term_id ) );
                    ?>
                    <span class="sub-title">Category</span><?php  echo $current_category->name;  ?>
                </h1>
                <span class="total-result">391 Results</span>
            </header>
            <div class="showing-result">
                Showing: 1 - 10 of 391 RESULTS
            </div>
            <?php   if ($the_query->have_posts()) { ?>
            <main id="main" class="site-main">
                <?php   while ($the_query->have_posts()) {   $the_query->the_post();?>
                <article class="post">
                    <figure class="post-thumbnail">
                        <a href="#"><img src="<?php  the_post_thumbnail('author-post');?> </a>
                    </figure>
                    <div class="post-content-wrap">
                        <header class="entry-header">
                            <div class="entry-meta">
										<span class="posted-on" itemprop="datePublished">
											<a href="#">
												<time datetime="2017-12-21"><?php the_time('M j, Y'); ?></time></time>
											</a>
										</span>
                                <span class="category">
										<?php the_category(','); ?>
										</span>
                            </div>
                            <h2 class="entry-title" itemprop="headline">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                        </header>
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>
                        <footer class="entry-footer">
                            <a href="<?php the_permalink(); ?>" class="btn-readmore">Continue Reading</a>
                        </footer>
                    </div>
                </article>
        <?php } ?>
            </main> <!-- .site-main -->
    <?php }   wp_reset_postdata(); ?>
            <?php get_template_part('template-parts/nav-page/nav', 'page'); ?>
        </div> <!-- #primary -->



        <?php
        get_sidebar();
        get_template_part('template-parts/home-page/newsletter', 'section');
        get_footer(); ?>
