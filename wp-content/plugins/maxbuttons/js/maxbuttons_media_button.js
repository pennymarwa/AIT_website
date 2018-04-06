var maxMedia; 

jQuery(document).ready(function($) {

/* Add button for the post editor screen + integrations */ 
var maxMedia = function() {

	callback = null;
	window_loaded =null; 
}

maxMedia.prototype.init = function() 
{
	
	$(document).on('click','.maxbutton_media_button',$.proxy(this.clickAddButton, this));
	this.callback = 'this.buttonToEditor'; // default 
}

maxMedia.prototype.setCallback = function (callback)
{ 
 	
	if (typeof callback !== 'function') 
	{
		if (typeof window[callback] === 'function')
			callback = window[callback];
		else if (typeof eval(callback) === 'function') 
		{
			callback = eval(callback); 
		} 
		else
			return false; 
	}
 
	this.callback = callback;
}

maxMedia.prototype.clickAddButton = function (e) 
{
	e.preventDefault();
	e.stopPropagation(); 
	$(document).off('click','.pagination span'); // prevent multiple events 
	var self = this; 
	
	if (typeof $(e.target).data('callback') !== 'undefined') 
	{
		this.setCallback($(e.target).data('callback')); 
	}

	$(document).off('click', '.mb_add_button'); 
	$(document).on('click', '.mb_add_button', function (e) 
	{
		e.preventDefault(); 
		var button_id = $(e.target).data('button');
		
		self.callback(button_id, $(e.target) ); 
		self.removeWindow(e);
	}); 
		
	$(document).on('click','.pagination span', function (e)  // eventception
	{
		e.preventDefault();
		if ( $(e.target).hasClass('disabled'))
			return false;
			
		var page = $(e.target).data('page');
		if (page <= 1) page = 1; 
		
		self.loadPostEditScreen(page); 
	}) ; 
	
	this.loadPostEditScreen(0);
}


// Callback is the add function on button select
maxMedia.prototype.loadPostEditScreen = function(page)
{
	if (typeof page == 'undefined') page = 0; 
	
	var data = { action: 'getAjaxButtons', 
				paged : page, 
			 	//callback: callback,
			 }; 
	var url = mb_ajax.ajaxurl;
 	var self = this; 
 
 	this.showPostEditScreen();
 
	$.ajax({
	  url: url,
	  data: data,
	  success: function (res) 
	  {
	  	self.putResults(res)
 	  }, 
 	  
	});

	return false;
}
maxMedia.prototype.showPostEditScreen = function ()
{
 	if (this.window_loaded === true) 
 		return true; 
 		
	var editor = this.getEditor(); 

	var editor_window = $('<div>', { id: 'mb_media_buttons_window_overlay' }) 
	.add( $('<div>', { id: 'mb_media_buttons_window'})
	.append( $('<div>', { class: 'header'}).html('<h3>' + mbtrans.windowtitle + '</h3><div class="close tb-close-icon"></div>') )
   .append(editor)); 


	// close events 
	$(document).off('click', '#mb_media_buttons_window_overlay');
	$(document).on('click', '#mb_media_buttons_window_overlay', $.proxy(this.removeWindow, this) );
	$(editor_window).on('click', '.close', $.proxy(this.removeWindow, this) ); 
	
	$('body').append(editor_window); 
	$(document).trigger('mb_media_buttons_open', editor_window); 
	editor_window.show();
 	this.window_loaded = true;
 
}

maxMedia.prototype.putResults = function(res)
{
	$('#mb_media_buttons').html(res);
	$(document).trigger('mb_media_put_results', res); 
		

}

maxMedia.prototype.removeWindow = function () 
{
	this.window_loaded = false; 
	$('#mb_media_buttons_window_overlay').remove(); 
	$('#mb_media_buttons_window').remove(); 
	$(document).trigger('mb_media_buttons_close'); 

}

maxMedia.prototype.buttonToEditor = function(button_id)
{

	window.send_to_editor('[maxbutton id="' + button_id + '"]');
}

maxMedia.prototype.getEditor = function () 
{

	var h2style = 'line-height: 32px; padding-left: 40px; background: url("' + mbtrans.icon  + '") no-repeat';
	var cancelstyle = 'margin-left: 10px; margin-top: 10px;'; 
	var editor = $('<div>', { id: 'maxbutton-add-button', class: 'content' }); 

		//.append( $('<a>', { 'class' : 'button-secondary', 'style' : cancelstyle }).text(mbtrans.cancel)	
	editor.append( $('<h2>', { 'style' : h2style } ).text(mbtrans.insert) )
		.append( $('<p>').text(mbtrans.select) ) 
		.append( $('<div>', { id: 'mb_media_buttons' }).append( '<div class="loading"></div>'  )
				
	
			   );

	return editor;

}

maxMedia = new maxMedia();
maxMedia.init();
window.maxMedia = maxMedia;



}); // jquery 
