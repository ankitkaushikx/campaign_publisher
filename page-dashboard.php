<?php get_header(); ?>

<div class="container-fluid py-2">
  <div class="row justify-content-center">
    <div class="col-md-4 border border-2 p-4 m-3 rounded text-center bg-light">
      <h3 class="mb-4">Add New Post</h3>
      <a href="<?php echo site_url('/add-new/'); ?>" class="btn btn-primary">Create New</a>
    </div>
    <div class="col-md-4 border border-2 p-4 m-3 rounded text-center bg-light">
      <h3 class="mb-4">View All Post</h3>
      <a href="<?php echo site_url('/all-camppaigns/'); ?>" class="btn btn-success">View All</a>
    </div>
    <div class="col-md-4 border border-2 p-4 m-3 rounded text-center bg-light">
      <h3 class="mb-4">View Your Profile</h3>
 <a href="<?php echo get_author_posts_url(get_current_user_id()); ?>" class="btn btn-success">View Profile</a>
    </div>
  </div>
</div>

<?php get_footer(); ?>
