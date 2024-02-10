<div class="tab-pane active" id="posts">
	<!--
		<section class="home-info">
			<header>
				<h4>Основная информация</h4>
			</header>
			<ul>
				<li><h5 class="">Полное имя</h5><span class="value"></span></li>
				<li><h5 class="">Страна проживания</h5><span class="value"></span></li>
				<li><h5 class="">Город проживания</h5><span class="value"></span></li>
				<li><h5 class="">Дата рождения</h5><span class="value">[xfvalue_birthday]</span></li>
				<li><h5 class="">Регистрация</h5><span class="value">23 апреля 2014 22:14</span></li>
				<li><h5 class="">Web-сайт</h5><span class="value"></span>
				<li><h5 class="">Регистрация</h5><span class="value">23 апреля 2014 22:14</span></li>
			</ul>
			<footer><a href="#"><h6>Показать больше информации</h6></a></footer>
		</section>	
		<section class="friends_and_action-profile">
			{dofriends}
			[is_user]<a href="#" class="b-gr" onclick="fpm_to_user('Dealenx');return false;" title="">Написать сообщение</a>[/is_user]
			[is_user]<a href="/ticket_create/user/Dealenx" class="b-gr" title="">Жалоба на игрока</a>[/is_user]
			<div class="friends">
				<header><h5>Друзья игрока</h5></header>
				<div class="short-friend"> 
					{friends}
				</div>
				<footer><a href="#" onclick="msg.panel();return false;"><h6>Показать всех друзей</h6></a></footer>
			</div>

		</section>	 
		-->
		<div class="posts" style="margin-top:0px;">
	<header>
		<h5 class="title-posts">Записи</h5>
		<h5 class="number-posts">Всего 10 записей</h5>
	</header>
</div>	
<div id="add-post" class="add-post">
	<img src="http://cs306801.vk.me/v306801193/94f2/Sr4dqOSs4hE.jpg" class="ava-wrote" alt="">
	<textarea name="add" class="add but_none" maxlength="300" placeholder="Напиши чего-нибудь для записи" style="overflow: hidden; word-wrap: break-word; resize: none; height: 24px;"></textarea>
	<!--<textarea onfocus="Wall.showEditPost()" -->
	<!--
	
-->
	<div class="bot" id="bot">
		<a href="#add" onclick="add_comment({parms});return false;" class="but but_block">Отправить</a>
		<a href="#" class="attach">Прикрепить файл</a>
		<a onclick="msg.templ('post-comment/addpoll.modal');return false;" class="poll-add-button"><i></i></a>
	</div>
</div>

<section class="show-post">
	<header class="block-head">
		<span class="type-post">Запись</span>
		<time class="date-tourney">Добавлена вчера в <b>16:42</b></time>
	</header>
	<article class="block-post just-block">
	
		<img src="http://cs306801.vk.me/v306801193/94f2/Sr4dqOSs4hE.jpg" class="ava" alt="">
		
		<div class="cont">
			<div class="top">
					<a href="#nick" class="nick">Dealenx</a>
					<a href="#" class="delete-post"><i></i></a>
			</div><!-- top-->
			<div class="txt">
				Неплохо сыграл сегодня
				
				<a href="/feed/img.modal.php" rel="modal:open" id="manual-ajax">
					<img src="https://pp.vk.me/c621130/v621130530/106f9/uGbjbHLV9Qw.jpg" />
				</a>
				
			</div>
			<aside class="poll non-voted">
			
				<ul>
					<hgroup>
						<h1>Вопрос:</h1>
						<h2>Рождение Путина?</h2>
					</hgroup>
				    <li>
					    <div>
					    	<aside class="txt">
						    	<input id="option1" type="radio" name="post" value="">
					    		<label for="option1"> <span class="__procent">76%</span> 
						    	<span class="__num">1101231</span> Сегодня</label>
					    	<span class="second-line" style="width:76%;"></span>
					    	</aside>
					    </div>
				    </li>
				    <li>
					    <div>
					    	<aside class="txt">
						    	<input id="option2" type="radio" name="post" value="">
					    		<label for="option2"> <span class="__procent">76%</span> 
						    	<span class="__num">1101231</span>Завтра </label>
					    	<span class="second-line" style="width:76%;"></span>
					    	</aside>
					    </div>
				    </li>
				</ul>
				<a href="#" class="but">Проголосовать</a>
			
			</aside>
			<footer>
				<a href="/feed/post.modal.php" rel="modal:open" id="manual-ajax" class="all-show">Показать полностью</a>
				<!-- лайк -->
					<a href="#" class="laika">
						<span>13</span>
						<i></i>
					</a>
					<!-- /лайк -->
				<a href="#comment" class="post">Комментировать</a>

			</footer>

		</div><!-- cont-->
	</article><!-- block-post-->
