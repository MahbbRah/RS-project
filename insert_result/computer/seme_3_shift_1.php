
<?php require_once '../head.php';

    $sql = "SELECT * FROM computer WHERE shift='First'";
    $result = $conn->query($sql);
    $count = $result->rowCount();
    $serial = 1;

// programing *********************************

 
    session_start();
    if (isset($_SESSION['com_programing'])) {
?>
                            <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                 <h3 class="dept-title">COMPUTER TECHNOLOGY (66)</h3>
                                 <a class="sub-logout" href="seme_3_shift_1.php?q=logout">logout</a>
                                 <table class="sub-table">
                                     <tr>
                                         <th>Sub. Code</th>
                                         <th>Sub. Name</th>
                                         <th>TC</th>
                                         <th>TF</th>
                                         <th>PC</th>
                                         <th>PF</th>
                                         <th>Total</th>
                                     </tr>
                                     <tr>
                                         <td>6622</td>
                                         <td>Programming language-1</td>
                                         <td>20</td>
                                         <td>80</td>
                                         <td>25</td>
                                         <td>25</td>
                                         <td>150</td>
                                     </tr>
                                 </table>
                                 <div class="form-group2">
<?php
if(!$count==0){
while($rows=$result->fetch()){
?>
                                     <label class="sub-name"><?php echo $serial++.'. '; $roll[]=$rows['roll']; echo $rows['roll']; ?></label>
                                     <input required type="text" name="tc[]" placeholder="TC">
                                     <input required type="text" name="tf[]" placeholder="TF">
                                     <input required type="text" name="pc[]" placeholder="PC">
                                     <input required type="text" name="pf[]" placeholder="PF">
                                     <br>
<?php
}}else{
    echo '<h1 style="text-align:center;">No Data Found!</h1>';
}
?>
                                 </div>
                               
                                 <div class="form-group23">
                                     <input required type="submit" value="Submit" name="Submit">
                                 </div>
                             </form>
                             </div>
                             </div>
<?php
//submit start here
if(isset($_POST['Submit'])){

    for($i=0;$i<$count;$i++){

    $tc = $_POST['tc'];
    $tf = $_POST['tf'];
    $pc = $_POST['pc'];
    $pf = $_POST['pf'];

    $total[$i] = $allSubject->p_lang_1($tc[$i],$tf[$i],$pc[$i],$pf[$i]);
    $grade[$i] = $allSubject->p_lang_1_grade($total[$i]);
    $point[$i] = $allSubject->p_lang_1_point($total[$i]);
    $sql1="UPDATE computer SET p_lang_1_fmark='150',p_lang_1_omark='$total[$i]', p_lang_1_grade='$grade[$i]',p_lang_1_point='$point[$i]' WHERE roll='$roll[$i]'";
    $result1=$conn->query($sql1);
    }

    if ($result1) {
        echo "<script>alert('Marks Insert Successfully!');</script>";
    }
    else { echo "<script>alert('Marks Not Insert!');</script>";}
    }

//submit end here

if(isset($_GET['q'])){
    session_unset(); 
    session_destroy();
    header("location: ../combo/index.php");
  }
    }

