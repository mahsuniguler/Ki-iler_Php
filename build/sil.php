<?php

include("Connectmysql.php");
$id = $_GET["id"];
$sql = "DELETE FROM rehberimtable WHERE id=$id";

$conn->query($sql);

$conn->close();
header('Location: index.php');
?>