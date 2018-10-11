<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Build-Up</h4>
				</div>
				
<div class="login-box">
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
	<?php if($this->session->flashdata('error') !=''){?>
		<div class="alert alert-danger">
		  <?php echo $this->session->flashdata('error'); ?>
		</div>
	<?php } ?>
    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
		<div class="form-group has-feedback">
          <button type="register" name="register" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->