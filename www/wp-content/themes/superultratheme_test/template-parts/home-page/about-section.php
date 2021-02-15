<?php
// Check value exists.
if (have_rows('ss_ab_content')):
    // Loop through rows.
    while (have_rows('ss_ab_content')) : the_row();
        // Case: Paragraph layout.
        if (get_row_layout() == 'ss_ab_container'):
            $ab_tit = get_sub_field('section_subtitle');
            $ab_wi_tit = get_sub_field('widget_title');
            $ab_con = get_sub_field('featured_page_content');
            $ab_btn = get_sub_field('button_readmore');
            $ab_img = get_sub_field('ss_ab_image');
        endif;
        // End loop.
    endwhile;
// No value.
else :
    // Do something...
endif; ?>
<section class="about-section">
    <div class="container">
        <section class="widget widget_raratheme_featured_page_widget">
            <div class="widget-featured-holder right">
                <p class="section-subtitle">
                    <span><?php echo $ab_tit; ?></span>
                </p>
                <div class="text-holder">
                    <h2 class="widget-title"><?php echo $ab_wi_tit; ?></h2>
                    <div class="featured_page_content">
                        <?php echo $ab_con;
                        if ($ab_btn):
                            $link_url = $ab_btn['url'];
                            $link_title = $ab_btn['title'];
                            $link_target = $ab_btn['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="btn-readmore" href="<?php echo esc_url($link_url); ?>"
                               target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="img-holder">
                    <a target="_blank" href="#">
                        <?php
                        if (!empty($ab_img)): ?>
                            <img src="<?php echo esc_url($ab_img['url']); ?>"
                                 alt="<?php echo esc_attr($ab_img['alt']); ?>"/>
                        <?php endif; ?>
                    </a>
                </div>
            </div>
        </section>
    </div>
</section> <!-- .about-section -->