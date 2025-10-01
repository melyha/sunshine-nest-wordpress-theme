<?php get_header(); ?>

<section class="section">
    <h2 id="news-heading">Latest News - This is index.php</h2>

<?php if ( have_posts() ) : ?>
    <div class="cards">
        <?php while ( have_posts() ) : the_post(); ?>
            <article class="card">
                <?php the_post_thumbnail( 'thumbnail' ); ?>
                <div class="card-content">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_content(); ?>
                    <time datetime="<?php echo get_the_date( 'c' ); ?>">
                        <?php echo get_the_date(); ?>
                    </time>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
<?php else : ?>
  <p>No posts found.</p>
<?php endif; ?>

</section>

<?php get_footer(); ?>

