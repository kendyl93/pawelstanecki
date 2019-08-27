<div class="row skill">
    <div class="three columns header-col">
        <h1><span><?php the_field('language_title'); ?></span></h1>
    </div>

    <div class="nine columns main-col">
    <?php if( have_rows('languages') ){
        while ( have_rows('languages') ) : the_row(); ?>
                    
            <p class="skill-group-name"><?php the_sub_field('language_group_name'); ?></p>

            <?php if( have_rows('language_group') ){
                    while ( have_rows('language_group') ) : the_row(); ?>
                        <div class="bars">
                            <ul class="skills">
                                <li>
                                    <em>
                                        <?php if(get_sub_field('language_flag')) { ?>
                                         <img class="language-flag" src="<?php the_sub_field('language_flag'); ?>" alt="<?php the_sub_field('language_name'); ?>" />
                                        <?php } ?>
                                        <?php the_sub_field('language_name'); ?>
                                    </em>
                                    <progress value="<?php the_sub_field('language_percentage'); ?>" max="100"></progress>
                                </li>
                            </ul>
                        </div><!-- end skill-bars -->
                    <?php endwhile;
                } ?>
      <?php endwhile;
    } ?>
    </div> <!-- main-col end -->
</div> <!-- End skills -->