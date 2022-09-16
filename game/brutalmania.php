<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Brutalmania.io | WorldPlay</title>
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
                  <p>Brutalmania.io</p>
                </div>
                <a href="../io/brutalmania" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/brutalmania"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_brutalmania.io.webp" alt="" />
                  <ul>
                    <li><span class="pink">Разработчик:</span> Night Steed S.C.</li>
                    <li><span class="pink">Издатель:</span> Night Steed S.C.</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Экшен</li>
                    <li><span class="pink">Платформы:</span> Браузер, Android</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> Brutalmaniaio, дубина ио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Brutalmania.io — это драка онлайн. Мы встречались с похожими механиками, но здесь такое безумство, рубилово и мясо, что просто слов нет!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/brutalmania.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Боевая задача в Brutalmania.io в том, чтобы доминировать на арене и быть лидером, пока вас не замесит кто-нибудь. За уничтожение других игроков вы получаете опыт, игровое золото и дополнительное здоровье. Под своим персонажем вы видите плашки-деления своего ХП и чем выше уровень, тем их больше.<br/>Brutalmania.io — это отменное месилово, к которому нужно взять дубину покрепче! За полученное золото вы можете купить себе в игровом магазине новые скины и оружие. Разное оружие наносит разный урон и перезарядку для нового удара. Brutalmania.io игра не для всех.<br/>Кроме грубой силы в Brutalmania.io есть место тактике. На правый клик включается бустер ускорения, который поможет вам догнать противника и нанести решающий удар, или наоборот, сбежать из особенно лютого замеса. Ускорение, как и ХП, восполняется во время покоя. Находите среди драки несколько секунд, чтобы восполнить ХП и быть готовым к новой драке!</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Персонаж движется за курсором</li>
                    <li>Клик для удара</li>
                    <li>Правый клик для ускорения</li>
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