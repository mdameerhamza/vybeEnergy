<?php 

    /* Template Name: home-temp*/
    get_header();
?>


<section id="banner" style="background-image: url(<?php the_field('home_banner');?>);">

    <div class="container">
        <div class="banner-content">
            <?php if ( $banner_heading = get_field( 'banner_heading' ) ) : ?>
	            <h1 class="banner-heading" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear"><?php echo $banner_heading ; ?></h1>
            <?php endif; ?>
            
           
        </div>

        <div class="banner-text">
        <?php if ( $banner_tagline = get_field( 'banner_tagline' ) ) : ?>
	        <p class="banner-para" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear"><?php echo $banner_tagline; ?></p>
        <?php endif; ?>
           
    
            <a href="<?php the_field('banner_btn');?>" class="arrow-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-down_right.svg" alt="#" class="right-down-arrow"></a>
        </div>
    </div>

</section>

<section id="banner-bottom">
<div class="container">
    <div class="trust-head" data-aos="fade-down" data-aos-duration="1000" data-aos-easing="linear">
        <?php if ( $trusted_heading = get_field( 'trusted_heading' ) ) : ?>
            <h2 class="trust"><?php echo esc_html( $trusted_heading ); ?></h2>
        <?php endif; ?>
    </div>

    <div class="slick-carousel trust-banner">
        <?php if( have_rows('trusted_repeater') ):  while ( have_rows('trusted_repeater') ) : the_row(); ?>
        <div class="slick-content">
            <img class="image slick-image" src="<?php the_sub_field('trusted_images'); ?>" alt="#">
        </div>
        <?php endwhile; endif; ?>

    </div>
	 <div class="arrow-wrapper">
                    <span class="slickPrev slide-arrow prev-arrow custom-prev"><i class="fa-solid fa-angle-left"></i></span>
                    <span class="slickNext slide-arrow next-arrow custom-next"><i class="fa-solid fa-angle-right"></i></span>
                </div>
</div>
</section>

<section id="case">
<div class="case-content">
    <div class="container">
        <div class="our-case" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="linear">
            <?php if ( $case_heading = get_field( 'case_heading' ) ) : ?>
                <span class="heading-1"><?php echo esc_html( $case_heading ); ?></span>
            <?php endif; ?>
            <?php if ( $cases_subheading = get_field( 'cases_subheading' ) ) : ?>
                <h2 class="case-heading"><?php echo esc_html( $cases_subheading ); ?></h2>
            <?php endif; ?>
            <?php if ( $cases_tagline = get_field( 'cases_tagline' ) ) : ?>
                <p class="case-text"><?php echo $cases_tagline; ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="group-1 top-absolute">
        <?php if( $case_back_img = get_field('case_back_img')):?>
		
		<div class="holder">
                <img src="<?php bloginfo('template_url'); ?>/assets/icons/big-path.png" alt="#" class="big-path" />
                <div class="default-example">
                  <div class="path-animation transition-all running">
                    <img src="<?php bloginfo('template_url'); ?>/assets/icons/orange-dotted-circle.svg" alt="#" />
                  </div>
                </div>
                <div class="default-example">
                  <div class="path-animation2 transition-all running">
                    <img src="<?php bloginfo('template_url'); ?>/assets/icons/orange-circle.svg" alt="#" />
                  </div>
                </div>
                <div class="default-example">
                  <div class="path-animation3 transition-all running">
                    <img src="<?php bloginfo('template_url'); ?>/assets/icons/green-bar.svg" alt="#" />
                  </div>
                </div>
                <div class="default-example">
                  <div class="path-animation4 transition-all running">
                    <img src="<?php bloginfo('template_url'); ?>/assets/icons/green-circle.png" alt="#" />
                  </div>
                </div>
                <div class="default-example">
                  <div class="path-animation5 transition-all running">
                    <img src="<?php bloginfo('template_url'); ?>/assets/icons/orange-bar.png" alt="#" />
                  </div>
                </div>
              </div>
		
		
        <?php endif; ?>
    </div>
