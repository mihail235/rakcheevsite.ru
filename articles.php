<?php
include 'includes/db.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Все статьи</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <main class="container">
        <h1>Все статьи</h1>
        <?php
        $result = pg_query($db_conn, "SELECT * FROM articles ORDER BY created_at DESC");
        while ($row = pg_fetch_assoc($result)) {
            echo "<div class='article'>
                    <h2>{$row['title']}</h2>
                    <p>{$row['content']}</p>
                    <small>Опубликовано: {$row['created_at']}</small>
                  </div>";
        }
        ?>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
