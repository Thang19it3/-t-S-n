$(function () {
        $.datepicker.regional['date'] = {
            closeText: 'Chiudi',
            prevText: '&#x3c;Prec',
            nextText: 'Succ&#x3e;',
            currentText: 'Oggi',
            monthNames: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6',
                'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
            monthNamesShort: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6',
                'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
			      dayNames: ['Chủ nhật', 'Thứ 2', 'Thứ 3', 'Thứ 4', 
   			    'Thứ 5', 'Thứ 6', 'Thứ 7'],
            dayNamesShort: ['CN', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7'],
            dayNamesMin: ['CN', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7'],
            weekHeader: 'Sm',
            dateFormat: 'dd-mm-yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
 
        $.datepicker.setDefaults($.datepicker.regional['date']);
 
        $("#datepicker").datepicker({
  			dateFormat: 'dd-mm-yy'
  		});
        
});


$("#loaisan").click(function() {
	$(".filter_value_loaisan").val($("#loaisan").val());
	$(".filter_value_loaisan").text($("#loaisan").val()+" người");
});
$("#loaisan1").click(function() {
	$(".filter_value_loaisan").val($("#loaisan1").val());
	$(".filter_value_loaisan").text($("#loaisan1").val()+" người");
});
$("#loaisan2").click(function() {
	$(".filter_value_loaisan").val($("#loaisan2").val());
	$(".filter_value_loaisan").text($("#loaisan2").val()+" người");
});

$("#t1").click(function() {
	$(".filter_value_time").val($("#t1").val());
	$(".filter_value_time").text($("#t1").val()+" giờ");
});
$("#t2").click(function() {
	$(".filter_value_time").val($("#t2").val());
	$(".filter_value_time").text($("#t2").val()+" giờ");
});
$("#t3").click(function() {
	$(".filter_value_time").val($("#t3").val());
	$(".filter_value_time").text($("#t3").val()+" giờ");
});

$(document).ready(function(){
    $('.timepicker').timepicker({
    	timeFormat: "HH:mm",
        interval: 30,
        minTime: "00:00am",
        maxTime: "23:00pm",
        startTime: "00",
        dynamic: !0,
        dropdown: !0,
        scrollbar: !0,
        zindex: 20,
	});
});


$("#btn-group .btn-group[role='group'] a").on('click', function(){ 
    $(this).siblings().removeClass('active') 
    $(this).addClass('active'); 
	}) 

function get() {
    let a = $(".active").data("date");
    let b = $(".active").data("day");
    let c = $("#datepicker").val();

    if($(".active").data("date") == null) {
        $(".day_booking").val(c);
    } else {
        $(".day_booking").val(a);
    }
    $(".day").val(b);
}

function get2() {
    let a = $("#venue_type").val();
    let b = $("#date").val();
    let c = $("#begin_time_2").val();
    let d = $("#how_long").val();
    console.log(a);
    console.log(b);
    console.log(c);
    console.log(d);
}
