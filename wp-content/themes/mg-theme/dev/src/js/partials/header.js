(function(){

  const headerNav = document.querySelectorAll('.main-header button')
  headerNav.forEach(el => {
    el.addEventListener('click', e => {
      e.preventDefault()
      document.querySelector(`.${e.target.dataset.section}`).scrollIntoView({block: "start", behavior: "smooth"});
      document.querySelector('.main-header .burger').classList.remove('burger-active')
      document.querySelector('.main-header__nav').classList.remove('main-header__nav-active')
      document.documentElement.style.overflow = 'auto'
    })
  })

})();