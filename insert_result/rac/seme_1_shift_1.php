
<?php require_once '../head.php';

    $sql = "SELECT * FROM rac WHERE shift='First'";
    $result = $conn->query($sql);
    $count = $result->rowCount();
    $serial = 1;

// Engineering Drawing *********************************

    session_start();
    if (isset($_SESSION['rac_drawing'])) {
?>
                            <div class="col-md-7"><br>
                             <div class="submit-form-sub">
                              <form action="" method="post">
                                 <h3 class="dept-title">RAC TECHNOLOGY (72)</h3>
                                 <a class="sub-logout" href="seme_1_shift_1.php?q=logout">logout</a>
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
                                         <td>1011</td>
                                         <td>Eng. Drawing</td>
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
// submit start here
if(isset($_POST['Submit'])){
    
    for($i=0;$i<$count;$i++){

    $pc = $_POST['pc'];
    $pf = $_POST['pf'];

    $total[$i] = $allSubject->drawing($pc[$i],$pf[$i]);
    $grade[$i] = $allSubject->drawing_grade($total[$i]);
    $point[$i] = $allSubject->drawing_point($total[$i]);
    $sql1="UPDATE rac SET eng_drow_fmark='100',eng_drow_omark='$total[$i]', eng_drow_grade='$grade[$i]',eng_drow_point='$point[$i]' WHERE roll='$roll[$i]'";
    $result1=$conn->query($sql1);
    }

    if ($result1) {
        echo "<script>alert('Marks Insert Successfully!');</script>";
    }
    else { echo "<script>alert('Marks Not Insert!');</script>";}
    }

// submit end here

if(isset($_GET['q'])){
    session_unset(); 
    session_destroy();
    header("location: ../combo/index.php");
  }
    }

// English *********************************

 elseif (isset($_SESSION['rac_english'])) {
?>
                            <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                 <h3 class="dept-title">RAC TECHNOLOGY (72)</h3>
                                 <a class="sub-logout" href="seme_1_shift_1.php?q=logout">logout</a>
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
                                         <td>5712</td>
                                         <td>English-1</td>
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
// submit start here
if(isset($_POST['Submit'])){
    
    for($i=0;$i<$count;$i++){

    $pc = $_POST['pc'];
    $pf = $_POST['pf'];

    $total[$i] = $allSubject->english($pc[$i],$pf[$i]);
    $grade[$i] = $allSubject->english_grade($total[$i]);
    $point[$i] = $allSubject->english_point($total[$i]);
    $sql1="UPDATE rac SET eng_1_fmark='100',eng_1_omark='$total[$i]', eng_1_grade='$grade[$i]',eng_1_point='$point[$i]' WHERE roll='$roll[$i]'";
    $result1=$conn->query($sql1);
    }

    if ($result1) {
        echo "<script>alert('Marks Insert Successfully!');</script>";
    }
    else { echo "<script>alert('Marks Not Insert!');</script>";}
    }

// submit end here

if(isset($_GET['q'])){
    session_unset(); 
    session_destroy();
    header("location: ../combo/index.php");
  }
    }

