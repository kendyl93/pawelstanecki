<div class="row">
   <div class="twelve columns collapsed">

      <h1><?php the_field('portfolio_title'); ?></h1>

      <!-- portfolio-wrapper -->
      <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">

        <?php if( have_rows('portfolio_item') ){
            $i = 0;
            while ( have_rows('portfolio_item') ) : the_row(); ?>
                <div class="columns portfolio-item">
                    <div class="item-wrap">

                        <a href="#modal-<?php echo $i; ?>" title="">
                            <img class="object-fit-cover" alt="" src="<?php the_sub_field('portfolio_thumbnail'); ?>">

                            <div class="overlay">
                                <div class="portfolio-item-meta">
                                    <h5><?php the_sub_field('portfolio_item_title'); ?></h5>
                                    <p><?php the_sub_field('portfolio_item_subtitle'); ?></p>
                                </div>
                            </div>
                            <div class="link-icon"><i class="icon-plus"></i></div>
                        </a>
                    </div>
                </div> <!-- item end -->

                <div id="modal-<?php echo $i; ?>" class="popup-modal mfp-hide">

                    <img class="scale-with-grid object-fit-cover" src="<?php the_sub_field('portfolio_thumbnail'); ?>" alt="" />

                    <div class="description-box">
                        <h4><?php the_sub_field('portfolio_item_title'); ?></h4>
                        <p><?php the_sub_field('portfolio_item_description'); ?></p>
                    <span class="categories"><i class="fa fa-tag"></i><?php the_sub_field('portfolio_item_tags'); ?></span>
                    </div>

                    <div class="link-box">
                    <a href="<?php the_sub_field('portfolio_item_uri'); ?>" target="_blank">Show</a>
                    <a class="popup-modal-dismiss">Close</a>
                    </div>

                </div><!-- modal End -->


            <?php $i++; endwhile;
        } ?>

        </div> <!-- portfolio-wrapper end -->
    </div> <!-- twelve columns end -->
</div> <!-- row End -->