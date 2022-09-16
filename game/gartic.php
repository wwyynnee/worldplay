<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Gartic.io | WorldPlay</title>
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
                  <p>7.9</p>
                </div>
                <div class="play__name">
                  <p>Gartic.io</p>
                </div>
                <a href="../io/gartic" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/gartic"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_gartic.io.webp" alt="">
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестен</li>
                    <li><span class="pink">Издатель:</span> Неизвестен</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Головоломка</li>
                    <li><span class="pink">Платформы:</span> Браузер, Android, Windows</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Русский</li>
                    <li><span class="pink">Альтернативные названия:</span> gartic ио Garticio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Gartic.io — это графическая угадывалка слов. Один игрок рисует слова, другие отгадывают. Особенность игры в том, что она поддерживает русский язык, можно отказаться от режима водящего игрока и в общем очень разумно построен механизм взаимодействия как игроков с игрой, так и игроков друг с другом.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/gartic.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Игровой целью в Gartic.io является набор очков. Они зарабатываются за правильное угадывание слов, которые рисует ведущий. А тот, кто водит, получает очки за то, что его угадали. В игре очень дружелюбный интерфейс. Радует, что здесь введен запрет на использование символов, букв и цифр. А если какой-нибудь игрок начинает этим злоупотреблять, то можно нажать специальную кнопку, чтобы вырубить его из игры.<br/>Есть возможность прокачать свой уровень в иностранных и поиграть на других языках. Интересно также то, что если писать слово, близкое к тому, которое было загадано, то высветится подсказка, что вы думаете в верном направлении.<br/>Gartic.io — это очень здорово продуманная игра с грамотным интерфейсом и широкими возможностями для творчества.</p>
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