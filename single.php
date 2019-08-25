<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * Template Name: Post Single
 *
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			/* Start the Loop */
			if ( have_posts() ) : ?>
				<h1><?php the_title(); ?></h1>

				<a  href="<?php echo get_post_type_archive_link( 'post' ); ?>">All posts</a>

				<?php 
				$categories = get_the_category();
				$separator = ' ';
				$output = '';
				if ( ! empty( $categories ) ) { ?>
					<h4>categories: <h4>
				<?php foreach( $categories as $category ) {
					$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
				}
				echo trim( $output, $separator );
				}
				?>
            <?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
