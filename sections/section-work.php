<div class="row work">
    <?php if( have_rows('experience') ){
        while ( have_rows('experience') ) : the_row(); ?>
            <div class="three columns header-col">
                <h1><span><?php the_sub_field('experience_title'); ?></span></h1>
            </div>

            <div class="nine columns main-col">
               <?php if(have_rows('experience_items') ){ ?>
                 <?php while ( have_rows('experience_items') ) : the_row(); ?>
                    <div class="row item">
                        <div class="twelve columns">
                            <h3><?php the_sub_field('experience_item_title'); ?></h3>
                            <p class="info"><?php the_sub_field('experience_item_subtitle'); ?></p>
                            <p>
                             <?php the_sub_field('experience_item_subscription'); ?>
                            </p>
                        </div>
                    </div> <!-- item end -->
                <?php endwhile;
               } ?>
            </div> <!-- main-col end -->
         <?php endwhile;
        } ?>
</div> <!-- End Work -->