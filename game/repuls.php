<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Repuls.io | WorldPlay</title>
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
                  <p>7.9</p>
                </div>
                <div class="play__name">
                  <p>Repuls.io</p>
                </div>
                <a href="../io/bonk" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/repuls"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_repuls.io.webp" alt="" />
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестно</li>
                    <li><span class="pink">Издатель:</span> Неизвестно</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Шутер</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> пульс ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Хотели крутого шутера, а старые все надоели? Встречайте Repuls.io — прогрессивный онлайн io-шутер. Действие разворачивается на секретной военной базе...</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/repuls.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>С самого старта Repuls.io потрясает качеством графики и атмосферой окружающего мира. Вы можете кастомизировать своего персонажа: взять ему разное стартовое вооружение и разукрасить, как сочтете нужным в целях маскировки. В чем единодушно сходятся все игроки, так это в мелких, но мощных бомбочках:<br/>Эти малышки способны разорвать противника на куски! Жаль, что нести их можно только по две штуки в запасе. Активируются они на кнопку 2 и выбрасываются сразу же. Смотрите, не подорвитесь на своих собственных гранатах!<br/>Просторы Repuls.io подходят для того, чтобы вести скрытную войну и не идти на врага лоб в лоб. Забирайтесь повыше и выслеживайте цели. Аптечек здесь нет принципиально, потому что здоровье восполняется автоматически. Если вас ранили, то сразу же скрывайтесь, чтобы восполниться и попозже нанести ответный удар. Здесь пока немного карт и оружия. Пока автор будет все это создавать, можете зарубиться в ShellShock.io — эта игра давно в строю и там всего много!</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD для движения</li>
                    <li>1 для смены оружия</li>
                    <li>2 для броска гранаты</li>
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