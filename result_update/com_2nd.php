<?php require_once 'head.php';?>
                            <div class="col-md-8"><br>
                             <div class="submit-form">
                             <form action="" method="post">
                                 <h3 class="dept-title">COMPUTER TECHNOLOGY (66)</h3>
                                 <h4 class="seme-title">second SEMESTER</h4>
                                 <div class="form-group3">
                                     <label class="sub-name2">Roll No:</label>
                                     <input required class="input" type="text" name="roll"   placeholder="Enter Roll" >
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
    $english = $row['eng_2_omark'];
    $physical_edu = $row['physical_edu_omark'];
    $physics = $row['physics_1_omark'];
    $math = $row['math_2_omark'];
    $com_application = $row['com_application_1_omark'];
    $bangla = $row['bangla_omark'];
    $electronicsdc = $row['ele_dev_cir_1_omark'];
    $b_workshop = $row['b_workshop_omark'];
    $roll_no = $row['roll'];
?> 

                             <form action="" method="post">                             
                                 <div class="form-group3">
                                     <label class="sub-name2">English - 2:</label>
                                     <input required type="text" name="english2" value="<?php echo $english;?>">
                                     <input type="hidden" name="roll" value="<?php echo $roll_no;?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Physical Education:</label>
                                     <input required type="text" name="physical_edu" value="<?php echo $physical_edu;?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Physics - 1:</label>
                                     <input required type="text" name="physics" value="<?php echo $physics;?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Mathematics - 2:</label>
                                     <input required type="text" name="math" value="<?php echo $math;?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Computer Application - 1:</label>
                                     <input required type="text" name="com_application" value="<?php echo $com_application;?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Bangla:</label>
                                     <input required type="text" name="bangla" value="<?php echo $bangla;?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Electronics D &amp; Circ. - 1:</label>
                                     <input required type="text" name="electronics_d_c" value="<?php echo $electronicsdc;?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Basic Workshop Practice:</label>
                                     <input required type="text" name="b_workshop" value="<?php echo $b_workshop;?>">
                                 </div>
                                 <div class="form-group23">
                                     <input required type="submit" value="Submit" name="submit2">
                                 </div>
                                 </form>
  <?php
}}
  ?>

                        </div>
                        </div>
<?php require_once 'footer.php';?>

