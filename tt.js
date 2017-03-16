
//generate tic tac cells

var status = 0;
var move = '';
var size = 5;
var cell = '';
var sign = ['O', 'X', 'O'];

for (var i =1; i <= size*size; i++) {
	cell = "<div class = 'cell' id = '" + i + "'></div>" 
	$('#field').append(cell);
}

/* register in tt*/
function wait_next () {

	$('.cell').html('');
	
	$.ajax({
		url:"modules/reg.php",
		timout: 3000,
		success: function (data) {
			if (data[0] == 'Н') {
				clearInterval(waitID);
				window.runID = window.setInterval(run, 1000);
			}
			$('#info').html("<p>" + data + "</p>");
		},
		error: function () {
			$('#info').html('<p> ошибка сети</p>');
		}
	})
}
window.waitID = window.setInterval(wait_next, 1000);

function run() {

	if (status == 0) {

		$('#status').attr('value', 'Подождите');
		$.ajax({
			url:'modules/run.php',
			type: 'post',
			data: {'msg': 'status'},
			timout: 1000,
			success: function (data) {
					
					data = data.split(' ');
					move = data[1];
					status = data[0];
			},
			error: function () {
				$('#info').append('<p> ошибка сети</p>');
			}
		})
		return;
	}

	if (status == 1) {

		$('#status').attr('value', 'Ход другого игрока');
		$.ajax({
			url: 'modules/run.php',
			type: 'post',
			data: {'msg': 'wait'},
			timeout: 1000,
			success: function (data) {
				
					data = data.split(' ');

					if (data[0] == '0'){
						status = 0;
						move = '';
						clearInterval(window.runID);
						window.waitID = window.setInterval(wait_next, 1000);
					}

					if (data[0] == '5' && status != 5){

						var i = parseInt(move) + 1;
						$('#'+data[1]).html(sign[i]);
						
						clearInterval(window.runID);
						
						status = 6;
						loose();
						return;
					}

					if (data[0] == '2'){

						status = 2;

						if (data[1] > 0) {
						
							var i = parseInt(move) + 1;
							$('#'+data[1]).html(sign[i]);
						}

						$('#status').attr('value', 'Ваш ход!');
						clearInterval(window.runID);
					}				
			},
			error: function () {
				$('#info').append('<p> ошибка сети</p>');
			}
		})
	}

	if (status == 2) {

		$('#status').attr('value', 'Ваш ход!');
	}

	if (status == 5 || status == 6) {clearInterval(window.runID);}
}

$('body').on('click', '.cell', function () {
	
	if ($(this).text() != '' || status != 2 ) { return;}

	$(this).text(sign[move]);

	var id = $(this).attr('id');
	status = 1;

	window.runID = window.setInterval(run, 1000);
	
	$.ajax({
			url: 'modules/run.php',
			type: 'post',
			data: {'msg': 'move', 'move': id},
			timeout: 1000,
			success: function (data) {

				data = data.split(' ');

				if (data[0] == '0') {
					status = 0;
					move ='';
					clearInterval(window.runID);
					window.waitID = window.setInterval(wait_next, 1000);
				}

				if (data[0] == '5') {
					status = 5;
					clearInterval(window.runID);
					win();
					return;
				}

				if (data[0] == '1') {
					status = 1;
				}
							
			},
			error: function () {
				$('#info').append('<p> ошибка сети</p>');
			}
		})
})


function loose() {

	$('#status').attr('value', 'Вы пргоиграли!');
	$('#info').html("<h3> <a href = 'tictac'>Обновите страницу</a></h3>");
}

function win() {
	
	$('#status').attr('value', 'Вы выиграли!');	
	$('#info').html("<h3> <a href = 'tictac'>Обновите страницу</a></h3>");
}

function logout() {
	$.ajax({
		url:"modules/tt_out.php",
		timout: 3000,
		success: function (data) {
			if (data = 'ok') {
				window.location.replace('/');
			}
		},
		error: function () {
			$('#info').append('<p> ошибка сети</p>');
		}
	})
}
//$(document).ready( function () {

	
//})