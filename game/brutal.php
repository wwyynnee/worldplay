<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Brutal.io | WorldPlay</title>
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
                  <p>Brutal.io</p>
                </div>
                <a href="../io/brutal" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/brutal"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_brutal.io.webp" alt="">
                  <ul>
                    <li><span class="white">Разработчик:</span> Profusion Studios, Андре Алмейда</li>
                    <li><span class="white">Издатель:</span> Profusion Studios, Андре Алмейда</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Экшен</li>
                    <li><span class="white">Платформы:</span> Браузер, Android, iOS</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> Brutalio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Brutal.io игра несложная, но проиграть тут проще простого. Игру можно рассматривать как развитие идеи, заложенной в Zlap.io За вашим персонажем летает на тонком шнуре шар, размеры которого увеличиваются со временем. Однако, шар теперь можно отцеплять и направлять в сторону противника.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/brutal.io.webp" alt="" />
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
                  <p>Бросить шар — клик левой кнопкой мыши<br/>Вернуть шар — клик и удержание левой кнопкой<br/>Игра Brutal.io от создателей Wings.io обладает нескучным геймплеем, у прокаченных игроков незначительное преимущество перед новичками. Если вам уже поднадоели Slither.io или танчики, попробуйте Brutal.io!</p>
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