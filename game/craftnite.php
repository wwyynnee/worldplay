<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Craftnite.io | WorldPlay</title>
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
                  <p>Craftnite.io</p>
                </div>
                <a href="../io/craftnite" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/craftnite"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_craftnite.io.webp" alt="">
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестно</li>
                    <li><span class="pink">Издатель:</span> Неизвестно</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Экшен, Путешествия, Песочница</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> Craft nite io, крафт найт ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Craftnite.io — это крутейший онлайн 3D io-шутер. Авторы сделали лютую смесь стрелялки и копалки одновременно. Карту здесь можно отстраивать добытым материалом и ставить блиндажи.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/craftnite.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Игровая цель в Craftnite.io — это доминирование на карте. Копайте и путешествуйте по огромному миру, чтобы добыть новое оружие и материалы для строительства. Ставьте блоки и выбирайте, что делать: огромные высоты, с которых просматривается вся карта, или укрепленные форты с бойницами для отстрела противников.<br/>На главной страничке Craftnite.io можно выбрать игровой мод: FFA или Батл Рояль. Во втором случае обитаемая зона игры будет сужаться, сталкивая выживших врагов лицом к лицу. Кто останется в живых, тот и победил. Короче говоря, выбирайте тот скин, который больше подходит вашему стилю игры, заходите, копайте и стреляйте!</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD для движения</li>
                    <li>Цифры для смена орудия</li>
                    <li>Клик для стрельбы</li>
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