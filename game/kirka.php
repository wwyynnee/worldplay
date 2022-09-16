<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Kirka.io | WorldPlay</title>
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
                  <p>Kirka.io</p>
                </div>
                <a href="../io/kirka" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/kirka"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_kirka.io.webp" alt="">
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестно</li>
                    <li><span class="pink">Издатель:</span> Неизвестно</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Шутер</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> kirkaio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Kirka.io — это потрясающий многопользовательский io-шутер онлайн. Берите оружие, возьмите на прицел соперников и докажите всем, что лучше вас нет стрелка в окрестных землях =)</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/kirka.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Карты Kirka.io — это отдельный вид искусства. Некоторые уникальны, а некоторые мы встречали в контр-страйке, но все сделаны удивительно потрясающе. Среди этого великолепия нас ожидает несколько режимов игры, так что где-то мы боремся команда против команды, а где-то защищаем личное первенство.<br/>Здесь с ходу нам дается несколько видов оружия; опробуйте каждый из стволов, чтобы определить самый лучший для себя. За боевые достижения вам начисляется опыт, на который можно купить вещи для создания уникального образа. Зарегистрируйтесь в Kirka.io, если хотите пользоваться этими штуками. А если вам нравится дефолтный образ, то регистрироваться не нужно, на игровой процесс это никак не повлияет.<br/>Kirka.io радует возможностью клановой борьбы. Регистрируйте свою команду или попроситесь к тем, чей стиль игры вам понравился. Война кланов ведется не просто так, а за крутые призы. Участвуйте в турнирах и побеждайте! А если вы по жизни одиночка, то и для вас найдутся соревнования, где вы сможете доказать свою крутость! =)</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD для движения</li>
                    <li>Shift чтобы присесть</li>
                    <li>E для рывка</li>
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