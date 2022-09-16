<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Ev.io | WorldPlay</title>
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
                  <p>8.4</p>
                </div>
                <div class="play__name">
                  <p>Ev.io</p>
                </div>
                <a href="../io/drednot" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/ev"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_ev.io.webp" alt="">
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестно</li>
                    <li><span class="pink">Издатель:</span> Неизвестно</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Экшен, Шутер</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Русский</li>
                    <li><span class="pink">Альтернативные названия:</span> evio, эвио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Ev.io — это полноценный 3D шутер в футуристичной атмосфере инопланетных строений. Ищите оружие, охотьтесь и разгромите всех, кого встретите на поле боя!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/ev.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>При желании вы можете создавать в Ev.io публичные игры, куда может вступить каждый, приватный матч для своих друзей и даже приглашать знакомых по ссылке. Игра автоматически подстраивается даже под слабые видеокарты. Настраивайте время раунда, и тот, кто наберет за указанное время больше фрагов, тот и победил.<br/>Ev.io играется на потрясающих футуристичных картах. Иногда хочется сыграть еще один раунд только для того, чтобы побегать по новой карте. Обратите внимание на то, что прыжки здесь могут быть выше, если вы дольше держите пробел. Ищите лучшее для себя вооружение, собирайте друзей и наслаждайтесь прекрасным шутером прямо у себя в браузере!</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD для движения</li>
                    <li>Shift для бега</li>
                    <li>Пробел для прыжка (можно высоко)</li>
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