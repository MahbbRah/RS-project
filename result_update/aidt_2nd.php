                          <?php require_once 'head.php';?>
                            <div class="col-md-8"><br>
                             <div class="submit-form">
                                <form action="" method="post">
                                 <h3 class="dept-title">aidt TECHNOLOGY (69)</h3>
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
$query = $conn->prepare("SELECT * FROM aidt WHERE roll = :roll");

    $data = array(':roll'=>$roll);

    /*** execute the prepared statement ***/
    $query->execute($data);
    while($row = $query->fetch()){
    $engin_materials = $row['engin_materials_omark'];
    $english = $row['eng_2_omark'];
    $physics = $row['physics_1_omark'];
    $math = $row['math_2_omark'];
    $com_application1 = $row['com_application_1_omark'];
    $electricity = $row['b_electricity_omark'];
    $bangla = $row['bangla_omark'];
    $roll_no = $row['roll'];
?>
                                <form action="" method="post">
                                 <div class="form-group3">
                                     <label class="sub-name2">Engineering Materials:</label>
                                     <input required type="text" name="engin_materials" value="<?php echo $engin_materials; ?>">
                                     <input type="hidden" name="roll" value="<?php echo $roll_no; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">English - 2:</label>
                                     <input required type="text" name="english" value="<?php echo $english; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Physics - 1:</label>
                                     <input required type="text" name="physics" value="<?php echo $physics; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Mathematics - 2:</label>
                                     <input required type="text" name="math" value="<?php echo $math; ?>">
                                 </div>
                                  <div class="form-group3">
                                     <label class="sub-name2">Computer Application - 1:</label>
                                     <input required type="text" name="com_application" value="<?php echo $com_application1; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Basic Electricty:</label>
                                     <input required type="text" name="electricity" value="<?php echo $electricity; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Bangla:</label>
                                     <input required type="text" name="bangla" value="<?php echo $bangla; ?>">
                                 </div>
                               
                                 <div class="form-group23">
                                     <input required type="submit" value="Submit" name="submit2">
                                 </div>
                             </form>
<?php
 }
}
?>

                            </div>
                        </div>

<?php require_once 'footer.php';?>
<?php

    if(isset($_POST['submit2'])) {
       
        $roll = $_POST['roll'];
        
        $bangla = $_POST['bangla'];
        $english = $_POST['english'];
        $physics = $_POST['physics'];
        $math = $_POST['math'];
        $com_application = $_POST['com_application'];
        $engin_materials = $_POST['engin_materials'];
        $electricity = $_POST['electricity'];

        //full marks..........
        $emf_mark = '150';
        $ef_mark = '150';
        $pf_mark = '200';
        $mf_mark = '200';
        $caf_mark = '100';
        $bef_mark = '200';
        $bf_mark = '150';

        //obtain marks...........
        $bangla_omark          = $bangla; 
        $english2_omark        = $english;
        $physics_omark         = $physics;
        $math_omark            = $math; 
        $engin_materials_omark = $engin_materials; 
        $com_application_omark = $com_application;
        $b_electricity_omark   = $electricity;
        //grade ............
        
        $english2_grade        = $allSubject->english2_grade($english2_omark);
        $engin_materials_grade = $allSubject->engin_materials_grade($engin_materials_omark);
        $physics_grade         = $allSubject->physics_grade($physics_omark);
        $math_grade            = $allSubject->math_grade($math_omark);
        $com_application_grade = $allSubject->com_application_grade($com_application_omark);
        $bangla_grade          = $allSubject->bangla_grade($bangla_omark);
        $b_electricity_grade   = $allSubject->electricity_grade($b_electricity_omark);
        //points............
        
        $english2_point        = $allSubject->english2_point($english2_omark);
        $engin_materials_point = $allSubject->engin_materials_point($engin_materials_omark);
        $physics_point         = $allSubject->physics_point($physics_omark);
        $math_point            = $allSubject->math_point($math_omark);
        $com_application_point = $allSubject->com_application_point($com_application_omark);
        $bangla_point          = $allSubject->bangla_point($bangla_omark);
        $b_electricity_point   = $allSubject->electricity_point($b_electricity_omark); 

        $grade_average = $allSubject->grade_average_aidt_2nd_seme(
                                                                $engin_materials_point,
                                                                $english2_point,
                                                                $physics_point,
                                                                $math_point,
                                                                $com_application_point,
                                                                $b_electricity_point,
                                                                $bangla_point
                                                                );

        $sql="UPDATE aidt SET  

                      `engin_materials_fmark` =:emf_mark,
                      `engin_materials_omark` =:engin_materials_omark,
                      `engin_materials_grade` =:engin_materials_grade,
                      `engin_materials_point` =:engin_materials_point,

                      `eng_2_fmark` =:ef_mark,
                      `eng_2_omark` =:english2_omark,
                      `eng_2_grade` =:english2_grade,
                      `eng_2_point` =:english2_point, 

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

                      `b_electricity_fmark` =:bef_mark,
                      `b_electricity_omark` =:b_electricity_omark,
                      `b_electricity_grade` =:b_electricity_grade,
                      `b_electricity_point` =:b_electricity_point,
                      
                      `bangla_fmark` =:bf_mark,
                      `bangla_omark` =:bangla_omark,
                      `bangla_grade` =:bangla_grade,
                      `bangla_point` =:bangla_point,

                      `grade_average_2nd_seme` =:grade_average

                        WHERE roll =:roll";
        
        $query  = $conn->prepare($sql);
        $querys = $query->execute(
          array(
                ':emf_mark'                => $emf_mark,
                ':engin_materials_omark'   => $engin_materials_omark,
                ':engin_materials_grade'   => $engin_materials_grade,
                ':engin_materials_point'   => $engin_materials_point,
               
                ':ef_mark'            => $ef_mark,
                ':english2_omark'     => $english2_omark,
                ':english2_grade'     => $english2_grade,
                ':english2_point'     => $english2_point,

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

                ':bef_mark'            => $bef_mark,
                ':b_electricity_omark' => $b_electricity_omark,
                ':b_electricity_grade' => $b_electricity_grade,
                ':b_electricity_point' => $b_electricity_point,
                
                ':bf_mark'      => $bf_mark,
                ':bangla_omark' => $bangla_omark,
                ':bangla_grade' => $bangla_grade,
                ':bangla_point' => $bangla_point,

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


