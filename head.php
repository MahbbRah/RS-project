<?php
ob_start();
require_once 'db_config.php';
require_once 'function.php';
$allSubject = new allSubject();
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,100,300italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="include/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="include/font-awesome-4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
       
    <body>
         
         <section id="content-area">
             <div class="container-fluid">
                 <div class="all-content">
                     <div class="col-md-5">
                         <aside class="left-menu">
                             <ul class="nav">
                                <h3 class="menu-heading">Select Option</h3>
                                 <li><a href="insert_student/index.php"><i class=" fa fa-user-plus"></i> Insert student</a></li>
                                 <li><a href="insert_result/combo/index.php"><i class=" fa fa-plus-square"></i> Insert result</a></li>
                                 <li><a href="view_result/mark_sheet.php"><i class=" fa fa-file"></i> View result</a></li>
                                 <li><a href="view_all_student/index.php"><i class=" fa fa-file"></i> View student</a></li>
                                 <li><a href="result_update/index.php"><i class=" fa fa-wrench"></i> Edit result</a></li>
                                 <li><a href="mark_sheet.php"><i class=" fa fa-wrench"></i>View marksheet</a></li>
                                 <li><a href="student_edit/index.php"><i class=" fa fa-wrench"></i> Edit student</a></li>
                             </ul>
                         </aside>
                     </div>
                