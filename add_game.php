<h1> Games Database </h1>

<form method="POST">

Game_Title:
<input type="text" name="title">

<br><br>

Genre:
<input type="text" name="genre">

<br><br>

Rating:
<input type="int" name="rating">

<br><br>

<button type=""> Add Game </button>

</form>

<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST["title"];
    $genre = $_POST["genre"];
    $rating = $_POST["rating"];

    $sql = "INSERT INTO games(Game_Title, Genre, Rating)
            VALUES (?,?,?)";
    
    $result = $pdo->prepare($sql);

    $result->execute([$title, $genre, $rating]);

    echo "Game Added";

}

