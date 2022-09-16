<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Footix.io | WorldPlay</title>
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
                  <p>6.3</p>
                </div>
                <div class="play__name">
                  <p>Footix.io</p>
                </div>
                <a href="../io/footix" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/footix"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_footix.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Стратегия</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> футиксио, футикс ио, футикс ио играть</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Footix.io — это очень приятный футбольный симулятор. Можно играть против неплохого AI и поставить рекорд среди всех сыгравших игроков, а можно в приватной комнате с другом.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/footix.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text column">
                  <p>Footix.io это тот самый случай, та самая игра, в которой нет ничего нового или уникального. Мультиплеерный футбол — вот что это. Но с такой приятной атмосферой, что хочется зайти сюда снова, чтобы провести пару матчей. Если у вас такое же чувство, то добавляйте в избранное, чтобы всегда было под рукой =)<br/>Те, что синие в Footix.io — свои. Красные и загорелые — чужие, а мы сами в оранжевой футболке. Это поначалу дезориентирует, потому что непонятно, за кого мы тут играем. Со временем привыкните. Делайте подкаты, используйте ускорение для рывков вглубь поля противника. Обыграйте всех, кого встретите! А еще здесь можно швыряться табуреткой =))</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD для движения</li>
                    <li>Пробел чтобы сделать подкат</li>
                    <li>Клик для сильного удара</li>
                    <li>Правый клик для бега</li>
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