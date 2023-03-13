
function myFunction() {
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;
    var age = document.getElementById("age").value;
    var mobile = document.getElementById("mobile").value;
    var date = document.getElementById("date").value;
    var pic = document.getElementById("pic").value;
    var address= document.getElementById("address").value;
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'firstname=' + firstname + '&lastname=' + lastname + '&age=' + age + '&mobile=' + mobile + '&date=' + date + '&pic=' + pic + '&address=' +address ;
    if (firstname == '' || lastname == '' || age == '' ) {
    alert("Please Fill All Fields");
    } else {
    // AJAX code to submit form.
    $.ajax({
    type: "POST",
    url: "../scripts/registration.php",
    data: dataString,
    cache: false,
    success: function(html) {
  
      window.location.href = "/digital%20library/html/create_profile.html";
    }
    });
    }
    return false;
    }
    