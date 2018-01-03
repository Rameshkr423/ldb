$(function() {
    $("#datepicker").datepicker({format: "yyyy-mm-dd"});
});

$(function() {
    $("#datepickers").datepicker({format: "yyyy-mm-dd"});
});

$(function() {
    $("#export-datepickers").datepicker({format: "yyyy-mm-dd"});
});

$(function() {
    $("#export-datepicker").datepicker({format: "yyyy-mm-dd"});
});

$('#datepicker').on('change', function() {
	var months = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
	var selectedMonthName = months[$("#datepicker").datepicker('getDate').getMonth()];
  $(this).datepicker('hide');
	var date = new Date($('#datepicker').val());
	var day = date.getDate();
	var year = date.getFullYear();
	var fullText = selectedMonthName+' '+year;
    var toDate = new Date($('#datepickers').val());
    var count = (toDate - date) / 1000 / 60 / 60 / 24;

    if(count < 0) {
    	alert('please select valid date');
    	return false;
    }

    $('.from-date').text(day);
    $('.from-month').text(fullText);

    if(count > 0){
    	$('.diff-days').text(count);
    }
});

$('#datepickers').on('change', function() {
	var months = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
	var selectedMonthName = months[$("#datepickers").datepicker('getDate').getMonth()];

	var date = new Date($('#datepickers').val());
	var day = date.getDate();
	var year = date.getFullYear();
	var fullText = selectedMonthName+' '+year;
	$(this).datepicker('hide');
    var fromDate = new Date($('#datepicker').val());
    
    var count = (date - fromDate) / 1000 / 60 / 60 / 24;
    
    if(count < 0) {
    	alert('please select valid date');
    	return false;
    }

    $('.to-date').text(day);
    $('.to-month').text(fullText);

    if(count > 0){
    	$('.diff-days').text(count);
    }
});

$('.trigger').on('click', function() {
    $('#datepicker').datepicker("show");
});

$('.triggers').on('click', function() {
    $('#datepickers').datepicker("show");
});

$('#pending-circle').circleProgress({
    value: $('.pending-circle-percent').attr('data-val'),
    size: 100,
    thickness: 8,
    animation: false,
    startAngle: 180.5,
    fill: {
      gradient: ["red"]
    }
});

$('#processed-circle').circleProgress({
    value: $('.processed-circle-percent').attr('data-val'),
    size: 100,
    thickness: 8,
    animation: false,
    startAngle: 180.5,
    fill: {
      gradient: ["green"]
    }
});

$('#average-circle').circleProgress({
    value: $('.average-circle').attr('data-value'),
    size: 170,
    thickness: 14,
    startAngle: 180.5,
    fill: {
      gradient: ["green"]
    }
});

$('#longest-circle').circleProgress({
    value: $('.longest-circle').attr('data-value'),
    size: 170,
    thickness: 14,
    startAngle: 180.5,
    fill: {
      gradient: ["green"]
    }
});

$('#line-progress-1').LineProgressbar({
  percentage: $('#line-progress-1').attr('data-val'),
  fillBackgroundColor: '#3498db',
  backgroundColor: '#EEEEEE',
  height: '5px',
  duration: 0
});

$('#line-progress-2').LineProgressbar({
  percentage: $('#line-progress-2').attr('data-val'),
  fillBackgroundColor: '#c3b248',
  backgroundColor: '#EEEEEE',
  height: '5px',
  duration: 0
});

$('#line-progress-3').LineProgressbar({
  percentage: $('#line-progress-3').attr('data-val'),
  fillBackgroundColor: '#E86C6C',
  backgroundColor: '#EEEEEE',
  height: '5px',
  duration: 0
});

$('#line-progress-4').LineProgressbar({
  percentage: $('.credit-score').attr('data-val'),
  fillBackgroundColor: '#32CB5B',
  backgroundColor: '#EEEEEE',
  width: '80%'
});

$('.export-trigger').on('click', function() {
    $('#export-datepicker').datepicker("show");
});

$('.export-triggers').on('click', function() {
    $('#export-datepickers').datepicker("show");
});

$('#export-datepicker').on('change', function() {
  var date = new Date($('#export-datepicker').val());
    $(this).datepicker('hide');
    var toDate = new Date($('#export-datepickers').val());
    var count = (toDate - date) / 1000 / 60 / 60 / 24;

    if(count < 0) {
      alert('please select valid date');
      return false;
    }
    var day = date.getDate();
    var month = date.getMonth()+1;
    var year = date.getFullYear();
    var fullDate = day+'/'+month+'/'+year;
    $('.export-from-date').text(fullDate);

    if(count > 0){
      $('.export-diff-days').text(count+' days');
    }
});

$('#export-datepickers').on('change', function() {
  var date = new Date($('#export-datepickers').val());

  $(this).datepicker('hide');
    var fromDate = new Date($('#export-datepicker').val());
    
    var count = (date - fromDate) / 1000 / 60 / 60 / 24;
    
    if(count < 0) {
      alert('please select valid date');
      return false;
    }
    var day = date.getDate();
    var month = date.getMonth()+1;
    var year = date.getFullYear();
    var fullDate = day+'/'+month+'/'+year;
    $('.export-to-date').text(fullDate);

    if(count > 0){
      $('.export-diff-days').text(count+' days');
    }
});



