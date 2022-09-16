<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Wormax.io | WorldPlay</title>
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
                <div class="play__value bgreen" title="Оценка">
                  <p>7.6</p>
                </div>
                <div class="play__name">
                  <p>Wormax.io</p>
                </div>
                <a href="http://wormax.io" target="_blank">
                  <?php
                    include "../src/settings/game/play_green.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <p>К сожалению, данная игра не позволяет установить соединение</p>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_wormax.io.webp" alt="" />
                  <ul>
                    <li><span class="green">Разработчик:</span> Elyland</li>
                    <li><span class="green">Издатель:</span> Elyland, CASUAL AZUR GAMES</li>
                    <li><span class="green">Дата выпуска:</span> 2010 год</li>
                    <li><span class="green">Жанры:</span> Экшен, Симулятор</li>
                    <li><span class="green">Платформы:</span> Браузер, Android, Windows</li>
                    <li><span class="green">Режим игры:</span> Сетевая игра</li>
                    <li><span class="green">Язык интерфейса:</span> Русский</li>
                    <li><span class="green">Альтернативные названия:</span> вормиксио, вормаксио, формакс, wormaxio, вормикс ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bgreen">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Wormax.io находится в приятной компании с такими змейкоподобными играми, как планетарный Limax.io и забавный Wormate.io. Играть в Wormax.io одно удовольствие. Шипастые змейки сильно радуют глаз и выглядит это все как битва древних гигантов. В игре есть возможность зарегистрироваться и потихоньку качать своего червяка, подключая ему бустеры, которые дают небольшие преимущества. Но, как и в других подобных играх, в Wormax.io побеждают умением и стальной выдержкой.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/wormax.io.webp" alt="" />
                </div>
                <div class="play__info bgreen">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Задача в Wormax.io — набрать больше всех массы. Для этого будем собирать цветные точки массы, тут и там лежащие на карте. Когда червь врезается во что-нибудь головой, он тоже погибает и его тело распадается на накопленную массу. Следовательно, эту массу можно поглотить, и в этом заключается борьба червей в Wormax.io — подрезать другого так, чтобы он ударил об ваше тело свою голову.<br/>Для тактических маневров в Wormax.io доступны ускорение, полная остановка червя и "Призрак", включив которого вы можете пройти сквозь другого червя. Каждое из этих умений требует расхода массы. Грамотное использование этих умений — залог хорошей и долгой жизни на сцене Wormax.io!<br/>Разнообразие тактик и стилей достигается в Wormax.io благодаря системе прокачки червя и бустерам; об этом ниже по порядку.</p>  
                </div>
                <div class="play__info bgreen">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Движется змейка за курсором</li>
                    <li>Клик мыши или Q — ускориться</li>
                    <li>W — остановиться. Доступен при наборе массы 100 и выше</li>
                    <li>E — включить умение "Призрак" для прохода сквозь других игроков. Доступен при массе 500 и выше</li>
                  </ul>
                </div>
                <div class="play__info bgreen">
                  <p>Прокачка</p>
                </div>
                <div class="play__text">
                  <p>В отличие от других змеек в Wormax.io есть прокачка червя на вашем аккаунте. Для этого вам нужно зарегистрироваться в игре. Когда зарегистрировались, вы получаете Эссенцию в размере 1000 к 1 после смерти и 3000 к 1 после первой смерти. За эту эссенцию вы вставляете в слоты вашего червя 7 вспомогательных умений.</p>
                </div>
                <div class="play__info bgreen">
                  <p>Бустеры</p>
                </div>
                <div class="play__text">
                  <p>В качестве временно усиливающих ваши способности бонусов в Wormax.io предусмотрены бустеры. Каждый их них обладает своей уникальной способностью.</p>
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