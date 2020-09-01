<?php
    $input  = "D:/GoogleDrive/Doing/__psd/luutruonghailan/youtube-luutruonghailan-tamsu.psd";

    // Phần xử lý của học viên
    $pathinfo = pathinfo('input');

    echo $pathinfo['dirname'], "\n";
    echo $pathinfo['basename'], "\n";
    echo $pathinfo['extension'], "\n";
    echo $pathinfo['filename'], "\n"; // since PHP 5.2.0
    ?>
