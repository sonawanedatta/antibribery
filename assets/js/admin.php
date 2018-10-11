<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tender Form</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/iCheck/square/blue.css">
  <!-- js -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/custom.js">
  <!-- jQuery 3 -->
  <script src="<?php echo base_url(); ?>assets/backend/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url(); ?>assets/backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="<?php echo base_url(); ?>assets/backend/plugins/iCheck/icheck.min.js"></script>
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script>
  var BASE_URL = '<?php echo base_url();?>';
  </script>

  <style>
	.form-group p 
	{
		color:red;
	}
  </style>
</head>

<body>

  <div class="container">
  <h2>Insert Tender form</h2>
  <center id="successMSG"> </center>
  <form id="insertForm" action="" method="post">
    <div class="form-group">
      <label for="tender_name">Tender name:</label>
      <input type="text" class="form-control" id="tender_name" value="<?php echo set_value('tender_name'); ?>" placeholder="Enter Tender Name" name="tender_name">
	  <?php if(form_error('tender_name')!=''){ echo form_error('tender_name'); } ?>
    </div>
	<div class="form-group">
      <label for="tender_area">Tender Area:</label>
      <input type="text" class="form-control" id="tender_area" value="<?php echo set_value('tender_area'); ?>" placeholder="Enter Tender Area" name="tender_area">
	  <?php if(form_error('tender_area')!=''){ echo form_error('tender_area'); } ?>
    </div>
    <div class="form-group">
      <label for="street_address">Street Address:</label>
      <input type="text" class="form-control" value="<?php echo set_value('street_address'); ?>" id="street_address" placeholder="Enter Street Address" name="street_address">
	  <?php if(form_error('street_address')!=''){ echo form_error('street_address'); } ?>
    </div>
    <div class="form-group">
      <label for="length">Length:</label>
      <input type="text" class="form-control" value="<?php echo set_value('length'); ?>" id="length" placeholder="Enter password" name="length">
	  <?php if(form_error('length')!='') {echo form_error('length');}?>
    </div>
	<div class="form-group">
      <label for="approve_date">Approve Date:</label>
      <input type="date" class="form-control" value="<?php echo set_value('approve_date'); ?>" id="approve_date" placeholder="Enter Approve Date" name="approve_date">
	  <?php if(form_error('approve_date') !=''){echo form_error('approve_date');} ?>
    </div>
	<div class="form-group">
      <label for="completion_date">Completion Date:</label>
      <input type="date" class="form-control" value="<?php echo set_value('completion_date'); ?>" id="completion_date" placeholder="Enter Completion Date" name="completion_date">
	  <?php if(form_error('completion_date') !=''){echo form_error('completion_date');} ?>
    </div>
    
    <button type="button" onclick="insert_data()" name="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