// physical education *********************************

    elseif (isset($_SESSION['rac_physical'])) {
?>
                            <div class="col-md-7"><br>
                             <div class="submit-form-sub"> 
                             <form action="" method="post">
                                 <h3 class="dept-title">RAC TECHNOLOGY (72)</h3>
                                 <a class="sub-logout" href="seme_1_shift_1.php?q=logout">logout</a>
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
                                         <td>5812</td>
                                         <td>Physical Education & LSD</td>
                                         <td>-</td>
                                         <td>-</td>
                                         <td>25</td>
                                         <td>25</td>
                                         <td>50</td>
                                     </tr>
                                 </table>
                                 <div class="form-group2">
  <?php
if(!$count==0){
while($rows=$result->fetch()){
?>
                                     <label class="sub-name"><?php echo $serial++.'. '; $roll[]=$rows['roll']; echo $rows['roll']; ?></label>
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
// submit start here
    if(isset($_POST['Submit'])){
    for($i=0;$i<$count;$i++){

    $pc = $_POST['pc'];
    $pf = $_POST['pf'];

    $total[$i] = $allSubject->physical_edu($pc[$i],$pf[$i]);
    $grade[$i] = $allSubject->physical_edu_grade($total[$i]);
    $point[$i] = $allSubject->physical_edu_point($total[$i]);
    $sql1="UPDATE rac SET physical_edu_fmark='50',physical_edu_omark='$total[$i]', physical_edu_grade='$grade[$i]',eng_drow_point='$point[$i]' WHERE roll='$roll[$i]'";
    $result1=$conn->query($sql1);
    }

    if ($result1) {
        echo "<script>alert('Marks Insert Successfully!');</script>";
    }
    else { echo "<script>alert('Marks Not Insert!');</script>";}
    }

// submit end here

if(isset($_GET['q'])){
    session_unset(); 
    session_destroy();
    header("location: ../combo/index.php");
  }
}

// math *********************************

    elseif (isset($_SESSION['rac_math'])) {
?>

                        <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                 <h3 class="dept-title">RAC TECHNOLOGY (72)</h3>
                                 <a class="sub-logout" href="seme_1_shift_1.php?q=logout">logout</a>
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
                                         <td>5911</td>
                                         <td>Mathematics-1</td>
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
// submit start here
if(isset($_POST['Submit'])){
    for($i=0;$i<$count;$i++){

    $tc = $_POST['tc'];
    $tf = $_POST['tf'];
    $pc = $_POST['pc'];

    $total[$i] = $allSubject->math($tc[$i],$tf[$i],$pc[$i]);
    $grade[$i] = $allSubject->math_grade($total[$i]);
    $point[$i] = $allSubject->math_point($total[$i]);
    $sql1="UPDATE rac SET math_1_fmark='200',math_1_omark='$total[$i]', math_1_grade='$grade[$i]',math_1_point='$point[$i]' WHERE roll='$roll[$i]'";
                        $result1=$conn->query($sql1);
                        }

    if ($result1) {
        echo "<script>alert('Marks Insert Successfully!');</script>";
    }
    else { echo "<script>alert('Marks Not Insert!');</script>";}
    }

// submit end here

if(isset($_GET['q'])){
    session_unset(); 
    session_destroy();
    header("location: ../combo/index.php");
  }
}

// Chemistery *********************************

    elseif (isset($_SESSION['rac_chemistry'])) {
?>
                        <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                 <h3 class="dept-title">RAC TECHNOLOGY (72)</h3>
                                 <a class="sub-logout" href="seme_1_shift_1.php?q=logout">logout</a>
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
                                         <td>5913</td>
                                         <td>Chemistry</td>
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
// submit start here
if(isset($_POST['Submit'])){

    for($i=0;$i<$count;$i++){

    $tc = $_POST['tc'];
    $tf = $_POST['tf'];
    $pc = $_POST['pc'];
    $pf = $_POST['pf'];

    $total[$i] = $allSubject->chemistry($tc[$i],$tf[$i],$pc[$i],$pf[$i]);
    $grade[$i] = $allSubject->chemistry_grade($total[$i]);
    $point[$i] = $allSubject->chemistry_point($total[$i]);
    $sql1="UPDATE rac SET chemistry_fmark='200',chemistry_omark='$total[$i]', chemistry_grade='$grade[$i]',chemistry_point='$point[$i]' WHERE roll='$roll[$i]'";
    $result1=$conn->query($sql1);
                        }

    if ($result1) {
        echo "<script>alert('Marks Insert Successfully!');</script>";
    }
    else { echo "<script>alert('Marks Not Insert!');</script>";}
    }

// submit end here

if(isset($_GET['q'])){
    session_unset(); 
    session_destroy();
    header("location: ../combo/index.php");
  }
}

// basic workshop *********************************

    elseif (isset($_SESSION['rac_bwp'])){
?>

                        <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                 <h3 class="dept-title">RAC TECHNOLOGY (72)</h3>
                                 <a class="sub-logout" href="seme_1_shift_1.php?q=logout">logout</a>
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
                                         <td>7011</td>
                                         <td>Basic Workshop Practice</td>
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
// submit start here
if(isset($_POST['Submit'])){
    
    for($i=0;$i<$count;$i++){
    $pc = $_POST['pc'];
    $pf = $_POST['pf'];

    $total[$i] = $allSubject->b_workshop($pc[$i],$pf[$i]);
    $grade[$i] = $allSubject->b_workshop_grade($total[$i]);
    $point[$i] = $allSubject->b_workshop_point($total[$i]);
    $sql1="UPDATE rac SET b_workshop_fmark='100',b_workshop_omark='$total[$i]', b_workshop_grade='$grade[$i]',b_workshop_point='$point[$i]' WHERE roll='$roll[$i]'";
    $result1=$conn->query($sql1);
    }

if ($result1) {
    echo "<script>alert('Marks Insert Successfully!');</script>";
}
else { echo "<script>alert('Marks Not Insert!');</script>";}
}

// submit end here

if(isset($_GET['q'])){
    session_unset(); 
    session_destroy();
    header("location: ../combo/index.php");
  }
}

// Refrigeration and air condition *********************************

    elseif (isset($_SESSION['rac_fundamental'])) {
?>
                        
                        <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                 <h3 class="dept-title">RAC TECHNOLOGY (72)</h3>
                                 <a class="sub-logout" href="seme_1_shift_1.php?q=logout">logout</a>
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
                                         <td>7211</td>
                                         <td>Refrigeration & Air CF</td>
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
// submit start here
if(isset($_POST['Submit'])){
    
    for($i=0;$i<$count;$i++){

    $tc = $_POST['tc'];
    $tf = $_POST['tf'];
    $pc = $_POST['pc'];
    $pf = $_POST['pf'];

    $total[$i] = $allSubject->rac_fundamental($tc[$i],$tf[$i],$pc[$i],$pf[$i]);
    $grade[$i] = $allSubject->rac_fundamental_grade($total[$i]);
    $point[$i] = $allSubject->rac_fundamental_point($total[$i]);
    $sql1="UPDATE rac SET rac_fund_omark='200',rac_fund_omark='$total[$i]', rac_fund_grade='$grade[$i]',rac_fund_point='$point[$i]' WHERE roll='$roll[$i]'";
    $result1=$conn->query($sql1);
    }

    if ($result1) {
        echo "<script>alert('Marks Insert Successfully!');</script>";
    }
    else { echo "<script>alert('Marks Not Insert!');</script>";}
    }

// submit end here

if(isset($_GET['q'])){
    session_unset(); 
    session_destroy();
    header("location: ../combo/index.php");
  }
}else{
    header('location: ../combo/index.php');
}
    
?>


<?php require_once '../../footer.php';?>
