<?php require_once 'head.php';?>

<?php
if (isset($_GET['roll'])) {
    $roll = $_GET['roll'];
$query = $conn->prepare("SELECT * FROM computer WHERE roll = :roll");

    $data = array(':roll'=>$roll);

    /*** execute the prepared statement ***/
    $query->execute($data);
    while($row = $query->fetch()){
    $roll = $row['roll'];
    $sname = $row['s_name'];
    $fname = $row['f_name'];
    $mname = $row['m_name'];
    $session = $row['session'];
    $shift = $row['shift'];

?>
     
	     
		

					 
					  <div class="col-md-8"><br>
                        <div class="submit-form2">
                                 <h3 class="dept-title">COMPUTER TECHNOLOGY (66)</h3>
								 <form action="" method="post">
                                
                                 <div class="form-group3">
                                     <label class="sub-name">Roll : </label>
                                     <input disabled type="text" name="drawing" value="<?php echo $roll;?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name">Student Name : </label>
                                     <input required type="text" name="english" value="<?php echo $sname; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name">Father Name : </label>
                                     <input required type="text" name="math" value="<?php echo $fname; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name">Mather Name : </label>
                                     <input required type="text" name="chemistry" value="<?php echo $mname; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name">Session :</label>
                                     <input required type="text" name="fundamental" value="<?php echo $session; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name">Shift:</label>
                                     <input required type="text" name="electricity" value="<?php echo $shift; ?>">
                                 </div>
                                  
                                 <div class="form-group23">
                                     <input required type="submit" value="Submit" name="submit2">
                                 </div>
                                 </form>
                            </div>
                        </div>

<?php
}}
?>

<?php require_once '../footer.php';?>