<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Devast.io | WorldPlay</title>
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
                  <p>5.6</p>
                </div>
                <div class="play__name">
                  <p>Devast.io</p>
                </div>
                <a href="../io/devast" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/devast"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_devast.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Экшен, Путешествия, Песочница</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> devastio, девастио, старв ио 2, starve io 2</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Devast.io — это новая io-игра созданная разработчиком LapaMauve. Вы наверняка играли в его игры, такие как Starve.io, Nend.io и прочие крутые io-игры. Если вы играли в Starve.io, вам будет проще разобраться, тем не менее Devast.io — это оригинальная игра с оригинальным геймплеем и отличным музыкальным сопровождение. Настоящая эволюция сталкера! Построй свое убежище!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/devast.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text column">
                  <p>Ваша задача в Devast.io выжить любым способом. При этом это не значит ни попасться соперникам, а еще и не умереть от голода, холода и обезвоживания. Необходимо внимательно следить за уровнем индикаторов, т.к. как только любой из них обнулится, очень быстро начнет уменьшаться уровень жизни.<br/>Таким образом, первое, с чем вам следует разобраться в Devast io это, как и где добывать воду, еду и разводить огонь. Далее можно начинать строить убежище и крафтить все необходимое для этого.<br/>Вверху экрана увидите кнопку меню инвентаря. Давайте посмотрим, что там есть:
                  <ul>
                    <li>умения — можно улучить видимость или емкость инвентаря за баллы опыта</li>
                    <li>крафты — различные крафты для которых не сделали отдельную группу</li>
                    <li>одежда — шапки и прочая одежда, которая дает различные плюшки</li>
                    <li>строения - элементы для постройки убежища, стены, двери и пр.</li>
                    <li>инструменты</li>
                    <li>оружие</li>
                    <li>растения и семена — чтобы выращивать еду самостоятельно</li>
                  </ul><br/>А еще вы наверняка заметили в Devast.io значок радиации? Да, в какой-то момент начнется наступлении радиации, а вы должны быть готовы к этому в любой момент!<br/>Devast.io — это мир, в котором нужно быстро понимать, с кем можно дружить, а кто при первой же возможности всадит тебе нож в спину. Заводите себе здесь друзей и союзников, ведь вместе проще выживать. Создавайте кланы и держите под своим контролем всю территорию, которая вам нужна!<br/>Также в Devast.io вы можете приобрести приватный сервер, на котором вы можете играть по своим правилам. Там вы можете делать свои мини-игры, такие, как паззлы, батл арены, игру в бомбермана и так далее. Вы можете приглашать кого хотите на приватный сервер, модерируя его по ходу игры. Вы там — полновластный господин, регулирующий любое изменение одним махом руки.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Стрелки или WASD для перемещения</li>
                    <li>Левый клик, чтобы ударять/собирать</li>
                    <li>Shift для ускорения</li>
                    <li>E для взаимодействия с предметами (например, взять что-то)</li>
                    <li>C для крафта или умений</li>
                    <li>M чтобы открыть карту</li>
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