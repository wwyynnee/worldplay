<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Pixelwarfare.io | WorldPlay</title>
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
                  <p>8.4</p>
                </div>
                <div class="play__name">
                  <p>Pixelwarfare.io</p>
                </div>
                <a href="../io/zombsroyale" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/zombsroyale"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_pixelwarfare.io.webp" alt="" />
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестно</li>
                    <li><span class="pink">Издатель:</span> Неизвестно</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Экшен, Шутер</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> pixel warfare, pixelwarfare io, пиксель варфаер играть</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Pixelwarfare.io находится в жанре очень милых стрелялок. Эта io-игра не требует скачивания и можно устроить перестрелку здесь и сейчас. Только откройте её в браузере и пригласите друзей =)</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/pixelwarfare.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Pixelwarfare.io радует нас уютной графикой. Для нас с самого начала доступно все вооружение, но в небольших количествах. Здесь очень сильно и красиво можно ударить из гранатомета, но выстрела всего два. Зато с новым перерождением все наши боеприпасы обновят свое количество. Найдите для себя пушку, с которой вам приятней всего уничтожать соперников =)<br/>Все карты Pixelwarfare.io очень масштабны. Принцип такой: вначале мы сражаемся на длинных дистанциях с помощью дальнобойных орудий. Затем кончаются патроны и мы вынуждены продвигаться вперед для боя на средней дистанции. В конце концов мы оказываемся с противником лицом к лицу =) Стрелялка получилась красивая и захватывающая. Здесь всегда много реальных людей, так что добавьте ее в избранное, чтобы не потерять!</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD для движения</li>
                    <li>Клик для атаки</li>
                    <li>Цифры 1-9 для выбора оружия</li>
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