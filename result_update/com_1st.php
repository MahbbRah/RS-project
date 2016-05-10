<?php require_once 'head.php';?>

                    <div class="col-md-8"><br>
                        <div class="submit-form">
                           <form action="" method="post">
                                 <h3 class="dept-title">COMPUTER TECHNOLOGY (66)</h3>
                                 <h4 class="seme-title">FIRST SEMESTER</h4>
                                 <div class="form-group3">
                                     <label class="sub-name2">Roll No:</label>
                                     <input required class="input" type="text" id="query" name="roll"   placeholder="Enter Roll" >
                                     <input type="submit" name="query" value="Submit">
                                </div>
                                </form>
<?php
if (isset($_POST['query'])) {
    $roll = $_POST['roll'];
$query = $conn->prepare("SELECT * FROM computer WHERE roll = :roll");

    $data = array(':roll'=>$roll);

    /*** execute the prepared statement ***/
    $query->execute($data);
    while($row = $query->fetch()){
    $eng_drow = $row['eng_drow_omark'];
    $english = $row['eng_1_omark'];
    $com_fund = $row['com_fund_omark'];
    $math = $row['math_1_omark'];
    $chemistry = $row['chemistry_omark'];
    $electricity = $row['b_electricity_omark'];
    $electronics = $row['b_electronics_omark'];
    $roll_no = $row['roll'];
?>  
                               <form action="" method="post">
                                
                                 <div class="form-group3">
                                     <label class="sub-name2">Engineering Drawing:</label>
                                     <input required type="text" name="drawing" value="<?php echo $eng_drow;?>">
                                     <input  type="hidden" name="roll" value="<?php echo $roll_no;?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">English - 1:</label>
                                     <input required type="text" name="english" value="<?php echo $english; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Mathematicas - 1:</label>
                                     <input required type="text" name="math" value="<?php echo $math; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Chemistry:</label>
                                     <input required type="text" name="chemistry" value="<?php echo $chemistry; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Computer Fundamental:</label>
                                     <input required type="text" name="fundamental" value="<?php echo $com_fund; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Basic Electricity:</label>
                                     <input required type="text" name="electricity" value="<?php echo $electricity; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Basic Electronics:</label>
                                     <input required type="text" name="electronics"  value="<?php echo $electronics;?>">
                                 </div>
                                 <div class="form-group23">
                                     <input required type="submit" value="Submit" name="submit2">
                                 </div>
                                 </form>
<?php }}?>
                            </div>
                        </div>

                        
<?php require_once 'footer.php';?>

