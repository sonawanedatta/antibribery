  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
 
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tender Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Tender Name</th>
                  <th>Tender Area</th>
                  <th>Street Address</th>
				  <th>Length</th>
                  <th>Description</th>
                  <th>Approve Date</th>
				  <th>Completion Date</th>
				  <th>Tender Status</th>
				  <th>Tender Image</th>
				  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
				<?php foreach($mydata as $va){ ?>
                <tr>
					<td><?php echo $va->tender_name;?></td>
					<td><?php echo $va->tender_area;?></td>
					<td><?php echo $va->street_address;?></td>
					<td><?php echo $va->length;?></td>
					<td><?php echo $va->description;?></td>
					<td><?php echo $va->approve_date;?></td>
					<td><?php echo $va->completion_date;?></td>
					<td><?php echo $va->status_name;?></td>
					<td><img src="<?php echo base_url('upload/'.$va->tender_img	); ?>" width="50px;" height="50px";></td>
					<td><a href="<?php echo base_url('tender/tender_update/'.$va->tender_id); ?>" >Update</a> | <a href= "javascript:void(0)" onclick="tender_delete('<?php echo $va->tender_id?>')">Delete</a></td>
                </tr>
                <?php }?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->