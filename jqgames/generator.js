// generate div.buttons for calc

var buttons = ['1','2','3','/',
			   '4','5','6','*',
			   '7','8','9','+',
			   '=','0','.','-'];

var button ='';

for (var i = 0; i <= buttons.length - 1; i++) {
	button = "<div class = 'calc_button' >" + buttons[i] + "</div>";
	$('#calc_field').append(button);
}

//generate div.buttons for nums

for (var i = 0; i <= 24; i++) {
		button = "<div class = 'nums_button' ></div>";
		$('#nums_start').before(button);
 }