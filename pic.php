<?php
    $img = imagecreatetruecolor(800, 600);

    $color = imagecolorallocate($img, 255, 235, 205);
        imagefill($img, 0, 0, $color);

    imagejpeg($img, "pic3.jpg");
    
?>