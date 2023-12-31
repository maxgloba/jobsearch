(function(){

  const burgerButton = document.querySelector('.main-header__burger')
  burgerButton.addEventListener('click', e => {
    e.preventDefault()
    e.target.classList.toggle('active')
    document.querySelector('.main-header__nav').classList.toggle('active')
  })

  const headerNav = document.querySelectorAll('.main-header__nav button')
  headerNav.forEach(el => {
    el.addEventListener('click', e => {
      e.preventDefault()
      document.querySelector('.main-header__nav').classList.remove('active')
      document.querySelector('.main-header__burger').classList.remove('active')
    })
  })

})();