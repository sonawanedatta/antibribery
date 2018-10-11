  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
 
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Tenders</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Tender Name</th>
				  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
				<?php foreach($mydata as $va){?>
                <tr>
                  <td><?php echo $va->tender_name;?></td>
				  <td><a href="<?php echo base_url('tender/tender_tracker/'.$va->tender_id); ?>" >View</a></td>
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