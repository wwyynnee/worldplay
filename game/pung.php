<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Pung.io | WorldPlay</title>
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
                  <p>Pung.io</p>
                </div>
                <a href="../io/pung" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/pung"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_pung.io.webp" alt="" />
                  <ul>
                    <li><span class="pink">Разработчик:</span> devclied</li>
                    <li><span class="pink">Издатель:</span> devclied</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Экшен</li>
                    <li><span class="pink">Платформы:</span> Браузер, Android</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> pungio, пунгио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Pung.io  — это крутая io-игра в бокс. Мы будем играть под личиной одной из могущественных группировок, но каждый сам за себя. Боксируйте всех вокруг и даже главного Босса!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/pung.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Первое дело, которым вы займетесь в Pung.io это прокачка. Боксируйте любой предмет, который вы встретите. За это у вас будут набиваться уровни, а с ними дополнительные к стартовым очки прокачки. Распределяйте их в соответствии с вашей стратегией тренировки идеального бойца =) И обязательно используйте дополнительный шокирующий удар на пробел.<br/>Шокированный противник некоторое время будет менее подвижен — используйте это, чтобы побороть даже более высокоуровневого парня. В центре карты Pung.io живет золотой Босс, которого убить очень сложно и нужно действительно целую группу собирать для атаки на него. А за победные монеты вы можете купить себе крутые скины в игровом магазине, так что качайтесь, побеждайте и одевайтесь!</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Боец движется за курсором</li>
                    <li>Клик для удара</li>
                    <li>Пробел для шок атаки</li>
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