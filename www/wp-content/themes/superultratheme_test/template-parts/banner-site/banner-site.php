<?php if( have_rows('banner_section') ):
while ( have_rows('banner_section') ) : the_row();
// Case: Content layout
if( get_row_layout() == 'ss_bs_content' ):
$ss_intrinsic = get_sub_field('ss_intrinsic_image');
$bs_tit = get_sub_field('ss_bs_title');
$bs_desc = get_sub_field('ss_bs_description');
$bs_img = get_sub_field('ss_bs_image');
endif;
// End loop.
endwhile;
// No value.
endif;?>
    <div class="site-banner">
        <div class="banner-item">
            <?php
            if( !empty( $ss_intrinsic ) ): ?>
                <img src="<?php echo esc_url($ss_intrinsic['url']); ?>" alt="<?php echo esc_attr($ss_intrinsic['alt']); ?>" />
            <?php endif; ?>
            <div class="banner-caption center">
                <div class="container">
                    <h1 class="title">
                        <a href="#"><?php echo $bs_tit;?></a>
                    </h1>
                    <div class="item-desc">
                      <?php echo $bs_desc;
                        if( !empty( $bs_img ) ): ?>
                        <img src="<?php echo esc_url($bs_img['url']); ?>" alt="<?php echo esc_attr($bs_img['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .site-banner -->


