/* function tender_insert()
{
	$("#tenderForm").validate(
	{
		rules: 
		{
			tender_name: "required",
			tender_area:"required",
			street_address:"required",
			approve_date:"required",
			completion_date:"required",
			status_id:"required",
			description:"required"
		},
		messages:
		{
			tender_name:"Tender Name is required",
			tender_area:"Area of Tender is required",
			street_address:"Street Address is required",
			approve_date:"approve date of tender is required",
			completion_date:"completion date of tender is required",
			status_id:"status of tender is required",
			description:"Description of tender is required"
		},
		submitHandler: function(form) 
		{
			var formdata = $("#tenderForm").serialize();
			$.ajax(
			{
				url: BASE_URL+"admin/tender/tender_insert",
				type:"post",
				data:formdata,
				success:function(responce)
				{
					$("#successMSG").html("<div class='alert alert-success'>Records successfully inserted..</div>"); 
					setTimeout(function(){
						window.location.href = BASE_URL+"tender/display_tender";
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

function tender_delete(id)
 {
	$.ajax({
		url:BASE_URL+"tender/tender_delete/"+id,
		type:"post",
		success:function(responce)
		{
			if(responce=='success')
			{
				$("#successMSG").html("<div class='alert alert-success'>Records successfully deleted..</div>");			
				$("#rowID"+id).hide();	
			}
		},
		error:function(responce)
		{
			alert(responce);
		},
	});	
}

function tender_update(id)
{
	var formdata = $("#tender_update").serialize();
	$.ajax
	({
		type:"post",
		url:BASE_URL+"tender/tender_update/"+id,
		data:formdata,
		success:function(responce)
		{
			alert(responce);
			$("#successMSG").html("<div class='alert alert-success'>Records successfully updated..</div>"); 
					setTimeout(function(){
						window.location.href = BASE_URL+"tender/display_tender";
					}, 3000);	
				
			if(responce != 'success')
			{
				$("#msgSuccess").html("<div class='alert alert-danger'>"+responce+"</div>");
			}
		},
		error:function(responce)
		{
			alert(responce);
		}	
	});
}
 */