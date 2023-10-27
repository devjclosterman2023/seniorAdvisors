<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<header id="masthead" class="site-header">
		
		<a href="/" style="color:#021d5e;" class="homelogo">Senior Advisors of the East Valley</a>

		<div class="desktopnav">
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', '_s' ); ?></button>
			
			
		
			
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			</div> 

    <div class="mobilenav"> 
		<div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="/who-are-we">Who Are We?</a>
	        <a href="/services">Services</a>
            <a href="/medicare-plans">Medicare Plans</a>
            <a href="medicaid-long-term-care">Medicaid/Long Term Care</a>
	        <a href="crisis-management">Crisis Management</a>
	    </div>
	    <span onclick="openNav()" id="myunicode">☰</span>
    </div>



		</nav><!-- #site-navigation -->
     <a href="contact-us" class="freeconst">Request a Free Consultation</a>
			<a href="tel:(602)-878-4108" class='phoneicon'><i class="fa-solid fa-phone-flip phonelink"></i></a>
	
			</div>


</header><!-- #masthead -->
