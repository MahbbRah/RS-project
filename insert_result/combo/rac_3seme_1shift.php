<?php require_once '../head.php';?>

<div class="col-md-8">
            <div class="st-info-form">
                            <form action="" method="post">
                                <h3 class="dept-title">Select Your Subject &amp; Input Password</h3>
                                <div class="form-group3">
                                     <label class="sub-name">Subject:</label>
                                     <select name="subject">
                                        <option value="">Select One</option>
                                        <option value="cycles">Refrigeration Cycles &amp; Component</option>
                                        <option value="elec">Basic electronics</option>
                                        <option value="com_app">Computer application-2</option>
                                        <option value="math">Math-3</option>
                                        <option value="physics">Physics-2</option>
                                        <option value="social">Social science-1</option>
                                        <option value="english">English-2</option>
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
       
        // cycles 
        elseif ($sub == 'cycles' && $pass == $password && $subject == '3cycles' && $department == 'rac') {
           session_start();
           $_SESSION['rac_cycles'] = $row['subject'];
           header('location: ../rac/seme_3_shift_1.php');
           
        }
       
        // electronics 
        elseif ($sub == 'elec' && $pass == $password && $subject == '3electronics' && $department == 'rac') {
           session_start();
           $_SESSION['rac_electronics'] = $row['subject'];
           header('location: ../rac/seme_3_shift_1.php');
           
        }

        // com application  
        elseif ($sub == 'com_app' && $pass == $password && $subject == '3com_application' && $department == 'rac') {
            session_start();
            $_SESSION['rac_com_app'] = $row['subject'];
           header('location: ../rac/seme_3_shift_1.php');
           
        }

        // math 
        elseif ($sub == 'math' && $pass == $password && $subject == '3math' && $department == 'rac') {
            session_start();
           $_SESSION['rac_math'] = $row['subject'];
           header('location: ../rac/seme_3_shift_1.php');
           
        }

        // physics 
        elseif ($sub == 'physics' && $pass == $password && $subject == '3physics' && $department == 'rac') {
            session_start();
           $_SESSION['rac_physics'] = $row['subject'];
           header('location: ../rac/seme_3_shift_1.php');
           
        }

        // social
        elseif ($sub == 'social' && $pass == $password && $subject == '3social' && $department == 'rac') {
            session_start();
           $_SESSION['rac_social'] = $row['subject'];
           header('location: ../rac/seme_3_shift_1.php');
           
        }

        // english 
        elseif ($sub == 'english' && $pass == $password && $subject == '3english' && $department == 'rac') {
            session_start();
           $_SESSION['rac_english'] = $row['subject'];
           header('location: ../rac/seme_3_shift_1.php');
           
        }
        else{
            echo "<script>alert('Password Wrong !!');</script>";
        }



    }
}

?>