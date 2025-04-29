<?php
$menuItems = [
    'Главная' => '/index.php',
    'Статьи' => '/articles.php',
    'Добавить статью' => '/pages/add_article.php',
    'О нас' => '/pages/about.php',
    'Контакты' => '/pages/contact.php'
];
?>

<header class="header">
    <nav class="nav">
        <?php foreach ($menuItems as $title => $url): ?>
            <a href="<?= $url ?>" class="nav-link <?= $_SERVER['REQUEST_URI'] == $url ? 'active' : '' ?>">
                <?= $title ?>
            </a>
        <?php endforeach; ?>
    </nav>
</header>
