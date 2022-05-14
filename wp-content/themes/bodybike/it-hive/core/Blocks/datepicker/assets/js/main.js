(function($ , $api){
	class datepicker extends $api.controls.controlItem{
		constructor(el){
			super(el);
			var now = new Date();
			var end_date = new Date();
			end_date.setMonth(now.getMonth() + 3);
			end_date.setDate("31");
			this.$el.find('.date-picker').datepicker({
				dateFormat: "yy-mm-dd",
				minDate: now,
				maxDate: end_date
			});
		}
	}
	$api.import(datepicker);
})(jQuery, window.IT_Hive);