var deleteButtons = document.querySelectorAll('.booking__delete');

deleteButtons.forEach(function(button) {
  button.addEventListener('click', handleDeleteBooking);
});

function handleDeleteBooking() {
  var confirmed = confirm('Вы уверены, что хотите удалить эту бронь?');

  if (confirmed) {
    deleteBooking(this.dataset.id, this);
  }
}

function deleteBooking(id, button) {
  window.ajax.request({
    url: DELETE_BOOKING_ENDPOINT,
    method: 'POST',
    requestData: {id: id},
    onLoad: function() {
      var response = JSON.parse(this.response);
      var isDeleted = response.isDeleted;
      var serverErrorMessage = response.errorMessage;

      if (isDeleted) {
        var booking = button.parentElement;
        booking.remove();
        alert('Бронь успешно удалена.');
      } else {
        alert('Возникла ошибка при удалении брони.');  
      }
    },
    onError: function(error) {
      alert('Возникла ошибка при удалении брони.');
      console.error(error);
    }
  });
}
