<?php require_once 'head.php';?>
                            <div class="col-md-8"><br>
                             <div class="submit-form">
                             <form action="" method="post">
                                 <h3 class="dept-title">Food TECHNOLOGY (69)</h3>
                                 <h4 class="seme-title">THIRD SEMESTER</h4>
                                 <div class="form-group3">
                                     <label class="sub-name22">Roll No:</label>
                                     <input required class="input" type="text" name="roll"   placeholder="Enter Roll" >
                                     <input type="submit" name="query" value="Submit">
                                </div>
                                </form>
<?php
if (isset($_POST['query'])) {
    $roll = $_POST['roll'];
$query = $conn->prepare("SELECT * FROM food WHERE roll = :roll");

    $data = array(':roll'=>$roll);

    /*** execute the prepared statement ***/
    $query->execute($data);
     
    while($row = $query->fetch()){
    $catering_menag = $row['catering_menag_omark'];
    $com_application = $row['com_application_2_omark'];
    $electronics = $row['b_electronics_omark'];
    $math = $row['math_3_omark'];
    $physics = $row['physics_2_omark'];
    $social = $row['social_s1_omark'];
    $engin_materials = $row['engin_materials_omark'];
    
    $roll_no = $row['roll'];
?>
                                <form action="" method="post">
                                 <div class="form-group3">
                                     <label class="sub-name22">Catering Managment:</label>
                                     <input type="text" name="catering_menag" value="<?php echo $catering_menag; ?>">
                                     <input type="hidden" name="roll" value="<?php echo $roll_no; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name22">Basic Electronics:</label>
                                     <input type="text" name="b_electronics" value="<?php echo $electronics; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name22"hysics - 1>Computer aplication-2:</label>
                                     <input type="text" name="com_application" value="<?php echo $com_application; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name22">Mathematics - 3:</label>
                                     <input type="text" name="math" value="<?php echo $math; ?>">
                                 </div>
                                  <div class="form-group3">
                                     <label class="sub-name22">Physics -2:</label>
                                     <input type="text" name="physics" value="<?php echo $physics; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name22">Social science-1:</label>
                                     <input type="text" name="social_s1" value="<?php echo $social; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name22">Engineeringm Metarials:</label>
                                     <input type="text" name="engin_materials" value="<?php echo $engin_materials; ?>">
                                 </div>
                               
                                 <div class="form-group23">
                                     <input type="submit" value="Submit" name="submit2">
                                 </div>
                             </form>

<?php }}?>
                             </div>
                             </div>