</div>
	<div class="techo-case">
		<div class="container">
			<div class="techo-flex">
				<?php if( have_rows('techno_repeater') ):  while ( have_rows('techno_repeater') ) : the_row(); ?>
				<a href="<?php the_sub_field('techno_url'); ?>" class="techo-width">
					<div href="<?php the_sub_field('techno_url'); ?>">
					<img src="<?php the_sub_field('techno_img'); ?>">
					<h3>
						<?php the_sub_field('techno_name'); ?>
					</h3>
					</div>
				</a>
				<?php endwhile; endif; ?>
			
			</div>
		</div>
	</div>


<div class="case-images">
    <div class="container">
        <div class="ai-content">
			<?php if( have_rows('use_case_repeater') ):  while ( have_rows('use_case_repeater') ) : the_row(); ?>
            <div class="ai-images" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
                <img src="<?php the_sub_field('case_thumbnail_img');?>" alt="#" class="hvac">

                <div class="ai-text">
					<h3 class="ai-hvac"><?php if ( $case_title_name = get_sub_field( 'case_title_name' ) ) : ?></h3>
	<?php echo esc_html( $case_title_name ); ?>
<?php endif; ?>
                  

                    <span class="line"></span>
                    <a href="<?php the_sub_field('learn_more_link')?>" class="orange">Learn More</a>
                </div>
            </div>
			<?php endwhile; endif; ?>

        </div>
    </div>
</div>
</section>

<section id="home-video">

<div class="container">
    <div class="video-content" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
<!--          <?php if ( $video_heading = get_field( 'video_heading' ) ) : ?>
            <span class="heading-2"><?php echo esc_html( $video_heading ); ?></span>
        <?php endif; ?> -->
        <?php if ( $video_subheading = get_field( 'video_subheading' ) ) : ?>
            <h2 class="video-text"><?php echo esc_html( $video_subheading ); ?></h2>
        <?php endif; ?>
    </div>

    <div class="card" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-easing="linear">

		
		 <div class="video-wrapper">
                            <video class="video-box" id="myvid"  autoplay muted loop>

                                <source src="<?php the_field('vybe-video');?>">

                            </video>
                            <div class="pulse" id="vidbutton"><i class="fa-solid fa-play playaudio"></i><i class="fa-solid fa-pause pauseAudio"></i></div>
                        </div>

    </div>
</div>
</section>

<section id="services">
<div class="container">
    <div class="services-content" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-easing="linear">
         <?php if ( $services_heading = get_field( 'services_heading' ) ) : ?>
            <span class="heading-2"><?php echo esc_html( $services_heading ); ?></span>
         <?php endif; ?>
         <?php if ( $services_subheading = get_field( 'services_subheading' ) ) : ?>
            <h3 class="services-heading"><?php echo esc_html( $services_subheading ); ?></h3>
         <?php endif; ?> 
    </div>
</div>

<div class="slider slider-thumb tabs-tags">
<?php if( have_rows('services_repeater') ):  while ( have_rows('services_repeater') ) : the_row(); ?>
    <div class="tab-btn">
         <span class="tabs-tags__tag"><?php the_sub_field('services_name'); ?></span>
        <p class="number"><?php the_sub_field('services_count'); ?></p>
    </div>
    <?php endwhile; endif; ?>

</div>
	<div class="container">
		
	
<div class="slider slider-content tabs-content" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
    <?php if( have_rows('services_repeater') ):  while ( have_rows('services_repeater') ) : the_row(); ?>
    <div class="tabs-content__text"> <img src="<?php the_sub_field('services_img'); ?>" alt="tab-image" class="tab-img">
    </div>
    <?php endwhile; endif; ?>

</div>
	</div>
</section>

<section id="choose">
<div class="container">
    <div class="why" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
         <?php if ( $choose_heading = get_field( 'choose_heading' ) ) : ?>
            <span class="heading-1"><?php echo esc_html( $choose_heading ); ?></span>
         <?php endif; ?>
   

    </div>
</div>

