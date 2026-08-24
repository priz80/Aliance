<section class="cta">
  <div class="bg-gray section-cta">
    <picture class="cta-image">
      <source type="image/webp" srcset="./img/cta.webp">
      <source type="image/jpeg" srcset="./cta.png">
      <img src="./img/cta.png" alt="prodaction">
    </picture>
    <div class="cta-form-wrapper container">
      <form action="handler.php" method="POST" class="cta-form">
        <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
        <p class="cta-form-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
          ответит на все интересующие вопросы и поможем даже в самых сложных
          случаях!
        </p>
        <div class="input-group-wrapper">
          <div class="input-group">
            <input
              type="text"
              class="input"
              id="user-name"
              placeholder=" "
              name="username" >
            <label class="input-group-label" for="user-name">Имя</label>
          </div>
          <div class="input-group">
            <input
              type="tel"
              class="input phone-mask"
              id="user-phone"
              placeholder=" "
              name="userphone" >
            <label class="input-group-label" for="user-phone" name="userphone">Номер телефона</label>
          </div>
        </div>
        <div class="cta-form-footer">
          <button type="submit" class="button cta-form-button">
            Отправить заявку
          </button>
          <div class="notify">
            <svg width="14" height="14" class="notify-icon">
              <use xlink:href="img/sprite.svg#shield"></use>
            </svg>
            <p class="notify-text">
              Обращаясь к нам вы получаете не только профессиональную
              работу, но и абсолютную конфиденциальность информации!
            </p>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>