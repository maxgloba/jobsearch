(function(){

  const burgerButton = document.querySelector('.main-header__burger')
  burgerButton.addEventListener('click', e => {
    e.preventDefault()
    e.target.classList.toggle('active');
    document.querySelector('.main-header__nav').classList.toggle('active');
    console.log(111);
  })

})();