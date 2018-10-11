 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        Tender Information
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="row">
        <!-- left column -->
			<div class="box-body table-responsive">
		  <div class="col-md-12">
              <table id="example1" class="table table-bordered table-striped">
                
                <tbody>
				<?php foreach($mydata as $va){ ?>
				
					<tr><td>Tender Name</td><td><?php echo $va->tender_name;?></td></tr>
					<tr><td>Tender Area</td><td><?php echo $va->tender_area;?></td></tr>
					<tr><td>Street Address</td><td><?php echo $va->street_address;?></td></tr>
					<tr><td>Length</td><td><?php echo $va->length;?></td></tr>
					<tr><td>Tender Image</td><td><img src="<?php echo base_url('upload/'.$va->tender_img); ?>"></td></tr>
					
                <?php }?>
                </tbody>
              </table>
            </div>
			</div>
          <!-- /.box -->

        </div>
		<div class="row">

        <!-- left column -->
			<div class="box-body table-responsive">
		  <div class="col-md-12">
              <div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php print_r($total_average); ?>%">
				  <?php print_r($total_average); ?>%
				</div>
			  </div>
            </div>
			</div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
       
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
 