<?php require_once '../head.php';?>

<div class="col-md-8">
            <div class="st-info-form">
                            <form action="" method="post">
                                <h3 class="dept-title">Select Your Subject &amp; Input Password</h3>
                                <div class="form-group3">
                                     <label class="sub-name">Subject:</label>
                                     <select name="subject">
                                        <option value="">Select One</option>
                                        <option value="drawing">Engineering Drawing</option>
                                        <option value="english">English-1</option>
                                        <option value="phy_edu">Physical Education</option>
                                        <option value="math">Mathematics-1</option>
                                        <option value="chemistry">Chemistry</option>
                                        <option value="fundamentals">Chemical &amp; Food Plant Fundamentals</option>
                                        <option value="bwp">Basic workshop practice</option>
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
       
        // drawing 
        elseif ($sub == 'drawing' && $pass == $password && $subject == '1drawing' && $department == 'food') {
           session_start();
           $_SESSION['food_drawing'] = $row['subject'];
           header('location: ../food/seme_1_shift_1.php');
           
        }
       
        // english 
        elseif ($sub == 'english' && $pass == $password && $subject == '1english' && $department == 'food') {
           session_start();
           $_SESSION['food_english'] = $row['subject'];
           header('location: ../food/seme_1_shift_1.php');
           
        }

        // physical edu 
        elseif ($sub == 'phy_edu' && $pass == $password && $subject == '1physical_edu' && $department == 'food') {
            session_start();
            $_SESSION['food_physical'] = $row['subject'];
           header('location: ../food/seme_1_shift_1.php');
           
        }

        // math 
        elseif ($sub == 'math' && $pass == $password && $subject == '1math' && $department == 'food') {
            session_start();
           $_SESSION['food_math'] = $row['subject'];
           header('location: ../food/seme_1_shift_1.php');
           
        }

        // chemistry 
        elseif ($sub == 'chemistry' && $pass == $password && $subject == '1chemistry' && $department == 'food') {
            session_start();
           $_SESSION['food_chemistry'] = $row['subject'];
           header('location: ../food/seme_1_shift_1.php');
           
        }

        // Graphics 
        elseif ($sub == 'fundamentals' && $pass == $password && $subject == '1fundamental' && $department == 'food') {
            session_start();
           $_SESSION['food_fundamentals'] = $row['subject'];
           header('location: ../food/seme_1_shift_1.php');
           
        }

        // b workshop p 
        elseif ($sub == 'bwp' && $pass == $password && $subject == '1b_workshop' && $department == 'food') {
            session_start();
           $_SESSION['food_bwp'] = $row['subject'];
           header('location: ../food/seme_1_shift_1.php');
           
        }

        else{
            echo "<script>alert('Password Wrong !!');</script>";
        }



    }
}

?>