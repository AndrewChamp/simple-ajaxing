$(document).ready(function(){
	$("#submit").click(function(){
		var processor = $('.ajax');
		var inputData = $(processor).serialize() + '&file=' + $(processor).data('file');
		$.ajax({
			type : $(processor).attr('method'),
			url: 'ajax.php',
			//data: {data : inputData},
			data: inputData,
			dataType: "text",
			success: function(response){
				$('.ajax :input').attr('disabled', 'disabled');
				//$('.ajax').hide();
				$("#message").fadeIn().html(response);
				//setTimeout(function () {
				//	$('#message').fadeOut();
				//}, 5000);
			},
			error: function(){
				$("#message").fadeIn().html(response);
			}
		});
	});
});
