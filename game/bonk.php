<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Bonk.io | WorldPlay</title>
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
                  <p>Bonk.io</p>
                </div>
                <a href="../io/bonk" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/bonk"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_bonk.io.webp" alt="">
                  <ul>
                    <li><span class="pink">Разработчик:</span> Неизвестно</li>
                    <li><span class="pink">Издатель:</span> Неизвестно</li>
                    <li><span class="pink">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="pink">Жанры:</span> Головоломка</li>
                    <li><span class="pink">Платформы:</span> Браузер</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Английский</li>
                    <li><span class="pink">Альтернативные названия:</span> bonkio</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Bonk.io — это игра с прокачанной физикой Ньютона. Законы тяготения, взаимодействия масс, гравитации — все это здесь. Раунды — головоломки состоят из разваливающихся конструкций и задача — удержать баланс и остаться последним выжившим на карте.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/bonk.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Условия победы и поражения</p>
                </div>
                <div class="play__text">
                  <p>Победа засчитывается последнему выжившему. То есть даже если вы всей компанией упали, то последний упавший победил и ему начислялись призовые ХП.<br/>Поражение настигает вас по-разному, в зависимости от карты.</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <p>Управление в Bonk.io на стрелках + <b>X</b> (икс) чтобы утяжелиться.<br/>Чтобы утяжелиться, нужно, чтобы была включена английская раскладка клавиатуры. Нажав <b>X</b> ваш персонаж приобретет белый контур. При столкновении более тяжёлый останется на месте, а более лёгкий игрок улетит в сторону.</p>
                </div>
                <div class="play__info bpink">
                  <p>Прокачка</p>
                </div>
                <div class="play__text">
                  <p>За победу в раундах вам начисляется ХП. Если вы зарегистрируетесь (просто введете имя и пароль), то ваш счёт будет запомнен при новой загрузке браузера. Если нет, то войдя новый раз вы начнете сначала.<br/>ХП в Bonk.io нужны исключительно для разрисовки своего героя. Зайдя в меню, <b>CUSTOMISE</b> вы сможете создать персональный стиль. Чем выше ваш уровень, тем больше наклеек будет доступно.<br/>На скорость, тяжесть и прочее управление уровень не влияет.</p>
                </div>
                <div class="play__info bpink">
                  <p>Режимы</p>
                </div>
                <div class="play__text">
                  <p><b>Quick Play</b> — каждый сам за себя. В игру набирается 4 игрока и случайным образом меняются раунды.<br/><b>Custom Game</b> — есть создатель комнаты, в которой он выбирает раунды, FFA или по командам, максимальное количество игроков. Можно создавать самому. Если хотите играть только с друзьями, то ставите пароль и никто лишний не зайдет.</p>
                </div>
                <div class="play__info bpink">
                  <p>Рекомендации</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Остерегайтесь чёрных поверхностей, они всегда смертельны.</li>
                    <li>Не прыгайте очень высоко — где-то там, наверху, есть границы карты, вылет за которые - смерть.</li>
                    <li>Чтобы оттолкнуться от земли, нужно падать с зажатой стрелкой вниз.</li>
                    <li>Утяжелятся при этом не стоит. Утяжеление лишает вас маневренности на стрелках.</li>
                    <li>Чаще побеждает тот, кто не ввязывается в драку =)</li>
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