<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть MiniRoyale.io | WorldPlay</title>
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
                  <p>MiniRoyale.io</p>
                </div>
                <a href="../io/miniroyale" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/miniroyale"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_miniroyale.io.webp" alt="" />
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестно</li>
                    <li><span class="pink">Издатель:</span> Неизвестно</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Экшен, Шутер</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английск</li>
                    <li><span class="pink">Альтернативные названия:</span> минирояль ио, батл рояль 3d</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>MiniRoyale.io — это 3d io-шутер в стиле батл рояль! До этой игрушки мир io-игр знал по отдельности 3д шутеры и батл рояль игры. Теперь мы наконец-то можем поиграть и в то и в другое сразу.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/miniroyale.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Боевая задача в MiniRoyale.io в том, чтобы остаться последним выжившим бойцом в игре. Убить вас могут не только противники. В правом углу вы видите мини карту, где красной зоной обозначена необитаемая область. Внутри нее вы будете довольно быстро погибать. Зона смерти постепенно сужается. Противники найдут вас, а вы их. Перестреляйте всех, чтобы остаться победителем!<br/>Ваша задача по прибытии на поле боя это найти поскорее оружие и боеприпасы. Для этого заходите в домики — большая часть оружия лежит там. Из домов вы можете вести прицельный огонь по тем, кто бегает на улице. MiniRoyale.io получилась хорошей тактической игрой, где ваше умение выслеживать противника должно быть на высоте.</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD + пробел для движения</li>
                    <li>R — перезарядка</li>
                    <li>F чтобы взять предмет и открыть дверь</li>
                    <li>Клик для атаки</li>
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