// com application *********************************


 elseif (isset($_SESSION['com_application'])) {
?>
                            
                            <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                 <h3 class="dept-title">COMPUTER TECHNOLOGY (66)</h3>
                                 <a class="sub-logout" href="seme_3_shift_1.php?q=logout">logout</a>
                                 <table class="sub-table">
                                     <tr>
                                         <th>Sub. Code</th>
                                         <th>Sub. Name</th>
                                         <th>TC</th>
                                         <th>TF</th>
                                         <th>PC</th>
                                         <th>PF</th>
                                         <th>Total</th>
                                     </tr>
                                     <tr>
                                         <td>6632</td>
                                         <td>Computer Application-2</td>
                                         <td>-</td>
                                         <td>-</td>
                                         <td>50</td>
                                         <td>50</td>
                                         <td>100</td>
                                     </tr>
                                 </table>
                                 <div class="form-group2">
<?php
if(!$count==0){
while($rows=$result->fetch()){
?>
                                     <label class="sub-name"><?php echo $serial++.'. '; $roll[]=$rows['roll']; echo $rows['roll']; ?></label>
                                     <input required type="text" name="tc[]" placeholder="TC">
                                     <input required type="text" name="tf[]" placeholder="TF">
                                     <input required type="text" name="pc[]" placeholder="PC">
                                     <input required type="text" name="pf[]" placeholder="PF">
                                     <br>
<?php
}}else{
    echo '<h1 style="text-align:center;">No Data Found!</h1>';
}
?>
                                 </div>
                               
                                 <div class="form-group23">
                                     <input required type="submit" value="Submit" name="Submit">
                                 </div>
                             </form>
                             </div>
                             </div>
<?php
//submit start here
if(isset($_POST['Submit'])){

    for($i=0;$i<$count;$i++){
    $pc = $_POST['pc'];
    $pf = $_POST['pf'];

    $total[$i] = $allSubject->com_application($pc[$i],$pf[$i]);
    $grade[$i] = $allSubject->com_application_grade($total[$i]);
    $point[$i] = $allSubject->com_application_point($total[$i]);
    $sql1="UPDATE computer SET com_application_2_fmark='100',com_application_2_omark='$total[$i]', com_application_2_grade='$grade[$i]',com_application_2_point='$point[$i]' WHERE roll='$roll[$i]'";
    $result1=$conn->query($sql1);
    }
    if ($result1) {
        echo "<script>alert('Marks Insert Successfully!');</script>";
    }
    else { echo "<script>alert('Marks Not Insert!');</script>";}
    }

//submit end here

if(isset($_GET['q'])){
    session_unset(); 
    session_destroy();
    header("location: ../combo/index.php");
  }
    }

// digital electronics *********************************

    elseif (isset($_SESSION['com_d_elec'])) {
?>
                            <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                 <h3 class="dept-title">COMPUTER TECHNOLOGY (66)</h3>
                                 <a class="sub-logout" href="seme_3_shift_1.php?q=logout">logout</a>
                                 <table class="sub-table">
                                     <tr>
                                         <th>Sub. Code</th>
                                         <th>Sub. Name</th>
                                         <th>TC</th>
                                         <th>TF</th>
                                         <th>PC</th>
                                         <th>PF</th>
                                         <th>Total</th>
                                     </tr>
                                     <tr>
                                         <td>6841</td>
                                         <td>Digital Electronics-1</td>
                                         <td>30</td>
                                         <td>120</td>
                                         <td>25</td>
                                         <td>25</td>
                                         <td>200</td>
                                     </tr>
                                 </table>
                                 <div class="form-group2">
<?php
if(!$count==0){
while($rows=$result->fetch()){
?>
                                     <label class="sub-name"><?php echo $serial++.'. '; $roll[]=$rows['roll']; echo $rows['roll']; ?></label>
                                     <input required type="text" name="tc[]" placeholder="TC">
                                     <input required type="text" name="tf[]" placeholder="TF">
                                     <input required type="text" name="pc[]" placeholder="PC">
                                     <input required type="text" name="pf[]" placeholder="PF">
                                     <br>
<?php
}}else{
    echo '<h1 style="text-align:center;">No Data Found!</h1>';
}
?>
                                 </div>
                               
                                 <div class="form-group23">
                                     <input required type="submit" value="Submit" name="Submit">
                                 </div>
                             </form>
                             </div>
                             </div>

<?php
//submit start here
if(isset($_POST['Submit'])){

    for($i=0;$i<$count;$i++){

    $tc = $_POST['tc'];
    $tf = $_POST['tf'];
    $pc = $_POST['pc'];
    $pf = $_POST['pf'];

    $total[$i] = $allSubject->digital_ele($tc[$i],$tf[$i],$pc[$i],$pf[$i]);
    $grade[$i] = $allSubject->digital_ele_grade($total[$i]);
    $point[$i] = $allSubject->digital_ele_point($total[$i]);
    $sql1="UPDATE computer SET digital_ele_fmark='200',digital_ele_omark='$total[$i]', digital_ele_grade='$grade[$i]',digital_ele_point='$point[$i]' WHERE roll='$roll[$i]'";
    $result1=$conn->query($sql1);
    }
    if ($result1) {
        echo "<script>alert('Marks Insert Successfully!');</script>";
    }
    else { echo "<script>alert('Marks Not Insert!');</script>";}
    }

//submit end here

if(isset($_GET['q'])){
    session_unset(); 
    session_destroy();
    header("location: ../combo/index.php");
  }
}


