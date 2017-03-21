		<?php get_header(); ?>
			<div class ="big_content">
				<div class="slideshow">
					<?php for($i = 1; $i < 5; $i++) : ?>
					<div class="slide slide<?php echo $i; ?>">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/slideshow/image0<?php echo $i; ?>.jpg">
						<div class="text">Casino <?php echo $i; ?> </div>

					</div>
				<?php endfor; ?>
				</div>
			</div>

			<section class="casino_section">
				<h1>
					Top Casinos
					<br>
					(You Have to Visit)
				</h1>
				<p>These Casinos are the nicest and most popular casinos in the country</p>
				<div class="flex_pictures">
				<div class="casino_pictures">
					<img src = "<?php bloginfo('stylesheet_directory'); ?>/assets/frenchlick.png">

					<div class="casino_text_area">
		                <div class="casino_link">
		                  <a href="https://www.frenchlick.com/gaming">FRENCH LICK CASINO&nbsp;&raquo;</a>
		                </div>
	              	</div>
				</div>

				<!-- 2 pictures -->
				<div class="casino_pictures">
					<img src = "<?php bloginfo('stylesheet_directory'); ?>/assets/harrahs.png">

					<div class="casino_text_area">
						<div class="casino_link">
						  <a href="https://www.harrahssocal.com/">
HARRAH'S RESORT&nbsp;&raquo;</a>
						</div>
					</div>
				</div>

				<!-- 3rd pictures -->
				<div class="casino_pictures">
					<img src = "<?php bloginfo('stylesheet_directory'); ?>/assets/borgata.png">

					<div class="casino_text_area">
						<div class="casino_link">
						  <a href="https://www.theborgata.com/">BORGATA HOTEL CASINO&nbsp;&raquo;</a>
						</div>
					</div>
				</div>

				<!-- 4th pictures -->
				<div class="casino_pictures">
					<img src = "<?php bloginfo('stylesheet_directory'); ?>/assets/lauberge.png">

					<div class="casino_text_area">
						<div class="casino_link">
						  <a href="https://www.llakecharles.com/">L'AUBERGE CASINO RESORT&nbsp;&raquo;</a>
						</div>
					</div>
				</div>

				<!-- 5th picture -->
				<div class="casino_pictures">
					<img src = "<?php bloginfo('stylesheet_directory'); ?>/assets/pechanga.png">

					<div class="casino_text_area">
						<div class="casino_link">
						  <a href="https://www.pechanga.com/">PECHANGA RESORT & CASINO&nbsp;&raquo;</a>
						</div>
					</div>
				</div>

				<!-- 6th picture -->
				<div class="casino_pictures">
					<img src = "<?php bloginfo('stylesheet_directory'); ?>/assets/mohegan.png">

					<div class="casino_text_area">
						<div class="casino_link">
						  <a href="https://mohegansun.com/">MOHEGAN SUN&nbsp;&raquo;</a>
						</div>
					</div>
				</div>

				</div>
			</section>

		<?php get_footer(); ?>