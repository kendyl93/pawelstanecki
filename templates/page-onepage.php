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
      <li><a class="smoothscroll" href="#about">O mnie</a></li>
       <li><a class="smoothscroll" href="#resume">CV</a></li>
      <li><a class="smoothscroll" href="#portfolio">Projekty</a></li>
      <li><a class="smoothscroll" href="#contact">Kontakt</a></li>
   </ul> <!-- end #nav -->

</nav> <!-- end #nav-wrap -->

<div class="row banner">
   <div class="banner-text">
      <h1 class="responsive-headline">Paweł Stanecki</h1>
      <h3>Front End - to moja pasja! <br/><a class="smoothscroll" href="#about">Zjedź niżej,</a>
      aby dowiedzieć się <a class="smoothscroll" href="#about">o mnie</a> więcej.</h3>
      <hr />
      <ul class="social">
         <li><a href="https://www.facebook.com/Pawelo9"><i class="fa fa-facebook"></i></a></li>
         <li><a href="https://twitter.com/StaneckiPawel"><i class="fa fa-twitter"></i></a></li>
         <li><a href="https://www.linkedin.com/in/pawe%C5%82-stanecki/"><i class="fa fa-linkedin"></i></a></li>
         <li><a href="https://github.com/kendyl93"><i class="fa fa-github"></i></a></li>
         <li><a href="https://stackoverflow.com/users/4723888/pawe%C5%82-stanecki"><i class="fa fa-stack-overflow"></i></a></li>
      </ul>
   </div>
</div>

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

<div class="row">

   <div class="twelve columns collapsed">

      <h1>Moje wybrane prace</h1>

      <!-- portfolio-wrapper -->
      <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">

           <div class="columns portfolio-item">
            <div class="item-wrap">

               <a href="#modal-01" title="">
                  <img alt="" src="<?php echo get_template_directory_uri(); ?>/includes/images/portfolio/thewanderlust.jpg">
                  <div class="overlay">
                     <div class="portfolio-item-meta">
                              <h5>The Wanderlust</h5>
                        <p>blog podróżniczy</p>
                           </div>
                  </div>
                  <div class="link-icon"><i class="icon-plus"></i></div>
               </a>

            </div>
            </div> <!-- item end -->

         <div class="columns portfolio-item">
            <div class="item-wrap">

               <a href="#modal-02" title="">
                  <img alt="" src="<?php echo get_template_directory_uri(); ?>/includes/images/portfolio/youtube-icon.jpg">
                  <div class="overlay">
                     <div class="portfolio-item-meta">
                              <h5>iVideos</h5>
                        <p>Aplikacja ReactJS</p>
                           </div>
                  </div>
                  <div class="link-icon"><i class="icon-plus"></i></div>
               </a>

            </div>
            </div> <!-- item end -->

         <div class="columns portfolio-item">
            <div class="item-wrap">

               <a href="#modal-04" title="">
                  <img alt="" src="<?php echo get_template_directory_uri(); ?>/includes/images/portfolio/arcostar.jpg">
                  <div class="overlay">
                     <div class="portfolio-item-meta">
                              <h5>Arcostar</h5>
                        <p>Strona wizytówkowa</p>
                           </div>
                  </div>
                  <div class="link-icon"><i class="icon-plus"></i></div>
               </a>

            </div>
            </div> <!-- item end -->

         <div class="columns portfolio-item">
            <div class="item-wrap">

               <a href="#modal-05" title="">
                  <img alt="" src="<?php echo get_template_directory_uri(); ?>/includes/images/portfolio/elclassico.jpg">
                  <div class="overlay">
                     <div class="portfolio-item-meta">
                              <h5>iCounter</h5>
                        <p>Aplikacja ReactJS + Redux</p>
                           </div>
                  </div>
                  <div class="link-icon"><i class="icon-plus"></i></div>
               </a>

            </div>
            </div> <!-- item end -->


      </div> <!-- portfolio-wrapper end -->

   </div> <!-- twelve columns end -->


   <!-- Modal Popup
    --------------------------------------------------------------- -->

   <div id="modal-01" class="popup-modal mfp-hide">

        <img class="scale-with-grid" src="<?php echo get_template_directory_uri(); ?>/includes/images/portfolio/modals/m-the_wanderlust.jpg" alt="" />

        <div class="description-box">
            <h4>The Wanderlust</h4>
            <p>Jest to blog podróżniczy. Szablon napisany pod Wordpressa, a wszelkie zmiany, czy też dodatki wymagały użycia wiedzy z zakresu HTML, CSS/LESS, PHP, JS, JQuery</p>
         <span class="categories"><i class="fa fa-tag"></i>Wordpress, Blog, PHP, JS</span>
        </div>

      <div class="link-box">
         <a href="http://thewanderlust.pl/" target="_blank">Pokaż</a>
           <a class="popup-modal-dismiss">Zamknij</a>
      </div>

    </div><!-- modal-01 End -->

   <div id="modal-02" class="popup-modal mfp-hide">

        <img class="scale-with-grid" src="<?php echo get_template_directory_uri(); ?>/includes/images/portfolio/modals/m-yt.jpg" alt="" />

        <div class="description-box">
            <h4>iVideos</h4>
            <p>iVideos pozwala na wyszukiwanie filmów z bazy serwisu YouTube. Aplikacja została stworzona w celach edukacyjnych. Używam w niej YouTube API, a kod jest napisany w ReactJS oraz Bootstrapa.</p>
         <span class="categories"><i class="fa fa-tag"></i>React, API, Bootstrap, JS</span>
        </div>

      <div class="link-box">
         <a href="https://kendyl93.github.io/ivideos/" target="_blank">Pokaż</a>
           <a class="popup-modal-dismiss">Zamknij</a>
      </div>

    </div><!-- modal-02 End -->

   <div id="modal-04" class="popup-modal mfp-hide">

        <img class="scale-with-grid" src="<?php echo get_template_directory_uri(); ?>/includes/images/portfolio/modals/m-arcostar.jpg" alt="" />

        <div class="description-box">
            <h4>Arcostar</h4>
            <p>Strona w formie wizytówki. Napisana została opierając się w dużej mierze o Bootstrapa. Do wykonania strony niezbędna była wiedza z zakresu HTML, PHP, CSS/LESS, JS, JQuery</p>
         <span class="categories"><i class="fa fa-tag"></i>HTML, CSS/LESS, PHP, JS, JQuery, Bootstrap</span>
        </div>

      <div class="link-box">
         <a href="http://arcostar.pl/" target="_blank">Pokaż</a>
           <a class="popup-modal-dismiss">Zamknij</a>
      </div>

    </div><!-- modal-04 End -->

   <div id="modal-05" class="popup-modal mfp-hide">

        <img class="scale-with-grid" src="<?php echo get_template_directory_uri(); ?>/includes/images/portfolio/modals/m-elclassico.jpg" alt="" />

        <div class="description-box">
            <h4>iCounter</h4>
            <p>iCounter pozwala na ustawienie wyniku meczu el Classico. Aplikacja została stworzona w celach edukacyjnych. Kod jest napisany w ReactJS + Redux oraz Bootstrapa. Aplikacja jest wciąż rowijana.</p>
         <span class="categories"><i class="fa fa-tag"></i>ReactJS, Redux, JS, Bootstrap</span>
        </div>

      <div class="link-box">
         <a href="https://kendyl93.github.io/icounter/" target="_blank">Pokaż</a>
           <a class="popup-modal-dismiss">Zamknij</a>
      </div>

    </div><!-- modal-05 End -->



