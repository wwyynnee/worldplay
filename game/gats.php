<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Gats.io | WorldPlay</title>
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
                  <p>8.2</p>
                </div>
                <div class="play__name">
                  <p>Gats.io</p>
                </div>
                <a href="../io/gats" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/gats"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_gats.io.webp" alt="">
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестно</li>
                    <li><span class="pink">Издатель:</span> Неизвестно</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Стратегия, Шутер</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> Gatsio, Gats com</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Gats.io — это расширенная версия нашумевшей Battl.io. Здесь карта существенно сужена, между блоков сложно протискиваться, и доступно не два апгрейда, а три. Получилась игра очень шустрая и с супер плотным взаимодействием между игроками.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/gats.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Боевая задача в Gats.io — набить как можно больше фрагов. При этом после первого убийства вам дают один уровень и возможность выбрать себе пассивный навык. После еще нескольких убийств вы сможете прокачать активный навык: кинуть нож, гранату и другие. Еще после нескольких убийств вы можете выбрать второй пассивный навык. Всё это поможет вам скрываться, внезапно атаковать и быть сильнее и в целом.<br/>В Gats.io вы можете выбрать одно из шести оружий; утяжелиться бронёй или быть налегке. В зависимости от того, какое вы оружие выбрали, вам подойдёт тот или иной навык. Навыки все хорошие и полезные, но сочетаемость оружия + навыки каждый определяет для себя сам. В этом ваша стратегия ведения боёв Gats.io.</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD чтобы двигаться</li>
                    <li>Стрелять на клик</li>
                    <li>Пробел для использования навыка</li>
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