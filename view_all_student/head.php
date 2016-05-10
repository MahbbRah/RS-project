<?php
require_once '../db_config.php';
require_once '../function.php';
$allSubject = new allSubject();
ob_start();
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <link rel="stylesheet" href="../css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,100,300italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../include/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../include/font-awesome-4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <link rel="stylesheet" href="../css/style.css">
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>


    </head>
       
    <body>
         
         <section id="content-area">
             <div class="container-fluid">
                 <div class="all-content">
                     <div class="col-md-5">
                         <aside class="left-menu">
                             <ul class="nav">
                                <h3 class="menu-heading">Select Option</h3>
                                 <li><a href="../insert_student/index.php"><i class=" fa fa-user-plus"></i> Insert student</a></li>
                                 <li><a href="../insert_result/combo/index.php"><i class=" fa fa-plus-square"></i> Insert result</a></li>
                                 <li><a href="../view_result/mark_sheet.php"><i class=" fa fa-file"></i> View result</a></li>
                                 <li><a href="../view_all_student/index.php"><i class=" fa fa-file"></i> View student</a></li>
                                 <li><a href="../result_update/index.php"><i class=" fa fa-wrench"></i> Edit result</a></li>
                                 <li><a href="../student_edit/index.php"><i class=" fa fa-wrench"></i> Edit student</a></li>
                             </ul>
                         </aside>
                     </div>
                    <div class="col-md-8">
                         <div class="st-info-form">
                                 <h3 class="form-title">Show Student Information</h3>
                                 <div class="form-group33 l-height">
                                     <label for="department">Select Your Option:</label>
                                     <form method="post">
                                       <select id="tpi" onchange="javascript: submit()" class="form-control form-width">
                                         <option selected="" style="text-align:center;"> - - - - - - Select One - - - - - -</option>
                                         <option  value="com_1st.php">Computer Technology [ 1st Shift ]</option>
                                         <option  value="com_2nd.php">Computer Technology [ 2nd Shift ]</option>
                                         <option  value="food_1st.php">Food Technology [ 1st Shift ]</option>
                                         <option  value="food_2nd.php">Food Technology [ 2nd Shift ]</option>
                                         <option  value="rac_1st.php">Rac Technology [ 1st Shift ]</option>
                                         <option  value="rac_2nd.php">Rac Technology [ 2nd Shift ]</option>
                                         <option  value="aidt_1st.php">Aidt Technology [ 1st Shift ]</option>
                                         <option  value="aidt_2nd.php">Aidt Technology [ 2nd Shift ]</option>
                                     </select>
                                     </form>
                                     <script>
                                          document.getElementById("tpi").onchange = function() {
                                              if (this.selectedIndex!==0) {
                                                  window.location.href = this.value;
                                              }        
                                          };
                                     </script>
                                    
                                 </div>
                         </div>
                     </div>
<script type="text/javascript">
        function deleteStudent(roll)
        {
            if(confirm("Sure you want to delete this student?"))
            {
                window.location.href="com_1st.php?delete_roll="+roll;
            }
        }
    </script>


