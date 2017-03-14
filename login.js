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