<?php require_once '../head.php';?>

<div class="col-md-8">
            <div class="st-info-form">
                            <form action="" method="post">
                                <h3 class="dept-title">Select Your Subject &amp; Input Password</h3>
                                <div class="form-group3">
                                     <label class="sub-name">Subject:</label>
                                     <select name="subject">
                                        <option value="">Select One</option>
                                        <option value="english">English-2</option>
                                        <option value="phy_edu">Physical Education</option>
                                        <option value="physics">Physics-1</option>
                                        <option value="math">Mathematics-2</option>
                                        <option value="com_app">Computer Application-1</option>
                                        <option value="bangla">Bangla</option>
                                        <option value="edc">Electronic Device & circuit</option>
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
       
        // english 
        elseif ($sub == 'english' && $pass == $password && $subject == '2english' && $department == 'computer') {
           session_start();
           $_SESSION['com_english'] = $row['subject'];
           header('location: ../computer/seme_2_shift_1.php');
           
        }
       
        // physical education 
        elseif ($sub == 'phy_edu' && $pass == $password && $subject == '2physical' && $department == 'computer') {
           session_start();
           $_SESSION['com_physical_edu'] = $row['subject'];
           header('location: ../computer/seme_2_shift_1.php');
           
        }

        // math 
        elseif ($sub == 'physics' && $pass == $password && $subject == '2physics' && $department == 'computer') {
            session_start();
            $_SESSION['com_physics'] = $row['subject'];
           header('location: ../computer/seme_2_shift_1.php');
           
        }

        // math 
        elseif ($sub == 'math' && $pass == $password && $subject == '2math' && $department == 'computer') {
            session_start();
           $_SESSION['com_math'] = $row['subject'];
           header('location: ../computer/seme_2_shift_1.php');
           
        }

        // com application 
        elseif ($sub == 'com_app' && $pass == $password && $subject == '2com_application' && $department == 'computer') {
            session_start();
           $_SESSION['com_application'] = $row['subject'];
           header('location: ../computer/seme_2_shift_1.php');
           
        }

        // bangla 
        elseif ($sub == 'bangla' && $pass == $password && $subject == '2bangla' && $department == 'computer') {
            session_start();
           $_SESSION['com_bangla'] = $row['subject'];
           header('location: ../computer/seme_2_shift_1.php');
           
        }

        // elec device and circuit 
        elseif ($sub == 'edc' && $pass == $password && $subject == '2elec_dc' && $department == 'computer') {
            session_start();
           $_SESSION['com_electronics'] = $row['subject'];
           header('location: ../computer/seme_2_shift_1.php');
           
        }
         // b worksop prac
        elseif ($sub == 'bwp' && $pass == $password && $subject == '2b_workshop' && $department == 'computer') {
            session_start();
           $_SESSION['com_bwp'] = $row['subject'];
           header('location: ../computer/seme_2_shift_1.php');
           
        }
        else{
            echo "<script>alert('Password Wrong !!');</script>";
        }



    }
}

?>