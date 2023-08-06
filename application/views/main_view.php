<div class="ban" style="background-image: url('<?= $STATIC_DIR . '/images/' . $data['last_new'][0]['image'] ?>')">
    <div class="container">
        <?php
        foreach ($data['last_new'] as $info) {
            ?>
            <div class="ban__text">
                <h1 class="ban__top"><?= $info['title'] ?></h1>
                <p class="ban__bottom"><?= $info['announce'] ?></p>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<div class="container">
    <div class="content">
        <h2 class="content__head">Новости</h2>
        <div class="content__news">
            <?php
            foreach ($news as $info) {
                ?>
                <div class="content__block">
                    <div class="content__border">
                        <p class="content__date"><?= $info['date'] ?></p>
                    </div>
                    <h3 class="content__header"><?= $info['title'] ?></h3>
                    <p class="content__text"><?= $info['announce'] ?></p>
                    <a href="detail/?item=<?= $info['id'] ?>">
                        <button class="content__button">Подробнее
                            <svg class="arrow" width="26" height="16" viewBox="0 0 26 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path id="Arrow 1"
                                      d="M25.707 8.70711C26.0975 8.31658 26.0975 7.68342 25.707 7.2929L19.343 0.928934C18.9525 0.538409 18.3193 0.538409 17.9288 0.928934C17.5383 1.31946 17.5383 1.95262 17.9288 2.34315L23.5857 8L17.9288 13.6569C17.5383 14.0474 17.5383 14.6805 17.9288 15.0711C18.3193 15.4616 18.9525 15.4616 19.343 15.0711L25.707 8.70711ZM-8.74228e-08 9L24.9999 9L24.9999 7L8.74228e-08 7L-8.74228e-08 9Z"/>
                            </svg>
                        </button>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="content__pagina">
            <?php
            if ($data['last_page']) {
                for ($i = $data['page']; $i < $data['page'] + 2; $i++) {
                    ?>
                    <a href="?page=<?= $i - $data['offset'] ?>">
                        <button class="content__button-pagina"><?= $i - $data['offset'] ?></button>
                    </a>
                    <?php
                }
            } else {
                for ($i = $data['page']; $i < $data['page'] + 3; $i++) {
                    ?>
                    <a href="?page=<?= $i - $data['offset'] ?>">
                        <button class="content__button-pagina"><?= $i - $data['offset'] ?></button>
                    </a>
                    <?php
                }
            }
            ?>
            <?php
            if (!$data['last_page']) {
                ?>
                <a href="?page=<?= $data['page'] + $data['offset_for_button'] ?>">
                    <button class="content__button-last">
                        <svg class="arrow " width="26" height="16" viewBox="0 0 26 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path id="Arrow 1"
                                  d="M25.707 8.70711C26.0975 8.31658 26.0975 7.68342 25.707 7.2929L19.343 0.928934C18.9525 0.538409 18.3193 0.538409 17.9288 0.928934C17.5383 1.31946 17.5383 1.95262 17.9288 2.34315L23.5857 8L17.9288 13.6569C17.5383 14.0474 17.5383 14.6805 17.9288 15.0711C18.3193 15.4616 18.9525 15.4616 19.343 15.0711L25.707 8.70711ZM-8.74228e-08 9L24.9999 9L24.9999 7L8.74228e-08 7L-8.74228e-08 9Z"/>
                        </svg>
                    </button>
                </a>
                <?php
            }
            ?>
        </div>
    </div>
</div>
