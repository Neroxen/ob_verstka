/*
**	Author: Vladimir Shevchenko
**	URI: http://www.howtomake.com.ua/2012/stilizaciya-vsex-elementov-form-s-pomoshhyu-css-i-jquery.html 
*/

$(document).ready(function(){
	//Reset form
	// Вешаем событие клика по кнопке сброса
	$('.reset-form').click(function() {
		// Устанавливаем пустое значение в атрибут value для всех инпутов
		$('form').find('input').val('');
		
		// Убираем атрибут checked и класс активности у чекбоксов
		$('form').find('input:checked').removeAttr('checked');
		$('form').find('.check').removeClass('active');
		
		// Убираем класс активности у радио переключателей
		$('form').find('.radio').removeClass('active');
		
		// Устанавливаем пустое значение в атрибут value для всех textarea
		$('form').find('textarea').val('');
		
		// И для открывалки селекта возвращаем начальное значение
		$('form').find('.slct').html('Выберите Ваше лучшее качество:');
	});
	
	// = Load
	// отслеживаем изменение инпута file
	$('#file').change(function(){
		// Если файл прикрепили то заносим значение value в переменную
		var fileResult = $(this).val();
		// И дальше передаем значение в инпут который под загрузчиком
		$(this).parent().find('.fileLoad').find('input').val(fileResult);
	});

	/* Добавляем новый класс кнопке если инпут файл получил фокус */
	$('#file').hover(function(){
		$(this).parent().find('button').addClass('button-hover');
	}, function(){
		$(this).parent().find('button').removeClass('button-hover');
	});
	
	// Checkbox
	// Отслеживаем событие клика по диву с классом check
	$('form').find('.check').click(function(){
		// Пишем условие: если вложенный в див чекбокс отмечен
		if( $(this).find('input').is(':checked') ) {
			// то снимаем активность с дива
			$(this).removeClass('active');
			// и удаляем атрибут checked (делаем чекбокс не отмеченным)
			$(this).find('input').removeAttr('checked');
		
		// если же чекбокс не отмечен, то
		} else {
			// добавляем класс активности диву
			$(this).addClass('active');
			// добавляем атрибут checked чекбоксу
			$(this).find('input').attr('checked', true);
		}
	});
		
	// Select
	$('.slct').click(function(){
		/* Заносим выпадающий список в переменную */
		var dropBlock = $(this).parent().find('.drop');
		
		var slct = $(this);
		/* Делаем проверку: Если выпадающий блок скрыт то делаем его видимым*/
		if( dropBlock.is(':hidden') ) {
			dropBlock.slideDown();
			
			/* Выделяем ссылку открывающую select */
			$(this).addClass('active');
			
			/* Работаем с событием клика по элементам выпадающего списка */
			slct.next('.drop').find('li').click(function(){
				
				/* Заносим в переменную HTML код элемента 
				списка по которому кликнули */
				var selectResult = $(this).html();
				
				var selectResultId = $(this).attr('id');
				
				/* Находим наш скрытый инпут и передаем в него 
				значение из переменной selectResult */
				$(this).parent().parent().find('input').val(selectResultId + '|' + selectResult);
				//alert(selectResultId);
				/* Передаем значение переменной selectResult в ссылку которая 
				открывает наш выпадающий список и удаляем активность */
				slct.removeClass('active').html(selectResult);
				
				/* Скрываем выпадающий блок */
				dropBlock.slideUp();
			});
			
		/* Продолжаем проверку: Если выпадающий блок не скрыт то скрываем его */
		} else {
			$(this).removeClass('active');
			dropBlock.slideUp();
		}
		
		/* Предотвращаем обычное поведение ссылки при клике */
		return false;
	});	
		
	// RadioButton
	$('.radioblock').find('.radio').click(function(){
		var valueRadio = $(this).html();
		$(this).parent().find('.radio').removeClass('active');
		$(this).addClass('active');
		$(this).parent().find('input').val(valueRadio);
	});
		
});