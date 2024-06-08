<?php 
add_action('template_redirect', 'redirect_logged_in_users');

function redirect_logged_in_users() {
    // Check if user is logged in
    if (is_user_logged_in()) {
        $requested_page = sanitize_text_field(basename($_SERVER['REQUEST_URI']));
        $restricted_pages = array('login', 'register', ''); // List of restricted pages

        // Check if the requested page is one of the restricted pages
        if (in_array($requested_page, $restricted_pages)) {
            // Redirect user to the dashboard page
            wp_redirect('/dashboard');
            exit;
        }
    }
}
