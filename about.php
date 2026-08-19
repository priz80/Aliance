    <?php
    $page_title = "О компании";
    $header_style = "page-title-bg-gray";
    include_once('page-title.php') ?>

    <section class="section prodact">
      <div class="container">
        <div class="prodact-content-wrapper">
          <img class="prodact-photo" src="./img/prodact.jpg" alt="prodaction">
          <div class="prodact-content">
            <div class="seporator"></div>
            <h2 class="section-title">мы - эксперты в области производства химии</h2>
            <div class="prodact-text">
              <p>
                Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>



    <div class="container advant">
      <div class="swiper advant-slider">
        <ul class="swiper-wrapper header-features">
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use xlink:href="img/sprite.svg#time"></use>
            </svg>
            <p class="advant-features-text">Непрерывная работа c 2017 года</p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use xlink:href="img/sprite.svg#certificate"></use>
            </svg>
            <p class="advant-features-text">Вся продукция сертифицирована</p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use xlink:href="img/sprite.svg#control"></use>
            </svg>
            <p class="advant-features-text">
              Контроль качества на всех этапах
            </p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use xlink:href="img/sprite.svg#delivery"></use>
            </svg>
            <p class="advant-features-text">
              Возможны поставки по всей России
            </p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use xlink:href="img/sprite.svg#speed"></use>
            </svg>
            <p class="advant-features-text">Оперативное производство</p>
          </li>
        </ul>

        <div class="slider-buttons">
          <div class="advant-button-prev">
            <svg width="36" height="24">
              <use xlink:href="img/sprite.svg#advant-arrow-prev"></use>
            </svg>
          </div>
          <div class="advant-button-next">
            <svg width="36" height="24">
              <use xlink:href="img/sprite.svg#advant-arrow-next"></use>
            </svg>
          </div>
        </div>
      </div>
    </div>

    <section class="section founder">
      <div class="container">
        <div class="prodact-content-wrapper">
          <div class="prodact-content">
            <div class="seporator"></div>
            <h2 class="section-title">Наше производство</h2>
            <img class="prodact-photo-mobile" src="./img/med.jpg" alt="prodaction">
            <div class="prodact-text">
              <p>
                Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.
                Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.
              </p>
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
          </div>
          <img class="prodact-photo" src="./img/med.jpg" alt="prodaction">
        </div>
      </div>
    </section>



    <?php include_once('modal.php') ?>
    <?php include_once('mobile_menu.php') ?>
    <?php include_once('navbar_light.php') ?>
    <?php include_once('founder.php') ?>
    <?php include_once('./template/center.php') ?>
    <?php include_once('clients.php') ?>
    <?php include_once('cta.php') ?>
    <?php include_once('footer.php') ?>