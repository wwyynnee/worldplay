<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть DashCraft.io | WorldPlay</title>
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
                  <p>6.9</p>
                </div>
                <div class="play__name">
                  <p>DashCraft.io</p>
                </div>
                <a href="../io/dashcraft" target="_blank">
                  <?php
                    include "../src/settings/game/play_grey.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/dashcraft"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_dashcraft.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Light Media Apps</li>
                    <li><span class="white">Издатель:</span> Light Media Apps</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Гонка</li>
                    <li><span class="white">Платформы:</span> Браузер, Android</li>
                    <li><span class="white">Режим игры:</span> Однопользовательская и сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> Dash Craft io</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>DashCraft.io — это io-игра, в которую нужно заглянуть хотя бы раз. У этой игры есть все шансы на то, чтобы быть внесенной в ваш список "любимые"!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/dashcraft.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Боевая цель DashCraft.io в том, чтобы захватить верхние позиции Топ листа и оставаться там как можно дольше. Знайте, что когда вы займете первое место, то на вас объявят настоящую охоту, так что взятие первенства это не конец, а только новое начало в DashCraft.io.<br/>В DashCraft io можно играть одному, с друзьями или множеством игроков со всего мира. Совершенно бесплатная, без лагов, видимых задержек и глюков. Если вам понравилась эта игра попробуйте также Snaker.io и Cricket Live.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Пробел для действия</li>
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