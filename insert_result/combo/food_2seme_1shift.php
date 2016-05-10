<?php require_once '../head.php';?>

<div class="col-md-8">
            <div class="st-info-form">
                            <form action="" method="post">
                                <h3 class="dept-title">Select Your Subject &amp; Input Password</h3>
                                <div class="form-group3">
                                     <label class="sub-name">Subject:</label>
                                     <select name="subject">
                                        <option value="">Select One</option>
                                        <option value="bangla">Bangla</option>
                                        <option value="english">English-2</option>
                                        <option value="physics">Physics-1</option>
                                        <option value="math">Mathematics-2</option>
                                        <option value="bsto">Basic stoichometry</option>
                                        <option value="com_app">Computer application-1</option>
                                        <option value="elec">Basic Electricity</option>
                                     </select>
                                </div>
                                <div class="form-group3">
                                     <label class="sub-name">Password:</label>
                                     <input type="password" name="password" placeholder="Password"></input>
                                </div>
                                   
                                <div class="form-group23">
                                     <input required type="submit" value="Submit" name="submit">
                                 </div>
                             </form>          
                          
                            
            </div>
        </div>


<?php require_once '../../footer.php';?>


<?php 
    
     $sql = "SELECT * FROM allsubject";
    $result = $conn->query($sql);
    while($row=$result->fetch()){
    $department = $row['department'];
    $subject = $row['subject'];
    $password = $row['password'];
 
    if (isset($_POST['submit'])) {
        $sub = $_POST['subject'];
        $pass = $_POST['password'];
        // blank check ............
        if ($sub == '' or $pass == '') {
            echo "<script>alert('Select a subject & input password!!');</script>";
        }
       
      

         // bangla 
       elseif ($sub == 'bangla' && $pass == $password && $subject == '2bangla' && $department == 'food') {
            session_start();
           $_SESSION['food_bangla'] = $row['subject'];
           header('location: ../food/seme_2_shift_1.php');
           
        }
       
        // english 
        elseif ($sub == 'english' && $pass == $password && $subject == '2english' && $department == 'food') {
            session_start();
           $_SESSION['food_english'] = $row['subject'];
           header('location: ../food/seme_2_shift_1.php');
           
        }

        // physics  
        elseif ($sub == 'physics' && $pass == $password && $subject == '2physics' && $department == 'food') {
            session_start();
            $_SESSION['food_physics'] = $row['subject'];
           header('location: ../food/seme_2_shift_1.php');
           
        }

        // math 
        elseif ($sub == 'math' && $pass == $password && $subject == '2math' && $department == 'food') {
            session_start();
           $_SESSION['food_math'] = $row['subject'];
           header('location: ../food/seme_2_shift_1.php');
           
        }

          // materials 
        elseif ($sub == 'bsto' && $pass == $password && $subject == '2stoichiometry' && $department == 'food') {
           session_start();
           $_SESSION['food_bsto'] = $row['subject'];
           header('location: ../food/seme_2_shift_1.php');
           
        }

        // com application 
        elseif ($sub == 'com_app' && $pass == $password && $subject == '2com_application' && $department == 'food') {
            session_start();
           $_SESSION['food_com_app'] = $row['subject'];
           header('location: ../food/seme_2_shift_1.php');
           
        }

        // electricity
        elseif ($sub == 'elec' && $pass == $password && $subject == '2electricity' && $department == 'food') {
            session_start();
           $_SESSION['food_elec'] = $row['subject'];
           header('location: ../food/seme_2_shift_1.php');
           
        }

       

        else{
            echo "<script>alert('Password Wrong !!');</script>";
        }



    }
}

?>