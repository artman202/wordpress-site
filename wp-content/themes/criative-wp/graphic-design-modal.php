<div class="modal-wrapper">
    <div class="modal-window v-align">
        <a onclick="history.back(-1)" class="modal-close" style="background: url('<?php echo get_template_directory_uri(); ?>/images/close-triangle-gray.svg')"></a>
        <div class="modal-gallery" style="border: #888 solid 5px;">
            <ul class="rslides ul-pop-up" id="slider3">           
                <li>
                    <img src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'third-image', NULL,  'secondary-featured-thumbnail'); ?>"> 
                </li>
                <li>
                    <img src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'fourth-image', NULL,  'secondary-featured-thumbnail'); ?>"> 
                </li>
                <li>
                    <img src="<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'fifth-image', NULL,  'secondary-featured-thumbnail'); ?>"> 
                </li>
            </ul>    
        </div>
        <div class="modal-description modal-description-graphic">
            <h1><?php echo the_title(); ?></h1>
            <h4>
                <?php 
                    substr(the_content(), 0, -100) . "...";
                ?>
            </h4>                
            <a href="<?php echo get_post_meta($post->ID, 'Project Link', true); ?>" target="blank" class="btn-stripe"><h2 class="v-align">VIEW</h2></a>
        </div>               
    </div>
    <div class="modal-bg"></div>
</div>