<?php get_header(); ?>
<div class="container-fluid py-1">
  <div class="row">
    <div class="col-md-12">
      <h3 class="display-3">
        Add New Campaign
      </h3>
    </div>
    <div class="col-md-6">
      
      <form action="" id="add-new-form">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter Campaign Name" name="title" id="title-input">
        </div>
        <div class="form-group">
          <?php wp_editor('', 'content_editor', array('textarea_name' => 'content', 'media_buttons' => false, 'textarea_rows' => 10)); ?>
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="3" placeholder="Enter excerpt" name="excerpt" id="excerpt-input"></textarea>
        </div>
        <div class="form-group">
          <label for="feature-image">Feature Image:</label>
          <input type="file" class="form-control-file" id="feature-image" name="feature_image">
        </div>
      </form>
      <div>
        <button type="submit">Create</button>
      </div>
    </div>
    <!-- First Column ends here -->
<div class="col-md-6">
  <img src="" alt="" width="auto" height="200">
</div>

    <!-- Second Column ends here -->
  </div>
</div>
<?php get_footer(); ?>
