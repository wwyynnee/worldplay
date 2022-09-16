<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Kugeln.io | WorldPlay</title>
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
                  <p>8.7</p>
                </div>
                <div class="play__name">
                  <p>Kugeln.io</p>
                </div>
                <a href="../io/kugeln" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/kugeln"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_kugeln.io.webp" alt="">
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестно</li>
                    <li><span class="pink">Издатель:</span> Неизвестно</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Шутер</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> Кугелн ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Kugeln.io из того типа элементарных игр, где нет прокачки или хитрых тактик, но в которые просто здорово играть. Такие же по крутости и простоте, к примеру Space.io и Hopz.io.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/kugeln.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Двигаться в Kugeln.io на WASD+пробел.<br/>Левой кнопкой мыши — стрелять, а правой — выпустить веревку.<br/>Можно согласиться с тем, что в Kugeln.io есть сходство с Червячками: можно подтягиваться на веревке и разрушать ландшафт.<br/>Чтобы лечиться, ловите на карте сердечки.<br/>Менять оружие можно колёсиком.<br/>Можно создавать свои карты, чтобы играть с друзьями, а кликнув на свой персонаж в меню можно сделать тот образ, какой вы себе хотите.<br/>В общем, Kugeln.io — это отличная и забавная стрелялка и точно полюбится многим =) Особенно любителям Кантриболз!</p>
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