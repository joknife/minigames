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
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin metus tortor, elementum id felis at, vulputate tincidunt ipsum. Vestibulum ornare eros vitae lacus sodales fermentum. Vestibulum dapibus elit vitae interdum lacinia. Quisque et diam a tortor scelerisque consectetur vel nec ante. Nunc sit amet orci nec elit ultricies tempor. Nulla tincidunt viverra diam vitae sodales. Aliquam at ultricies leo. Pellentesque quis diam et nulla tincidunt suscipit ac ac sem. Suspendisse pellentesque urna arcu, ac lacinia enim iaculis a. Pellentesque quis urna ac sem bibendum condimentum.</p>
			</div>
			</section>

		
			<button class = 'keys calc'>Калькулятор</button>
			<section id="calc">
				<div class="desc">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin metus tortor, elementum id felis at, vulputate tincidunt ipsum. Vestibulum ornare eros vitae lacus sodales fermentum. Vestibulum dapibus elit vitae interdum lacinia. Quisque et diam a tortor scelerisque consectetur vel nec ante. Nunc sit amet orci nec elit ultricies tempor. Nulla tincidunt viverra diam vitae sodales. Aliquam at ultricies leo. Pellentesque quis diam et nulla tincidunt suscipit ac ac sem. Suspendisse pellentesque urna arcu, ac lacinia enim iaculis a. Pellentesque quis urna ac sem bibendum condimentum.</p>
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
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin metus tortor, elementum id felis at, vulputate tincidunt ipsum. Vestibulum ornare eros vitae lacus sodales fermentum. Vestibulum dapibus elit vitae interdum lacinia. Quisque et diam a tortor scelerisque consectetur vel nec ante. Nunc sit amet orci nec elit ultricies tempor. Nulla tincidunt viverra diam vitae sodales. Aliquam at ultricies leo. Pellentesque quis diam et nulla tincidunt suscipit ac ac sem. Suspendisse pellentesque urna arcu, ac lacinia enim iaculis a. Pellentesque quis urna ac sem bibendum condimentum.</p>
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
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin metus tortor, elementum id felis at, vulputate tincidunt ipsum. Vestibulum ornare eros vitae lacus sodales fermentum. Vestibulum dapibus elit vitae interdum lacinia. Quisque et diam a tortor scelerisque consectetur vel nec ante. Nunc sit amet orci nec elit ultricies tempor. Nulla tincidunt viverra diam vitae sodales. Aliquam at ultricies leo. Pellentesque quis diam et nulla tincidunt suscipit ac ac sem. Suspendisse pellentesque urna arcu, ac lacinia enim iaculis a. Pellentesque quis urna ac sem bibendum condimentum.</p>
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
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin metus tortor, elementum id felis at, vulputate tincidunt ipsum. Vestibulum ornare eros vitae lacus sodales fermentum. Vestibulum dapibus elit vitae interdum lacinia. Quisque et diam a tortor scelerisque consectetur vel nec ante. Nunc sit amet orci nec elit ultricies tempor. Nulla tincidunt viverra diam vitae sodales. Aliquam at ultricies leo. Pellentesque quis diam et nulla tincidunt suscipit ac ac sem. Suspendisse pellentesque urna arcu, ac lacinia enim iaculis a. Pellentesque quis urna ac sem bibendum condimentum.</p>
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