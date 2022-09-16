<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Laaaava.io | WorldPlay</title>
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
                  <p>Laaaava.io</p>
                </div>
                <a href="../io/laaaava" target="_blank">
                  <?php
                    include "../src/settings/game/play_grey.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/laaaava"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_laaaava.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Ролевые</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> Laaaavaio, lava io</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Laaaava.io — это игра на тему оффлайн-забавы, модной среди советских детей 80х-90х и популярной в современном взрослом англоязычном мире. В Laaaava.io пол превратился в лаву и нужно сделать всё, чтобы коснуться его последним. В Laaaava.io играет очень много людей и компания для веселья набирается быстро, а сама игра похожа на Bonk.io.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/laaaava.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Условия игры, управление и задача в Laaaava.io предельно просты. Задача — остаться последним выжившим среди пяти человек. Чтобы оставаться над лавой надо прыгать и отталкиваться от других игроков. В моменте столкновения с другими важно быть наверху, чтобы толкнуть соперника прямиком в лаву. Как только раунд закончился, можно загружаться в новый.<br/>Laaaava.io — это простая, озорная и затягивающая игра, в которой раунды щёлкаются, как орешки — один за другим. В игре есть доля удачи, но в итоге все решает умение найти баланс и атаковать только с выгодной для себя позиции. Laaaava.io научит не рисковать и не лезть на рожон, если вы всерьез хотите остаться в живых.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Шар двигается за курсором</li>
                    <li>Клик чтобы подпрыгнуть</li>
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