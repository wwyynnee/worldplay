<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Narwhale.io | WorldPlay</title>
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
                  <p>Narwhale.io</p>
                </div>
                <a href="http://narwhale.io" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
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
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_narwhale.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Narwhale.io, Xinya Group</li>
                    <li><span class="white">Издатель:</span> Narwhale.io, Xinya Group</li>
                    <li><span class="white">Дата выпуска:</span> 25 февраля 2019 г.</li>
                    <li><span class="white">Жанры:</span> Ролевые</li>
                    <li><span class="white">Платформы:</span> Браузер, Android, Windows</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> киты ио, карвали ио, игра нарвал ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Narwhale.io — элементарная по правилам игра, азартная и вот именно то, что надо для пары минут релакса и перезагрузки.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/narwhale.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text column">
                  <p>Набравшему больше всего очков в Narwhale.io одевается корона на голову. Теперь ее осталось главное не потерять.<br/>Поражение наступает, когда хоть малейший кусочек вашего хвоста оторван другим игроком.<br/>В режиме Narwhale Ball побеждает команда, забросившая в ворота соперника больше мячей.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <p>Питомец Narwhale.io следует за курсором мыши. Обратите внимание на белую точку слева от его рога.<br/>Левая кнопка мыши это выпад вперёд.<br/>Правая кнопка мыши служит для съеживания и ухода от возможной атаки.<br/>Как только вы проделали любое из этих действий, белая точка стала чёрной. Это индикатор заряда; подождите, пока он снова не станет белым и тогда снова можно сделать действие.</p>
                </div>
                <div class="play__info">
                  <p>Прокачка</p>
                </div>
                <div class="play__text">
                  <p>Как таковой прокачки нет, но чем больше вы нарубите чужих хвостов, тем быстрее будете передвигаться, и, главное, у вас появится один-два дополнительных действия.</p>
                </div>
                <div class="play__info">
                  <p>Режимы</p>
                </div>
                <div class="play__text">
                  <p>Обратите внимание, что в Narwhale.io очень много серверов; есть битком набитые, есть такие, где плавать посвободней.<br/>Режима два: FFA и Игра в мяч (по командам).</p>
                </div>
                <div class="play__info">
                  <p>Рекомендации</p>
                </div>
                <div class="play__text">
                  <p>Narwhale.io довольно популярен в Америке, на американских серверах даже ночью можно найти, с кем побатлиться.<br/>Аккуратно выбирайте угол атаки. Ваш питомец разрывает соперника буквально в первую секунду рывка. Дальше даже если врежется рогом в тело, то урона не нанесет.<br/>Чтобы разблокировать новые скины, достаточно кликнуть на окошко "поделиться через Твиттер/ФБ". Делиться необязательно, но после такого клика можно будет изменить внешний вид питомца..</p>
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