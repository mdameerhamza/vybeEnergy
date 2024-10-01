<?php 

    /* Template Name: contact-us-temp*/
    get_header();
?>

<main id="main">

<section id="contact-us-banner" style="background-image: url(<?php the_field('contact_us_banner');?>);">
    <div class="container">
        <div class="contact-banner-content">
            <h2 class="contact-head">
                <?php the_title()?>
            </h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
                <li class="breadcrumb-item">Contact Us</li>
            </ul>
        </div>
    </div>
</section>

<section id="contact-banner-bottom">
    <div class="container">
        <div class="contact-bottom-content">
           <?php if( have_rows('contact_information_repeater') ):  while ( have_rows('contact_information_repeater') ) : the_row(); ?>
            <div class="contact-detail">
                <img src="<?php the_sub_field('information_icon');?>" alt="mail-box" class="mail-box">
                <?php if ( $information_title = get_sub_field( 'information_title' ) ) : ?>
                    <h3 class="contact-mail"><?php echo esc_html( $information_title ); ?></h3>
                <?php endif; ?>
                <?php 
                $link = get_sub_field('information_link');
                if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                ?>
                <a href="<?php echo esc_url( $link_url ); ?>" class="support"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>

<section id="get-contact">
    <div class="container">
        <div class="get-contact-content">
            <div class="get-touch">
                <?php if ( $get_in_heading = get_field( 'get_in_heading' ) ) : ?>
                    <span class="heading-1"><?php echo esc_html( $get_in_heading ); ?></span>
                <?php endif; ?>
                <?php if ( $get_in_subheading = get_field( 'get_in_subheading' ) ) : ?>
                    <h2 class="get-touch-heading"><?php echo esc_html( $get_in_subheading ); ?></h2>
                <?php endif; ?>
                <?php if ( $get_in_paragraph = get_field( 'get_in_paragraph' ) ) : ?>
                <?php echo $get_in_paragraph; ?>
                <?php endif; ?>
                <?php if( $get_in_line_img = get_field('get_in_line_img')):?>
                <img src="<?php the_field('get_in_line_img');?>" alt="#" class="get-cntct-bg">
                <?php endif; ?>
            </div>


            <div class="fill-form">
            <?php echo do_shortcode( '[contact-form-7 id="bc9822b" title="Contact Us Form"]' ); ?>
				
				


            </div>
        </div>


    </div>
</section>

</main>

<?php 
    get_footer();
?>