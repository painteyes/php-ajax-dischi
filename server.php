<?php require __DIR__ . '/database.php' 

$ json = json_encode($databse);

header('Content-Type: application/json');

echo $json;
?>;