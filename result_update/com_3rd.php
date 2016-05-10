<?php require_once 'head.php';?>
                            <div class="col-md-8"><br>
                             <div class="submit-form">
                                <form action="" method="post">
                                 <h3 class="dept-title">COMPUTER TECHNOLOGY (66)</h3>
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
$query = $conn->prepare("SELECT * FROM computer WHERE roll = :roll");

    $data = array(':roll'=>$roll);

    /*** execute the prepared statement ***/
    $query->execute($data);
    while($row = $query->fetch()){
    $Programming = $row['p_lang_1_omark'];
    $com_application = $row['com_application_2_omark'];
    $digital_ele = $row['digital_ele_omark'];
    $industrial_ele = $row['industrial_ele_omark'];
    $math = $row['math_3_omark'];
    $physics = $row['physics_2_omark'];
    $social_s1 = $row['social_s1_omark'];
    $roll_no = $row['roll'];
?>
                                <form action="" method="post">
                                
                                 <div class="form-group3">
                                     <label class="sub-name2">Programming Language - 1:</label>
                                     <input required type="text" name="p_lang_1" value="<?php echo $Programming;?>">
                                     <input type="hidden" name="roll" value="<?php echo $roll_no;?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Computer Application - 2:</label>
                                     <input required type="text" name="com_application" value="<?php echo $com_application;?>" >
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Digaital Electronics - 1:</label>
                                     <input required type="text" name="digital_ele" value="<?php echo $digital_ele;?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Industrial Electronics:</label>
                                     <input required type="text" name="industrial_ele" value="<?php echo $industrial_ele;?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Mathematics - 3:</label>
                                     <input required type="text" name="math" value="<?php echo $math;?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Physics - 2:</label>
                                     <input required type="text" name="physics" value="<?php echo $physics;?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Social Science - 1:</label>
                                     <input required type="text" name="social_s1" value="<?php echo $social_s1;?>">
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
        
        $p_lang_1 = $_POST['p_lang_1'];
        
        $com_application = $_POST['com_application'];
        
        $digital_ele = $_POST['digital_ele'];
        
        $industrial_ele = $_POST['industrial_ele'];

        $math = $_POST['math'];
        
        $physics = $_POST['physics'];
        
        $social_s1 = $_POST['social_s1'];

        //full marks..........
        $pf_mark = '150';
        $caf_mark = '100';
        $def_mark = '200';
        $ief_mark = '150';
        $mf_mark = '200';
        $pf_mark = '200';
        $ssf_mark = '100';

        //obtain marks...........
        $p_lang_1_omark     = $p_lang_1;
        $com_application_omark     = $com_application;
        $digital_ele_omark   = $digital_ele; 
        $industrial_ele_omark = $industrial_ele;
        $math_omark        = $math; 
        $physics_omark = $physics;
        $social_s1_omark = $social_s1; 
        
        //grade ............
        $p_lang_1_grade = $allSubject->p_lang_1_grade($p_lang_1_omark);
        $com_application_grade = $allSubject->com_application_grade($com_application_omark);
        $digital_ele_grade = $allSubject->digital_ele_grade($digital_ele_omark);
        $industrial_ele_grade = $allSubject->industrial_ele_grade($industrial_ele_omark);
        $math_grade = $allSubject->math_grade($math_omark);
        $physics_grade = $allSubject->physics_grade($physics_omark);
        $social_s1_grade = $allSubject->social_s1_grade($social_s1_omark);
       
        //points............
        $p_lang_1_point = $allSubject->p_lang_1_point($p_lang_1_omark);
        $com_application_point = $allSubject->com_application_point($com_application_omark);
        $digital_ele_point = $allSubject->digital_ele_point($digital_ele_omark);
        $industrial_ele_point = $allSubject->industrial_ele_point($industrial_ele_omark);
        $math_point = $allSubject->math_point($math_omark);
        $physics_point = $allSubject->physics_point($physics_omark);
        $social_s1_point = $allSubject->social_s1_point($social_s1_omark);

        $grade_average = $allSubject->grade_average_com_3rd_seme($p_lang_1_point,$com_application_point,$math_point,
                                                                 $digital_ele_point,$industrial_ele_point,$physics_point,
                                                                 $social_s1_point);

        $sql="UPDATE computer SET  
                      
                      `p_lang_1_fmark` =:pf_mark,
                      `p_lang_1_omark` =:p_lang_1_omark,
                      `p_lang_1_grade` =:p_lang_1_grade,
                      `p_lang_1_point` =:p_lang_1_point,

                      `com_application_2_fmark` =:caf_mark,
                      `com_application_2_omark` =:com_application_omark,
                      `com_application_2_grade` =:com_application_grade,
                      `com_application_2_point` =:com_application_point,  

                      `digital_ele_1_fmark` =:def_mark,
                      `digital_ele_1_omark` =:digital_ele_omark,
                      `digital_ele_1_grade` =:digital_ele_grade,
                      `digital_ele_1_point` =:digital_ele_point,
                           
                      `industrial_ele_fmark` =:ief_mark,
                      `industrial_ele_omark` =:industrial_ele_omark,
                      `industrial_ele_grade` =:industrial_ele_grade,
                      `industrial_ele_point` =:industrial_ele_point, 

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
               
                ':pf_mark'            => $pf_mark,
                ':p_lang_1_omark'     => $p_lang_1_omark,
                ':p_lang_1_grade'     => $p_lang_1_grade,
                ':p_lang_1_point'     => $p_lang_1_point,
               
                ':caf_mark'                  => $caf_mark,
                ':com_application_omark'     => $com_application_omark,
                ':com_application_grade'     => $com_application_grade,
                ':com_application_point'     => $com_application_point,
                
                ':def_mark'            => $def_mark,
                ':digital_ele_omark'   => $digital_ele_omark,
                ':digital_ele_grade'   => $digital_ele_grade,
                ':digital_ele_point'   => $digital_ele_point,
                
                ':ief_mark'             => $ief_mark,
                ':industrial_ele_omark' => $industrial_ele_omark,
                ':industrial_ele_grade' => $industrial_ele_grade,
                ':industrial_ele_point' => $industrial_ele_point,
                
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


