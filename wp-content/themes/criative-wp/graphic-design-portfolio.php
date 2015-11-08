<?php /* Template Name: Graphic Design Portfolio Template */ ?>

<?php get_header(); ?>
<div id="our-work"> 

    <?php

        $json = file_get_contents('http://www.criative.co.za/portfolio_api/dev_portfolio_api.php');
        $array = json_decode($json);

        foreach ($array as $obj){            
            $techArray = explode(", ", $obj->port_item_tech)
            ?>
                <div class="col-md-6 our-work-blocks">
                    <a class="port-triangle-wrapper" data-toggle="modal">
                        <img class="port-triangle-logo bg-gray" src="<?php echo get_template_directory_uri() ?>/images/coming-soon.svg" alt="">
                    </a>
                    <img class="port-triangle-bg" src="" alt="">
                </div>               

            <?php
        }

    ?>
    
</div>

<?php get_footer(); ?>