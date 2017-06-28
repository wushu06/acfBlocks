<?php get_header(); ?>

                <h1><?php echo theme( 'blog_index_title' ); ?></h1>

                <?php echo theme( 'blog_index_intro' ); ?>

           

            <?php if ( have_posts() ) : ?>
            	<div class="row row-equal">
            		<?php
                    while ( have_posts() ) : the_post();
            			$category = get_the_category();

                     
					endwhile;
                    ?>
        		</div>
        	<?php endif; ?>

            <?php motionspot_pagination(); ?>
        </div>
    </section>

<?php get_footer(); ?>
