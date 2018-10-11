  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
 
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
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
				  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
				<?php foreach($mydata as $va){?>
                <tr>
                  <td><?php echo $va->tender_name;?></td>
                  <td><?php echo $va->tender_area;?></td>
                  <td><?php echo $va->street_address;?></td>
				  <td><?php echo $va->length;?></td>
                  <td><?php echo $va->description;?></td>
                  <td><?php echo $va->approve_date;?></td>
				  <td><?php echo $va->completion_date;?></td>
				  <td><?php echo $va->tender_status;?></td>
				  <td><a href="<?php echo base_url('admin/tender_update/'.$va->tender_id); ?>" >Update</a> | <a href= "javascript:void(0)" onclick="tender_delete('<?php echo $va->tender_id?>')">Delete</a></td>
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