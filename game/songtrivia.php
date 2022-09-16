<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть SongTrivia.io | WorldPlay</title>
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
                  <p>7.9</p>
                </div>
                <div class="play__name">
                  <p>SongTrivia.io</p>
                </div>
                <a href="../io/songtrivia" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/songtrivia"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_songtrivia.io.webp" alt="" />
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестно</li>
                    <li><span class="pink">Издатель:</span> Неизвестно</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Головоломка</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Русский</li>
                    <li><span class="pink">Альтернативные названия:</span> сонгтривия ио, угадай мелодию ио, угадай мелодию русские онлайн</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>SongTrivia.io — это многопользовательская музыкальная io-игра. Почувствуй себя так, словно играешь на популярном телешоу. Угадывай мелодии и получай за это призовые монеты!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/songtrivia.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Спортивная цель в SongTrivia в том, чтобы за десять секунд выбрать правильный вариант звучащей мелодии. Здесь есть два режима: угадывать песню или автора. Внутри каждого есть три подраздела с жанрами. Для выбора жанров нужно тратить призовые монетки, которые вы получаете за победы в турнирах. Если монеток нет, то выбирайте бесплатный, случайный вариант.<br/>Чтобы было веселее играть в SongTrivia.io, вы можете выбрать себе бесплатно любую аватарку из предложенных. Для подписанных на аккаунты игры в соцсетях предусмотрены приятные бонусики. Но и без них вы можете весело и азартно поиграть — угадывать знаменитые мелодии и хорошенько поностальгировать по ушедшим хитам.</p>
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