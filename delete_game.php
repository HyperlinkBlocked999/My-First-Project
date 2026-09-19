<!DOCTYPE html>
<html>

<body>

<h1> Delete a Game </h1>

<form method="POST">

    Game ID:
    <input type="INT" name="ID">

    <br></br>

    <button type=""> Delete Game</button>

    <br></br>

</form>

</body>

</html>

<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["ID"];

    $sql = "DELETE
            FROM games
            WHERE ID = ?";
    
    $result = $pdo->prepare($sql);

    $result->execute([$id]);

    echo "Game has been removed from the database.";
}