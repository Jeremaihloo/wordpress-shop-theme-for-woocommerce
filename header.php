<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<!-- head -->
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/><![endif]-->
	<title><?php wp_title(' | ', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="keywords" content="<?php echo of_get_option('metakeywords'); ?>" />
	<meta name="description" content="<?php echo of_get_option('metadescription'); ?>" />

	<!-- stylesheet -->
	<link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url'); ?>"/>

    <!--    my private-->
	   	  <link rel="stylesheet" type="text/css" href="http://apps.bdimg.com/libs/blendui/2.0-alpha/blendui.min.css" />
<link rel"stylesheet" type="text/css" href="<?php echo ( bloginfo('template_url') . '/ui-blend.css' );?>" />
  <script src="<?php echo ( bloginfo('template_url') . '/ui-blend.js' );?>"></script>
<!--	-->
	<!-- stylesheet -->


    <!-- custom typography-->
    <?php if(of_get_option('customtypography') == '1') { ?>
		<?php if(of_get_option('headingfontlink') != '') { ?>
			<?php echo stripslashes(html_entity_decode(of_get_option('headingfontlink')));?>
		<?php } ?>

	    <?php load_template( get_template_directory() . '/custom.typography.css.php' );?>

	<?php } ?>
	<!-- custom typography -->



<!-- wp_head -->
<?php wp_head(); ?>
<!-- wp_head -->

</head>
<!-- head -->

	<body >
		<!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
    	<?php if ( has_nav_menu( 'main_nav' ) ) {?>
            <div id="small-screens-menu" class="block">
                <a href="#" enu-button"><strong><?php _e(":::: MENU ::::", "site5framework"); ?></strong></a>
                <?php  site5_main_nav('nav',''); ?>
            </div>
        <?php }?>

	<!-- #page -->
	<div id="page">
		<div class="header-container">
			<div class="radial_gradient">
           <header class=" clearfix">
           		<div class="top wrapper">
	                <!-- .top-menu-container -->
			        <div class="top-menu-container">
				        <nav>
							<div id="top-menu">
							<?php  site5_main_nav(false,'sf-menu'); ?>
							</div>
						</nav>
					</div>
           		</div>
           </header>
        </div>

		<!-- .main-container -->
		<div class="main-container">


			<div class="main wrapper clearfix">
