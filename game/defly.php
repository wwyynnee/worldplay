<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Defly.io | WorldPlay</title>
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
                  <p>Defly.io</p>
                </div>
                <a href="../io/defly" target="_blank">
                  <?php
                    include "../src/settings/game/play_grey.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/defly"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_defly.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Экшен, Стратегия</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> полеты ио, Deflyio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Defly.io выводит жанр игр с захватом территории на новый уровень! Оригинальная игровая механика, прокачка летательного аппарата и плотная борьба с конкурентами — вот что ожидает севших за штурвал в Defly.io.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/defly.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Боевая задача в Defly.io — захватить если не всю территорию игры, то как можно большую её часть. Если вы потерпите крушение, то вам предоставят полный отчёт о том, сколько территории вы захватили в процентном соотношении и сколько очков удалось набрать. Гибель ожидает вас в двух случаях: вас взорвут или вы сами врежетесь в территорию соперника.<br/>Чтобы захватить территорию, нужно расставлять контрольные точки и протягивать стены между уже поставленными точками. Будьте внимательны: слишком далеко линию протянуть не получится. Через некоторое расстояние от старта ваша линия истончится и прервётся. Пока этого не случилось, у вас есть возможность поставить новую точку отсчёта. Чем больше точек вы поставите, тем прочнее будет ваша сеть, и вот почему. Летательные аппараты в Defly.io могут стрелять. Пули, попадая в точки, разрушают их. Из-за разрывов линий рвётся ваша паутина.<br/>Тем не менее самый надёжный способ разорвать паутину соперника — уничтожить его летательное средство. Иногда для этого приходится попотеть. Дело в том, что ваши пули рикошетят от линий — стен. А вот соперник может стрелять сквозь стены, фактически прячась за ними. И чтобы достать врага из укрытия, приходится ломать его паутину. При этом никто не запрещает вам строить одновременно свою защиту прямо во время боя!<br/>Итак, мы получаем очки в Defly.io двумя способами: строя свою территорию и разрушая структуру соперника. Полученные очки продвигают нас в Топ, а еще повышают наш вертолёт в уровне. Повышение в уровне даёт очки прокачки, за которые можно улучшить свой летательный аппарат.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD чтобы двигаться</li>
                    <li>Клик для стрельбы</li>
                    <li>Правый клик чтобы поставить контрольную точку</li>
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