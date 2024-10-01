<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vybe-energy
 */

?>

	</main>
	<section id="trust">
<div class="container">
    <div class="trust-content">
        <div class="trust-text">
            <?php if ( $trusted_by_heading = get_field( 'trusted_by_heading', 'options' ) ) : ?>
                <h4 class="lead-head"><?php echo esc_html( $trusted_by_heading ); ?></h4>
            <?php endif; ?>
        </div>
        <div class="trust-logo">
            <?php if( have_rows('trusted_by_repeater','option') ):  while ( have_rows('trusted_by_repeater','option') ) : the_row(); ?>
            <img src="<?php the_sub_field('trusted_by_icons','option'); ?>" alt="#" class="footer-logo">
            <?php endwhile; endif; ?>
         
        </div>
    </div>
</div>
</section>
	
	<footer id="footer" style="background-image: url(<?php the_field('footer_background','option');?>);">

		<div class="head-container">
			<div class="footer-energy">
				<div class="footer-content">
					<div class="footer-vybe">
					<?php if ( $footer_logo = get_field( 'footer_logo','option' ) ) : ?>
						<img src="<?php the_field('footer_logo','option');?>" alt="logo" class="footer-vybe-logo">
						<?php endif; ?>
						
						<?php if ( $logo_discription = get_field( 'logo_discription', 'options' ) ) : ?>
							<p class="footer-text"><?php echo $logo_discription; ?></p>
                        <?php endif; ?>
						
					</div>

					<div class="footer-nav">
						<div class="nav-content">
							<h5 class="link">Links</h5>
							<nav class="nav-link">
					
								<?php
                               wp_nav_menu(array(
                            'theme_location' => 'footer-menu',
                            'menu_id' => '',
                            'order' => '',
                            'menu_class' => 'footer-ul'
                             ));
                             ?>

							</nav>
						</div>

						<div class="nav-content">
							<h5 class="link">Technology Solutions</h5>
							<nav class="nav-link">
							<?php
                               wp_nav_menu(array(
                            'theme_location' => 'footer-menu2',
                            'menu_id' => '',
                            'order' => '',
                            'menu_class' => 'footer-ul'
                             ));
                             ?>

							</nav>
						</div>

						<div class="nav-content">
							<h5 class="link">Resources</h5>
							<nav class="nav-link">
							<?php
                               wp_nav_menu(array(
                            'theme_location' => 'footer-menu3',
                            'menu_id' => '',
                            'order' => '',
                            'menu_class' => 'footer-ul'
                             ));
                             ?>

							</nav>
						</div>
					</div>

				</div>

				<div class="copyright">
					<div class="rights">
					<?php if ( $copyright_text = get_field( 'copyright_text', 'options' ) ) : ?>
						<p class="copyright-text"><?php echo $copyright_text; ?></p>
                    <?php endif; ?>
					
					</div>
					<div class="social">
					    <?php if( have_rows('social_repeater','option') ):  while ( have_rows('social_repeater','option') ) : the_row(); ?>

						<a href="<?php the_sub_field('social_links','option'); ?>" class="social-links"><?php the_sub_field('social_name','option'); ?></a>
						<?php endwhile; endif; ?>
		
					</div>
				</div>
			</div>
			<div class="vybe-bottom">
			<?php if ( $bottom_logo = get_field( 'bottom_logo','option' ) ) : ?>
				<img src="<?php the_field('bottom_logo','option');?>" alt="logo" class="bottom-logo">
				<?php endif; ?>
			</div>
		</div>
	</footer>



<div class="loader">
	<div class="PageTransition_wipe__uLiXd PageTransition_wipe1__gvuPm"></div>
	<div class="PageTransition_wipe__uLiXd PageTransition_wipe2__6OMcJ"></div>
</div>
<div class="loader2">
</div>



</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>




</body>
</html>
