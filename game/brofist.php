<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Brofist.io | WorldPlay</title>
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
                  <p>8.0</p>
                </div>
                <div class="play__name">
                  <p>Brofist.io</p>
                </div>
                <a href="http://brofist.io" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
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
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_brofist.io.webp" alt="">
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестно</li>
                    <li><span class="pink">Издатель:</span> Неизвестно</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Головоломка</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> Brofistio, брофистио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Brofist.io — это приветствие друг друга кулаками. Бро = бро, а фист = кулак. А Brofist.io  — это игра, где без братана ни шагу. Игре точно можно дать 10 из 10 за оригинальность, интересные задания и разумную сложность.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/brofist.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Управляется наш персонаж стрелками. Задача — пройти головоломку до конца. По ходу действия вы будете проходить чекпоинты, отмеченные красным флажком. Чтобы вернуться к предыдущему чекпоинту, нужно нажать Ctrl.<br/>Игровой процесс построен на взаимодействии с другими игроками. В одиночку игру не пройти, нужно помогать друг другу. Чтобы договариваться и тимиться, можно использовать чат — просто начните набирать текст, и он появится у вас над головой. При нажатии Enter текст стирается и можно набирать новый.</p>
                </div>
                <div class="play__info bpink">
                  <p>Режимы</p>
                </div>
                <div class="play__text">
                  <p>В Brofist.io два игровых режима: головоломка "2 Player Adventure" и Прятки "Hide and Seek". В Прятках вы появляетесь в комнате ожидания, и через некоторое время те, кому автоматически назначится роль прятаться, окажутся на карте и пойдут прятаться. Тот, кто будет их искать, подождёт еще некоторое время в комнате, а потом тоже окажется на карте и ему нужно будет переловить всех прятунов. Двигаться ищущий будет раза в три быстрее, так что от него убежать сложно, но можно. Режим получится супер забавный и доставляет кучу эмоций!</p>
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