(function(){

const clickPopup = document.querySelectorAll('.projects projects__item')
clickPopup.forEach(el => {
  el.addEventListener('click', e => {
    e.preventDefault()
    document.querySelector('.popup').classList.add('popup-active')
  })
})

})();