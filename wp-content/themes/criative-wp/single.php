<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<!-- <div class="modal-wrapper">
        <div class="modal-window v-align">
            <div class="modal-close" style="background: url('<?php echo get_template_directory_uri(); ?>/images/close-triangle.svg')"></div>
            <div class="modal-gallery" style="border: #26CC9F solid 5px;">
                <ul class="rslides" id="slider3">                        
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/port-images/web-audi-2.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/port-images/web-audi-1.jpg" alt=""></li>
                </ul>    
            </div>
            <div class="modal-description">
                <h1><?php echo get_permalink(); ?></h1>
                <h4>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel diam vitae lorem volutpat feugiat. Ut augue mi, pellentesque at justo vel, euismod convallis risus. Sed scelerisque consequat egestas.
                    <br><br>Donec a justo erat. Mauris vel lorem volutpat, pellentesque lectus sed, tristique ante. Etiam neque massa, tempor id odio ut, posuere tincidunt mauris. Sed suscipit, leo nec ultrices commodo, lorem erat posuere dui, sit amet rhoncus urna mi in dolor.
                </h4>
                <a href="" class="btn-triangle"><h2 class="v-align">VIEW</h2></a>
            </div>               
        </div>
        <div class="modal-bg"></div>
    </div> -->

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>				

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>