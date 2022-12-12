<!DOCTYPE html>
<html lang="ru">
  <title>FloWers</title>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="css/Style.css">
    </head>
    <body>
      <nav class="header">
          <div class="menu-header">
              <input type="checkbox" id="side-checkbox" />
              <div class="side-panel">
                  <label class="side-button-2" for="side-checkbox">+</label>
                  <h2 class="logo">
                      Фломиссима
                      <img src = "/FlowersSite/img/flower-white.svg">
                  </h2>
                  <ul>
                      <li><a href="index.php">Главная страница</a>
                      <li><h2>Каталог<img src = "/FlowersSite/img/flower-white.svg" alt=""></h2>
                      <li><a href="index.php?route=catalog&category=homeFlower">Комнатные растения</a>
                      <li><a href="index.php?route=catalog&category=outFlower">Уличные растения</a>
                      <li><a href="index.php?route=catalog&category=buket">Букеты</a>
                      <li><a href="index.php?route=catalog&category=grunt">Грунты</a>
                      <li><a href="index.php?route=catalog&category=himiya">Химия и удобрения</a>
                      <li><a href="index.php?route=catalog&category=gorshki">Горшки и капшо</a>
                          <h2>О Нас<img src = "/FlowersSite/img/flower-white.svg"></h2>
                      <li><a href="index.php?route=about">О фирме</a>
                      <li><a href="index.php?route=aboutAuthor">Об авторе</a>
                  </ul>
                  <h2 class="logo"></h2>
              </div>
              <div class="side-button-1-wr">
                  <label class="side-button-1" for="side-checkbox">
                      <div class="side-b side-open"><img src = "/FlowersSite/img/menu-header.svg"> </div>
                      <div class="side-b side-close"><img src = "/FlowersSite/img/menu-header.svg"></div>
                  </label>
                  <div class ="main-name">
                      Фломиссима
                      <img src = "/FlowersSite/img/flower-white.svg">
                  </div>
                  <div class ="promo-text-header">
                      Оптово-розничный цветочный и
                      Садовый центр
                  </div>
              </div>
          </div>
          <div class="header-line-black">
              <img src = "/FlowersSite/img/flower-black.svg">
          </div>
    </nav>
    <main>
        <div class="main">
            <?php include ($contentPage); ?>
            <div>
    </main>
     </body>
  <footer>
      <div class="header-line">
          <img src = "/FlowersSite/img/flower-white.svg">
      </div>
      <ul class="social-icons">
          <li><a class="social-icon-twitter" href="#" title="..." target="_blank" rel="noopener"></a></li>
          <li><a class="social-icon-fb" href="#" title="..." target="_blank" rel="noopener"></a></li>
          <li><a class="social-icon-vk" href="#" title="..." target="_blank" rel="noopener"></a></li>
          <li><a class="social-icon-telegram" href="#" title="..." target="_blank" rel="noopener"></a></li>
          <li><a class="social-icon-youtube" href="#" title="..." target="_blank" rel="noopener"></a></li>
      </ul>

      <div class="footer-contacts" >
          <div class="phone">+7 (908) 172-00-43</div>
          <div class ="adress">г. Ростов-на-Дону, пл.Гагарина 1</div>
          <div class="email">artem_berezhnov@mail.ru</div>
          <div class ="copyright">© «Flomissima.ru», 2022</div>
      </div>

  </footer>
</html>
