<section class="block block-text single">
    <div class="container">
        <div class="row">
        	<div class="large-18 large-offset-3 medium-18 medium-offset-3 columns end">
        		<?php if( $title = theme( 'title' ) ) { ?> <button class="btn btn-danger">Test Bootstrap</button>
                    <i class="fa fa-envelope ">test font awesome</i>
            		<h2 class="divide divide--center text-center single__title"><?php echo $title; ?></h2>
            	<?php } ?>

            	<div class="single__body js-animate-children-up">
            		<?php echo do_shortcode( theme( 'body' ) ); ?>
            	</div>
            </div>
        </div>
    </div>
</section>s