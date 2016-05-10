<?php include 'mark_show_css.php';?> 
<?php 
 include '../db_configure.php';
 include '../class.php';
 $admin=new admin(); 
 ?>
<?php
$department=$semester='';
if($_SERVER["REQUEST_METHOD"]=="POST"){
$department=$_POST['department'];
$semester=$_POST['semester'];
    if($department=="computer"){
	    if($semester=="first_semester"){
			$roll=$_POST["roll"];
			$sql="SELECT * FROM `computer` WHERE roll='$roll'";
			$result=$admin->link->query($sql);
			if($data=$result->num_rows>0){
			while($data=$result->fetch_assoc()){
			   //examination year
			   $first_semester=$data['seme_1st'];
			   $examyear=$data['exam_year_1st'];
			   $held_in=$data['held_in_1st'];
			   $average_grade_point=$data['grade_average_1st_seme'];
			   //student data
			   $roll=$data['roll'];
			   $reg=$data['reg'];
			   $s_name=$data['s_name'];
			   $f_name=$data['f_name'];
			   $m_name=$data['m_name'];
			   $session=$data['session'];
			   $shift=$data['shift'];
			   //mark obtained
			   $eng_dra=$data['eng_drow_omark'];
			   $english_1=$data['eng_1_omark'];	 
			   $math_1=$data['math_1_omark'];
			   $chemistry_1=$data['chemistry_omark'];
			   $computer_funda=$data['com_fund_omark'];
			   $basicelectricity=$data['b_electricity_omark'];
			   $basicelectronics=$data['b_electronics_omark'];
			   //Mark Grade
			   $eng_dra_g=$data['eng_drow_grade'];
			   $english_1_g=$data['eng_1_grade'];
			   $math_1_g=$data['math_1_grade'];
			   $chemistry_1_g=$data['chemistry_grade'];
			   $computer_funda_g=$data['com_fund_grade'];
			   $basicelectricity_g=$data['b_electricity_grade'];
			   $basicelectronics_g=$data['b_electronics_grade'];
			   //Mark grade points
               $eng_dra_p=$data['eng_drow_point'];
			   $english_1_p=$data['eng_1_point'];
			   $math_1_p=$data['math_1_point'];
			   $chemistry_1_p=$data['chemistry_point'];
			   $computer_funda_p=$data['com_fund_point'];
			   $basicelectricity_p=$data['b_electricity_point'];
			   $basicelectronics_p=$data['b_electronics_point'];
 ?> 			
				 <div class="fix structure main_area">
				       <div class="fix area">
					       <div class="fix logo">
						        <img src="img/bteb.jpg" alt="">
								<h1 class="borad_name">BANGLADESH TECHNICAL EDUCATION BOARD</h1>
						   </div>
						   <div class="fix diploma_in_engineering">
						        <div class="fix examination_year">
								     <h1 class="diploma_engineering">DIPLOMA IN ENGINEERING</h1>
									 <p class="exam_year">Examination Year:<?php echo $examyear;?></p>
									 <p class="exam_year">( Held In <?php echo $held_in." "."$examyear";?> )</p>
									 <p class="serial">Serial No-624049</p> <p class="semester">first semester</p>
									 <p class="collge_name">Thakurgoan Polytechnic Institute</p>
									 <p class="technology"><b>Technology:Computer</b></p>
									 <p class="academic_tran"><u>ACADEMIC TRANSCRIPT</u></p>
								</div>
						        <div class="fix gread_system">
								     <table class="border" border="1px solid #000">
									       <tr>
										       <td colspan="3">Grading System</td>  
										   </tr>
									       <tr>
										       <td class="tr_border">Class Interval</td>
										       <td>LetterG rade</td>
										       <td>Grade Point</td>
										   </tr>
									       <tr>
										       <td>80-100</td>
										       <td>A+</td>
										       <td>4.00</td>
										   </tr>
									       <tr>
										       <td>75-79</td>
										       <td>A</td>
										       <td>3.75</td>
										   </tr> 
									       <tr>
										       <td>70-74</td>
										       <td>A-</td>
										       <td>3.50</td>
										   </tr>
									       <tr>
										       <td>65-69</td>
										       <td>B+</td>
										       <td>3.25</td>
										   </tr>
										   <tr>
										       <td>60-64</td>
										       <td>B</td>
										       <td>3.00</td>
										   </tr>
										   <tr>
										       <td>55-59</td>
										       <td>B-</td>
										       <td>2.75</td>
										   </tr>
										   <tr>
										       <td>50-54</td>
										       <td>C+</td>
										       <td>2.50</td>
										   </tr>
										   <tr>
										       <td>45-49</td>
										       <td>C</td>
										       <td>2.25</td>
										   </tr>
										   <tr>
										       <td>40-44</td>
										       <td>D</td>
										       <td>2.00</td>
										   </tr>
										   <tr>
										       <td>00-39</td>
										       <td>F</td>
										       <td>0.00</td>
										   </tr>
									 </table>
								</div>
						   </div>
						   
						    <div class="fix studentdata">
							     <span class="stu_data"><b>Student's Name :<?php echo $s_name; ?></b></span><br>
								 <span class="stu_data"><b>Father's Name  :<?php echo $f_name; ?></b></span><br>
								 <span class="stu_data"><b>Mother's Name  :<?php echo $m_name?></span></b><br>
								 <span class="mark_roll"><b class="mark_roll">Board Roll No: <?php echo $roll;?></b> <b class="mark_roll">Reg:No: <?php echo $reg ;?></b> <b class="mark_roll">Session:<?php echo $session;?> </b><b class="mark_roll" id="mark_roll"><p class="shift">Shift:<?php echo $shift; ?></p></b></span>
							</div>
							<!--main table marksheet starts here-->
							<div class="fix mark_table">
								  <table class="table table-bordered">
									<thead>
									  <tr>
										<th class="mark_tr">SL. NO</th>
										<th class="mark_tr">Subject Code</th>
										<th class="mark_tr sub_width">Name of Subject</th>
										<th class="mark_tr">Full Marks</th>
										<th class="mark_tr">Marks Obtained</th>
										<th class="mark_tr">Grade Letter</th>
										<th class="mark_tr">Grade Point(GP)</th>
										<th class="mark_tr">Grade Point Average(GP)</th>
									  </tr>
									</thead>
									<tbody>
									  <tr class="mark_tr">
										<td>1</td>
										<td>1011</td>
										<td class="sub_width">Engineering Drawing</td>
										<td>100</td>
										<td><?php echo $eng_dra?></td>
										<td><?php echo $eng_dra_g;?></td>
										<td><?php echo $eng_dra_p;?></td>
										<td rowspan="7"><p class="average_point"><?php echo $average_grade_point;?></p></td>
									  </tr>
									  <tr class="mark_tr">
										<td>2</td>
										<td>5712</td>
										<td class="sub_width">English-1</td>
										<td>100</td>
										<td><?php echo $english_1 ;?></td>
										<td><?php echo $english_1_g?></td>
										<td><?php echo $eng_dra_p ;?></td>
									  </tr>
									  <tr class="mark_tr">
										<td>3</td>
										<td>5911</td>
										<td class="sub_width">Mathmaticas-1</td>
										<td>200</td>
										<td><?php echo $math_1 ;?></td>
										<td><?php echo $math_1_g;?></td>
										<td><?php echo $math_1_p;?></td>
										 
									  </tr>
									   <tr class="mark_tr">
										<td>4</td>
										<td>5913</td>
										<td class="sub_width">Chmistry</td>
										<td>200</td>
										<td><?php echo $chemistry_1 ;?></td>
										<td><?php echo $chemistry_1_g; ?></td>
										<td><?php echo $chemistry_1_p;?></td>
										 
									  </tr>
									   <tr class="mark_tr">
										<td>5</td>
										<td>6611</td>
										<td class="sub_width">Computer Fundamental</td>
										<td>150</td>
										<td><?php echo $computer_funda ;?></td>
										<td><?php echo $computer_funda_g;?></td>
										<td><?php echo $computer_funda_p;?></td>
									   
									  </tr>
									   <tr class="mark_tr">
										<td>6</td>
										<td>6711</td>
										<td class="sub_width">Basic Electricity</td>
										<td>200</td>
										<td><?php echo $basicelectricity; ?></td>
										<td><?php echo $computer_funda_g;?></td>
										<td><?php echo $computer_funda_p;?></td>
										 
									  </tr>
									  <tr class="mark_tr">
										<td>7</td>
										<td>6811</td>
										<td class="sub_width">Basic Electronics</td>
										<td>150</td>
										<td><?php echo $basicelectronics;?></td>
										<td><?php echo $basicelectronics_g;?></td>
										<td><?php echo $basicelectronics_p;?></td>
										 
									  </tr>
									</tbody>
								  </table>
								</div>
	                           <!--Teacher Signature-->
							   <div class="fix teacher_signature">
							        <hr class="hrl"/><p class="signature floatleft">Prepared By</p><hr class="hrr"/><p class="signature floatright">Head of Department</p>
							        <hr class="hrl"/><p class="signature floatleft vice">Vice Principal By</p><hr class="hrr"/><p class="signature floatright principle">Principal<br>Thakurgaon Polytechnic</p>
							   </div>
					   </div>
				 </div>
				
			   <?php
			   }
			   
       }
     else{ echo "<h1 style='text-align:center'>Result Not Found</h1>";}	   
}
	   //computer second semester
            else if($semester=="second_semester"){
			$roll=$_POST['roll'];
			$sql="SELECT * FROM `computer` WHERE roll='$roll'";
			$result=$admin->link->query($sql);
			if($data=$result->num_rows>0){
			while($data=$result->fetch_assoc()){
			    //examination year
			   $second_semester=$data['seme_2nd'];
			   $examyear=$data['exam_year_2nd'];
			   $held_in=$data['held_in_2nd'];
			   $grade_average_2nd_seme=$data['grade_average_2nd_seme'];
			   //student data
			   $roll=$data['roll'];
			   $reg=$data['reg'];
			   $s_name=$data['s_name'];
			   $f_name=$data['f_name'];
			   $m_name=$data['m_name'];
			   $session=$data['session'];
			   $shift=$data['shift'];
			   //mark obtained
			   $eng_2_fmark=$data['eng_2_omark'];
			   $physical_edu_fmark=$data['physical_edu_omark'];	 
			   $physics_1_fmark=$data['physics_1_omark'];
			   $math_2_fmark=$data['math_2_omark'];
			   $com_application_1_fmark=$data['com_application_1_omark'];
			   $bangla_fmark=$data['bangla_omark'];
			   $ele_dev_cir_1_omark=$data['ele_dev_cir_1_omark'];
			   $b_workshop_omark=$data['b_workshop_omark'];
			   //Mark Grade
			   $eng_2_grade=$data['eng_2_grade'];
			   $physical_edu_grade=$data['physical_edu_grade'];
			   $physics_1_grade=$data['physics_1_grade'];
			   $math_2_grade=$data['math_2_grade'];
			   $com_application_1_grade=$data['com_application_1_grade'];
			   $bangla_grade=$data['bangla_grade'];
			   $ele_dev_cir_1_grade=$data['ele_dev_cir_1_grade'];
			   $b_workshop_grade=$data['b_workshop_grade'];
			   //Mark grade points
               $eng_2_point=$data['eng_2_point'];
			   $physical_edu_point=$data['physical_edu_point'];
			   $physics_1_point=$data['physics_1_point'];
			   $math_2_point=$data['math_2_point'];
			   $com_application_1_point=$data['com_application_1_point'];
			   $bangla_point=$data['bangla_point'];
			   $ele_dev_cir_1_point=$data['ele_dev_cir_1_point'];
			   $b_workshop_point=$data['b_workshop_point'];
?> 
			     <div class="fix structure main_area">
				       <div class="fix area">
					       <div class="fix logo">
						        <img src="img/bteb.jpg" alt="">
								<h1 class="borad_name">BANGLADESH TECHNICAL EDUCATION BOARD</h1>
						   </div>
						   <div class="fix diploma_in_engineering">
						        <div class="fix examination_year">
								     <h1 class="diploma_engineering">DIPLOMA IN ENGINEERING</h1>
									 <p class="exam_year">Examination Year:<?php echo $examyear;?></p>
									 <p class="exam_year">( Held In <?php echo $held_in." "."$examyear";?> )</p>
									 <p class="serial">Serial No-624049</p> <p class="semester">second semester</p>
									 <p class="collge_name">Thakurgoan Polytechnic Institute</p>
									 <p class="technology"><b>Technology:Computer</b></p>
									 <p class="academic_tran"><u>ACADEMIC TRANSCRIPT</u></p>
								</div>
						        <div class="fix gread_system">
								     <table class="border" border="1px solid #000">
									       <tr>
										       <td colspan="3">Grading System</td>  
										   </tr>
									       <tr>
										       <td class="tr_border">Class Interval</td>
										       <td>LetterG rade</td>
										       <td>Grade Point</td>
										   </tr>
									       <tr>
										       <td>80-100</td>
										       <td>A+</td>
										       <td>4.00</td>
										   </tr>
									       <tr>
										       <td>75-79</td>
										       <td>A</td>
										       <td>3.75</td>
										   </tr> 
									       <tr>
										       <td>70-74</td>
										       <td>A-</td>
										       <td>3.50</td>
										   </tr>
									       <tr>
										       <td>65-69</td>
										       <td>B+</td>
										       <td>3.25</td>
										   </tr>
										   <tr>
										       <td>60-64</td>
										       <td>B</td>
										       <td>3.00</td>
										   </tr>
										   <tr>
										       <td>55-59</td>
										       <td>B-</td>
										       <td>2.75</td>
										   </tr>
										   <tr>
										       <td>50-54</td>
										       <td>C+</td>
										       <td>2.50</td>
										   </tr>
										   <tr>
										       <td>45-49</td>
										       <td>C</td>
										       <td>2.25</td>
										   </tr>
										   <tr>
										       <td>40-44</td>
										       <td>D</td>
										       <td>2.00</td>
										   </tr>
										   <tr>
										       <td>00-39</td>
										       <td>F</td>
										       <td>0.00</td>
										   </tr>
									 </table>
								</div>
						   </div>
						   
						    <div class="fix studentdata">
							     <span class="stu_data"><b>Student's Name :<?php echo $s_name; ?></b></span><br>
								 <span class="stu_data"><b>Father's Name  :<?php echo $f_name; ?></b></span><br>
								 <span class="stu_data"><b>Mother's Name  :<?php echo $m_name?></span></b><br>
								 <span class="mark_roll"><b class="mark_roll">Board Roll No: <?php echo $roll;?></b> <b class="mark_roll">Reg:No: <?php echo $reg ;?></b> <b class="mark_roll">Session:<?php echo $session;?> </b><b class="mark_roll" id="mark_roll"><p class="shift">Shift:<?php echo $shift; ?></p></b></span>
							</div>
							<!--main table marksheet starts here-->
							<div class="fix mark_table">
								  <table class="table table-bordered">
									<thead>
									  <tr>
										<th class="mark_tr">SL. NO</th>
										<th class="mark_tr">Subject Code</th>
										<th class="mark_tr sub_width">Name of Subject</th>
										<th class="mark_tr">Full Marks</th>
										<th class="mark_tr">Marks Obtained</th>
										<th class="mark_tr">Grade Letter</th>
										<th class="mark_tr">Grade Point(GP)</th>
										<th class="mark_tr">Grade Point Average(GP)</th>
									  </tr>
									</thead>
									<tbody>
									  <tr class="mark_tr">
										<td>1</td>
										<td>5722</td>
										<td class="sub_width">english2 - 2</td>
										<td>150</td>
										<td><?php echo $eng_2_fmark?></td>
										<td><?php echo $eng_2_grade;?></td>
										<td><?php echo $eng_2_point;?></td>
										<td rowspan="8"><p class="average_point"><?php echo $grade_average_2nd_seme;?></p></td>
									  </tr>
									  <tr class="mark_tr">
										<td>2</td>
										<td>5812</td>
										<td class="sub_width">Physical Education</td>
										<td>50</td>
										<td><?php echo $physical_edu_fmark ;?></td>
										<td><?php echo $physical_edu_grade?></td>
										<td><?php echo $physical_edu_point ;?></td>
									  </tr>
									  <tr class="mark_tr">
										<td>3</td>
										<td>5912</td>
										<td class="sub_width">Physics - 1</td>
										<td>200</td>
										<td><?php echo $physics_1_fmark ;?></td>
										<td><?php echo $physics_1_grade;?></td>
										<td><?php echo $physics_1_point;?></td>
										 
									  </tr>
									   <tr class="mark_tr">
										<td>4</td>
										<td>5921</td>
										<td class="sub_width">Mathematics - 2</td>
										<td>200</td>
										<td><?php echo $math_2_fmark ;?></td>
										<td><?php echo $math_2_grade; ?></td>
										<td><?php echo $math_2_point;?></td> 
									  </tr>
									   <tr class="mark_tr">
										<td>5</td>
										<td>6621</td>
										<td class="sub_width">Computer Application - 1</td>
										<td>100</td>
										<td><?php echo $com_application_1_fmark ;?></td>
										<td><?php echo $com_application_1_grade;?></td>
										<td><?php echo $com_application_1_point;?></td>
									   
									  </tr>
									   <tr class="mark_tr">
										<td>6</td>
										<td>5711</td>
										<td class="sub_width">Bangla</td>
										<td>150</td>
										<td><?php echo $bangla_fmark; ?></td>
										<td><?php echo $bangla_grade;?></td>
										<td><?php echo $bangla_point;?></td>
										 
									  </tr>
									  <tr class="mark_tr">
										<td>7</td>
										<td>6821</td>
										<td class="sub_width">Electronic Device & Circ. - 1</td>
										<td>200</td>
										<td><?php echo $ele_dev_cir_1_omark;?></td>
										<td><?php echo $ele_dev_cir_1_grade;?></td>
										<td><?php echo $ele_dev_cir_1_point;?></td>
										 
									  </tr>
									  <tr class="mark_tr">
										<td>7</td>
										<td>7011</td>
										<td class="sub_width">Basic Workshop Practice</td>
										<td>100</td>
										<td><?php echo $b_workshop_omark;?></td>
										<td><?php echo $b_workshop_grade;?></td>
										<td><?php echo $b_workshop_point;?></td>
										 
									  </tr>
									</tbody>
								  </table>
								</div>
	                           <!--Teacher Signature-->
							   <div class="fix teacher_signature">
							        <hr class="hrl"/><p class="signature floatleft">Prepared By</p><hr class="hrr"/><p class="signature floatright">Head of Department</p>
							        <hr class="hrl"/><p class="signature floatleft">Vice Principal By</p><hr class="hrr"/><p class="signature floatright">Principal<br>Thakurgaon Polytechnic</p>
							   </div>
					   </div>
				 </div>
				
			   <?php
			   }
			 }
			 else{ echo "<h1 style='text-align:center'>Result Not Found";}
       }
	   //computer third semester marksheet
	    else if($semester=="third_semester"){
			$roll=$_POST['roll'];
			$sql="SELECT * FROM `computer` WHERE roll='$roll'";
			$result=$admin->link->query($sql);
			if($data=$result->num_rows>0){
			while($data=$result->fetch_assoc()){
			    //examination year
			   $third_semester=$data['seme_3rd'];
			   $examyear=$data['exam_year_2nd'];
			   $held_in=$data['held_in_2nd'];
			   $grade_average_2nd_seme=$data['grade_average_2nd_seme'];
			   //student data
			   $roll=$data['roll'];
			   $reg=$data['reg'];
			   $s_name=$data['s_name'];
			   $f_name=$data['f_name'];
			   $m_name=$data['m_name'];
			   $session=$data['session'];
			   $shift=$data['shift'];
			   //mark obtained
			   $eng_2_fmark=$data['eng_2_omark'];
			   $physical_edu_fmark=$data['physical_edu_omark'];	 
			   $physics_1_fmark=$data['physics_1_omark'];
			   $math_2_fmark=$data['math_2_omark'];
			   $com_application_1_fmark=$data['com_application_1_omark'];
			   $bangla_fmark=$data['bangla_omark'];
			   $ele_dev_cir_1_fmark=$data['ele_dev_cir_1_omark'];
			   $b_workshop_fmark=$data['b_workshop_omark'];
			   //Mark Grade
			   $eng_2_grade=$data['eng_2_grade'];
			   $physical_edu_grade=$data['physical_edu_grade'];
			   $physics_1_grade=$data['physics_1_grade'];
			   $math_2_grade=$data['math_2_grade'];
			   $com_application_1_grade=$data['com_application_1_grade'];
			   $bangla_grade=$data['bangla_grade'];
			   $ele_dev_cir_1_grade=$data['ele_dev_cir_1_grade'];
			   $b_workshop_grade=$data['b_workshop_grade'];
			   //Mark grade points
               $eng_2_point=$data['eng_2_point'];
			   $physical_edu_point=$data['physical_edu_point'];
			   $physics_1_point=$data['physics_1_point'];
			   $math_2_point=$data['math_2_point'];
			   $com_application_1_point=$data['com_application_1_point'];
			   $bangla_point=$data['bangla_point'];
			   $ele_dev_cir_1_point=$data['ele_dev_cir_1_point'];
			   $b_workshop_point=$data['b_workshop_point'];
?> 
			     <div class="fix structure main_area">
				       <div class="fix area">
					       <div class="fix logo">
						        <img src="img/bteb.jpg" alt="">
								<h1 class="borad_name">BANGLADESH TECHNICAL EDUCATION BOARD</h1>
						   </div>
						   <div class="fix diploma_in_engineering">
						        <div class="fix examination_year">
								     <h1 class="diploma_engineering">DIPLOMA IN ENGINEERING</h1>
									 <p class="exam_year">Examination Year:<?php echo $examyear;?></p>
									 <p class="exam_year">( Held In <?php echo $held_in." "."$examyear";?> )</p>
									 <p class="serial">Serial No-624049</p> <p class="semester">third semester</p>
									 <p class="collge_name">Thakurgoan Polytechnic Institute</p>
									 <p class="technology"><b>Technology:Computer</b></p>
									 <p class="academic_tran"><u>ACADEMIC TRANSCRIPT</u></p>
								</div>
						        <div class="fix gread_system">
								     <table class="border" border="1px solid #000">
									       <tr>
										       <td colspan="3">Grading System</td>  
										   </tr>
									       <tr>
										       <td class="tr_border">Class Interval</td>
										       <td>LetterG rade</td>
										       <td>Grade Point</td>
										   </tr>
									       <tr>
										       <td>80-100</td>
										       <td>A+</td>
										       <td>4.00</td>
										   </tr>
									       <tr>
										       <td>75-79</td>
										       <td>A</td>
										       <td>3.75</td>
										   </tr> 
									       <tr>
										       <td>70-74</td>
										       <td>A-</td>
										       <td>3.50</td>
										   </tr>
									       <tr>
										       <td>65-69</td>
										       <td>B+</td>
										       <td>3.25</td>
										   </tr>
										   <tr>
										       <td>60-64</td>
										       <td>B</td>
										       <td>3.00</td>
										   </tr>
										   <tr>
										       <td>55-59</td>
										       <td>B-</td>
										       <td>2.75</td>
										   </tr>
										   <tr>
										       <td>50-54</td>
										       <td>C+</td>
										       <td>2.50</td>
										   </tr>
										   <tr>
										       <td>45-49</td>
										       <td>C</td>
										       <td>2.25</td>
										   </tr>
										   <tr>
										       <td>40-44</td>
										       <td>D</td>
										       <td>2.00</td>
										   </tr>
										   <tr>
										       <td>00-39</td>
										       <td>F</td>
										       <td>0.00</td>
										   </tr>
									 </table>
								</div>
						   </div>
						   
						    <div class="fix studentdata">
							     <span class="stu_data"><b>Student's Name :<?php echo $s_name; ?></b></span><br>
								 <span class="stu_data"><b>Father's Name  :<?php echo $f_name; ?></b></span><br>
								 <span class="stu_data"><b>Mother's Name  :<?php echo $m_name?></span></b><br>
								 <span class="mark_roll"><b class="mark_roll">Board Roll No: <?php echo $roll;?></b> <b class="mark_roll">Reg:No: <?php echo $reg ;?></b> <b class="mark_roll">Session:<?php echo $session;?> </b><b class="mark_roll" id="mark_roll"><p class="shift">Shift:<?php echo $shift; ?></p></b></span>
							</div>
							<!--main table marksheet starts here-->
							<div class="fix mark_table">
								  <table class="table table-bordered">
									<thead>
									  <tr>
										<th class="mark_tr">SL. NO</th>
										<th class="mark_tr">Subject Code</th>
										<th class="mark_tr sub_width">Name of Subject</th>
										<th class="mark_tr">Full Marks</th>
										<th class="mark_tr">Marks Obtained</th>
										<th class="mark_tr">Grade Letter</th>
										<th class="mark_tr">Grade Point(GP)</th>
										<th class="mark_tr">Grade Point Average(GP)</th>
									  </tr>
									</thead>
									<tbody>
									  <tr class="mark_tr">
										<td>1</td>
										<td>6622</td>
										<td class="sub_width">english2 - 2</td>
										<td>150</td>
										<td><?php echo $eng_2_fmark?></td>
										<td><?php echo $eng_2_grade;?></td>
										<td><?php echo $eng_2_point;?></td>
										<td rowspan="8"><p class="average_point"><?php echo $grade_average_2nd_seme;?></p></td>
									  </tr>
									  <tr class="mark_tr">
										<td>2</td>
										<td>6632</td>
										<td class="sub_width">Physical Education</td>
										<td>100</td>
										<td><?php echo $physical_edu_fmark ;?></td>
										<td><?php echo $physical_edu_grade?></td>
										<td><?php echo $physical_edu_point ;?></td>
									  </tr>
									  <tr class="mark_tr">
										<td>3</td>
										<td>6841</td>
										<td class="sub_width">Physics - 1</td>
										<td>200</td>
										<td><?php echo $physics_1_fmark ;?></td>
										<td><?php echo $physics_1_grade;?></td>
										<td><?php echo $physics_1_point;?></td>
										 
									  </tr>
									   <tr class="mark_tr">
										<td>4</td>
										<td>6832</td>
										<td class="sub_width">Mathematics - 2</td>
										<td>150</td>
										<td><?php echo $math_2_fmark ;?></td>
										<td><?php echo $math_2_grade; ?></td>
										<td><?php echo $math_2_point;?></td> 
									  </tr>
									   <tr class="mark_tr">
										<td>5</td>
										<td>5931</td>
										<td class="sub_width">Computer Application - 1</td>
										<td>200</td>
										<td><?php echo $com_application_1_fmark ;?></td>
										<td><?php echo $com_application_1_grade;?></td>
										<td><?php echo $com_application_1_point;?></td>
									   
									  </tr>
									   <tr class="mark_tr">
										<td>6</td>
										<td>5922</td>
										<td class="sub_width">Bangla</td>
										<td>200</td>
										<td><?php echo $bangla_fmark; ?></td>
										<td><?php echo $bangla_grade;?></td>
										<td><?php echo $bangla_point;?></td>
										 
									  </tr>
									  <tr class="mark_tr">
										<td>7</td>
										<td>5811</td>
										<td class="sub_width">bangla D & Circ. - 1</td>
										<td>100</td>
										<td><?php echo $b_workshop_fmark;?></td>
										<td><?php echo $b_workshop_grade;?></td>
										<td><?php echo $b_workshop_point;?></td>
										 
									  </tr>
									  <tr class="mark_tr">
										<td>7</td>
										<td>6811</td>
										<td class="sub_width">Basic Workshop Practice</td>
										<td>150</td>
										<td><?php echo $b_workshop_fmark;?></td>
										<td><?php echo $b_workshop_grade;?></td>
										<td><?php echo $b_workshop_point;?></td>
										 
									  </tr>
									</tbody>
								  </table>
								</div>
	                           <!--Teacher Signature-->
							    <div class="fix teacher_signature">
							        <hr class="hrl"/><p class="signature floatleft">Prepared By</p><hr class="hrr"/><p class="signature floatright">Head of Department</p>
							        <hr class="hrl"/><p class="signature floatleft vice">Vice Principal By</p><hr class="hrr"/><p class="signature floatright principle">Principal<br>Thakurgaon Polytechnic</p>
							   </div>
					   </div>
				 </div>
				
			   <?php
			   }
		   }
		   else{ echo "<h1 style='text-align:center'>Result Not Found</h1>";}
       } 
   }
 
   //Fodd Department marksheet
	else if($department=="food") {
		if($semester=="first_semester"){
			$roll=$_POST['roll'];
			$sql="SELECT * FROM `food` WHERE roll='$roll'";
			$result=$admin->link->query($sql);
			if($data=$result->num_rows>0){
			while($data=$result->fetch_assoc()){
			    //examination year
			   $first_semester=$data['seme_1st'];
			   $examyear=$data['exam_year_1st'];
			   $held_in=$data['held_in_1st'];
			   $grade_average_1st_seme=$data['grade_average_1st_seme'];
			   //student data
			   $roll=$data['roll'];
			   $reg=$data['reg'];
			   $s_name=$data['s_name'];
			   $f_name=$data['f_name'];
			   $m_name=$data['m_name'];
			   $session=$data['session'];
			   $shift=$data['shift'];
			   //mark obtained
			   $eng_drow_omark=$data['eng_drow_omark'];
			   $eng_1_omark=$data['eng_1_omark'];	 
			   $physical_edu_omark=$data['physical_edu_omark'];
			   $math_1_omark=$data['math_1_omark'];
			   $chemistry_omark=$data['chemistry_omark'];
			   $food_fund_omark=$data['food_fund_omark'];
			   $b_workshop_omark=$data['b_workshop_omark'];
			   //Mark Grade
			   $eng_drow_grade=$data['eng_drow_grade'];
			   $eng_1_grade=$data['eng_1_grade'];
			   $physical_edu_grade=$data['physical_edu_grade'];
			   $math_1_grade=$data['math_1_grade'];
			   $chemistry_grade=$data['chemistry_grade'];
			   $food_fund_grade=$data['food_fund_grade'];
			   $b_workshop_grade=$data['b_workshop_grade'];
			   //Mark grade points
               $eng_drow_point=$data['eng_drow_point'];
			   $eng_1_point=$data['eng_1_point'];
			   $physical_edu_point=$data['physical_edu_point'];
			   $math_1_point=$data['math_1_point'];
			   $chemistry_point=$data['chemistry_point'];
			   $food_fund_point=$data['food_fund_point'];
			   $b_workshop_point=$data['b_workshop_point'];
?> 
			     <div class="fix structure main_area">
				       <div class="fix area">
					       <div class="fix logo">
						        <img src="img/bteb.jpg" alt="">
								<h1 class="borad_name">BANGLADESH TECHNICAL EDUCATION BOARD</h1>
						   </div>
						   <div class="fix diploma_in_engineering">
						        <div class="fix examination_year">
								     <h1 class="diploma_engineering">DIPLOMA IN ENGINEERING</h1>
									 <p class="exam_year">Examination Year:<?php echo $examyear;?></p>
									 <p class="exam_year">( Held In <?php echo $held_in." "."$examyear";?> )</p>
									 <p class="serial">Serial No-624049</p> <p class="semester">first semester</p>
									 <p class="collge_name">Thakurgoan Polytechnic Institute</p>
									 <p class="technology"><b>Technology:Food</b></p>
									 <p class="academic_tran"><u>ACADEMIC TRANSCRIPT</u></p>
								</div>
						        <div class="fix gread_system">
								     <table class="border" border="1px solid #000">
									       <tr>
										       <td colspan="3">Grading System</td>  
										   </tr>
									       <tr>
										       <td class="tr_border">Class Interval</td>
										       <td>LetterG rade</td>
										       <td>Grade Point</td>
										   </tr>
									       <tr>
										       <td>80-100</td>
										       <td>A+</td>
										       <td>4.00</td>
										   </tr>
									       <tr>
										       <td>75-79</td>
										       <td>A</td>
										       <td>3.75</td>
										   </tr> 
									       <tr>
										       <td>70-74</td>
										       <td>A-</td>
										       <td>3.50</td>
										   </tr>
									       <tr>
										       <td>65-69</td>
										       <td>B+</td>
										       <td>3.25</td>
										   </tr>
										   <tr>
										       <td>60-64</td>
										       <td>B</td>
										       <td>3.00</td>
										   </tr>
										   <tr>
										       <td>55-59</td>
										       <td>B-</td>
										       <td>2.75</td>
										   </tr>
										   <tr>
										       <td>50-54</td>
										       <td>C+</td>
										       <td>2.50</td>
										   </tr>
										   <tr>
										       <td>45-49</td>
										       <td>C</td>
										       <td>2.25</td>
										   </tr>
										   <tr>
										       <td>40-44</td>
										       <td>D</td>
										       <td>2.00</td>
										   </tr>
										   <tr>
										       <td>00-39</td>
										       <td>F</td>
										       <td>0.00</td>
										   </tr>
									 </table>
								</div>
						   </div>
						   
						    <div class="fix studentdata">
							     <span class="stu_data"><b>Student's Name :<?php echo $s_name; ?></b></span><br>
								 <span class="stu_data"><b>Father's Name  :<?php echo $f_name; ?></b></span><br>
								 <span class="stu_data"><b>Mother's Name  :<?php echo $m_name?></span></b><br>
								 <span class="mark_roll"><b class="mark_roll">Board Roll No: <?php echo $roll;?></b> <b class="mark_roll">Reg:No: <?php echo $reg ;?></b> <b class="mark_roll">Session:<?php echo $session;?> </b><b class="mark_roll" id="mark_roll"><p class="shift">Shift:<?php echo $shift; ?></p></b></span>
							</div>
							<!--main table marksheet starts here-->
							<div class="fix mark_table">
								  <table class="table table-bordered">
									<thead>
									  <tr>
										<th class="mark_tr">SL. NO</th>
										<th class="mark_tr">Subject Code</th>
										<th class="mark_tr sub_width">Name of Subject</th>
										<th class="mark_tr">Full Marks</th>
										<th class="mark_tr">Marks Obtained</th>
										<th class="mark_tr">Grade Letter</th>
										<th class="mark_tr">Grade Point(GP)</th>
										<th class="mark_tr">Grade Point Average(GP)</th>
									  </tr>
									</thead>
									<tbody>
									  <tr class="mark_tr">
										<td>1</td>
										<td>1011</td>
										<td class="sub_width">Engineering Drawing</td>
										<td>100</td>
										<td><?php echo $eng_drow_omark?></td>
										<td><?php echo $eng_drow_grade;?></td>
										<td><?php echo $eng_drow_point;?></td>
										<td rowspan="7"><p class="average_point"><?php echo $grade_average_1st_seme;?></p></td>
									  </tr>
									  <tr class="mark_tr">
										<td>2</td>
										<td>5712</td>
										<td class="sub_width">English-1</td>
										<td>100</td>
										<td><?php echo $eng_1_omark ;?></td>
										<td><?php echo $eng_1_grade ;?></td>
										<td><?php echo $eng_1_point ;?></td>
									  </tr>
									  <tr class="mark_tr">
										<td>3</td>
										<td>5812</td>
										<td class="sub_width">Plysical Education</td>
										<td>50</td>
										<td><?php echo $physical_edu_omark ;?></td>
										<td><?php echo $physical_edu_grade;?></td>
										<td><?php echo $physical_edu_point;?></td>
										 
									  </tr>
									   <tr class="mark_tr">
										<td>4</td>
										<td>5911</td>
										<td class="sub_width">Mathmatic-1</td>
										<td>200</td>
										<td><?php echo $math_1_omark ;?></td>
										<td><?php echo $math_1_grade; ?></td>
										<td><?php echo $math_1_point;?></td>
										 
									  </tr>
									   <tr class="mark_tr">
										<td>5</td>
										<td>6613</td>
										<td class="sub_width">Chemistry-1</td>
										<td>200</td>
										<td><?php echo $chemistry_omark ;?></td>
										<td><?php echo $chemistry_grade;?></td>
										<td><?php echo $chemistry_point;?></td>
									   
									  </tr>
									   <tr class="mark_tr">
										<td>6</td>
										<td>6311</td>
										<td class="sub_width">Food Fundamental</td>
										<td>150</td>
										<td><?php echo $food_fund_omark; ?></td>
										<td><?php echo $food_fund_grade;?></td>
										<td><?php echo $food_fund_point;?></td>
										 
									  </tr>
									  <tr class="mark_tr">
										<td>7</td>
										<td>7011</td>
										<td class="sub_width">Basic Workshop</td>
										<td>100</td>
										<td><?php echo $b_workshop_omark;?></td>
										<td><?php echo $b_workshop_grade;?></td>
										<td><?php echo $b_workshop_point;?></td>
										 
									  </tr>
									</tbody>
								  </table>
								</div>
	                           <!--Teacher Signature-->
							   <div class="fix teacher_signature">
							        <hr class="hrl"/><p class="signature floatleft">Prepared By</p><hr class="hrr"/><p class="signature floatright">Head of Department</p>
							        <hr class="hrl"/><p class="signature floatleft vice">Vice Principal By</p><hr class="hrr"/><p class="signature floatright principle">Principal<br>Thakurgaon Polytechnic</p>
							   </div>
					   </div>
				 </div>
				
			   <?php
			   }
			}
		  else{ echo "<h1 style='text-align:center'>Result Not Found";}
       }
	   //FOOD SECOND SEMESTER MARKSHEET
			else if($semester=="second_semester"){
			$roll=$_POST['roll'];
			$sql="SELECT * FROM `food` WHERE roll='$roll'";
			$result=$admin->link->query($sql);
			if($data=$result->num_rows>0){
			while($data=$result->fetch_assoc()){
			    //examination year
			   $second_semester=$data['seme_2nd'];
			   $exam_year_2nd=$data['exam_year_2nd'];
			   $held_in=$data['held_in_2nd'];
			   $grade_average_2nd_seme=$data['grade_average_2nd_seme'];
			   //student data
			   $roll=$data['roll'];
			   $reg=$data['reg'];
			   $s_name=$data['s_name'];
			   $f_name=$data['f_name'];
			   $m_name=$data['m_name'];
			   $session=$data['session'];
			   $shift=$data['shift'];
			   //mark obtained
			   $bangla_omark=$data['bangla_omark'];
			   $eng_2_omark=$data['eng_2_omark'];	 
			   $physics_1_omark=$data['physics_1_omark'];
			   $math_2_omark=$data['math_2_omark'];
			   $b_stoichiometry_omark=$data['b_stoichiometry_omark'];
			   $com_application_1_omark=$data['com_application_1_omark'];
			   $b_electricity_omark=$data['b_electricity_omark'];
			   //Mark Grade
			   $bangla_grade=$data['bangla_grade'];
			   $eng_2_grade=$data['eng_2_grade'];
			   $physics_1_grade=$data['physics_1_grade'];
			   $math_2_grade=$data['math_2_grade'];
			   $b_stoichiometry_grade=$data['b_stoichiometry_grade'];
			   $com_application_1_grade=$data['com_application_1_grade'];
			   $b_electricity_grade=$data['b_electricity_grade'];
			   //Mark grade points
               $bangla_point=$data['bangla_point'];
			   $eng_2_point=$data['eng_2_point'];
			   $physics_1_point=$data['physics_1_point'];
			   $math_2_point=$data['math_2_point'];
			   $b_stoichiometry_point=$data['b_stoichiometry_point'];
			   $com_application_1_point=$data['com_application_1_point'];
			   $b_electricity_point=$data['b_electricity_point'];
?> 
			     <div class="fix structure main_area">
				       <div class="fix area">
					       <div class="fix logo">
						        <img src="img/bteb.jpg" alt="">
								<h1 class="borad_name">BANGLADESH TECHNICAL EDUCATION BOARD</h1>
						   </div>
						   <div class="fix diploma_in_engineering">
						        <div class="fix examination_year">
								     <h1 class="diploma_engineering">DIPLOMA IN ENGINEERING</h1>
									 <p class="exam_year">Examination Year:<?php echo $examyear;?></p>
									 <p class="exam_year">( Held In <?php echo $held_in." "."$examyear";?> )</p>
									 <p class="serial">Serial No-624049</p> <p class="semester">second semester</p>
									 <p class="collge_name">Thakurgoan Polytechnic Institute</p>
									 <p class="technology"><b>Technology:Food</b></p>
									 <p class="academic_tran"><u>ACADEMIC TRANSCRIPT</u></p>
								</div>
						        <div class="fix gread_system">
								     <table class="border" border="1px solid #000">
									       <tr>
										       <td colspan="3">Grading System</td>  
										   </tr>
									       <tr>
										       <td class="tr_border">Class Interval</td>
										       <td>LetterG rade</td>
										       <td>Grade Point</td>
										   </tr>
									       <tr>
										       <td>80-100</td>
										       <td>A+</td>
										       <td>4.00</td>
										   </tr>
									       <tr>
										       <td>75-79</td>
										       <td>A</td>
										       <td>3.75</td>
										   </tr> 
									       <tr>
										       <td>70-74</td>
										       <td>A-</td>
										       <td>3.50</td>
										   </tr>
									       <tr>
										       <td>65-69</td>
										       <td>B+</td>
										       <td>3.25</td>
										   </tr>
										   <tr>
										       <td>60-64</td>
										       <td>B</td>
										       <td>3.00</td>
										   </tr>
										   <tr>
										       <td>55-59</td>
										       <td>B-</td>
										       <td>2.75</td>
										   </tr>
										   <tr>
										       <td>50-54</td>
										       <td>C+</td>
										       <td>2.50</td>
										   </tr>
										   <tr>
										       <td>45-49</td>
										       <td>C</td>
										       <td>2.25</td>
										   </tr>
										   <tr>
										       <td>40-44</td>
										       <td>D</td>
										       <td>2.00</td>
										   </tr>
										   <tr>
										       <td>00-39</td>
										       <td>F</td>
										       <td>0.00</td>
										   </tr>
									 </table>
								</div>
						   </div>
						   
						    <div class="fix studentdata">
							     <span class="stu_data"><b>Student's Name :<?php echo $s_name; ?></b></span><br>
								 <span class="stu_data"><b>Father's Name  :<?php echo $f_name; ?></b></span><br>
								 <span class="stu_data"><b>Mother's Name  :<?php echo $m_name?></span></b><br>
								 <span class="mark_roll"><b class="mark_roll">Board Roll No: <?php echo $roll;?></b> <b class="mark_roll">Reg:No: <?php echo $reg ;?></b> <b class="mark_roll">Session:<?php echo $session;?> </b><b class="mark_roll" id="mark_roll"><p class="shift">Shift:<?php echo $shift; ?></p></b></span>
							</div>
							<!--main table marksheet starts here-->
							<div class="fix mark_table">
								  <table class="table table-bordered">
									<thead>
									  <tr>
										<th class="mark_tr">SL. NO</th>
										<th class="mark_tr">Subject Code</th>
										<th class="mark_tr sub_width">Name of Subject</th>
										<th class="mark_tr">Full Marks</th>
										<th class="mark_tr">Marks Obtained</th>
										<th class="mark_tr">Grade Letter</th>
										<th class="mark_tr">Grade Point(GP)</th>
										<th class="mark_tr">Grade Point Average(GP)</th>
									  </tr>
									</thead>
									<tbody>
									  <tr class="mark_tr">
										<td>1</td>
										<td>5711</td>
										<td class="sub_width">Bangla</td>
										<td>150</td>
										<td><?php echo $bangla_omark;?></td>
										<td><?php echo $bangla_grade;?></td>
										<td><?php echo $bangla_point;?></td>
										<td rowspan="7"><p class="average_point"><?php echo $grade_average_2nd_seme;?></p></td>
									  </tr>
									  <tr class="mark_tr">
										<td>2</td>
										<td>5722</td>
										<td class="sub_width">English-2</td>
										<td>150</td>
										<td><?php echo $eng_2_omark ;?></td>
										<td><?php echo $eng_2_grade ;?></td>
										<td><?php echo $eng_2_point ;?></td>
									  </tr>
									  <tr class="mark_tr">
										<td>3</td>
										<td>5912</td>
										<td class="sub_width">Physics-1</td>
										<td>200</td>
										<td><?php echo $physics_1_omark ;?></td>
										<td><?php echo $physics_1_grade;?></td>
										<td><?php echo $physics_1_point;?></td>
										 
									  </tr>
									   <tr class="mark_tr">
										<td>4</td>
										<td>5921</td>
										<td class="sub_width">Mathmatic-2</td>
										<td>200</td>
										<td><?php echo $math_2_omark ;?></td>
										<td><?php echo $math_2_grade; ?></td>
										<td><?php echo $math_2_point;?></td>
										 
									  </tr>
									   <tr class="mark_tr">
										<td>5</td>
										<td>6321</td>
										<td class="sub_width">Basic Stoichiometry</td>
										<td>150</td>
										<td><?php echo $b_stoichiometry_omark ;?></td>
										<td><?php echo $b_stoichiometry_grade;?></td>
										<td><?php echo $b_stoichiometry_point;?></td>
									   
									  </tr>
									   <tr class="mark_tr">
										<td>6</td>
										<td>6621</td>
										<td class="sub_width">Computer Application-1</td>
										<td>100</td>
										<td><?php echo $com_application_1_omark; ?></td>
										<td><?php echo $com_application_1_grade;?></td>
										<td><?php echo $com_application_1_point;?></td>
										 
									  </tr>
									  <tr class="mark_tr">
										<td>7</td>
										<td>6711</td>
										<td class="sub_width">Basic Electricity</td>
										<td>200</td>
										<td><?php echo $b_electricity_omark;?></td>
										<td><?php echo $b_electricity_grade;?></td>
										<td><?php echo $b_electricity_point;?></td>
										 
									  </tr>
									</tbody>
								  </table>
								</div>
	                           <!--Teacher Signature-->
							    <div class="fix teacher_signature">
							        <hr class="hrl"/><p class="signature floatleft">Prepared By</p><hr class="hrr"/><p class="signature floatright">Head of Department</p>
							        <hr class="hrl"/><p class="signature floatleft vice">Vice Principal By</p><hr class="hrr"/><p class="signature floatright principle">Principal<br>Thakurgaon Polytechnic</p>
							   </div>
					   </div>
				 </div>
				
			   <?php
			   }
			}
			 else{ echo "<h1 style='text-align:center'>Result Not Found";}
         }
			//food third semester marksheet
			else if($semester=="third_semester"){
			$roll=$_POST['roll'];
			$sql="SELECT * FROM `food` WHERE roll='$roll'";
			$result=$admin->link->query($sql);
			if($data=$result->num_rows>0){
			while($data=$result->fetch_assoc()){
			    //examination year
			   $third_semester=$data['seme_3rd'];
			   $exam_year_3rd=$data['exam_year_3rd'];
			   $held_in=$data['held_in_3rd'];
			   $grade_average_3rd_seme=$data['grade_average_3rd_seme'];
			   //student data
			   $roll=$data['roll'];
			   $reg=$data['reg'];
			   $s_name=$data['s_name'];
			   $f_name=$data['f_name'];
			   $m_name=$data['m_name'];
			   $session=$data['session'];
			   $shift=$data['shift'];
			   //mark obtained
			   $catering_menag_omark=$data['catering_menag_omark'];
			   $b_electronics_omark=$data['b_electronics_omark'];	 
			   $com_application_2_omark=$data['com_application_2_omark'];
			   $math_3_omark=$data['math_3_omark'];
			   $physics_2_omark=$data['physics_2_omark'];
			   $social_s1_omark=$data['social_s1_omark'];
			   $engin_materials_omark=$data['engin_materials_omark'];
			   //Mark Grade
			   $catering_menag_grade=$data['catering_menag_grade'];
			   $b_electronics_grade=$data['b_electronics_grade'];
			   $com_application_2_grade=$data['com_application_2_grade'];
			   $math_3_grade=$data['math_3_grade'];
			   $physics_2_grade=$data['physics_2_grade'];
			   $social_s1_grade=$data['social_s1_grade'];
			   $engin_materials_grade=$data['engin_materials_grade'];
			   //Mark grade points
               $catering_menag_point=$data['catering_menag_point'];
			   $b_electronics_point=$data['b_electronics_point'];
			   $com_application_2_point=$data['com_application_2_point'];
			   $math_3_point=$data['math_3_point'];
			   $physics_2_point=$data['physics_2_point'];
			   $social_s1_point=$data['social_s1_point'];
			   $engin_materials_point=$data['engin_materials_point'];
?> 
			     <div class="fix structure main_area">
				       <div class="fix area">
					       <div class="fix logo">
						        <img src="img/bteb.jpg" alt="">
								<h1 class="borad_name">BANGLADESH TECHNICAL EDUCATION BOARD</h1>
						   </div>
						   <div class="fix diploma_in_engineering">
						        <div class="fix examination_year">
								     <h1 class="diploma_engineering">DIPLOMA IN ENGINEERING</h1>
									 <p class="exam_year">Examination Year:<?php echo $examyear;?></p>
									 <p class="exam_year">( Held In <?php echo $held_in." "."$examyear";?> )</p>
									 <p class="serial">Serial No-624049</p> <p class="semester">third semester</p>
									 <p class="collge_name">Thakurgoan Polytechnic Institute</p>
									 <p class="technology"><b>Technology:Food</b></p>
									 <p class="academic_tran"><u>ACADEMIC TRANSCRIPT</u></p>
								</div>
						        <div class="fix gread_system">
								     <table class="border" border="1px solid #000">
									       <tr>
										       <td colspan="3">Grading System</td>  
										   </tr>
									       <tr>
										       <td class="tr_border">Class Interval</td>
										       <td>LetterG rade</td>
										       <td>Grade Point</td>
										   </tr>
									       <tr>
										       <td>80-100</td>
										       <td>A+</td>
										       <td>4.00</td>
										   </tr>
									       <tr>
										       <td>75-79</td>
										       <td>A</td>
										       <td>3.75</td>
										   </tr> 
									       <tr>
										       <td>70-74</td>
										       <td>A-</td>
										       <td>3.50</td>
										   </tr>
									       <tr>
										       <td>65-69</td>
										       <td>B+</td>
										       <td>3.25</td>
										   </tr>
										   <tr>
										       <td>60-64</td>
										       <td>B</td>
										       <td>3.00</td>
										   </tr>
										   <tr>
										       <td>55-59</td>
										       <td>B-</td>
										       <td>2.75</td>
										   </tr>
										   <tr>
										       <td>50-54</td>
										       <td>C+</td>
										       <td>2.50</td>
										   </tr>
										   <tr>
										       <td>45-49</td>
										       <td>C</td>
										       <td>2.25</td>
										   </tr>
										   <tr>
										       <td>40-44</td>
										       <td>D</td>
										       <td>2.00</td>
										   </tr>
										   <tr>
										       <td>00-39</td>
										       <td>F</td>
										       <td>0.00</td>
										   </tr>
									 </table>
								</div>
						   </div>
						   
						    <div class="fix studentdata">
							     <span class="stu_data"><b>Student's Name :<?php echo $s_name; ?></b></span><br>
								 <span class="stu_data"><b>Father's Name  :<?php echo $f_name; ?></b></span><br>
								 <span class="stu_data"><b>Mother's Name  :<?php echo $m_name?></span></b><br>
								 <span class="mark_roll"><b class="mark_roll">Board Roll No: <?php echo $roll;?></b> <b class="mark_roll">Reg:No: <?php echo $reg ;?></b> <b class="mark_roll">Session:<?php echo $session;?> </b><b class="mark_roll" id="mark_roll"><p class="shift">Shift:<?php echo $shift; ?></p></b></span>
							</div>
							<!--main table marksheet starts here-->
							<div class="fix mark_table">
								  <table class="table table-bordered">
									<thead>
									  <tr>
										<th class="mark_tr">SL. NO</th>
										<th class="mark_tr">Subject Code</th>
										<th class="mark_tr sub_width">Name of Subject</th>
										<th class="mark_tr">Full Marks</th>
										<th class="mark_tr">Marks Obtained</th>
										<th class="mark_tr">Grade Letter</th>
										<th class="mark_tr">Grade Point(GP)</th>
										<th class="mark_tr">Grade Point Average(GP)</th>
									  </tr>
									</thead>
									<tbody>
									  <tr class="mark_tr">
										<td>1</td>
										<td>6931</td>
										<td class="sub_width">Catering managment</td>
										<td>200</td>
										<td><?php echo $catering_menag_omark;?></td>
										<td><?php echo $catering_menag_grade;?></td>
										<td><?php echo $catering_menag_point;?></td>
										<td rowspan="7"><p class="average_point"><?php echo $grade_average_3rd_seme;?></p></td>
									  </tr>
									  
									  <tr class="mark_tr">
										<td>2</td>
										<td>6811</td>
										<td class="sub_width">Basic electronics</td>
										<td>150</td>
										<td><?php echo $b_electronics_omark ;?></td>
										<td><?php echo $b_electronics_grade ;?></td>
										<td><?php echo $b_electronics_point ;?></td>
									  </tr>
									  
									   <tr class="mark_tr">
										<td>6</td>
										<td>6632</td>
										<td class="sub_width">Computer Application-2</td>
										<td>100</td>
										<td><?php echo $com_application_2_omark; ?></td>
										<td><?php echo $com_application_2_grade;?></td>
										<td><?php echo $com_application_2_point;?></td>
									  </tr>
									  <tr class="mark_tr">
										<td>4</td>
										<td>5931</td>
										<td class="sub_width">Mathmatic-3</td>
										<td>200</td>
										<td><?php echo $math_3_point ;?></td>
										<td><?php echo $math_3_grade; ?></td>
										<td><?php echo $math_3_point;?></td>
									  </tr>
									  <tr class="mark_tr">
										<td>3</td>
										<td>5922</td>
										<td class="sub_width">Physics-2</td>
										<td>200</td>
										<td><?php echo $physics_2_omark ;?></td>
										<td><?php echo $physics_2_grade;?></td>
										<td><?php echo $physics_2_point;?></td>
									  </tr>
									  
									   <tr class="mark_tr">
										<td>5</td>
										<td>5811</td>
										<td class="sub_width">Social Scince</td>
										<td>100</td>
										<td><?php echo $social_s1_omark ;?></td>
										<td><?php echo $social_s1_grade;?></td>
										<td><?php echo $social_s1_point;?></td>
									   
									  </tr>
									
									  <tr class="mark_tr">
										<td>7</td>
										<td>1012</td>
										<td class="sub_width">Engineeringm Metarials</td>
										<td>150</td>
										<td><?php echo $engin_materials_omark;?></td>
										<td><?php echo $engin_materials_grade;?></td>
										<td><?php echo $engin_materials_point;?></td>
										 
									  </tr>
									</tbody>
								  </table>
								</div>
	                           <!--Teacher Signature-->
							 <div class="fix teacher_signature">
							        <hr class="hrl"/><p class="signature floatleft">Prepared By</p><hr class="hrr"/><p class="signature floatright">Head of Department</p>
							        <hr class="hrl"/><p class="signature floatleft vice">Vice Principal By</p><hr class="hrr"/><p class="signature floatright principle">Principal<br>Thakurgaon Polytechnic</p>
							   </div>
					   </div>
				 </div>
				
			   <?php
			   }
		    }
			   else{ echo "<h1 style='text-align:center'>Result Not Found";}
         }
	}	
		//Refrigeration and aircondition marksheet FIRST SEMESTER
       else if($department=="rac"){
            if($semester=="first_semester"){
	        $roll=$_POST['roll'];
			$sql="SELECT * FROM `rac` WHERE roll='$roll'";
			$result=$admin->link->query($sql);
			if($data=$result->num_rows>0){
			while($data=$result->fetch_assoc()){
			    //examination year
			   $first_semester=$data['seme_1st'];
			   $examyear=$data['exam_year_1st'];
			   $held_in=$data['held_in_1st'];
			   $grade_average_1st_seme=$data['grade_average_1st_seme'];
			   //student data
			   $roll=$data['roll'];
			   $reg=$data['reg'];
			   $s_name=$data['s_name'];
			   $f_name=$data['f_name'];
			   $m_name=$data['m_name'];
			   $session=$data['session'];
			   $shift=$data['shift'];
			   //mark obtained
			   $eng_drow_omark=$data['eng_drow_omark'];
			   $eng_1_omark=$data['eng_1_omark'];	 
			   $physical_edu_omark=$data['physical_edu_omark'];
			   $math_1_omark=$data['math_1_omark'];
			   $chemistry_omark=$data['chemistry_omark'];
			   $rac_fund_omark=$data['rac_fund_omark'];
			   $b_workshop_omark=$data['b_workshop_omark'];
			   //Mark Grade
			   $eng_drow_grade=$data['eng_drow_grade'];
			   $eng_1_grade=$data['eng_1_grade'];
			   $physical_edu_grade=$data['physical_edu_grade'];
			   $math_1_grade=$data['math_1_grade'];
			   $chemistry_grade=$data['chemistry_grade'];
			   $rac_fund_grade=$data['rac_fund_grade'];
			   $b_workshop_grade=$data['b_workshop_grade'];
			   //Mark grade points
               $eng_drow_point=$data['eng_drow_point'];
			   $eng_1_point=$data['eng_1_point'];
			   $physical_edu_point=$data['physical_edu_point'];
			   $math_1_point=$data['math_1_point'];
			   $chemistry_point=$data['chemistry_point'];
			   $rac_fund_point=$data['rac_fund_point'];
			   $b_workshop_point=$data['b_workshop_point'];
?> 
			     <div class="fix structure main_area">
				       <div class="fix area">
					       <div class="fix logo">
						        <img src="img/bteb.jpg" alt="">
								<h1 class="borad_name">BANGLADESH TECHNICAL EDUCATION BOARD</h1>
						   </div>
						   <div class="fix diploma_in_engineering">
						        <div class="fix examination_year">
								     <h1 class="diploma_engineering">DIPLOMA IN ENGINEERING</h1>
									 <p class="exam_year">Examination Year:<?php echo $examyear;?></p>
									 <p class="exam_year">( Held In <?php echo $held_in." "."$examyear";?> )</p>
									 <p class="serial">Serial No-624049</p> <p class="semester">first semester</p>
									 <p class="collge_name">Thakurgoan Polytechnic Institute</p>
									 <p class="technology"><b>Technology:RAC</b></p>
									 <p class="academic_tran"><u>ACADEMIC TRANSCRIPT</u></p>
								</div>
						        <div class="fix gread_system">
								     <table class="border" border="1px solid #000">
									       <tr>
										       <td colspan="3">Grading System</td>  
										   </tr>
									       <tr>
										       <td class="tr_border">Class Interval</td>
										       <td>LetterG rade</td>
										       <td>Grade Point</td>
										   </tr>
									       <tr>
										       <td>80-100</td>
										       <td>A+</td>
										       <td>4.00</td>
										   </tr>
									       <tr>
										       <td>75-79</td>
										       <td>A</td>
										       <td>3.75</td>
										   </tr> 
									       <tr>
										       <td>70-74</td>
										       <td>A-</td>
										       <td>3.50</td>
										   </tr>
									       <tr>
										       <td>65-69</td>
										       <td>B+</td>
										       <td>3.25</td>
										   </tr>
										   <tr>
										       <td>60-64</td>
										       <td>B</td>
										       <td>3.00</td>
										   </tr>
										   <tr>
										       <td>55-59</td>
										       <td>B-</td>
										       <td>2.75</td>
										   </tr>
										   <tr>
										       <td>50-54</td>
										       <td>C+</td>
										       <td>2.50</td>
										   </tr>
										   <tr>
										       <td>45-49</td>
										       <td>C</td>
										       <td>2.25</td>
										   </tr>
										   <tr>
										       <td>40-44</td>
										       <td>D</td>
										       <td>2.00</td>
										   </tr>
										   <tr>
										       <td>00-39</td>
										       <td>F</td>
										       <td>0.00</td>
										   </tr>
									 </table>
								</div>
						   </div>
						   
						    <div class="fix studentdata">
							     <span class="stu_data"><b>Student's Name :<?php echo $s_name; ?></b></span><br>
								 <span class="stu_data"><b>Father's Name  :<?php echo $f_name; ?></b></span><br>
								 <span class="stu_data"><b>Mother's Name  :<?php echo $m_name?></span></b><br>
								 <span class="mark_roll"><b class="mark_roll">Board Roll No: <?php echo $roll;?></b> <b class="mark_roll">Reg:No: <?php echo $reg ;?></b> <b class="mark_roll">Session:<?php echo $session;?> </b><b class="mark_roll" id="mark_roll"><p class="shift">Shift:<?php echo $shift; ?></p></b></span>
							</div>
							<!--main table marksheet starts here-->
							<div class="fix mark_table">
								  <table class="table table-bordered">
									<thead>
									  <tr>
										<th class="mark_tr">SL. NO</th>
										<th class="mark_tr">Subject Code</th>
										<th class="mark_tr sub_width">Name of Subject</th>
										<th class="mark_tr">Full Marks</th>
										<th class="mark_tr">Marks Obtained</th>
										<th class="mark_tr">Grade Letter</th>
										<th class="mark_tr">Grade Point(GP)</th>
										<th class="mark_tr">Grade Point Average(GP)</th>
									  </tr>
									</thead>
									<tbody>
									  <tr class="mark_tr">
										<td>1</td>
										<td>1011</td>
										<td class="sub_width">Engineering Drawing</td>
										<td>100</td>
										<td><?php echo $eng_drow_omark?></td>
										<td><?php echo $eng_drow_grade;?></td>
										<td><?php echo $eng_drow_point;?></td>
										<td rowspan="7"><p class="average_point"><?php echo $grade_average_1st_seme;?></p></td>
									  </tr>
									  <tr class="mark_tr">
										<td>2</td>
										<td>5712</td>
										<td class="sub_width">English-1</td>
										<td>100</td>
										<td><?php echo $eng_1_omark ;?></td>
										<td><?php echo $eng_1_grade ;?></td>
										<td><?php echo $eng_1_point ;?></td>
									  </tr>
									  <tr class="mark_tr">
										<td>3</td>
										<td>5812</td>
										<td class="sub_width">Plysical Education</td>
										<td>50</td>
										<td><?php echo $physical_edu_omark ;?></td>
										<td><?php echo $physical_edu_grade;?></td>
										<td><?php echo $physical_edu_point;?></td>
										 
									  </tr>
									   <tr class="mark_tr">
										<td>4</td>
										<td>5911</td>
										<td class="sub_width">Mathmatic-1</td>
										<td>200</td>
										<td><?php echo $math_1_omark ;?></td>
										<td><?php echo $math_1_grade; ?></td>
										<td><?php echo $math_1_point;?></td>
										 
									  </tr>
									   <tr class="mark_tr">
										<td>5</td>
										<td>5913</td>
										<td class="sub_width">Chemistry-1</td>
										<td>200</td>
										<td><?php echo $chemistry_omark ;?></td>
										<td><?php echo $chemistry_grade;?></td>
										<td><?php echo $chemistry_point;?></td>
									   
									  </tr>
									   <tr class="mark_tr">
										<td>6</td>
										<td>7211</td>
										<td class="sub_width">RAC Fundamantal</td>
										<td>200</td>
										<td><?php echo $rac_fund_omark;?></td>
										<td><?php echo $rac_fund_grade;?></td>
										<td><?php echo $rac_fund_point;?></td>
										 
									  </tr>
									  <tr class="mark_tr">
										<td>7</td>
										<td>7011</td>
										<td class="sub_width">Basic Workshop</td>
										<td>100</td>
										<td><?php echo $b_workshop_omark;?></td>
										<td><?php echo $b_workshop_grade;?></td>
										<td><?php echo $b_workshop_point;?></td>
										 
									  </tr>
									</tbody>
								  </table>
								</div>
	                           <!--Teacher Signature-->
							    <div class="fix teacher_signature">
							        <hr class="hrl"/><p class="signature floatleft">Prepared By</p><hr class="hrr"/><p class="signature floatright">Head of Department</p>
							        <hr class="hrl"/><p class="signature floatleft vice">Vice Principal By</p><hr class="hrr"/><p class="signature floatright principle">Principal<br>Thakurgaon Polytechnic</p>
							   </div>
					   </div>
				 </div>
				
			   <?php
			   }
			}
			 else{ echo "<h1 style='text-align:center'>Result Not Found";}
	    }
		//RAC SECOND SEMESTER MARK SHEET START HERE
		else if($semester=="second_semester"){
	        $roll=$_POST['roll'];
			$sql="SELECT * FROM `rac` WHERE roll='$roll'";
			$result=$admin->link->query($sql);
			if($data=$result->num_rows>0){
			while($data=$result->fetch_assoc()){
			    //examination year
			   $second_semester=$data['seme_2nd'];
			   $examyear=$data['exam_year_2nd'];
			   $held_in=$data['held_in_2nd'];
			   $grade_average_2nd_seme=$data['grade_average_2nd_seme'];
			   //student data
			   $roll=$data['roll'];
			   $reg=$data['reg'];
			   $s_name=$data['s_name'];
			   $f_name=$data['f_name'];
			   $m_name=$data['m_name'];
			   $session=$data['session'];
			   $shift=$data['shift'];
			   //mark obtained
			   $engin_materials_omark=$data['engin_materials_omark'];
			   $bangla_omark=$data['bangla_omark'];	 
			   $physics_1_omark=$data['physics_1_omark'];
			   $math_2_omark=$data['math_2_omark'];
			   $com_application_1_omark=$data['com_application_1_omark'];
			   $b_electricity_omark=$data['b_electricity_omark'];
			   $rac_engin_drawing_omark=$data['rac_engin_drawing_omark'];
			   //Mark Grade
			   $engin_materials_grade=$data['engin_materials_grade'];
			   $bangla_grade=$data['bangla_grade'];
			   $physics_1_grade=$data['physics_1_grade'];
			   $math_2_grade=$data['math_2_grade'];
			   $com_application_1_grade=$data['com_application_1_grade'];
			   $b_electricity_grade=$data['b_electricity_grade'];
			   $rac_engin_drawing_grade=$data['rac_engin_drawing_grade'];
			   //Mark grade points
               $engin_materials_point=$data['engin_materials_point'];
			   $bangla_point=$data['bangla_point'];
			   $physics_1_point=$data['physics_1_point'];
			   $math_2_point=$data['math_2_point'];
			   $com_application_1_point=$data['com_application_1_point'];
			   $b_electricity_point=$data['b_electricity_point'];
			   $rac_engin_drawing_point=$data['rac_engin_drawing_point'];
?> 
			     <div class="fix structure main_area">
				       <div class="fix area">
					       <div class="fix logo">
						        <img src="img/bteb.jpg" alt="">
								<h1 class="borad_name">BANGLADESH TECHNICAL EDUCATION BOARD</h1>
						   </div>
						   <div class="fix diploma_in_engineering">
						       <div class="fix examination_year">
								     <h1 class="diploma_engineering">DIPLOMA IN ENGINEERING</h1>
									 <p class="exam_year">Examination Year:<?php echo $examyear;?></p>
									 <p class="exam_year">( Held In <?php echo $held_in." "."$examyear";?> )</p>
									 <p class="serial">Serial No-624049</p> <p class="semester">second semester</p>
									 <p class="collge_name">Thakurgoan Polytechnic Institute</p>
									 <p class="technology"><b>Technology:RAC</b></p>
									 <p class="academic_tran"><u>ACADEMIC TRANSCRIPT</u></p>
								</div>
						        <div class="fix gread_system">
								     <table class="border" border="1px solid #000">
									       <tr>
										       <td colspan="3">Grading System</td>  
										   </tr>
									       <tr>
										       <td class="tr_border">Class Interval</td>
										       <td>LetterG rade</td>
										       <td>Grade Point</td>
										   </tr>
									       <tr>
										       <td>80-100</td>
										       <td>A+</td>
										       <td>4.00</td>
										   </tr>
									       <tr>
										       <td>75-79</td>
										       <td>A</td>
										       <td>3.75</td>
										   </tr> 
									       <tr>
										       <td>70-74</td>
										       <td>A-</td>
										       <td>3.50</td>
										   </tr>
									       <tr>
										       <td>65-69</td>
										       <td>B+</td>
										       <td>3.25</td>
										   </tr>
										   <tr>
										       <td>60-64</td>
										       <td>B</td>
										       <td>3.00</td>
										   </tr>
										   <tr>
										       <td>55-59</td>
										       <td>B-</td>
										       <td>2.75</td>
										   </tr>
										   <tr>
										       <td>50-54</td>
										       <td>C+</td>
										       <td>2.50</td>
										   </tr>
										   <tr>
										       <td>45-49</td>
										       <td>C</td>
										       <td>2.25</td>
										   </tr>
										   <tr>
										       <td>40-44</td>
										       <td>D</td>
										       <td>2.00</td>
										   </tr>
										   <tr>
										       <td>00-39</td>
										       <td>F</td>
										       <td>0.00</td>
										   </tr>
									 </table>
								</div>
						   </div>
						   
						    <div class="fix studentdata">
							     <span class="stu_data"><b>Student's Name :<?php echo $s_name; ?></b></span><br>
								 <span class="stu_data"><b>Father's Name  :<?php echo $f_name; ?></b></span><br>
								 <span class="stu_data"><b>Mother's Name  :<?php echo $m_name?></span></b><br>
								 <span class="mark_roll"><b class="mark_roll">Board Roll No: <?php echo $roll;?></b> <b class="mark_roll">Reg:No: <?php echo $reg ;?></b> <b class="mark_roll">Session:<?php echo $session;?> </b><b class="mark_roll" id="mark_roll"><p class="shift">Shift:<?php echo $shift; ?></p></b></span>
							</div>
							<!--main table marksheet starts here-->
							<div class="fix mark_table">
								  <table class="table table-bordered">
									<thead>
									  <tr>
										<th class="mark_tr">SL. NO</th>
										<th class="mark_tr">Subject Code</th>
										<th class="mark_tr sub_width">Name of Subject</th>
										<th class="mark_tr">Full Marks</th>
										<th class="mark_tr">Marks Obtained</th>
										<th class="mark_tr">Grade Letter</th>
										<th class="mark_tr">Grade Point(GP)</th>
										<th class="mark_tr">Grade Point Average(GP)</th>
									  </tr>
									</thead>
									<tbody>
									  <tr class="mark_tr">
										<td>1</td>
										<td>1012</td>
										<td class="sub_width">Engineering Materials</td>
										<td>150</td>
										<td><?php echo $engin_materials_omark;?></td>
										<td><?php echo $engin_materials_grade;?></td>
										<td><?php echo $engin_materials_point;?></td>
										<td rowspan="7"><p class="average_point"><?php echo $grade_average_2nd_seme;?></p></td>
									  </tr>
									  <tr class="mark_tr">
										<td>2</td>
										<td>5711</td>
										<td class="sub_width">Bangla-1</td>
										<td>150</td>
										<td><?php echo $bangla_omark ;?></td>
										<td><?php echo $bangla_grade ;?></td>
										<td><?php echo $bangla_point ;?></td>
									  </tr>
									  <tr class="mark_tr">
										<td>3</td>
										<td>5912</td>
										<td class="sub_width">Physics-1</td>
										<td>200</td>
										<td><?php echo $physics_1_omark ;?></td>
										<td><?php echo $physics_1_grade;?></td>
										<td><?php echo $physics_1_point;?></td>
										 
									  </tr>
									   <tr class="mark_tr">
										<td>4</td>
										<td>5921</td>
										<td class="sub_width">Mathmatic-2</td>
										<td>200</td>
										<td><?php echo $math_2_omark ;?></td>
										<td><?php echo $math_2_grade; ?></td>
										<td><?php echo $math_2_point;?></td>
										 
									  </tr>
									   <tr class="mark_tr">
										<td>5</td>
										<td>6621</td>
										<td class="sub_width">Computer Application-1</td>
										<td>100</td>
										<td><?php echo $com_application_1_omark ;?></td>
										<td><?php echo $com_application_1_grade;?></td>
										<td><?php echo $com_application_1_point;?></td>
									   
									  </tr>
									   <tr class="mark_tr">
										<td>6</td>
										<td>6711</td>
										<td class="sub_width">Basic Electricity</td>
										<td>200</td>
										<td><?php echo $b_electricity_omark;?></td>
										<td><?php echo $b_electricity_grade;?></td>
										<td><?php echo $b_electricity_point;?></td>
										 
									  </tr>
									  <tr class="mark_tr">
										<td>7</td>
										<td>7221</td>
										<td class="sub_width">Refrigeration Eng. Drawing</td>
										<td>100</td>
										<td><?php echo $rac_engin_drawing_omark;?></td>
										<td><?php echo $rac_engin_drawing_grade;?></td>
										<td><?php echo $rac_engin_drawing_point;?></td>
										 
									  </tr>
									</tbody>
								  </table>
								</div>
	                           <!--Teacher Signature-->
							    <div class="fix teacher_signature">
							        <hr class="hrl"/><p class="signature floatleft">Prepared By</p><hr class="hrr"/><p class="signature floatright">Head of Department</p>
							        <hr class="hrl"/><p class="signature floatleft vice">Vice Principal By</p><hr class="hrr"/><p class="signature floatright principle">Principal<br>Thakurgaon Polytechnic</p>
							   </div>
					   </div>
				 </div>
				
			   <?php
			   }
			}
			 else{ echo "<h1 style='text-align:center'>Result Not Found";}
	    }
		//RAC THIRD SEMESTER MARKSHEET START HERE
		else if($semester=="third_semester"){
	        $roll=$_POST['roll'];
			$sql="SELECT * FROM `rac` WHERE roll='$roll'";
			$result=$admin->link->query($sql);
			if($data=$result->num_rows>0){
			while($data=$result->fetch_assoc()){
			    //examination year
			   $third_semester=$data['seme_2nd'];
			   $examyear=$data['exam_year_3rd'];
			   $held_in=$data['held_in_3rd'];
			   $grade_average_3rd_seme=$data['grade_average_3rd_seme'];
			   //student data
			   $roll=$data['roll'];
			   $reg=$data['reg'];
			   $s_name=$data['s_name'];
			   $f_name=$data['f_name'];
			   $m_name=$data['m_name'];
			   $session=$data['session'];
			   $shift=$data['shift'];
			   //mark obtained
			   $rac_cycles_omark=$data['rac_cycles_omark'];
			   $b_electronics_omark=$data['b_electronics_omark'];	 
			   $com_application_2_omark=$data['com_application_2_omark'];
			   $math_3_omark=$data['math_3_omark'];
			   $physics_2_omark=$data['physics_2_omark'];
			   $social_s1_omark=$data['social_s1_omark'];
			   $eng_2_omark=$data['eng_2_omark'];
			   //Mark Grade
			   $rac_cycles_grade=$data['rac_cycles_grade'];
			   $b_electronics_grade=$data['b_electronics_grade'];
			   $com_application_2_grade=$data['com_application_2_grade'];
			   $math_3_grade=$data['math_3_grade'];
			   $physics_2_grade=$data['physics_2_grade'];
			   $social_s1_grade=$data['social_s1_grade'];
			   $eng_2_grade=$data['eng_2_grade'];
			   //Mark grade points
               $rac_cycles_point=$data['rac_cycles_point'];
			   $b_electronics_point=$data['b_electronics_point'];
			   $com_application_2_point=$data['com_application_2_point'];
			   $math_3_point=$data['math_3_point'];
			   $physics_2_point=$data['physics_2_point'];
			   $social_s1_point=$data['social_s1_point'];
			   $eng_2_point=$data['eng_2_point'];
?> 
			     <div class="fix structure main_area">
				       <div class="fix area">
					       <div class="fix logo">
						        <img src="img/bteb.jpg" alt="">
								<h1 class="borad_name">BANGLADESH TECHNICAL EDUCATION BOARD</h1>
						   </div>
						   <div class="fix diploma_in_engineering">
						        <div class="fix examination_year">
								     <h1 class="diploma_engineering">DIPLOMA IN ENGINEERING</h1>
									 <p class="exam_year">Examination Year:<?php echo $examyear;?></p>
									 <p class="exam_year">( Held In <?php echo $held_in." "."$examyear";?> )</p>
									 <p class="serial">Serial No-624049</p> <p class="semester">third semester</p>
									 <p class="collge_name">Thakurgoan Polytechnic Institute</p>
									 <p class="technology"><b>Technology:RAC</b></p>
									 <p class="academic_tran"><u>ACADEMIC TRANSCRIPT</u></p>
								</div>
						        <div class="fix gread_system">
								     <table class="border" border="1px solid #000">
									       <tr>
										       <td colspan="3">Grading System</td>  
										   </tr>
									       <tr>
										       <td class="tr_border">Class Interval</td>
										       <td>LetterG rade</td>
										       <td>Grade Point</td>
										   </tr>
									       <tr>
										       <td>80-100</td>
										       <td>A+</td>
										       <td>4.00</td>
										   </tr>
									       <tr>
										       <td>75-79</td>
										       <td>A</td>
										       <td>3.75</td>
										   </tr> 
									       <tr>
										       <td>70-74</td>
										       <td>A-</td>
										       <td>3.50</td>
										   </tr>
									       <tr>
										       <td>65-69</td>
										       <td>B+</td>
										       <td>3.25</td>
										   </tr>
										   <tr>
										       <td>60-64</td>
										       <td>B</td>
										       <td>3.00</td>
										   </tr>
										   <tr>
										       <td>55-59</td>
										       <td>B-</td>
										       <td>2.75</td>
										   </tr>
										   <tr>
										       <td>50-54</td>
										       <td>C+</td>
										       <td>2.50</td>
										   </tr>
										   <tr>
										       <td>45-49</td>
										       <td>C</td>
										       <td>2.25</td>
										   </tr>
										   <tr>
										       <td>40-44</td>
										       <td>D</td>
										       <td>2.00</td>
										   </tr>
										   <tr>
										       <td>00-39</td>
										       <td>F</td>
										       <td>0.00</td>
										   </tr>
									 </table>
								</div>
						   </div>
						   
						    <div class="fix studentdata">
							     <span class="stu_data"><b>Student's Name :<?php echo $s_name; ?></b></span><br>
								 <span class="stu_data"><b>Father's Name  :<?php echo $f_name; ?></b></span><br>
								 <span class="stu_data"><b>Mother's Name  :<?php echo $m_name?></span></b><br>
								 <span class="mark_roll"><b class="mark_roll">Board Roll No: <?php echo $roll;?></b> <b class="mark_roll">Reg:No: <?php echo $reg ;?></b> <b class="mark_roll">Session:<?php echo $session;?> </b><b class="mark_roll" id="mark_roll"><p class="shift">Shift:<?php echo $shift; ?></p></b></span>
							</div>
							<!--main table marksheet starts here-->
							<div class="fix mark_table">
								  <table class="table table-bordered">
									<thead>
									  <tr>
										<th class="mark_tr">SL. NO</th>
										<th class="mark_tr">Subject Code</th>
										<th class="mark_tr sub_width">Name of Subject</th>
										<th class="mark_tr">Full Marks</th>
										<th class="mark_tr">Marks Obtained</th>
										<th class="mark_tr">Grade Letter</th>
										<th class="mark_tr">Grade Point(GP)</th>
										<th class="mark_tr">Grade Point Average(GP)</th>
									  </tr>
									</thead>
									<tbody>
									  <tr class="mark_tr">
										<td>1</td>
										<td>7231</td>
										<td class="sub_width">Refrigetation Cycles & Com</td>
										<td>200</td>
										<td><?php echo $rac_cycles_omark;?></td>
										<td><?php echo $rac_cycles_grade;?></td>
										<td><?php echo $rac_cycles_point;?></td>
										<td rowspan="7"><p class="average_point"><?php echo $grade_average_3rd_seme;?></p></td>
									  </tr>
									   <tr class="mark_tr">
										<td>2</td>
										<td>6811</td>
										<td class="sub_width">Basic Electronics</td>
										<td>200</td>
										<td><?php echo $b_electronics_omark ;?></td>
										<td><?php echo $b_electronics_grade;?></td>
										<td><?php echo $b_electronics_point;?></td>										 
									  </tr>
									  <tr class="mark_tr">
										<td>3</td>
										<td>6632</td>
										<td class="sub_width">Computer Application - 2</td>
										<td>100</td>
										<td><?php echo $com_application_2_omark ;?></td>
										<td><?php echo $com_application_2_grade;?></td>
										<td><?php echo $com_application_2_point;?></td>
									  </tr>
									   <tr class="mark_tr">
										<td>4</td>
										<td>5931</td>
										<td class="sub_width">Mathematics - 3</td>
										<td>200</td>
										<td><?php echo $math_3_omark ;?></td>
										<td><?php echo $math_3_grade; ?></td>
										<td><?php echo $math_3_point;?></td>
									  </tr>
									 
									   <tr class="mark_tr">
										<td>5</td>
										<td>5922</td>
										<td class="sub_width">Physics - 2</td>
										<td>200</td>
										<td><?php echo $physics_2_omark ;?></td>
										<td><?php echo $physics_2_grade;?></td>
										<td><?php echo $physics_2_point;?></td>
									   
									  </tr>
									   <tr class="mark_tr">
										<td>6</td>
										<td>5811</td>
										<td class="sub_width">Social Science - 1</td>
										<td>100</td>
										<td><?php echo $social_s1_omark;?></td>
										<td><?php echo $social_s1_grade;?></td>
										<td><?php echo $social_s1_point;?></td>
										 
									  </tr>
									  <tr class="mark_tr">
										<td>7</td>
										<td>5722</td>
										<td class="sub_width">English - 2</td>
										<td>150</td>
										<td><?php echo $eng_2_omark;?></td>
										<td><?php echo $eng_2_grade;?></td>
										<td><?php echo $eng_2_point;?></td>
										 
									  </tr>
									</tbody>
								  </table>
								</div>
	                           <!--Teacher Signature-->
							   <div class="fix teacher_signature">
							        <hr class="hrl"/><p class="signature floatleft">Prepared By</p><hr class="hrr"/><p class="signature floatright">Head of Department</p>
							        <hr class="hrl"/><p class="signature floatleft vice">Vice Principal By</p><hr class="hrr"/><p class="signature floatright principle">Principal<br>Thakurgaon Polytechnic</p>
							   </div>
					   </div>
				 </div>
				
			   <?php
			   }
            }
            else{ echo "<h1 style='text-align:center'>Result Not Found";}		
	    }
   }
   //AIDT MARK SHEET START HERE FIRST SEMESTER
    else if($department=="aidt"){
	     if($semester=="first_semester"){
		    $roll=$_POST['roll'];
			$sql="SELECT * FROM `aidt` WHERE roll='$roll'";
			$result=$admin->link->query($sql);
			if($data=$result->num_rows>0){
			while($data=$result->fetch_assoc()){
			    //examination year
			   $first_semester=$data['seme_1st'];
			   $examyear=$data['exam_year_1st'];
			   $held_in=$data['held_in_1st'];
			   $grade_average_1st_seme=$data['grade_average_1st_seme'];
			   //student data
			   $roll=$data['roll'];
			   $reg=$data['reg'];
			   $s_name=$data['s_name'];
			   $f_name=$data['f_name'];
			   $m_name=$data['m_name'];
			   $session=$data['session'];
			   $shift=$data['shift'];
			   //mark obtained
			   $eng_drow_omark=$data['eng_drow_omark'];
			   $eng_1_omark=$data['eng_1_omark'];	 
			   $physical_edu_omark=$data['physical_edu_omark'];
			   $math_1_omark=$data['math_1_omark'];
			   $chemistry_omark=$data['chemistry_omark'];
			   $b_worshop_omark=$data['b_workshop_omark'];
			   $graphics_omark=$data['graphics_omark'];
			   //Mark Grade
			   $eng_drow_grade=$data['eng_drow_grade'];
			   $eng_1_grade=$data['eng_1_grade'];
			   $physical_edu_grade=$data['physical_edu_grade'];
			   $math_1_grade=$data['math_1_grade'];
			   $chemistry_grade=$data['chemistry_grade'];
			   $b_worshop_grade=$data['b_workshop_grade'];
			   $graphics_grade=$data['graphics_grade'];
			   //Mark grade points
               $eng_drow_point=$data['eng_drow_point'];
			   $eng_1_point=$data['eng_1_point'];
			   $physical_edu_point=$data['physical_edu_point'];
			   $math_1_point=$data['math_1_point'];
			   $chemistry_point=$data['chemistry_point'];
			   $b_worshop_point=$data['b_workshop_point'];
			   $graphics_point=$data['graphics_point'];
?> 
			     <div class="fix structure main_area">
				       <div class="fix area">
					       <div class="fix logo">
						        <img src="img/bteb.jpg" alt="">
								<h1 class="borad_name">BANGLADESH TECHNICAL EDUCATION BOARD</h1>
						   </div>
						   <div class="fix diploma_in_engineering">
						        <div class="fix examination_year">
								     <h1 class="diploma_engineering">DIPLOMA IN ENGINEERING</h1>
									 <p class="exam_year">Examination Year:<?php echo $examyear;?></p>
									 <p class="exam_year">( Held In <?php echo $held_in." "."$examyear";?> )</p>
									 <p class="serial">Serial No-624049</p> <p class="semester">first semester</p>
									 <p class="collge_name">Thakurgoan Polytechnic Institute</p>
									 <p class="technology"><b>Technology:AIDT</b></p>
									 <p class="academic_tran"><u>ACADEMIC TRANSCRIPT</u></p>
								</div>
						        <div class="fix gread_system">
								     <table class="border" border="1px solid #000">
									       <tr>
										       <td colspan="3">Grading System</td>  
										   </tr>
									       <tr>
										       <td class="tr_border">Class Interval</td>
										       <td>LetterG rade</td>
										       <td>Grade Point</td>
										   </tr>
									       <tr>
										       <td>80-100</td>
										       <td>A+</td>
										       <td>4.00</td>
										   </tr>
									       <tr>
										       <td>75-79</td>
										       <td>A</td>
										       <td>3.75</td>
										   </tr> 
									       <tr>
										       <td>70-74</td>
										       <td>A-</td>
										       <td>3.50</td>
										   </tr>
									       <tr>
										       <td>65-69</td>
										       <td>B+</td>
										       <td>3.25</td>
										   </tr>
										   <tr>
										       <td>60-64</td>
										       <td>B</td>
										       <td>3.00</td>
										   </tr>
										   <tr>
										       <td>55-59</td>
										       <td>B-</td>
										       <td>2.75</td>
										   </tr>
										   <tr>
										       <td>50-54</td>
										       <td>C+</td>
										       <td>2.50</td>
										   </tr>
										   <tr>
										       <td>45-49</td>
										       <td>C</td>
										       <td>2.25</td>
										   </tr>
										   <tr>
										       <td>40-44</td>
										       <td>D</td>
										       <td>2.00</td>
										   </tr>
										   <tr>
										       <td>00-39</td>
										       <td>F</td>
										       <td>0.00</td>
										   </tr>
									 </table>
								</div>
						   </div>
						   
						    <div class="fix studentdata">
							     <span class="stu_data"><b>Student's Name :<?php echo $s_name; ?></b></span><br>
								 <span class="stu_data"><b>Father's Name  :<?php echo $f_name; ?></b></span><br>
								 <span class="stu_data"><b>Mother's Name  :<?php echo $m_name?></span></b><br>
								 <span class="mark_roll"><b class="mark_roll">Board Roll No: <?php echo $roll;?></b> <b class="mark_roll">Reg:No: <?php echo $reg ;?></b> <b class="mark_roll">Session:<?php echo $session;?> </b><b class="mark_roll" id="mark_roll"><p class="shift">Shift:<?php echo $shift; ?></p></b></span>
							</div>
							<!--main table marksheet starts here-->
							<div class="fix mark_table">
								  <table class="table table-bordered">
									<thead>
									  <tr>
										<th class="mark_tr">SL. NO</th>
										<th class="mark_tr">Subject Code</th>
										<th class="mark_tr sub_width">Name of Subject</th>
										<th class="mark_tr">Full Marks</th>
										<th class="mark_tr">Marks Obtained</th>
										<th class="mark_tr">Grade Letter</th>
										<th class="mark_tr">Grade Point(GP)</th>
										<th class="mark_tr">Grade Point Average(GP)</th>
									  </tr>
									</thead>
									<tbody>
									  <tr class="mark_tr">
										<td>1</td>
										<td>1011</td>
										<td class="sub_width">Engineering Drawing</td>
										<td>100</td>
										<td><?php echo $eng_drow_omark?></td>
										<td><?php echo $eng_drow_grade;?></td>
										<td><?php echo $eng_drow_point;?></td>
										<td rowspan="8"><p class="average_point"><?php echo $grade_average_1st_seme;?></p></td>
									  </tr>
									  <tr class="mark_tr">
										<td>2</td>
										<td>5712</td>
										<td class="sub_width">English - 1</td>
										<td>100</td>
										<td><?php echo $eng_1_omark ;?></td>
										<td><?php echo $eng_1_grade?></td>
										<td><?php echo $eng_1_point ;?></td>
									  </tr>
									  <tr class="mark_tr">
										<td>3</td>
										<td>5812</td>
										<td class="sub_width">Physical Education</td>
										<td>50</td>
										<td><?php echo $physical_edu_omark ;?></td>
										<td><?php echo $physical_edu_grade;?></td>
										<td><?php echo $physical_edu_point;?></td>
										 
									  </tr>
									   <tr class="mark_tr">
										<td>4</td>
										<td>5911</td>
										<td class="sub_width">Mathematics - 1</td>
										<td>200</td>
										<td><?php echo $math_1_omark ;?></td>
										<td><?php echo $math_1_grade; ?></td>
										<td><?php echo $math_1_point;?></td> 
									  </tr>
									   <tr class="mark_tr">
										<td>5</td>
										<td>5913</td>
										<td class="sub_width">Chemistry</td>
										<td>200</td>
										<td><?php echo $chemistry_omark ;?></td>
										<td><?php echo $chemistry_grade;?></td>
										<td><?php echo $chemistry_point;?></td>
									   
									  </tr>
									   <tr class="mark_tr">
										<td>6</td>
										<td>7011</td>
										<td class="sub_width">Basic Workshop Practice</td>
										<td>100</td>
										<td><?php echo $b_worshop_omark; ?></td>
										<td><?php echo $b_worshop_grade;?></td>
										<td><?php echo $b_worshop_point;?></td>
										 
									  </tr>
									  <tr class="mark_tr">
										<td>7</td>
										<td>8711</td>
										<td class="sub_width">Garphics1</td>
										<td>150</td>
										<td><?php echo $graphics_omark;?></td>
										<td><?php echo $graphics_grade;?></td>
										<td><?php echo $graphics_point;?></td>
										 
									  </tr>
									 
									</tbody>
								  </table>
								</div>
	                           <!--Teacher Signature-->
							  <div class="fix teacher_signature">
							        <hr class="hrl"/><p class="signature floatleft">Prepared By</p><hr class="hrr"/><p class="signature floatright">Head of Department</p>
							        <hr class="hrl"/><p class="signature floatleft vice">Vice Principal By</p><hr class="hrr"/><p class="signature floatright principle">Principal<br>Thakurgaon Polytechnic</p>
							   </div>
					   </div>
				 </div>
				
			   <?php
			   }
			 }
			 else{ echo "<h1 style='text-align:center'>Result Not Found";}
		 }
		 //AIDT MARKSHEET SECOND SEMESTER
		else if($semester=="second_semester"){
		    $roll=$_POST['roll'];
			$sql="SELECT * FROM `aidt` WHERE roll='$roll'";
			$result=$admin->link->query($sql);
			if($data=$result->num_rows>0){
			while($data=$result->fetch_assoc()){
			    //examination year
			   $second_semester=$data['seme_2nd'];
			   $examyear=$data['exam_year_2nd'];
			   $held_in=$data['held_in_2nd'];
			   $grade_average_2nd_seme=$data['grade_average_2nd_seme'];
			   //student data
			   $roll=$data['roll'];
			   $reg=$data['reg'];
			   $s_name=$data['s_name'];
			   $f_name=$data['f_name'];
			   $m_name=$data['m_name'];
			   $session=$data['session'];
			   $shift=$data['shift'];
			   //mark obtained
			   $engin_materials_omark=$data['engin_materials_omark'];
			   $eng_2_omark=$data['eng_2_omark'];	 
			   $physics_1_omark=$data['physics_1_omark'];
			   $math_2_omark=$data['math_2_omark'];
			   $com_application_1_omark=$data['com_application_1_omark'];
			   $b_electricity_omark=$data['b_electricity_omark'];
			   $bangla_omark=$data['bangla_omark'];
			   //Mark Grade
			   $engin_materials_grade=$data['engin_materials_grade'];
			   $eng_2_grade=$data['eng_2_grade'];
			   $physics_1_grade=$data['physics_1_grade'];
			   $math_2_grade=$data['math_2_grade'];
			   $com_application_1_grade=$data['com_application_1_grade'];
			   $b_electricity_grade=$data['b_electricity_grade'];
			   $bangla_grade=$data['bangla_grade'];
			   //Mark grade points
               $engin_materials_point=$data['engin_materials_point'];
			   $eng_2_point=$data['eng_2_point'];
			   $physics_1_point=$data['physics_1_point'];
			   $math_2_point=$data['math_2_point'];
			   $com_application_1_point=$data['com_application_1_point'];
			   $b_electricity_point=$data['b_electricity_point'];
			   $bangla_point=$data['bangla_point'];
?> 
			     <div class="fix structure main_area">
				       <div class="fix area">
					       <div class="fix logo">
						        <img src="img/bteb.jpg" alt="">
								<h1 class="borad_name">BANGLADESH TECHNICAL EDUCATION BOARD</h1>
						   </div>
						   <div class="fix diploma_in_engineering">
						        <div class="fix examination_year">
								     <h1 class="diploma_engineering">DIPLOMA IN ENGINEERING</h1>
									 <p class="exam_year">Examination Year:<?php echo $examyear;?></p>
									 <p class="exam_year">( Held In <?php echo $held_in." "."$examyear";?> )</p>
									 <p class="serial">Serial No-624049</p> <p class="semester">second semester</p>
									 <p class="collge_name">Thakurgoan Polytechnic Institute</p>
									 <p class="technology"><b>Technology:AIDT</b></p>
									 <p class="academic_tran"><u>ACADEMIC TRANSCRIPT</u></p>
								</div>
						        <div class="fix gread_system">
								     <table class="border" border="1px solid #000">
									       <tr>
										       <td colspan="3">Grading System</td>  
										   </tr>
									       <tr>
										       <td class="tr_border">Class Interval</td>
										       <td>LetterG rade</td>
										       <td>Grade Point</td>
										   </tr>
									       <tr>
										       <td>80-100</td>
										       <td>A+</td>
										       <td>4.00</td>
										   </tr>
									       <tr>
										       <td>75-79</td>
										       <td>A</td>
										       <td>3.75</td>
										   </tr> 
									       <tr>
										       <td>70-74</td>
										       <td>A-</td>
										       <td>3.50</td>
										   </tr>
									       <tr>
										       <td>65-69</td>
										       <td>B+</td>
										       <td>3.25</td>
										   </tr>
										   <tr>
										       <td>60-64</td>
										       <td>B</td>
										       <td>3.00</td>
										   </tr>
										   <tr>
										       <td>55-59</td>
										       <td>B-</td>
										       <td>2.75</td>
										   </tr>
										   <tr>
										       <td>50-54</td>
										       <td>C+</td>
										       <td>2.50</td>
										   </tr>
										   <tr>
										       <td>45-49</td>
										       <td>C</td>
										       <td>2.25</td>
										   </tr>
										   <tr>
										       <td>40-44</td>
										       <td>D</td>
										       <td>2.00</td>
										   </tr>
										   <tr>
										       <td>00-39</td>
										       <td>F</td>
										       <td>0.00</td>
										   </tr>
									 </table>
								</div>
						   </div>
						   
						    <div class="fix studentdata">
							     <span class="stu_data"><b>Student's Name :<?php echo $s_name; ?></b></span><br>
								 <span class="stu_data"><b>Father's Name  :<?php echo $f_name; ?></b></span><br>
								 <span class="stu_data"><b>Mother's Name  :<?php echo $m_name?></span></b><br>
								 <span class="mark_roll"><b class="mark_roll">Board Roll No: <?php echo $roll;?></b> <b class="mark_roll">Reg:No: <?php echo $reg ;?></b> <b class="mark_roll">Session:<?php echo $session;?> </b><b class="mark_roll" id="mark_roll"><p class="shift">Shift:<?php echo $shift; ?></p></b></span>
							</div>
							<!--main table marksheet starts here-->
							<div class="fix mark_table">
								  <table class="table table-bordered">
									<thead>
									  <tr>
										<th class="mark_tr">SL. NO</th>
										<th class="mark_tr">Subject Code</th>
										<th class="mark_tr sub_width">Name of Subject</th>
										<th class="mark_tr">Full Marks</th>
										<th class="mark_tr">Marks Obtained</th>
										<th class="mark_tr">Grade Letter</th>
										<th class="mark_tr">Grade Point(GP)</th>
										<th class="mark_tr">Grade Point Average(GP)</th>
									  </tr>
									</thead>
									<tbody>
									  <tr class="mark_tr">
										<td>1</td>
										<td>1012</td>
										<td class="sub_width">Engineering Materials</td>
										<td>150</td>
										<td><?php echo $engin_materials_omark?></td>
										<td><?php echo $engin_materials_grade;?></td>
										<td><?php echo $engin_materials_point;?></td>
										<td rowspan="7"><p class="average_point"><?php echo $grade_average_2nd_seme;?></p></td>
									  </tr>
									  <tr class="mark_tr">
										<td>2</td>
										<td>5722</td>
										<td class="sub_width">English - 2</td>
										<td>150</td>
										<td><?php echo $eng_2_omark ;?></td>
										<td><?php echo $eng_2_grade?></td>
										<td><?php echo $eng_2_point ;?></td>
									  </tr>
									  <tr class="mark_tr">
										<td>3</td>
										<td>5912</td>
										<td class="sub_width">Physics - 1</td>
										<td>200</td>
										<td><?php echo $physics_1_omark ;?></td>
										<td><?php echo $physics_1_grade;?></td>
										<td><?php echo $physics_1_point;?></td>
										 
									  </tr>
									   <tr class="mark_tr">
										<td>4</td>
										<td>5921</td>
										<td class="sub_width">Mathematics - 2</td>
										<td>200</td>
										<td><?php echo $math_2_omark ;?></td>
										<td><?php echo $math_2_grade; ?></td>
										<td><?php echo $math_2_point;?></td> 
									  </tr>
									   <tr class="mark_tr">
										<td>5</td>
										<td>6621</td>
										<td class="sub_width">Computer Application - 1</td>
										<td>100</td>
										<td><?php echo $com_application_1_omark ;?></td>
										<td><?php echo $com_application_1_grade;?></td>
										<td><?php echo $com_application_1_point;?></td>
									   
									  </tr>
									   <tr class="mark_tr">
										<td>6</td>
										<td>6711</td>
										<td class="sub_width">Basic Electricty</td>
										<td>200</td>
										<td><?php echo $b_electricity_omark; ?></td>
										<td><?php echo $b_electricity_grade;?></td>
										<td><?php echo $b_electricity_point;?></td>
										 
									  </tr>
									  <tr class="mark_tr">
										<td>7</td>
										<td>5711</td>
										<td class="sub_width">Bangla</td>
										<td>150</td>
										<td><?php echo $bangla_omark;?></td>
										<td><?php echo $bangla_grade;?></td>
										<td><?php echo $bangla_point;?></td>
										 
									  </tr>
									 
									</tbody>
								  </table>
								</div>
	                           <!--Teacher Signature-->
							    <div class="fix teacher_signature">
							        <hr class="hrl"/><p class="signature floatleft">Prepared By</p><hr class="hrr"/><p class="signature floatright">Head of Department</p>
							        <hr class="hrl"/><p class="signature floatleft vice">Vice Principal By</p><hr class="hrr"/><p class="signature floatright principle">Principal<br>Thakurgaon Polytechnic</p>
							   </div>
					   </div>
				 </div>
				
			   <?php
			   }
			}
			 else{ echo "<h1 style='text-align:center'>Result Not Found";}
		 }
		 //AIDT MARKSHEET THIRD SEMESTER
		 else if($semester=="third_semester"){
		    $roll=$_POST['roll'];
			$sql="SELECT * FROM `aidt` WHERE roll='$roll'";
			$result=$admin->link->query($sql);
			if($data=$result->num_rows>0){
			while($data=$result->fetch_assoc()){
			    //examination year
			   $third_semester=$data['seme_3rd'];
			   $examyear=$data['exam_year_3rd'];
			   $held_in=$data['held_in_3rd'];
			   $grade_average_3rd_seme=$data['grade_average_3rd_seme'];
			   //student data
			   $roll=$data['roll'];
			   $reg=$data['reg'];
			   $s_name=$data['s_name'];
			   $f_name=$data['f_name'];
			   $m_name=$data['m_name'];
			   $session=$data['session'];
			   $shift=$data['shift'];
			   //mark obtained
			   $arch_design_drawing_omark=$data['arch_design_drawing_omark'];
			   $building_finish_materials_omark=$data['building_finish_materials_omark'];	 
			   $com_application_2_omark=$data['com_application_2_omark'];
			   $b_electronics_omark=$data['b_electronics_omark'];
			   $math_3_omark=$data['math_3_omark'];
			   $physics_2_omark=$data['physics_2_omark'];
			   $social_s1_omark=$data['social_s1_omark'];
			   //Mark Grade
			   $arch_design_drawing_grade=$data['arch_design_drawing_grade'];
			   $building_finish_materials_grade=$data['building_finish_materials_grade'];
			   $com_application_2_grade=$data['com_application_2_grade'];
			   $b_electronics_grade=$data['b_electronics_grade'];
			   $math_3_grade=$data['math_3_grade'];
			   $physics_2_grade=$data['physics_2_grade'];
			   $social_s1_grade=$data['social_s1_grade'];
			   //Mark grade points
               $arch_design_drawing_point=$data['arch_design_drawing_point'];
			   $building_finish_materials_point=$data['building_finish_materials_point'];
			   $com_application_2_point=$data['com_application_2_point'];
			   $b_electronics_point=$data['b_electronics_point'];
			   $math_3_point=$data['math_3_point'];
			   $physics_2_point=$data['physics_2_point'];
			   $social_s1_point=$data['social_s1_point'];
?> 
			     <div class="fix structure main_area">
				       <div class="fix area">
					       <div class="fix logo">
						        <img src="img/bteb.jpg" alt="">
								<h1 class="borad_name">BANGLADESH TECHNICAL EDUCATION BOARD</h1>
						   </div>
						   <div class="fix diploma_in_engineering">
						       <div class="fix examination_year">
								     <h1 class="diploma_engineering">DIPLOMA IN ENGINEERING</h1>
									 <p class="exam_year">Examination Year:<?php echo $examyear;?></p>
									 <p class="exam_year">( Held In <?php echo $held_in." "."$examyear";?> )</p>
									 <p class="serial">Serial No-624049</p> <p class="semester">third semester</p>
									 <p class="collge_name">Thakurgoan Polytechnic Institute</p>
									 <p class="technology"><b>Technology:AIDT</b></p>
									 <p class="academic_tran"><u>ACADEMIC TRANSCRIPT</u></p>
								</div>
						        <div class="fix gread_system">
								     <table class="border" border="1px solid #000">
									       <tr>
										       <td colspan="3">Grading System</td>  
										   </tr>
									       <tr>
										       <td class="tr_border">Class Interval</td>
										       <td>LetterG rade</td>
										       <td>Grade Point</td>
										   </tr>
									       <tr>
										       <td>80-100</td>
										       <td>A+</td>
										       <td>4.00</td>
										   </tr>
									       <tr>
										       <td>75-79</td>
										       <td>A</td>
										       <td>3.75</td>
										   </tr> 
									       <tr>
										       <td>70-74</td>
										       <td>A-</td>
										       <td>3.50</td>
										   </tr>
									       <tr>
										       <td>65-69</td>
										       <td>B+</td>
										       <td>3.25</td>
										   </tr>
										   <tr>
										       <td>60-64</td>
										       <td>B</td>
										       <td>3.00</td>
										   </tr>
										   <tr>
										       <td>55-59</td>
										       <td>B-</td>
										       <td>2.75</td>
										   </tr>
										   <tr>
										       <td>50-54</td>
										       <td>C+</td>
										       <td>2.50</td>
										   </tr>
										   <tr>
										       <td>45-49</td>
										       <td>C</td>
										       <td>2.25</td>
										   </tr>
										   <tr>
										       <td>40-44</td>
										       <td>D</td>
										       <td>2.00</td>
										   </tr>
										   <tr>
										       <td>00-39</td>
										       <td>F</td>
										       <td>0.00</td>
										   </tr>
									 </table>
								</div>
						   </div>
						   
						    <div class="fix studentdata">
							     <span class="stu_data"><b>Student's Name :<?php echo $s_name; ?></b></span><br>
								 <span class="stu_data"><b>Father's Name  :<?php echo $f_name; ?></b></span><br>
								 <span class="stu_data"><b>Mother's Name  :<?php echo $m_name?></span></b><br>
								 <span class="mark_roll"><b class="mark_roll">Board Roll No: <?php echo $roll;?></b> <b class="mark_roll">Reg:No: <?php echo $reg ;?></b> <b class="mark_roll">Session:<?php echo $session;?> </b><b class="mark_roll" id="mark_roll"><p class="shift">Shift:<?php echo $shift; ?></p></b></span>
							</div>
							<!--main table marksheet starts here-->
							<div class="fix mark_table">
								  <table class="table table-bordered">
									<thead>
									  <tr>
										<th class="mark_tr">SL. NO</th>
										<th class="mark_tr">Subject Code</th>
										<th class="mark_tr sub_width">Name of Subject</th>
										<th class="mark_tr">Full Marks</th>
										<th class="mark_tr">Marks Obtained</th>
										<th class="mark_tr">Grade Letter</th>
										<th class="mark_tr">Grade Point(GP)</th>
										<th class="mark_tr">Grade Point Average(GP)</th>
									  </tr>
									</thead>
									<tbody>
									  <tr class="mark_tr">
										<td>1</td>
										<td>8731</td>
										<td class="sub_width">Architectural Design & D</td>
										<td>250</td>
										<td><?php echo $arch_design_drawing_omark?></td>
										<td><?php echo $arch_design_drawing_grade;?></td>
										<td><?php echo $arch_design_drawing_point;?></td>
										<td rowspan="7"><p class="average_point"><?php echo $grade_average_3rd_seme;?></p></td>
									  </tr>
									  <tr class="mark_tr">
										<td>2</td>
										<td>8732</td>
										<td class="sub_width">Building & Finish Materials</td>
										<td>100</td>
										<td><?php echo $building_finish_materials_omark ;?></td>
										<td><?php echo $building_finish_materials_grade?></td>
										<td><?php echo $building_finish_materials_point ;?></td>
									  </tr>
									  <tr class="mark_tr">
										<td>3</td>
										<td>6632</td>
										<td class="sub_width">Comptuer Application - 2</td>
										<td>100</td>
										<td><?php echo $com_application_2_omark ;?></td>
										<td><?php echo $com_application_2_grade;?></td>
										<td><?php echo $com_application_2_point;?></td>
										 
									  </tr>
									   <tr class="mark_tr">
										<td>4</td>
										<td>6811</td>
										<td class="sub_width">Basic Electronics</td>
										<td>200</td>
										<td><?php echo $b_electronics_omark ;?></td>
										<td><?php echo $b_electronics_grade; ?></td>
										<td><?php echo $b_electronics_point;?></td> 
									  </tr>
									   <tr class="mark_tr">
										<td>5</td>
										<td>5931</td>
										<td class="sub_width">Mathematics - 3</td>
										<td>200</td>
										<td><?php echo $math_3_omark ;?></td>
										<td><?php echo $math_3_grade;?></td>
										<td><?php echo $math_3_point;?></td>
									   
									  </tr>
									   <tr class="mark_tr">
										<td>6</td>
										<td>5922</td>
										<td class="sub_width">Physics - 2</td>
										<td>200</td>
										<td><?php echo $physics_2_omark; ?></td>
										<td><?php echo $physics_2_grade;?></td>
										<td><?php echo $physics_2_point;?></td>
										 
									  </tr>
									  <tr class="mark_tr">
										<td>7</td>
										<td>5811</td>
										<td class="sub_width">Social Science - 1</td>
										<td>100</td>
										<td><?php echo $social_s1_omark;?></td>
										<td><?php echo $social_s1_grade;?></td>
										<td><?php echo $social_s1_point;?></td>
										 
									  </tr>
									 
									</tbody>
								  </table>
								</div>
	                           <!--Teacher Signature-->
							   <div class="fix teacher_signature">
							        <hr class="hrl"/><p class="signature floatleft">Prepared By</p><hr class="hrr"/><p class="signature floatright">Head of Department</p>
							        <hr class="hrl"/><p class="signature floatleft vice">Vice Principal By</p><hr class="hrr"/><p class="signature floatright principle">Principal<br>Thakurgaon Polytechnic</p>
							   </div>
					   </div>
				 </div>
		 
				
			   <?php
			   }
			}
			 else{ echo "<h1 style='text-align:center'>Result Not Found";}
		 }
	}
	}
   else {echo "<h1 style='text-align:center'>Wrong Input</h1>";}   
?>

 
