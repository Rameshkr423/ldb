$('#datepickers').on('change', function() {
	var fromDate = $('#datepicker').val();
	var toDate = $(this).val();

	if(fromDate.length == '') {
		fromDate = $('.filter-from-date').attr('data-value');
	}
	
	var url = $('.filter-from-date').attr('data-url');

	$.ajaxSetup({
		headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
	});

	$.ajax({
		url : url,
		method: "post",
		data:{fromDate, toDate},
		dataType: "json",

		success:function(response)
		{
			var pending = processed = total = 0;
			var pendingPercent = processedPercent = 0;
			var pendingProb = processedProb = 0+' '+'%';
			
			if(response.filterCount.pending != '') {
				pending = response.filterCount.pending;
				total = total+pending;
			}

			if(response.filterCount.processed != '') {
				processed = response.filterCount.processed;
				total = total+processed;
			}
			
			if(total != 0) {
				pendingPercent = pending/total;
				processedPercent = processed/total;
				pendingPercentRound = (pendingPercent*100).toFixed(2);
				processedPercentRound = (processedPercent*100).toFixed(2);
				pendingProb = pendingPercentRound+ ' '+'%';
				processedProb = processedPercentRound+ ' '+'%';	
			}

			$('.total-circle-count').text(total);
			$('.pending-circle-count').text(pending);
			$('.processed-circle-count').text(processed);
			$('.pending-circle-count').next().text(pendingProb);
			$('.processed-circle-count').next().text(processedProb);

			$('#pending-circle').circleProgress({
			    value: pendingPercent,
			    size: 100,
			    thickness: 8,
			    fill: {
			      gradient: ["red"]
			    }
			});

			$('#processed-circle').circleProgress({
			    value: processedPercent,
			    size: 100,
			    thickness: 8,
			    fill: {
			      gradient: ["green"]
			    }
			});
		},
		error:function(error)
		{
			alert('fail');
		}

	})
});

$('.status-action').on('click', function(){
	$('.cm-loading').addClass('show');
	var block = $(this).attr('status-block');
	var transId = $(this).closest('tr').data("trans-id");
	
	if(transId == undefined) {
		transId = $(this).closest('ul').data("trans-id");
	} 
	
	$.ajaxSetup({
		headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
	});

	$.ajax({
		url : '/status-update',
		method: "get",
		data: {block,transId},
		dataType: "json",

		success : function(response)
		{
			$('.cm-loading').addClass('hide');
			location.reload(true);
			location.href = response.redirectUrl;
		},
		error : function(error)
		{
			alert('something went wrong');
		}
	})
});

$('.search-button').on('click', function() {

	if($('.search-box-radius').val() == '') {
		return false;
	}

	return true;
});

$('#export-datepickers').on('change', function() {
	var fromDate = $('#export-datepicker').val();
	var toDate = $(this).val();

	if(fromDate.length == '') {
		fromDate = $('.export-from').attr('data-value');
	}
	var url = $('.export-from').attr('data-url');

	$.ajaxSetup({
		headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
	});
	
	$.ajax({
		url : url,
		method: "post",
		data:{fromDate, toDate},
		dataType: "json",

		success:function(response)
		{
			var pending = approve = reject = shortlist = total = 0;

			if(response.filterCount.pending != '') {
				pending = response.filterCount.pending;
				total = total + pending;
			}

			if(response.filterCount.approve != '') {
				approve = response.filterCount.approve;
				total = total + approve;
			}

			if(response.filterCount.shortlist != '') {
				shortlist = response.filterCount.shortlist;
				total = total + shortlist;
			}

			if(response.filterCount.reject != '') {
				reject = response.filterCount.reject;
				total = total + reject;
			}

			$('.export-total').text(total);
			$('.export-reject').text(reject);
			$('.export-approve').text(approve);
			$('.export-shortlist').text(shortlist);
		},
		error:function(error)
		{
			alert('something went wrong');
		}

	});
});

$("input:file").change(function (){
    
    if ($(this).val() != '') {
        var fileName = $(this).val().split('\\').pop();
        $('.cibil-txt').text(fileName);
    }
});