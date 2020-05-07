//  Verifica se o menu está ativo 
//  E muda alguns elementos para position fixed
var body = document.querySelector('body')
var chec = document.querySelector('#chec')
var burger = document.querySelector('.burger')
var menu = document.querySelector('.menu')
var planosMobile = document.querySelector('.planos-mobile')

chec.addEventListener('click',function() {
    if (chec.checked == true) {
        body.style.overflow = "hidden"
        menu.classList.add('menu-open')
        burger.classList.add('burger-x')
        planosMobile.addEventListener('click',function() {
            menu.classList.remove('menu-open')
            body.style.overflow = "visible"
            burger.classList.remove('burger-x')
            chec.checked = false
        })
    } else {
        body.style.overflow = "visible"
        menu.classList.remove('menu-open')
        burger.classList.remove('burger-x')
    }
  })
  
//----------------------------------------------------------
// Identificar o clique no menu
// Verificar o item que foi clicado e fazer referência com o alvo
// Verificar a distância entre o alvo e o topo
// Animar o scroll até o alvo

// Scroll suave para link interno
var planosAncora = document.querySelector('.header-welcome a')
planosAncora.addEventListener('click',function() {
	var id = '#planos'
			menuHeight = $('nav').innerHeight(),
			targetOffset = $(id).offset().top;
	$('html, body').animate({
		scrollTop: targetOffset - menuHeight
	}, 500);
})
var planosMobile = document.querySelector('.planos-mobile')
planosMobile.addEventListener('click',function() {
	var id = '#planos'
			menuHeight = $('nav').innerHeight(),
			targetOffset = $(id).offset().top;
	$('html, body').animate({
		scrollTop: targetOffset - menuHeight
	}, 500);
})
//-----------------------------------------------------------