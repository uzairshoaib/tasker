$('.form-delete').on('submit', function(e) {
	e.preventDefault();
	var action = $(this).attr('action');
	var formData = $(this).serialize();
	$.ajax({
		url: action,
		data: formData,
		type: 'DELETE',
	})
	.done(function(data) {
		alert('deleted');
		if (data.success) {
			$(this).closest('tr').fadeOut('fast');
		}
	});
});
