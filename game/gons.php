<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Gons.io | WorldPlay</title>
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
                  <p>6.6</p>
                </div>
                <div class="play__name">
                  <p>Gons.io</p>
                </div>
                <a href="../io/gons" target="_blank">
                  <?php
                    include "../src/settings/game/play_grey.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/gons"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_gons.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Sam Hogan</li>
                    <li><span class="white">Издатель:</span> Sam Hogan</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Шутер</li>
                    <li><span class="white">Платформы:</span> Браузер, Android</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> Gonsio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Gons.io — это оригинальный и свежий шутер. Само название "гонс" равносильно слову "угол". Треугольник, четырёхугольник, пятиугольник и т.д. Чем больше вы соберёте планок по ходу игры, тем в более "угольной" станет ваша фигура. И тем больше патронов у вас будет для войны с другими игроками</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/gons.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Задача в Gons.io — прокачать себе как можно более угловатую фигуру. Для этого нужно делать две вещи: собирать планки на карте и уничтожать других игроков. При этом каждый выстрел, сделанный вами, снижает вашу фигуру на 1 угол. Если вы были треугольником, взяли планку, то станете квадратом. Если выстрелите, то станете снова треугольником. Фактически, количество углов есть количество выстрелов, которые вы можете сделать. Также, если у вас множество углов, то при попадании в вас только часть углов перейдёт к сопернику, а вы будете еще живы и можете продолжить бой. А если выстрелы разных игроков встречаются, то они аннигилируют друг друга.<br/>Обратите внимание на передвижение в Gons.io. Фигуры игроков двигаются только по прямым линиям, и именно это позволяет выстрелам разных игроков встречаться друг с другом. В итоге чаще всего побеждает тот, у кого патронов больше. А если выстрел не нашёл свою цель, то после того, как он врежется в стену его можно будет снова взять.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Двигаться на WASD или стрелочки</li>
                    <li>Пробел для стрельбы</li>
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