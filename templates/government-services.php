<?php 

    /* Template Name: government-services-team-temp*/
    get_header();
?>



            <section id="gourment-banner" style="background-image: url(<?php the_field('government_banner');?>);">
                <div class="container">
                    <div class="news-banner-content">
                        <?php if ( $government_heading = get_field( 'government_heading' ) ) : ?>
                            <h2 class="latest-news-head"><?php echo $government_heading ; ?></h2>
                        <?php endif; ?>
                        <ul class="breadcrumb" id="slash">
                            <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>/about-us"> about</a></li>
                            <li class="breadcrumb-item"><?php the_title()?></li>
                        </ul>
                    </div>
                </div>

            </section>

            <section id="hvac-unlock">
                <div class="hvac-content">
                    <div class="container">
                        <div class="unlock">
                                <?php if ( $government_tagline = get_field( 'government_tagline' ) ) : ?>
                                    <h4 class="unlock-head"><?php echo $government_tagline; ?></h4>
                                <?php endif; ?>
                                <?php if( $government_line_img = get_field('government_line_img')):?>
                            <img src="<?php the_field('government_line_img');?>" alt="#" class="hvac-bg-img">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <section id="code">
                <div class="code-content">
                    <div class="naics">
                            <?php if ( $codes_heading = get_field( 'codes_heading' ) ) : ?>
                                <h3 class="naics-head"><?php echo esc_html( $codes_heading ); ?></h3>
                            <?php endif; ?>
                        <div class="naics-content">
                            <?php if( have_rows('codes_repeater') ):  while ( have_rows('codes_repeater') ) : the_row(); ?>
                            <p class="naics-text"><?php the_sub_field('codes_name');?></p>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>

                    <div class="ability">
                        <?php if ( $capability_heading = get_field( 'capability_heading' ) ) : ?>
                            <h3 class="ability-head"><?php echo esc_html( $capability_heading ); ?></h3>
                        <?php endif; ?>
                        <?php if ( $capability_tagline = get_field( 'capability_tagline' ) ) : ?>
                            <p class="ability-text"><?php echo esc_html( $capability_tagline ); ?></p>
                        <?php endif; ?>
                            <?php 
                            $link = get_field('download_pdf');
                            if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
    
                            ?>
                        <a href="<?php echo esc_url( $link_url ); ?>" class="pdf-btn"><?php echo esc_html( $link_title ); ?><img src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arrow.svg" alt="#"
                                class="btn-arrow"></a>
                                <?php endif; ?>
                    </div>
                </div>
            </section>

            <section id="core">
				<div class="container">
                <div class="core-head">
                    <?php if ( $core_heading = get_field( 'core_heading' ) ) : ?>
                        <h2 class="core-text"><?php echo esc_html( $core_heading ); ?></h2>
                    <?php endif; ?>
                </div>
					</div>

                <div class="core-content">
                    <?php if( have_rows('core_repeater') ):  while ( have_rows('core_repeater') ) : the_row(); ?>
                    <div class="core-need">
                        <?php if ( $core_title = get_sub_field( 'core_title' ) ) : ?>
                            <h3 class="need-head"><?php echo esc_html( $core_title ); ?></h3>
                        <?php endif; ?>
                        <?php if ( $core_tagline = get_sub_field( 'core_tagline' ) ) : ?>
                            <p class="need-text"><?php echo $core_tagline; ?></p>
                        <?php endif; ?>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
            </section>

            <section id="different">
				<div class="container">
                <div class="diff-head">
                    <?php if ( $differentiators_heading = get_field( 'differentiators_heading' ) ) : ?>
                        <h3 class="diff-text"><?php echo esc_html( $differentiators_heading ); ?></h3>
                    <?php endif; ?>
                </div>
                    <div class="different-content">
                        <?php if( have_rows('differentiators_repeater') ):  while ( have_rows('differentiators_repeater') ) : the_row(); ?>
                        <div class="diff-box">
                        <?php if( $differentiators_icon = get_sub_field('differentiators_icon')):?>
                            <img src="<?php the_sub_field('differentiators_icon');?>" alt="logo" class="diff-box-img">
                            <?php endif; ?>
                            <?php if ( $differentiators_title = get_sub_field( 'differentiators_title' ) ) : ?>
                                <h3 class="diff-box-head"><?php echo esc_html( $differentiators_title ); ?></h3>
                            <?php endif; ?>
                            <?php if ( $differentiators_tagline = get_sub_field( 'differentiators_tagline' ) ) : ?>
                                <p class="diff-box-text"><?php echo $differentiators_tagline; ?></p>
                            <?php endif; ?>
                        </div>
                        <?php endwhile; endif; ?>
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