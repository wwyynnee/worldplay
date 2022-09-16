<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Yorg.io | WorldPlay</title>
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
                  <p>8.8</p>
                </div>
                <div class="play__name">
                  <p>Yorg.io</p>
                </div>
                <a href="../io/yorg" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/yorg"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_yorg.io.webp" alt="" />
                  <ul>
                    <li><span class="pink">Разработчик:</span> Tobias Springer</li>
                    <li><span class="pink">Издатель:</span> tobspr Games</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Экшен</li>
                    <li><span class="pink">Платформы:</span> Браузер, Windows</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Русский</li>
                    <li><span class="pink">Альтернативные названия:</span> уорг ио, йоргио, ёрг ио, yorgio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Yorg.io — это игра в одиночном режиме на выживание. Вся карта — сплошь ресурсная база, на которой нам предстоит развиваться и противостоять атакам зомби!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/yorg.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Задача в Yorg.io — выживать как можно дольше дней. После того как вы поставите Базу, вам нужно будет её охранять. Если База разрушена, то вы проиграли и можете только прислать друзьям скриншот с количеством дней, которые вам удалось продержаться.<br/>Сеть — вот ключевое слово для описания процессов, которые происходят в Yorg.io. Вам необходимо добывать ресурсы, соединять их в сеть с заводами, заводы соединять с производством боеприпасов, а те в свою очередь подключать к защитным башням. Таким образом вы обеспечите свои башни боеприпасами и сможете противостоять атакам зомби. Следуя пошаговым рекомендациям игры, вы быстро поймете, как, что и куда строить.<br/>Для продвижения строительства и открытия новых апгрейдом зданий, вам нужно делать апгрейды Базы. Максимальное количество апгрейдом — 7. Когда ваша База будет максимального уровня, вы сможете любое строение прокачать тоже до седьмого уровня. Особенно важно прокачивать в Yorg io ресурсные шахты, чтобы они добывали больше ресурсов. Причем к одному и тому же месторождению вы можете подключить несколько добывающих шахт!<br/>В фазу дня вы отстраиваетесь, а в фазу ночи вас атакуют зомби Yorg.io. Они стремятся к Базе, так что вы можете высмотреть закономерность в их атаках и строить больше защиты там, где это необходимо. Бывает так, что в каких-то местах можно совсем не беспокоиться об обороне и чувствовать себя великолепно. После ночной атаки ХП ваших зданий восстановятся до максимума абсолютно бесплатно.</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>WASD чтобы перемещать обзор</li>
                    <li>Горячая клавиша для постройки/апгрейда здания написана на иконке каждого строения</li>
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