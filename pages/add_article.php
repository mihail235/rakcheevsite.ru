<?php
include '../includes/db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $title = pg_escape_string($_POST['title']);
   $content = pg_escape_string($_POST['content']);
   $result = pg_query_params(
       $db_conn,
       "INSERT INTO articles (title, content) VALUES ($1, $2)",
       [$title, $content]
   );
   if ($result) {
       header("Location: /articles.php");
       exit;
   } else {
       echo "Ошибка: " . pg_last_error($db_conn);
   }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавить статью</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <main class="container">
        <h1>Добавить статью</h1>
        <?php if (isset($error)): ?>
            <div style="color: red; margin-bottom: 15px;">Ошибка: <?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form method="POST" class="article-form">
            <div class="form-group">
                <label for="title">Заголовок:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="content">Текст статьи:</label>
                <textarea id="content" name="content" rows="10" required></textarea>
            </div>
            <button type="submit" class="btn">Опубликовать</button>
        </form>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>
