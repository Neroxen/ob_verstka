var root = '/';

/* plugins */
(function($) {
    $.fn.m_anim = function(fade){
		if ( fade == 1 ) $(this).show().animate({opacity: 1}, 1500).fadeOut(10500);
		else if ( fade == 3 ) $(this).animate({opacity: 1}, 1500).fadeOut(3500);
		else $(this).show().animate({opacity: 1}, 1500);
    }
})(jQuery);
/* plugins end */
/* docload */
var dle_act_lang   = ["Да", "Нет", "Ввод", "Отмена", "Загрузка изображений и файлов на сервер"];
var cal_language   = {en:{months:['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],dayOfWeek:["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"]}};

/* docload end*/

/* Resizer */
function alertSize() {
	var myWidth = 0, myHeight = 0;
	if( typeof( window.innerWidth ) == 'number' ) {
		myHeight = window.innerHeight;
	} else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
		myHeight = document.documentElement.clientHeight;
	} else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
		myHeight = document.body.clientHeight;
	}
	return myHeight;
}

function ContentResize () {
	Edited = $('.left_content').length ? $('.left_content') : $('#gamemod');
	
	if ( Edited.length != 0 ) {
		Edited.removeAttr('style');
		
		HeightToLeft = Edited.offset().top + 60;
		HeightToFooter = $('.footer').offset().top;
		WindowHeight = alertSize(); 
		
		/*
		$('#admin').empty();
		$('#admin').html(
			'<br>window_height : ' + WindowHeight + 
			'<br>HeightToLeft : ' + HeightToLeft +
			'<br>HeightToFooter : ' + HeightToFooter +
			'<br>result : ' + result +
			'<br>---'
		);*/
		
		if ( HeightToFooter <= WindowHeight ) Edited.height( WindowHeight - HeightToLeft );
	}
}
	
/* Resizer End */
	
/* comments */
$(function() {
	
	$.cookie('url_hash', window.location.href);
	
	ContentResize();
		
	if ( window.location.hash != "" ) {
		
		TabLoad = $('a[href="'+ window.location.hash +'"]').length ? $('a[href="'+ window.location.hash +'"]') : $('a[href="'+ window.location.pathname + window.location.hash +'"]')
		
		TabLoad.tab('show');
	
	}
	
	$('.orgs-sostv a').click(function() {
		if ( !$( this ).children('.__hide').hasClass( "hides" ) ) {
			$(this).children('.__hide').html('Показать').addClass('hides');
			$(this).next('.__users').slideUp()
		}
		else {
			$(this).children('.__hide').html('Скрыть').removeClass('hides');
			$(this).next('.__users').slideDown();
		}
		return false;
	});
	
	$('#help_search').change(function(){
		var query = $('#help_search').val();
		
		if ( query.length == 0 || query.length > 2 ) {
			$.post(root+'engine/ajax/gamemod/help.search.php',{text:query},function(d) {
				$('#help_list').html(d);
			});
		}
		else {
			msg.text("Текст слишком короткий",0);
		}
	});
	//msg.avatar('test','http://old-guard.ru/uploads/fotos/foto_1.jpg');
	//msg.text('test',0);
	//msg.panel('qwdq');
	
	$('.post').click(function() {
	
		$('#c_' + $(this).attr('id') + ' .add-comment').show();
		$('#c_' + $(this).attr('id') + ' textarea')
			.focus();
		
		if ( $(this).data('author') !== undefined) {
			$('#c_' + $(this).attr('id') + ' textarea')
				.val($(this).data('author') + ', ')
				.selectionStart = $(this).data('author').length;
		}
		
		return false;
	});
	
	$('.add')
		.autosize()
		
		.focus(function() {
			$(this).next('.bot').show();
		})
		
		.focusout(function() {
			if ( $(this).val() == '' || $(this).hasClass('active') ) {
				$(this).next('.bot').hide();
			}
		});
		
});

function subs(id,where,type) {
	ShowLoading('');
	$.get(root+"engine/ajax/gamemod/org.subscribe.php",{"id": id,"where": where,"type": type}, function(data){
		$("#subscribe").replaceWith(data);
		HideLoading('');
	}); 
}

function answer (id) {
	if ( !$('#a_' + id).hasClass('shown') ) {
		$('#a_' + id).slideDown().addClass('shown');
	}
	else {
		$('#a_' + id).slideUp().removeClass('shown');
	}
}

function add_comment(post_id,type,place_id,e) {
	files = $('#afiles').val().toLowerCase();
	type_post = $(e).parent().parent().attr('class');
	text = $(e).parent().prev('textarea').val();
	//alert(text);
	if ( text != '' ) {
		$('.' + type_post + ' textarea').val('');
		$('#file-uploader').find('a').empty();
		if ( type_post == 'add-post' ) com_id = 0;
			else com_id = post_id;
			
		$.post(root+'engine/ajax/ob/comment.add.php',{post_id:post_id,com_id:com_id,type:type,place_id:place_id,text:text,files:files},function(d) {
			if ( type_post != 'add-post' ) $(e).parent().parent().prev('.main-comments').append(d).m_anim(0);
				else $('#upc').prepend(d);
		});
		
	}
	else msg.text('Ошибка');
	return false;
}
function help_search() {
	var query = $('#help_search').val();
	
	if ( query.length > 2 ) {
		$.post(root+'engine/ajax/gamemod/help.search.php',{text:query},function(d) {
			$('#help_list').html(d);
		});
	}
	else {
		msg.text("Текст слишком короткий",0);
	}
}
function update_comment() {
	var place_id = $('#upc').data('place');
	$.post(root+'engine/ajax/ob/comment.update.php',{place_id:place_id},function(d) {
		$('#upc').html(d);
	});
	return false;
}
//setInterval(update_comment, 10000);

/* comments end */

/* board */
var board = {
	action: function(id,act,e) {
		$.post(root+'engine/ajax/gamemod/board.php',{act:act,id:id},function(d) {
			$(e).replaceWith(d);
		});
	}
}
/* board end */
/* stream */
var stream = {
	create: function() {
		$.post(root+'engine/ajax/ob/stream.create.php',{},function(d) {
			msg.panel(d);
		});
	},
	//gclub
	auth: function() {
		var login_twitch = $("#login_twitch").val();
		$.get(root+"engine/modules/stream/ajax_auth_twitch.php",{"login_twitch": login_twitch}, function(data){
				alert(data); window.location.href  = data;
		}); 
	},
	follow: function(id,type) {
		$.get(root+"engine/modules/stream/ajax_follow.php",{"id": id,"type": type}, function(data){
			$("#follow").replaceWith(data);
		}); 
	}
}
/* stream end */
/* ob */
var ob = {
	log: function(val) {
		console.log(val);
	},
	st: function() {
		$('html,body').animate({scrollTop:0}, 'slow');
	}
}
/* ob end */

/* message */
var msg = {
	text: function(content,type) {
		
		if ( type == 0 || type === undefined) viewed = '.information';
		if ( type == 1 ) viewed = '.success';
		
		$('#message ' + viewed).empty();
		
		$('#message ' + viewed).html(content).m_anim(1);
	},
	avatar: function(author,ava) {
		$('#message .message .from a').html(author);
		$('#message .message img').attr('src',ava);
		$('#message .message').m_anim(1);
	},
	pay: function(id) {
		$.post(root + 'engine/ajax/gamemod/shop.pay.php', { id: id }, function(data) {
			$('body').prepend(data);
		});
	},
	panel: function(content,parm) {
		size_update = true;
		if ( content.charAt(0) == '#' ) $('body').prepend('<div id="panel"><div class="panel_exit"></div>'+ $(content).html() +'</div><div id="shadow"></div>');
		else if ( (/[ajax#]/gi).test(content) ) {
			size_update = false;
			content = content.substr(5);
			if ( parm === undefined ) parm = '';
			$.post(root + 'engine/ajax/gamemod/' + content + '.php', { parm: parm }, function(data) {
				$('body').prepend('<div id="panel"><div class="panel_exit"></div>'+ data +'</div><div id="shadow"></div>');
				 msg.panel_size();
			});
		}
		else $('body').prepend('<div id="panel"><div class="panel_exit"></div>'+content+'</div><div id="shadow"></div>');
		
		if ( size_update ) msg.panel_size();
		ob.st();
	},
	templ: function(path,parm) {
		
		if ( parm === undefined ) {
			parm = '';
		}
		
		size_update = true;
		$.post(root + 'engine/ajax/gamemod/template.load.php', { path: path, parm : parm }, function(data) {
			$('body').prepend('<div id="panel"><div class="panel_exit"></div>'+ data +'</div><div id="shadow"></div>');
			msg.panel_size();
		});
		
		ob.st();
	},
	panel_close: function(id) {
		
		if ( typeof(id) === "object" ) {
			$('#shadow').remove();
			$('#panel').remove();
		}
		else $('#' + id).remove();
	},	
	panel_size: function() {
		var p_height = $('#panel').outerHeight(true);
		var heightWindow = $(window).height(true);
		var p_width = $('#panel').outerWidth(true);
		
		if ( p_height < heightWindow ) margin_Top = ( heightWindow - p_height ) / 2;
			else margin_Top = 20;
			
		$('#shadow, .panel_exit')
			.show()
			.click(msg.panel_close);
		
		$('#panel').css({
			"left":  "50%",
			"margin-left":  p_width / ( - 2 ),
			"margin-top": 20
		});
	}
}
/* message end */
/* other */
function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}
/* other end */

