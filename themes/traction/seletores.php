<?php 
    $newsQuery = new WP_Query('post_type=post','post_status=publish');
    if ( $newsQuery->have_posts() ) : while ( $newsQuery->have_posts() ) : $newsQuery->the_post(); ?>

    <div class="container mb-3">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 bg-secondary rounded-left rounded-right" style="display: flex ; align-items: center; ">
                <div>
                    <label class="custom-radio-btn">
                    <span class="label"></span>
                    <input type="radio" name="sample" onclick="opcaoSelecionada('<?php the_field('cargo'); ?>')" >
                    <span style="--check-color: <?php the_field('cor'); ?>" class="checkmark"></span>
                    </label>
                </div>
                <div class="text-left bg-secondary rounded-right pt-2 pb-2">
                    <h4 style="color: <?php the_field('cor'); ?>"><?php the_field('cargo'); ?></h4>
                    <p class="text-white mb-0 pb-0 mt-0 pt-0"><?php the_field('descricao'); ?></p>
                </div>
            </div>
        </div>
    </div>    
     <?php the_content(); ?>
    <?php endwhile; else : get_404_template();  endif; ?>