<?php
session_start();

include'connection.php';

$trust_id=$_GET['trust_id'];

if(isset($_POST['sub']))
{
    $desc=$_POST['desc'];

    $query=mysqli_query($conn,"UPDATE trust_request_tb SET reply='$desc' WHERE trust_request_id='$trust_id'");


     echo "<script>alert('Reply Added')</script>";
}


?>







<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Restaurant Management</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>


    <?php include'include/sidebar.php';?> 

    <div id="right-panel" class="right-panel">
       
        <?php include'include/header.php';?>        

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>FARM REPLY</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                           
                            <li class="active">Add reply</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">                  
                   
                                            <div class="col-lg-8 ml-5">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Reply </strong> 
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                           
                                                            
                                                       <!--      <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Type</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" placeholder="Veg or Nonveg"  class="form-control"
                                                                  name="type" id="phone_id" onkeyup="clearmsg('spphone')"><span id="spphone" style="color: white;background-color: red;"></span></div>
                                                                  
                                                            </div> -->
                                        
                                                           
                                                           
                                                            
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Reply</label></div>
                                                                <div class="col-12 col-md-9"><textarea  rows="9"  class="form-control"  name="desc" id="address_id" onkeyup="clearmsg('spaddress')"></textarea><span id="spaddress" style="color: white;background-color: red;"></span></div>
                                                            </div>
                                                            
                                                            <div class="row form-group">
                                                          
                                                            <span id="sppass" style="color: white;background-color: red;"></span>
                                                   <div class="card-footer ">
                                                        <button type="submit" onclick="return validate();" name="sub" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Submit
                                                        </button>
                                                       
                                                    </div>
                                                     
                                                                
                                                        </form>
                                                    </div>
                                                   
                                                </div>                                               
                                            </div>  

                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
<script>
                                
function validate()
{
    
    
    
    var address=document.getElementById("address_id").value;    
   
   
  
    
    
    if(address=="")
    {
        document.getElementById("spaddress").innerHTML="* Please enter  description";
        return false;
    }
    
   
               
    
   
}

function clearmsg(sp)
{
    document.getElementById(sp).innerHTML="";
}

</script>
                         
</body>
</html>
