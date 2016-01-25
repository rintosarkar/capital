$(function(){

	$('#r2w').hide();
	$('#r2r').hide();
	$('#w2w').hide();

	// $('.rtwTransfer').attr('disabled','disabled');

	var host = window.location.origin;

	$('#transferType').change(function(){

		var selectVal = $('#transferType').val();
		
		
		if(selectVal == 'r2w'){
			$('#r2w').fadeIn(500);
			$('#r2r').hide();
			$('#w2w').hide();
		}
		else if(selectVal == 'r2r'){
			$('#r2r').fadeIn(500);
			$('#r2w').hide();
			$('#w2w').hide();
		}
		else if(selectVal == 'w2w'){
			$('#w2w').fadeIn(500);
			$('#r2w').hide();
			$('#r2r').hide();
		}



		// ajax amount check start
	$('#rtwAmount').blur(function(){
		var rtwAmount = $('#rtwAmount').val();
		var tpf = (rtwAmount*2)/100;
		$('#ptf').val(tpf);
		
		$.ajax({
			'url': host +'/ajaxCheckRtwAmount/'+rtwAmount,
			'type': 'get',
			'dataType': 'json',
		}).success(function(data){
			$('#errMsgRtwAmount').html(data);
			if(data == 'You do not have sufficient balance'){
				$('#rtwAmount').val('');
				$('#rtwAmount').focus();
			}
			
			$('#errMsgRtwAmount').addClass('error-msg');
			$('#errMsgRtwAmount').css('display','inline').fadeOut(2000);
		});

	});	 // ajax amount check end
		
		// ajax pin check start
	$('#rtwPin').blur(function(){
		var rtwPin = $('#rtwPin').val();
		// alert(rtwPin); exit();						
		$.ajax({
			'url': host +'/ajaxCheckRtwPin/'+rtwPin,
			'type': 'get',
			'dataType': 'json',
		}).success(function(data){
			$('#errMsgRtwPin').html(data);
			if(data == "Invalid Security PIN"){
				$('#rtwPin').focus();
				$('#rtwPin').val('');	
			}
			
			$('#errMsgRtwPin').addClass('error-msg');
			$('#errMsgRtwPin').css('display','inline').fadeOut(2000);
		});

	});	
	// ajax rtw pin check end

	// rtr Amount check ajax start

		$('#rtrAmount').blur(function(){
			
			var rtrAmount = $('#rtrAmount').val();
			
			$.ajax({
				'url'      : host + "/ajaxCheckRtrAmount/"+rtrAmount,
				'type'     : 'get',
				'dataType' : 'json',
			}).success(function(data){
				// console.log(data);
				$('#errMsgRtrAmount').html(data);
				if(data == "You do not have sufficient balance"){
					$('#rtrAmount').focus();
					$('#rtrAmount').val('');	
				}
				
				$('#errMsgRtrAmount').addClass('error-msg');
				$('#errMsgRtrAmount').css('display','inline').fadeOut(2000);
			});
		});
	// rtr Amount check ajax end

	// rtr Receiver check ajax start

		$('#rtrReceiverId').blur(function(){
			
			var rtrReceiver = $('#rtrReceiverId').val();
			
			$.ajax({
				'url'      : host + "/ajaxCheckRtrReceiver/"+rtrReceiver,
				'type'     : 'get',
				'dataType' : 'json',
			}).success(function(data){
				// alert(data); exit();
				$('#errMsgRtrReceiver').html(data);
				if(data == "Invalid receiver name"){
					$('#rtrReceiverId').focus();
					$('#rtrReceiverId').val('');	
				}
				
				$('#errMsgRtrReceiver').addClass('error-msg');
				$('#errMsgRtrReceiver').css('display','inline').fadeOut(2000);
			});
		});
	// rtr Receiver check ajax end

		// ajax rtr pin check start
	$('#rtrPin').blur(function(){
		var rtrPin = $('#rtrPin').val();
								
		$.ajax({
			'url': host +'/ajaxCheckRtrPin/'+rtrPin,
			'type': 'get',
			'dataType': 'json',
		}).success(function(data){
			$('#errMsgRtrPin').html(data);
			if(data == "Invalid Security PIN"){
				$('#rtrPin').focus();
				$('#rtrPin').val('');	
			}
			
			$('#errMsgRtrPin').addClass('error-msg');
			$('#errMsgRtrPin').css('display','inline').fadeOut(2000);
		});

	});	
	// ajax rtr pin check end

 /*+++++++++++++++++++++++++++++
	Wallet to Wallet Start
 +++++++++++++++++++++++++++++
 */

 	// wtw Amount check ajax start

 		$('#wtwAmount').blur(function(){
 			
 			var wtwAmount = $('#wtwAmount').val();
 			// alert(wtwAmount); exit();
 			$.ajax({
 				'url'      : host + "/ajaxCheckWtwAmount/"+wtwAmount,
 				'type'     : 'get',
 				'dataType' : 'json',
 			}).success(function(data){
 				// console.log(data); exit();
 				$('#errMsgWtwAmount').html(data);
 				if(data == "You do not have sufficient balance"){
 					$('#wtwAmount').focus();
 					$('#wtwAmount').val('');	
 				}
 				
 				$('#errMsgWtwAmount').addClass('error-msg');
 				$('#errMsgWtwAmount').css('display','inline').fadeOut(2000);
 			});
 		});
 	// rtr Amount check ajax end

 	// rtr Receiver check ajax start

 		$('#wtwReceiverId').blur(function(){
 			
 			var wtwReceiver = $('#wtwReceiverId').val();
 			
 			$.ajax({
 				'url'      : host + "/ajaxCheckWtwReceiver/"+wtwReceiver,
 				'type'     : 'get',
 				'dataType' : 'json',
 			}).success(function(data){
 				// alert(data); exit();
 				$('#errMsgWtwReceiver').html(data);
 				if(data == "Invalid receiver name"){
 					$('#wtwReceiverId').focus();
 					$('#wtwReceiverId').val('');	
 				}
 				
 				$('#errMsgWtwReceiver').addClass('error-msg');
 				$('#errMsgWtwReceiver').css('display','inline').fadeOut(2000);
 			});
 		});
 	// rtr Receiver check ajax end

 		// ajax rtr pin check start
 	$('#wtwPin').blur(function(){
 		var wtwPin = $('#wtwPin').val();
 								
 		$.ajax({
 			'url': host +'/ajaxCheckWtwPin/'+wtwPin,
 			'type': 'get',
 			'dataType': 'json',
 		}).success(function(data){
 			$('#errMsgWtwPin').html(data);
 			if(data == "Invalid Security PIN"){
 				$('#wtwPin').focus();
 				$('#wtwPin').val('');	
 			}
 			
 			$('#errMsgWtwPin').addClass('error-msg');
 			$('#errMsgWtwPin').css('display','inline').fadeOut(2000);
 		});

 	});	
 	// ajax rtr pin check end




 /*+++++++++++++++++++++++++++++
	Wallet to Wallet end
 +++++++++++++++++++++++++++++
 */


	// preview code start

		$('.review').click(function () {
		    var formValues = [];
		    // get values from inputs in first fieldset
		    $('#r2w :input').each(function () {
		        formValues.push($(this).val());
		    });
		    
		    formValues.pop(); //remove the button from input values
		    console.log(formValues);
		    
		    // set values in preview div
		    $('#r2wpreview :input').each(function (index) {
		        if (formValues[index]) {
		            $(this).val(formValues[index]);  
		        }
		    });
		    
		    $('#r2wpreview').removeClass('current');
		    $('#firstForm').addClass('current');

		});

		$('#r2wPrevious').click(function () {
		    $('#r2wpreview').addClass('current');
		    $('#firstForm').removeClass('current');

		});

		$('.r2rReview').click(function(){
			var formValues = [];

			$('#r2r :input').each(function(){
				formValues.push($(this).val());
			});

			formValues.pop();
			// console.log(formValues);

			$('#r2rpreview :input').each(function (index) {
			    if (formValues[index]) {
			        $(this).val(formValues[index]);  
			    }
			});

			$('#r2rpreview').removeClass('current');
			$('#secondForm').addClass('current');

			$('#r2rPrevious').click(function(){
				$('#r2rpreview').addClass('current');
				$('#secondForm').removeClass('current');
			})
		});

		$('#wtwTransfer').click(function(){
			var formValues = [];
			
			$('#w2w :input').each(function(){
				formValues.push($(this).val());
			});

			formValues.pop();
			console.log(formValues);

			$('#w2wpreview :input').each(function (index) {
			    if (formValues[index]) {
			        $(this).val(formValues[index]);  
			    }
			});

			$('#w2wpreview').removeClass('current');
			$('#thirdForm').addClass('current');

			$('#w2wPrevious').click(function(){
				$('#w2wpreview').addClass('current');
				$('#thirdForm').removeClass('current');
			})

		});


	// preview code end





	});


});