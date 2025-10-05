<?php get_header(); ?>

<main class="site-main">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
          <article class="single-page">
      
      <div class="page-header">
        <div class="container">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>

         <div class="container">
        <div class="page-content">
          <?php the_content(); ?>
        </div>
      </div>

    </article>
    
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>