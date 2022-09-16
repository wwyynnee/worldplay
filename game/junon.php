<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Junon.io | WorldPlay</title>
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
                  <p>7.3</p>
                </div>
                <div class="play__name">
                  <p>Junon.io</p>
                </div>
                <a href="../io/junon" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/junon"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_junon.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Путешествие, Песочница</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Русский и Английский</li>
                    <li><span class="white">Альтернативные названия:</span> junonio, юнинио, жунон ио. жунонио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Junon.io — это многопользовательская io-игра в стиле выживалок. Все же играли в Starve.io? Вот теперь нас ждут подобные приключения в космосе!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/junon.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text column">
                  <p>Игровая цель в Junon.io — это прожить как можно дольше времени. Поразить вас могут внутренние обстоятельства, такие как нехватка пиши, так и внешние в виде агрессивных обитателей космоса. С другими игроками вы можете драться, а можете заключать благоприятные партнерские альянсы. Вместе выживать проще!<br/>Junon.io продумана настолько, что вы можете быть охотником-одиночкой, командным игроком. Можно ориентироваться больше на сбор ресурсов или добывание себе пищи из поверженных противников. Используйте любую тактику, которая вам помогает справляться с трудностями, и меняйте её сразу же, если она перестает помогать вам в главном — выжить любой ценой!</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text column">
                  <ul>
                    <li>WASD для движения</li>
                    <li>Клик для атаки</li>
                    <li>Цифры чтобы переключать предметы</li>
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