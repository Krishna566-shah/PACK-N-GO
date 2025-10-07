<?php
include 'db.php';

$id = $_GET['id'];
$user = $conn->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $status = $_POST['status'];
    $role   = $_POST['role'];
    $conn->query("UPDATE users SET status='$status', role='$role' WHERE id=$id");
    header("Location: admin_dashboard.php");
}
?>
<link rel="stylesheet" href="style.css">
<form method="post">
    <h2>Update User</h2>
    Username: <?php echo $user['username']; ?><br>
    Email: <?php echo $user['email']; ?><br>
    Role: 
    <select name="role">
        <option value="user" <?php if($user['role']=='user') echo "selected"; ?>>User</option>
        <option value="admin" <?php if($user['role']=='admin') echo "selected"; ?>>Admin</option>
    </select><br>
    Status:
    <select name="status">
        <option value="active" <?php if($user['status']=='active') echo "selected"; ?>>Active</option>
        <option value="inactive" <?php if($user['status']=='inactive') echo "selected"; ?>>Inactive</option>
    </select><br><br>
    <input type="submit" value="Update">
</form>
