<?php
session_start();
include 'db.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    die("Access Denied!");
}
$result = $conn->query("SELECT * FROM users")
?>
<link rel="stylesheet" href="style.css">

<h2>Welcome Admin, <?php echo $_SESSION['username']; ?>!</h2>
<a href="logout.php">Logout</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th><th>Username</th><th>Email</th><th>Role</th><th>Status</th><th>Actions</th>
    </tr>
    <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['role']; ?></td>
        <td><?php echo $row['status']; ?></td>
        <td>
            <a href="update_user.php?id=<?php echo $row['id']; ?>">Update</a> |
            <a href="delete_user.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete this user?');">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>
