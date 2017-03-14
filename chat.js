showChat();
showUsers();

function showChat() {
	$.ajax({
		url: "modules/show_chat.php",
		timeout: 1000,
		success : function (data){
			$('#text').html(data);
		}
	})	
}
setInterval(showChat, 3000);

function showUsers() {
	$.ajax({
		url:"modules/show_users.php",
		timout: 3000,
		success: function (data) {
			$('#list').html("Users list: <br>" + data);
		}
	})
}
setInterval(showUsers, 15000);

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