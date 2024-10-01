<?php 

    /* Template Name: our-team-temp*/
    get_header();
?>

            <section id="team-banner" style="background-image: url(<?php the_field('our_team_banner');?>);">

                <div class="container">
                    <div class="contact-us-banner-content">
                        <h2 class="contact-head">
                            Team
                        </h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
                            <li class="breadcrumb-item">Team</li>
                        </ul>
                    </div>
                </div>

            </section>

            <section id="meett-team">


                <div class="meet-span team-inr-pdng">
                    <?php if ( $meet_team_heading = get_field( 'meet_team_heading' ) ) : ?>
                        <span class="heading-1"><?php echo esc_html( $meet_team_heading ); ?></span>
                    <?php endif; ?>
                  
                </div>


                <div class="meet-team-content">
                   <?php if( have_rows('meet_team_repeater') ):  while ( have_rows('meet_team_repeater') ) : the_row(); ?>
                    <div class="meet-team-member">
                        <div class="our-team-img">
                            <?php if( $meet_team_img = get_sub_field('meet_team_img')):?>
                            <img src="<?php the_sub_field('meet_team_img');?>" alt="nisha-founder" class="our-team-founder">
                            <?php endif; ?>
                            <div class="ceo-team-text">
                                <?php if ( $team_name = get_sub_field( 'team_name' ) ) : ?>
                                    <h3 class="team-ceo"><?php echo esc_html( $team_name ); ?></h3>
                                <?php endif; ?>
                                <?php if ( $team_designation = get_sub_field( 'team_designation' ) ) : ?>
                                    <p class="ceo-text"><?php echo esc_html( $team_designation ); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="team-read">
                            <?php if ( $team_description = get_sub_field( 'team_description' ) ) : ?>
                                <p class="ceo-bio"><?php echo $team_description; ?></p>
                            <?php endif; ?>

                            <?php 
                            $link = get_sub_field('meet_read_more');
                            if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            ?>
                            <a href="<?php echo esc_url( $link_url ); ?>" class="orange"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                </div>

            </section>

            <section id="advisor">


                <div class="advise-span team-inr-pdng">
                <?php if ( $advisory_heading = get_field( 'advisory_heading' ) ) : ?>
                    <span class="heading-1"><?php echo esc_html( $advisory_heading ); ?></span>
                <?php endif; ?>
                </div>



                <div class="meet-team-content">
                    <?php if( have_rows('advisory_repeater') ):  while ( have_rows('advisory_repeater') ) : the_row(); ?>
                    <div class="meet-team-member">
                        <div class="our-team-img">
                            <?php if( $advisory_img = get_sub_field('advisory_img')):?>
                            <img src="<?php the_sub_field('advisory_img');?>" alt="nisha-founder" class="our-team-founder">
                            <?php endif; ?>
                            <div class="ceo-team-text">
                                <?php if ( $advisory_name = get_sub_field( 'advisory_name' ) ) : ?>
                                    <h3 class="team-ceo"><?php echo esc_html( $advisory_name ); ?></h3>
                                <?php endif; ?>
                                <?php if ( $advisory_designation = get_sub_field( 'advisory_designation' ) ) : ?>
                                    <p class="ceo-text"><?php echo esc_html( $advisory_designation ); ?></p>
                                <?php endif; ?>
                    
                            </div>
                        </div>
                        <div class="team-read">
                            <?php if ( $advisory_discription = get_sub_field( 'advisory_discription' ) ) : ?>
                                <p class="ceo-bio"><?php echo $advisory_discription; ?></p>
                            <?php endif; ?>
                                <?php 
                                $link = get_sub_field('advisory_read_more');
                                if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                ?>

            
                            <a href="<?php echo esc_url( $link_url ); ?>" class="orange"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>

                </div>


            </section>

            <section id="partner">


                <div class="partnr-span team-inr-pdng">
                    <?php if ( $team_partners_subheading = get_field( 'team_partners_subheading' ) ) : ?>
                        <span class="heading-1"><?php echo esc_html( $team_partners_subheading ); ?></span>
                    <?php endif; ?>
             


                    <div class="partner-content">
                        <?php if ( $team_partners_heading = get_field( 'team_partners_heading' ) ) : ?>
                            <h3 class="partner-head"><?php echo esc_html( $team_partners_heading ); ?></h3>
                        <?php endif; ?>
                        <?php if( $team_partners_line = get_field('team_partners_line')):?>
                        <img src="<?php the_field('team_partners_line');?>" alt="background" class="prtnr-bg">
                        <?php endif; ?>

                    </div>
                    <div class="resort-content">
                       <?php if( have_rows('resort_repeater') ):  while ( have_rows('resort_repeater') ) : the_row(); ?>
                        <div class="resort-text">
                            <?php if ( $resort_heading = get_sub_field( 'resort_heading' ) ) : ?>
                                <h3 class="resort-head"><?php echo esc_html( $resort_heading ); ?></h3>
                            <?php endif; ?>
                            <?php if ( $resort_tagline = get_sub_field( 'resort_tagline' ) ) : ?>
                                <p class="resort-para"><?php echo $resort_tagline; ?></p>
                            <?php endif; ?>
                        </div>
                        <?php endwhile; endif; ?>
                    </div>



                </div>
            </section>

       



<?php 
    get_footer();
?>