<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Taming.io | WorldPlay</title>
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
                  <p>7.5</p>
                </div>
                <div class="play__name">
                  <p>Taming.io</p>
                </div>
                <a href="../io/taming" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/taming"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_taming.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Песочница</li>
                    <li><span class="white">Платформы:</span> Браузер, Android, Windows</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> муму ио 2, Tamingio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Кролики, волки и медведи: союзники или враги? Taming.io это потрясающая игра в стиле MooMoo.io, где у нас будет животное — друг, которое будет расти и качаться параллельно с нами.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/taming.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Чем больше мы наберем очков в Taming.io, тем лучше. Посмотрите на список лидеров и попробуйте возглавить его. Для этого зарабатывайте очки сами и уничтожайте тех, кто находится на вершине. Если сможете =)<br/>Самый первый совет в io-игре Taming.io при прокачке это собирать ресурсы таким образом, чтобы за один удар рубить двойное количество ресурсов и, соответственно, опыта. Для этого найдите находящиеся рядом объекты. Действуйте! А за новые уровни нам будут доставаться новые возможности: оружие, ловушки, стены и ветряные мельницы, которые будут зарабатывать для нас очки в усиленном режиме.<br/>В левом верхнем углу Taming io вы можете выставить тактику для своего животного. С другими игроками можно дружить и совместно строить базы, ставить оборону и вместе фармить очки. Или же бегать так же командой и разорять базы врагов. Найдите свой стиль игры — как угодно, лишь бы вам было весело =) Прокачивайтесь в любом случае, а на заработанные деньги покупайте украшение и скины для себя и своего питомца.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text spacebetween">
                  <ul>
                    <li>WASD для движения</li>
                    <li>Клик для действия</li>
                    <li>Цифры чтобы переключаться между предметами</li>
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