<?php include 'header.php'; ?>

<div class="wrapper">
    <main class="main">
        <style>
            .promo {
                background: url(images/<?= $lastnews['image'] ?>);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
            }
        </style>
        <section class="promo">
            <div class="container">
                <div class="promo__wrapper">
                    <h1 class="title promo__title"><?= $lastnews['title'] ?></h1>
                    <div class="announce promo__announce"><?= $lastnews['announce'] ?></div>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="container">
                <h2 class="title">Новости</h2>
                <div class="news__items">
                    <?php foreach($fourNews as $news) { ?>
                        <a href="?id=<?= $news['id']?>" class="news__item">
                            <div class="news__date"><?= $news['formatDate'] ?></div>
                            <h3 class="news__title"><?= $news['title'] ?></h3>
                            <div class="news__announce"><?= $news['announce'] ?></div>
                            <button type="button" class="news__button">
                                Подробнее
                                <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7C0.447715 7 4.82823e-08 7.44772 0 8C-4.82823e-08 8.55228 0.447715 9 1 9L1 7ZM26.707 8.70711C27.0975 8.31658 27.0975 7.68342 26.707 7.2929L20.343 0.928934C19.9525 0.53841 19.3193 0.538409 18.9288 0.928934C18.5383 1.31946 18.5383 1.95262 18.9288 2.34315L24.5857 8L18.9288 13.6569C18.5383 14.0474 18.5383 14.6805 18.9288 15.0711C19.3193 15.4616 19.9525 15.4616 20.343 15.0711L26.707 8.70711ZM1 9L25.9999 9L25.9999 7L1 7L1 9Z" fill="#9B407A"/>
                                </svg>
                            </button>
                        </a>
                    <?php } ?>
                </div>
                <ul class="news__navigation">
                    <?php
                    $paginationRange = 2;
                    $startPage = max(1, $currentPage - $paginationRange);
                    $endPage = min($pageCount, $currentPage + $paginationRange);

                    if ($currentPage > 1) {
                        echo '<li><a href="?page=' . ($currentPage - 1) . '" class="prev">Назад</a></li>';
                    }

                    for ($i = $startPage; $i <= $endPage; $i++) {
                        echo '<li><a class="' . ($currentPage == $i ? 'active' : '') . '" href="?page=' . $i . '">' . $i . '</a></li>';
                    }

                    if ($currentPage < $pageCount) {
                        echo '<li><a href="?page=' . ($currentPage + 1) . '" class="next">Вперёд</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </section>
    </main>


<?php include 'footer.php'; ?>
