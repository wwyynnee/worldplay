<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Voxiom.io | WorldPlay</title>
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
                  <p>8.7</p>
                </div>
                <div class="play__name">
                  <p>Voxiom.io</p>
                </div>
                <a href="../io/voxiom" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/voxiom"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_voxiom.io.webp" alt="" />
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестно</li>
                    <li><span class="pink">Издатель:</span> Неизвестно</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Песочница</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> воксиом ои, воксиомио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Если скрестить Майнкрафт и Pubg, то получится Voxiom.io. Игра очень легкая и благодаря этому можно рубиться прямо в браузере, ничего не скачивая и не устанавливая.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/voxiom.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Спустя некоторое время после старта Voxiom.io мы десантируемся на большой остров. В руках у нас лопата, а в глубинах острова зарыто множество оружия. Время копать! Разрушенную породу можно использовать для возведения стен и укрытий. Не теряйте ни секунды времени — ищите до тех пор, пока в руках у вас не появится мощная пушка.<br/>В левом верхнем углу мы видим мини-карту, на которой отмечено направление нашего движения и внутренний круг безопасности. Мы можем заметить, как вокруг карты начинает стягиваться розовый туман. В нем можно запросто погибнуть! Смотрите на динамику его распространения, идите в центр безопасной зоны и отстраивайте там форт — встречать незваных гостей по Voxiom.io, которые так же придут спасаться бегством от смертельной опасности...</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD для движения</li>
                    <li>Клик для стрельбы/постройки</li>
                    <li>Q чтобы сменить оружия</li>
                    <li>Shift для бега</li>
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