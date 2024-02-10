<section class="edit-ava-modal-main">
	<header>
		<h5 class="title">Отправка сообщения</h5>
	</header>
	<form action="edit-ava_submit" method="get" class="__cont">
		<div id="add-post" class="add-ms">
			<textarea name="add" class="add but_none" maxlength="300" placeholder="Напиши чего-нибудь для записи" style="overflow: hidden; word-wrap: break-word; resize: none; height: 24px;"></textarea>
			<!--<textarea onfocus="Wall.showEditPost()" -->
			<!--
		-->
			<div class="bot" id="bot">
				<a href="#add" onclick="add_comment({parms});return false;" class="but but_block">Отправить</a>
				<a href="#" class="attach">Прикрепить файл</a>
			</div>
		</div>
		
	</form>
</section>