<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Lordz.io | WorldPlay</title>
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
                  <p>8.8</p>
                </div>
                <div class="play__name">
                  <p>Lordz.io</p>
                </div>
                <a href="../io/lordz" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/lordz"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_lordz.io.webp" alt="" />
                  <ul>
                    <li><span class="pink">Разработчик:</span> Multiplayer.co</li>
                    <li><span class="pink">Издатель:</span> Multiplayer.co</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Стратегия</li>
                    <li><span class="pink">Платформы:</span> Браузер, Android</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> орды ио, лордс ио, лорд ио, лордзио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Lordz.io — это органичное переплетение разных игровых механик в совершенно уникальную игру. По большому счёту нужно будет собирать братву для серьёзной разборки с конкурентами за власть над миром.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/lordz.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Боевая задача в Lordz.io — стать неоспоримым лидером на карте. Для этого нужно строить армию да помощнее. Для того чтобы построить армию, нужно увеличить лимит найма воинов; увеличивается он путём постройки Домов. Чтобы ваши дома не разрушили, обороняйте их Башнями. А на всё-про-всё собирайте золотые монетки на карте.<br/>Логика Lordz.io потрясающе проста и мощна. Постройка зданий лимитирована. То есть каждому лорду предстоит найти свой баланс между Домами и Башнями; между большим лимитом войск и защитой своего поселения.<br/>Армии игроков сражаются в автоматическом режиме. Но можно кликать на вражеского Лорда, чтобы по большей мере атаковали именно его. Оставшиеся после гибели Лорда войска перейдут под управление победителя. Проигравшему можно будет после поражения зайти заново в игру и начать не с пустого места: здания, которыми он владел, будут снова его.<br/>Если войска сражаются в автоматическом режиме друг с другом, то, чтобы уничтожить вражеское здание, нужно кликнуть на него и не отпускать клик, пока здание не будет разрушено. А как тактический ход в битве друг с другом можно использовать пробел — ваши войска разделятся, как в Agar.io. Таким образом вы сможете догнать убегающего соперника или просто увеличить себе охват территории для сбора монет.<br/>Магические башни в последнем апгрейде очень сильно бьют войска и не ранят при этом Лорда. Отличная защита против драконов!</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Войска движутся за мышью</li>
                    <li>Пробел чтобы разделить армию</li>
                    <li>Кликнуть на здание и зажать клик, чтобы атаковать постройку</li>
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