// industrial electronics *********************************

    elseif (isset($_SESSION['com_i_elec'])) {
?>

                        <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                 <h3 class="dept-title">COMPUTER TECHNOLOGY (66)</h3>
                                 <a class="sub-logout" href="seme_3_shift_1.php?q=logout">logout</a>
                                 <table class="sub-table">
                                     <tr>
                                         <th>Sub. Code</th>
                                         <th>Sub. Name</th>
                                         <th>TC</th>
                                         <th>TF</th>
                                         <th>PC</th>
                                         <th>PF</th>
                                         <th>Total</th>
                                     </tr>
                                     <tr>
                                         <td>6832</td>
                                         <td>Industrial Electronics</td>
                                         <td>20</td>
                                         <td>80</td>
                                         <td>25</td>
                                         <td>25</td>
                                         <td>150</td>
                                     </tr>
                                 </table>
                                 <div class="form-group2">
<?php
if(!$count==0){
while($rows=$result->fetch()){
?>
                                     <label class="sub-name"><?php echo $serial++.'. '; $roll[]=$rows['roll']; echo $rows['roll']; ?></label>
                                     <input required type="text" name="tc[]" placeholder="TC">
                                     <input required type="text" name="tf[]" placeholder="TF">
                                     <input required type="text" name="pc[]" placeholder="PC">
                                     <input required type="text" name="pf[]" placeholder="PF">
                                     <br>
<?php
}}else{
    echo '<h1 style="text-align:center;">No Data Found!</h1>';
}
?>
                                 </div>
                               
                                 <div class="form-group23">
                                     <input required type="submit" value="Submit" name="Submit">
                                 </div>
                             </form>
                             </div>
                             </div>


<?php
//submit start here
if(isset($_POST['Submit'])){

    for($i=0;$i<$count;$i++){

    $tc = $_POST['tc'];
    $tf = $_POST['tf'];
    $pc = $_POST['pc'];
    $pf = $_POST['pf'];

    $total[$i] = $allSubject->industrial_ele($tc[$i],$tf[$i],$pc[$i],$pf[$i]);
    $grade[$i] = $allSubject->industrial_ele_grade($total[$i]);
    $point[$i] = $allSubject->industrial_ele_point($total[$i]);
    $sql1="UPDATE computer SET industrial_ele_fmark='150',industrial_ele_omark='$total[$i]',industrial_ele_grade='$grade[$i]',industrial_ele_point='$point[$i]' WHERE roll='$roll[$i]'";
    $result1=$conn->query($sql1);
    }
    if ($result1) {
        echo "<script>alert('Marks Insert Successfully!');</script>";
    }
    else { echo "<script>alert('Marks Not Insert!');</script>";}
    }

//submit end here

if(isset($_GET['q'])){
    session_unset(); 
    session_destroy();
    header("location: ../combo/index.php");
  }
}


