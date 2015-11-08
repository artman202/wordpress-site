<?php /* Template Name: Web Development Portfolio Template */ ?>

<?php get_header(); ?>

<div id="our-work">

    <?php

        $json = file_get_contents('http://www.criative.co.za/portfolio_api/dev_portfolio_api.php');
        $array = json_decode($json);

        foreach ($array as $obj){            
            $techArray = explode(", ", $obj->port_item_tech)
            ?>
                <div class="col-md-6 our-work-blocks">
                    <a class="port-triangle-wrapper" data-toggle="modal" data-target="#bs-example-modal-lg-<?php echo $obj->port_item_id?>">
                        <img class="port-triangle-logo bg-blue" src="<?php echo get_template_directory_uri().'/images/'.$obj->port_item_logo ?>" alt="">
                    </a>
                    <img class="port-triangle-bg" src="<?php echo get_template_directory_uri().'/images/'.$obj->port_item_img ?>" alt="">
                </div>

                <div class="modal fade" id="bs-example-modal-lg-<?php echo $obj->port_item_id?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h2 class="modal-title"><?php echo $obj->port_item_mod ?></h2>
                      </div>
                      <div class="modal-body">
                        <div class="modal-gal">
                            <?php 
                                foreach ($array as $id) {
                                $galArray = explode(", ", $id->port_item_gal);
                                ?>
                                    <div id="slider-<?php echo $id->port_item_id; ?>" class="nivoSlider">
                                        <?php
                                            for($x = 0; $x < count($galArray); $x++) {
                                                ?>
                                                <img src="<?php echo get_template_directory_uri().'/images/'.$galArray[$x] ?>" alt="" />
                                                <?php
                                            }
                                        ?>
                                    </div>
                                <?php
                                }
                            ?>
                        </div>
                        <div class="modal-desc">
                            <h3>
                                <?php echo $obj->port_item_title ?>
                            </h3><br>
                            <p>                    
                                <?php echo $obj->port_item_desc ?>
                            </p><br>
                            <h3>
                                Technologies Used
                            </h3><br>
                            <ul>
                                <?php
                                    for($x = 0; $x < count($techArray); $x++) {
                                        ?>
                                        <li><?php echo $techArray[$x] ?></li>
                                        <?php
                                    }
                                ?>
                            </ul>
                        </div>
                        <div class="clear"></div>                      
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <a href="http://docs.google.com/viewer?url=http://criative.co.za/files/'<?php echo $obj->port_item_pdf ?>" target="_blank" type="button" class="btn btn-primary">View Project PDF</a>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->                

            <?php
        }

    ?> 
    
</div>

<script type="text/javascript">
    
    $(".nivoSlider").hover(function(){
        $(".nivo-directionNav").fadeIn("fast")
    }, function() {
        $(".nivo-directionNav").fadeOut("fast")
    })

</script>

<?php get_footer(); ?>