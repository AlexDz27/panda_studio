var deleteButtons = document.querySelectorAll('.booking__delete');

deleteButtons.forEach(function(button) {
  button.addEventListener('click', handleDeleteBooking);
});

function handleDeleteBooking() {
  confirm('Вы уверены, что хотите удалить эту бронь?');
  console.log(this.dataset.id);
}

function deleteBooking(id) {
  // todo: server code
}
