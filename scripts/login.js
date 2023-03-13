$(document).ready(function () {
  $("form").submit(function (event) {
    var formData = {
      email: $("#email").val(),
      pass: $("#pass").val(),
    };

    $.ajax({
      type: "POST",
      url: "login.php",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (data) {
      console.log(data);
    });

    event.preventDefault();
  });
});