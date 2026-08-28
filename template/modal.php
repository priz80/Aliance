      <div class="modal" id="feedback-modal">
        <div class="modal-dialog">
          <h1 class="modal-title">Есть вопросы?</h1>

          <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
            <svg class="close-icon" width="24" height="24">
              <use xlink:href="img/sprite.svg#close"></use>
            </svg>
          </a>

          <p class="modal-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>


          <form action="handler.php" method="POST" class="modal-form">

            <div class="input-group-wrapper input-group-vertical">
              <div class="input-group modal-input-group">
                <input type="text" class="input modal-input" id="modal-user-name" name="username" placeholder=" " maxlength="30" required >
                <label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
              </div>
              <div class="input-group modal-input-group">
                <input type="tel" class="input phone-mask modal-input" id="modal-user-phone" name="userphone" placeholder=" " maxlength="18" required >
                <label class="input-group-label modal-input-label" for="modal-user-phone">Номер телефона</label>
              </div>
            </div>

            <div class="modal-form-footer">
              <button type="submit" class="button modal-form-button">
                Отправить заявку
              </button>
              <div class="notify">
                <svg width="14" height="14" class="notify-icon">
                  <use xlink:href="img/sprite.svg#shield"></use>
                </svg>
                <p class="notify-text">
                  Обращаясь к нам вы получаете не только профессиональную работу,
                  но и абсолютную конфиденциальность информации!
                </p>
              </div>
            </div>
          </form>

        </div>
      </div>
      <div class="modal" id="alert-modal">
        <div class="modal-dialog">
          <img src="./img/thanks_illu.png" alt="" class="thanks-image">
          <h2 class="modal-title">Спасибо за заявку!</h2>

          <a href="" class="modal-close" data-toggle="modal" data-target="#alert-modal">
            <svg class="close-icon" width="24" height="24">
              <use xlink:href="img/sprite.svg#close"></use>
            </svg>
          </a>

          <p class="modal-text">Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
          <a href="index.php" class="button modal-form-button">Вернуться на главную</a>
        </div>

      </div>