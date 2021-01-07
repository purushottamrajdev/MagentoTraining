<?php

namespace Espl\PluginModule\Plugin;

class Cart {
    

    public function beforeAddProduct(
            \Magento\Checkout\Model\Cart $subject,
            $productInfo)
    { 

        $productInfo['price'] += 50;              
        //return array($productInfo);
    }
}