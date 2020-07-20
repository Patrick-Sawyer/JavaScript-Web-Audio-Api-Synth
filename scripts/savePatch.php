<?php

session_start();

$nameJSON = file_get_contents('php://input');
$json = json_decode($nameJSON, true);
$name = $first = array_shift($json);
$data = $first = array_shift($json);
$string = json_encode($data);

$_SESSION["patchName"] = $name;
$_SESSION["patchData"] = $string;

$conn = new mysqli('localhost', 'fake', 'fake', 'fake');
$query =  mysqli_query($conn, "INSERT INTO synthPatches (patchName,patchData) VALUES ('$name','$string');");

exit();

?>