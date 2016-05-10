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
                                        <option value="math">Mathematics-1</option>
                                        <option value="chemistry">Chemistry</option>
                                        <option value="fundamental">Computer Fundamental</option>
                                        <option value="electricity">Basic Electricity</option>
                                        <option value="electronics">Basic Electronics</option>
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
        elseif ($sub == 'drawing' && $pass == $password && $subject == 'drawing' && $department == 'computer') {
           session_start();
           $_SESSION['com_drawing'] = $row['subject'];
           header('location: ../computer/seme_1_shift_1.php');
           
        }
       
        // english 
        elseif ($sub == 'english' && $pass == $password && $subject == 'english1' && $department == 'computer') {
           session_start();
           $_SESSION['com_english'] = $row['subject'];
           header('location: ../computer/seme_1_shift_1.php');
           
        }

        // math 
        elseif ($sub == 'math' && $pass == $password && $subject == 'math1' && $department == 'computer') {
            session_start();
            $_SESSION['com_math'] = $row['subject'];
           header('location: ../computer/seme_1_shift_1.php');
           
        }

        // chemistry 
        elseif ($sub == 'chemistry' && $pass == $password && $subject == 'chemistry' && $department == 'computer') {
            session_start();
           $_SESSION['com_chemistry'] = $row['subject'];
           header('location: ../computer/seme_1_shift_1.php');
           
        }

        // fundamental 
        elseif ($sub == 'fundamental' && $pass == $password && $subject == 'com_fundamental' && $department == 'computer') {
            session_start();
           $_SESSION['com_fundamental'] = $row['subject'];
           header('location: ../computer/seme_1_shift_1.php');
           
        }

        // electricity 
        elseif ($sub == 'electricity' && $pass == $password && $subject == 'electricity' && $department == 'computer') {
            session_start();
           $_SESSION['com_electricity'] = $row['subject'];
           header('location: ../computer/seme_1_shift_1.php');
           
        }

        // electronics 
        elseif ($sub == 'electronics' && $pass == $password && $subject == 'electronics' && $department == 'computer') {
            session_start();
           $_SESSION['com_electronics'] = $row['subject'];
           header('location: ../computer/seme_1_shift_1.php');
           
        }
        else{
            echo "<script>alert('Password Wrong !!');</script>";
        }



    }
}

?>