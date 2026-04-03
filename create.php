<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    mysqli_query($conn, "INSERT INTO posts (title, content) VALUES ('$title', '$content')");
    header("Location: index.php");
}
?>

<h2>Add Post</h2>

<form method="POST">
    Title: <input type="text" name="title"><br><br>
    Content: <textarea name="content"></textarea><br><br>
    <button type="submit" name="submit">Submit</button>
</form>