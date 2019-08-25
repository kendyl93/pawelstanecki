<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * Template Name: Post Archive
 */

$args = array(
    'posts_per_page'   => -1,
    'post_type'        => 'post',
);
$the_query = new WP_Query( $args );

get_header();
?>

<?php 

    $args = array(
        'posts_per_page' => 1,
        'meta_key' => 'display',
        'meta_value' => 'about'
    );

    $about_preview_query = new WP_Query($args);

    if ( $about_preview_query->have_posts() ) {
        print "<h1>FOUND POSTS</h1>";
    }

    while ( $about_preview_query->have_posts() ) {
        $about_preview_query->the_post();
        print "<h1>";
        the_title();
        print "</h1>";
    }
?>

<?php
get_footer();
