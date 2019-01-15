<?php
get_header();
?>

<div class="container">
		
	<?php get_sidebar(); ?>
	
	<main class="main">
		<div class="content">
			<h1 class="page-title"><?php printf( 'جستجو برای : %s', '<span>' . get_search_query() . '</span>' ); ?> </h1>
			<?php
			if( have_posts() ) :
				while ( have_posts() ) : the_post();
				?>
					<div class="search-result">
						<h3 class="search-res-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<h5 class="search-res-url"><?php the_permalink(); ?></h5>
						<div class="search-res-text"><?php the_excerpt(); ?></div>
					</div>
				<?php
				endwhile;
				the_posts_pagination( array(
					'prev_text'          => '<',
					'next_text'          => '>',
				) );
			else:
			?>
			<div class="result-none">جستجوی شما نتیجه‌ای نداشت. لطفا دوباره جستجو کنید.</div>
			<?php
			endif;
			?>
		</div>
		<?php
		get_footer();
		?>
	</main>
</div>
