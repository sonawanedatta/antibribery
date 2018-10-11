			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">About Us</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
							</div>
						</div>
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">Contact Us</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<p class="number">
									012-6532-568-9746 <br>
									012-6532-569-9748
								</p>
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">Newsletter</h4>
								<p>You can trust us. we only send  offers, not a single spam.</p>
								<div class="d-flex flex-row" id="mc_embed_signup">


									  <form class="navbar-form" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
									    <div class="input-group add-on">
									      	<input class="form-control" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
											<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>
									      <div class="input-group-btn">
									        <button class="genric-btn primary circle arrow"><span class="lnr lnr-arrow-right"></span></button>
									      </div>
									    </div>
									      <div class="info mt-20"></div>
									  </form>

								</div>
							</div>
						</div>
					</div>
					<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="footer-text m-0">Copyright &copy; All rights reserved </p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="<?php echo base_url();?>assets/frontend/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
			<script src="<?php echo base_url();?>assets/frontend/js/vendor/bootstrap.min.js"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="<?php echo base_url();?>assets/frontend/js/easing.min.js"></script>
			<script src="<?php echo base_url();?>assets/frontend/js/hoverIntent.js"></script>
			<script src="<?php echo base_url();?>assets/frontend/js/superfish.min.js"></script>
			<script src="<?php echo base_url();?>assets/frontend/js/jquery.ajaxchimp.min.js"></script>
			<script src="<?php echo base_url();?>assets/frontend/js/jquery.validate.min.js"></script>
			<script src="<?php echo base_url();?>assets/frontend/js/jquery.magnific-popup.min.js"></script>
			<script src="<?php echo base_url();?>assets/frontend/js/owl.carousel.min.js"></script>
			<script src="<?php echo base_url();?>assets/frontend/js/jquery.sticky.js"></script>
			<script src="<?php echo base_url();?>assets/frontend/js/jquery.nice-select.min.js"></script>
			<script src="<?php echo base_url();?>assets/frontend/js/parallax.min.js"></script>
			<script src="<?php echo base_url();?>assets/frontend/js/waypoints.min.js"></script>
			<script src="<?php echo base_url();?>assets/frontend/js/jquery.counterup.min.js"></script>
			<script src="<?php echo base_url();?>assets/frontend/js/mail-script.js"></script>
			<script src="<?php echo base_url();?>assets/frontend/js/main.js"></script>
		</body>
	</html>

<script>
function registration()
{
	$("#register").validate(
	{
		rules:
		{
			firstname: "required",
			lastname:"required",
			street_address:"required",
			email:"required",
			password1:"required"
		},
		messages:
		{
			firstname:"First Name is required",
			lastname:"Last Name is required",
			street_address:"Street Address is required",
			email:"Email is required",
			password1:"Password is required"
		},
		submitHandler: function(form)
		{
			//alert("Hello");
			 var formdata = $("#register").serialize();
			$.ajax(
			{
				url: BASE_URL+"home",
				type:"post",
				data:formdata,
				success:function(responce)
				{
					$("#successMSG").html("<div class='alert alert-success'>Records successfully inserted..</div>");
					setTimeout(function()
					{
						window.location.href = BASE_URL+"home/table";
					}, 3000);
				},
				error:function(responce)
				{
					alert(responce);
				}
			})
		}
	});
}
</script>
