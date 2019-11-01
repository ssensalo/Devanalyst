
$(document).ready(function() {

        var delay = 30000; // milliseconds
    var cookie_expire = 0; // days

    var cookie = localStorage.getItem("list-builder");
    if(cookie == undefined || cookie == null) {
        cookie = 0;
    }

    if(((new Date()).getTime() - cookie) / (1000 * 60 * 60 * 24) > cookie_expire) {
        $("#list-builder").delay(delay).fadeIn("fast", () => {
            $("#popup-box").fadeIn("fast", () => {});
        });


	$('#butsave').on('click', function() {
		//$("#butsave").attr("disabled", "disabled");
		var name = $('#name').val();
		var email = $('#email').val();
		//var phone = $('#phone').val();
		//var city = $('#city').val();
                var emailReg = /(?:((?:[\w-]+(?:\.[\w-]+)*)@(?:(?:[\w-]+\.)*\w[\w-]{0,66})\.(?:[a-z]{2,6}(?:\.[a-z]{2})?));*)/g;
		if(name!="" && email!=""){
                    if(email.match(emailReg)){
			$.ajax({
				url: "save.php",
				type: "POST",
				data: {
					name: name,
					email: email				
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						//$("#butsave").removeAttr("disabled");
						//$('#fupForm').find('input:text').val('');
						//$("#success").show();
				                //$('#success').html('Data added successfully !');
                                          $("#list-builder, #popup-box").hide();
                                          alert("Thank you for subscribing to The DevAnalyst newsletter!");						
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			}); }
                 else{alert("Enter valid email address.....");}}
		else{
			alert('Please fill all the field !');
		}
	});

        $("#popup-close").click(() => {
            $("#list-builder, #popup-box").hide();
            localStorage.setItem("list-builder", (new Date()).getTime());
        });
}
});