</section><!-- show-post-->
<section class="show-post">
	<header class="block-head">
		<span class="type-post">Запись</span>
		<time class="date-tourney">Добавлена вчера в <b>16:42</b></time>
	</header>
	<article class="block-post just-block">
	
		<img src="http://cs306801.vk.me/v306801193/94f2/Sr4dqOSs4hE.jpg" class="ava" alt="">
		
		<div class="cont">
			<div class="top">
					<a href="#nick" class="nick">Dealenx</a>
					<a href="#" class="delete-post"><i></i></a>
					<a href="#" class="edit-post"><i></i></a>
			</div><!-- top-->
			<div class="txt">
				Неплохо сыграл сегодня
				<!--
				<img style="width:97%;" src="http://cloud-4.steampowered.com/ugc/595883045965729108/800E09D79E6B3D2D1A3D533916E1B71794C18B9F/" />
				-->
			</div>
			<aside class="poll voted">
			<form name="" method="" action="">
				<ul>
					<hgroup>
						<h1>Опрос:</h1>
						<h2>Рождение Путина?</h2>
					</hgroup>
				    <li>
					    <div>
					    	<aside class="txt">
						    	
						    	<input id="option-1" type="radio" name="post" value="">
					    		<label for="option-1"> <span class="__procent">24%</span> 
						    	<span class="__num">3</span> Сегодня</label>
					    	<span class="second-line" style="width:24%;"></span>
					    	</aside>
					    </div>
				    </li>
				   <li>
					    <div>
					    	<aside class="txt">
						    	
						    	<input id="option-2" type="radio" name="post" value="">
					    		<label for="option-2"> <span class="__procent">76%</span> 
						    	<span class="__num">9</span> Завтра</label>
					    	<span class="second-line" style="width:76%;"></span>
					    	</aside>
					    </div>
				    </li>
				</ul>
			</form>
			</aside>
			<footer>
				<a href="#" class="all-show">Показать полностью</a>
				<!-- лайк -->
					<a href="#" class="laika">
						<span>13</span>
						<i></i>
					</a>
					<!-- /лайк -->
				<a href="#comment" class="post">Комментировать</a>

			</footer>

		</div><!-- cont-->
	</article><!-- block-post-->
	<div class="main-comments">
		<a href="#" class="link-show-all-comments">
			<h5 class="show-all-comments">Показать все комментарии</h5>
		</a>

		<article class="block-comment">
			<img src="http://cs306801.vk.me/v306801193/94f2/Sr4dqOSs4hE.jpg" class="ava" alt="">
			<div class="cont">
				<div class="top">
					<a href="#nick" class="nick">Dekry</a>
					<a href="#" class="delete-comment"></a>
					<time class="__time" datetime="2014-20-07">Сегодня в 19:34</time>

				</div><!-- top-->
				<p class="txt">
					<b>dealenx,</b> пфф ,сыграл как нубяра:()
				</p>
				<footer>
					<a href="#comment" class="post">Ответить</a>
					<a href="#comment" class="edit-comment">Изменить</a>
					<!-- лайк -->
					<a href="#" class="laika">
						<span>13</span>
						<i></i>
					</a>
					<!-- /лайк -->
				</footer>
			</div><!-- cont-->
		</article><!-- block-post-->
		<article class="block-comment">
			<img src="http://cs306801.vk.me/v306801193/94f2/Sr4dqOSs4hE.jpg" class="ava" alt="">
			<div class="cont">
				<div class="top">
					<a href="#nick" class="nick">Dekry</a>
					<a href="#" class="delete-comment"></a>
					<time class="__time" datetime="2014-20-07">Сегодня в 19:34</time>

				</div><!-- top-->
				<p class="txt">
					<b>Derky,</b> Есть такое дело!
				</p>
				<footer>
					<a href="#comment" class="post">Ответить</a>
					<a href="#comment" class="edit-comment">Изменить</a>
					<!-- активный лайк -->
					<a href="#" class="laika active">
						<span>14</span>
						<i></i>
					</a>
					<!-- /активный лайк -->
				</footer>
			</div><!-- cont-->
		</article><!-- block-post-->
		<div id="add-comment" class="add-comment">
			<textarea name="add" class="add but_none" maxlength="300" placeholder="Напиши чего-нибудь для комментирования" style="overflow: hidden; word-wrap: break-word; resize: none; height: 16px;"></textarea>
			<!--<textarea onfocus="Wall.showEditPost()" -->
			<div class="bot" style="display:none;">
				<a href="#add" onclick="add_comment({parms});return false;" class="but but_block">Добавить</a>
				<a href="#" class="attach">Прикрепить файл</a>
			</div>
		</div>
	</div>
</section><!-- show-post-->

<a href="#" class="link-show-all-posts">
	<h5 class="show-all-posts">
		Показать все Записи
	</h5>
</a>	

	</div>