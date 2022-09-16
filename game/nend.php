<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Nend.io | WorldPlay</title>
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
                  <p>7.5</p>
                </div>
                <div class="play__name">
                  <p>Nend.io</p>
                </div>
                <a href="../io/nend" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/nend"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_nend.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Симулятор</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> Нендио, ненд ио, Nend io, Nendio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Nend.io — это игра на выживание. Фактически, симулятор социальной жизни людей. Тусуйся, ешь, спи, дерись за бабло и потихоньку вырастай и становись богатым старым пердуном в стильном костюмчике.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/nend.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text column">
                  <p>Nend.io расшифровывается как "Never ENDing game — Бесконечная игра". Основная задача здесь — выживать. У вас есть несколько шкал-показателей, которые постепенно снижаются и вам их нужно восполнять. Еда, сон, хождение в туалет, эмоциональный фон, опрятная одежда — всё это нужно добывать, и за эти вещи придётся платить. Постепенно ваш персонаж будет взрослеть, прокачиваться и становиться богаче. Вам станут доступны не только новые навыки, но также вы сможете купить новые здания!<br/>Как и во всех подобных играх, в Nend.io если какая-либо из шкал подошла к концу, ваш персонаж попадает в трудности. От нехватки еды ваше ХП постепенно будет уменьшаться до самой смерти. Сон — важнейшая вещь! Как только шкала сна подходит к концу, вы заваливаетесь на несколько секунд поспать автоматически. За это время вас вполне могут забить до смерти другие игроки и забрать все ваши скопленные деньжата себе!<br/>С едой здесь тоже интересно. Покупайте еду в ларьках, автоматах. Некоторые продукты могут иметь временный эффект. Так, от кофе вы не только поправите шкалу еды, но и станете быстрее передвигаться. А еще можно поесть в мусорном баке, но эмоциональный уровень от этого понизится.<br/>Кто сказал, что деньги на дороге не валяются? В Nend.io валяются и еще как! Бегайте по карте, собирайте $. Но всегда помните, что самый верный способ добыть денег — отнять их у другого игрока! Поэтому будьте начеку: здесь все враги, кроме тех людей, с кем вы решили тимиться.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD для движения</li>
                    <li>Клик чтобы бить</li>
                    <li>E чтобы взаимодействовать</li>
                    <li>Enter для чата</li>
                    <li>M чтобы поглядеть карту</li>
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