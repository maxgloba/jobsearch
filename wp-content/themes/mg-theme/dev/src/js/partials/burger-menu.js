(function(){

  const burgerButton = document.querySelector('.main-header .burger')
  burgerButton.addEventListener('click', e => {
    e.preventDefault()
    burgerButton.classList.toggle('burger-active')
    const menuActive = document.querySelector('.main-header__nav')
    menuActive.classList.toggle('main-header__nav-active')
    if(menuActive.classList.contains('main-header__nav-active burger-active')){
      document.documentElement.style.overflow = 'hidden'
      document.documentElement.style.height = '100vh';
      document.documentElement.style.width = '100vw';
    } else {
      document.documentElement.style.overflow = 'auto'
      document.documentElement.style.height = 'auto';
      document.documentElement.style.width = 'auto';
    }
  })

})();