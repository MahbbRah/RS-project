<?php require_once '../head.php';?>

<div class="col-md-8">
            <div class="st-info-form">
                            <form action="" method="post">
                                <h3 class="dept-title">Select Your Subject &amp; Input Password</h3>
                                <div class="form-group3">
                                     <label class="sub-name">Subject:</label>
                                     <select name="subject">
                                        <option value="">Select One</option>
                                        <option value="programing">Programming Languaage-1</option>
                                        <option value="com_app">Computer Application-2</option>
                                        <option value="d_elec">Digital Electronics-1</option>
                                        <option value="i_elec">Industrial Electronics</option>
                                        <option value="math">Mathematics-3</option>
                                        <option value="physics">Physics -2</option>
                                        <option value="social">Social Science-1</option>
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
       
        // programing 
        elseif ($sub == 'programing' && $pass == $password && $subject == '3programing' && $department == 'computer') {
           session_start();
           $_SESSION['com_programing'] = $row['subject'];
           header('location: ../computer/seme_3_shift_2.php');
           
        }
       
        // com application 
        elseif ($sub == 'com_app' && $pass == $password && $subject == '3com_application' && $department == 'computer') {
           session_start();
           $_SESSION['com_application'] = $row['subject'];
           header('location: ../computer/seme_3_shift_2.php');
           
        }

        // d electronice  
        elseif ($sub == 'd_elec' && $pass == $password && $subject == '3d_electronics' && $department == 'computer') {
            session_start();
            $_SESSION['com_d_elec'] = $row['subject'];
           header('location: ../computer/seme_3_shift_2.php');
           
        }

        // ind electronics 
        elseif ($sub == 'i_elec' && $pass == $password && $subject == '3i_electronics' && $department == 'computer') {
            session_start();
           $_SESSION['com_i_elec'] = $row['subject'];
           header('location: ../computer/seme_3_shift_2.php');
           
        }

        // math 
        elseif ($sub == 'math' && $pass == $password && $subject == '3math' && $department == 'computer') {
            session_start();
           $_SESSION['com_math'] = $row['subject'];
           header('location: ../computer/seme_3_shift_2.php');
           
        }

        // physics 
        elseif ($sub == 'physics' && $pass == $password && $subject == '3physics' && $department == 'computer') {
            session_start();
           $_SESSION['com_physics'] = $row['subject'];
           header('location: ../computer/seme_3_shift_2.php');
           
        }

        // social 
        elseif ($sub == 'social' && $pass == $password && $subject == '3social' && $department == 'computer') {
            session_start();
           $_SESSION['com_social'] = $row['subject'];
           header('location: ../computer/seme_3_shift_2.php');
           
        }
        else{
            echo "<script>alert('Password Wrong !!');</script>";
        }



    }
}

?>