<?php
// Include WordPress core functionality
require_once('wp-load.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Attempt to authenticate the user
    $user = wp_authenticate($username, $password);

    // Check if authentication is successful
    if (!is_wp_error($user)) {
        // Authentication successful, redirect to dashboard page
        wp_redirect('/dashboard');
        exit;
    } else {
        // Authentication failed, display error message
        $error_message = $user->get_error_message();
        echo "<script>alert('$error_message');</script>";
    }
}
?>

<?php get_header(); ?>

<div class="container-fluid">
  <div class="row justify-content-center py-3">
    <div class="col-md-12 text-center">
      <h3 class="display-3">Login</h3>
    </div>
    <div class="col-md-6 text-center">
      <form action="" method="post" id="login-form">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Phone number or email" name="username" id="username">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" name="password" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
    <!-- first column ends here -->
  </div>
</div>

<?php get_footer(); ?>
