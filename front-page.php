<?php
/**
 * The template for displaying the home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>

	<?php
    // while ( have_posts() ) : the_post();

    // 	get_template_part( 'template-parts/content', 'hero' );

    // endwhile;
    // End of the loop.
    ?>

	<div class="site-content-wrapper">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<?php

                $args = array(
                    'orderby' => 'rand',
                    'posts_per_page' => '1',
                );
                $query = new WP_Query($args);
                //while ( have_posts() ) : the_post();
                ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<section class="hero">
<!-- 							<div class="hentry-wrapper"> -->
							<?php if (!has_post_thumbnail()) : ?>
								<header class="entry-header">
									<div class="entry-header-wrapper">
										<h1>Websites for People</h1>
										<p>Elements Development is a web development studio based in Austin, TX serving the technical and creative needs of small businesses, agencies, professionals.</p>
										<a href="" class="button minimal">See What We Can Make for You</a>
<!-- 									</div> --><!-- .entry-header-wrapper -->
								</header><!-- .entry-header -->
							<?php endif; ?>
          				</section>
						<section class="how-we-help">
						   	<section class="services">
    						   	<div class="wrap">
                                    <header>
    								    <h2>Bring meaning to your content.</h2>
                                        <p>We help people empower and inform others by spreading meaningful ideas and goods through simple, accessible websites. Here are the ways we achieve our purpose and yours:
    								</header>
    								<h3 class="development"><span class="dashicons dashicons-admin-generic"></span> Development</h3>
    								<p>High quality HTML, CSS, and Javascript for your themes and templates.</p>
    
    								<h3 class="design"><span class="dashicons dashicons-admin-customizer"></span> Design</h3>
    								<p>Consitent visual identity composed of logos, colors, imagery, typography, and imagery.</p>
    
                                    <h3 class="maintenance"><span class="dashicons dashicons-hammer"></span> Maintenance</h3>
    								<p>Keep your visitors (and content managers) happy with a monthly website tune-up.</p>
    								<footer>
    									<a href="" class="button">Learn How We Can Help</a>
    								</footer>
								</div>
                            </section>
						</section>
						<section class="who-we-help">
							<div class="wrap">
								<div class="hentry-wrapper">
									<header class="entry-header">
										<h2>Projects</h2>
										<p>We've helped artists, production companies, agencies, music venues, clinics, and small business owners solidfy and improve their online presence.</p>
									</header>
								</div>
								<div class="cards">
									<?php
                                    $args2 = array(
                                        'post_type' => 'jetpack-portfolio',
                                        'posts_per_page' => 3,
                                    );

                                    $query2 = new WP_Query($args2);

                                    if ($query2->have_posts()) {
                                        // The 2nd Loop
                                        while ($query2->have_posts()) {
                                            $query2->the_post();
                                            echo '<div class="card">';
                                            echo '<a href="'.get_permalink($query2->post->ID).'">';
                                            echo '<div class="card-image">'.get_the_post_thumbnail($query2->post->ID, 'thumbnail').'</div>';
                                            echo '<div class="card-header">'.get_the_title($query2->post->ID).'</div>';
                                            echo '<div class="card-copy">'.get_the_excerpt($query2->post->ID).'</div>';
                                            echo '</a>';
                                            echo '</div>'; // card
                                        }
                                        // Restore original Post Data
                                        wp_reset_postdata();
                                    }
                                    ?>
								</div> <!-- cards -->
								<footer>
								<a href="" class="button">View Recent Work</a>
								</footer>
							</div>
						</section>
						<section class="process">
							<div class="wrap wrapper">
								<header class="entry-header">
									<h2>Clear results from a straightforward process.</h2>
									<p>Avoid bumps in the road by visualizing the destinations
									then mapping out how to get there.</p>
								</header>
								<section class="timeline">
									<div class="cd-timeline-block">
										<div class="cd-timeline-img">
											<span class="dashicons dashicons-search"></span>
										</div> <!-- cd-timeline-img -->
										<div class="cd-timeline-content">
											<h2>01. Discovery</h2>
											<p>Set the tone and directions for the project by creating goals and gathering information.</p>
										</div> <!-- cd-timeline-content -->
									</div> <!-- cd-timeline-block -->
									<div class="cd-timeline-block">
										<div class="cd-timeline-img">
											<span class="dashicons dashicons-lightbulb"></span>
										</div> <!-- cd-timeline-img -->
										<div class="cd-timeline-content">
											<h2>02. Planning</h2>
											<p>Brainstorm, look for blind spots, and closely examine the target audience to figure the best route towards our goals.</p>
										</div> <!-- cd-timeline-content -->
									</div> <!-- cd-timeline-block -->
									<div class="cd-timeline-block">
										<div class="cd-timeline-img">
											<span class="dashicons dashicons-welcome-widgets-menus"></span>
										</div> <!-- cd-timeline-img -->
										<div class="cd-timeline-content">
											<h2>03. Design and Code</h2>
											<p>We enter the messy yet elegant process of building concepts and prototypes repetitively making each iteration better than the last.</p>
										</div> <!-- cd-timeline-content -->
									</div> <!-- cd-timeline-block -->
									<div class="cd-timeline-block">
										<div class="cd-timeline-img">
											<span class="dashicons dashicons-chart-area"></span>
										</div> <!-- cd-timeline-img -->
										<div class="cd-timeline-content">
											<h2>04. Test and Review</h2>
											<p>Look for ways to simplify the project while squashing many many bugs in the process.</p>
										</div> <!-- cd-timeline-content -->
									</div> <!-- cd-timeline-block -->
									<div class="cd-timeline-block">
										<div class="cd-timeline-img">
											<span class="dashicons dashicons-star-filled"></span>
										</div> <!-- cd-timeline-img -->
										<div class="cd-timeline-content">
											<h2>05. Wrap Up and Publish</h2>
											<p>The final presentation to check goals, set baselines for metrics and prepare to high five after the last deployment.</p>
										</div> <!-- cd-timeline-content -->
									</div> <!-- cd-timeline-block -->
								</section><!-- timeline -->
							</div><!-- wrap -->
						</section>
						<!-- <section class="tools">
							<header class="entry-header">
								<h2>Tools</h2>
								<p>We'll build your website with maintained and trusted tools<br>
									from the open source software community.</p>
							</header>

						</section> -->
						<section class="testimonials">
							<div class="wrap">
								<figure class="quote">
									<blockquote>Raymond came through with the initial launch, which was a huge success, and has been instrumental in helping us <strong>develop the site well beyond our original vision.</strong> He handled every request we threw at him and found solutions for all of them. I’d recommend him highly for any level of web development.
									</blockquote>
									<figcaption><img src="http://crisaba.com/wp-content/uploads/2016/07/Hillary-Read.jpg" alt="Headshot of Hillarly Read">Hillary Read, Director of Marketing at <a href="http://3qdigital.com">3Q Digital</a></figcaption>
								</figure>
								<!-- <footer>
								<a class="button">See More Testimonials</a>
								</footer> -->
							</div>
						</section>
						<section class="cta">
<!--
							<figure>
								<img src="http://crisaba.com/wp-content/uploads/2016/09/sprouts.jpeg" alt="A photo of a tray mung bean sprouts growing in paper pots.">
							</figure>
-->
							<section class="start-your-project">
								<div class="wrapper">
								<header>
    								<h2>Lets Get Started</h2>
								</header>
								<p>We've helped artists, production companies, marketing agencies, music venues, clinics, and small business owners solidify and enhance their online presence.</p>
								<p>Communication and continuous improvement are the essential elements of our work and we're interested in long term client relationships.</p>
								<footer>
								    <a class="button">Start Your Project with Us</a>
								</footer>
							</div>
							</section>
						</section>
						<div class="entry-content">
							<?php
                            the_content();

                            // wp_link_pages( array(
                            // 	'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'shoreditch' ) . '</span>',
                            // 	'after'       => '</div>',
                            // 	'link_before' => '<span>',
                            // 	'link_after'  => '</span>',
                            // 	'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'shoreditch' ) . ' </span>%',
                            // 	'separator'   => '<span class="screen-reader-text">, </span>',
                            // ) );
                            ?>
						</div><!-- .entry-content -->
						</div><!-- .hentry-wrapper -->
					</article><!-- #post-## -->
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .site-content-wrapper -->

<?php
get_sidebar('footer');
get_footer();
