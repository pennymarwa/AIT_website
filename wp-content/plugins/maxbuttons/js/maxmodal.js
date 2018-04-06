var maxModal;

jQuery(document).ready(function($) {
	maxModal = function () {
	
	}
	
	maxModal.prototype = { 
		 currentModal: null, 
		 modals: [],
		 multiple: false, 	
		 windowHeight: false,
		 windowWidth: false,
		 setWidth: false,
		 setHeight: false,		 
	}
	
	maxModal.prototype.init = function() 
	{
		this.writeOverlay(); 
		this.windowHeight = $(window).height(); 
		this.windowWidth = $(window).width(); 
		
		$(document).on('click', '.maxmodal', $.proxy(this.buildModal, this));
		$(window).on('resize', $.proxy(this.checkResize, this)); 
		
	}

	maxModal.prototype.focus = function()
	{
		this.currentModal.show(); 
	
	}
	
	maxModal.prototype.show = function() 
	{
		if (this.setWidth)
		{
			this.currentModal.width(this.setWidth); 
		}
		if (this.setHeight) 
		{
			this.currentModal.height(this.setHeight);
		}
		
		var modalHeight = this.currentModal.height(); 
		var modalWidth = this.currentModal.width(); 
		
		var top =  (this.windowHeight - modalHeight) / 2; 
		var left = (this.windowWidth - modalWidth) / 2; 
		
		if (top < 30) 
		{ 
			top = 30;  // top + admin bar
		}
		if (left < 0) 
		{
			left: 0;
		}
	
		if (modalHeight > this.windowHeight)
			this.currentModal.height(this.windowHeight - top - 5 + 'px');
				
		this.currentModal.css('left', left + 'px'); 
		this.currentModal.css('top', top + 'px'); 
		
		this.currentModal.show(); 
		$('.maxmodal_overlay').show(); 
	}
	
	maxModal.prototype.checkResize = function () 
	{
		if (this.currentModal === null)
			return;

		// redo sizes, repaint.		
		this.windowHeight = $(window).height(); 
		this.windowWidth = $(window).width(); 		
		
		this.show(); 
	}
	
	maxModal.prototype.close = function() 
	{
		this.currentModal.remove(); 
		this.currentModal = null;
		$('.maxmodal_overlay').hide(); 
	}
	
	maxModal.prototype.setTitle = function(title) 
	{
		this.currentModal.find('.modal_title').text(title); 
	}
	
	maxModal.prototype.setControls = function(controls) 
	{
		var content = this.currentModal.find('.modal_content').html();
		this.currentModal.find('.modal_content').html(content + controls);  		
	}
	maxModal.prototype.setContent = function(content) 
	{
		this.currentModal.find('.modal_content').html(content);
	}
	
	maxModal.prototype.buildModal = function(e) 
	{
		var target = $(e.target); 
		if (typeof target.data('modal') == 'undefined') 
		   target = target.parents('.maxmodal'); 
		   
		var id = target.data('modal'); 
		var data = $('#' + id);

		// options
		if (typeof data.data('width') !== 'undefined') 
			this.setWidth = data.data('width'); 
		else
			this.setWidth = false; 
			
		if (typeof data.data('height') !== 'undefined') 
			this.setHeight = data.data('height'); 
		else
			this.setHeight = false; 

		
		var title = $(data).find('.title').text(); 
		var controls = $(data).find('.controls').html(); 
		var content = $(data).find('.content').html(); 

		this.newModal();
		this.setTitle(title)
		this.setContent(content);
		this.setControls(controls)
		
		// set actions for the modal
		$(this.currentModal).find('.modal_close').on('click', $.proxy(this.close, this)); 
		
		this.show();
		
	}

	maxModal.prototype.newModal = function() 
	{
		if (this.currentModal !== null) 
			this.currentModal.close(); 
			
		var modal = $('<div class="max-modal"> \
						   <div class="modal_header"> \
							   <div class="modal_close dashicons dashicons-no"></div><h3 class="modal_title"></h3> \
						   </div> \
						   <div class="inner modal_content"></div>\
					   </div>'); 
		$('#maxbuttons').append(modal); 
		
		
		$(modal).draggable({
			handle: '.modal_header'
		}); 
		
		this.modals.push(modal); 
		this.currentModal = modal;
		return this; 
		
	}
	
	maxModal.prototype.writeOverlay = function() 
	{
		$('#maxbuttons').append('<div class="maxmodal_overlay"></div>'); 
		$('.maxmodal_overlay').on('click', $.proxy(this.close, this)); 
		
	}

}); 

