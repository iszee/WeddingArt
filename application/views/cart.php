<html>
<head>
    <title>Wedding Art| Cart</title>
    <link href="<?php echo base_url(); ?>css/style.css" rel='stylesheet' type='text/css' />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


</head>
<body>
<div id='content'>

    <div class="about-top">
        <div class="wrap">
            <div class="about-box">
                <div class="section group">
                    <div class="col span_2_of_3">
                        <div class="contact-form">
            <h2 align="center">Products on Your Shopping Cart</h2>
        </div>
                    </div>
                </div>
            </div>




        <div class="table-wrapper">
            <table class="table table-bordered table-responsive" id="tab" style="margin-left: 300px">
                <?php
            if ($cart = $this->cart->contents()): ?>
                <thead>
                <tr>
                    <td>Item ID</td>
                    <td>Item Serial Number</td>
                    <td>Item Description</td>

                </tr>
                </thead>
                <?php
                $i = 1;
                foreach ($cart as $item):
                    echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                    echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                    ?>
                    <tr>
                    <td>
                        <?php echo $i++; ?>
                    </td>
                    <td>
                        <?php echo $item['id']; ?>
                    </td>
                    <td>
                        <?php echo $item['name']; ?>
                    </td>
                    <td>
<!--                        <a href="--><?php //echo base_url('cart/remove')?><!--" class="btn btn-danger" onclick="return confirm('Do you want to remove this item form the Cart');" value=''$item['rowid']>Delete</a>-->
                        <?php
                        $path = "<img src='http://localhost/WeddingArt/images/cartRemove.png' width='60px' height='60px'>";
                        echo anchor('cart/removeItem/' . $item['rowid'], $path); ?>
                    </td>
                <?php endforeach; ?>
                </tr>
            <?php endif; ?>
        </table>
    </div>
            <?php
            $cart_check = $this->cart->contents();
            if(empty($cart_check)) {
                echo '<script> alert("Cart is Empty. Add Item First"); </script>';
            } ?>
            <form action='<?php echo base_url('cart/checkOut')?>' method='post'>
                <div>
                    <input type="submit" name="cartCheckOut" class="btn btn-primary" style="margin-left: 600px;margin-top: 50px" value="CheckOut" <?php if (!($cart_check)){ ?> disabled <?php   } ?>/>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>