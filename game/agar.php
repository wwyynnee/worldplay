<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Agar.io | WorldPlay</title>
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
                  <p>7.8</p>
                </div>
                <div class="play__name">
                  <p>Agar.io</p>
                </div>
                <a href="https://agar.io" target="_blank">
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
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_agar.io.webp" alt="">
                  <ul>
                    <li><span class="green">Разработчик:</span> Матеус Валадарес</li>
                    <li><span class="green">Издатель:</span> Miniclip</li>
                    <li><span class="green">Дата выпуска:</span> апрель 2015</li>
                    <li><span class="green">Жанры:</span> Экшен</li>
                    <li><span class="green">Платформы:</span> Браузер, Android, Windows</li>
                    <li><span class="green">Режим игры:</span> Сетевая игра</li>
                    <li><span class="green">Язык интерфейса:</span> Английский</li>
                    <li><span class="green">Альтернативные названия:</span> агарио, агар ио, агар ио онлайн</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bgreen">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Agar.io стоит в пионерах io-игр как таковых. Мы начинаем с маленькой бактерии, а затем растём, поглощая точки еды и других игроков. В ряду мамонтов io-игр, Agar.io стоит плечом к плечу с танчиками Diep.io и змейкой Slither.io. Agar.io стала настолько успешной, что легла в основу десятков подобных игр, не считая клонов. Элементарность игрового процесса, плотное игровое взаимодействие, азарт — все это есть и побуждает играть еще и еще в стремлении стать самой большой бактерией.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/agar.io.webp" alt="" />
                </div>
                <div class="play__info bgreen">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Основная задача в Agar.io — вырастить самую большую бактерию и удерживаться в Топе. Чтобы расти, нужно кушать цветные точки массы, разбросанные по карте, и более мелких игроков. С другой стороны, опасно подходить к более массивным бактериям, потому что они могут вас поглотить.<br/>Интрига Agar.io в том, что чем массивнее становится ваша клетка, тем медленнее она может передвигаться. Догнать мелкого соперника уже невозможно, если бы не способность клетки делиться, выплёвывая половину себя резко вперед. Таким образом можно поглотить противника, главное, чтобы выплюнутая половина вашей клетки оказалась больше, чем соперник. Делиться можно сколько угодно раз в зависимости от ваших задач. Через некоторое время разделенные клетки сходятся и сливаются в одну.<br/>У клеток в Agar.io есть естественный противник — зеленые и бордовые шипастые круги. Поглотив такой круг клетка разрывается на несколько частей. Это бывает весьма некстати, поэтому мелкие игроки прячутся в районе таких шипастых кругов от больших соперников.<br/>Основной интерес в Agar.io все же в искусстве поглощать других игроков и самому при этом не становиться добычей. Такое умение приходит не сразу и поначалу непонятно, как Топ игроки достигают таких гигантских масс. Но тут дело времени, настойчивости и храбрости к противоборству.<br/>Чтобы успешно играть в Agar.io нужно знать еще приём с выплевыванием массы кнопкой W. Особенно это здорово, когда вы работаете с кем-нибудь в команде и вам нужно подкормить союзника. Нажав W, вы выплевываете кусочек массы по направлению к курсору мыши. Это помогает, обмениваться массой между вашими клетками, когда их много, чтобы обезопасить самых маленьких. Выплевывание массы в Agar.io не зависит от объема клетки; объем "плевка" всегда одинаковый.</p>
                </div>
                <div class="play__info bgreen">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Клетка движется за курсором</li>
                    <li>W — выплюнуть маленький кусок массы</li>
                    <li>Пробел — разделиться надвое</li>
                  </ul>
                </div>
                <div class="play__info bgreen">
                  <p>Режимы</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li><b>FFA</b> (каждый сам за себя)</li>
                    <li><b>Teams</b> — по командам</li>
                    <li><b>Experimental</b> — такой же FFA, только добавлены коричневые круглые точки, которые, скушав кого-нибудь, выбрасывают такое же количество массы вокруг себя</li>
                    <li><b>Party</b> — То же, что и играть в Агарио каждый сам за себя</li>
                  </ul>
                </div>
                <div class="play__info bgreen">
                  <p>Моды</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Скачать мод
                      <a href="https://greasyfork.org/ru/scripts/10335-agar-minimap" target="_blank">
                        <span class="yellow">Agar Minimap</span>
                      </a> — 
                      <span class="pink">Миникарта</span>,
                    </li>
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