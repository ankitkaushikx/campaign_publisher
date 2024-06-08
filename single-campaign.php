<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <?php
      // Start the loop
      while (have_posts()) : the_post();
      ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="entry-meta-box border border-2 bg-light rounded p-2">
              <?php
              // Display meta fields
              $author_id = get_the_author_meta('ID');
              $author_name = get_the_author_meta('display_name');
              $author_url = get_author_posts_url($author_id);
              ?>
              <div class="entry-meta row align-items-center">
                <div class="col-auto">
                  <?php
                  // Display the author's photo
                  echo get_avatar($author_id, 48, '', '', array('class' => 'rounded-circle'));
                  ?>
                </div>
                <div class="col">
                  <div class="author-name">
                    <a href="<?php echo esc_url($author_url); ?>">
                      <span class="text-decoration-underline">By <?php echo esc_html($author_name); ?></span>
                    </a>
                  </div>
                  <div class="posted-on">Posted on <?php the_date(); ?></div>
                </div>
              </div>
            </div>
          </header>

          <div class="entry-content">
            <?php
            // Display the featured image
            if (has_post_thumbnail()) :
            ?>
              <div class="featured-image">
                <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
              </div>
            <?php endif; ?>

            <?php
            // Display the excerpt
            if (has_excerpt()) :
            ?>
              <div class="entry-excerpt">
                <?php the_excerpt(); ?>
              </div>
            <?php endif; ?>
           <div class="py-3 px-2 border border-2 bg-light my-2">
            <h3>Campaign Details</h3>
            <?php
            // Display the content
            the_content();
            ?>

           </div>

          </div><!-- .entry-content -->

        </article><!-- #post-<?php the_ID(); ?> -->
      <?php endwhile; // End of the loop. ?>
    </div><!-- .col-md-8 -->

    <div class="col-md-4">
      <!-- Sidebar content can be added here if needed -->
    </div><!-- .col-md-4 -->

  </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
