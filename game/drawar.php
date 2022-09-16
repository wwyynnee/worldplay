<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Drawpico.io | WorldPlay</title>
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
                  <p>8.1</p>
                </div>
                <div class="play__name">
                  <p>Drawpico.io</p>
                </div>
                <a href="../io/drawar" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/drawar"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_drawar.io.webp" alt="">
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестен</li>
                    <li><span class="pink">Издатель:</span> Неизвестен</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Головоломка</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> Drawpico рисовать ио крокодил ио дравпико дроупико нарисуй ио drawpi co</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Drawpico.io продолжает линейку игр, в которых нужно рисовать и угадывать. Эта игра хороша тем, что сделана для русскоязычной аудитории да еще и с возможностью сохранения результатов в соцсетях. Если в кратце, то задача онлайн игры Крокодил — ведущему рисовать заданные слова или темы, остальным игрокам — угадывать быстрее соперников, что именно хочет нарисовать ведущий. По итогам 15 раундов определяется победитель.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/drawar.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Игровая задача Drawpico.io — победить по общему количеству набранных за 15 раундов очков. Очки начисляются за угаданные рисунки. Причем ведущий получает очки, если его кто-нибудь угадал, а отгадывающие — за то, что угадали. Распределение ролей ведётся автоматически. У каждого будет возможность и поугадывать, и побыть в непростой роли объясняющего.<br/>Для объяснения слов и понятий в онлайн Крокодиле предлагается только лишь обычный "карандаш" любого цвета. На объяснение даётся две минуты; за это время нужно донести свою мысль.<br/>В Drawpico.io есть опция как войти в общую комнату, так и создать отдельную ото всех игру, где повеселиться со своими друзьями.</p>
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