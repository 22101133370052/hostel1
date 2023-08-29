<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="./style.css">
</head>
<body style="background-color: rgb(194, 160, 160);">
<center>
    <h1 style="color: navy;"><b>ONLINE HOSTEL APPLICATION FORM</b></h1>         
  <form action="create.php" method="POST">
      <input type="text" name="Name" placeholder="please enter your name" required><br><br>
      <input type="email" name="Email" placeholder="enter your email" required><br><br>
      <input type="password" name="Password" placeholder="enter your password" required><br><br>
      <input type="radio" name="Gender" value="female" required><b>FEMALE</b><br><br>
      <input type="radio" name="Gender" value="male" required><b>MALE</b><br><br>
     <input type="text" name="Address" id="" placeholder="enter your address" required><br><br>
     <input type="date" name="Date" id="" required><br><br>

     
      <input type="integer" name="Phonenumber" id="" placeholder="enter phone number" required> <br><br>  
      <input type="submit" name="submit"><b><a href="./resetpassword.html">forget password?</a>  remember Me</b>
  </form> 
</center >
</body>
</html>