<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Skribbl.io | WorldPlay</title>
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
                  <p>Skribbl.io</p>
                </div>
                <a href="../io/skribbl" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/skribbl"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_skribbl.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Головоломка</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский и Немецкий</li>
                    <li><span class="white">Альтернативные названия:</span> Skribblio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>В игре Skribbl.io вам придется в компании с другими игроками по очереди рисовать и угадывать рисунки других игроков. При входе в игру вы попадаете в компанию еще нескольких человек. Ведущему дают на выбор несколько слов, из которых он должен выбрать одно, которое будет рисовать, а другие — угадывать.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/skribbl.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text column">
                  <p>Итак, вы выбрали слово и пошел обратный отсчет. На один круг дается 30 секунд. По мере того как вы рисуете, другие пытаются угадать. В качестве подсказки сверху указывается количество букв. Ближе к финалу открывается по одной букве для большей подсказки. Через 30 секунд раунд заканчивается, и право рисования переходит к следующему игроку.<br/>Угадавший первым получает максимум баллов, следующий чуть меньше и так далее. Ведущий (кто рисует) тоже получает баллы. Чем больше игроков угадает, тем больше баллов вы получите.<br/>К сожалению, Skribbl.io доступна только для слов на английском и немецком. Поэтому, если вы хотите попрактиковаться в знании этих языков, то милости просим!</p>
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