</div> <!-- row End -->

</section> <!-- Portfolio Section End-->
<!-- footer
================================================== -->
<section id="contact">


<div class="row">
    <div class="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/includes/images/pawel_stanecki.svg" alt="Paweł Stanecki logo">
    </div>

    <div class="widget widget_contact">

  <h4>Kontakt</h4>
  <p class="address">
 Paweł Stanecki<br>
 ul. Legnicka 49f/3f,<br>
       54-202, Wrocław
       <br>
 <span><a class="normal_link" href="tel:663133755">tel. 663 133 755</a></span><br>
 <span><a class="normal_link" href="mailto:p.stanecki93@gmail.com">e-mail: p.stanecki93@gmail.com</a></span>
  </p>

</div>
   <div class="twelve columns">

      <ul class="social-links">
         <li><a href="https://www.facebook.com/Pawelo9"><i class="fa fa-facebook"></i></a></li>
         <li><a href="https://twitter.com/StaneckiPawel"><i class="fa fa-twitter"></i></a></li>
         <li><a href="https://www.linkedin.com/in/pawe%C5%82-stanecki/"><i class="fa fa-linkedin"></i></a></li>
         <li><a href="https://github.com/kendyl93"><i class="fa fa-github"></i></a></li>
         <li><a href="https://stackoverflow.com/users/4723888/pawe%C5%82-stanecki"><i class="fa fa-stack-overflow"></i></a></li>
      </ul>

   </div>

   <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

</div>

</section> <!-- Footer End-->

<?php get_footer(); ?>