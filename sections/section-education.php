<div class="row education">
    <?php if( have_rows('education') ){
        while ( have_rows('education') ) : the_row(); ?>
            <div class="three columns header-col">
             <h1><span><?php the_sub_field('education_title'); ?></span></h1>
            </div>


            <div class="nine columns main-col">
              <?php if(have_rows('education_place') ){ ?>
                 <?php while ( have_rows('education_place') ) : the_row(); ?>
                 <div class="row item">
                    <div class="twelve columns">
                        <div class="info_wrapper">
                           <h3><?php the_sub_field('education_place_title'); ?></h3>
                           <p class="info"><?php the_sub_field('features_subtitle_1') ?></p>
                           <p class="info"><?php the_sub_field('features_subtitle_2') ?></p>
                           <p class="info"><?php the_sub_field('features_subtitle_3') ?></p>
                        </div>
                     </div>   
                  </div> <!-- item end --> 
                <?php endwhile;
               } ?>
            </div> <!-- main-col end --> 
        <?php endwhile;
      } ?>
</div>