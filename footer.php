</main>

<footer class="site-footer">
     <div class="container footer-main">
        <div class="footer-info">
            <div class="footer-brand">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Logo" class="footer-logo">
                <div>
                    <div class="footer-title">Sunshine Nest</div>
                    <div class="footer-subtitle">Daycare Center</div>
                </div>
            </div>
            <div class="footer-contact">
               <div><img src="<?php echo get_template_directory_uri(); ?>/assets/phone-icon.png" alt=""> 000-000-0000</div>
                <div><img src="<?php echo get_template_directory_uri(); ?>/assets/email-icon.png" alt=""> info@sunshinenestdaycare.com</div>
            </div>
        </div>

         <nav class="footer-nav">
            <div class="footer-col">
                <a href="#">Home</a>
                <a href="#">About Us</a>
                <a href="#">Programs</a>
                <a href="#">Gallery</a>
                <a href="#">FAQs</a>
            </div>
            <div class="footer-col">
                <a href="#">Enrollment</a>
                <a href="#">Parent Resources</a>
                <a href="#">Work With Us</a>
                <a href="#">News</a>
                <a href="#">Contact</a>
            </div>
        </nav>
    </div>

     <div class="sub-footer">
         <div class="sub-footer-content">
            <small>© <?php echo date('Y'); ?> Sunshine Nest Daycare | <a href="#">Terms and Conditions</a> | <a href="#">The Privacy Policy</a></small>
             <small class="social">Follow us on: <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/facebook-icon.png" alt="Facebook"></a></small>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
