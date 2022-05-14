(function($ , $api){
	class timepicker extends $api.controls.controlItem{
		constructor(el){
			super(el);
			this.$el.find('.time-picker').timepicker({
				'timeFormat': this.$el.attr('data-time-format'),
				'minTime': this.$el.attr('data-start'),
				'maxTime': this.$el.attr('data-end'),
				'step': this.$el.attr('data-step'),
				'disableTimeRanges': [
					[this.$el.attr('data-start'), (parseInt(this.$el.attr('data-end')) +1)+':00']
				]
			});
		}
	}
	$api.import(timepicker);
})(jQuery, window.IT_Hive);