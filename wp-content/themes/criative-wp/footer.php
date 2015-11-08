
    <?php wp_footer(); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/lib/jquery/index.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/lib/parallax-master/examples/scripts/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/parallax-master/deploy/jquery.parallax.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/responsive-slides/responsiveslides.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/lightbox/js/lightbox.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>
    <script>

        $(window).load(function() {
            $('#slider-1, #slider-2, #slider-3, #slider-4').nivoSlider({
                effect: 'fade',
                controlNav: false,
                controlNavThumbs: true,
                prevText: '',
                nextText: ''
            }).hide();
        });

        $('[data-target="#bs-example-modal-lg-1"]').click(function(){
            $('#bs-example-modal-lg-1').find('#slider-1').show();
        });

        $('[data-target="#bs-example-modal-lg-2"]').click(function(){
            $('#bs-example-modal-lg-2').find('#slider-2').show();
        });

        $('[data-target="#bs-example-modal-lg-3"]').click(function(){
            $('#bs-example-modal-lg-3').find('#slider-3').show();
        });

        $('[data-target="#bs-example-modal-lg-4"]').click(function(){
            $('#bs-example-modal-lg-4').find('#slider-4').show();
        });

        $('#scene').parallax();
        $('#scene-1').parallax();

        $("#slider3").responsiveSlides({
            manualControls: '#slider3-pager',
            timeout: 5000,
        });

        $(document).ready(function(){

            //mid point
            var p3 = $('.p3');
            var p3offset = p3.offset();
            var p3width = p3.width();
            var p3height = p3.height();

            var p3centerX = p3offset.left + p3width / 2;
            var p3centerXC = p3centerX - $('.content-wrapper').css('marginLeft').replace(/[^-\d\.]/g, '')
            var p3centerY = p3offset.top + p3height / 2; 

            //planet 1 line
            var p1 = $('.p1');
            var p1offset = p1.offset();
            var p1width = p1.width();
            var p1height = p1.height();

            var p1centerX = p1offset.left + p1width / 2;
            var p1centerXC = p1centerX - $('.content-wrapper').css('marginLeft').replace(/[^-\d\.]/g, '')
            var p1centerY = p1offset.top + p1height / 2;

            $('#line-p1').attr('x1', p1centerXC)
            $('#line-p1').attr('y1', p1centerY)
            $('#line-p1').attr('x2', p3centerXC)
            $('#line-p1').attr('y2', p3centerY)            

            $('.p1').hover(function(){
                $('#line-p1').fadeIn('slow')
            }, function(){
                $('#line-p1').fadeOut('fast')
            })

            //planet 2 line
            var p2 = $('.p2');
            var p2offset = p2.offset();
            var p2width = p2.width();
            var p2height = p2.height();

            var p2centerX = p2offset.left + p2width / 2;
            var p2centerXC = p2centerX - $('.content-wrapper').css('marginLeft').replace(/[^-\d\.]/g, '')
            var p2centerY = p2offset.top + p2height / 2;

            $('#line-p2').attr('x1', p2centerXC)
            $('#line-p2').attr('y1', p2centerY)
            $('#line-p2').attr('x2', p3centerXC)
            $('#line-p2').attr('y2', p3centerY)

            $('.p2').hover(function(){
                $('#line-p2').fadeIn('slow')
            }, function(){
                $('#line-p2').fadeOut('fast')
            })

            //planet 4 line
            var p4 = $('.p4');
            var p4offset = p4.offset();
            var p4width = p4.width();
            var p4height = p4.height();

            var p4centerX = p4offset.left + p4width / 2;
            var p4centerXC = p4centerX - $('.content-wrapper').css('marginLeft').replace(/[^-\d\.]/g, '')
            var p4centerY = p4offset.top + p4height / 2;

            $('#line-p4').attr('x1', p4centerXC)
            $('#line-p4').attr('y1', p4centerY)
            $('#line-p4').attr('x2', p3centerXC)
            $('#line-p4').attr('y2', p3centerY)   

            $('.p4').hover(function(){
                $('#line-p4').fadeIn('slow')
            }, function(){
                $('#line-p4').fadeOut('fast')
            })    

            $('a').nivoLightbox();

        })        
        
    </script>
</body>
</html>