<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    

    $connection= mysqli_connect('localhost','root','','railway');
    $msg= "" ;
    
    if(isset($_POST['submit'])){
        $no= $_POST['t_no'];
        $type= $_POST['type'];
        $name= $_POST['t_name'];
  

        $res=false;
        $insert_query="INSERT INTO `train`(`t_no`, `t_name`, `t_type`, `no_of_seats`) VALUES ('','$no','$name','$type','$no_of_seats')";
        
        $res= mysqli_query($connection,$insert_query);
            
        if($res==true){
            $msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success'
                                            );
				          </script>";
        }
        
    }
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Driver</title> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    
  
 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>  
 <?php include 'navbar_admin.php'; ?>
 <br>
  
  
   <div class="container"> 
     <div class="row">
       
        <div class="page-header">
            <h1 style="text-align: center;">New Train Form </h1>
            <?php echo $msg; ?>
      </div> 
       <div class="col-md-3">
        

       </div>
        <div class="col-md-6 animated bounceIn"> 
          
           
            
                <br>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Registration Number</b></span>
                  <input id="vehreg" type="text" class="form-control" name="vehregno" placeholder="Reg No">
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Type</b></span>
                  <label class="radio-inline">
                      <input type="radio" name="type" value="bus">Bus
                    </label>
                <label class="radio-inline">
                  <input type="radio" name="type" value="car">Car
                </label>
                </div>
                <br> 
              
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Registration Date</b></span>
                  <input id="vehregdate" type="text" class="form-control" name="vehregdate" placeholder="Registration date">
                </div>
                <br>
                
              
                
                 <script>
                      $( function() {
                        $( "#vehregdate" ).datepicker();
                      } );
                </script> 
                
                
                <br>  
                
                <div class="input-group">
                  <input type="submit" name="submit" class="btn btn-success">
                  
                </div>

              </form>   
        </div>  
        <div class="col-md-3"></div>
         
     </div>
         
   
    </div> 
    
     
      
    
</body>
</html>