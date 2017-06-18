<?php get_header(); ?>
	  <?php global $theme_opt; ?>
		<!--Content section start-->
		<section class="slider-section">
			<div class="container-fluid">
				<div class="row">
					<!--top column-->
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border-only parallux-body">
						<div class="parallux-background text-center" data-stellar-background-ratio="0.5">
							<h1><?php echo $theme_opt['greting-text']; ?></h1>
						</div>
					</div>
					<!--first column-->
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 secret-news border-only">
								<div class="hovereffect" href="#"><img class="img-responsive" src="<?php echo $theme_opt['first-image-upload']['url']?>" alt="Feture Product">
									<div class="overlay">
										<h2><?php echo $theme_opt['latest-title']; ?></h2>
										<a class="info" href="<?php echo $theme_opt['first-title-link']; ?>">VIEW</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 border-only">
								<?php if(is_front_page()) {?>
								<?php query_posts('showposts=3&post_type=top_slider'); ?>
								
								<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								  <!-- Indicators -->
								  <ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1"></li>
									<li data-target="#carousel-example-generic" data-slide-to="2"></li>
								  </ol>

								  <!-- Wrapper for slides -->
								  <div class="carousel-inner" role="listbox">
									
									<?php if(have_posts() ) : while (have_posts()) : the_post(); $i++; ?>
									
									<?php if($i==1){ ?>
									<div class="item active">
									<?php }else{ ?>
									<div class="item">
									<?php }?>
									<?php if(has_post_thumbnail()){
										$url = wp_get_attachment_url(get_post_thumbnail_id() );?> 
										
										<img class="img-responsive" src="<?php echo $url; ?>" alt="<?php the_title(); ?>">
									  <?php }?>
									  <div class="carousel-caption">
										<h3><?php the_title(); ?></h3>
									  </div>
									</div>
									<?php endwhile; endif;?>
									
								  </div>
								</div>
								
								<?php } wp_reset_query(); ?>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<!--second column-->
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center border-only check-out">
						<a href="#"><h2><?php echo $theme_opt['check-out']; ?></h2></a>
					</div>
					<div class="clearfix"></div>
					<!--third column-->
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 feature-girl border-only">
								<div class="hovereffect" href="#"><img class="img-responsive" src="<?php echo $theme_opt['first-product-upload']['url']?>" alt="First Product">
									<div class="overlay">
										<h2><?php echo $theme_opt['first-title']; ?></h2>
										<a class="info" href="<?php echo $theme_opt['first-link']; ?>">VIEW</a>
									</div>
								</div>		
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 feature-boy border-only">
								<div class="hovereffect" href="#"><img class="img-responsive" src="<?php echo $theme_opt['second-image-upload']['url']?>" alt="Feture Product">
									<div class="overlay">
										<h2><?php echo $theme_opt['second-title']; ?></h2>
										<a class="info" href="<?php echo $theme_opt['second-link']; ?>">VIEW</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 feature-hat border-only">
										<div class="hovereffect" href="#"><img class="img-responsive" src="<?php echo $theme_opt['third-image-upload']['url']?>" alt="Feture Product">
											<div class="overlay">
												<h2><?php echo $theme_opt['third-title']; ?></h2>
												<a class="info" href="<?php echo $theme_opt['third-link']; ?>">VIEW</a>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 feature-brand2 border-only">
										<div class="hovereffect" href="#"><img class="img-responsive" src="<?php echo $theme_opt['fourth-image-upload']['url']?>" alt="Feture Product">
											<div class="overlay">
												<h2><?php echo $theme_opt['blog-title']; ?></h2>
												<a class="info" href="<?php echo $theme_opt['blog-link'];?>">VIEW</a>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 feature-social border-only">
										<div class="hovereffect" href="#"><img class="img-responsive" src="<?php echo $theme_opt['gallary-image-upload']['url']?>" alt="Feture Product">
											<div class="overlay">
												<h2><?php echo $theme_opt['gallary-title']; ?></h2>
												<a class="info" href="<?php echo $theme_opt['gallary-link']; ?>">VIEW</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<!--fourth column-->
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 toys-brand1 border-only">
										<div class="hovereffect" href="#"><img class="img-responsive" src="<?php echo $theme_opt['first-brand-upload']['url']?>" alt="Feture Product">
											<div class="overlay">
												<h2><?php echo $theme_opt['brand1']; ?></h2>
												<a class="info" href="<?php echo $theme_opt['brand1-link'];?>">VIEW</a>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 toys-brand1 border-only">
										<div class="hovereffect" href="<"><img class="img-responsive" src="<?php echo $theme_opt['second-brand-upload']['url']?>" alt="Feture Product">
											<div class="overlay">
												<h2><?php echo $theme_opt['brand2']; ?></h2>
												<a class="info" href="<?php echo $theme_opt['brand2-link'];?>">VIEW</a>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 toys-brand1 border-only">
										<div class="hovereffect" href="#"><img class="img-responsive" src="<?php echo $theme_opt['third-brand-upload']['url']?>" alt="Feture Product">
											<div class="overlay">
												<h2><?php echo $theme_opt['brand3']; ?></h2>
												<a class="info" href="<?php echo $theme_opt['brand3-link'];?>">VIEW</a>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 toys-brand1 border-only">
										<div class="hovereffect" href="#"><img class="img-responsive" src="<?php echo $theme_opt['fourth-brand-upload']['url']?>" alt="Feture Product">
											<div class="overlay">
												<h2><?php echo $theme_opt['brand4']; ?></h2>
												<a class="info" href="<?php echo $theme_opt['brand4-link'];?>">VIEW</a>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 feature-other border-only">
										<div class="hovereffect" href="#"><img class="img-responsive" src="<?php echo $theme_opt['enter-image-upload']['url']?>" alt="Feture Product">
											<div class="overlay">
												<h2><?php echo $theme_opt['win-enter']; ?></h2>
												<a class="info" href="<?php echo $theme_opt['win-enter-link']; ?>">Read More</a>
											</div>
										</div>
									</div>
									<div class="col-md-6 feature-other border-only">
										<div class="hovereffect" href="#"><img class="img-responsive" src="<?php echo $theme_opt['about-image-upload']['url']?>" alt="Feture Product">
											<div class="overlay">
												<h2><?php echo $theme_opt['about-us']; ?></h2>
												<a class="info" href="<?php echo $theme_opt['about-us-link']; ?>">Read More</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 border-only">
								<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								  <!-- Indicators -->
								  <ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1"></li>
									<li data-target="#carousel-example-generic" data-slide-to="2"></li>
								  </ol>

								  <!-- Wrapper for slides -->
								  <div class="carousel-inner" role="listbox">
									<div class="item active">
									  <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/bt-1sl.jpg" alt="Slider Image">
									  <div class="carousel-caption">
										<h3>This is Slider Image</h3>
									  </div>
									</div>
									<div class="item">
									  <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/bt-2sl.jpg" alt="Slider Image">
									  <div class="carousel-caption">
										<h3>This is Slider Image</h3>
									  </div>
									</div>
									<div class="item">
									  <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/bt-3sl.jpg" alt="Slider Image">
									  <div class="carousel-caption">
										<h3>This is Slider Image</h3>
									  </div>
									</div>
								  </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Slider section end-->
		
		<div class="clearfix"></div>
		
		<?php get_footer(); ?>
