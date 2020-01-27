<?php 
include_once 'database/db.php';

$id = addslashes(htmlentities($_GET['id']));

$sql = "SELECT * FROM tb_note WHERE id = '$id'";
$result = $db->query($sql);
$response = array();

while ($row = $result->fetch_assoc()) {
	$response[] = $row;
}

echo json_encode($response);