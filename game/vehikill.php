<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Vehikill.io | WorldPlay</title>
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
                  <p>7.6</p>
                </div>
                <div class="play__name">
                  <p>Vehikill.io</p>
                </div>
                <a href="../io/vehikill" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/vehikill"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_vehikill.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Гонки</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> вехикил ио, Vehikillio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Vehikill.io — это реалистичные гонки на убийственных машинах. Ездите по огромной арене, прыгайте на препятствиях и размажьте своих соперников по дорожной пыли!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/vehikill.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text column">
                  <p>Игровая цель в Vehikill.io в том, чтобы один за другим уничтожать своих оппонентов. Чем больше разгон, тем сильнее будет удар. Если вы попадете противнику в бок, там, где находится бензобак, то можете взорвать его с одного удара!<br/>Управление в Vehikill.io несколько странноватое. Некоторое время вам нужно будет приспособиться к нему. Зато потом пойдет все как по маслу. Используйте трамплины, чтобы атаковать противников с высоты — так получаются самые убийственные удары. И запомните, здесь нет тормозов, поэтому только вперед!</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD чтобы двигаться</li>
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