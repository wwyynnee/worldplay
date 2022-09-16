<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Dinoman.io | WorldPlay</title>
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
                  <p>Dinoman.io</p>
                </div>
                <a href="../io/dinoman" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/dinoman"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_dinoman.io.webp" alt="">
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Экшен</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> диномэн ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Dinoman — это io-игра онлайн. Эта версия пакмана порадует всех любителей io-игр!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/dinoman.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Игровая цель в Dinoman.io в том, чтобы набрать как можно больше очков. Если вы играете за пакманов, то очки будете получать за поедание горошин. Белые горошины приносят очки, а красные делают приведения уязвимыми. Неважно, кто именно из пакманов взял красную горошину — все приведения на карте на несколько секунд будут для вас уязвимы!<br/>Если же Dinoman.io сделал вас приведением, то тут вам нужно отлавливать и уничтожать пакманов. В отличие от других версий этой игры, здесь ваша скорость не сильно выше скорости жертвы. Необходимо реально четко преследовать пакмана, чтобы его слопать!</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text spacebetween">
                  <ul>
                    <li>Стрелочки чтобы управлять героем</li>
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