<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			<?php
				wp_title( '|', true, 'right' );
				bloginfo('name');
				// Add the blog description for the home/front page.
				$site_description = get_bloginfo('description', 'display');
				echo " | $site_description";
			  ?>
		</title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/styles.css">
		<?php
	  /* Always have wp_head() just before the closing </head>
	   * tag of your theme, or you will break many plugins, which
	   * generally use this hook to add elements to <head> such
	   * as styles, scripts, and meta tags.
	   */
	  	wp_head();
       ?>
	</head>
	<body>
		<div class = "container">

			<div id ="main_header">

				<div id ="main_navigation">
					<div id ="logo">
						<a href = "#">
							<img src = "<?php bloginfo('stylesheet_directory'); ?>/assets/download.png">
						</a>
					</div>
							<i class="fa fa-bars" aria-hidden="true"></i>

						<ul class ="navigation animationout">
							<li class ="nav-item">
								<a href ="<?php bloginfo('wpurl'); ?>/">
									Home
								</a>
							</li>
							<li class ="nav-item">
								<a href ="<?php bloginfo('wpurl'); ?>/blogs/">
									Blogs
								</a>
							</li>
							<li class ="nav-item">
								<a href ="<?php bloginfo('wpurl'); ?>/CYOA/">
									CYOA
								</a>
							</li>
							<li class ="nav-item">
								<a href ="<?php bloginfo('wpurl'); ?>/contact/">
									Contact
								</a>
							</li>
						</ul>
					<!-- </div> -->
				</div>
				<h1 class="header_h1"><?php bloginfo('name'); ?></h1>

			</div>