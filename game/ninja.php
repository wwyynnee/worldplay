<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Ninja.io | WorldPlay</title>
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
                  <p>Ninja.io</p>
                </div>
                <a href="../io/ninja" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/ninja"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_ninja.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Экшен, Шутер</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> Ninjaio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Продвинутая боевая io-игра Ninja.io порадует всех любителей хорошей стрельбы. Нужно будет не только расстреливать друг друга, но и использовать боевые навыки ниндзя.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/ninja.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text column">
                  <p>Основная задача в Ninja.io — набить как можно больше фрагов за раунд, чтобы стать победителем. В конце раунда будет объявлено, кто же стал королём карты, после чего начнётся новый раунд. Но чтобы добиться желанной цели, нужно научиться пользоваться всем арсеналом трюков, на которые способен ниндзя!<br/>Кроме режима каждый сам за себя в игре есть режим "Захват флага". Здесь за время раунда нужно принести как можно больше флагов соперника на свою базу.<br/>Игра начинается с того, что вам нужно выбрать оружие: основное и второстепенное. Кроме этого, у всех воинов есть в запасе по три сюрикена, которые выпускаются на кнопку E и которые восполняются только после нового рождения. Эти сюрикены наносят серьезный урон сопернику, а после того, как упадут на землю еще долгое время опасны даже для того, кто их запустил.<br/>Ninja.io — это не только продвинутая графика, но и физика. Здесь можно приседать, отчего точность ваших выстрелов возрастёт. Еще можно лечь. Стрельба лёжа очень точная, а еще это можно использовать как маскировку под труп. Конечно, каждый ниндзя может летать, но помните, что во время полёта вы в наиболее уязвимом положении, к тому же ярко светитесь, привлекая внимание противников.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text column">
                  <ul>
                    <li>WASD чтобы двигаться</li>
                    <li>S чтобы присесть</li>
                    <li>E — запустить сюрикен</li>
                    <li>Q чтобы сменить оружие</li>
                    <li>W+S - Выкинуть флаг</li>
                    <li>Клик для стрельбы</li>
                    <li>Правый клик для полёта</li>
                    <li>H — Показать меню</li>
                    <li>G — показать выбор оружия</li>
                    <li>V — Показать зачет раунда</li>
                    <li>T — Чат</li>
                  </ul>
                  <p>Кроме этого в игре есть список команд:</p>
                  <ul>
                    <li>/spec — стать зрителем</li>
                    <li>/join — вступить в игру</li>
                    <li>/kill — убить себя</li>
                    <li>/clients — показать список клиентов</li>
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