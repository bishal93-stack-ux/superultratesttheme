<?php
// Check value exists.
if (have_rows('page_header')):
    // Loop through rows.
    while (have_rows('page_header')) : the_row();
        // Case: Paragraph layout.
        if (get_row_layout() == 'blog_container'):
            $bs_tit = get_sub_field('page_title');
            $bs_des = get_sub_field('page_desc');
            // Do something...
        endif;
        // End loop.
    endwhile;
// No value.
else :
    // Do something...
endif; ?>
<div id="content" class="site-content">
    <header class="page-header">
        <div class="container">
            <h1 class="page-title"><?php echo $bs_tit; ?></h1>
            <div class="page-desc">
                <?php echo $bs_des; ?>
            </div>
        </div>
    </header>
    <div class="container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'post_status' => 'publish'
                );
                $query = new WP_Query($args);
                if ($query->have_posts()):
                while ($query->have_posts()):$query->the_post();
                ?>
                <article class="post">
                    <figure class="post-thumbnail">
                        <a href="#"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
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
											<a href="#"><?php the_category(','); ?></a>
										</span>
                            </div>
                            <h2 class="entry-title" itemprop="headline">
                                <a href="#"><?php the_title(); ?></a>
                            </h2>
                        </header>
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>
                        <footer class="entry-footer">
                            <a href="<?php the_permalink();?>" class="btn-readmore">Continue Reading</a>
                        </footer>
                    </div>
                </article>
                <?php
                endwhile;
                endif;
                ?>
            </main> <!-- .site-main -->
           <?php get_template_part('template-parts/nav-page/nav', 'page');  ?>
        </div> <!-- #primary -->
       <?php  get_sidebar(); ?>


