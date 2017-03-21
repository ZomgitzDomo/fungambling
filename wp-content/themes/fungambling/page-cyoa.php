<?php
// Template Name: CYOA
get_header();

/*-------------------------------------
| check get variables
-------------------------------------*/
$option = 'option1';
if (isset($_GET['option'])) {
	$option = $_GET['option'];
}

?>
			<h1>Do You want to Gamble?</h1>





	<section class="casino_section">
		<!-- <h1>CYOA TEMPLATE</h1> -->
		<?php if ( $option == 'option1' ) : ?>
		<section class="options option1">
			<div class="buttons buttons-center">
				<button class="btn btn-primary optionA btn-lg" data-option="optionA">YES</button>
				<button class="btn btn-primary optionB btn-lg" data-option="optionB">NO</button>
			</div>
			<div class="cyoa-image">
				<div class="optionA">
					<img class="cyoa"src = "<?php bloginfo('stylesheet_directory'); ?>/assets/cyoa1.png">
					<div class="buttons buttons-center">
						<a href="<?php bloginfo('wpurl'); ?>/CYOA/?option=option2"><button class="btn btn-primary optionA btn-lg">YES</button></a>
						<a href="<?php bloginfo('wpurl'); ?>/CYOA/?option=option3"><button class="btn btn-primary optionB btn-lg">NO</button></a>
					</div>
				</div>
				<div class="optionB">
					<img class="cyoa" src = "<?php bloginfo('stylesheet_directory'); ?>/assets/cyoa-final-no.png">
				</div>

			</div>

			<div class="next">

				<!-- <a href="#" class="btn btn-primary">NO</a> -->
			</div>
		</section>
	<?php endif; ?>

		<?php if ( $option == 'option2' ) : ?>
		<section class="options option2">
			<img class="cyoa"src = "<?php bloginfo('stylesheet_directory'); ?>/assets/cyoa2.png">
			<div class="buttons buttons-center">
				<button class="btn btn-primary optionA btn-lg" data-option="optionA">YES</button>
				<button class="btn btn-primary optionB btn-lg" data-option="optionB">NO</button>
			</div>
			<div class="cyoa-image">
				<div class="optionA">
					<img class="cyoa"src = "<?php bloginfo('stylesheet_directory'); ?>/assets/cyoa-final.png">
				</div>
				<div class="optionB">
					<img class="cyoa" src = "<?php bloginfo('stylesheet_directory'); ?>/assets/cyoa3.png">
					<div class="buttons buttons-center">
						<a href="<?php bloginfo('wpurl'); ?>/CYOA/?option=option5"><button class="btn btn-primary optionA btn-lg">YES</button></a>
						<a href="<?php bloginfo('wpurl'); ?>/CYOA/?option=option4"><button class="btn btn-primary optionB btn-lg">NO</button></a>
					</div>
				</div>

			</div>

			<div class="next">

				<!-- <a href="#" class="btn btn-primary">NO</a> -->
			</div>
		</section>
		<?php endif; ?>

		<!-- Dont Gamble -->
		<?php if ( $option == 'option3' ) : ?>
		<section class="options option3">
			<img class="cyoa"src = "<?php bloginfo('stylesheet_directory'); ?>/assets/cyoa3.png">
			<div class="buttons buttons-center">
				<button class="btn btn-primary optionA btn-lg" data-option="optionA">YES</button>
				<button class="btn btn-primary optionB btn-lg" data-option="optionB">NO</button>
			</div>

			<div class="cyoa-image">
				<div class="optionA">
					<img class="cyoa"src = "<?php bloginfo('stylesheet_directory'); ?>/assets/cyoa-final.png">
				</div>
				<div class="optionB">
					<img class="cyoa" src = "<?php bloginfo('stylesheet_directory'); ?>/assets/cyoa6.png">
					<div class="buttons buttons-center">
						<a href="<?php bloginfo('wpurl'); ?>/CYOA/?option=option5"><button class="btn btn-primary optionA btn-lg">YES</button></a>
						<a href="<?php bloginfo('wpurl'); ?>/CYOA/?option=option6"<button class="btn btn-primary optionB btn-lg">NO</button></a>
					</div>
				</div>

			</div>
		</section>
		<?php endif; ?>

		<?php if ( $option == 'option4' ) : ?>
		<section class="options option4">
			<img class="cyoa"src = "<?php bloginfo('stylesheet_directory'); ?>/assets/cyoa6.png">
			<div class="buttons buttons-center">
				<button class="btn btn-primary optionA btn-lg" data-option="optionA">YES</button>
				<button class="btn btn-primary optionB btn-lg" data-option="optionB">NO</button>
			</div>

			<div class="cyoa-image">
				<div class="optionA">
					<img class="cyoa"src = "<?php bloginfo('stylesheet_directory'); ?>/assets/cyoa-final.png">
				</div>
				<div class="optionB">
					<img class="cyoa" src = "<?php bloginfo('stylesheet_directory'); ?>/assets/cyoa-final-no.png">
				</div>

			</div>
		</section>
		<?php endif; ?>

		<?php if ( $option == 'option5' ) : ?>
		<section class="options option5">
			<img class="cyoa"src = "<?php bloginfo('stylesheet_directory'); ?>/assets/cyoa-final.png">
		</section>
		<?php endif; ?>

		<?php if ( $option == 'option6' ) : ?>
		<section class="options option6">
			<img class="cyoa"src = "<?php bloginfo('stylesheet_directory'); ?>/assets/cyoa-final-no.png">
		</section>
		<?php endif; ?>

	</section>


		<?php get_footer(); ?>