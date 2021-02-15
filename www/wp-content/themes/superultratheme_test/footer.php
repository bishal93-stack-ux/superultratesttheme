<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package superultratheme_test
 */
?>
<?php
$tit = get_field('foo_ttile','option');
$foo_con = get_field('foo_content','option');
?>
<footer class="site-footer">
    <div class="top-footer">
        <div class="container">
            <div class="col">
                <section class="widget widget_text">
                    <h2 class="widget-title"><?php echo $tit;?></h2>
                    <div class="textwidget">
                        <?php echo $foo_con;?>
                    </div>
                </section>
            </div>
            <div class="col">
              <?php   dynamic_sidebar('sidebar-1'); ?>
            </div>
            <div class="col">
                <?php   dynamic_sidebar('sidebar-4'); ?>
            </div>
        </div>
    </div> <!-- .top-footer -->
    <div class="bottom-footer">
        <div class="container">
            <div class="copyright">
                <span>© 2018 <a href="#">Super Ultra Light</a> - All Rights Reserved. </span><a href="#" target="_blank"> Super Ultra Light</a> by Rara Themes. Powered by <a href="#" target="_blank">WordPress</a>. <a class="privacy-policy-link" href="#">Privacy Policy</a>
            </div>
            <div class="footer-social">
                <ul class="social-list">
                    <?php
// Check rows exists.
if( have_rows('social_media_details','option') ):
    // Loop through rows.
    while( have_rows('social_media_details','option') ) : the_row();
        // Load sub field value.
        $so_med_name = get_sub_field('social_media_name');
        $ico_link = get_sub_field('icon_link');
        // Do something...?>
                    <li><a data-title="<?php echo $so_med_name;?>" href="#"><i class="fab <?php echo $ico_link;?>"></i></a></li>
  <?php  // End loop.
    endwhile;
// No value.
else :
    // Do something...
endif;?>
                </ul>
            </div>
        </div>
    </div>
</footer> <!-- .site-footer -->
</body>
</html>
