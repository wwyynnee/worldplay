<!DOCTYPE html>
<html lang="ru">
  <head>
    <?php
      include "src/settings/head.php";
    ?>
<!-- Yandex.Metrika counter --> <script src="https://mc.yandex.ru/metrika/watch.js" type="text/javascript" ></script> <script type="text/javascript" > try { var yaCounter88573819 = new Ya.Metrika({ id:88573819, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } </script> <noscript><div><img src="https://mc.yandex.ru/watch/88573819" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
  </head>
  <body>
    <?php
      include "src/settings/preloader.php";
    ?>
    <div class="wrapper">
      <header>
        <?php
          include "src/settings/header.php";
        ?>
      </header>
      <main>
        <section>
          <div class="main">
            <img src="https://cdn.worldplay.tk/cdn/slider/bg.webp" alt="" class="main__img" id="slider">
            <div class="main__content">
              <h1>Захватывающий мир io-игр</h1>
              <h2>Всегда онлайн для тебя и твоих друзей!</h2>
            </div>
            <div class="main__btn">
              <a href="world"><button>Присоединиться к играм</button></a>
            </div>
          </div>
        </section>
        <article>
          <div class="search">
            <form>
              <input type="text" name="text" placeholder="Я ищу..." onclick="inputsearch()">
              <div class="submit">
                <input type="submit" name="submit" value="">
              </div>
            </form>
            <div class="popular__container">
              <p>Популярные</p>
              <div class="popular__content">
                <a href="game/agar" target="_blank">
                  <div class="popular__game">
                    <img src="https://cdn.worldplay.tk/cdn/game/agar.io.webp" alt="" />
                  </div>
                </a>
                <a href="game/diep" target="_blank">
                  <div class="popular__game">
                    <img src="https://cdn.worldplay.tk/cdn/game/diep.io.webp" alt="" />
                  </div>
                </a>
              </div>
              <div class="popular__content">
                <a href="game/krunker" target="_blank">
                  <div class="popular__game">
                    <img src="https://cdn.worldplay.tk/cdn/game/krunker.io.webp" alt="" />
                  </div>
                </a>
                <a href="game/paper" target="_blank">
                  <div class="popular__game">
                    <img src="https://cdn.worldplay.tk/cdn/game/paper.io.webp" alt="" />
                  </div>
                </a>
              </div>
              <div class="popular__content">
                <a href="game/slither" target="_blank">
                  <div class="popular__game">
                    <img src="https://cdn.worldplay.tk/cdn/game/slither.io.webp" alt="" />
                  </div>
                </a>
                <a href="game/snake" target="_blank">
                  <div class="popular__game">
                    <img src="https://cdn.worldplay.tk/cdn/game/snake.io.webp" alt="" />
                  </div>
                </a>
              </div>
              <div class="popular__content">
                <a href="game/wormate" target="_blank">
                  <div class="popular__game">
                    <img src="https://cdn.worldplay.tk/cdn/game/wormate.io.webp" alt="" />
                  </div>
                </a>
                <a href="game/wormax" target="_blank">
                  <div class="popular__game">
                    <img src="https://cdn.worldplay.tk/cdn/game/wormax.io.webp" alt="" />
                  </div>
                </a>
              </div>
            </div>
          </div>
        </article>
        <article>
          <?php
            include "src/settings/nav.php";
          ?>
        </article>
        <article>
          <?php
            include "src/settings/aside.php";
          ?>
        </article>
      </main>
    </div>
    <?php
      include "src/settings/script.php";
    ?>    
  </body>
</html>