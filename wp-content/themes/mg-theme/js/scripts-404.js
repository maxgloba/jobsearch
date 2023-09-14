(function(){

  const errorLogo = document.querySelectorAll('.page404__logo [fill="#242424"]')
  errorLogo.forEach(el => {
    el.setAttribute('fill', 'var(--white)')
  })

  const footerLogo = document.querySelectorAll('.main-footer__logo [fill="#242424"]')
  footerLogo.forEach(el => {
    el.setAttribute('fill', 'var(--white)')
  })

})();