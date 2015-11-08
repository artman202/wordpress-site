<?php /* Template Name: What We Do Template */ ?>
           
        <div id="w-col-1" class="col-md-4 w-col">
            <a href="web-development-portfolio">            
                <div class="shape" id="shape-triangle">
                    <h1 class="yellow text-shadow" id="triangle-text"><?php echo get_post_meta(22, 'Column 1 Title', true); ?></h1>
                </div>
                <div class="what-we-do-block web-wrapper"></div>
                <div class="what-description blue">
                    <h4><?php echo get_post_meta(22, 'Column 1 Description', true); ?>
                        <?php 
                            $list_items = get_post_meta(22, 'Column 1 Bullets', true);
                            if ($list_items) {
                                    $list_items = explode("\n", $list_items);
                                    echo '<ul>';
                                        foreach($list_items as $list_item) {
                                            echo '<li>' . $list_item . '</li>';
                                        }
                                    echo '</ul>';
                            }
                        ?>
                    </h4>
                </div>
                <div class="shape-triangle"></div>
            </a>
        </div>

        <div id="w-col-2" class="col-md-4 w-col">
            <a href="graphic-design-portfolio">        
                <div class="shape" id="shape-stripe">
                    <h1 class="yellow text-shadow" id="stripe-text"><?php echo get_post_meta(22, 'Column 2 Title', true); ?></h1>
                </div>
                <div class="what-we-do-block graphic-wrapper"></div>
                <div class="what-description gray">
                    <h4>
                        <?php echo get_post_meta(22, 'Column 2 Description', true); ?> 
                        <?php 
                            $list_items = get_post_meta(22, 'Column 2 Bullets', true);
                            if ($list_items) {
                                    $list_items = explode("\n", $list_items);
                                    echo '<ul>';
                                        foreach($list_items as $list_item) {
                                            echo '<li>' . $list_item . '</li>';
                                        }
                                    echo '</ul>';
                            }
                        ?>
                    </h4>
                </div>
                <div class="shape-stripe"></div>
            </a>
        </div>

        <div id="w-col-3" class="col-md-4 w-col">
            <a href="application-development-portfolio">
                <div class="shape" id="shape-circle">
                    <h1 class="yellow text-shadow" id="circle-text"><?php echo get_post_meta(22, 'Column 3 Title', true); ?></h1>
                </div>
                <div class="what-we-do-block app-wrapper"></div>
                <div class="what-description red">
                    <h4>
                        <?php echo get_post_meta(22, 'Column 3 Description', true); ?> 
                        <?php 
                            $list_items = get_post_meta(22, 'Column 3 Bullets', true);
                            if ($list_items) {
                                    $list_items = explode("\n", $list_items);
                                    echo '<ul>';
                                        foreach($list_items as $list_item) {
                                            echo '<li>' . $list_item . '</li>';
                                        }
                                    echo '</ul>';
                            }
                        ?>
                    </h4>
                </div>
                <div class="shape-circle"></div>
            </a>
        </div>
