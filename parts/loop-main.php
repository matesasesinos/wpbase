<?php get_template_part( 'parts/jumbotron' );?>
<div class="container">
    <div class="row">
    <?php 
        if ( have_posts() ) { 
        while ( have_posts() ) : the_post();
    ?>
        <div class="col-md-4">
            <h2 class="loop-title"><?php the_title(); ?></h2>
            <p class="loop-post-meta"><?php the_date(); ?> <?php echo __('by', 'genosha'); ?> <?php the_author(); ?></p>
            <?php the_excerpt(); ?>
        </div>
    <?php
    endwhile;
    } 
    ?>
    </div>
    <?php
        $links = paginate_links( array(
            'prev_next'          => false,
            'type'               => 'array'
        ) );
  
        if ( $links ) :
        
            echo '<ul class="pagination">';
        
            // get_previous_posts_link will return a string or void if no link is set.
            if ( $prev_posts_link = get_previous_posts_link( __( 'Previus', 'genosha' ) ) ) :
                echo '<li class="page-item">';
                echo $prev_posts_link;
                echo '</li>';
            endif;
        
            echo '<li>';
            echo join( '</li><li>', $links );
            echo '</li>';
        
            // get_next_posts_link will return a string or void if no link is set.
            if ( $next_posts_link = get_next_posts_link( __( 'Next', 'genosha' ) ) ) :
                echo '<li class="page-item">';
                echo $next_posts_link;
                echo '</li>';
            endif;
            echo '</ul>';
        endif;
    ?>
</div>