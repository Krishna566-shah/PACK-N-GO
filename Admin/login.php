<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $_SESSION['role'] = $user['role'];
        $_SESSION['username'] = $user['username'];

        if ($user['role'] == 'admin') {
            header("Location: admin_dashboard.php");
        } else {
            echo "Access Denied! Only Admins can login.";
        }
    } else {
        echo "Invalid login!";
    }
}
?>
<link rel="stylesheet" href="style.css">
<form method="post">
    <h2>Admin Login</h2>
    Email: <input type="text" name="email"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>
