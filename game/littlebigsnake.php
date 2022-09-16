<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Little Big Snake.io | WorldPlay</title>
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
                  <p>8.5</p>
                </div>
                <div class="play__name">
                  <p>LittleBigSnake.io</p>
                </div>
                <a href="../io/littlebigsnake" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/littlebigsnake"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_littlebigsnake.io.webp" alt="">
                  <ul>
                    <li><span class="pink">Разработчик:</span> Addicting Games Inc</li>
                    <li><span class="pink">Издатель:</span> Addicting Games Inc</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Экшен, Путешествия, Песочница</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> литлбигснейк ио, littlebigsnake io</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>LittleBigSnake.io — это продвинутая вариация на тему великой Slither.io. Здесь реализована мечта тех, кто хочет не только биться на поле боя, но и прокачивать змейку за заработанные очки.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/littlebigsnake.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Основная цель LittleBigSnake.io это стать самой большой и здоровой змеёй на поле. Для этого нужно поедать цветные точки массы, которые появляются повсеместно. Если хотите больше массы, то придётся биться с другими игроками. Происходит это так: змея при повреждении головы погибает. Поэтому нельзя врезаться головой в других змей, зато свой собственный хвост пронзать можно. С другой стороны, нужно делать так, чтобы змеи противников врезались в ваши бока. Умерев, змеи распадаются на составляющую их массу, которую можно сразу же подобрать.<br/>Новшество номер один в LittleBigSnake.io по сравнению с оригинальной Slither.io — здесь за игру вам достаются игровая валюта, за которую вы прокачиваете специальные здания, которые добавляют вашей змее бонусы. Кроме этого, вы получаете опыт, и по достижении новых уровней вам становятся доступны новые апгрейды.<br/>Но если это новшество реализовано и в других змейках тоже, то появление Жужи делает LittleBigSnake.io поистине уникальной игрой. Жужа это ваш второй шанс добыть очков. После гибели змеи вам будет предложено сыграть за этого жука, задачей которого будет также сбор точек массы (нектара), давление жуков, которые остаются после гибели других змей и давления с высоты других Жуж. Очень интересная опция, которая вносит изюминку в игровой процесс!<br/>Для полноты всех опций, сохранения игрового опыта и купленных строений лучше всего зарегистрироваться внутри игры. Так вы будете точно знать, что приобретенные вами скины и прочие бонусы никуда не пропадут.</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Змея движется за курсором</li>
                    <li>Клик, чтобы ускориться</li>
                    <li>Жужа движется за курсором</li>
                    <li>Клик, чтобы взлететь/сесть</li>
                    <li>Кликнуть и зажать во время полёта, чтобы лететь быстрее</li>
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