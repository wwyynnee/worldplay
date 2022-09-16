<!DOCTYPE html>
<html lang="ru">
  <head>
    <?php
      include "src/settings/head.php";
    ?>
  </head>
  <body>
    <?php
      include "src/settings/preloader.php";
    ?>
    <div class="wrapper">
      <div class="contacts">
        <div class="contacts__form">
          <form action="https://feedback.worldplay.tk/submit">
            <input name="subject" size="30" type="text" placeholder="Тема" required />
            <input name="name" type="text" placeholder="Ваше имя" required />
            <input name="email" type="email" placeholder="Ваша почта" required />
            <textarea name="body" cols="32" rows="5" placeholder="Сообщение" minlength="10" maxlength="500" required></textarea>
            <div class="contacts__agree">
              <input name="check" type="checkbox" required />
              <label for="agree">Нажимая кнопку, я соглашаюсь с <a href="rules" target="_blank">правилами</a></label>
            </div>
            <input type="submit" value="Отправить" />
          </form>
        </div>
      </div>
    </div>
    <script src="src/js/preloader.js"></script>
  </body>
</html>