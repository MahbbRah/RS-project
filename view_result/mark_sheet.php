<?php require_once 'head.php';?>

                     <div class="col-md-8">
                         <div class="submit-info">
                             <form action="mark_show.php" method="POST">
                                 <h3 class="form-title">Search mark sheet here</h3>
                                 <div class="form-group3">
                                     <label class="sub-name2">Select department:</label>
                                     <select  name="department">
                                         <option selected="">Select One</option>
                                         <option value="computer">Computer</option>
                                         <option value="food">Food</option>
                                         <option value="rac">RAC</option>
                                         <option value="aidt">AIDT</option>
                                     </select>
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2"> Select semester:</label>
                                     <select  name="semester">
                                         <option selected="" value="0">Select One</option>
                                         <option value="first_semester">1st Semester</option>
                                         <option value="second_semester">2nd Semester</option>
                                         <option value="third_semester">3rd Semester</option>
                                     </select>
                                 </div>
                                 <div class="form-group3s">
                                    <label class="sub-name2">Enter roll number:</label>
                                     <input type="text" name="roll"placeholder="ex: 624079"></input>
                                 </div>
							 
                                 <div class="form-group23">
                                     <input type="submit" name="submit" value="Submit"></input>
                                 </div>
                             </form>
                         </div>
                     </div>
              
        
    	
<?php require_once '../footer.php';?>
 
