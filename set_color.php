<?php 
    $color = 'blue';
    setcookie("favourite_color", $color, time() + (86400 * 30));
    echo "Favourite color cookie set!";
?>