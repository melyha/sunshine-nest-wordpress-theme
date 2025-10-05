<?php get_header(); ?>


<main class="site-main homepage">

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Early Learning in the Heart of your community</h1>
            <p>At Sunshine Nest Daycare, we provide a nurturing and stimulating environment...</p>
            <a href="#" class="btn-primary">Schedule a Visit</a>
        </div>
    </section>


      <!-- Feature Section -->
    <section class="section features">
    <div class="feature-cards">
        <div class="feature-card">
            <div class="feature-icon">❤️</div>
            <h3>Hearts That Care</h3>
        </div>
        <div class="feature-card">
            <div class="feature-icon">☀️</div>
            <h3>Your Child's Happy Place</h3>
        </div>
        <div class="feature-card">
            <div class="feature-icon">🔍</div>
            <h3>Adventure Around Every Corner</h3>
        </div>
        <div class="feature-card">
            <div class="feature-icon">🧱</div>
            <h3>Foundations For Life</h3>
        </div>
    </div>
</section>


  <!-- About Section -->
<section class="section about-section">
    <div class="about-content">
        <div class="about-image">
            <img src="https://picsum.photos/seed/daycare-about/600/600" alt="Children playing together" />
        </div>
        <div class="about-text">
            <h2>What Makes Us Special</h2>
            <p>As a locally-owned childcare center, we understand the unique needs of families in our community. Our approach combines structured learning with creative play, helping children develop socially, emotionally, and academically. We believe every child deserves personalized attention in a setting that feels like a second home.</p>
            <a href="#" class="btn-primary">Learn More</a>
        </div>
    </div>
</section>


 <!-- Program Section -->
<section class="section programs-section">
    <h2>Programs</h2>
    <div class="cards">
        <article class="card">
            <img src="https://picsum.photos/seed/daycare1/800/500" alt="Daycare Center" />
            <div class="card-content">
                <h3>Daycare Center</h3>
                <p>Full-day care for infants and toddlers in a nurturing environment.</p>
                <a href="#" class="btn-link">Learn More</a>
            </div>
        </article>
        <article class="card">
            <img src="https://picsum.photos/seed/daycare2/800/500" alt="Children's Programs" />
            <div class="card-content">
                <h3>Children's Programs</h3>
                <p>Educational activities designed for early childhood development.</p>
                <a href="#" class="btn-link">Learn More</a>
            </div>
        </article>
        <article class="card">
            <img src="https://picsum.photos/seed/daycare3/800/500" alt="Out of School Care" />
            <div class="card-content">
                <h3>Out of School Care</h3>
                <p>Before and after school programs for school-aged children.</p>
                <a href="#" class="btn-link">Learn More</a>
            </div>
        </article>
    </div>
</section>

<!-- News Section -->
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


              <article class="card news-card">
                    <a href="<?php echo get_permalink($post['ID']); ?>" class="card-link">
                        <div class="card-image-wrapper">
                            <?php if (has_post_thumbnail($post['ID'])) : ?>
                                <?php echo get_the_post_thumbnail($post['ID'], 'large'); ?>
                            <?php endif; ?>
                            
                            
                        <div class="news-date">
                            <span class="date-day"><?php echo get_the_date('j', $post['ID']); ?></span>
                            <span class="date-month"><?php echo get_the_date('M', $post['ID']); ?></span>
                        </div>
                    </div>
                    
                    <div class="card-content">
                        <h3><a href="<?php echo get_permalink($post['ID']); ?>"><?php echo get_the_title($post['ID']); ?></a></h3>
                        <p><?php echo wp_trim_words(get_the_excerpt($post['ID']), 20); ?></p>
                        
                    </div>

                </article>

    <?php endforeach; ?>
  </div>
<?php else : ?>
  <p>No posts found.</p>
<?php endif; ?>
</section>

<!-- Gallery Section -->
<section class="section gallery-section">
    <h2>Gallery</h2>
    <div class="gallery-grid">
        <img src="https://picsum.photos/seed/gallery1/400/400" alt="Gallery image 1" />
        <img src="https://picsum.photos/seed/gallery2/400/400" alt="Gallery image 2" />
        <img src="https://picsum.photos/seed/gallery3/400/400" alt="Gallery image 3" />
        <img src="https://picsum.photos/seed/gallery4/400/400" alt="Gallery image 4" />
        <img src="https://picsum.photos/seed/gallery5/400/400" alt="Gallery image 5" />
        <img src="https://picsum.photos/seed/gallery6/400/400" alt="Gallery image 6" />
    </div>
</section>


</section>
</main>
<?php get_footer(); ?>
