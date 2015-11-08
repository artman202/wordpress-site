<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="<?php echo get_template_directory_uri(); ?>/fonts.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<!-- Responsiveslides -->
	<!-- Bootstrap -->
	<link href="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<link href="<?php echo get_template_directory_uri(); ?>/lib/lightbox/css/lightbox.css" rel="stylesheet" />

	<?php wp_head(); ?>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/nivo-slider/nivo-slider.css" type="text/css" />

</head>
<script>
	// $(document).ready(function(){
	// 	function track (url) {
	// 		_gaq.push(['_trackPageview', '/' + url + '/'])
	// 	}
	// 	$(".menu-item a[onclick]").attr("onclick", track()
	// })	
</script>
<body <?php body_class(); ?>> 
	<?php include_once("analyticstracking.php") ?>
	<nav class="navbar navbar-default navbar-fixed-top original-bg " role="navigation">		  	
		<?php 
			$page_id = get_queried_object_id();
			if ($page_id == 0) {
				wp_nav_menu(
					array(
						'theme_location'  => '',
						'menu'            => 'Main Nav Menu',
						'container_class' => 'mobile-nav',
						'container_id'    => '',
						'menu_class'      => 'nav navbar-nav navbar-right',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '<p class="p-nav">',
						'link_after'      => '</p>',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '' 
					)
				);
			} else {
				wp_nav_menu(
					array(
						'theme_location'  => '',
						'menu'            => 'Portfolio Menu',
						'container_class' => 'mobile-nav',
						'container_id'    => '',
						'menu_class'      => 'nav navbar-nav navbar-right',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '<p class="p-nav">',
						'link_after'      => '</p>',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '' 
					)
				);
			}
		?>
		<div class="container-fluid">		
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php 
					$url = $_SERVER['REQUEST_URI'];
					if (is_home()) {
						echo "<a class='navbar-brand' href='#homepage'><img src='" . get_template_directory_uri() ."/images/logo.svg' width='100%'></a>";
					} else {
						echo "<a class='navbar-brand' href='".home_url()."'><img src='" . get_template_directory_uri() ."/images/logo.svg' width='100%'></a>";
					}
				?>
			</div>		  
		</div>
	</nav>
	<div class="clear"></div>
	<script type="text/javascript">
		if ($(window).width() > 768) {
			$('.menu-item').hover(function(){
				$(this).find('.sub-menu').fadeIn('fast');
			}, function(){
				$(this).find('.sub-menu').fadeOut('fast');
			});
		} else {
			$(".navbar-toggle").click(function(){
				$(".mobile-nav").slideToggle();
			});
			$("#menu-item-56").click(function(){
				$(this).toggleClass("nav-height");
				$(".sub-menu").fadeToggle("fast");
			});
		}				
	</script>
	
