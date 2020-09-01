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
    

   

    // Yêu cầu: In ra tên của các menu cấp 1, 
    // Output: Home - About - Contact
    $result = "";

foreach($arrMenu as $menuLevelOne){
    $result .= $menuLevelOne['name'] . " - ";
}
$result = substr($result, 0, -3);

echo '<h3 style="color:red;font-weight:bold">' . $result . '</h3>';     