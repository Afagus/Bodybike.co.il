(function($, $api){
	'use strict'
	class repeaterVariations extends $api.controls.repeater{
		constructor(el){
			super(el);
			this.variationSelect = this.$el.find('.variations[data-control-id="' + this.el.id + '"]');
			var data = this.$el.data('tpl');
			for(var i = 0; i < data.length; i++){
				this.variationSelect[0].options[i]=new Option(data[i].title,data[i].id);
			}
		}

		getTpl(){
			return $(this.variationSelect.val()).html();
		}
	}
	$api.import(repeaterVariations);

	class repeaterVariationsToolTip extends $api.controls.repeater{
		constructor(el){
			super(el);
			this.variationSelect = this.$el.find('.variations[data-control-id="' + this.el.id + '"]');
			var data = this.$el.data('tpl');
			var images ={};
			for (var i = 0; i < data.length; i++) {
				images[data[i].id] = data[i].image;
				this.variationSelect[0].options[i]=new Option(data[i].title,data[i].id);
			}
			$.widget( 'custom.iconselectmenu', $.ui.selectmenu, {
				_renderItem: function( ul, item ) {
					console.log(item);
					var li = $( '<li data-image="'+images[item.value]+'">' ),
						wrapper = $('<div>', { text: item.label } );

					if (item.disabled) {
						li.addClass('ui-state-disabled');
					}

					$('<span class="tooltip"><img src="'+images[item.value]+'" style="position:absolute;width:100%;left:100%;top:-40px;">').appendTo(wrapper);

					return li.append(wrapper).appendTo(ul);
				}
			});
			$( '#'+this.el.id+' select' )
				.iconselectmenu()
				/*.iconselectmenu( "menuWidget" )
				.addClass( "ui-menu-icons" )*/;
		}

		getTpl(){
			return $(this.variationSelect.val()).html();
		}
	}
	$api.import(repeaterVariationsToolTip);

	class repeaterVariationsTabs extends $api.controls.repeaterTabs{
		constructor(el){
			super(el);
			this.variationSelect = this.$el.find('.variations[data-control-id="' + this.el.id + '"]');
			var data = this.$el.data('tpl');
			for(var i = 0; i < data.length; i++){
				this.variationSelect[0].options[i]=new Option(data[i].title,data[i].id);
			}
		}

		getTpl(){
			return $(this.variationSelect.val()).html();
		}
	}
	$api.import(repeaterVariationsTabs);
})(jQuery, window.IT_Hive);