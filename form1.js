jQuery(document).ready(function () {
  $.validator.addMethod("fname",function(value){
    return /^[a-zA-Z ]*$/.test(value);
   });
  //  $.validator.addMethod("femail",function(value){
  //   return /^[a-zA-z0-9\d=!\-@._]$/.test(value)&&/[a-z]/.;
  //  });
  jQuery("#form123").validate({
    rules: {
      name: {
        required: true,
        fname:true,
        
      },
      gmail: {
        required: true,
        email: true,
        //femail:true,
      },
      mobile: {
        required: true,
        minlength: 10,
        maxlength: 10,
      },
      psd: {
        required: true,
        minlength: 6,
      },
    },
    messages: {
      name: {
        required: "please enter a name",
        fname:"enter only character",
       
      },
      gmail: {
        required: "enter valid email",
        email: "enter valid email",
       // femail:"enter proper email id",
      },
      mobile: {
        required: "enter valid mobile number",
        minlength: "enter proper 10 digit number",
        maxlength: "you enter more than 10",
      },
      psd: {
        required: "enter your password",
        minlength: "password should be more than 6 letter",
      },
    },
    
      
    
  });
});
