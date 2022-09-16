<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть EvoWorld.io | WorldPlay</title>
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
                  <p>EvoWorld.io</p>
                </div>
                <a href="../io/evoworld" target="_blank">
                  <?php
                    include "../src/settings/game/play_pink.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/evoworld"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_evoworld.io.webp" alt="">
                  <ul>
                    <li><span class="pink">Разработчик:</span> Pixel Voices</li>
                    <li><span class="pink">Издатель:</span> Pixel Voices</li>
                    <li><span class="pink">Дата выпуска:</span> 10 апреля 2018 г.</li>
                    <li><span class="pink">Жанры:</span> Симулятор, Приключения</li>
                    <li><span class="pink">Платформы:</span> Браузер, Android</li>
                    <li><span class="pink">Режим игры:</span> Сетевая игра</li>
                    <li><span class="pink">Язык интерфейса:</span> Русский</li>
                    <li><span class="pink">Альтернативные названия:</span> evoworldio, евоворлд ио, evoworld online</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info bpink">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>EvoWorld.io — это оригинальная игра в стиле "ешь и эволюционируй". Здесь вы будете развиваться от простейшей мухи до грозных хищников. Главное это самому не стать добычей! Может быть EvoWorld.io это новый Mope.io? Кто знает, попробуйте сами!</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/evoworld.io.webp" alt="" />
                </div>
                <div class="play__info bpink">
                  <p>Как играть</p>
                </div>
                <div class="play__text">
                  <p>Основная задача в EvoWorld.io — это набирать очки опыта и эволюционировать. В самом верху по центру вы видите вашу полоску опыта, следующее животное, в которое вы эволюционируете и иконки животных, которых вы можете есть. Впрочем, то, что вы можете есть будет подсвечено зеленым контуром. Опасайтесь всех, кого видите в красном контуре - они могут съесть вас. Прочие игроки для вас нейтральны и вы для них - тоже. При создании EvoWorld.io авторы ориентировались на здравый смысл и бабочка, к примеру, кушает пыльцу (цветочки), мухи едят какашули и падаль. Всем так же необходимо вовремя восполнять запас воды, чтобы оставаться в живых.<br/>EvoWorld.io — это игра, где ваша среда обитания будет меняться в зависимости от того, в какое существо вы эволюционировали. Для дальнейшего роста вам нужно будет перемещаться как по горизонтальной плоскости, так и по вертикале: облака, поверхность, подземелье. Где бы вы ни оказались, разведывайте поблизости водоём. Если вы - хищник, то можете прятаться неподалёку для охоты. Если вы пока еще не очень сильны либо миролюбивы, осмотритесь, прежде чем приближаться к воде.<br/>Заметьте, что каждое существо в EvoWorld.io умеет летать. Можно выделить три ранга животных: насекомые, младшие птицы и старшие птицы (сокола). Коричневый сокол (Brown Falcon) может поедать даже свиней и кошек! Причем самые крутые птицы не едят всякую мелочь и перестают есть плоды деревьев. Когда вы достигните максимального развития, остаётся только летать по карте и наводить ужас на её обитателей!</p>
                </div>
                <div class="play__info bpink">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Персонаж движется в сторону курсора</li>
                    <li>Клик чтобы летать</li>
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