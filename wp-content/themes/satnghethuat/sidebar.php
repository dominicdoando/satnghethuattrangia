<?php
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : ?><?php endif;
    if ( is_active_sidebar( 'dynamic_sidebar' ) ) dynamic_sidebar( 'sidebar' )

?>
