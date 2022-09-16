<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Hole.io | WorldPlay</title>
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
                <div class="play__value bpink" title="Оценка">
                  <p>8.0</p>
                </div>
                <div class="play__name">
                  <p>Hole.io</p>
                </div>
                <a href="../io/hole" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/hole"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_hole.io.webp" alt="">
                  <ul>
                    <li><span class="pink">Разработчик:</span> Voodoo</li>
                    <li><span class="pink">Издатель:</span> Voodoo</li>
                    <li><span class="pink">Дата выпуска:</span> 2018 г.</li>
                    <li><span class="pink">Жанры:</span> Экшен, Симулятор, Ролевые</li>
                    <li><span class="pink">Платформы:</span> Браузер, Android, iOS</li>
                    <li><span class="pink">Режим игры:</span> Однопользовательская игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Русский</li>
                    <li><span class="pink">Альтернативные названия:</span> holeio, хол ио, холио, дыра ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Hole.io — это игрушка вышедшая изначально на платформе Android, а теперь доступная и для онлайн игры в браузере!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/hole.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Задача в Hole.io простая. На самом деле Hole.io очень похожа на классическую Agar.io, также нужно поглощать все что можно на своем пути. Однако вместо разноцветных драже вам предстоит поглощать настоящий город! Ешьте все, что встретите на своем пути и что будет меньше вашей черной дыры. Чем больше вы едите, тем больше становитесь и тем больше сможете съесть!<br/>Не забывайте про соперников в Hole.io, их также можно есть. Однако и они могут съесть вас!</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD для перемещения</li>
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