<div class="modal-wrapper">
    <div class="modal-window v-align">
        <div class="nav-spacer">
        </div>
        <a onclick="history.back(-1)" class="modal-close" style="background: url('<?php echo get_template_directory_uri(); ?>/images/close-triangle.svg')"></a>
        <a class="modal-gallery" style="border: #26CC9F solid 5px;" href="<?php echo get_post_meta($post->ID, 'Project Link', true); ?>" target="blank" >
            <img height="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'third-image', NULL,  'secondary-featured-thumbnail'); ?>"> 
        </a>
        <div class="modal-description modal-description-web">
            <h1><?php echo the_title(); ?></h1>
            <p>
                <?php 
                    substr(the_content(), 0, -100) . "...";
                ?>
            </p>              
            <a href="<?php echo get_post_meta($post->ID, 'Project Link', true); ?>" target="blank" class="btn-triangle"><h2 class="v-align">VIEW</h2></a>
        </div> 
        <div class="col-md-12 modal-thumb-wrapper">
            <div class="col-md-2 modal-thumb-web-first">                
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'third-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="third-image">
                    <div class="modal-thumb-overlay transition-fast"></div>
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'third-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>         
            </div>
            <div class="col-md-2 modal-thumb-web">
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'fourth-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="third-image">
                    <div class="modal-thumb-overlay transition-fast"></div>
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'fourth-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>         
            </div>
            <div class="col-md-2 modal-thumb-web">
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'fifth-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="third-image">
                    <div class="modal-thumb-overlay transition-fast"></div>
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'fifth-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>         
            </div>
            <div class="col-md-2 modal-thumb-web">
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'sixth-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="third-image">
                    <div class="modal-thumb-overlay transition-fast"></div>
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'sixth-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>         
            </div>
            <div class="col-md-2 modal-thumb-web">
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'seventh-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="third-image">
                    <div class="modal-thumb-overlay transition-fast"></div>
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'seventh-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>         
            </div>
            <div class="col-md-2 modal-thumb-web">
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'eighth-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="third-image">
                    <div class="modal-thumb-overlay transition-fast"></div>
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'eighth-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>         
            </div>
        </div>             
    </div>
    <div class="modal-bg"></div>
</div>
