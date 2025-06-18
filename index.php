<?php
require_once 'db.php';

if (isset($_GET['done'])) {
    $id = (int) $_GET['done'];
    mysqli_query($con, "UPDATE tasks SET is_done = 1 WHERE id = $id");
    header("Location: index.php");
    exit;
}

if (isset($_GET['delete'])) {
    $id = (int) $_GET['delete'];
    mysqli_query($con, "DELETE FROM tasks WHERE id = $id");
    header("Location: index.php");
    exit;
}

$tasks = mysqli_query($con, "SELECT * FROM tasks ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>TaskTrack - Task Manager</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>📝 TaskTrack</h1>
    <form action="add.php" method="POST" class="task-form">
        <input type="text" name="title" placeholder="Enter a new task..." required>
        <button type="submit">Add Task</button>
    </form>

    <ul class="task-list">
        <?php while ($row = mysqli_fetch_assoc($tasks)): ?>
            <li class="<?= $row['is_done'] ? 'done' : '' ?>">
                <?= htmlspecialchars($row['title']) ?>
                <span class="actions">
                    <?php if (!$row['is_done']): ?>
                        <a href="?done=<?= $row['id'] ?>" class="mark-done">✓</a>
                    <?php endif; ?>
                    <a href="#" onclick="confirmDelete(<?= $row['id'] ?>)">🗑</a>
                </span>
            </li>
        <?php endwhile; ?>
    </ul>
</div>
<script src="script.js"></script>
</body>
</html>
