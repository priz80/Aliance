<?php
$page_title = "Контакты";
$header_style = "page-header-bg-gray";
include_once('./template/page-header.php') ?>
<?php include_once('./template/modal.php') ?>
<?php include_once('./template/mobile_menu.php') ?>
<?php include_once('./template/navbar_light.php') ?>
<div class="container map-container">
  <div class="footer-top">
    <!-- <a href="/" class="header-logo">
          <svg class="logo-svg footer-logo">
            <use xlink:href="img/sprite.svg#logo"></use>
          </svg>
</a> -->
    <a href="tel:+74996861014" class="footer-phone">+7 (499) 686-10-14</a>
    <div class="footer-info">
      <svg class="phone-svg" width="24" height="24">
        <use xlink:href="img/sprite.svg#mark"></use>
      </svg>
      <address class="footer-info-address">
        г. Москва, Холодильный пер. 4к1с8
      </address>
    </div>
    <div class="footer-info">
      <svg class="mail-svg" width="24" height="24">
        <use xlink:href="img/sprite.svg#mail"></use>
      </svg>
      <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">a.dragunov@tdaliance.ru</a>
    </div>
    <div class="footer-social">
      <a href="#" class="footer-social-link">
        <svg class="footer-social-svg" width="24" height="24">
          <use xlink:href="img/sprite.svg#vk"></use>
        </svg>
      </a>
      <a href="#" class="footer-social-link">
        <svg class="footer-social-svg" width="24" height="24">
          <use xlink:href="img/sprite.svg#inst"></use>
        </svg>
      </a>
    </div>
  </div>
  <img src="./img/map.png" alt="" class="map">
</div>

<?php include_once('./template/cta.php') ?>
<?php include_once('./template/footer.php') ?>