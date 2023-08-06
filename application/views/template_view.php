<?php
$STATIC_DIR = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php $STATIC_DIR ?>/css/style.css">
    <title>Тестовое в текарт</title>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header__brand">
                <a href="#"><img src="<?php $STATIC_DIR ?>/images/logo.svg" alt="logo" class="header__logo"></a>
            </div>
        </div>
        <div class="header__line"></div>
    </header>
    <main class="main">
        <?php include 'application/views/' . $content_view; ?>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer__line"></div>
            <p class="footer__text">© 2023 — 2412 «Галактический вестник»</p>
        </div>
    </footer>
    <script src="<?php $STATIC_DIR ?>/js/main.js"></script>
</div>
</body>
</html>
