<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Limax.io | WorldPlay</title>
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
                  <p>7.8</p>
                </div>
                <div class="play__name">
                  <p>Limax.io</p>
                </div>
                <a href="../io/limax" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/limax"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_limax.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Экшен</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> лимакс ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Limax.io — это оригинальное слово в играх на набор массы. Можно смело ставить её в ряд с такими крутышками, как скоростной Spinz.io или Agar.io. В зависимости от того, какую вы выберите тему, действие игры будет происходить в космосе, на Хеллоуин вечеринке или на фабрике кондитерских изделий. Как плюсы Limax.io необходимо отметить множество бесплатно доступных скинов, игровых модов и боевую особенность игры.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/limax.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Победа в Limax.io, а также членство на доске почёта в разных режимах разные. Но во всех режимах придётся набирать массу, собирая светящиеся точки и поглощая других игроков, и тратить массу для ускорения.<br/>Поражение в Limax.io бывает двух типов: первое — вы врезаетесь в след от чужого форсажа. Второе, если вы идёте не на форсаже, то вас может поглотить другой игрок просто тараном сзади. При таране лоб в лоб погибают оба, это третье.<br/>Очевидная тактика в игре — делать крутые развороты перед другим игроком, чтобы противник врезался в ваш след. Самая маленькая сфера может таким образом уничтожить Топ игрока. Но все, разумеется, не так просто, и чем больше у вас массы, там лучше.</p>
                </div>
                <div class="play__info">
                  <p>Режимы</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li><b>Mаss</b> — классический режим, где задача наша - набрать больше массы. Каждый сам за себя</li>
                    <li><b>Kill</b> — Здесь выигрывает тот, кто больше убил других игроков</li>
                    <li><b>Team</b> — Игроки делятся на две команды и бьются друг с другом</li>
                    <li><b>Race</b> — Изюминка в Limax.io. Выигрывает тот, кто наездит больше всего кругов против часовой стрелки. Внутри “родильной” зоны форсаж не применяется. Чем быстрее едешь, тем быстрее расходуется масса</li>
                    <li><b>1 vs 1</b> — Вы с другим игроком оказываетесь в небольшом пространстве, где бьетесь до победного</li>
                    <li><b>Rush</b> — В этом режиме есть таймер, и когда он истекает, карта завершает существование. Остаётся успеть в последнюю секунду заскриншотить своё первое место, причём вырваться на него можно буквально за двадцать секунд</li>
                    <li><b>Zomb</b> — Зомби атакуют со всех сторон и по многу, но точки массы из них не выпадают</li>
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