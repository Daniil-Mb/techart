<?php include 'header.php'; ?>

<div class="wrapper">
    <main class="main">
        <section class="news">
            <div class="container">
                <ul class="news__breadcrumbs">
                    <li><a href="./">Главная</a></li>
                    <li>/</li>
                    <li><a href="#" class="news__this"><?= $newsPage['title'] ?></a></li>
                </ul>
                <h2 class="title"><?= $newsPage['title'] ?></h2>
                <div class="news__wrapper">
                    <div class="news__info">
                        <div class="news__date"><?= $newsPage['formatDate'] ?></div>
                        <div class="news__title"><?= $newsPage['announce'] ?></div>
                        <div class="news__content"><?= $newsPage['content'] ?></div>
                        <a href="./" class="news__button">
                            Назад к новостям
                            <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7C0.447715 7 4.82823e-08 7.44772 0 8C-4.82823e-08 8.55228 0.447715 9 1 9L1 7ZM26.707 8.70711C27.0975 8.31658 27.0975 7.68342 26.707 7.2929L20.343 0.928934C19.9525 0.53841 19.3193 0.538409 18.9288 0.928934C18.5383 1.31946 18.5383 1.95262 18.9288 2.34315L24.5857 8L18.9288 13.6569C18.5383 14.0474 18.5383 14.6805 18.9288 15.0711C19.3193 15.4616 19.9525 15.4616 20.343 15.0711L26.707 8.70711ZM1 9L25.9999 9L25.9999 7L1 7L1 9Z" fill="#9B407A"/>
                            </svg>
                        </a>
                    </div>
                    <div class="news__img">
                        <img src="images/<?= $newsPage['image'] ?>" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include 'footer.php'; ?>
