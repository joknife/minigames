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

 //generate div.buttons for tictac

 for (var i = 0; i <= 8; i++) {
		button = "<div class = 'tt_button' ></div>";
		$('#tt_clear').before(button);
 }

 //generate div.items for logic

 for (var i = 0; i <= 3; i++) {
		button = "<div class = 'item' id = '" + (i+1) + "''>?</div>";
		$('.logic_board').append(button);
}		

//generate div.collection for logic

var items = ["rgb(255, 255, 255)", "rgb(0, 0, 0)", "rgb(255, 0, 0)",
				 "rgb(0, 255, 0)", "rgb(0, 0, 255)", "rgb(255, 255, 0)"];
var coll_item = "";
for (var i = 0; i < items.length; i++) {
	coll_item += "<div class = 'coll_item' id ='item" + i + "'></div";
	$('#collection').append(coll_item);
	$("#item" + i).css("background-color", items[i]);
	coll_item = '';
}