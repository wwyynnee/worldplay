<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Evowars.io | WorldPlay</title>
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
                  <p>7.3</p>
                </div>
                <div class="play__name">
                  <p>Evowars.io</p>
                </div>
                <a href="../io/evowars" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/evowars"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_evowars.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Night Steed S.C.</li>
                    <li><span class="white">Издатель:</span> Night Steed S.C.</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Экшен, Симулятор</li>
                    <li><span class="white">Платформы:</span> Браузер, Android, Windows</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> эволюция войны</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Evowars.io предлагает нам поиграть в io-игру в классическом стиле. Это арена, где вам предстоит помериться силой с другими игроками и стать самым крутым и сильным!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/evowars.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Основная задача в Evowars.io это эволюционировать до самого мощного уровня и затем заработать как можно больше очков. Для того чтобы продвигаться по уровням и становиться мощнее, вам нужно собирать цветные шарики, которые щедро разбросаны по полю и убивать других игроков. Чем более сильного игрока вы убьете, тем больше опыта вам достанется.<br/>Начинаете вы в Evowars.io самым простым чуваком, но с каждым уровнем ваш внешний вид будет меняться на все более грозный, ваш объем будет расти и оружие так же увеличится. На максимальных уровнях вы будете бить по действительно огромной территории! Но есть один нюанс.<br/>Несмотря на уровень, ваше здоровье в Evowars.io всегда равно единице. Это значит, что удар новичка способен убить самого прокачанного воина. Чем выше ваш уровень, тем на более длинной дистанции вы можете ударить соперника. Но в арсенале всех игроков есть бустер ускорения, с которым можно быстро приблизиться к противнику и нанести удар.<br/>Войдите в меню "Evolutions". Тут вы найдете улучшения, которые с вами произойдут по достижении уровней. Некоторые улучшения требуют разблокировки, типа сделать репост. Можете кликнуть на них, а потом закрыть открывающуюся вкладку. И улучшение будет доступно!</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text spacebetween">
                  <ul>
                    <li>Воин движется за мышью</li>
                    <li>Клик чтобы ударить</li>
                    <li>Правый клик для ускорения</li>
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