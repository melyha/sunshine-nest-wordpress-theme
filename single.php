<?php get_header(); ?>


<main class="site-main">

<h3> This is the singular page</h3>
    <div class="container">
<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <article>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </article>
  <?php endwhile; ?>
<?php else : ?>
  <p>No posts found.</p>
<?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>
