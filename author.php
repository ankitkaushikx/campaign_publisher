<?php
/*

*/
get_header();

// Get the author ID
$author_id = get_query_var('author');

// Retrieve author information
$author_name = get_the_author_meta('display_name', $author_id);
$author_join_date = get_the_author_meta('user_registered', $author_id);
$author_role = get_the_author_meta('roles', $author_id)[0]; // Assuming there's only one role
$author_posts_count = count_user_posts($author_id);

?>

<div class="container-fluid">
    <div class="row m-2">
        <div class="col-md-4 text-center">
            <?php echo get_avatar($author_id, 150, '', '', ['class' => 'img-fluid rounded-circle']); // Display author image with Bootstrap classes ?>
        </div>
        <div class="col-md-8 p-1 border border-2 text-center">
            <h2><?php echo $author_name; ?></h2>
            <p><strong>Join Date:</strong> <?php echo date('d-m-Y', strtotime($author_join_date)); ?></p>
            <p><strong>Role:</strong> <?php echo ucfirst($author_role); ?></p>
            <p><Strong>Status: </Strong><?php echo "Unverified" ?></p>
            
        </div>
    </div>
    <!-- author meta row ends -->
    <div class="row mt-4 border border-2 bg-light">
        <div class="col-md-12 p-2">
            <p><strong>Total Posts:</strong> <?php echo $author_posts_count; ?></p>
            <hr>
            <?php
            // Query posts by the author
            $author_posts = new WP_Query(array(
                'author' => $author_id,
                'post_type' => 'Campaign',
                'posts_per_page' => -1 // Display all posts
            ));

            // Loop through each post
            if ($author_posts->have_posts()) :
                while ($author_posts->have_posts()) :
                    $author_posts->the_post();
            ?>
<div class="col-12 py-3 border border-2">
    <div class="row">
      <div class="col-md-4 text-md-end">
<?php if (has_post_thumbnail()) : ?>
<img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>" alt="<?php the_title(); ?>" class="img-fluid" style="width: 300px; height: auto;">

<?php endif; ?>

      </div>
        <div class="col-md-8">
            <h3><?php the_title(); ?></h3>
            <p><?php echo get_the_excerpt(); ?></p>
            <p><strong>Date Posted:</strong> <?php echo get_the_date('d-m-Y'); ?></p>
            

<?php
$post_type_terms = get_the_terms(get_the_ID(), 'type');

if ($post_type_terms && !is_wp_error($post_type_terms)) {
    $type = reset($post_type_terms); // Get the first term

    if ($type instanceof WP_Term) { // Ensure $type is a WP_Term object
?>
<p><strong>Post Type:</strong> <?php echo $type->name; ?></p>
<?php
    }
}
?>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
        </div>
    </div>
</div>

            <?php
                endwhile;
                wp_reset_postdata(); // Reset post data query
            else :
                echo '<p>No posts found.</p>';
            endif;
            ?>
        </div>
    </div>
</div>
<!-- container ends -->

<?php get_footer(); ?>
