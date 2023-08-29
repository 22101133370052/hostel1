<?php
include "db.php";


if(isset($_POST['submit'])){
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $Gender=$_POST['Gender'];
    $Address=$_POST['Address'];
    $Date=$_POST['date'];
    $Phonenumber=$_POST['Phonenumber'];
    $Collage=$_POST['Collage'];
    $Department=$_POST['Department'];

    $sql="INSERT INTO user_details(Name,Email,Password, Gender,Address,Date,Phonenumber) VALUES
    ('$Name','$Email','$Password','$Gender', '$Address',' $Date','$Phonenumber','$Collage',' $Department')";

    $result=mysqli_query($connection,$sql);
}
if($result==TRUE){
 echo("SUCCSESSFULLY SUBMITED");

}
else{
   echo('submission failed');
}
?> 