<?php require_once 'footer.php';?>
<?php

    if(isset($_POST['submit2'])) {
        $roll = $_POST['roll'];
        
        $catering_menag = $_POST['catering_menag'];
        
        $electronics = $_POST['b_electronics'];

        $com_application = $_POST['com_application'];
      
        $math = $_POST['math'];
        
        $physics = $_POST['physics'];
        
        $social_s1 = $_POST['social_s1'];

        $engin_materials = $_POST['engin_materials'];


        //full marks..........
        $cmf_mark = '200';
        $bef_mark = '150';
        $caf_mark = '100';
        $mf_mark = '200';
        $pf_mark = '200';
        $ssf_mark = '100';
        $emf_mark = '150';

        //obtain marks...........
        $catering_menag_omark  = $catering_menag;
        $b_electronics_omark   = $electronics; 
        $com_application_omark = $com_application;
        $math_omark            = $math; 
        $physics_omark         = $physics;
        $social_s1_omark       = $social_s1; 
        $engin_materials_omark = $engin_materials;
        
        //grade ............
        $catering_menag_grade   = $allSubject->catering_menag_grade($catering_menag_omark);
        $b_electronics_grade    = $allSubject->electronics_grade($b_electronics_omark);
        $com_application_grade  = $allSubject->com_application_grade($com_application_omark);
        $math_grade             = $allSubject->math_grade($math_omark);
        $physics_grade          = $allSubject->physics_grade($physics_omark);
        $social_s1_grade        = $allSubject->social_s1_grade($social_s1_omark);
        $engin_materials_grade  = $allSubject->engin_materials_grade($engin_materials_omark);
        
        //points............
        $catering_menag_point   = $allSubject->catering_menag_point($catering_menag_omark);
        $b_electronics_point    = $allSubject->electronics_point($b_electronics_omark);
        $com_application_point  = $allSubject->com_application_point($com_application_omark);
        $math_point             = $allSubject->math_point($math_omark);
        $physics_point          = $allSubject->physics_point($physics_omark);
        $social_s1_point        = $allSubject->social_s1_point($social_s1_omark);
        $engin_materials_point  = $allSubject->engin_materials_point($engin_materials_omark);
        
        $grade_average = $allSubject->grade_average_food_3rd_seme($catering_menag_point,
                                                                  $b_electronics_point,
                                                                  $com_application_point,
                                                                  $math_point,
                                                                  $physics_point,
                                                                  $social_s1_point,
                                                                  $engin_materials_point
                                                                 );

        $sql="UPDATE food SET  
                      
                      `catering_menag_fmark` =:cmf_mark,
                      `catering_menag_omark` =:catering_menag_omark,
                      `catering_menag_grade` =:catering_menag_grade,
                      `catering_menag_point` =:catering_menag_point,

                      `b_electronics_fmark` =:bef_mark,
                      `b_electronics_omark` =:b_electronics_omark,
                      `b_electronics_grade` =:b_electronics_grade,
                      `b_electronics_point` =:b_electronics_point,
                       
                      `com_application_2_fmark` =:caf_mark,
                      `com_application_2_omark` =:com_application_omark,
                      `com_application_2_grade` =:com_application_grade,
                      `com_application_2_point` =:com_application_point,  

                      `math_3_fmark` =:mf_mark,
                      `math_3_omark` =:math_omark,
                      `math_3_grade` =:math_grade,
                      `math_3_point` =:math_point,

                      `physics_2_fmark` =:pf_mark,
                      `physics_2_omark` =:physics_omark,
                      `physics_2_grade` =:physics_grade,
                      `physics_2_point` =:physics_point,

                      `social_s1_fmark` =:ssf_mark,
                      `social_s1_omark` =:social_s1_omark,
                      `social_s1_grade` =:social_s1_grade,
                      `social_s1_point` =:social_s1_point,

                      `engin_materials_fmark` =:emf_mark,
                      `engin_materials_omark` =:engin_materials_omark,
                      `engin_materials_grade` =:engin_materials_grade,
                      `engin_materials_point` =:engin_materials_point, 


                      `grade_average_3rd_seme` =:grade_average

                        WHERE roll =:roll";
        
        $query  = $conn->prepare($sql);
        $querys = $query->execute(
          array(
               
                ':cmf_mark'                 => $cmf_mark,
                ':catering_menag_omark'     => $catering_menag_omark,
                ':catering_menag_grade'     => $catering_menag_grade,
                ':catering_menag_point'     => $catering_menag_point,
               
                ':bef_mark'              => $bef_mark,
                ':b_electronics_omark'   => $b_electronics_omark,
                ':b_electronics_grade'   => $b_electronics_grade,
                ':b_electronics_point'   => $b_electronics_point,
                
                ':caf_mark'                  => $caf_mark,
                ':com_application_omark'     => $com_application_omark,
                ':com_application_grade'     => $com_application_grade,
                ':com_application_point'     => $com_application_point,
                
                ':mf_mark'           => $mf_mark,
                ':math_omark'        => $math_omark,
                ':math_grade'        => $math_grade,
                ':math_point'        => $math_point,
                
                ':pf_mark'       => $pf_mark,
                ':physics_omark' => $physics_omark,
                ':physics_grade' => $physics_grade,
                ':physics_point' => $physics_point,
                
                ':ssf_mark'        => $ssf_mark,
                ':social_s1_omark' => $social_s1_omark,
                ':social_s1_grade' => $social_s1_grade,
                ':social_s1_point' => $social_s1_point,
                
                ':emf_mark'              => $emf_mark,
                ':engin_materials_omark' => $engin_materials_omark,
                ':engin_materials_grade' => $engin_materials_grade,
                ':engin_materials_point' => $engin_materials_point,
                

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


