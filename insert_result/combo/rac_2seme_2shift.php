<?php require_once '../head.php';?>

<div class="col-md-8">
            <div class="st-info-form">
                            <form action="" method="post">
                                <h3 class="dept-title">Select Your Subject &amp; Input Password</h3>
                                <div class="form-group3">
                                     <label class="sub-name">Subject:</label>
                                     <select name="subject">
                                        <option value="">Select One</option>
                                        <option value="materials">Engineering materials</option>
                                        <option value="bangla">Bangla</option>
                                        <option value="physics">physics-1</option>
                                        <option value="math">Mathematics-2</option>
                                        <option value="com_app">Computer application-1</option>
                                        <option value="elec">Basic Electronics</option>
                                        <option value="drawing">Refrigeration Engineering drawing</option>
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
       
        // materials 
        elseif ($sub == 'materials' && $pass == $password && $subject == '2materials' && $department == 'rac') {
           session_start();
           $_SESSION['rac_materials'] = $row['subject'];
           header('location: ../rac/seme_2_shift_2.php');
           
        }
       
        // bangla 
        elseif ($sub == 'bangla' && $pass == $password && $subject == '2bangla' && $department == 'rac') {
           session_start();
           $_SESSION['rac_bangla'] = $row['subject'];
           header('location: ../rac/seme_2_shift_2.php');
           
        }

        // physics  
        elseif ($sub == 'physics' && $pass == $password && $subject == '2physics' && $department == 'rac') {
            session_start();
            $_SESSION['rac_physics'] = $row['subject'];
           header('location: ../rac/seme_2_shift_2.php');
           
        }

        // math 
        elseif ($sub == 'math' && $pass == $password && $subject == '2math' && $department == 'rac') {
            session_start();
           $_SESSION['rac_math'] = $row['subject'];
           header('location: ../rac/seme_2_shift_2.php');
           
        }

        // com application 
        elseif ($sub == 'com_app' && $pass == $password && $subject == '2com_application' && $department == 'rac') {
            session_start();
           $_SESSION['rac_com_app'] = $row['subject'];
           header('location: ../rac/seme_2_shift_2.php');
           
        }

        // electricity
        elseif ($sub == 'elec' && $pass == $password && $subject == '2electricity' && $department == 'rac') {
            session_start();
           $_SESSION['rac_elec'] = $row['subject'];
           header('location: ../rac/seme_2_shift_2.php');
           
        }

        // Rac Drawing 
        elseif ($sub == 'drawing' && $pass == $password && $subject == '2rac_drawing' && $department == 'rac') {
            session_start();
           $_SESSION['rac_drawing'] = $row['subject'];
           header('location: ../rac/seme_2_shift_2.php');
           
        }
        else{
            echo "<script>alert('Password Wrong !!');</script>";
        }



    }
}

?>