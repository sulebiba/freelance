<?php
ob_start();
include("session.php");
include("connection.php");
date_default_timezone_set('Africa/Lagos');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Service</title>
 <link href="images/nocv.jpg" rel="icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4,7.0/css/font-awesome.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="css/table.css">
</head>
<body>
        <h2 align='center'>SERVICE RENDERERS</h2>
            <table border="2"class="content-table">
                <thead>
               <tr>
                   <th>No</th><th>Name</th><th>Service</th><th>Phone No</th><th>email</th><th>Date</th><th>Location</th>
            </tr> 
            </thead>
            <?php
            if(isset($_GET['page'])){   
                $page=$_GET['page'];
                }
                else{
                    $page=1;
                }
                $num_per_page=10;
                $start_from = ($page-1)*10;
            $select=mysqli_query($db,"SELECT * FROM service ORDER BY 1 DESC LIMIT $start_from,$num_per_page");
            while($row=mysqli_fetch_array($select)){
                $id=$row['id'];
                $name=$row['name'];
                $service=$row['service'];
                $phone=$row['phone_no'];
                $email=$row['email'];
                $date=$row['date'];
                $location=$row['location'];

                echo"<tbody><tr>
                <th>$id</th><th>$name</th><th>$service</th><th>$phone</th><th>$email</th><th>$date</th><th>$location</th>
         </tr> </tbody>";
            }
            ?>
                
            
</table>
        
        
      <div class="row mx-0">
        <div class="col-12 text-center pb-4 pt-4">
  <?php
        $q=mysqli_query($db,"SELECT * FROM service ORDER BY 1 DESC");
        $total_q=mysqli_num_rows($q);
        $total_page=ceil($total_q/$num_per_page);
        
        if($page>1){
            
          echo"<a href='table1.php?page=".($page-1)."' class='btn btn-primary'>previous</a>";   
        }
        
        for($i=1;$i<$total_page;$i++){
          //echo"<a href='videos.php?page=".$i."' class='btn btn-primary'>$i</a>";   
        }
        
        
        if($i>$page){
            
          echo"<a href='table1.php?page=".($page+1)."' class='btn btn-danger'>next</a>";   
        }
        ?>
        
    </div>   
     </div>      
                
            
        
    
</body>
</html>

<?php
  if(!isset($_SESSION['id'])){
      header("location:index.php");
    ob_end_flush();
  }  
?>

<?php mysqli_close($db); ?>