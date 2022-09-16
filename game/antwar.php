<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть AntWar.io | WorldPlay</title>
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
                  <p>8.1</p>
                </div>
                <div class="play__name">
                  <p>AntWar.io</p>
                </div>
                <a href="../io/antwar" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/antwar"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_antwar.io.webp" alt="" />
                  <ul>
                    <li><span class="pink">Разработчик:</span> Anarchy Enterprises</li>
                    <li><span class="pink">Издатель:</span> Anarchy Enterprises</li>
                    <li><span class="pink">Дата выпуска:</span> 10 октября 2003 г.</li>
                    <li><span class="pink">Жанры:</span> Экшен, Стратегия</li>
                    <li><span class="pink">Платформы:</span> Браузер, Android, Windows, iOS, Linux</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> антвор ио, война муравьев ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>AntWar.io — это новая кооперативная io-игра. Кооперативная значит, что вы играете не сам по себе, а в команде, и успех команды зависит от того, насколько слаженно вы работаете вместе. Создайте новую колонию или присоединитесь к существующей и помогите своей команде выиграть!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/antwar.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Основная задача в AntWar.io построить колонию, развить ее и сразить другие колонии. Для поражения колонии соперника достаточно уничтожить их Королеву. Окончательная победа в AntWar.io наступает, когда вы уничтожите все колонии = всех королев.<br/>В самом начале игры AntWar io у вас есть два варианта: начать собственную колонию или присоединиться к существующей. Если вы решили основать свою колонию, вам нужно подобрать хорошее место для нее. Площадка должна находиться недалеко от еды, во влажном, темном месте. Чтобы определить показатели локации, смотрите не подсказки. Когда место найдено двойной клик и вот ваша колония начала свою жизнь.<br/>Следующий шаг в AntWar.io заключается в развитии колонии и ее поддержании. Это командная игра поэтому, во-первых, взаимодействуйте и помогайте товарищам по команде, а во-вторых, не забывайте про свою Королеву. Если она голодна, над ней появится белый значок. Нужно принести и положить еду (зеленые горошины) на нее. Личинки необходимо откладывать во влажные и темные места, еду хранить в сухих и светлых. Чтобы расширить колонию, копайте землю — ее необходимо будет выносить за пределы колонии.<br/>И еще раз напомним, успех в AntWar.io заключается в слаженной командной работе. Если вы внимательно и помогаете своим товарищам, значит у вас есть все шансы на победу!</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Клик для перемещения</li>
                    <li>Двойной клик для действия (взять еду, основать колониую и пр.)</li>
                    <li>Правый клик или кнопка Вниз для открытия основного меню</li>
                    <li>Enter для чата</li>
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