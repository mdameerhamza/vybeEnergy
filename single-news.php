<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vybe-energy
 */

get_header();
?>

	<main id="primary" class="site-main">

<section id="blog-page-banner" style="background-image: url(https://cmswebdeveloper.com/wp-vybeenergy/wp-content/uploads/2023/12/approach-blog-banner.png);">

	<div class="container">
		<div class="blog-banner-content">
			<h2 class="approach-blog-head" id="guide-head">
				Guide: Maximizing Savings for<span class="orange"> Your Business</span>
			</h2>
			<ul class="breadcrumb" id="slash">
				<li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
				<li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>/latest-news/"> Latest news</a></li>
				<li class="breadcrumb-item"> <?php the_title()?></li>
			</ul>
		</div>
	</div>

</section>

<section id="approch-blog">
	<div class="blog-container">
		<div class="apprch-blog-content">
			<div class="blog-span">
				<span class="heading-2"><?php echo get_the_date('M j, Y');?></span>
			</div>

			<?php the_content()?>
	</div>

</section>


<section id="blog-resource">
	<div class="container">
		<div class="blog-latest-text">
			<span class="heading-1">News</span>
			<h2 class="latest-head">Related News</h2>
		</div>
	</div>
	<div class="resources-content">
		<div class="container">
        <div class="latest-content-news-page">
               <?php $args = array( 'post_type' => 'news', 'posts_per_page' => 3, 'order' => 'ASC' ); $the_query = new WP_Query( $args ); ?>
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
		</div>
	</div>
</section>

	</main><!-- #main -->

<?php

get_footer();
