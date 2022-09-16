<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Snake.io | WorldPlay</title>
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
                <div class="play__value bgreen" title="Оценка">
                  <p>7.2</p>
                </div>
                <div class="play__name">
                  <p>Snake.io</p>
                </div>
                <a href="../io/snake" target="_blank">
                  <?php
                    include "../src/settings/game/play_green.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/snake"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_snake.io.webp" alt="" />
                  <ul>
                    <li><span class="green">Разработчик:</span> Kooapps Games | Fun Arcade and Casual Action Games</li>
                    <li><span class="green">Издатель:</span> Kooapps Games | Fun Arcade and Casual Action Games</li>
                    <li><span class="green">Дата выпуска:</span> 21 апреля 2016 г.</li>
                    <li><span class="green">Жанры:</span> Экшен, Симулятор</li>
                    <li><span class="green">Платформы:</span> Браузер, iOS, Android</li>
                    <li><span class="green">Режим игры:</span> Сетевая игра</li>
                    <li><span class="green">Язык интерфейса:</span> Английский</li>
                    <li><span class="green">Альтернативные названия:</span> Snakeio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bgreen">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Snake.io — это первоклассная игра в змеек. Если возможность играть мультиплеер онлайн или офлайн одному с ботами, которые достаточно сильны.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/snake.io.webp" alt="" />
                </div>
                <div class="play__info bgreen">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Цель Snake.io в том, чтобы вырастить самую огромную змейку. Дополнительно ведется счетчик того, сколько игроков вы убили во время раунда, так что можно развиваться в двух этих направлениях. У маленьких змеек преимущество в скорости и маневренности, и больших в величине тела. Большая змея может обвить маленькую кольцом и потихоньку уничтожить.<br/>Собирайте еду, это даст вам длину и возможность ускоряться. За каждую секунду ускорения с вас вычитается масса, но это того стоит. Подрезайте других змеек, чтобы после их гибели взять массу себе!</p>
                </div>
                <div class="play__info bgreen">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Змейка движется за курсором</li>
                    <li>Клик для ускорения</li>
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