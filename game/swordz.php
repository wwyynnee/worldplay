<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Swordz.io | WorldPlay</title>
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
                  <p>6.2</p>
                </div>
                <div class="play__name">
                  <p>Swordz.io</p>
                </div>
                <a href="../io/swordz" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/swordz"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_swordz.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> JL GAMES</li>
                    <li><span class="white">Издатель:</span> JL GAMES</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Экшен</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> Swordzio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Swordz.io — это своеобразный махач на мечах в прямом смысле этого слова. Ничего, кроме битвы, делать не придётся. В арсенале есть только меч голова-с-плеч, и выжить в этом столкновении всех со всеми будет довольно непросто.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/swordz.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Единственная задача в Swordz.io — это нарубить как можно больше голов. Для этого нужно слегка приноровиться к особенностям управления мечом и вот вы уже настоящий боец. Очень здорово видеть в этой игре своё имя на вершине Топа.<br/>Чтобы наверняка победить, нужно набивать себе опыт на цветных шариках, появляющихся тут и там. От количества набранных шариков и убитых соперников ваш меч вырастет в длине. Но и это не гарант безопасности, ведь здесь можно делать резкие выпады вперёд и доставать на коротком расстоянии даже тех, у кого длинный меч.<br/>Когда мечи сталкиваются, их обладатели чуть расходятся в стороны, оба невредимые.<br/>Популярность некоторых игр необъяснима логически. Swordz.io супер простая в задумке и дизайне, но в ней постоянно есть куча мала. По сути, это строго классическая io-игра: с минимальным сюжетом и множеством игроков.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text spacebetween">
                  <ul>
                    <li>Боец движется за курсором</li>
                    <li>Клик для удара</li>
                    <li>Правый клик для выпада</li>
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