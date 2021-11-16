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
    <title>Remove User</title>
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
        <h2 align='center'>USERS</h2>
            <table border="2"class="content-table">
                <thead>
               <tr>
                   <th>Email</th>
            </tr> 
            </thead>
            <?php
            
            $select=mysqli_query($db,"SELECT * FROM user ORDER BY 1 DESC");
            while($row=mysqli_fetch_array($select)){
                $id=$row['id'];
                $email=$row['email'];
                

                echo"<tbody><tr>
                <th>$email</th><th><a href='delete.php?id=$id' class='btn btn-danger'>Remove User</a></th>
         </tr> </tbody>";
            }
            ?>
                
            
</table>
        
        
      <div class="row mx-0">
        <div class="col-12 text-center pb-4 pt-4">
  
        
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