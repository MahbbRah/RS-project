<?php require_once 'head.php';?>
                            <div class="col-md-8"><br>
                             <div class="submit-form">
                             <form action="" method="post">
                                 <h3 class="dept-title">RAC TECHNOLOGY (69)</h3>
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
$query = $conn->prepare("SELECT * FROM rac WHERE roll = :roll");

    $data = array(':roll'=>$roll);

    /*** execute the prepared statement ***/
    $query->execute($data);
     
    while($row = $query->fetch()){
    $rac_cycles = $row['rac_cycles_omark'];
    $electronics = $row['b_electronics_omark'];
    $com_application = $row['com_application_2_omark'];
    $math = $row['math_3_omark'];
    $physics = $row['physics_2_omark'];
    $social = $row['social_s1_omark'];
    $english = $row['eng_2_omark'];
    
    $roll_no = $row['roll'];
?>                              
                                
                             <form action="" method="post">
                                 <div class="form-group3">
                                     <label class="sub-name2">Refrigetation Cycles &amp; Com:</label>
                                     <input required type="text" name="rac_cycles" value="<?php echo $rac_cycles; ?>">
                                     <input type="hidden" name="roll" value="<?php echo $roll_no; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Basic Electronics:</label>
                                     <input required type="text" name="b_electronics" value="<?php echo $electronics; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Computer Application - 2:</label>
                                     <input required type="text" name="com_application" value="<?php echo $com_application; ?>">
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
                                     <input required type="text" name="social" value="<?php echo $social; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">English - 2:</label>
                                     <input required type="text" name="english2" value="<?php echo $english; ?>">
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
        
        $rac_cycles = $_POST['rac_cycles'];
        
        $b_electronics = $_POST['b_electronics'];

        $com_application = $_POST['com_application'];
      
        $math = $_POST['math'];
        
        $physics = $_POST['physics'];
        
        $social_s1 = $_POST['social'];

        $english2 = $_POST['english2'];


        //full marks..........
        $rcf_mark = '200';
        $bef_mark = '150';
        $caf_mark = '100';
        $mf_mark = '200';
        $pf_mark = '200';
        $ssf_mark = '100';
        $ef_mark = '150';

        //obtain marks...........
        $rac_cycles_omark      = $rac_cycles;
        $b_electronics_omark   = $b_electronics; 
        $com_application_omark = $com_application;
        $math_omark            = $math; 
        $physics_omark         = $physics;
        $social_s1_omark       = $social_s1; 
        $english2_omark        = $english2;
        
        //grade ............
        $rac_cycles_grade       = $allSubject->rac_cycles_grade($rac_cycles_omark);
        $b_electronics_grade    = $allSubject->electronics_grade($b_electronics_omark);
        $com_application_grade  = $allSubject->com_application_grade($com_application_omark);
        $math_grade             = $allSubject->math_grade($math_omark);
        $physics_grade          = $allSubject->physics_grade($physics_omark);
        $social_s1_grade        = $allSubject->social_s1_grade($social_s1_omark);
        $english2_grade         = $allSubject->english2_grade($english2_omark);
        
        //points............
        $rac_cycles_point       = $allSubject->rac_cycles_point($rac_cycles_omark);
        $b_electronics_point    = $allSubject->electronics_point($b_electronics_omark);
        $com_application_point  = $allSubject->com_application_point($com_application_omark);
        $math_point             = $allSubject->math_point($math_omark);
        $physics_point          = $allSubject->physics_point($physics_omark);
        $social_s1_point        = $allSubject->social_s1_point($social_s1_omark);
        $english2_point         = $allSubject->english2_point($english2_omark);
        
        $grade_average = $allSubject->grade_average_rac_3rd_seme($rac_cycles_point,
                                                                  $b_electronics_point,
                                                                  $com_application_point,
                                                                  $math_point,
                                                                  $physics_point,
                                                                  $social_s1_point,
                                                                  $english2_point
                                                                 );

        $sql="UPDATE rac SET  
                      
                      `rac_cycles_fmark` =:rcf_mark,
                      `rac_cycles_omark` =:rac_cycles_omark,
                      `rac_cycles_grade` =:rac_cycles_grade,
                      `rac_cycles_point` =:rac_cycles_point,

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

                      `eng_2_fmark` =:ef_mark,
                      `eng_2_omark` =:english2_omark,
                      `eng_2_grade` =:english2_grade,
                      `eng_2_point` =:english2_point, 


                      `grade_average_3rd_seme` =:grade_average

                        WHERE roll =:roll";
        
        $query  = $conn->prepare($sql);
        $querys = $query->execute(
          array(
               
                ':rcf_mark'             => $rcf_mark,
                ':rac_cycles_omark'     => $rac_cycles_omark,
                ':rac_cycles_grade'     => $rac_cycles_grade,
                ':rac_cycles_point'     => $rac_cycles_point,
               
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
                
                ':ef_mark'        => $ef_mark,
                ':english2_omark' => $english2_omark,
                ':english2_grade' => $english2_grade,
                ':english2_point' => $english2_point,
                

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



