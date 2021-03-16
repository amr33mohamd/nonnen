(function($){
	$(function(){
		
		$('.style-section').on('click', '.style-step-4 .btn-next', function(e){
			e.preventDefault();
			var styles = [];
			$.each($('.style-step-1 .item.active input'), function(){
	    		styles.push($(this).val());
	    	});
	    	// console.log(styles.join());
	    	var data = {
	    		action: 'styleSelect',
	    		post_ids: styles.join(),
	    	}


	    	$.ajax({
	    		url: ajax_object.ajaxurl,
	    		data: data,
	  			type: 'post',
	  			dataType: 'JSON',
	  			success: function(result){
	  				if(!result){
	  					return;
	  				}
	  				else{
	  					var styleName = result['names'].split(',');
	  					var styleSlug = result['slugs'].split(',');
	  					$('.style-section .style-step-5').hide();
	  					$('.quiz-tabs').show();
	  					$('.your-style').html('Based on our super fancy algorithm™, your main style is '+'<span>' +styleName[0] + '</span>');
	  					$('.style-slug').val(styleSlug[0]);

	  					console.log(styleName);
	  				}
	  			}
	    	});

		});



		$('#interior-design-quiz').on('click',  '.budget .item', function(e){
		// $('.needs-content').on('click',  '.needs-step-6 .item', function(e){
	    	e.preventDefault();

	    	var index = $(this).closest('.tab-content').next().index();
	        $(this).closest('.tab-content').removeClass('active');
	        $(this).closest('.tab-content').next().addClass('active');
	        $('.quiz-tabs-title > div').removeClass('active');
	        $('.quiz-tabs-title > div').eq(index).addClass('active');

	        $('.loading-designer').fadeIn();
	        $('.selected-designer').hide();
			$('.related-designers').hide();

	    	var loading_designer = `
	    	<div class="row">
	    		<div class="col-md-12 col-lg-6">
	    			<h3>We're searching for the perfect designers for you.</h3>
	    			<p>No Pressure: We will rematch you (or refund you) if you're not happy, with our happiness guarantee.</p>
	    		</div>
	    		<div class="col-md-12 col-lg-6">
	    			<div class="loader">
	    				<img src="${plugin_dir_url}assets/images/three-dots-loader.svg">
	    			</div>
	    		</div>
	    	</div>
	    	`;

	    	$('.loading-designer').html(loading_designer);

	    	var styleSlug = $('.style-slug').val();
		    var state = $('.needs-content #state').val();
		    var timing = $('.needs-content .time .item.active input').val();
		    var client_name = $('.client_name').val();
		    
		    var data = {
	    		action: 'designerSelect',
	    		styleSlug: styleSlug,
	    		state: state,
	    		timing: timing,
	    		client_name: client_name
	    	}


	    	$.ajax({
	    		url: ajax_object.ajaxurl,
	    		data: data,
	  			type: 'post',
	  			dataType: 'JSON',
	  			success: function(result){
	  				if(!result){
	  					return;
	  				}
	  				else{
	  					$('.loading-designer').fadeOut()
	  					$('.selected-designer').show().html(result['selected_designer']);
	  					$('.related-designers').show().html(result['related_designers']);

	  				}
	  			}
	    	});



		});



	});


})(jQuery)