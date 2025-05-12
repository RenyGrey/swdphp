<?php 

// 1. Index array 
$fruits = array("apple", "orange", "banana");
    echo $fruits[0];
    echo "<br>";
// foreach 
foreach ($fruits as $fruit) {
    echo "<br>";
    echo $fruit;
}

// 2. Associative Array 
$person = array(
    "name" => "Shine Minn",
    "age" => 24,
    "city" => "Yangon"
);
// foreach 
foreach ($person as $key => $value) {
    echo "<br>";
    echo $key . ":" . $value;
}

//3. Multidimensional Array

// Exercise 1 
$marks = array (
    "aung" => 30,
    "mgmg" => 40,
    "tuntun" => 60
);

foreach ($marks as $key => $value) {
    if ($value >= 40) {
        echo $key . "pass";
    } else {
          echo $key . "fail";
    };
};




?>