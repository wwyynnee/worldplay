<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Oib.io | WorldPlay</title>
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
                  <p>Superhex.io</p>
                </div>
                <a href="../io/oib" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/oib"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_oib.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Экшен, Ролевые</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Русский, Английский и другие</li>
                    <li><span class="white">Альтернативные названия:</span> Oibio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Oib.io, похоже, внебрачный сын Agar.io + Limax.io. Необычная и очень странная, но в то же время разносторонняя. Oib.io переведена на русский язык, что очень радует. Будем играть за чернильное пятно, которое может делиться и биться с другими пятнами путём лобового жесткого столкновения. Играть в Oib.io это все время быть начеку и не суетиться раньше времени, ведь ваши юниты живут не так долго, а сделать ими надо великие дела!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/oib.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text column">
                  <p>Боевая задача — стать лучшим. Но каким образом! У каждого игрока в Oib.io есть Королева. Она и сама может биться, что черевато ее гибелью, но, главное, она рождает юнитов — воинов, которых можно объединять в больших силачей, чтобы колошматить всех вокруг. У юнитов есть здоровье, которое со временем уменьшается. Важно знать, что большие юниты передвигаются медленно, а мелкие — быстро. Кроме того, мелкими можно кормить Королеву. Так что приходится быть постоянно начеку и трансмутировать больших юнитов в мелких и наоборот, в зависимости от ситуации. Драка происходит путём наезда ваших юнитов на юнитов соперника. Кто больше, тот и победил, а равнозначные юниты взаимоуничтожаются.<br/>Если кто-то разбил вашу Королеву, то вы проиграли.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text column">
                  <ul>
                    <li>Породить юнита — 1</li>
                    <li>Объединить мелких в большого юнита — 2</li>
                    <li>Разделить больших юнитов на мелких — 3</li>
                    <li>Покормить Королеву — 4</li>
                    <li>Кликни и передвигай мышку чтобы выделить свою армию</li>
                    <li>Клик для выделения одного юнита</li>
                    <li>Клик и Ctrl чтобы выделить или убрать выделение юнита</li>
                    <li>Пробел чтобы выделить всех юнитов</li>
                    <li>WASD или стрелки для передвижения камеры, или использование мини-карты для этого</li>
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