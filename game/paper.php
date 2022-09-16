<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Paper.io | WorldPlay</title>
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
                <div class="play__value bgreen" title="Оценка">
                  <p>7.3</p>
                </div>
                <div class="play__name">
                  <p>Paper.io</p>
                </div>
                <a href="../io/paper" target="_blank">
                  <?php
                    include "../src/settings/game/play_green.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/paper"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_paper.io.webp" alt="" />
                  <ul>
                    <li><span class="green">Разработчик:</span> Voodoo</li>
                    <li><span class="green">Издатель:</span> Voodoo, Free Simulator Games Online Ltd.‬</li>
                    <li><span class="green">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="green">Жанры:</span> Экшен, Стратегия</li>
                    <li><span class="green">Платформы:</span> Браузер, Android, Windows</li>
                    <li><span class="green">Режим игры:</span> Сетевая игра</li>
                    <li><span class="green">Язык интерфейса:</span> Английский</li>
                    <li><span class="green">Альтернативные названия:</span> пейпер ио, Paperio 2, бумага ио 2</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bgreen">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Paper.io 2 — это игра на захват территории. Минималистичная графика, приятное управление и непростая задача на завладевание всей территорией ждут смелых игроков!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/paper.io.webp" alt="" />
                </div>
                <div class="play__info bgreen">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Игровая цель в Paper.io 2 в том, чтобы захватить сто процентов территории. Это достижимая цель при определенном навыке и не без доли удачи. В любом случае даже если конечная цель не выйдет, постарайтесь поставить рекорд, захватив максимум того, что сможете.<br/>Игроки в Paper.io 2 стартуют с небольшой базы. Чтобы захватить территорию, нужно выйти со своей базы и снова на нее вернуться, охватив кусочек карты. Если во время вашего захвата кто-нибудь пересечет вашу линию, то вы погибните. Важно понимать, что на своей базе вы неуязвимы, и противника, который хочет забрать у вас кусок площади вы можете бить даже лоб в лоб.</p>
                </div>
                <div class="play__info bgreen">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Стрелки чтобы управлять героем</li>
                  </ul>
                </div>
                <div class="play__info bgreen">
                  <p>Моды</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Скачать мод
                      <a href="https://greasyfork.org/ru/scripts/433006-paper-io-hacked-menu" target="_blank">
                        <span class="yellow">Paper.io Hacked Menu</span>
                      </a> — 
                      <span class="pink">Zoom Hack</span>,
                      <span class="green">Любой скин</span>
                    </li>
                    <li>Скачать мод
                      <a href="https://greasyfork.org/ru/scripts/433400-reverse-controls" target="_blank">
                        <span class="yellow">Reverse Controls</span>
                      </a> — 
                      <span class="pink">Изменения управления (fun)</span>
                    </li>
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