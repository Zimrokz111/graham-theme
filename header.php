<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="author" content="Nishan Mazumder">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='<?php echo esc_url(get_template_directory_uri()); ?>/favicon.ico' rel='icon' type='image/x-icon'/>
		<?php wp_head(); ?>
		<style type="text/css">
			header{
				background: <?php global $theme_opt; echo $theme_opt['header-color']; ?> !important;
			}
			.border-only{
				border-width:<?php echo $theme_opt['bdr-color']['border-top'];?>;
				border-style:<?php echo $theme_opt['bdr-color']['border-style'];?>;
				border-color:<?php echo $theme_opt['bdr-color']['border-color'];?>;
			}
			.footer_area{
				background-color:<?php echo $theme_opt['footer-bg']['background-color']; ?>;
				background-attachment:<?php echo $theme_opt['footer-bg']['background-attachment'];?>;
				background-repeat:<?php echo $theme_opt['footer-bg']['background-repeat'];?>;
				background-position:<?php echo $theme_opt['footer-bg']['background-position'];?>;
				background-image:url(<?php echo $theme_opt['footer-bg']['background-image'];?>);
			}
			.footer_last{
				background-color:<?php echo $theme_opt['footer-last-bgg']['background-color']; ?>;
				background-attachment:<?php echo $theme_opt['footer-last-bg']['background-attachment'];?>;
				background-repeat:<?php echo $theme_opt['footer-last-bg']['background-repeat'];?>;
				background-position:<?php echo $theme_opt['footer-last-bg']['background-position'];?>;
				background-image:url(<?php echo $theme_opt['footer-last-bg']['background-image'];?>);
			}
			.footer_area>.row>.col-md-3>h2,h5{
				color:<?php echo $theme_opt['footer-title-color']; ?>;
			}
			<?php echo $zboom_opt['custom-css'];?>
		</style>
    </head>
    
	<body <?php body_class(); ?>>
		<div class="container-fluid">
		<!--Header section start-->
		<header>
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<?php if($theme_opt['logo-button'] == 1):?>
							<a href="<?php the_permalink('home'); ?>"><img class="img-responsive logo" src="<?php echo $theme_opt['logo-upload']['url']; ?>" alt="Logo" /></a>
						<?php endif; ?>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						 <div class="list-group left-element">
							<a href="#" class="list-group-item">
								<div class="search">
									<form method="GET" action="<?php esc_url(bloginfo('home'));?>">
										<input name="s" type="text" class="form-control input-lg" maxlength="64" placeholder="Search" />
										<button type="submit" class="btn btn-search"><i class="fa fa-search fa-2x" aria-hidden="true"></i></button>
									</form>
								 </div>
							</a>
							<a href="#" class="list-group-item">
								<i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i>
							</a>
							<a href="#" class="list-group-item">
								<i class="fa fa-user fa-3x" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--Header section end-->
		
		<div class="clearfix"></div>
		
		<!--Nav section start-->
		<section class="nav_section">
			<nav class="navbar navbar-default" role="navigation">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<div class="nav-margin">
					<?php
						wp_nav_menu( array(
							'menu'              => 'primary',
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						);
					?>
				</div>	
				</div>
			</nav>
		</section>
		<!--Nav section end-->
	   
		<div class="clearfix"></div>