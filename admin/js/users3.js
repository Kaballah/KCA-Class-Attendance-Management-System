$(document).ready(function(){
	var usersData = $('#userList').DataTable({
		"lengthChange": false,
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"action.php",
			type:"POST",
			data:{action:'listUser3'},
			dataType:"json"
		},
		"columnDefs":[
			{
				"targets":[0, 7, 8],
				"orderable":false,
			},
		],
		"pageLength": 10
	});		
	$(document).on('click', '.delete', function(){
		var userid = $(this).attr("id");		
		var action = "userDelete";
		if(confirm("Are you sure you want to delete this user?")) {
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{userid:userid, action:action},
				success:function(data) {					
					usersData.ajax.reload();
				}
			})
		} else {
			return false;
		}
	});	
	$('#addUser').click(function(){
		$('#userModal').modal('show');
		$('#userForm')[0].reset();
		$('.modal-title').html("<i class='fa fa-plus'></i> Add Student");
		$('#action').val('addUser');
		$('#save').val('Add Student');
	});	
	$(document).on('click', '.update', function(){
		var userid = $(this).attr("id");
		var action = 'getStudent';
		$.ajax({
			url:'action.php',
			method:"POST",
			data:{userid:userid, action:action},
			dataType:"json",
			success:function(data){
				$('#userModal').modal('show');
				$('#staffid').val(data.staff_id);
				$('#firstname').val(data.first_name);
				$('#lastname').val(data.last_name);
				$('#designation').val(data.designation);
				$('#email').val(data.email);
				$('#course').val(data.course);
				$('#unit1').val(data.unit1);
				$('#unit2').val(data.unit2);
				$('#unit3').val(data.unit3);
				$('#unit4').val(data.unit4);
				$('#unit5').val(data.unit5);
				$('#unit6').val(data.unit6);
				$('#unit7').val(data.unit7);
				$('#unit8').val(data.unit8);
				if(data.gender == 'male') {
					$('#male').prop("checked", true);
				} else if(data.gender == 'female') {
					$('#female').prop("checked", true);
				}
				if(data.status == 'active') {
					$('#active').prop("checked", true);
				} else if(data.gender == 'pending') {
					$('#pending').prop("checked", true);
				}
                if(data.type == 'student') {
					$('#student').prop("checked", true);
				}
				$('.modal-title').html("<i class='fa fa-plus'></i> Edit Student");
				$('#action').val('updateStudent');
				$('#save').val('Save');
			}
		})
	});	
	$(document).on('submit','#userForm', function(event){
		event.preventDefault();
		$('#save').attr('disabled','disabled');
		var formData = $(this).serialize();
		$.ajax({
			url:"action.php",
			method:"POST",
			data:formData,
			success:function(data){				
				$('#userForm')[0].reset();
				$('#userModal').modal('hide');				
				$('#save').attr('disabled', false);
				usersData.ajax.reload();
			}
		})
	});	
});