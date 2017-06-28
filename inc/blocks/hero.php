<h1> <?php echo theme( 'title' ) ?></h1>
      <?php if( $items = theme( 'items' ) ) { ?>

		        	<?php foreach( $items as $item ) { ?>
		                <li style="padding: 20px;">
		                    <p><img src="<?php echo $item['images']['sizes']['medium']; ?>" title="<?php echo $item['images']['title']; ?>" alt="<?php echo $item['images']['alt']; ?>"  /></p>
S
		                </li>
		            <?php } ?>

	<?php } ?>
