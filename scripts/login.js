
function myFunction() {
  var email = document.getElementById("email").value;
  var pass = document.getElementById("pass").value;
  // Returns successful data submission message when the entered information is stored in database.
  var dataString = '&email=' + email + '&pass=' + pass ;
  if (email == '' || pass == '' ) {
  alert("Please Fill All Fields");
  } else {
  // AJAX code to submit form.
  $.ajax({
  type: "POST",
  url: "../scripts/login.php",
  data: dataString,
  cache: false,
  success: function(html) {

    window.location.href = "/digital%20library/html/update_profile.html";
  }
  });
  }
  return false;
  }
  