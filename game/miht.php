<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Miht.io | WorldPlay</title>
    <?php
      include "../src/settings/game/game__head.php";
    ?>
  </head>
  <body>
    <?php
      include "../src/settings/preloader.php";
    ?>
    <div class="wrapper">
      <header>
        <?php
          include "../src/settings/game/game__header.php";
        ?>
      </header>
      <main>
        <section>
          <div class="play">
            <div class="play__container">
              <div class="play__item">
                <div class="play__value" title="Оценка">
                  <p>5.9</p>
                </div>
                <div class="play__name">
                  <p>Miht.io</p>
                </div>
                <a href="../io/miht" target="_blank">
                  <?php
                    include "../src/settings/game/play_grey.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/miht"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_miht.io.webp" alt="">
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Экшен, Песочница</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> Mihtio, михт ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Miht.io — это, в первую очередь, первоклассная io-игра. И уже потом это оригинальный концепт и хорошее исполнение задумки, которое порадует любого, кто разбирается в io-играх!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/miht.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Настоящая цель Miht.io в том, чтобы не обращая внимания на очки, опыт и прочие достижения просто идти и крушить все на своем пути. Пусть противники бегут в страхе на другой конец карты, лишь бы не встречаться с вами в Miht.io.<br/>В Miht.io можно играть одному, с друзьями или множеством игроков со всего мира. Совершенно бесплатная, без лагов, видимых задержек и глюков. Игра добавлена 27 days назад и в нее уже сыграло 374 человек, поставило 19 лайков и 6 дизлайков. Рейтинг Miht.io составляет 5.7. Если вам понравилась эта игра попробуйте также Snaker.io и Cricket Live.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Левый клик для действия</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <article>
          <?php
            include "../src/settings/game/game__nav.php";
          ?>
        </article>
        <article>
          <?php
            include "../src/settings/game/game__aside.php";
          ?>
        </article>
      </main>
      <footer>
        <?php
          include "../src/settings/game/game__footer.php";
        ?>
      </footer>
    </div>
    <?php
      include "../src/settings/game/game__script.php";
    ?>
  </body>
</html>