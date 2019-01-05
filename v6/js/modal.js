var modal = document.getElementById('modal');
var modalCloseButton = document.getElementById('modal-close-button');
var modalImage = document.getElementById('modal-image');

if (modalImage != null) {
  modalImage.addEventListener('click', modalOpen);
  modalCloseButton.addEventListener('click', modalClose);
}

function modalOpen() {
  modal.style.display = 'flex';
}

function modalClose() {
  modal.style.display = 'none';
}