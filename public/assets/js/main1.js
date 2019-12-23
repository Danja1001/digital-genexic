$(window).on('load', function () {
  //   var $preloader = $('.preloader'),
  //       $spinner   = $preloader.find('.cssload-loader');
  //       $spinner.fadeOut();
  //       $.when($preloader.delay(1000).fadeOut('slow')).done(function() {
		// 	mapInitDropIcon = true;
		// });


    // $('.text-transition').css({
    //     "opacity" : "1",
    //     "transition" : "opacity 5s ease-in-out"
    // });
    // $('.header-search-form input').css({
    //     "width" : "300px"
    // });
});


var mapInitDropIcon = false;
// // 
// jQuery(function($) {
// 	                                           //PORTFOLIO
// 		$portfolio_selectors = $('.portfolio-filter >li>a');
// 		if($portfolio_selectors!='undefined'){
// 			$portfolio = $('.portfolio-items');
// 			$portfolio.isotope({
// 				itemSelector : 'li',
// 				layoutMode : 'fitRows'
// 			});
// 			$portfolio_selectors.on('click', function(){
// 				$portfolio_selectors.removeClass('active');
// 				$(this).addClass('active');
// 				var selector = $(this).attr('data-filter');
// 				$portfolio.isotope({ filter: selector });
// 				return false;
// 			});
// 		}
//         setTimeout(function() {
//              $portfolio.isotope({ filter: '*' });
//         }, 1000);
// });

// 	                                               //CONTACT FORM
// $(document).ready(function() { 
//     $('#go1, #go2, #go3').click( function(event){ 
//         event.preventDefault(); 
//         $('#overlay').fadeIn(400, 
//             function(){ 
//                 $('#modal_form') 
//                     .css('display', 'block') 
//                     .animate({opacity: 1, top: '10%'}, 200); 
//         });
//     });
    
//     $('#modal_close, #overlay').click( function(){ 
//         $('#modal_form')
//             .animate({opacity: 0, top: '45%'}, 200,  
//                 function(){ 
//                     $(this).css('display', 'none'); 
//                     $('#overlay').fadeOut(400); 
//                 }
//             );
//     });
// });
// $('h2').on("touchstart",function (){
// });
//                                          // TITLE ANIMATION
// $(window).load(function() {
//     setTimeout(function() {
//         $('.fly-in').removeClass('hidden');
//     }, 700);
// });

//                                          // MORE TEXT

//     $('#buttonOpen').on('click',function(){
//         if($('html,body').find('.more-content').css("height") =="85px")
//             $('html,body').find('.more-content').css({height:"100%"},3000)
//         else
//             $('html,body').find('.more-content').css({height:"85px"},3000)

//     });



// $(".hover").mouseleave(
//   function () {
//     $(this).addClass("hover");
//   }
// );

// /*MOBILE-NAV*/


//     $('.js-toggle-menu').click(function(e){
//       e.preventDefault();
//       $('.mobile-header-nav').slideToggle();
//       $(this).toggleClass('open');
//     });


    
//     $(".card").mouseover(
//       function () {
//         $(this).find('.card-body').css("display", "block");
//       }
//     );
//     $(".card").mouseleave(
//       function () {
//         $(this).find('.card-body').css("display", "none");
//       }
//     );

//                                             // hoverBlock - MAIN PAGE

// function hoverBlock(e){
//     $("." +e).mouseover(
//       function () {
//         $("#" +e).css("display", "block");
//       }
//     );
//     $("." +e).mouseleave(
//       function () {
//         $("#" +e).css("display", "none");
//       }
//     );
// }

// hoverBlock("coding-and-programming");
// hoverBlock("user-interface-animation");
// hoverBlock("launchpt");
// hoverBlock("testing");
// hoverBlock("design-concept");
// hoverBlock("user-flows-and-wireframes");
// hoverBlock("project-analytics-and-research");
// hoverBlock("project-contract");
// hoverBlock("cost-estimation");
// hoverBlock("interview");