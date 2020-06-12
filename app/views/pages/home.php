<section class="hero">
    <b class="hero-title animation__fade-out">
      Соляная пещера, массаж, маникюр и педикюр &ndash; как в первый раз
    </b>
  </section>

  <section class="services">
    <div class="services__container container">
      <div class="service">
        <div class="service-image service-image__salt-cave"></div>
        <div class="service__title-text-container">
          <div class="service__title">Соляная пещера</div>
          <div class="service__text">Одна из лучших соляных пещер в Беларуси по мнению наших посетителей</div>
        </div>
      </div>
      <div class="service">
        <div class="service-image service-image__massage"></div>
        <div class="service__title-text-container">
          <div class="service__title">Массаж</div>
          <div class="service__text">Откройте для себя тайну настоящего качественного массажа впервые</div>
        </div>
      </div>
      <div class="service">
        <div class="service-image service-image__manicure"></div>
        <div class="service__title-text-container">
          <div class="service__title">Маникюр</div>
          <div class="service__text">Лучшее обслуживание для Ваших ногтей - стиль и мода</div>
        </div>
      </div>
      <div class="service">
        <div class="service-image service-image__pedicure"></div>
        <div class="service__title-text-container">
          <div class="service__title">Педикюр</div>
          <div class="service__text">Лучшее обслуживание для Ваших ногтей - стиль и мода, в том числе и для ног</div>
        </div>
      </div>
    </div>
  </section>

  <section class="about-us container two-column-section">
    <div class="two-column-section__left-column">
      <h2 class="column-section__title">О нас</h2>
      <p class="column-section__text">
        Мы — студия здоровья «Панда». В студии открыта соляная пещера, салоны массажа, маникюра и педикюра — всё для вашей красоты и здоровья. Выбор наших услуг не оставит Вас равнодушным :)
      </p>
    </div>
    <div class="about-us__video-test">
      
    </div>
    <div class="about-us__video">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/Jt51Qg2FuIg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </section>

  <section class="price-catalogue container">
    <h2 class="price-catalogue__title">Прейскурант</h2>
    <div class="price-catalogue__images-container">
      <div class="price-catalogue-images-container__column">
        <img src="public/images/price catalogue/price-1.jpg" alt="Прейскурант 1">
      </div>
      <div class="price-catalogue-images-container__column">
        <img src="public/images/price catalogue/price-2.jpg" alt="Прейскурант 2">
      </div>
    </div>
  </section>

  <section class="contact container two-column-section">
    <div class="two-column-section__left-column">
      <h2 class="column-section__title">Режим работы</h2>
      <p class="contact__schedule column-section__text">
        Работаем по следующему графику:<br>
        Вторник — пятница с 10.00 до 21.00<br>
        Суббота — воскресенье с 10.00 до 18.00<br>
        Понедельник — санитарный день
      </p>
      <a href="javascript:void(0);" class="decorized-button">Записаться</a>
    </div>
    <div class="two-column-section__right-column">
      <h2 class="column-section__title">Контакты</h2>
      <p class="contact__text column-section__text">
        Наш адрес: г. Сморгонь, ул. Победы, 12<br>
        (м-н ДОСы, вход напротив стоянки МРЭО ГАИ)<br>
        Наш телефон: +375 (33) 348-09-08
      </p>
      <div class="about-us__video">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2317.8622560775834!2d26.38270276577865!3d54.48301209666344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dc43a915d937e1%3A0x30b9be0ddff30a14!2z0KHQvtC70Y_QvdCw0Y8g0L_QtdGJ0LXRgNCwIFBBTkRB!5e0!3m2!1sru!2sby!4v1584594046694!5m2!1sru!2sby" width="450" height="325" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </section>

  <button type="button" class="book-btn">
    <span class="book-btn__icon"></span>
    <span class="book-btn__text">Записаться</span>
  </button>

  <div class="book-form-container">
    <div class="book-form-container__content">
      <button class="book-form-container__close" type="button">&#10005;</button>
      
      <div class="booking-app" id="bookingApp">
    <form id="bookingForm" method="post" action="index.html">
      <div class="booking-app__title-container">
        <b class="booking-app__title">Записаться:</b>
      </div>

      <section class="booking-app__section-container">
        <div class="booking-app__section-container-col">
          <label class="booking-app__section-container-col-label" for="dateInput">Дата:</label>
          <input id="dateInput" name="dateInput" type="date" >
        </div>
      </section>

      <section class="booking-app__section-container">
        <div class="booking-app__section-container-col">
          <label class="booking-app__section-container-col-label" for="timeInput">Время (с 10:00 до 18:00):</label>
          <input id="timeInput" name="timeInput" type="time" min="10:00" max="18:00" >
        </div>
      </section>

      <section class="booking-app__section-container">
        <div class="booking-app__section-container-col">
          <label class="booking-app__section-container-col-label" for="nameInput">Имя:</label>
          <input class="booking-app__name-tel-input" id="nameInput" name="nameInput" type="text" placeholder="Анна"  minlength="2" maxlength="15">
        </div>
      </section>

      <section class="booking-app__section-container">
        <div class="booking-app__section-container-col">
            <label class="booking-app__section-container-col-label" for="phoneInput">Телефон:</label>
            <input class="booking-app__name-tel-input" id="phoneInput" name="phoneInput" type="tel" placeholder="+375 33 382-98-73" minlength="5" maxlength="22" >
        </div>
      </section>

      <section class="booking-app__section-container booking-app__section-submit-container">
        <button class="booking-app__submit" type="submit">Подтвердить</button>
      </section>
    </form>
  </div>
    </div>
  </div>
