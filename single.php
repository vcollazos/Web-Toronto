<?php get_header(); ?>

    <?php if(has_post_thumbnail() ) { ?>	

		<div class="destacada">
			<?php the_post_thumbnail('destacada'); ?>
			<h2><?php the_title(); ?></h2>
		</div>
	<?php } else { ?>
		<h2 class="noimagen"><?php the_title(); ?></h2>		
    <?php } ?>    

        <div id="primary" class="primary">  
            <div class="publicacion">
                <?php the_tags(__('Etiquetas en este post: '), ', ', '<br>'); ?>
                <?php _e('Categorizado en : '); the_category(', '); ?>   
              
            </div>  
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>                
                <?php the_content(); ?>                
            </article>

            <?php edit_post_link(); ?>

		</div>



<?php get_sidebar(); ?>

<?php get_footer(); ?>