<?php
/*
Template Name: Onepage
*/
?>

<?php get_header(); ?>


   <!-- Header
   ================================================== -->
<header id="home">

<?php get_template_part( 'sections/section', 'banner' );	?>

<p class="scrolldown">
   <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
</p>

</header> <!-- Header End -->


<!-- About Section
================================================== -->

<?php get_template_part( 'sections/section', 'about' );	?>

<!-- Resume Section
================================================== -->
<section id="resume">

   <!-- Education
   ----------------------------------------------- -->
   <?php get_template_part( 'sections/section', 'education' );	?>

   <!-- Work
   ----------------------------------------------- -->
   <?php get_template_part( 'sections/section', 'work' );	?>

   <!-- Skills
   ----------------------------------------------- -->
   <?php get_template_part( 'sections/section', 'skills' );	?>

</section> <!-- Resume Section End-->


<!-- Portfolio Section
================================================== -->
<section id="portfolio">

   <?php get_template_part( 'sections/section', 'portfolio' );	?>

</section> <!-- Portfolio Section End-->
<!-- footer
================================================== -->
<section id="contact">

   <?php get_template_part( 'sections/section', 'contact' );	?>

</section> <!-- Footer End-->

<?php get_footer(); ?>