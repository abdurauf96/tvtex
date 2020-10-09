$(document).ready(function(){

	$('body').delegate('.cat', 'click',  function(e){
		e.preventDefault();
		var id = $(this).data('id');

		$.ajax({
			headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    	},
			url : '/sortFaq',
			type: 'POST',
			data: {id:id},
			success: function(data){
				$('.news__right').html(data);
			}
			

		})
	})

		$('.vac_id').click(function(e){
			e.preventDefault();
		var vac_id = $(this).data('id');

		//$(this).children('a').addClass('active2');
		//$(this).siblings().children('a').removeClass('active2');
		$.ajax({
			headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    	},
			url : '/sortVac',
			type: 'POST',
			data: {vac_id:vac_id},
			success: function(data){
				$('#resVac').html(data);
			}	
		})
	  })

	$('.sort').on('change', function(e){
	  var tkan = [];
	  var type = [];
	  var size = [];
	  var plot = [];

	  $('.main_div').css('display', 'none');
	  $('.ajax_div').css('display', 'block');
	  $('.yana').css('display', 'none');

	  $(this).closest('.search__wrapper').find('.sort').each(function() {
	    if (this.checked) {
	      if (this.name=='tkan') {
	      	tkan.push(this.value);
	      }
	      if (this.name=='type') {
	      	type.push(this.value);
	      }
	      if (this.name=='size') {
	      	size.push(this.value);
	      }
	      if (this.name=='plotnost') {
	      	plot.push(this.value);
	      }
	    }
	  });

	   $.ajax({
		headers: {
	    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		url : '/sort_product',
		type: 'POST',
		data: {tkan:tkan, type:type, size:size, plot:plot},
		success: function(data){
			$('#resultSort').fadeOut(400, function(){
				$('#resultSort').html(data).fadeIn().delay(1500);
			});
		}	
	  })

	});

	$('.reset').on('click', function(){

		$('.main_div').css('display', 'block');
	  	$('.ajax_div').css('display', 'none');
	  	$('.yana').css('display', 'block');
		$(':radio').each(function () {
		    $(this).removeAttr('checked');
		    $('input[type="radio"]').prop('checked', false);
		})
	})

	$('.more').on('click', function(e){
		e.preventDefault();
		$('.ajax_div').css('display', 'block');
		$('.main_div').css('display', 'none');
		$('.yana').css('display', 'none');
		$.ajax({
			headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    	},
			url : '/more_product',
			type: 'POST',
			success: function(data){
				$('#resultSort').fadeOut(400, function(){
				   $('#resultSort').html(data).fadeIn().delay(1500);
				});
			}	
		})
	})
})

