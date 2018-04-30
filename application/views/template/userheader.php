
<script src=<?php echo base_url();?>js/jquery.min.js></script>
<div class="header">
    <link rel="stylesheet" href=<?php echo base_url();?>css/style.css>
    <div class="wrap">
        <div class="logo">
            <a href=<?php echo base_url(); ?>home/user> <img src=<?php echo base_url();?>images/logonn.png alt=""/></a>
        </div>
        <div class="top-nav">
            <div class="menu">
                <span class="menu"> </span>
                <ul>
                    <li><a href=<?php echo base_url(); ?>home/user>Home</a></li>
                    <li class=""><a href=<?php echo base_url(); ?>about>About</a></li>
                    <li class=""><a href=<?php echo base_url(); ?>services>Services</a></li>
                    <li class=""><a href=<?php echo base_url(); ?>gallery>Gallery</a></li>
                    <li class=""><a href=<?php echo base_url(); ?>contact>Appointment</a></li>
                    <li class=""><a href=<?php echo base_url(); ?>sms>sms</a></li>
                    <li class=""><a href=<?php echo base_url(); ?>cart/showItems><?php echo $this->session->userdata['cartItems']; ?>  <img src=<?php echo base_url();?>images/cart.png width="38px" height="30px"/></a></li>
                    <li class=""><a href=<?php echo base_url(); ?>users/logout><?php echo $this->session->userdata['user_name']; ?> <img src=<?php echo base_url();?>images/logout.png width="25px" height="25px"/></a></li>



                </ul>
                <div class="clear"></div>
            </div>
            <!-- script-for-nav -->
            <script>
                $( "span.menu" ).click(function() {
                    $( ".top-nav ul" ).slideToggle(300, function() {
                        // Animation complete.
                    });
                });
            </script>
            <!-- script-for-nav -->
        </div>
        <div class="clear"></div>
    </div>
</div>
