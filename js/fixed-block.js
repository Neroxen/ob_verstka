    $(function() {
          var fixblock_height = $('.fixed-block').outerHeight(); // определяем высоты фиксированного блока
          var fixblock_pos = $('.fixed-block').position().top; ; // определяем его первоначальное положение
	
          $("body").scroll(function(){
               if ($("body").scrollTop() > fixblock_pos){ // Если страницу прокрутили дальше, чем находится наш блок
                    $('.fixed-block').css({'position': 'fixed', 'top':'0px', 'margin-left':'0px', 'width':'215px'}).stop().animate({Top: 0}); // То мы этот блок фиксируем и отображаем сверху.
               }else{  // Если же позиция скрола меньше (выше), чем наш блок
                    $('.fixed-block').css({'position': 'static'}); // то возвращаем все назад
               }
          });
     });      
 