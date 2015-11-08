<?php
/**
 * The template for displaying posts in the Image post format
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php 
        $url = $_SERVER['REQUEST_URI'];

        if (strpos($url,'web')) {
            include('web-development-modal.php');
        } elseif (strpos($url,'graphic')) {
            include('graphic-design-modal.php');
        } else {
            include('application-development-modal.php');
        };
    ?>

</article><!-- #post -->


