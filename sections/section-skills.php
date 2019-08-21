<div class="row skill">
    <div class="three columns header-col">
        <h1><span><?php the_field('skills_title'); ?></span></h1>
    </div>

    <?php if( have_rows('skills') ){
        while ( have_rows('skills') ) : the_row(); ?>
        <div class="nine columns main-col">
                    
            <p><?php the_sub_field('skill_group_name'); ?></p>

            <?php if( have_rows('skills_group') ){
                    while ( have_rows('skills_group') ) : the_row(); ?>
                        <div class="bars">
                            <ul class="skills">
                                <li><progress value="22" max="100"><em><?php the_sub_field('skill_name'); ?></em></progress></li>
                            </ul>
                        </div><!-- end skill-bars -->
                    <?php endwhile;
                } ?>
            </div> <!-- main-col end -->
      <?php endwhile;
    } ?>
</div> <!-- End skills -->