;(function () {

  function Ajax() {
    this.requestData = null;

    this.request = function (params) {
      if (params.requestData === undefined) {
        params.requestData = null;
      }

      var request = new XMLHttpRequest();

      request.addEventListener('load', params.onLoad);
      request.addEventListener('error', params.onError);

      this.requestData = params.requestData;

      sendRequest(request, params.method, params.url);
    };

    var sendRequest = function(request, method, url) {
      console.log(this.requestData);
      if (method === 'GET') {
        url = buildUrl(url, this.requestData);
      }

      request.open(method, url);
      handleMethod(request, method);

      console.log(this.requestData);

      request.send(this.requestData);
    }.bind(this);

    function buildUrl(url, requestData) {
      if (requestData === null) {
        return url;
      }
      if (url.indexOf('?') > -1) {
        return url;
      }

      var requestDataString = convertRequestDataToString(requestData);
      url = url + requestDataString;

      return url;
    }

    function handleMethod(request, method) {
      if (method === 'GET') {}

      if (method === 'POST') {
        handlePost(request);
      }
    }

    function handlePost(request) {
      if (handleJsonIfJson(request)) {
        return;
      }

      handleStringIfString(request);
    }

    function handleJsonIfJson(request) {
      var isJsonHandled = false;
      try {
        JSON.parse(requestData);
        isJsonHandled = true;
      } catch (exception) {
        return isJsonHandled;
      }

      request.setRequestHeader("Content-Type", "application/json");

      return isJsonHandled;
    }

    var handleStringIfString = function(request) {
      request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      var string = '';
      for (var prop in this.requestData) {
        string += prop + '=' + this.requestData[prop] + '&';
      }

      this.requestData = string;
    }.bind(this);

    function convertRequestDataToString(requestData) {
      var string = '?';
      for (var prop in requestData) {
        string += prop + '=' + requestData[prop] + '&';
      }

      return string;
    }
  }

  window.ajax = new Ajax();

})();

var ADD_BOOKING_PAGE_URL = 'http://localhost/panda_studio/add';
if (window.location.href === ADD_BOOKING_PAGE_URL) {
  var form = document.querySelector('form');

  form.addEventListener('submit', function(evt) {
    evt.preventDefault();

    var formValues = new FormData(this);
    var booking = {
      date: formValues.get('date'),
      time: formValues.get('time'),
      name: formValues.get('name'),
      phone: formValues.get('phone')
    };

    window.ajax.request({
      url: ADD_BOOKING_PAGE_URL,
      method: 'POST',
      onLoad: function() {
        var response = JSON.parse(this.response);
        var isFormValid = response.isFormValid;

        if (!isFormValid) {
          var message = "";

          for (var errorField in response.errors) {
            var errorFieldText = response.errors[errorField].required;
            message += errorFieldText + '\n';
          }

          alert(message);
        } else {
          alert('Спасибо! Ваша заявка успешно отправлена');
        }
      },
      onError: function() {
        console.error('Error requesting data from server. Try again later');
        alert('Произошла ошибка, попробуйте позже');
      },
      requestData: booking
    });
  });
}
