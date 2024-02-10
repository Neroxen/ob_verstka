<style>
      .modal {background-color: #fff;}
</style>
<div class="modal-d invite-modal">
	<header class="__top">
		<h5 class="title">Пригласить друзей</h5>
	</header>
      <aside>   
        <select data-placeholder="Введите имена/никнеймы своих друзей" class="chosen-select" multiple style="width: 100%;" tabindex="4">
            <option value=""></option>
            <option value="Николай 'teamko47' Ткачев">Николай " teamko47 " Ткачев</option>
            <option value="Даниил 'Dealenx' Городилов">Даниил " Dealenx " Городилов</option>
            <option value="Артур Годлевский">Артур Годлевский</option>
            <option value="onbattle">onbattle</option>
          </select>
      </aside>
      <a href="#" class="but">Отправить</a>
</div>

      <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Никто не найден'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>