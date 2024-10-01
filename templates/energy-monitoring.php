<?php 

    /* Template Name: energy-monitoring-temp*/
    get_header();
?>


<section id="chiller-banner" style="background-image: url(<?php the_field('hvac_banner');?>);">

    <div class="container">

        <div class="news-banner-content">
        <?php if ( $hvac_heading = get_field( 'hvac_heading' ) ) : ?>
                                <h2 class="latest-news-head"><?php echo $hvac_heading ; ?></h2>
                            <?php endif; ?>
            <ul class="breadcrumb" id="slash">
                <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
                <li class="breadcrumb-item"><a href="#">Technology Solutions</a></li>
                <li class="breadcrumb-item"> Energy Monitoring</li>
            </ul>
        </div>
    </div>
</section>
<section id="hvac-unlock">
                <div class="hvac-content">
                    <div class="container">
                    <div class="unlock">
                            <?php if ( $hvac_tagline = get_field( 'hvac_tagline' ) ) : ?>
                                <h3 class="unlock-head"><?php echo esc_html( $hvac_tagline ); ?></h3>
                            <?php endif; ?>
                            <?php if( $hvac_line_img = get_field('hvac_line_img')):?>
                         
                            <img src="<?php the_field('hvac_line_img');?>" alt="#" class="hvac-bg-img">
                            <?php endif; ?>
                        </div>
                    </div>
                    </div>
                </div>

</section>

<section id="hvac-feature">
    <div class="container">
        <div class="hvac-span">
        <?php if ( $features_subheading = get_field( 'features_subheading' ) ) : ?>
                            <span class="heading-1"><?php echo esc_html( $features_subheading ); ?></span>
                        <?php endif; ?>
        </div>
        </div>
    </div>

    <div class="feature-content energy-content">
        <div class="virtual-text energy-virtual">
        <?php if ( $features_heading = get_field( 'features_heading' ) ) : ?>
                            <h3 class="feature-head"><?php echo esc_html( $features_heading ); ?></h3>
                        <?php endif; ?>
            <div class="double-tick">
                <?php if( have_rows('features_repeater') ):  while ( have_rows('features_repeater') ) : the_row(); ?>
                <div class="tick-energy">
                <?php if( $features_tick = get_sub_field('features_tick')):?>
                                <img src="<?php the_sub_field('features_tick');?>" alt="double-tick" class="tick-img">
                                <?php endif; ?>
                    <div class="energy-text">  
                    <?php if ( $features_list = get_sub_field( 'features_list' ) ) : ?>                                 
                        <h4 class="tick-head"><?php echo esc_html( $features_list ); ?></h4>
                        <?php endif; ?>
                        <?php if ( $feature_content = get_sub_field( 'feature_content' ) ) : ?>
                            <p class="energy-tick"><?php echo $feature_content; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endwhile; endif; ?>


            </div>
        </div>

        <div class="feature-img energy-ftr-img">
        <?php if( $features_right_img = get_field('features_right_img')):?>
                        <img src="<?php the_field('features_right_img');?>" alt="feature-img" class="fture-img">
                        <?php endif; ?>
        </div>
    </div>


</section>

<section id="case-study">
    <div class="container">
        <div class="case-study-span">
        <?php if ( $study_heading = get_field( 'study_heading' ) ) : ?>
                            <span class="heading-1"><?php echo esc_html( $study_heading ); ?></span>
                        <?php endif; ?>
        </div>
    </div>

    <div class="case-study-content">
                    <div class="study-img">
                    <?php if( $study_img = get_field('study_img')):?>
                        <img src="<?php the_field('study_img');?>" alt="graph" class="graph">
                        <?php endif; ?>
                    </div>

                    <div class="study-text">
                    <?php if ( $opsu_heading = get_field( 'opsu_heading' ) ) : ?>
                                <h3 class="study-head"><?php echo esc_html( $opsu_heading ); ?></h3>
                            <?php endif; ?>
                            <?php if ( $study_tagline = get_field( 'study_tagline' ) ) : ?>
                                <p class="study-para"><?php echo $study_tagline; ?></p>
                            <?php endif; ?>
                            <div class="download">
                            <?php 
                            $link = get_field('study_download_btn');
                            if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            
                            ?>
                            <a href="<?php echo esc_url( $link_url ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/download.svg" alt="download" class="download-img"><span
                                    class="case-orange"><?php echo esc_html( $link_title ); ?></span></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

</section>

