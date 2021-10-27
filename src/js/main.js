$ = jQuery

//Menu Toggle and Burger Animation
const navSlide = () =>{
    const burger = document.querySelector('.burger');
    const menu = document.querySelector('.mobile-menu');

    burger.addEventListener('click', () =>{
        menu.classList.toggle('mobile-active');
            //Burger Animation
        burger.classList.toggle('burger-toggle');
    });
}

navSlide();

//Header Color Change onScroll Effect
// window.onscroll = function() {scrollFunction()};

// function scrollFunction() {
//   if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
//     document.getElementById("header").classList.add('black');
//   } else {
//     document.getElementById("header").classList.remove('black');
//   }
// }
const subMenu = () =>{
  const btn1 = document.querySelector('#menu-item-435');
  const btn2 = document.querySelector('#menu-item-436');
  const sub1 = document.querySelector('#menu-item-435 .sub-menu');
  const sub2 = document.querySelector('#menu-item-436 .sub-menu')

  btn1.addEventListener('click', () =>{
    sub1.classList.toggle('active');
  });

  btn2.addEventListener('click', () => {
    sub2.classList.toggle('active');
  });
}

subMenu();
//FlexSlider Hero Image
$(window).load(function() {
  $(".flexslider").flexslider({
    animation: "slide", 
    slideshow: true,
    touch: true,
    keyboard: true,
    pauseOnHover: true,
  });
});
$(window).load(function() {
  $(".mobileslider").flexslider({
    animation: "slide", 
    slideshow: true,
    touch: true,
    keyboard: true,
    pauseOnHover: true,
    controlNav: false,
    directionNav: false, 
  });
});

//Isotope Gallery 
$(document).ready(function(){
  $('.grid').isotope({
    itemSelector:'.item',
  });
  //filters items of gallery onClick of li selected
  $('.isotope-filter').on('click','li',function(){
    var filterValue = $(this).attr('data-filter');
    $('.grid').isotope({ filter:filterValue });
    $('.isotope-filter li').removeClass('active');
    $(this).addClass('active');
  });
  //filters lightbox to only show corrisponding images based on selected li
  $('.grid').on('arrangeComplete', function(event, filteredItems) {
    $(".item:hidden a").removeClass("mag");
    $(".item:visible a").addClass("mag");
  });
})


//Isopte Gallery Lightbox 

$(document).ready(function() {
	$('.grid').magnificPopup({
		delegate: 'a.mag',
		type: 'image',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
    },
	});
});


