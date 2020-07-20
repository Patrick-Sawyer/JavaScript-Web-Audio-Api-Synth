<?

session_start();

$data = array();

$patchName = $_SESSION["patchName"];
$patchData = $_SESSION["patchData"];

array_push($data, $patchName);
array_push($data, $patchData);

echo json_encode($data);

exit();

?>