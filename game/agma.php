<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Agma.io | WorldPlay</title>
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
                  <p>Agma.io</p>
                </div>
                <a href="../io/agma" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/agma"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_agma.io.webp" alt="" />
                  <ul>
                    <li><span class="pink">Разработчик:</span> Agma</li>
                    <li><span class="pink">Издатель:</span> Agma</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Экшен, Приключения</li>
                    <li><span class="pink">Платформы:</span> Браузер, Android</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> Agmaio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Agma.io — это еще одна игра в коллекцию Agar.io подобных игр. Уникальность такой игры в том, что по ходу игры можно заключать союзы, чтобы не кушать друг друга, и, наоборот, вместе охотиться. Agma.io выполнена совсем уж в стилистике оригинала, и понравится поклонникам жанра. Зарегистрированным пользователям в Agma.io предлагается копить монетки и покупать артефакты и специальные навыки для борьбы с другими игроками.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/agma.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Основная задача — стать самой большой клеткой на сервере. Для этого надо кушать цветные точки массы и поглощать более мелких игроков. Зеленые шипастые круги, появляющиеся там-сям разнесут вашу клетку на несколько частей, поэтому их стоит остерегаться. Кроме всего прочего в Agma.io есть специальные умения, совсем как в Aqwar.io. Некоторые умения расталкивают игроков в стороны, какие-то парализуют соперников, какие-то защищают вас от поглощения на некоторое время. Чтобы их покупать, нужно собирать во время игры золотые монетки, а потом регистрироваться в игре (чтобы сохранился ваш игровой баланс) идти в меню Shop и там уже затариваться всем необходимым. Но в этом особо нет необходимости, главное — умение.</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Движется клетка за мышью</li>
                    <li>W чтобы выплюнуть часть массы</li>
                    <li>Пробел чтобы разделиться</li>
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