<?php

    if(isset($_POST['submit2'])) {
       
        $roll = $_POST['roll'];
        
        $english2 = $_POST['english2'];

        $physical_edu = $_POST['physical_edu'];
        
        $physics = $_POST['physics'];
        
        $math = $_POST['math'];
        
        $com_application = $_POST['com_application'];
        
        $bangla = $_POST['bangla'];

        $electronics_d_c = $_POST['electronics_d_c'];

        $b_workshop = $_POST['b_workshop'];



        //full marks..........
        $ef_mark = '150';
        $pef_mark = '50';
        $pf_mark = '200';
        $mf_mark = '200';
        $caf_mark = '100';
        $bf_mark = '150';
        $edcf_mark = '200';
        $bwpf_mark = '100';

        //obtain marks...........
        $english2_omark        = $english2;
        $physical_edu_omark    = $physical_edu; 
        $physics_omark         = $physics;
        $math_omark            = $math; 
        $com_application_omark = $com_application;
        $bangla_omark          = $bangla; 
        $electronics_d_c_omark = $electronics_d_c;
        $b_workshop_omark      = $b_workshop;
        //grade ............
        
        $english2_grade        = $allSubject->english2_grade($english2_omark);
        $physical_edu_grade    = $allSubject->physical_edu_grade($physical_edu_omark);
        $physics_grade         = $allSubject->physics_grade($physics_omark);
        $math_grade            = $allSubject->math_grade($math_omark);
        $com_application_grade = $allSubject->com_application_grade($com_application_omark);
        $bangla_grade          = $allSubject->bangla_grade($bangla_omark);
        $electronics_d_c_grade = $allSubject->electronics_d_c_grade($electronics_d_c_omark);
        $b_workshop_grade      = $allSubject->b_workshop_grade($b_workshop_omark); 
        //points............
        
        $english2_point        = $allSubject->english2_point($english2_omark);
        $physical_edu_point    = $allSubject->physical_edu_point($physical_edu_omark);
        $physics_point         = $allSubject->physics_point($physics_omark);
        $math_point            = $allSubject->math_point($math_omark);
        $com_application_point = $allSubject->com_application_point($com_application_omark);
        $bangla_point          = $allSubject->bangla_point($bangla_omark);
        $electronics_d_c_point = $allSubject->electronics_d_c_point($electronics_d_c_omark);
        $b_workshop_point      = $allSubject->b_workshop_point($b_workshop_omark); 

        $grade_average = $allSubject->grade_average_com_2nd_seme($english2_point,
                                                                $physical_edu_point,
                                                                $physics_point,
                                                                $math_point,
                                                                $com_application_point,
                                                                $bangla_point,
                                                                $electronics_d_c_point,
                                                                $b_workshop_point
                                                                );

        $sql="UPDATE computer SET  

                      `eng_2_fmark` =:ef_mark,
                      `eng_2_omark` =:english2_omark,
                      `eng_2_grade` =:english2_grade,
                      `eng_2_point` =:english2_point, 

                      `physical_edu_fmark` =:pef_mark,
                      `physical_edu_omark` =:physical_edu_omark,
                      `physical_edu_grade` =:physical_edu_grade,
                      `physical_edu_point` =:physical_edu_point,

                      `physics_1_fmark` =:pf_mark,
                      `physics_1_omark` =:physics_omark,
                      `physics_1_grade` =:physics_grade,
                      `physics_1_point` =:physics_point,
 
                      `math_2_fmark` =:mf_mark,
                      `math_2_omark` =:math_omark,
                      `math_2_grade` =:math_grade,
                      `math_2_point` =:math_point,
                         
                      `com_application_1_fmark` =:caf_mark,
                      `com_application_1_omark` =:com_application_omark,
                      `com_application_1_grade` =:com_application_grade,
                      `com_application_1_point` =:com_application_point,   

                      `bangla_fmark` =:bf_mark,
                      `bangla_omark` =:bangla_omark,
                      `bangla_grade` =:bangla_grade,
                      `bangla_point` =:bangla_point,


                      `ele_dev_cir_1_fmark` =:edcf_mark,
                      `ele_dev_cir_1_omark` =:electronics_d_c_omark,
                      `ele_dev_cir_1_grade` =:electronics_d_c_grade,
                      `ele_dev_cir_1_point` =:electronics_d_c_point,

                      `b_workshop_fmark` =:bwpf_mark,
                      `b_workshop_omark` =:b_workshop_omark,
                      `b_workshop_grade` =:b_workshop_grade,
                      `b_workshop_point` =:b_workshop_point,


                      `grade_average_2nd_seme` =:grade_average

                        WHERE roll =:roll";
        
        $query  = $conn->prepare($sql);
        $querys = $query->execute(
          array(

                ':ef_mark'           => $ef_mark,
                ':english2_omark'     => $english2_omark,
                ':english2_grade'     => $english2_grade,
                ':english2_point'     => $english2_point,

                ':pef_mark'             => $pef_mark,
                ':physical_edu_omark'   => $physical_edu_omark,
                ':physical_edu_grade'   => $physical_edu_grade,
                ':physical_edu_point'   => $physical_edu_point,

                ':pf_mark'       => $pf_mark,
                ':physics_omark' => $physics_omark,
                ':physics_grade' => $physics_grade,
                ':physics_point' => $physics_point,

                ':mf_mark'           => $mf_mark,
                ':math_omark'        => $math_omark,
                ':math_grade'        => $math_grade,
                ':math_point'        => $math_point,

                ':caf_mark'              => $caf_mark,
                ':com_application_omark' => $com_application_omark,
                ':com_application_grade' => $com_application_grade,
                ':com_application_point' => $com_application_point,

                ':bf_mark'      => $bf_mark,
                ':bangla_omark' => $bangla_omark,
                ':bangla_grade' => $bangla_grade,
                ':bangla_point' => $bangla_point,

                ':edcf_mark'               => $edcf_mark,
                ':electronics_d_c_omark' => $electronics_d_c_omark,
                ':electronics_d_c_grade' => $electronics_d_c_grade,
                ':electronics_d_c_point' => $electronics_d_c_point,

                ':bwpf_mark'        => $bwpf_mark,
                ':b_workshop_omark' => $b_workshop_omark,
                ':b_workshop_grade' => $b_workshop_grade,
                ':b_workshop_point' => $b_workshop_point,
                
                ':grade_average'    => $grade_average,
                ':roll'             => $roll));

        if ($querys) {
            echo "<script>alert('Result Insert Successfully');</script>";
        }
        else{
            echo "<script>alert('Result Not Insert');</script>";
        }
    }
    
    

?>


