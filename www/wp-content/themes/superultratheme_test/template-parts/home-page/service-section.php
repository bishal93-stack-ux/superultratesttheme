<?php
// Check value exists.
if (have_rows('content_service_section')):
    // Loop through rows.
    while (have_rows('content_service_section')) : the_row();
        // Case: Paragraph layout.
        if (get_row_layout() == 'service_section'):
            $ss_wi_tit = get_sub_field('ss_wi_tit');
            $ss_wi_text = get_sub_field('ss_widget_text'); ?>
            <section class="service-section">
                <div class="container">
                    <section class="widget widget_text">
                        <h2 class="widget-title"><?php echo $ss_wi_tit; ?></h2>
                        <div class="textwidget">
                            <?php echo $ss_wi_text; ?>
                        </div>
                    </section>
                    <?php

                    // Check rows exists.
                    if (have_rows('widget_block')):
                        $count = 0;
                        // Loop through rows.
                        while (have_rows('widget_block')) : the_row();
// Load sub field value.
                            $ss_r_wt = get_sub_field('wb_tit');
                            $ss_r_con = get_sub_field('wb_content');
                            $ss_r_btn = get_sub_field('wb_button');
                            $ss_r_img = get_sub_field('icon_image');
                            $ss_r_ico = get_sub_field('icon_link');
                            // Do something...
                            ?>
                            <section class="widget widget_rrtc_icon_text_widget">
                                <div class="rtc-itw-holder">
                                    <div class="rtc-itw-inner-holder">
                                        <div class="text-holder">
                                            <h2 class="widget-title" itemprop="name"><?php echo $ss_r_wt; ?></h2>
                                            <div class="content">
                                                <?php echo $ss_r_con; ?>
                                            </div>
                                            <?php
                                            if ($ss_r_btn):
                                                $link_url = $ss_r_btn['url'];
                                                $link_title = $ss_r_btn['title'];
                                                $link_target = $ss_r_btn['target'] ? $ss_r_btn['target'] : '_self';
                                                ?>
                                                <a class="btn-readmore" href="<?php echo esc_url($link_url); ?>"
                                                   target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                            <?php endif; ?>
                                        </div>
                                        <div class="icon-holder">
                                            <?php if ($count == 0): ?>
                                                <span class="<?php echo $ss_r_ico; ?>"></span>
                                            <?php else:
                                                ?>
                                                <?php
                                                if (!empty($ss_r_img)): ?>
                                                    <img src="<?php echo esc_url($ss_r_img['url']); ?>"
                                                         alt="<?php echo esc_attr($ss_r_img['alt']); ?>"/>
                                                <?php endif; ?>
                                            <?php
                                            endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <?php
                            $count++;
                            // End loop.
                        endwhile;
// No value.
                    else :
                        // Do something...
                    endif; ?>
                </div>
            </section> <!-- .service-section -->
        <?php
            // Do something...
        endif;
        // End loop.
    endwhile;
// No value.
else :
    // Do something...
endif; ?>

