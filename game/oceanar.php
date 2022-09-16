<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Играть Oceanar.io | WorldPlay</title>
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
                  <p>7.7</p>
                </div>
                <div class="play__name">
                  <p>Oceanar.io</p>
                </div>
                <a href="../io/oceanar" target="_blank">
                  <?php
                    include "../src/settings/game/play_white.php";
                  ?>
                </a>
              </div>
              <div class="play__blockcontainer">
                <div class="play__block">
                  <div class="play__iframe">
                    <iframe src="../io/oceanar"></iframe>
                  </div>
                </div>
                <div class="play__iogame">
                  <img src="https://cdn.worldplay.tk/cdn/images/icon_oceanar.io.webp" alt="" />
                  <ul>
                    <li><span class="white">Разработчик:</span> Неизвестно</li>
                    <li><span class="white">Издатель:</span> Неизвестно</li>
                    <li><span class="white">Дата выпуска:</span> Неизвестно</li>
                    <li><span class="white">Жанры:</span> Ролевые</li>
                    <li><span class="white">Платформы:</span> Браузер</li>
                    <li><span class="white">Режим игры:</span> Сетевая игра</li>
                    <li><span class="white">Язык интерфейса:</span> Английский</li>
                    <li><span class="white">Альтернативные названия:</span> океанарио</li>
                  </ul>
                </div>
              </div>
              <div class="play__content">
                <div class="play__info">
                  <p>Об игре</p>
                </div>
                <div class="play__text">
                  <p>Oceanar.io — это игра в стиле набора массы. В таком же водном стиле есть масштабная Aqwar.io и озорная Piranh.io. Oceanar.io радует продуманным геймплеем, где есть большой простор для тактики. Так же доставляет сам игровой процесс, в котором здорово плавать, собирая не только еду, но и союзников. Так же в Oceanar.io есть два уникальных игровых режима.</p>
                  <img src="https://cdn.worldplay.tk/cdn/game/oceanar.io.webp" alt="" />
                </div>
                <div class="play__info">
                  <p>Как играть</p>
                </div>
                <div class="play__text column">
                  <p>Основная задача игры — набрать как можно больше массы, поедая планктон и других игроков. Изюминка Oceanar.io в том, что масса собирается не в главную рыбку, а масса конвертируется в маленьких рыбок, которые за главной рыбкой ходят косяком. Когда рыбок соберется несколько штук, можно их объединять в рыб побольше. Это делается в Oceanar.io вот для чего: по вашему приказу рыбки атакуют других игроков. Причем задача — съесть головную рыбку противника. Тогда мы и массу от него оставшуюся слопаем, и возьмем к себе в косяк его недобитых рыб.<br/>Помимо планктона в море Oceanar.io водятся нейтральные существа: крабы, улитки, еще рыбки. Они белого цвета. Можно взять их в свою команду, "покрасив" их своей главной рыбой. Эти существа так же умеют мутировать в больших и сильнейших. А кроме них плавают в море белесые медузы, которые очень сильны и к тому же хищники — естественные враги всех игроков. Их можно съесть, но лучше атаковать сильными рыбами.<br/>Надо иметь в виду такой момент, что маленькие рыбки быстрые, а большие — сильные. В своем косяке нужно иметь и тех и других. Маленьких, чтобы они быстро атаковали чужого главаря, а больших — для личной охраны. Этим Oceanar.io тактичен — как распорядиться ресурсом массы.</p>
                </div>
                <div class="play__info">
                  <p>Управление</p>
                </div>
                <div class="play__text">
                  <ul>
                    <li>Рыбка следует за мышью</li>
                    <li>Левый клик - приказ рыбкам переместиться и/или атаковать цель, на которую вы кликаете. Головная рыбка при этом стоит недвижно.</li>
                    <li>Правый клик - совместить рыбок в рыб побольше.</li>
                  </ul>
                </div>
                <div class="play__info">
                  <p>Режимы</p>
                </div>
                <div class="play__text">
                  <p>Классический — здесь Oceanar.io предлагает набирать больше и делать все то, о чем шел разговор выше.<br/>Бой иглобрюхов — в этом режиме Oceanar.io отсутствует планктон. Мы плаваем, сбираем к себе в команду иглобрюхов и деремся с медузами и другими игроками. Иглобрюхи это такой тип рыб, который "взрывается" при касании с противником, чем сильно его ранит. Задача здесь прежняя — поразить головную рыбку противника.</p>
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