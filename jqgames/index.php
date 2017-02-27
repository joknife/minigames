<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Simple games</title>
	<link rel="stylesheet" type="text/css" href="games.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>	
</head>
<body>
	<header>
		<div id="header">
			<a href="#"><img src="code.png"></a>
			<div id="logo"> 
				<h2>Мини игры  на jQuery</h2>
				<br>
				<p>Первый опыт</p>
			</div>
		</div>
	</header>

	<div id="content">
		
			<button class = 'keys intro'>Описание</button>
			<section id="intro">
			<div id="intro_field">
				<p>Этот сайт я сделал чтобы потреннироваться в программировании.
				Это мой первый сайт с ипользованием JQuery.Полистал до этого несколько курсов по HTML,CSS и JS. Ну и PHP. Кроме раздела "логика"" все идеи я взял из заданий этих курсов. Реализовал неокторые задания на чистом JS, но на JS работать с DOM сейчас не практично, поэому почитал/посмотрел про JQuery и постарался использовать его. Реализовал все что задумывал на данном этапе. Дальше попробую PHP + AJAX. В планах минимальный движок с регистрацией, чат и сетевые крестики нолики. </p>
			</div>
			</section>

		
			<button class = 'keys calc'>Калькулятор</button>
			<section id="calc">
				<div class="desc">
					<p>Калькулятор на js проще простого. Думал придется парсить самому, потом ифы/кейзы, но лень, ведь цель немного не в том. Поэтому тупо eval()</p>
				</div>
				<div id="calc_field">
				<div class = "calc_button" id="cls">C</div>
					<input id="calc_screen" type="text" value="" disabled>

					<!--here generator.js inserting div.buttons -->

				</div>
			</section>

		
			<button class = 'keys nums'>Цифры</button>
			<section id="nums">
			<div class="desc">
			<p>На поле каждый раз по разному генерируются цифры от 1 до 25. Цель -  нажимать по очереди на клетки с цифрами по порядку от 1 и до 25 за заданное время. Нажатие мимо клетки со следующей цифрой сокращает время на 3с. Удачи!</p>
			</div>
			<div id="nums_field">
				<input id="nums_screen" type="text" value="" disabled>

				<!--here generator.js inserting div.buttons -->

				<button id = 'nums_start' class="buttons">Начать!</button>
			</div>
		</section>	

		
			<button class = 'keys tictac'>Крестики нолики</button>
			<section id="tictac">
			<div class="desc" >
			<p>Классические крестики нолики 3х3. Хотел сделать многообразнее в плане размеров поля и условий выигрыша, но нет. Собираюсь реализовать это в сетевой игре.</p>
			</div>
			<div id="tictac_field">
				<input id="tt_screen" type="text" value="" disabled></input>
				<!--here generator.js inserting div.buttons -->
				<button id = 'tt_clear' class="buttons">Очистить!</button>
			</div>
		</section>

		
			<button class = 'keys logic'>Логика</button>
			<section id="logic">
			<div class="desc" >
			<p>Была у меня в детстве такая настольная игра. Дутство мое было так давно что играли в нее реально на столе без всяких компов. суть проста - нужно отгадать 4 цвета. Нажмая на пустые кружки вставляйте цвета. После нажатия готово выводится подсказка : черный кружок - этот цвет есть и он на этом месте; белый кружок - этот цвет есть, но на другом месте; серый кружок - этого цвета нет. Порядок кужков подсказки соответствует порядку в вашем ответе. Игра становится интересней если убрать это сооветсвие. То есть будет известно что какой то цвет на своем месте, какой то нет, но не будет известно какой. Будет время сделаю оба варианта..  </p>
			</div>
			<div id="logic_field">
				<button id="logic_reset" class="buttons">Заново!</button>
				<div class = "logic_board">
					<!--here generator.js inserting div.screen items -->

				</div>

				<!--here game.js inserting div.player -->

				<div id = 'collection'>
					
					<!--here generator.js inserting items collection-->
				</div>
				<button id="logic_done" class="buttons">Готово!</button>
				
			</div>
		</section>
	</div>

	<footer>
		
	</footer>


<script type="text/javascript" src="generator.js"></script>
<script type="text/javascript" src="games.js"></script>
</body>
</html>