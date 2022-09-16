<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Knife.io | WorldPlay</title>
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
                  <p>Knife.io</p>
                </div>
                <a href="../io/knife" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/knife"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_knife.io.webp" alt="">
                  <ul>
                    <li><span class="pink">Разработчик:</span> Metajoy</li>
                    <li><span class="pink">Издатель:</span> Metajoy</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Экшен</li>
                    <li><span class="pink">Платформы:</span> Браузер, Android</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> кнайфио, ножио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Knife.io — это оригинальная io-игра. Она порадует как новичков, так и продвинутых участников и игроков. Берите ножи в руки и погнали!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/knife.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Игровая цель в Knife.io — это набрать больше всего очков. Так же засчитывается время, которое вы были живы. Сама суть игры предельно проста: становитесь круче, атакуйте внезапно и находите время для отдыха и исцеления своего персонажа.<br/>У вашего героя в Knife.io есть две стадии: атаки и защиты. Когда вы атакуете, то повышается ваша скорость Ножи врезаются в соперника и приносят вам победные очки. Чем больше победных очков вы набрали, тем больше ножей крутится на вашей орбите. А когда вы в защитной фазе, то передвигаетесь медленно, но пополняете свой ХП.</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Персонаж движется за курсором</li>
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