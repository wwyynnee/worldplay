<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть MiniGiants.io | WorldPlay</title>
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
                  <p>MiniGiants.io</p>
                </div>
                <a href="../io/minigiants" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/minigiants"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_minigiants.io.webp" alt="" />
                  <ul>
                    <li><span class="pink">Разработчик:</span> Night Steed Games</li>
                    <li><span class="pink">Издатель:</span> Night Steed S.C.</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Экшен</li>
                    <li><span class="pink">Платформы:</span> Браузер, Android, iOS</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> Mini Giants io, Mini Giantsio, минигиганты ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Где-то можно провести параллель MiniGiants.io с топовой игрушкой Evowars.io. Но все же это получилась самостоятельная крутая игра, в которую просто надо играть и звать друзей!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/minigiants.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Боевая задача в MiniGiants — это стать самым крутым воином в истории арены. Вы с другими игроками бьетесь не на жизнь, а насмерть, по ходу получая уровни за убийства и становясь круче и мощнее. А за проведенные бои вы получаете призовое золото, которое можно потратить в ближайшем магазинчике крутого шмотья. Отдельная крутость MiniGiants в том, что вы здесь можете полностью одеть своего героя, как в РПГ играх. А количество разноплановых персонажей просто радует.<br/>Во время боя в MiniGiants.io важно знать две вещи. Первое — собирайте сундучки; вы за них получите золото и амуницию. Второе — все время пополняйте хп путем сбора цветных камней. Даже хай-левельных игроков можно зарубить с одного удара, если у них мало хп осталось. Поэтому находите время не только для битвы, но и для сбора здоровья. Короче, это получилась такая игрушка, в которую можно рубиться с друзьями даже на школьных уроках!</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Боец движется за курсором</li>
                    <li>Клик для атаки</li>
                    <li>Правый клик для ускорения</li>
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