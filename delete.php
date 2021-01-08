<?php 
require("config.php");
$pdostatment = $pdo->prepare("DELETE FROM todo_app WHERE id=".$_GET['id']);
$pdostatment->execute();

header("Location: index.php");
 ?>