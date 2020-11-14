<?php

$post = block_value( 'featured-1' ); 
$post_img_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
$post_img_alttext = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true );
$src_set = wp_get_attachment_image_srcset( get_post_thumbnail_id($post->ID), $size = 'medium', $image_meta = null );
?>
<figure class="wp-block-image size-medium is-resized is-style-default">
	<img loading="lazy" src="
		<?php echo $post_img_attributes[0]; ?>"  alt="
		<?php echo $post_img_alttext;?>" srcset="<?php echo esc_attr( $src_set );?>" class="wp-image-251" sizes="(max-width: 350px) 100vw, 350px" width="350" height="350">
	</figure>
	<a style="color: grey; text-decoration: none; font-family: 'Arvo', serif;" href="
		<?php echo get_permalink( block_value( 'category-1' )->ID ); ?>">
		<h5 class="has-text-align-center">
			<?php block_field( 'category-1' ); ?>
		</h5>
	</a>
	<a style="color: #293038; text-decoration: none; font-family: 'Arvo', serif;" href="
		<?php echo get_permalink( block_value( 'featured-1' )->ID ); ?>">
		<h3 class="has-text-align-center">
			<?php block_field( 'featured-1' ); ?>
		</h3>
	</a>