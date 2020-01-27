<?php 
include_once 'database/db.php';

$title = addslashes(htmlentities($_POST['title']));
$content = addslashes(htmlentities($_POST['content']));
$created = date('Y-m-d');

$sql = "INSERT INTO tb_note(title, content, created) VALUES ('$title', '$content', '$created')";
$response = array();

if($db->query($sql)) {
	$response['code'] = 1;
	$response['message'] = 'Success!';
} else {
	$response['code'] = 0;
	$response['message'] = 'Failed!';
}

echo json_encode($response);