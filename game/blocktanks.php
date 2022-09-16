<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть BlockTanks.io | WorldPlay</title>
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
                  <p>7.1</p>
                </div>
                <div class="play__name">
                  <p>BlockTanks.io</p>
                </div>
                <a href="../io/blocktanks" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/blocktanks"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_blocktanks.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Экшен, Стратегия</li>
                    <li><span class="white">Платформы:</span> Браузер, Android</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> блок танк ио, Block Tanks io</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>BlockTanks.io — это многопользовательская игра в танки онлайн. Выберите свою сторону, найдите и уничтожьте соперника. Короче говоря, веселье обеспечено!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/blocktanks.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Боевая задача в BlockTanks.io — это набрать как можно больше фрагов за время игры. Лабиринт, в котором вы оказались, поможет и прятаться от соперников, и догонять их. Главное, научитесь пользоваться стенами лабиринта так, чтобы это было вам на пользу.<br/>Чем больше танков противника в BlockTanks io вы уничтожаете, тем больше вас самого хотят уничтожить. Примечайте места, где респаунятся аптечки, чтобы вовремя пополнять здоровье и оказывать достойное сопротивление тем, кто хочет вас испепелить.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD чтобы двигаться</li>
                    <li>Клик для атаки</li>
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