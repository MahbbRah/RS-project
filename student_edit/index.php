         <?php	
		   include '../db_configure.php'; 
		   include '../class.php';
		   $admin=new admin();  
	    ?> 
			<!---data select-->
			<?php   
			       $roll=$rollErr=$reg=$s_name=$f_name=$m_name=$session=$technology=$department=$semester='';
				   if($_SERVER["REQUEST_METHOD"]=="POST"){
							if(isset($_POST['submit'])){
							 $department=$_POST["department"];
							      if($department=="computer"){ //select Department Condition
										$roll=$_POST["roll"];
										$sql="SELECT * FROM `computer` WHERE roll='$roll'";
										$result=$admin->link->query($sql);
											if($row=$result->num_rows>0)
											{
												 while($row=$result->fetch_assoc())
												 {
													$s_name=$row['s_name'];
													$roll=$row['roll'];
													$reg=$row['reg'];
													$f_name=$row['f_name'];
													$m_name=$row['m_name'];
													$session=$row['session'];
													$technology=$row['technology']; 
												 } 
											}
											else{$rollErr="is wrong roll";}
                                          											
									}
									else if( $department=="food"){ //select Department Condition
											$roll=$_POST["roll"];
											$sql="SELECT * FROM `food` WHERE roll='$roll'";
											$result=$admin->link->query($sql);
												if($row=$result->num_rows>0)
												{
													 while($row=$result->fetch_assoc())
													 {
														$s_name=$row['s_name'];
														$roll=$row['roll'];
														$reg=$row['reg'];
														$f_name=$row['f_name'];
														$m_name=$row['m_name'];
														$session=$row['session'];
														$technology=$row['technology'];		 
													 }
												}
												else{$rollErr="is wrong roll";}
								     	}
										else if( $department=="rac"){ //select Department Condition
											$roll=$_POST["roll"];
											$sql="SELECT * FROM `rac` WHERE roll='$roll'";
											$result=$admin->link->query($sql);
												if($row=$result->num_rows>0)
												{
													 while($row=$result->fetch_assoc())
													 {
														$s_name=$row['s_name'];
														$roll=$row['roll'];
														$reg=$row['reg'];
														$f_name=$row['f_name'];
														$m_name=$row['m_name'];
														$session=$row['session'];
														$technology=$row['technology'];				 
													 }
												}	
												else{$rollErr="is wrong roll";}
								     	}
							      
						               	else if( $department=="aidt"){ //select Department Condition
											$roll=$_POST["roll"];
											$sql="SELECT * FROM `aidt` WHERE roll='$roll'";
											$result=$admin->link->query($sql);
												if($row=$result->num_rows>0)
												{
													 while($row=$result->fetch_assoc())
													 {
														$s_name=$row['s_name'];
														$roll=$row['roll'];
														$reg=$row['reg'];
														$f_name=$row['f_name'];
														$m_name=$row['m_name'];
														$session=$row['session'];
														$technology=$row['technology'];
													 }
												}
												else{$rollErr="is wrong roll";}
								     	}
								}
			//Update Condition
				else{
					if(isset($_POST['update'])){
					  $department=$_POST["department"];		   
					   if($department=="computer"){//update select Computer
						   $roll=$_POST['roll'];
						   $reg=$_POST['reg'];
						   $s_name=$_POST['s_name'];
						   $f_name=$_POST['f_name'];
						   $technology=$_POST['department'];
						   $m_name=$_POST['m_name'];
						   $session=$_POST['session'];
						   $query="UPDATE `computer` SET
						   roll='$roll',
						   reg='$reg',
						   s_name='$s_name',
						   f_name='$f_name',
						   m_name='$m_name',
						   technology='$technology',
						   session='$session'
						   WHERE roll=$roll"; 
						   $creat=$admin->update($query);
					   }
					  else if($department=="food"){//update select food
						   $roll=$_POST['roll'];
						   $reg=$_POST['reg'];
						   $s_name=$_POST['s_name'];
						   $f_name=$_POST['f_name'];
						   $technology=$_POST['department'];
						   $m_name=$_POST['m_name'];
						   $session=$_POST['session'];
						   $query="UPDATE `food` SET
						   roll='$roll',
						   reg='$reg',
						   s_name='$s_name',
						   f_name='$f_name',
						   m_name='$m_name',
						   technology='$technology',
						   session='$session'
						   WHERE roll=$roll"; 
						   $creat=$admin->update($query);
					   }
					   else if($department=="rac"){//update select rac
						   $roll=$_POST['roll'];
						   $reg=$_POST['reg'];
						   $s_name=$_POST['s_name'];
						   $f_name=$_POST['f_name'];
						   $technology=$_POST['department'];
						   $m_name=$_POST['m_name'];
						   $session=$_POST['session'];
						   $query="UPDATE `rac` SET
						   roll='$roll',
						   reg='$reg',
						   s_name='$s_name',
						   f_name='$f_name',
						   m_name='$m_name',
						   technology='$technology',
						   session='$session'
						   WHERE roll=$roll"; 
						   $creat=$admin->update($query);
					   }
					   else if($department=="aidt"){//update select aidt
						   $roll=$_POST['roll'];
						   $reg=$_POST['reg'];
						   $s_name=$_POST['s_name'];
						   $f_name=$_POST['f_name'];
						   $technology=$_POST['department'];
						   $m_name=$_POST['m_name'];
						   $session=$_POST['session'];
						   $query="UPDATE `aidt` SET
						   roll='$roll',
						   reg='$reg',
						   s_name='$s_name',
						   f_name='$f_name',
						   m_name='$m_name',
						   technology='$technology',
						   session='$session'
						   WHERE roll=$roll"; 
						   $creat=$admin->update($query);
					   }
				   }
				}
			
		}
	?>
	<!--data update-->
	     
		 
