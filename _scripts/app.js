//  Verifica se o menu está ativo 
//  E muda alguns elementos para position fixed
var body = document.querySelector('body')
var chec = document.querySelector('#chec')
var burger = document.querySelector('.burger')
var menu = document.querySelector('.menu')

chec.addEventListener('click',function() {
    if (chec.checked == true) {
        body.style.overflow = "hidden"
        menu.classList.add('menu-open')
        burger.classList.add('burger-x')
    } else {
        body.style.overflow = "visible"
        menu.classList.remove('menu-open')
        burger.classList.remove('burger-x')
    }
  })
//----------------------------------------------------------