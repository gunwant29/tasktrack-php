<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = mysqli_real_escape_string($con, $_POST['title']);
    mysqli_query($con, "INSERT INTO tasks (title) VALUES ('$title')");
    header("Location: index.php");
    exit;
}
?>
