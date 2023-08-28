(function(){

  const headerNav = document.querySelectorAll('.main-header button')
  headerNav.forEach(el => {
    el.addEventListener('click', e => {
      e.preventDefault()
      document.querySelector(`.${e.target.dataset.section}`).scrollIntoView({block: "start", behavior: "smooth"});
    })
  })

})();