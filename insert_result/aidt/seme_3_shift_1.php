
<?php require_once '../head.php';

 $sql = "SELECT * FROM aidt WHERE shift='First'";
    $result = $conn->query($sql);
    $count = $result->rowCount();
    $serial = 1;

// Architerctural Design & Drawing *********************************

    session_start();
    if (isset($_SESSION['aidt_design_drawing'])) {
?>
                            <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                               <h3 class="dept-title">AIDT TECHNOLOGY (87)</h3>
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
                                          <td>8731</td>
                                         <td>Architerctural Design & Drawing</td>
                                         <td>30</td>
                                         <td>120</td>
                                         <td>50</td>
                                         <td>50</td>
                                         <td>250</td>
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

$total[$i] = $allSubject->arch_design_drawing($tc[$i],$tf[$i],$pc[$i],$pf[$i]);
$grade[$i] = $allSubject->arch_design_drawing_grade($total[$i]);
$point[$i] = $allSubject->arch_design_drawing_point($total[$i]);
$sql1="UPDATE aidt SET arch_design_drawing_fmark='250',arch_design_drawing_omark='$total[$i]', arch_design_drawing_grade='$grade[$i]',arch_design_drawing_point='$point[$i]' WHERE roll='$roll[$i]'";
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

// Building and Finish marerials *********************************

 elseif (isset($_SESSION['aidt_materials'])) {
?>
                            
                            <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                               <h3 class="dept-title">AIDT TECHNOLOGY (87)</h3>
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
                                          <td>8732</td>
                                         <td>Building and Finish marerials</td>
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
$tc = $_POST['tc'];
$tf = $_POST['tf'];

$total[$i] = $allSubject->building_finish_materials($tc[$i],$tf[$i]);
$grade[$i] = $allSubject->building_finish_materials_grade($total[$i]);
$point[$i] = $allSubject->building_finish_materials_point($total[$i]);
$sql1="UPDATE aidt SET building_finish_materials_fmark='100',building_finish_materials_omark='$total[$i]', building_finish_materials_grade='$grade[$i]',building_finish_materials_point='$point[$i]' WHERE roll='$roll[$i]'";
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

// Computer Application-2*********************************

    elseif (isset($_SESSION['aidt_com_app'])) {
?>
                            <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                 <h3 class="dept-title">AIDT TECHNOLOGY (87)</h3>
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
$sql1="UPDATE aidt SET com_application_2_fmark='150',com_application_2_omark='$total[$i]', com_application_2_grade='$grade[$i]',com_application_2_point='$point[$i]' WHERE roll='$roll[$i]'";
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

// Basic Electronics*********************************

    elseif (isset($_SESSION['aidt_electronics'])) {
?>

                        <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                <h3 class="dept-title">AIDT TECHNOLOGY (87)</h3>
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
                                          <td>6811</td>
                                         <td>Basic Electronics</td>
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

$total[$i] = $allSubject->electronics($tc[$i],$tf[$i],$pc[$i],$pf[$i]);
$grade[$i] = $allSubject->electronics_grade($total[$i]);
$point[$i] = $allSubject->electronics_point($total[$i]);
$sql1="UPDATE aidt SET b_electronics_fmark='150',b_electronics_omark='$total[$i]', b_electronics_grade='$grade[$i]',b_electronics_point='$point[$i]' WHERE roll='$roll[$i]'";
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

// Mathematics *********************************

    elseif (isset($_SESSION['aidt_math'])) {
?>
                        <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                 <h3 class="dept-title">AIDT TECHNOLOGY (87)</h3>
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
$sql1="UPDATE aidt SET math_3_fmark='150',math_3_omark='$total[$i]', math_3_grade='$grade[$i]',math_3_point='$point[$i]' WHERE roll='$roll[$i]'";
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

    elseif (isset($_SESSION['aidt_physics'])){
?>

                        <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                <h3 class="dept-title">AIDT TECHNOLOGY (87)</h3>
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
$sql1="UPDATE aidt SET physics_2_fmark='150',physics_2_omark='$total[$i]', physics_2_grade='$grade[$i]',physics_2_point='$point[$i]' WHERE roll='$roll[$i]'";
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

// Social Science-1 *********************************

    elseif (isset($_SESSION['aidt_social'])) {
?>
                        
                        <div class="col-md-7"><br>
                             <div class="submit-form-sub"> <form action="" method="post">
                                <h3 class="dept-title">AIDT TECHNOLOGY (87)</h3>
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

$total[$i] = $allSubject->social_s1($tc[$i],$tf[$i]);
$grade[$i] = $allSubject->social_s1_grade($total[$i]);
$point[$i] = $allSubject->social_s1_point($total[$i]);
$sql1="UPDATE aidt SET social_s1_fmark='150',social_s1_omark='$total[$i]', social_s1_grade='$grade[$i]',social_s1_point='$point[$i]' WHERE roll='$roll[$i]'";
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


    
?>





<?php require_once '../../footer.php';?>
