<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Ducklings.io | WorldPlay</title>
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
                  <p>8.3</p>
                </div>
                <div class="play__name">
                  <p>Ducklings.io</p>
                </div>
                <a href="../io/ducklings" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/ducklings"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_ducklings.io.webp" alt="" />
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестно</li>
                    <li><span class="pink">Издатель:</span> Неизвестно</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Симулятор, Ролевые</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> Ducklingsio, Ducklings io online</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Ducklings.io — это серый утенок в мире онлайн io-игр. Она настолько мирная и милая, что даже соперничество в ней выглядит безобидным. И не бойтесь смерти — прогресс сохраняется!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/ducklings.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Задача в игре Ducklings.io в том, чтобы приводить отбившихся от стаи и одиноких утят к себе в домик. В левом верху показывается количество утят для апгрейда жилища, а когда вы удалитесь от насеста, то дорога к нему будет показана специальным значком. Ориентируйтесь на него и попадете домой.<br/>Утята плодятся на другом берегу водоема. Опасность лежит между берегами: туда-сюда там плавают лодка с гребцами и яхта. Они могут вас убить. Но утята останутся! Поэтому как только возродитесь, сразу же плывите за утятками. Подберите заодно и тех, которые остались от гибели других уток.<br/>Соперничество в Ducklings.io с другими в том, что мы можем уводить друг у друга уточек. Это весело и азартно. Подрезайте чужих утяток, если придется по пути. А когда у самого наберется много, то бегом на базу, пока не подрезали вас. Удачи вам в постройке самого большого и красивого жилища!</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Утка движется за курсором</li>
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