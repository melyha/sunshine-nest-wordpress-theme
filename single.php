<?php get_header(); ?>


<main class="site-main">

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    
    <article class="single-post">
      
      <!-- Post Header -->
      <div class="post-header">

    <div class="container">

     <span class="post-date"><?php echo get_the_date('F j, Y'); ?></span>
          <h1><?php the_title(); ?></h1>
        </div>
      </div>

       <!-- Post Content -->
      <div class="container">
        <div class="post-content">
          <?php the_content(); ?>
        </div>

        <!-- Post Navigation -->
        <div class="post-navigation">
          <?php
          $prev = get_previous_post();
          $next = get_next_post();
          ?>
          
          <?php if ($prev) : ?>
            <a href="<?php echo get_permalink($prev); ?>" class="btn-secondary nav-prev">
              ← Previous
            </a>
          <?php endif; ?>

          <?php if ($next) : ?>
            <a href="<?php echo get_permalink($next); ?>" class="btn-secondary nav-next">
              Next →
            </a>
          <?php endif; ?>
        </div>
      </div>

    </article>

  <?php endwhile; ?>
<?php else : ?>
  <div class="container">
    <p>No posts found.</p>
  </div>
<?php endif; ?>

</main>
<?php get_footer(); ?>
