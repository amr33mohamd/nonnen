(function($){

	/* Style Steps Show/Hide Without Next button */
	function nextStepWithField(styleSection){
		$(styleSection).on('click',  '.item', function(e){
	        e.preventDefault();
	        $('.style-section .style').removeClass('active');
	        $(this).closest('.style').next().addClass('active');
	    });
	}

	function nextStep(stepRef, Step){
		if($(stepRef).find('.item').hasClass('active')){	
        	$(stepRef+' .step').removeClass('active');
			$(Step).addClass('active');
			// $(stepRef).find('.btn-next').addClass('');
		}else{
			alert('Select item.');
		}
	}

	function nextStepWithoutItem(stepRef, Step){
        $(stepRef+' .step').removeClass('active');
		$(Step).addClass('active');
	}

	function designerSelect(sectionRef, that){
		var designer = $(sectionRef+' .designer-left').clone();
	    $(designer).find('.designer-title').prepend("<span>You've selected </span>");
	    $(designer).find('.designer-title').append(' <a href="#" class="edit-designer">Edit</a><div>for your</div><select class="rooms-list"><option value="1" selected="">Living Room</option><option value="2">Dining Room</option><option value="3">Bedroom</option><option value="4">Nursery</option><option value="5">Office</option><option value="6">Other</option><option value="10">Kitchen</option><option value="11">Bathroom</option></select>');
	    
	    $('.package-content .your-designer').html(designer);

	    var index = $(that).closest('.tab-content').next().index();
        $(that).closest('.tab-content').removeClass('active');
        $(that).closest('.tab-content').next().addClass('active');
        $('.quiz-tabs-title > div').removeClass('active');
        $('.quiz-tabs-title > div').eq(index).addClass('active');
	}

	$(function(){

		$('.designer-content').find('.gallery-slider').slick({
	        arrows: true,
	        infinite: false,
	        speed: 300,
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        adaptiveHeight: true
	    });

	 //    $('.style-section').on('click', '.item', function(){
		// 	if($('.style-section').find('.item').hasClass('active')){
		//     	$('.style-section').find('.btn-next').addClass('activated');
		// 	}
		// 	else{
		// 		$('.style-section').find('.btn-next').removeClass('activated');
		// 	}

		// });
	    
		/* Masonary Style Layout */
		$(window).resize(function(){
			$('.masonry').masonry();
		});
	    

	 	/* Quiz */
	    $('#interior-design-quiz').on('click', '.item', function(){
	    	if($(this).hasClass('multiple')){
    			$(this).toggleClass('active');
	    	}
	    	else{
	        	$(this).closest('.section-right').find('.item').not('.multiple').removeClass('active');
	        	$(this).addClass('active');
	    	}

	  //   	if($(this).closest('.step').find('.item').hasClass('active')){
		 //    	$(this).closest('.step').find('.btn-next').addClass('activated');
			// }
			// else{
			// 	$(this).closest('.step').find('.btn-next').removeClass('activated');
			// }
	    });

	    $('.style-section').on('change', '.style-step-4 input', function(e){
	    	$(this).closest('.step').find('.btn-next').addClass('activated');
	    });

	    /* Style Step 1 */
	    /* Selected Rooms */
	    $('.style-section').on('click', '.style-step-1 .btn-next', function(e){
	    	e.preventDefault();
	    	nextStep('.style-section', '.style-step-2');

	    });

	    $('.style-section').on('click',  '.style-step-2 .item', function(e){
	    	e.preventDefault();
	    	nextStep('.style-section', '.style-step-3');
	    });

	    $('.style-section').on('click', '.style-step-3 .btn-next', function(e){
	        e.preventDefault();
	    	var selectedRooms = [];
	    	var rooms = [];

	        $.each($('.rooms-list .item'), function(){
	        	if($(this).hasClass('active')){	
		            $(this).removeClass('active');
		            selectedRooms.push($(this).parent().html());
	        	}
	        	else{
	        		rooms.push($(this).parent().html());
	        	}
	        });
	        $('.style-step-3a .room-priority').html(selectedRooms);
	        $('.style-step-3a .rooms-more').html(rooms);
	        if(selectedRooms.length > 1){
	        	nextStep('.style-section', '.style-step-3a');
	        }
	        else{
	        	nextStep('.style-section', '.style-step-4');
	        }
	    });

	    $('.more-rooms-toggle').on('click', function(){
	        $(this).addClass('active');
	        $('.rooms-more').slideToggle();
	    });

	    $('.style-section').on('click', '.style-step-3a .item', function(e){
	    	e.preventDefault();
	    	nextStep('.style-section', '.style-step-4');
	    });

	    /* Style Step 4 Client Name */
	    $('.style-section').on('click', '.style-step-4 .btn-next', function(e){
	        e.preventDefault();
	    	var client_name;
	    	client_name = $('.client_name').val();
	    	if(client_name){	
	    		$('.client-name').html(client_name);
	    		nextStep('.style-section', '.style-step-5');
	    	}
	    	else{
	    		$('.client_name').focus();
	    	}
	    });

	    $('.needs-content').on('click', '.btn-get-started', function(e){
	    	e.preventDefault();
	    	nextStepWithoutItem('.needs-content', '.needs-step-1');
	    	$(this).closest('.row').hide();
	    });

	    /* Style Tabs */
	    $('#interior-design-quiz').on('click', '.quiz-tabs-title .tab-title', function(){
		    var index = $(this).index();
		    if($(this).hasClass('active')){
		        return;
		    }
		    $('.quiz-tabs-title .tab-title').removeClass('active');
		    $(this).addClass('active');
		    $('.quiz-tabs-content > div').removeClass('active');
		    $('.quiz-tabs-content > div').eq(index).addClass('active');
		});


		$('.quiz-tabs').on('click', '.btn-next, .no-thanks-btn', function(){
	        var index = $(this).closest('.tab-content').next().index();
	        $(this).closest('.tab-content').removeClass('active');
	        $(this).closest('.tab-content').next().addClass('active');
	        $('.quiz-tabs-title > div').removeClass('active');
	        $('.quiz-tabs-title > div').eq(index).addClass('active');

	    });


	    $('.your-designer').on('click', '.edit-designer', function(){
	        var index = $(this).closest('.tab-content').prev().index();
	        $(this).closest('.tab-content').removeClass('active');
	        $(this).closest('.tab-content').prev().addClass('active');
	        $('.quiz-tabs-title > div').removeClass('active');
	        $('.quiz-tabs-title > div').eq(index).addClass('active');

	    });

	    
	    $('#interior-design-quiz').on('click', '.quiz-tabs-title .needs-tab', function(){
		    $('.needs-content').find('.needs-prestep').show();
		    $('.needs-content .step').removeClass('active');
	    });

	    $('.needs-content').on('click',  '.needs-step-1 .item', function(e){
	    	e.preventDefault();
	    	nextStepWithoutItem('.needs-content', '.needs-step-2');
	    });

	    $('.needs-content').on('click',  '.needs-step-2 .item', function(e){
	    	e.preventDefault();
	    	nextStepWithoutItem('.needs-content', '.needs-step-3');
	    });

	    $('.needs-content').on('click', '.btn-continue', function(e){
	    	e.preventDefault();
	    	nextStep('.needs-content', '.needs-step-4');
	    });

	    $('.needs-content').on('click',  '.needs-step-4 .item', function(e){
	    	e.preventDefault();
	    	nextStepWithoutItem('.needs-content', '.needs-step-5');
	    });

	    $('.needs-content').on('click',  '.needs-step-5 .item', function(e){
	    	e.preventDefault();
	    	nextStepWithoutItem('.needs-content', '.needs-step-6');
	    });

	    $('.selected-designer').on('click', '.btn-begin-project', function(e){
	    	e.preventDefault();
	    	designerSelect('.selected-designer', $(this));

	    });

	    $('.related-designers').on('click', '.designer-select', function(e){
	    	e.preventDefault();
	    	designerSelect('.related-designers', $(this));

	    });


	    
	    $('.portfolio-single-slider').slick({
          infinite: true,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1,
          cssEase: 'linear',
        });

	
	});
	
})(jQuery, this)