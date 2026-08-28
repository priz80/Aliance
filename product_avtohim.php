      <?php
      $page_title = "Автомобильная химия";
      $page_title_relative = "Контрактное производство";
      $page_title_dash = "dash";
      $href_title_relative = "contract_product.php";
      $header_style = "page-header-bg-gray";
      $avtohim_img = "./img/avtohim.png";
      //переменные для блока с картинкой слева
      $block_title = "Контрактное производство автомобильной химии";
      $image_block = "./img/production.jpg";
      $text_block = "Прежде всего, начало повседневной работы по формированию позиции однозначно фиксирует необходимость приоритизации разума над эмоциями. Кстати, представители современных социальных резервов неоднозначны и будут описаны максимально подробно.
Но социально-экономическое развитие напрямую зависит от поставленных обществом задач! Безусловно, постоянный количественный рост и сфера нашей активности предоставляет широкие возможности для системы обучения кадров, соответствующей насущным потребностям. В целом, конечно, выбранный нами инновационный путь обеспечивает широкому кругу (специалистов) участие в формировании своевременного выполнения сверхзадачи. А ещё элементы политического процесса представлены в исключительно положительном свете. Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высокотехнологичная концепция общественного уклада создаёт предпосылки для глубокомысленных рассуждений. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.";
      //переменные для блока с картинкой справа
      $block_title_right = "Изготовление автохимии";
      /* $image_block_right = "./img/avtohim-prod.jpg"; */
      $text_block_right = "Но современная методология разработки позволяет оценить значение прогресса профессионального сообщества. Есть над чем задуматься: тщательные исследования конкурентов набирают популярность среди определенных слоев населения, а значит, должны быть ассоциативно распределены по отраслям. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.";

      $color_arrow = "#292D33"; // задаем цвет стрелок слайдера advant
      // стили вывода изображения
      $image_visibility = " ";
      $image_mobile_visibility = "image-mobile_founder";


      include_once('./template/avtohim-header.php');
      include_once('./template/modal.php');
      include_once('./template/mobile_menu.php');
      include_once('./template/navbar_light.php') ?>

      <?php include_once('./template/left-image-block.php') ?>

      <?php include_once('./template/advant-slider-block.php') ?>

      <section class="section founder">
        <picture>
          <source class="founder-photo-avtohim" type="image/webp" srcset="./img/avtohim-prod.webp">
          <source class="founder-photo-avtohim" type="image/jpeg" srcset="./img/avtohim-prod.jpg">
          <img class="founder-photo-avtohim" src="./img/avtohim-prod.jpg" alt="founder">
        </picture>
        <div class="container">
          <div class="avtohim-content-wrapper">
            <div class="founder-content">
              <div class="seporator"></div>
              <h2 class="section-title"><?php echo $block_title_right ?></h2>
              <p><?php echo $text_block_right ?></p>
              <ul class="prodact-list">

                <li class="prodact-list-item">
                  <svg width="30" height="30" class="clients-list-icon">
                    <use xlink:href="img/sprite.svg#him"></use>
                  </svg>
                  Полное описание товаров
                </li>
                <li class="prodact-list-item">
                  <svg width="30" height="30" class="clients-list-icon">
                    <use xlink:href="img/sprite.svg#car"></use>
                  </svg>
                  Актуальные цены
                </li>
                <li class="prodact-list-item">
                  <svg width="30" height="30" class="clients-list-icon">
                    <use xlink:href="img/sprite.svg#him"></use>
                  </svg>
                  Полное описание товаров
                </li>
                <li class="prodact-list-item">
                  <svg width="30" height="30" class="clients-list-icon">
                    <use xlink:href="img/sprite.svg#car"></use>
                  </svg>
                  Актуальные цены
                </li>
                <li class="prodact-list-item">
                  <svg width="30" height="30" class="clients-list-icon">
                    <use xlink:href="img/sprite.svg#brush"></use>
                  </svg>
                  Лаки и краски
                </li>
                <li class="prodact-list-item">
                  <svg width="30" height="30" class="clients-list-icon">
                    <use xlink:href="img/sprite.svg#him"></use>
                  </svg>
                  Химические производства
                </li>
                <li class="prodact-list-item">
                  <svg width="30" height="30" class="clients-list-icon">
                    <use xlink:href="img/sprite.svg#brush"></use>
                  </svg>
                  Лаки и краски
                </li>
                <li class="prodact-list-item">
                  <svg width="30" height="30" class="clients-list-icon">
                    <use xlink:href="img/sprite.svg#him"></use>
                  </svg>
                  Химические производства
                </li>
              </ul>
            </div>
            <!-- <img class="founder-photo-avtohim" src="<?php echo $image_block_right ?>" alt="founder"> -->
          </div>
        </div>
      </section>

      <section class="section founder">
        <div class="container">
          <div>
            <div>
              <div class="seporator"></div>
              <h2 class="section-title">Виды автохимии</h2>
              <div>
                <p>
                  Но современная методология разработки позволяет оценить значение прогресса профессионального сообщества. Есть над чем задуматься: тщательные исследования конкурентов набирают популярность среди определенных слоев населения, а значит, должны быть ассоциативно распределены по отраслям.
                </p>
                <ul class="prodact-list_avtohim">
                  <li class="prodact-list-item dash-blue">Антискотч</li>
                  <li class="prodact-list-item dash-blue">Многоцелевая смазка</li>
                  <li class="prodact-list-item dash-blue">Жидкий ключ</li>
                  <li class="prodact-list-item dash-blue">Высокотемпературная смазка</li>
                  <li class="prodact-list-item dash-blue">Универсальный очиститель деталей</li>
                  <li class="prodact-list-item dash-blue">Силиконовая смазка</li>
                  <li class="prodact-list-item dash-blue">Цепная смазка</li>
                  <li class="prodact-list-item dash-blue">Медная смазка</li>
                  <li class="prodact-list-item dash-blue">Графитовая смазка</li>
                  <li class="prodact-list-item dash-blue">Очиститель кондиционера пенный</li>
                  <li class="prodact-list-item dash-blue">Очиститель тормозных дисков</li>
                  <li class="prodact-list-item dash-blue">Очиститель битумных пятен</li>
                  <li class="prodact-list-item dash-blue">Очиститель кондционера</li>
                  <li class="prodact-list-item dash-blue">Очиститель дросельной заслонки</li>
                  <li class="prodact-list-item dash-blue">Очиститель обивки</li>
                  <li class="prodact-list-item dash-blue">Тефлоновая смазка</li>
                  <li class="prodact-list-item dash-blue">Очиститель двигателя</li>
                  <li class="prodact-list-item dash-blue">Универсальный очиститель</li>
                  <li class="prodact-list-item dash-blue">Чернитель шин</li>
                  <li class="prodact-list-item dash-blue">Чернитель шин + очистка</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php include_once('./template/center.php') ?>

      <?php include_once('./template/section-light.php') ?>

      <?php include_once('./template/center.php') ?>
      <?php include_once('./template/clients.php') ?>
      <?php include_once('./template/cta.php') ?>
      <?php include_once('./template/footer.php') ?>