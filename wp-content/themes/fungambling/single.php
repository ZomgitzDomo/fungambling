		<?php get_header(); ?>


			<section class="blog_section">


			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="flex_blog">
					<div class="casino_blog">
						<div class="post">
							<h1><?php the_title(); ?></h1>
								<div class="content">
								  <?php the_content(); ?>

								</div>
						</div>
			<?php endwhile; endif; ?>
			<p><a href = "<?php echo bloginfo('wpurl');?>/blogs/">Back to Blog</a></p>
					</div>
				</div>
			</section>

		<?php get_footer(); ?>