<?php 
include_once '../database/db.php';

$sql = "SELECT * FROM tb_note";
$result = $db->query($sql);
$response = array();

while ($row = $result->fetch_assoc()) {
	$response[] = $row;
}

echo json_encode($response);