// math *********************************

    elseif (isset($_SESSION['com_math'])) {
?>
                        <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                 <h3 class="dept-title">COMPUTER TECHNOLOGY (66)</h3>
                                 <a class="sub-logout" href="seme_3_shift_1.php?q=logout">logout</a>
                                 <table class="sub-table">
                                     <tr>
                                         <th>Sub. Code</th>
                                         <th>Sub. Name</th>
                                         <th>TC</th>
                                         <th>TF</th>
                                         <th>PC</th>
                                         <th>PF</th>
                                         <th>Total</th>
                                     </tr>
                                     <tr>
                                         <td>5931</td>
                                         <td>Mathematics-3</td>
                                         <td>30</td>
                                         <td>120</td>
                                         <td>50</td>
                                         <td>-</td>
                                         <td>200</td>
                                     </tr>
                                 </table>
                                 <div class="form-group2">
<?php
if(!$count==0){
while($rows=$result->fetch()){
?>
                                     <label class="sub-name"><?php echo $serial++.'. '; $roll[]=$rows['roll']; echo $rows['roll']; ?></label>
                                     <input required type="text" name="tc[]" placeholder="TC">
                                     <input required type="text" name="tf[]" placeholder="TF">
                                     <input required type="text" name="pc[]" placeholder="PC">
                                     <input required type="text" name="pf[]" placeholder="PF">
                                     <br>
<?php
}}else{
    echo '<h1 style="text-align:center;">No Data Found!</h1>';
}
?>
                                 </div>
                               
                                 <div class="form-group23">
                                     <input required type="submit" value="Submit" name="Submit">
                                 </div>
                             </form>
                             </div>
                             </div>
<?php
//submit start here
if(isset($_POST['Submit'])){

    for($i=0;$i<$count;$i++){

    $tc = $_POST['tc'];
    $tf = $_POST['tf'];
    $pc = $_POST['pc'];

    $total[$i] = $allSubject->math($tc[$i],$tf[$i],$pc[$i]);
    $grade[$i] = $allSubject->math_grade($total[$i]);
    $point[$i] = $allSubject->math_point($total[$i]);
    $sql1="UPDATE computer SET math_1_fmark='200',math_1_omark='$total[$i]', math_1_grade='$grade[$i]',math_1_point='$point[$i]' WHERE roll='$roll[$i]'";
    $result1=$conn->query($sql1);
    }
    if ($result1) {
        echo "<script>alert('Marks Insert Successfully!');</script>";
    }
    else { echo "<script>alert('Marks Not Insert!');</script>";}
    }

//submit end here

if(isset($_GET['q'])){
    session_unset(); 
    session_destroy();
    header("location: ../combo/index.php");
  }
}

// physics *********************************

    elseif (isset($_SESSION['com_physics'])){
?>

                        <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                 <h3 class="dept-title">COMPUTER TECHNOLOGY (66)</h3>
                                 <a class="sub-logout" href="seme_3_shift_1.php?q=logout">logout</a>
                                 <table class="sub-table">
                                     <tr>
                                         <th>Sub. Code</th>
                                         <th>Sub. Name</th>
                                         <th>TC</th>
                                         <th>TF</th>
                                         <th>PC</th>
                                         <th>PF</th>
                                         <th>Total</th>
                                     </tr>
                                     <tr>
                                         <td>5922</td>
                                         <td>Physics-2</td>
                                         <td>30</td>
                                         <td>120</td>
                                         <td>25</td>
                                         <td>25</td>
                                         <td>200</td>
                                     </tr>
                                 </table>
                                 <div class="form-group2">
<?php
if(!$count==0){
while($rows=$result->fetch()){
?>
                                     <label class="sub-name"><?php echo $serial++.'. '; $roll[]=$rows['roll']; echo $rows['roll']; ?></label>
                                     <input required type="text" name="tc[]" placeholder="TC">
                                     <input required type="text" name="tf[]" placeholder="TF">
                                     <input required type="text" name="pc[]" placeholder="PC">
                                     <input required type="text" name="pf[]" placeholder="PF">
                                     <br>
<?php
}}else{
    echo '<h1 style="text-align:center;">No Data Found!</h1>';
}
?>
                                 </div>
                               
                                 <div class="form-group23">
                                     <input required type="submit" value="Submit" name="Submit">
                                 </div>
                             </form>
                             </div>
                             </div>

<?php
//submit start here
if(isset($_POST['Submit'])){

    for($i=0;$i<$count;$i++){

    $tc = $_POST['tc'];
    $tf = $_POST['tf'];
    $pc = $_POST['pc'];
    $pf = $_POST['pf'];

    $total[$i] = $allSubject->physics($tc[$i],$tf[$i],$pc[$i],$pf[$i]);
    $grade[$i] = $allSubject->physics_point($total[$i]);
    $point[$i] = $allSubject->physics_point($total[$i]);
    $sql1="UPDATE computer SET physics_2_fmark='200',physics_2_omark='$total[$i]', physics_2_grade='$grade[$i]',physics_2_point='$point[$i]' WHERE roll='$roll[$i]'";
    $result1=$conn->query($sql1);
    }
    if ($result1) {
        echo "<script>alert('Marks Insert Successfully!');</script>";
    }
    else { echo "<script>alert('Marks Not Insert!');</script>";}
    }

//submit end here

if(isset($_GET['q'])){
    session_unset(); 
    session_destroy();
    header("location: ../combo/index.php");
  }
}

