<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Sploop.io | WorldPlay</title>
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
                  <p>7.8</p>
                </div>
                <div class="play__name">
                  <p>Sploop.io</p>
                </div>
                <a href="../io/sploop" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/sploop"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_sploop.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> kawak</li>
                    <li><span class="white">Издатель:</span> kawak</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Стратегия, Песочница</li>
                    <li><span class="white">Платформы:</span> Браузер, Android, Windows</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> сплуп ио, сплупио, сплуп ио играть</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Sploop.io создан для поклонников MooMoo.io и подобных игр. Отстраивайте базу, чтобы обороняться от других игроков. Прокачивайтесь и делайте смертоносные вылазки в стан врагов!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/sploop.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Sploop.io — это версия — песочница потрясающей Lostworld.io. Здесь игра сосредоточена на процессе стройки и боя. В распоряжении у нас гигантское количество ресурсов, на которые можно не только построить неприступную базу, но и поставить новый рекорд по добытому золоту. Защищайте свои мельницы и атакуйте чужие!<br/>Только посмотрите в правый угол: сколько ресурсов! С таким запасом дерева арбалет становится поистине сокрушительным оружием - можно им стрелять не только быстро, но и очень долго. Впрочем, если кто-то хорошо играет и знает военные тактики в Sploop.io, то одолеть его хитроумные ловушки будет сложно. Если вы сами не спец по бою =)</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text spacebetween">
                  <ul>
                    <li>WASD для движения</li>
                    <li>Клик чтобы атаковать/строить</li>
                    <li>Цифры для быстрого выбора предметов</li>
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