<?php
require_once 'conn.php';

if(isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "insert into users values ('', '$fullname', '$email', '$username', '$password')";
    $result = $conn->query($query);
    if(!$result) die("Query is fail!!!");
    else{
        setcookie('username', $username);
        setcookie('fullname', $fullname);
        header("location: welcome.php");
    }
}
?>
<?php
echo <<<_end
<h1>Register</h1>
<form action="register.php" method="post">
    Fullname <br><input type="text" name="fullname"><br>
    Email <br> <input type="email" name="email"><br>
    Username <br><input type="text" name="username"><br>
    Password <br><input type="password" name="password"><br><br>
    <input type="submit" value="Register">
</form>
_end;

?>