<div class="choose-content">

    <div class="why-chose" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
        <?php if( have_rows('choose_repeater') ):  while ( have_rows('choose_repeater') ) : the_row(); ?>
        <div class="choose-option" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
        <?php if( $choose_icon = get_sub_field('choose_icon')):?>
            <img src="<?php the_sub_field('choose_icon');?>" alt="#" class="choose-img">
            <?php endif; ?>
            <?php if ( $choose_title = get_sub_field( 'choose_title' ) ) : ?>
                <h3 class="choose-head"><?php echo esc_html( $choose_title ); ?></h3>
            <?php endif; ?>
        </div>
        <?php endwhile; endif; ?>

    </div>

</div>
</section>

<section id="stats">
<div class="container">
    <?php if ( $stats_heading = get_field( 'stats_heading' ) ) : ?>
        <span class="heading-2"><?php echo esc_html( $stats_heading ); ?>  </span>
    <?php endif; ?>
    <?php if ( $stats_subheading = get_field( 'stats_subheading' ) ) : ?>
        <h2 class="stat-heading" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear"><?php echo esc_html( $stats_subheading ); ?></h2>
    <?php endif; ?>
</div>
<div class="stat-img" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
    <?php if( $stats_line_img = get_field('stats_line_img')):?>
    <div class="group-1 top-absolute">
              <!-- <img src="images/Group-1.png" alt="#" class="image-group-1"> -->
              <div class="holder">
                <img src="<?php bloginfo('template_url'); ?>/assets/icons/small-path.png" alt="#" class="#" style="display: block; margin-top:1px;" />
                <div class="default-example">
                  <div class="path-animation achivement transition-all running">
                    <img src="<?php bloginfo('template_url'); ?>/assets/icons/orange-dotted-circle.svg" alt="#" />
                  </div>
                </div>
                <div class="default-example">
                  <div class="path-animation achivement second transition-all running">
                    <img src="<?php bloginfo('template_url'); ?>/assets/icons/small-orange-circle.png" alt="#" />
                  </div>
                </div>
                <div class="default-example">
                  <div class="path-animation achivement third transition-all running">
                    <img src="<?php bloginfo('template_url'); ?>/assets/icons/orange-bar.png" alt="#" />
                  </div>
                </div>
                <div class="default-example">
                  <div class="path-animation achivement fourth transition-all running">
                    <img src="<?php bloginfo('template_url'); ?>/assets/icons/small-green-circle.png" alt="#" />
                  </div>
                </div>
              </div>
            </div>
    <?php endif; ?>
</div>

<div class="choose-content" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">

    <div class="why-chose" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
    <?php if( have_rows('stats_repeater') ):  while ( have_rows('stats_repeater') ) : the_row(); ?>
        <div class="choose-option" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
            <?php if( $stats_icon = get_sub_field('stats_icon')):?>
            <img src="<?php the_sub_field('stats_icon');?>" alt="#" class="stat-box-img">
            <?php endif; ?>
            <?php if ( $stats_price = get_sub_field( 'stats_price' ) ) : ?>
                <h3 class="stat-head"><?php echo esc_html( $stats_price ); ?></h3>
            <?php endif; ?>
            <?php if ( $stats_description = get_sub_field( 'stats_description' ) ) : ?>
                <p class="stat-text"><?php echo esc_html( $stats_description ); ?></p>
            <?php endif; ?>
        </div>
        <?php endwhile; endif; ?>
    </div>

</div>
</section>

<section id="about">
<div class="container">
<div class="abtt-flex">
<div class="abtt-width">
<!-- 	<?php if ( $about_us_heading = get_field( 'about_us_heading' ) ) : ?>
	<span class="heading-1"><?php echo esc_html( $about_us_heading ); ?></span>
<?php endif; ?> -->
<?php if ( $about_us_subheading = get_field( 'about_us_subheading' ) ) : ?>
	<h2 class="about-heading" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear"><?php echo esc_html( $about_us_subheading ); ?></h2>
