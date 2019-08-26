<?php
/*
Template Name: Onepage
*/
?>

<?php get_header(); ?>


   <!-- Header
   ================================================== -->
<header id="home">

<nav id="nav-wrap">

	<a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	<a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

	<ul id="nav" class="nav">
      <li class="current"><a class="smoothscroll" href="#home">Start</a></li>
      <li><a class="smoothscroll" href="#about">About me</a></li>
      <li><a class="smoothscroll" href="#resume">CV</a></li>
      <li><a class="smoothscroll" href="#portfolio">Projects</a></li>
      <li><a class="smoothscroll" href="#contact">Contact</a></li>
      <li class="blog-link-wrapper"><a class="blog-link" href="https://dev.to/dashboard">Blog</a></li>
	</ul> <!-- end #nav -->

</nav> <!-- end #nav-wrap -->

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