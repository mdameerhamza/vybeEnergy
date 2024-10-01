<?php 

    /* Template Name: aboutus-temp*/
    get_header();
?>


<section id="about-us-banner" style="background-image: url(<?php the_field('about_banner');?>);">
    <div class="container">
        <div class="about-banner-content">
            <h2 class="about-head">
                <?php the_title()?>
            </h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
                <li class="breadcrumb-item">OUR STORY</li>
            </ul>
        </div>
    </div>

</section>

<section id="about-story">
	<div class="container">
    <div class="story-span">
    <?php if ( $abt_story_heading = get_field( 'abt_story_heading' ) ) : ?>
        <span class="heading-1"><?php echo esc_html( $abt_story_heading ); ?></span>
    <?php endif; ?>
    </div>
		</div>


    <div class="story-content">
        <div class="story-text">
                <?php if ( $story_heading = get_field( 'story_heading' ) ) : ?>
                    <h2 class="story-head"><?php echo esc_html( $story_heading ); ?> </h2>
                <?php endif; ?>
           
                <?php if ( $story_tagline = get_field( 'story_tagline' ) ) : ?>
                <?php echo $story_tagline; ?>
                <?php endif; ?>
        </div>

        <div class="story-img">
             <?php if( $abt_story_img = get_field('abt_story_img')):?>
            <img src="<?php the_field('abt_story_img');?>" alt="story-img" class="our-story-img">
            <?php endif; ?>
        </div>
    </div>

</section>

<section id="our-founder">

	 <div class="container">
    <div class="story-span">
    <?php if ( $our_founder_heading = get_field( 'our_founder_heading' ) ) : ?>
        <span class="heading-1"><?php echo esc_html( $our_founder_heading ); ?></span>
    <?php endif; ?>
      
    </div>
		 </div>

    <div class="story-content" id="founder-content">
        <div class="story-text" id="nisha-text">
            <h2 class="story-head">
                Nisha Thirumurthy
            </h2>
            <?php if ( $our_founder_tagline = get_field( 'our_founder_tagline' ) ) : ?>
            <?php echo $our_founder_tagline; ?>
            <?php endif; ?>
        </div>

        <div class="story-img">
             <?php if( $our_founder_img = get_field('our_founder_img')):?>

            <img src="<?php the_field('our_founder_img');?>" alt="story-img" class="our-story-img">
            <?php endif; ?>
        </div>
    </div>

    <div class="our-founder">
        <div class="founder-text">
            <p class="nisha-founder">
            <?php if ( $our_founder_inner_tagline = get_field( 'our_founder_inner_tagline' ) ) : ?>
            <?php echo $our_founder_inner_tagline; ?>
            <?php endif; ?>
            </p>
            <?php if ( $our_founder_more_text = get_field( 'our_founder_more_text' ) ) : ?>
            <?php echo $our_founder_more_text; ?>
            <?php endif; ?>
        </div>
        <div class="founder-bg">
        <?php if( $founder_line = get_field('founder_line')):?>
            <img src="<?php the_field('founder_line');?>" alt="#" class="founder-bg-img">
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="client">
	<div class="container">
    <div class="client-span">
    <?php if ( $client_heading = get_field( 'client_heading' ) ) : ?>
        <span class="heading-1"><?php echo esc_html( $client_heading ); ?></span>
    <?php endif; ?>
      
    </div>
	</div>

    <div class="client-content">
        <div class="client-name">
            <?php if( have_rows('client_img_repeater') ):  while ( have_rows('client_img_repeater') ) : the_row(); ?>
            <div class="client-brand">
                <?php if( $client_image = get_sub_field('client_image')):?>
                <img src="<?php the_sub_field('client_image');?>" alt="avalon-bay" class="bay">
                <?php endif; ?>
            </div>
            <?php endwhile; endif; ?>

        </div>

        <div class="client-text">
        <?php if ( $client_right_heading = get_field( 'client_right_heading' ) ) : ?>
            <h2 class="clied-head"><?php echo esc_html( $client_right_heading ); ?></h2>
        <?php endif; ?>

            <?php if ( $client_tagline = get_field( 'client_tagline' ) ) : ?>
            <?php echo $client_tagline; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="mission">
	 <div class="container">
    <div class="mission-span">
    <?php if ( $mission_heading = get_field( 'mission_heading' ) ) : ?>
        <span class="heading-1 "><?php echo esc_html( $mission_heading ); ?></span>
    <?php endif; ?>
    </div>
		 </div>


    <div class="mission-content">

        <div class="mission-text">
        <?php if ( $mission_subheading = get_field( 'mission_subheading' ) ) : ?>
            <h2 class="mission-head"><?php echo esc_html( $mission_subheading ); ?></h2>
        <?php endif; ?>
         
            <?php if ( $mission_tagline = get_field( 'mission_tagline' ) ) : ?>
            <?php echo $mission_tagline; ?>
            <?php endif; ?>
            <?php 
            $link = get_field('meet_btn');
            if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            ?>

            <a href="<?php echo esc_url( $link_url ); ?>" class="meet-btn"><?php echo esc_html( $link_title ); ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arrow.svg" alt="#"
                    class="btn-arrow"></a>
            <?php endif; ?>
        </div>


        <div class="mission-img">
            <?php if( have_rows('mission_img_repeater') ):  while ( have_rows('mission_img_repeater') ) : the_row(); ?>
            <div class="founder-brand">
               <?php if( $mission_image = get_sub_field('mission_image')):?>
                <img src="<?php the_sub_field('mission_image');?>" alt="avalon-bay" class="founder-msn-img">
                <?php endif; ?>
            </div>
            <?php endwhile; endif; ?>
       
        </div>


    </div>

</section>

<section id="about-video">
    <div class="container">
        <div class="video-content">
        <?php if ( $about_video_heading = get_field( 'about_video_heading' ) ) : ?>
            <span class="heading-2"> <?php echo esc_html( $about_video_heading ); ?></span>
        <?php endif; ?>
        <?php if ( $about_video_tagline = get_field( 'about_video_tagline' ) ) : ?>
            <h2 class="video-text"><?php echo esc_html( $about_video_tagline ); ?></h2>
        <?php endif; ?>
          
        </div>

        <div class="card">
            <a data-fancybox data-width="800" data-height="400"
                href="<?php the_field('about_video_link');?>">
                <div class="video-box" id="about-video-img"
                    style="background-image:url(<?php the_field('about_video_thumbnail');?>;">
                    <div class="pulse"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/play-btn.svg" alt="video-play-btn"
                            class="video-play-btn">
                    </div>
                </div>
            </a>

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