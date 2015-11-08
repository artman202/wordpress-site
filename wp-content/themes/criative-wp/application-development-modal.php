<div class="modal-wrapper">
    <div class="modal-window v-align">
        <div class="nav-spacer">
        </div>
        <a onclick="history.back(-1)" class="modal-close" style="background: url('<?php echo get_template_directory_uri(); ?>/images/close-triangle-red.svg')"></a>
        <a class="modal-gallery" style="border: #D4123A solid 5px;" href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'third-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="gallery">
            <img height="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'third-image', NULL,  'secondary-featured-thumbnail'); ?>">
        </a>
        <div class="modal-description modal-description-photography">
            <h1><?php echo the_title(); ?></h1>
            <p>
                <?php 
                    substr(the_content(), 0, -100) . "...";
                ?>
            </p>                
            <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'third-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="gallery" class="btn-circle"><h2 class="v-align">VIEW</h2></a>
        </div>
        <div class="col-md-12 modal-thumb-wrapper">
            <div class="col-md-2 modal-thumb-web-first">                
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'third-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="gallery">
                    <div class="modal-thumb-overlay transition-fast"></div>
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'third-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>         
            </div>
            <div class="col-md-2 modal-thumb-web">
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'fourth-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="gallery">
                    <div class="modal-thumb-overlay transition-fast"></div>
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'fourth-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>         
            </div>
            <div class="col-md-2 modal-thumb-web">
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'fifth-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="gallery">
                    <div class="modal-thumb-overlay transition-fast"></div>
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'fifth-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>         
            </div>
            <div class="col-md-2 modal-thumb-web">
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'sixth-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="gallery">
                    <div class="modal-thumb-overlay transition-fast"></div>
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'sixth-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>         
            </div>
            <div class="col-md-2 modal-thumb-web">
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'seventh-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="gallery">
                    <div class="modal-thumb-overlay transition-fast"></div>
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'seventh-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>         
            </div>
            <div class="col-md-2 modal-thumb-web">
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'eighth-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="gallery">
                    <div class="modal-thumb-overlay transition-fast"></div>
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'eighth-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>         
            </div>
            <div class="gallery">
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'fourth-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="gallery">
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'fourth-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'fifth-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="gallery">
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'fifth-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'sixth-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="gallery">
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'sixth-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'seventh-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="gallery">
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'seventh-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'eighth-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="gallery">
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'eighth-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'nineth-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="gallery">
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'nineth-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'tenth-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="gallery">
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'tenth-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'eleventh-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="gallery">
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'eleventh-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'twelve-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="gallery">
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'twelve-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'thirteenth-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="gallery">
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'thirteenth-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'fourteenth-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="gallery">
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'fourteenth-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'fifteenth-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="gallery">
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'fifteenth-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'sixteenth-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="gallery">
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'sixteenth-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>
                <a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'seventeenth-image', NULL,  'secondary-featured-thumbnail'); ?>" data-lightbox="gallery">
                    <img width="100%" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'seventeenth-image', NULL,  'secondary-featured-thumbnail'); ?>"/>
                </a>
            </div>
        </div>             
    </div>
    <div class="modal-bg"></div>
</div>