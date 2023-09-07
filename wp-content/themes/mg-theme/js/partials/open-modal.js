(function(){

const openModal = document.querySelectorAll('.openmodal')
openModal.forEach(el => {
  el.addEventListener('click', e => {
    e.preventDefault()
    document.querySelector('.modal').classList.add('modal-active')
    document.documentElement.style.overflow = 'hidden'
    document.documentElement.style.height = '100vh';
    document.documentElement.style.width = '100vw';
  })
})

})();