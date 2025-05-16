<?php 
    if (isset($_COOKIE["favourite_color"])) {
        echo "Your favourite color is: " . $_COOKIE["favourite_color"];
    } else {
        echo "No favoutite color set.";
    }
?>