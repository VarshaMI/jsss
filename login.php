
<?php
session_start();
include "db.php"; 

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST["name"];
    $pass = $_POST["pass"];

    $sql = $conn->prepare("SELECT password FROM user WHERE name = ?");
    $sql->bind_param("s", $name);
    $sql->execute();

   
    $result = $sql->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row["password"];

        if (password_verify($pass, $hashed_password)) {
            $_SESSION["name"] = $name;
            header("Location: Home.php");
            exit();
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
   <form action="" method="post">
     NAME:
    <input type="text" name="name" required><br>

    PASS:
    <input type="password" name="pass" required><br>

    <button type="submit">SUBMIT</button>
   </form>
</body>
</html>



