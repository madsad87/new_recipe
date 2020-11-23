<?php
$post = block_value( 'featured-hero' ); 
$post_img_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
$post_img_alttext = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true );
?>
<div class="gb-container-inside">
	<div class="gb-container-content">
		<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-2 gb-2-col-wideleft">
			<div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column">
				<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column">
					<div class="gb-block-layout-column-inner">
						<a href="
							<?php echo get_permalink( block_value( 'featured-hero' )->ID ); ?>">
							<?php echo get_the_post_thumbnail( $page->ID, array( 1200, 800) ); ?>
							
							</a>
						</div>
					</div>
					<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column">
						<div class="gb-block-layout-column-inner" style="padding-top: 15px;">
							<a style="color: #293038; text-decoration: none; font-size: 34px; line-height: 1.2; font-weight: 600; font-family: 'Arvo', serif;" href="
								<?php echo get_permalink( block_value( 'featured-hero' )->ID ); ?>">
								<?php block_field( 'featured-hero' ); ?>
							</a>
							<div style="color:grey; font-size: 16px; padding-top: 15px; ">
								<?php echo the_excerpt( block_value( 'featured-hero' )->ID ); ?>
							</div>
							<a style="text-transform: uppercase; text-decoration: none; display: flex; flex-direction: row;" href="
							<?php echo get_permalink( block_value( 'featured-hero' )->ID ); ?>">view complete guide<div class="arrow-right"></div></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>