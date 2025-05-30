<?php 
$host = ''; // localhost
$db = ''; // databse name
$user = ''; // database username
$pass = ''; //database password

// $charset = ''; // character set

$dsn = "mysql:host=$host;dbname=$db";
$option = [
    PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION, // error mode
    PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC, // Fetch style
    PDO::ATTR_EMULATE_PREPARES     => false,  //disable emulation
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Connect successfully!";
} catch (\PDOException $e) {
    // throw new \PDOException($e->getMessage(), (int)$e->getCode()); 
    echo "Connection failed:" .$e->getMessage();
}
?>