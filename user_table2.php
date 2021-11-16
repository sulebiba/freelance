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
 <link rel="stylesheet" href="css/table.css">
</head>
<body>
        <h2 align='center'>OLD REQUEST TABLE</h2>
            <table border="2"class="content-table">
                <thead>
               <tr>
                   <th>No</th><th>Name</th><th>Service</th><th>Phone No</th><th>email</th><th>Date</th><th>Location</th>
            </tr> 
            </thead>
            <?php
            $select=mysqli_query($db,"SELECT * FROM request ORDER BY 1 DESC");
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
        
        
        
                
            
        
    
</body>
</html>
<?php
  if(!isset($_SESSION['user'])){
      header("location:index.php");
    ob_end_flush();
  }  
?>

<?php mysqli_close($db); ?>