<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Glor.io | WorldPlay</title>
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
                  <p>8.4</p>
                </div>
                <div class="play__name">
                  <p>Glor.io</p>
                </div>
                <a href="../io/glar.io.html" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/glar"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_glor.io.webp" alt="">
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестно</li>
                    <li><span class="pink">Издатель:</span> Неизвестно</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Стратегия, Песочница</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> глор ио, глорио, glore, glor io classic</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Glor.io — новая стратегия про добывание ресурсов и стройку поселения. Да, она очень похожа на игру Moomoo.io и, безусловно, напомнит Minecraft, но есть некоторые отличия. Основное из которых — это графика и помощники. Графика в Glor.io более детализированная и приятная. Помощники — это персонажи, которые помогают вам добывать ресурсы, защищаться и помогать с атаками врагов. В остальном сохранился знакомый геймплей.<br/>Играть в Glor.io несложно, нужно добывать ресурсы и строиться, чтобы усиливать свое положение в игре. ТОП исчисляется по количеству золота. Золото в свою очередь добывается постройкой Башен. Все описания строений приведены ниже.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/glor.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Ваша задача собирать ресурсы расположенные вокруг (деревья, каменные шахты и животные) и строить поселение для защиты. Чтобы добыть еду охотьтесь на животных (куриц, свиней, волков и медведей), также делайте грядки, они будут приносить постоянно еду без необходимости за кем-либо бегать. Кроме того, курицы периодически несутся, оставляя на карте яйца.<br/>В помощь вам доступны помощники: Защитники, Крестьяне, Гвардейцы и Садовники. Опасайтесь волков, медведей и соперников!<br/>В Glor.io положение в рейтинге определяется количество золотом, поэтому стройте Башни для улучшения своего рейтинга. Уничтожение врага дает четверть его ресурсов, включая золото.</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Перемещение: WASD или стрелки</li>
                    <li>Обзор: мышкой</li>
                    <li>Выбор постройки: кликом на картинку или быстрые клавиши 1-9</li>
                    <li>Атаковать / собирать: кликом</li>
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