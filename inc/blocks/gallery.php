<div class="block block--gallery" style="background-image: url(<?php echo theme( 'background_image', 'url', THEME_DIR . '/images/bg-steaks.jpg' ); ?>)">

                <?php if( $images = theme( 'images' ) ) { ?>
                    <?php foreach( $images as $i => $image ) { ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" title="<?php echo esc_attr( $image['title'] ); ?>" class="img-responsive <?php if( $i > 0 ) { echo 'show-for-large-up'; } ?>" />
                    <?php } ?>
                <?php } else { ?>

                <?php } ?>

<h3 class="t-brand"><?php echo theme( 'body' ); ?></h3>

