<?php require_once '../head.php';?>


        <div class="col-md-8">
            <div class="st-info-form">
            				<form action="" method="post">
                                <h3 class="form-title">Select Your Option</h3>
                    			<div class="form-group3">
                                     <label class="sub-name">Department:</label>
                                     <select name="dept">
                                        <option value="">Select One</option>
                                        <option value="computer">Computer Technology</option>
                                        <option value="aidt">Aidt Technology</option>
                                        <option value="food">Food Technology</option>
                                        <option value="rac">Rac Technology</option>
                                     </select>
                                </div>
                                <div class="form-group3">
                                     <label class="sub-name">Semester:</label>
                                     <select name="semester">
                                        <option value="">Select One</option>
                                        <option value="first">First Semester</option>
                                        <option value="second">Second Semester</option>
                                        <option value="third">Third Semester</option>
                                     </select>
                                </div>   
                                <div class="form-group3">
                                     <label class="sub-name">Shift:</label>
                                     <select name="shift">
                                        <option value="">Select One</option>
                                        <option value="first">First Shift</option>
                                        <option value="second">Second Shift</option>
                                     </select>
                                </div>
                                <div class="form-group23">
                                     <input required type="submit" value="Submit" name="submit">
                                 </div>
                             </form>          
                          
                            
            </div>
        </div>

<?php require_once '../../footer.php';?>

<?php
	if (isset($_POST['submit'])) {

		$dept = $_POST['dept'];
		$semester = $_POST['semester'];
		$shift = $_POST['shift'];

		// empty check............
		if ($dept =='' or $semester == '' or $shift == '') {
			echo "<script>alert('Combo Box Is Empty !!')</script>";
		}
		
		// computer 1st semester 1st shift
		elseif ($dept == 'computer' && $semester == 'first' && $shift == 'first') {
			header('location:com_1seme_1shift.php');
		}

		// computer 2nd semester 1st shift
		elseif ($dept == 'computer' && $semester == 'second' && $shift == 'first') {
			header('location:com_2seme_1shift.php');
		}

		// computer 3rd semester 1st shift
		elseif ($dept == 'computer' && $semester == 'third' && $shift == 'first') {
			header('location:com_3seme_1shift.php');
		}

		// computer 1st semester 2nd shift
		if ($dept == 'computer' && $semester == 'first' && $shift == 'second') {
			header('location:com_1seme_2shift.php');
		}

		// computer 2nd semester 2nd shift
		elseif ($dept == 'computer' && $semester == 'second' && $shift == 'second') {
			header('location:com_2seme_2shift.php');
		}

		// computer 3rd semester 2nd shift
		elseif ($dept == 'computer' && $semester == 'third' && $shift == 'second') {
			header('location:com_3seme_2shift.php');
		}

		// aidt 1st semester 1st shift
		if ($dept == 'aidt' && $semester == 'first' && $shift == 'first') {
			header('location:aidt_1seme_1shift.php');
		}

		// aidt 2nd semester 1st shift
		elseif ($dept == 'aidt' && $semester == 'second' && $shift == 'first') {
			header('location:aidt_2seme_1shift.php');
		}

		// aidt 3rd semester 1st shift
		elseif ($dept == 'aidt' && $semester == 'third' && $shift == 'first') {
			header('location:aidt_3seme_1shift.php');
		}

		// aidt 1st semester 2nd shift
		if ($dept == 'aidt' && $semester == 'first' && $shift == 'second') {
			header('location:aidt_1seme_2shift.php');
		}

		// aidt 2nd semester 2nd shift
		elseif ($dept == 'aidt' && $semester == 'second' && $shift == 'second') {
			header('location:aidt_2seme_2shift.php');
		}

		// aidt 3rd semester 2nd shift
		elseif ($dept == 'aidt' && $semester == 'third' && $shift == 'second') {
			header('location:aidt_3seme_2shift.php');
		}

		// food 1st semester 1st shift
		if ($dept == 'food' && $semester == 'first' && $shift == 'first') {
			header('location:food_1seme_1shift.php');
		}

		// food 2nd semester 1st shift
		elseif ($dept == 'food' && $semester == 'second' && $shift == 'first') {
			header('location:food_2seme_1shift.php');
		}

		// food 3rd semester 1st shift
		elseif ($dept == 'food' && $semester == 'third' && $shift == 'first') {
			header('location:food_3seme_1shift.php');
		}

		// food 1st semester 2nd shift
		if ($dept == 'food' && $semester == 'first' && $shift == 'second') {
			header('location:food_1seme_2shift.php');
		}

		// food 2nd semester 2nd shift
		elseif ($dept == 'food' && $semester == 'second' && $shift == 'second') {
			header('location:food_2seme_2shift.php');
		}

		// food 3rd semester 2nd shift
		elseif ($dept == 'food' && $semester == 'third' && $shift == 'second') {
			header('location:food_3seme_2shift.php');
		}

		// rac 1st semester 1st shift
		if ($dept == 'rac' && $semester == 'first' && $shift == 'first') {
			header('location:rac_1seme_1shift.php');
		}

		// rac 2nd semester 1st shift
		elseif ($dept == 'rac' && $semester == 'second' && $shift == 'first') {
			header('location:rac_2seme_1shift.php');
		}

		// rac 3rd semester 1st shift
		elseif ($dept == 'rac' && $semester == 'third' && $shift == 'first') {
			header('location:rac_3seme_1shift.php');
		}

		// rac 1st semester 2nd shift
		if ($dept == 'rac' && $semester == 'first' && $shift == 'second') {
			header('location:rac_1seme_2shift.php');
		}

		// rac 2nd semester 2nd shift
		elseif ($dept == 'rac' && $semester == 'second' && $shift == 'second') {
			header('location:rac_2seme_2shift.php');
		}

		// rac 3rd semester 2nd shift
		elseif ($dept == 'rac' && $semester == 'third' && $shift == 'second') {
			header('location:rac_3seme_2shift.php');
		}



	}
?>



