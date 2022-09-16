<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Fightz.io | WorldPlay</title>
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
                  <p>6.4</p>
                </div>
                <div class="play__name">
                  <p>Fightz.io</p>
                </div>
                <a href="../io/fightz" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/fightz"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_fightz.io.webp" alt="">
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Ролевые, Шутер</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> файтс ио, файтз ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Fightz.io — это элементарная, но со своим обаянием игра, где игроки охотятся на животных и друг на друга, чтобы занять место на вершинах Топ листа.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/fightz.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Основная задача игрока в Fightz.io — пробиться в Топ. Для этого сперва нужно охотиться на животных. Они не дают сдачи, а после своей смерти оставляют горошины опыта. Собирая эти горошины растёте в уровне, получаете новое оружие. Вступать в схватку с игроками, у которых оружие лучше вашего очень опасно, поэтому качаться на мобах нужно постоянно.<br/>Несмотря на странную рисовку и движения персонажей, в Fightz.io есть свой шик. Периодически в Fightz.io среди игроков организуется сильный замес, которого лучше избегать, потому что удары сыплются со всех сторон. В таком побоище можно погибнуть даже с самым сильным оружием.<br/>Огромные синие круги на карте это озёра, скорость передвижения в которых существенно ниже, чем на суше.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Персонаж движется за курсором</li>
                    <li>Клик для стрельбы</li>
                    <li>Правый клик чтобы ускориться</li>
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