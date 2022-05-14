(function($, $api){
	$(document).on('keyup','input.select-post-ajax',function () {
		var $this = $(this);
		var data = {
			'action' : 'it-hive_query',
			'query' : $this.data('query')
		}
		data.query.title_like = this.value;
		console.log(data);
		$.ajax({
			type: "POST",
			url: ajaxurl,
			data: data,
			success: function (data) {
				var $container = $this.siblings('.autocomplete-items');
				$container.html('');
				console.log(data);

				for(var i = 0; i < data.length; i++){
					$container.append('<a href="#" data-id="'+data[i].ID+'">'+data[i].post_title+'</a>');
				}
				$container.addClass('show');
			},
			dataType: 'json'
		});
	});
	$(document).on('focusout','input.select-post-ajax',function () {
		$(this).siblings('.autocomplete-items').removeClass('show');
	});
	$(document).on('click','.it-hive-autocomplete .autocomplete-items a',function (e) {
		e.preventDefault();
		var $this = $(this);
		var $container = $this.parents('.it-hive-autocomplete');
		$container.find('.select-post-ajax').val($this.html());
		$container.find('.data-input').val($this.data('id'));
		$(this).parents('.autocomplete-items').removeClass('show');
	})

})(jQuery, window.IT_Hive);