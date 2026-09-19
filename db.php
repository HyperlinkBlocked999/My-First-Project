<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=my_first_db", "root", "");
} catch (PDOException $e) {
    echo "Connection failed";
}

?>
