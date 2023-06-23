(function($) {
		// TinyMce Options
		var tinyOptions = {
			// Location of TinyMCE script
			script_url : '_assets/js/tiny_mce/tiny_mce.js',

			// General options
			theme : "advanced",
			language : 'es',
			plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist",

			// Theme options
			theme_advanced_buttons1 : 'cut,copy,paste,pastetext,|,undo,redo,|,fullscreen',
			theme_advanced_buttons2 : 'bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,|,outdent,indent,blockquote,link,unlink',
			theme_advanced_buttons3 : '',
			theme_advanced_buttons4 : '',
			theme_advanced_toolbar_location : 'top',
			width : '970',
			height : '491'
		};

		// Get params in URL
		function getURLParameter(name) {
    		return decodeURI(
        		(RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
    		);
		}
	$(document).ready(function() {

		// Load the backup form if parameter
		var backup = getURLParameter('backup');
		if (backup != 'null') {
			$('form').load(backup);
		}

		// Adding value to inputs on change
		$('input').live('change',function() {
			var valueInput = $(this).val();
			$(this).attr('value', valueInput);
		});

		// Adding option selected to selecta on change
		$('select').live('change',function() {
			$(this + ':selected').attr('selected', 'selected');
		});

		// Adding texts to textareas on change
		$('textarea').live('change',function() {
			var valueInput = $(this).val();
			$(this).html(valueInput);
		});

		// Show form when publication name is assigned
		$('input[name="magazineNumber"]').live('change',function() {
			$('.magazineNumberFake').val($(this).val());
			$(this).hide();
			$('.magazineNumberFake').show();
			$('.assignNumber, .magazineNumberOk').hide();
			$('.hideForm, .pagesTotal').fadeIn();
		});

		// Prevent submit form with enter
		$(window).keydown(function(event){
    		if(event.keyCode == 13) {
      			event.preventDefault();
      			return false;
    		}
  		});

		// Add new fieldset / page
		$('.newFieldset').live('click', function() {
			var page = $(this).prev().data('page') + 1;
			var page = '00' + page;
			$(this).before('<fieldset data-page="' + page + '"> \
				<legend>Página ' + $(this).prev().data("page") + '</legend> \
				<label for="' + page + '[Title]">Título:</label> \
				<input name="' + page + '[Title]" value="" /> \
				<label for="' + page + '[Type]">Tipo:</label> \
				<select class="selectType" name="' + page + '[Type]"> \
					<option value="comic">Cómic</option> \
					<option value="relato">Relato</option> \
					<option value="baulera">Baulera</option> \
				</select> \
				<label for="' + page + '[Autor]">Autor:</label> \
				<input name="' + page + '[Autor]" value="" /> \
				<label for="' + page + '[Img]">Imágenes:</label> \
				<a class="editImg" style="display: none">Cambiar imagen</a> \
				<input type="text" style="display: none" readonly value="" name="' + page + '[Img][1]" data-imgnumber="1" /> \
				<input type="file" name="' + page + 'upload[1]" data-imgnumber="1" /> \
				<a class="addImg">+ Añadir imagen</a> \
				<label for="' + page + '[Txt]" class="labelTextarea" style="display: none;">Texto:</label> \
				<a class="editTexarea" style="display: none;">Editar texto</a> \
				<textarea name="' + page + '[Txt]" disabled style="display: none;"></textarea> \
				<label for="' + page + '[Url]">Url:</label> \
				<input name="' + page + '[Url]" value="" /> \
				<a class="delete">x</a> \
			</fieldset>'
			);
			$('input[name="magazinePages"]').val($('fieldset').size() -3);
		});

		// Delete entire fieldset/page
		$('.delete').live('click', function() {
			var page = $(this).parent().data('page');
			$(this).parent().nextAll().each(function(){
				var cloneParent = $(this).clone();
				var cloneString = cloneParent.html();
				var cloneReplace = cloneString.replace(page+1, page);
				$(this).html(cloneReplace);
			});
			$(this).parent().remove();
			$('input[name="magazinePages"]').val($('fieldset').size() -2);
		});

		// Allow only JPG file types // Add image path to the hidden field // Show hidden field and hide file field
		$('input:file').live('change',function() {
			var ext = $(this).val().split('.').pop().toLowerCase();
			var allow = new Array('jpg');
			if(jQuery.inArray(ext, allow) == -1) {
				alert('Solamente se permiten archivos con extensión .jpg');
				$(this).val('');
			} else {
				var value = $(this).val().replace(/(c:\\)*fakepath/i, '');
				$(this).prev().attr('value', value);
				$(this).prev().show();
				$(this).prev().prev().show();
				$(this).hide();
			}
		});

		// Add new image to the fieldset/page
		$('.addImg').live('click', function() {
			var page = $(this).parent().data('page');
			var page = '00' + page;
			var image = $(this).prev().data('imgnumber') + 1;
			$(this).before($('<a class="deleteImg">Borrar imagen</a> <a class="editImg" style="display: none">Cambiar imagen</a>\
			<input type="text" style="display: none" readonly value="" name="' + page + '[Img][' + image + ']" data-imgnumber="' + image + '"/> \
			<input type="file" name="' + page + 'upload[' + image + ']" data-imgnumber="' + image + '"/>'));
		});

		// Delete image
		$('.deleteImg').live('click', function() {
			var page = $(this).parent().data('page');
			var image = $(this).prev().data('imgnumber') + 1;
			$(this).next().next().next().remove();
			$(this).next().next().remove();
			$(this).next().remove();
			$(this).remove();
		});

		// Edit image field
		$('.editImg').live('click', function() {
			$(this).next().next().show();
			$(this).next().hide();
			$(this).hide();
		});

		// Enable / disable the textarea edit depending of the page type
		$('.selectType').live('change',function() {
			if($(this).val() === 'comic') {
				$(this).parent().find('textarea').prop("disabled", true);
				$(this).parent().find('.labelTextarea').fadeOut();
				$(this).parent().find('.editTexarea').fadeOut();
			} else {
				$(this).parent().find('textarea').prop("disabled", false);
				$(this).parent().find('.labelTextarea').fadeIn();
				$(this).parent().find('.editTexarea').fadeIn();
			}
		});

		//Running tinyMce editor
		$('.tinymce_editor').tinymce(tinyOptions);

		//Edit textarea un tinyMce pop-up
		$('.editTexarea').live('click', function() {
			$textarea = $(this).next();
			var textareaContent = $(this).next().val();
			$('.tinymce_editor').val(textareaContent);
			$('.tinymce_editor').html(textareaContent);
			$('.tinymce_popup').fadeIn();
		});

		//Send content to textarea and close tinyMce pop-up
		$('.saveTextarea').live('click', function() {
			var textareaNewContent = tinyMCE.activeEditor.getContent();
			$textarea.val(textareaNewContent);
			$textarea.html(textareaNewContent);
			$('.tinymce_popup').fadeOut();
		});

		//hidding form on submit
		$('form').submit(function(){
			$('.hideForm').hide();
			$('.assignNumber').html('<p>Enviando formulario... </p><p><img src="_assets/img/ajax-loader.gif" alt="" /></p><p>Por favor, espera hasta que se suban todas las imágenes al servidor. Esto puede tardar bastante, dependiendo del número de imágenes.</p>');
			$('.assignNumber').fadeIn();
		});

		//Save form status and submit images
		$('#saveChanges').click(function() {
			document.forms[0].action = 'save.php';
			var html = $('form').clone();
			var htmlString = html.html();
			$('#pageCode').val(htmlString);
			$("form").submit();
		});
	});

	$(window).load(function() {
		$("body").removeClass("preload");
		var image = $('<img />').attr('src', '_assets/img/ajax-loader.gif');
	});

	/* optional triggers
	 $(window).resize(function() {
	 });
	 */
})(window.jQuery);
