// generate div.buttons for calc
$(document).ready(function(){
var buttons = ['1','2','3','/',
			   '4','5','6','*',
			   '7','8','9','+',
			   '=','0','.','-'];

var button ='';

for (var i = 0; i <= buttons.length - 1; i++) {
	button = "<div class = \'button' id = \'" + buttons[i] + "\'>" + buttons[i] + "</div>";
	$('#calc_field').append(button);
 }
})