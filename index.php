<?php
session_start();

if(!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

include 'config.php';
?>

<h2>Posts</h2>
<a href="logout.php">Logout</a><br><br> 
<a href="create.php">Add New Post</a>
<table border="1">
<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Content</th>
    <th>Action</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM posts");

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['title']}</td>
        <td>{$row['content']}</td>
        <td>
            <a href='edit.php?id={$row['id']}'>Edit</a>
            <a href='delete.php?id={$row['id']}'>Delete</a>
        </td>
    </tr>";
}
?>
</table>