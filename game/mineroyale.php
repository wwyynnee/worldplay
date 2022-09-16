<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть MineRoyale.io | WorldPlay</title>
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
                  <p>8.1</p>
                </div>
                <div class="play__name">
                  <p>MineRoyale.io</p>
                </div>
                <a href="../io/mineroyale" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/mineroyale"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_mineroyale.io.webp" alt="" />
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестно</li>
                    <li><span class="pink">Издатель:</span> Неизвестно</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Путешествия, Песочница</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Русский</li>
                    <li><span class="pink">Альтернативные названия:</span> mine royale io, mine royal io, minecraft royale io, минрояль ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>MineRoyale.io — это 2D баттл рояль по мотивам игры Майнкрафт. Придется добывать, крафтить и сражать, пока кольцо времени не сжалось до точки.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/mineroyale.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Как и в любом баттл рояле в MineRoyale с течением времени доступное для игры пространство постепенно сжимается, вынуждая игроков встречаться друг с другом, даже если они отпетые интроверты и предпочитают спокойно ковырять киркой россыпь камней.<br/>Собственно, на каждую игру MineRoyale.io отведено определенное время. За это время предстоит добыть ресурсов, скрафтить оружие и что-нибудь для защиты, ну и порубить противника, пока он не порубил вас :)<br/>Собирайте грибы в MineRoyale. Их можно потушить и есть для восстановления здоровья, когда некогда ждать естественного заживления.</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Цифрами переключаться между предметами</li>
                    <li>E чтобы крафтить</li>
                    <li>Shift чтобы красться (заодно скрывает ваш ник)</li>
                    <li>Зажмите левую кнопку чтобы рушить блоки киркой</li>
                    <li>Левым кликом закладывайте взрывчатку и правым ее детонируйте</li>
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