<?php
/**
* The template for displaying all pages.
*
* @package RED_Starter_Theme
*/
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>">
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
					<?php
			      wp_link_pages( array(
			        'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
			        'after'  => '</div>',
			      ) );
			    ?>
				</div>
			</article>
			<?php endwhile; // End of the loop. ?>
		</main>
		<!-- #main -->
		<?php get_sidebar(); ?>
	</div>
	<!-- #primary -->
	<?php get_footer(); ?>