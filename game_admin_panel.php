<?php

include "db.php";

$sql = "SELECT * FROM games";

$result = $pdo->query($sql);

?>

<h1> Here are all the games: </h1>

<?php

foreach ($result as $game) {
    echo $game["Game_Title"];
    echo "-";
    echo $game["Genre"];
    echo "-";
    echo $game["Rating"] ."/10";
    echo "<br>";

}

?>

