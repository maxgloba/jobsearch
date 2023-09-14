(function(){

  const errorLogo = document.querySelectorAll('.page404__logo [fill="#242424"]')
  console.log(errorLogo)
  errorLogo.forEach(el => {
    el.setAttribute('fill', 'var(--white)')
  })

})();