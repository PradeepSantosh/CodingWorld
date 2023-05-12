$(document).ready(function () {
  $("#check").hide();

  //$('#form123').submit();

  $("#btn").keyup(function () {
    var user = $("#name").val();
    var alpha = /^[a-zA-Z]+$/;
    var a=10;

    if (user == "") {
      //$(this).closest('form').submit();
      //alert('here');
      $("#check").show();
      $("#check").html("Name field is required");
      $("#check").css("color", "red");
     // $("#check").css("margin-left", "80px");
      return false;
    }
    if (!user.match(alpha)) {
      alert('here');
      return false;
      
    } else {
      $("#check").hide();
    }
  });
});
