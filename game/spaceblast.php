<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Spaceblast.io | WorldPlay</title>
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
                  <p>7.4</p>
                </div>
                <div class="play__name">
                  <p>Spaceblast.io</p>
                </div>
                <a href="../io/spaceblast" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/spaceblast"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_spaceblast.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> asyncrobot.com</li>
                    <li><span class="white">Издатель:</span> asyncrobot.com</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Экшен, Стратегия</li>
                    <li><span class="white">Платформы:</span> Браузер, Android</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> Spaceblastio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Spaceblast.io как младший брат легендарной Diep.io, Приятная графика, возможность кастомизации своего боевого корабля — у Spaceblast.io весьма серьезные намерения по покорению вершин популярности в жанре io.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/spaceblast.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Боевая задача в Spaceblast — прокачать свой корабль на все сто. Для этого нужно будет уничтожать различные геометрические фигуры. За полученные уровни вам даются очки прокачки, которые можно вложить в повышение своих характеристик (слева). А за уничтожение кораблей других игроков дают в разы больше опыта, так что и этим нужно будет заниматься.<br/>Для того чтобы прокачивать характеристики корабля можно кликать на плюсики мышью, а можно нажимать цифры. В любом случае Spaceblast.io игра не особо торопливая, и времени здесь хватает, чтобы поступать и так и так.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Двигаться на WASD</li>
                    <li>Стрелять на клик</li>
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