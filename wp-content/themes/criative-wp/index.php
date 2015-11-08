<?php get_header(); ?>

    <div id="homepage">
    </div>
    <div id="container" style="max-width: 1920px" class="parallax-container">
        <ul id="scene" class="scene">
            <li class="layer"><img class="stars-mobile" src="<?php echo get_template_directory_uri(); ?>/images/parallax-bg/stars.png"></li>
            <li class="layer" data-depth="0.20" style="margin: -5% 0 0 -5%"><img class="stars-mobile" src="<?php echo get_template_directory_uri(); ?>/images/parallax-bg/stars-2.png" width="110%"></li>              
            <li class="layer homepage" data-depth="0.40">                
                <div id="homepage-1">                    
                    <div class="content-wrapper">
                        <svg height="100%" width="100%" style="position: absolute;">                            
                            <line class="d-none" id="line-p1" style="stroke:rgba(38,204,159, 0.3);stroke-width:20" />
                        </svg>
                        <svg height="100%" width="100%" style="position: absolute;">
                            <line class="d-none" id="line-p2" style="stroke:rgba(136,136,136, 0.3);stroke-width:20" />
                        </svg>
                        <svg height="100%" width="100%" style="position: absolute;">
                            <line class="d-none" id="line-p4" style="stroke:rgba(38,204,159, 0.3);stroke-width:20" />
                        </svg>
                        <a href="#what-we-do">
                            <div id="planet-what" class="p1 transition">
                                <div class="speech-bubble">
                                    <h2 class="red">WHAT I DO?</h2>
                                </div>
                            </div>
                        </a>
                        <a href="#">                            
                            <div id="planet-choose" class="p3 transition">
                                <img class="space-shuttle-planet" src="<?php echo get_template_directory_uri(); ?>/images/space-shuttle.svg" alt="">
                                <h3 class="here-txt">YOU ARE HERE</h3>
                                <!-- <h2 class="d-none dark-red v-align">CHOOSE<br> YOUR<br> DESTINATION</h2> -->
                            </div>
                        </a>                        
                        <a href="web-development-portfolio">                            
                            <div id="planet-our" class="p4 transition">
                                <div class="speech-bubble">
                                    <h2 class="red">MY WORK</h2>
                                </div>
                            </div>
                        </a>
                        <a href="#contact-us">
                            <div id="planet-contact" class="p2 transition">
                                <div class="speech-bubble">
                                    <h2 class="red">MAKE CONTACT!</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="layer last" data-depth="0.60" style="margin: -10% 0 0 -10%; pointer-events: none; opacity: 0.8"><img class="stars-mobile" src="<?php echo get_template_directory_uri(); ?>/images/parallax-bg/stars-1.png" width="120%"></li>
        </ul>

    </div> 

    <div id="what-we-do">
        <?php include('what-we-do.php') ?>
    </div>

    <div id="contact-us">
        <?php include('contact-us.php') ?>
    </div>

<?php get_footer(); ?>

<script type="text/javascript">
    // $("#planet-our").hover(function() {
    //     alert("HOVER");
    // })
</script>