<div class="wp-block-atomic-blocks-ab-container alignfull ab-block-container"><div class="ab-container-inside"><div class="ab-container-content">
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-3 ab-3-col-equal"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column">
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner">
<h2 style="background-color:#00ced7; color:#fff">Ingredients </h2>
<p><?php block_field( 'ingredients' ); ?></p>
</div></div>



<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner">
<h2 style="background-color:#00ced7; color:#fff">Directions</h2>
<p><?php block_field( 'directions' ); ?></p>
</div></div>



<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner">
<h4 class="has-text-align-left">Recent Posts</h4>
<ul>
<?php
    $recent_posts = wp_get_recent_posts();
    foreach( $recent_posts as $recent ) {
        printf( '<li><a href="%1$s">%2$s</a></li>',
            esc_url( get_permalink( $recent['ID'] ) ),
            apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
        );
    }
?>
</ul>


<hr class="wp-block-separator">



<h4  class="has-text-align-left">Recent Posts</h4>


<ol class="wp-block-latest-comments alignleft has-dates"><li class="wp-block-latest-comments__comment"><article><footer class="wp-block-latest-comments__comment-meta"><a class="wp-block-latest-comments__comment-author" href="https://wpengine.com/">A WordPress Commenter</a> on <a class="wp-block-latest-comments__comment-link" href="http://representscook.local/2020/06/28/hello-world/#comment-1">Hello world!</a><time datetime="2020-06-28T15:47:36+00:00" class="wp-block-latest-comments__comment-date">June 28, 2020</time></footer></article></li></ol></div></div>
</div></div>
</div></div></div>