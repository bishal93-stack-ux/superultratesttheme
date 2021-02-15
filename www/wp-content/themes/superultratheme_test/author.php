<?php
get_header();
?>
    <div id="content" class="site-content">
    <div class="container">
        <div id="primary" class="content-area">
            <header class="page-header">
                <div class="author-img">
                    <?php echo get_avatar(get_the_author_meta(''), 'author-thumb'); ?>
                </div>
                <div class="author-content-wrap">
                    <h1 class="page-title">
                        <?php
                        $aut_name = get_the_author_meta('display_name');
                        $aut_desc = get_the_author_meta('description');
                        ?>
                        <span class="sub-title">All Posts By</span><?php echo $aut_name; ?>
                    </h1>
                    <div class="author-desc">
                        <?php echo $aut_desc; ?>
                    </div>
                    <ul class="social-list">
                        <?php
                        // Check rows exists.
                        if (have_rows('social_media_details', 'option')):
                            // Loop through rows.
                            while (have_rows('social_media_details', 'option')) : the_row();
                                // Load sub field value.
                                $so_med_name = get_sub_field('social_media_name');
                                $ico_link = get_sub_field('icon_link');
                                // Do something...?>
                                <li><a data-title="<?php echo $so_med_name; ?>" href="#"><i
                                                class="fab <?php echo $ico_link; ?>"></i></a></li>
                            <?php // End loop.
                            endwhile;
// No value.
                        else :
                            // Do something...
                        endif; ?>
                    </ul>
                </div>
            </header>
            <div class="showing-result">
                Showing: 1 - 10 of 391 RESULTS
            </div>
            <?php
            global $post;
            $author_id = $post->post_author;
            $args = array('author' => $author_id);

            // The Query
            $the_query = new WP_Query($args);

            // The Loop
            if ($the_query->have_posts()) {
            echo '   <main id="main" class="site-main">';
            while ($the_query->have_posts()) {
            $the_query->the_post(); ?>
            <article class="post">
                <figure class="post-thumbnail">
                    <a href="#"><img src="<?php the_post_thumbnail('author-post'); ?></a>
                        </figure>
                        <div class=" post-content-wrap">
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
                            <a href="<?php the_permalink(); ?>" class="btn-readmore">Continue Reading</a>
                        </footer>
        </div>
        </article>
        <?php
        }
        echo '</main>';
        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata(); ?>
        <?php get_template_part('template-parts/nav-page/nav', 'page'); ?>
    </div> <!-- #primary -->



<?php
get_sidebar();
get_template_part('template-parts/home-page/newsletter', 'section');
get_footer(); ?>