$(document).ready(function(){
	$('#full_name').blur(function(){
		var full_name = $('#full_name').val();

		if(full_name == ''){
			$('#full_name').focus();
			$('#errMsgUserFull').html('Please enter your full name');
			$('#errMsgUserFull').css('display','inline').fadeOut(5000);
		}
	});

	$('#address1').blur(function(){
		var address1 = $('#address1').val();

		if(address1 == ''){
			$('#address1').focus();
			$('#errMsgUserAdd').html('Please enter your address');
			$('#errMsgUserAdd').css('display','inline').fadeOut(5000);
		}
	});

	$('#gender').blur(function(){
		var gender = $('#gender').val();
		// alert(gender);

		if(gender == ''){
			$('#gender').focus();
			$('#errMsgUserGen').html('Please select gender');
			$('#errMsgUserGen').css('display','inline').fadeOut(5000);
		}
	});

	$('#country').blur(function(){
		var country = $('#country').val();
		// alert(gender);

		if(country == ''){
			$('#country').focus();
			$('#errMsgUserCon').html('Please select country');
			$('#errMsgUserCon').css('display','inline').fadeOut(5000);
		}
	});

	$('#phone_number').blur(function(){
		var phone_number = $('#phone_number').val();

		if(phone_number == ''){
			$('#phone_number').focus();
			$('#errMsgUserPhone').html('Please enter valid phone number');
			$('#errMsgUserPhone').css('display','inline').fadeOut(5000);
		}
	});

	$('#email').blur(function(){
		var email = $('#email').val();

		if(email == ''){
			$('#email').focus();
			$('#errMsgEmail').html('Please enter valid email');
			$('#errMsgEmail').css('display','inline').fadeOut(5000);
		}
	});

	$('#password').blur(function(){
		var password = $('#password').val();
		// alert(password);exit();
		if(password == ''){
			$('#password').focus();
			$('#errMsgPass').html('Please enter password');
			$('#errMsgPass').css('display','inline').fadeOut(5000);
		}
	});

	$('#rpassword').blur(function(){
		var rpassword = $('#rpassword').val();
		var password = $('#password').val();
		// alert(rpassword);exit();
		if(rpassword != password){
			$('#rpassword').focus();
			$('#rpassword').val('');
			$('#errMsgRPass').html('Password should be same');
			$('#errMsgRPass').css('display','inline').fadeOut(5000);
		}
	});
});

$(function(){

			// $('#default-next-0').click(function(){
			// 	alert("hello");
			// });
			
			


			
	    	
	    	var host = window.location.origin;
	    	
	    	// phone number validation start
	    	function validatePhone(pnumber){
	    		var phone_number = $('#phone_number').val();
	    		var filter = /^[0-9-+]+$/;
	    		if(filter.test(phone_number)){
	    			return true;
	    		}
	    		else {
	    			
	    			return false;

	    		}
	    		
	    	}

	    	$('#phone_number').blur(function(e){
	    		if(!validatePhone('pnumber')){
	    			// $('#errMsgPhone').html('Valid');
	    			$('#phone_number').val('');
	    			$('#phone_number').focus();
	    			$('#errMsgPhone').html('Please enter a valid phone number');
	    			$('#errMsgPhone').addClass('error-msg');
	    			$('#errMsgPhone').css('display','inline').fadeOut(3000);
	    		}
	    		
	    	});

	    	// phone number validation end

	    	// Email validation start
	    	
	    	function validateEmail($email) {
	    	  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	    	  return emailReg.test( $email );
	    	}

	    	$('#email').blur(function(e){
	    		var email = $('#email').val();	    		
	    		if(!validateEmail(email)){
	    			$('#email').val('');
	    			$('#email').focus();
	    			$('#errMsgEmail').html('Please enter a valid Email address');
	    			$('#errMsgEmail').addClass('error-msg');
	    			$('#errMsgEmail').css('display','inline').fadeOut(5000);	
	    		}
	    		
	    	});

	    	// email validation end



	    	$('#username').blur(function(){
	    		if($('#username').val() == ''){
	    			$('#username').focus();
	    			$('#errMsgUser').html("Please enter username");
		    		$('#errMsgUser').css('display','inline').fadeOut(10000);
	    		}
	    		var uname = $('#username').attr("checked", true).val().toLowerCase().replace(/\s/g, '');

	    		$.ajax({
	    			'url': host+'/ajaxCheckUser/'+ uname,
	    			'dataType':'json'
	    		}).success(function(data){
	    			
	    			if(data == "is not available"){
	    				$('#errMsgUser').html(data);
		    			$('#username').focus();
		    			$('#username').val('');
		    			$('#errMsgUser').addClass('error-msg');
		    			$('#errMsgUser').css('display','inline').fadeOut(10000);
	    			}
	    		});
	    	});

	    	// username check end 

	    	$('#referrar_id').blur(function(){
	    			// alert($('#referrar_id').val());
	    			var referralId = $('#referrar_id').val();
	    		$.ajax({
	    			'url' : host + '/ajaxCheckReferrar/'+referralId, 
	    			// 'rid' : rid,
	    			'type':'get',
	    			'dataType' : 'json',

	    			}).success(function(data){
	    				
	    				
	    				if(data == "Please enter a valid ID!"){
	    				$('#errMsgRef').html(data);
		    			$('#referrar_id').focus();
		    			$('#referrar_id').val('');
		    			$('#errMsgRef').addClass('error-msg');
		    			$('#errMsgRef').css('display','inline').fadeOut(10000);
	    			}
	    			});

	    	})			

	    	// Referrar's Id check end

	    	$('#upline_id').blur(function(){
	    		var uplineId = $('#upline_id').val();
	    		// alert($uplineId);
	    		$.ajax({
	    			'url' : host +'/ajaxCheckUplineUser/'+uplineId,
	    			'type' : 'get',
	    			'dataType': 'json',
	    		}).success(function(data){
	    		
	    		if(data == "User not found"){
	    			$('#errMsgUp').html(data);
	    			$('#upline_id').focus();
	    			$('#errMsgUp').css('display','inline').fadeOut(5000);
	    		}	
	    		
	    		data.shift();

	    		// alert(data);exit();
	    		if(data == "No free position here. Please try another upline id"){
	    			$('#errMsgUp').html(data);
	    			$('#upline_id').focus();
	    			$('#errMsgUp').css('display','inline').fadeOut(5000);

	    		}

	    		var nres =data.toString().split(",");

	    		$('#placement').empty(); 
	    		$.each(nres,function(i){
	    		   
	    		   $('<option/>').val(nres[i]).html(nres[i]).appendTo('#placement');

	    		   });

	    		});
	    	});
	    	
	    });