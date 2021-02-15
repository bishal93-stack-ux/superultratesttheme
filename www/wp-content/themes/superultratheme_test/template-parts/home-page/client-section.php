<?php
// Check value exists.
if (have_rows('content_client_section')):
    // Loop through rows.
    while (have_rows('content_client_section')) : the_row();
        // Case: Paragraph layout.
        if (get_row_layout() == 'client_logo_layout'):
            $cs_wi_tit = get_sub_field('cs_wid_tit');
            $cs_gal= get_sub_field('client_logo_gallery');
        endif;
        // End loop.
    endwhile;
// No value.
else :
    // Do something...
endif; ?>
<section class="client-section">
    <div class="container">
        <section class="widget widget_raratheme_client_logo_widget">
            <div class="raratheme-client-logo-holder">
                <div class="raratheme-client-logo-inner-holder">
                    <h2 class="widget-title" itemprop="name"><?php   echo $cs_wi_tit; ?></h2>
                   <?php    if ($cs_gal): ?>
            <?php endif; ?>
                    <div class="image-holder-wrap"> <!-- yo wrap plugin ko filter bata rakhnu parxa -->
                        <?php foreach ($cs_gal as $image): ?>
                        <div class="image-holder black-white">
                            <a href="<?php echo esc_url($image['url']); ?>">
                                <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>"/>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section> <!-- .client-section -->