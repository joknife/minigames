function login() {

	var name = $('#username').val();
	var pass = $('#pass').val();

	if ( name.length <= 0 ) {

		$('#hint').html("");
		$('#hint').html('введите имя');

	} else if (pass.length <= 0){

		$('#hint').html("");
		$('#hint').html('введите пароль');

	} else {

		$.ajax({
			url: 'modules/auth.php',
			type: 'post',
			data: {'name': name, 'pass': pass},
			timeout: 3000,
			error: function(){

				$('#hint').html("");
				$('#hint').html('Не удалось отправить');
			},
			success: function (data) {

				$('#hint').html("");
	
				if (data == "login") {

					$('#hint').html('log in');
					window.location.reload();

				} else {

					$('#hint').html(data);
				}
			}
		})
	}	
}

function showChat() {
	$.ajax({
		url: "modules/show_chat.php",
		timeout: 1000,
		success : function (data){
			$('#text').html(data);
			//.console.log(data);
		}
	})	
}
setInterval(showChat, 1000);
//document.write($('#name').text());

$('#msg').keypress(function (key) {
	
	if(key.which == 13){
		if ($('#msg').val() != ''){
			$.ajax({
				url: 'modules/send.php',
				type: 'post',
				timeout: 1000,
				data: {'name': $('#name').text(), 
						'text': $('#msg').val()},
				error: function (){
					$('#text').html('Ошибка сети');
				},
				success: function(data) {
					$('#msg').val('');
					if (data == 'logout'){
						window.location.reload();
					}
					if (data == "Error massage"){
						$('#text').append('<br>' + data);
				    } else {showChat();}
				}

			})
		}
	}
})