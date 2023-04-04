<div class="popub popub-form" id="form">
  <div class="popub__inner">
    <div class="popub__content">
      <button class="popub__close"></button>
      <div class="box-feedback__form popub-form">
        <div class="box-feedback__form-title"><?php echo get_field('_propose_form_title', 'options'); ?></div>
        <div class="box-feedback__form-text">
          <?php echo get_field('_propose_form_subtitle', 'options'); ?>
        </div>
        <!-- <form action="#" class="form">
          <div class="form__wrapper">
            <div class="form__item">
              <label class="form__label" for="name">Ваше ім`я </label>
              <input
                class="form__input"
                id="name"
                name="name"
                type="text"
              />
            </div>
            <div class="form__item">
              <label class="form__label" for="email">Ваш Email</label>
              <input
                class="form__input"
                id="email"
                name="email"
                type="email"
              />
            </div>
          </div>

          <div class="popub-form__form-item">
            <label class="form__label" for="email">Назва проекта </label>
            <input
              class="form__input"
              id="name-project"
              name="name-project"
              type="text"
            />
          </div>

          <div class="popub-form__form-item">
            <label class="form__label" for="email">Необхідна сума </label>
            <input
              class="form__input"
              id="need-summ"
              name="need-summ"
              type="number"
            />
          </div>

          <label class="form__label" for="textarea"
            >Опис вашого проекту
            <span>
              Будь ласка, максимально конкретизуйте потреби. Це допоможе
              уникнути непорозумінь і зайвих уточнень.
            </span>
          </label>
          <textarea
            class="form__input form__textarea"
            id="textarea"
            name="textarea"
            type="text"
          >
          </textarea>

          <button class="btn form__btn" type="submit">Запропонувати</button>
        </form> -->
        <?php echo do_shortcode( '[contact-form-7 id="211" title="Запропонувати проект"]' ); ?>
      </div>
    </div>
  </div>
</div>