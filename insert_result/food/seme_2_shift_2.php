
<?php require_once '../head.php';

    $sql = "SELECT * FROM food WHERE shift='Second'";
    $result = $conn->query($sql);
    $count = $result->rowCount();
    $serial = 1;

// Bangla *********************************

   
    session_start();
    if (isset($_SESSION['food_bangla'])) {
?>
                            <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                <h3 class="dept-title">FOOD TECHNOLOGY (69)</h3>
                                 <a class="sub-logout" href="seme_2_shift_2.php?q=logout">logout</a>
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
                                         <td>5711</td>
                                         <td>Bangla</td>
                                         <td>20</td>
                                         <td>80</td>
                                         <td>50</td>
                                         <td>-</td>
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

    $total[$i] = $allSubject->bangla($tc[$i],$tf[$i],$pc[$i]);
    $grade[$i] = $allSubject->bangla_grade($total[$i]);
    $point[$i] = $allSubject->bangla_point($total[$i]);
    $sql1="UPDATE food SET bangla_fmark='150',bangla_omark='$total[$i]', bangla_grade='$grade[$i]',bangla_point='$point[$i]' WHERE roll='$roll[$i]'";
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

 elseif (isset($_SESSION['food_english'])) {
?>
                            
                            <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                 <h3 class="dept-title">FOOD TECHNOLOGY (69)</h3>
                                 <a class="sub-logout" href="seme_2_shift_2.php?q=logout">logout</a>
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
                                         <td>5722</td>
                                         <td>English-2</td>
                                         <td>20</td>
                                         <td>80</td>
                                         <td>50</td>
                                         <td>-</td>
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

    $total[$i] = $allSubject->english2($tc[$i],$tf[$i],$pc[$i]);
    $grade[$i] = $allSubject->english2_grade($total[$i]);
    $point[$i] = $allSubject->english2_point($total[$i]);
    $sql1="UPDATE food SET eng_2_fmark='150',eng_2_omark='$total[$i]', eng_2_grade='$grade[$i]',eng_2_point='$point[$i]' WHERE roll='$roll[$i]'";
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

// Physics *********************************


    elseif (isset($_SESSION['food_physics'])) {
?>
                            <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                 <h3 class="dept-title">FOOD TECHNOLOGY (69)</h3>
                                 <a class="sub-logout" href="seme_2_shift_2.php?q=logout">logout</a>
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
                                         <td>5912</td>
                                         <td>Physics-1</td>
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

    $total[$i] = $allSubject->physics($tc[$i],$tf[$i],$pc[$i],$pf[$i]);
    $grade[$i] = $allSubject->physics_grade($total[$i]);
    $point[$i] = $allSubject->physics_point($total[$i]);
    $sql1="UPDATE food SET physics_1_fmark='200',physics_1_omark='$total[$i]', physics_1_grade='$grade[$i]',physics_1_point='$point[$i]' WHERE roll='$roll[$i]'";
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

// mathematics *********************************

    elseif (isset($_SESSION['food_math'])) {
?>

                        <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                <h3 class="dept-title">FOOD TECHNOLOGY (69)</h3>
                                 <a class="sub-logout" href="seme_2_shift_2.php?q=logout">logout</a>
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
                                         <td>5921</td>
                                         <td>Mathematics-2</td>
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
    $sql1="UPDATE food SET math_2_fmark='200',math_2_omark='$total[$i]', math_2_grade='$grade[$i]',math_2_point='$point[$i]' WHERE roll='$roll[$i]'";
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

// basic stoichiometry *********************************

    elseif (isset($_SESSION['food_bsto'])) {
?>
                        <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                               <h3 class="dept-title">FOOD TECHNOLOGY (69)</h3>
                                 <a class="sub-logout" href="seme_2_shift_2.php?q=logout">logout</a>
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
                                         <td>6321</td>
                                         <td>Basic Stoichiometry</td>
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
// submit start here
if(isset($_POST['Submit'])){
    
    for($i=0;$i<$count;$i++){

    $tc = $_POST['tc'];
    $tf = $_POST['tf'];
    $pc = $_POST['pc'];
    $pf = $_POST['pf'];

    $total[$i] = $allSubject->b_stoichiometry($tc[$i],$tf[$i],$pc[$i],$pf[$i]);
    $grade[$i] = $allSubject->b_stoichiometry_grade($total[$i]);
    $point[$i] = $allSubject->b_stoichiometry_point($total[$i]);
    $sql1="UPDATE food SET b_stoichiometry_fmark='150',b_stoichiometry_omark='$total[$i]', b_stoichiometry_grade='$grade[$i]',b_stoichiometry_point='$point[$i]' WHERE roll='$roll[$i]'";
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

// com application *********************************

    elseif (isset($_SESSION['food_com_app'])){
?>

                        <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                 <h3 class="dept-title">FOOD TECHNOLOGY (69)</h3>
                                 <a class="sub-logout" href="seme_2_shift_2.php?q=logout">logout</a>
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
                                         <td>6621</td>
                                         <td>Computer Application-1</td>
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

    $total[$i] = $allSubject->com_application($pc[$i],$pf[$i]);
    $grade[$i] = $allSubject->com_application_grade($total[$i]);
    $point[$i] = $allSubject->com_application_point($total[$i]);
    $sql1="UPDATE food SET com_application_1_fmark='100',com_application_1_omark='$total[$i]', com_application_1_grade='$grade[$i]',com_application_1_point='$point[$i]' WHERE roll='$roll[$i]'";
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

// basic electricity *********************************

    elseif (isset($_SESSION['food_elec'])) {
?>
                        
                        <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                 <h3 class="dept-title">COMPUTER TECHNOLOGY (66)</h3>
                                 <a class="sub-logout" href="seme_2_shift_2.php?q=logout">logout</a>
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
                                         <td>6711</td>
                                         <td>Basic Electricity</td>
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

    $total[$i] = $allSubject->electricity($tc[$i],$tf[$i],$pc[$i],$pf[$i]);
    $grade[$i] = $allSubject->electricity_grade($total[$i]);
    $point[$i] = $allSubject->electricity_point($total[$i]);
    $sql1="UPDATE food SET b_electricity_fmark='200',b_electricity_omark='$total[$i]', b_electricity_grade='$grade[$i]',b_electricity_point='$point[$i]' WHERE roll='$roll[$i]'";
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

 else{
    header('location: ../combo/index.php');
}
    
?>





<?php require_once '../../footer.php';?>
