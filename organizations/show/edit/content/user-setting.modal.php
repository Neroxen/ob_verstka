<style>
	.modal {background-color:#fff;}
</style>
<div class="modal-edit-right">
	<hgroup class="__head">
		<h1>Редактирование</h1>
		<h2>Dealenx</h2>
		<a href="#" class="but">Сохранить</a>
	</hgroup>
	<div class="__categories">
		<aside class="__cat">
			<input type="checkbox" class="__mcheckbox" id="mer-admin" name="admin" ><label class="mlabel" for="mer-admin">Администратор</label>
		</aside>
		<aside class="__cat">
			<input type="checkbox" class="__mcheckbox" id="mer-moderator" name="moderator"><label class="mlabel" for="mer-moderator">Модератор</label>
		</aside>
		<aside class="__cat">
			<input type="checkbox" class="__mcheckbox" id="mer-strimer" name="" ><label class="mlabel" for="mer-strimer">Стример</label>
		</aside>
		<aside class="__cat">
			<input type="checkbox" class="__mcheckbox" id="mer-manager" name="" {streamer_checked}><label class="mlabel" for="mer-manager">Менеджер</label>
			<input type="checkbox" class="__csgo" id="man-csgo-1"  name="" /><label class="labelcs" for="man-csgo-1">CS:GO</label>
			<input type="checkbox" class="__csgo" id="man-dota2-1"  name="" /><label class="labelcs" for="man-dota2-1">Dota 2</label>
		</aside>
		<aside class="__cat">
			<input type="checkbox" class="__mcheckbox" id="mer-player" name="streamer" ><label class="mlabel" for="mer-player">Игрок</label>
			<input type="checkbox" class="__csgo" id="man-csgo-2"  name="" /><label class="labelcs" for="man-csgo-2">CS:GO</label>
			<input type="checkbox" class="__csgo" id="man-dota2-2"  name="" /><label class="labelcs" for="man-dota2-2">Dota 2</label>
		</aside>
		<aside class="__cat">
			<input type="checkbox" class="__mcheckbox" id="mer-ban" name="banned" ><label class="mlabel banlabel" for="mer-ban">Добавить в черный список</label>
		</aside>
		<div class="ban-full">
			<select name="time_banned" class="sel-set">
				<option value="1">На 1 час</option>
				<option value="2">На 1 сутки</option>
				<option value="3">На 1 неделю</option>
				<option value="4">На 3 недели</option>
				<option value="5">На 1 месяц</option>
				<option value="6">На 1 год</option>
				<option value="7" selected="">На все время</option>
			</select>
			<h1>Срок:</h1>
			<select name="type_banned" class="sel-set">
				<option value="3">хз</option>
				<option value="1">Спам</option>
				<option value="0" selected="">Оскорбление</option>
			</select>
			<h1>Причина:</h1>
		</div>
		
	</div>
	
</div>