var size = 5;

//generate tic tac cells
var cell = "<div class = 'cell'></div>";

for (var i =1; i <= size*size; i++) { 
	$('#field').append(cell);
}