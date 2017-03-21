		<?php get_header(); ?>
			<div class ="big_content">
				<div class="big_content_left">
					<img src = "<?php bloginfo('stylesheet_directory'); ?>/assets/cards.png">
				</div>

				<div class="big_content_right">
					<h3 class="big_text">For all your Personal Gambling Needs</h3>

					<p>Whether you are a professional gambler with years of experience, or you are new to online gambling, you will find something useful and interesting here. This website has been focusing on the different aspects of online gambling.</p>
				</div>

			</div>

			<section class="blog_section">
				<h1>
					Blog Post
					<br>
					(Greatest Reads)
				</h1>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="flex_blog">
					<div class="casino_blog">
						<div class="post">
							<h1><?php the_title(); ?></h1>
								<div class="content">
								  <?php the_excerpt(); ?>
								  <p><a href = "<?php echo the_permalink(); ?>">Read More</a></p>
								</div>
						</div>
			<?php endwhile; endif; ?>

					</div>
				</div>
			</section>

		<?php get_footer(); ?>