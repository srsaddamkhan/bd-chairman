$(document).ready(function(){
	$("#division").on('change',function(){
		var divisionId=$(this).val();
		$.ajax({

		    method:"POST",
		    url:"ajax.php",
		    data:{id:divisionId},
		    dataType:"html",
		    success:function(data){
		    	$("#district").html(data);
		    }
		});
	});

    
    $("#district").on('change',function(){
		var districtId=$(this).val();
		$.ajax({

		    method:"POST",
		    url:"ajax.php",
		    data:{districtId:districtId},
		    dataType:"html",
		    success:function(data){
		    	$("#upazila").html(data);
		    }
		});
	});

});