$(document).ready(function() {
	
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

})//end ready()
