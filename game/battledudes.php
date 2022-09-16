<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть BattleDudes.io | WorldPlay</title>
    <?php
      include "../src/settings/game/game__head.php";
    ?>
  </head>
  <body>
    <?php
      include "../src/settings/game/preloader.php";
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
                  <p>8.6</p>
                </div>
                <div class="play__name">
                  <p>BattleDudes.io</p>
                </div>
                <a href="../io/battledudes" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/battledudes"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_battledudes.io.webp" alt="">
                  <ul>
                    <li><span class="pink">Разработчик:</span> Sarunas</li>
                    <li><span class="pink">Издатель:</span> Sarunas</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Шутер</li>
                    <li><span class="pink">Платформы:</span> Браузер, Android</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> battle dudes, buttledudesio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Разгромите соперников в военном шутере BattleDudes.io. Он сделан по мотивам Battlefield, а двумерная графика обеспечивает отличную работу даже на слабых машинах без скачивания или регистрации.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/battledudes.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Условия победы и поражения в BattleDudes различаются в зависимости от режима игры. Самый распространенный — CTF. Хватайте флаг врага и несите к себе на базу как можно скорее! Вас убили? Нестрашно. Кликните на иконку вооружения в левой стороне экрана. Там вы найдете разные варианты вооружения, большинство из которого открывается только на более высоких уровнях прокачки.<br/>За уничтожение соперников и выполнение победных условий в BattleDudes.io вы получаете опыт и новые уровни. На более крутых уровнях вы получите свое оружие, но главное здесь все равно умение играть. Например, если вы видите, что противник часто ездит через мост на машинах, то хорошо встать с гранатометом наперевес, а чтобы патроны не иссякали — кинуть около себя восполнители боеприпасов. На какое-то время эта боевая точка станет настоящим кошмаром для врага!<br/>Многие перегородки и предметы в BattleDudes Онлайн можно разрушать. Поэкспериментируйте с этим, чтобы знать, какие стены ломаются, а какие нет. Это важно для нанесения внезапных ударов. Например, можно проломить стену гранатометом и потом ворваться туда с автоматом наперевес. Если вас не будут ждать, то первые полторы секунды замешательства пойдут вам на руку.</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD для движения</li>
                    <li>Клик для стрельбы</li>
                    <li>Цифры чтобы переключать оружие</li>
                    <li>E чтобы сесть за руль</li>
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