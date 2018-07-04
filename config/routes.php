<?php

    return array(
        'admin/productdelete/([0-9]+)' => 'admin/productdelete/$1',
        'admin/product/([0-9]+)' => 'admin/productupdate/$1',
        'admin/productcreate' => 'admin/productcreate/',
        
        'user/login' => 'user/login',
        'user/logout' => 'user/logout',
        
        'admin/products' => 'admin/products',
        'admin/orders' => 'admin/orders',
        'admin' => 'admin/index',
        '' => 'site/index',
        
    );

?>