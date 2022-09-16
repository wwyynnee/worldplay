<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Colonist.io | WorldPlay</title>
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
                  <p>6.7</p>
                </div>
                <div class="play__name">
                  <p>Colonist.io</p>
                </div>
                <a href="../io/colonist" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/colonist"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_colonist.io.webp" alt="">
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Стратегия</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> колонистио, колонист ио играть, катан онлайн</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Colonist.io — это онлайн io-игра, в которой мы будем осваивать остров Катан и бороться за влияние на нем. Здесь есть открытые и закрытые игровые комнаты, турниры и многое другое!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/colonist.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Игровая задача в Colonist.io — это набрать десять VP (победных очков). В игре есть коротенькое видео, которое введет вас очень удобно в принципы схватки. Для начала вам нужны будут ресурсы. Их производят поселения и города. Ставьте поселения на стыках секторов, и вы будете получать ресурсы с этих участков на ваш выбор.<br/>Ресурсы в Colonist.io используются в пяти случаях. Построить дорогу, поставить поселение, основать город, купить специальную карточку (Development Card) и можно торговать с другими игроками. Победные очки вам дают за Поселения (Settlement), Города (City), Длиннейшую Дорогу (Longest Road), мощнейшую армию (Largest Army) и ПО со спецкарточки (Victory Points Development Cards). Смотрите, чем занимаются и куда вкладываются другие игроки, отстраивайте свои поселения в соответствии с этим и будьте со всеми вежливы — здесь вежливость города берет, поверьте.</p>
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