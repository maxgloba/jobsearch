(function(){

const openModal = document.querySelectorAll('[data-modal]')
openModal.forEach(el => {
  el.addEventListener('click', e => {
    e.preventDefault()
    document.querySelector('.modal').classList.toggle('modal-active')
    document.documentElement.style.overflow = 'hidden'
    document.documentElement.style.height = '100vh';
    document.documentElement.style.width = '100vw';
  })
})

const closeModal = document.querySelector('.modal__close')
closeModal.addEventListener('click', e => {
  document.querySelector('.modal').classList.remove('modal-active')
  e.preventDefault()
  document.documentElement.style.overflow = 'auto'
  document.documentElement.style.height = 'auto';
  document.documentElement.style.width = 'auto';
})

})();