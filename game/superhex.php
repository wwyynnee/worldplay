<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Superhex.io | WorldPlay</title>
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
                  <p>7.6</p>
                </div>
                <div class="play__name">
                  <p>Superhex.io</p>
                </div>
                <a href="../io/superhex" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/superhex"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_superhex.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Tekko Studios</li>
                    <li><span class="white">Издатель:</span> Tekko Studios</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Экшен</li>
                    <li><span class="white">Платформы:</span> Браузер, Android</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> superhexio, super hex io, гранио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Superhex.io — взгляните на эту игру, это второе поколение игры Splix.io. Основная задача осталась такой же — захватить как можно больше территории. Принцип тоже не изменился — эту территорию нужно добавить, "прирезав" к своей. Основные отличия Superhex.io от предшественника: более веселые цвета (кого не вводила в уныние разноцветная гамма Splix.io?), поле расчерчено на шестиугольники, а не квадраты, за счет чего стало возможным двигаться в произвольном направлении.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/superhex.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text column">
                  <p>Очки даются за площадь добавленных владений. Опасаться стоит столкновений как собственным хвостом, так и с противниками. Противник может целенаправленно пересечь ваш хвост, выкинув таким образом вас из игры.<br/>В остальном игре Superhex.io — это старый и привычный геймплей в яркой обертке и нелинейным движением. Уверены, что игра будет оценена по достоинству!</p>
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