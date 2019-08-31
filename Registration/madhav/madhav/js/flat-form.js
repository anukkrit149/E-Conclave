;(function($) {
	
	function validateSelect(select) {
		var selectWrapper = select.closest('.selectric-wrapper');
		
		if((select.val() == null || select.val() == '') && select.is('[required]')) {
			selectWrapper.removeClass('selectric-valid');
			selectWrapper.addClass('selectric-invalid');
		} else {
			selectWrapper.removeClass('selectric-invalid');
			selectWrapper.addClass('selectric-valid');
		}
	}
	
	// Custom Select
	var customSelect = $('.custom-select');
	
	customSelect.selectric({
		responsive: true
	});
	
	// Tooltip
	
	$('[data-toggle="tooltip"]').tooltip();
	
	// Upload File
	
	$('.custom-file-input').on('change', function() {
		var file = $(this),
			value = file.val().split('\\').pop();
		
		if(value) {
			file.closest('.custom-file').find('.form-control').html( value );
		}
	});
	
	// Validate Form
	
	$('form').on('submit', function() {
		customSelect.each(function() {
			validateSelect($(this));
		});
	});
	
	window.addEventListener('load', function() {
		var forms = document.getElementsByClassName('needs-validation');
		
		var validation = Array.prototype.filter.call(forms, function(form) {
			form.addEventListener('submit', function(event) {
				if (form.checkValidity() === false) {
					event.preventDefault();
					event.stopPropagation();
				}
				
				form.classList.add('was-validated');
				
				$('.custom-select').on('selectric-change', function(event, element, selectric) {
					validateSelect($(element));
				});
			}, false);
		});
	}, false);
	
	// Toggle Checkbox
	
	$('[data-toggle]').on('change', function() {
		var toggleItem = $(this).data('toggle');
		
		if(this.checked) {
			$('#' + toggleItem).addClass('d-none');
		} else {
			$('#' + toggleItem).removeClass('d-none');
		}
	});
	
})(jQuery);