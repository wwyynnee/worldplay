<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Orbity.io | WorldPlay</title>
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
                  <p>6.4</p>
                </div>
                <div class="play__name">
                  <p>Orbity.io</p>
                </div>
                <a href="../io/orbity" target="_blank">
                  <?php
                    include "../src/settings/game/play_grey.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/orbity"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_orbity.io.webp" alt="">
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Экшен, Ролевые</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> Orbityio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Orbity.io — это игра про космические старты. Необходимо будет поднять ракету с Земли и корректировать орбиту, чтобы она оставалась на лету, не врезалась в космический хлам и других игроков.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/orbity.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Orbity.io предлагает два варианта игры. Первый для игры в гостевом режиме — просто поднимаешься над Землёй и наматываешь круги, корректируя курс, чтобы выбиться в лидеры. Лидер отмечается синим кругом. Второй вариант игры для тех, кто зарегистрировался. Здесь вы будете поочередно выполнять разные миссии, зарабатывать очки для апгрейда корабля... а в остальном то же самое — аккуратно корректировать курс, чтобы ни во что не вписаться.<br/>Периодически в Orbity.io всплывают сообщения о наградах. Например, одна из наград даётся за уничтожение лидера. Это значит, вам нужно своей ракетой сбить ракету в синем круге. Сделать это очень просто с самого старта, когда лидер будет пролетать мимо.<br/>Поначалу управление будет казаться нереальным, но скоро вы поймаете аккуратную манеру управления, при которой траектория вашего движения будет кольцеобразна. Помните, что если зажать Shift в то время, когда вы поддаёте газу, то вы будете прибавлять меньше к силе движения и точнее сможете рассчитать траекторию движения.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>W или левый клик для взлёта/ускорения</li>
                    <li>Пробел или правый клик чтобы развернуть корабль на 180 градусов (доступно только после апгрейда)</li>
                    <li>A и D чтобы прибавлять угол к вашей траектории полёта</li>
                    <li>Ctrl для изменения вида камеры обзора</li>
                    <li>Зажать Shift для того, чтобы прибавлять к траектории понемногу</li>
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