<?php
$post = block_value( 'featured-story' ); 
$bg_image = get_the_post_thumbnail_url( $post->ID, array( 1200, 800) );
?>

<div style="padding-left:10%;padding-right:10%;padding-bottom:10%;padding-top:10%" class="wp-block-genesis-blocks-gb-container alignfull my-block gb-block-container">
	<div class="gb-container-inside">
		<div class="gb-container-content">
			<div class="wp-block-cover" style="background-image:url(<?php echo $bg_image?>); padding: 0px; justify-content: start; align-items: baseline;">
				<div>
					<div style="background-color:#ffffff;" class="">
						<div style="padding: 10px 25px 10px;">
							<div class="" style="color: black;">
                            <a style="color: #293038; text-decoration: none; font-size: 34px; line-height: 1.2; font-weight: 600; font-family: 'Arvo', serif;" href="
								<?php echo get_permalink( block_value( 'featured-story' )->ID ); ?>">
								<?php block_field( 'featured-story' ); ?>
							</a>
								<div style="color:grey; font-size: 16px; padding-top: 15px; ">
								<?php echo the_excerpt( block_value( 'featured-story' )->ID ); ?>
							</div>
								<a style="text-transform: uppercase; text-decoration: none; display: flex; flex-direction: row;" href="
							    <?php echo get_permalink( block_value( 'featured-story' )->ID ); ?>">view complete guide<div class="arrow-right"></div></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>