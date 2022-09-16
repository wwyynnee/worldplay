<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Drednot.io | WorldPlay</title>
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
                  <p>Drednot.io</p>
                </div>
                <a href="../io/drednot" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/drednot"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_drednot.io.webp" alt="">
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестно</li>
                    <li><span class="pink">Издатель:</span> Неизвестно</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Экшен, Путешествия</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> Drednotio, дреднотио, дреднот ио, dredark io, дредарк ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Drednot.io — это многопользовательский онлайн платформер. Вместе с командой отчаянных парней отправляйтесь в опасные космические просторы на завоевание славы.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/drednot.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Игровая цель в Drednot.io — это путешествовать по карте, перестреливаться с ботами и другими игроками и стать лидером зачета по очкам. Можно управлять кораблем в одиночку, но круто, чтобы вас было как минимум двое на борту. Чтобы взаимодействовать с навигационной и боевой системой корабля, вам нужно быть физически рядом, а потом активировать её кликом.<br/>Drednot.io чем-то похож на очень известную Krew.io. Чтобы загнать бота в тупик, разрушить его и собрать полезные запчасти для корабля, нужна крепкая команда. И тут сплошной рандом; вам могут попасться слоупоки, а могут и матерые бойцы, которые понимают суть дела. Ваша конкретная задача это разобраться, что к чему и постараться самому быть полезным гражданином судна.</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD чтобы двигаться</li>
                    <li>Пробел для прыжка</li>
                    <li>Клик для стрельбы</li>
                    <li>Пробел для выхода из режима стрельбы пушкой</li>
                    <li>Q для зарядки пушки</li>
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