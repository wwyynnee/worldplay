<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Stug.io | WorldPlay</title>
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
                  <p>9.0</p>
                </div>
                <div class="play__name">
                  <p>Stug.io</p>
                </div>
                <a href="../io/stug" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/stug"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_stug.io.webp" alt="" />
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестно</li>
                    <li><span class="pink">Издатель:</span> Неизвестно</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Экшен</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> stugio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Ваша любовь к танковым боям вернется со Stug.io! Это отличный, проработанный и быстрый симулятор танкового боя. Играть можно прямо в браузере, так что запускайте страничку и вперед, к свершениям!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/stug.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Перед самым первым боем в Stug.io мы пройдем небольшой тьюториал. Нам покажут, как подбивать танки противников, беречь себя и стрелять рикошетом. Этих базовых знаний будет достаточно, чтобы подбить противников и заработать первые победные очки. Драться будем команда на команду, так что со временем вы сможете задружиться на дискорде с кем-нибудь и составить боевой взвод мечты =)<br/>Иногда в узких участках карты Stug.io случается настоящее месиво =) Обходите такие участки стороной, чтобы вас там не растерло в порошок. Стреляйте туда рикошетом! Со временем вы сами научитесь видеть ситуации и самые выигрышные позиции для ведения боя. А множество карт и десятки боевых машин порадуют даже тех, кто устал от бесконечной жадности WOT =))</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD для движения</li>
                    <li>Клик для стрельбы</li>
                    <li>Шифт для ускорения</li>
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