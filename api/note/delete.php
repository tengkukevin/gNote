<?php 
include_once '../database/db.php';

$id = addslashes(htmlentities($_POST['id']));

$sql = "DELETE FROM tb_note WHERE id = '$id'";
$response = array();

if($db->query($sql)) {
	$response['code'] = 1;
	$response['message'] = 'Success!';
} else {
	$response['code'] = 0;
	$response['message'] = 'Failed!';
}

echo json_encode($response);