function submitbtn_click()
{
	//var form= $("#form1").serializeArray();
	var v1 = $("#txtname").val();
	var v2 = $("#txtemail").val();
	var v3 = $("#txtnumber").val();
	var v4 = $("#txtquery").val();
	//var v = $("#name").value();
	if(v1=="" ||v2==""||v3==""||v4=="")
		{
		  $("#txtname").attr('placeholder','* Name is required');
		  $("#txtemail").attr('placeholder','* EmailID is required');
		  $("#txtnumber").attr('placeholder','* Contact Number is required');
		  $("#txtquery").attr('placeholder','* Query is required');
		  alert("Please fill all fields");
		}
		else
		{
			console.log(v1 +".."+ v2+".."+v3+".."+v4);
	
			$.ajax({
			type: 'post',
			url: 'contactus.php',
			data: {'name':v1,'number':v3,'email':v2,'query':v4},
			dataType: "text"	
					}).done(function()  
			{
		
		    alert("Thank you "+v1+"! We will get back to you shortly!");
		    $("#txtname").val("");
		    $("#txtemail").val("");
		    $("#txtnumber").val("");
		    $("#txtquery").val("");
			}).fail(function()  
			{
			alert("Sorry! Something went wrong, please try again later!");
			}); 
		}
}
