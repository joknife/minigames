$(document).ready(function() {

//accordeon
	$('body').on('click','.keys', function() {

		var c = $(this).attr('class');
		var keys = c.split(" ");
		if ($('#' + keys[1]).css('display') == 'none') {
			$('#' + keys[1]).show(300);
		} else {
			$('#' + keys[1]).hide(300);
		}
	})
	
// calc implementation 

	$(".calc_button").click(function() {

		var button = $(this).text();

		if (button == 'C') {
			$('#calc_screen').attr("value",'');
			return;
		}

		var value = $('#calc_screen').attr('value');

		if (button == '=') {
			value = eval(value);
			$('#calc_screen').attr("value",value);
			return;
		};

		value += button;
		$('#calc_screen').attr('value',value);
	})//end click()

//nums implementation

	//init block

	var colors =["purple","fuchsia","teal","red","blue",
				"aqua","green","lime","olive","orange"];

	var TIME_SET = 60;

	var numbers=[], count = 1, time = TIME_SET;

	for (var i = 0; i <= 24; i++) { numbers[i] = i+1; }

	var cells = $('.nums_button');
	
	var color = 0, font_size = '';

	function shuffle(arr) {
    return arr.sort(function() {return 0.5 - Math.random()});
	}

	function getRandomInt(min,max) {
		return Math.floor(Math.random() * (max - min + 1)) + min;
	}

	// start the nums game

	$('#nums_start').click(function() {
		
		// init timer

		time = TIME_SET;
		window.timerId = window.setInterval( timer, 1000 ); 
		
		//init field

		shuffle(numbers);
		for (var i = cells.length - 1; i >= 0; i--) {

			color = getRandomInt(0,9);
			font_size = getRandomInt(100,250)+'%';

			$(cells[i]).text(
				numbers[i]
				).css(
				'color',colors[color]
				).css(
				'font-size', font_size);
		};


	})

	//game run
	function timer () {

		if (time <= 0) {
			loose();
			return;
		}

		if (count>25) {
			win();
			return;
		}
		time--;
		$('#nums_screen').attr('value',time);
		
	}

	function win () {
		$('#nums_screen').attr('value','Победа!');
	}

	function loose () {
		$('#nums_screen').attr('value','Не получилось!');
	}

	//nums cell click

	$('.nums_button').click(function() { 

		if ($(this).text() == count) {
			count++;
			$(this).css('background-color', 'red');
		} else {
			time -= 3;
		}
	})

//tictac implementation
	
	//init

	var tt_count = 1;
	var tt = ['O','X']
	var value = 'Ходит игрок : ' + tt[count%2];
	var win_matrix = [[0,1,2],[3,4,5],[6,7,8],
	 				  [0,3,6],[1,4,7],[2,5,8],
	 				  [0,4,8],[2,4,6]];
	
	

	$('#tt_screen').attr('value',value);

	function isWin () {// winner cheked

		var value ='';
	 	
	 	if (tt_count > 4) {

	 		
	 		var tt_field = $('.tt_button');
	 			
	 		
	 		for (var i = 0; i <= 7; i++) {
	 			if (($(tt_field[win_matrix[i][0]]).text() == tt[tt_count%2]) &&

	 				($(tt_field[win_matrix[i][0]]).text() == 
	 				$(tt_field[win_matrix[i][1]]).text()) && 

	 				($(tt_field[win_matrix[i][1]]).text() ==
	 				$(tt_field[win_matrix[i][2]]).text())) {

	 				value = 'Победа : ' + tt[tt_count%2];
	 				tt_count = 0;
	 				return value;
	 			}
	 			
 	 		}

	 	}
	
	 	tt_count++;
	 	value = 'Ходит игрок : ' + tt[tt_count%2];	 
		return value;
	}

	//click the cell

	$('.tt_button').click(function() {

		if (tt_count == 0) { return; }
		
		if ($(this).text() == '') {

			$(this).text(tt[tt_count%2]);
			//tt_count++;
			value = isWin();
			$('#tt_screen').attr('value',value);
		}	

	})

	// clear field

	$('#tt_clear').click(function () {

		var tt_field = $('.tt_button');

		for (var i = tt_field.length - 1; i >= 0; i--) {
			$(tt_field[i]).text('');
		}

		tt_count = 1;
		value = 'Ходит игрок : ' + tt[tt_count%2];
		$('#tt_screen').attr('value',value);
	})

//logic implementation

	var MAX_STEPS = 10;

	var l_count = 1;

	var hide_item = [];

	var items = ["rgb(255, 255, 255)", "rgb(0, 0, 0)", "rgb(255, 0, 0)",
				 "rgb(0, 255, 0)", "rgb(0, 0, 255)", "rgb(255, 255, 0)"];

	var click_item_id = '';

	$('#collection').hide();

	function checkout () {

		var answer = [];

		var win = 0;

		for(var i = 0; i<=3; i++ ){
			
			var color = ($("#" + l_count * 10 + i).css('background-color'));

			if (color == 'transparent'){ return null; }

			answer[i] = 'transparent';

			for (var j = 0; j < hide_item.length; j++) {

				if (color == hide_item[j]){

					if (i == j){

						answer[i] = "black";

						win++;

					} else {

						answer [i] = "white";
					}
				}
			};
		}

		if(win == 4) { return win;}

		return answer;
	}

	$('#logic_reset').click(function() {

		var j = null;

		$('.play_board').remove();

		$('.answer_board').remove();

		for (var i = 0, item = []; i < 5; i++) { item[i] = i; }

		l_count =1;

		var play_board = "<div class = 'play_board'>";

		for (var i = 0; i <= 3; i++) {
			//init hide_items	
			shuffle(item);

			j = item.pop();

			hide_item[i] = items[j];

			//creat play_items
			play_board += "<div class = 'item " + l_count + 
						  "' id = '" + l_count * 10 + i + "'></div>";
		}

		play_board += "</div>";

		$('#collection').before(play_board);

	})

	$('body').on('click','.item', function() {

		click_item_id = $(this).attr('id');

		if (Math.round(click_item_id/100) == l_count) {

			$('#collection').show();
		}

	})

	$('body').on('click','.coll_item',function() {
		var click_color = $(this).css('background-color');
		var item_color = $('#'+click_item_id).css('background-color');
		if (item_color == 'transparent') {

			$('#'+click_item_id).css('background-color',click_color);
			$(this).remove();

		} else {

			$('#'+click_item_id).css('background-color',click_color);
			$(this).css('background-color', item_color);
		}
		
		$('#collection').hide();

	})

	$('#logic_done').click(function() {

		var answer = checkout();

		if (answer === null) {

			alert('заполните все поля');
			return;
		} 

		if (answer == 4){

			alert ('Вы угадали!!');

			for (var i=1; i<=4; i++){
				$('#' + i).css('background-color', hide_item[i-1]);
			
			}
			return;
		}	

		l_count++;

		var answer_board = "<div class = 'answer_board'>";
		var play_board = "<div class = 'play_board'>";

		for(var i = 0; i <= 3; i++){

			answer_board += "<div class = 'answer_item' style = 'background-color: " +
						   answer[i] + "'></div>";

			play_board += "<div class = 'item " + l_count + 
						  "' id = '" + l_count * 10 + i + "'></div>";
		}

		answer_board += "</div>";
		play_board += "</div>";

		$('#collection').before(answer_board);
		$('#collection').before(play_board);
		$('.coll_item').remove();
		var coll_item = "";
		for (var i = 0; i < items.length; i++) {
			coll_item += "<div class = 'coll_item' id ='item" + i + "'></div";
			$('#collection').append(coll_item);
			$("#item" + i).css("background-color", items[i]);
			coll_item = '';
		}

	})

})//end ready()
