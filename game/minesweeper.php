<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Minesweeper.io | WorldPlay</title>
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
                  <p>6.9</p>
                </div>
                <div class="play__name">
                  <p>Minesweeper.io</p>
                </div>
                <a href="../io/minesweeper" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/minesweeper"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_minesweeper.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Головоломка</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> сапёр ио, saper io online</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>«Сапёр» — компьютерная игра-головоломка.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/minesweeper.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text column">
                  <p>Цель в Minesweeper — найти и пометить все мины, спрятанные под серыми квадратами, за максимально короткое время. Это делается путем нажатия на квадраты, чтобы открыть их. Каждый квадрат будет иметь одно из следующего:<br/>
                  <ol>
                    <li>Мина, и если вы нажмете на нее, вы проиграете.</li>
                    <li>Число, указывающее, сколько из соседних клеток содержат мины.</li>
                    <li>Ничего. В этом случае вы знаете, что ни на одной из соседних клеток нет мин, и они также будут автоматически открыты.</li>
                  </ol><br/>Гарантируется, что первая открытая вами клетка не будет содержать мины, поэтому вы можете начать, щелкнув любую клетку. Часто вы попадаете в пустой квадрат с первой попытки, а затем вы также открываете несколько соседних квадратов, что облегчает продолжение. Тогда это в основном просто просмотр показанных чисел и выяснение, где находятся мины.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Левая кнопка мыши — открыть квадрат</li>
                    <li>Правая кнопка мыши — поставить флажок</li>
                    <li>Дважды нажмите правой кнопкой, чтобы поставить знак вопроса</li>
                  </ul>
                </div>
                <div class="play__info">
                  <p>Рекомендации</p>
                </div>
                <div class="play__text">
                  <p>Вы выиграете игру, когда откроете все квадраты, в которых нет мины. Если вы открыли все пустые/количество квадратов, но не отметили оставшиеся квадраты мин, они будут отмечены автоматически, и вы выиграли. Так что, по сути, пометка не требуется, она нужна только для того, чтобы помочь вам отслеживать, где, по вашему мнению, находятся мины. Настоящий способ выиграть — открыть все неминные квадраты. Это можно использовать, чтобы немного увеличить скорость, если вы пытаетесь улучшить свое время :)</p>
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