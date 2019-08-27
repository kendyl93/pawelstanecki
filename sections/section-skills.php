<div class="row skill">
    <div class="three columns header-col">
        <h1><span><?php the_field('skills_title'); ?></span></h1>
    </div>

    <div class="nine columns main-col">
    <?php if( have_rows('skills') ){
        while ( have_rows('skills') ) : the_row(); ?>
                    
            <p class="skill-group-name"><?php the_sub_field('skill_group_name'); ?></p>

            <?php if( have_rows('skills_group') ){
                    while ( have_rows('skills_group') ) : the_row(); ?>
                        <div class="bars">
                            <ul class="skills">
                                <li>
                                    <em>
                                        <?php if(get_sub_field('skill_logo')) { ?>
                                         <img class="brand-logo" src="<?php the_sub_field('skill_logo'); ?>" alt="<?php the_sub_field('skill_name'); ?>" />
                                        <?php } ?>
                                        <?php the_sub_field('skill_name'); ?>
                                    </em>
                                    <progress value="<?php the_sub_field('skill_percentage'); ?>" max="100"></progress>
                                </li>
                            </ul>
                        </div><!-- end skill-bars -->
                    <?php endwhile;
                } ?>
      <?php endwhile;
    } ?>
    </div> <!-- main-col end -->
</div> <!-- End skills -->