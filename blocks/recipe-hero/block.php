<div class="wp-block-atomic-blocks-ab-container alignfull ab-block-container"><div class="ab-container-inside"><div class="ab-container-content">
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-wideleft"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column">
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner">
<img src="<?php block_field( 'hero-image' ); ?>" />
<ul>
    <li><i class="fas fa-utensils"></i><p><b>Servings:</b> <?php block_field( 'servings' ); ?></p></li>
    <li><i class="fas fa-stopwatch"></i><p><b>Prep Time:</b> <?php block_field( 'prep-time' ); ?>min</p></li>
    <li><i class="far fa-clock"></i><p><b>Cook Time:</b> <?php block_field( 'cook-time' ); ?>min</p></li>
    <li><i class="fas fa-history"></i><p><b>Total Time:</b> <?php block_field( 'total-time' ); ?>min</p></li>
</ul>
</div>
</div>



<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner">
<h1 class="author-card-1"><?php wp_title('');?></h1>
<p style="color: darkgrey; font-size: 14px;"><?php block_field( 'tag-line' ); ?></p>
        <a class="author-card-1" href="#">Category Here</a>
        <p><b>Course:</b> <?php block_field( 'course' ); ?></p>
        <p><b>Cuisine:</b> <?php block_field( 'cuisine' ); ?></p>
        <p><b>Difficulty:</b> <?php block_field( 'difficulty' ); ?></p></div></div>
</div>
</div>
</div>
</div>
</div>