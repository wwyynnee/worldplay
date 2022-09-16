<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Evades.io | WorldPlay</title>
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
                  <p>4.2</p>
                </div>
                <div class="play__name">
                  <p>Evades.io</p>
                </div>
                <a href="../io/evades" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/evades"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_evades.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Гонка</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> вторжение ио, Evadesio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Evades.io — это приключенческая игра, где нужно пройти 30 уровней сложности, чтобы выиграть. На протяжении всей игры залог победы — помощь друг другу!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/evades.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text column">
                  <p>Во Evades.io игровая задача — пройти 30 уровней. Постепенно сложность уровней будет возрастать и игрокам нужно будет помогать друг другу, как альпинисты страхуют друг друга при восхождении. Если вашего персонажа в игре коснется противник, то вы застынете на некоторое время. Это время вашего спасения; если кто-нибудь коснется вас до истечения таймера, то вы сможете продолжить игру. Если же таймер выгорит и до вас никто не дотронется — увы, придётся начинать с начала.<br/>По мере прохождения Evades.io важно собирать цветные точки. Это опыт, а за опыт дают уровни с ними очки прокачки. Можно усилить свои базовые навыки, а также специальные возможности персонажа. Умения при использовании тратят энергию (Energy) — это синяя полоска над вашим шариком. Она постепенно восстанавливается. А после прохождения 10го и 20го уровней вам открываются новые персонажи со своими специальными навыками.<br/>Evades.io — это кооперативная игра. Нужно будет скооперироваться с другом для её прохождения или уже по ходу дела дружить с игроками в игре. Если увидите кого-нибудь в беде, приходите на помощь. Для коммуникации, договоров, построения тактики и просто беседы есть чат, который находится в левом верхнем углу.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD для движения</li>
                    <li>Цифры 1-5 для прокачки навыков</li>
                    <li>Z или X для использования навыков</li>
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