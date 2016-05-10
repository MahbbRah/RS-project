<?php require_once 'head.php';?>

<div class="col-md-8"><br>
<div class="submit-form">
<?php
$shift = 'Second';
$query = $conn->prepare("SELECT * FROM food WHERE shift=:shift ");
?>
<table class="table">

			<thead>
	
<?php
    $data = array(':shift'=>$shift);

    /*** execute the prepared statement ***/
    $query->execute($data);
    if (isset($_GET['delete_roll'])) {
    	$sql = "DELETE FROM food WHERE roll=".$_GET['delete_roll'];
    	$conn->query($sql);
    	header('location:food_2nd.php');
    }
    if ($query->rowCount()!==0) {
    echo '
    		 <tr>
				<td>Roll</td>
				<td>Student Name</td>
				<td>Father Name</td>
				<td>Action</td>
			  </tr>
			</thead>
			<tbody>
			  <tr>
    	';
    while($row = $query->fetch()){
     $sname = $row['s_name'];
     $fname = $row['f_name'];
     $roll = $row['roll'];

echo '	
				<td>'.$roll.'</td>
				<td>'.$sname.'</td>
				<td>'.$fname.'</td>
				<td><a href="../student_info_update/food.php?roll='.$roll.'" ><img src="edit.png" width="45" height="20"></a>
				<a href="javascript:deleteStudent('.$roll.')"><img src="delete.png" width="45" height="20"></a></td>
			  </tr>
			'; 

}
}else{
	echo " <h1 class='not-found'> Not available students</h1>";
}
?>
	 
			</tbody>
		</table>

	
</div>
</div>


<script type="text/javascript">
	function deleteStudent(roll)
	{
		if(confirm("Sure you want to delete this Student?"))
		{
			window.location.href="food_2nd.php?delete_roll="+roll;
		}
	}
</script>