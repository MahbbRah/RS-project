<?php require_once '../head.php';?>

<div class="col-md-8">
            <div class="st-info-form">
                            <form action="" method="post">
                                <h3 class="dept-title">Select Your Subject &amp; Input Password</h3>
                                <div class="form-group3">
                                     <label class="sub-name">Subject:</label>
                                     <select name="subject">
                                        <option value="">Select One</option>
                                        <option value="design_drawing">Architectural Design &amp; Drawing</option>
                                        <option value="materials">Building &amp; Finish Matarials</option>
                                        <option value="com_app">computer application-2</option>
                                        <option value="elec">Basic Electronics</option>
                                        <option value="math">Mathematics-3</option>
                                        <option value="physics">Physics-2</option>
                                        <option value="social">social science-1</option>
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
       
        // design drawing 
        elseif ($sub == 'design_drawing' && $pass == $password && $subject == '3design_drawing' && $department == 'aidt') {
           session_start();
           $_SESSION['aidt_design_drawing'] = $row['subject'];
           header('location: ../aidt/seme_3_shift_1.php');
           
        }

        //  matarials
        elseif ($sub == 'materials' && $pass == $password && $subject == '3materials' && $department == 'aidt') {
            session_start();
           $_SESSION['aidt_materials'] = $row['subject'];
           header('location: ../aidt/seme_3_shift_1.php');
           
        }

       // com application  
        elseif ($sub == 'com_app' && $pass == $password && $subject == '3com_application' && $department == 'aidt') {
            session_start();
            $_SESSION['aidt_com_app'] = $row['subject'];
           header('location: ../aidt/seme_3_shift_1.php');
           
        }
        // electronics 
        elseif ($sub == 'elec' && $pass == $password && $subject == '3electronics' && $department == 'aidt') {
           session_start();
           $_SESSION['aidt_electronics'] = $row['subject'];
           header('location: ../aidt/seme_3_shift_1.php');
           
        }

        // math 
        elseif ($sub == 'math' && $pass == $password && $subject == '3math' && $department == 'aidt') {
            session_start();
           $_SESSION['aidt_math'] = $row['subject'];
           header('location: ../aidt/seme_3_shift_1.php');
           
        }

        // physics 
        elseif ($sub == 'physics' && $pass == $password && $subject == '3physics' && $department == 'aidt') {
            session_start();
           $_SESSION['aidt_physics'] = $row['subject'];
           header('location: ../aidt/seme_3_shift_1.php');
           
        }

        // social
        elseif ($sub == 'social' && $pass == $password && $subject == '3social' && $department == 'aidt') {
            session_start();
           $_SESSION['aidt_social'] = $row['subject'];
           header('location: ../aidt/seme_3_shift_1.php');
           
        }

        
        else{
            echo "<script>alert('Password Wrong !!');</script>";
        }



    }
}

?>