<section id="case-trust">
    <div class="container">
        <div class="peak-trust-content">
            <div class="case-trust-text em-text">
            <?php if ( $service_trust_heading = get_field( 'service_trust_heading' ) ) : ?>
                            <h3 class="case-trust-head"> <?php echo esc_html( $service_trust_heading ); ?></h3>
                        <?php endif; ?>
            </div>
            <div class="major-client peak-logo em">
            <?php if( have_rows('service_trust_repeater') ):  while ( have_rows('service_trust_repeater') ) : the_row(); ?>
                            <?php if( $service_trust_imgs = get_sub_field('service_trust_imgs')):?>
                            <img src="<?php the_sub_field('service_trust_imgs');?>" alt="logo" class="opsu-logo">
                            <?php endif; ?>
                            <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>

<section id="resources">
<div class="resources-content">
    <div class="container">
        <div class="latest-content">
            <?php $args = array( 'post_type' => 'post', 'posts_per_page' => 1, 'order' => 'ASC' ); $the_query = new WP_Query( $args ); ?>
            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="resource-img">
                <?php the_post_thumbnail();?>
                <h3 class="guide-head"> <?php the_title();?></h3>

                <div class="calender">
                    <div class="mar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calender.svg" alt="calender">
                        <p class="date"><?php echo get_the_date();?></p>
                    </div>
                    <a href="<?php the_permalink();?>" class="orange">Read More</a>
                </div>


            </div>
            <?php wp_reset_postdata(); endwhile; endif;  ?>

            <div class="latest-text">
                <?php if ( $resource_title = get_field( 'resource_title', 'options' ) ) : ?>
                    <span class="heading-1"><?php echo esc_html( $resource_title ); ?></span>
                <?php endif; ?>
                <?php if ( $latest_title = get_field( 'latest_title', 'options' ) ) : ?>
                    <h2 class="latest-head"><?php echo esc_html( $latest_title ); ?></h2>
                <?php endif; ?>
          
                <?php 
                $link = get_field('all_resource_btn','option');
                if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
              
                ?>

                <a href="<?php echo esc_url( $link_url ); ?>" class="resource-start-btn"><?php echo esc_html( $link_title ); ?><img src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arrow.svg"
                        alt="#" class="btn-arrow"></a>
                <?php endif; ?>
            </div>

            <div class="resource-img">

    <?php
  
    $post_ids = array(446);

  
    $args = array(
        'post_type'      => 'post',
        'post__in'       => $post_ids,
        'orderby'        => 'post__in', 
        'posts_per_page' => count($post_ids),
    );

   
    $custom_query = new WP_Query($args);

  
    if ($custom_query->have_posts()) {
        
        while ($custom_query->have_posts()) {
            $custom_query->the_post();
    ?>

            <?php the_post_thumbnail(); ?>

            <h3 class="guide-head"><?php the_title(); ?></h3>

            <div class="calender">
                <div class="mar">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calender.svg" alt="calender">
                    <p class="date"><?php echo get_the_date(); ?></p>
                </div>
                <a href="<?php the_permalink(); ?>" class="orange">Read More</a>
            </div>

    <?php
        }
        
        wp_reset_postdata();
    } else {
        
        echo 'No posts found';
    }
    ?>

</div>


			
			
        </div>


    </div>
</div>
</section>

<section id="media">
<div class="container">
    <div class="media-content">
        <div class="media-text">
            <?php if ( $latest_new_title = get_field( 'latest_new_title', 'options' ) ) : ?>
                <span class="heading-2"><?php echo esc_html( $latest_new_title ); ?></span>
            <?php endif; ?>
                <?php if ( $latest_news_subtitle = get_field( 'latest_news_subtitle', 'options' ) ) : ?>
                    <h2 class="media-head"><?php echo esc_html( $latest_news_subtitle ); ?></h2>
                <?php endif; ?>
           
                <?php if ( $latest_news_paragraph = get_field( 'latest_news_paragraph', 'options' ) ) : ?>
                <?php echo $latest_news_paragraph; ?>
                <?php endif; ?>
        
        </div>

        <div class="thumbnail">
            <?php $args = array( 'post_type' => 'news', 'posts_per_page' => 2, 'order' => 'DSC' ); $the_query = new WP_Query( $args ); ?>
            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="media-thumb">
                <div class="media-img">
                <?php the_post_thumbnail();?>
                </div>
                <div class="media-img-text">
                    <h3 class="key"><?php the_title()?></h3>
                    <div class="media-calender">
                        <div class="mar">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calender.svg" alt="calender">
                            <p class="date"><?php echo get_the_date();?></p>
                        </div>
                        <a href="<?php the_permalink();?>" class="orange">Read More</a>
                    </div>
                </div>

            </div>
            <?php wp_reset_postdata(); endwhile; endif;  ?>

        </div>
    </div>
</div>
</section>




<?php 
    get_footer();
?>