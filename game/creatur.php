<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Creatur.io | WorldPlay</title>
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
                  <p>8.0</p>
                </div>
                <div class="play__name">
                  <p>Creatur.io</p>
                </div>
                <a href="../io/creatur" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/creatur"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_creatur.io.webp" alt="">
                  <ul>
                    <li><span class="pink">Разработчик:</span> Kooapps Games | Fun Arcade and Casual Action Games</li>
                    <li><span class="pink">Издатель:</span> Kooapps Games | Fun Arcade and Casual Action Games</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Экшен, Ролевые</li>
                    <li><span class="pink">Платформы:</span> Браузер, Android</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> creature io, творение ио, существо ио, существа ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Creatur.io — это свежая новость для любителей io-игр в целом. Здесь и любимый всеми набор массы, и прокачка с уникальными навыками, и оригинальность в правилах боя с другими игроками, которая порадует многих.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/creatur.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Основная задача в Creatur.io — расти большим и сильным, возглавить Топ и удержаться там. Для этого нужно собирать цветные точки массы, поедать других игроков и сделать все возможное, чтобы никто не отъел массу от вас.<br/>Игра радует тем особым видом баланса, где даже самый маленький игрок может соперничать с Топером. Главное, соблюдать основное правило: съесть другого игрока можно только со спины. Лоб в лоб столкновение никому не причинит вреда. Единственный плюс прокачанных игроков в том, что маленькому игроку нужно будет их несколько раз куснуть, чтобы полностью съесть, в то время как больший зверь скушает меньшего с одного укуса.<br/>В Creatur.io очень важно выбирать навыки, которыми у вас получится владеть лучше всего. Всего навыка может быть 3 штуки, что соответствует трём уровням прокачки, а дальнейшая прокачка идёт только в массу и работает для рейтинга.</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD чтобы двигаться</li>
                    <li>Q, W, E - использовать навыки</li>
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