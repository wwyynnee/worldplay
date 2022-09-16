<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Krew.io | WorldPlay</title>
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
                  <p>7.7</p>
                </div>
                <div class="play__name">
                  <p>Krew.io</p>
                </div>
                <a href="../io/krew" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/krew"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_krew.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Экшен, Ролевые</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> krew io, крев ио, крево ио, крю ио, морская битва ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Krew.io — игра с уникальным взаимодействием между игроками. С одной стороны, как и в пиратской саге Doblons.io, игрокам предстоит биться и выколачивать друг из друга нажитые сокровища. С другой стороны, Krew.io — это полноценная 3D игра, в которой игрок, владеющий кораблем, может принимать к себе в команду других пользователей для совместного пиратства. Благо, обширные просторы Krew.io к этому располагают.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/krew.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text column">
                  <p>Задача в Krew.io — построить самый большой корабль и стать Топ капитаном. Для этого нужно делать несколько простых вещей. По водным просторам плавают ящики, которые нужно собирать. Количество собранных ящиков в левом верхнем углу, там же, где и здоровье корабля. В любой момент можно подплыть к острову и то, что вы насобирали, переместится из активного запаса в пассивный запас (правый нижний угол). Такая катавасия в Krew.io преследует следующую цель: вы не можете насобирать ящиков больше, чем вмещает ваш корабль (верхний левый угол). Чтобы купить новый тип корабля, вам нужно существенно больше золота, чем вы можете насобирать в активный запас. Поэтому вам нужно подплывать к островам и сливать активный сбор ресурса в пассивный золотой запас, который бесконечен.<br/>Другой способ обогащения в Krew.io — драка, потопление и разграбление вражеских кораблей. Для этого у нас есть пушка (за которую мы и играем). Чем вместительнее наш корабль, тем больше пушкарей он может взять на борт. При этом управлять кораблем будет по-прежнему владелец, а вот стрелять — каждый кто как хочет. Те, кто находятся на чужом корабле, получают барыш за урон, который они нанесли за время плавания. Такое взаимодействие между игроками больше нигде, кроме как в Krew.io не встречается.<br/>Когда вы только входите в Krew.io, то для вас две возможности, где родиться: или на плотике, или на корабле, который в этот момент находится в прибрежной зоне. Это происходит случайным образом. Так что если вы хотите попасть именно на корабль и попытать счастья в команде, прежде чем наскрести на собственную шхуну, то нужно перезаходить, пока не случится попасть на борт матросом.<br/>Изюминка Krew.io в том, что плохой матрос может попасть к хорошему капитану и наоборот =) От этого никто не застрахован. Но когда толковый капитан собирает себе команду опытных пушкарей - все сушите весла, мало никому не покажется. Krew.io однозначно стоит в пантеоне io-игр на особом месте и полностью это заслуживает.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD чтобы двигаться пушкой</li>
                    <li>Клик чтобы стрелять</li>
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