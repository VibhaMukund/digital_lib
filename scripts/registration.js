$(document).ready(function () {
    $("form").submit(function (event) {
      var formData = {
        username: $("#username").val(),
        email: $("#email").val(),
        pass: $("#pass").val(),
      };
  
      $.ajax({
        type: "POST",
        url: "registration.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        console.log(data);
        window.location.href = "/digital%20library/html/create_profile.html";
      });
  
      event.preventDefault();
    });
  });