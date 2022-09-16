<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Catac.io | WorldPlay</title>
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
                  <p>Catac.io</p>
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
                    <iframe src="../io/catac"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_catac.io.webp" alt="">
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестен</li>
                    <li><span class="pink">Издатель:</span> Неизвестен</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Экшен, Путешествия</li>
                    <li><span class="pink">Платформы:</span> Браузер, Android, Windows</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> катак, кэтэк, катак ио, кэтек ио играть</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Битва импостеров — кошек Catac.io поднимет вам настроение! Уничтожайте соперников с разбегу, продвигайтесь по оружейной лестнице ввысь и достигайте новых высот в иерархии кошек!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/catac.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Чем больше фрагов мы сделаем в Catac.io, тем длиннее и круче (а иногда веселее) станет наше оружие. Также мы получаем призовые очки за бой, и можем потратить их в магазине на приобретение крутых скинов как для персонажа, так и для оружия. Устраивайте мощные и зрелищные бои; старайтесь попасть на первую строчку зачета лидеров!<br/>Чтобы ударить противника с разбегу, нужно кликнуть. После смерти враг оставляет свои очки — потрудитесь собрать их. Именно они дают прирост к длине вашего оружия. А если вы слишком быстро уйдете с места победы, то очки могут не собраться. Так же можно бегать вокруг сильных соперников и выжидать, пока они перебьют друг друга, чтобы потом собрать плоды их побед. Выберите свою любимую тактику для обретения лидерства в Catac.io!</p>
                  
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Катак движется за курсором</li>
                    <li>Клик для ускорения</li>
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