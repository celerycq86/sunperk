<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Corporate Lite
 */
?>
        <div class="copyright-wrapper">
            <div class="footer-menu">
                <div class="inner">
                    <h2 class="footer-info">Our dedicated and experienced professionals will be happy to assist you!</h2>
                    <div class="container clearfix">
                        <div class="services-box">
                            <p>Follow us</p>
                            <?php get_template_part( 'menu', 'social' ); ?>
                        </div>
                        <div class="services-box menu-box">
                            <?php wp_nav_menu(array('theme_location' => 'footer')); ?>
                        </div>
                        <div class="services-box">
                            <p>SUNPERK SITE FURNISHINGS</p>
                            <ul>
                                <li>Tel: 647-707-6878</li>
                                <li>Toll Free: 1-888-863-7807</li>
                                <li>Fax: 1-888-962-1191</li>
                                <li>Email: info@sunperk.ca</li>
                            </ul>
                        </div>
                        <div class="services-box">
                            <p>&nbsp;</p>
                            <ul>
                                <li>Office Hours:</li>
                                <li>Mon-Fri, 9:00 am – 5:00 pm Eastern Time (US&Canada)</li>   
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="inner">
                    <p><?php echo esc_attr(get_theme_mod('footer_copy')); ?></p>  
                </div>
            </div>
        </div>
    </div>
<?php wp_footer(); ?>

</body>
</html>