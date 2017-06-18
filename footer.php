<!--Footer section strat-->
	 <?php global $theme_opt; ?>
		<footer>
			<div class="container-fluid footer_area">
				<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center footer_logo">
							<img class="img-responsive" src="<?php echo $theme_opt['footer-logo']['url'];?>" alt="" />
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<h2>Help &amp; Information</h2>
							<div class="row footer-list">
									<div class="col-md-6">
										<ul class="list-group">
											<li class="list-item"><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp; Contact Us</a></li>
											<li class="list-item"><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp; Contact Us</a></li>
											<li class="list-item"><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp; Contact Us</a></li>
											<li class="list-item"><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp; Contact Us</a></li>
											<li class="list-item"><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp; Contact Us</a></li>
										</ul>
									</div>
									<div class="col-md-6">
										<ul class="list-group">
											<li class="list-item"><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp; Contact Us</a></li>
											<li class="list-item"><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp; Contact Us</a></li>
											<li class="list-item"><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp; Contact Us</a></li>
											<li class="list-item"><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp; Contact Us</a></li>
											<li class="list-item"><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp; Contact Us</a></li>
										</ul>
									</div>
								</div>	
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 social-link-item">
							<h2 class="text-left margin-left">Get Connected</h2>
							<ul class="list-group margin-left">
								<li class="list-item"><a href="#"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a></li>
								<li class="list-item"><a href="#"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a></li>
								<li class="list-item"><a href="#"><i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i></a></li>
								<li class="list-item"><a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-left">
							<h2>JOIN WITH US</h2>
							<h5>Join our newsletter and receive special offers and money saving discounts.</h5>
							<form>
							  <div class="form-group">
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
							  </div>
							  <div class="form-group">
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							  </div>
							  <button type="submit" class="btn btn-default">SUBSCRIBE</button>
							</form>
						</div>
				</div>
			</div>
			<div class="container-fluid footer_last">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<p class="text-center"><?php echo $theme_opt['cpy-txt']; ?></p>
					</div>
				</div>
			</div>
		</footer>
		<!--Footer section end-->
		</div>
	<?php wp_footer(); ?>	
    </body>
</html>