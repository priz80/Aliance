      <?php
      $page_title = "Автомобильная химия";
      $page_title_relative = "Контрактное производство";
      $page_title_dash = "dash";
      $href_title_relative = "contract_product.php";
      $header_style = "page-header-bg-gray";
      //переменные для блока с картинкой слева
      $block_title = "Контрактное производство автомобильной химии";
      $image_block = "./img/production.jpg";
      $text_block = "Прежде всего, начало повседневной работы по формированию позиции однозначно фиксирует необходимость приоритизации разума над эмоциями. Кстати, представители современных социальных резервов неоднозначны и будут описаны максимально подробно.
Но социально-экономическое развитие напрямую зависит от поставленных обществом задач! Безусловно, постоянный количественный рост и сфера нашей активности предоставляет широкие возможности для системы обучения кадров, соответствующей насущным потребностям. В целом, конечно, выбранный нами инновационный путь обеспечивает широкому кругу (специалистов) участие в формировании своевременного выполнения сверхзадачи. А ещё элементы политического процесса представлены в исключительно положительном свете. Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высокотехнологичная концепция общественного уклада создаёт предпосылки для глубокомысленных рассуждений. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.";
      //переменные для блока с картинкой справа
      $block_title_right = "Изготовление автохимии";
      $image_block_right = "./img/avtohim.jpg";
      $text_block_right = "Но современная методология разработки позволяет оценить значение прогресса профессионального сообщества. Есть над чем задуматься: тщательные исследования конкурентов набирают популярность среди определенных слоев населения, а значит, должны быть ассоциативно распределены по отраслям. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.";

      $color_arrow = "#292D33"; // задаем цвет стрелок слайдера advant
      // стили вывода изображения
      $image_visibility = " ";
      $image_mobile_visibility = "image-mobile_founder";


      include_once('./template/page-header.php');
      include_once('./template/modal.php');
      include_once('./template/mobile_menu.php');
      include_once('./template/navbar_light.php') ?>

      <?php include_once('./template/left-image-block.php') ?>

      <?php include_once('./template/advant-slider-block.php') ?>

      <section class="section founder">

        <div class="container">
          <div class="avtohim-content-wrapper">
            <div class="founder-content">
              <div class="seporator"></div>
              <h2 class="section-title"><?php echo $block_title_right ?></h2>
              <p><?php echo $text_block_right ?></p>
              <ul class="prodact-list">

                <li class="prodact-list-item">
                  <svg width="30" height="30" class="clients-list-icon">
                    <use xlink:href="img/sprite.svg#car"></use>
                  </svg>
                  Автомобильная химия
                </li>
                <li class="prodact-list-item">
                  <svg width="30" height="30" class="clients-list-icon">
                    <use xlink:href="img/sprite.svg#eat"></use>
                  </svg>
                  Бытовая химия
                </li>
                <li class="prodact-list-item">
                  <svg width="30" height="30" class="clients-list-icon">
                    <use xlink:href="img/sprite.svg#brush"></use>
                  </svg>
                  Дезинфицирующие средства
                </li>
                <li class="prodact-list-item">
                  <svg width="30" height="30" class="clients-list-icon">
                    <use xlink:href="img/sprite.svg#cosmetic"></use>
                  </svg>
                  Пищевые аэрозоли
                </li>
                <li class="prodact-list-item">
                  <svg width="30" height="30" class="clients-list-icon">
                    <use xlink:href="img/sprite.svg#car-cosm"></use>
                  </svg>
                  Косметическая продукция
                </li>
                <li class="prodact-list-item">
                  <svg width="30" height="30" class="clients-list-icon">
                    <use xlink:href="img/sprite.svg#shirt"></use>
                  </svg>
                  Краски аэрозольные
                </li>
              </ul>
            </div>
            <img class="founder-photo-avtohim" src="<?php echo $image_block_right ?>" alt="founder">
          </div>
        </div>
      </section>

      <?php include_once('./template/center.php') ?>

      <?php include_once('./template/section-light.php') ?>

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
                  <li class="prodact-list-item">Антискотч</li>
                  <li class="prodact-list-item">Многоцелевая смазка</li>
                  <li class="prodact-list-item">Жидкий ключ</li>
                  <li class="prodact-list-item">Высокотемпературная смазка</li>
                  <li class="prodact-list-item">Универсальный очиститель деталей</li>
                  <li class="prodact-list-item">Силиконовая смазка</li>
                  <li class="prodact-list-item">Цепная смазка</li>
                  <li class="prodact-list-item">Медная смазка</li>
                  <li class="prodact-list-item">Графитовая смазка</li>
                  <li class="prodact-list-item">Очиститель кондиционера пенный</li>
                  <li class="prodact-list-item">Очиститель тормозных дисков</li>
                  <li class="prodact-list-item">Очиститель битумных пятен</li>
                  <li class="prodact-list-item">Очиститель кондционера</li>
                  <li class="prodact-list-item">Очиститель дросельной заслонки</li>
                  <li class="prodact-list-item">Очиститель обивки</li>
                  <li class="prodact-list-item">Тефлоновая смазка</li>
                  <li class="prodact-list-item">Очиститель двигателя</li>
                  <li class="prodact-list-item">Универсальный очиститель</li>
                  <li class="prodact-list-item">Чернитель шин</li>
                  <li class="prodact-list-item">Чернитель шин + очистка</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php include_once('./template/center.php') ?>
      <?php include_once('clients.php') ?>
      <?php include_once('./template/cta.php') ?>
      <?php include_once('./template/footer.php') ?>