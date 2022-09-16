<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть CaveGame.io | WorldPlay</title>
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
                  <p>8.3</p>
                </div>
                <div class="play__name">
                  <p>CaveGame.io</p>
                </div>
                <a href="../io/catac" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/cavegame"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_cavegame.io.webp" alt="">
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестен</li>
                    <li><span class="pink">Издатель:</span> Неизвестен</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Экшен, Путешествия, Песочница</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> Cave Game io, Cavegame online, кейвгейм ио, симулятор шахтера онлайн, симулятор шахтера ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Cavegame.io — это многопользовательская онлайн io-игра. Добывайте ресурсы, создавайте на их основе предметы, возводите стены и закидайте всех динамитом!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/cavegame.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Cavegame.io сделана в жанре battle royale. И это единственная игра, где батл рояль скрещен с игрой в добывание ресурсов. Берите в руки кирку и ломайте камни, чтобы возводить стены против соперников. Также вы можете найти внутри камней полезные ресурсы, из которых нужно крафтить оружие. А после битвы поешьте супа, чтобы восполнить свой хп.<br/>По факту, чем больше вы ресурсов нароете в CaveGame.io, тем будет лучше для вас. Пока не начнется сужение карты, занимайтесь спокойно своими делами, и как можно быстрее перемещайтесь по карте в поисках редких и ценных ресов. Заранее посмотрите список того, что нужно для постройки динамита и сильной брони. Радует, что вы можете колупать камни не только вплотную, но на расстоянии четырех — пяти блоков от вас. Копайте, добывайте, и накуйте себе свое счастье!</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD чтобы двигаться</li>
                    <li>Клик для копания/атаки</li>
                    <li>Клик чтобы кинуть динамит, правый клик чтобы его взорвать</li>
                    <li>E чтобы открыть меню крафта</li>
                    <li>Q для выброса предмета</li>
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