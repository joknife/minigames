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
		<section id="itro">
			<button class = 'keys'>Описание</button>
			<div id="intro_field">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin metus tortor, elementum id felis at, vulputate tincidunt ipsum. Vestibulum ornare eros vitae lacus sodales fermentum. Vestibulum dapibus elit vitae interdum lacinia. Quisque et diam a tortor scelerisque consectetur vel nec ante. Nunc sit amet orci nec elit ultricies tempor. Nulla tincidunt viverra diam vitae sodales. Aliquam at ultricies leo. Pellentesque quis diam et nulla tincidunt suscipit ac ac sem. Suspendisse pellentesque urna arcu, ac lacinia enim iaculis a. Pellentesque quis urna ac sem bibendum condimentum.</p>
			</div>
		</section>

		
			<button class = 'keys'>Калькулятор</button>
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

		<section id="nums">
			<button class = 'keys'>Цифры</button>
			<div class="desc">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin metus tortor, elementum id felis at, vulputate tincidunt ipsum. Vestibulum ornare eros vitae lacus sodales fermentum. Vestibulum dapibus elit vitae interdum lacinia. Quisque et diam a tortor scelerisque consectetur vel nec ante. Nunc sit amet orci nec elit ultricies tempor. Nulla tincidunt viverra diam vitae sodales. Aliquam at ultricies leo. Pellentesque quis diam et nulla tincidunt suscipit ac ac sem. Suspendisse pellentesque urna arcu, ac lacinia enim iaculis a. Pellentesque quis urna ac sem bibendum condimentum.</p>
			</div>
			<div id="nums_field">
				<input id="nums_screen" type="text" value="" disabled>

				<!--here generator.js inserting div.buttons -->

				<button id = 'nums_start' >Начать!</button>
			</div>
		</section>	

		<section id="tictac">
			<button class = 'keys'>Крестики нолики</button>
			<div class="desc" >
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin metus tortor, elementum id felis at, vulputate tincidunt ipsum. Vestibulum ornare eros vitae lacus sodales fermentum. Vestibulum dapibus elit vitae interdum lacinia. Quisque et diam a tortor scelerisque consectetur vel nec ante. Nunc sit amet orci nec elit ultricies tempor. Nulla tincidunt viverra diam vitae sodales. Aliquam at ultricies leo. Pellentesque quis diam et nulla tincidunt suscipit ac ac sem. Suspendisse pellentesque urna arcu, ac lacinia enim iaculis a. Pellentesque quis urna ac sem bibendum condimentum.</p>
			</div>
			<div id="tictac_field">
				
			</div>
		</section>

		<section id="logic">
			<button class = 'keys'>Логика</button>
			<div class="desc" >
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin metus tortor, elementum id felis at, vulputate tincidunt ipsum. Vestibulum ornare eros vitae lacus sodales fermentum. Vestibulum dapibus elit vitae interdum lacinia. Quisque et diam a tortor scelerisque consectetur vel nec ante. Nunc sit amet orci nec elit ultricies tempor. Nulla tincidunt viverra diam vitae sodales. Aliquam at ultricies leo. Pellentesque quis diam et nulla tincidunt suscipit ac ac sem. Suspendisse pellentesque urna arcu, ac lacinia enim iaculis a. Pellentesque quis urna ac sem bibendum condimentum.</p>
			</div>
			<div id="logic_field">
				
			</div>
		</section>
	</div>

	<footer>
		
	</footer>


<script type="text/javascript" src="generator.js"></script>
<script type="text/javascript" src="games.js"></script>
</body>
</html>