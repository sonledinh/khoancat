<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package khoancat
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> style="margin-top: 0 !important;">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<style>
    #wpadminbar {display: none;}
</style>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="logo"><a href=""><img src="<?php echo __BASE_URL__ ?>/images/logo.png" class="img-fluid" alt=""></a></div>
                </div>
                <div class="col-md-9">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                            )
                        );
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mobile" style="display: none;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="logo"><a href=""><img src="<?php echo __BASE_URL__ ?>/images/logo.png" class="img-fluid" alt=""></a></div>
                </div>
                <div class="col-6">
                    <div class="header text-right">
                        <a title="" href="#menu"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <nav id="menu">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    )
                );
            ?>
        </nav>
    </div>
</header>