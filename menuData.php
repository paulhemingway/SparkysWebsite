<?php

    // store all menu items in object
    //https://www.w3schools.com/php/php_arrays.asp
    $menu = (object) array(
        'flavors'=>array('Watermelon Sugar Lime Agave', 'Strawberry Orange Peach Vanilla', 'Lemon Poppyseed Muffin', 'London Smog', 'Cake Batter', 'Mint Chocolate Chip', 'Cookies & Cream', 'Oreo Speedwagon', 'Chocolate', 'Vanilla', 'Strawberry Cookies & Cream', 'Red Velvet Cake', 'Lemon Basil Cheesecake', 'Cinnamon', 'Mango', 'Green Tea', 'Blueberry', 'Lavendar Honey', 'Raspberry', 'Strawberry', 'Coffee', 'Sweetcream', 'Uprise Bakery Brownie', 'Cinnamon Chai Spice'),
        
        'menuItems'=>array('cup', 'cone', 'float', 'shake', 'malt', 'Red Bull Float', 'Hot Fudge Sundae', 'Brownie Sundae', 'Banana Split'),
        
        'toppings'=>array('')
        
    );

    $menuJSON = json_encode($menu);

    echo $menuJSON;
?>