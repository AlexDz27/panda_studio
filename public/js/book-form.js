function BookFormContainer () {
  this.isActive = false;

  this.container = document.querySelector('.book-form-container');

  this.openBtn = document.querySelector('.book-btn');
  this.openBtnHeader = document.querySelector('.open-book-form-btn');
  this.closeBtn = document.querySelector('.book-form-container__close');
  this.decorizedBtn = document.querySelector('.decorized-button');

  this.toggle = function () {
    this.isActive = !this.isActive;

    this.toggleContainer();
  }.bind(this);

  this.toggleContainer = function () {
    this.container.classList.toggle('book-form-container--active');
  }

  this.init = function () {
    this.openBtn.addEventListener('click', this.toggle);
    this.openBtnHeader.addEventListener('click', this.toggle);
    this.closeBtn.addEventListener('click', this.toggle);
    this.decorizedBtn.addEventListener('click', this.toggle);

    document.addEventListener('keydown', function (evt) {
      if (!this.isActive) {
        return;
      }

      if (evt.key === 'Escape') {
        this.toggle();
      }
    }.bind(this));
  }

  this.init();
}

var bookFormContainer = new BookFormContainer();

function BookingForm() {
  this.form = document.querySelector('#bookingForm');

  this.send = function (evt) {
    evt.preventDefault();
    
    var formData = new FormData(this.form);
    var booking = {
      date: formData.get('dateInput'),
      time: formData.get('timeInput'),
      name: formData.get('nameInput'),
      phone: formData.get('phoneInput')
    }

    window.ajax.request({
      url: BOOK_FORM_ENDPOINT,
      method: 'POST',
      requestData: booking,
      onLoad: function() {
        var response = JSON.parse(this.response);
        var isFormValid = response.isFormValid;
        var serverErrorMessage = response.errorMessage;

        if (!isFormValid) {
          var message = "";

          if (serverErrorMessage !== null) {
            alert('Ошибка при отправлении. Возможно, Вы ввели неверные данные.');
          } else {
            for (var errorField in response.errors) {
              var errorFieldText = response.errors[errorField].required;
              message += errorFieldText + '\n';
            }

            alert(message);
          }
        } else {
          alert('Спасибо! Ваша заявка успешно отправлена');
          bookFormContainer.toggle();
        }
      },
      onError: function(error) {
        alert('Ошибка при отправлении. Попробуйте позже.');
        console.error(error);
      }
    })
  }.bind(this);

  this.init = function () {
    setTodayDate();
    this.form.addEventListener('submit', this.send);
  }

  var setTodayDate = function() {
    var dateInput = this.form.querySelector('#dateInput');

    window.today = new Date().toISOString().substr(0, 10);
    dateInput.value = window.today;
    dateInput.min = window.today;
  }.bind(this);

  this.init();
}
var bookingForm = new BookingForm();
