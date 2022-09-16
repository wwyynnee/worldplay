<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть BanditRIP.io | WorldPlay</title>
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
                  <p>8.8</p>
                </div>
                <div class="play__name">
                  <p>BanditRIP.io</p>
                </div>
                <a href="../io/banditrip" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/banditrip"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_banditrip.io.webp" alt="" />
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестно</li>
                    <li><span class="pink">Издатель:</span> Неизвестно</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Экшен</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> bandit rip io</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Потрясающая BanditRIP.io открывает свои двери всем, у кого чешутся кулаки подраться! Выбирайте подходящего вашему характеру бойца и уделите несколько минут бесконечному веселью!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/banditrip.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Главная цель в BanditRIP — это победа. Победа над всеми соперниками, которых вы встретите в этом платформере. Это особенно важно, если вы хотите увидеть свой ник в списке самых крутых игроков! Найдите среди многочисленных бойцов того, за кого вам больше всего понравится побеждать. А воинов здесь достаточно:<br/>Обратите внимание на правый нижний угол. Там показаны два ваших удара и атака напором (пробел). Правый клик выбирает стиль атаки. Левым кликом вы атакуете. Пока удары будут перезаряжаться, вы можете чередовать их. Делайте это быстро, чтобы противник не успел опомниться!<br/>А еще после каждого раунда BanditRIP.io игроки голосуют за следующий тип игры. Иногда там попадаются раунды, где можно биться только на кулаках. Во время этих раундов остальные воины будут недоступны. Поэтому не переживайте, если вы не можете выбрать любимого мага и дождитесь следующего раунда =)</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Клик для атаки</li>
                    <li>Правый клик для выбора удара</li>
                    <li>Пробел для активации напора</li>
                    <li>WASD для движения</li>
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