// social science *********************************

    elseif (isset($_SESSION['com_social'])) {
?>
                        
                        <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                 <h3 class="dept-title">COMPUTER TECHNOLOGY (66)</h3>
                                 <a class="sub-logout" href="seme_3_shift_1.php?q=logout">logout</a>
                                 <table class="sub-table">
                                     <tr>
                                         <th>Sub. Code</th>
                                         <th>Sub. Name</th>
                                         <th>TC</th>
                                         <th>TF</th>
                                         <th>PC</th>
                                         <th>PF</th>
                                         <th>Total</th>
                                     </tr>
                                     <tr>
                                         <td>5811</td>
                                         <td>Social Science-1</td>
                                         <td>20</td>
                                         <td>80</td>
                                         <td>-</td>
                                         <td>-</td>
                                         <td>100</td>
                                     </tr>
                                 </table>
                                 <div class="form-group2">
<?php
if(!$count==0){
while($rows=$result->fetch()){
?>
                                     <label class="sub-name"><?php echo $serial++.'. '; $roll[]=$rows['roll']; echo $rows['roll']; ?></label>
                                     <input required type="text" name="tc[]" placeholder="TC">
                                     <input required type="text" name="tf[]" placeholder="TF">
                                     <input required type="text" name="pc[]" placeholder="PC">
                                     <input required type="text" name="pf[]" placeholder="PF">
                                     <br>
<?php
}}else{
    echo '<h1 style="text-align:center;">No Data Found!</h1>';
}
?>
                                 </div>
                               
                                 <div class="form-group23">
                                     <input required type="submit" value="Submit" name="Submit">
                                 </div>
                             </form>
                             </div>
                             </div>

<?php
//submit start here
if(isset($_POST['Submit'])){

    for($i=0;$i<$count;$i++){

    $tc = $_POST['tc'];
    $tf = $_POST['tf'];

    $total[$i] = $allSubject->social_s1($tc[$i],$tf[$i]);
    $grade[$i] = $allSubject->social_s1_grade($total[$i]);
    $point[$i] = $allSubject->social_s1_point($total[$i]);
    $sql1="UPDATE computer SET social_s1_fmark='100',social_s1_omark='$total[$i]',social_s1_grade='$grade[$i]',social_s1_point='$point[$i]' WHERE roll='$roll[$i]'";
    $result1=$conn->query($sql1);
    }
    if ($result1) {
        echo "<script>alert('Marks Insert Successfully!');</script>";
    }
    else { echo "<script>alert('Marks Not Insert!');</script>";}
    }

//submit end here

if(isset($_GET['q'])){
    session_unset(); 
    session_destroy();
    header("location: ../combo/index.php");
  }
}
 
?>



<?php require_once '../../footer.php';?>
