<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Yohoho.io | WorldPlay</title>
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
                  <p>Yohoho.io</p>
                </div>
                <a href="../io/yohoho" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/yohoho"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_yohoho.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Exodragon</li>
                    <li><span class="white">Издатель:</span> Exodragon</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Экшен, Ролевые</li>
                    <li><span class="white">Платформы:</span> Браузер, Android</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> Yo ho ho io, Yohohoio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Yohoho.io — это веселая многопользовательская io-игра. Мы будем играть за пиратов, которые оказались на острове сокровищ и нашли клад. Золотишко должно достаться только одному!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/yohoho.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Игровая цель в Yohoho.io в том, чтобы собрать со всех побольше золотых дублонов. По ходу королевской битвы, чем больше золота вы набираете, тем крупнее становитесь, но не стоит расслабляться. Каждого игрока хватает на три — четыре удара вне зависимости от его размеров. Плюс этой io-игры в том, что при столкновении оружия оно блокирует друг друга. Короче, получилась довольно реалистичная битва.<br/>Yohoho.io сделана в смешении стилей battle royale и игры на набор массы. Здесь можно вступать в сражение по ходу игры. Пространство постепенно сужается, и в красной зоне вас не ждет ничего, кроме смерти. А на заработанные золотые монеты вы можете покупать новые скины.<br/>Наблюдательный пользователь увидит, что Yohoho.io похожи на брутальную Vikings Village. В обеих играх можно зажимать клик, а затем атаковать усиленно с разгона. Сыграйте и зацените обе потрясающе веселые io-игры!</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Пират движется за курсором</li>
                    <li>Клик для обычной атаки</li>
                    <li>Зажать клик для усиленной атаки</li>
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