<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Wormate.io | WorldPlay</title>
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
                  <p>7.7</p>
                </div>
                <div class="play__name">
                  <p>Wormate.io</p>
                </div>
                <a href="../io/wormate" target="_blank">
                  <?php
                    include "../src/settings/game/play_green.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/wormate"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_wormate.io.webp" alt="" />
                  <ul>
                    <li><span class="green">Разработчик:</span> Oleksandr Godoba</li>
                    <li><span class="green">Издатель:</span> Oleksandr Godoba</li>
                    <li><span class="green">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="green">Жанры:</span> Экшен, Симулятор</li>
                    <li><span class="green">Платформы:</span> Браузер, iOS, Android</li>
                    <li><span class="green">Режим игры:</span> Сетевая игра</li>
                    <li><span class="green">Язык интерфейса:</span> Русский</li>
                    <li><span class="green">Альтернативные названия:</span> вормейт, вормате ио, Wormatio, сладость ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bgreen">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Wormate.io — это игра в стиле борьбы змей за массу. Необходимо будет кушать сладости, которые появляются то здесь, то там, и дают вашей змее массу. Чем больше становится ваш питомец, тем легче ему справиться с соперниками.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/wormate.io.webp" alt="" />
                </div>
                <div class="play__info bgreen">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Единственная задача Wormate.io — это есть, причем есть как можно больше. По мере увеличения массы ваш червь и дальность обзора будут расти. Но есть вы будете не только еду, которая появляется повсеместно на карте. Основная добыча это другие игроки. Умирая, змея распадается на составляющие, которые можно тут же подобрать.<br/>Чтобы уничтожить соперника в Wormate.io, необходимо подстроить так, чтобы его голова врезалась в ваше туловище. Голова это единственное уязвимое место змейки любого размера. Так что даже самая маленькая змея потенциально может уничтожить Топового игрока величиной в десятки тысяч массы. А после уничтожения соперника необходимо будет побороться за еду с теми другими, кто налетит на пиршество.<br/>Единственное доступное оружие в Wormate.io — это ускорение. Зажав клик вы ускоритесь, но за каждую секунду ускорения вы тратите заработанную массу. Чтобы биться с другими игроками, избегать опасностей ускорение просто необходимая вещь.<br/>Кроме всего прочего, в игре достаточное количество прикольных бонусов, которые помогают собирать еду, биться с другими игроками и расти. Правило такое: увидел склянку — бери. И чем больше, тем лучше!</p>
                </div>
                <div class="play__info bgreen">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Змейка движется за курсором</li>
                    <li>Клик для ускорения</li>
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