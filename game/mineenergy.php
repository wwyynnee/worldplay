<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть MineEnergy.io | WorldPlay</title>
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
                  <p>7.5</p>
                </div>
                <div class="play__name">
                  <p>MineEnergy.io</p>
                </div>
                <a href="../io/mineenergy" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/mineenergy"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_mineenergy.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Песочница</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Русский</li>
                    <li><span class="white">Альтернативные названия:</span> Mine Energy fun</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Добывание энергии в MineEnergy.io — это серьезное и увлекательное занятие. Используйте руду, прокачивайтесь и уничтожайте соперников в борьбе за ресурсы!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/mineenergy.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text column">
                  <p>MineEnergy.io — это игра по мотивам легендарного майнкрафта. Здесь нам нужно добывать ресурсы, ставить энергогенераторы и продавать энергию за деньги. Постоянное улучшение методов добычи и продажи это еще не все.<br/>Найдите такое место, где есть большинство ресурсов, чтобы не бегать за каждым по карте. Ставьте стены для обороны своих предприятий, а если на стены пока денег нет, то хватайте кирку и уничтожайте врага ручным способом. MineEnergy.io — это игра, где выживают только самые суровые майнеры!</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD для движения</li>
                    <li>Клик для атаки</li>
                    <li>E чтобы войти в магазин</li>
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