<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Venge.io | WorldPlay</title>
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
                  <p>Venge.io</p>
                </div>
                <a href="../io/venge" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/venge"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_venge.io.webp" alt="" />
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестно</li>
                    <li><span class="pink">Издатель:</span> Неизвестно</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Шутер</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Русский</li>
                    <li><span class="pink">Альтернативные названия:</span> oyun venge io, venge online, венге онлайн</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>3D шутер в стиле Overwatch Venge.io — это сочетание прекрасной графики, крутых персонажей, мощного оружия и уникального геймплея. Она слишком хороша, чтобы о ней рассказывать, давайте скорее играть!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/venge.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>На старте Venge.io мы можем выбрать мужской или женский пол персонажа и стартовую пушку. Внутри игры мы получаем бонусные очки за убийства и захват контрольных точек. Стойте рядом с точкой, чтобы получать с нее бонусные поинты:
После набора достаточного количества очков мы можем разблокировать специальную карту — усилитель. Нажмите и держите кнопку B, и выбирайте одну из трех доступных карт. Она будет усилять вас до конца раунда. Так что захват контрольных точек очень важен. За игру можно разблокировать не одну карту и становиться круче и круче. А если вы зарегистрируетесь в Venge.io, то сможете конвертировать полученные за бой очки в новые скины и обмундирование.<br/>Если вам не нравится пушка, которую вы взяли на старте, то прямо по ходу игры можно сменить ее на другую. Дождитесь своей смерти и когда появится экран, кликните цифру 1-4 для выбора нового оружия:<br/>Пробуйте разные пушки, бросайте гранаты, открывайте карты и побеждайте в Venge.io!</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD для движения</li>
                    <li>Shift или правый клик для прицела</li>
                    <li>F чтобы бросить гранату</li>
                    <li>H чтобы потанцевать</li>
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