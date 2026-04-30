<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $pass=password_hash($_POST["pass"],PASSWORD_BCRYPT);
    $sql=$conn->prepare("insert into user values(?,?,?)");
    $sql->bind_param("sss",$name,$email,$pass);
    if($sql->execute()){
        header("Location:login.php");
    }else{
        echo"not registered";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
  <form action="" method="post">
      NAME:
    <input type="text" name="name"><br>
    Email:
    <input type="text" name="email"><br>
    PASS:
    <input type="text" name="pass"><br>
 <button type="submit">SUBMIT</button>

  </form>
</body>
</html>