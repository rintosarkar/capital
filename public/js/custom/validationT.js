function formValidator(){

  // var title1 = document.getElementById('title1');
   var firstName = document.getElementById('firstName');
   var middleName = document.getElementById('middleName');
   var lastName = document.getElementById('lastName');
   var gender = document.getElementById('gender');
   var mothersName = document.getElementById('mothersName');
   var fathersName = document.getElementById('fathersName');
   var dob = document.getElementById('dob');
   var nic = document.getElementById('nic');
   //var nationality = document.getElementById('nationality');
   //var citizen = document.getElementById('citizen');
   var permanentAddress = document.getElementById('permanentAddress');
   
   var postalCode1 = document.getElementById('postalCode1');
   var district = document.getElementById('district');
   var province = document.getElementById('province');
   var presentAddress = document.getElementById('presentAddress');
   var postalCode2 = document.getElementById('postalCode2');
   var district1 = document.getElementById('district1');
   var province1 = document.getElementById('province1');
   var workAddress = document.getElementById('workAddress');
   var wpn = document.getElementById('wpn');
   var cellno = document.getElementById('cellno');
   var emailid = document.getElementById('emailid');
  // var viberid = document.getElementById('viberid');

   
   
   // Check each input in the order that it appears in the form!
   //if(madeSelection(title1, "Please select title")){
      if(notEmpty(firstName, "Please enter first name")){
         if(isAlphabet(firstName, "Alphabet only for name")){
      if(space(firstName, "Enter minimum 3 characters")){
     if(notEmpty(middleName, "Please enter middle name")){
    if(isAlphabet(middleName, "Alphabet only for name")){
     if(space(middleName, "Enter minimum 3 characters")){
        if(notEmpty(lastName, "Please enter last name")){
         if(isAlphabet(lastName, "Alphabet only for name")){
        if(space(lastName, "Enter minimum 3 characters")){
          if(madeSelection(gender, "Please selet gender")){
          
            if(notEmpty(mothersName, "Please enter your mother name")){
               if(isAlphabet(mothersName, "Alphabet only for name")){
            if(space(mothersName, "Enter minimum 3 characters")){
              // if(notEmpty(fathersName, "Please enter your father name")){
              //    if(isAlphabet(fathersName, "Alphabet only for name")){
              // if(space(fathersName, "Enter minimum 3 characters")){
                if(notEmpty(dob, "Please select your date of birth")){
                
                if(validateDOB(dob, "Please select your date of birth")){
              
                if(notEmpty(nic, "Please enter your National ID number")){
                if(isNumeric(nic, "Numbers only for NIC")){
                if(space(nic, "Enter minimum 3 characters")){
                if(lengthRestriction(nic, 6,15 )){
               // if(madeSelection(nationality, "Please select your country")){
                  
                  //if(madeSelection(citizen, "Please select Nationality By")){
                    
                    if(notEmpty(permanentAddress, "Please enter your permanent address")){
                    if(space(permanentAddress, "Enter minimum 3 characters")){
                       if(notEmpty(postalCode1, "Please enter your Permanent postal code")){
                      if(isNumeric(postalCode1, "Numbers only for Permanent postal code")){
                        if(space(postalCode1, "Enter minimum 3 characters")){
                      if(lengthRestriction(postalCode1, 4,6 )){


                      if(notEmpty(district, "Please enter your district name")){
                      if(space(district, "Enter minimum 3 characters")){

                      if(notEmpty(province, "Please enter your province name")){
                      if(space(province, "Enter minimum 3 characters")){



                     
                     
                        if(notEmpty(presentAddress, "Please enter your present address")){
                     
                        if(space(presentAddress, "Enter minimum 3 characters")){
                            if(notEmpty(postalCode2, "Please enter your present postal code")){
                            if(isNumeric(postalCode2, "Numbers only for present postal code")){
                            

                            if(space(postalCode2, "Enter minimum 3 characters")){
                            if(lengthRestriction(postalCode2, 4,6 )){
                             if(notEmpty(district, "Please enter your district name")){
                      if(space(district, "Enter minimum 3 characters")){

                      if(notEmpty(province, "Please enter your province name")){
                      if(space(province, "Enter minimum 3 characters")){
                             if(notEmpty(workAddress, "Please enter your work address")){
                             if(space(workAddress, "Enter minimum 3 characters")){
                        	      if(notEmpty(wpn, "Please enter your work phone number")){
                                if(isNumeric(wpn, "Numbers only for phone number")){
                                if(space(wpn, "Enter minimum 3 characters")){
                                if(lengthRestriction(wpn, 5, 15)){
                        	        if(notEmpty(cellno, "Please enter your personal cell number")){
                                  if(isNumeric(cellno, "Numbers only for personal cell number")){
                                  if(space(cellno, "Enter minimum 3 characters")){
                                  if(lengthRestriction(cellno, 5, 15)){
                        	 	         if(emailValidator(emailid, "Please enter your email ID")){
                                     

                        	 	 
                     return true;
                  }
                }
              }
            }
          }
        }
      }

    }

    }
   
   }}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}
   //}}}
   return false;
   
    }

    function notEmpty(elem, helperMsg){
   if(elem.value.length == 0){
      alert(helperMsg);
      elem.focus(); elem.style.backgroundColor= '#e86868'; // set the focus to this input
      return false;
   }
   return true;
    }

    function isNumeric(elem, helperMsg){
   var numericExpression = /^[+0-9.]+$/;
   if(elem.value.match(numericExpression)){
      return true;
   }else{
      alert(helperMsg);
      elem.focus(); 
      elem.style.backgroundColor= '#e86868';
      elem.value = '';
      return false;
   }
    }

    function isAlphabet(elem, helperMsg){
   var alphaExp = /^[a-zA-Z ]*$/;
   if(elem.value.match(alphaExp)){
      return true;
   }else{
      alert(helperMsg);
      elem.focus(); elem.style.backgroundColor= '#e86868';
      return false;
   }
    }

function isAlphanumeric(elem, helperMsg){
   var alphaExp = /^[0-9a-zA-Z]+$/;
   if(elem.value.match(alphaExp)){
      return true;
   }else{
      alert(helperMsg);
      elem.focus(); elem.style.backgroundColor= '#e86868';
      return false;
   }
}

function lengthRestriction(elem, min, max){
   var uInput = elem.value;
   if(uInput.length >= min && uInput.length <= max){
      return true;
   }else{
      alert("Please enter between " +min+ " and " +max+ " characters");
      elem.focus(); elem.style.backgroundColor= '#e86868';
      return false;
   }
}

function madeSelection(elem, helperMsg){
   if(elem.value == ""){
      alert(helperMsg);
      elem.focus(); elem.style.backgroundColor= '#e86868';
      return false;
   }else{
      return true;
   }
}

function emailValidator(elem, helperMsg){
   var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{3,4}$/;
   if(elem.value.match(emailExp)){
      return true;
   }else{
      alert(helperMsg);
      elem.focus(); elem.style.backgroundColor= '#e86868';
      return false;
   }
}
function validateDOB(elem, helperMsg){

    
    var pattern =/^(0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])[\/\-]\d{4}$/; 
    if(elem.value.match(pattern)){
      return true;
   }else{
      alert(helperMsg);
      elem.focus(); elem.style.backgroundColor= '#e86868';
      return false;
   }
}
function space(elem, helperMsg){

    
    var pattern =/^[_'-.0-9A-Za-z!,@#$%][_'-.0-9A-Za-z!,@#$% ]+[_'-.0-9A-Za-z!,@#$%\s]$/;
    if(elem.value.match(pattern)){
      return true;
   }else{
      alert(helperMsg);
      elem.focus(); elem.style.backgroundColor= '#e86868';
      return false;
   }
}