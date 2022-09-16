<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Frag.io | WorldPlay</title>
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
                  <p>6.9</p>
                </div>
                <div class="play__name">
                  <p>Frag.io</p>
                </div>
                <a href="../io/frag" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/frag"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_frag.io.webp" alt="">
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Шутер</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> Fragio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Боевая цель перед киберспортсменами Frag.io зашифрована в самом название игры =) Делайте фраги, и чем больше, тем лучше! Летайте с помощью гипербатутов и испепеляйте всех с высоты. Кто больше двигается и круче стреляет, тот и побеждает. Олды помнят про великий и ужасный Quake 3, но для кого-то перестрелка на рейлганах будет в новинку =)<br/>На скриншоте показано самое безопасное место на карте: туннель. Здесь есть мини-выходы для осмотра. Если спустится противник, то будет жаркий бой. Но сверху вас никто не достанет =) Здесь можно устроить себе передышку, чтобы с новыми силами побежать в бой Frag.io. Приглашайте друзей, чтобы вместе громить друг друга!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/frag.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Итак, как мы выяснили у персонажа (создатели Brutal.io утверждают, что это машина) есть оружие — шар. По клику мышки шар можно запустить в противника. При повторном клике и удержании мышки шар возвращается к нам обратно. Это важно, т.к. в Brutal.io можно не только запулить шар в противника, но и поразить его возвращающимся. Увеличению шара способствует сбор точек, разбрасываемых источниками. <b>Если врезаться в источник, из него будет больше сыпаться точек.</b> Кроме того, по карте бегают пульсирующие зеленые треугольные существа, за которых также дают очки.<br/>На карте встречаются красные зоны электрических заграждений (электровафли). Попадание в них грозит мгновенной смертью.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD для движения</li>
                    <li>Клик для атаки</li>
                    <li>Правый клик для прицела</li>
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