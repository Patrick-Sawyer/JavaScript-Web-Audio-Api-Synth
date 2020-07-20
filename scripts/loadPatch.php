<?php

session_start();

$request = $_POST["select"];
$conn = new mysqli('localhost', 'fake', 'fake', 'fake');
$result = mysqli_query($conn, "SELECT * FROM synthPatches WHERE patchName = '$request'");

$row = mysqli_fetch_array($result);
$patchName = $row[1];
$patchData = $row[2];

$_SESSION["patchName"] = $patchName;
$_SESSION["patchData"] = $patchData;

$url = 'http://www.disco-computer.com/synthesizer/synth.html'; 
header( "Location: $url" );

exit();

?>