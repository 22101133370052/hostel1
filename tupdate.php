<?php 
   
   $host="localhost";
   $dbuser="root";
   $dbname="hostel";
   $dbpassword="";
   $connection=mysqli_connect($host,$dbuser,$dbpassword,$dbname);
   
   
  if(isset($_GET['id'])){
    $id=$_GET['id'];
        $sql="SELECT * FROM user_details WHERE id=$id";
        $result=$connection ->query($sql);
        $rows=$result->fetch_assoc();
  }
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $Name=$_POST['Name'];
  $Email=$_POST['Email'];
  $Password=$_POST['Password'];
  $Gender=$_POST['Gender'];

  $sql="UPDATE  user_details SET  Name='$Name' , Email='$Email' Password ='$Password',Gender='$Gender' WHERE id='$id'";
// if($connection->query($sql)===TRUE){
//  header("location:home.php");
//  }
//    else{
//      echo "Error updating record:" .$connection->error;
//     }
  
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center>
<body style="background-color:blue;">
   
    <form action="" method="POST">
    <input type="hidden" name="id" value=" <?php echo $id;?>"><br><br>
<input type="text" name="Name" value=" <?php echo $rows['Name'];?>"><br><br>
<input type="text" name="Email"  value="<?php echo $rows['Email'];?> "><br><br>
<input type="password" name="Password"  value="<?php echo $rows['Password'];?>" ><br><br>
<input type="text" name="Gender"   value="<?php echo $rows['Gender'];?>" ><br><br>
<input type="submit" name="update" value="update">

    </form>
</center>
</body>
</html>