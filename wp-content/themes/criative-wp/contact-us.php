<?php 

    /* Template Name: Contact Us Template */

?>

<div class="col-md-3 column-wrap"></div>
<div class="col-md-2 column-wrap">
    <div class="v-align">
        <img src="<?php echo get_template_directory_uri(); ?>/images/space-shuttle.svg" width="80%">
    </div>
</div>
<div class="col-md-4 column-wrap ">
    <div class="v-align">
        <h1 class="blue">MAKE CONTACT</h1>
        <form class="contact-form" action="<?php echo get_site_url() ?>/contact-form-process" method="post">            
            <br>
            <input type="text" name="form_name" value="" placeholder="NAME">
            <br><br>
            <input type="text" name="form_email" value="" placeholder="EMAIL">
            <br><br>
            <input type="text" name="form_subject" value="" placeholder="SUBJECT">
            <br><br>
            <textarea name="form_message" value="" placeholder="MESSAGE"></textarea>
            <br><br>
            <input type="submit" name="" value="MAKE CONTACT" >
        </form>
        <br><br>
        <h4 class="blue"><b>CONTACT:</b> <span class="blue">082 825 8037 (Etienne)</span></h4>
        <h4 class="blue"><b>EMAIL:</b> <span class="blue">contact@criative.co.za</span></h4>
    </div>
</div>
<div class="col-md-3 column-wrap"></div>