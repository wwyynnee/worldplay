<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть TankWars.io | WorldPlay</title>
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
                  <p>TankWars.io</p>
                </div>
                <a href="../io/tankwars" target="_blank">
                  <?php
                    include "../src/settings/game/play_grey.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/tankwars"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_tankwars.io.webp" alt="">
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Экшен</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> танкварс ио, танк варс ио, Tankwarsio, Tankwars io 2, Tankwarsio 2</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Tankwars.io — это игра про танковые войны с очень хорошей графикой, большим набором оружия и захватывающей атмосферой. Придётся по нраву всем любителям io-игр и танковых баталий.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/tankwars.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Tankwars.io — это командная игра. Главная задача здесь — захват контрольных точек и последующий за этим рост очков. Вверху вы видите строку состояния очков вашей команды и команды соперников. Как только шкала одной из команд полностью заполнится — те и выиграли. А чтобы строка очков заполнялась быстрее, нужно захватывать больше контрольных точек!<br/>Для битвы в Танки онлайн вам предложат 3 типа танков; Классический, Мамонт и Скаут. Танк Мамонт неповоротлив, но живуч и силён по урону. Скаут всю свою силу вложил в скорость передвижения, оставив себе немного здоровья и ударной мощи. Классический танк это что-то среднее между Мамонтом и Скаутом.<br/>Основное оружие в игре это бонусные орудия, которые сбрасывают самолёты на парашютах. Несколько бонусов достаётся вам при рождении, а еще бонусы щедро выпадают из взорванных соперников.<br/>Отличная графика и развитая боевая система Танки онлайн порадует всех любителей танковых игр. Осталось только немного приспособиться к управлению!</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD чтобы двигаться</li>
                    <li>Клик для стрельбы пушкой</li>
                    <li>Цифры для использования специального оружия</li>
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