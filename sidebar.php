<nav class="sidebar">
	<div class="logo">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt="Sakku Logo">
		</a>
	</div><!-- logo -->
	
	<div class="menu-trigger">
		<span></span>
		<span></span>
		<span></span>
	</div>
	
	<?php
	wp_nav_menu( array(
		'theme_location'  => 'main-nav',
		'container'       => 'nav',
		'container_class' => 'tree-container',
		'menu_class'      => 'tree',
		'echo'            => true,
	) );
	?>
</nav>

<div class="search-box">
	<?php get_search_form(); ?>
</div>
	