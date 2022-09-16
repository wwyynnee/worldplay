<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть SlitherCraft.io | WorldPlay</title>
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
                  <p>7.3</p>
                </div>
                <div class="play__name">
                  <p>SlitherCraft.io</p>
                </div>
                <a href="../io/slithercraft" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/slithercraft"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_slithercraft.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Экшен, Симулятор</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Русский</li>
                    <li><span class="white">Альтернативные названия:</span> слизеркрафт ио, Slither Craft io</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>SlitherCraft.io — это забавная многопользовательская змейка онлайн. Здесь этакий винегрет из разных игр, и есть где проявить свой тактический талант. Вступайте!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/slithercraft.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text column">
                  <p>Игровая цель в SlitherCraft — это набрать максимально большое количество очков. Для этого собирайте своей змейкой блоки на поле, а за алмазные вы получите больше всего поинтов. Также легкий способ быстро набрать очки это уничтожить другую змейку и взять ее остатки себе!<br/>Чтобы убить врага по SlitherCraft.io, вам нужно либо забросать его динамитом, либо подрезать своим телом, как в классической змейке. Это очень интересное нововведение. Теперь маленькие игроки могут уничтожить гигантов просто взрывом! Попробуйте оба способа битвы, чтобы выявить их сильные и слабые стороны. Побеждайте!</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Змея движется за курсором</li>
                    <li>Клик для ускорения</li>
                    <li>Правый клик для динамита</li>
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