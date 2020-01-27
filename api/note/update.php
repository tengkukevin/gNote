<?php 
include_once 'database/db.php';

$id = addslashes(htmlentities($_POST['id']));
$title = addslashes(htmlentities($_POST['title']));
$content = addslashes(htmlentities($_POST['content']));

$sql = "UPDATE tb_note SET title = '$title', content = '$content' WHERE id = '$id'";
$response = array();

if($db->query($sql)) {
	$response['code'] = 1;
	$response['message'] = 'Success!';
} else {
	$response['code'] = 0;
	$response['message'] = 'Failed!';
}

echo json_encode($response);