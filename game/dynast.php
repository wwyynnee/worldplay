<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Dynast.io | WorldPlay</title>
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
                  <p>Dynast.io</p>
                </div>
                <a href="../io/dynast" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/dynast"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_dynast.io.webp" alt="">
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестен</li>
                    <li><span class="white">Издатель:</span> Неизвестен</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Экшен</li>
                    <li><span class="white">Платформы:</span> Браузер, Android, Windows</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Русский</li>
                    <li><span class="white">Альтернативные названия:</span> династия ио dynastio династ ио glor io 2 глор ио 2 dinastio dinast io дунаст ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Dynast.io — это многопользовательская io-игра в духе таких блокбастеров как Glor.io и Moomoo.io. Огромная территория, враждебные монстры, крафт многочисленных предметов и многие другие приключения ждут тебя!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/dynast.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Одна из игровых целей в Dynast.io в том, чтобы набрать больше всех очков. Другая цель это построить самую большую Династию, которая будет править на всей огромной территории игры. Вы можете строить стены своего города, заключать союзы с другими игроками и вместе становиться непобедимыми.<br/>В меню, которое вы видите в Dynast.io слева по центру, представлены предметы, которые можно скрафтить, как только вы наберете достаточное количество ресурса. Надо сказать, что Dynast io очень глубока во взаимодействии с миром. Например, топор, который крафтить сложнее, чем обычную дубину, будет добывать больше ресурсов типа дерева или камня за один удар, но бить монстров все-таки лучше дубиной - больше урона. Чем активнее вы пробуете разные варианты взаимодействия с окружающими, тем быстрее сможете прокачать свой скилл игры и побеждать.<br/>Большая часть в Dynast.io уделяется взаимодействию между игроками и постройке базы. Вы можете примкнуть к доступному клану или создать свой; это бесплатно. Главное, покажите будущим союзникам, что вы достойный вожак или наоборот, умелый воин. У себя на базе вы можете хранить такие драгоценные вещи, как камень, дарующий дополнительную жизнь владельцу. В общем, вступайте в Dinast.io и доминируйте в ней!</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD чтобы двигаться</li>
                    <li>Клик для атаки</li>
                    <li>Цифры 1-9 или клик мыши на окошко, чтобы переключать предметы</li>
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