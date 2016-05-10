<?php require_once 'head.php';?>
                            <div class="col-md-8"><br>
                             <div class="submit-form">
                             <form action="" method="post">
                                 <h3 class="dept-title">aidt TECHNOLOGY (69)</h3>
                                 <h4 class="seme-title">Third SEMESTER</h4>
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
    $arch_design_drawing = $row['arch_design_drawing_omark'];
    $building_finish_materials = $row['building_finish_materials_omark'];
    $com_application = $row['com_application_2_omark'];
    $electronics = $row['b_electronics_omark'];
    $math = $row['math_3_omark'];
    $physics = $row['physics_2_omark'];
    $social = $row['social_s1_omark'];
    $roll_no = $row['roll'];
?>
   
                              <form action="" method="post">
                                 <div class="form-group3">
                                     <label class="sub-name2">Architectural Design &amp; D:</label>
                                     <input required type="text" name="arch_design_drawing" value="<?php echo $arch_design_drawing; ?>">
                                     <input type="hidden" name="roll" value="<?php echo $roll_no; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Building & Finish Materials:</label>
                                     <input required type="text" name="building_finish_materials" value="<?php echo $building_finish_materials; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Comptuer Application - 2:</label>
                                     <input required type="text" name="com_application" value="<?php echo $com_application; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Basic Electronics:</label>
                                     <input required type="text" name="b_electronics" value="<?php echo $electronics; ?>">
                                 </div>
                                  <div class="form-group3">
                                     <label class="sub-name2">Mathematics - 3:</label>
                                     <input required type="text" name="math" value="<?php echo $math; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Physics - 2:</label>
                                     <input required type="text" name="physics" value="<?php echo $physics; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Social Science - 1:</label>
                                     <input required type="text" name="social_s1" value="<?php echo $social; ?>">
                                 </div>
                               
                                 <div class="form-group23">
                                     <input required type="submit" value="Submit" name="submit2">
                                 </div>
                             </form>
<?php }} ?>
                             </div>
                             </div>

<?php require_once 'footer.php';?>
<?php

    if(isset($_POST['submit2'])) {
       
        $roll = $_POST['roll'];
        
        $arch_design_drawing = $_POST['arch_design_drawing'];
        
        $building_finish_materials = $_POST['building_finish_materials'];
        
        $com_application = $_POST['com_application'];
      
        $electronics = $_POST['b_electronics'];

        
        $math = $_POST['math'];
        
        $physics = $_POST['physics'];
        
        $social = $_POST['social_s1'];

       

        //full marks..........
        $addf_mark = '250';
        $bfmf_mark = '100';
        $caf_mark = '100';
        $bef_mark = '150';
        $mf_mark = '200';
        $pf_mark = '200';
        $ssf_mark = '100';
        
        //obtain marks...........
        $arch_design_drawing_omark  = $arch_design_drawing;
        $building_finish_materials_omark = $building_finish_materials;
        $com_application_omark = $com_application;
        $b_electronics_omark   = $electronics; 
        $math_omark            = $math; 
        $physics_omark         = $physics;
        $social_s1_omark       = $social; 
        
        //grade ............
        $arch_design_drawing_grade   = $allSubject->arch_design_drawing_grade($arch_design_drawing_omark);
        $building_finish_materials_grade  = $allSubject->building_finish_materials_grade($building_finish_materials_omark);
        $com_application_grade  = $allSubject->com_application_grade($com_application_omark);
        $b_electronics_grade    = $allSubject->electronics_grade($b_electronics_omark);
        $math_grade             = $allSubject->math_grade($math_omark);
        $physics_grade          = $allSubject->physics_grade($physics_omark);
        $social_s1_grade        = $allSubject->social_s1_grade($social_s1_omark);
        
        //points............
        $arch_design_drawing_point   = $allSubject->arch_design_drawing_point($arch_design_drawing_omark);
        $building_finish_materials_point  = $allSubject->building_finish_materials_point($building_finish_materials_omark);
        $com_application_point  = $allSubject->com_application_point($com_application_omark);
        $b_electronics_point    = $allSubject->electronics_point($b_electronics_omark);
        $math_point             = $allSubject->math_point($math_omark);
        $physics_point          = $allSubject->physics_point($physics_omark);
        $social_s1_point        = $allSubject->social_s1_point($social_s1_omark);
        
        $grade_average = $allSubject->grade_average_food_aidt_seme($arch_design_drawing_point,
                                                                  $building_finish_materials_point,
                                                                  $com_application_point,
                                                                  $b_electronics_point,
                                                                  $math_point,
                                                                  $physics_point,
                                                                  $social_s1_point
                                                                 );

        $sql="UPDATE aidt SET  
                      `arch_design_drawing_fmark` =:addf_mark,
                      `arch_design_drawing_omark` =:arch_design_drawing_omark,
                      `arch_design_drawing_grade` =:arch_design_drawing_grade,
                      `arch_design_drawing_point` =:arch_design_drawing_point,

                      `building_finish_materials_fmark` =:bfmf_mark,
                      `building_finish_materials_omark` =:building_finish_materials_omark,
                      `building_finish_materials_grade` =:building_finish_materials_grade,
                      `building_finish_materials_point` =:building_finish_materials_point, 
                    
                      `com_application_2_fmark` =:caf_mark,
                      `com_application_2_omark` =:com_application_omark,
                      `com_application_2_grade` =:com_application_grade,
                      `com_application_2_point` =:com_application_point,  

                      `b_electronics_fmark` =:bef_mark,
                      `b_electronics_omark` =:b_electronics_omark,
                      `b_electronics_grade` =:b_electronics_grade,
                      `b_electronics_point` =:b_electronics_point,
                       
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

                      `grade_average_3rd_seme` =:grade_average

                        WHERE roll =:roll";
        
        $query  = $conn->prepare($sql);
        $querys = $query->execute(
          array(
               
                ':addf_mark'                 => $addf_mark,
                ':arch_design_drawing_omark'     => $arch_design_drawing_omark,
                ':arch_design_drawing_grade'     => $arch_design_drawing_grade,
                ':arch_design_drawing_point'     => $arch_design_drawing_point,
                
                ':bfmf_mark'              => $bfmf_mark,
                ':building_finish_materials_omark' => $building_finish_materials_omark,
                ':building_finish_materials_grade' => $building_finish_materials_grade,
                ':building_finish_materials_point' => $building_finish_materials_point,
                
                ':caf_mark'                  => $caf_mark,
                ':com_application_omark'     => $com_application_omark,
                ':com_application_grade'     => $com_application_grade,
                ':com_application_point'     => $com_application_point,
                
                ':bef_mark'              => $bef_mark,
                ':b_electronics_omark'   => $b_electronics_omark,
                ':b_electronics_grade'   => $b_electronics_grade,
                ':b_electronics_point'   => $b_electronics_point,
                
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



