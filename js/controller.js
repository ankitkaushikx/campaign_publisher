jQuery(document).ready(function ($) {
  const ajaxBase = ajax_object["ajax_base"];
  const site_url = ajax_object["site_url"];
  //register user form submission
  $("#register-form").submit(function (e) {
    e.preventDefault(); // Prevent form submission

    // Get form data
    var formData = new FormData(this);

    // Send AJAX request to register user
    $.ajax({
      type: "POST",
      url: ajaxBase + "/register",
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        console.log(response);
        alert(
          response["message"] + "\nPhone Number: " + response["phoneNumber"] + "\nPassword: " + response["password"]
        );
      },
      error: function (xhr, status, error) {
        console.error(xhr.responseText);
        alert("Error While Registration.Try Again  \n" + xhr.responseText.message);
      },
    });
  });

  //register user form submission
  $("#login-form").submit(function (e) {
    e.preventDefault(); // Prevent form submission

    // Get form data
    var formData = new FormData(this);

    // Send AJAX request to login user
    $.ajax({
      type: "POST",
      url: ajaxBase + "/login",
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        window.location.href = site_url + "/dashboard";
      },
      error: function (xhr, status, error) {
        console.error(xhr.responseText);
        alert("Failed to login. Please try Again");
      },
    });
  });
});
