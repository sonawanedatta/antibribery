 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        Insert Tender
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
			<center id="successMSG"></center>
            <form role="form" id="tenderForm" method="post">
              <div class="box-body">
				<div class="form-group">
                  <label for="tender_name">Tender Name</label>
                  <input type="text" class="form-control" name= "tender_name" id="tender_name" placeholder="Enter Tender Name">
                </div>
				<div class="form-group">
				 <label for="tender_area">Tender Area</label>
                  <input type="text" class="form-control" name= "tender_area" id="tender_area" placeholder="Enter Tender Area">
                </div>
                <div class="form-group">
                  <label for="street_address">Street Address</label>
                  <input type="text" class="form-control" name="street_address" id="street_address" placeholder="Enter Street Address">
                </div>
				<div class="form-group">
                  <label for="length">Length</label>
                  <input type="text" class="form-control" name="length" id="length" placeholder="Enter length">
                </div>
				<div class="form-group">
                  <label for="description">Description</label>
                  <textarea type="text" class="form-control" name="description" id="description" placeholder="Enter Description"></textarea>
                </div>
                <div class="form-group">
					<label for="approve_date">Approve Date of Tender</label>
					<div class="input-group date">
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
						<input type="text" class="form-control pull-right" id="datepicker">
					</div>
                </div>
                <div class="form-group">
					<label for="completion_date">Completion Date of Tender</label>
					<div class="input-group date">
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
						<input type="text" class="form-control pull-right" id="datepicker2">
					</div>
                </div>
                <div class="form-group">
                  <label for="status_id">Status of Tender</label>
                  <select class="form-control" id="status_id" name="status_id" value="<?php echo $tender_data[0]->status_id;?>">
					<option value="">--Select Status of Tender--</option>
					<?php $status_id = $this->tender_model->get_status();
						foreach($status_id as $value){
					?>
					<option value="<?php echo $value->status_id; ?>"><?php echo $value->status_name; ?></option>
					<?php } ?>
				  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" onclick="tender_insert()">Submit</button>
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
 