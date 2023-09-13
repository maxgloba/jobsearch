(function(){

  const footerLogo = document.querySelectorAll('.main-footer__logo [fill="#242424"]')
  footerLogo.forEach(el => {
    el.setAttribute('fill', 'var(--white)')
  })

})();