<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Territorial.io | WorldPlay</title>
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
                  <p>8.3</p>
                </div>
                <div class="play__name">
                  <p>Territorial.io</p>
                </div>
                <a href="../io/territorial" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/territorial"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_territorial.io.webp" alt="" />
                  <ul>
                    <li><span class="pink">Разработчик:</span> David Tschacher</li>
                    <li><span class="pink">Издатель:</span> David Tschacher</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Симулятор, Стратегия, Ролевые</li>
                    <li><span class="pink">Платформы:</span> Браузер, Android, Windows</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> территориал ио, территория ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Хотите поиграть в глобальную войну? Territorial.io — это невероятно драйвовая игра, где самая сильная империя может распасться за несколько секунд. Если вы сумеете выиграть, то вы герой!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/territorial.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Выигрыш в Захвате Territorial.io так далёк, что до него очень сложно дожить. Нужно захватить всю карту — тогда и только тогда вас объявят победителем. Изначально на вашей территории появляются военные силы. Затем кликайте на свободное пространство и захватывайте его. Очень скоро игроки подойдут вплотную друг к другу и начнется война.<br/>Если у вас получилось вырваться вперед на самом старте, то прорывайтесь к воде — таким образом у вас хотя бы одна из сторон будет не под атакой. Уничтожайте мелких соперников и разрастайтесь еще больше за их счет. Обратите внимание, что если между вами и врагом в Territorial.io есть не занятое пространство, то вы не можете отдать приказ атаковать врага. Вначале захватите промежуток, соедините ваши границы, а потом уже разгромите соседа!</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
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