<?php endif; ?>
		<div class="about-text" data-aos="fade-right" data-aos-duration="1500" data-aos-easing="linear">
    <?php if ( $about_us_tagline = get_field( 'about_us_tagline' ) ) : ?>
	<?php echo $about_us_tagline; ?>
     <?php endif; ?>
    </div>
	<div class="about-line">
              <div class="holder">
                <img src="<?php bloginfo('template_url'); ?>/assets/icons/small-left-path.png" alt="#" class="big-path" />
                <div class="default-example">
                  <div class="path-animation about_line zero transition-all running">
                    <img src="<?php bloginfo('template_url'); ?>/assets/icons/orange-dotted-circle.svg" alt="#" />
                  </div>
                </div>
                <div class="default-example">
                  <div class="path-animation about_line one transition-all running">
                    <img src="<?php bloginfo('template_url'); ?>/assets/icons/orange-circle.svg" alt="#" />
                  </div>
                </div>
                <div class="default-example">
                  <div class="path-animation about_line two transition-all running">
                    <img src="<?php bloginfo('template_url'); ?>/assets/icons/green-bar.svg" alt="#" />
                  </div>
                </div>
                <div class="default-example">
                  <div class="path-animation about_line three transition-all running">
                    <img src="<?php bloginfo('template_url'); ?>/assets/icons/green-circle.png" alt="#" />
                  </div>
                </div>
              </div>
            </div>
	
</div>
<div class="abtt-width">
	   <div class="about-img" data-aos="fade-left" data-aos-duration="1500" data-aos-easing="linear">
    <?php if( $about_right_img = get_field('about_right_img')):?>
        <img src="<?php the_field('about_right_img');?>" alt="about-image" class="about-text-img">
        <?php endif; ?>
    </div>

</div>
</div>
<!-- <?php if ( $about_us_heading = get_field( 'about_us_heading' ) ) : ?>
	<span class="heading-1"><?php echo esc_html( $about_us_heading ); ?></span>
<?php endif; ?>
<?php if ( $about_us_subheading = get_field( 'about_us_subheading' ) ) : ?>
	<h2 class="about-heading" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear"><?php echo esc_html( $about_us_subheading ); ?></h2>
<?php endif; ?> -->
	
<!-- 	<div class="about-text" data-aos="fade-right" data-aos-duration="1500" data-aos-easing="linear">
    <?php if ( $about_us_tagline = get_field( 'about_us_tagline' ) ) : ?>
	<?php echo $about_us_tagline; ?>
     <?php endif; ?>
    </div> -->
</div>

<!-- <div class="about-line">
<?php if( $about_us_line = get_field('about_us_line')):?>
    <img src="<?php the_field('about_us_line');?>" alt="about-line" class="about-line-img">
    <?php endif; ?>
</div> -->

<!-- <div class="about-content">
    <div class="about-text" data-aos="fade-right" data-aos-duration="1500" data-aos-easing="linear">
    <?php if ( $about_us_tagline = get_field( 'about_us_tagline' ) ) : ?>
	<?php echo $about_us_tagline; ?>
     <?php endif; ?>
    </div>

    <div class="about-img" data-aos="fade-left" data-aos-duration="1500" data-aos-easing="linear">
    <?php if( $about_right_img = get_field('about_right_img')):?>
        <img src="<?php the_field('about_right_img');?>" alt="about-image" class="about-text-img">
        <?php endif; ?>
    </div>
</div> -->
</section>

<section id="started" style="background-image: url(<?php the_field('started_background');?>);">
<div class="container">
    <div class="started-content">
    <?php if ( $started_subheading = get_field( 'started_subheading' ) ) : ?>
        <span class="heading-3"><?php echo esc_html( $started_subheading ); ?></span>
    <?php endif; ?>
    <?php if ( $started_heading = get_field( 'started_heading' ) ) : ?>
        <h2 class="started-heading"><?php echo esc_html( $started_heading ); ?></h2>
    <?php endif; ?>
		      <div class="get-text1">
        <?php if ( $started_tagline = get_field( 'started_tagline' ) ) : ?>
            <p class="get-para"><?php echo esc_html( $started_tagline ); ?></p>
        <?php endif; ?>
        <?php 
            $link = get_field('started_get_btn');
            if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
        ?>

            <a href="<?php echo esc_url( $link_url ); ?>" class="get-start-btn"><?php echo esc_html( $link_title ); ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arrow.svg" alt="#"
                    class="btn-arrow"></a>
        <?php endif; ?>
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