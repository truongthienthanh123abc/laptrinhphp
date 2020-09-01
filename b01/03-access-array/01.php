<?php
    $arrMenu = [
        'index' => [
            "name"  => "Home",   "link"  => "index.php"
        ],
        'about' => [
            "name"  => "About",  
            "link"  => "data/about.php", 
            "child" => [
                'service'   => [ 
                    "name"  => "Service", 
                    "link"  => "service.php",
                    "child" => [
                        'sale'      => ["name" => "Sale", "link" => "sale.php"],
                        'training'  => ["name" => "Training", "link" => "training.php"]
                    ]
                ], 
                'company'   => [
                    "name" => "Company", 
                    "link" => "company.php",
                    "child" => [
                        'toyota' => ["name" => "Toyota","link"   => "toyota.php"]
                    ]]
        ]],
        'contact' => ["name" => "Contact", "link" => "contact.php"]
    ];

    // Đây là Array thể hiện menu cấp 3, có dạng
    // Home
    // About
    // ---Service
    // ------Sale
    // ------Training
    // ---Company
    // ------Toyata
    // Contact


    // Yêu cầu Hãy in ra link của menu Training

    $output=$arrMenu['about']['child']['service']['child']['training']['link'];
    echo '<h1 style="color:red;font-weight:bold">' . $output.'</h1>';

echo '<pre>';
print_r($arrMenu);
echo '</pre>';
        

