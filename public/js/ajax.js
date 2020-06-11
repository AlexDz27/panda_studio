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
      if (method === 'GET') {
        url = buildUrl(url, this.requestData);
      }

      request.open(method, url);
      handleMethod(request, method);

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
