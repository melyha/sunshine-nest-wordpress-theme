<?php get_header(); ?>


<main class="site-main homepage">
    <!-- Hero Section -->
     <h3>This is the front-page.php</h3>
    <section class="hero-section">
        <div class="container">
            <h1>Early Learning in the Heart of your community</h1>
            <p>At Sunshine Nest Daycare, we provide a nurturing and stimulating environment...</p>
            <a href="#" class="btn-primary">Schedule a Visit</a>
        </div>
    </section>s



<section class="section">
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
</section>

<section class="section">
    <h2 id="news-heading">Latest News</h2>

<?php
// Get 3 most recent posts
$recent = wp_get_recent_posts([
    'numberposts' => 3,
    'post_status' => 'publish'
]);
?>

<?php if ( ! empty( $recent ) ) : ?>
  <div class="cards">
    <?php foreach ( $recent as $post ) : ?>
      <article class="card">
        <?php echo get_the_post_thumbnail( $post['ID'], 'thumbnail' ); ?>
        <div class="card-content">
          <h3><a href="<?php echo get_permalink( $post['ID'] ); ?>"><?php echo get_the_title( $post['ID'] ); ?></a></h3>
          <?php echo get_the_excerpt( $post['ID'] ); ?>
          <time datetime="<?php echo get_the_date( 'c', $post['ID'] ); ?>">
            <?php echo get_the_date( '', $post['ID'] ); ?>
          </time>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
<?php else : ?>
  <p>No posts found.</p>
<?php endif; ?>

</section>
</main>
<?php get_footer(); ?>
