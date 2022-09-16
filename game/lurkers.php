<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Lurkers.io | WorldPlay</title>
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
                  <p>5.5</p>
                </div>
                <div class="play__name">
                  <p>Lurkers.io</p>
                </div>
                <a href="../io/lurkers" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/lurkers"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_lurkers.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Экшен</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> луркер ио, лурк ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Lurkers.io — это кооперативная многопользовательская io-игра. Мы играем совместно против орд злобных зомби. Мы думали, что сможем спрятаться от зомби-апокалипсиса в шахтах, но они пробрались и туда. Надо выжить любой ценой!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/lurkers.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Игровая задача в Lurkers.io — это продержаться шесть волн нашествия зомби. Вас будут атаковать со всех сторон. Чтобы вас не зажали ориентируйтесь по мини-карте в правом нижнем углу. Красными точками обозначены враги. У них потребуется время, чтобы взломать двери, через которые вы можете отстреливаться. Используйте эту возможность. Не рассчитывайте особо на лестницы — вести на них бой очень сложно.<br/>Lurkers.io не призывает нас к кооперации, но действия сообща будут эффективнее. Можете общаться через мини-чат и с помощью эмоджи. Баррикадируйтесь и отстреливайтесь, пока хватает патронов. Между волнами есть небольшой промежуток, чтобы отдохнуть и потратить ваши заработанные деньги на новое оружие. Зарабатывайте деньги убийством зомби и постарайтесь пройти игру до конца — это непросто.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WADS для движения</li>
                    <li>Shift для бега</li>
                    <li>B для открытия меню покупки</li>
                    <li>Буквы T — P для эмоджи</li>
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