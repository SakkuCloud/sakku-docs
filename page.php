<?php
get_header();
?>

<div class="container">

	<?php get_sidebar(); ?>

	<main class="main">
		<div class="content">
			<?php
			while ( have_posts() ) : the_post();
				?>
				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php
				the_content();
			endwhile;
			?>
		</div>
		<?php
		get_footer();
		?>
	</main>
</div>