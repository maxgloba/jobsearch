(function(){
  const burgerButton = document.querySelector('.main-header .burger-menu')
  burgerButton.addEventListener('click', e => {
    e.preventDefault()
    const menuActive = document.querySelector('.main-header__nav')
    menuActive.classList.toggle('nav-active')
    if(menuActive.classList.contains('nav-active')){
      document.documentElement.style.overflow = 'hidden'
      document.documentElement.style.height = '100vh';
      document.documentElement.style.width = '100vw';
    } else {
      document.documentElement.style.overflow = 'auto'
      document.documentElement.style.height = 'auto';
      document.documentElement.style.width = 'auto';
    }
    console.log('open')
  })
})();