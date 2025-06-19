<?php
include "connection.php";
if(isset($_POST['submit'])){
    
    $name = $_POST['uname'];
    $email = $_POST['uemail'];
    $phone = $_POST['phone'];
    $password = $_POST['upassword'];
    $address = $_POST['address'];
$sql="INSERT INTO userdetails (name,email,password,address,phone) VALUES('$name','$email','$password','$address','$phone')";
$res=mysqli_query($conn,$sql);
if($res){
    echo "Data inserted successfully";
     header('Location: CRUDUI.php');

}

else{
    echo "Data not inserted";
}
}
if(isset($_POST['display'])){
  header('Location: CRUDUI.php');
}


mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h3 >Login Form</h3>
 <form method="post">
     <div class="mb-3">
    <label for="uname" class="form-label">Name</label> 
    <input type="password" class="form-control"  name="uname" id="uname" placeholder="Enter your name here">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="uemail" id="exampleInputEmail1" aria-describedby="emailHelp">

    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="upassword" id="exampleInputPassword1" placeholder="***">
  </div>
  
  <div class="mb-3">
    <label for="address" class="form-label">Address</label> 
    <input type="password" class="form-control"  name="address" id="address">
  </div>



   <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="password" class="form-control" name="phone" id="phone">
  </div> 

  <button type="submit" class="btn btn-dark" name="submit">Submit</button>
    <form method="POST">
    <button type="submit" name="display" class="btn btn-success">Display data</button>
</form>
</form>
</div>
</body>
</html>
