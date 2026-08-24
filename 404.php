<?php
http_response_code(404);
?>
<!doctype html>
<html lang="ru">

<head>
  <meta charset="UTF-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <meta name="robots" content="noindex, nofollow">
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com" > -->
  <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin > -->
  <link rel="stylesheet" href="./css/style.css" >

  <title>404 - Страница не найдена | Aliance Production</title>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "Страница не найдена",
      "description": "Запрашиваемая страница не существует или была удалена."
    }
  </script>
</head>

<body>



  <div class="container error">
    <h1 class="error-title">404</h1>
    <h2 class="error-subtitle">Страница не найдена</h2>
    <div class="error-text">
      <p>
        Мы не смогли найти страницу с таким адресом, попробуйте перейти на главную или напишите нам.
      </p>
      <!-- <a href="index.php"><button type="submit" class="button modal-form-button error-button">Вернуться на главную</button></a> -->
        <a href="index.php" class="button modal-form-button error-button">
        Вернуться на главную
      </a>
    </div>
  </div>


  <?php include_once('modal.php') ?>
  <?php include_once('mobile_menu.php') ?>
  <?php include_once('navbar_light.php') ?>

  <?php include_once('footer.php') ?>