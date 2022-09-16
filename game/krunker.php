<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Krunker.io | WorldPlay</title>
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
                <div class="play__value bgreen" title="Оценка">
                  <p>7.8</p>
                </div>
                <div class="play__name">
                  <p>Krunker.io</p>
                </div>
                <a href="../io/krunker" target="_blank">
                  <?php
                    include "../src/settings/game/play_green.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/krunker"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_krunker.io.webp" alt="">
                  <ul>
                    <li><span class="green">Разработчик:</span> Yendis Entertainment</li>
                    <li><span class="green">Издатель:</span> Yendis Entertainment</li>
                    <li><span class="green">Дата выпуска:</span> 20 мая 2018 г.</li>
                    <li><span class="green">Жанры:</span> Экшен, Шутер</li>
                    <li><span class="green">Платформы:</span> Браузер, Android, Windows</li>
                    <li><span class="green">Режим игры:</span> Сетевая игра</li>
                    <li><span class="green">Язык интерфейса:</span> Английский</li>
                    <li><span class="green">Альтернативные названия:</span> кранкер ио, кранкерио, кранкер ио играть</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bgreen">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Krunker.io — это классическая 3D игра стрелялка от первого лица, в которую можно играть в браузере с друзьями или против соперников онлайн.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/krunker.io.webp" alt="" />
                </div>
                <div class="play__info bgreen">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Задача в Krunker.io также довольно привычная - нужно набрать как можно больше очков в течение раунда, т.е. набить как можно больше фрагов. Кто наберет больше всех выигрывает раунд.<br/>В начала Krunker.io у вас уже есть пушка, с которой вам предстоит сражаться. Если закончатся патроны, обратите внимание на серые ящики, разбросанные по всей карте. Подходит ближе и нажимаем R для пополнения запасов.<br/>В Krunker.io есть боты, но реализованы отвратительно, не оставляют живым игрокам никаких шансов, стреляют прямолинейно и чрезвычайно точно, поэтому лучшей тактикой до устранения проблема с AI будет избегать встреч с ботами, оставляя их своим противникам. После встреч с несколькими игроками у вас уже будет больше шансов расправиться с ботом.</p>
                </div>
                <div class="play__info bgreen">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD для перемещения</li>
                    <li>Стрелять и прицеливаться мышкой</li>
                    <li>R для перезарядки</li>
                    <li>Shift для стрейфа</li>
                    <li>Пробел для прыжков</li>
                  </ul>
                </div>
                <div class="play__info bgreen">
                  <p>Моды</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Скачать мод
                      <a href="https://greasyfork.org/ru/scripts/432453-krunker-io-aimbot-esp" target="_blank">
                        <span class="yellow">Krunker.IO Aimbot & ESP</span>
                      </a> — 
                      <span class="pink">Блокировка цели ближайшего игрока (Aimbot)</span>,
                      <span class="green">Показывает игроков за стенами (ESP)</span>
                    </li>
                    <li>Скачать мод
                      <a href="https://greasyfork.org/ru/scripts/386787-krunkbot" target="_blank">
                        <span class="yellow">Krunkbot</span>
                      </a> — 
                      <span class="pink">Aimbot</span>,
                      <span class="green">Auto Reload</span>,
                      <span class="pink">Auto BHop</span>,
                      <span class="green">Wall Hack</span>
                    </li>
                    <li>Скачать мод
                      <a href="https://greasyfork.org/ru/scripts/440350-delete-cookies" target="_blank">
                        <span class="yellow">DeleteCookies</span>
                      </a> — 
                      <span class="pink">Соглашается с cookie и удаляет окно навсегда</span>
                    </li>
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