<?php 

    /* Template Name: strategic-consulting-team-temp*/
    get_header();
?>


            <section id="strategic-banner" style="background-image: url(<?php the_field('strategic_banner');?>);">
                <div class="container">
                    <div class="contact-us-banner-content">
                        <?php if ( $strategic_heading = get_field( 'strategic_heading' ) ) : ?>
                            <h2 class="contact-head"><?php echo $strategic_heading ; ?></h2>
                        <?php endif; ?>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
                            <li class="breadcrumb-item"><?php the_title();?></li>
                        </ul>
                    </div>
                </div>

            </section>

            <section id="hvac-unlock">
                <div class="hvac-content">
                    <div class="container">
                        <div class="unlock">
                            <?php if ( $our_strategic_heading = get_field( 'our_strategic_heading' ) ) : ?>
                                <h3 class="unlock-head"><?php echo esc_html( $our_strategic_heading ); ?></h3>
                            <?php endif; ?>
                            <?php if( $strategic_line_img = get_field('strategic_line_img')):?>
                            <img src="<?php the_field('strategic_line_img');?>" alt="#" class="hvac-bg-img">
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </section>
            <section id="strategic-client">
                <div class="container">
                        <?php if ( $strategic_trusted = get_field( 'strategic_trusted' ) ) : ?>
                            <span class="heading-1"><?php echo esc_html( $strategic_trusted ); ?></span>
                        <?php endif; ?>

                    <div class="strategic-client-content">
                        <div class="slick-carousel trust-banner">
                            <?php if( have_rows('strategic_trusted_repeater') ):  while ( have_rows('strategic_trusted_repeater') ) : the_row(); ?>
                            <div class="slick-content">
                                <?php if( $strategic_trusted_icons = get_sub_field('strategic_trusted_icons')):?>
                                <img class="image slick-image" src="<?php the_sub_field('strategic_trusted_icons');?>" alt="#">
                                <?php endif; ?>
                            </div>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <section id="goal">
                <?php if( have_rows('strategic_plan_repeater') ):  while ( have_rows('strategic_plan_repeater') ) : the_row(); ?>
                <div class="goal-str">
                    <div class="goal-span">
                        <?php if ( $plan_count = get_sub_field( 'plan_count' ) ) : ?>
                            <span class="heading-1"><?php echo esc_html( $plan_count ); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="goal-content">
                        <div class="goal-text">
                            <?php if ( $strategic_plan_heading = get_sub_field( 'strategic_plan_heading' ) ) : ?>
                                <h2 class="goal-head"><?php echo esc_html( $strategic_plan_heading ); ?></h2>
                            <?php endif; ?>
                            <?php if ( $strategic_plan_tagline = get_sub_field( 'strategic_plan_tagline' ) ) : ?>
                                <p class="goal-para"><?php echo $strategic_plan_tagline; ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="goal-img">
                            <?php if( $strategic_plan_imgs = get_sub_field('strategic_plan_imgs')):?>
                            <img src="<?php the_sub_field('strategic_plan_imgs');?>" alt="#" class="goal-img-1">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </section>
<!--             <section id="strategy">
                <div class="container">
                    <div class="strategy-content">
                    <?php if( have_rows('coupen_repeater') ):  while ( have_rows('coupen_repeater') ) : the_row(); ?>
                        <ul class="measure-main">
                            <?php if( have_rows('coupen_inner_repeater') ):  while ( have_rows('coupen_inner_repeater') ) : the_row(); ?>
                            <li>
                                <div class="measure-image" style="background-image: url(<?php the_sub_field('coupen_img');?>);">
                                    <?php if ( $coupen_name = get_sub_field( 'coupen_name' ) ) : ?>
                                    <p><?php echo esc_html( $coupen_name ); ?></p>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <?php endwhile; endif; ?>
                        </ul>
                        <?php endwhile; endif; ?>
                


                    </div>
                </div>
            </section> -->

            <section id="project">
                <div class="container">
                    <div class="project-span">
                    <?php if ( $projects_heading = get_field( 'projects_heading' ) ) : ?>
                        <span class="heading-1"><?php echo esc_html( $projects_heading ); ?></span>
                    <?php endif; ?>
                    
                    </div>
                </div>
                <div class="project-content">
                    <div class="container">
                        <div class="portfolio">
                            <?php if( have_rows('projects_repeater') ):  while ( have_rows('projects_repeater') ) : the_row(); ?>
                            <div class="project-graph">
                                <div class="project-img">
                                    <?php if( $projects_img = get_sub_field('projects_img')):?>
                                    <img src="<?php the_sub_field('projects_img');?>" alt="#" class="portfolio-img">
                                    <?php endif; ?>
                                </div>
                                <div class="project-text">
                                    <?php if ( $projects_name = get_sub_field( 'projects_name' ) ) : ?>
                                        <h3 class="ev-head"><?php echo esc_html( $projects_name ); ?></h3>
                                    <?php endif; ?>
                                  
                                    <div class="download">
                                        <?php 
                                        $link = get_sub_field('download_btn');
                                        if( $link ): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                
                                        ?>
                                        <a href="?php echo esc_url( $link_url ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/download.svg" alt="download"
                                                class="download-img"><span class="case-orange"><?php echo esc_html( $link_title ); ?></span></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                    <span class="project-bar-1"></span>
                    <span class="project-bar-2"></span>
                    <span class="project-bar-3"></span>
                </div>
            </section>

<!-- <section id="resources">
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
 -->
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