<?php

$filename = $_POST['name'];

if (move_uploaded_file($_FILES['file0']['tmp_name'], '../../images/_projects/'.$filename)) {
    $data = array('filename' => $filename);
} else {
    $data = array('error' => 'Failed to save'.$filename);
}

header('Content-type: text/html');
echo json_encode($data); 
	
?>