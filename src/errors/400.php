<!DOCTYPE html>
<html lang="ru">
  <head>
    <?php
      include "src/settings/head.php";
    ?>
    <style>
      html, body {
        overflow: hidden;
        padding: 0;
        margin: 0;
      }
      div {
        display: flex;
        height: 100vh;
        align-items: center;
        justify-content: center;
        background-color: black;
      }
      div img {
        height: 100%;
        width: auto;
      }
      @media screen and (max-width: 30rem) {
        div img {
          height: 50%;
        }
      }
    </style>
  </head>
  <body>
    <a href="/">
      <div>
        <img src="https://cdn.worldplay.tk/cdn/general/400.gif" alt="" />
      </div>
    </a>
  </body>
</html>