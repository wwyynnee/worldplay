<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Arras.io | WorldPlay</title>
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
                  <p>8.2</p>
                </div>
                <div class="play__name">
                  <p>Arras.io</p>
                </div>
                <a href="../io/arras" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <p>К сожалению, данная игра не позволяет установить соединение</p>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_arras.io.webp" alt="">
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестно</li>
                    <li><span class="pink">Издатель:</span> Неизвестно</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Экшен, Стратегия</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> аррас ио, аррасио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Arras.io — это Tanksmith.io. Игрокам предлагается сесть за руль убойного танка, прокачивать его, биться с Боссами и выяснить, кто же самый крутой и сильный игрок!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/arras.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Основная задача в Arras.io — это пробиться в лидирующие позиции, а затем и возглавить Топ игроков. Для этого вам нужно прокачивать свой танк, уничтожать других игроков, Боссов и не позволять никому убить вас.<br/>Для того чтобы прокачивать Танк в Arras.io вам необходимо уничтожать геометрические фигуры, появляющиеся повсеместно на поле. Самые ценные фигуры — фиолетовые, за них дают больше всего очков. Огромные фиолетовые многогранники находятся в центре карты и охраняются самонаводящимися пулями и Боссом, которого так же можно уничтожить и поднять на этом очков.<br/>Зарабатывая очки, вы прокачиваете свой танк по уровням. За уровни вам дают очки прокачки, которые вы можете вложить характеристики Танка. И еще три раза вы будете мутировать по типу Танка, приобретая новые орудийные и тактические возможности. За это мы и любим Arras.io, ведь интересно играть за разные типы Танков!<br/>Уничтожайте других игроков для того, чтобы взять часть их очков себе. Верный способ занять место лидера — уничтожить действующего Топера. В Arras.io есть стрелка, показывающая на лидера гонки. Так что, став царем горы, будьте осторожны, ведь все игроки знают ваше местонахождение!<br/>Огромные серые формы, которые авторы добавили в Arras io неуничтожимыми и используются как преграды. Теперь можно за ними прятаться и внезапно атаковать. Теперь игра стала похожа на пейнтбол!</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD чтобы двигаться</li>
                    <li>Клик для стрельбы</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <article>
          <?php
            include "../src/settings/game__nav.php";
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