<?php

    if(isset($_POST['submit2'])) {
       
        $roll = $_POST['roll'];
        
        $drawing = $_POST['drawing'];
        
        $english = $_POST['english'];
        
        $math = $_POST['math'];
        
        $chemistry = $_POST['chemistry'];
        
        $fundamental = $_POST['fundamental'];
        
        $electricity = $_POST['electricity'];
        
        $electronics = $_POST['electronics'];

        //full marks..........
        $df_mark = '100';
        $ef_mark = '100';
        $mf_mark = '200';
        $cf_mark = '200';
        $ff_mark = '150';
        $eyf_mark = '200';
        $esf_mark = '150';

        //obtain marks...........
        $drawing_omark     = $drawing;
        $english_omark     = $english;
        $math_omark        = $math; 
        $chemistry_omark   = $chemistry; 
        $fundamental_omark = $fundamental;
        $electricity_omark = $electricity;
        $electronics_omark = $electronics; 
        
        //grade ............
        $drawing_grade = $allSubject->drawing_grade($drawing_omark);
        $english_grade = $allSubject->english_grade($english_omark);
        $math_grade = $allSubject->math_grade($math_omark);
        $chemistry_grade = $allSubject->chemistry_grade($chemistry_omark);
        $fundamental_grade = $allSubject->fundamental_grade($fundamental_omark);
        $electricity_grade = $allSubject->electricity_grade($electricity_omark);
        $electronics_grade = $allSubject->electronics_grade($electronics_omark);
       
        //points............
        $drawing_point = $allSubject->drawing_point($drawing_omark);
        $english_point = $allSubject->english_point($english_omark);
        $math_point = $allSubject->math_point($math_omark);
        $chemistry_point = $allSubject->chemistry_point($chemistry_omark);
        $fundamental_point = $allSubject->fundamental_point($fundamental_omark);
        $electricity_point = $allSubject->electricity_point($electricity_omark);
        $electronics_point = $allSubject->electronics_point($electronics_omark);

        $grade_average = $allSubject->grade_average_com_1st_seme($drawing_point,$english_point,$math_point,
                                                                 $chemistry_point,$fundamental_point,$electricity_point,
                                                                 $electronics_point);

        $sql="UPDATE computer SET  
                      `eng_drow_fmark` =:df_mark,
                      `eng_drow_omark` =:drawing_omark,
                      `eng_drow_grade` =:drawing_grade,
                      `eng_drow_point` =:drawing_point,

                      `eng_1_fmark` =:ef_mark,
                      `eng_1_omark` =:english_omark,
                      `eng_1_grade` =:english_grade,
                      `eng_1_point` =:english_point,  

                      `math_1_fmark` =:mf_mark,
                      `math_1_omark` =:math_omark,
                      `math_1_grade` =:math_grade,
                      `math_1_point` =:math_point,
                           
                      `chemistry_fmark` =:cf_mark,
                      `chemistry_omark` =:chemistry_omark,
                      `chemistry_grade` =:chemistry_grade,
                      `chemistry_point` =:chemistry_point, 

                      `com_fund_fmark` =:ff_mark,
                      `com_fund_omark` =:fundamental_omark,
                      `com_fund_grade` =:fundamental_grade,
                      `com_fund_point` =:fundamental_point,

                      `b_electricity_fmark` =:eyf_mark,
                      `b_electricity_omark` =:electricity_omark,
                      `b_electricity_grade` =:electricity_grade,
                      `b_electricity_point` =:electricity_point,

                      `b_electronics_fmark` =:esf_mark,
                      `b_electronics_omark` =:electronics_omark,
                      `b_electronics_grade` =:electronics_grade,
                      `b_electronics_point` =:electronics_point,
                      `grade_average_1st_seme` =:grade_average

                        WHERE roll =:roll";
        
        $query  = $conn->prepare($sql);
        $querys = $query->execute(
          array(
                ':df_mark'           => $df_mark,
                ':drawing_omark'     => $drawing_omark,
                ':drawing_grade'     => $drawing_grade,
                ':drawing_point'     => $drawing_point,
                ':ef_mark'           => $ef_mark,
                ':english_omark'     => $english_omark,
                ':english_grade'     => $english_grade,
                ':english_point'     => $english_point,
                ':mf_mark'           => $mf_mark,
                ':math_omark'        => $math_omark,
                ':math_grade'        => $math_grade,
                ':math_point'        => $math_point,
                ':cf_mark'           => $cf_mark,
                ':chemistry_omark'   => $chemistry_omark,
                ':chemistry_grade'   => $chemistry_grade,
                ':chemistry_point'   => $chemistry_point,
                ':ff_mark'           => $ff_mark,
                ':fundamental_omark' => $fundamental_omark,
                ':fundamental_grade' => $fundamental_grade,
                ':fundamental_point' => $fundamental_point,
                ':eyf_mark'          => $eyf_mark,
                ':electricity_omark' => $electricity_omark,
                ':electricity_grade' => $electricity_grade,
                ':electricity_point' => $electricity_point,
                ':esf_mark'          => $esf_mark,
                ':electronics_omark' => $electronics_omark,
                ':electronics_grade' => $electronics_grade,
                ':electronics_point' => $electronics_point,
                ':grade_average'     => $grade_average,
                ':roll'              => $roll));

        if ($querys) {
            echo "<script>alert('Result Insert Successfully');</script>";
        }
        else{
            echo "<script>alert('Result Not Insert');</script>";
        }
    }
    

    

?>


