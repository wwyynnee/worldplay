<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Takepoint.io | WorldPlay</title>
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
                  <p>Takepoint.io</p>
                </div>
                <a href="../io/takepoint" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/takepoint"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_takepoint.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Экшен, Ролевые</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> take point io, такепоинт ио, тэйкпоинт ио, захват точки, захват точки io, тейкпоинт ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Takepoint.io погружает нас в мир армейских разборок. Необходимо захватывать чекпоинты, кооперироваться с соклановцами и захватывать весь мир этой жесткой игры!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/takepoint.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text column">
                  <p>Основная задача в Takepoint.io — это доминировать на карте. Для этого вам нужно будет вырастать в уровне, чтобы прокачивать своего бойца и успешно сражаться с противниками. Опыт и уровни вы получаете за убийство соперников и захват контрольных точек. Больше всего опыта вам начислят за захват центральной, самой большой точки. Кроме этого, вы получаете опыт каждую минуту в зависимости от того, сколько точек вы захватили.<br/>Если у вас отжали чекпоинт, то вам нужно его снова вернуть. И, успешно вернув, вы снова получите за него опыт! Так что технически, иногда даже выгодно отдать точку сопернику, чтобы потом снова её захватить. Или же договориться с противником о том, чтобы хайпить опыт совместно. Однако Takepoint.io — это прежде всего боевая игра, так что все, кто не вашего цвета — враги, и нечего с ними болтать!<br/>По достижении уровней в Takepoint io вы получаете возможность получить новое оружие: Снайперку, Пулемет или Дробовик. А на еще более высоком уровне вы получите возможность развить бонусный навык: поставить стену, бросить гранату и т.д.<br/>Ориентируйтесь по мини-карте, чтобы вовремя замечать отобранные у вас чекпоинты. Кооперируйтесь с союзниками и захватывайте мир Takepoint.io под свой контроль!</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD чтобы двигаться</li>
                    <li>Клик для стрельбы</li>
                    <li>Пробел для использования навыка</li>
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