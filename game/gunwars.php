<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть GunWars.io | WorldPlay</title>
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
                  <p>7.4</p>
                </div>
                <div class="play__name">
                  <p>GunWars.io</p>
                </div>
                <a href="../io/gunwars" target="_blank">
                  <?php
                    include "../src/settings/game/play_grey.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/gunwars"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_gunwars.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Экшен</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> ганварс ио, gun wars io</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>GunWars.io — это многопользовательский шутер от создателей Fightz.io. Хватайте оружие и отправляйтесь в сражение.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/gunwars.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text column">
                  <p>Ваша задача в GunWars.io выжить, попутно уничтожая встречающихся на пути соперников. Если вы миролюбивы и уничтожение противников противоречит вашему мировоззрению, вы можете попробовать выжить не применяя оружие. Но это вариант для настоящих мастеров.<br/>Для все остальных в GunWars.io доступно с полдюжины различного оружия<br/>
                  <ul>
                    <li>пистолет</li>
                    <li>автомат</li>
                    <li>снайперка</li>
                    <li>ружье и так далее</li>
                  </ul><br/>В общем, попробуйте в GunWars все варианты оружия, чтобы понять, какое будет больше вам по душе, и отправляйтесь в игру. Постарайтесь выжить и сразить как можно больше игроков.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD для перемещения</li>
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