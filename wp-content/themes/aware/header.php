<?php
/**
 * The Theme Header
 * @package WordPress
 * @subpackage Bookcase
 * @since Bookcase 1.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="<?php language_attributes(); ?>"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="<?php language_attributes(); ?>"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="<?php language_attributes(); ?>"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<?php
global $browser;
$browser = $_SERVER['HTTP_USER_AGENT'];
?>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
<?php 
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'ellipsis' ), max( $paged, $page ) );

	?>
</title>
<?php if ($cyrillic = get_option('of_cyrillic_chars') ) :
		if ($cyrillic == 'Yes') : ?>
<!-- Embed Google Web Fonts Via API -->
<script type="text/javascript">
      WebFontConfig = {
        google: { families: [ '<?php if ( $h1font = get_option('of_heading_font') ) { echo $h1font . '::cyrillic,latin'; } else { echo 'Open Sans'; $h1font = 'Open Sans::cyrillic,latin';} ?>', '<?php if ( $h2font = get_option('of_secondary_font') ) { echo $h2font . '::cyrillic,latin'; } else { echo 'Open Sans::cyrillic,latin'; $h2font = 'Open Sans';} ?>', '<?php if ( $pfont = get_option('of_p_font') ) { echo $pfont . '::cyrillic,latin'; } else { echo 'Open Sans::cyrillic,latin'; $pfont = 'Open Sans';} ?>', '<?php if ( $tinyfont = get_option('of_tiny_font') ) { echo $tinyfont . '::cyrillic,latin'; } else { echo 'Droid Serif::cyrillic,latin'; $navfont = 'Droid Serif';} ?>'] }
      };
      (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })();
    </script>
    <?php else : ?>
    <!-- Embed Google Web Fonts Via API -->
<script type="text/javascript">
      WebFontConfig = {
        google: { families: [ '<?php if ( $h1font = get_option('of_heading_font') ) { echo $h1font; } else { echo 'Open Sans'; $h1font = 'Open Sans';} ?>', '<?php if ( $h2font = get_option('of_secondary_font') ) { echo $h2font; } else { echo 'Open Sans'; $h2font = 'Open Sans';} ?>', '<?php if ( $pfont = get_option('of_p_font') ) { echo $pfont; } else { echo 'Open Sans'; $pfont = 'Open Sans';} ?>', '<?php if ( $tinyfont = get_option('of_tiny_font') ) { echo $tinyfont; } else { echo 'Droid Serif'; $navfont = 'Droid Serif';} ?>'] }
      };
      (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })();
    </script>
    
    <?php endif; else : ?>
	    <!-- Embed Google Web Fonts Via API -->
<script type="text/javascript">
      WebFontConfig = {
        google: { families: [ '<?php if ( $h1font = get_option('of_heading_font') ) { echo $h1font; } else { echo 'Open Sans'; $h1font = 'Open Sans';} ?>', '<?php if ( $h2font = get_option('of_secondary_font') ) { echo $h2font; } else { echo 'Open Sans'; $h2font = 'Open Sans';} ?>', '<?php if ( $pfont = get_option('of_p_font') ) { echo $pfont; } else { echo 'Open Sans'; $pfont = 'Open Sans';} ?>', '<?php if ( $tinyfont = get_option('of_tiny_font') ) { echo $tinyfont; } else { echo 'Droid Serif'; $navfont = 'Droid Serif';} ?>'] }
      };
      (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })();
    </script>
	
	<?php endif ?>
<!-- Embed Google Web Fonts Via API -->
<?php if ($themeskin = get_option('of_theme_skin') ) { if ($themeskin == 'Dark') { ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/dark.css" rel="stylesheet" type="text/css" media="all" />
<?php } elseif ($themeskin == 'Light') { ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/light.css" rel="stylesheet" type="text/css" media="all" />
<?php } } else { ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/light.css" rel="stylesheet" type="text/css" media="all" />
<?php } ?>
<!--Skin -->

<link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" type="text/css" media="all" />
<!--Site Layout -->

<?php wp_head(); ?>
<!-- User-Defined Styles -->
<link rel="stylesheet" href="<?php echo home_url();?>/index.php?ag_custom_var=css" type="text/css" />
<!-- User-Defined Styles -->

<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

</head>
<body <?php body_class(); ?>>
<div class="sitecontainer">
<noscript>
<div class="alert">
<p><?php _e('Please enable javascript to view this site.', 'framework'); ?></p>
</div>
</noscript>

<!-- Preload Images
	================================================== -->
<div id="preloaded-images"> <img src="<?php echo get_template_directory_uri();?>/images/downarrow.png" width="1" height="1" alt="Image" />
<img src="<?php echo get_template_directory_uri();?>/images/loading.gif" width="1" height="1" alt="Image" />
<img src="<?php echo get_template_directory_uri();?>/images/horizontal-loading.gif" width="1" height="1" alt="Image" />
<img src="<?php echo get_template_directory_uri();?>/images/loading-dark.gif" width="1" height="1" alt="Image" />
<img src="<?php echo get_template_directory_uri();?>/images/horizontal-loading-dark.gif" width="1" height="1" alt="Image" />
</div>
<!-- Primary Page Layout
	================================================== -->

<?php $topbar = get_option('of_top_bar');
if($topbar == 'On') : ?>

<div id="top_panel">
    <div id="top_panel_content" class="container clearfix">
        <?php include (TEMPLATEPATH . '/template-top-panel.php'); ?>
    </div>
    <div id="top_panel_button">
        <div id="toggle_button" class="uparrow"></div>
    </div>
    <div class="clear"></div>
</div>

<?php endif; ?>

<div class="container clearfix navcontainer">
    <div class="three columns fadeInDown animated logo">
        <h1> <a href="<?php echo home_url(); ?>">
            <?php if ( $logo = get_option('of_logo') ) { ?>
            <img src="<?php echo $logo; ?>" alt="<?php bloginfo( 'name' ); ?>" />
            <?php } else { bloginfo( 'name' );} ?>
            </a> </h1>
    </div>
    <div class="thirteen columns fadeInDown animated">
        <!--Start Navigation-->
        <div class="nav">
            <?php if ( has_nav_menu( 'top_nav_menu' ) ) { /* if menu location 'Top Navigation Menu' exists then use custom menu */ ?>
            <?php wp_nav_menu( array('menu' => 'Top Navigation Menu', 'theme_location' => 'top_nav_menu', 'menu_class' => 'sf-menu')); ?>
            <?php } else { /* else use wp_list_pages */?>
            <ul class="sf-menu">
                <?php wp_list_pages( array('title_li' => '','sort_column' => 'menu_order')); ?>
            </ul>
            <?php } ?>
        </div>
        <?php  // Mobile Version Dropdown Menu

			$menu_name = 'top_nav_menu';
		
			if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
			$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
		
			$menu_items = wp_get_nav_menu_items($menu->term_id);
		
			$menu_list = '<select id="' . $menu_name . '" class="dropdownmenu" onchange="if(this.options[this.selectedIndex].value != &#39;&#39;){window.top.location.href=this.options[this.selectedIndex].value}">';
			
			$menutext = get_option('of_menu_text');
			if ($menutext == ''){ $menutext = 'Navigation'; }
			
			$menu_list .= '<option>'. $menutext .'</option>';
			
			foreach ( (array) $menu_items as $key => $menu_item ) {
				$title = $menu_item->title;
				$url = $menu_item->url;
				$menu_list .= '<option value="'. $url .'">' . $title . '</option>';
			}
			$menu_list .= '</select>';
			} else {
			$menu_list = '<select class="dropdownmenu"><option>Menu "' . $menu_name . '" not defined.</option></select>';
			}
	 
	 	echo $menu_list;
		
		 ?>
        <!--End Navigation-->
    </div>
    <div class="clear"></div>
    <div class="sixteen columns">
        <div class="divider nomargin"></div>
    </div>
    <div class="clear"></div>
</div>
<div class="top"> <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/scroll-top.png" alt="Scroll to Top"/></a>
    <div class="clear"></div>
    <div class="scroll">
        <p>
            <?php _e('To Top', 'framework'); ?>
        </p>
    </div>
</div>
<!-- Start Mainbody
  ================================================== -->
<div class="mainbody">