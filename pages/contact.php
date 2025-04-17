<?php include '../includes/header.php'; ?>
<head>
    <link rel="icon" href="../assets/images/logo.png" type="image/png">
</head>
<main>
    <h1>Контакты</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars(trim($_POST['name']));
        if (!empty($name)) echo "<p>Привет, $name! Спасибо за ваше сообщение.</p>";
        else echo "<p>Пожалуйста, введите ваше имя.</p>";
    }
    ?>
    <form method="post">
        <input type="text" name="name" placeholder="Имя" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="message" placeholder="Сообщение" required></textarea>
        <button type="submit">Отправить</button>
    </form>
</main>
<?php include '../includes/footer.php'; ?>

