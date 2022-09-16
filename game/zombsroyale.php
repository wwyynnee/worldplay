<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть ZombsRoyale.io | WorldPlay</title>
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
                  <p>ZombsRoyale.io</p>
                </div>
                <a href="../io/zombsroyale" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/zombsroyale"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_zombsroyale.io.webp" alt="" />
                  <ul>
                    <li><span class="pink">Разработчик:</span> Yangcheng Liu, End Game</li>
                    <li><span class="pink">Издатель:</span> Yangcheng Liu, End Game</li>
                    <li><span class="pink">Дата выпуска:</span> 2018 г.</li>
                    <li><span class="pink">Жанры:</span> Экшен, Шутер</li>
                    <li><span class="pink">Платформы:</span> Браузер, Android, iOS, Windows</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> зомбсроял ио, зобмс роял ио, zombsroyal io, зомбс роял ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>ZombsRoyale.io — это ставшая хитом Zombs.io в режиме схватки на выживание до последнего игрока. Игры в стиле батл рояль становятся весьма популярны!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/zombsroyale.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Задача в ZombsRoyale.io выжить, уничтожив остальных или просто выжить :) У вас есть оружие, есть всевозможные предметы. Новые предметы можно находить в ящиках (открывать кнопкой E). Также можно лечиться и пить бутылки для пущего эффекта.<br/>В самом начале ZombsRoyale.io вас выбрасываю с парашютом, кликните в точке, где вы хотите десантироваться. Далее ищите ящики, громите их и берите оружие (кнопка E). Не забывайте следить за уровнем здоровья и патронов.<br/>Если в ZombsRoyale.io вы попали в газовую атаке, сваливайте как можно скорее в любое безопасное место.<br/>Кроме того, можно прятать в кустах и поджидать противника. Возможно немного скучно, зато сравнительно безопасно и эффективно.<br/>ZombsRoyale.io — это еще одна матч арена на выживание. Любителям подобных игр по типу королевской битвы, пробовать сыграть в эту игру стоит обязательно.</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD перемещение</li>
                    <li>Клик стрелять</li>
                    <li>E подобрать предмет</li>
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