<?php require_once 'head.php';?>

                     <div class="col-md-8">
                         <div class="submit-info-edit">
                             <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                 <h3 class="form-title">Edit data</h3>
                                 <div class="form-group3">
                                     <label class="sub-name2">Select department:</label>
                                     <select  name="department">
                                         <option value="0" selected="selected">Select One</option>
                                         <option value="computer">Computer</option>
                                         <option value="food">Food</option>
                                         <option value="rac">RAC</option>
                                         <option value="aidt">AIDT</option>
                                     </select>
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Enter roll number:</label>
                                     <input type="text" name="roll"  placeholder="ex: 624079"></input> 
                                   </div>                                
                                 <div class="form-group23">
                                     <input type="submit" name="submit" value="Submit"></input>
                                 </div>
                             </form>
                         </div>
                     </div>
					 
					  <div class="col-md-8">
                         <div class="submit-info-edit2">
                             <form action="" method="POST">
                                 <h3 class="form-title">Edit Student Data</h3>
								  
								  <div class="form-group3">
                                     <label class="sub-name2">roll number:</label>
									 <input type="text" name="roll" value="<?php echo $roll." ".$rollErr." ";?>" ></input>
                                    </div>

								 <div class="form-group3">
										 <label class="sub-name2">reg number:</label>
										 <input type="text" name="reg" value="<?php echo  $reg; ?>" >
									</div>

								 <div class="form-group3">
                                     <label class="sub-name2">department:</label>
                                     <select name="department" >
                                         <option selected="" value="<?php echo $technology; ?>"><?php echo $technology; ?></option>
                                         <option value="computer">Computer</option>
                                         <option value="food">Food</option>
                                         <option value="rac">RAC</option>
                                         <option value="aidt">AIDT</option>
                                     </select>
                                 </div>

								 <div class="form-group3">
										 <label class="sub-name2">Student Name:</label>
										 <input type="text" name="s_name" value="<?php echo $s_name; ?>" ></input>
									 </div>

								 <div class="form-group3">
								 <label class="sub-name2" >Father Name:</label>
										 <input type="text" name="f_name" value="<?php echo $f_name; ?>" ></input>
									</div>

								 <div class="form-group3">
								 		<label class="sub-name2" >Mother Name:</label>
										 <input type="text" name="m_name" value="<?php echo $m_name; ?>" ></input>
									</div>
									
								 <div class="form-group3">
                                     <label class="sub-name2">Session:</label>
                                     <select name="session">
                                     	<option selected="" value="<?php echo $session; ?>"><?php echo $session; ?></option>
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
                                  
                                 <div class="form-group23">
                                    <input type="submit" name="update" value="Update"></input>
                                 </div>		
                             </form>
                         </div>
                     </div>
            
        
<?php require_once '../footer.php';?>