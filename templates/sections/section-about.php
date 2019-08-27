<section id="about">
    <div class="row">
        <div class="three columns">
            <div class="profile-pic">
                <img src="<?php the_field('media_object_image'); ?>"/>
            </div>
        </div>

        <div class="nine columns main-col">
            <h2><?php the_field('media_object_title_text'); ?></h2>
            <?php the_field('media_object_text'); ?>

            <div class="row">
                <div class="columns contact-details">
                    <h2><?php the_field('media_object_title_contact'); ?></h2>
                    <p class="address">
                        <?php the_field('media_object_contact'); ?>
                    </p>
                </div>

                <div class="columns download">
                    <p>
                        <a href="<?php the_field('media_object_cv'); ?>" class="button" target="_blank"><i class="fa fa-download" download></i>CV</a>
                    </p>
                </div>
            </div> <!-- end row -->
        </div> <!-- end .main-col -->
    </div>
</section> <!-- About Section End-->