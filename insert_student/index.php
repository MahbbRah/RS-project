<?php
    
    require_once 'head.php';
    include 'insertfunction.php';
    $dbc = new db;
	if (isset($_POST['insert'])) {
	    $department=$_POST["department"];
		  if($department=="computer"){
			$roll = $_POST['roll'];
			$reg = $_POST['reg'];
			$s_name = $_POST['s_name'];
			$f_name = $_POST['f_name'];
			$m_name = $_POST['m_name'];
			$session = $_POST['session'];
			$shift = $_POST['shift'];
			$technology = $_POST['department'];		
			$dbc->insert_computer($roll,$reg,$s_name,$f_name,$m_name,$session,$shift,$technology);
		}
		//food department
		else if($department=="food"){
			$roll = $_POST['roll'];
			$reg = $_POST['reg'];
			$s_name = $_POST['s_name'];
			$f_name = $_POST['f_name'];
			$m_name = $_POST['m_name'];
			$session = $_POST['session'];
			$shift = $_POST['shift'];
			$technology = $_POST['department'];		
			$dbc->insert_food($roll,$reg,$s_name,$f_name,$m_name,$session,$shift,$technology);
		}
		//RAC departmnet
		else if($department=="rac"){
			$roll = $_POST['roll'];
			$reg = $_POST['reg'];
			$s_name = $_POST['s_name'];
			$f_name = $_POST['f_name'];
			$m_name = $_POST['m_name'];
			$session = $_POST['session'];
			$shift = $_POST['shift'];
			$technology = $_POST['department'];		
			$dbc->insert_rac($roll,$reg,$s_name,$f_name,$m_name,$session,$shift,$technology);
		}
		//AIDT department
		else if($department=="aidt"){
			$roll = $_POST['roll'];
			$reg = $_POST['reg'];
			$s_name = $_POST['s_name'];
			$f_name = $_POST['f_name'];
			$m_name = $_POST['m_name'];
			$session = $_POST['session'];
			$shift = $_POST['shift'];
			$technology = $_POST['department'];		
			$dbc->insert_aidt($roll,$reg,$s_name,$f_name,$m_name,$session,$shift,$technology);
		}
	}	
?>


                     <div class="col-md-8">
                         <div class="submit-info">
                         <h3 class="form-title">Insert Student Information</h3>
                              <form action="" method="post">
                                 <div class="form-group3">
                                     <label class="sub-name2">Roll No:</label>
                                     <input reinput required type="text" name="roll" placeholder="Roll No">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Reg No:</label>
                                     <input required type="text" name="reg" placeholder="Reg No">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Select department :</label>
                                     <select  name="department">
                                         <option value="0" selected="">Select One</option>
                                         <option value="computer">Computer</option>
                                         <option value="food">Food</option>
                                         <option value="rac">RAC</option>
                                         <option value="aidt">AIDT</option>
                                     </select>
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Student Name:</label>
                                     <input reinput required type="text" name="s_name" placeholder="Student Name">
                                 </div>
                                  <div class="form-group3">
                                     <label class="sub-name2">Father's Name:</label>
                                     <input reinput required type="text" name="f_name" placeholder="Father Name">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Mother's Name:</label>
                                     <input reinput required type="text" name="m_name" placeholder="Mother Name">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Session:</label>
                                     <select name="session">
                                     	<option value="">Select One</option>
                                     	<option value="2012-13">2012-13</option>
                                     	<option value="2013-14">2013-14</option>
                                     	<option value="2013-14">2014-15</option>
                                     	<option value="2015-16">2015-16</option>
                                     	<option value="2016-17">2016-17</option>
                                     	<option value="2017-18">2017-18</option>
                                     	<option value="2018-19">2018-19</option>
                                     	<option value="2019-20">2019-20</option>
                                     	<option value="2020-21">2020-21</option>
                                     	<option value="2021-22">2021-22</option>
                                     	<option value="2022-23">2022-23</option>
                                     	<option value="2023-24">2023-24</option>
                                     </select>
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Shift:</label>
                                     <select name="shift">
                                     	<option value="">Select One</option>
                                     	<option value="First">First Shift</option>
                                     	<option value="Second">Second Shift</option>
                                     </select>
                                 </div>
                               
                                 <div class="form-group23">
                                     <input type="submit" value="Submit" name="insert">
                                 </div>
                             </form>
                             </div>
                             </div>

    <?php require_once '../footer.php'; ?>