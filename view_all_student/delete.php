<?php
require_once '../db_config.php';
	



if(isset($_POST['id']))
{
$del = $_POST['del_id'];
	$query = $conn->prepare("DELETE FROM computer WHERE roll=:del ");
	$data = array(':del'=>$del);
    $query->execute($data);
    $query->fetch()

}

?>