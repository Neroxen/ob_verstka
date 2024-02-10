<script type="text/javascript" id="code">
    var gridster;

    $(function(){

      gridster = $(".gri > .honors-ul").gridster({
          widget_margins: [0, 10],
          widget_base_dimensions: [100, 55],
          max_cols: 8,
          min_cols: 8,
          draggable: {
            handle: '.for-move',
          },
      }).data('gridster');


      $.each(widgets, function(i, widget){
          gridster.add_widget.apply(gridster, widget)
      });

    });
</script>
<style type="text/css" media="screen">
  .[data-sizey="1"] {
    height: 54px;
}
  .[data-sizey="2"] {
    height: 80px;
}
.[data-sizey="3"] {
    height: 50px;
    margin-top: 1px;
}
  .gri .preview-holder {
    border: 2px dashed #4e4e4e;
    border-radius: 6px ;
    background: #c9e7ff !important;
    width: 573px !important;
    margin-top: 1px;
    padding:0 0;
    height: 100px!important;
}
.gri .preview-holder {}
</style>
<div class="tab-pane" id="governance">
		<nav class="filter-games">
			<ul>
				<li><a href="#all" data-toggle="tab"><span>Все<span></a></li>
				<li><a href="#admins" data-toggle="tab"><span>Руководство<span></a></li>
				<li><a href="#streamers" data-toggle="tab"><span>Стримеры<span></a></li>
				<li class="active"><a href="#staff" data-toggle="tab"><span>Составы<span></a></li>
			</ul>
		</nav>
		<div class="tab-content">
			<div class="tab-pane active" id="staff">
			<hgroup class="line-and-title">
				<h1>составы <!--(2)--></h1>
					<a href="#" class="but-big off" style="" title="" disabled>Сохранить</a>
			</hgroup>
				
					        <section class="orgs-sostv for-move">
								<a class="sostv-head" href="#">
									<img src="/img/org-setting/csgo.png" />	
									<h2>Состав CS:GO <span>(всего 2)</span></h2>
									<span class="__hide hides" >Показать</span>
								</a>
								<div class="__users answer">
									<div class="org-setting-user">
										<img src="http://cs306801.vk.me/v306801193/94f2/Sr4dqOSs4hE.jpg" class="__ava">
										<ul class="__cont">
											<li><a href="#"><span class="masha_index masha_index33" rel="33"></span>Dekry</a></li>
											<li><span><span class="masha_index masha_index34" rel="34"></span>Капитан</span></li><li>
										</li></ul>
										<a href="#" class="__close"></a>
										<select class="sel-set">
											    <option selected=""><span class="masha_index masha_index35" rel="35"></span>Капитан</option>
											    <option>Менеджер</option>
											    <option>Основной состав</option>
											    <option>Запасной состав</option>
										</select>
									</div>

									<div class="org-setting-user">
										<img src="http://cs306801.vk.me/v306801193/94f2/Sr4dqOSs4hE.jpg" class="__ava">
										<ul class="__cont">
											<li><a href="#"><span class="masha_index masha_index33" rel="33"></span>Dekry</a></li>
											<li><span><span class="masha_index masha_index34" rel="34"></span>Игрок</span></li><li>
										</li></ul>
										<a href="#" class="__close"></a>
										<select class="sel-set">
											    <option selected=""><span class="masha_index masha_index35" rel="35"></span>Основной состав</option>
											    <option>Менеджер</option>
											    <option>Капитан</option>
											    <option>Запасной состав</option>
										</select>
									</div>
								</div>
							</section>
				     
				  			<section class="orgs-sostv">
								<a class="sostv-head" href="#">
									<img src="/img/org-setting/dota2.png" />	
									<h2>Состав Dota 2 <span>(всего 2)</span></h2>
									<span class="__hide hides" >Показать</span>
								</a>
								<div class="__users answer">
									<div class="org-setting-user">
										<img src="http://cs306801.vk.me/v306801193/94f2/Sr4dqOSs4hE.jpg" class="__ava">
										<ul class="__cont">
											<li><a href="#"><span class="masha_index masha_index33" rel="33"></span>Dekry</a></li>
											<li><span><span class="masha_index masha_index34" rel="34"></span>Капитан</span></li><li>
										</li></ul>
										<a href="#" class="__close"></a>
										<select class="sel-set">
											    <option selected=""><span class="masha_index masha_index35" rel="35"></span>Капитан</option>
											    <option>Менеджер</option>
											    <option>Основной состав</option>
											    <option>Запасной состав</option>
										</select>
									</div>

									<div class="org-setting-user">
										<img src="http://cs306801.vk.me/v306801193/94f2/Sr4dqOSs4hE.jpg" class="__ava">
										<ul class="__cont">
											<li><a href="#"><span class="masha_index masha_index33" rel="33"></span>Dekry</a></li>
											<li><span><span class="masha_index masha_index34" rel="34"></span>Игрок</span></li><li>
										</li></ul>
										<a href="#" class="__close"></a>
										<select class="sel-set">
											    <option selected=""><span class="masha_index masha_index35" rel="35"></span>Основной состав</option>
											    <option>Менеджер</option>
											    <option>Капитан</option>
											    <option>Запасной состав</option>
										</select>
									</div>
								</div>
							</section>
			<hgroup class="line-and-title-last">
		<a href="#" class="but-big off" style="" title="" disabled="">Сохранить</a>
	</hgroup>	
				
			</div>
			<div class="tab-pane" id="admins">
				<div class="search-block">
					<input class="add but_none"placeholder="Что-то ищете?"></input>
					<a href="#add" class="but but_block">Поиск</a>
				</div>
				<div class="org-setting-user">
							<img src="http://old-guard.ru/uploads/fotos/foto_1.jpg" class="__ava">
							<ul class="__cont">
								<li><a href="#"><span class="masha_index masha_index27" rel="27"></span>Dekry</a></li>
								<li><span><span class="masha_index masha_index28" rel="28"></span>Менеджер состава CS:GO</span></li><li>
							</li></ul>
							<a href="#" class="__close"></a>
							<a href="http://onbattle.old-guard.ru/organizations/show/edit/content/user-setting.modal.php" rel="modal:open" id="manual-ajax" class="but-big"><img src="/img/org-setting/set.png" alt=""></a>
				</div>
			</div>
			<div class="tab-pane" id="streamers">
				<div class="search-block">
					<input class="add but_none"placeholder="Что-то ищете?"></input>
					<a href="#add" class="but but_block">Поиск</a>
				</div>
				<div class="org-setting-user">
							<img src="http://old-guard.ru/uploads/fotos/foto_1.jpg" class="__ava">
							<ul class="__cont">
								<li><a href="#"><span class="masha_index masha_index27" rel="27"></span>Dekry</a></li>
								<li><span><span class="masha_index masha_index28" rel="28"></span>Стример</span></li><li>
							</li></ul>
							<a href="#" class="__close"></a>
							<a href="http://onbattle.old-guard.ru/organizations/show/edit/content/user-setting.modal.php" rel="modal:open" id="manual-ajax" class="but-big"><img src="/img/org-setting/set.png" alt=""></a>
						</div>
			</div>
			<div class="tab-pane" id="all">
				<div class="search-block">
					<input class="add but_none"placeholder="Что-то ищете?"></input>
					<a href="#add" class="but but_block">Поиск</a>
				</div>
				<div class="org-setting-user">
							<img src="http://old-guard.ru/uploads/fotos/foto_1.jpg" class="__ava">
							<ul class="__cont">
								<li><a href="#"><span class="masha_index masha_index27" rel="27"></span>Dekry</a></li>
								<li><span><span class="masha_index masha_index28" rel="28"></span>Администратор</span></li><li>
							</li></ul>
							<a href="#" class="__close"></a>
							<a href="http://onbattle.old-guard.ru/organizations/show/edit/content/user-setting.modal.php" rel="modal:open" id="manual-ajax" class="but-big"><img src="/img/org-setting/set.png" alt=""></a>
						</div>
				<div class="org-setting-user">
							<img src="http://old-guard.ru/uploads/fotos/foto_1.jpg" class="__ava">
							<ul class="__cont">
								<li><a href="#"><span class="masha_index masha_index27" rel="27"></span>Dekry</a></li>
								<li><span><span class="masha_index masha_index28" rel="28"></span>Подписчик</span></li><li>
							</li></ul>
							<a href="#" class="__close"></a>
							<a href="http://onbattle.old-guard.ru/organizations/show/edit/content/user-setting.modal.php" rel="modal:open" id="manual-ajax" class="but-big"><img src="/img/org-setting/set.png" alt=""></a>
						</div>
			</div>
		</div>
	</div>	