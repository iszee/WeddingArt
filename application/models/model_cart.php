<?php
/**
 * Created by PhpStorm.
 * User: Isuru Nanayakkara
 * Date: 17-Dec-17
 * Time: 8:09 PM
 */

class Model_cart extends  CI_Model
{
    public function checkOut($cart){
        foreach ($cart as $items) {
            $this->db->insert('cart', $items);

        }
        return true;


    }
}