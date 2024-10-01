<?php 

    /* Template Name: resources-temp*/
    get_header();
?>

<section id="latest-news-banner" style="background-image: url(<?php the_field('post_page_banner');?>);">

    <div class="container">
        <div class="news-banner-content">
            <?php if ( $post_page_heading = get_field( 'post_page_heading' ) ) : ?>
                <h2 class="latest-news-head"><?php echo $post_page_heading ; ?></h2>
            <?php endif; ?>
            <ul class="breadcrumb" id="slash">
                <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
                <li class="breadcrumb-item"> Latest Resources</li>
            </ul>
        </div>
    </div>

</section>

<section id="latest-news-blog">
    <div class="resources-content">
        <div class="container">
            <div class="latest-content-news-page">
               <?php $args = array( 'post_type' => 'post', 'order' => 'ASC' ); $the_query = new WP_Query( $args ); ?>
               <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="resource-img latest-news-img">
                    <div class="news-latest">
                       <a href="<?php the_permalink();?>">
                       <?php the_post_thumbnail();?>
                        </a>
                        <div class="img-hover">
                            <a href="<?php the_permalink();?>"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/expand.svg" alt="#" class="expand"></a>
                        </div>
                    </div>
                    <h3 class="guide-head"><?php the_title();?></h3>

                    <div class="calender">
                        <div class="mar">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calender.svg" alt="calender">
                            <p class="date"><?php echo get_the_date();?></p>
                        </div>
                        <a href="<?php the_permalink();?>" class="orange">Read More</a>
                    </div>


                </div>
                <?php wp_reset_postdata(); endwhile; endif;  ?>

            </div>
        </div>
        <span class="news-bar-1"></span>
        <span class="news-bar-2"></span>
        <span class="news-bar-3"></span>
        <span class="news-bar-4"></span>
    </div>
</section>



<?php 
    get_footer();
?>