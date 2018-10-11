			<!-- start banner Area -->
			<section class="banner-area relative" id="home" data-parallax="scroll" data-image-src="<?php echo base_url();?>assets/frontend/img/header-bg.jpg">
				<div class="overlay-bg overlay"></div>
				<div class="container">
					<div class="row align-items-center justify-content-center" style="height:460px !important">
						<div class="banner-content col-lg-8 col-md-12">
							<h4 class="text-white text-uppercase">Discover the Colorful World</h4>
							<h1 class="text-uppercase">
								Build Your Dream
							</h1>
							<p class="text-white">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br> or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
							</p>
							<a href="#" class="primary-btn header-btn text-uppercase">Discover Now</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start features Area -->
			<section class="features-area pt-50" id="feature">
				<div class="container"><div class="feature-section">
					<div class="row">
						<div class="single-feature col-lg-4">
							<img src="<?php echo base_url();?>assets/frontend/img/f1.png" alt="">
							<h4 class="pt-20 pb-20">Building Drawings</h4>
							<p>
								Lorem ipsum dolor sit amet, consecteturadipis icing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
						<div class="single-feature col-lg-4">
							<img src="<?php echo base_url();?>assets/frontend/img/f2.png" alt="">
							<h4 class="pt-20 pb-20">Building Drawings</h4>
							<p>
								Lorem ipsum dolor sit amet, consecteturadipis icing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
						<div class="single-feature col-lg-4">
							<img src="<?php echo base_url();?>assets/frontend/img/f3.png" alt="">
							<h4 class="pt-20 pb-20">Building Drawings</h4>
							<p>
								Lorem ipsum dolor sit amet, consecteturadipis icing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End features Area -->

			<!-- Start offered Area -->
			<section class="offered-area pt-10" id="offered">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-10 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Some Features that Made us Unique</h1>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="single-offered">
								<img class="img-fluid" src="<?php echo base_url();?>assets/frontend/img/s1.png" alt="">
								<a href="#"><h4 class="pt-20 pb-20">Basic & Common Repairs</h4></a>
								<p>
									Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-offered">
								<img class="img-fluid" src="<?php echo base_url();?>assets/frontend/img/s2.png" alt="">
								<a href="#"><h4 class="pt-20 pb-20">Brake Repairs & Services</h4></a>
								<p>
									Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-offered">
								<img class="img-fluid" src="<?php echo base_url();?>assets/frontend/img/s3.png" alt="">
								<a href="#"><h4 class="pt-20 pb-20">Preventive Maintenance</h4></a>
								<p>
									Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End offered Area -->

			<!-- Start projects Area -->
			<section class="projects-area pb-10 pt-10" id="project">
				<div class="container-fluid">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-10 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Why Choose Us Your Fitness Builder</h1>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="active-project-carusel col-lg-12">
							<?php foreach($tender as $ten){?>
								<div class="item">
									<div class="single-project" style="background: url('<?php echo base_url('upload/'.$ten->tender_img);?>');height: 300px;">
										<div class="overlay overlay-content">
											<h1><?php echo $ten->tender_name;?></h1>
											<p>
												<?php echo $ten->description;?>
											</p>
										</div>
									</div>
								</div>
							<?php }?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End projects Area -->

			<!-- login modal -->
		  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <div class ="container">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
		<a href="javascript:void(0)" onclick="show_form('login')" class="btn btn-primary">Login</a>
          &emsp; <a href="javascript:void(0)" onclick="show_form('register')" class="btn btn-success">Register</a>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
          <div class="login">
		  <h2>Login form</h2><br>
		  <form method="post" id="login">
			<div class="form-group">
			  <input type="text" class="form-control" id="l_email" placeholder="Enter email" name="l_email">
			</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" id="password" name="password" autocomplete="off" placeholder="Password">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="checkbox">
			  <label><input type="checkbox" name="remember"> Remember me</label>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		  </form>
			</div>

		<div class="register">
			<h2>Registration form</h2><br>
			<form method="post" id="register">
				<center id="successMSG"></center>
				<div class="form-group has-feedback">
					<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="text" class="form-control" id="street_address" name="street_address" placeholder="Street Address">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="text" class="form-control" id="email" name="email" placeholder="Email">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" id="password" name="password" autocomplete="off" placeholder="Password">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-4">
						<button type="submit" name="submit" onclick="registration()" class="btn btn-primary btn-block btn-flat">Register</button>
					</div>
				</div>
		  </form>
		</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div></div	>
		<!--//modal-->

			<!-- Start fact Area -->
			<section class="facts-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col single-fact">
							<h1 class="counter">2536</h1>
							<p>Projects Completed</p>
						</div>
						<div class="col single-fact">
							<h1 class="counter">6784</h1>
							<p>Really Happy Clients</p>
						</div>
						<div class="col single-fact">
							<h1 class="counter">1059</h1>
							<p>Total Tasks Completed</p>
						</div>
						<div class="col single-fact">
							<h1 class="counter">2239</h1>
							<p>Cups of Coffee Taken</p>
						</div>
						<div class="col single-fact">
							<h1 class="counter">435</h1>
							<p>In House Professionals</p>
						</div>
					</div>
				</div>
			</section>
			<!-- end fact Area -->


			<!-- Start service Area -->
			<section class="service-area pt-20 pb-20" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-20 header-text">
							<h1>Why we are the best</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 pb-30">
							<div class="single-service">
								<h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 pb-30">
							<div class="single-service">
								<h4><span class="lnr lnr-license"></span>Professional Service</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 pb-30">
							<div class="single-service">
								<h4><span class="lnr lnr-phone"></span>Great Support</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End service Area -->

<script>
function show_form(form_name)
{
	if(form_name=='register')
	{
		$(".register").css('display', 'block');
		$(".login").css('display', 'none');
	}else{
		$(".register").css('display', 'none');
		$(".login").css('display', 'block');
	}
}
</script>
