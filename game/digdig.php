<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Digdig.io | WorldPlay</title>
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
                  <p>Digdig.io</p>
                </div>
                <a href="../io/digdig" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/digdig"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_digdig.io.webp" alt="" />
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестно</li>
                    <li><span class="pink">Издатель:</span> Неизвестно</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Экшен</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> dig dig io</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Digdig.io — это многопользовательская io-игра, которая собирает десятки игроков со всего мира. Копайте глубже, если хотите раскрыть все недра планеты!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/digdig.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Копайте! В digdig.io нужно будет много копать =) Каждый пройденный сантиметр почвы даст вам дополнительный объем и силу. При столкновении с другими игроками тот, кто больше, тот уничтожит и захватит массу соперника. Но при этом есть неcколько нюансов, которые приходится учитывать. Очень скоро вы их поймете:<br/>Красные точки на карте это лава. Она дает вам очки, но отнимает ХП. Полностью она вас не убьет никогда, но это могут сделать другие игроки, которые подстерегут вас с минимальным количеством здоровья.<br/>Путешествуйте по всей карте Digdig.io и открывайте самые богатые жилы. Белые дадут вам дополнительную броню. Синие — множество очков опыта. Зеленые дадут также много очков, но они со временем растают. Ищите золотую жилу — именно она даст вам золотые монеты, на которые потом можно купить новые скины для своего героя. Многое можно еще сказать по поводу digdig.io, ведь это одна из тех игр, которые в полной мере отражают дух io-игр, которые мы так любим.</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Герой движется за курсором</li>
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