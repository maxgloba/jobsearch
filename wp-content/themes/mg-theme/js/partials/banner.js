(function(){

  const headerNav = document.querySelectorAll('.banner button')
  headerNav.forEach(el => {
    el.addEventListener('click', e => {
      e.preventDefault()
      document.querySelector('.contacts').scrollIntoView({block: "start", behavior: "smooth"});
    })
  })

})();