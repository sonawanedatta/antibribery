 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        Update Tender
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Display Tender</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="tenderForm" method="post">
              <div class="box-body">
				<div class="form-group">
                  <label for="tender_name">Tender Name</label>
                  <input type="text" class="form-control" name= "tender_name" value="<?php echo $tender_data[0]->tender_name;?>" id="tender_name">
                </div>
				<div class="form-group">
				 <label for="tender_area">Tender Area</label>
                  <input type="text" class="form-control" name= "tender_area" id="tender_area" value="<?php echo $tender_data[0]->tender_area;?>">
                </div>
                <div class="form-group">
                  <label for="street_address">Street Address</label>
                  <input type="text" class="form-control" name="street_address" id="street_address" value="<?php echo $tender_data[0]->street_address;?>">
                </div>
				<div class="form-group">
                  <label for="length">Length</label>
                  <input type="text" class="form-control" name="length" id="length" value="<?php echo $tender_data[0]->length;?>">
                </div>
                <div class="form-group">
                  <label for="approve_date">Approve Date of Tender</label>
                  <input type="date" class="form-control" name="approve_date" id="approve_date" value="<?php echo $tender_data[0]->approve_date;?>">
                </div>
                <div class="form-group">
                  <label for="completion_date">Completion Date of Tender</label>
                  <input type="date" class="form-control" name="completion_date" id="completion_date" value="<?php echo $tender_data[0]->completion_date;?>">
                </div>
                <div class="form-group">
                  <label for="tender_status">Status of Tender</label>
                  <select class="form-control" id="tender_status" name="tender_status" value="<?php echo $tender_data[0]->tender_status;?>">
					<option value="">--Select Status of Tender--</option>
					<option value="Approved">Approved</option>
					<option value="Completed">Completed</option>
					<option value="In Progress">In Progress</option>
					<option value="Cancel">Cancel</option>
				  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="button" onclick="tender_update('<?php echo $tender_data[0]->tender_id?>')" name="submit" class="btn btn-default">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
         
          

            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
       
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
 