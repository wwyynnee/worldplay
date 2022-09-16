<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Curvefever.io | WorldPlay</title>
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
                  <p>7.2</p>
                </div>
                <div class="play__name">
                  <p>Curvefever.io</p>
                </div>
                <a href="../io/curvefever" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/curvefever"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_curvefever.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Hidden Monster Games</li>
                    <li><span class="white">Издатель:</span> Hidden Monster Games</li>
                    <li><span class="white">Дата выпуска:</span> 26 февраля 2018 г.</li>
                    <li><span class="white">Жанры:</span> Экшен, Стратегия</li>
                    <li><span class="white">Платформы:</span> Браузер, Windows, Linux, macOS</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> Curvefeverio, Curvefever online</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Игра в рисование линий, об которые другим игрокам лучше не спотыкаться.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/curvefever.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text column">
                  <p>Игра состоит из мини-раундов, в которых очень быстро выясняется победитель. Тот, кто заработал больше очков по итогам нескольких раундов, получает денежные призы.<br/>Интересно то, что события развиваются стремительно. Попробуйте и расскажите о своём опыте =)</p>
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