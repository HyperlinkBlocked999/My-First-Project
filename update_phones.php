
<!DOCTYPE html>
<html>

<body>

<h1> Update a Game </h1>

<form method="POST">

    Game ID:
    <input type="INT" name="ID">

    <br></br>

    New Title:
    <input type="varchar" name="Game_Title">

    <br></br>

    New Rating:
    <input type="INT" name="Rating">
    
    <br></br>

    New Genre:
    <input type="varchar" name="Genre">

    <br></br>

    <button type=""> Update Values</button>

    <br></br>

</form>

</body>

</html>

<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["ID"];
    $game_title = $_POST["Game_Title"];
    $rating = $_POST["Rating"];
    $genre = $_POST["Genre"];

    $sql = "UPDATE games
            SET Game_Title = ?, Rating = ?, Genre = ?
            WHERE ID = ?";
    
    $result = $pdo->prepare($sql);

    $result->execute([$game_title, $rating, $genre, $id]);

    echo "Values have been updated";
}



