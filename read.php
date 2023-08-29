<?php
include "db.php";

$sql="SELECT * FROM  user_details";
$result=mysqli_query($connection,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,th,td{
        border:1px solid;
       padding:1rem;
       margin:1rem;
       border-style:dotted;
      
    }
    </style>
</head>
<body style="background-color:darkviolet ;">
    <table>
       <thead>
           <tr>
           <th> id</th>
           <th>Name</th>
           <th>Email</th>
           <th>Password</th>
           <th>Gender</th>
           <th>operation</th>
           </tr>
      </thead>
      </tr>
      <tbody>
          <?php
          if($result ->num_rows> 0){
              $i=1;
              while($rows=$result->fetch_assoc()){
            ?>  
             <tr>
             <td> <?php echo $i; ?> </td>
                <td> <?php echo $rows['Name']; ?> </td>
                <td> <?php echo $rows['Email']; ?> </td>
                <td><?php echo $rows['Password']; ?> </td>
                <td><?php echo $rows['Gender']; ?> </td> 
                <td><button><a href="delete.php? id=<?php echo $rows['id']; ?>">delete</a></button>
                <button><a href="tupdate.php?id=<?php echo $rows['id']; ?>">update</a></button></td>
                

                <?php $i++;  ?>
             </tr>

              
              <?php
          }
        }
        ?>
    
    </tbody>
    </table> 
</body>
</html>




