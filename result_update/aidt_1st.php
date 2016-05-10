<?php require_once 'head.php';?>
                        <div class="col-md-8"><br>
                         <div class="submit-form">
                            <form action="" method="post">
                                 <h3 class="dept-title">aidt TECHNOLOGY (69)</h3>
                                 <h4 class="seme-title">first SEMESTER</h4>
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
    $eng_drow = $row['eng_drow_omark'];
    $english = $row['eng_1_omark'];
    $physical_edu = $row['physical_edu_omark'];
    $math = $row['math_1_omark'];
    $chemistry = $row['chemistry_omark'];
    $b_workshop = $row['b_workshop_omark'];
    $graphics = $row['graphics_omark'];
    $roll_no = $row['roll'];
?>



                                 
                               <form action="" method="post">
                                 <div class="form-group3">
                                     <label class="sub-name2">Engineering Drawing:</label>
                                     <input required type="text" name="drawing" value="<?php echo $eng_drow; ?>">
                                     <input type="hidden" name="roll" value="<?php echo $roll_no; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">English - 1:</label>
                                     <input required type="text" name="english" value="<?php echo $english; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Physical Education:</label>
                                     <input required type="text" name="physical_edu" value="<?php echo $physical_edu; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Mathematics - 1:</label>
                                     <input required type="text" name="math" value="<?php echo $math; ?>">
                                 </div>
                                  <div class="form-group3">
                                     <label class="sub-name2">Chemistry:</label>
                                     <input required type="text" name="chemistry" value="<?php echo $chemistry; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Basic Workshop Practice:</label>
                                     <input required type="text" name="workshop" value="<?php echo $b_workshop; ?>">
                                 </div>
                                 <div class="form-group3">
                                     <label class="sub-name2">Garphics:</label>
                                     <input required type="text" name="graphics" value="<?php echo $graphics; ?>">
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
        $drawing = $_POST['drawing'];
        
        $english = $_POST['english'];
        
        $physical_edu = $_POST['physical_edu'];

        $math = $_POST['math'];
        
        $chemistry = $_POST['chemistry'];
        
        $workshop = $_POST['workshop'];
        
        $graphics = $_POST['graphics'];
    
       
        //full marks..........
        $df_mark    = '100';
        $ef_mark    = '100';
        $pef_mark   = '50';
        $mf_mark    = '200';
        $cf_mark    = '200';
        $bwpf_mark  = '100';
        $gf_mark    = '200';
        
        //obtain marks...........
        $drawing_omark      = $drawing;
        $english_omark      = $english;
        $physical_edu_omark = $physical_edu;
        $math_omark         = $math; 
        $chemistry_omark    = $chemistry; 
        $workshop_omark     = $workshop;
        $graphics_omark     = $graphics;
       
        //grade ............
        $drawing_grade      = $allSubject->drawing_grade($drawing_omark);
        $english_grade      = $allSubject->english_grade($english_omark);
        $physical_edu_grade = $allSubject->physical_edu_grade($physical_edu_omark);
        $math_grade         = $allSubject->math_grade($math_omark);
        $chemistry_grade    = $allSubject->chemistry_grade($chemistry_omark);
        $workshop_grade     = $allSubject->b_workshop_grade($workshop_omark);
        $graphics_grade     = $allSubject->graphics_grade($graphics_omark);
       
        //points............
        $drawing_point      = $allSubject->drawing_point($drawing_omark);
        $english_point      = $allSubject->english_point($english_omark);
        $physical_edu_point = $allSubject->physical_edu_point($physical_edu_omark);
        $math_point         = $allSubject->math_point($math_omark);
        $chemistry_point    = $allSubject->chemistry_point($chemistry_omark);
        $workshop_point     = $allSubject->b_workshop_point($workshop_omark);
        $graphics_point     = $allSubject->graphics_point($graphics_omark);
       
        $grade_average      = $allSubject->grade_average_aidt_1st_seme($drawing_point,
                                                                       $english_point,
                                                                       $physical_edu_point,
                                                                       $math_point,
                                                                       $chemistry_point,
                                                                       $workshop_point,
                                                                       $graphics_point
                                                                       );

                $sql="UPDATE aidt SET  

                      `eng_drow_fmark` =:df_mark,
                      `eng_drow_omark` =:drawing_omark,
                      `eng_drow_grade` =:drawing_grade,
                      `eng_drow_point` =:drawing_point,

                      `eng_1_fmark` =:ef_mark,
                      `eng_1_omark` =:english_omark,
                      `eng_1_grade` =:english_grade,
                      `eng_1_point` =:english_point,  

                      `physical_edu_fmark` =:pef_mark,
                      `physical_edu_omark` =:physical_edu_omark,
                      `physical_edu_grade` =:physical_edu_grade,
                      `physical_edu_point` =:physical_edu_point,
                      
                      `math_1_fmark` =:mf_mark,
                      `math_1_omark` =:math_omark,
                      `math_1_grade` =:math_grade,
                      `math_1_point` =:math_point,
                           
                      `chemistry_fmark` =:cf_mark,
                      `chemistry_omark` =:chemistry_omark,
                      `chemistry_grade` =:chemistry_grade,
                      `chemistry_point` =:chemistry_point, 

                      `b_workshop_fmark` =:bwpf_mark,
                      `b_workshop_omark` =:workshop_omark,
                      `b_workshop_grade` =:workshop_grade,
                      `b_workshop_point` =:workshop_point,

                      `graphics_fmark` =:gf_mark,
                      `graphics_omark` =:graphics_omark,
                      `graphics_grade` =:graphics_grade,
                      `graphics_point` =:graphics_point,

                    
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
                
                ':pef_mark'          => $pef_mark,
                ':physical_edu_omark'=> $physical_edu_omark,
                ':physical_edu_grade'=> $physical_edu_grade,
                ':physical_edu_point'=> $physical_edu_point,
                
                ':mf_mark'           => $mf_mark,
                ':math_omark'        => $math_omark,
                ':math_grade'        => $math_grade,
                ':math_point'        => $math_point,
                
                ':cf_mark'           => $cf_mark,
                ':chemistry_omark'   => $chemistry_omark,
                ':chemistry_grade'   => $chemistry_grade,
                ':chemistry_point'   => $chemistry_point,
                
               
                ':bwpf_mark'         => $bwpf_mark,
                ':workshop_omark'    => $workshop_omark,
                ':workshop_grade'    => $workshop_grade,
                ':workshop_point'    => $workshop_point,
                
                ':gf_mark'        => $gf_mark,
                ':graphics_omark' => $graphics_omark,
                ':graphics_grade' => $graphics_grade,
                ':graphics_point' => $graphics_point,
                
                
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


