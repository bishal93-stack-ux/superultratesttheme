<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package superultratheme_test
 */
?>
<!doctype html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php wp_head();?>
</head>
<body class="home rightsidebar archive category rightsidebar list-view">
<div id="page" class="site">
    <header class="site-header">
        <div class="container">
            <div class="menu-toggle">
                <span class="toggle-bar"></span>
                <span class="toggle-bar"></span>
                <span class="toggle-bar"></span>
            </div>
            <div class="site-branding logo-text">
                <div class="site-logo">
                    <a href="index.html" title="Super Ultra Theme">
                        <img src="<?php echo home_url().'/media/site-logo.png'?>" alt="super ultra theme">
                    </a>
                </div>
                <div class="site-text-wrap">
                    <h1 class="site-title">
                        <a href="index.html" title="Super Ultra Theme">SuperUltraTheme</a>
                    </h1>
                    <p class="site-description">Just Another WordPress Theme</p>
                </div>
            </div> <!-- .site-branding -->
            <div class="menu-wrap">
                <nav class="main-navigation">
                    <button class="menu-toggle">
                        <span class="toggle-bar"></span>
                        <span class="toggle-bar"></span>
                        <span class="toggle-bar"></span>
                    </button>

                    <?php
				wp_nav_menu(array(
					'theme_location'  => 'nav-pri',
					'depth'	          => 3, // 1 = no dropdowns, 2 = with dropdowns.
					'container'       => '',
					'menu_class' => 'nav-menu',
				));
				?>
                    <?php /*?>
                    <ul class="nav-menu">
                        <li class="current-menu-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Services</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Child Menu One</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Child Menu Two</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">Grandchild Menu One</a>
                                        </li>
                                        <li>
                                            <a href="#">Grandchild Menu Two</a>
                                        </li>
                                        <li>
                                            <a href="#">Grandchild Menu Three</a>
                                        </li>
                                        <li>
                                            <a href="#">Grandchild Menu Four</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Child Menu Three</a>
                                </li>
                                <li>
                                    <a href="#">Child Menu Four</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Contact</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Child Menu One</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Child Menu Two</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">Grandchild Menu One</a>
                                        </li>
                                        <li>
                                            <a href="#">Grandchild Menu Two</a>
                                        </li>
                                        <li>
                                            <a href="#">Grandchild Menu Three</a>
                                        </li>
                                        <li>
                                            <a href="#">Grandchild Menu Four</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Child Menu Three</a>
                                </li>
                                <li>
                                    <a href="#">Child Menu Four</a>
                                </li>
                            </ul>
                        </li>
                    </ul><?php */?>
                </nav>
                <div class="header-search">
						<span class="search-toggle">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18"><defs><style>.a{fill:none;}</style></defs><g transform="translate(83 -7842)"><rect class="a" width="18" height="18" transform="translate(-83 7842)"/><path d="M18,16.415l-3.736-3.736a7.751,7.751,0,0,0,1.585-4.755A7.876,7.876,0,0,0,7.925,0,7.876,7.876,0,0,0,0,7.925a7.876,7.876,0,0,0,7.925,7.925,7.751,7.751,0,0,0,4.755-1.585L16.415,18ZM2.264,7.925a5.605,5.605,0,0,1,5.66-5.66,5.605,5.605,0,0,1,5.66,5.66,5.605,5.605,0,0,1-5.66,5.66A5.605,5.605,0,0,1,2.264,7.925Z" transform="translate(-83 7842)"/></g></svg>
						</span>
                    <div class="header-search-form " style="display: none;">
                        <div class="container">
                            <form role="search" method="get" class="search-form" action="">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input class="search-field" placeholder="Search anything and hit enter" value="" name="s" type="search">
                                </label>
                                <input class="search-submit" value="Search" type="submit">
                            </form>
                            <span class="close"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> <!-- .site-header -->
